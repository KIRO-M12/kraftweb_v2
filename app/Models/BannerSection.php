<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BannerSection extends Model
{
    protected $fillable = [
        'tag_title', 'tag_subtitle', 'main_title', 'rotating_titles', 'description', 'video_url', 'tag_1'
    ];

    protected $casts = [
        'rotating_titles' => 'array', // Ensure this is cast as an array
    ];
}
