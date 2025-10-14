<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignmentService extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'short_description',
        'long_description',
        'base_price_per_page',
        'turnaround_min_hours',
        'turnaround_max_hours',
        'rating',
        'orders_completed',
        'features',
        'academic_levels',
        'subjects',
        'is_active',
        'display_order',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'features' => 'array',
        'academic_levels' => 'array',
        'subjects' => 'array',
        'base_price_per_page' => 'decimal:2',
        'rating' => 'decimal:1',
        'is_active' => 'boolean',
        'turnaround_min_hours' => 'integer',
        'turnaround_max_hours' => 'integer',
        'orders_completed' => 'integer',
        'display_order' => 'integer',
    ];

    /**
     * Get the detail information for this service.
     */
    public function details()
    {
        return $this->hasOne(AssignmentServiceDetail::class);
    }

    /**
     * Get all assignments for this service.
     */
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    /**
     * Scope a query to only include active services.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order services.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order')->orderBy('name');
    }

    /**
     * Get the turnaround time as a formatted string.
     */
    public function getTurnaroundAttribute()
    {
        if ($this->turnaround_min_hours < 24 && $this->turnaround_max_hours < 24) {
            return "{$this->turnaround_min_hours}-{$this->turnaround_max_hours} hours";
        } elseif ($this->turnaround_min_hours >= 24 && $this->turnaround_max_hours >= 24) {
            $minDays = $this->turnaround_min_hours / 24;
            $maxDays = $this->turnaround_max_hours / 24;
            return "{$minDays}-{$maxDays} days";
        } else {
            $minHours = $this->turnaround_min_hours;
            $maxDays = $this->turnaround_max_hours / 24;
            return "{$minHours} hours-{$maxDays} days";
        }
    }

    /**
     * Get the formatted price.
     */
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->base_price_per_page, 2) . '/page';
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
