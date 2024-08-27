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

        DB::table('category_service_plan')->truncate();
        DB::table('service_plans')->truncate();
        DB::table('categories')->truncate();
        DB::table('Services')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); // Enable foreign key checks
    }
}
