<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HowItWorksSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'banner_title',
        'background_color',
        'trusted_companies_text',
        'trusted_companies_logos',
        'intro_text',
        'steps',
        'references',
        'image_path',
        'additional_sections',
        'is_active'
    ];

    protected $casts = [
        'trusted_companies_logos' => 'array',
        'steps' => 'array',
        'references' => 'array',
        'additional_sections' => 'array',
    ];
}
