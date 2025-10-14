<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignmentServiceDetail extends Model
{
    protected $fillable = [
        'assignment_service_id',
        'hero_title',
        'hero_subtitle',
        'hero_description',
        'what_we_offer',
        'pricing_tiers',
        'process_steps',
        'sample_topics',
        'testimonials',
        'faqs',
        'citation_styles',
        'deliverables',
        'guarantees',
    ];

    protected $casts = [
        'what_we_offer' => 'array',
        'pricing_tiers' => 'array',
        'process_steps' => 'array',
        'sample_topics' => 'array',
        'testimonials' => 'array',
        'faqs' => 'array',
        'citation_styles' => 'array',
        'deliverables' => 'array',
        'guarantees' => 'array',
    ];

    /**
     * Get the assignment service that owns this detail.
     */
    public function assignmentService()
    {
        return $this->belongsTo(AssignmentService::class);
    }
}
