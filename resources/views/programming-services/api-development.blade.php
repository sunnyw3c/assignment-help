@extends('layouts.app')

@section('title', 'API Development - Expert Help Available')
@section('description', 'Get professional help with API development projects. Expert developers available 24/7 for REST APIs, GraphQL, microservices, authentication, and API integration.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Technologies Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">API Technologies We Master</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Our expert API developers work with modern frameworks, protocols, and tools to build robust, scalable APIs.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
                    <!-- API Frameworks -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">API Frameworks</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-blue-50 p-3 text-center dark:bg-blue-950/40">
                                <div class="mb-1 text-2xl">🚀</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Express.js</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center dark:bg-blue-950/40">
                                <div class="mb-1 text-2xl">⚙️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">FastAPI</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center dark:bg-blue-950/40">
                                <div class="mb-1 text-2xl">🔷</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Django REST</h4>
                            </div>
                        </div>
                    </div>

                    <!-- API Standards -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">API Standards</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-emerald-50 p-3 text-center dark:bg-emerald-950/40">
                                <div class="mb-1 text-2xl">🔗</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">REST</h4>
                            </div>
                            <div class="rounded-xl bg-emerald-50 p-3 text-center dark:bg-emerald-950/40">
                                <div class="mb-1 text-2xl">📊</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">GraphQL</h4>
                            </div>
                            <div class="rounded-xl bg-emerald-50 p-3 text-center dark:bg-emerald-950/40">
                                <div class="mb-1 text-2xl">⚡</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">gRPC</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Authentication -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Authentication</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-amber-50 p-3 text-center dark:bg-amber-950/40">
                                <div class="mb-1 text-2xl">🔐</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">JWT</h4>
                            </div>
                            <div class="rounded-xl bg-amber-50 p-3 text-center dark:bg-amber-950/40">
                                <div class="mb-1 text-2xl">🛡️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">OAuth 2.0</h4>
                            </div>
                            <div class="rounded-xl bg-amber-50 p-3 text-center dark:bg-amber-950/40">
                                <div class="mb-1 text-2xl">🔑</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">API Keys</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Documentation -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Documentation</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-purple-50 p-3 text-center dark:bg-purple-950/40">
                                <div class="mb-1 text-2xl">📝</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Swagger</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center dark:bg-purple-950/40">
                                <div class="mb-1 text-2xl">📖</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Postman</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center dark:bg-purple-950/40">
                                <div class="mb-1 text-2xl">📚</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">OpenAPI</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Transparent Pricing</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Fair, transparent pricing based on API complexity and features. No hidden fees, no surprises.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="text-center">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Basic API</h3>
                            <div class="mb-4 text-4xl font-bold text-slate-900 dark:text-white">From $40</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Simple REST API
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    CRUD operations
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    12-24 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Basic documentation
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-purple-600 hover:text-purple-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-purple-400 dark:hover:text-purple-400">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="relative rounded-2xl border border-purple-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-purple-500 dark:bg-slate-900">
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-purple-600 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">
                            Most Popular
                        </span>
                        <div class="text-center">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Advanced API</h3>
                            <div class="mb-4 text-4xl font-bold text-slate-900 dark:text-white">From $90</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Complex REST/GraphQL API
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    JWT authentication
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Rate limiting
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Swagger docs
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-500">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="text-center">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Enterprise API</h3>
                            <div class="mb-4 text-4xl font-bold text-slate-900 dark:text-white">From $180</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Microservices architecture
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    OAuth 2.0 integration
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    2-3 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    API gateway setup
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Full testing suite
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-purple-600 hover:text-purple-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-purple-400 dark:hover:text-purple-400">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Our API Development Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Proven methodology for delivering secure, scalable, and well-documented APIs.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">1</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">API Design</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We design RESTful or GraphQL endpoints with clear resource structures and efficient data models.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">2</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Authentication &amp; Security</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Implement JWT, OAuth 2.0, or API key authentication with proper validation and rate limiting.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">3</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Development &amp; Testing</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Build endpoints with error handling, input validation, and comprehensive API testing.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">4</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Documentation &amp; Delivery</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Create Swagger/OpenAPI docs, provide Postman collections, and deliver complete API package.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">What Our Clients Say</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Real feedback from students who got help with their API development projects.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex text-amber-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Perfect REST API for my mobile app backend! Clean code, JWT authentication, and excellent Swagger documentation. The expert even added rate limiting. Highly recommend!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-500 text-sm font-bold text-white">M</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Marcus T.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Mobile Dev Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex text-amber-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Amazing GraphQL API implementation! The schema design was perfect for my requirements. Got full CRUD operations with filtering and pagination. Great work!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-500 text-sm font-bold text-white">E</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Emily R.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Web Dev Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex text-amber-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Professional microservices architecture! The developer built separate services with API gateway integration. Excellent documentation and deployment guide included!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">J</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">James W.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Use Cases Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">API Development Use Cases</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Explore the diverse applications of our API development expertise across different domains.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-2xl dark:bg-blue-950/40">📱</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Mobile App Backends</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">RESTful APIs for iOS and Android apps with user authentication, data synchronization, push notifications, and offline support.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-2xl dark:bg-emerald-950/40">🛒</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">E-commerce Solutions</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Product catalog APIs, shopping cart management, payment gateway integration, order processing, and inventory tracking systems.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-2xl dark:bg-purple-950/40">🔗</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Third-Party Integrations</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Connect your application with external services like payment processors, social media platforms, cloud storage, and analytics tools.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-2xl dark:bg-amber-950/40">📊</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Data Analytics APIs</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Build APIs for data aggregation, real-time analytics, reporting dashboards, and business intelligence applications.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-pink-50 text-2xl dark:bg-pink-950/40">🤖</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">AI/ML Integration</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">APIs for machine learning models, natural language processing, image recognition, and AI-powered features.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-2xl dark:bg-indigo-950/40">🏢</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Enterprise Systems</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Microservices architecture, API gateways, service mesh implementation, and distributed system communication.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- API Features Section -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Essential API Features We Implement</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Every API we build includes industry-standard features for security, performance, and scalability.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-xl dark:bg-purple-950/40">🔐</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Authentication &amp; Authorization</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">JWT tokens, OAuth 2.0, API keys, role-based access control (RBAC), and session management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-xl dark:bg-blue-950/40">⚡</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Rate Limiting &amp; Throttling</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Protect your API from abuse with configurable rate limits, request throttling, and quota management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-xl dark:bg-emerald-950/40">✅</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Input Validation &amp; Sanitization</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Comprehensive validation rules, data sanitization, and protection against injection attacks.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-50 text-xl dark:bg-orange-950/40">❌</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Error Handling &amp; Logging</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Standardized error responses, detailed logging, and debugging support for easy troubleshooting.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-pink-50 text-xl dark:bg-pink-950/40">📄</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Pagination &amp; Filtering</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Efficient data retrieval with pagination, sorting, filtering, and search capabilities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-50 text-xl dark:bg-indigo-950/40">🔄</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Versioning &amp; Backward Compatibility</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">API versioning strategies to maintain backward compatibility while introducing new features.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-xl dark:bg-amber-950/40">💾</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Caching &amp; Performance</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Redis caching, response optimization, and performance tuning for fast API responses.</p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-start gap-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-50 text-xl dark:bg-red-950/40">📡</div>
                            <div>
                                <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Webhooks &amp; Real-time Updates</h3>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Event-driven architecture with webhooks, WebSockets, and server-sent events for real-time features.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Why Choose Our API Development Service?</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">We go beyond basic API development to deliver production-ready, enterprise-grade solutions.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-lg text-white">🎯</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Best Practices</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We follow REST/GraphQL best practices, proper HTTP methods, status codes, and API design principles.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-lg text-white">🛡️</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Security First</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">HTTPS encryption, input validation, SQL injection prevention, and OWASP security guidelines compliance.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-lg text-white">🚀</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Scalable Architecture</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Built to scale with microservices, load balancing, and cloud-native deployment strategies.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-500 text-lg text-white">📚</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Complete Documentation</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Interactive Swagger docs, Postman collections, code examples, and deployment guides included.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive API Development Guide Section -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-5xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Complete Guide to API Development Excellence</h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Understanding the fundamentals and advanced concepts that make APIs powerful and reliable</p>
                    </div>

                    <div class="space-y-5">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">What Makes a Great API?</h3>
                            <p class="mb-3 max-w-3xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Application Programming Interfaces (APIs) serve as the backbone of modern software architecture, enabling seamless communication between different applications, services, and systems. A well-designed API is not just about exposing endpoints; it's about creating an intuitive, secure, and scalable interface that developers love to work with. Our API development service focuses on building APIs that adhere to industry best practices while meeting your specific project requirements.
                            </p>
                            <p class="max-w-3xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                The foundation of excellent API design begins with understanding the core principles of REST (Representational State Transfer) or GraphQL architecture. RESTful APIs utilize standard HTTP methods (GET, POST, PUT, DELETE) and follow a resource-based approach, making them intuitive and easy to understand. GraphQL, on the other hand, provides clients with the flexibility to request exactly the data they need, reducing over-fetching and under-fetching issues common in traditional REST APIs. Our experts carefully evaluate your project requirements to recommend the most suitable API architecture.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Security &amp; Authentication</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Security is paramount in API development. We implement robust authentication mechanisms including JSON Web Tokens (JWT) for stateless authentication, OAuth 2.0 for third-party authorization, and API key management for service-to-service communication. Each API we build includes comprehensive input validation, SQL injection prevention, cross-site scripting (XSS) protection, and rate limiting to prevent abuse. We follow OWASP API Security Top 10 guidelines to ensure your API is protected against common vulnerabilities.
                                </p>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Performance Optimization</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Performance optimization is critical for delivering fast, responsive APIs. We implement caching strategies using Redis or Memcached to reduce database load and improve response times. Database query optimization, connection pooling, and efficient indexing ensure your API can handle high traffic loads. For data-intensive operations, we implement pagination, lazy loading, and field filtering to minimize payload sizes and bandwidth consumption, ensuring optimal performance even under heavy usage.
                                </p>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">API Documentation &amp; Developer Experience</h3>
                            <p class="mb-3 max-w-3xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Comprehensive documentation is what separates good APIs from great ones. We create interactive API documentation using industry-standard tools like Swagger (OpenAPI Specification) that allows developers to test endpoints directly from the documentation interface. Each endpoint includes detailed descriptions, request/response examples, parameter specifications, and error code explanations. We also provide Postman collections that enable developers to quickly test and integrate your API into their applications.
                            </p>
                            <p class="max-w-3xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                The developer experience extends beyond documentation. We implement consistent error handling with meaningful error messages, proper HTTP status codes, and standardized response formats. API versioning strategies ensure backward compatibility, allowing existing integrations to continue working while new features are added. Our APIs include comprehensive logging and monitoring hooks, making it easy to track usage patterns, identify bottlenecks, and debug issues in production environments.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">Microservices &amp; Scalability</h3>
                            <p class="mb-3 max-w-3xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                For complex applications, we design microservices architecture where different functionalities are separated into independent services that communicate through APIs. This approach offers tremendous benefits including independent deployment, technology diversity, fault isolation, and easier scaling of specific components. We implement API gateways that serve as a single entry point, handling authentication, rate limiting, request routing, and load balancing across multiple service instances.
                            </p>
                            <p class="max-w-3xl text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Scalability considerations are built into every API we develop. Horizontal scaling capabilities allow your API to handle increasing traffic by adding more server instances. We implement database sharding strategies for distributed data storage, use message queues for asynchronous processing, and design stateless APIs that can be easily replicated across multiple servers. Our cloud-native approach ensures your API can leverage modern infrastructure like Kubernetes for container orchestration and auto-scaling based on demand.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="mx-auto mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-xl dark:bg-purple-950/40">🎯</div>
                                <h4 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Best Practices</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Following RESTful conventions, proper HTTP methods, status codes, and resource naming for intuitive API design</p>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="mx-auto mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-xl dark:bg-blue-950/40">🔒</div>
                                <h4 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Enterprise Security</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Implementing authentication, authorization, encryption, and compliance with industry security standards</p>
                            </div>

                            <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="mx-auto mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl dark:bg-indigo-950/40">📈</div>
                                <h4 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Production Ready</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Comprehensive testing, error handling, monitoring, and deployment strategies for reliable production APIs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular API Projects Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Popular API Development Projects</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Real-world API projects our experts have successfully delivered to students.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 border-l-4 border-l-purple-500 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:border-l-purple-500 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Social Media API</h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">User profiles, posts, comments, likes, following system, and news feed with GraphQL</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded bg-purple-100 px-2 py-1 text-xs text-purple-700 dark:bg-purple-950/40 dark:text-purple-300">GraphQL</span>
                            <span class="rounded bg-purple-100 px-2 py-1 text-xs text-purple-700 dark:bg-purple-950/40 dark:text-purple-300">JWT</span>
                            <span class="rounded bg-purple-100 px-2 py-1 text-xs text-purple-700 dark:bg-purple-950/40 dark:text-purple-300">MongoDB</span>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 border-l-4 border-l-blue-500 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:border-l-blue-500 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">E-commerce REST API</h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">Product catalog, shopping cart, payment processing with Stripe, order management</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-700 dark:bg-blue-950/40 dark:text-blue-300">REST</span>
                            <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-700 dark:bg-blue-950/40 dark:text-blue-300">Stripe</span>
                            <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-700 dark:bg-blue-950/40 dark:text-blue-300">PostgreSQL</span>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 border-l-4 border-l-emerald-500 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:border-l-emerald-500 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Task Management API</h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">Project boards, task CRUD, team collaboration, file uploads, and real-time updates</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded bg-emerald-100 px-2 py-1 text-xs text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-300">Express</span>
                            <span class="rounded bg-emerald-100 px-2 py-1 text-xs text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-300">WebSocket</span>
                            <span class="rounded bg-emerald-100 px-2 py-1 text-xs text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-300">MySQL</span>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 border-l-4 border-l-orange-500 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:border-l-orange-500 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Weather Data API</h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">Third-party API integration, data aggregation, caching, and location-based queries</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded bg-orange-100 px-2 py-1 text-xs text-orange-700 dark:bg-orange-950/40 dark:text-orange-300">FastAPI</span>
                            <span class="rounded bg-orange-100 px-2 py-1 text-xs text-orange-700 dark:bg-orange-950/40 dark:text-orange-300">Redis</span>
                            <span class="rounded bg-orange-100 px-2 py-1 text-xs text-orange-700 dark:bg-orange-950/40 dark:text-orange-300">OpenWeather</span>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 border-l-4 border-l-pink-500 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:border-l-pink-500 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Blog &amp; CMS API</h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">Content management, categories, tags, comments, search, and media handling</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded bg-pink-100 px-2 py-1 text-xs text-pink-700 dark:bg-pink-950/40 dark:text-pink-300">Django REST</span>
                            <span class="rounded bg-pink-100 px-2 py-1 text-xs text-pink-700 dark:bg-pink-950/40 dark:text-pink-300">S3</span>
                            <span class="rounded bg-pink-100 px-2 py-1 text-xs text-pink-700 dark:bg-pink-950/40 dark:text-pink-300">Elasticsearch</span>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 border-l-4 border-l-indigo-500 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:border-l-indigo-500 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Authentication Microservice</h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">User registration, login, OAuth 2.0, password reset, email verification, 2FA</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="rounded bg-indigo-100 px-2 py-1 text-xs text-indigo-700 dark:bg-indigo-950/40 dark:text-indigo-300">Node.js</span>
                            <span class="rounded bg-indigo-100 px-2 py-1 text-xs text-indigo-700 dark:bg-indigo-950/40 dark:text-indigo-300">OAuth</span>
                            <span class="rounded bg-indigo-100 px-2 py-1 text-xs text-indigo-700 dark:bg-indigo-950/40 dark:text-indigo-300">Redis</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Frequently Asked Questions</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Everything you need to know about our API development service.</p>
                </div>

                <div class="mx-auto max-w-3xl space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What types of APIs can you build?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We build RESTful APIs, GraphQL APIs, gRPC services, microservices, webhooks, and third-party API integrations. We work with any framework including Express, FastAPI, Django REST, Spring Boot, and more.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Do you implement authentication and security?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes! We implement JWT authentication, OAuth 2.0, API key management, rate limiting, input validation, and security best practices. All APIs include proper error handling and security measures.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Is API documentation included?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely! We provide comprehensive API documentation using Swagger/OpenAPI specifications, Postman collections for testing, and clear README files with endpoint descriptions and examples.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you integrate third-party APIs?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes, we can integrate payment gateways (Stripe, PayPal), social media APIs, cloud services (AWS, Google Cloud), mapping services, email services, and any other third-party APIs you need.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What's included in the API delivery?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">You'll receive complete source code, API documentation (Swagger/Postman), authentication implementation, database schemas, deployment instructions, and testing examples. For advanced projects, we include API gateway configuration and monitoring setup.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="rounded-2xl bg-slate-900 p-8 text-center sm:p-10 dark:bg-slate-950 dark:border dark:border-slate-800">
                    <div class="mx-auto max-w-2xl">
                        <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Ready to Build Your API?</h2>
                        <p class="mt-3 text-sm text-slate-400">Join hundreds of students who have successfully completed their API projects with our expert help.</p>
                        <a href="{{ route('order') }}"
                            class="mt-7 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-purple-700 shadow-sm transition-colors hover:bg-slate-100">
                            Start Your API Project Today
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        @@keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-10px) rotate(1deg);
            }

            66% {
                transform: translateY(5px) rotate(-1deg);
            }
        }

        @@keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(10px) rotate(-1deg);
            }

            66% {
                transform: translateY(-5px) rotate(1deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }
    </style>
@endsection
