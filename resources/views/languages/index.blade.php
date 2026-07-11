@extends('layouts.app')

@section('title', 'Programming Languages Help - Expert Support for 20+ Languages | Trending Tutor')
@section('description', 'Get expert programming help for Python, Java, JavaScript, C++, C#, PHP, Go, Rust, Swift, Kotlin and more. Professional coding assistance with step-by-step solutions and 24/7 support.')
@section('keywords', 'programming languages, python help, java programming, javascript tutorial, c++ assistance, programming language learning, coding help, software development languages')

@section('content')
    <!-- Structured Data for Programming Languages -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ItemList",
        "name": "Programming Languages We Support",
        "description": "Comprehensive list of programming languages with expert help available",
        "numberOfItems": {{ count($languages) }},
        "itemListElement": [
            @foreach($languages as $index => $language)
            {
                "@@type": "ListItem",
                "position": {{ $index + 1 }},
                "item": {
                    "@@type": "Course",
                    "name": "{{ $language['name'] }} Programming Help",
                    "description": "{{ $language['description'] }}",
                    "provider": {
                        "@@type": "Organization",
                        "name": "Trending Tutor"
                    }
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>

    <!-- Hero Section -->
    <header class="bg-white dark:bg-slate-900" role="banner">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <!-- Status Badge -->
                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                    Expert Support for 20+ Programming Languages
                </div>

                <!-- Main Headline -->
                <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Master Every <span class="text-blue-600 dark:text-blue-400">Programming Language</span> with Expert Help
                </h1>

                <!-- Subtitle -->
                <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    From beginner-friendly Python to advanced system languages like Rust and C++.
                    Get instant, professional help with coding assignments, debugging, and project development
                    in any programming language.
                </p>

                <!-- CTA Buttons -->
                <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ route('order') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                        Get Programming Help Now
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#languages"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 px-6 py-3 text-sm font-semibold text-slate-700 transition-colors hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400">
                        Browse Languages
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="mx-auto mt-10 grid max-w-2xl grid-cols-2 gap-6 sm:grid-cols-4">
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-900 dark:text-white">20+</div>
                        <div class="text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Languages Supported</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-900 dark:text-white">15min</div>
                        <div class="text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Average Response</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-900 dark:text-white">98%</div>
                        <div class="text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Success Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-slate-900 dark:text-white">24/7</div>
                        <div class="text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Expert Support</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Programming Languages Showcase -->
    <section id="languages" class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" role="main" aria-labelledby="languages-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Programming Languages</p>
                <h2 id="languages-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Expert Help in <span class="text-blue-600 dark:text-blue-400">Every Programming Language</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    Choose from our comprehensive selection of programming languages. Our certified experts provide
                    step-by-step solutions, code debugging, and complete project development.
                </p>
            </div>

            <!-- Languages Grid -->
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                <!-- Python Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-lg text-white">🐍</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Python</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400">Most Popular</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#1 &middot; 4.9/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">150+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">12min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Data Science & Machine Learning
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Django & Flask Web Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Automation & Scripting
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            AI & Deep Learning
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                        Get Python Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- JavaScript Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-500 text-sm font-bold text-white">JS</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">JavaScript</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-amber-600 dark:text-amber-400">Full-Stack</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#2 &middot; 4.8/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">120+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">15min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            React.js & Vue.js Frontend
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Node.js Backend Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Full-Stack Applications
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-amber-600 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            API Integration & Development
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-amber-500 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-amber-600">
                        Get JavaScript Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Java Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-600 text-lg text-white">☕</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Java</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-red-600 dark:text-red-400">Enterprise</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#3 &middot; 4.7/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">98+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">18min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Object-Oriented Programming
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Spring Boot Applications
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Android Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-red-600 dark:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Enterprise Solutions
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-red-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-red-700">
                        Get Java Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- C++ Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-xs font-bold text-white">C++</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">C++</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-indigo-600 dark:text-indigo-400">Performance</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#4 &middot; 4.6/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">85+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">20min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            System Programming
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Game Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Data Structures & Algorithms
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Performance Optimization
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-700">
                        Get C++ Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- C# Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-xs font-bold text-white">C#</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">C#</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-purple-600 dark:text-purple-400">Microsoft</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#5 &middot; 4.5/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">72+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">22min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            .NET Applications
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Desktop Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Web APIs & Services
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Unity Game Development
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-700">
                        Get C# Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- PHP Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-lg text-white">🐘</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">PHP</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-indigo-600 dark:text-indigo-400">Web Backend</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#6 &middot; 4.4/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">64+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">25min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Laravel Web Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            WordPress Customization
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            E-commerce Solutions
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Database Integration
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-700">
                        Get PHP Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Go Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-cyan-600 text-lg text-white">🐹</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Go</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-cyan-600 dark:text-cyan-400">Cloud Native</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#7 &middot; 4.6/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">45+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">18min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-cyan-600 dark:text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Backend Microservices
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-cyan-600 dark:text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Cloud Applications
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-cyan-600 dark:text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            DevOps Tools
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-cyan-600 dark:text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Concurrent Programming
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-cyan-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-cyan-700">
                        Get Go Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Rust Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-lg text-white">🦀</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Rust</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-orange-600 dark:text-orange-400">Memory Safe</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#8 &middot; 4.7/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">38+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">25min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Systems Programming
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            WebAssembly Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Blockchain Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Performance-Critical Apps
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-orange-700">
                        Get Rust Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Swift Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-rose-500 text-lg text-white">🍎</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Swift</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-rose-600 dark:text-rose-400">iOS Development</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#9 &middot; 4.5/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">32+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">30min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            iOS App Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            macOS Applications
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            SwiftUI Interfaces
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Apple Ecosystem Apps
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-rose-500 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-rose-600">
                        Get Swift Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Kotlin Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-lg text-white">🎯</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Kotlin</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-purple-600 dark:text-purple-400">Modern JVM</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#10 &middot; 4.6/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">41+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">20min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Android App Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Server-side Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Multiplatform Projects
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Spring Boot with Kotlin
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-700">
                        Get Kotlin Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- TypeScript Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-sm font-bold text-white">TS</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">TypeScript</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400">Typed JavaScript</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#11 &middot; 4.7/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">89+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">16min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Large-scale Applications
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            React/Angular/Vue with TS
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Node.js Backend APIs
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Type Safety & Refactoring
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-700">
                        Get TypeScript Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Ruby Card -->
                <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-rose-600 text-lg text-white">💎</div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Ruby</h3>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-rose-600 dark:text-rose-400">Developer Joy</p>
                            </div>
                        </div>
                        <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-300">#12 &middot; 4.4/5</span>
                    </div>

                    <div class="mb-4 grid grid-cols-2 gap-3">
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">35+</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Projects Done</div>
                        </div>
                        <div class="rounded-xl bg-slate-50 p-3 text-center dark:bg-slate-900">
                            <div class="text-lg font-bold text-slate-900 dark:text-white">28min</div>
                            <div class="text-xs text-slate-500 dark:text-slate-400">Avg Response</div>
                        </div>
                    </div>

                    <ul class="mb-6 space-y-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Ruby on Rails Applications
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Web Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            API Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-rose-600 dark:text-rose-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Scripting & Automation
                        </li>
                    </ul>

                    <a href="{{ route('order') }}" class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-rose-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-rose-700">
                        Get Ruby Help
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Programming Language Help -->
    <section class="py-24 bg-gradient-to-br from-purple-50 to-indigo-50 relative overflow-hidden" aria-labelledby="why-choose-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-xl">
                    <span class="mr-3 text-xl">⭐</span>
                    WHY STUDENTS CHOOSE US
                </div>

                <h2 id="why-choose-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Expert Programming Help
                    <br>
                    <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">For Every Language</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">🎯</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Language-Specific Experts</h3>
                    <p class="text-gray-600 leading-relaxed">Our developers specialize in specific programming languages, ensuring you get expert-level help tailored to each language's unique features and best practices.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">📚</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Learning-Focused Approach</h3>
                    <p class="text-gray-600 leading-relaxed">We don't just solve problems - we teach you the concepts, syntax, and programming patterns that make you a better developer in your chosen language.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">💡</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Real-World Examples</h3>
                    <p class="text-gray-600 leading-relaxed">Get practical, industry-standard solutions with detailed explanations that help you understand how each language is used in professional development.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">⚡</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Instant Support</h3>
                    <p class="text-gray-600 leading-relaxed">Get help within minutes, not hours. Our experts are available 24/7 to assist with urgent assignments, debugging sessions, and project deadlines.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">🔧</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Complete Solutions</h3>
                    <p class="text-gray-600 leading-relaxed">From simple syntax questions to complex algorithm implementations, we provide complete, tested solutions with comprehensive documentation.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Academic Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">Boost your grades with professionally written code that follows academic standards and includes detailed explanations for better understanding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programming Content Types Section -->
    <section class="py-24 bg-white relative overflow-hidden" aria-labelledby="content-types-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">📋</span>
                    WHAT WE HELP WITH
                </div>

                <h2 id="content-types-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Every Type of Programming
                    <br>
                    <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Assignment & Project</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    From basic syntax to complex algorithms, we provide expert assistance for all types of programming content across every language.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Assignments & Homework -->
                <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">📝</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Assignments & Homework</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Coding exercises and problems
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Algorithm implementations
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Data structure assignments
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Object-oriented programming
                        </li>
                    </ul>
                </div>

                <!-- Projects & Applications -->
                <div class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🚀</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Projects & Applications</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            Web applications (Frontend/Backend)
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            Mobile app development
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            Desktop applications
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            API development & integration
                        </li>
                    </ul>
                </div>

                <!-- Debugging & Code Review -->
                <div class="group bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🔧</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Debugging & Code Review</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Error fixing and troubleshooting
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Code optimization
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Performance improvements
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Code refactoring
                        </li>
                    </ul>
                </div>

                <!-- Exam Preparation -->
                <div class="group bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🎓</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Exam Preparation</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Coding interview practice
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Algorithm challenges
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Technical assessments
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Certification preparation
                        </li>
                    </ul>
                </div>

                <!-- Database & Backend -->
                <div class="group bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-cyan-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🗄️</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Database & Backend</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            SQL query optimization
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            Database design & modeling
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            Server-side programming
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            RESTful API development
                        </li>
                    </ul>
                </div>

                <!-- Data Science & AI -->
                <div class="group bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-indigo-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🤖</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Data Science & AI</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Machine learning models
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Data analysis & visualization
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Neural networks & deep learning
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Statistical programming
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-20">
                <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-2xl p-12 max-w-4xl mx-auto border border-gray-200">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">
                        Don't See Your Programming Need?
                    </h3>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        We cover every programming concept, framework, and technology.
                        Get personalized help for any coding challenge you're facing.
                    </p>
                    <a href="{{ route('order') }}"
                       class="inline-flex items-center justify-center bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span class="mr-3">💬</span>
                        Describe Your Project
                        <svg class="ml-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-600 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                    Ready to Master Your Programming Language?
                </h2>
                <p class="text-xl text-purple-100 mb-12 leading-relaxed">
                    Join thousands of students who've accelerated their programming journey with our expert help.
                    Get instant assistance, learn faster, and achieve better grades.
                </p>
                <a href="{{ route('order') }}"
                   class="group inline-flex items-center justify-center bg-white text-purple-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <span class="mr-4 text-3xl">🚀</span>
                    Start Getting Help Now
                    <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection