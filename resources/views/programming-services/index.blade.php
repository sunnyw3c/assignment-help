@extends('layouts.app')

@section('title', 'Programming Services - Expert Development Help | Trending Tutor')
@section('description', 'Professional programming services including web development, mobile apps, machine learning, API development, and more. Get expert coding help from certified developers.')
@section('keywords', 'programming services, web development, mobile app development, machine learning, API development, code review, debugging, algorithm help')

@section('content')

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50" role="banner">
        <!-- Geometric Shapes -->
        <div class="absolute top-20 right-20 w-32 h-32 bg-purple-200 rounded-full opacity-30 animate-pulse"></div>
        <div class="absolute bottom-40 left-10 w-20 h-20 bg-blue-200 rounded-full opacity-40 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-indigo-200 transform rotate-45 opacity-25"></div>

        <div class="relative z-10 container mx-auto px-4 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-left">
                    <!-- Status Badge -->
                    <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        Professional Programming Services Available 24/7
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Expert <br>
                        <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Programming
                            Services</span> <br>
                        for Every Need
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-lg">
                        From simple coding assignments to complex enterprise applications. Get professional development services with guaranteed quality and timely delivery.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-10">
                        <a href="{{ route('order') }}"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="mr-2">🚀</span>
                            Get Help Now
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#services"
                            class="inline-flex items-center justify-center border-2 border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                            <span class="mr-2">⚡</span>
                            View Services
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-1">{{ count($services) }}+</div>
                            <div class="text-sm text-gray-500">Services</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 mb-1">99%</div>
                            <div class="text-sm text-gray-500">Success Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-1">24/7</div>
                            <div class="text-sm text-gray-500">Support</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="relative">
                    <!-- Background Gradient Blob -->
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-400/20 via-blue-400/20 to-indigo-400/20 rounded-3xl transform rotate-6 scale-110"></div>

                    <!-- Main Dashboard Card -->
                    <div class="relative bg-white rounded-3xl shadow-2xl p-8 border border-gray-100 overflow-hidden">
                        <!-- Header with Live Status -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full flex items-center justify-center">
                                    <span class="text-white text-xl font-bold">PS</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Programming Services</h3>
                                    <div class="flex items-center text-sm text-green-600">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                                        Live Dashboard
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-purple-600">98%</div>
                                <div class="text-xs text-gray-500">Success Rate</div>
                            </div>
                        </div>

                        <!-- Services Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            @php
                                $featuredServices = array_slice($services, 0, 4);
                            @endphp
                            @foreach($featuredServices as $index => $service)
                                @php
                                    $colors = ['purple', 'blue', 'green', 'orange'];
                                    $color = $colors[$index % 4];
                                @endphp
                                <div class="group p-4 bg-gradient-to-br from-{{ $color }}-50 to-{{ $color }}-100 rounded-xl hover:shadow-lg transition-all duration-300 cursor-pointer">
                                    <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">{{ $service['icon'] }}</div>
                                    <div class="text-sm font-semibold text-{{ $color }}-700">{{ Str::limit($service['name'], 15) }}</div>
                                    <div class="text-xs text-{{ $color }}-600">{{ $service['orders_completed'] }}+ projects</div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Live Activity Feed -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $services[0]['name'] ?? 'Project' }} Completed</div>
                                        <div class="text-xs text-gray-500">2 minutes ago</div>
                                    </div>
                                </div>
                                <div class="text-green-600 font-semibold text-sm">{{ $services[0]['price_from'] ?? '$45' }}</div>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 text-xs">●</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $services[1]['name'] ?? 'Project' }}</div>
                                        <div class="text-xs text-gray-500">In progress</div>
                                    </div>
                                </div>
                                <div class="text-blue-600 font-semibold text-sm">{{ $services[1]['price_from'] ?? '$60' }}</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Achievement Badges -->
                    <div class="absolute -top-6 -right-6 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-2xl p-4 shadow-xl transform rotate-12 hover:rotate-6 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-2xl mb-1">🏆</div>
                            <div class="text-xs font-bold">Top Rated</div>
                            <div class="text-xs opacity-90">2024</div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-gradient-to-r from-green-400 to-emerald-500 text-white rounded-2xl p-4 shadow-xl transform -rotate-12 hover:-rotate-6 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-2xl mb-1">⚡</div>
                            <div class="text-xs font-bold">Fast</div>
                            <div class="text-xs opacity-90">Delivery</div>
                        </div>
                    </div>

                    <div class="absolute top-1/2 -left-8 bg-gradient-to-r from-purple-400 to-pink-500 text-white rounded-2xl p-3 shadow-xl transform -rotate-6 hover:rotate-0 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-xl mb-1">💻</div>
                            <div class="text-xs font-bold">Expert</div>
                        </div>
                    </div>

                    <!-- Floating Particles -->
                    <div class="absolute top-10 right-10 w-3 h-3 bg-purple-400 rounded-full animate-pulse"></div>
                    <div class="absolute bottom-20 right-16 w-2 h-2 bg-blue-400 rounded-full animate-bounce"></div>
                    <div class="absolute top-20 left-12 w-4 h-4 bg-indigo-400 rounded-full animate-ping"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Assignment Search Filter Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <livewire:assignment-search-filter />
        </div>
    </section>

    <!-- Featured Programming Services: PHP & Java -->
    <section class="py-20 bg-gray-50 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-gradient-to-r from-orange-100 to-indigo-100 text-orange-800 px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                    <span class="mr-2">🔥</span>
                    MOST POPULAR SERVICES
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4 leading-tight">
                    Expert PHP & Java <br>
                    <span class="bg-gradient-to-r from-orange-600 to-indigo-600 bg-clip-text text-transparent">Programming Help</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Get professional help with the two most widely-used programming languages in web and enterprise development
                </p>
            </div>

            <!-- PHP & Java Featured Cards -->
            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto mb-12">
                <!-- PHP Service Card -->
                <div class="group relative bg-gradient-to-br from-indigo-600 to-purple-600 rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-500">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"white\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>');"></div>
                    </div>

                    <div class="relative z-10 p-10">
                        <!-- Icon & Badge -->
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex items-center">
                                <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-5xl">🐘</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-3xl font-bold text-white mb-1">PHP Programming</h3>
                                    <div class="flex items-center text-indigo-200 text-sm">
                                        <span class="mr-2">⭐</span>
                                        <span>4.8/5 • 1100+ Projects</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-yellow-400 text-indigo-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                Popular
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-indigo-100 text-lg mb-6 leading-relaxed">
                            Professional PHP development services for Laravel, Symfony, WordPress, and custom web applications. Expert help from $30.
                        </p>

                        <!-- Key Features -->
                        <div class="grid grid-cols-2 gap-3 mb-8">
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">Laravel & Symfony</span>
                            </div>
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">WordPress Dev</span>
                            </div>
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">API Development</span>
                            </div>
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">Database Integration</span>
                            </div>
                        </div>

                        <!-- Pricing & CTA -->
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-white/80 text-sm mb-1">Starting from</div>
                                <div class="text-4xl font-bold text-white">$30<span class="text-xl text-indigo-200">/project</span></div>
                            </div>
                            <div class="flex gap-3">
                                <a href="{{ route('services.programming.show', 'php-help') }}"
                                    class="group/link bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center border border-white/20">
                                    View Details
                                    <svg class="ml-2 w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('order') }}"
                                    class="group/btn bg-white text-indigo-600 px-8 py-3 rounded-xl font-semibold hover:bg-indigo-50 transition-all duration-300 shadow-xl hover:shadow-2xl flex items-center">
                                    <span class="mr-2">🚀</span>
                                    Get Help
                                    <svg class="ml-2 w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute top-6 right-6 w-24 h-24 bg-purple-400/20 rounded-full blur-2xl animate-pulse"></div>
                    <div class="absolute bottom-6 left-6 w-32 h-32 bg-indigo-400/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
                </div>

                <!-- Java Service Card -->
                <div class="group relative bg-gradient-to-br from-orange-600 to-red-600 rounded-3xl shadow-2xl overflow-hidden transform hover:scale-105 transition-all duration-500">
                    <!-- Background Pattern -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"white\" fill-opacity=\"0.4\"><circle cx=\"30\" cy=\"30\" r=\"2\"/></g></svg>');"></div>
                    </div>

                    <div class="relative z-10 p-10">
                        <!-- Icon & Badge -->
                        <div class="flex items-start justify-between mb-6">
                            <div class="flex items-center">
                                <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-5xl">☕</span>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-3xl font-bold text-white mb-1">Java Programming</h3>
                                    <div class="flex items-center text-orange-200 text-sm">
                                        <span class="mr-2">⭐</span>
                                        <span>4.9/5 • 1350+ Projects</span>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-yellow-400 text-orange-900 px-4 py-2 rounded-full text-sm font-bold shadow-lg">
                                Top Rated
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-orange-100 text-lg mb-6 leading-relaxed">
                            Expert Java development help for Spring Boot, Android apps, enterprise applications, and core Java programming. From $35.
                        </p>

                        <!-- Key Features -->
                        <div class="grid grid-cols-2 gap-3 mb-8">
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">Spring Boot & MVC</span>
                            </div>
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">Android Apps</span>
                            </div>
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">OOP & Design Patterns</span>
                            </div>
                            <div class="flex items-center text-white">
                                <span class="w-6 h-6 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mr-3">
                                    <span class="text-green-400 text-sm">✓</span>
                                </span>
                                <span class="text-sm">Enterprise Solutions</span>
                            </div>
                        </div>

                        <!-- Pricing & CTA -->
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-white/80 text-sm mb-1">Starting from</div>
                                <div class="text-4xl font-bold text-white">$35<span class="text-xl text-orange-200">/project</span></div>
                            </div>
                            <div class="flex gap-3">
                                <a href="{{ route('services.programming.show', 'java-help') }}"
                                    class="group/link bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center border border-white/20">
                                    View Details
                                    <svg class="ml-2 w-4 h-4 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('order') }}"
                                    class="group/btn bg-white text-orange-600 px-8 py-3 rounded-xl font-semibold hover:bg-orange-50 transition-all duration-300 shadow-xl hover:shadow-2xl flex items-center">
                                    <span class="mr-2">🚀</span>
                                    Get Help
                                    <svg class="ml-2 w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute top-6 right-6 w-24 h-24 bg-red-400/20 rounded-full blur-2xl animate-pulse"></div>
                    <div class="absolute bottom-6 left-6 w-32 h-32 bg-orange-400/20 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
                </div>
            </div>

            <!-- Cross-Linking Benefits Section -->
            <div class="bg-gradient-to-r from-indigo-50 via-purple-50 to-orange-50 rounded-2xl p-8 max-w-6xl mx-auto">
                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div>
                        <div class="text-4xl mb-3">🎯</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Full-Stack Expertise</h4>
                        <p class="text-gray-600 text-sm">Combine PHP backend with Java enterprise solutions for complete web applications</p>
                    </div>
                    <div>
                        <div class="text-4xl mb-3">⚡</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">Fast Turnaround</h4>
                        <p class="text-gray-600 text-sm">Both services offer 12-48 hour delivery for urgent projects with quality guaranteed</p>
                    </div>
                    <div>
                        <div class="text-4xl mb-3">💯</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">2450+ Projects Done</h4>
                        <p class="text-gray-600 text-sm">Combined experience across PHP and Java with 4.8+ star ratings from students</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programming Services Showcase -->
    <section id="services" class="py-24 bg-gradient-to-br from-gray-50 via-slate-50 to-gray-100 relative overflow-hidden" role="main" aria-labelledby="services-heading">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-50/20 to-purple-50/20"></div>
        <div class="absolute top-20 right-10 w-72 h-72 bg-purple-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                    <span class="mr-2">⚡</span>
                    PROGRAMMING SERVICES
                </div>
                <h2 id="services-heading" class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Professional Development <br>
                    <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Services & Solutions</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Choose from our comprehensive range of programming services. Our certified developers deliver
                    high-quality solutions with complete documentation and ongoing support.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 max-w-7xl mx-auto mb-16">
                @foreach($services as $service)
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-purple-500 to-blue-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl">{{ $service['icon'] }}</span>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white leading-tight">{{ $service['name'] }}</h3>
                                        <p class="text-purple-100 text-sm">{{ $service['turnaround'] }}</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">{{ $service['price_from'] }}+</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-white/90 text-sm">
                                <div class="flex items-center">
                                    <span class="mr-2">⭐</span>
                                    <span>{{ $service['rating'] }}/5 Rating</span>
                                </div>
                                <div class="text-purple-100">
                                    {{ $service['orders_completed'] }}+ completed
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <p class="text-gray-600 mb-6 leading-relaxed">{{ $service['description'] }}</p>

                            <div class="mb-8">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4">Key Features:</h4>
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach($service['features'] as $feature)
                                    <div class="flex items-center text-gray-700">
                                        <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-green-600 text-xs">✓</span>
                                        </span>
                                        <span class="text-sm">{{ $feature }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <a href="{{ route('services.programming.show', $service['slug']) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-900 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center group/learn">
                                    Learn More
                                    <svg class="ml-2 w-4 h-4 group-hover/learn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('order') }}" class="group/btn flex-1 bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                    <span class="mr-2">🚀</span>
                                    Get Help
                                    <svg class="ml-2 w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- PHP vs Java: When to Use Which -->
            <div class="max-w-6xl mx-auto mt-20">
                <div class="text-center mb-12">
                    <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        PHP vs Java: <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-orange-600">Choose the Right Tool</span>
                    </h3>
                    <p class="text-xl text-gray-600">Both are powerful, but serve different purposes. Here's when to use each:</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- PHP Use Cases -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 border-2 border-indigo-200">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                <span class="text-4xl">🐘</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-2xl font-bold text-gray-900">PHP Programming</h4>
                                <p class="text-indigo-600 font-semibold">Best for Web Development</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h5 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Perfect For:
                                </h5>
                                <ul class="text-gray-600 text-sm space-y-1 ml-6">
                                    <li>• Dynamic websites & web applications</li>
                                    <li>• Content Management Systems (WordPress, Drupal)</li>
                                    <li>• E-commerce platforms & shopping carts</li>
                                    <li>• RESTful APIs & backend services</li>
                                    <li>• Rapid prototyping & MVP development</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h5 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-indigo-500 mr-2">🎯</span>
                                    Popular Frameworks:
                                </h5>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-semibold">Laravel</span>
                                    <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">Symfony</span>
                                    <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">WordPress</span>
                                    <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-semibold">CodeIgniter</span>
                                </div>
                            </div>

                            <a href="{{ route('services.programming.show', 'php-help') }}"
                                class="block w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center py-3 rounded-xl font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                                Explore PHP Services →
                            </a>
                        </div>
                    </div>

                    <!-- Java Use Cases -->
                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 border-2 border-orange-200">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-orange-600 to-red-600 rounded-xl flex items-center justify-center shadow-lg">
                                <span class="text-4xl">☕</span>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-2xl font-bold text-gray-900">Java Programming</h4>
                                <p class="text-orange-600 font-semibold">Best for Enterprise & Mobile</p>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h5 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Perfect For:
                                </h5>
                                <ul class="text-gray-600 text-sm space-y-1 ml-6">
                                    <li>• Enterprise applications & microservices</li>
                                    <li>• Android mobile app development</li>
                                    <li>• Large-scale backend systems</li>
                                    <li>• Desktop applications (JavaFX, Swing)</li>
                                    <li>• High-performance computing tasks</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h5 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-orange-500 mr-2">🎯</span>
                                    Popular Frameworks:
                                </h5>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">Spring Boot</span>
                                    <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-semibold">Hibernate</span>
                                    <span class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-xs font-semibold">Android SDK</span>
                                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">JavaFX</span>
                                </div>
                            </div>

                            <a href="{{ route('services.programming.show', 'java-help') }}"
                                class="block w-full bg-gradient-to-r from-orange-600 to-red-600 text-white text-center py-3 rounded-xl font-semibold hover:from-orange-700 hover:to-red-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                                Explore Java Services →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Need Both? Section -->
                <div class="mt-8 bg-gradient-to-r from-indigo-600 via-purple-600 to-orange-600 rounded-2xl p-8 text-white text-center">
                    <h4 class="text-2xl font-bold mb-3">Need Both PHP & Java for Your Project?</h4>
                    <p class="text-lg text-white/90 mb-6 max-w-3xl mx-auto">
                        Many modern applications use PHP for the web frontend and Java for backend microservices. We can help you build full-stack solutions combining both technologies.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('order') }}"
                            class="bg-white text-purple-600 px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-xl hover:shadow-2xl inline-flex items-center justify-center">
                            <span class="mr-2">💬</span>
                            Discuss Your Project
                        </a>
                        <a href="#services"
                            class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-purple-600 transition-all duration-300 inline-flex items-center justify-center">
                            <span class="mr-2">📋</span>
                            View All Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Services -->
    <section class="py-24 bg-white relative overflow-hidden" aria-labelledby="why-choose-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">⭐</span>
                    WHY CHOOSE OUR SERVICES
                </div>

                <h2 id="why-choose-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Professional Programming
                    <br>
                    <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Services & Support</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                    <div class="text-5xl mb-6">🎯</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Developers</h3>
                    <p class="text-gray-600 leading-relaxed">Our team consists of certified professional developers with years of industry experience across all programming languages and frameworks.</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                    <div class="text-5xl mb-6">🚀</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Quick Turnaround</h3>
                    <p class="text-gray-600 leading-relaxed">Get your projects completed within 24-72 hours with our efficient development process and dedicated project management.</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                    <div class="text-5xl mb-6">💡</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Original Solutions</h3>
                    <p class="text-gray-600 leading-relaxed">Every project is built from scratch with custom solutions tailored to your specific requirements and academic standards.</p>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
                    <div class="text-5xl mb-6">📝</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Complete Documentation</h3>
                    <p class="text-gray-600 leading-relaxed">Receive comprehensive documentation, code comments, and detailed explanations to understand every aspect of your project.</p>
                </div>

                <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-cyan-100">
                    <div class="text-5xl mb-6">🔧</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Testing & Quality</h3>
                    <p class="text-gray-600 leading-relaxed">All code is thoroughly tested, debugged, and optimized to ensure high performance and reliability before delivery.</p>
                </div>

                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-indigo-100">
                    <div class="text-5xl mb-6">🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Academic Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">Boost your grades with professionally developed solutions that meet academic standards and include learning resources.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Transform Your Development Journey -->
    <section class="py-24 bg-white relative overflow-hidden" aria-labelledby="transform-development-heading">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-64 h-64 bg-blue-100/40 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-80 h-80 bg-purple-100/40 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-100/30 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div
                    class="inline-flex items-center bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-2xl animate-pulse">
                    <span class="mr-3 text-lg">🚀</span>
                    TRUSTED BY 50,000+ DEVELOPERS & STUDENTS
                </div>
                <h2 id="transform-development-heading" class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-8 leading-tight">
                    Turn Your Development <br>
                    <span
                        class="bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">Challenges</span>
                    Into <br>
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Professional
                        Solutions</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-5xl mx-auto leading-relaxed mb-8">
                    From complex web applications to enterprise software solutions, our expert developers transform your project requirements
                    into production-ready code. Get professional development services with detailed documentation and proven architecture patterns that
                    elevate your technical capabilities.
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-green-600 mb-1">99%</div>
                        <div class="text-sm text-gray-600">Client Satisfaction</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-blue-600 mb-1">24-72hr</div>
                        <div class="text-sm text-gray-600">Delivery Time</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-purple-600 mb-1">12+</div>
                        <div class="text-sm text-gray-600">Services</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-orange-600 mb-1">24/7</div>
                        <div class="text-sm text-gray-600">Expert Support</div>
                    </div>
                </div>
            </div>

            <!-- Main Content Grid -->
            <div class="grid lg:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
                <!-- Left Content -->
                <div class="space-y-10">
                    <!-- Problem Statement -->
                    <div class="bg-red-50 border-l-4 border-red-400 p-6 rounded-r-xl">
                        <h3 class="text-xl font-bold text-red-800 mb-3 flex items-center">
                            <span class="mr-2">⚠️</span>
                            The Development Challenge Every Professional Faces
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Tight deadlines? Complex architecture requirements? Need to scale your application but don't know where to start?
                            You're not alone - <strong>85% of development teams</strong> struggle with resource constraints and technical complexity.
                        </p>
                    </div>

                    <!-- Solution -->
                    <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-r-xl">
                        <h3 class="text-xl font-bold text-green-800 mb-3 flex items-center">
                            <span class="mr-2">✅</span>
                            Our Professional Development Approach
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            We've built a comprehensive development ecosystem where <strong>certified
                                professionals</strong> don't just write code - they architect solutions. Every project includes
                            clean code practices, comprehensive documentation, and scalable design patterns.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Production-ready code
                            </div>
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Complete documentation
                            </div>
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Industry best practices
                            </div>
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Scalable architecture
                            </div>
                        </div>
                    </div>

                    <!-- What Makes Us Different -->
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-6 rounded-xl border border-blue-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="mr-2">🌟</span>
                            What Makes Our Services Different
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Enterprise-Grade Quality</h4>
                                    <p class="text-gray-600 text-sm">Every project follows industry standards with thorough testing, code reviews, and quality assurance processes.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Experienced Development Team</h4>
                                    <p class="text-gray-600 text-sm">Work with developers who have real-world experience building applications used by thousands of users.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Full-Stack Expertise</h4>
                                    <p class="text-gray-600 text-sm">From frontend React to backend Node.js, databases to cloud deployment - we handle the complete stack.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Success Guarantee -->
                    <div class="bg-gradient-to-r from-yellow-50 to-orange-50 p-6 rounded-xl border-2 border-yellow-200">
                        <div class="flex items-center mb-3">
                            <span class="text-2xl mr-3">🏆</span>
                            <h3 class="text-xl font-bold text-gray-900">Our Quality Guarantee</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            <strong>99% of our clients are satisfied</strong> with the quality and professionalism of delivered projects.
                            If you're not completely satisfied, we'll work with you through unlimited revisions - or provide a full refund.
                        </p>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Money-Back
                                Guarantee</span>
                            <span class="bg-green-200 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Unlimited
                                Revisions</span>
                            <span class="bg-blue-200 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">24/7
                                Support</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Visual -->
                <div class="relative">
                    <!-- Code Quality Visualization -->
                    <div
                        class="bg-gradient-to-br from-gray-900 to-gray-800 rounded-2xl p-8 shadow-2xl transform rotate-3 hover:rotate-1 transition-transform duration-500">
                        <!-- Header -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <span class="text-gray-400 text-sm font-mono">professional_service.js</span>
                        </div>

                        <!-- Code Content -->
                        <div class="font-mono text-sm space-y-1">
                            <div class="text-green-400">// Enterprise-Grade Development Services</div>
                            <div class="text-blue-400">class <span class="text-yellow-400">ProfessionalService</span> {</div>
                            <div class="text-gray-300 ml-4">constructor() {</div>
                            <div class="text-gray-300 ml-8">this.expertise = <span class="text-green-400">"Full-Stack"</span>;</div>
                            <div class="text-gray-300 ml-8">this.quality = <span class="text-green-400">"Enterprise-Grade"</span>;</div>
                            <div class="text-gray-300 ml-8">this.support = <span class="text-green-400">"24/7"</span>;</div>
                            <div class="text-gray-300 ml-4">}</div>
                            <div class="text-gray-500"></div>
                            <div class="text-gray-300 ml-4">async deliverProject() {</div>
                            <div class="text-green-400 ml-8">// Clean, documented, tested code</div>
                            <div class="text-blue-400 ml-8">const <span class="text-gray-300">result = </span><span class="text-blue-400">await</span><span class="text-gray-300"> this.develop();</span></div>
                            <div class="text-blue-400 ml-8">return <span class="text-gray-300">this.optimize(result);</span></div>
                            <div class="text-gray-300 ml-4">}</div>
                            <div class="text-gray-300">}</div>
                            <div class="text-gray-500"></div>
                            <div class="text-green-400">// Result: Production-Ready Application ✅</div>
                        </div>
                    </div>

                    <!-- Floating Stats -->
                    <div
                        class="absolute -top-6 -right-6 bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-2xl p-4 shadow-xl animate-bounce">
                        <div class="text-center">
                            <div class="text-2xl font-bold">5,000+</div>
                            <div class="text-xs opacity-90">Projects Delivered</div>
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-6 -left-6 bg-gradient-to-r from-purple-500 to-pink-500 text-white rounded-2xl p-4 shadow-xl">
                        <div class="text-center">
                            <div class="text-2xl font-bold">4.9★</div>
                            <div class="text-xs opacity-90">Average Rating</div>
                        </div>
                    </div>

                    <!-- Success Badge -->
                    <div
                        class="absolute top-1/2 -left-8 transform -translate-y-1/2 bg-white rounded-lg shadow-lg p-4 animate-pulse">
                        <div class="flex items-center text-sm">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            <span class="font-semibold text-gray-800">Experts Online</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Call-to-Action -->
            <div class="text-center mt-16">
                <div class="inline-flex flex-col sm:flex-row items-center gap-4">
                    <a href="{{ route('order') }}"
                        class="group bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-10 py-4 rounded-xl text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center">
                        <span class="mr-3">🚀</span>
                        Start Your Project Journey
                        <svg class="ml-3 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <p class="text-gray-500 text-sm">
                        ✨ Free consultation • No commitment required
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-slate-50 to-gray-100 relative overflow-hidden" aria-labelledby="process-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">⚡</span>
                    HOW IT WORKS
                </div>

                <h2 id="process-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Simple 4-Step
                    <br>
                    <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Development Process</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Requirements</h3>
                    <p class="text-gray-600 leading-relaxed">Share your project details, requirements, and deadline through our simple order form.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Assignment</h3>
                    <p class="text-gray-600 leading-relaxed">We assign your project to the most qualified developer based on your requirements.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Development & Testing</h3>
                    <p class="text-gray-600 leading-relaxed">Your project is developed, tested, and quality-checked according to industry standards.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Delivery & Support</h3>
                    <p class="text-gray-600 leading-relaxed">Receive your completed project with documentation and ongoing support for questions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-600 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                    Ready to Start Your Programming Project?
                </h2>
                <p class="text-xl text-purple-100 mb-12 leading-relaxed">
                    Join thousands of students and professionals who trust our expert development services.
                    Get high-quality solutions delivered on time, every time.
                </p>
                <a href="{{ route('order') }}"
                   class="group inline-flex items-center justify-center bg-white text-purple-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <span class="mr-4 text-3xl">🚀</span>
                    Start Your Project Now
                    <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Comprehensive Programming Services Information -->
    <section class="py-24 bg-white relative overflow-hidden" aria-labelledby="comprehensive-info-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                        <span class="mr-3 text-xl">📚</span>
                        COMPREHENSIVE PROGRAMMING SOLUTIONS
                    </div>
                    <h2 id="comprehensive-info-heading" class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                        Everything You Need to Know About Our
                        <br>
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Programming Services</span>
                    </h2>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <!-- Left Column -->
                    <div class="space-y-8">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-white text-lg">🎯</span>
                                </span>
                                Our Programming Expertise
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Our team of certified programming professionals brings together decades of combined experience across multiple programming languages, frameworks, and development methodologies. We specialize in delivering custom software solutions that meet academic requirements while maintaining industry-standard best practices.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                From beginner-level assignments involving basic syntax and algorithms to advanced enterprise-level applications incorporating complex design patterns, microservices architecture, and cloud deployment strategies, our experts handle projects of all complexity levels with precision and attention to detail.
                            </p>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 border border-green-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-white text-lg">⚡</span>
                                </span>
                                Quality Assurance Process
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Every programming project undergoes our rigorous quality assurance process, which includes comprehensive code review, testing across multiple environments, and verification against academic requirements. Our multi-stage review system ensures that your code not only works flawlessly but also demonstrates best practices in software engineering.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We implement automated testing frameworks, conduct manual code audits, and perform security assessments to guarantee that your delivered solution meets the highest standards of quality, performance, and reliability that academic institutions expect.
                            </p>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-8">
                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-white text-lg">🚀</span>
                                </span>
                                Technology Stack Coverage
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Our comprehensive programming services cover an extensive range of technologies including but not limited to Python, Java, JavaScript, C++, C#, Ruby, PHP, Go, Rust, and emerging languages like Swift and Kotlin. We're equally proficient in modern frameworks such as React, Angular, Vue.js, Django, Flask, Spring Boot, Laravel, and Node.js.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Whether you need help with database design using MySQL, PostgreSQL, MongoDB, or Redis, cloud computing solutions on AWS, Azure, or Google Cloud Platform, or mobile app development for iOS and Android platforms, our diverse expertise ensures we can handle any programming challenge you encounter.
                            </p>
                        </div>

                        <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 border border-orange-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-white text-lg">📋</span>
                                </span>
                                Academic Excellence Support
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Understanding the unique demands of academic programming assignments, we provide detailed documentation, comprehensive comments explaining complex logic, and educational resources that help you understand the implemented solutions. Our goal is not just to complete your assignment but to enhance your learning experience.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Each delivered project includes step-by-step explanations, alternative implementation approaches, performance analysis, and suggestions for further improvement. We also provide ongoing support to help you understand the code and prepare for related coursework or examinations.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Statistics Section -->
                <div class="mt-12 bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-12 text-white">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl font-bold mb-4">Trusted by Students Worldwide</h3>
                        <p class="text-gray-300 text-lg">Our programming services have helped thousands of students achieve academic excellence</p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div>
                            <div class="text-4xl font-black text-blue-400 mb-2">2500+</div>
                            <div class="text-gray-300">Projects Completed</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-green-400 mb-2">150+</div>
                            <div class="text-gray-300">Programming Languages</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-purple-400 mb-2">98.5%</div>
                            <div class="text-gray-300">Client Satisfaction</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-orange-400 mb-2">24/7</div>
                            <div class="text-gray-300">Expert Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection