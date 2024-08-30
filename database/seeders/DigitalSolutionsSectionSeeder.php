<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigitalSolutionsSectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('digital_solutions_section')->insert([
            [
                'title' => 'Master Laravel\'s Power',
                'subtitle' => 'Backend Excellence',
                'description' => 'Leverage Laravel to build secure, scalable, and high-performance web applications.',
                'image_path' => 'images/laravel.png',
            ],
            [
                'title' => 'Vue.js for Dynamic Interfaces',
                'subtitle' => 'Frontend Innovation',
                'description' => 'Utilize Vue.js to create engaging, interactive user experiences.',
                'image_path' => 'images/vuejs.png',
            ],
            [
                'title' => 'React for Performance',
                'subtitle' => 'Frontend Speed',
                'description' => 'Adopt React for building fast, responsive web applications with high performance.',
                'image_path' => 'images/react.png',
            ],
            [
                'title' => 'API Integrations',
                'subtitle' => 'Seamless Connectivity',
                'description' => 'Integrate with popular APIs to enhance functionality and user experience.',
                'image_path' => 'images/api.png',
            ],
            [
                'title' => 'Automated Workflows',
                'subtitle' => 'Efficiency Boost',
                'description' => 'Streamline operations and save time with automated workflows.',
                'image_path' => 'images/automation.png',
            ],
            [
                'title' => 'Security Monitoring',
                'subtitle' => 'Advanced Protection',
                'description' => 'Monitor and protect your applications with robust security measures.',
                'image_path' => 'images/security.png',
            ],
        ]);
    }
}
