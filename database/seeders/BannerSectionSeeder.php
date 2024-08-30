<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BannerSection;

class BannerSectionSeeder extends Seeder
{
    public function run()
    {
        BannerSection::create([
            'tag_title' => 'Empower Your',
            'tag_subtitle' => 'Vision with Strategic Digital Craftsmanship',
            'main_title' => 'Shape your',
            'rotating_titles' => json_encode(['Digital Future', 'Path to Success', 'Strategic Advantage']),
            'description' => 'Partner with us to create a tailored approach to meet your unique business goals and scale your digital presence.',
            'video_url' => 'https://youtu.be/galNNnEcK7I',
            'tag_1' => 'Explore Our Work'
        ]);
    }
}
