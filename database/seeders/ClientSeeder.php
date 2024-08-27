<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create([
            'name' => 'Example Corp',
            'email' => 'contact@example.com',
            'company' => 'Example Corp',
            'message' => 'We are interested in your services.',
        ]);

        Client::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'company' => 'Doe Inc.',
            'message' => 'Please provide a quote for web development.',
        ]);
    }
}
