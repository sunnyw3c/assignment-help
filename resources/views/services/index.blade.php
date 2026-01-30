@extends('layouts.app')

@section('title', 'All Services - Programming & Assignment Help | Trending Tutor')
@section('description',
    'Explore all our services including programming development, web & mobile apps, machine
    learning, and academic assignment help. Get expert assistance for coding projects and academic writing.')
@section('keywords',
    'programming services, assignment help, coding assistance, web development, mobile apps, essay
    writing, homework help, academic writing')

@section('content')
    <header class="relative overflow-hidden bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50" role="banner">
        <div class="absolute top-20 right-20 w-32 h-32 bg-purple-200 rounded-full opacity-30 animate-pulse"></div>
        <div class="absolute bottom-40 left-10 w-20 h-20 bg-blue-200 rounded-full opacity-40 animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-indigo-200 transform rotate-45 opacity-25"></div>

        <div class="relative z-10 container mx-auto px-4 py-20 lg:py-32">
            <div class="text-center max-w-5xl mx-auto">
                <div
                    class="inline-flex items-center bg-gradient-to-r from-green-500 to-emerald-500 text-white px-6 py-3 rounded-full text-sm font-semibold mb-8 shadow-lg">
                    <span class="w-2 h-2 bg-white rounded-full mr-2 animate-pulse"></span>
                    Expert Services Available 24/7 - Programming & Academic Help
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Complete <br>
                    <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Programming &
                        Assignment</span> <br>
                    Help Services
                </h1>

                <p class="text-xl text-gray-600 mb-10 leading-relaxed max-w-4xl mx-auto">
                    From complex coding projects to academic writing assignments. Get professional help with web
                    development, mobile apps, machine learning, essays, research papers, and more. All in one place.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                    <a href="{{ route('order') }}"
                        class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <span class="mr-2">🚀</span>
                        Get Help Now
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#programming-services"
                        class="inline-flex items-center justify-center border-2 border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white px-10 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                        <span class="mr-2">💻</span>
                        Browse Services
                    </a>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-purple-600 mb-1">
                            {{ count($programmingServices) + count($assignmentServices) }}+</div>
                        <div class="text-sm text-gray-600">Total Services</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-blue-600 mb-1">50K+</div>
                        <div class="text-sm text-gray-600">Happy Clients</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-green-600 mb-1">99%</div>
                        <div class="text-sm text-gray-600">Satisfaction</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-orange-600 mb-1">24/7</div>
                        <div class="text-sm text-gray-600">Support</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="programming-services" class="py-24 bg-white relative overflow-hidden" role="main"
        aria-labelledby="programming-services-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                    <span class="mr-2">💻</span>
                    PROGRAMMING SERVICES
                </div>
                <h2 id="programming-services-heading"
                    class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Professional Development <br>
                    <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Services &
                        Solutions</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-6">
                    Expert programming help for web development, mobile apps, machine learning, and more.
                </p>
                <a href="{{ route('services.programming.index') }}"
                    class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold group">
                    View All Programming Services
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @foreach ($programmingServices as $service)
                    <div
                        class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100">
                        <div class="p-8">
                            <div class="flex items-start mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-purple-500 to-blue-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-3xl">{{ $service['icon'] }}</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $service['name'] }}</h3>
                                    <p class="text-sm text-purple-600 font-semibold">{{ $service['price_from'] }}+ •
                                        {{ $service['turnaround'] }}</p>
                                </div>
                            </div>

                            <p class="text-gray-600 mb-4 leading-relaxed">{{ $service['description'] }}</p>

                            <div class="flex items-center mb-6 text-sm">
                                <span class="text-yellow-500 mr-1">⭐</span>
                                <span class="font-semibold text-gray-900">{{ $service['rating'] }}</span>
                                <span class="text-gray-500 mx-2">•</span>
                                <span class="text-gray-600">{{ $service['orders_completed'] }}+ completed</span>
                            </div>

                            <div class="flex gap-3">
                                <a href="{{ route('services.programming.show', $service['slug']) }}"
                                    class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-900 py-3 rounded-lg font-semibold transition-all duration-300 text-center text-sm">
                                    Learn More
                                </a>
                                <a href="{{ route('order') }}"
                                    class="flex-1 bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg text-center text-sm">
                                    Get Help
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="assignment-services"
        class="py-24 bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 relative overflow-hidden"
        aria-labelledby="assignment-services-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                    <span class="mr-2">📝</span>
                    ASSIGNMENT HELP SERVICES
                </div>
                <h2 id="assignment-services-heading"
                    class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                    Academic Writing <br>
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Help &
                        Assistance</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed mb-6">
                    Professional academic writing services for essays, research papers, dissertations, and more.
                </p>
                <a href="{{ route('services.assignment.index') }}"
                    class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold group">
                    View All Assignment Services
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @foreach ($assignmentServices as $service)
                    <div
                        class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100">
                        <div class="p-8">
                            <div class="flex items-start mb-4">
                                <div
                                    class="w-14 h-14 bg-gradient-to-br from-blue-500 to-purple-500 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-3xl">{{ $service->icon }}</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="text-xl font-bold text-gray-900 mb-1">{{ $service->name }}</h3>
                                    <p class="text-sm text-blue-600 font-semibold">
                                        ${{ $service->base_price_per_page }}/page • {{ $service->turnaround_time }}</p>
                                </div>
                            </div>

                            <p class="text-gray-600 mb-4 leading-relaxed">{{ $service->short_description }}</p>

                            <div class="flex items-center mb-6 text-sm">
                                <span class="text-yellow-500 mr-1">⭐</span>
                                <span class="font-semibold text-gray-900">{{ $service->rating }}</span>
                                <span class="text-gray-500 mx-2">•</span>
                                <span class="text-gray-600">{{ $service->orders_completed }}+ completed</span>
                            </div>

                            <div class="flex gap-3">
                                <a href="{{ route('services.assignment.show', $service->slug) }}"
                                    class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-900 py-3 rounded-lg font-semibold transition-all duration-300 text-center text-sm">
                                    Learn More
                                </a>
                                <a href="{{ route('order') }}"
                                    class="flex-1 bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg text-center text-sm">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Why Choose <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Our
                        Services</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We provide comprehensive solutions for both programming and academic needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-4xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Professionals</h3>
                    <p class="text-gray-600">Certified developers and academic writers with proven expertise</p>
                </div>

                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-4xl">⚡</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Fast Delivery</h3>
                    <p class="text-gray-600">Quick turnaround times without compromising on quality</p>
                </div>

                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-4xl">💯</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Quality Guaranteed</h3>
                    <p class="text-gray-600">High-quality work with unlimited revisions until satisfied</p>
                </div>

                <div class="text-center">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <span class="text-4xl">🔒</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">100% Confidential</h3>
                    <p class="text-gray-600">Your privacy and security are our top priorities</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-xl text-purple-100 mb-10 max-w-3xl mx-auto">
                Join thousands of students and professionals who trust our services for their programming and academic
                needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('order') }}"
                    class="inline-flex items-center justify-center bg-white text-purple-600 hover:bg-gray-50 px-10 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                    <span class="mr-2">🚀</span>
                    Get Help Now
                </a>
                <a href="{{ route('how-it-works') }}"
                    class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-purple-600 px-10 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                    <span class="mr-2">❓</span>
                    How It Works
                </a>
            </div>
        </div>
    </section>
@endsection
