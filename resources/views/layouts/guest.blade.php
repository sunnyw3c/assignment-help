@props(['title' => null])

@php
    // APP_NAME is still the framework default in some environments, so fall
    // back to the real brand rather than printing "Laravel" to users.
    $brand = in_array(config('app.name'), [null, '', 'Laravel'], true)
        ? 'Assignment Help USA'
        : config('app.name');
@endphp
<!DOCTYPE html>
{{-- data-livewire: these pages load @livewireScripts, which ships its own Alpine.
     The flag stops app.js starting a second copy and fighting over the DOM. --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-livewire>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ? $title . ' — ' : '' }}{{ $brand }}</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
        <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
        <meta name="robots" content="noindex, nofollow">

        {{-- Applied before first paint so the page never flashes the wrong
             theme. Mirrors the same localStorage key the navbar toggle uses. --}}
        <script>
            (function () {
                var stored = null;
                try { stored = localStorage.getItem('color-theme'); } catch (e) {}

                if (stored === 'dark' || (stored === null && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            })();
        </script>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles

        <style>
            /* Light theme is the default; the .dark class on <html> swaps the
               tokens. Every rule below reads from these, so the two themes stay
               in step. */
            :root {
                --auth-bg:           #f4f5fb;
                --auth-grid:         rgba(15, 23, 42, .055);
                --auth-grid-glow:    rgba(79, 70, 229, .55);
                --auth-halo:         rgba(99, 102, 241, .10);
                --auth-halo-2:       rgba(168, 85, 247, .05);

                --auth-card-bg:      rgba(255, 255, 255, .85);
                --auth-card-border:  rgba(15, 23, 42, .08);
                --auth-card-shadow:  0 20px 45px rgba(15, 23, 42, .10);

                --auth-heading:      #0f172a;
                --auth-muted:        #64748b;
                --auth-label:        #334155;
                --auth-footer:       #94a3b8;

                --auth-input-bg:     #fff;
                --auth-input-border: rgba(15, 23, 42, .14);
                --auth-input-text:   #0f172a;
                --auth-placeholder:  #94a3b8;
                --auth-input-focus-bg: #fff;

                --auth-link:         #4f46e5;
                --auth-link-hover:   #4338ca;
                --auth-reveal:       #94a3b8;
            }

            html.dark {
                --auth-bg:           #0b0f1a;
                --auth-grid:         rgba(255, 255, 255, .03);
                --auth-grid-glow:    rgba(139, 150, 255, .75);
                --auth-halo:         rgba(99, 102, 241, .16);
                --auth-halo-2:       rgba(168, 85, 247, .06);

                --auth-card-bg:      rgba(17, 20, 32, .82);
                --auth-card-border:  rgba(255, 255, 255, .07);
                --auth-card-shadow:  0 25px 50px rgba(0, 0, 0, .5);

                --auth-heading:      #fff;
                --auth-muted:        #94a3b8;
                --auth-label:        #c3c9d9;
                --auth-footer:       #475569;

                --auth-input-bg:     rgba(255, 255, 255, .035);
                --auth-input-border: rgba(255, 255, 255, .09);
                --auth-input-text:   #e8eaf2;
                --auth-placeholder:  #5b6478;
                --auth-input-focus-bg: rgba(255, 255, 255, .05);

                --auth-link:         #a5b4fc;
                --auth-link-hover:   #c7d2fe;
                --auth-reveal:       #6b7488;
            }

            /* Canvas with a faint grid, matching the auth surface used across
               our other internal apps. */
            body {
                background-color: var(--auth-bg);
                background-image:
                    linear-gradient(var(--auth-grid) 1px, transparent 1px),
                    linear-gradient(90deg, var(--auth-grid) 1px, transparent 1px);
                background-size: 44px 44px;
                position: relative;
                color: var(--auth-heading);
            }

            /* Mouse-tracking grid glow — the grid lines near the cursor light
               up in brand colour. A tinted copy of the same grid is masked to a
               circle that follows the pointer. */
            .grid-glow {
                position: fixed;
                inset: 0;
                pointer-events: none;
                z-index: 1;
                opacity: 0;
                transition: opacity .35s ease;
                background-image:
                    linear-gradient(var(--auth-grid-glow) 1px, transparent 1px),
                    linear-gradient(90deg, var(--auth-grid-glow) 1px, transparent 1px);
                background-size: 44px 44px;
                -webkit-mask-image: radial-gradient(350px circle at var(--gx, 50%) var(--gy, 50%), #000 0%, transparent 100%);
                mask-image: radial-gradient(350px circle at var(--gx, 50%) var(--gy, 50%), #000 0%, transparent 100%);
            }
            body.pointer-active .grid-glow { opacity: 1; }

            /* Touch devices have no hovering cursor to track. */
            @media (hover: none) {
                .grid-glow { display: none; }
            }

            @media (prefers-reduced-motion: reduce) {
                .grid-glow { transition: none; }
            }

            /* Brand glow behind the card. */
            body::before {
                content: '';
                position: fixed;
                top: -22%;
                left: 50%;
                transform: translateX(-50%);
                width: 820px;
                height: 620px;
                max-width: 140vw;
                background: radial-gradient(ellipse at center, var(--auth-halo) 0%, var(--auth-halo-2) 45%, transparent 70%);
                pointer-events: none;
                z-index: 0;
            }

            .auth-card {
                background: var(--auth-card-bg);
                border: 1px solid var(--auth-card-border);
                border-radius: 1rem;
                backdrop-filter: blur(12px);
                box-shadow: var(--auth-card-shadow);
            }

            .auth-input {
                width: 100%;
                border-radius: .625rem;
                border: 1px solid var(--auth-input-border);
                background: var(--auth-input-bg);
                padding: .625rem .875rem;
                font-size: .875rem;
                color: var(--auth-input-text);
                transition: border-color .15s, box-shadow .15s, background-color .15s;
            }
            .auth-input::placeholder { color: var(--auth-placeholder); }
            .auth-input:focus {
                outline: none;
                border-color: rgba(129, 140, 248, .55);
                background: var(--auth-input-focus-bg);
                box-shadow: 0 0 0 3px rgba(99, 102, 241, .16);
            }
            .auth-input[aria-invalid="true"] {
                border-color: rgba(248, 113, 113, .55);
            }

            .auth-label {
                display: block;
                margin-bottom: .375rem;
                font-size: .8125rem;
                font-weight: 600;
                color: var(--auth-label);
            }

            .auth-btn {
                width: 100%;
                border-radius: .625rem;
                background: linear-gradient(135deg, #6366f1, #8b5cf6);
                padding: .625rem 1rem;
                font-size: .875rem;
                font-weight: 700;
                color: #fff;
                box-shadow: 0 8px 20px rgba(99, 102, 241, .28);
                transition: filter .15s, transform .15s, box-shadow .15s;
            }
            .auth-btn:hover { filter: brightness(1.08); }
            .auth-btn:active { transform: translateY(1px); }
            .auth-btn:focus-visible {
                outline: none;
                box-shadow: 0 0 0 3px rgba(99, 102, 241, .35);
            }

            .auth-link { color: var(--auth-link); transition: color .15s; }
            .auth-link:hover { color: var(--auth-link-hover); }

            /* The password reveal toggle sits inside the field. */
            .auth-reveal {
                position: absolute;
                inset-inline-end: .625rem;
                top: 50%;
                transform: translateY(-50%);
                color: var(--auth-reveal);
                transition: color .15s;
            }
            .auth-reveal:hover { color: var(--auth-link); }

            /* Text tokens for the page content. */
            .auth-heading { color: var(--auth-heading); }
            .auth-muted   { color: var(--auth-muted); }

            /* Remember-me checkbox. */
            .auth-check {
                height: 1rem;
                width: 1rem;
                border-radius: .25rem;
                border: 1px solid var(--auth-input-border);
                background: var(--auth-input-bg);
                accent-color: #6366f1;
            }

            /* Footer / tagline share the muted token so both themes read. */
            .auth-meta { color: var(--auth-footer); }
            .auth-meta a { color: inherit; transition: color .15s; }
            .auth-meta a:hover { color: var(--auth-link); }

            @media (prefers-reduced-motion: reduce) {
                .auth-btn { transition: none; }
            }
        </style>
    </head>
    <body class="min-h-screen font-sans antialiased">
        {{-- Cursor-tracking grid highlight (see .grid-glow). --}}
        <div class="grid-glow" aria-hidden="true"></div>

        <div class="relative z-10 flex min-h-screen flex-col items-center justify-center px-5 py-10">

            {{-- Brand --}}
            <a href="{{ url('/') }}" class="mb-7 flex flex-col items-center gap-3">
                <img src="{{ asset('images/logo-320w.webp') }}"
                     alt="{{ $brand }}"
                     width="160" height="40"
                     class="h-10 w-auto">
                <span class="auth-meta text-[10px] font-semibold uppercase tracking-[0.2em]">
                    Academic Support Platform
                </span>
            </a>

            {{-- Card --}}
            <div class="auth-card w-full max-w-md px-7 py-8 sm:px-8">
                {{ $slot }}
            </div>

            {{-- Footer --}}
            <div class="auth-meta mt-7 flex flex-col items-center gap-2 text-center">
                <p class="text-[11px]">
                    &copy; {{ date('Y') }} {{ $brand }}
                </p>
                <div class="flex items-center gap-3 text-[11px]">
                    <a href="{{ route('privacy-policy') }}">Privacy</a>
                    <span aria-hidden="true">·</span>
                    <a href="{{ route('terms-of-service') }}">Terms</a>
                </div>
            </div>
        </div>

        @livewireScripts

        {{-- Cursor tracking for the grid glow. Inline and dependency-free so it
             runs on first paint rather than waiting on a bundle. --}}
        <script>
            (function () {
                // Devices without a hovering pointer have nothing to track.
                if (!window.matchMedia('(hover: hover)').matches) return;

                var body = document.body;
                var x = 0, y = 0, queued = false;

                function paint() {
                    queued = false;
                    body.style.setProperty('--gx', x + 'px');
                    body.style.setProperty('--gy', y + 'px');
                }

                // Coalesce moves into one write per frame.
                window.addEventListener('pointermove', function (e) {
                    x = e.clientX;
                    y = e.clientY;

                    if (!body.classList.contains('pointer-active')) {
                        body.classList.add('pointer-active');
                    }

                    if (!queued) {
                        queued = true;
                        requestAnimationFrame(paint);
                    }
                }, { passive: true });

                // Fade the glow out when the cursor leaves the window.
                document.addEventListener('mouseleave', function () {
                    body.classList.remove('pointer-active');
                });
            })();
        </script>
    </body>
</html>
