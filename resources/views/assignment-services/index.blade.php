@extends('layouts.app')

@section('title', 'Assignment Help Services - Expert Academic Writing Assistance | AssignmentHelp')
@section('description', 'Professional assignment help services including essay writing, research papers, homework help, thesis assistance, and more. Get expert academic writing help with guaranteed quality and on-time delivery.')
@section('keywords', 'assignment help, essay writing, research paper, homework help, thesis writing, academic writing, dissertation help, proofreading services')

@section('content')
    <!-- Structured Data for Assignment Services -->
    <script type="application/ld+json">
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
    </script>

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
                        From essays to dissertations, homework to research papers. Get professional academic writing services with guaranteed quality, plagiarism-free content, and timely delivery.
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

                        <!-- Live Activity Feed -->
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $services->first()->name ?? 'Assignment' }} Completed</div>
                                        <div class="text-xs text-gray-500">5 minutes ago</div>
                                    </div>
                                </div>
                                <div class="text-green-600 font-semibold text-sm">${{ $services->first()->base_price_per_page ?? '15' }}/pg</div>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                                <div class="flex items-center space-x-3">
                                    <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 text-xs">●</span>
                                    </div>
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $services->skip(1)->first()->name ?? 'Assignment' }}</div>
                                        <div class="text-xs text-gray-500">In progress</div>
                                    </div>
                                </div>
                                <div class="text-blue-600 font-semibold text-sm">${{ $services->skip(1)->first()->base_price_per_page ?? '20' }}/pg</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Achievement Badges -->
                    <div class="absolute -top-6 -right-6 bg-gradient-to-r from-yellow-400 to-orange-500 text-white rounded-2xl p-4 shadow-xl transform rotate-12 hover:rotate-6 transition-transform duration-300">
                        <div class="text-center">
                            <div class="text-2xl mb-1">🏆</div>
                            <div class="text-xs font-bold">Top Rated</div>
                            <div class="text-xs opacity-90">2025</div>
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
    <section class="py-20 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">Calculate Your Assignment Cost</h2>
                <p class="text-xl text-blue-200">Get an instant price estimate tailored to your needs</p>
            </div>
            <livewire:budget-calculator />
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
                    Choose from our comprehensive range of assignment help services. Our expert academic writers deliver
                    high-quality, plagiarism-free content with proper citations and formatting.
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
                    Professional Academic Writing
                    <br>
                    <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Services & Support</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                    <div class="text-5xl mb-6">🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Writers</h3>
                    <p class="text-gray-600 leading-relaxed">Our team of certified academic writers holds advanced degrees in their fields and brings years of experience in academic writing across all subjects and levels.</p>
                </div>

                <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                    <div class="text-5xl mb-6">✅</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Plagiarism-Free</h3>
                    <p class="text-gray-600 leading-relaxed">Every assignment is written from scratch and thoroughly checked with advanced plagiarism detection tools. We guarantee 100% original content with proper citations.</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                    <div class="text-5xl mb-6">⏰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">On-Time Delivery</h3>
                    <p class="text-gray-600 leading-relaxed">We understand the importance of deadlines. Our efficient workflow ensures your assignment is delivered before your deadline, every time.</p>
                </div>

                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
                    <div class="text-5xl mb-6">🔄</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Free Revisions</h3>
                    <p class="text-gray-600 leading-relaxed">Your satisfaction is our priority. We offer unlimited free revisions to ensure your assignment meets all your requirements and expectations.</p>
                </div>

                <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-cyan-100">
                    <div class="text-5xl mb-6">🔒</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Confidential & Secure</h3>
                    <p class="text-gray-600 leading-relaxed">Your privacy matters to us. All personal information and assignment details are kept strictly confidential with secure encrypted transactions.</p>
                </div>

                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-indigo-100">
                    <div class="text-5xl mb-6">💰</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Affordable Pricing</h3>
                    <p class="text-gray-600 leading-relaxed">Quality academic help doesn't have to break the bank. We offer competitive pricing with flexible payment options and regular discounts for students.</p>
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
                    Simple 4-Step
                    <br>
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Assignment Process</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Your Assignment</h3>
                    <p class="text-gray-600 leading-relaxed">Provide assignment details, requirements, deadline, and any additional materials through our secure order form.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Match</h3>
                    <p class="text-gray-600 leading-relaxed">We assign your assignment to a qualified expert writer who specializes in your subject and academic level.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Writing & Review</h3>
                    <p class="text-gray-600 leading-relaxed">Your assignment is written from scratch, properly cited, and thoroughly reviewed for quality and plagiarism.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-3xl text-white font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Delivery & Support</h3>
                    <p class="text-gray-600 leading-relaxed">Receive your completed assignment before the deadline with unlimited revisions and 24/7 customer support.</p>
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
                    Join thousands of students who trust our expert assignment help services.
                    Get high-quality, plagiarism-free assignments delivered on time, every time.
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
                        Everything You Need to Know About Our
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
                                Our team of professional academic writers holds advanced degrees (Masters and PhDs) from top universities worldwide. With years of experience in academic writing, research, and teaching, our experts understand the intricacies of various writing styles, citation formats, and academic standards across all disciplines.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                From high school essays to doctoral dissertations, from humanities to STEM subjects, our diverse team of specialists covers every academic field including Business, Engineering, Medicine, Law, Social Sciences, and more, ensuring you receive expert assistance tailored to your specific subject and academic level.
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
                                Every assignment undergoes our rigorous multi-stage quality assurance process. Our writers conduct thorough research using credible academic sources, follow proper citation guidelines (APA, MLA, Chicago, Harvard, etc.), and ensure all content meets your specific requirements and academic standards.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Before delivery, each assignment is reviewed by our quality assurance team, checked through advanced plagiarism detection software, and edited for grammar, structure, and coherence. We guarantee 100% original, properly formatted, and academically sound work that helps you achieve your academic goals.
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
                                Our comprehensive assignment help services cover all academic subjects and disciplines. Whether you need help with English essays, psychology research papers, mathematics problem sets, computer science assignments, business case studies, or nursing care plans, we have subject matter experts ready to assist.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We handle all types of assignments including essays, research papers, term papers, dissertations, theses, case studies, lab reports, literature reviews, annotated bibliographies, presentations, homework help, and more. Our flexible services adapt to any assignment type or format your professor requires.
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
                                Beyond just completing your assignment, we're committed to your academic success. Each delivered assignment comes with detailed explanations, reference materials, and learning resources to help you understand the content and improve your own writing skills.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Our 24/7 customer support team is always available to answer questions, provide updates, request revisions, or address any concerns. We offer unlimited free revisions to ensure complete satisfaction and provide guidance to help you present your assignment with confidence.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Bottom Statistics Section -->
                <div class="mt-12 bg-gradient-to-r from-gray-900 to-gray-800 rounded-3xl p-12 text-white">
                    <div class="text-center mb-12">
                        <h3 class="text-3xl font-bold mb-4">Trusted by Students Worldwide</h3>
                        <p class="text-gray-300 text-lg">Our assignment help services have helped thousands of students achieve academic excellence</p>
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
