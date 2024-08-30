<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApproachSection;

class ApproachSectionSeeder extends Seeder
{
    public function run()
    {
        ApproachSection::create([
            'title' => 'Understanding Your Vision',
            'description' => 'We start by thoroughly understanding your business goals and challenges to craft a customized strategy tailored to your needs.'
        ]);

        ApproachSection::create([
            'title' => 'Execution with Precision',
            'description' => 'Our expert team implements the strategy with a focus on driving growth through advanced SEO, targeted PPC campaigns, and impactful web design.'
        ]);

        ApproachSection::create([
            'title' => 'Continuous Optimization',
            'description' => 'We continuously monitor performance and refine our strategies to ensure sustained success and a strong return on investment.'
        ]);
    }
}
