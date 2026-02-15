<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AssignmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'order_number' => $this->order_number,
            'title' => $this->title,
            'subject' => $this->subject,
            'service_type' => $this->service_type,
            'deadline' => $this->deadline,
            'pages' => $this->pages,
            'budget' => $this->budget,
            'original_price' => $this->original_price,
            'payment_status' => $this->payment_status ?? 'unpaid',
            'amount_paid' => $this->amount_paid ?? 0,
            'amount_due' => $this->amount_due ?? 0,
            'status' => $this->status ?? 'Pending',
            'academic_level' => $this->academic_level,
            'description' => $this->description,
            'specific_requirements' => $this->specific_requirements,
            'files' => collect()
                ->concat($this->files->map(fn($f) => [
                    'id' => 'new_' . $f->id,
                    'name' => $f->original_name,
                    'url' => asset('storage/' . $f->file_path),
                    'size' => $f->file_size_formatted,
                    'type' => $f->file_type,
                    'icon' => $f->file_icon,
                ]))
                ->concat($this->assignmentFiles->map(fn($f) => [
                    'id' => 'legacy_' . $f->id,
                    'name' => $f->original_name,
                    'url' => asset('storage/' . $f->file_path),
                    'size' => $f->file_size_formatted,
                    'type' => $f->file_type,
                    'icon' => $this->getIconForType($f->file_type),
                ]))
                ->when($this->file_path, function ($collection) {
                    return $collection->push([
                        'id' => 'single_' . $this->id,
                        'name' => basename($this->file_path),
                        'url' => asset('storage/' . $this->file_path),
                        'size' => 'N/A',
                        'type' => 'N/A',
                        'icon' => '📄',
                    ]);
                })
                ->unique('url')
                ->values(),
            'created_at' => $this->created_at ? $this->created_at->format('Y-m-d H:i:s') : null,
            'updated_at' => $this->updated_at ? $this->updated_at->format('Y-m-d H:i:s') : null,
        ];
    }
    
    /**
     * Get icon for file type.
     */
    private function getIconForType(?string $type): string
    {
        if (!$type) return '📄';
        
        return match (true) {
            str_contains($type, 'pdf') => '📄',
            str_contains($type, 'word') || str_contains($type, 'document') => '📝',
            str_contains($type, 'sheet') || str_contains($type, 'excel') => '📊',
            str_contains($type, 'image') => '🖼️',
            str_contains($type, 'zip') || str_contains($type, 'rar') || str_contains($type, 'compressed') => '📦',
            default => '📄',
        };
    }
}
