<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FailedJob extends Model
{
    protected $fillable = [
        'uuid', 'connection', 'queue', 'payload', 'exception', 'failed_at',
    ];

    public $timestamps = false; // If you're using UNIX timestamps for created_at and other fields
}
