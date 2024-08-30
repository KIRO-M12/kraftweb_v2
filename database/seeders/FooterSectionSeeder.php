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
            'additions' => json_encode([
                'Invest wiser.',
                'Grow stronger.',
                'Achieve success.',

            ]),
            'bold_text' => 'Join our community today.',
            'description' => 'Maximize your business potential with our tailored digital solutions.',
            'cta_text' => 'Get Started',
            'cta_text' => 'Get Started',
            'cta_link' => 'https://KraftWeb.com/join',
            'footer_note' => '© ' . now()->year . ' KraftWeb. All rights reserved.'
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
// "Invest wiser, grow stronger, achieve success."
// "Invest wiser, grow stronger, thrive endlessly."
