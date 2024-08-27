<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogPost;

class BlogPostSeeder extends Seeder
{
    public function run()
    {
        BlogPost::create([
            'title' => 'How to Improve Your Website SEO',
            'content' => 'Lorem ipsum dolor sit amet...',
            'author' => 'John Doe',
        ]);

        BlogPost::create([
            'title' => 'The Future of Web Development',
            'content' => 'Lorem ipsum dolor sit amet...',
            'author' => 'Jane Smith',
        ]);
    }
}
