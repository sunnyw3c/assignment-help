@extends('layouts.app')

@section('title', 'Programming Services - Expert Development Help | Trending Tutor')
@section('description', 'Professional programming services: web development, mobile apps, machine learning, and more. Get expert coding help from certified USA developers today!')


@section('content')

    <!-- Hero Section -->
    <x-creative-hero
        title="Expert Programming Services for Every Need"
        subtitle="From simple coding assignments to complex enterprise applications. Get professional development services with guaranteed quality and timely delivery."
        service-type="Technical"
    />

    <!-- Assignment Search Filter Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <livewire:assignment-search-filter />
        </div>
    </section>

    <!-- Featured Programming Services: PHP & Java -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Most Popular Services</p>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Expert PHP &amp; Java <span class="text-blue-600 dark:text-blue-400">Programming Help</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    Get professional help with the two most widely-used programming languages in web and enterprise development
                </p>
            </div>

            <!-- PHP & Java Featured Cards -->
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2">
                <!-- PHP Service Card -->
                <article class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <!-- Icon & Badge -->
                    <div class="mb-4 flex items-start justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white">
                                <span class="text-xl">🐘</span>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">PHP Programming</h3>
                                <span class="text-[11px] font-semibold uppercase tracking-wide text-indigo-600 dark:text-indigo-400">4.8/5 · 1100+ Projects</span>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-full bg-amber-100 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide text-amber-800 dark:bg-amber-500/10 dark:text-amber-400">Popular</span>
                    </div>

                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        Professional PHP development services for Laravel, Symfony, WordPress, and custom web applications. Expert help from $30.
                    </p>

                    <ul role="list" class="mb-6 grid grid-cols-2 gap-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Laravel &amp; Symfony
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            WordPress Dev
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            API Development
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Database Integration
                        </li>
                    </ul>

                    <div class="mt-auto flex items-center justify-between gap-3 border-t border-slate-100 pt-4 dark:border-slate-800">
                        <div>
                            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-500">Starting from</p>
                            <p class="text-2xl font-bold text-slate-900 dark:text-white">$30<span class="text-sm font-medium text-slate-500 dark:text-slate-400">/project</span></p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('services.programming.show', 'php') }}"
                                class="inline-flex items-center justify-center gap-1.5 rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-indigo-600 hover:text-indigo-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-indigo-400 dark:hover:text-indigo-400">
                                Details
                            </a>
                            <a href="{{ route('order') }}"
                                class="inline-flex items-center justify-center gap-1.5 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500">
                                Get Help
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Java Service Card -->
                <article class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <!-- Icon & Badge -->
                    <div class="mb-4 flex items-start justify-between gap-3">
                        <div class="flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">
                                <span class="text-xl">☕</span>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Java Programming</h3>
                                <span class="text-[11px] font-semibold uppercase tracking-wide text-orange-600 dark:text-orange-400">4.9/5 · 1350+ Projects</span>
                            </div>
                        </div>
                        <span class="shrink-0 rounded-full bg-amber-100 px-2.5 py-1 text-[11px] font-semibold uppercase tracking-wide text-amber-800 dark:bg-amber-500/10 dark:text-amber-400">Top Rated</span>
                    </div>

                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        Expert Java development help for Spring Boot, Android apps, enterprise applications, and core Java programming. From $35.
                    </p>

                    <ul role="list" class="mb-6 grid grid-cols-2 gap-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Spring Boot &amp; MVC
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Android Apps
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            OOP &amp; Design Patterns
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-orange-600 dark:text-orange-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            Enterprise Solutions
                        </li>
                    </ul>

                    <div class="mt-auto flex items-center justify-between gap-3 border-t border-slate-100 pt-4 dark:border-slate-800">
                        <div>
                            <p class="text-[11px] font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-500">Starting from</p>
                            <p class="text-2xl font-bold text-slate-900 dark:text-white">$35<span class="text-sm font-medium text-slate-500 dark:text-slate-400">/project</span></p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('services.programming.show', 'java') }}"
                                class="inline-flex items-center justify-center gap-1.5 rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-orange-600 hover:text-orange-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-orange-400 dark:hover:text-orange-400">
                                Details
                            </a>
                            <a href="{{ route('order') }}"
                                class="inline-flex items-center justify-center gap-1.5 rounded-xl bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-orange-500">
                                Get Help
                            </a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Cross-Linking Benefits Section -->
            <div class="mt-6 grid grid-cols-1 gap-5 rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900 sm:grid-cols-3 sm:text-center">
                <div>
                    <div class="mb-2 text-2xl">🎯</div>
                    <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Full-Stack Expertise</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Combine PHP backend with Java enterprise solutions for complete web applications</p>
                </div>
                <div>
                    <div class="mb-2 text-2xl">⚡</div>
                    <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Fast Turnaround</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Both services offer 12-48 hour delivery for urgent projects with quality guaranteed</p>
                </div>
                <div>
                    <div class="mb-2 text-2xl">💯</div>
                    <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">2450+ Projects Done</h4>
                    <p class="text-sm text-slate-600 dark:text-slate-400">Combined experience across PHP and Java with 4.8+ star ratings from students</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programming Services Showcase -->
    <section id="services" class="bg-white py-14 sm:py-16 dark:bg-slate-900" role="main" aria-labelledby="services-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Programming Services</p>
                <h2 id="services-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Professional Development <span class="text-blue-600 dark:text-blue-400">Services &amp; Solutions</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    Choose from our comprehensive range of programming services. Our certified developers deliver
                    high-quality solutions with complete documentation and ongoing support.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach($services as $service)
                <article class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center gap-3">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                            <span class="text-xl">{{ $service['icon'] }}</span>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $service['name'] }}</h3>
                            <span class="text-[11px] font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400">{{ $service['turnaround'] }}</span>
                        </div>
                    </div>

                    <div class="mb-4 flex items-center justify-between text-xs font-semibold text-slate-500 dark:text-slate-400">
                        <span>{{ $service['rating'] }}/5 rating</span>
                        <span>{{ $service['price_from'] }}+</span>
                    </div>

                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $service['description'] }}</p>

                    <ul role="list" class="mb-6 grid grid-cols-2 gap-2 text-sm font-medium text-slate-700 dark:text-slate-300">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-center gap-2">
                            <svg class="h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                            <span>{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>

                    <p class="mb-4 text-xs text-slate-500 dark:text-slate-500">{{ $service['orders_completed'] }}+ completed</p>

                    <div class="mt-auto flex gap-2">
                        <a href="{{ route('services.programming.show', $service['slug']) }}"
                            class="flex-1 inline-flex items-center justify-center gap-1.5 rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400">
                            Learn More
                        </a>
                        <a href="{{ route('order') }}"
                            class="flex-1 inline-flex items-center justify-center gap-1.5 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                            Get Help
                        </a>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- PHP vs Java: When to Use Which -->
            <div class="mt-12">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h3 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                        PHP vs Java: <span class="text-blue-600 dark:text-blue-400">Choose the Right Tool</span>
                    </h3>
                    <p class="mt-3 text-base leading-relaxed text-slate-600 dark:text-slate-400">Both are powerful, but serve different purposes. Here's when to use each.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                    <!-- PHP Use Cases -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white">
                                <span class="text-xl">🐘</span>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-slate-900 dark:text-white">PHP Programming</h4>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-indigo-600 dark:text-indigo-400">Best for Web Development</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <h5 class="mb-2 text-sm font-bold text-slate-900 dark:text-white">Perfect For</h5>
                                <ul class="space-y-1.5 text-sm text-slate-600 dark:text-slate-400">
                                    <li>Dynamic websites &amp; web applications</li>
                                    <li>Content Management Systems (WordPress, Drupal)</li>
                                    <li>E-commerce platforms &amp; shopping carts</li>
                                    <li>RESTful APIs &amp; backend services</li>
                                    <li>Rapid prototyping &amp; MVP development</li>
                                </ul>
                            </div>

                            <div>
                                <h5 class="mb-2 text-sm font-bold text-slate-900 dark:text-white">Popular Frameworks</h5>
                                <div class="flex flex-wrap gap-2">
                                    <span class="rounded-full bg-indigo-50 px-2.5 py-1 text-[11px] font-semibold text-indigo-700 dark:bg-indigo-950/40 dark:text-indigo-300">Laravel</span>
                                    <span class="rounded-full bg-purple-50 px-2.5 py-1 text-[11px] font-semibold text-purple-700 dark:bg-purple-950/40 dark:text-purple-300">Symfony</span>
                                    <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700 dark:bg-blue-950/40 dark:text-blue-300">WordPress</span>
                                    <span class="rounded-full bg-pink-50 px-2.5 py-1 text-[11px] font-semibold text-pink-700 dark:bg-pink-950/40 dark:text-pink-300">CodeIgniter</span>
                                </div>
                            </div>

                            <a href="{{ route('services.programming.show', 'php') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500">
                                Explore PHP Services
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Java Use Cases -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">
                                <span class="text-xl">☕</span>
                            </div>
                            <div>
                                <h4 class="text-base font-bold text-slate-900 dark:text-white">Java Programming</h4>
                                <p class="text-[11px] font-semibold uppercase tracking-wide text-orange-600 dark:text-orange-400">Best for Enterprise &amp; Mobile</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <h5 class="mb-2 text-sm font-bold text-slate-900 dark:text-white">Perfect For</h5>
                                <ul class="space-y-1.5 text-sm text-slate-600 dark:text-slate-400">
                                    <li>Enterprise applications &amp; microservices</li>
                                    <li>Android mobile app development</li>
                                    <li>Large-scale backend systems</li>
                                    <li>Desktop applications (JavaFX, Swing)</li>
                                    <li>High-performance computing tasks</li>
                                </ul>
                            </div>

                            <div>
                                <h5 class="mb-2 text-sm font-bold text-slate-900 dark:text-white">Popular Frameworks</h5>
                                <div class="flex flex-wrap gap-2">
                                    <span class="rounded-full bg-emerald-50 px-2.5 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-300">Spring Boot</span>
                                    <span class="rounded-full bg-orange-50 px-2.5 py-1 text-[11px] font-semibold text-orange-700 dark:bg-orange-950/40 dark:text-orange-300">Hibernate</span>
                                    <span class="rounded-full bg-cyan-50 px-2.5 py-1 text-[11px] font-semibold text-cyan-700 dark:bg-cyan-950/40 dark:text-cyan-300">Android SDK</span>
                                    <span class="rounded-full bg-red-50 px-2.5 py-1 text-[11px] font-semibold text-red-700 dark:bg-red-950/40 dark:text-red-300">JavaFX</span>
                                </div>
                            </div>

                            <a href="{{ route('services.programming.show', 'java') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-orange-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-orange-500">
                                Explore Java Services
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Need Both? Section -->
                <div class="mt-6 rounded-2xl bg-slate-900 p-8 text-center sm:p-10 dark:border dark:border-slate-800 dark:bg-slate-950">
                    <h4 class="text-2xl font-bold tracking-tight text-white">Need Both PHP &amp; Java for Your Project?</h4>
                    <p class="mx-auto mt-2 max-w-2xl text-sm text-slate-400">
                        Many modern applications use PHP for the web frontend and Java for backend microservices. We can help you build full-stack solutions combining both technologies.
                    </p>
                    <div class="mt-6 flex flex-col items-center justify-center gap-3 sm:flex-row">
                        <a href="{{ route('order') }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                            Discuss Your Project
                        </a>
                        <a href="#services"
                            class="inline-flex items-center justify-center gap-2 rounded-xl border border-slate-700 px-6 py-3 text-sm font-semibold text-slate-300 transition-colors hover:border-slate-500 hover:text-white">
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Services -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="why-choose-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">Why Choose Our Services</p>
                <h2 id="why-choose-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Professional Programming <span class="text-emerald-600 dark:text-emerald-400">Services &amp; Support</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-xl dark:bg-blue-950/40">🎯</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Developers</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our team consists of certified professional developers with years of industry experience across all programming languages and frameworks.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-xl dark:bg-purple-950/40">🚀</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Quick Turnaround</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Get your projects completed within 24-72 hours with our efficient development process and dedicated project management.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-xl dark:bg-emerald-950/40">💡</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Original Solutions</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every project is built from scratch with custom solutions tailored to your specific requirements and academic standards.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-xl dark:bg-amber-950/40">📝</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Complete Documentation</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Receive comprehensive documentation, code comments, and detailed explanations to understand every aspect of your project.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-50 text-xl dark:bg-cyan-950/40">🔧</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Testing &amp; Quality</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">All code is thoroughly tested, debugged, and optimized to ensure high performance and reliability before delivery.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl dark:bg-indigo-950/40">🎓</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Academic Excellence</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Boost your grades with professionally developed solutions that meet academic standards and include learning resources.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Transform Your Development Journey -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="transform-development-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Trusted by 5,000+ Developers &amp; Students</p>
                <h2 id="transform-development-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Turn Your Development <span class="text-blue-600 dark:text-blue-400">Challenges</span> Into Professional Solutions
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    From complex web applications to enterprise software solutions, our expert developers transform your project requirements
                    into production-ready code. Get professional development services with detailed documentation and proven architecture patterns that
                    elevate your technical capabilities.
                </p>

                <!-- Quick Stats -->
                <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4">
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-lg font-bold text-emerald-600 dark:text-emerald-400">98%</p>
                        <p class="text-[11px] font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Client Satisfaction</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-lg font-bold text-blue-600 dark:text-blue-400">24-72hr</p>
                        <p class="text-[11px] font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Delivery Time</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-lg font-bold text-purple-600 dark:text-purple-400">12+</p>
                        <p class="text-[11px] font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Services</p>
                    </div>
                    <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-950">
                        <p class="text-lg font-bold text-orange-600 dark:text-orange-400">24/7</p>
                        <p class="text-[11px] font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Expert Support</p>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:items-start">
                <!-- Left Content -->
                <div class="space-y-5">
                    <!-- Problem Statement -->
                    <div class="rounded-xl border-l-4 border-red-400 bg-red-50 p-6 dark:bg-red-950/20">
                        <h3 class="mb-2 flex items-center gap-2 text-base font-bold text-red-800 dark:text-red-400">
                            <span>⚠️</span>
                            The Development Challenge Every Professional Faces
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                            Tight deadlines? Complex architecture requirements? Need to scale your application but don't know where to start?
                            You're not alone — <strong class="font-semibold">85% of development teams</strong> struggle with resource constraints and technical complexity.
                        </p>
                    </div>

                    <!-- Solution -->
                    <div class="rounded-xl border-l-4 border-emerald-400 bg-emerald-50 p-6 dark:bg-emerald-950/20">
                        <h3 class="mb-2 flex items-center gap-2 text-base font-bold text-emerald-800 dark:text-emerald-400">
                            <span>✅</span>
                            Our Professional Development Approach
                        </h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                            We've built a comprehensive development ecosystem where <strong class="font-semibold">certified professionals</strong> don't just write code — they architect solutions. Every project includes
                            clean code practices, comprehensive documentation, and scalable design patterns.
                        </p>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="flex items-center gap-2 text-xs font-medium text-emerald-700 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-500"></span>
                                Production-ready code
                            </div>
                            <div class="flex items-center gap-2 text-xs font-medium text-emerald-700 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-500"></span>
                                Complete documentation
                            </div>
                            <div class="flex items-center gap-2 text-xs font-medium text-emerald-700 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-500"></span>
                                Industry best practices
                            </div>
                            <div class="flex items-center gap-2 text-xs font-medium text-emerald-700 dark:text-emerald-400">
                                <span class="h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-500"></span>
                                Scalable architecture
                            </div>
                        </div>
                    </div>

                    <!-- What Makes Us Different -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                            <span>🌟</span>
                            What Makes Our Services Different
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">1</div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">Enterprise-Grade Quality</h4>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Every project follows industry standards with thorough testing, code reviews, and quality assurance processes.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-purple-600 text-xs font-bold text-white">2</div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">Experienced Development Team</h4>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Work with developers who have real-world experience building applications used by thousands of users.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-xs font-bold text-white">3</div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">Full-Stack Expertise</h4>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">From frontend React to backend Node.js, databases to cloud deployment — we handle the complete stack.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Success Guarantee -->
                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-900/40 dark:bg-amber-950/20">
                        <h3 class="mb-2 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                            <span>🏆</span>
                            Our Quality Guarantee
                        </h3>
                        <p class="mb-4 text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                            <strong class="font-semibold">98% of our clients are satisfied</strong> with the quality and professionalism of delivered projects.
                            If you're not completely satisfied, we'll work with you through unlimited revisions within original scope — subject to our refund policy.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded-full bg-amber-200 px-2.5 py-1 text-[11px] font-semibold text-amber-800">Money-Back Guarantee</span>
                            <span class="rounded-full bg-emerald-200 px-2.5 py-1 text-[11px] font-semibold text-emerald-800">Unlimited Revisions</span>
                            <span class="rounded-full bg-blue-200 px-2.5 py-1 text-[11px] font-semibold text-blue-800">24/7 Support</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Visual -->
                <div class="space-y-5">
                    <!-- Code Quality Visualization -->
                    <div class="rounded-2xl bg-slate-900 p-6 shadow-sm dark:border dark:border-slate-800">
                        <!-- Header -->
                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center gap-1.5">
                                <div class="h-2.5 w-2.5 rounded-full bg-red-500"></div>
                                <div class="h-2.5 w-2.5 rounded-full bg-amber-500"></div>
                                <div class="h-2.5 w-2.5 rounded-full bg-emerald-500"></div>
                            </div>
                            <span class="font-mono text-xs text-slate-400">professional_service.js</span>
                        </div>

                        <!-- Code Content -->
                        <div class="space-y-1 font-mono text-xs leading-relaxed">
                            <div class="text-emerald-400">// Enterprise-Grade Development Services</div>
                            <div class="text-blue-400">class <span class="text-amber-400">ProfessionalService</span> {</div>
                            <div class="ml-4 text-slate-300">constructor() {</div>
                            <div class="ml-8 text-slate-300">this.expertise = <span class="text-emerald-400">"Full-Stack"</span>;</div>
                            <div class="ml-8 text-slate-300">this.quality = <span class="text-emerald-400">"Enterprise-Grade"</span>;</div>
                            <div class="ml-8 text-slate-300">this.support = <span class="text-emerald-400">"24/7"</span>;</div>
                            <div class="ml-4 text-slate-300">}</div>
                            <div class="ml-4 text-slate-300">async deliverProject() {</div>
                            <div class="ml-8 text-emerald-400">// Clean, documented, tested code</div>
                            <div class="ml-8 text-blue-400">const <span class="text-slate-300">result = </span><span class="text-blue-400">await</span><span class="text-slate-300"> this.develop();</span></div>
                            <div class="ml-8 text-blue-400">return <span class="text-slate-300">this.optimize(result);</span></div>
                            <div class="ml-4 text-slate-300">}</div>
                            <div class="text-slate-300">}</div>
                            <div class="text-emerald-400">// Result: Production-Ready Application ✅</div>
                        </div>
                    </div>

                    <!-- Stats Row -->
                    <div class="grid grid-cols-3 gap-3">
                        <div class="rounded-xl border border-slate-200 bg-white p-3.5 text-center dark:border-slate-800 dark:bg-slate-950">
                            <p class="text-lg font-bold text-slate-900 dark:text-white">5,000+</p>
                            <p class="text-[11px] font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Delivered</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-3.5 text-center dark:border-slate-800 dark:bg-slate-950">
                            <p class="text-lg font-bold text-slate-900 dark:text-white">4.9★</p>
                            <p class="text-[11px] font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Avg Rating</p>
                        </div>
                        <div class="rounded-xl border border-slate-200 bg-white p-3.5 text-center dark:border-slate-800 dark:bg-slate-950">
                            <div class="mx-auto mb-0.5 h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                            <p class="text-[11px] font-medium uppercase tracking-wide text-slate-500 dark:text-slate-400">Experts Online</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Call-to-Action -->
            <div class="mt-10 text-center">
                <div class="inline-flex flex-col items-center gap-3 sm:flex-row">
                    <a href="{{ route('order') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                        Start Your Project Journey
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <p class="text-xs text-slate-500 dark:text-slate-500">
                        Free consultation · No commitment required
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="process-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-purple-600 dark:text-purple-400">How It Works</p>
                <h2 id="process-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Simple 4-Step <span class="text-purple-600 dark:text-purple-400">Development Process</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-base font-bold text-white">1</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Submit Requirements</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Share your project details, requirements, and deadline through our simple order form.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-base font-bold text-white">2</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Assignment</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We assign your project to the most qualified developer based on your requirements.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-base font-bold text-white">3</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Development &amp; Testing</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your project is developed, tested, and quality-checked according to industry standards.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                    <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-orange-600 text-base font-bold text-white">4</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Delivery &amp; Support</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Receive your completed project with documentation and ongoing support for questions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-slate-900 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Ready to Start Your Programming Project?
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-400 sm:text-lg">
                    Join thousands of students and professionals who trust our expert development services and get high-quality solutions delivered on time.
                </p>
                <a href="{{ route('order') }}"
                   class="mt-8 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-purple-600 shadow-sm transition-colors hover:bg-slate-100">
                    Start Your Project Now
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Comprehensive Programming Services Information -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="comprehensive-info-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Comprehensive Programming Solutions</p>
                <h2 id="comprehensive-info-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Everything You Need to Know About Our <span class="text-blue-600 dark:text-blue-400">Programming Services</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">
                <!-- Left Column -->
                <div class="space-y-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-3 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">🎯</span>
                            Our Programming Expertise
                        </h3>
                        <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Our certified programming professionals bring decades of combined experience across languages, frameworks, and development methodologies, delivering custom software that meets academic requirements while following industry-standard best practices — from beginner syntax exercises to enterprise applications with complex design patterns and cloud deployment.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-3 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">⚡</span>
                            Quality Assurance Process
                        </h3>
                        <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Every project undergoes a rigorous, multi-stage review: code review, testing across multiple environments, and verification against academic requirements. We run automated testing frameworks, manual code audits, and security assessments to guarantee the quality, performance, and reliability academic institutions expect.
                        </p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-3 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">🚀</span>
                            Technology Stack Coverage
                        </h3>
                        <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            We cover an extensive range of technologies — Python, Java, JavaScript, C++, C#, Ruby, PHP, Go, Rust, Swift, and Kotlin — plus modern frameworks like React, Angular, Vue.js, Django, Flask, Spring Boot, Laravel, and Node.js. From database design (MySQL, PostgreSQL, MongoDB, Redis) to cloud deployment (AWS, Azure, GCP) and mobile development for iOS and Android, our diverse expertise handles any programming challenge.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-3 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">📋</span>
                            Academic Excellence Support
                        </h3>
                        <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Every delivery includes detailed documentation, comments explaining complex logic, step-by-step explanations, alternative implementation approaches, and performance analysis — plus ongoing support to help you understand the code and prepare for related coursework or exams. Our goal is not just to complete your assignment, but to enhance your learning.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Statistics Section -->
            <div class="mt-6 rounded-2xl bg-slate-900 p-8 text-center sm:p-10 dark:border dark:border-slate-800 dark:bg-slate-950">
                <h3 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Trusted by Students Worldwide</h3>
                <p class="mx-auto mt-2 max-w-2xl text-sm text-slate-400">Our programming services have helped thousands of students achieve academic excellence.</p>
                <div class="mt-7 flex flex-wrap items-center justify-center gap-x-10 gap-y-5">
                    <div class="text-center">
                        <p class="text-2xl font-bold text-white">2500+</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Projects Completed</p>
                    </div>
                    <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-white">150+</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Programming Languages</p>
                    </div>
                    <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-white">98.5%</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Client Satisfaction</p>
                    </div>
                    <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                    <div class="text-center">
                        <p class="text-2xl font-bold text-white">24/7</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Expert Support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection