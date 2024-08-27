<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title', 'description', 'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
