<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = [
        'desktop_logo', 'mobile_logo', 'nav_links', 'languages', 'sign_in_link', 'join_link', 'promo_video_link'
    ];

    protected $casts = [
        'nav_links' => 'array',
        'languages' => 'array',
    ];
}
