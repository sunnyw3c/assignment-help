<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class File extends Model
{
    protected $fillable = [
        'fileable_id',
        'fileable_type',
        'original_name',
        'file_path',
        'file_type',
        'file_size',
    ];

    /**
     * Get the parent fileable model (Assignment, Chat, Question, etc.)
     */
    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get formatted file size (e.g., "125.5 KB", "2.3 MB")
     */
    public function getFileSizeFormattedAttribute(): string
    {
        if (!$this->file_size) {
            return 'Unknown';
        }

        $bytes = $this->file_size;

        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        }

        return $bytes . ' bytes';
    }

    /**
     * Get full URL to the file
     */
    public function getFileUrlAttribute(): string
    {
        return asset('storage/' . $this->file_path);
    }

    /**
     * Get file icon based on file type
     */
    public function getFileIconAttribute(): string
    {
        if (!$this->file_type) {
            return '📄';
        }

        return match (true) {
            str_contains($this->file_type, 'pdf') => '📄',
            str_contains($this->file_type, 'word') || str_contains($this->file_type, 'document') => '📝',
            str_contains($this->file_type, 'sheet') || str_contains($this->file_type, 'excel') => '📊',
            str_contains($this->file_type, 'presentation') || str_contains($this->file_type, 'powerpoint') => '📊',
            str_contains($this->file_type, 'image') => '🖼️',
            str_contains($this->file_type, 'video') => '🎥',
            str_contains($this->file_type, 'audio') => '🎵',
            str_contains($this->file_type, 'zip') || str_contains($this->file_type, 'rar') || str_contains($this->file_type, 'compressed') => '📦',
            str_contains($this->file_type, 'text') => '📃',
            default => '📄',
        };
    }

    /**
     * Get file extension
     */
    public function getFileExtensionAttribute(): string
    {
        return pathinfo($this->original_name, PATHINFO_EXTENSION);
    }
}
