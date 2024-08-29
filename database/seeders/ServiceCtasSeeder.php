<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCtasSeeder extends Seeder
{
    public function run()
    {
        DB::table('service_ctas')->insert([
            [
                'service_id' => 1, // 'Digital Strategies'
                'cta_title' => 'Plan, Execute, Succeed.',
                'cta_subtitle' => 'Strategically Aligned for Success.',
            ],
            [
                'service_id' => 2, // 'Data-Driven Insights'
                'cta_title' => 'Analyze, Optimize, Succeed.',
                'cta_subtitle' => 'Empowered by Data.',
            ],
            [
                'service_id' => 3, // 'Innovative Design'
                'cta_title' => 'Design, Innovate, Thrive.',
                'cta_subtitle' => 'Creativity at Its Best.',
            ],
            [
                'service_id' => 4, // 'SEO Mastery'
                'cta_title' => 'Rank, Reach, Convert.',
                'cta_subtitle' => 'Visibility that Works.',
            ],
            // Add more CTA details as needed...
        ]);
    }
}
