<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BlogController;

class PageController extends Controller
{
 
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function features()
    {
        return view('pages.features');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function howItWorks()
    {
        return view('pages.how-it-works');
    }
}
