<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',        // Title of the template
        'category',     // Category to filter templates (e.g., ecommerce, blog, etc.)
        'description',  // Description of the template
        'icon',         // SVG icon or image URL
        'bg_color',     // Background color for the template card
    ];

    // Define any relationships here if needed in the future
}
