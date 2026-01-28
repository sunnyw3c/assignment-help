@extends('layouts.app')

@section('title', 'Assignment Help USA - Professional Assignment Help Online for USA Students')
@section('description',
    'Professional assignment help online for USA students. Expert assignment helpers provide quality
    assignment help service for college, high school & graduate students. 24/7 assignment help with 100% original work and
    money-back guarantee.')
@section('keywords',
    'assignment help, assignment help online, assignment helper, assignment help service, assignment
    help USA, online assignment help, college assignment help, homework help, essay writing help, assignment assistance USA,
    academic help USA')

@section('content')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Assignment Help USA",
        "description": "Professional assignment help online for USA students. Get expert assignment help service from qualified assignment helpers for college, high school, and graduate level assignments. 24/7 assignment assistance with essays, research papers, programming, and 50+ subjects.",
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

    <section class="relative bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 overflow-hidden" itemscope
        itemtype="https://schema.org/Service">
        <div class="absolute inset-0 bg-slate-900/50 bg-grid-pattern-corporate"></div>

        <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-15">
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

        <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-28">
            <div class="max-w-5xl mx-auto text-center">

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

                <div class="space-y-6 mb-12">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight tracking-tight px-4"
                        itemprop="name">
                        Professional Help for
                        <span class="block mt-3 text-blue-400 text-3xl sm:text-4xl lg:text-5xl xl:text-6xl">
                            Assignments, Programming & Tutoring
                        </span>
                    </h1>

                    <p class="text-lg sm:text-xl lg:text-2xl text-slate-300 leading-relaxed font-light max-w-3xl mx-auto px-4"
                        itemprop="description">
                        Get personalized support from verified tutors in Python, Java, C++, essay writing, math, science,
                        and 50+ subjects for high school, college, and graduate students. Available 24/7.
                    </p>
                </div>

                <div class="max-w-3xl mx-auto mb-12 px-4">
                    <form action="{{ route('assignments.create') }}" method="GET" class="relative">
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-4 sm:pl-6 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 sm:h-6 sm:w-6 text-slate-400 group-focus-within:text-blue-500 transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            <input type="text" name="subject" id="hero-subject-search"
                                class="block w-full pl-12 sm:pl-16 pr-4 sm:pr-32 py-4 sm:py-5 text-base sm:text-lg text-gray-900 bg-white border-2 border-slate-600 rounded-xl focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500 transition-all placeholder-slate-400 shadow-2xl"
                                placeholder="What do you need help with?" autocomplete="off" />

                            <div class="hidden sm:flex absolute inset-y-0 right-0 items-center pr-3">
                                <button type="submit"
                                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                                    Search
                                </button>
                            </div>
                        </div>

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

        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-slate-700 to-transparent">
        </div>
    </section>

    <section class="relative py-20 lg:py-28 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                    <span class="text-blue-900 font-semibold text-sm">Comprehensive Academic Solutions</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Comprehensive Services for Your Academic
                    Success</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Professional support across every academic discipline with verified experts ready to help you excel
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 max-w-6xl mx-auto">
                <div
                    class="group relative bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-10 border-2 border-blue-100 hover:border-blue-300 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <svg class="w-28 h-28 mx-auto group-hover:scale-110 transition-transform duration-300"
                            viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="40" y="130" width="120" height="20" rx="2" fill="#3B82F6"
                                opacity="0.9" />
                            <rect x="40" y="130" width="120" height="4" rx="1" fill="#2563EB" />
                            <path d="M40 132 L160 132 L160 130 L40 130 Z" fill="#60A5FA" opacity="0.6" />

                            <rect x="45" y="105" width="110" height="25" rx="2" fill="#10B981"
                                opacity="0.9" />
                            <rect x="45" y="105" width="110" height="5" rx="1" fill="#059669" />
                            <path d="M45 108 L155 108 L155 105 L45 105 Z" fill="#34D399" opacity="0.6" />
                            <rect x="75" y="112" width="50" height="12" rx="1" fill="#064E3B"
                                opacity="0.4" />

                            <rect x="50" y="80" width="100" height="25" rx="2" fill="#8B5CF6"
                                opacity="0.9" />
                            <rect x="50" y="80" width="100" height="5" rx="1" fill="#7C3AED" />
                            <path d="M50 83 L150 83 L150 80 L50 80 Z" fill="#A78BFA" opacity="0.6" />
                            <line x1="70" y1="88" x2="130" y2="88" stroke="#F3F4F6"
                                stroke-width="2" opacity="0.5" />
                            <line x1="70" y1="93" x2="120" y2="93" stroke="#F3F4F6"
                                stroke-width="2" opacity="0.5" />

                            <path d="M120 80 L120 55 L128 62 L136 55 L136 80" fill="#F59E0B" opacity="0.95" />

                            <circle cx="100" cy="50" r="18" fill="#1E293B" opacity="0.15" />
                            <path d="M95 45 L95 55 M105 45 L105 55" stroke="#3B82F6" stroke-width="2.5"
                                stroke-linecap="round" />
                            <path d="M88 50 Q100 42 112 50" stroke="#3B82F6" stroke-width="2.5" fill="none" />
                        </svg>
                        <div class="mt-8 text-center">
                            <div class="flex items-center justify-center gap-2 mb-3">
                                <h3 class="text-gray-900 font-bold text-xl">Assignment Help</h3>
                                <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-600 text-base leading-relaxed mb-5">Professional writing assistance across
                                50+ subjects with 100% plagiarism-free guarantee and on-time delivery</p>
                            <div class="flex flex-wrap gap-2 justify-center mb-4">
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Essays</span>
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Research
                                    Papers</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Thesis</span>
                                <span
                                    class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Dissertations</span>
                            </div>
                            <a href="{{ route('services.assignment.index') }}"
                                class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-sm group">
                                Learn More
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-10 border-2 border-emerald-100 hover:border-emerald-300 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <svg class="w-28 h-28 mx-auto group-hover:scale-110 transition-transform duration-300"
                            viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="30" y="50" width="140" height="100" rx="4" fill="#1E293B"
                                stroke="#10B981" stroke-width="2" />

                            <rect x="30" y="50" width="140" height="15" rx="4" fill="#059669" />
                            <circle cx="42" cy="57.5" r="3" fill="#EF4444" />
                            <circle cx="52" cy="57.5" r="3" fill="#F59E0B" />
                            <circle cx="62" cy="57.5" r="3" fill="#10B981" />

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

                            <path d="M45 70 L40 75 L45 80" stroke="#34D399" stroke-width="2" fill="none"
                                stroke-linecap="round" />
                            <path d="M155 95 L160 100 L155 105" stroke="#34D399" stroke-width="2" fill="none"
                                stroke-linecap="round" />

                            <rect x="135" y="113" width="2" height="6" fill="#10B981">
                                <animate attributeName="opacity" values="1;0;1" dur="1.5s"
                                    repeatCount="indefinite" />
                            </rect>

                            <rect x="85" y="150" width="30" height="8" rx="2" fill="#475569" />
                            <rect x="70" y="158" width="60" height="4" rx="2" fill="#334155" />
                        </svg>
                        <div class="mt-8 text-center">
                            <div class="flex items-center justify-center gap-2 mb-3">
                                <h3 class="text-gray-900 font-bold text-xl">Programming Help</h3>
                                <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-600 text-base leading-relaxed mb-5">Expert coding assistance in 25+
                                languages including debugging, optimization, and code documentation</p>
                            <div class="flex flex-wrap gap-2 justify-center mb-4">
                                <span
                                    class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">Python</span>
                                <span
                                    class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">Java</span>
                                <span
                                    class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">C++</span>
                                <span
                                    class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">JavaScript</span>
                            </div>
                            <a href="{{ route('services.programming.index') }}"
                                class="inline-flex items-center text-emerald-600 hover:text-emerald-700 font-semibold text-sm group">
                                Learn More
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div
                    class="group relative bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-10 border-2 border-amber-100 hover:border-amber-300 transition-all duration-300 hover:shadow-xl">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-amber-500/5 to-transparent rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative">
                        <svg class="w-28 h-28 mx-auto group-hover:scale-110 transition-transform duration-300"
                            viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="50" y="60" width="100" height="120" rx="3" fill="#F59E0B"
                                opacity="0.95" />
                            <rect x="50" y="60" width="100" height="15" rx="3" fill="#D97706" />

                            <circle cx="60" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="75" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="90" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="105" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="120" cy="67.5" r="2.5" fill="#78350F" />
                            <circle cx="135" cy="67.5" r="2.5" fill="#78350F" />

                            <rect x="55" y="80" width="90" height="95" rx="2" fill="#FEF3C7" />

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

                            <path d="M70 95 Q75 93 80 95 Q85 97 90 95" stroke="#1E40AF" stroke-width="1.5" fill="none"
                                stroke-linecap="round" />
                            <path d="M70 105 Q80 103 90 105 Q100 107 110 105" stroke="#1E40AF" stroke-width="1.5"
                                fill="none" stroke-linecap="round" />

                            <rect x="120" y="130" width="50" height="8" rx="4" fill="#1E293B"
                                transform="rotate(-45 145 134)" />
                            <rect x="155" y="145" width="15" height="6" rx="3" fill="#3B82F6"
                                transform="rotate(-45 162.5 148)" />
                            <polygon points="168,152 171,155 168,158" fill="#1E293B" opacity="0.8" />

                            <circle cx="100" cy="50" r="15" fill="#1E293B" opacity="0.15" />
                            <path d="M100 40 L90 45 L90 50 L100 55 L110 50 L110 45 Z" fill="#FCD34D" />
                            <rect x="98" y="38" width="4" height="8" fill="#78350F" />
                            <circle cx="100" cy="36" r="2" fill="#78350F" />
                        </svg>
                        <div class="mt-8 text-center">
                            <div class="flex items-center justify-center gap-2 mb-3">
                                <h3 class="text-gray-900 font-bold text-xl">Homework Help</h3>
                                <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-gray-600 text-base leading-relaxed mb-5">Comprehensive support for homework,
                                projects, and study materials across all academic levels</p>
                            <div class="flex flex-wrap gap-2 justify-center mb-4">
                                <span class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Math
                                    Tutoring</span>
                                <span
                                    class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Science
                                    Help</span>
                                <span
                                    class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Homework</span>
                                <span class="px-3 py-1 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Test
                                    Prep</span>
                            </div>
                            <a href="{{ route('assignments.create') }}"
                                class="inline-flex items-center text-amber-600 hover:text-amber-700 font-semibold text-sm group">
                                Learn More
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-20">
                <div
                    class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-3xl p-10 max-w-4xl mx-auto border border-blue-100">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Ready to Excel in Your Studies?</h3>
                    <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">Join thousands of successful students across
                        USA who trust Assignment Help USA for their academic needs</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-6">
                        <a href="{{ route('assignments.create') }}"
                            class="inline-flex items-center justify-center gap-2 px-10 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold text-lg rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105">
                            Get Started Now
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <span class="text-gray-500 text-sm">No credit card required</span>
                    </div>
                    <div class="flex items-center justify-center gap-6 text-sm text-gray-500">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Free Consultation</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>24/7 Support</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Money-Back Guarantee</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 lg:py-28 bg-gradient-to-b from-gray-50 via-white to-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-green-50 border border-green-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-green-900 font-semibold text-sm">Trusted by 50,000+ Students Nationwide</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Why Students Choose Assignment Help USA</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We're committed to your academic success with proven results, verified experts, and 24/7 support
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:gap-10 max-w-6xl mx-auto">
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

            <div class="mt-20">
                <div class="bg-gradient-to-br from-gray-900 to-slate-800 rounded-3xl p-12 shadow-2xl">
                    <div class="text-center mb-10">
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">Trusted by Students Worldwide</h3>
                        <p class="text-gray-300">Real numbers that demonstrate our commitment to excellence</p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div class="group">
                            <div
                                class="text-4xl md:text-5xl font-bold text-blue-400 mb-2 group-hover:scale-110 transition-transform">
                                15M+</div>
                            <div class="text-gray-300 text-sm font-medium">Successful Projects</div>
                            <div class="text-gray-500 text-xs mt-1">Since 2015</div>
                        </div>
                        <div class="group">
                            <div class="flex items-center justify-center gap-1 mb-2">
                                <span
                                    class="text-4xl md:text-5xl font-bold text-yellow-400 group-hover:scale-110 transition-transform">4.9</span>
                                <svg class="w-8 h-8 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="text-gray-300 text-sm font-medium">Average Rating</div>
                            <div class="text-gray-500 text-xs mt-1">15,000+ Reviews</div>
                        </div>
                        <div class="group">
                            <div
                                class="text-4xl md:text-5xl font-bold text-emerald-400 mb-2 group-hover:scale-110 transition-transform">
                                98%</div>
                            <div class="text-gray-300 text-sm font-medium">On-Time Delivery</div>
                            <div class="text-gray-500 text-xs mt-1">Guaranteed</div>
                        </div>
                        <div class="group">
                            <div
                                class="text-4xl md:text-5xl font-bold text-purple-400 mb-2 group-hover:scale-110 transition-transform">
                                24/7</div>
                            <div class="text-gray-300 text-sm font-medium">Support Available</div>
                            <div class="text-gray-500 text-xs mt-1">365 Days/Year</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-12 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-purple-50 via-blue-50 to-pink-50">
            <div class="absolute inset-0 bg-gradient-to-tr from-blue-100/50 via-transparent to-purple-100/50"></div>
            <div
                class="absolute top-0 left-1/4 w-96 h-96 bg-gradient-to-br from-purple-300/30 to-pink-300/30 rounded-full blur-3xl animate-pulse">
            </div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-gradient-to-br from-blue-300/30 to-indigo-300/30 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 1s;"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-5xl mx-auto">
                <div class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-purple-600 via-blue-600 to-pink-600 rounded-3xl opacity-20 group-hover:opacity-30 blur-xl transition-all duration-500">
                    </div>

                    <div
                        class="relative backdrop-blur-xl bg-white/80 rounded-3xl shadow-2xl border border-white/50 overflow-hidden">
                        <div class="h-1 bg-gradient-to-r from-purple-500 via-blue-500 to-pink-500"></div>

                        <div class="relative px-6 sm:px-8 py-5 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-500/5 via-blue-500/5 to-pink-500/5">
                            </div>
                            <div class="absolute inset-0 opacity-10"
                                style="background-image: radial-gradient(circle at 2px 2px, rgba(139, 92, 246, 0.3) 1px, transparent 0); background-size: 32px 32px;">
                            </div>

                            <div class="relative">
                                <div class="inline-block mb-2">
                                    <span
                                        class="px-3 py-1 bg-gradient-to-r from-purple-500/10 via-blue-500/10 to-pink-500/10 border border-purple-200/50 rounded-full text-xs font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-pink-600">
                                        AI-Powered Matching
                                    </span>
                                </div>
                                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-black mb-2">
                                    <span
                                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-pink-600 hover:from-purple-700 hover:via-blue-700 hover:to-pink-700 transition-all duration-300">
                                        Find Expert Help Now
                                    </span>
                                </h2>
                                <p class="text-gray-600 text-base max-w-2xl">
                                    Connect with top-rated tutors in seconds. Search by subject, topic, or assignment type.
                                </p>
                            </div>
                        </div>

                        <div class="p-6 sm:p-8">
                            <form action="{{ route('assignments.create') }}" method="GET" class="space-y-4">
                                <div class="group">
                                    <label for="subject-search"
                                        class="block text-sm font-bold text-gray-700 mb-2 flex items-center gap-2">
                                        <span
                                            class="w-1.5 h-1.5 bg-gradient-to-r from-purple-500 to-blue-500 rounded-full animate-pulse"></span>
                                        What do you need help with?
                                    </label>
                                    <div class="relative">
                                        <div
                                            class="absolute -inset-0.5 bg-gradient-to-r from-purple-500 via-blue-500 to-pink-500 rounded-2xl opacity-0 group-hover:opacity-20 blur transition-all duration-300">
                                        </div>

                                        <div class="relative flex items-center">
                                            <div
                                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                                <div
                                                    class="p-1.5 bg-gradient-to-br from-purple-500/10 to-blue-500/10 rounded-lg">
                                                    <svg class="h-4 w-4 text-purple-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2.5"
                                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <input type="text" id="subject-search" name="subject"
                                                class="block w-full pl-14 pr-4 py-3.5 text-base font-medium border-2 border-gray-200 rounded-2xl
                                                       focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500
                                                       hover:border-purple-300 transition-all duration-300
                                                       bg-white/90 backdrop-blur-sm placeholder-gray-400"
                                                placeholder="Type a subject... e.g., Python, Calculus, Essay Writing"
                                                autocomplete="off" />
                                        </div>
                                    </div>
                                </div>

                                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-3">
                                    <div class="group">
                                        <label for="assignment-type"
                                            class="block text-xs font-bold text-gray-600 mb-1.5 uppercase tracking-wider">
                                            Type
                                        </label>
                                        <div class="relative">
                                            <select id="assignment-type" name="type"
                                                class="block w-full px-3 py-2.5 border-2 border-gray-200 rounded-xl
                                                       focus:ring-4 focus:ring-blue-500/20 focus:border-blue-500
                                                       hover:border-blue-300 transition-all duration-300
                                                       bg-white/90 backdrop-blur-sm text-gray-900 font-medium
                                                       appearance-none cursor-pointer">
                                                <option value="">All Types</option>
                                                <option value="homework">Homework Help</option>
                                                <option value="essay">Essay Writing</option>
                                                <option value="programming">Programming</option>
                                                <option value="research">Research Paper</option>
                                                <option value="lab">Lab Report</option>
                                                <option value="math">Math Problems</option>
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group">
                                        <label for="academic-level"
                                            class="block text-xs font-bold text-gray-600 mb-1.5 uppercase tracking-wider">
                                            Level
                                        </label>
                                        <div class="relative">
                                            <select id="academic-level" name="level"
                                                class="block w-full px-3 py-2.5 border-2 border-gray-200 rounded-xl
                                                       focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500
                                                       hover:border-indigo-300 transition-all duration-300
                                                       bg-white/90 backdrop-blur-sm text-gray-900 font-medium
                                                       appearance-none cursor-pointer">
                                                <option value="">All Levels</option>
                                                <option value="high-school">High School</option>
                                                <option value="undergraduate">Undergraduate</option>
                                                <option value="graduate">Graduate</option>
                                                <option value="phd">Ph.D.</option>
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                <svg class="h-5 w-5 text-indigo-500" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group">
                                        <label for="deadline"
                                            class="block text-xs font-bold text-gray-600 mb-1.5 uppercase tracking-wider">
                                            Deadline
                                        </label>
                                        <div class="relative">
                                            <select id="deadline" name="deadline"
                                                class="block w-full px-3 py-2.5 border-2 border-gray-200 rounded-xl
                                                       focus:ring-4 focus:ring-purple-500/20 focus:border-purple-500
                                                       hover:border-purple-300 transition-all duration-300
                                                       bg-white/90 backdrop-blur-sm text-gray-900 font-medium
                                                       appearance-none cursor-pointer">
                                                <option value="">Any Time</option>
                                                <option value="24h">Within 24 hours</option>
                                                <option value="48h">Within 48 hours</option>
                                                <option value="week">Within 1 week</option>
                                                <option value="flexible">Flexible</option>
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                <svg class="h-5 w-5 text-purple-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="group">
                                        <label for="price-range"
                                            class="block text-xs font-bold text-gray-600 mb-1.5 uppercase tracking-wider">
                                            Budget
                                        </label>
                                        <div class="relative">
                                            <select id="price-range" name="budget"
                                                class="block w-full px-3 py-2.5 border-2 border-gray-200 rounded-xl
                                                       focus:ring-4 focus:ring-pink-500/20 focus:border-pink-500
                                                       hover:border-pink-300 transition-all duration-300
                                                       bg-white/90 backdrop-blur-sm text-gray-900 font-medium
                                                       appearance-none cursor-pointer">
                                                <option value="">Any Budget</option>
                                                <option value="0-50">Under $50</option>
                                                <option value="50-100">$50 - $100</option>
                                                <option value="100-200">$100 - $200</option>
                                                <option value="200+">$200+</option>
                                            </select>
                                            <div
                                                class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                                <svg class="h-5 w-5 text-pink-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col sm:flex-row gap-3 pt-3">
                                    <button type="submit"
                                        class="group relative flex-1 sm:flex-none sm:px-10 py-3.5 overflow-hidden rounded-xl
                                               font-black text-base transition-all duration-300
                                               hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2">
                                        <div
                                            class="absolute inset-0 bg-gradient-to-r from-purple-600 via-blue-600 to-pink-600 transition-all duration-300">
                                        </div>
                                        <div
                                            class="absolute inset-0 bg-gradient-to-r from-pink-600 via-purple-600 to-blue-600 opacity-0 group-hover:opacity-100 transition-all duration-500">
                                        </div>

                                        <div
                                            class="absolute -inset-1 bg-gradient-to-r from-purple-600 via-blue-600 to-pink-600 rounded-xl opacity-50 blur-lg group-hover:opacity-75 transition-all duration-300">
                                        </div>

                                        <span class="relative flex items-center gap-2 text-white">
                                            <svg class="w-5 h-5 group-hover:rotate-12 transition-transform duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                                                </path>
                                            </svg>
                                            Find My Expert
                                        </span>
                                    </button>

                                    <button type="button"
                                        onclick="window.location.href='{{ route('assignments.create') }}'"
                                        class="group relative flex-1 sm:flex-none sm:px-8 py-3.5 overflow-hidden rounded-xl
                                               font-black text-base transition-all duration-300
                                               hover:scale-105 hover:shadow-2xl flex items-center justify-center gap-2
                                               border-2 border-gray-200 bg-white hover:border-purple-300">
                                        <span
                                            class="relative flex items-center gap-2 text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">
                                            <svg class="w-5 h-5 text-purple-600 group-hover:rotate-90 transition-transform duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2.5" d="M12 4v16m8-8H4"></path>
                                            </svg>
                                            <span class="text-gray-800">Submit Assignment</span>
                                        </span>
                                    </button>
                                </div>
                            </form>

                            <div class="mt-6 pt-5 border-t-2 border-gray-100">
                                <div class="flex items-center justify-between mb-3">
                                    <h3
                                        class="text-xs font-black text-gray-700 uppercase tracking-wider flex items-center gap-2">
                                        <span
                                            class="w-1.5 h-1.5 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></span>
                                        Popular Subjects
                                    </h3>
                                    <a href="{{ route('services.programming.index') }}"
                                        class="group text-xs font-bold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 flex items-center gap-1">
                                        View All
                                        <svg class="w-3.5 h-3.5 text-purple-600 group-hover:translate-x-1 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex flex-wrap gap-2">
                                    <a href="{{ route('services.programming.index') }}?subject=python"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-purple-50 to-blue-50 hover:from-purple-100 hover:to-blue-100
                                               border-2 border-purple-200/50 hover:border-purple-400 rounded-lg
                                               text-xs font-bold text-purple-700 hover:text-purple-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        Python
                                    </a>
                                    <a href="{{ route('services.programming.index') }}?subject=java"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100
                                               border-2 border-blue-200/50 hover:border-blue-400 rounded-lg
                                               text-xs font-bold text-blue-700 hover:text-blue-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        Java
                                    </a>
                                    <a href="{{ route('services.programming.index') }}?subject=cpp"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-indigo-50 to-purple-50 hover:from-indigo-100 hover:to-purple-100
                                               border-2 border-indigo-200/50 hover:border-indigo-400 rounded-lg
                                               text-xs font-bold text-indigo-700 hover:text-indigo-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        C++
                                    </a>
                                    <a href="{{ route('services.assignment.index') }}?subject=calculus"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-pink-50 to-rose-50 hover:from-pink-100 hover:to-rose-100
                                               border-2 border-pink-200/50 hover:border-pink-400 rounded-lg
                                               text-xs font-bold text-pink-700 hover:text-pink-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        Calculus
                                    </a>
                                    <a href="{{ route('services.assignment.index') }}?subject=chemistry"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-green-50 to-emerald-50 hover:from-green-100 hover:to-emerald-100
                                               border-2 border-green-200/50 hover:border-green-400 rounded-lg
                                               text-xs font-bold text-green-700 hover:text-green-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        Chemistry
                                    </a>
                                    <a href="{{ route('services.assignment.index') }}?subject=physics"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-cyan-50 to-blue-50 hover:from-cyan-100 hover:to-blue-100
                                               border-2 border-cyan-200/50 hover:border-cyan-400 rounded-lg
                                               text-xs font-bold text-cyan-700 hover:text-cyan-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        Physics
                                    </a>
                                    <a href="{{ route('services.assignment.index') }}?subject=essay"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-orange-50 to-amber-50 hover:from-orange-100 hover:to-amber-100
                                               border-2 border-orange-200/50 hover:border-orange-400 rounded-lg
                                               text-xs font-bold text-orange-700 hover:text-orange-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        Essay Writing
                                    </a>
                                    <a href="{{ route('services.programming.index') }}?subject=javascript"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-yellow-50 to-amber-50 hover:from-yellow-100 hover:to-amber-100
                                               border-2 border-yellow-200/50 hover:border-yellow-400 rounded-lg
                                               text-xs font-bold text-yellow-700 hover:text-yellow-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        JavaScript
                                    </a>
                                    <a href="{{ route('services.programming.index') }}?subject=data-science"
                                        class="group relative px-3.5 py-1.5 bg-gradient-to-r from-violet-50 to-purple-50 hover:from-violet-100 hover:to-purple-100
                                               border-2 border-violet-200/50 hover:border-violet-400 rounded-lg
                                               text-xs font-bold text-violet-700 hover:text-violet-900
                                               transition-all duration-300 hover:scale-105 hover:shadow-lg">
                                        Data Science
                                    </a>
                                </div>
                            </div>

                            <div
                                class="mt-5 p-3 bg-gradient-to-r from-green-50 via-emerald-50 to-teal-50 border-2 border-green-200/50 rounded-xl">
                                <div class="flex items-center justify-center gap-2 text-xs">
                                    <div class="flex items-center gap-1.5">
                                        <div class="relative">
                                            <div class="absolute inset-0 bg-green-400 rounded-full blur-sm opacity-50">
                                            </div>
                                            <svg class="relative w-4 h-4 text-green-600" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span class="font-bold text-gray-700">100% Secure & Confidential</span>
                                    </div>
                                    <span class="text-gray-400">•</span>
                                    <span class="font-semibold text-gray-600">Free Quote</span>
                                    <span class="text-gray-400">•</span>
                                    <span class="font-semibold text-gray-600">No Obligation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 overflow-hidden bg-gradient-to-br from-gray-50 via-blue-50 to-purple-50">
        <div class="absolute inset-0 opacity-30">
            <div
                class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full blur-3xl">
            </div>
            <div
                class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-purple-200 to-pink-200 rounded-full blur-3xl">
            </div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <div class="inline-block mb-4">
                    <span
                        class="px-4 py-2 bg-gradient-to-r from-blue-500/10 to-purple-500/10 border border-blue-200 rounded-full text-sm font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                        Simple 4-Step Process
                    </span>
                </div>
                <h2 class="text-4xl sm:text-5xl font-black text-gray-900 mb-4">
                    Your Journey to <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">Academic
                        Success</span>
                </h2>
                <p class="text-lg text-gray-600">
                    From submission to completion, we've streamlined the entire process to get you the help you need, fast.
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="hidden lg:block relative">
                    <div
                        class="absolute top-32 left-0 right-0 h-1 bg-gradient-to-r from-blue-200 via-purple-200 to-pink-200">
                    </div>
                    <div class="absolute top-32 left-0 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 animate-pulse"
                        style="width: 0%; animation: progressLine 3s ease-out forwards;">
                    </div>

                    <div class="grid grid-cols-4 gap-8">
                        <div class="group relative">
                            <div class="flex justify-center mb-6">
                                <div class="relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition-all duration-500">
                                    </div>
                                    <div
                                        class="relative w-24 h-24 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-xl border-4 border-white">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-blue-100 hover:border-blue-300 group-hover:-translate-y-2">
                                <div class="text-center mb-3">
                                    <span
                                        class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold mb-2">STEP
                                        1</span>
                                    <h3 class="text-xl font-black text-gray-900 mb-2">Submit Details</h3>
                                </div>
                                <p class="text-gray-600 text-sm text-center mb-4">
                                    Fill out a quick form with your assignment requirements, deadline, and budget.
                                </p>
                                <div class="flex justify-center">
                                    <div class="flex items-center gap-2 text-xs text-blue-600 font-semibold">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        2 minutes
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group relative">
                            <div class="flex justify-center mb-6">
                                <div class="relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition-all duration-500">
                                    </div>
                                    <div
                                        class="relative w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-xl border-4 border-white">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-purple-100 hover:border-purple-300 group-hover:-translate-y-2">
                                <div class="text-center mb-3">
                                    <span
                                        class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-bold mb-2">STEP
                                        2</span>
                                    <h3 class="text-xl font-black text-gray-900 mb-2">Get Matched</h3>
                                </div>
                                <p class="text-gray-600 text-sm text-center mb-4">
                                    Our AI instantly matches you with the perfect expert based on subject and availability.
                                </p>
                                <div class="flex justify-center">
                                    <div class="flex items-center gap-2 text-xs text-purple-600 font-semibold">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Under 5 minutes
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group relative">
                            <div class="flex justify-center mb-6">
                                <div class="relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition-all duration-500">
                                    </div>
                                    <div
                                        class="relative w-24 h-24 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-xl border-4 border-white">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-indigo-100 hover:border-indigo-300 group-hover:-translate-y-2">
                                <div class="text-center mb-3">
                                    <span
                                        class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-bold mb-2">STEP
                                        3</span>
                                    <h3 class="text-xl font-black text-gray-900 mb-2">Expert Works</h3>
                                </div>
                                <p class="text-gray-600 text-sm text-center mb-4">
                                    Your matched tutor works on your assignment with regular progress updates.
                                </p>
                                <div class="flex justify-center">
                                    <div class="flex items-center gap-2 text-xs text-indigo-600 font-semibold">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Live updates
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group relative">
                            <div class="flex justify-center mb-6">
                                <div class="relative">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full blur-xl opacity-50 group-hover:opacity-75 transition-all duration-500">
                                    </div>
                                    <div
                                        class="relative w-24 h-24 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center transform group-hover:scale-110 transition-all duration-300 shadow-xl border-4 border-white">
                                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-green-100 hover:border-green-300 group-hover:-translate-y-2">
                                <div class="text-center mb-3">
                                    <span
                                        class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold mb-2">STEP
                                        4</span>
                                    <h3 class="text-xl font-black text-gray-900 mb-2">Get Results</h3>
                                </div>
                                <p class="text-gray-600 text-sm text-center mb-4">
                                    Receive your completed assignment with unlimited revisions until you're satisfied.
                                </p>
                                <div class="flex justify-center">
                                    <div class="flex items-center gap-2 text-xs text-green-600 font-semibold">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        100% Satisfaction
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:hidden space-y-8">
                    <div class="flex gap-4">
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center shadow-lg border-4 border-white">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-1 flex-1 bg-gradient-to-b from-blue-300 to-purple-300 mt-2"></div>
                        </div>
                        <div class="flex-1 pb-8">
                            <div class="bg-white rounded-xl p-5 shadow-lg border-2 border-blue-100">
                                <span
                                    class="inline-block px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold mb-2">STEP
                                    1</span>
                                <h3 class="text-lg font-black text-gray-900 mb-2">Submit Details</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    Fill out a quick form with your assignment requirements, deadline, and budget.
                                </p>
                                <div class="flex items-center gap-2 text-xs text-blue-600 font-semibold">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    2 minutes
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center shadow-lg border-4 border-white">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-1 flex-1 bg-gradient-to-b from-purple-300 to-indigo-300 mt-2"></div>
                        </div>
                        <div class="flex-1 pb-8">
                            <div class="bg-white rounded-xl p-5 shadow-lg border-2 border-purple-100">
                                <span
                                    class="inline-block px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-bold mb-2">STEP
                                    2</span>
                                <h3 class="text-lg font-black text-gray-900 mb-2">Get Matched</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    Our AI instantly matches you with the perfect expert based on subject and availability.
                                </p>
                                <div class="flex items-center gap-2 text-xs text-purple-600 font-semibold">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Under 5 minutes
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-blue-500 rounded-full flex items-center justify-center shadow-lg border-4 border-white">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-1 flex-1 bg-gradient-to-b from-indigo-300 to-green-300 mt-2"></div>
                        </div>
                        <div class="flex-1 pb-8">
                            <div class="bg-white rounded-xl p-5 shadow-lg border-2 border-indigo-100">
                                <span
                                    class="inline-block px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full text-xs font-bold mb-2">STEP
                                    3</span>
                                <h3 class="text-lg font-black text-gray-900 mb-2">Expert Works</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    Your matched tutor works on your assignment with regular progress updates.
                                </p>
                                <div class="flex items-center gap-2 text-xs text-indigo-600 font-semibold">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Live updates
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="flex flex-col items-center">
                            <div class="relative">
                                <div
                                    class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center shadow-lg border-4 border-white">
                                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="bg-white rounded-xl p-5 shadow-lg border-2 border-green-100">
                                <span
                                    class="inline-block px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-bold mb-2">STEP
                                    4</span>
                                <h3 class="text-lg font-black text-gray-900 mb-2">Get Results</h3>
                                <p class="text-gray-600 text-sm mb-3">
                                    Receive your completed assignment with unlimited revisions until you're satisfied.
                                </p>
                                <div class="flex items-center gap-2 text-xs text-green-600 font-semibold">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    100% Satisfaction
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Academic Help & Coding Services - Expert
                    Online Tutoring</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Whether you're a student or professional needing help with assignments or programming projects, our
                    expert tutors are here to help you
                    succeed.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-6xl mx-auto">

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

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Students Trust Assignment Help
                    USA
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Join thousands of USA students who have improved their grades with our expert assistance
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

                <div
                    class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🎓</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Expert Writers</h3>
                    <p class="text-gray-600 leading-relaxed">Verified experts from top universities with proven track
                        records in helping students succeed.</p>
                </div>


                <div
                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">⚡</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Fast Turnaround</h3>
                    <p class="text-gray-600 leading-relaxed">Get help even with tight deadlines. We offer express delivery
                        options for urgent assignments.</p>
                </div>


                <div class="bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🛡️</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">100% Original</h3>
                    <p class="text-gray-600 leading-relaxed">All work is custom-written from scratch. Plagiarism-free
                        guaranteed with detailed reports.</p>
                </div>


                <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">💰</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Student-Friendly Pricing</h3>
                    <p class="text-gray-600 leading-relaxed">Affordable rates designed for college budgets. Special
                        discounts for returning students.</p>
                </div>


                <div
                    class="bg-gradient-to-br from-yellow-50 to-amber-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🔄</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Free Revisions</h3>
                    <p class="text-gray-600 leading-relaxed">Unlimited revisions until you're completely satisfied with
                        the work. Your success is our priority.</p>
                </div>


                <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-shadow">
                    <div class="text-5xl mb-4">🔒</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">100% Confidential</h3>
                    <p class="text-gray-600 leading-relaxed">Your privacy is protected. Secure payment processing and
                        encrypted communications.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">What Students Are Saying</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Real reviews from real college students across the USA
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">

                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 flex">⭐⭐⭐⭐⭐</div>
                    </div>
                    <p class="text-gray-700 mb-6 leading-relaxed italic">
                        "I was struggling with my Python assignment and had only 2 days left. Assignment Help USA connected
                        me
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

    <section class="py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Boost Your Grades?</h2>
            <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                Join 50,000+ college students across USA who trust Assignment Help USA for their academic success.
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

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-purple-50 border border-purple-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                    <span class="text-purple-900 font-semibold text-sm">All Academic Levels Covered</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Expert Help at Every Academic Level</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From high school to PhD programs, we provide tailored assistance for students at every stage of their
                    academic journey
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">

                <div
                    class="group bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-blue-100 hover:border-blue-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">🎒</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">High School</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Support for grades 9-12 with homework, essays, projects, and test preparation
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Homework assistance</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Essay writing help</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Science projects</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>SAT/ACT prep</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-purple-100 hover:border-purple-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">📚</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">College</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Undergraduate support for all majors with comprehensive academic assistance
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Research papers</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Case studies</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Lab reports</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Programming projects</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-emerald-100 hover:border-emerald-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">🎓</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Masters</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Advanced graduate-level support for thesis, capstone, and research projects
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Thesis writing</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Capstone projects</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Literature reviews</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Data analysis</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-amber-100 hover:border-amber-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">👨‍🎓</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">PhD</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Doctoral-level expertise for dissertations and advanced research work
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Dissertation chapters</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Research proposals</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Statistical analysis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Academic publishing</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-20 lg:py-32 bg-gradient-to-br from-slate-900 via-blue-900 to-indigo-900 overflow-hidden">

        <div class="absolute inset-0 overflow-hidden">

            <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-indigo-500/20 rounded-full blur-3xl animate-pulse"
                style="animation-delay: 2s;"></div>


            <div class="absolute top-20 left-10 opacity-10 animate-float-slow">
                <div class="text-6xl">💰</div>
            </div>
            <div class="absolute top-40 right-20 opacity-10 animate-float-delayed">
                <div class="text-6xl">📊</div>
            </div>
            <div class="absolute bottom-40 left-20 opacity-10 animate-float">
                <div class="text-6xl">✨</div>
            </div>
            <div class="absolute bottom-20 right-40 opacity-10 animate-float-slow" style="animation-delay: 1.5s;">
                <div class="text-6xl">🎯</div>
            </div>


            <div
                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAxMCAwIEwgMCAwIDAgMTAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjA1IiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=')] opacity-30">
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">

            <div class="text-center mb-16">

                <div
                    class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 px-6 py-3 rounded-full mb-6 animate-fade-in-up">
                    <span class="relative flex h-3 w-3">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span class="text-white font-bold text-sm">Live Pricing Calculator</span>
                </div>


                <h2
                    class="text-4xl md:text-5xl lg:text-6xl font-black text-white mb-6 leading-tight animate-fade-in-up animation-delay-200">
                    Get Your <span
                        class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">Instant
                        Quote</span>
                </h2>


                <p
                    class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto mb-8 animate-fade-in-up animation-delay-400">
                    Calculate your assignment cost in real-time with our transparent pricing calculator
                </p>


                <div
                    class="flex flex-wrap items-center justify-center gap-6 md:gap-8 animate-fade-in-up animation-delay-600">
                    <div class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="font-semibold text-sm md:text-base">No Hidden Fees</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="font-semibold text-sm md:text-base">100% Transparent</span>
                    </div>
                    <div class="flex items-center gap-2 text-white/90">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="font-semibold text-sm md:text-base">Instant Results</span>
                    </div>
                </div>
            </div>


            <div class="relative max-w-6xl mx-auto">

                <div class="absolute -top-4 -left-4 w-20 h-20 border-t-4 border-l-4 border-cyan-400/50 rounded-tl-3xl">
                </div>
                <div class="absolute -top-4 -right-4 w-20 h-20 border-t-4 border-r-4 border-purple-400/50 rounded-tr-3xl">
                </div>
                <div class="absolute -bottom-4 -left-4 w-20 h-20 border-b-4 border-l-4 border-blue-400/50 rounded-bl-3xl">
                </div>
                <div
                    class="absolute -bottom-4 -right-4 w-20 h-20 border-b-4 border-r-4 border-indigo-400/50 rounded-br-3xl">
                </div>


                <div
                    class="absolute inset-0 bg-gradient-to-r from-cyan-500/10 via-blue-500/10 to-purple-500/10 rounded-3xl blur-xl">
                </div>


                {{-- <div class="relative">
                    <livewire:budget-calculator />
                </div> --}}
            </div>


            <div class="mt-16 grid grid-cols-1 md:grid-cols-4 gap-6 max-w-5xl mx-auto">

                <div
                    class="text-center bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 group">
                    <div class="text-4xl mb-3 group-hover:scale-110 transition-transform">⚡</div>
                    <div class="text-3xl font-bold text-white mb-1">
                        < 30 Sec</div>
                            <div class="text-sm text-blue-200">Instant Quote</div>
                    </div>


                    <div
                        class="text-center bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 group">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform">💯</div>
                        <div class="text-3xl font-bold text-white mb-1">100%</div>
                        <div class="text-sm text-blue-200">Price Match</div>
                    </div>


                    <div
                        class="text-center bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 group">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform">🎓</div>
                        <div class="text-3xl font-bold text-white mb-1">50+</div>
                        <div class="text-sm text-blue-200">Subjects</div>
                    </div>


                    <div
                        class="text-center bg-white/5 backdrop-blur-sm border border-white/10 rounded-2xl p-6 hover:bg-white/10 transition-all duration-300 group">
                        <div class="text-4xl mb-3 group-hover:scale-110 transition-transform">💰</div>
                        <div class="text-3xl font-bold text-white mb-1">20%</div>
                        <div class="text-sm text-blue-200">Early Bird Discount</div>
                    </div>
                </div>


                <div class="mt-12 text-center">
                    <p class="text-white/80 mb-4">Need help choosing? Our experts are here 24/7</p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('assignments.create') }}"
                            class="group inline-flex items-center gap-2 bg-white hover:bg-blue-50 text-blue-900 px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                            <span>Start Your Order</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/20 backdrop-blur-sm border border-white/20 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span>Talk to Expert</span>
                        </a>
                    </div>
                </div>
            </div>


            <div class="absolute bottom-0 left-0 right-0">
                <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full">
                    <path
                        d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z"
                        fill="rgb(249, 250, 251)" />
                </svg>
            </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                    </svg>
                    <span class="text-blue-900 font-semibold text-sm">50+ Subjects Available</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Most Popular Subjects</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Get expert help across a wide range of academic subjects from our qualified professionals
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 max-w-7xl mx-auto">

                <a href="{{ route('services.assignment.index') }}?subject=math"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-blue-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🔢</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Mathematics</h3>
                    <p class="text-sm text-gray-500">Calculus, Algebra, Statistics</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=science"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-green-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🔬</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Science</h3>
                    <p class="text-sm text-gray-500">Physics, Chemistry, Biology</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=english"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-purple-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">📖</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">English</h3>
                    <p class="text-sm text-gray-500">Literature, Writing, Grammar</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=business"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-yellow-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">💼</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Business</h3>
                    <p class="text-sm text-gray-500">Management, Finance, Marketing</p>
                </a>


                <a href="{{ route('services.programming.index') }}"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-indigo-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">💻</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Computer Science</h3>
                    <p class="text-sm text-gray-500">Programming, Algorithms</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=history"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-red-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🏛️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">History</h3>
                    <p class="text-sm text-gray-500">World, American, European</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=psychology"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-pink-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🧠</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Psychology</h3>
                    <p class="text-sm text-gray-500">Clinical, Social, Cognitive</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=economics"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-teal-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">📊</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Economics</h3>
                    <p class="text-sm text-gray-500">Micro, Macro, Econometrics</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=engineering"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-orange-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">⚙️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Engineering</h3>
                    <p class="text-sm text-gray-500">Mechanical, Civil, Electrical</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=nursing"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-rose-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🏥</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Nursing</h3>
                    <p class="text-sm text-gray-500">Healthcare, Patient Care</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=law"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-gray-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">⚖️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Law</h3>
                    <p class="text-sm text-gray-500">Legal Studies, Criminal Justice</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=sociology"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-violet-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">👥</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Sociology</h3>
                    <p class="text-sm text-gray-500">Social Behavior, Culture, Society</p>
                </a>


                <a href="{{ route('services.assignment.index') }}?subject=accounting"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-amber-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">💰</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Accounting</h3>
                    <p class="text-sm text-gray-500">Financial, Tax, Auditing</p>
                </a>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services.assignment.index') }}"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    View All Subjects
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <livewire:assignment-search-filter />
        </div>
    </section> --}}

    <section id="how-it-works"
        class="py-20 bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 relative overflow-hidden">

        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-64 h-64 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm border border-white/30 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-white font-semibold text-sm">Simple 4-Step Process</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">How It Works</h2>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Getting expert help for your assignments is easy. Just follow these simple steps
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">

                <div class="relative">
                    <div
                        class="bg-white rounded-2xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2">
                        <div
                            class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            1
                        </div>
                        <div class="text-6xl text-center mb-6 mt-4">📝</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Submit Your Assignment</h3>
                        <p class="text-gray-600 text-center leading-relaxed">
                            Fill out our simple form with your assignment details, deadline, and requirements
                        </p>
                    </div>

                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 text-white text-4xl">
                        →
                    </div>
                </div>


                <div class="relative">
                    <div
                        class="bg-white rounded-2xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2">
                        <div
                            class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            2
                        </div>
                        <div class="text-6xl text-center mb-6 mt-4">🎯</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Get Matched with Expert</h3>
                        <p class="text-gray-600 text-center leading-relaxed">
                            We instantly connect you with a qualified expert in your subject area
                        </p>
                    </div>

                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 text-white text-4xl">
                        →
                    </div>
                </div>


                <div class="relative">
                    <div
                        class="bg-white rounded-2xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2">
                        <div
                            class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            3
                        </div>
                        <div class="text-6xl text-center mb-6 mt-4">⚡</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Expert Works on It</h3>
                        <p class="text-gray-600 text-center leading-relaxed">
                            Your expert completes the assignment following all your instructions and guidelines
                        </p>
                    </div>

                    <div class="hidden lg:block absolute top-1/2 -right-4 transform -translate-y-1/2 text-white text-4xl">
                        →
                    </div>
                </div>


                <div class="relative">
                    <div
                        class="bg-white rounded-2xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-2">
                        <div
                            class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-amber-500 to-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            4
                        </div>
                        <div class="text-6xl text-center mb-6 mt-4">✅</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 text-center">Receive & Review</h3>
                        <p class="text-gray-600 text-center leading-relaxed">
                            Get your completed assignment on time with free revisions until you're satisfied
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16">
                <a href="{{ route('assignments.create') }}"
                    class="inline-flex items-center gap-2 bg-white hover:bg-gray-100 text-purple-600 px-10 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    Get Started Now
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-emerald-50 border border-emerald-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-emerald-900 font-semibold text-sm">Your Success is Guaranteed</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Quality Guarantees</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We stand behind our work with comprehensive guarantees to ensure your complete satisfaction
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">

                <div
                    class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">100% Original Work</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Every assignment is written from scratch and checked through advanced plagiarism detection software.
                        We provide detailed reports upon request.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Custom-written content</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Turnitin reports available</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Proper citations included</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 border-2 border-emerald-100 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Money-Back Guarantee</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        If we can't meet your requirements or you're not satisfied with the quality, we offer a full refund.
                        No questions asked.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Full refund policy</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Transparent process</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Customer-first approach</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border-2 border-purple-100 hover:border-purple-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Unlimited Revisions</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We'll revise your assignment as many times as needed until you're completely satisfied with the
                        result.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Free revisions</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Quick turnaround</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Quality assurance</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 border-2 border-amber-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">On-Time Delivery</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We respect your deadlines. 98% of our assignments are delivered on time or earlier.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Deadline guarantee</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Express delivery available</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Early submission bonus</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 border-2 border-cyan-100 hover:border-cyan-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Our customer support team is available round the clock to assist you with any questions or concerns.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>Live chat support</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>Email assistance</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>Quick response time</span>
                        </li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-rose-50 to-red-50 rounded-2xl p-8 border-2 border-rose-100 hover:border-rose-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-rose-500 to-red-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">100% Confidential</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Your privacy is our top priority. We never share your personal information or assignment details.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-rose-600 mr-2">✓</span>
                            <span>Encrypted communications</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-rose-600 mr-2">✓</span>
                            <span>Secure payment methods</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-rose-600 mr-2">✓</span>
                            <span>Data protection compliant</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-green-50 border border-green-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-green-900 font-semibold text-sm">Affordable & Transparent Pricing</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Student-Friendly Pricing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Transparent pricing with no hidden fees. Get quality help that fits your budget
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto mb-12">

                <div
                    class="bg-white rounded-2xl p-8 shadow-xl border-2 border-gray-100 hover:border-blue-300 transition-all duration-300">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">Assignment Writing</h3>
                        <span class="text-5xl">📝</span>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-baseline gap-2">
                            <span class="text-5xl font-bold text-blue-600">$15</span>
                            <span class="text-gray-500">/page</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Starting price for standard assignments</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Essays, research papers, reports</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Proper formatting & citations</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Plagiarism report included</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Unlimited free revisions</span>
                        </li>
                    </ul>
                    <a href="{{ route('assignments.create') }}"
                        class="block text-center bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105">
                        Order Now
                    </a>
                </div>


                <div
                    class="bg-white rounded-2xl p-8 shadow-xl border-2 border-gray-100 hover:border-emerald-300 transition-all duration-300">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-2xl font-bold text-gray-900">Programming Help</h3>
                        <span class="text-5xl">💻</span>
                    </div>
                    <div class="mb-6">
                        <div class="flex items-baseline gap-2">
                            <span class="text-5xl font-bold text-emerald-600">$25</span>
                            <span class="text-gray-500">/task</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Starting price for coding projects</p>
                    </div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">25+ programming languages</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Well-commented code</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Debugging & optimization</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-emerald-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-600">Video explanation available</span>
                        </li>
                    </ul>
                    <a href="{{ route('assignments.create') }}"
                        class="block text-center bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105">
                        Get Help Now
                    </a>
                </div>
            </div>


            <div
                class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 max-w-5xl mx-auto border border-purple-100">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">What Affects the Price?</h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="text-4xl mb-3">📅</div>
                        <h4 class="font-bold text-gray-900 mb-2">Deadline</h4>
                        <p class="text-sm text-gray-600">Longer deadlines cost less. Rush orders available with express
                            pricing.</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-3">📏</div>
                        <h4 class="font-bold text-gray-900 mb-2">Complexity</h4>
                        <p class="text-sm text-gray-600">Advanced topics and specialized requirements may affect pricing.
                        </p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-3">📄</div>
                        <h4 class="font-bold text-gray-900 mb-2">Length</h4>
                        <p class="text-sm text-gray-600">Longer assignments are priced per page or project scope.</p>
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <p class="text-gray-700 font-semibold mb-3">🎁 Special Offers:</p>
                    <div class="flex flex-wrap gap-3 justify-center text-sm">
                        <span class="bg-white px-4 py-2 rounded-full text-purple-700 font-medium">15% off for new
                            customers</span>
                        <span class="bg-white px-4 py-2 rounded-full text-purple-700 font-medium">20% off for returning
                            clients</span>
                        <span class="bg-white px-4 py-2 rounded-full text-purple-700 font-medium">Bulk order
                            discounts</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-indigo-50 border border-indigo-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-indigo-900 font-semibold text-sm">Comprehensive Subject Coverage</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">All Subject Areas We Cover</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From STEM to humanities, our experts cover every major academic discipline
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">

                <div
                    class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">🔬</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">STEM Fields</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Mathematics & Statistics
                        </li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Physics & Chemistry</li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Biology & Life Sciences
                        </li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Environmental Science
                        </li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Astronomy & Geology</li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">💼</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Business & Economics</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Business Management
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Accounting & Finance
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Marketing & Sales
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Economics & Trade
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Entrepreneurship</li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Humanities</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> English & Literature
                        </li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> History & Philosophy
                        </li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> Languages &
                            Linguistics</li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> Art & Music Theory
                        </li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> Cultural Studies</li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">🧠</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Social Sciences</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Psychology & Sociology
                        </li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Political Science</li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Anthropology</li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Education & Pedagogy
                        </li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Social Work</li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-red-50 to-rose-50 rounded-xl p-6 border border-red-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">⚙️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Engineering</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Mechanical Engineering
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Civil Engineering</li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Electrical Engineering
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Chemical Engineering</li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Aerospace Engineering
                        </li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-xl p-6 border border-indigo-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Computer Science</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Programming & Coding
                        </li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Data Science & AI</li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Web Development</li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Cybersecurity</li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Database Management
                        </li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl p-6 border border-pink-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">🏥</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Health Sciences</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Nursing & Healthcare
                        </li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Medicine & Pharmacy</li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Public Health</li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Nutrition & Dietetics
                        </li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Physical Therapy</li>
                    </ul>
                </div>


                <div
                    class="bg-gradient-to-br from-gray-50 to-slate-50 rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">⚖️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Law & Legal Studies</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Constitutional Law</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Criminal Justice</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Business Law</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> International Law</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Legal Research</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-red-50 border border-red-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-red-900 font-semibold text-sm">Serving Students Across USA</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Available Nationwide in the USA</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We proudly serve students from coast to coast with 24/7 online support regardless of your location
                </p>
            </div>

            <div class="max-w-7xl mx-auto">

                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-gray-100 mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Popular Cities We Serve</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🗽</div>
                            <div class="font-semibold text-gray-900 text-sm">New York</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌴</div>
                            <div class="font-semibold text-gray-900 text-sm">Los Angeles</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏙️</div>
                            <div class="font-semibold text-gray-900 text-sm">Chicago</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🤠</div>
                            <div class="font-semibold text-gray-900 text-sm">Houston</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🔔</div>
                            <div class="font-semibold text-gray-900 text-sm">Philadelphia</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌵</div>
                            <div class="font-semibold text-gray-900 text-sm">Phoenix</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌁</div>
                            <div class="font-semibold text-gray-900 text-sm">San Francisco</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏖️</div>
                            <div class="font-semibold text-gray-900 text-sm">Miami</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏛️</div>
                            <div class="font-semibold text-gray-900 text-sm">Washington DC</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🎭</div>
                            <div class="font-semibold text-gray-900 text-sm">Boston</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">☕</div>
                            <div class="font-semibold text-gray-900 text-sm">Seattle</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🎸</div>
                            <div class="font-semibold text-gray-900 text-sm">Austin</div>
                        </div>
                    </div>
                    <p class="text-center text-gray-500 mt-6 text-sm">+ Hundreds more cities across all 50 states</p>
                </div>


                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 East Coast</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>New York</div>
                            <div>Pennsylvania</div>
                            <div>Massachusetts</div>
                            <div>Virginia</div>
                            <div>Florida</div>
                            <div>Maryland</div>
                            <div>New Jersey</div>
                            <div>Georgia</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 Midwest</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>Illinois</div>
                            <div>Ohio</div>
                            <div>Michigan</div>
                            <div>Wisconsin</div>
                            <div>Minnesota</div>
                            <div>Missouri</div>
                            <div>Indiana</div>
                            <div>Iowa</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 West Coast</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>California</div>
                            <div>Washington</div>
                            <div>Oregon</div>
                            <div>Arizona</div>
                            <div>Nevada</div>
                            <div>Colorado</div>
                            <div>Utah</div>
                            <div>Texas</div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-center text-white">
                    <h4 class="text-2xl font-bold mb-3">🇺🇸 All 50 States Covered</h4>
                    <p class="text-lg mb-4">No matter where you are in the United States, our expert help is just a click
                        away</p>
                    <div class="flex flex-wrap gap-3 justify-center text-sm">
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">Online Platform</span>
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">24/7 Available</span>
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">All Time Zones</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-yellow-50 border border-yellow-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-yellow-900 font-semibold text-sm">All Writing Types</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Types of Academic Work We Handle</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From simple essays to complex dissertations, we cover all types of academic writing
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">

                <div
                    class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-4xl">✍️</div>
                        <span
                            class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Popular</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Essays & Papers</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Argumentative essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Persuasive essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Descriptive essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Narrative essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Compare & contrast</li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border-2 border-purple-100 hover:border-purple-300 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-4xl">📄</div>
                        <span
                            class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">Advanced</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Research Papers</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Literature reviews</li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Analytical papers</li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Experimental reports
                        </li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Annotated
                            bibliographies</li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Research proposals</li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border-2 border-emerald-100 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-4xl">🎓</div>
                        <span
                            class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-semibold">Graduate</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Thesis & Dissertation</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Master's thesis</li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> PhD dissertation</li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Dissertation chapters
                        </li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Methodology design
                        </li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Data analysis</li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border-2 border-amber-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Case Studies</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Business case studies
                        </li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Medical case studies
                        </li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Psychology case studies
                        </li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Legal case analysis</li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Social work cases</li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-cyan-50 to-blue-50 rounded-xl p-6 border-2 border-cyan-100 hover:border-cyan-300 hover:shadow-xl transition-all duration-300">
                    <div class="text-4xl mb-4">🔬</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lab Reports</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Chemistry labs</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Physics experiments</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Biology practicals</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Engineering labs</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Scientific documentation
                        </li>
                    </ul>
                </div>


                <div
                    class="group bg-gradient-to-br from-rose-50 to-red-50 rounded-xl p-6 border-2 border-rose-100 hover:border-rose-300 hover:shadow-xl transition-all duration-300">
                    <div class="text-4xl mb-4">📋</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Other Academic Work</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Book/article reviews</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Reflective writings</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Discussion posts</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Presentations/slides</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Admission essays</li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-600 mb-6">Can't find your assignment type? <a
                        href="{{ route('assignments.create') }}"
                        class="text-blue-600 hover:text-blue-700 font-semibold">Contact us</a> - we handle custom requests
                    too!</p>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-br from-slate-900 to-gray-900 text-white relative overflow-hidden">

        <div class="absolute inset-0 opacity-5">
            <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-purple-500 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-white font-semibold text-sm">Your Security is Our Priority</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Trust & Safety Measures</h2>
                <p class="text-xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    We implement industry-leading security measures to protect your privacy and ensure safe transactions
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto mb-12">

                <div
                    class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300">
                    <div class="text-5xl mb-4">🔒</div>
                    <h3 class="text-xl font-bold mb-3">SSL Encryption</h3>
                    <p class="text-white/80 text-sm leading-relaxed">
                        256-bit SSL encryption protects all your data during transmission and storage
                    </p>
                </div>


                <div
                    class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300">
                    <div class="text-5xl mb-4">💳</div>
                    <h3 class="text-xl font-bold mb-3">Secure Payments</h3>
                    <p class="text-white/80 text-sm leading-relaxed">
                        PCI-DSS compliant payment processing through trusted gateways like Stripe and PayPal
                    </p>
                </div>


                <div
                    class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300">
                    <div class="text-5xl mb-4">🛡️</div>
                    <h3 class="text-xl font-bold mb-3">Privacy Protection</h3>
                    <p class="text-white/80 text-sm leading-relaxed">
                        We never share your personal information with third parties. GDPR compliant.
                    </p>
                </div>


                <div
                    class="bg-white/10 backdrop-blur-sm rounded-xl p-6 border border-white/20 hover:bg-white/15 transition-all duration-300">
                    <div class="text-5xl mb-4">🗄️</div>
                    <h3 class="text-xl font-bold mb-3">Data Security</h3>
                    <p class="text-white/80 text-sm leading-relaxed">
                        Regular backups and secure data centers ensure your information is always protected
                    </p>
                </div>
            </div>


            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border border-white/20">
                <h3 class="text-2xl font-bold mb-8 text-center">Trusted & Verified</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="bg-white/20 rounded-lg p-4 mb-3">
                            <div class="text-3xl">✅</div>
                        </div>
                        <p class="text-sm font-semibold">SSL Certified</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white/20 rounded-lg p-4 mb-3">
                            <div class="text-3xl">🏆</div>
                        </div>
                        <p class="text-sm font-semibold">BBB Accredited</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white/20 rounded-lg p-4 mb-3">
                            <div class="text-3xl">⭐</div>
                        </div>
                        <p class="text-sm font-semibold">4.9/5 Trustpilot</p>
                    </div>
                    <div class="text-center">
                        <div class="bg-white/20 rounded-lg p-4 mb-3">
                            <div class="text-3xl">🔐</div>
                        </div>
                        <p class="text-sm font-semibold">GDPR Compliant</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 max-w-4xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Everything you need to know about Assignment Help USA</p>
            </div>

            <div class="space-y-6">

                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Is Assignment Help USA legit and safe to use?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Yes! Assignment Help USA is a trusted platform used by over 50,000 college students across the USA.
                        We use
                        secure payment processing, encrypted communications, and guarantee 100% confidentiality.
                    </p>
                </div>


                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">How much does it cost?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Prices start from $15 per page for assignment help and $25 per task for programming help. The final
                        cost depends on complexity, deadline, and length. We offer student-friendly pricing and discounts
                        for returning customers.
                    </p>
                </div>


                <div class="bg-white rounded-xl p-6 shadow-md">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">How fast can you complete my assignment?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We offer flexible deadlines from 24 hours to several weeks. For urgent assignments, we have express
                        delivery options available. Most assignments are completed within 3-5 days.
                    </p>
                </div>


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
