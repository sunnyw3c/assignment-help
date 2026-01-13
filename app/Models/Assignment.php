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
        'service_id',
        'academic_level',
        'citation_style',
        'word_count',
        'specific_requirements',
    ];

    /**
     * Get the service that owns this assignment.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
