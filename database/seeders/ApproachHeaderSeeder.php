<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApproachHeader;

class ApproachHeaderSeeder extends Seeder
{
    public function run()
    {
        ApproachHeader::create([
            'header_text' => 'Our Approach to Elevating Your Business'
        ]);
    }
}
