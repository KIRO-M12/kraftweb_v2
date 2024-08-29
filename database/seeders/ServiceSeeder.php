<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Digital Strategies', //Personalized Digital Strategies
                'data_target' => 'card_selector_1',
                'description' => 'Tailored strategies to meet your business goals and ensure growth.',
                'icon' => 'icon-path-or-class', // Replace with the actual path or icon class
                'tier' => 'basic',
                'status' => 'active',
                'discount' => null,
            ],
            [
                'name' => 'Data-Driven Insights',
                'data_target' => 'card_selector_2',
                'description' => 'Utilize comprehensive data analysis to guide your business decisions.',
                'icon' => 'icon-path-or-class', // Replace with the actual path or icon class
                'tier' => 'standard',
                'status' => 'active',
                'discount' => 'Save 30%', // Example discount
            ],
            [
                'name' => 'Innovative Design',
                'data_target' => 'card_selector_3',
                'description' => 'Create compelling designs that are both aesthetically pleasing and functional.',
                'icon' => 'icon-path-or-class', // Replace with the actual path or icon class
                'tier' => 'premium',
                'status' => 'active',
                'discount' => null,
            ],
            [
                'name' => 'SEO Mastery',
                'data_target' => 'card_selector_4',
                'description' => 'Enhance your website’s visibility with advanced SEO techniques.',
                'icon' => 'icon-path-or-class', // Replace with the actual path or icon class
                'tier' => 'premium',
                'status' => 'active',
                'discount' => null,
            ],
        ]);
    }
}
