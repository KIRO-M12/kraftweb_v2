<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'heading',
        'additions',
        'bold_text', // Add this line
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
