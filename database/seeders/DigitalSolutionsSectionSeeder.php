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
                'image_path' => 'images/upload/images/frontent/tools/v6sP-test.png',
                // 'image_path' => 'images/upload/images/frontent/tools/laravel.png',
            ],
            [
                'title' => 'Vue.js for Dynamic Interfaces',
                'subtitle' => 'Frontend Innovation',
                'description' => 'Utilize Vue.js to create engaging, interactive user experiences.',
                'image_path' => 'images/upload/images/frontent/tools/Payments100.jpg',
                // 'image_path' => 'images/upload/images/frontent/tools/vuejs.png',
            ],
            [
                'title' => 'React for Performance',
                'subtitle' => 'Frontend Speed',
                'description' => 'Adopt React for building fast, responsive web applications with high performance.',
                'image_path' => 'images/upload/images/frontent/tools/NZBW-multilingual.png',
                // 'image_path' => 'images/upload/images/frontent/tools/react.png',
            ],
            [
                'title' => 'API Integrations',
                'subtitle' => 'Seamless Connectivity',
                'description' => 'Integrate with popular APIs to enhance functionality and user experience.',
                'image_path' => 'images/upload/images/frontent/tools/RAhq-affiliate-system.png',
                // 'image_path' => 'images/upload/images/frontent/tools/api.png',
            ],
            [
                'title' => 'Automated Workflows',
                'subtitle' => 'Efficiency Boost',
                'description' => 'Streamline operations and save time with automated workflows.',
                'image_path' => 'images/upload/images/frontent/tools/mPWB-easy-export.png',
                // 'image_path' => 'images/upload/images/frontent/tools/automation.png',
            ],
            [
                'title' => 'Security Monitoring',
                'subtitle' => 'Advanced Protection',
                'description' => 'Monitor and protect your applications with robust security measures.',
                'image_path' => 'images/upload/images/frontent/tools/rIwa-support-platform.png',
                // 'image_path' => 'images/upload/images/frontent/tools/security.png',
            ],
        ]);
    }
}
