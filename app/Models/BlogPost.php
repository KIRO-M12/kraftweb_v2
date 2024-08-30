<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = ['blog_section_id', 'title', 'excerpt', 'image_path', 'author', 'published_at', 'slug'];
}
