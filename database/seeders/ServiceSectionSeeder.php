<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSectionSeeder extends Seeder
{
    public function run()
    {
        DB::table('service_sections')->insert([
            [
                'title' => 'For E-Commerce Startups',
                'subtitle' => 'Build a robust online store',
                'color' => json_encode([
                    'text' => '#CBA153',
                    'bg' => '#CBA153',
                    'shadow' => '#cba15326'
                ]),
                'icon_class' => 'fas fa-briefcase',
                'description' => 'Build a robust online store with seamless checkout experiences and powerful inventory management tools tailored for e-commerce startups.',
            ],
            [
                'title' => 'For Freelancers',
                'subtitle' => 'Create stunning personal portfolios',
                'color' => json_encode([
                    'text' => '#AB7FE6',
                    'bg' => '#AB7FE6',
                    'shadow' => '#ab7fe621'
                ]),
                'icon_class' => 'fas fa-pencil-ruler',
                'description' => 'Create a stunning personal portfolio website with easy-to-use templates that showcase your skills, projects, and client testimonials.',
            ],
            [
                'title' => 'For Small Businesses',
                'subtitle' => 'Boost your brand with professional websites',
                'color' => json_encode([
                    'text' => '#57CBC6',
                    'bg' => '#57CBC6',
                    'shadow' => '#57cbc624'
                ]),
                'icon_class' => 'fas fa-lightbulb', // Example icon class
                'description' => 'Get a professional business website that boosts your brand and allows you to connect with your customers seamlessly.',
            ],
            [
                'title' => 'For Bloggers',
                'subtitle' => 'Attract and grow your audience',
                'color' => json_encode([
                    'text' => '#7F8FE6',
                    'bg' => '#7F8FE6',
                    'shadow' => '#7f8fe624'
                ]),
                'icon_class' => 'fas fa-pen', // Example icon class
                'description' => 'Start a blog that attracts readers with beautiful layouts and intuitive editing tools. Grow your audience and monetize your content with ease.',
            ],
            [
                'title' => 'For Digital Marketers',
                'subtitle' => 'Drive traffic and increase conversions',
                'color' => json_encode([
                    'text' => '#6BAC65',
                    'bg' => '#6BAC65',
                    'shadow' => '#6bac6524'
                ]),
                'icon_class' => 'fas fa-chart-line', // Example icon class
                'description' => 'Leverage SEO tools, social media integrations, and marketing analytics to drive traffic and increase conversions on your websites.',
            ],
            [
                'title' => 'For Creative Professionals',
                'subtitle' => 'Design your portfolio with advanced customization',
                'color' => json_encode([
                    'text' => '#EF793A',
                    'bg' => '#EF793A',
                    'shadow' => '#ef793a1f'
                ]),
                'icon_class' => 'fas fa-code', // Example icon class
                'description' => 'Design your portfolio or business website with advanced customization options that reflect your creative vision and style.',
            ],
        ]);
    }
}
