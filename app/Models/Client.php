<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name', 'email', 'company', 'message',
    ];

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }
}
