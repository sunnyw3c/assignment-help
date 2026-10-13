<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsSection extends Model
{
    protected $fillable = ['page', 'type', 'label', 'data', 'is_active', 'sort_order'];

    protected function casts(): array
    {
        return [
            'data'      => 'array',
            'is_active' => 'boolean',
        ];
    }
}
