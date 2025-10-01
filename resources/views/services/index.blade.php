@extends('layouts.app')

@section('title', 'Programming Services - Expert Development Help | CodeHelp')
@section('description', 'Professional programming services including web development, mobile apps, machine learning, API development, and more. Get expert coding help from certified developers.')
@section('keywords', 'programming services, web development, mobile app development, machine learning, API development, code review, debugging, algorithm help')

@section('content')
    <!-- Structured Data for Programming Services -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Programming Services We Offer",
        "description": "Professional programming and development services for students and professionals",
        "numberOfItems": {{ count($services) }},
        "itemListElement": [
            @foreach($services as $index => $service)
            {
                "@type": "ListItem",
                "position": {{ $index + 1 }},
                "item": {
                    "@type": "Service",
                    "name": "{{ $service['name'] }}",
                    "description": "{{ $service['description'] }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "CodeHelp"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceSpecification": {
                            "@type": "PriceSpecification",
                            "price": "{{ str_replace('$', '', $service['price_from']) }}",
                            "priceCurrency": "USD"
                        }
                    }
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>

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
                        <a href="{{ route('assignments.create') }}"
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
                                <a href="{{ route('services.show', $service['slug']) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-900 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center group/learn">
                                    Learn More
                                    <svg class="ml-2 w-4 h-4 group-hover/learn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('assignments.create') }}" class="group/btn flex-1 bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
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
                <a href="{{ route('assignments.create') }}"
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