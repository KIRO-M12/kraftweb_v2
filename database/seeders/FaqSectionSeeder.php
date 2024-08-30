<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FaqSection;
use App\Models\FaqItem;

class FaqSectionSeeder extends Seeder
{
    public function run()
    {
        $section = FaqSection::create([
            'header' => 'FAQ',
            'sub_header' => 'Help Center',
            'title' => 'Questions You Might Have',
            'description' => 'We provide clarity on how our marketing services can propel your business forward.'
        ]);

        FaqItem::create([
            'faq_section_id' => $section->id,
            'question' => 'How do you tailor marketing strategies to specific industries?',
            'answer' => 'We analyze industry trends and audience behavior to craft bespoke marketing strategies that resonate with your target market, ensuring maximum impact and ROI.',
        ]);

        FaqItem::create([
            'faq_section_id' => $section->id,
            'question' => 'What makes your SEO approach different?',
            'answer' => 'Our SEO strategy focuses on both technical optimization and content relevance, ensuring your site ranks higher and reaches the right audience organically.',
        ]);

        FaqItem::create([
            'faq_section_id' => $section->id,
            'question' => 'How do you ensure that our brand voice is maintained across platforms?',
            'answer' => 'We collaborate closely with your team to understand your brand voice and ensure it\'s consistently reflected in all content, from social media to blogs and beyond.',
        ]);
    }
}
