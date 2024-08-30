<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DigitalSolutionsSection extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'digital_solutions_section';

    // Define the fillable properties to allow mass assignment
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image_path'
    ];

    // Define any relationships if needed, for example, if it has related items
    // public function relatedItems()
    // {
    //     return $this->hasMany(RelatedItem::class);
    // }
}
