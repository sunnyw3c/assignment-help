<?php

namespace App\Services;

use App\Models\Assignment;
use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OrderSubmissionService
{
    public const PENDING_ORDER_SESSION_KEY = 'pending_order';

    public function createAssignment(array $data, int $userId): Assignment
    {
        return Assignment::create([
            'order_number' => $this->generateOrderNumber(),
            'service_type' => $data['service_type'] ?? null,
            'service_id' => $data['service_id'] ?? null,
            'subject' => $data['subject'],
            'title' => $data['title'],
            'deadline' => $data['deadline'],
            'pages' => $data['pages'],
            'word_count' => $data['word_count'] ?? null,
            'description' => $data['description'] ?? null,
            'academic_level' => $data['academic_level'] ?? null,
            'difficulty' => $data['difficulty'] ?? null,
            'assignment_type' => $data['assignment_type'] ?? null,
            'specific_requirements' => $this->buildSpecificRequirements($data),
            'budget' => $data['budget'] ?? null,
            'user_id' => $userId,
        ]);
    }

    public function createPendingPayload(array $validated, Request $request, string $email): array
    {
        return [
            'email' => Str::lower($email),
            'data' => Arr::except($validated, ['email']),
            'files' => $this->storePendingUploadedFiles($request),
        ];
    }

    public function createFromPendingPayload(array $pendingOrder, User $user): ?Assignment
    {
        if (Str::lower($pendingOrder['email'] ?? '') !== Str::lower($user->email)) {
            return null;
        }

        $assignment = $this->createAssignment($pendingOrder['data'], $user->id);
        $this->attachPendingFiles($assignment, $pendingOrder['files'] ?? []);

        return $assignment;
    }

    public function attachUploadedFiles(Request $request, Assignment $assignment): void
    {
        foreach ($this->uploadedFiles($request) as $file) {
            $this->createFileRecord($assignment, [
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $file->store('assignments', 'public'),
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ]);
        }
    }

    private function storePendingUploadedFiles(Request $request): array
    {
        $pendingFiles = [];

        foreach ($this->uploadedFiles($request) as $file) {
            $pendingFiles[] = [
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $file->store('pending-orders', 'local'),
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ];
        }

        return $pendingFiles;
    }

    private function attachPendingFiles(Assignment $assignment, array $pendingFiles): void
    {
        foreach ($pendingFiles as $file) {
            if (empty($file['file_path']) || ! Storage::disk('local')->exists($file['file_path'])) {
                continue;
            }

            $extension = pathinfo($file['original_name'] ?? '', PATHINFO_EXTENSION);
            $fileName = Str::uuid().($extension ? ".{$extension}" : '');
            $publicPath = "assignments/{$fileName}";

            Storage::disk('public')->put($publicPath, Storage::disk('local')->get($file['file_path']));
            Storage::disk('local')->delete($file['file_path']);

            $this->createFileRecord($assignment, [
                'original_name' => $file['original_name'] ?? $fileName,
                'file_path' => $publicPath,
                'file_type' => $file['file_type'] ?? null,
                'file_size' => $file['file_size'] ?? null,
            ]);
        }
    }

    /**
     * @return array<int, UploadedFile>
     */
    private function uploadedFiles(Request $request): array
    {
        $files = [];

        if ($request->hasFile('file')) {
            $files[] = $request->file('file');
        }

        if ($request->hasFile('files')) {
            $files = array_merge($files, Arr::wrap($request->file('files')));
        }

        return array_values(array_filter($files));
    }

    private function createFileRecord(Assignment $assignment, array $file): void
    {
        File::create([
            'fileable_id' => $assignment->id,
            'fileable_type' => $assignment::class,
            'original_name' => $file['original_name'],
            'file_path' => $file['file_path'],
            'file_type' => $file['file_type'] ?? null,
            'file_size' => $file['file_size'] ?? null,
        ]);
    }

    private function buildSpecificRequirements(array $data): ?string
    {
        $requirements = [];

        if (! empty($data['specific_requirements'])) {
            $decoded = json_decode($data['specific_requirements'], true);

            if (is_array($decoded)) {
                $requirements = $decoded;
            } else {
                $requirements['notes'] = $data['specific_requirements'];
            }
        }

        if (! empty($data['phone'])) {
            $requirements['contact_phone'] = trim(($data['country_code'] ?? '').' '.$data['phone']);
        }

        return $requirements === [] ? null : json_encode($requirements);
    }

    private function generateOrderNumber(): string
    {
        do {
            $orderNumber = date('ymd').random_int(1000, 9999);
        } while (Assignment::where('order_number', $orderNumber)->exists());

        return $orderNumber;
    }
}
