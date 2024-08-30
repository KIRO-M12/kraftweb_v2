<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\FooterSection;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

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

            // Check if 'additions' is a string and decode it
            if ($footerData && is_string($footerData->additions)) {
                $footerData->additions = json_decode($footerData->additions, true);

                // Handle potential JSON decoding errors
                if (json_last_error() !== JSON_ERROR_NONE) {
                    Log::error('Failed to decode additions JSON: ' . json_last_error_msg());
                    $footerData->additions = []; // Fallback to an empty array if JSON decoding fails
                }
            } else if (!is_array($footerData->additions)) {
                // If the additions field is neither a string nor an array, set it to an empty array
                $footerData->additions = [];
            }

            // Pass the decoded and validated footer data to the views
            $view->with('footerData', $footerData);
        });
    }
}
