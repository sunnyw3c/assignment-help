<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CmsRevision extends Model
{
    protected $fillable = ['page', 'action', 'summary', 'user_id', 'user_name', 'old_data', 'new_data'];

    protected function casts(): array
    {
        return [
            'old_data' => 'array',
            'new_data' => 'array',
        ];
    }
}
