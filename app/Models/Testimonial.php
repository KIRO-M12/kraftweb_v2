<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'client_name', 'client_position', 'testimonial', 'client_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
