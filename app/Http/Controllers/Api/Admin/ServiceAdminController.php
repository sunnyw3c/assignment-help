<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceAdminController extends Controller
{
    /** JSON columns on services, sent by the panel as arrays. */
    private const SERVICE_JSON = ['features', 'academic_levels', 'subjects'];

    /** JSON columns on service_details. */
    private const DETAIL_JSON = [
        'what_we_offer', 'pricing_tiers', 'process_steps', 'sample_topics',
        'testimonials', 'faqs', 'citation_styles', 'deliverables', 'guarantees',
    ];

    public function index()
    {
        return response()->json([
            'services' => Service::orderBy('display_order')->orderBy('id')->get(),
        ]);
    }

    public function show(int $id)
    {
        // The edit screen reads $service['details'], so the relation is
        // eager-loaded rather than fetched in a second call.
        $service = Service::with('details')->findOrFail($id);

        return response()->json(['service' => $service]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateService($request, null);

        $validated['slug'] = $validated['slug'] ?? Str::slug($validated['name']);

        if (Service::where('slug', $validated['slug'])->exists()) {
            return response()->json(['message' => "A service with the slug \"{$validated['slug']}\" already exists."], 422);
        }

        $service = Service::create($validated);

        return response()->json(['ok' => true, 'service' => $service], 201);
    }

    public function update(Request $request, int $id)
    {
        $service = Service::findOrFail($id);

        $validated = $this->validateService($request, $id);

        // The panel strips empty values before sending, so only what it
        // actually submitted is written; anything absent keeps its value.
        $service->update($validated);

        return response()->json(['ok' => true, 'service' => $service->fresh()]);
    }

    public function updateDetails(Request $request, int $id)
    {
        $service = Service::findOrFail($id);

        $data = $request->only(array_merge(
            ['hero_title', 'hero_subtitle', 'hero_description'],
            self::DETAIL_JSON,
        ));

        foreach (self::DETAIL_JSON as $field) {
            if (array_key_exists($field, $data)) {
                $data[$field] = $this->asArray($data[$field]);
            }
        }

        $detail = ServiceDetail::updateOrCreate(['service_id' => $service->id], $data);

        return response()->json(['ok' => true, 'detail' => $detail]);
    }

    // ─── Helpers ──────────────────────────────────────────────────────────────

    private function validateService(Request $request, ?int $ignoreId): array
    {
        $rules = [
            'name'                 => [$ignoreId === null ? 'required' : 'sometimes', 'string', 'max:255'],
            'slug'                 => ['nullable', 'string', 'max:255'],
            'icon'                 => ['nullable', 'string', 'max:255'],
            'short_description'    => ['nullable', 'string'],
            'long_description'     => ['nullable', 'string'],
            'base_price_per_page'  => ['nullable', 'numeric', 'min:0'],
            'turnaround_min_hours' => ['nullable', 'integer', 'min:0'],
            'turnaround_max_hours' => ['nullable', 'integer', 'min:0'],
            'rating'               => ['nullable', 'numeric', 'between:0,5'],
            'orders_completed'     => ['nullable', 'integer', 'min:0'],
            'is_active'            => ['nullable', 'boolean'],
            'display_order'        => ['nullable', 'integer'],
            'meta_title'           => ['nullable', 'string', 'max:255'],
            'meta_description'     => ['nullable', 'string'],
            'features'             => ['nullable'],
            'academic_levels'      => ['nullable'],
            'subjects'             => ['nullable'],
        ];

        $validated = $request->validate($rules);

        foreach (self::SERVICE_JSON as $field) {
            if (array_key_exists($field, $validated)) {
                $validated[$field] = $this->asArray($validated[$field]);
            }
        }

        return $validated;
    }

    /**
     * The panel decodes JSON textareas before sending, but a raw JSON string
     * can still arrive from a direct API call — accept either.
     */
    private function asArray(mixed $value): array
    {
        if (is_array($value)) {
            return $value;
        }

        if (is_string($value) && $value !== '') {
            return json_decode($value, true) ?? [];
        }

        return [];
    }
}
