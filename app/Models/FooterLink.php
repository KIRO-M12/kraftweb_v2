<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterLink extends Model
{
    use HasFactory;

    protected $fillable = ['footer_section_id', 'platform', 'link', 'icon'];

    public function footerSection()
    {
        return $this->belongsTo(FooterSection::class);
    }
}
