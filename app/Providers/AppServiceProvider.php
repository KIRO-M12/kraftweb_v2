<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Blade;
use App\Models\FooterSection;
use App\Models\Header;
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
        // Define a custom Blade directive for adding an 'active' class
        Blade::directive('isActiveLink', function ($expression) {
            return "<?php echo request()->url() === $expression ? 'active' : ''; ?>";
        });

        View::composer('*', function ($view) {
            // Get the current route name
            $currentRouteName = request()->route() ? request()->route()->getName() : '';

            // Define the restricted route names
            $restrictedRoutes = ['login', 'register', 'dashboard.*']; // Adjust with your actual route names
            // Define the routes where 'lqd-is-sticky' should be added by default
            $stickyRoutes = ['about', 'contact']; // Add more routes as needed
            // Only add header and footer data if the current route is not restricted
            if (!in_array($currentRouteName, $restrictedRoutes)) {
                // Fetch header data
                $headerData = Header::first();
                if ($headerData) {
                    // Decode nav_links and languages if they are JSON strings
                    if (is_string($headerData->nav_links)) {
                        $headerData->nav_links = json_decode($headerData->nav_links, true);
                    }

                    if (is_string($headerData->languages)) {
                        $headerData->languages = json_decode($headerData->languages, true);
                    }
                }

                // Fetch footer data
                $footerData = FooterSection::first();
                if ($footerData) {
                    // Decode 'additions' if it's a JSON string
                    if (is_string($footerData->additions)) {
                        $footerData->additions = json_decode($footerData->additions, true);

                        // Handle potential JSON decoding errors
                        if (json_last_error() !== JSON_ERROR_NONE) {
                            Log::error('Failed to decode additions JSON: ' . json_last_error_msg());
                            $footerData->additions = []; // Fallback to an empty array if JSON decoding fails
                        }
                    } else if (!is_array($footerData->additions)) {
                        $footerData->additions = [];
                    }
                }

                // Check if the current route is in the stickyRoutes array
                $isSticky = in_array($currentRouteName, $stickyRoutes);
                // Pass the sticky class to all views
                $view->with('isSticky', $isSticky);
                // Pass the decoded and validated header and footer data to the views
                $view->with('headerData', $headerData);
                $view->with('footerData', $footerData);
            }
        });
    }
}
