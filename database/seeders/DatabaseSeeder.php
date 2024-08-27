<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            ServiceSeeder::class,
            PortfolioSeeder::class,
            BlogPostSeeder::class,
            TestimonialSeeder::class,
            ClientSeeder::class,
        ]);
    }
}
