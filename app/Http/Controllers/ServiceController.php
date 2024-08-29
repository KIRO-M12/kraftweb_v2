<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePlan;
use App\Models\ServiceSection;
use App\Models\SectionHeader;
use App\Models\Template; // Add Template model
use App\Models\TemplateSection; // Add TemplateSection model

class ServiceController extends Controller
{
    public function getServicePlans()
    {
        $servicePlans = ServicePlan::with('categories')->get();
    
        foreach ($servicePlans as $plan) {
            foreach ($plan->categories as $category) {
                // Check if $category->pivot->services is already an array
                if (is_string($category->pivot->services)) {
                    $category->services = json_decode($category->pivot->services, true); // Decode if it's a string
                } else {
                    $category->services = $category->pivot->services; // Use it as is if it's already an array
                }
            }
        }
    
        return $servicePlans;
    }
    

    public function showServices()
    {
        // Fetch services with related data for the current section
        $services = Service::with(['details', 'ctas', 'images']) // Include the new relationships
            ->where('status', 'active') // Ensure only active services are fetched
            ->get();

        return $services;
    }

    public function getServiceData()
    {
        // Fetch active services with related details, CTAs, and images (including background color)
        $services = Service::where('status', 'active')
            ->with(['details', 'ctas', 'images'])
            ->get();

        // Fetch all service sections
        $serviceSections = ServiceSection::all();

        // Fetch the header for the sections
        $sectionHeader = SectionHeader::first();

        return compact('services', 'serviceSections', 'sectionHeader');
    }

    public function getTemplateData()
    {
        // Fetch service sections
        $serviceSections = ServiceSection::all();

        // Fetch template section
        $templateSection = TemplateSection::first();

        // Fetch templates
        $templates = Template::all();  // Replace 'Template' with your actual model or data source

        // Fetch allowed icons from the configuration file.
        $allowedIcons = config('icons.allowed'); // Use the config() helper to get the array
        $iconClass = $allowedIcons['user']; 
        // Check if buttons is a string and decode it
        if ($templateSection && is_string($templateSection->buttons)) {
            $templateSection->buttons = json_decode($templateSection->buttons, true);
        }

        // Replace icons in templates with the allowed classes or a default if not allowed
        $templates = $templates->map(function($template) use ($allowedIcons) {
            $iconKey = $template->icon; // Store only keys like 'newspaper', 'instagram'
            
            // Fetch the icon class from allowed icons
            $template->icon = $allowedIcons[$iconKey] ?? 'fas fa-circle';  // Default icon if not found
            return $template;
        });

        // Return the correct variables to the view or API response
        return compact('serviceSections', 'templateSection', 'templates');
    }
    
}
