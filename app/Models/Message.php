<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'assignment_id',
        'sender_id',
        'receiver_role',
        'body',
        'type',
        'is_read',
    ];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
