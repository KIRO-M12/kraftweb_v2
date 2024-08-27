<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        // Example: Fetch testimonials from a database
        // $testimonials = Testimonial::all();
        // return view('pages.testimonials', compact('testimonials'));

        return view('pages.testimonials');
    }
}
