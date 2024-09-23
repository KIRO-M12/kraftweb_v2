<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceImagesSeeder extends Seeder
{
    public function run()
    {
        DB::table('service_images')->insert([
            [
                'service_id' => 1, // 'Digital Strategies'
                'image_url' => 'images/upload/images/frontent/services/digital-strategies.png',
                'alt_text' => 'Strategy Planning',
                'background_color' => '#fff', // Soft Purple
                // 'background_color' => '#3287c0', // Soft Purple
                // 'background_color' => '#ab7fe6', // Soft Purple
            ],
            [
                'service_id' => 2, // 'Data-Driven Insights'
                'image_url' => 'images/upload/images/frontent/services/data-driven-insights.png',
                'alt_text' => 'Data-Driven Insights',
                'background_color' => '#fff', // Teal/Aqua
                // 'background_color' => '#bbe9ff', // Teal/Aqua
                // 'background_color' => '#57cbc6', // Teal/Aqua
            ],
            [
                'service_id' => 3, // 'Innovative Design'
                'image_url' => 'images/upload/images/frontent/services/innovative-design.png',
                'alt_text' => 'Innovative Designs',
                'background_color' => '#fff', // Cool Blue
                // 'background_color' => '#2fd2cb', // Cool Blue
                // 'background_color' => '#7f8fe6', // Cool Blue
            ],
            [
                'service_id' => 4, // 'SEO Mastery'
                'image_url' => 'images/upload/images/frontent/services/SEO-mastery.png',
                'alt_text' => 'SEO Optimization',
                'background_color' => '#fff', // Soft Green
                // 'background_color' => '#8a7be2', // Soft Green
                // 'background_color' => '#82b97e', // Soft Green
            ],
            // Add more service images as needed...
        ]);
    }
}
