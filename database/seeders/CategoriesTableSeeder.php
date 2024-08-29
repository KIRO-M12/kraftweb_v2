<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Insert categories into 'categories' table with specific relation to main services
        DB::table('categories')->insert([
            [
                'name' => 'Ads',
                'description' => 'Ads services like Google Ads, Social Media Ads, etc.',
                'type' => 'service',
                'tags' => json_encode(['ads', 'digital marketing']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SEO',
                'description' => 'SEO services like On-Page SEO, Link Building, etc.',
                'type' => 'service',
                'tags' => json_encode(['SEO', 'search engine']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Social Media Management',
                'description' => 'Managing social media channels to increase brand visibility and engagement.',
                'type' => 'service',
                'tags' => json_encode(['social media', 'engagement']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Design',
                'description' => 'Design services like UX/UI Design, Graphic Design, etc.',
                'type' => 'service',
                'tags' => json_encode(['design', 'branding']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Analytics',
                'description' => 'Analytics services like Google Analytics, A/B Testing, etc.',
                'type' => 'service',
                'tags' => json_encode(['data analysis', 'reporting']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Content Marketing',
                'description' => 'Content marketing services focused on creating valuable content like blog writing, guest posting, etc.',
                'type' => 'service',
                'tags' => json_encode(['content marketing', 'digital marketing']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Conversion Rate Optimization (CRO)',
                'description' => 'Services to improve the percentage of website visitors who take a desired action.',
                'type' => 'service',
                'tags' => json_encode(['CRO', 'conversion optimization']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Email Marketing',
                'description' => 'Services to build and manage email marketing campaigns.',
                'type' => 'service',
                'tags' => json_encode(['email marketing', 'lead generation']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Reports & Updates',
                'description' => 'Reporting and updates services that provide regular insights and performance data for businesses.',
                'type' => 'service',
                'tags' => json_encode(['reporting', 'updates']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert category-service plan relationships into 'category_service_plan' table
        DB::table('category_service_plan')->insert([
            // Digital Strategies - Ads Category Services (Basic)
            [
                'category_id' => 1, // Ads
                'service_plan_id' => 1, // Digital Strategies - Basic
                'services' => json_encode(['Google Ads Setup', 'Instagram Ads Management']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['ads', 'social media ads']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 6, // Content Marketing
                'service_plan_id' => 1, // Digital Strategies - Basic
                'services' => json_encode(['Blog Writing', 'Content Strategy Development']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['content marketing', 'SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Digital Strategies - Ads Category Services (Standard)
            [
                'category_id' => 1, // Ads
                'service_plan_id' => 2, // Digital Strategies - Standard
                'services' => json_encode(['Advanced Google Ads Management', 'Facebook Ads Campaign']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['ads', 'social media ads']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 6, // Content Marketing
                'service_plan_id' => 2, // Digital Strategies - Standard
                'services' => json_encode(['Guest Posting', 'Content Calendar Development']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['content marketing', 'SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Digital Strategies - Ads Category Services (Premium)
            [
                'category_id' => 1, // Ads
                'service_plan_id' => 3, // Digital Strategies - Premium
                'services' => json_encode(['Full Google Ads Suite Management', 'Advanced Social Media Campaigns']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['ads', 'social media ads']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 6, // Content Marketing
                'service_plan_id' => 3, // Digital Strategies - Premium
                'services' => json_encode(['Comprehensive Content Marketing Strategy', 'Multi-Channel Content Distribution']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['content marketing', 'SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SEO Mastery - SEO Category Services (Basic)
            [
                'category_id' => 2, // SEO
                'service_plan_id' => 4, // SEO Mastery - Basic
                'services' => json_encode(['Meta Tag Optimization', 'On-Page SEO']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['SEO', 'on-page SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Social Media Management
                'service_plan_id' => 4, // SEO Mastery - Basic
                'services' => json_encode(['Social Media Profile Setup', 'Content Creation and Scheduling']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['social media', 'engagement']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SEO Mastery - SEO Category Services (Standard)
            [
                'category_id' => 2, // SEO
                'service_plan_id' => 5, // SEO Mastery - Standard
                'services' => json_encode(['Technical SEO Audit', 'Competitor Analysis SEO']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['SEO', 'technical SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Social Media Management
                'service_plan_id' => 5, // SEO Mastery - Standard
                'services' => json_encode(['Advanced Social Media Strategy', 'Audience Engagement Tactics']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['social media', 'engagement']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // SEO Mastery - SEO Category Services (Premium)
            [
                'category_id' => 2, // SEO
                'service_plan_id' => 6, // SEO Mastery - Premium
                'services' => json_encode(['Full SEO Strategy Development', 'International SEO Campaigns']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['SEO', 'complete SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3, // Social Media Management
                'service_plan_id' => 6, // SEO Mastery - Premium
                'services' => json_encode(['Comprehensive Social Media Campaigns', 'Influencer Outreach and Collaboration']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['social media', 'engagement']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Design Category Services (Basic)
            [
                'category_id' => 4, // Design
                'service_plan_id' => 10, // Innovative Design - Basic
                'services' => json_encode(['Basic UX/UI Design', 'Color Scheme Development']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['design', 'basic UX/UI']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 7, // Conversion Rate Optimization (CRO)
                'service_plan_id' => 10, // Innovative Design - Basic
                'services' => json_encode(['A/B Testing', 'Landing Page Optimization']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['CRO', 'conversion optimization']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Innovative Design - Design Category Services (Standard)
            [
                'category_id' => 4, // Design
                'service_plan_id' => 11, // Innovative Design - Standard
                'services' => json_encode(['Advanced UX/UI Design', 'Custom Graphic Design']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['design', 'advanced design']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 7, // Conversion Rate Optimization (CRO)
                'service_plan_id' => 11, // Innovative Design - Standard
                'services' => json_encode(['Multivariate Testing', 'Conversion Funnel Analysis']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['CRO', 'conversion optimization']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Innovative Design - Design Category Services (Premium)
            [
                'category_id' => 4, // Design
                'service_plan_id' => 12, // Innovative Design - Premium
                'services' => json_encode(['Full Branding Package', 'Advanced Animation & Video Production']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['design', 'premium design']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 7, // Conversion Rate Optimization (CRO)
                'service_plan_id' => 12, // Innovative Design - Premium
                'services' => json_encode(['Full Conversion Optimization Suite', 'Heatmap and Scrollmap Analysis']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['CRO', 'conversion optimization']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Data-Driven Insights - Analytics Category Services (Basic)
            [
                'category_id' => 5, // Analytics
                'service_plan_id' => 7, // Data-Driven Insights - Basic
                'services' => json_encode(['Basic Google Analytics Setup', 'Weekly Performance Dashboard']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['analytics', 'basic analysis']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 8, // Email Marketing
                'service_plan_id' => 7, // Data-Driven Insights - Basic
                'services' => json_encode(['Email Campaign Strategy', 'Newsletter Creation']),
                'discount' => 5,
                'status' => 'active',
                'filters' => json_encode(['email marketing', 'lead generation']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Data-Driven Insights - Analytics Category Services (Standard)
            [
                'category_id' => 5, // Analytics
                'service_plan_id' => 8, // Data-Driven Insights - Standard
                'services' => json_encode(['Advanced Visualization Tools', 'Custom Report Scheduling']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['analytics', 'advanced analytics']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 8, // Email Marketing
                'service_plan_id' => 8, // Data-Driven Insights - Standard
                'services' => json_encode(['Automated Email Sequences', 'Lead Nurturing Campaigns']),
                'discount' => 10,
                'status' => 'active',
                'filters' => json_encode(['email marketing', 'automation']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Data-Driven Insights - Analytics Category Services (Premium)
            [
                'category_id' => 5, // Analytics
                'service_plan_id' => 9, // Data-Driven Insights - Premium
                'services' => json_encode(['Predictive Analytics', 'Real-Time Reporting']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['analytics', 'predictive analytics']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 8, // Email Marketing
                'service_plan_id' => 9, // Data-Driven Insights - Premium
                'services' => json_encode(['Omnichannel Email Marketing', 'Advanced Email Segmentation']),
                'discount' => 20,
                'status' => 'active',
                'filters' => json_encode(['email marketing', 'omnichannel']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Free Plans
            [
                'category_id' => 1, // Ads (Digital Strategies)
                'service_plan_id' => 13, // Personalized Digital Strategies - Free
                'services' => json_encode(['SEO Tips', 'Basic Social Media Strategies', 'Email Support', 'Monthly Updates']),
                'discount' => 0,
                'status' => 'active',
                'filters' => json_encode(['ads', 'social media ads']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2, // SEO (SEO Mastery)
                'service_plan_id' => 14, // SEO Mastery - Free
                'services' => json_encode(['SEO Checklist', 'SEO Best Practices Guide', 'Monthly Email Updates']),
                'discount' => 0,
                'status' => 'active',
                'filters' => json_encode(['SEO', 'basic SEO insights']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4, // Design (Innovative Design)
                'service_plan_id' => 15, // Innovative Design - Free
                'services' => json_encode(['Design Tools Guide', 'Monthly Design Tips', 'Email Support']),
                'discount' => 0,
                'status' => 'active',
                'filters' => json_encode(['design', 'basic design services']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5, // Analytics (Data-Driven Insights)
                'service_plan_id' => 16, // Data-Driven Insights - Free
                'services' => json_encode(['Basic Reporting Templates', 'Email Support', 'Monthly Analytics Newsletter']),
                'discount' => 0,
                'status' => 'active',
                'filters' => json_encode(['analytics', 'basic data insights']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 9, // Reports & Updates
                'service_plan_id' => 16, // Data-Driven Insights - Free
                'services' => json_encode(['Monthly Performance Reports', 'Basic Reporting Insights', 'Email Support']),
                'discount' => 0,
                'status' => 'active',
                'filters' => json_encode(['reporting', 'monthly updates']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
