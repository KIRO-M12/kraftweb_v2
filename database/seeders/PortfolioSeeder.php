<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        Portfolio::create([
            'title' => 'E-commerce Website',
            'description' => 'A fully functional e-commerce platform.',
            'image' => 'ecommerce.jpg',
        ]);

        Portfolio::create([
            'title' => 'Company Website',
            'description' => 'A corporate website with a modern design.',
            'image' => 'company.jpg',
        ]);
    }
}
