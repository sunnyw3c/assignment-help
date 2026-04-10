@extends('layouts.app')

@section('title', 'Academic Assignment Help | Expert Writing Services')
@section('description', 'Professional academic assignment help for USA students. Expert researchers provide quality writing services for essays, reports, and more. Success starts here!')

@section('content')
    <!-- Structured Data for Assignment Services -->
    {{-- <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Assignment Help Services We Offer",
        "description": "Professional academic assignment help services for students at all levels",
        "numberOfItems": {{ count($services) }},
        "itemListElement": [
            @foreach($services as $index => $service)
            {
                "@type": "ListItem",
                "position": {{ $index + 1 }},
                "item": {
                    "@type": "Service",
                    "name": "{{ $service->name }}",
                    "description": "{{ $service->short_description }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "AssignmentHelp"
                    },
                    "offers": {
                        "@type": "Offer",
                        "priceSpecification": {
                            "@type": "PriceSpecification",
                            "price": "{{ $service->base_price_per_page }}",
                            "priceCurrency": "USD"
                        }
                    },
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "{{ $service->rating }}",
                        "ratingCount": "{{ $service->orders_completed }}"
                    }
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script> --}}

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50" role="banner">
        <!-- Geometric Shapes -->
        <div class="absolute top-20 right-20 w-32 h-32 bg-blue-200 rounded-full opacity-30 animate-pulse"></div>
        <div class="absolute bottom-40 left-10 w-20 h-20 bg-indigo-200 rounded-full opacity-40 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-purple-200 transform rotate-45 opacity-25"></div>

        <div class="relative z-10 container mx-auto px-4 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-left">
                    <!-- Status Badge -->
                    <div class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        Professional Assignment Help Available 24/7
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Expert <br>
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Assignment Help</span> <br>
                        for Every Subject
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-lg">
                        Stuck on a deadline? Our online assignment help connects you with real academic experts who get it done right — plagiarism-free, properly cited, and delivered before you need it.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-10">
                        <a href="{{ route('order') }}"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="mr-2">📝</span>
                            Order Assignment Help
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#services"
                            class="inline-flex items-center justify-center border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                            <span class="mr-2">🎓</span>
                            Browse Services
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-1">{{ count($services) }}+</div>
                            <div class="text-sm text-gray-500">Services</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 mb-1">4.8★</div>
                            <div class="text-sm text-gray-500">Avg Rating</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-1">24/7</div>
                            <div class="text-sm text-gray-500">Support</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content -->
                <div class="relative">
                    <!-- Background Gradient Blob -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-400/20 via-indigo-400/20 to-purple-400/20 rounded-3xl transform rotate-6 scale-110"></div>

                    <!-- Main Dashboard Card -->
                    <div class="relative bg-white rounded-3xl shadow-2xl p-8 border border-gray-100 overflow-hidden">
                        <!-- Header with Live Status -->
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center">
                                    <span class="text-white text-xl font-bold">AH</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Assignment Services</h3>
                                    <div class="flex items-center text-sm text-green-600">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                                        Live Dashboard
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-blue-600">4.8★</div>
                                <div class="text-xs text-gray-500">Top Rated</div>
                            </div>
                        </div>

                        <!-- Services Grid -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            @php
                                $featuredServices = $services->take(4);
                                $colors = ['blue', 'purple', 'indigo', 'pink'];
                            @endphp
                            @foreach($featuredServices as $index => $service)
                                @php
                                    $color = $colors[$index % 4];
                                @endphp
                                <div class="group p-4 bg-gradient-to-br from-{{ $color }}-50 to-{{ $color }}-100 rounded-xl hover:shadow-lg transition-all duration-300 cursor-pointer">
                                    <div class="text-2xl mb-2 group-hover:scale-110 transition-transform">{{ $service->icon }}</div>
                                    <div class="text-sm font-semibold text-{{ $color }}-700">{{ Str::limit($service->name, 15) }}</div>
                                    <div class="text-xs text-{{ $color }}-600">{{ $service->orders_completed }}+ orders</div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Service Stats -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-green-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">5,000+ Assignments Completed</div>
                                        <div class="text-xs text-gray-500">Across all service types</div>
                                    </div>
                                </div>
                                <div class="text-green-600 font-semibold text-sm">98% Satisfied</div>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-blue-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 text-xs">⚡</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">Expert matched in 15–30 min</div>
                                        <div class="text-xs text-gray-500">After order submission</div>
                                    </div>
                                </div>
                                <div class="text-blue-600 font-semibold text-sm">24/7 Support</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Achievement Badges -->
                    <div class="absolute -top-6 -right-6 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-2xl p-4 shadow-xl transform rotate-12 hover:rotate-6 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-2xl mb-1">🏆</div>
                            <div class="text-xs font-bold">5★ Rated</div>
                            <div class="text-xs opacity-90">By Students</div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-gradient-to-r from-green-400 to-emerald-500 text-white rounded-2xl p-4 shadow-xl transform -rotate-12 hover:-rotate-6 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-2xl mb-1">⚡</div>
                            <div class="text-xs font-bold">Fast</div>
                            <div class="text-xs opacity-90">Delivery</div>
                        </div>
                    </div>

                    <div class="absolute top-1/2 -left-8 bg-gradient-to-r from-blue-400 to-indigo-500 text-white rounded-2xl p-3 shadow-xl transform -rotate-6 hover:rotate-0 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-xl mb-1">📚</div>
                            <div class="text-xs font-bold">Expert</div>
                        </div>
                    </div>

                    <!-- Floating Particles -->
                    <div class="absolute top-10 right-10 w-3 h-3 bg-blue-400 rounded-full animate-pulse"></div>
                    <div class="absolute bottom-20 right-16 w-2 h-2 bg-purple-400 rounded-full animate-bounce"></div>
                    <div class="absolute top-20 left-12 w-4 h-4 bg-indigo-400 rounded-full animate-ping"></div>
                </div>
            </div>
        </div>
    </header>

    <!-- Budget Calculator Section -->
    <section class="py-20" style="background: #0f0f1e;">
        <div class="container mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-bold mb-3" style="color: #ffffff;">Calculate Your Assignment Cost</h2>
                <p class="text-lg" style="color: #6b7a99;">Get an instant price estimate — no signup required</p>
            </div>
            <div class="max-w-sm mx-auto">
                <livewire:budget-calculator />
            </div>
        </div>
    </section>

    <!-- Assignment Search Filter Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <livewire:assignment-search-filter />
        </div>
    </section>

    <!-- Assignment Services Showcase -->
    <section id="services" class="py-24 bg-gradient-to-br from-gray-50 via-slate-50 to-gray-100 relative overflow-hidden" role="main" aria-labelledby="services-heading">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-50/20 to-purple-50/20"></div>
        <div class="absolute top-20 right-10 w-72 h-72 bg-blue-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-purple-200/30 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                    <span class="mr-2">📚</span>
                    ASSIGNMENT HELP SERVICES
                </div>
                <h2 id="services-heading" class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Professional Academic <br>
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Writing & Assignment Help</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Not every assignment is the same — and neither is our assignment help service. Browse below and find the right academic assistance for your subject, your level, and your deadline.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 max-w-7xl mx-auto mb-16">
                @foreach($services as $service)
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-purple-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-blue-500 to-purple-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl">{{ $service->icon }}</span>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold text-white leading-tight">{{ $service->name }}</h3>
                                        <p class="text-blue-100 text-sm">{{ $service->turnaround }}</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">{{ $service->formatted_price }}</span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between text-white/90 text-sm">
                                <div class="flex items-center">
                                    <span class="mr-2">⭐</span>
                                    <span>{{ $service->rating }}/5 Rating</span>
                                </div>
                                <div class="text-blue-100">
                                    {{ $service->orders_completed }}+ completed
                                </div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <p class="text-gray-600 mb-6 leading-relaxed">{{ $service->short_description }}</p>

                            @if($service->features)
                            <div class="mb-8">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4">What We Offer:</h4>
                                <div class="grid grid-cols-2 gap-3">
                                    @foreach($service->features as $feature)
                                    <div class="flex items-center text-gray-700">
                                        <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-green-600 text-xs">✓</span>
                                        </span>
                                        <span class="text-sm">{{ $feature }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            @if($service->academic_levels && count($service->academic_levels) > 0)
                            <div class="mb-6">
                                <h4 class="text-sm font-semibold text-gray-700 mb-3">Academic Levels:</h4>
                                <div class="flex flex-wrap gap-2">
                                    @foreach(array_slice($service->academic_levels, 0, 3) as $level)
                                    <span class="px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-xs font-medium">{{ $level }}</span>
                                    @endforeach
                                    @if(count($service->academic_levels) > 3)
                                    <span class="px-3 py-1 bg-gray-100 text-gray-600 rounded-full text-xs font-medium">+{{ count($service->academic_levels) - 3 }} more</span>
                                    @endif
                                </div>
                            </div>
                            @endif

                            <div class="flex gap-3">
                                <a href="{{ route('services.assignment.show', $service->slug) }}" class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-900 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center group/learn">
                                    Learn More
                                    <svg class="ml-2 w-4 h-4 group-hover/learn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="group/btn flex-1 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                    <span class="mr-2">📝</span>
                                    Order Now
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
                    WHY CHOOSE OUR ASSIGNMENT HELP
                </div>

                <h2 id="why-choose-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    What Makes Our Assignment Help
                    <br>
                    <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Worth Choosing</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                    <div class="text-5xl mb-6">🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Writers</h3>
                    <p class="text-gray-600 leading-relaxed">Every writer on our team holds at least a Master's degree in their subject area. They've been through the academic grind themselves — they know what professors look for and how to deliver it.</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                    <div class="text-5xl mb-6">✅</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Plagiarism-Free</h3>
                    <p class="text-gray-600 leading-relaxed">We start from scratch every time. Your assignment goes through plagiarism detection before it reaches you, so you're getting work that's 100% original and properly cited — no exceptions.</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                    <div class="text-5xl mb-6">⏰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">On-Time Delivery</h3>
                    <p class="text-gray-600 leading-relaxed">Deadlines are non-negotiable — we get that. Our writers work to your timeline so you're never left refreshing your inbox and hoping the work shows up in time.</p>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
                    <div class="text-5xl mb-6">🔄</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Free Revisions</h3>
                    <p class="text-gray-600 leading-relaxed">Not quite what you had in mind? We'll fix it. Unlimited free revisions means you don't pay a cent more until the work is exactly right.</p>
                </div>

                <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-cyan-100">
                    <div class="text-5xl mb-6">🔒</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Confidential & Secure</h3>
                    <p class="text-gray-600 leading-relaxed">Your order details, your identity, your payment — all of it stays private. We use encrypted transactions and never share your information with anyone, period.</p>
                </div>

                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-indigo-100">
                    <div class="text-5xl mb-6">💰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Affordable Pricing</h3>
                    <p class="text-gray-600 leading-relaxed">We price for students, not corporations. Our rates are competitive, we offer flexible payment options, and we run regular discounts so quality assignment help stays actually affordable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-slate-50 to-gray-100 relative overflow-hidden" aria-labelledby="process-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">⚡</span>
                    HOW IT WORKS
                </div>

                <h2 id="process-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Getting Assignment Help Is
                    <br>
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Easier Than You Think</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Your Assignment</h3>
                    <p class="text-gray-600 leading-relaxed">Fill out our quick order form with your subject, requirements, deadline, and any notes from your professor. It takes under five minutes.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Match</h3>
                    <p class="text-gray-600 leading-relaxed">We pair you with an assignment helper who genuinely knows your subject — someone with the right academic background for your field and level, not just whoever's available.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Writing & Review</h3>
                    <p class="text-gray-600 leading-relaxed">Your writer researches, writes, and cites everything correctly. Before it reaches you, it passes through our quality check and plagiarism scan — so what you get is solid.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Delivery & Support</h3>
                    <p class="text-gray-600 leading-relaxed">Your finished assignment lands in your inbox before the deadline. Need adjustments? Our team is available 24/7 and unlimited free revisions are always included.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                    Ready to Ace Your Assignments?
                </h2>
                <p class="text-xl text-blue-100 mb-12 leading-relaxed">
                    Thousands of students have used our assignment help online and hit their deadlines with confidence. You're next — let's get yours sorted.
                </p>
                <a href="{{ route('order') }}"
                   class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <span class="mr-4 text-3xl">📝</span>
                    Order Assignment Help Now
                    <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Comprehensive Assignment Services Information -->
    <section class="py-24 bg-white relative overflow-hidden" aria-labelledby="comprehensive-info-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center bg-gradient-to-r from-blue-100 to-purple-100 text-blue-800 px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                        <span class="mr-3 text-xl">📚</span>
                        COMPREHENSIVE ACADEMIC SUPPORT
                    </div>
                    <h2 id="comprehensive-info-heading" class="text-4xl md:text-5xl font-black text-gray-900 mb-8 leading-tight">
                        Straight Answers About Our
                        <br>
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Assignment Help Services</span>
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
                                Our Academic Expertise
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                As a trusted assignment help provider, we work only with real academics — most hold Master's or PhD degrees from recognized universities, with hands-on experience in research, teaching, and academic writing. They understand citation formats, academic standards, and what it actually takes to produce work that holds up.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Whatever your level — high school, undergrad, grad, or doctoral — and whatever your subject, we have someone who genuinely knows the field. Business, Engineering, Medicine, Law, Social Sciences, STEM: our team covers it all, and we match you based on fit, not just availability.
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
                                Before anything leaves our hands, it goes through a thorough review. Writers pull from credible, peer-reviewed sources and follow your required citation format — APA, MLA, Chicago, Harvard, whatever your institution uses. No shortcuts.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Then our QA team checks it: grammar, structure, flow, and plagiarism detection. What you receive is properly formatted, academically sound work — not just something that looks good on the surface, but a piece that can genuinely hold up.
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
                                Subject Coverage
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Struggling with an English essay? Behind on a psychology research paper? Need help with a math problem set or a computer science assignment? We have subject matter experts across every major discipline — ready to take it on without you having to explain the basics.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Essays, research papers, term papers, dissertations, theses, case studies, lab reports, literature reviews, annotated bibliographies, presentations, homework — if your professor assigned it, we can help. We work to your format, your word count, and your rubric.
                            </p>
                        </div>

                        <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 border border-orange-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-white text-lg">📋</span>
                                </span>
                                Student Success Support
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-6">
                                We don't just hand over a finished file and disappear. Each assignment comes with references you can actually use and learn from. If anything's unclear or doesn't match what you expected, you ask — we respond.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Our support team is available around the clock — for updates, revision requests, or just peace of mind that your order is on track. Unlimited free revisions are always included, so we keep going until the work is exactly what you need.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Statistics Section -->
                <div class="mt-12 bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-12 text-white">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl font-bold mb-4">Trusted by Students Worldwide</h3>
                        <p class="text-gray-300 text-lg">Real students, real deadlines, real results — the numbers speak for themselves.</p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div>
                            <div class="text-4xl font-black text-blue-400 mb-2">{{ $services->sum('orders_completed') }}+</div>
                            <div class="text-gray-300">Assignments Completed</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-green-400 mb-2">{{ count($services) }}+</div>
                            <div class="text-gray-300">Service Types</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-purple-400 mb-2">4.8★</div>
                            <div class="text-gray-300">Average Rating</div>
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
