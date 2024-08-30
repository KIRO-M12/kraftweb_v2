<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogSection;
use App\Models\BlogPost;

class BlogSectionSeeder extends Seeder
{
    public function run()
    {
        $section = BlogSection::create([
            'header' => 'Stay up-to-date',
            'sub_header' => null,
            'title' => 'Latest News',
            'description' => '',
        ]);

        BlogPost::create([
            'blog_section_id' => $section->id,
            'title' => 'The Benefits of ChatGPT',
            'excerpt' => 'Explore the numerous advantages of using ChatGPT for your business.',
            'image_path' => 'upload/images/blog/2.png',
            'author' => 'Admin',
            'published_at' => '2023-07-17 18:59:49',
            'slug' => 'blog-3',
        ]);

        BlogPost::create([
            'blog_section_id' => $section->id,
            'title' => 'Creating Articles with ChatGPT',
            'excerpt' => 'Learn how to create engaging articles using ChatGPT.',
            'image_path' => 'upload/images/blog/3.png',
            'author' => 'Admin',
            'published_at' => '2023-12-09 21:28:29',
            'slug' => 'blog-2',
        ]);

        BlogPost::create([
            'blog_section_id' => $section->id,
            'title' => 'ChatGPT: Revolutionizing Conversational AI',
            'excerpt' => 'Discover how ChatGPT is changing the landscape of conversational AI.',
            'image_path' => 'upload/images/blog/1.png',
            'author' => 'Admin',
            'published_at' => '2023-07-17 18:32:20',
            'slug' => 'blog-1',
        ]);
    }
}
