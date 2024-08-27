<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ServiceController;

class HomeController extends Controller
{
    public function index(ServiceController $serviceController)
    {
        // Fetch service plans using the ServiceController
        $servicePlans = $serviceController->getServicePlans();

        return view('pages.home', compact('servicePlans'));
    }
}
