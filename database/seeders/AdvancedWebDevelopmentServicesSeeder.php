<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdvancedWebDevelopmentServicesSeeder extends Seeder
{
    public function run()
    {
        // Regenerate Service Plans with new "Free" packages categorized correctly
        $servicePlans = [
            // Digital Strategies Plans
            $this->createServicePlan(
                'Personalized Digital Strategies - Basic',
                'Tailored Strategy Planning, Basic Data Analytics, and 2 Revisions.',
                49.99, 499.99, 999.99, 'basic',
                ['Tailored Strategy Planning', 'Basic Data Analytics', '2 Revisions'],
                ['Basic SEO Optimization', 'Social Media Setup', '24/7 Email Support', 'Basic Website Audit'],
                'Standard Support', 1, ['digital strategy', 'basic'], ['Strategy Planning'], ['Limited to 2 revisions'], 'active', 10
            ),
            $this->createServicePlan(
                'Personalized Digital Strategies - Standard',
                'Comprehensive Strategy Planning, Advanced Data Analytics, and 5 Revisions.',
                99.99, 999.99, 1999.99, 'standard',
                ['Comprehensive Strategy Planning', 'Advanced Data Analytics', '5 Revisions'],
                ['Enhanced SEO Optimization', 'Social Media Strategy and Management', '24/7 Email and Phone Support', 'In-Depth Website Audit'],
                'Priority Support', 3, ['digital strategy', 'standard'], ['Advanced Strategy Planning'], ['Limited to 5 revisions'], 'active', 15
            ),
            $this->createServicePlan(
                'Personalized Digital Strategies - Premium',
                'Full Custom Strategy Development, Expert Data Analytics, and Unlimited Revisions.',
                149.99, 1499.99, 2999.99, 'premium',
                ['Full Custom Strategy Development', 'Expert Data Analytics', 'Unlimited Revisions'],
                ['Premium SEO Optimization', 'Comprehensive Social Media Campaigns', '24/7 Multichannel Support', 'Full Website Optimization'],
                '24/7 Dedicated Support', 5, ['digital strategy', 'premium'], ['Custom Strategy Development'], ['Unlimited revisions'], 'active', 20
            ),
            // Data-Driven Insights Plans
            $this->createServicePlan(
                'Data-Driven Insights - Basic',
                'Foundational Data Analysis, Key Metrics Tracking, and Basic Reporting.',
                49.99, 499.99, 999.99, 'basic',
                ['Foundational Data Analysis', 'Key Metrics Tracking', 'Basic Reporting'],
                ['Basic Visualization Tools', 'Custom Report Generation', 'Email Support'],
                'Standard Support', 1, ['data analysis', 'basic'], ['Data Tracking'], ['Limited to standard data sets'], 'active', 10
            ),
            $this->createServicePlan(
                'Data-Driven Insights - Standard',
                'Advanced Data Analysis, Custom Metrics, and In-Depth Reporting.',
                99.99, 999.99, 1999.99, 'standard',
                ['Advanced Data Analysis', 'Custom Metrics Tracking', 'In-Depth Reporting'],
                ['Advanced Visualization Tools', 'Custom Report Scheduling', 'Phone and Email Support'],
                'Priority Support', 3, ['data analysis', 'standard'], ['Advanced Data Tracking'], ['Extended data sets'], 'active', 15
            ),
            $this->createServicePlan(
                'Data-Driven Insights - Premium',
                'Comprehensive Data Strategy, Predictive Analytics, and Real-Time Reporting.',
                149.99, 1499.99, 2999.99, 'premium',
                ['Comprehensive Data Strategy', 'Predictive Analytics', 'Real-Time Reporting'],
                ['Premium Visualization Dashboards', 'Automated Report Distribution', '24/7 Multichannel Support'],
                '24/7 Dedicated Support', 5, ['data analysis', 'premium'], ['Predictive Analytics'], ['Unlimited data sets'], 'active', 20
            ),
            // Innovative Design Plans
            $this->createServicePlan(
                'Innovative Design - Basic',
                'Essential design services to create visually appealing websites and graphics.',
                49.99, 499.99, 999.99, 'basic',
                ['Basic Web Design', 'Graphic Design', 'Logo Creation'],
                ['Basic UX/UI Design', 'Color Scheme Development', 'Email Support'],
                'Standard Support', 1, ['design', 'basic'], ['Visual Design'], ['Limited to basic design packages'], 'active', 10
            ),
            $this->createServicePlan(
                'Innovative Design - Standard',
                'Advanced design services including custom graphics and enhanced web design.',
                99.99, 999.99, 1999.99, 'standard',
                ['Advanced Web Design', 'Custom Graphic Design', 'Interactive Elements'],
                ['Advanced UX/UI Design', 'Branding Strategy Development', 'Phone and Email Support'],
                'Priority Support', 3, ['design', 'standard'], ['Enhanced Visual Design'], ['Extended design packages'], 'active', 15
            ),
            $this->createServicePlan(
                'Innovative Design - Premium',
                'Comprehensive design services with cutting-edge technology and custom solutions.',
                149.99, 1499.99, 2999.99, 'premium',
                ['Custom Web Design', '3D Graphic Design', 'Animation and Video'],
                ['Premium UX/UI Design', 'Full Branding Package', '24/7 Multichannel Support'],
                '24/7 Dedicated Support', 5, ['design', 'premium'], ['Comprehensive Visual Design'], ['Unlimited design packages'], 'active', 20
            ),
            // SEO Mastery Plans
            $this->createServicePlan(
                'SEO Mastery - Basic',
                'Essential SEO services to improve your website\'s visibility and rankings.',
                49.99, 499.99, 999.99, 'basic',
                ['Keyword Research', 'On-Page Optimization', 'Basic Reporting'],
                ['Meta Tag Optimization', 'XML Sitemap Creation', 'Email Support'],
                'Standard Support', 1, ['SEO', 'basic'], ['Search Engine Optimization'], ['Limited to basic SEO services'], 'active', 10
            ),
            $this->createServicePlan(
                'SEO Mastery - Standard',
                'Advanced SEO services to boost your search engine rankings and drive more traffic.',
                99.99, 999.99, 1999.99, 'standard',
                ['Advanced Keyword Research', 'Technical SEO Audit', 'Content Optimization'],
                ['Backlink Analysis', 'Competitor Analysis', 'Phone and Email Support'],
                'Priority Support', 3, ['SEO', 'standard'], ['Advanced SEO Strategies'], ['Extended SEO services'], 'active', 15
            ),
            $this->createServicePlan(
                'SEO Mastery - Premium',
                'Comprehensive SEO services with a focus on achieving top rankings and maximum visibility.',
                149.99, 1499.99, 2999.99, 'premium',
                ['Comprehensive SEO Strategy', 'Full Technical SEO Audit', 'Custom Content Creation'],
                ['Link Building Campaigns', 'Ongoing SEO Monitoring', '24/7 Dedicated Support'],
                '24/7 Dedicated Support', 5, ['SEO', 'premium'], ['Complete SEO Solutions'], ['Unlimited SEO services'], 'active', 20
            ),
            // Free Plans for Each Category
            $this->createServicePlan(
                'Personalized Digital Strategies - Free',
                'Access to foundational digital strategy consultations and planning resources for beginners.',
                0.00, 0.00, 0.00, 'free',
                ['Strategy Consultation Session', 'Basic Competitor Analysis', 'Social Media Planning Tips'],
                ['SEO Tips', 'Basic Social Media Strategies', 'Email Support'],
                'Email Support', 1, ['digital strategy', 'free'], ['Basic Strategy Planning'], ['Limited to initial planning'], 'active', 0
            ),
            $this->createServicePlan(
                'SEO Mastery - Free',
                'Introductory SEO package focusing on essential elements to improve online visibility.',
                0.00, 0.00, 0.00, 'free',
                ['SEO Fundamentals Overview', 'Basic Site Audit', 'Keyword Research Guide'],
                ['SEO Checklist', 'SEO Best Practices Guide', 'Monthly Email Updates'],
                'Email Support', 1, ['SEO', 'free'], ['Basic SEO Concepts'], ['Limited to foundational SEO advice'], 'active', 0
            ),
            $this->createServicePlan(
                'Innovative Design - Free',
                'Entry-level design resources aimed at small businesses or startups looking to establish a brand identity.',
                0.00, 0.00, 0.00, 'free',
                ['Simple Logo Design', 'Color Palette Suggestions', 'Basic Website Layout Ideas'],
                ['Design Tools Guide', 'Monthly Design Tips', 'Email Support'],
                'Email Support', 1, ['design', 'free'], ['Foundational Design Elements'], ['Limited to simple branding concepts'], 'active', 0
            ),
            $this->createServicePlan(
                'Data-Driven Insights - Free',
                'Free analytics tools and resources to start understanding your data.',
                0.00, 0.00, 0.00, 'free',
                ['Basic Analytics Overview', 'Google Analytics Setup Guide', 'Weekly Performance Tracking Tips'],
                ['Basic Reporting Templates', 'Email Support', 'Monthly Analytics Newsletter'],
                'Email Support', 1, ['data analysis', 'free'], ['Introductory Analytics'], ['Limited to basic data insights'], 'active', 0
            ),
        ];

        DB::table('service_plans')->insert($servicePlans);
    }

    private function createServicePlan(
        $name, $description, $monthlyPrice, $annualPrice, $lifetimePrice, $tier,
        $features, $additionalServices, $supportLevel, $maxUsers, $tags, $filters,
        $restrictions, $status, $discount
    ) {
        return [
            'name' => $name,
            'description' => $description,
            'monthly_price' => $monthlyPrice,
            'annual_price' => $annualPrice,
            'lifetime_price' => $lifetimePrice,
            'tier' => $tier,
            'features' => json_encode($features),
            'additional_services' => json_encode($additionalServices),
            'support_level' => $supportLevel,
            'max_users' => $maxUsers,
            'tags' => json_encode($tags),
            'filters' => json_encode($filters),
            'restrictions' => json_encode($restrictions),
            'status' => $status,
            'discount' => $discount,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
