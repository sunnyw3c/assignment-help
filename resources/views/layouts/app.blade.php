<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Laravel'))</title>
        <meta name="description" content="@yield('description', 'Professional programming help and coding assistance available 24/7. Expert developers provide instant support for Python, Java, JavaScript, C++, and more.')">
        <meta name="keywords" content="@yield('keywords', 'programming help, coding assistance, python help, java help, javascript help, c++ help, coding tutoring, programming assignment help')">
        <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

        <!-- Canonical URL -->
        <link rel="canonical" href="@yield('canonical', url()->current())" />

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="@yield('title', config('app.name', 'Laravel'))">
        <meta property="og:description" content="@yield('description', 'Professional programming help and coding assistance available 24/7.')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:locale" content="en_US">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', config('app.name', 'Laravel'))">
        <meta name="twitter:description" content="@yield('description', 'Professional programming help and coding assistance available 24/7.')">
        <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-default.jpg'))">

        <!-- Additional SEO Meta Tags -->
        <meta name="author" content="@yield('author', config('app.name'))">
        <meta name="theme-color" content="#7c3aed">

        <!-- DNS Prefetch & Preconnect for Performance -->
        <link rel="dns-prefetch" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>

        <!-- Preload Critical Resources -->
        <link rel="preload" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"></noscript>

        <!-- Critical CSS Inline (Above the Fold) -->
        <style>
            /* Critical CSS for immediate rendering */
            body {
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
                margin: 0;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .min-h-screen { min-height: 100vh; }
            .bg-gray-100 { background-color: #f3f4f6; }
            /* Prevent flash of unstyled content */
            [x-cloak] { display: none !important; }
        </style>

        <!-- Scripts with defer for non-blocking and better TBT -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Livewire Styles -->
        @livewireStyles

        <!-- Optimize font loading to not block main thread -->
        <script>
            // Use requestIdleCallback for non-critical font loading
            if ('requestIdleCallback' in window) {
                requestIdleCallback(() => {
                    if ('fonts' in document) {
                        document.fonts.load('1em figtree');
                    }
                });
            } else {
                // Fallback for browsers without requestIdleCallback
                setTimeout(() => {
                    if ('fonts' in document) {
                        document.fonts.load('1em figtree');
                    }
                }, 1);
            }
        </script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('partials.navbar')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <!-- Footer -->
            @include('partials.footer')
        </div>

        <!-- Livewire Scripts -->
        @livewireScripts
    </body>
</html>
