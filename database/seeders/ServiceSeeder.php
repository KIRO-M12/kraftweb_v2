<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Digital Strategies',
                'data_target' => 'card_selector_1',
                'description' => 'Tailored strategies to meet your business goals.',
                'icon' => 'icon-path-or-class',
                'tier' => 'basic',
                'is_active' => true,
                'discount' => null,
            ],
            [
                'name' => 'Data-Driven Insights',
                'data_target' => 'card_selector_2',
                'description' => 'Use data insights to guide your business decisions.',
                'icon' => 'icon-path-or-class',
                'tier' => 'standard',
                'is_active' => true,
                'discount' => 'Save 30%',
            ],
            [
                'name' => 'Innovative Design',
                'data_target' => 'card_selector_3',
                'description' => 'Create designs that are visually appealing and effective.',
                'icon' => 'icon-path-or-class',
                'tier' => 'premium',
                'is_active' => true,
                'discount' => null,
            ],
            [
                'name' => 'SEO Mastery',
                'data_target' => 'card_selector_4',
                'description' => 'Boost your search engine rankings with expert SEO.',
                'icon' => 'icon-path-or-class',
                'tier' => 'premium',
                'is_active' => true,
                'discount' => null,
            ],
            [
                'name' => 'Free Consultation',
                'data_target' => 'card_selector_5',
                'description' => 'Get a free consultation to explore your business needs.',
                'icon' => 'icon-path-or-class',
                'tier' => 'free',
                'is_active' => true,
                'discount' => null,
            ],
        ]);
    }
}
