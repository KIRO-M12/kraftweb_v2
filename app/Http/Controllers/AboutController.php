<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        // Fetch the first active About Section
        $aboutSection = AboutSection::where('is_active', true)->first();

        // Decode the JSON fields to make them arrays
        if ($aboutSection) {
            // Decode and handle the content fields
            $aboutSection->additional_sections = json_decode($aboutSection->additional_sections, true) ?? [];
            $aboutSection->icons = json_decode($aboutSection->icons, true) ?? [];
            $aboutSection->references = json_decode($aboutSection->references, true) ?? [];

            // Decode the individual content parts for dynamic rendering
            $aboutSection->main_content_intro = $aboutSection->main_content_intro ?? '';
            $aboutSection->main_content_detail = $aboutSection->main_content_detail ?? '';
        }

        return view('pages.about', compact('aboutSection'));
    }
}
