<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FooterSection;
use App\Models\FooterLink;

class FooterSectionSeeder extends Seeder
{
    public function run()
    {
        $footerSection = FooterSection::create([
            'heading' => 'KraftWeb',
            'heading_additions_1' => 'Invest wiser.',
            'heading_additions' => 'Join our community today.',
            'description' => 'Maximize your business potential with our tailored digital solutions.',
            'cta_text' => 'Get Started',
            'cta_link' => 'https://example.com/join',
            'footer_note' => '© 2024 KraftWeb. All content for demo purposes.'
        ]);

        // Create footer links
        $links = [
            ['platform' => 'LinkedIn', 'link' => '#', 'icon' => 'linkedin-icon'],
            ['platform' => 'Telegram', 'link' => '#', 'icon' => 'telegram-icon'],
            ['platform' => 'Instagram', 'link' => '#', 'icon' => 'instagram-icon'],
            ['platform' => 'Facebook', 'link' => '#', 'icon' => 'facebook-icon'],
        ];

        foreach ($links as $link) {
            FooterLink::create(array_merge($link, ['footer_section_id' => $footerSection->id]));
        }
    }
}
