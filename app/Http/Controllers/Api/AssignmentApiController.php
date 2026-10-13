<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Assignment;
use App\Http\Resources\AssignmentResource;
use App\Services\OrderPricingService;

class AssignmentApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Assignment::where('user_id', $request->user()->id);

        if ($request->has('order_number')) {
            $query->where('order_number', $request->order_number);
        }

        $assignments = $query->latest()->get();

        return AssignmentResource::collection($assignments);
    }

    public function show(Request $request, Assignment $assignment)
    {
        if ($assignment->user_id !== $request->user()->id) {
            abort(404);
        }

        return new AssignmentResource($assignment);
    }

    /**
     * Statuses during which the student may still amend their own brief.
     * Once an expert is assigned the brief is frozen so the work in progress
     * cannot shift underneath them.
     */
    private const EDITABLE_STATUSES = ['new', 'pending'];

    /**
     * Keys allowed inside the specific_requirements JSON blob.
     */
    private const REQUIREMENT_KEYS = [
        'reference_style',
        'software_language',
        'course_code',
        'duration',
        'duration_unit',
        'login_required',
        'online_service_type',
    ];

    public static function isEditable(Assignment $assignment): bool
    {
        return in_array(strtolower((string) $assignment->status), self::EDITABLE_STATUSES, true);
    }

    /**
     * Let the owning student amend their brief while the order is still unstarted.
     */
    /**
     * Quote a proposed set of edits without saving anything.
     *
     * The edit form calls this as the student types so the new total can be
     * shown before they commit to it.
     */
    public function previewPrice(Request $request, Assignment $assignment, OrderPricingService $pricing)
    {
        if ($assignment->user_id !== $request->user()->id) {
            abort(403);
        }

        $validated = $request->validate([
            'pages' => 'sometimes|integer|min:1|max:100',
            'academic_level' => 'sometimes|nullable|string|max:100',
            'subject' => 'sometimes|nullable|string|max:100',
        ]);

        return response()->json(
            $this->priceChange($assignment, $validated, $pricing)
        );
    }

    /**
     * Compare the order's current total against what the proposed edits would cost.
     *
     * @return array{changed: bool, current: float, new: float, difference: float, amount_due: float}
     */
    private function priceChange(Assignment $assignment, array $overrides, OrderPricingService $pricing): array
    {
        $current = round((float) $assignment->budget, 2);
        $quote = $pricing->quoteForAssignment($assignment, $overrides);
        $new = $quote['total'];
        $paid = (float) ($assignment->amount_paid ?? 0);

        return [
            'changed' => abs($new - $current) >= 0.01,
            'current' => $current,
            'new' => $new,
            'difference' => round($new - $current, 2),
            'amount_due' => max(0, round($new - $paid, 2)),
            'list' => $quote['list'],
            'saving' => $quote['saving'],
        ];
    }

    /**
     * Let the owning student amend their brief while the order is still unstarted.
     *
     * When an edit moves the price the request is rejected with the new quote
     * unless it carries confirm_price_change, so the total can never change
     * without the student having seen it first.
     */
    public function update(Request $request, Assignment $assignment, OrderPricingService $pricing)
    {
        if ($assignment->user_id !== $request->user()->id) {
            abort(403);
        }

        if (! self::isEditable($assignment)) {
            return response()->json([
                'success' => false,
                'message' => 'This order is already in progress and can no longer be edited. Message your expert to request a change.',
            ], 422);
        }

        $validated = $request->validate([
            'pages' => 'sometimes|integer|min:1|max:100',
            'description' => 'sometimes|nullable|string|max:20000',
            'academic_level' => 'sometimes|nullable|string|max:100',
            'subject' => 'sometimes|nullable|string|max:100',
            'requirements' => 'sometimes|array',
            'requirements.*' => 'nullable',
            'confirm_price_change' => 'sometimes|boolean',
        ]);

        $updates = collect($validated)
            ->only(['pages', 'description', 'academic_level', 'subject'])
            ->all();

        // Merge requirement keys onto the existing blob so unknown/legacy keys survive.
        if ($request->has('requirements')) {
            $existing = json_decode((string) $assignment->specific_requirements, true);
            $existing = is_array($existing) ? $existing : [];

            $incoming = collect($validated['requirements'] ?? [])
                ->only(self::REQUIREMENT_KEYS)
                ->all();

            if (array_key_exists('login_required', $incoming)) {
                $incoming['login_required'] = filter_var(
                    $incoming['login_required'], FILTER_VALIDATE_BOOLEAN
                );
            }
            if (array_key_exists('duration', $incoming) && $incoming['duration'] !== null) {
                $incoming['duration'] = max(1, (int) $incoming['duration']);
            }

            $updates['specific_requirements'] = json_encode(array_merge($existing, $incoming));
        }

        // Level, subject and pages all feed the quote. Never move the price
        // without an explicit confirmation from the student.
        $price = $this->priceChange($assignment, $updates, $pricing);

        if ($price['changed'] && ! ($validated['confirm_price_change'] ?? false)) {
            return response()->json([
                'success' => false,
                'requires_confirmation' => true,
                'price' => $price,
                'message' => 'These changes update your total.',
            ], 409);
        }

        if ($price['changed']) {
            $updates['budget'] = $price['new'];
            $updates['amount_due'] = $price['amount_due'];
        }

        // Keep the order's existing words-per-page rate when the page count moves.
        if (array_key_exists('pages', $updates)) {
            $currentPerPage = (int) round(
                (int) $assignment->word_count / max(1, (int) $assignment->pages)
            );

            if (! in_array($currentPerPage, [
                OrderPricingService::WORDS_PER_PAGE_DOUBLE,
                OrderPricingService::WORDS_PER_PAGE_SINGLE,
            ], true)) {
                $currentPerPage = OrderPricingService::WORDS_PER_PAGE_DOUBLE;
            }

            $updates['word_count'] = (int) $updates['pages'] * $currentPerPage;
        }

        $assignment->update($updates);

        return new AssignmentResource($assignment->fresh(['files', 'assignmentFiles']));
    }


    public function uploadFile(Request $request, Assignment $assignment)
    {
        if ($assignment->user_id !== $request->user()->id) {
            abort(403);
        }

        $request->validate([
            'files' => 'required|array',
            'files.*' => 'file|max:20480', // 20MB max per file
        ]);

        $uploadedFiles = [];

        foreach ($request->file('files') as $file) {
            $filePath = $file->store('assignments', 'public');
            
            $newFile = \App\Models\File::create([
                'fileable_id' => $assignment->id,
                'fileable_type' => get_class($assignment),
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $filePath,
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ]);

            $uploadedFiles[] = [
                'id' => 'new_' . $newFile->id,
                'name' => $newFile->original_name,
                'url' => asset('storage/' . $newFile->file_path),
                'size' => $newFile->file_size_formatted,
                'type' => $newFile->file_type,
                'icon' => $newFile->file_icon,
            ];
        }

        return response()->json([
            'success' => true,
            'message' => count($uploadedFiles) . ' file(s) uploaded successfully',
            'files' => $uploadedFiles
        ]);
    }
}
