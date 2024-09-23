<?php

namespace App\Http\Controllers;

use App\Models\HowItWorksSection;
use Illuminate\Http\Request;

class HowItWorksController extends Controller
{
    public function howItWorks()
    {
        $howItWorksSection = HowItWorksSection::where('is_active', true)->first();

        if ($howItWorksSection) {
            $howItWorksSection->trusted_companies_logos = json_decode($howItWorksSection->trusted_companies_logos, true) ?? [];
            $howItWorksSection->steps = json_decode($howItWorksSection->steps, true) ?? [];
            $howItWorksSection->references = json_decode($howItWorksSection->references, true) ?? [];
            $howItWorksSection->additional_sections = json_decode($howItWorksSection->additional_sections, true) ?? [];
        }

        return view('pages.how-it-works', compact('howItWorksSection'));
    }
}
