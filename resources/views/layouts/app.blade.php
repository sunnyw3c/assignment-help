<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TY7PPKE8KE"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-TY7PPKE8KE');
        </script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Assignment Help USA | Expert Academic Support')</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <meta name="description" content="@yield('description', 'Expert academic support and assignment help available 24/7. Get professional assistance for essays, research papers, and homework from USA-based experts.')">
        <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">

        <!-- Canonical URL -->
        <link rel="canonical" href="@yield('canonical', url()->current())" />

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="@yield('title', 'Assignment Help USA | Expert Academic Support')">
        <meta property="og:description" content="@yield('description', 'Expert academic support and assignment help available 24/7.')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:locale" content="en_US">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', 'Assignment Help USA | Expert Academic Support')">
        <meta name="twitter:description" content="@yield('description', 'Expert academic support and assignment help available 24/7.')">
        <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-default.jpg'))">

        <!-- Additional SEO Meta Tags -->
        <meta name="author" content="@yield('author', config('app.name'))">
        <meta name="theme-color" content="#7c3aed">

        <!-- Structured Data -->
        @include('partials.structured-data')
        @stack('structured-data')

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

        <!-- Theme Detection Script -->
        <script>
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>

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
    <body class="font-sans antialiased bg-gray-50 dark:bg-slate-950 text-slate-800 dark:text-slate-200 transition-colors duration-300">
        <div class="min-h-screen flex flex-col bg-gray-50 dark:bg-slate-950">
            @include('partials.navbar')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-slate-800 shadow-sm transition-colors duration-300">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-grow">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('partials.footer')
        </div>

        <!-- Livewire Scripts -->
        @livewireScripts
        @stack('scripts')

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/69f589f1b402371c38a67ece/1jnji5mje';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    </body>
</html>
