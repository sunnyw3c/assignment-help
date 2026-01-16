@extends('layouts.app')

@section('title', 'TrendingTutor - #1 Assignment Help & Programming Services for College Students')
@section('description',
    'Get expert help with assignments and programming projects. Trusted by 50,000+ college students
    across the USA. 24/7 support, affordable prices, 100% original work.')
@section('keywords',
    'assignment help, programming help, college assignment help, homework help, coding help, python
    java c++ help, essay writing, college tutoring services USA')

@section('content')
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "TrendingTutor",
        "description": "Expert assignment help and programming services for college students across the USA. Get help with homework, projects, and coding assignments.",
        "url": "{{ url('/') }}",
        "areaServed": "United States",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-888-TUTORING",
            "contactType": "customer service",
            "availableLanguage": "English",
            "areaServed": "US"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "15000"
        }
    }
    </script>

    <!-- Hero Section - Professional Corporate Design -->
    <section class="relative bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 overflow-hidden" itemscope
        itemtype="https://schema.org/Service">
        <!-- Subtle Overlay Pattern -->
        <div class="absolute inset-0 bg-slate-900/50 bg-grid-pattern-corporate"></div>

        <!-- Decorative Floating Elements - Educational Illustrations -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-15">
            <!-- Top Left - Open Book Illustration -->
            <div class="absolute top-20 left-10 hidden lg:block animate-float-slow">
                <svg class="w-32 h-32" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M60 30 L60 90 M60 30 Q45 35 30 35 L30 90 Q45 85 60 90 M60 30 Q75 35 90 35 L90 90 Q75 85 60 90"
                        stroke="#3B82F6" stroke-width="2" fill="none" opacity="0.6" />
                    <rect x="28" y="33" width="6" height="58" fill="#2563EB" opacity="0.4" />
                    <rect x="86" y="33" width="6" height="58" fill="#2563EB" opacity="0.4" />
                    <line x1="35" y1="45" x2="55" y2="45" stroke="#60A5FA" stroke-width="1.5"
                        opacity="0.5" />
                    <line x1="35" y1="52" x2="52" y2="52" stroke="#60A5FA" stroke-width="1.5"
                        opacity="0.5" />
                    <line x1="65" y1="45" x2="85" y2="45" stroke="#60A5FA" stroke-width="1.5"
                        opacity="0.5" />
                    <line x1="65" y1="52" x2="82" y2="52" stroke="#60A5FA" stroke-width="1.5"
                        opacity="0.5" />
                </svg>
            </div>

            <!-- Top Right - Code Terminal Window -->
            <div class="absolute top-32 right-16 hidden lg:block animate-float-slower">
                <svg class="w-40 h-40" viewBox="0 0 140 140" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="30" width="100" height="80" rx="4" fill="#1E293B" opacity="0.7" />
                    <rect x="20" y="30" width="100" height="12" fill="#059669" opacity="0.8" />
                    <circle cx="28" cy="36" r="2" fill="#EF4444" />
                    <circle cx="36" cy="36" r="2" fill="#F59E0B" />
                    <circle cx="44" cy="36" r="2" fill="#10B981" />
                    <path d="M30 55 L40 60 L30 65" stroke="#10B981" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <line x1="50" y1="60" x2="80" y2="60" stroke="#10B981" stroke-width="2"
                        stroke-linecap="round" opacity="0.6" />
                    <line x1="30" y1="75" x2="90" y2="75" stroke="#3B82F6" stroke-width="1.5"
                        stroke-linecap="round" opacity="0.5" />
                    <line x1="30" y1="85" x2="70" y2="85" stroke="#8B5CF6" stroke-width="1.5"
                        stroke-linecap="round" opacity="0.5" />
                    <rect x="75" y="83" width="2" height="4" fill="#10B981">
                        <animate attributeName="opacity" values="1;0;1" dur="1s" repeatCount="indefinite" />
                    </rect>
                </svg>
            </div>

            <!-- Bottom Left - Notepad with Pencil -->
            <div class="absolute bottom-32 left-20 hidden lg:block animate-float-slow-delayed">
                <svg class="w-36 h-36" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="30" y="25" width="70" height="90" rx="3" fill="#F59E0B" opacity="0.7" />
                    <rect x="35" y="35" width="60" height="75" rx="2" fill="#FEF3C7" opacity="0.8" />
                    <line x1="42" y1="45" x2="88" y2="45" stroke="#D97706"
                        stroke-width="1" opacity="0.4" />
                    <line x1="42" y1="52" x2="88" y2="52" stroke="#D97706"
                        stroke-width="1" opacity="0.4" />
                    <line x1="42" y1="59" x2="75" y2="59" stroke="#D97706"
                        stroke-width="1" opacity="0.4" />
                    <line x1="42" y1="66" x2="88" y2="66" stroke="#D97706"
                        stroke-width="1" opacity="0.4" />
                    <line x1="42" y1="73" x2="80" y2="73" stroke="#D97706"
                        stroke-width="1" opacity="0.4" />
                    <rect x="70" y="70" width="40" height="6" rx="3" fill="#1E293B" opacity="0.8"
                        transform="rotate(-35 90 73)" />
                    <polygon points="103,88 107,92 103,96" fill="#F59E0B" />
                </svg>
            </div>

            <!-- Bottom Right - Graduation Cap with Diploma -->
            <div class="absolute bottom-24 right-24 hidden lg:block animate-float-slower-delayed">
                <svg class="w-36 h-36" viewBox="0 0 130 130" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M65 40 L30 55 L30 70 L65 85 L100 70 L100 55 Z" fill="#8B5CF6" opacity="0.7" />
                    <path d="M65 40 L100 55 L65 70 L30 55 Z" fill="#A78BFA" opacity="0.8" />
                    <rect x="63" y="30" width="4" height="15" fill="#581C87" opacity="0.8" />
                    <circle cx="65" cy="28" r="3" fill="#581C87" opacity="0.8" />
                    <path d="M40 75 L40 85 Q40 90 45 92 L65 100 L85 92 Q90 90 90 85 L90 75" stroke="#7C3AED"
                        stroke-width="2" fill="none" opacity="0.6" />
                </svg>
            </div>

            <!-- Middle Right - Calculator -->
            <div class="absolute top-1/2 right-8 hidden xl:block animate-float-slow">
                <svg class="w-28 h-28" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20" y="10" width="60" height="80" rx="4" fill="#475569" opacity="0.7" />
                    <rect x="25" y="18" width="50" height="15" rx="2" fill="#1E293B" opacity="0.8" />
                    <text x="45" y="28" font-size="10" fill="#10B981" text-anchor="middle">123</text>
                    <circle cx="32" cy="45" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="45" cy="45" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="58" cy="45" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="32" cy="57" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="45" cy="57" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="58" cy="57" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="32" cy="69" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="45" cy="69" r="4" fill="#334155" opacity="0.8" />
                    <circle cx="58" cy="69" r="4" fill="#334155" opacity="0.8" />
                    <rect x="68" y="53" width="8" height="20" rx="2" fill="#10B981" opacity="0.7" />
                </svg>
            </div>

            <!-- Middle Left - Light Bulb with Rays -->
            <div class="absolute top-1/2 left-8 hidden xl:block animate-float-slower">
                <svg class="w-28 h-28" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="45" r="15" fill="#FCD34D" opacity="0.7" />
                    <path d="M42 55 L42 65 Q42 67 44 67 L56 67 Q58 67 58 65 L58 55" fill="#F59E0B" opacity="0.6" />
                    <rect x="45" y="67" width="10" height="4" rx="1" fill="#78350F" opacity="0.7" />
                    <line x1="50" y1="20" x2="50" y2="28" stroke="#FCD34D"
                        stroke-width="2" stroke-linecap="round" opacity="0.6" />
                    <line x1="70" y1="25" x2="65" y2="30" stroke="#FCD34D"
                        stroke-width="2" stroke-linecap="round" opacity="0.6" />
                    <line x1="75" y1="45" x2="67" y2="45" stroke="#FCD34D"
                        stroke-width="2" stroke-linecap="round" opacity="0.6" />
                    <line x1="30" y1="25" x2="35" y2="30" stroke="#FCD34D"
                        stroke-width="2" stroke-linecap="round" opacity="0.6" />
                    <line x1="25" y1="45" x2="33" y2="45" stroke="#FCD34D"
                        stroke-width="2" stroke-linecap="round" opacity="0.6" />
                </svg>
            </div>
        </div>

        <!-- Main Content Container - Centered Single Column -->
        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
            <div class="max-w-5xl mx-auto text-center">

                <!-- Trust Badge Row - Professional -->
                <div class="flex items-center justify-center gap-4 flex-wrap mb-12">
                    <div
                        class="flex items-center gap-2 bg-slate-800/80 backdrop-blur-sm px-5 py-2.5 rounded-lg border border-slate-700 hover:border-slate-600 transition-all">
                        <span class="text-amber-400 text-xs">⭐⭐⭐⭐⭐</span>
                        <span class="text-slate-200 font-semibold text-sm">4.9/5 Rating</span>
                    </div>
                    <div
                        class="flex items-center gap-2 bg-slate-800/80 backdrop-blur-sm px-5 py-2.5 rounded-lg border border-slate-700 hover:border-slate-600 transition-all">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                        </svg>
                        <span class="text-slate-200 font-semibold text-sm">50,000+ Students Served</span>
                    </div>
                    <div
                        class="flex items-center gap-2 bg-slate-800/80 backdrop-blur-sm px-5 py-2.5 rounded-lg border border-slate-700 hover:border-slate-600 transition-all">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="text-slate-200 font-semibold text-sm">BBB Accredited</span>
                    </div>
                </div>

                <!-- Main Headline - Professional Typography -->
                <div class="space-y-8 mb-12">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight px-4"
                        itemprop="name">
                        Professional Academic
                        <span class="block mt-3 text-blue-400">
                            Assistance for Students
                        </span>
                    </h1>

                    <!-- Subheadline -->
                    <p class="text-lg sm:text-xl lg:text-2xl text-slate-300 leading-relaxed font-light max-w-3xl mx-auto px-4"
                        itemprop="description">
                        Trusted by students nationwide for expert assignment help, essay writing, and programming support
                        across all academic disciplines.
                    </p>
                </div>

                <!-- Subject Search Box - Wyzant Style -->
                <div class="max-w-3xl mx-auto mb-12 px-4">
                    <form action="{{ route('assignments.create') }}" method="GET" class="relative">
                        <div class="relative group">
                            <!-- Search Icon -->
                            <div class="absolute inset-y-0 left-0 pl-4 sm:pl-6 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 sm:h-6 sm:w-6 text-slate-400 group-focus-within:text-blue-500 transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            <!-- Search Input -->
                            <input type="text" name="subject" id="hero-subject-search"
                                class="block w-full pl-12 sm:pl-16 pr-4 sm:pr-32 py-4 sm:py-5 text-base sm:text-lg text-gray-900 bg-white border-2 border-slate-600 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all placeholder-slate-400 shadow-2xl"
                                placeholder="What do you need help with?" autocomplete="off" />

                            <!-- Search Button - Desktop -->
                            <div class="hidden sm:flex absolute inset-y-0 right-0 items-center pr-3">
                                <button type="submit"
                                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                    Search
                                </button>
                            </div>
                        </div>

                        <!-- Search Button - Mobile (Below Input) -->
                        <div class="sm:hidden mt-3">
                            <button type="submit"
                                class="w-full px-6 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-base rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                Search for Help
                            </button>
                        </div>

                        <!-- Popular Subjects - Quick Links -->
                        <div class="mt-6">
                            <div class="flex items-center justify-center gap-2 sm:gap-3 flex-wrap">
                                <span
                                    class="text-slate-300 text-xs sm:text-sm font-medium w-full sm:w-auto text-center sm:text-left mb-2 sm:mb-0">Popular:</span>
                                <a href="{{ route('services.programming.index') }}?subject=python"
                                    class="px-3 sm:px-4 py-1.5 sm:py-2 bg-slate-800/60 hover:bg-slate-700 border border-slate-600 hover:border-slate-500 text-white text-xs sm:text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105">
                                    Python
                                </a>
                                <a href="{{ route('services.programming.index') }}?subject=java"
                                    class="px-3 sm:px-4 py-1.5 sm:py-2 bg-slate-800/60 hover:bg-slate-700 border border-slate-600 hover:border-slate-500 text-white text-xs sm:text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105">
                                    Java
                                </a>
                                <a href="{{ route('services.assignment.index') }}?subject=calculus"
                                    class="px-3 sm:px-4 py-1.5 sm:py-2 bg-slate-800/60 hover:bg-slate-700 border border-slate-600 hover:border-slate-500 text-white text-xs sm:text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105">
                                    Calculus
                                </a>
                                <a href="{{ route('services.assignment.index') }}?subject=essay"
                                    class="px-3 sm:px-4 py-1.5 sm:py-2 bg-slate-800/60 hover:bg-slate-700 border border-slate-600 hover:border-slate-500 text-white text-xs sm:text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105">
                                    Essay Writing
                                </a>
                                <a href="{{ route('services.programming.index') }}?subject=cpp"
                                    class="px-3 sm:px-4 py-1.5 sm:py-2 bg-slate-800/60 hover:bg-slate-700 border border-slate-600 hover:border-slate-500 text-white text-xs sm:text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105">
                                    C++
                                </a>
                                <a href="{{ route('services.assignment.index') }}?subject=statistics"
                                    class="px-3 sm:px-4 py-1.5 sm:py-2 bg-slate-800/60 hover:bg-slate-700 border border-slate-600 hover:border-slate-500 text-white text-xs sm:text-sm font-medium rounded-lg transition-all duration-300 hover:scale-105">
                                    Statistics
                                </a>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Secondary CTA - Corporate Style -->
                {{-- <div class="flex items-center justify-center gap-4 mb-12 px-4">
                    <a href="#how-it-works"
                        class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-slate-800/60 hover:bg-slate-700 text-white font-medium text-base rounded-lg border border-slate-600 hover:border-slate-500 transition-all duration-300">
                        How It Works
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                </div> --}}

                <!-- Trust Statistics - Corporate Grid -->
                {{-- <div class="grid grid-cols-2 md:grid-cols-4 gap-6 lg:gap-8 py-10 mb-8 border-y border-slate-700/50 px-4">
                    <div class="text-center">
                        <div class="text-white font-bold text-3xl lg:text-4xl mb-2">15M+</div>
                        <div class="text-slate-400 text-xs lg:text-sm font-medium">Projects Completed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-white font-bold text-3xl lg:text-4xl mb-2">2,500+</div>
                        <div class="text-slate-400 text-xs lg:text-sm font-medium">Expert Tutors</div>
                    </div>
                    <div class="text-center">
                        <div class="text-white font-bold text-3xl lg:text-4xl mb-2">98%</div>
                        <div class="text-slate-400 text-xs lg:text-sm font-medium">Success Rate</div>
                    </div>
                    <div class="text-center">
                        <div class="text-white font-bold text-3xl lg:text-4xl mb-2">24/7</div>
                        <div class="text-slate-400 text-xs lg:text-sm font-medium">Support Available</div>
                    </div>
                </div> --}}

                <!-- Professional Guarantee Badge -->
                <div
                    class="inline-flex items-center gap-3 bg-emerald-500/10 backdrop-blur-sm px-6 py-3 rounded-lg border border-emerald-500/30 hover:border-emerald-500/50 transition-all">
                    <svg class="w-5 h-5 text-emerald-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-slate-200 font-medium text-sm">Money-Back Guarantee • Free Revisions •
                        Plagiarism-Free</span>
                </div>

            </div>
        </div>

        <!-- Bottom Separator -->
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-slate-700 to-transparent">
        </div>
    </section>

    <!-- Our Services - Visual Elements Section -->
    <section class="relative py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">What We Offer</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive academic support across all subjects and disciplines
                </p>
            </div>

            <!-- Visual Elements - Books, Code & Study Materials with Custom Illustrations -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 max-w-6xl mx-auto">
                <!-- Books/Reading Illustration -->
                <div
                    class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-10 border-2 border-blue-100 hover:border-blue-300 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <!-- Book Stack Illustration -->
                        <svg class="w-28 h-28 mx-auto group-hover:scale-110 transition-transform duration-300"
                            viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Book 1 (Bottom) -->
                            <rect x="40" y="130" width="120" height="20" rx="2" fill="#3B82F6"
                                opacity="0.9" />
                            <rect x="40" y="130" width="120" height="4" rx="1" fill="#2563EB" />
                            <path d="M40 132 L160 132 L160 130 L40 130 Z" fill="#60A5FA" opacity="0.6" />

                            <!-- Book 2 (Middle) -->
                            <rect x="45" y="105" width="110" height="25" rx="2" fill="#10B981"
                                opacity="0.9" />
                            <rect x="45" y="105" width="110" height="5" rx="1" fill="#059669" />
                            <path d="M45 108 L155 108 L155 105 L45 105 Z" fill="#34D399" opacity="0.6" />
                            <rect x="75" y="112" width="50" height="12" rx="1" fill="#064E3B"
                                opacity="0.4" />

                            <!-- Book 3 (Top) -->
                            <rect x="50" y="80" width="100" height="25" rx="2" fill="#8B5CF6"
                                opacity="0.9" />
                            <rect x="50" y="80" width="100" height="5" rx="1" fill="#7C3AED" />
                            <path d="M50 83 L150 83 L150 80 L50 80 Z" fill="#A78BFA" opacity="0.6" />
                            <line x1="70" y1="88" x2="130" y2="88" stroke="#F3F4F6"
                                stroke-width="2" opacity="0.5" />
                            <line x1="70" y1="93" x2="120" y2="93" stroke="#F3F4F6"
                                stroke-width="2" opacity="0.5" />

                            <!-- Bookmark -->
                            <path d="M120 80 L120 55 L128 62 L136 55 L136 80" fill="#F59E0B" opacity="0.95" />

                            <!-- Reading Icon -->
                            <circle cx="100" cy="50" r="18" fill="#1E293B" opacity="0.15" />
                            <path d="M95 45 L95 55 M105 45 L105 55" stroke="#3B82F6" stroke-width="2.5"
                                stroke-linecap="round" />
                            <path d="M88 50 Q100 42 112 50" stroke="#3B82F6" stroke-width="2.5" fill="none" />
                        </svg>
                        <div class="mt-8 text-center">
                            <h3 class="text-gray-900 font-bold text-xl mb-3">Essay & Research</h3>
                            <p class="text-gray-600 text-base leading-relaxed mb-4">Professional writing help across 50+
                                academic subjects</p>
                            <div class="flex flex-wrap gap-2 justify-center">
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Essays</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Research
                                    Papers</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Thesis</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Code/Programming Illustration -->
                <div
                    class="group relative bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-10 border-2 border-emerald-100 hover:border-emerald-300 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <!-- Code Editor Illustration -->
                        <svg class="w-28 h-28 mx-auto group-hover:scale-110 transition-transform duration-300"
                            viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Monitor/Screen -->
                            <rect x="30" y="50" width="140" height="100" rx="4" fill="#1E293B"
                                stroke="#10B981" stroke-width="2" />

                            <!-- Screen Header Bar -->
                            <rect x="30" y="50" width="140" height="15" rx="4" fill="#059669" />
                            <circle cx="42" cy="57.5" r="3" fill="#EF4444" />
                            <circle cx="52" cy="57.5" r="3" fill="#F59E0B" />
                            <circle cx="62" cy="57.5" r="3" fill="#10B981" />

                            <!-- Code Lines -->
                            <line x1="40" y1="75" x2="70" y2="75" stroke="#8B5CF6"
                                stroke-width="2" stroke-linecap="round" />
                            <line x1="75" y1="75" x2="120" y2="75" stroke="#60A5FA"
                                stroke-width="2" stroke-linecap="round" />

                            <line x1="50" y1="85" x2="90" y2="85" stroke="#10B981"
                                stroke-width="2" stroke-linecap="round" />
                            <line x1="95" y1="85" x2="140" y2="85" stroke="#F59E0B"
                                stroke-width="2" stroke-linecap="round" />

                            <line x1="50" y1="95" x2="110" y2="95" stroke="#EC4899"
                                stroke-width="2" stroke-linecap="round" />

                            <line x1="40" y1="105" x2="80" y2="105" stroke="#8B5CF6"
                                stroke-width="2" stroke-linecap="round" />

                            <line x1="50" y1="115" x2="95" y2="115" stroke="#10B981"
                                stroke-width="2" stroke-linecap="round" />
                            <line x1="100" y1="115" x2="130" y2="115" stroke="#60A5FA"
                                stroke-width="2" stroke-linecap="round" />

                            <!-- Code Brackets -->
                            <path d="M45 70 L40 75 L45 80" stroke="#34D399" stroke-width="2" fill="none"
                                stroke-linecap="round" />
                            <path d="M155 95 L160 100 L155 105" stroke="#34D399" stroke-width="2" fill="none"
                                stroke-linecap="round" />

                            <!-- Cursor Blink -->
                            <rect x="135" y="113" width="2" height="6" fill="#10B981">
                                <animate attributeName="opacity" values="1;0;1" dur="1.5s"
                                    repeatCount="indefinite" />
                            </rect>

                            <!-- Monitor Stand -->
                            <rect x="85" y="150" width="30" height="8" rx="2" fill="#475569" />
                            <rect x="70" y="158" width="60" height="4" rx="2" fill="#334155" />
                        </svg>
                        <div class="mt-8 text-center">
                            <h3 class="text-gray-900 font-bold text-xl mb-3">Programming Help</h3>
                            <p class="text-gray-600 text-base leading-relaxed mb-4">Expert coding assistance in 25+
                                programming languages</p>
                            <div class="flex flex-wrap gap-2 justify-center">
                                <span
                                    class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">Python</span>
                                <span
                                    class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">Java</span>
                                <span
                                    class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">C++</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Study Materials/Learning Illustration -->
                <div
                    class="group relative bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-10 border-2 border-amber-100 hover:border-amber-300 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-amber-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <!-- Notebook & Pen Illustration -->
                        <svg class="w-28 h-28 mx-auto group-hover:scale-110 transition-transform duration-300"
                            viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Notebook -->
                            <rect x="50" y="60" width="100" height="120" rx="3" fill="#F59E0B"
                                opacity="0.95" />
                            <rect x="50" y="60" width="100" height="15" rx="3" fill="#D97706" />

                            <!-- Spiral Binding -->
                            <circle cx="60" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="75" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="90" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="105" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="120" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="135" cy="67.5" r="2.5" fill="#78350F" />

                            <!-- Notebook Pages -->
                            <rect x="55" y="80" width="90" height="95" rx="2" fill="#FEF3C7" />

                            <!-- Lines on Page -->
                            <line x1="65" y1="95" x2="135" y2="95" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />
                            <line x1="65" y1="105" x2="135" y2="105" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />
                            <line x1="65" y1="115" x2="135" y2="115" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />
                            <line x1="65" y1="125" x2="120" y2="125" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />
                            <line x1="65" y1="135" x2="130" y2="135" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />
                            <line x1="65" y1="145" x2="125" y2="145" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />
                            <line x1="65" y1="155" x2="135" y2="155" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />
                            <line x1="65" y1="165" x2="110" y2="165" stroke="#D97706"
                                stroke-width="1" opacity="0.4" />

                            <!-- Handwriting simulation -->
                            <path d="M70 95 Q75 93 80 95 Q85 97 90 95" stroke="#1E40AF" stroke-width="1.5" fill="none"
                                stroke-linecap="round" />
                            <path d="M70 105 Q80 103 90 105 Q100 107 110 105" stroke="#1E40AF" stroke-width="1.5"
                                fill="none" stroke-linecap="round" />

                            <!-- Pen -->
                            <rect x="120" y="130" width="50" height="8" rx="4" fill="#1E293B"
                                transform="rotate(-45 145 134)" />
                            <rect x="155" y="145" width="15" height="6" rx="3" fill="#3B82F6"
                                transform="rotate(-45 162.5 148)" />
                            <polygon points="168,152 171,155 168,158" fill="#1E293B" opacity="0.8" />

                            <!-- Graduation Cap Icon -->
                            <circle cx="100" cy="50" r="15" fill="#1E293B" opacity="0.15" />
                            <path d="M100 40 L90 45 L90 50 L100 55 L110 50 L110 45 Z" fill="#FCD34D" />
                            <rect x="98" y="38" width="4" height="8" fill="#78350F" />
                            <circle cx="100" cy="36" r="2" fill="#78350F" />
                        </svg>
                        <div class="mt-8 text-center">
                            <h3 class="text-gray-900 font-bold text-xl mb-3">Study Materials</h3>
                            <p class="text-gray-600 text-base leading-relaxed mb-4">Comprehensive study resources for all
                                academic disciplines</p>
                            <div class="flex flex-wrap gap-2 justify-center">
                                <span
                                    class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Notes</span>
                                <span
                                    class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Guides</span>
                                <span
                                    class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Homework</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="text-center mt-16">
                <a href="{{ route('assignments.create') }}"
                    class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold text-lg rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                    Get Started Today
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us - Key Value Points Section -->
    <section class="relative py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose TrendingTutor</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    We're committed to providing the highest quality academic assistance with guaranteed results
                </p>
            </div>

            <!-- Key Value Points Grid -->
            <div class="grid md:grid-cols-3 gap-8 lg:gap-10 max-w-6xl mx-auto">
                <!-- Verified Experts -->
                <div
                    class="group relative bg-white rounded-2xl p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-blue-300 transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-50 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-gray-900 font-bold text-2xl mb-4 text-center">Verified Experts</h3>
                        <p class="text-gray-600 text-base leading-relaxed text-center">PhD-level tutors from accredited
                            universities with proven expertise in their fields. All our experts are thoroughly vetted and
                            verified.</p>
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-center gap-2 text-blue-600 font-semibold text-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>2,500+ Expert Tutors</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- On-Time Delivery -->
                <div
                    class="group relative bg-white rounded-2xl p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-emerald-300 transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-50 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-gray-900 font-bold text-2xl mb-4 text-center">On-Time Delivery</h3>
                        <p class="text-gray-600 text-base leading-relaxed text-center">We understand deadlines matter. Our
                            98% on-time completion rate ensures your assignments are delivered when you need them.</p>
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-center gap-2 text-emerald-600 font-semibold text-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>98% On-Time Rate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 100% Confidential -->
                <div
                    class="group relative bg-white rounded-2xl p-10 shadow-lg hover:shadow-2xl border-2 border-gray-100 hover:border-amber-300 transition-all duration-300">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-amber-50 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                        <h3 class="text-gray-900 font-bold text-2xl mb-4 text-center">100% Confidential</h3>
                        <p class="text-gray-600 text-base leading-relaxed text-center">Your privacy is our priority. We use
                            secure platforms, encrypted communications, and never share your information with third parties.
                        </p>
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <div class="flex items-center justify-center gap-2 text-amber-600 font-semibold text-sm">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>Secure & Private</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Trust Elements -->
            <div class="mt-16 max-w-4xl mx-auto">
                <div
                    class="bg-gradient-to-r from-blue-50 via-indigo-50 to-purple-50 rounded-2xl p-8 border border-indigo-100">
                    <div class="grid md:grid-cols-3 gap-6 text-center">
                        <div>
                            <div class="text-3xl font-bold text-gray-900 mb-2">15M+</div>
                            <div class="text-gray-600 text-sm">Projects Completed Successfully</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-gray-900 mb-2">4.9/5</div>
                            <div class="text-gray-600 text-sm">Average Customer Rating</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-gray-900 mb-2">24/7</div>
                            <div class="text-gray-600 text-sm">Customer Support Available</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Panel Component (Wyzant-Inspired) -->
    <section class="relative pb-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <!-- Main Search Card -->
                <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                    <!-- Search Header -->
                    <div class="bg-gradient-to-r from-gray-50 to-white px-6 sm:px-8 py-6 border-b border-gray-100">
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-2">Find Expert Help Now</h2>
                        <p class="text-gray-600">Search by subject, topic, or assignment type to get matched with the
                            perfect tutor</p>
                    </div>

                    <!-- Search Form -->
                    <div class="p-6 sm:p-8">
                        <form action="{{ route('assignments.create') }}" method="GET" class="space-y-6">
                            <!-- Main Search Input -->
                            <div>
                                <label for="subject-search" class="block text-sm font-semibold text-gray-700 mb-2">
                                    What do you need help with?
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="subject-search" name="subject"
                                        class="block w-full pl-12 pr-4 py-4 text-lg border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all"
                                        placeholder="e.g., Python Programming, Essay Writing, Calculus, Java..."
                                        autocomplete="off" />
                                </div>
                            </div>

                            <!-- Filter Options Grid -->
                            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                                <!-- Assignment Type -->
                                <div>
                                    <label for="assignment-type" class="block text-sm font-medium text-gray-700 mb-2">
                                        Assignment Type
                                    </label>
                                    <select id="assignment-type" name="type"
                                        class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white text-gray-900">
                                        <option value="">All Types</option>
                                        <option value="homework">Homework Help</option>
                                        <option value="essay">Essay Writing</option>
                                        <option value="programming">Programming</option>
                                        <option value="research">Research Paper</option>
                                        <option value="lab">Lab Report</option>
                                        <option value="math">Math Problems</option>
                                    </select>
                                </div>

                                <!-- Academic Level -->
                                <div>
                                    <label for="academic-level" class="block text-sm font-medium text-gray-700 mb-2">
                                        Academic Level
                                    </label>
                                    <select id="academic-level" name="level"
                                        class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white text-gray-900">
                                        <option value="">All Levels</option>
                                        <option value="high-school">High School</option>
                                        <option value="undergraduate">Undergraduate</option>
                                        <option value="graduate">Graduate</option>
                                        <option value="phd">Ph.D.</option>
                                    </select>
                                </div>

                                <!-- Deadline -->
                                <div>
                                    <label for="deadline" class="block text-sm font-medium text-gray-700 mb-2">
                                        Deadline
                                    </label>
                                    <select id="deadline" name="deadline"
                                        class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white text-gray-900">
                                        <option value="">Any Time</option>
                                        <option value="24h">Within 24 hours</option>
                                        <option value="48h">Within 48 hours</option>
                                        <option value="week">Within 1 week</option>
                                        <option value="flexible">Flexible</option>
                                    </select>
                                </div>

                                <!-- Price Range -->
                                <div>
                                    <label for="price-range" class="block text-sm font-medium text-gray-700 mb-2">
                                        Budget
                                    </label>
                                    <select id="price-range" name="budget"
                                        class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent bg-white text-gray-900">
                                        <option value="">Any Budget</option>
                                        <option value="0-50">Under $50</option>
                                        <option value="50-100">$50 - $100</option>
                                        <option value="100-200">$100 - $200</option>
                                        <option value="200+">$200+</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Search Button -->
                            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                                <button type="submit"
                                    class="flex-1 sm:flex-none sm:px-12 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-bold text-lg rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    Find My Tutor
                                </button>
                                <button type="button" onclick="window.location.href='{{ route('assignments.create') }}'"
                                    class="flex-1 sm:flex-none sm:px-8 py-4 bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-bold text-lg rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    Submit Assignment
                                </button>
                            </div>
                        </form>

                        <!-- Popular Subjects Quick Links -->
                        <div class="mt-8 pt-6 border-t border-gray-100">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-sm font-semibold text-gray-700">Popular Subjects:</h3>
                                <a href="{{ route('services.programming.index') }}"
                                    class="text-sm text-blue-600 hover:text-blue-700 font-medium">
                                    View All →
                                </a>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <a href="{{ route('services.programming.index') }}?subject=python"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    Python
                                </a>
                                <a href="{{ route('services.programming.index') }}?subject=java"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    Java
                                </a>
                                <a href="{{ route('services.programming.index') }}?subject=cpp"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    C++
                                </a>
                                <a href="{{ route('services.assignment.index') }}?subject=calculus"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    Calculus
                                </a>
                                <a href="{{ route('services.assignment.index') }}?subject=chemistry"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    Chemistry
                                </a>
                                <a href="{{ route('services.assignment.index') }}?subject=physics"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    Physics
                                </a>
                                <a href="{{ route('services.assignment.index') }}?subject=essay"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    Essay Writing
                                </a>
                                <a href="{{ route('services.programming.index') }}?subject=javascript"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    JavaScript
                                </a>
                                <a href="{{ route('services.programming.index') }}?subject=data-science"
                                    class="group px-4 py-2 bg-gray-50 hover:bg-blue-50 border border-gray-200 hover:border-blue-300 rounded-lg text-sm font-medium text-gray-700 hover:text-blue-700 transition-all">
                                    Data Science
                                </a>
                            </div>
                        </div>

                        <!-- Trust Message -->
                        <div class="mt-6 flex items-center justify-center gap-2 text-sm text-gray-500">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>100% Secure & Confidential • Free Quote • No Obligation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Professional Corporate CSS Styles -->
    <style>
        /* Corporate Grid Pattern - Subtle and Professional */
        .bg-grid-pattern-corporate {
            background-image:
                linear-gradient(rgba(100, 116, 139, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(100, 116, 139, 0.05) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* Search Input Focus Glow */
        #hero-subject-search:focus {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1), 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        /* Floating Animations - Subtle Movement */
        @keyframes float-slow {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(10px, -15px) rotate(2deg);
            }

            66% {
                transform: translate(-8px, -25px) rotate(-2deg);
            }
        }

        @keyframes float-slower {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(-12px, -20px) rotate(-3deg);
            }

            66% {
                transform: translate(8px, -10px) rotate(3deg);
            }
        }

        @keyframes float-slow-delayed {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(15px, -10px) rotate(3deg);
            }

            66% {
                transform: translate(-10px, -20px) rotate(-3deg);
            }
        }

        @keyframes float-slower-delayed {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(-15px, -12px) rotate(-2deg);
            }

            66% {
                transform: translate(12px, -22px) rotate(2deg);
            }
        }

        .animate-float-slow {
            animation: float-slow 25s ease-in-out infinite;
        }

        .animate-float-slower {
            animation: float-slower 30s ease-in-out infinite;
        }

        .animate-float-slow-delayed {
            animation: float-slow-delayed 28s ease-in-out infinite 2s;
        }

        .animate-float-slower-delayed {
            animation: float-slower-delayed 32s ease-in-out infinite 4s;
        }

        /* Smooth Transitions */
        * {
            transition-property: background-color, border-color, color, fill, stroke;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Responsive Typography - Professional Scale */
        @media (max-width: 640px) {
            h1 {
                font-size: 2.5rem;
                line-height: 1.1;
            }
        }

        @media (min-width: 640px) and (max-width: 1024px) {
            h1 {
                font-size: 3.5rem;
                line-height: 1.1;
            }
        }

        /* Subtle Hover Effects */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
        }
    </style>

    <!-- Services Categories Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our Services for College Students</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Whether you need help with assignments or programming projects, our expert tutors are here to help you
                    succeed.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                <!-- Assignment Services Card -->
                <div
                    class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-blue-100 hover:border-blue-300">
                    <div class="absolute top-6 right-6 bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                        Most Popular
                    </div>

                    <div
                        class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg group-hover:scale-110 transition-transform">
                        📚
                    </div>

                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Assignment Help Services</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Get expert assistance with essays, research papers, homework, and all types of academic assignments
                        across all subjects.
                    </p>

                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">Essay & Research Paper Writing</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">Homework & Problem Sets</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">Lab Reports & Case Studies</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">All Academic Subjects</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-6 border-t border-blue-200">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Starting from</p>
                            <p class="text-3xl font-bold text-gray-900">$15<span
                                    class="text-lg text-gray-500">/page</span></p>
                        </div>
                        <a href="{{ route('services.assignment.index') }}"
                            class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:from-blue-600 hover:to-indigo-600 text-white font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            Explore Services →
                        </a>
                    </div>
                </div>

                <!-- Programming Services Card -->
                <div
                    class="group relative bg-gradient-to-br from-purple-50 to-pink-50 rounded-3xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-purple-100 hover:border-purple-300">
                    <div class="absolute top-6 right-6 bg-purple-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                        High Demand
                    </div>

                    <div
                        class="bg-gradient-to-r from-purple-500 to-pink-500 text-white w-16 h-16 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg group-hover:scale-110 transition-transform">
                        💻
                    </div>

                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Programming Help Services</h3>
                    <p class="text-gray-600 text-lg mb-6 leading-relaxed">
                        Expert help with coding assignments, debugging, and projects in Python, Java, C++, JavaScript, and
                        25+ programming languages.
                    </p>

                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">Python, Java, C++, JavaScript</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">Web & Mobile App Development</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">Data Science & Machine Learning</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700 font-medium">Algorithms & Data Structures</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-6 border-t border-purple-200">
                        <div>
                            <p class="text-sm text-gray-500 mb-1">Starting from</p>
                            <p class="text-3xl font-bold text-gray-900">$25<span
                                    class="text-lg text-gray-500">/task</span></p>
                        </div>
                        <a href="{{ route('services.programming.index') }}"
                            class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white font-bold px-8 py-4 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            Explore Services →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">How TrendingTutor Works</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Get help with your assignments in 4 simple steps. It's fast, easy, and secure.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Step 1 -->
                <div
                    class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="absolute -top-4 -left-4 bg-gradient-to-r from-blue-500 to-indigo-500 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl font-bold shadow-lg">
                        1
                    </div>
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform">📝</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Submit Your Assignment</h3>
                    <p class="text-gray-600">Share your assignment details, requirements, and deadline. Upload any files
                        if needed.</p>
                </div>

                <!-- Step 2 -->
                <div
                    class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="absolute -top-4 -left-4 bg-gradient-to-r from-purple-500 to-pink-500 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl font-bold shadow-lg">
                        2
                    </div>
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform">🎯</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Get Matched with Expert</h3>
                    <p class="text-gray-600">We connect you with a qualified tutor who specializes in your subject or
                        programming language.</p>
                </div>

                <!-- Step 3 -->
                <div
                    class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="absolute -top-4 -left-4 bg-gradient-to-r from-green-500 to-teal-500 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl font-bold shadow-lg">
                        3
                    </div>
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform">✍️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Expert Works on It</h3>
                    <p class="text-gray-600">Your tutor completes the work with high quality, following all instructions
                        and guidelines.</p>
                </div>

                <!-- Step 4 -->
                <div
                    class="relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 group">
                    <div
                        class="absolute -top-4 -left-4 bg-gradient-to-r from-orange-500 to-red-500 text-white w-12 h-12 rounded-xl flex items-center justify-center text-xl font-bold shadow-lg">
                        4
                    </div>
                    <div class="text-5xl mb-6 group-hover:scale-110 transition-transform">🎓</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Review & Learn</h3>
                    <p class="text-gray-600">Get your completed work with explanations. Free revisions included to ensure
                        satisfaction.</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('assignments.create') }}"
                    class="inline-block bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-bold px-10 py-5 rounded-xl text-lg shadow-2xl hover:shadow-3xl transition-all duration-300 hover:scale-105">
                    Start Now - Get Free Quote
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why College Students Trust TrendingTutor
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Join thousands of students who have improved their grades with our expert help
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Feature 1 -->
                <div
                    class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🎓</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Expert Tutors</h3>
                    <p class="text-gray-600 leading-relaxed">Verified tutors from top universities with proven track
                        records in helping students succeed.</p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">⚡</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Fast Turnaround</h3>
                    <p class="text-gray-600 leading-relaxed">Get help even with tight deadlines. We offer express delivery
                        options for urgent assignments.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🛡️</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">100% Original</h3>
                    <p class="text-gray-600 leading-relaxed">All work is custom-written from scratch. Plagiarism-free
                        guaranteed with detailed reports.</p>
                </div>

                <!-- Feature 4 -->
                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">💰</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Student-Friendly Pricing</h3>
                    <p class="text-gray-600 leading-relaxed">Affordable rates designed for college budgets. Special
                        discounts for returning students.</p>
                </div>

                <!-- Feature 5 -->
                <div
                    class="bg-gradient-to-br from-yellow-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🔄</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Free Revisions</h3>
                    <p class="text-gray-600 leading-relaxed">Unlimited revisions until you're completely satisfied with
                        the work. Your success is our priority.</p>
                </div>

                <!-- Feature 6 -->
                <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🔒</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">100% Confidential</h3>
                    <p class="text-gray-600 leading-relaxed">Your privacy is protected. Secure payment processing and
                        encrypted communications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">What Students Are Saying</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Real reviews from real college students across the USA
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "I was struggling with my Python assignment and had only 2 days left. TrendingTutor connected me
                        with an amazing expert who not only completed it but also explained everything. Got an A+!"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            MJ
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-gray-900">Michael Johnson</p>
                            <p class="text-sm text-gray-500">Computer Science • UCLA</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Best decision ever! My essay writing tutor helped me improve my paper so much. The feedback was
                        detailed and I learned a lot. Will definitely use again for my next assignment."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            SC
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-gray-900">Sarah Chen</p>
                            <p class="text-sm text-gray-500">English Major • NYU</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "Had a Java project due and was totally stuck. The programmer they assigned understood exactly what
                        I needed and delivered perfect code with comments. Worth every penny!"
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            DP
                        </div>
                        <div class="ml-4">
                            <p class="font-bold text-gray-900">David Park</p>
                            <p class="text-sm text-gray-500">Software Engineering • MIT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Boost Your Grades?</h2>
            <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                Join 50,000+ college students who trust TrendingTutor for their assignments and programming projects.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('assignments.create') }}"
                    class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-bold px-10 py-5 rounded-xl text-lg shadow-2xl hover:shadow-3xl transition-all duration-300 hover:scale-105 inline-block">
                    Get Started - Free Quote
                </a>
                <a href="{{ route('how-it-works') }}"
                    class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white font-bold px-10 py-5 rounded-xl text-lg border-2 border-white/30 transition-all duration-300 inline-block">
                    Learn More
                </a>
            </div>
            <p class="mt-6 text-white/80">
                ✓ 24/7 Support ✓ Money-Back Guarantee ✓ 100% Confidential
            </p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Everything you need to know about TrendingTutor</p>
            </div>

            <div class="space-y-6">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Is TrendingTutor legit and safe to use?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Yes! TrendingTutor is a trusted platform used by over 50,000 college students across the USA. We use
                        secure payment processing, encrypted communications, and guarantee 100% confidentiality.
                    </p>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">How much does it cost?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Prices start from $15 per page for assignment help and $25 per task for programming help. The final
                        cost depends on complexity, deadline, and length. We offer student-friendly pricing and discounts
                        for returning customers.
                    </p>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">How fast can you complete my assignment?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We offer flexible deadlines from 24 hours to several weeks. For urgent assignments, we have express
                        delivery options available. Most assignments are completed within 3-5 days.
                    </p>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">What if I'm not satisfied with the work?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We offer unlimited free revisions until you're completely satisfied. If we can't meet your
                        requirements, we provide a full refund under our money-back guarantee policy.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
