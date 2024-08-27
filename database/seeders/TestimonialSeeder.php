<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        Testimonial::create([
            'client_name' => 'Alice Johnson',
            'client_position' => 'CEO of Example Corp',
            'testimonial' => 'This service was fantastic!',
            'client_image' => 'alice.jpg',
        ]);

        Testimonial::create([
            'client_name' => 'Bob Williams',
            'client_position' => 'Freelancer',
            'testimonial' => 'Highly recommend their services!',
            'client_image' => 'bob.jpg',
        ]);
    }
}
