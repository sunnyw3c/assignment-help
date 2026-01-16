@extends('layouts.app')

@section('title', 'Programming Help Online - Expert Coders Available 24/7 | CodeHelp')
@section('description', 'Get instant programming help from certified experts. Support for Python, Java, JavaScript, C++, C#, PHP and 20+ languages. 98% success rate, 15min average response time.')
@section('keywords', 'programming help online, coding assistance, python help, java programming help, javascript debugging, c++ tutoring, programming assignment help, coding experts 24/7')

@section('content')
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "CodeHelp",
        "description": "Professional programming help and coding assistance available 24/7. Expert developers provide instant support for Python, Java, JavaScript, C++, and more.",
        "url": "{{ url('/') }}",
        "logo": "{{ url('/') }}/logo.png",
        "sameAs": [
            "https://facebook.com/codehelp",
            "https://twitter.com/codehelp"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-555-123-4567",
            "contactType": "customer service",
            "availableLanguage": "English",
            "areaServed": "Worldwide"
        },
        "offers": {
            "@type": "Offer",
            "name": "Programming Help Service",
            "description": "Expert programming assistance for students and developers",
            "category": "Education"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "10000"
        }
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
                    <div
                        class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        500+ Expert Developers Available Now
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        Get Expert <br>
                        <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Programming
                            Help</span> <br>
                        in Minutes
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-lg">
                        From Python to Java, get instant help with coding assignments, debugging, and project development
                        from certified experts.
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
                        <a href="#languages"
                            class="inline-flex items-center justify-center border-2 border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                            <span class="mr-2">📚</span>
                            View Languages
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-1">15min</div>
                            <div class="text-sm text-gray-500">Avg Response</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 mb-1">98%</div>
                            <div class="text-sm text-gray-500">Success Rate</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-1">24/7</div>
                            <div class="text-sm text-gray-500">Support</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Visual -->
                <div class="relative">
                    <!-- Code Editor Mockup -->
                    <div
                        class="bg-gray-900 rounded-xl shadow-2xl p-6 transform rotate-3 hover:rotate-1 transition-transform duration-500">
                        <!-- Editor Header -->
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            <div class="ml-4 text-gray-400 text-sm font-mono">solution.py</div>
                        </div>

                        <!-- Code Content -->
                        <div class="font-mono text-sm space-y-1">
                            <div class="text-purple-400"># Expert Programming Solution</div>
                            <div class="text-blue-400">def <span class="text-yellow-400">solve_problem</span>():</div>
                            <div class="text-gray-300 ml-4">solution = <span class="text-green-400">"Fast & Reliable"</span>
                            </div>
                            <div class="text-gray-300 ml-4">return solution</div>
                            <div class="text-gray-500"></div>
                            <div class="text-purple-400"># Available 24/7 for help!</div>
                            <div class="text-blue-400">class <span class="text-yellow-400">CodeHelper</span>:</div>
                            <div class="text-gray-300 ml-4">expert_available = <span class="text-green-400">True</span>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                        <div class="flex items-center text-sm">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            <span class="font-semibold text-gray-800">Expert Online</span>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-purple-600 text-white rounded-lg shadow-lg p-4">
                        <div class="text-sm font-semibold">✅ Problem Solved!</div>
                        <div class="text-xs opacity-90">in 12 minutes</div>
                    </div>

                    <!-- Programming Language Icons -->
                    <div class="absolute top-1/2 -left-8 transform -translate-y-1/2 space-y-4 hidden lg:block">
                        <div
                            class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center text-white font-bold shadow-lg animate-pulse">
                            Py</div>
                        <div
                            class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center text-white font-bold shadow-lg animate-pulse delay-100">
                            JS</div>
                        <div
                            class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center text-white font-bold shadow-lg animate-pulse delay-200">
                            J</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-20">
                <path
                    d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                    fill="url(#gradient)" />
                <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%" style="stop-color:#f8fafc" />
                        <stop offset="100%" style="stop-color:#e2e8f0" />
                    </linearGradient>
                </defs>
            </svg>
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
                <div
                    class="inline-flex items-center bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
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
                <div
                    class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-green-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-blue-500 to-green-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                        <span
                                            class="text-3xl font-bold bg-gradient-to-r from-blue-500 to-green-500 bg-clip-text text-transparent">🐍</span>
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
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">150+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-green-50 transition-colors duration-300">
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

                            <a href="{{ route('assignments.create') }}"
                                class="group/btn w-full bg-gradient-to-r from-blue-500 to-green-500 hover:from-blue-600 hover:to-green-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🚀</span>
                                Get Python Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- JavaScript Card -->
                <div
                    class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-yellow-500/5 to-orange-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-yellow-500 to-orange-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
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
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-yellow-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-yellow-600 mb-1">120+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-orange-50 transition-colors duration-300">
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

                            <a href="{{ route('assignments.create') }}"
                                class="group/btn w-full bg-gradient-to-r from-yellow-500 to-orange-500 hover:from-yellow-600 hover:to-orange-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">⚡</span>
                                Get JavaScript Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Java Card -->
                <div
                    class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-red-500/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-orange-500 to-red-500 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
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
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-orange-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-orange-600 mb-1">98+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-red-50 transition-colors duration-300">
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

                            <a href="{{ route('assignments.create') }}"
                                class="group/btn w-full bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">☕</span>
                                Get Java Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- C++ Card -->
                <div
                    class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-600/5 to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-blue-600 to-purple-600 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
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
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-blue-600 mb-1">85+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-purple-50 transition-colors duration-300">
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

                            <a href="{{ route('assignments.create') }}"
                                class="group/btn w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">⚡</span>
                                Get C++ Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- C# Card -->
                <div
                    class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-600/5 to-pink-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-purple-600 to-pink-600 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
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
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-purple-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-purple-600 mb-1">72+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-pink-50 transition-colors duration-300">
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

                            <a href="{{ route('assignments.create') }}"
                                class="group/btn w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🎮</span>
                                Get C# Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PHP Card -->
                <div
                    class="group relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 overflow-hidden border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-indigo-600/5 to-blue-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10">
                        <!-- Header -->
                        <div class="bg-gradient-to-br from-indigo-600 to-blue-600 p-8">
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center">
                                    <div
                                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mr-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
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
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-indigo-50 transition-colors duration-300">
                                    <div class="text-2xl font-bold text-indigo-600 mb-1">64+</div>
                                    <div class="text-xs text-gray-600">Projects Done</div>
                                </div>
                                <div
                                    class="bg-gray-50 rounded-xl p-4 text-center group-hover:bg-blue-50 transition-colors duration-300">
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
                                    RESTful API Development
                                </li>
                            </ul>

                            <a href="{{ route('assignments.create') }}"
                                class="group/btn w-full bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 text-white py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center justify-center">
                                <span class="mr-2">🌐</span>
                                Get PHP Help
                                <svg class="ml-2 w-5 h-5 group-hover/btn:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Languages CTA -->
            <div class="text-center">
                <div class="inline-flex items-center bg-gray-100 rounded-2xl p-2 mb-6">
                    <div class="bg-white rounded-xl px-6 py-3 mr-4 shadow-sm">
                        <span class="text-gray-600 font-semibold">Need a different language?</span>
                    </div>
                    <div class="flex -space-x-2">
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            Go</div>
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            Rs</div>
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            Kt</div>
                        <div
                            class="w-10 h-10 bg-gradient-to-r from-purple-400 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                            +15</div>
                    </div>
                </div>
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-gray-800">We Support 20+ Programming Languages</h3>
                    <p class="text-gray-600 max-w-2xl mx-auto">From mainstream languages to specialized frameworks, our
                        expert team has you covered. Get help with any programming challenge, no matter how complex.</p>
                    <a href="{{ route('assignments.create') }}"
                        class="inline-flex items-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                        <span class="mr-2">🔥</span>
                        Explore All Languages
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Our Programming Help Service -->
    <section class="py-24 bg-white relative overflow-hidden" aria-labelledby="about-service-heading">
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
                    TRUSTED BY 50,000+ STUDENTS
                </div>
                <h2 id="about-service-heading" class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-8 leading-tight">
                    Turn Your Coding <br>
                    <span
                        class="bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">Struggles</span>
                    Into <br>
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Success
                        Stories</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-5xl mx-auto leading-relaxed mb-8">
                    From debugging nightmares to complex algorithms, our expert programmers transform your coding challenges
                    into learning opportunities. Get personalized help, detailed explanations, and proven solutions that
                    boost your programming skills.
                </p>

                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-green-600 mb-1">98%</div>
                        <div class="text-sm text-gray-600">Success Rate</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-blue-600 mb-1">15min</div>
                        <div class="text-sm text-gray-600">Avg Response</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-purple-600 mb-1">20+</div>
                        <div class="text-sm text-gray-600">Languages</div>
                    </div>
                    <div class="bg-white/80 backdrop-blur-sm rounded-xl p-4 shadow-lg border border-gray-100">
                        <div class="text-2xl font-bold text-orange-600 mb-1">24/7</div>
                        <div class="text-sm text-gray-600">Support</div>
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
                            The Programming Challenge Every Student Faces
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Stuck at 2 AM with a debugging error? Struggling to understand complex algorithms? Assignment
                            deadline approaching with half-finished code? You're not alone - <strong>78% of programming
                                students</strong> report feeling overwhelmed by coding challenges.
                        </p>
                    </div>

                    <!-- Solution -->
                    <div class="bg-green-50 border-l-4 border-green-400 p-6 rounded-r-xl">
                        <h3 class="text-xl font-bold text-green-800 mb-3 flex items-center">
                            <span class="mr-2">✅</span>
                            Our Expert-Driven Solution
                        </h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            We've created the ultimate programming support ecosystem where <strong>certified
                                experts</strong> don't just fix your code - they teach you <em>why</em> it works. Every
                            solution comes with detailed explanations, best practices, and optimization tips.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Step-by-step explanations
                            </div>
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Code optimization tips
                            </div>
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Best practice guidelines
                            </div>
                            <div class="flex items-center text-sm text-green-700">
                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                Future-ready skills
                            </div>
                        </div>
                    </div>

                    <!-- What Makes Us Different -->
                    <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-6 rounded-xl border border-blue-100">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="mr-2">🌟</span>
                            What Makes Us Different
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-bold">1</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Education-First Approach</h4>
                                    <p class="text-gray-600 text-sm">We don't just solve - we teach. Every solution
                                        includes detailed explanations to boost your understanding.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-bold">2</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Lightning-Fast Response</h4>
                                    <p class="text-gray-600 text-sm">Average 15-minute response time means you never wait
                                        long for help, even during peak hours.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-gradient-to-r from-green-500 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <span class="text-white text-sm font-bold">3</span>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Comprehensive Coverage</h4>
                                    <p class="text-gray-600 text-sm">From basic Python scripts to advanced machine learning
                                        algorithms - we handle everything.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Success Guarantee -->
                    <div class="bg-gradient-to-r from-yellow-50 to-orange-50 p-6 rounded-xl border-2 border-yellow-200">
                        <div class="flex items-center mb-3">
                            <span class="text-2xl mr-3">🏆</span>
                            <h3 class="text-xl font-bold text-gray-900">Our Success Guarantee</h3>
                        </div>
                        <p class="text-gray-700 mb-4">
                            <strong>98% of our students see immediate improvement</strong> in their programming skills after
                            just one session. If you're not completely satisfied, we'll work with you until you are - or
                            provide a full refund.
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
                            <span class="text-gray-400 text-sm font-mono">expert_solution.py</span>
                        </div>

                        <!-- Code Content -->
                        <div class="font-mono text-sm space-y-1">
                            <div class="text-green-400"># Professional, Clean, Documented Code</div>
                            <div class="text-blue-400">class <span class="text-yellow-400">ProgrammingHelper</span>:</div>
                            <div class="text-gray-300 ml-4">def __init__(self):</div>
                            <div class="text-gray-300 ml-8">self.expertise = <span class="text-green-400">"20+
                                    Languages"</span></div>
                            <div class="text-gray-300 ml-8">self.availability = <span class="text-green-400">"24/7"</span>
                            </div>
                            <div class="text-gray-300 ml-8">self.success_rate = <span class="text-purple-400">98.5</span>
                            </div>
                            <div class="text-gray-500"></div>
                            <div class="text-gray-300 ml-4">def solve_problem(self, challenge):</div>
                            <div class="text-green-400 ml-8"># Detailed explanation provided</div>
                            <div class="text-gray-300 ml-8">solution = self.analyze(challenge)</div>
                            <div class="text-gray-300 ml-8">return self.optimize(solution)</div>
                            <div class="text-gray-500"></div>
                            <div class="text-green-400"># Result: Happy Student ✅</div>
                        </div>
                    </div>

                    <!-- Floating Stats -->
                    <div
                        class="absolute -top-6 -right-6 bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-2xl p-4 shadow-xl animate-bounce">
                        <div class="text-center">
                            <div class="text-2xl font-bold">15,000+</div>
                            <div class="text-xs opacity-90">Students Helped</div>
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
                            <span class="font-semibold text-gray-800">Expert Available</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Call-to-Action -->
            <div class="text-center mt-16">
                <div class="inline-flex flex-col sm:flex-row items-center gap-4">
                    <a href="{{ route('assignments.create') }}"
                        class="group bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white px-10 py-4 rounded-xl text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl flex items-center">
                        <span class="mr-3">🚀</span>
                        Start Your Programming Journey
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

    <!-- Service Types -->
    <section class="py-20 bg-gradient-to-br from-slate-50 via-gray-50 to-blue-50 relative overflow-hidden" aria-labelledby="services-heading">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-64 h-64 bg-orange-200/20 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-80 h-80 bg-red-200/20 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-yellow-200/15 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-block bg-orange-100 text-orange-600 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                    OUR SERVICES
                </div>
                <h2 id="services-heading" class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    Complete <span
                        class="bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">Programming
                        Solutions</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From debugging your existing code to building complete applications, we provide comprehensive
                    programming assistance tailored to your needs.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Service Card 1 -->
                <div
                    class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10 text-center">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-white text-2xl transform group-hover:scale-110 transition-transform duration-300">
                            📚
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800 group-hover:text-purple-700 transition-colors">
                            Textbook Solutions</h3>
                        <p class="text-gray-600 leading-relaxed">Step-by-step solutions for programming textbook problems
                            and exercises with detailed explanations</p>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div
                    class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10 text-center">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-red-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-white text-2xl transform group-hover:scale-110 transition-transform duration-300">
                            🔧
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800 group-hover:text-red-600 transition-colors">Code
                            Debugging</h3>
                        <p class="text-gray-600 leading-relaxed">Fix errors and bugs in your existing code with detailed
                            explanations and optimized solutions</p>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div
                    class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10 text-center">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-white text-2xl transform group-hover:scale-110 transition-transform duration-300">
                            💻
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800 group-hover:text-green-600 transition-colors">
                            Project Development</h3>
                        <p class="text-gray-600 leading-relaxed">Complete programming assignments and projects from scratch
                            with modern best practices</p>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div
                    class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10 text-center">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-white text-2xl transform group-hover:scale-110 transition-transform duration-300">
                            🎯
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800 group-hover:text-purple-600 transition-colors">Code
                            Tutoring</h3>
                        <p class="text-gray-600 leading-relaxed">One-on-one programming mentorship and personalized
                            learning sessions with experts</p>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div
                    class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10 text-center">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-white text-2xl transform group-hover:scale-110 transition-transform duration-300">
                            📝
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800 group-hover:text-yellow-600 transition-colors">Code
                            Review</h3>
                        <p class="text-gray-600 leading-relaxed">Expert feedback and optimization suggestions to improve
                            your code quality and performance</p>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div
                    class="group relative bg-white p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                    <div class="relative z-10 text-center">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6 text-white text-2xl transform group-hover:scale-110 transition-transform duration-300">
                            🧪
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-800 group-hover:text-indigo-600 transition-colors">
                            Testing & QA</h3>
                        <p class="text-gray-600 leading-relaxed">Unit testing, debugging, and comprehensive quality
                            assurance for your applications</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-32 h-32 bg-purple-500/10 rounded-full blur-xl"></div>
            <div class="absolute bottom-20 right-10 w-40 h-40 bg-indigo-500/10 rounded-full blur-xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-500/5 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Header -->
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center px-6 py-3 bg-white/10 backdrop-blur-sm rounded-full mb-8 border border-white/20">
                    <span class="text-2xl mr-3">⚡</span>
                    <span class="text-white font-semibold">Simple Process</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-extrabold mb-6">
                    <span class="bg-gradient-to-r from-white via-purple-200 to-pink-200 bg-clip-text text-transparent">
                        How It Works
                    </span>
                </h2>
                <p class="text-xl text-indigo-200 max-w-3xl mx-auto leading-relaxed">
                    Get expert programming help in 4 simple steps. From code submission to solution delivery,
                    we make it effortless to get the help you need.
                </p>
            </div>

            <!-- Process Steps -->
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mb-16">
                <!-- Step 1 -->
                <div class="group relative">
                    <!-- Connecting Line (hidden on mobile) -->
                    <div
                        class="hidden lg:block absolute top-24 left-full w-full h-0.5 bg-gradient-to-r from-orange-400 to-purple-400 transform -translate-x-4 z-0">
                    </div>

                    <div
                        class="relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:border-orange-400/50 transition-all duration-500 transform group-hover:-translate-y-3 group-hover:shadow-2xl group-hover:shadow-orange-500/20">
                        <!-- Step Indicator -->
                        <div class="relative">

                            <div
                                class="absolute -top-2 -right-2 w-6 h-6 bg-yellow-400 rounded-full animate-pulse flex items-center justify-center">
                                <span class="text-xs text-white font-bold">📄</span>
                            </div>
                        </div>

                        <!-- Icon -->
                        <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform duration-300">
                            💻
                        </div>

                        <!-- Content -->
                        <h3 class="text-2xl font-bold text-white mb-4 text-center">Submit Your Code</h3>
                        <p class="text-indigo-200 text-center leading-relaxed mb-6">
                            Upload your files, paste code snippets, or describe your programming challenge.
                            Include requirements and any specific issues you're facing.
                        </p>

                        <!-- Features -->
                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-3"></span>
                                Multiple file formats supported
                            </div>
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-green-400 rounded-full mr-3"></span>
                                Secure file encryption
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="group relative">
                    <!-- Connecting Line -->
                    <div
                        class="hidden lg:block absolute top-24 left-full w-full h-0.5 bg-gradient-to-r from-purple-400 to-blue-400 transform -translate-x-4 z-0">
                    </div>

                    <div
                        class="relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:border-purple-400/50 transition-all duration-500 transform group-hover:-translate-y-3 group-hover:shadow-2xl group-hover:shadow-purple-500/20">
                        <div class="relative">
                            <div
                                class="absolute -top-2 -right-2 w-6 h-6 bg-purple-400 rounded-full animate-pulse delay-200 flex items-center justify-center">
                                <span class="text-xs">⚡</span>
                            </div>
                        </div>

                        <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform duration-300">
                            🎯
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 text-center">Get Expert Match</h3>
                        <p class="text-indigo-200 text-center leading-relaxed mb-6">
                            Our AI instantly matches you with a programming specialist who has expertise
                            in your specific language and problem domain.
                        </p>

                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-blue-400 rounded-full mr-3"></span>
                                AI-powered expert matching
                            </div>
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-blue-400 rounded-full mr-3"></span>
                                Average match time: 2 minutes
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative">
                    <!-- Connecting Line -->
                    <div
                        class="hidden lg:block absolute top-24 left-full w-full h-0.5 bg-gradient-to-r from-blue-400 to-green-400 transform -translate-x-4 z-0">
                    </div>

                    <div
                        class="relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:border-blue-400/50 transition-all duration-500 transform group-hover:-translate-y-3 group-hover:shadow-2xl group-hover:shadow-blue-500/20">
                        <div class="relative">
                            <div
                                class="absolute -top-2 -right-2 w-6 h-6 bg-cyan-400 rounded-full animate-pulse delay-500 flex items-center justify-center">
                                <span class="text-xs">✅</span>
                            </div>
                        </div>

                        <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform duration-300">
                            ⚡
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 text-center">Receive Solution</h3>
                        <p class="text-indigo-200 text-center leading-relaxed mb-6">
                            Get working, tested code with comprehensive explanations, comments,
                            and documentation. Every solution is thoroughly reviewed.
                        </p>

                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></span>
                                Fully tested and commented code
                            </div>
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></span>
                                Step-by-step explanation included
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="group relative">
                    <div
                        class="relative bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:border-green-400/50 transition-all duration-500 transform group-hover:-translate-y-3 group-hover:shadow-2xl group-hover:shadow-green-500/20">
                        <div class="relative">
                            <div
                                class="absolute -top-2 -right-2 w-6 h-6 bg-emerald-400 rounded-full animate-pulse delay-1000 flex items-center justify-center">
                                <span class="text-xs">🎓</span>
                            </div>
                        </div>

                        <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform duration-300">
                            🚀
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 text-center">Learn & Succeed</h3>
                        <p class="text-indigo-200 text-center leading-relaxed mb-6">
                            Understand the concepts, master the techniques, and ace your programming courses.
                            Get unlimited follow-up questions for 24 hours.
                        </p>

                        <div class="space-y-2">
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-emerald-400 rounded-full mr-3"></span>
                                24-hour follow-up support
                            </div>
                            <div class="flex items-center text-sm text-indigo-200">
                                <span class="w-2 h-2 bg-emerald-400 rounded-full mr-3"></span>
                                Concept explanations included
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
                <div class="text-center">
                    <div class="text-4xl font-black text-white mb-2">2min</div>
                    <div class="text-indigo-200">Average Match Time</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-black text-white mb-2">15min</div>
                    <div class="text-indigo-200">Solution Delivery</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-black text-white mb-2">24/7</div>
                    <div class="text-indigo-200">Expert Availability</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-black text-white mb-2">98%</div>
                    <div class="text-indigo-200">Success Rate</div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center">
                <div class="inline-flex flex-col sm:flex-row items-center gap-4">
                    <a href="{{ route('assignments.create') }}"
                        class="group bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white px-12 py-5 rounded-2xl text-xl font-bold transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-orange-500/30 flex items-center">
                        <span class="mr-3">🚀</span>
                        Start Now - Get Code Help
                        <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <div class="text-indigo-200 text-sm">
                        ✨ No commitment required • Pay only when satisfied
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-10 left-10 w-64 h-64 bg-purple-200/30 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-blue-200/30 rounded-full blur-3xl"></div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-200/20 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <!-- Countdown Timer Effect -->
                <div
                    class="inline-flex items-center bg-gradient-to-r from-red-500 to-orange-500 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-2xl animate-bounce border-2 border-red-300">
                    <span class="mr-3 text-lg animate-pulse">🔥</span>
                    LIMITED TIME: 50% OFF FIRST ORDER
                    <span class="ml-3 text-lg animate-pulse">🔥</span>
                </div>

                <!-- Urgency Badge -->
                <div
                    class="inline-flex items-center bg-yellow-100 border-2 border-yellow-300 text-yellow-800 px-6 py-2 rounded-full text-sm font-bold mb-6 animate-pulse">
                    <span class="mr-2">⏰</span>
                    ONLY 23 HOURS LEFT!
                </div>

                <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 mb-8 leading-tight">
                    <span class="block text-2xl md:text-3xl font-normal text-gray-600 mb-4">Don't Wait Until
                        Tomorrow!</span>
                    Get Your Code <br>
                    <span class="bg-gradient-to-r from-red-500 to-orange-500 bg-clip-text text-transparent">FIXED RIGHT
                        NOW</span> <br>
                    <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">& Boost Your
                        Grades</span>
                </h2>

                <!-- Scarcity & Social Proof -->
                <div
                    class="bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 rounded-2xl p-6 max-w-4xl mx-auto mb-8">
                    <p class="text-lg text-gray-700 leading-relaxed mb-4">
                        <strong class="text-green-600">🚨 URGENT:</strong> Over <strong>200 students</strong> got help in
                        the last 24 hours!
                        Don't be the one struggling alone while others are succeeding.
                    </p>
                    <div class="flex flex-wrap justify-center items-center gap-4 text-sm">
                        <div class="flex items-center bg-white rounded-full px-4 py-2 shadow-md">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                            <span class="font-semibold">127 experts online now</span>
                        </div>
                        <div class="flex items-center bg-white rounded-full px-4 py-2 shadow-md">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse"></span>
                            <span class="font-semibold">Average wait: 3 minutes</span>
                        </div>
                        <div class="flex items-center bg-white rounded-full px-4 py-2 shadow-md">
                            <span class="w-2 h-2 bg-purple-500 rounded-full mr-2 animate-pulse"></span>
                            <span class="font-semibold">15 solutions delivered this hour</span>
                        </div>
                    </div>
                </div>

                <!-- Fear of Missing Out -->
                <div class="bg-red-50 border-2 border-red-200 rounded-xl p-6 max-w-3xl mx-auto">
                    <p class="text-lg text-red-800 font-semibold mb-2">
                        ⚠️ What Happens If You Wait?
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm text-red-700">
                        <div class="flex items-center">
                            <span class="mr-2">❌</span>
                            Missed deadline anxiety
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">❌</span>
                            Lower grades
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">❌</span>
                            Sleepless nights debugging
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                <div
                    class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/50">
                    <div
                        class="text-4xl font-black bg-gradient-to-r from-green-500 to-emerald-500 bg-clip-text text-transparent mb-3">
                        15,000+</div>
                    <div class="text-gray-700 font-semibold">Problems Solved</div>
                    <div class="text-sm text-gray-500 mt-1">This month alone</div>
                </div>
                <div
                    class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/50">
                    <div
                        class="text-4xl font-black bg-gradient-to-r from-blue-500 to-purple-500 bg-clip-text text-transparent mb-3">
                        4.9/5</div>
                    <div class="text-gray-700 font-semibold">Average Rating</div>
                    <div class="text-sm text-gray-500 mt-1">From 5,000+ reviews</div>
                </div>
                <div
                    class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/50">
                    <div
                        class="text-4xl font-black bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent mb-3">
                        12min</div>
                    <div class="text-gray-700 font-semibold">Avg Response</div>
                    <div class="text-sm text-gray-500 mt-1">24/7 availability</div>
                </div>
                <div
                    class="bg-white/70 backdrop-blur-sm rounded-2xl p-8 text-center shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-white/50">
                    <div
                        class="text-4xl font-black bg-gradient-to-r from-purple-500 to-pink-500 bg-clip-text text-transparent mb-3">
                        98%</div>
                    <div class="text-gray-700 font-semibold">Success Rate</div>
                    <div class="text-sm text-gray-500 mt-1">First-time solutions</div>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="grid md:grid-cols-3 gap-8 mb-16">
                <!-- Testimonial 1 -->
                <div
                    class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-white/50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 text-lg">⭐⭐⭐⭐⭐</div>
                        <span class="ml-2 text-sm text-gray-600">5.0</span>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Got my Python assignment fixed in 10 minutes! The expert explained everything so clearly.
                        Definitely using this again."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-400 to-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            S
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Sarah M.</div>
                            <div class="text-sm text-gray-600">Computer Science Student</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-white/50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 text-lg">⭐⭐⭐⭐⭐</div>
                        <span class="ml-2 text-sm text-gray-600">5.0</span>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Amazing service! My Java project was completed perfectly with detailed comments. Worth every
                        penny!"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-400 to-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            M
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Mike R.</div>
                            <div class="text-sm text-gray-600">Software Engineering</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-xl border border-white/50 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400 text-lg">⭐⭐⭐⭐⭐</div>
                        <span class="ml-2 text-sm text-gray-600">5.0</span>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Saved my semester! The expert helped debug my C++ code and taught me optimization techniques."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-orange-400 to-red-500 rounded-full flex items-center justify-center text-white font-bold mr-4">
                            A
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Alex K.</div>
                            <div class="text-sm text-gray-600">Data Science Major</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Final CTA -->
            <div class="text-center">
                <!-- Multiple CTA Cards -->
                <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto mb-12">
                    <!-- Instant Help CTA -->
                    <div
                        class="bg-gradient-to-br from-red-500 to-orange-500 rounded-3xl p-8 text-white shadow-2xl transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 bg-yellow-400 text-black px-4 py-2 rounded-bl-2xl font-bold text-sm animate-pulse">
                            MOST POPULAR
                        </div>
                        <div class="relative z-10">
                            <div class="text-6xl mb-4">🚨</div>
                            <h3 class="text-3xl font-bold mb-4">URGENT HELP NEEDED?</h3>
                            <p class="text-lg mb-6 text-red-100">
                                Deadline in hours? Stuck on a critical bug? Get <strong>instant expert help</strong> right
                                now!
                            </p>
                            <div class="bg-white/20 rounded-xl p-4 mb-6 backdrop-blur-sm">
                                <div class="text-2xl font-bold mb-2">⚡ LIGHTNING RESPONSE</div>
                                <div class="text-sm">Average response: 3 minutes</div>
                            </div>
                            <a href="{{ route('assignments.create') }}"
                                class="group inline-flex items-center bg-white text-red-500 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-xl">
                                <span class="mr-3">🆘</span>
                                GET INSTANT HELP
                                <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Planning Ahead CTA -->
                    <div
                        class="bg-gradient-to-br from-blue-600 to-purple-600 rounded-3xl p-8 text-white shadow-2xl transform hover:scale-105 transition-all duration-300 relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 bg-green-400 text-black px-4 py-2 rounded-bl-2xl font-bold text-sm">
                            BEST VALUE
                        </div>
                        <div class="relative z-10">
                            <div class="text-6xl mb-4">📚</div>
                            <h3 class="text-3xl font-bold mb-4">PLANNING AHEAD?</h3>
                            <p class="text-lg mb-6 text-blue-100">
                                Get <strong>comprehensive project help</strong> with detailed explanations to boost your
                                skills!
                            </p>
                            <div class="bg-white/20 rounded-xl p-4 mb-6 backdrop-blur-sm">
                                <div class="text-2xl font-bold mb-2">🎓 LEARN & SUCCEED</div>
                                <div class="text-sm">Detailed explanations included</div>
                            </div>
                            <a href="{{ route('assignments.create') }}"
                                class="group inline-flex items-center bg-white text-blue-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-xl">
                                <span class="mr-3">🚀</span>
                                START PROJECT
                                <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Final Urgency Section - COMMENTED OUT FOR LATER USE -->
                <!--
                                    <div class="relative bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 border-4 border-gradient-to-r from-red-300 to-orange-300 rounded-3xl p-10 max-w-5xl mx-auto shadow-2xl overflow-hidden animate-pulse-subtle">
                                        <!--
                                        <div class="absolute inset-0 opacity-10">
                                            <div class="absolute top-4 left-4 w-16 h-16 bg-red-400 rounded-full animate-bounce delay-75"></div>
                                            <div class="absolute top-8 right-8 w-12 h-12 bg-orange-400 rounded-full animate-bounce delay-150"></div>
                                            <div class="absolute bottom-8 left-8 w-10 h-10 bg-yellow-400 rounded-full animate-bounce delay-300"></div>
                                            <div class="absolute bottom-4 right-16 w-14 h-14 bg-red-300 rounded-full animate-bounce delay-500"></div>
                                        </div>

                                        <div class="relative z-10 bg-gradient-to-r from-gray-900 via-black to-gray-900 text-white rounded-3xl p-8 mb-8 mx-auto max-w-lg shadow-2xl border-4 border-red-500">
                                            <div class="text-center">
                                                <div class="text-lg font-bold text-red-400 mb-4 animate-pulse">
                                                    <span class="text-2xl">⏰</span> EXCLUSIVE OFFER EXPIRES IN:
                                                </div>
                                                <div class="grid grid-cols-4 gap-3 text-3xl font-black">
                                                    <div class="bg-gradient-to-b from-red-500 to-red-700 rounded-xl p-4 transform hover:scale-105 transition-transform shadow-lg">
                                                        <div class="animate-bounce">23</div>
                                                        <div class="text-xs text-red-200 font-semibold">HOURS</div>
                                                    </div>
                                                    <div class="bg-gradient-to-b from-red-500 to-red-700 rounded-xl p-4 transform hover:scale-105 transition-transform shadow-lg">
                                                        <div class="animate-bounce delay-75">45</div>
                                                        <div class="text-xs text-red-200 font-semibold">MINS</div>
                                                    </div>
                                                    <div class="bg-gradient-to-b from-red-500 to-red-700 rounded-xl p-4 transform hover:scale-105 transition-transform shadow-lg">
                                                        <div class="animate-bounce delay-150">12</div>
                                                        <div class="text-xs text-red-200 font-semibold">SECS</div>
                                                    </div>
                                                    <div class="flex items-center justify-center">
                                                        <span class="text-4xl animate-spin">🔥</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mb-6">
                                            <h3 class="text-5xl md:text-6xl font-black bg-gradient-to-r from-red-600 via-orange-500 to-yellow-500 bg-clip-text text-transparent mb-2 animate-pulse">
                                                FLASH SALE: 50% OFF!
                                            </h3>
                                            <div class="text-2xl font-bold text-red-600 animate-bounce">
                                                🚨 LIMITED TIME ONLY 🚨
                                            </div>
                                        </div>

                                        <p class="text-xl text-gray-800 mb-8 max-w-3xl mx-auto text-center leading-relaxed">
                                            <strong class="text-red-600">⚡ DON'T MISS OUT!</strong> Join <span class="text-orange-600 font-bold">10,000+</span> successful students who got professional programming help at <span class="bg-yellow-200 px-2 py-1 rounded font-bold">50% DISCOUNT</span>. This offer vanishes when the timer hits zero!
                                        </p>

                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-10">
                                            <div class="group bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 shadow-xl border-3 border-green-300 hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                                                <div class="text-4xl mb-3 group-hover:animate-bounce">💰</div>
                                                <div class="font-black text-green-700 text-sm leading-tight">100% MONEY BACK GUARANTEE</div>
                                            </div>
                                            <div class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 shadow-xl border-3 border-blue-300 hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                                                <div class="text-4xl mb-3 group-hover:animate-bounce">🔒</div>
                                                <div class="font-black text-blue-700 text-sm leading-tight">BANK-LEVEL SECURITY</div>
                                            </div>
                                            <div class="group bg-gradient-to-br from-purple-50 to-violet-50 rounded-2xl p-6 shadow-xl border-3 border-purple-300 hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                                                <div class="text-4xl mb-3 group-hover:animate-bounce">⚡</div>
                                                <div class="font-black text-purple-700 text-sm leading-tight">LIGHTNING FAST DELIVERY</div>
                                            </div>
                                            <div class="group bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6 shadow-xl border-3 border-orange-300 hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                                                <div class="text-4xl mb-3 group-hover:animate-bounce">🏆</div>
                                                <div class="font-black text-orange-700 text-sm leading-tight">99.8% SUCCESS RATE</div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <a href="{{ route('assignments.create') }}"
                                               class="group relative inline-flex items-center bg-gradient-to-r from-red-600 via-orange-500 to-red-600 hover:from-red-700 hover:via-orange-600 hover:to-red-700 text-white px-20 py-8 rounded-full text-3xl font-black transition-all duration-500 transform hover:scale-110 shadow-2xl hover:shadow-red-500/50 animate-pulse border-4 border-yellow-300 hover:border-yellow-400 bg-size-200 bg-pos-0 hover:bg-pos-100">
                                                <div class="absolute inset-0 bg-gradient-to-r from-red-400 to-orange-400 rounded-full blur-lg opacity-30 group-hover:opacity-50 transition-opacity duration-300"></div>

                                                <span class="relative flex items-center">
                                                    <span class="mr-6 text-4xl animate-spin group-hover:animate-bounce">🔥</span>
                                                    <span class="tracking-wider">GRAB 50% OFF NOW</span>
                                                    <span class="ml-6 text-4xl animate-spin group-hover:animate-bounce">🔥</span>
                                                </span>
                                            </a>

                                            <div class="mt-6 space-y-2">
                                                <p class="text-lg font-bold text-red-600 animate-pulse">
                                                    🚨 ONLY <span class="bg-yellow-200 px-2 py-1 rounded">47 SPOTS</span> LEFT AT THIS PRICE!
                                                </p>
                                                <p class="text-sm text-gray-700 font-semibold">
                                                    ⚠️ This exclusive discount expires automatically when timer reaches 00:00:00
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    -->
            </div>
        </div>
    </section>

@endsection
