<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceDetailsSeeder extends Seeder
{
    public function run()
    {
        DB::table('service_details')->insert([
            [
                'service_id' => 1, // Assuming 1 corresponds to 'Digital Strategies'
                'header' => 'Strategic Solutions',
                'subheader' => 'Tailored to Your Needs',
                'content' => 'We develop strategies that are customized to meet your specific business objectives, ensuring growth and success.',
            ],
            [
                'service_id' => 2, // Assuming 2 corresponds to 'Data-Driven Insights'
                'header' => 'Empower Your Decisions',
                'subheader' => 'Data-Driven',
                'content' => 'Use data-driven insights to guide your decisions and drive your business towards greater success.',
            ],
            [
                'service_id' => 3, // Assuming 3 corresponds to 'Innovative Design'
                'header' => 'Design for Impact',
                'subheader' => 'Innovative Design',
                'content' => 'Stand out with designs that not only look stunning but also convert effectively.',
            ],
            [
                'service_id' => 4, // Assuming 4 corresponds to 'SEO Mastery'
                'header' => 'Enhance Online Visibility',
                'subheader' => 'SEO Mastery',
                'content' => 'Our advanced SEO techniques are designed to enhance your online visibility, driving more traffic and conversions.',
            ],
            // Add more service details as needed...
        ]);
    }
}
