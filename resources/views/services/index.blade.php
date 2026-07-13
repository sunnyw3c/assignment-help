@extends('layouts.app')

@section('title', 'All Services - Programming & Assignment Help | Trending Tutor')
@section('description',
    'Explore all our services including programming development, web & mobile apps, machine
    learning, and academic assignment help. Get expert assistance for coding projects and academic writing.')
@section('keywords',
    'programming services, assignment help, coding assistance, web development, mobile apps, essay
    writing, homework help, academic writing')

@section('content')
    <header class="bg-white dark:bg-slate-900" role="banner">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <span class="mb-3 inline-flex items-center gap-2 rounded-full border border-emerald-500/30 bg-emerald-50 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-emerald-600 dark:border-emerald-500/20 dark:bg-emerald-950/40 dark:text-emerald-400">
                    <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                    Expert Services Available 24/7
                </span>

                <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Complete <span class="text-blue-600 dark:text-blue-400">Programming &amp; Assignment</span> Help Services
                </h1>

                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    From complex coding projects to academic writing assignments. Get professional help with web
                    development, mobile apps, machine learning, essays, research papers, and more. All in one place.
                </p>

                <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ route('order') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                        Get Help Now
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#programming-services"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400">
                        Browse Services
                    </a>
                </div>

                <div class="mt-10 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">
                            {{ count($programmingServices) + count($assignmentServices) }}+</p>
                        <p class="text-xs text-slate-500 dark:text-slate-500">Total Services</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">50K+</p>
                        <p class="text-xs text-slate-500 dark:text-slate-500">Happy Clients</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">99%</p>
                        <p class="text-xs text-slate-500 dark:text-slate-500">Satisfaction</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-2xl font-bold text-amber-500">24/7</p>
                        <p class="text-xs text-slate-500 dark:text-slate-500">Support</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="programming-services" class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" role="main"
        aria-labelledby="programming-services-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                    Programming Services
                </p>
                <h2 id="programming-services-heading"
                    class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Professional Development <span class="text-blue-600 dark:text-blue-400">Services &amp; Solutions</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    Expert programming help for web development, mobile apps, machine learning, and more.
                </p>
                <a href="{{ route('services.programming.index') }}"
                    class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                    View All Programming Services
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($programmingServices as $service)
                    <article
                        class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">
                                {{ $service['icon'] }}
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $service['name'] }}</h3>
                                <p class="text-xs font-semibold text-blue-600 dark:text-blue-400">{{ $service['price_from'] }}+ &bull;
                                    {{ $service['turnaround'] }}</p>
                            </div>
                        </div>

                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $service['description'] }}</p>

                        <div class="mb-6 flex items-center gap-2 text-sm">
                            <span class="text-amber-500">&#9733;</span>
                            <span class="font-semibold text-slate-900 dark:text-white">{{ $service['rating'] }}</span>
                            <span class="text-slate-400 dark:text-slate-600">&bull;</span>
                            <span class="text-slate-600 dark:text-slate-400">{{ $service['orders_completed'] }}+ completed</span>
                        </div>

                        <div class="mt-auto flex gap-3">
                            <a href="{{ route('services.programming.show', $service['slug']) }}"
                                class="flex-1 rounded-xl border border-slate-300 px-4 py-2.5 text-center text-sm font-semibold text-slate-700 transition-colors hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400">
                                Learn More
                            </a>
                            <a href="{{ route('order') }}"
                                class="flex-1 rounded-xl bg-blue-600 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Help
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="assignment-services" class="bg-white py-14 sm:py-16 dark:bg-slate-900"
        aria-labelledby="assignment-services-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">
                    Assignment Help Services
                </p>
                <h2 id="assignment-services-heading"
                    class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Academic Writing <span class="text-indigo-600 dark:text-indigo-400">Help &amp; Assistance</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    Professional academic writing services for essays, research papers, dissertations, and more.
                </p>
                <a href="#assignment-services"
                    class="mt-4 inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 dark:hover:text-indigo-300">
                    View All Assignment Services
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($assignmentServices as $service)
                    <article
                        class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-xl text-white">
                                {{ $service->icon }}
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $service->name }}</h3>
                                <p class="text-xs font-semibold text-indigo-600 dark:text-indigo-400">
                                    ${{ $service->base_price_per_page }}/page &bull; {{ $service->turnaround_time }}</p>
                            </div>
                        </div>

                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $service->short_description }}</p>

                        <div class="mb-6 flex items-center gap-2 text-sm">
                            <span class="text-amber-500">&#9733;</span>
                            <span class="font-semibold text-slate-900 dark:text-white">{{ $service->rating }}</span>
                            <span class="text-slate-400 dark:text-slate-600">&bull;</span>
                            <span class="text-slate-600 dark:text-slate-400">{{ $service->orders_completed }}+ completed</span>
                        </div>

                        <div class="mt-auto flex gap-3">
                            <a href="{{ route('services.assignment.show', $service->slug) }}"
                                class="flex-1 rounded-xl border border-slate-300 px-4 py-2.5 text-center text-sm font-semibold text-slate-700 transition-colors hover:border-indigo-600 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-indigo-400 dark:hover:text-indigo-400">
                                Learn More
                            </a>
                            <a href="{{ route('order') }}"
                                class="flex-1 rounded-xl bg-indigo-600 px-4 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500">
                                Order Now
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Why Choose <span class="text-blue-600 dark:text-blue-400">Our Services</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    We provide comprehensive solutions for both programming and academic needs
                </p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">
                        &#127919;
                    </div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Professionals</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Certified developers and academic writers with proven expertise</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-xl text-white">
                        &#9889;
                    </div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Fast Delivery</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Quick turnaround times without compromising on quality</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-500 text-xl text-white">
                        &#128175;
                    </div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Quality Guaranteed</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">High-quality work with unlimited revisions within original scope</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-600 text-xl text-white">
                        &#128274;
                    </div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Confidential</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your privacy and security are our top priorities</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-2xl bg-slate-900 p-8 text-center sm:p-10 dark:border dark:border-slate-800 dark:bg-slate-950">
                <div class="mx-auto max-w-3xl">
                    <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">
                        Ready to Get Started?
                    </h2>
                    <p class="mt-2 text-sm leading-relaxed text-slate-400">
                        Join thousands of students and professionals who trust our services for their programming and
                        academic needs.
                    </p>
                    <div class="mt-7 flex flex-col items-center justify-center gap-3 sm:flex-row">
                        <a href="{{ route('order') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                            Get Help Now
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="{{ route('how-it-works') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white/10">
                            How It Works
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
