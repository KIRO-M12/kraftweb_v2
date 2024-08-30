<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HubHeader extends Model
{
    use HasFactory;

    protected $fillable = ['header_title', 'header_subtitle'];
}
