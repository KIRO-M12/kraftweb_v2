<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplateSectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('template_sections')->insert([
            [
                'title' => 'Craft Unique Websites',
                'subtitle' => 'Custom-built Solutions',
                'description' => 'Shape your digital presence with custom-built solutions using Laravel, WordPress, and PHP.',
                'buttons' => json_encode([
                    ['label' => 'All', 'target' => '.templates-all'],
                    ['label' => 'Blog', 'target' => '.templates-blog'],
                    ['label' => 'Ecommerce', 'target' => '.templates-ecommerce'],
                    ['label' => 'Development', 'target' => '.templates-development'],
                    ['label' => 'Social Media', 'target' => '.templates-social-media'],
                    ['label' => 'Email', 'target' => '.templates-email'],
                    ['label' => 'Marketing', 'target' => '.templates-marketing'],
                    ['label' => 'Voiceover', 'target' => '.templates-voiceover'],
                    ['label' => 'YouTube', 'target' => '.templates-youtube'],
                    ['label' => 'RSS Feeds', 'target' => '.templates-rss'],
                    ['label' => 'Academic', 'target' => '.templates-academic'],
                    ['label' => 'Business', 'target' => '.templates-business'],
                    ['label' => 'Customer Service', 'target' => '.templates-customer-service'],
                    ['label' => 'Entertainment', 'target' => '.templates-entertainment'],
                    ['label' => 'Website Content', 'target' => '.templates-website'],
                    ['label' => 'Advertising', 'target' => '.templates-advertising'],
                    ['label' => 'Languages', 'target' => '.templates-languages'],
                    ['label' => 'Fitness & Health', 'target' => '.templates-fitness-health'],
                    ['label' => 'Creative Writing', 'target' => '.templates-writer'],
                    ['label' => 'Miscellaneous', 'target' => '.templates-misc'],
                ]),
            ],
        ]);
    }
}
