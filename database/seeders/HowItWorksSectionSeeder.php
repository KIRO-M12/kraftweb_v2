<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HowItWorksSection;

class HowItWorksSectionSeeder extends Seeder
{
    public function run()
    {
        HowItWorksSection::create([
            'banner_title' => 'How It Works',
            'background_color' => '#4384ea',
            'trusted_companies_text' => 'Trusted by these amazing companies',
            'trusted_companies_logos' => json_encode([
                'uploads/2023/08/nike.svg',
                'uploads/2023/08/Path-133531.svg',
                'uploads/2023/08/Path-46878.svg',
                'uploads/2023/08/volkswagen-1.svg'
            ]),
            'intro_text' => 'At MagicAI, we are passionate about harnessing the power of artificial intelligence...',
            'steps' => json_encode([
                ['step_number' => 1, 'title' => 'Select a Template', 'description' => 'Our mission is to empower...'],
                ['step_number' => 2, 'title' => 'Explain your idea', 'description' => 'AI generators are sophisticated...'],
                ['step_number' => 3, 'title' => 'Done!', 'description' => 'By developing state-of-the-art AI...']
            ]),
            'references' => json_encode([
                ['text' => 'Browse documentation', 'link' => '#'],
                ['text' => 'Submit a ticket', 'link' => '#']
            ]),
            'image_path' => 'uploads/2023/08/pag2.png',
            'additional_sections' => json_encode([
                'invite_text' => 'Invite a Friend',
                'affiliate_system' => 'Affiliate System.',
                'affiliate_details' => 'We pride ourselves on offering AI Generators that are unmatched...'
            ]),
            'is_active' => true
        ]);
    }
}
