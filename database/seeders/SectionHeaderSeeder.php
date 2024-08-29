<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionHeaderSeeder extends Seeder
{
    public function run()
    {
        DB::table('section_headers')->insert([
            [
                'title' => 'Website Solutions for Every Need',
                'description' => 'Explore our range of services tailored to different professions and business needs. From website creation to digital marketing, we help you build an online presence that stands out.',
            ],
        ]);
    }
}
