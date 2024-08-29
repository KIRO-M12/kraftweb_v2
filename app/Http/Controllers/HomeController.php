<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ServiceController;

class HomeController extends Controller
{
    public function index(ServiceController $serviceController)
    {
        // Fetch service plans using the ServiceController
        $servicePlans = $serviceController->getServicePlans();

        // Fetch all service data (services, sections, and headers) using the ServiceController
        $serviceData = $serviceController->getServiceData();

        // Extract services, service sections, and section headers from the service data
        $services = $serviceData['services'];
        $serviceSections = $serviceData['serviceSections'];
        $sectionHeader = $serviceData['sectionHeader'];

        // Fetch template data (templates and template section) using the ServiceController
        $templateData = $serviceController->getTemplateData();

        // Extract templates and template section from the template data
        $templates = $templateData['templates'];
        $templateSection = $templateData['templateSection'];

        // Pass all necessary data to the view
        return view('pages.home', compact('servicePlans', 'services', 'serviceSections', 'sectionHeader', 'templates', 'templateSection'));
    }
}
