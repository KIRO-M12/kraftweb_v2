<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\FooterSection;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $footerData = FooterSection::first(); // Fetch the footer data
            $view->with('footerData', $footerData);
        });
    }
}
