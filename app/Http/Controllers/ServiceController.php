<?php

namespace App\Http\Controllers;

use App\Models\ServicePlan;

class ServiceController extends Controller
{
    public function getServicePlans()
    {
        $servicePlans = ServicePlan::with('categories')->get();

        foreach ($servicePlans as $plan) {
            foreach ($plan->categories as $category) {
                $category->services = json_decode($category->pivot->services, true);
            }
        }

        return $servicePlans;
    }

}
