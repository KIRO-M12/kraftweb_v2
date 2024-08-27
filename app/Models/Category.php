<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'tags',
        'is_active',
    ];

    protected $casts = [
        'tags' => 'array',
    ];

    public function servicePlans()
    {
        return $this->belongsToMany(ServicePlan::class)
                    ->withPivot('services', 'discount', 'status', 'filters')
                    ->withTimestamps();
    }
}
