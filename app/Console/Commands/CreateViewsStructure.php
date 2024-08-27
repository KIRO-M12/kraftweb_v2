<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateViewsStructure extends Command
{
    protected $signature = 'make:views-structure';
    protected $description = 'Create the necessary Blade views and directory structure';

    public function handle()
    {
        $viewsPath = resource_path('views');

        // Directories to create
        $directories = [
            'layouts',
            'partials',
            'pages',
            'components'
        ];

        // Creating directories
        foreach ($directories as $dir) {
            $path = $viewsPath . '/' . $dir;
            if (!File::exists($path)) {
                File::makeDirectory($path, 0755, true);
                $this->info("Created directory: $path");
            } else {
                $this->info("Directory already exists: $path");
            }
        }

        // Creating Blade files
        $files = [
            'layouts/master.blade.php' => $this->getMasterTemplate(),
            'layouts/header.blade.php' => $this->getHeaderTemplate(),
            'layouts/footer.blade.php' => $this->getFooterTemplate(),
            'layouts/scripts.blade.php' => $this->getScriptsTemplate(),
            'partials/navbar.blade.php' => '<!-- Navbar goes here -->',
            'partials/hero.blade.php' => '<!-- Hero section goes here -->',
            'partials/features.blade.php' => '<!-- Features section goes here -->',
            'partials/testimonials.blade.php' => '<!-- Testimonials section goes here -->',
            'partials/contact.blade.php' => '<!-- Contact section goes here -->',
            'pages/home.blade.php' => $this->getHomeTemplate(),
            'pages/about.blade.php' => '@extends(\'layouts.master\') @section(\'title\', \'About Us\') @section(\'content\') <!-- About Us content goes here --> @endsection',
            'pages/services.blade.php' => '@extends(\'layouts.master\') @section(\'title\', \'Services\') @section(\'content\') <!-- Services content goes here --> @endsection',
            'pages/portfolio.blade.php' => '@extends(\'layouts.master\') @section(\'title\', \'Portfolio\') @section(\'content\') <!-- Portfolio content goes here --> @endsection',
            'pages/blog.blade.php' => '@extends(\'layouts.master\') @section(\'title\', \'Blog\') @section(\'content\') <!-- Blog content goes here --> @endsection',
            'pages/contact.blade.php' => '@extends(\'layouts.master\') @section(\'title\', \'Contact\') @section(\'content\') <!-- Contact content goes here --> @endsection',
            'components/card.blade.php' => '<!-- Card component goes here -->',
        ];

        foreach ($files as $file => $content) {
            $filePath = $viewsPath . '/' . $file;
            if (!File::exists($filePath)) {
                File::put($filePath, $content);
                $this->info("Created file: $filePath");
            } else {
                $this->info("File already exists: $filePath");
            }
        }

        $this->info('View structure created successfully!');
    }

    private function getMasterTemplate()
    {
        return <<<'EOT'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>
EOT;
    }

    private function getHeaderTemplate()
    {
        return <<<'EOT'
<!-- Header content goes here -->
EOT;
    }

    private function getFooterTemplate()
    {
        return <<<'EOT'
<!-- Footer content goes here -->
EOT;
    }

    private function getScriptsTemplate()
    {
        return <<<'EOT'
<!-- Scripts go here -->
EOT;
    }

    private function getHomeTemplate()
    {
        return <<<'EOT'
@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @include('partials.hero')
    @include('partials.features')
    @include('partials.testimonials')
    @include('partials.contact')
@endsection
EOT;
    }
}
