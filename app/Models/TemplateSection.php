<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSection extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'description', 'buttons'];

    protected $casts = [
        'buttons' => 'array', // Cast buttons as an array for easier manipulation
    ];
}
