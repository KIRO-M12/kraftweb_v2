<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'queue', 'payload', 'attempts', 'reserved_at', 'available_at', 'created_at',
    ];

    public $timestamps = false; // If you're using UNIX timestamps for created_at and other fields
}
