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
        'order_number',
        'service_type',
        'service_id',
        'subject',
        'title',
        'deadline',
        'pages',
        'word_count',
        'description',
        'academic_level',
        'difficulty',
        'assignment_type',
        'budget',
        'original_price',
        'discount_code',
        'payment_status',
        'amount_paid',
        'amount_due',
        'tutor_id',
        'tutor_deadline',
        'specific_requirements',
        'status',
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
     * Get all messages for this assignment.
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
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
