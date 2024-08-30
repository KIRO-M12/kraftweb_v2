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
        // DB::table('services')->truncate();
        // DB::table('service_sections')->truncate();
        // DB::table('section_headers')->truncate();
        // DB::table('service_ctas')->truncate();
        // DB::table('service_details')->truncate();
        // DB::table('service_images')->truncate();
        // DB::table('template_sections')->truncate();
        // DB::table('templates')->truncate();
        // DB::table('blog_sections')->truncate();
        // DB::table('blog_posts')->truncate();
        DB::table('footer_sections')->truncate();
        // DB::table('footer_links')->truncate();
        // DB::table('approach_headers')->truncate();
        // DB::table('approach_sections')->truncate();
        // DB::table('hub_headers')->truncate();
        // DB::table('digital_hub_features')->truncate();
        // DB::table('faq_sections')->truncate();
        // DB::table('digital_solutions_sections')->truncate();
        // DB::table('banner_sections')->truncate();
        // DB::table('testimonials')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Enable foreign key checks
    }
}
