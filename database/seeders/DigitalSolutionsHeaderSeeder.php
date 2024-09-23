<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigitalSolutionsHeaderSeeder extends Seeder
{
    public function run()
    {
        // Insert header data
        DB::table('digital_solutions_header')->insert([
            'header_title' => 'Craft Unique Websites',
            'header_description' => 'Shape your digital presence with custom-built solutions using Laravel, WordPress, and PHP.'
        ]);
    }
}
