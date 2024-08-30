<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSection extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'description', 'buttons'];

    // Define any accessors or methods as needed
    protected $casts = [
        'buttons' => 'array', // Automatically cast to array
    ];
}
