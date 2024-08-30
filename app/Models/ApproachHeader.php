<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApproachHeader extends Model
{
    use HasFactory;

    // Table associated with the model
    protected $table = 'approach_headers';

    // The attributes that are mass assignable
    protected $fillable = [
        'header_text'
    ];
}
