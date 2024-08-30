<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DigitalHubFeature;

class DigitalHubFeatureSeeder extends Seeder
{
    public function run()
    {
        $features = [
            [
                'title' => 'Advanced Dashboard',
                'description' => 'Monitor user traffic, sales, and other key metrics.',
                'icon' => 'fas fa-chart-line',
            ],
            [
                'title' => 'Payment Gateways',
                'description' => 'Securely process electronic payments.',
                'icon' => 'fas fa-credit-card',
            ],
            [
                'title' => 'Multilingual Support',
                'description' => 'Generate content in various languages.',
                'icon' => 'fas fa-language',
            ],
            [
                'title' => 'Affiliate System',
                'description' => 'Enable referral programs with commission tracking.',
                'icon' => 'fas fa-user-friends',
            ],
            [
                'title' => 'Easy Export',
                'description' => 'Export data in multiple formats like PDF, Word, or HTML.',
                'icon' => 'fas fa-file-export',
            ],
            [
                'title' => 'Support Platform',
                'description' => 'Manage support tickets directly from the dashboard.',
                'icon' => 'fas fa-headset',
            ],
        ];

        foreach ($features as $feature) {
            DigitalHubFeature::create($feature);
        }
    }
}
