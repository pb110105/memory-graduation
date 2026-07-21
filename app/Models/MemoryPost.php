<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemoryPost extends Model
{
    protected $fillable = [
        'sender_name',
        'message',
        'image_path',
        'likes_count',
    ];
}