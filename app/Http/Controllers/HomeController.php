<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ServiceController;

class HomeController extends Controller
{
    public function index(ServiceController $serviceController)
    {
        // Existing code fetching service and template data
        $servicePlans = $serviceController->getServicePlans();
        $serviceData = $serviceController->getServiceData();
        $services = $serviceData['services'];
        $serviceSections = $serviceData['serviceSections'];
        $sectionHeader = $serviceData['sectionHeader'];
        $templateData = $serviceController->getTemplateData();
        $templates = $templateData['uniqueTemplates'];
        $templateSection = $templateData['templateSection'];

        // New code to fetch digital solutions data
        $digitalSolutionsData = $serviceController->getDigitalSolutionsData();
        $hubHeader = $serviceController->getHubHeader();
        $hubFeatures = $serviceController->getDigitalHubFeatures();
        $bannerSection = $serviceController->getBannerData();

        // Fetch approach data
        $approachData = $serviceController->getApproachData();
        $approachSections = $approachData['approachSections'];
        $approachHeader = $approachData['approachHeader'];

        $faqData = $serviceController->getFaqData();
        $faqSection = $faqData['faqSection'];
        $faqItems = $faqData['faqItems'];

        $blogData = $serviceController->getBlogData();
        $blogSection = $blogData['blogSection'];
        $blogPosts = $blogData['blogPosts'];

        return view('pages.home', compact(
            'servicePlans', 'services', 'serviceSections', 'sectionHeader',
            'templates', 'templateSection', 'digitalSolutionsData', 'hubHeader',
            'hubFeatures', 'bannerSection', 'approachSections', 'approachHeader',
            'faqSection', 'faqItems', 'blogSection','blogPosts'
        ));
    } 
}
