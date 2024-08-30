<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'heading_additions_1',
        'heading_additions',
        'description',
        'cta_text',
        'cta_link',
        'footer_note'
    ];

    public function links()
    {
        return $this->hasMany(FooterLink::class);
    }
}
