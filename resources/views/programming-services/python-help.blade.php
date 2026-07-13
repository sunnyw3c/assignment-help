@extends('layouts.app')

@section('title', 'Python Programming Help - Expert Django & Python Development')
@section('description',
    'Get professional Python programming help from expert developers. 24/7 support for Django, Flask, data science, machine learning, automation, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Expert Python Programming Services</h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Get professional Python development help from experienced developers who specialize in Django, Flask, data science, machine learning, and automation.</p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-100 text-base dark:bg-blue-950/40">🎯</span>
                                Why Choose Our Python Development Help?
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Python has become the most popular programming language in the world, powering everything from web applications to artificial intelligence. Our team of expert Python developers specializes in creating clean, efficient, and Pythonic solutions using modern frameworks and industry best practices. Whether you're building a Django web app, analyzing data with pandas, or creating machine learning models, we have the expertise to help you excel.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                We understand the versatility of Python—from web development with Django and Flask to data science with NumPy and pandas, machine learning with TensorFlow and scikit-learn, and automation scripts. Our experienced developers have worked on hundreds of Python projects across various domains, giving us deep knowledge of Python 3.12+ features, async programming, and testing methodologies.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-green-100 text-base dark:bg-green-950/40">🚀</span>
                                Our Development Approach
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Our Python development process follows PEP 8 style guide and best practices. We begin by analyzing your project requirements and selecting the optimal approach—whether that's Django for robust web applications, Flask for lightweight APIs, or specialized libraries for data science and machine learning. We leverage the latest Python features including type hints, dataclasses, async/await, and pattern matching.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Every project includes clean, well-documented code following Pythonic principles, comprehensive testing with pytest, proper error handling, virtual environment setup, and professional documentation. We use pip or poetry for dependency management and ensure your Python application is production-ready, maintainable, and scalable for future enhancements.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-5 text-center text-2xl font-bold tracking-tight text-slate-900 dark:text-white">What We Cover in Python Development</h3>
                        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-green-500">🌐</span>
                                    Django & Flask
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Complete web applications, REST APIs, Django ORM, authentication, middleware, and deployment.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-blue-500">📊</span>
                                    Data Science
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">NumPy, pandas, data analysis, visualization with matplotlib/seaborn, and statistical computing.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-purple-500">🤖</span>
                                    Machine Learning
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">scikit-learn, TensorFlow, PyTorch, neural networks, model training, and prediction systems.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-orange-500">⚙️</span>
                                    Automation & Scripting
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Web scraping, task automation, file processing, API integration, and scheduled jobs.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-cyan-500">🗄️</span>
                                    Database Integration
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">SQLAlchemy, Django ORM, PostgreSQL, MySQL, MongoDB, Redis integration and optimization.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-red-500">🧪</span>
                                    Testing & Quality
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">pytest, unittest, test coverage, TDD approach, and code quality with pylint/black.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="mb-5 text-center text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Python Technologies & Frameworks We Master</h3>
                        <div class="grid gap-5 md:grid-cols-2">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                                <h4 class="mb-3 flex items-center gap-2 text-sm font-bold text-slate-900 dark:text-white">
                                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-blue-500 text-sm text-white">⚙️</span>
                                    Frameworks & Libraries
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-blue-600 dark:text-blue-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Django:</strong> Full-featured web framework with ORM, admin panel, and authentication</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-blue-600 dark:text-blue-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Flask:</strong> Lightweight micro-framework perfect for APIs and small applications</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-blue-600 dark:text-blue-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">FastAPI:</strong> Modern async framework for building high-performance APIs</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-blue-600 dark:text-blue-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">pandas & NumPy:</strong> Data manipulation and numerical computing</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-blue-600 dark:text-blue-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">TensorFlow & PyTorch:</strong> Deep learning and machine learning frameworks</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                                <h4 class="mb-3 flex items-center gap-2 text-sm font-bold text-slate-900 dark:text-white">
                                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-green-500 text-sm text-white">🔧</span>
                                    Python Technologies
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-green-600 dark:text-green-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Python 3.12+:</strong> Latest features including pattern matching and type hints</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-green-600 dark:text-green-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Async Programming:</strong> asyncio, aiohttp for concurrent operations</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-green-600 dark:text-green-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Testing:</strong> pytest, unittest, coverage.py for comprehensive testing</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-green-600 dark:text-green-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Data Science:</strong> Jupyter, matplotlib, seaborn, scikit-learn</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-green-600 dark:text-green-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Web Scraping:</strong> Beautiful Soup, Scrapy, Selenium for data extraction</span>
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
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">
                            📋
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Step 1</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Submit Your Assignment</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Share your assignment requirements, deadline, and any specific instructions. Upload relevant files if needed.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-green-600 text-xl text-white">
                            👨‍💻
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-green-600 dark:text-green-400">Step 2</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Assignment</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We match you with a qualified programming expert who specializes in your assignment topic and language.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-teal-600 text-xl text-white">
                            ✍️
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-teal-600 dark:text-teal-400">Step 3</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Solution Development</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our expert completes your assignment with clean code, comments, and explanations to help you learn.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-600 text-xl text-white">
                            🎓
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-cyan-600 dark:text-cyan-400">Step 4</div>
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
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Transparent Pricing for Python Projects</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Choose the package that fits your project needs</p>
                </div>

                <div class="mx-auto grid max-w-6xl gap-6 md:grid-cols-3">
                    <!-- Basic Package -->
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Basic</div>
                        <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">Simple Python Script</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-slate-900 dark:text-white">$30</span>
                            <span class="text-sm text-slate-600 dark:text-slate-400">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-slate-600 dark:text-slate-400">⏱️ 12-24 hours delivery</div>
                        <ul class="mb-6 space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Core Python functionality
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Object-oriented design
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                File operations
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Error handling
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Well-documented code
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                            Get Started
                        </a>
                    </div>

                    <!-- Standard Package - Popular -->
                    <div class="flex flex-col rounded-2xl border border-blue-600 bg-blue-600 p-6 text-white shadow-sm">
                        <div class="mb-2 inline-block w-fit rounded-full bg-yellow-400 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-blue-900">
                            Most Popular
                        </div>
                        <h3 class="mb-3 text-lg font-bold">Python Application</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold">$85</span>
                            <span class="text-sm text-blue-100">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-blue-100">⏱️ 2-3 days delivery</div>
                        <ul class="mb-6 space-y-2 text-sm">
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Django or Flask framework
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                RESTful API development
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Database integration
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Authentication & authorization
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Testing with pytest
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Professional architecture
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-blue-600 shadow-sm transition-colors hover:bg-blue-50">
                            Get Started
                        </a>
                    </div>

                    <!-- Premium Package -->
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-green-600 dark:text-green-400">Premium</div>
                        <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">Data Science / ML Solution</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-slate-900 dark:text-white">$190</span>
                            <span class="text-sm text-slate-600 dark:text-slate-400">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-slate-600 dark:text-slate-400">⏱️ 5-7 days delivery</div>
                        <ul class="mb-6 space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Machine learning models
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Data analysis & visualization
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Deep learning with TensorFlow
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Web scraping & automation
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Performance optimization
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Jupyter notebooks included
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Comprehensive documentation
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <p class="mb-2 text-sm text-slate-600 dark:text-slate-400">Need a custom solution? Contact us for a personalized quote.</p>
                    <a href="{{ route('order') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
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
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">See how we've helped students excel in their Python projects</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"I needed help with a Django project for my web development course. The developer built an amazing blog platform with user authentication, comments, and a clean admin interface. The code was so well-organized and documented - I finally understand how Django works!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-bold text-white">
                                EM
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">Emma Martinez</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Web Development Student • Stanford</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">Django Blog Platform</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"My data science project involved analyzing a huge dataset and building a machine learning model. They created beautiful visualizations with matplotlib, implemented multiple ML algorithms, and explained everything in a Jupyter notebook. Absolutely perfect!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-600 text-sm font-bold text-white">
                                RK
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">Raj Kumar</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Data Science Major • UC Berkeley</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">ML Prediction Model</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"Needed a web scraping script that could extract data from multiple websites and store it in a database. The Python expert created a robust solution using Scrapy with error handling and scheduling. Works like magic!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-teal-600 text-sm font-bold text-white">
                                LT
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">Lisa Thompson</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Business Analytics Student • NYU</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">Web Scraping Bot</div>
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
                        <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Everything you need to know about our Python development services</p>
                    </div>

                    <div class="space-y-4">
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What Python versions do you support?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We work with Python 3.8 to the latest Python 3.12+. We leverage modern features like type hints, dataclasses, pattern matching, and async/await based on your project requirements.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you help with Django and Flask projects?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes! We specialize in Django for full-featured web applications, Flask for lightweight APIs, and FastAPI for modern async applications. We handle everything from basic CRUD apps to complex systems.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Do you provide data science and machine learning help?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely! We have extensive experience with pandas, NumPy, scikit-learn, TensorFlow, and PyTorch. We can help with data analysis, visualization, statistical modeling, and machine learning implementations.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What about web scraping and automation?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes, we create web scraping solutions using Beautiful Soup, Scrapy, and Selenium. We also build automation scripts for tasks like file processing, API integration, and scheduled jobs.</p>
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
                    <!-- PHP Programming Card -->
                    <div class="rounded-2xl border border-slate-800 bg-indigo-600 p-6 text-white shadow-sm">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-2xl shadow-sm">
                                🐘
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">PHP Programming</h3>
                                <div class="flex items-center gap-1 text-xs text-indigo-200">
                                    <span>⭐</span>
                                    <span>4.8/5 • 1100+ Projects</span>
                                </div>
                            </div>
                        </div>

                        <p class="mb-4 text-sm leading-relaxed text-indigo-100">
                            Need web development or CMS solutions? Our PHP experts specialize in Laravel, Symfony, WordPress, and custom web applications.
                        </p>

                        <div class="mb-5 grid grid-cols-2 gap-2 text-sm">
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                Laravel & Symfony
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                WordPress Dev
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                API Development
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                From $30/project
                            </div>
                        </div>

                        <a href="{{ route('services.programming.show', 'php') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm transition-colors hover:bg-indigo-50">
                            Explore PHP Services →
                        </a>
                    </div>

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
                            Need enterprise applications or Android development? Our Java experts specialize in Spring Boot, microservices, and mobile apps.
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
                </div>

                <!-- Quick Navigation -->
                <div class="mt-8 text-center">
                    <a href="{{ route('services.programming.index') }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-blue-600 transition-colors hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        View All Programming Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="bg-blue-600 py-14 text-white sm:py-16">
            <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Ready to Build Your Python Project?</h2>
                <p class="mx-auto mt-4 max-w-2xl text-base text-blue-100 sm:text-lg">
                    Join 1500+ students who have successfully completed their Python programming projects with our expert help.
                </p>
                <div class="mt-7 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ route('order') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-blue-600 shadow-sm transition-colors hover:bg-blue-50">
                        Start Your Project Now
                    </a>
                    <a href="#pricing"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-white px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white hover:text-blue-600">
                        View Pricing Plans
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
