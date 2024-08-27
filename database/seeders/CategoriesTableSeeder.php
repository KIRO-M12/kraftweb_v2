<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Insert categories
        DB::table('categories')->insert([
            [
                'name' => 'E-commerce',
                'description' => 'E-commerce related services.',
                'type' => 'service',
                'tags' => json_encode(['ecommerce', 'online-store']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Marketing',
                'description' => 'Marketing and promotional services.',
                'type' => 'service',
                'tags' => json_encode(['marketing', 'advertisement']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SEO',
                'description' => 'Search Engine Optimization services.',
                'type' => 'service',
                'tags' => json_encode(['seo', 'search-engine']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Design',
                'description' => 'Web and graphic design services.',
                'type' => 'service',
                'tags' => json_encode(['design', 'web-design']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Analytics',
                'description' => 'Data analytics and reporting services.',
                'type' => 'service',
                'tags' => json_encode(['analytics', 'data']),
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Example of linking categories to service plans with additional services
        DB::table('category_service_plan')->insert([
            // Linking Personalized Digital Strategies - Basic
            [
                'category_id' => 2, // Marketing
                'service_plan_id' => 1, // Personalized Digital Strategies - Basic
                'services' => json_encode([
                    'Basic SEO Optimization',
                    'Social Media Setup',
                    'Basic Website Audit',
                    'Content Strategy Consultation',
                    'Basic Competitor Analysis',
                    'Keyword Research',
                    'Content Calendar Creation',
                    'Social Media Integration',
                    'Basic CRM Setup'
                ]),
                'discount' => 10.00,
                'status' => 'active',
                'filters' => json_encode(['Marketing']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Personalized Digital Strategies - Standard
            [
                'category_id' => 2, // Marketing
                'service_plan_id' => 2, // Personalized Digital Strategies - Standard
                'services' => json_encode([
                    'Enhanced SEO Optimization',
                    'Social Media Strategy and Management',
                    'Weekly Performance Report',
                    'In-Depth Website Audit',
                    'Advanced Content Strategy',
                    'Competitor Analysis',
                    'Keyword Strategy Development',
                    'Content Creation & Scheduling',
                    'Social Media Advertising Strategy',
                    'CRM Integration & Setup',
                    'Monthly A/B Testing'
                ]),
                'discount' => 15.00,
                'status' => 'active',
                'filters' => json_encode(['Marketing']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Personalized Digital Strategies - Premium
            [
                'category_id' => 2, // Marketing
                'service_plan_id' => 3, // Personalized Digital Strategies - Premium
                'services' => json_encode([
                    'Premium SEO Optimization',
                    'Comprehensive Social Media Campaigns',
                    'Daily Performance Reports',
                    'Full Website Optimization',
                    'Content Strategy & Creation',
                    'In-Depth Competitor Analysis',
                    'Advanced Keyword Optimization',
                    'Omnichannel Content Distribution',
                    'Advanced Social Media Advertising',
                    'CRM Integration with Automation',
                    'Real-Time A/B Testing & Optimization',
                    'Custom Marketing Dashboard'
                ]),
                'discount' => 20.00,
                'status' => 'active',
                'filters' => json_encode(['Marketing']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Data-Driven Insights - Basic
            [
                'category_id' => 5, // Analytics
                'service_plan_id' => 4, // Data-Driven Insights - Basic
                'services' => json_encode([
                    'Basic Visualization Tools',
                    'Custom Report Generation',
                    'Weekly Performance Dashboard',
                    'Basic Google Analytics Setup',
                    'Traffic Source Analysis',
                    'Basic Conversion Tracking',
                    'User Behavior Analysis',
                    'Monthly Data Review',
                    'Heatmap Integration',
                    'Basic A/B Testing Insights'
                ]),
                'discount' => 10.00,
                'status' => 'active',
                'filters' => json_encode(['Analytics']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Data-Driven Insights - Standard
            [
                'category_id' => 5, // Analytics
                'service_plan_id' => 5, // Data-Driven Insights - Standard
                'services' => json_encode([
                    'Advanced Visualization Tools',
                    'Custom Report Scheduling',
                    'Daily Performance Dashboard',
                    'Advanced Google Analytics Setup',
                    'Enhanced Traffic Source Analysis',
                    'Conversion Funnel Analysis',
                    'Advanced User Behavior Insights',
                    'Weekly Data Review',
                    'Dynamic Heatmap Integration',
                    'Advanced A/B Testing Insights',
                    'Customer Segmentation Analysis'
                ]),
                'discount' => 15.00,
                'status' => 'active',
                'filters' => json_encode(['Analytics']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Data-Driven Insights - Premium
            [
                'category_id' => 5, // Analytics
                'service_plan_id' => 6, // Data-Driven Insights - Premium
                'services' => json_encode([
                    'Premium Visualization Dashboards',
                    'Automated Report Distribution',
                    'Real-Time Performance Dashboard',
                    'Custom Google Analytics Integration',
                    'Comprehensive Traffic Source Analysis',
                    'Predictive Conversion Modeling',
                    'Advanced User Segmentation',
                    'Daily Data Review & Optimization',
                    'Interactive Heatmap Tools',
                    'Machine Learning-Based A/B Testing',
                    'Custom Data Integration Solutions',
                    'Enterprise-Level Data Security'
                ]),
                'discount' => 20.00,
                'status' => 'active',
                'filters' => json_encode(['Analytics']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Innovative Design - Basic
            [
                'category_id' => 4, // Design
                'service_plan_id' => 7, // Innovative Design - Basic
                'services' => json_encode([
                    'Basic UX/UI Design',
                    'Color Scheme Development',
                    'Responsive Design',
                    'Basic Image Editing',
                    'Typography Selection',
                    'Basic Branding Guidelines',
                    'Social Media Graphics',
                    'Basic Iconography',
                    'Newsletter Template Design',
                    'One-Page Website Design'
                ]),
                'discount' => 10.00,
                'status' => 'active',
                'filters' => json_encode(['Design']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Innovative Design - Standard
            [
                'category_id' => 4, // Design
                'service_plan_id' => 8, // Innovative Design - Standard
                'services' => json_encode([
                    'Advanced UX/UI Design',
                    'Branding Strategy Development',
                    'Advanced Responsive Design',
                    'High-Quality Image Editing',
                    'Custom Typography',
                    'Advanced Branding Guidelines',
                    'Custom Social Media Graphics',
                    'Custom Iconography',
                    'Multi-Page Website Design',
                    'Custom Newsletter Design',
                    'Basic Animation Creation'
                ]),
                'discount' => 15.00,
                'status' => 'active',
                'filters' => json_encode(['Design']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Innovative Design - Premium
            [
                'category_id' => 4, // Design
                'service_plan_id' => 9, // Innovative Design - Premium
                'services' => json_encode([
                    'Premium UX/UI Design',
                    'Full Branding Package',
                    'Advanced Animation & Video Production',
                    '3D Modeling & Rendering',
                    'Custom Interactive Elements',
                    'Complete Branding Guidelines',
                    'Advanced Social Media Campaign Graphics',
                    'Premium Iconography',
                    'Custom Multi-Page Website Design',
                    'High-End Newsletter Design',
                    'Custom E-commerce Design Solutions',
                    'Virtual Reality Interface Design'
                ]),
                'discount' => 20.00,
                'status' => 'active',
                'filters' => json_encode(['Design']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking SEO Mastery - Basic
            [
                'category_id' => 3, // SEO
                'service_plan_id' => 10, // SEO Mastery - Basic
                'services' => json_encode([
                    'Keyword Research',
                    'On-Page Optimization',
                    'Basic Reporting',
                    'Meta Tag Optimization',
                    'XML Sitemap Creation',
                    'Google My Business Setup',
                    'Basic Local SEO',
                    'Image Alt Text Optimization',
                    'Basic Page Speed Optimization',
                    'Mobile SEO Optimization',
                    'Basic Competitor SEO Analysis',
                    'Basic Link Building',
                    'SEO-Friendly Content Creation'
                ]),
                'discount' => 10.00,
                'status' => 'active',
                'filters' => json_encode(['SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking SEO Mastery - Standard
            [
                'category_id' => 3, // SEO
                'service_plan_id' => 11, // SEO Mastery - Standard
                'services' => json_encode([
                    'Advanced Keyword Research',
                    'Technical SEO Audit',
                    'Content Optimization',
                    'Backlink Analysis',
                    'Competitor Analysis',
                    'Advanced Local SEO',
                    'Schema Markup Implementation',
                    'Advanced Page Speed Optimization',
                    'Content Strategy Development',
                    'Voice Search Optimization',
                    'Advanced Link Building',
                    'Weekly SEO Reports',
                    'Google Analytics & Search Console Integration',
                    'Landing Page Optimization'
                ]),
                'discount' => 15.00,
                'status' => 'active',
                'filters' => json_encode(['SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking SEO Mastery - Premium
            [
                'category_id' => 3, // SEO
                'service_plan_id' => 12, // SEO Mastery - Premium
                'services' => json_encode([
                    'Comprehensive SEO Strategy',
                    'Full Technical SEO Audit',
                    'Custom Content Creation',
                    'Link Building Campaigns',
                    'Ongoing SEO Monitoring',
                    'International SEO Strategy',
                    'Advanced Schema Markup',
                    'Content Marketing Integration',
                    'Multilingual SEO Support',
                    'E-commerce SEO Optimization',
                    'Advanced Voice Search Optimization',
                    'Advanced Google Analytics Configuration',
                    'Custom SEO Dashboard',
                    'Enterprise-Level SEO Solutions',
                    'AI-Powered SEO Tools Integration'
                ]),
                'discount' => 20.00,
                'status' => 'active',
                'filters' => json_encode(['SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Personalized Digital Strategies - Free
            [
                'category_id' => 2, // Marketing
                'service_plan_id' => 1, // Personalized Digital Strategies - Free
                'services' => json_encode([
                    'Basic SEO Tips',
                    'Content Strategy Starter Guide',
                    'Social Media Tips for Beginners',
                    'Monthly Email Support'
                ]),
                'discount' => 0.00,
                'status' => 'active',
                'filters' => json_encode(['Marketing']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking Innovative Design - Free
            [
                'category_id' => 4, // Design
                'service_plan_id' => 2, // Innovative Design - Free
                'services' => json_encode([
                    'Basic UX/UI Tips',
                    'Simple Graphic Design Tools',
                    'Social Media Graphic Templates',
                    'Monthly Design Tips Newsletter'
                ]),
                'discount' => 0.00,
                'status' => 'active',
                'filters' => json_encode(['Design']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Linking SEO Mastery - Free
            [
                'category_id' => 3, // SEO
                'service_plan_id' => 3, // SEO Mastery - Free
                'services' => json_encode([
                    'Free SEO Tools Guide',
                    'Monthly SEO Tips',
                    'Basic Link Building Suggestions',
                    'Google Analytics Setup Assistance'
                ]),
                'discount' => 0.00,
                'status' => 'active',
                'filters' => json_encode(['SEO']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
