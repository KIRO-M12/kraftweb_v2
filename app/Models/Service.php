<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'data_target',
        'description',
        'icon',
        'tier',
        'status',
        'discount',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the details for the service.
     */
    public function details()
    {
        return $this->hasMany(ServiceDetail::class);
    }

    /**
     * Get the CTAs for the service.
     */
    public function ctas()
    {
        return $this->hasMany(ServiceCta::class);
    }

    /**
     * Get the images for the service.
     */
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
}
