<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Assignment extends Model
{
    protected $fillable = [
        'user_id',
        'service_type',
        'service_id',
        'subject',
        'title',
        'deadline',
        'pages',
        'file_path', // Keep for backward compatibility, but use files relationship
        'description',
        'budget',
        'academic_level',
        'difficulty',
        'assignment_type',
        'citation_style',
        'word_count',
        'specific_requirements',
    ];

    /**
     * Get the service that owns this assignment.
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Get the user that owns this assignment.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all files for this assignment (old system - specific table).
     * Kept for backward compatibility with existing data.
     */
    public function assignmentFiles(): HasMany
    {
        return $this->hasMany(AssignmentFile::class);
    }

    /**
     * Get all files for this assignment (new polymorphic system).
     * Use this for new file uploads - works with the reusable file upload component.
     */
    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
