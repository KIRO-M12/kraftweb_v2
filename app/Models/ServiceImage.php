<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'alt_text',
        'image_path',  // Ensure this matches the actual column name used in migration (you had 'image_url' in the seeders).
        'service_id',
    ];

    /**
     * Get the service that owns the image.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
