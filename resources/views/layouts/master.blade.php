
<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
       <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Advanced Kraft Web - Manage your data efficiently with our robust platform.">
        <meta name="keywords" content="Kraft Web, admin panel, analytics, management, data, responsive">
        <meta name="author" content="Your Company Name">
        <meta name="theme-color" content="#ffffff">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.kraft-web.dev">
        <meta property="og:title" content="Advanced Kraft Web">
        <meta property="og:description" content="Manage your data efficiently with our robust platform.">
        <meta property="og:image" content="https://www.kraft-web.dev/og-image.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.kraft-web.dev">
        <meta property="twitter:title" content="Advanced Kraft Web">
        <meta property="twitter:description" content="Manage your data efficiently with our robust platform.">
        <meta property="twitter:image" content="https://www.kraft-web.dev/twitter-image.png">

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <link rel="mask-icon" href="{{ asset('images/safari-pinned-tab.svg') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}

        {{-- <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700&amp;family=Onest:wght@400;500;700&amp;display=swap" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/brands.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/regular.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/solid.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/svg-with-js.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/v4-font-face.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/v4-shims.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/v5-font-face.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/v4-shims.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/brands.min.js"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/v5-font-face.min.css"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/conflict-detection.min.js"> --}}
        @if(request()->is('*'))
        <link href="{{ asset('libs/fonts/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('libs/fonts/pro.min.js') }}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}

        <link rel="stylesheet" href="{{ asset('css/kraftweb/animation-intro.css') }}">
        <link rel="stylesheet" href="{{ asset('libs/fslightbox/flickity.min.css') }}">
        <link rel="stylesheet" href="{{ asset('libs/toastr/toastr.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/landing/landing-page-0b4d83ab.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}


        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-2Q5yK4tD0hlhSn0Lg6l9EJXpyxEdRMDTXDfZTtJTxL5YYGfXZcnyQHHEUjxyV2i1" crossorigin="anonymous"> --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-SoLlgHzxZZjgyoywQdPrgEaA5ktpAE4zQ0RL8A5yl6QlkwmdS7mG+EF5IGqD3Lz7" crossorigin="anonymous"></script> --}}

        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LtrjvnR4GearyA6CzeRI6Lklf1b2D6Nn5K5S5gWkzY5ZR5jjGw5rq/7ymPA56cH3" crossorigin="anonymous"> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-B++a4ODqXq7EkhWFGQ0lxZn69MoYZmB7mIdkHlgokZTgAx4T01BBM7VPb5Mvq1LE" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-cXo4p7ghj5W/MrNe6u7uoD1h6nQfpt0y2UowTAtAhSGk5ktJ23sl+AcG2AR/vm5n" crossorigin="anonymous"></script> --}}

        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb7Hp7etk1e5lt3C5p5GGR6ghryuI+Vozov+8" crossorigin="anonymous"> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBaOg8hFjqK1Nf7JQ4l0srrjxIWl69fIVaOe9p5DDI/mqDqJ" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha384-ZVc8/BfpdAqK/DUL4uVSevV+l/cb+nXIsdUmeb8qgB4cmCVebjwSBA3G8/iqp9bc" crossorigin="anonymous"></script> --}}

        {{-- <script src="{{ asset('libs/fslightbox/fslightbox.js') }}"></script>
        <script src="{{ asset('libs/toastr/toastr.min.js') }}"></script>
        <script src="{{ asset('js/app-2a13c465.js') }}"></script> --}}
        @endif
        {{-- <link rel="stylesheet" href="{{ asset('libs/flickity/flickity.min.css') }}"> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css"> --}}
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script> --}}
        {{-- <script src="{{ asset('libs/flickity/flickity.pkgd.min.js') }}"></script> --}}
        {{-- <script>
            document.addEventListener('DOMContentLoaded', function () {
                var elem = document.querySelector('.main-carousel');
                var flkty = new Flickity(elem, {
                    // options
                    cellAlign: 'left',
                    contain: true
                });
            });
        </script> --}}
</head>
<body class="group/body bg-background font-body text-foreground page-loaded">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    @include('layouts.scripts')
</body>
</html>
