<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruncateTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); // Disable foreign key checks

        // DB::table('category_service_plan')->truncate();
        // DB::table('service_plans')->truncate();
        // DB::table('categories')->truncate();
        // DB::table('Services')->truncate();
        // DB::table('service_sections')->truncate();
        // DB::table('section_headers')->truncate();
        // DB::table('service_ctas')->truncate();
        // DB::table('service_details')->truncate();
        // DB::table('service_images')->truncate();
        DB::table('template_sections')->truncate();
        // DB::table('templates')->truncate();
         
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Enable foreign key checks
    }
}
