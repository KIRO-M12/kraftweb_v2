<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'subheader',
        'service_id',
    ];

    /**
     * Get the service that owns the detail.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
