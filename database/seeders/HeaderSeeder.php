<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Header;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Header::create([
            'desktop_logo' => 'images/svg/header_logo.svg',
            'mobile_logo' => 'images/svg/header_phone_logo.svg',
            'nav_links' => [
                ['title' => 'Home', 'url' => route('home')], // This will correctly resolve to '/'
                ['title' => 'About', 'url' => route('about')],
                ['title' => 'Features', 'url' => route('features')],
                ['title' => 'How it Works', 'url' => route('how-it-works')],
                ['title' => 'Pricing', 'url' => route('home') . '/#pricing'],
                ['title' => 'FAQ', 'url' => route('home') . '/#faq'],
            ],
            'languages' => [
                ['name' => 'Deutsch', 'code' => 'de', 'url' => '/de', 'flag' => 'images/flags/de.png'],
                ['name' => 'English', 'code' => 'en', 'url' => '/en', 'flag' => 'images/flags/en.png'],
                ['name' => 'Español', 'code' => 'es', 'url' => '/es', 'flag' => 'images/flags/es.png'],
                ['name' => 'Français', 'code' => 'fr', 'url' => '/fr', 'flag' => 'images/flags/fr.png'],
                ['name' => 'العربية', 'code' => 'ar', 'url' => '/ar', 'flag' => 'images/flags/ar.png'],
            ],
            'sign_in_link' => '/login',
            'join_link' => '/register',
            'promo_video_link' => 'https://youtu.be/galNNnEcK7I',
        ]);
    }
}
