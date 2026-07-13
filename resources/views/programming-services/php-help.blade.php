@extends('layouts.app')

@section('title', 'PHP Programming Help - Expert Laravel & PHP Development')
@section('description',
    'Get professional PHP programming help from expert developers. 24/7 support for Laravel,
    Symfony, WordPress, custom PHP projects, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Expert PHP Programming Services</h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Get professional PHP development help from
                            experienced developers who specialize in Laravel, Symfony, WordPress, and custom PHP solutions
                            for web applications.</p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-indigo-100 text-base dark:bg-indigo-950/40">🎯</span>
                                Why Choose Our PHP Development Help?
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                PHP remains one of the most popular server-side programming languages, powering over 77%
                                of all websites. Our team of expert PHP developers specializes in creating robust,
                                secure, and scalable PHP applications using modern frameworks and best practices.
                                Whether you're working on a Laravel project, building a WordPress plugin, or creating a
                                custom PHP application, we have the expertise to help you succeed.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                We understand that PHP development can present unique challenges, from managing
                                dependencies with Composer to implementing complex database relationships with Eloquent
                                ORM. Our experienced developers have worked on hundreds of PHP projects, giving us deep
                                knowledge of modern PHP 8.x features, framework-specific patterns, and industry best
                                practices.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-purple-100 text-base dark:bg-purple-950/40">🚀</span>
                                Our Development Approach
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Our PHP development process follows modern methodologies and PSR standards. We begin by
                                understanding your project requirements and selecting the most appropriate
                                approach—whether that's Laravel for full-featured web applications, Symfony for
                                enterprise solutions, or custom PHP for specific needs. We leverage the latest PHP 8.x
                                features including typed properties, named arguments, and match expressions.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Every project includes clean, well-documented code following PSR-12 coding standards,
                                proper MVC architecture, comprehensive error handling, and security best practices. We
                                ensure your PHP application is not only functional but also maintainable, testable, and
                                ready for production deployment.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-5 text-center text-2xl font-bold tracking-tight text-slate-900 dark:text-white">What We Cover in PHP Development</h3>
                        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-red-500">🔴</span>
                                    Laravel Development
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Complete Laravel applications, Eloquent ORM,
                                    migrations, authentication, API development, and deployment.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-purple-500">🎼</span>
                                    Symfony Projects
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Symfony framework development, bundles, Doctrine ORM,
                                    form handling, and enterprise applications.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-blue-500">📝</span>
                                    WordPress Development
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Custom themes, plugins, WooCommerce customization,
                                    REST API integration, and WordPress optimization.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-orange-500">🗄️</span>
                                    Database Integration
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">MySQL, PostgreSQL, MongoDB integration, query
                                    optimization, database design, and migrations.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-green-500">🔗</span>
                                    API Development
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">RESTful APIs, GraphQL, authentication, rate limiting,
                                    API documentation, and third-party integrations.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-indigo-500">🛡️</span>
                                    Security & Testing
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Security best practices, input validation, CSRF
                                    protection, unit testing, and feature testing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="mb-5 text-center text-2xl font-bold tracking-tight text-slate-900 dark:text-white">PHP Technologies & Frameworks We Master</h3>
                        <div class="grid gap-5 md:grid-cols-2">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                                <h4 class="mb-3 flex items-center gap-2 text-sm font-bold text-slate-900 dark:text-white">
                                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-indigo-500 text-sm text-white">⚙️</span>
                                    Frameworks & Tools
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-indigo-600 dark:text-indigo-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Laravel:</strong> The most popular PHP framework for web artisans,
                                            including Livewire, Jetstream, and Breeze</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-indigo-600 dark:text-indigo-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Symfony:</strong> Enterprise-grade framework with reusable
                                            components and bundles</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-indigo-600 dark:text-indigo-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">CodeIgniter:</strong> Lightweight framework perfect for smaller
                                            applications</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-indigo-600 dark:text-indigo-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Slim Framework:</strong> Micro-framework ideal for APIs and
                                            microservices</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-indigo-600 dark:text-indigo-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Composer:</strong> Dependency management and autoloading</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                                <h4 class="mb-3 flex items-center gap-2 text-sm font-bold text-slate-900 dark:text-white">
                                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-purple-500 text-sm text-white">🔧</span>
                                    PHP Technologies
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-purple-600 dark:text-purple-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">PHP 8.x:</strong> Modern PHP with typed properties, attributes,
                                            and JIT compilation</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-purple-600 dark:text-purple-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">OOP & Design Patterns:</strong> SOLID principles, MVC, Repository
                                            pattern, Service layer</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-purple-600 dark:text-purple-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">WordPress:</strong> Custom themes, plugins, Gutenberg blocks, and
                                            WooCommerce</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-purple-600 dark:text-purple-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Testing:</strong> PHPUnit, Pest, feature testing, and integration
                                            testing</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-purple-600 dark:text-purple-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Databases:</strong> MySQL, PostgreSQL, Redis, MongoDB, Eloquent,
                                            and Doctrine</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">How Our Assignment Help Process Works</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Get your programming assignment completed in 4 simple steps</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-600 text-xl text-white">
                            📋
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Step 1</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Submit Your Assignment</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Share your assignment requirements, deadline, and any specific instructions. Upload relevant files if needed.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-xl text-white">
                            👨‍💻
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-purple-600 dark:text-purple-400">Step 2</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Assignment</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We match you with a qualified programming expert who specializes in your assignment topic and language.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-pink-600 text-xl text-white">
                            ✍️
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-pink-600 dark:text-pink-400">Step 3</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Solution Development</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our expert completes your assignment with clean code, comments, and explanations to help you learn.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-red-600 text-xl text-white">
                            🎓
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-red-600 dark:text-red-400">Step 4</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Review & Learn</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Get your completed assignment with detailed documentation. Free revisions included to ensure your satisfaction.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Transparent Pricing for PHP Projects</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Choose the package that fits your project needs</p>
                </div>

                <div class="mx-auto grid max-w-6xl gap-6 md:grid-cols-3">
                    <!-- Basic Package -->
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Basic</div>
                        <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">Simple PHP Script</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-slate-900 dark:text-white">$30</span>
                            <span class="text-sm text-slate-600 dark:text-slate-400">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-slate-600 dark:text-slate-400">⏱️ 12-24 hours delivery</div>
                        <ul class="mb-6 space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Basic PHP functionality
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Form processing
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Database CRUD operations
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Simple authentication
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Clean, commented code
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500">
                            Get Started
                        </a>
                    </div>

                    <!-- Standard Package - Popular -->
                    <div class="flex flex-col rounded-2xl border border-indigo-600 bg-indigo-600 p-6 text-white shadow-sm">
                        <div class="mb-2 inline-block w-fit rounded-full bg-yellow-400 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-indigo-900">
                            Most Popular
                        </div>
                        <h3 class="mb-3 text-lg font-bold">PHP Web Application</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold">$80</span>
                            <span class="text-sm text-indigo-100">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-indigo-100">⏱️ 2-3 days delivery</div>
                        <ul class="mb-6 space-y-2 text-sm">
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Laravel or Symfony framework
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                MVC architecture
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                RESTful API development
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Database design & migrations
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                User authentication & authorization
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Unit testing
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm transition-colors hover:bg-indigo-50">
                            Get Started
                        </a>
                    </div>

                    <!-- Premium Package -->
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-purple-600 dark:text-purple-400">Premium</div>
                        <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">Enterprise PHP Solution</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-slate-900 dark:text-white">$180</span>
                            <span class="text-sm text-slate-600 dark:text-slate-400">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-slate-600 dark:text-slate-400">⏱️ 5-7 days delivery</div>
                        <ul class="mb-6 space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Full-featured PHP application
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Advanced Laravel features
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Payment gateway integration
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Admin dashboard
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Email notifications
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Deployment setup
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Complete documentation
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <p class="mb-2 text-sm text-slate-600 dark:text-slate-400">Need a custom solution? Contact us for a personalized quote.</p>
                    <a href="{{ route('order') }}"
                        class="text-sm font-semibold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 dark:hover:text-indigo-300">
                        Request Custom Quote →
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Success Stories from Students</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">See how we've helped students excel in their PHP projects</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"I was completely lost with Laravel for my web development
                            course. The developer helped me build a complete blog system with authentication, CRUD
                            operations, and file uploads. They explained everything step by step and now I actually
                            understand how Laravel works!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">
                                AJ
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">Alex Johnson</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Web Development Student • NYU</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">Laravel Blog System</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"My e-commerce project was due in 3 days and I had barely
                            started. They built an amazing PHP shopping cart with payment integration, admin panel, and
                            order management. The code quality was excellent and well-documented. Saved my semester!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-purple-600 text-sm font-bold text-white">
                                PP
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">Priya Patel</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Computer Science Major • UC Berkeley</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">PHP E-commerce Platform</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"Needed help building a REST API in PHP for my mobile app
                            backend. The developer created a robust API using Slim Framework with JWT authentication, proper
                            error handling, and comprehensive documentation. Exactly what I needed!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-pink-600 text-sm font-bold text-white">
                                MW
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">Marcus Williams</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Full Stack Development Student • MIT</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">RESTful API Development</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Frequently Asked Questions</h2>
                        <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Everything you need to know about our PHP development services</p>
                    </div>

                    <div class="space-y-4">
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Which PHP frameworks do you work with?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We specialize in Laravel and Symfony but also work with CodeIgniter,
                                Yii, CakePHP, Slim, and pure PHP. We choose the best framework based on your project
                                requirements and learning goals.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you help with WordPress development?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes! We provide WordPress theme development, plugin creation, custom
                                functionality, WooCommerce customization, and WordPress API integration services.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Do you follow modern PHP best practices?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely! We use PHP 8.x features, follow PSR standards, implement
                                OOP principles, use Composer for dependency management, and write clean, well-documented
                                code with proper error handling.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you integrate payment gateways and APIs?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes, we can integrate popular payment gateways like Stripe, PayPal,
                                and Razorpay, as well as third-party APIs including social media, email services, SMS, and
                                more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Services Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Related Programming Services</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Expand your development capabilities with complementary services</p>
                </div>

                <div class="mx-auto grid max-w-5xl gap-6 md:grid-cols-2">
                    <!-- Java Programming Card -->
                    <div class="rounded-2xl border border-slate-800 bg-orange-600 p-6 text-white shadow-sm">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-2xl shadow-sm">
                                ☕
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Java Programming</h3>
                                <div class="flex items-center gap-1 text-xs text-orange-200">
                                    <span>⭐</span>
                                    <span>4.9/5 • 1350+ Projects</span>
                                </div>
                            </div>
                        </div>

                        <p class="mb-4 text-sm leading-relaxed text-orange-100">
                            Need enterprise-grade applications or Android development? Our Java experts specialize in Spring Boot, microservices, and mobile apps.
                        </p>

                        <div class="mb-5 grid grid-cols-2 gap-2 text-sm">
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                Spring Boot & MVC
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                Android Development
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                Enterprise Solutions
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                From $35/project
                            </div>
                        </div>

                        <a href="{{ route('services.programming.show', 'java') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-orange-600 shadow-sm transition-colors hover:bg-orange-50">
                            Explore Java Services →
                        </a>
                    </div>

                    <!-- Full-Stack Combination -->
                    <div class="rounded-2xl border border-indigo-200 bg-white p-6 shadow-sm dark:border-indigo-900/40 dark:bg-slate-900">
                        <div class="mb-4 text-center">
                            <div class="mb-3 flex items-center justify-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-100 text-lg dark:bg-indigo-950/40">🐘</div>
                                <span class="text-lg font-bold text-slate-400 dark:text-slate-600">+</span>
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-100 text-lg dark:bg-orange-950/40">☕</div>
                            </div>
                            <h3 class="mb-1 text-lg font-bold text-slate-900 dark:text-white">Full-Stack Solution</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Combine PHP & Java expertise</p>
                        </div>

                        <div class="mb-5 rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                            <h4 class="mb-2 text-sm font-semibold text-slate-900 dark:text-white">Why Use Both?</h4>
                            <ul class="space-y-1.5 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>PHP for web frontend + Java for enterprise backend</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>Laravel web app + Spring Boot microservices</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>PHP API + Java Android mobile app</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>Best of both ecosystems for complex projects</span>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-indigo-500">
                            Discuss Full-Stack Project →
                        </a>
                    </div>
                </div>

                <!-- Quick Navigation -->
                <div class="mt-8 text-center">
                    <a href="{{ route('services.programming.index') }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-indigo-600 transition-colors hover:text-indigo-700 dark:text-indigo-400 dark:hover:text-indigo-300">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        View All Programming Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="bg-indigo-600 py-14 text-white sm:py-16">
            <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Ready to Build Your PHP Project?</h2>
                <p class="mx-auto mt-4 max-w-2xl text-base text-indigo-100 sm:text-lg">
                    Join 1100+ students who have successfully completed their PHP programming projects with our expert help.
                </p>
                <div class="mt-7 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ route('order') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-indigo-600 shadow-sm transition-colors hover:bg-indigo-50">
                        Start Your Project Now
                    </a>
                    <a href="#pricing"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-white px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white hover:text-indigo-600">
                        View Pricing Plans
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
