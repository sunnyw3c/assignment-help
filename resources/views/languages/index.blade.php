@extends('layouts.app')

@section('title', 'Programming Languages Help - Expert Support for 20+ Languages | Trending Tutor')
@section('description', 'Get expert programming help for Python, Java, JavaScript, C++, C#, PHP, Go, Rust, Swift, Kotlin and more. Professional coding assistance with step-by-step solutions and 24/7 support.')
@section('keywords', 'programming languages, python help, java programming, javascript tutorial, c++ assistance, programming language learning, coding help, software development languages')

@section('content')
    <!-- Structured Data for Programming Languages -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ItemList",
        "name": "Programming Languages We Support",
        "description": "Comprehensive list of programming languages with expert help available",
        "numberOfItems": {{ count($languages) }},
        "itemListElement": [
            @foreach($languages as $index => $language)
            {
                "@type": "ListItem",
                "position": {{ $index + 1 }},
                "item": {
                    "@type": "Course",
                    "name": "{{ $language['name'] }} Programming Help",
                    "description": "{{ $language['description'] }}",
                    "provider": {
                        "@type": "Organization",
                        "name": "Trending Tutor"
                    }
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-indigo-50 via-purple-50 to-blue-50" role="banner">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-72 h-72 bg-purple-200/30 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-indigo-200/20 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 py-20 lg:py-32 relative z-10">
            <div class="text-center max-w-5xl mx-auto">
                <!-- Status Badge -->
                <div class="inline-flex items-center bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 px-6 py-3 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="w-3 h-3 bg-green-500 rounded-full mr-3 animate-pulse"></span>
                    Expert Support for 20+ Programming Languages
                </div>

                <!-- Main Headline -->
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-black text-gray-900 leading-tight mb-8">
                    Master Every
                    <br>
                    <span class="bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 bg-clip-text text-transparent">Programming Language</span>
                    <br>
                    with Expert Help
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-600 mb-12 leading-relaxed max-w-4xl mx-auto">
                    From beginner-friendly Python to advanced system languages like Rust and C++.
                    Get instant, professional help with coding assignments, debugging, and project development
                    in any programming language.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center mb-16">
                    <a href="{{ route('assignments.create') }}"
                        class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-10 py-5 rounded-2xl font-bold text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-purple-500/25">
                        <span class="mr-3 text-2xl">🚀</span>
                        Get Programming Help Now
                        <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#languages"
                        class="inline-flex items-center justify-center border-3 border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white px-10 py-5 rounded-2xl font-bold text-xl transition-all duration-300 shadow-lg">
                        <span class="mr-3 text-2xl">👁️</span>
                        Browse Languages
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-4xl font-black text-purple-600 mb-2">20+</div>
                        <div class="text-gray-600 font-semibold">Languages Supported</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-indigo-600 mb-2">15min</div>
                        <div class="text-gray-600 font-semibold">Average Response</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-blue-600 mb-2">98%</div>
                        <div class="text-gray-600 font-semibold">Success Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-black text-green-600 mb-2">24/7</div>
                        <div class="text-gray-600 font-semibold">Expert Support</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Programming Languages Showcase -->
    <section id="languages" class="py-24 bg-gradient-to-br from-gray-50 via-slate-50 to-gray-100 relative overflow-hidden" role="main" aria-labelledby="languages-heading">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-blue-50/20 to-purple-50/20"></div>
        <div class="absolute top-20 right-10 w-72 h-72 bg-purple-200/30 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-200/30 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                    <span class="mr-2">💻</span>
                    PROGRAMMING LANGUAGES
                </div>
                <h2 id="languages-heading" class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Expert Help in <br>
                    <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Every Programming Language</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    Choose from our comprehensive selection of programming languages. Our certified experts provide
                    step-by-step solutions, code debugging, and complete project development.
                </p>
            </div>

            <!-- Languages Grid -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 max-w-7xl mx-auto mb-16">
                <!-- Python Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-green-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-blue-500 to-green-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-green-500 bg-clip-text text-transparent">🐍</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">Python</h3>
                                        <p class="text-blue-100">Most Popular</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#1</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.9/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">150+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-green-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-green-600 mb-1">12min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Data Science & Machine Learning
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Django & Flask Web Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Automation & Scripting
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    AI & Deep Learning
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-blue-500 to-green-500 hover:from-blue-600 hover:to-green-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🚀</span>
                                Get Python Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- JavaScript Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-yellow-500 to-orange-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl font-bold text-yellow-600">JS</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">JavaScript</h3>
                                        <p class="text-yellow-100">Full-Stack</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#2</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.8/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-yellow-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-yellow-600 mb-1">120+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-orange-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-orange-600 mb-1">15min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    React.js & Vue.js Frontend
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Node.js Backend Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Full-Stack Applications
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    API Integration & Development
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">⚡</span>
                                Get JavaScript Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Java Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-red-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-orange-500 to-red-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-3xl font-bold text-orange-600">☕</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">Java</h3>
                                        <p class="text-orange-100">Enterprise</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#3</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.7/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-orange-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-orange-600 mb-1">98+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-red-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-red-600 mb-1">18min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Object-Oriented Programming
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Spring Boot Applications
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Android Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Enterprise Solutions
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">☕</span>
                                Get Java Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- C++ Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/5 to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-blue-600 to-purple-600 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-blue-600">C++</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">C++</h3>
                                        <p class="text-blue-100">Performance</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#4</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.6/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">85+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-purple-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-purple-600 mb-1">20min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    System Programming
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Game Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Data Structures & Algorithms
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Performance Optimization
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">⚡</span>
                                Get C++ Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- C# Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-600/5 to-pink-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-purple-600 to-pink-600 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-purple-600">C#</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">C#</h3>
                                        <p class="text-purple-100">Microsoft</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#5</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.5/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-purple-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-purple-600 mb-1">72+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-pink-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-pink-600 mb-1">22min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    .NET Applications
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Desktop Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Web APIs & Services
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Unity Game Development
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🎮</span>
                                Get C# Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PHP Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/5 to-blue-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-indigo-600 to-blue-600 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-indigo-600">🐘</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">PHP</h3>
                                        <p class="text-indigo-100">Web Backend</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#6</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.4/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-indigo-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-indigo-600 mb-1">64+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">25min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Laravel Web Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    WordPress Customization
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    E-commerce Solutions
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Database Integration
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🐘</span>
                                Get PHP Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Go Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-cyan-500 to-blue-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-cyan-600">🐹</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">Go</h3>
                                        <p class="text-cyan-100">Cloud Native</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#7</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.6/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-cyan-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-cyan-600 mb-1">45+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">18min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Backend Microservices
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Cloud Applications
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    DevOps Tools
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Concurrent Programming
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🐹</span>
                                Get Go Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Rust Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-600/5 to-red-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-orange-600 to-red-600 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-orange-600">🦀</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">Rust</h3>
                                        <p class="text-orange-100">Memory Safe</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#8</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.7/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-orange-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-orange-600 mb-1">38+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-red-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-red-600 mb-1">25min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Systems Programming
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    WebAssembly Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Blockchain Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Performance-Critical Apps
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-orange-600 to-red-600 hover:from-orange-700 hover:to-red-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🦀</span>
                                Get Rust Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Swift Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-orange-500 to-pink-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-orange-600">🍎</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">Swift</h3>
                                        <p class="text-orange-100">iOS Development</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#9</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.5/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-orange-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-orange-600 mb-1">32+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-pink-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-pink-600 mb-1">30min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    iOS App Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    macOS Applications
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    SwiftUI Interfaces
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Apple Ecosystem Apps
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-orange-500 to-pink-500 hover:from-orange-600 hover:to-pink-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🍎</span>
                                Get Swift Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kotlin Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-blue-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-purple-500 to-blue-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-purple-600">🎯</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">Kotlin</h3>
                                        <p class="text-purple-100">Modern JVM</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#10</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.6/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-purple-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-purple-600 mb-1">41+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">20min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Android App Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Server-side Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Multiplatform Projects
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Spring Boot with Kotlin
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-purple-500 to-blue-500 hover:from-purple-600 hover:to-blue-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🎯</span>
                                Get Kotlin Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- TypeScript Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-indigo-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-blue-500 to-indigo-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-blue-600">TS</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">TypeScript</h3>
                                        <p class="text-blue-100">Typed JavaScript</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#11</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.7/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">89+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-indigo-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-indigo-600 mb-1">16min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Large-scale Applications
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    React/Angular/Vue with TS
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Node.js Backend APIs
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Type Safety & Refactoring
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-600 hover:to-indigo-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🔷</span>
                                Get TypeScript Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Ruby Card -->
                <div class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-pink-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-red-500 to-pink-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span class="text-2xl font-bold text-red-600">💎</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-white">Ruby</h3>
                                        <p class="text-red-100">Developer Joy</p>
                                    </div>
                                </div>
                                <div class="bg-white/20 backdrop-blur-sm rounded-full px-3 py-1">
                                    <span class="text-white text-sm font-semibold">#12</span>
                                </div>
                            </div>
                            <div class="flex items-center text-white/90 text-sm">
                                <span class="mr-2">⭐</span>
                                <span>4.4/5 Expert Rating</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-8">
                            <div class="grid grid-cols-2 gap-4 mb-6">
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-red-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-red-600 mb-1">35+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-pink-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-pink-600 mb-1">28min</div>
                                    <div class="text-xs text-gray-600">Avg Response</div>
                                </div>
                            </div>

                            <ul class="space-y-3 mb-8">
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Ruby on Rails Applications
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Web Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    API Development
                                </li>
                                <li class="flex items-center text-gray-700">
                                    <span class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <span class="text-green-600 text-xs">✓</span>
                                    </span>
                                    Scripting & Automation
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}" class="group/btn w-full bg-gradient-to-r from-red-500 to-pink-500 hover:from-red-600 hover:to-pink-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">💎</span>
                                Get Ruby Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Our Programming Language Help -->
    <section class="py-24 bg-gradient-to-br from-purple-50 to-indigo-50 relative overflow-hidden" aria-labelledby="why-choose-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-xl">
                    <span class="mr-3 text-xl">⭐</span>
                    WHY STUDENTS CHOOSE US
                </div>

                <h2 id="why-choose-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Expert Programming Help
                    <br>
                    <span class="bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">For Every Language</span>
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">🎯</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Language-Specific Experts</h3>
                    <p class="text-gray-600 leading-relaxed">Our developers specialize in specific programming languages, ensuring you get expert-level help tailored to each language's unique features and best practices.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">📚</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Learning-Focused Approach</h3>
                    <p class="text-gray-600 leading-relaxed">We don't just solve problems - we teach you the concepts, syntax, and programming patterns that make you a better developer in your chosen language.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">💡</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Real-World Examples</h3>
                    <p class="text-gray-600 leading-relaxed">Get practical, industry-standard solutions with detailed explanations that help you understand how each language is used in professional development.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">⚡</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Instant Support</h3>
                    <p class="text-gray-600 leading-relaxed">Get help within minutes, not hours. Our experts are available 24/7 to assist with urgent assignments, debugging sessions, and project deadlines.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">🔧</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Complete Solutions</h3>
                    <p class="text-gray-600 leading-relaxed">From simple syntax questions to complex algorithm implementations, we provide complete, tested solutions with comprehensive documentation.</p>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="text-5xl mb-6">🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Academic Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">Boost your grades with professionally written code that follows academic standards and includes detailed explanations for better understanding.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programming Content Types Section -->
    <section class="py-24 bg-white relative overflow-hidden" aria-labelledby="content-types-heading">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-green-100 to-emerald-100 text-green-800 px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">📋</span>
                    WHAT WE HELP WITH
                </div>

                <h2 id="content-types-heading" class="text-4xl md:text-5xl lg:text-6xl font-black text-gray-900 mb-8 leading-tight">
                    Every Type of Programming
                    <br>
                    <span class="bg-gradient-to-r from-green-600 to-emerald-600 bg-clip-text text-transparent">Assignment & Project</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                    From basic syntax to complex algorithms, we provide expert assistance for all types of programming content across every language.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Assignments & Homework -->
                <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-blue-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">📝</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Assignments & Homework</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Coding exercises and problems
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Algorithm implementations
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Data structure assignments
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                            Object-oriented programming
                        </li>
                    </ul>
                </div>

                <!-- Projects & Applications -->
                <div class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-purple-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🚀</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Projects & Applications</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            Web applications (Frontend/Backend)
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            Mobile app development
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            Desktop applications
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-3"></span>
                            API development & integration
                        </li>
                    </ul>
                </div>

                <!-- Debugging & Code Review -->
                <div class="group bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-orange-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🔧</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Debugging & Code Review</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Error fixing and troubleshooting
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Code optimization
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Performance improvements
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-orange-500 rounded-full mr-3"></span>
                            Code refactoring
                        </li>
                    </ul>
                </div>

                <!-- Exam Preparation -->
                <div class="group bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-emerald-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🎓</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Exam Preparation</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Coding interview practice
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Algorithm challenges
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Technical assessments
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-3"></span>
                            Certification preparation
                        </li>
                    </ul>
                </div>

                <!-- Database & Backend -->
                <div class="group bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-cyan-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🗄️</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Database & Backend</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            SQL query optimization
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            Database design & modeling
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            Server-side programming
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-cyan-500 rounded-full mr-3"></span>
                            RESTful API development
                        </li>
                    </ul>
                </div>

                <!-- Data Science & AI -->
                <div class="group bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-indigo-100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-2xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🤖</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900">Data Science & AI</h3>
                    </div>
                    <ul class="space-y-3 text-gray-700">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Machine learning models
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Data analysis & visualization
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Neural networks & deep learning
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-indigo-500 rounded-full mr-3"></span>
                            Statistical programming
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-20">
                <div class="bg-gradient-to-r from-gray-50 to-slate-50 rounded-2xl p-12 max-w-4xl mx-auto border border-gray-200">
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">
                        Don't See Your Programming Need?
                    </h3>
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        We cover every programming concept, framework, and technology.
                        Get personalized help for any coding challenge you're facing.
                    </p>
                    <a href="{{ route('assignments.create') }}"
                       class="inline-flex items-center justify-center bg-gradient-to-r from-green-600 to-emerald-600 hover:from-green-700 hover:to-emerald-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span class="mr-3">💬</span>
                        Describe Your Project
                        <svg class="ml-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-600 relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                    Ready to Master Your Programming Language?
                </h2>
                <p class="text-xl text-purple-100 mb-12 leading-relaxed">
                    Join thousands of students who've accelerated their programming journey with our expert help.
                    Get instant assistance, learn faster, and achieve better grades.
                </p>
                <a href="{{ route('assignments.create') }}"
                   class="group inline-flex items-center justify-center bg-white text-purple-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <span class="mr-4 text-3xl">🚀</span>
                    Start Getting Help Now
                    <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection