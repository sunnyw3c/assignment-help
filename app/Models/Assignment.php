<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'subject',
        'title',
        'deadline',
        'pages',
        'file_path',
        'description',
        'budget',
        'assignment_service_id',
        'academic_level',
        'citation_style',
        'word_count',
        'specific_requirements',
    ];

    /**
     * Get the assignment service that owns this assignment.
     */
    public function assignmentService()
    {
        return $this->belongsTo(AssignmentService::class);
    }
}
