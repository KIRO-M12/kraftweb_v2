<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'monthly_price',
        'annual_price',
        'lifetime_price',
        'tier',
        'features',
        'additional_services',
        'support_level',
        'max_users',
        'tags',
        'restrictions',
    ];

    protected $casts = [
        'features' => 'array',
        'additional_services' => 'array',
        'tags' => 'array',
        'restrictions' => 'array',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class)
                    ->withPivot('services', 'discount', 'status', 'filters')
                    ->withTimestamps();
    }
}
