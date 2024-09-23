<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'highlighted_text_poster',
        'main_title',
        'main_content',
        'main_image',
        'poster_title',
        'poster_text',
        'additional_highlights',
        'icons',
        'references',
        'is_active',
    ];

    protected $casts = [
        'main_content' => 'array',
        'poster_text' => 'array',
        'additional_highlights' => 'array',
        'icons' => 'array',
        'references' => 'array',
    ];
}
