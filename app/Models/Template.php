<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'description', 'icon', 'bg_color'];

    // Add any relationships or custom methods if needed
}
