<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalHubFeature extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'icon'];
}
