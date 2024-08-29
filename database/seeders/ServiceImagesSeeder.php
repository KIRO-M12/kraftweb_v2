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
                'image_url' => 'http://127.0.0.1:8000/images/upload/images/frontent/services/phil-desforges-D5t1Ns-vhmk-unsplash.jpg',
                'alt_text' => 'Strategy Planning',
                'background_color' => '#ab7fe6', // Soft Purple
            ],
            [
                'service_id' => 2, // 'Data-Driven Insights'
                'image_url' => 'http://127.0.0.1:8000/images/upload/images/frontent/services/assaas.jpg',
                'alt_text' => 'Data-Driven Insights',
                'background_color' => '#57cbc6', // Teal/Aqua
            ],
            [
                'service_id' => 3, // 'Innovative Design'
                'image_url' => 'http://127.0.0.1:8000/images/upload/images/frontent/services/ssssssss.webp',
                'alt_text' => 'Innovative Designs',
                'background_color' => '#7f8fe6', // Cool Blue
            ],
            [
                'service_id' => 4, // 'SEO Mastery'
                'image_url' => 'http://127.0.0.1:8000/images/upload/images/frontent/services/ongoing-seo.jpg',
                'alt_text' => 'SEO Optimization',
                'background_color' => '#82b97e', // Soft Green
            ],
            // Add more service images as needed...
        ]);
    }
}
