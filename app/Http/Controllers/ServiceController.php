<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePlan;
use App\Models\ServiceSection;
use App\Models\SectionHeader;
use App\Models\Template;
use App\Models\TemplateSection;
use App\Models\DigitalSolutionsSection;
use App\Models\HubHeader;
use App\Models\DigitalHubFeature;
use App\Models\BannerSection;
use App\Models\ApproachSection;
use App\Models\ApproachHeader;
use App\Models\FaqSection;
use App\Models\BlogSection;
use App\Models\BlogPost;
use App\Models\FooterSection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    public function getServicePlans()
    {
        $servicePlans = ServicePlan::with('categories')->get();

        foreach ($servicePlans as $plan) {
            foreach ($plan->categories as $category) {
                if (is_string($category->pivot->services)) {
                    $category->services = json_decode($category->pivot->services, true);
                } else {
                    $category->services = $category->pivot->services;
                }
            }
        }

        return $servicePlans;
    }

    public function showServices()
    {
        $services = Service::with(['details', 'ctas', 'images'])->where('status', 'active')->get();
        return $services;
    }

    public function getServiceData()
    {
        $services = Service::where('status', 'active')->with(['details', 'ctas', 'images'])->get();
        $serviceSections = ServiceSection::all();
        $sectionHeader = SectionHeader::first();

        return compact('services', 'serviceSections', 'sectionHeader');
    }

    public function getTemplateData()
    {
        $templateSection = TemplateSection::first();
        $templates = Template::all();
        $allowedIcons = config('icons.allowed');

        if ($templateSection && is_string($templateSection->buttons)) {
            $templateSection->buttons = json_decode($templateSection->buttons, true);
        }

        // Deduplicate templates based on title
        $uniqueTemplates = $templates->unique('title')->map(function ($template) use ($allowedIcons) {
            $iconKey = $template->icon;
            // Assign default icon if not found in the allowed list
            $template->icon = $allowedIcons[$iconKey] ?? 'fas fa-circle';
            return $template;
        });

        return compact('templateSection', 'uniqueTemplates');
    }

    public function getDigitalSolutionsData()
{
    $digitalSolutions = DigitalSolutionsSection::all(); // Fetch all data for the digital solutions
    return $digitalSolutions;
}

public function getHubHeader()
{
    $hubHeader = HubHeader::first(); // Fetch the first HubHeader record
    return $hubHeader;
}

public function getDigitalHubFeatures()
{
    $digitalHubFeatures = DigitalHubFeature::all(); // Fetch all DigitalHubFeature records
    return $digitalHubFeatures;
}
public function getBannerData()
{
    $bannerSection = BannerSection::first(); // Fetch the first record

    // Decode the JSON field to an array
    if ($bannerSection && is_string($bannerSection->rotating_titles)) {
        $bannerSection->rotating_titles = json_decode($bannerSection->rotating_titles, true);
    }

    return $bannerSection;
}

public function getApproachData()
{
    $approachSections = ApproachSection::all();
    $approachHeader = ApproachHeader::first();

    return compact('approachSections', 'approachHeader');
}
public function getFaqData()
{
    $faqSection = FaqSection::first();
    $faqItems = $faqSection->items;

    return compact('faqSection', 'faqItems');
}
public function getBlogData()
{
    $blogSection = BlogSection::first();
    $blogPosts = $blogSection->posts;

    return compact('blogSection', 'blogPosts');
}

public function getBlogPosts()
{
    $blogPosts = BlogPost::all();

    // Format the 'published_at' date
    $blogPosts->transform(function ($post) {
        $post->formatted_date = Carbon::parse($post->published_at)->format('d M');
        return $post;
    });

    return $blogPosts;
}

public function getFooterData()
{
    return FooterSection::with('links')->first();
}

}
