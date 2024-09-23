<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalSolutionsHeader extends Model
{
    use HasFactory;

    protected $table = 'digital_solutions_header';

    protected $fillable = [
        'header_title',
        'header_description',
    ];
}
