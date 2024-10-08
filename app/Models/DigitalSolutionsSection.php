<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalSolutionsSection extends Model
{
    use HasFactory;

    protected $table = 'digital_solutions_section';

    protected $fillable = [
        'header_title',
        'header_description',
        'title',
        'subtitle',
        'description',
        'image_path',
    ];
}
