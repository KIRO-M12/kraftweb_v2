<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqSection extends Model
{
    use HasFactory;

    protected $fillable = ['header', 'sub_header', 'title', 'description'];

    public function items()
    {
        return $this->hasMany(FaqItem::class);
    }
}
