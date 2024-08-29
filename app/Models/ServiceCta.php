<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCta extends Model
{
    use HasFactory;

    protected $fillable = [
        'cta_title',
        'cta_subtitle',
        'service_id',
    ];

    /**
     * Get the service that owns the CTA.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
