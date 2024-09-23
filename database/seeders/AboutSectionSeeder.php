<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutSection;

class AboutSectionSeeder extends Seeder
{
    public function run()
    {
        AboutSection::create([
            'highlighted_text_poster' => 'About Us',
            'main_title' => 'Shaping the future 🏔️',
            'main_image' => 'images/blog/test/1.png',
            'main_content_intro' => 'Whether you’re a content creator, business owner, or student, our text generator is an essential tool for boosting your productivity.',
            'main_content_detail' => 'At MagicAI, we are passionate about harnessing the power of artificial intelligence to unlock limitless creativity and efficiency.',
            'additional_sections' => json_encode([
                [
                    'tag' => 'Who Are We',
                    'title' => 'AI Generators 1',
                    'content_main' => 'At MagicAI, we are passionate about harnessing the power of artificial intelligence to unlock limitless creativity and efficiency.',
                    'content_detail' => 'Our cutting-edge AI Generators are designed to revolutionize the way you create, streamline your workflows, and supercharge your productivity.',
                    'paragraphs' => [
                        'Our mission is to empower individuals and businesses to unleash their creative potential and achieve extraordinary results.',
                        'We believe that AI has the ability to augment human capabilities, enhance decision-making processes, and accelerate innovation.',
                        'By developing state-of-the-art AI Generators, we aim to democratize access to advanced AI technologies, enabling users from all backgrounds to excel in their creative endeavors.',
                    ]
                ],
                [
                    'tag' => 'Invite a Friend',
                    'title' => 'AI Generators 2',
                    'content_main' => 'We pride ourselves on offering AI Generators that are unmatched in their quality, versatility, and ease of use.',
                    'content_detail' => 'Here’s what sets us apart from the competition:',
                    'paragraphs' => [
                        'With our AI Generators, the possibilities are endless...',
                        'Join our community of innovators, creators, and forward-thinkers who are leveraging the power of AI to revolutionize their industries.',
                        'Ready to experience the future of creativity? Sign up now and embark on an exciting adventure of limitless possibilities.',
                    ]
                ]
            ]),
            'icons' => json_encode([
                'images/upload/Path-143406.svg',
                'images/upload/Path-143406.svg',
                'images/upload/Path-143406.svg',
                'images/upload/Path-143406.svg',
                'images/upload/Path-143406.svg'
            ]),
            'references' => json_encode([
                ['text' => 'Browse documentation', 'link' => '#'],
                ['text' => 'Submit a ticket', 'link' => '#']
            ]),
            'is_active' => true,
        ]);

    }
}
