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
use App\Models\DigitalSolutionsHeader;
use Carbon\Carbon;

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

        $uniqueTemplates = $templates->unique('title')->map(function ($template) use ($allowedIcons) {
            $iconKey = $template->icon;
            $template->icon = $allowedIcons[$iconKey] ?? 'fas fa-circle';
            return $template;
        });

        return compact('templateSection', 'uniqueTemplates');
    }

    public function getDigitalSolutionsData()
    {
        // Retrieve the first header entry
        $header = DigitalSolutionsHeader::first();

        // Retrieve all digital solutions
        $solutions = DigitalSolutionsSection::all();

        return [
            'header' => $header,
            'solutions' => $solutions
        ];
    }

    public function getHubHeader()
    {
        return HubHeader::first();
    }

    public function getDigitalHubFeatures()
    {
        return DigitalHubFeature::all();
    }

    public function getBannerData()
    {
        $bannerSection = BannerSection::first();

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

        $blogPosts->transform(function ($post) {
            $post->formatted_date = Carbon::parse($post->published_at)->format('d M');
            return $post;
        });

        return $blogPosts;
    }
}
