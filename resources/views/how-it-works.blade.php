@extends('layouts.app')

@section('title', 'How It Works - Step-by-Step Process | Trending Tutor')
@section('description',
    'Learn how our expert programming help service works. Simple 4-step process from submitting
    requirements to receiving your completed project with documentation and support.')
@section('keywords',
    'how it works, programming help process, coding assistance steps, project submission, expert
    assignment, development process, delivery timeline')

@section('content')
    <!-- Structured Data for How It Works -->
    {{-- <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HowTo",
        "name": "How to Get Programming Help",
        "description": "Step-by-step guide to getting expert programming assistance",
        "totalTime": "PT1H",
        "supply": [
            {
                "@type": "HowToSupply",
                "name": "Project Requirements"
            },
            {
                "@type": "HowToSupply",
                "name": "Programming Language Details"
            }
        ],
        "step": [
            @foreach($steps as $index => $step)
            {
                "@type": "HowToStep",
                "position": {{ $step['step'] }},
                "name": "{{ $step['title'] }}",
                "text": "{{ $step['description'] }}",
                "estimatedCost": {
                    "@type": "MonetaryAmount",
                    "currency": "USD",
                    "value": "25"
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script> --}}

    <!-- Hero Section with Animated Background -->
    <header class="relative overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 text-white">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Floating Code Snippets -->
            <div class="absolute top-20 left-10 opacity-20 animate-float-slow">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono">
                    <span class="text-green-400">def</span> <span class="text-blue-300">solve_problem</span>():
                </div>
            </div>
            <div class="absolute top-40 right-20 opacity-20 animate-float-delayed">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono">
                    <span class="text-orange-400">console.log</span>(<span class="text-green-300">"Success!"</span>);
                </div>
            </div>
            <div class="absolute bottom-40 left-1/4 opacity-20 animate-float">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono">
                    <span class="text-purple-400">&lt;div</span> <span class="text-blue-300">className</span>=<span
                        class="text-green-300">"app"</span><span class="text-purple-400">&gt;</span>
                </div>
            </div>

            <!-- Geometric Shapes -->
            <div
                class="absolute top-1/4 right-1/4 w-32 h-32 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-full animate-pulse-slow">
            </div>
            <div
                class="absolute bottom-1/3 left-1/3 w-20 h-20 bg-gradient-to-br from-pink-500/20 to-red-500/20 rounded-full animate-bounce-slow">
            </div>
            <div
                class="absolute top-1/2 left-1/6 w-16 h-16 bg-gradient-to-br from-green-500/20 to-teal-500/20 transform rotate-45 animate-spin-slow">
            </div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-24 lg:py-32">
            <div class="text-center max-w-4xl mx-auto">
                <!-- Badge -->
                <div
                    class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-full text-sm font-bold mb-8 animate-fade-in-up">
                    <span class="mr-3 text-xl animate-bounce">⚡</span>
                    SIMPLE & EFFICIENT PROCESS
                </div>

                <!-- Main Title -->
                <h1
                    class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight animate-fade-in-up animation-delay-200">
                    How Our Programming <br>
                    <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                        Help Works
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-200 mb-12 leading-relaxed animate-fade-in-up animation-delay-400">
                    Get expert programming assistance in just 4 simple steps. <br>
                    From submission to delivery, we make it seamless and stress-free.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center animate-fade-in-up animation-delay-600">
                    <a href="{{ route('assignments.create') }}"
                        class="group inline-flex items-center justify-center bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-cyan-500/25">
                        <span class="mr-3 text-2xl">🚀</span>
                        Start Your Project
                        <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#process"
                        class="inline-flex items-center justify-center border-2 border-white/30 text-white hover:bg-white hover:text-gray-900 px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 backdrop-blur-sm">
                        <span class="mr-3 text-2xl">👀</span>
                        See How It Works
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-8 h-12 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </header>

    <!-- Interactive Process Steps -->
    <section id="process" class="py-24 bg-gray-50 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-purple-50/50"></div>
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Enhanced Section Header -->
            <div class="text-center mb-20 relative">
                <!-- Background Decorative Elements -->
                {{-- <div class="absolute inset-0 flex items-center justify-center opacity-5">
                    <div class="text-9xl font-black text-gray-900 select-none">01234</div>
                </div> --}}

                <!-- Floating Icons -->
                <div class="absolute top-0 left-1/4 opacity-20 animate-float-slow">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl flex items-center justify-center transform rotate-12">
                        <span class="text-white text-xl">💡</span>
                    </div>
                </div>
                <div class="absolute top-10 right-1/4 opacity-20 animate-float-delayed">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-purple-400 to-pink-500 rounded-2xl flex items-center justify-center transform -rotate-12">
                        <span class="text-white text-xl">⚡</span>
                    </div>
                </div>
                <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 opacity-20 animate-pulse-slow">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center">
                        <span class="text-white text-sm">✨</span>
                    </div>
                </div>

                <!-- Enhanced Badge with Animation -->
                <div class="relative inline-block mb-8">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full blur-xl opacity-30 animate-pulse-slow">
                    </div>
                    <div
                        class="relative inline-flex items-center bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white px-10 py-5 rounded-full text-sm font-bold shadow-2xl backdrop-blur-sm border border-white/20 animate-fade-in-up">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-blue-400/20 to-purple-400/20 rounded-full animate-gradient-shift">
                        </div>
                        <span class="relative mr-4 text-2xl animate-bounce">📋</span>
                        <span class="relative text-lg tracking-wider">SIMPLIFIED 4-STEP PROCESS</span>
                        <div class="absolute -right-2 -top-2 w-4 h-4 bg-green-400 rounded-full animate-ping"></div>
                        <div class="absolute -right-2 -top-2 w-4 h-4 bg-green-400 rounded-full"></div>
                    </div>
                </div>

                <!-- Enhanced Title with Staggered Animation -->
                <h2 class="text-4xl md:text-5xl lg:text-7xl font-black text-gray-900 mb-8 leading-tight relative">
                    <span class="inline-block animate-fade-in-up animation-delay-200">Your</span>
                    <span class="inline-block animate-fade-in-up animation-delay-400">Journey</span>
                    <span class="inline-block animate-fade-in-up animation-delay-600">to</span>
                    <br>
                    <span class="relative inline-block animate-fade-in-up animation-delay-800">
                        <span
                            class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                            Programming Success
                        </span>
                    </span>
                </h2>

                <!-- Enhanced Description with Icons -->
                <div class="max-w-4xl mx-auto animate-fade-in-up animation-delay-1000">
                    <p class="text-xl md:text-2xl text-gray-600 mb-8 leading-relaxed">
                        Our streamlined process ensures you get high-quality programming help quickly and efficiently.
                    </p>

                    <!-- Feature Highlights -->
                    <div class="flex flex-wrap justify-center gap-6 mt-8">
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">🚀</span>
                            <span class="text-gray-700 font-semibold">Fast Delivery</span>
                        </div>
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">👥</span>
                            <span class="text-gray-700 font-semibold">Expert Team</span>
                        </div>
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">🎯</span>
                            <span class="text-gray-700 font-semibold">100% Quality</span>
                        </div>
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">🔒</span>
                            <span class="text-gray-700 font-semibold">Secure & Private</span>
                        </div>
                    </div>
                </div>

                <!-- Progress Indicator -->
                <div class="mt-12 flex justify-center">
                    <div class="flex items-center space-x-4">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                            <div class="w-3 h-3 bg-purple-500 rounded-full animate-pulse animation-delay-200"></div>
                            <div class="w-3 h-3 bg-pink-500 rounded-full animate-pulse animation-delay-400"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse animation-delay-600"></div>
                        </div>
                        <span class="text-gray-500 text-sm font-medium">4 Simple Steps</span>
                    </div>
                </div>
            </div>

            <!-- Enhanced Process Steps -->
            <div class="relative max-w-7xl mx-auto">
                <!-- Animated Connecting Path -->
                <div class="hidden lg:block absolute top-32 left-0 right-0 h-2">
                    <svg class="w-full h-full" viewBox="0 0 1200 100" preserveAspectRatio="none">
                        <defs>
                            <linearGradient id="pathGradient" x1="0%" y1="0%" x2="100%"
                                y2="0%">
                                <stop offset="0%" style="stop-color:#3B82F6;stop-opacity:0.8" />
                                <stop offset="25%" style="stop-color:#8B5CF6;stop-opacity:0.8" />
                                <stop offset="50%" style="stop-color:#EC4899;stop-opacity:0.8" />
                                <stop offset="75%" style="stop-color:#10B981;stop-opacity:0.8" />
                                <stop offset="100%" style="stop-color:#F59E0B;stop-opacity:0.8" />
                            </linearGradient>
                        </defs>
                        <path d="M50,50 Q350,20 550,50 T1150,50" stroke="url(#pathGradient)" stroke-width="4"
                            fill="none" stroke-dasharray="20,10" class="animate-pulse-slow" />
                    </svg>
                </div>

                <!-- Steps Grid with Better Layout -->
                <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-8 lg:gap-12">
                    @foreach ($steps as $index => $step)
                        <div class="group relative animate-fade-in-up step-card-{{ $index + 1 }}"
                            style="animation-delay: {{ $index * 0.2 }}s;" x-data="{ expanded: false }">
                            <!-- Step Card with Enhanced Design -->
                            <div
                                class="relative bg-white rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-700 transform hover:-translate-y-6 border border-gray-100 overflow-hidden">
                                <!-- Background Pattern -->
                                <div class="absolute top-0 right-0 w-32 h-32 opacity-5">
                                    @if ($index == 0)
                                        <div class="text-6xl font-black text-blue-500 transform rotate-12 mt-4 mr-4">
                                            {{ $step['step'] }}</div>
                                    @elseif($index == 1)
                                        <div class="text-6xl font-black text-purple-500 transform rotate-12 mt-4 mr-4">
                                            {{ $step['step'] }}</div>
                                    @elseif($index == 2)
                                        <div class="text-6xl font-black text-rose-500 transform rotate-12 mt-4 mr-4">
                                            {{ $step['step'] }}</div>
                                    @else
                                        <div class="text-6xl font-black text-emerald-500 transform rotate-12 mt-4 mr-4">
                                            {{ $step['step'] }}</div>
                                    @endif
                                </div>

                                <!-- Card Content -->
                                <div class="relative p-8">
                                    <!-- Step Number with Enhanced Design -->
                                    <div class="relative mb-8">
                                        @if ($index == 0)
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full opacity-20 scale-150 blur-xl">
                                            </div>
                                            <div
                                                class="relative w-24 h-24 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-2xl">
                                                <span class="text-4xl font-black text-white">{{ $step['step'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-full border-4 border-blue-500/30 animate-ping">
                                                </div>
                                            </div>
                                        @elseif($index == 1)
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full opacity-20 scale-150 blur-xl">
                                            </div>
                                            <div
                                                class="relative w-24 h-24 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-2xl">
                                                <span class="text-4xl font-black text-white">{{ $step['step'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-full border-4 border-purple-500/30 animate-ping">
                                                </div>
                                            </div>
                                        @elseif($index == 2)
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-rose-500 to-rose-600 rounded-full opacity-20 scale-150 blur-xl">
                                            </div>
                                            <div
                                                class="relative w-24 h-24 bg-gradient-to-br from-rose-500 to-rose-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-2xl">
                                                <span class="text-4xl font-black text-white">{{ $step['step'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-full border-4 border-rose-500/30 animate-ping">
                                                </div>
                                            </div>
                                        @else
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full opacity-20 scale-150 blur-xl">
                                            </div>
                                            <div
                                                class="relative w-24 h-24 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-500 shadow-2xl">
                                                <span class="text-4xl font-black text-white">{{ $step['step'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-full border-4 border-emerald-500/30 animate-ping">
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Connecting Arrow (except for last step) -->
                                        @if ($index < 3)
                                            <div
                                                class="hidden xl:block absolute top-1/2 -right-6 transform -translate-y-1/2">
                                                @if ($index == 0)
                                                    <div
                                                        class="w-12 h-1 bg-gradient-to-r from-blue-500 to-transparent opacity-30">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0 w-0 h-0 border-l-4 border-l-blue-500 border-t-2 border-b-2 border-t-transparent border-b-transparent opacity-30">
                                                    </div>
                                                @elseif($index == 1)
                                                    <div
                                                        class="w-12 h-1 bg-gradient-to-r from-purple-500 to-transparent opacity-30">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0 w-0 h-0 border-l-4 border-l-purple-500 border-t-2 border-b-2 border-t-transparent border-b-transparent opacity-30">
                                                    </div>
                                                @else
                                                    <div
                                                        class="w-12 h-1 bg-gradient-to-r from-rose-500 to-transparent opacity-30">
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0 w-0 h-0 border-l-4 border-l-rose-500 border-t-2 border-b-2 border-t-transparent border-b-transparent opacity-30">
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Icon with Better Styling -->
                                    <div
                                        class="text-7xl mb-6 text-center transform group-hover:scale-110 transition-transform duration-500 filter drop-shadow-lg">
                                    </div>

                                    <!-- Title with Better Typography -->
                                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center leading-tight">
                                        {{ $step['title'] }}
                                    </h3>

                                    <!-- Description with Better Formatting -->
                                    <p class="text-gray-600 text-center mb-6 leading-relaxed text-base">
                                        {{ $step['description'] }}
                                    </p>

                                    <!-- Enhanced Time Estimate -->
                                    @if ($index == 0)
                                        <div
                                            class="bg-gradient-to-r from-blue-50 to-white rounded-2xl p-4 mb-6 border border-blue-500/10">
                                            <div class="flex items-center justify-center text-blue-500">
                                                <div
                                                    class="w-8 h-8 bg-blue-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($index == 1)
                                        <div
                                            class="bg-gradient-to-r from-purple-50 to-white rounded-2xl p-4 mb-6 border border-purple-500/10">
                                            <div class="flex items-center justify-center text-purple-500">
                                                <div
                                                    class="w-8 h-8 bg-purple-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($index == 2)
                                        <div
                                            class="bg-gradient-to-r from-rose-50 to-white rounded-2xl p-4 mb-6 border border-rose-500/10">
                                            <div class="flex items-center justify-center text-rose-500">
                                                <div
                                                    class="w-8 h-8 bg-rose-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div
                                            class="bg-gradient-to-r from-emerald-50 to-white rounded-2xl p-4 mb-6 border border-emerald-500/10">
                                            <div class="flex items-center justify-center text-emerald-500">
                                                <div
                                                    class="w-8 h-8 bg-emerald-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Enhanced Expand Button -->
                                    @if ($index == 0)
                                        <button @click="expanded = !expanded"
                                            class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-500/90 hover:to-blue-600/90 text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 flex items-center justify-center group-hover:shadow-2xl transform hover:scale-105">
                                            <span x-text="expanded ? 'Hide Details' : 'View Details'"
                                                class="mr-2"></span>
                                            <svg x-bind:class="expanded ? 'rotate-180' : ''"
                                                class="w-5 h-5 transition-transform duration-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                    @elseif($index == 1)
                                        <button @click="expanded = !expanded"
                                            class="w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-500/90 hover:to-purple-600/90 text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 flex items-center justify-center group-hover:shadow-2xl transform hover:scale-105">
                                            <span x-text="expanded ? 'Hide Details' : 'View Details'"
                                                class="mr-2"></span>
                                            <svg x-bind:class="expanded ? 'rotate-180' : ''"
                                                class="w-5 h-5 transition-transform duration-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                    @elseif($index == 2)
                                        <button @click="expanded = !expanded"
                                            class="w-full bg-gradient-to-r from-rose-500 to-rose-600 hover:from-rose-500/90 hover:to-rose-600/90 text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 flex items-center justify-center group-hover:shadow-2xl transform hover:scale-105">
                                            <span x-text="expanded ? 'Hide Details' : 'View Details'"
                                                class="mr-2"></span>
                                            <svg x-bind:class="expanded ? 'rotate-180' : ''"
                                                class="w-5 h-5 transition-transform duration-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                    @else
                                        <button @click="expanded = !expanded"
                                            class="w-full bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-500/90 hover:to-emerald-600/90 text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 flex items-center justify-center group-hover:shadow-2xl transform hover:scale-105">
                                            <span x-text="expanded ? 'Hide Details' : 'View Details'"
                                                class="mr-2"></span>
                                            <svg x-bind:class="expanded ? 'rotate-180' : ''"
                                                class="w-5 h-5 transition-transform duration-300" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </button>
                                    @endif
                                </div>

                                <!-- Gradient Border Effect -->
                                @if ($index == 0)
                                    <div
                                        class="absolute inset-0 rounded-3xl bg-gradient-to-r from-blue-500/0 via-blue-500/0 to-blue-600/0 group-hover:from-blue-500/10 group-hover:via-blue-500/5 group-hover:to-blue-600/10 transition-all duration-500 pointer-events-none">
                                    </div>
                                @elseif($index == 1)
                                    <div
                                        class="absolute inset-0 rounded-3xl bg-gradient-to-r from-purple-500/0 via-purple-500/0 to-purple-600/0 group-hover:from-purple-500/10 group-hover:via-purple-500/5 group-hover:to-purple-600/10 transition-all duration-500 pointer-events-none">
                                    </div>
                                @elseif($index == 2)
                                    <div
                                        class="absolute inset-0 rounded-3xl bg-gradient-to-r from-rose-500/0 via-rose-500/0 to-rose-600/0 group-hover:from-rose-500/10 group-hover:via-rose-500/5 group-hover:to-rose-600/10 transition-all duration-500 pointer-events-none">
                                    </div>
                                @else
                                    <div
                                        class="absolute inset-0 rounded-3xl bg-gradient-to-r from-emerald-500/0 via-emerald-500/0 to-emerald-600/0 group-hover:from-emerald-500/10 group-hover:via-emerald-500/5 group-hover:to-emerald-600/10 transition-all duration-500 pointer-events-none">
                                    </div>
                                @endif
                            </div>

                            <!-- Enhanced Expandable Details -->
                            <div x-show="expanded" x-transition:enter="transition ease-out duration-300"
                                x-transition:enter-start="opacity-0 transform scale-95 -translate-y-4"
                                x-transition:enter-end="opacity-100 transform scale-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100 translate-y-0"
                                x-transition:leave-end="opacity-0 transform scale-95 -translate-y-4"
                                @if ($index == 0) class="mt-6 bg-gradient-to-br from-blue-50 via-white to-blue-50/50 rounded-3xl p-8 border-2 border-blue-500/20 shadow-xl backdrop-blur-sm">
                                 @elseif($index == 1)
                                     class="mt-6 bg-gradient-to-br from-purple-50 via-white to-purple-50/50 rounded-3xl p-8 border-2 border-purple-500/20 shadow-xl backdrop-blur-sm">
                                 @elseif($index == 2)
                                     class="mt-6 bg-gradient-to-br from-rose-50 via-white to-rose-50/50 rounded-3xl p-8 border-2 border-rose-500/20 shadow-xl backdrop-blur-sm">
                                 @else
                                     class="mt-6 bg-gradient-to-br from-emerald-50 via-white to-emerald-50/50 rounded-3xl p-8 border-2 border-emerald-500/20 shadow-xl backdrop-blur-sm"> @endif
                                <div class="flex items-center mb-6">
                                @if ($index == 0)
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4">
                                        <span class="text-white text-lg">✨</span>
                                    </div>
                                @elseif($index == 1)
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-4">
                                        <span class="text-white text-lg">✨</span>
                                    </div>
                                @elseif($index == 2)
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-rose-500 to-rose-600 rounded-full flex items-center justify-center mr-4">
                                        <span class="text-white text-lg">✨</span>
                                    </div>
                                @else
                                    <div
                                        class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center mr-4">
                                        <span class="text-white text-lg">✨</span>
                                    </div>
                                @endif
                                <h4 class="text-xl font-black text-gray-900">What's Included:</h4>
                            </div>

                            <div class="grid gap-4">
                                @foreach ($step['details'] as $detail)
                                    <div class="flex items-start group/item">
                                        @if ($index == 0)
                                            <div
                                                class="w-6 h-6 bg-gradient-to-br from-blue-500 to-blue-600 rounded-full flex items-center justify-center mr-4 mt-0.5 group-hover/item:scale-110 transition-transform">
                                                <span class="text-white text-xs">✓</span>
                                            </div>
                                        @elseif($index == 1)
                                            <div
                                                class="w-6 h-6 bg-gradient-to-br from-purple-500 to-purple-600 rounded-full flex items-center justify-center mr-4 mt-0.5 group-hover/item:scale-110 transition-transform">
                                                <span class="text-white text-xs">✓</span>
                                            </div>
                                        @elseif($index == 2)
                                            <div
                                                class="w-6 h-6 bg-gradient-to-br from-rose-500 to-rose-600 rounded-full flex items-center justify-center mr-4 mt-0.5 group-hover/item:scale-110 transition-transform">
                                                <span class="text-white text-xs">✓</span>
                                            </div>
                                        @else
                                            <div
                                                class="w-6 h-6 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-full flex items-center justify-center mr-4 mt-0.5 group-hover/item:scale-110 transition-transform">
                                                <span class="text-white text-xs">✓</span>
                                            </div>
                                        @endif
                                        <span class="text-gray-700 leading-relaxed font-medium">{{ $detail }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Progress Indicator -->
                            @if ($index == 0)
                                <div class="mt-6 pt-6 border-t border-blue-500/20">
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 font-medium">Step Progress</span>
                                        <span class="text-blue-500 font-bold">{{ $index + 1 }}/4</span>
                                    </div>
                                    <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2 rounded-full"
                                            style="width: {{ (($index + 1) / 4) * 100 }}%"></div>
                                    </div>
                                </div>
                            @elseif($index == 1)
                                <div class="mt-6 pt-6 border-t border-purple-500/20">
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 font-medium">Step Progress</span>
                                        <span class="text-purple-500 font-bold">{{ $index + 1 }}/4</span>
                                    </div>
                                    <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2 rounded-full"
                                            style="width: {{ (($index + 1) / 4) * 100 }}%"></div>
                                    </div>
                                </div>
                            @elseif($index == 2)
                                <div class="mt-6 pt-6 border-t border-rose-500/20">
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 font-medium">Step Progress</span>
                                        <span class="text-rose-500 font-bold">{{ $index + 1 }}/4</span>
                                    </div>
                                    <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-rose-500 to-rose-600 h-2 rounded-full"
                                            style="width: {{ (($index + 1) / 4) * 100 }}%"></div>
                                    </div>
                                </div>
                            @else
                                <div class="mt-6 pt-6 border-t border-emerald-500/20">
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 font-medium">Step Progress</span>
                                        <span class="text-emerald-500 font-bold">{{ $index + 1 }}/4</span>
                                    </div>
                                    <div class="mt-2 w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 h-2 rounded-full"
                                            style="width: {{ (($index + 1) / 4) * 100 }}%"></div>
                                    </div>
                                </div>
                            @endif
                        </div>
                </div>
                @endforeach
            </div>

            <!-- Enhanced Bottom Section -->
            <div class="mt-20 text-center">
                <div
                    class="inline-flex items-center bg-gradient-to-r from-gray-100 to-gray-50 rounded-full px-8 py-4 shadow-lg border border-gray-200">
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600 font-semibold">Complete Process Time:</span>
                        <div class="flex items-center bg-white rounded-full px-4 py-2 shadow-sm">
                            <span class="text-2xl mr-2">⚡</span>
                            <span class="font-black text-xl text-gray-900">1-3 Hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Interactive Features Section -->
    <section class="py-24 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-800 text-white relative overflow-hidden">
        <!-- Enhanced Background Effects with Code Content -->
        <div class="absolute inset-0">
            <!-- Animated Code Snippets -->
            <div class="absolute top-20 left-10 opacity-10 animate-float-slow">
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 text-sm font-mono border border-white/10">
                    <div class="text-green-400 mb-2">// Step 1: Submit Requirements</div>
                    <div class="text-blue-300">function submitProject() {</div>
                    <div class="ml-4 text-orange-300">const project = {</div>
                    <div class="ml-8 text-purple-300">title: "My Assignment",</div>
                    <div class="ml-8 text-cyan-300">deadline: "2024-01-15",</div>
                    <div class="ml-8 text-yellow-300">language: "Python"</div>
                    <div class="ml-4 text-orange-300">};</div>
                    <div class="text-blue-300">}</div>
                </div>
            </div>

            <div class="absolute top-40 right-16 opacity-10 animate-float-delayed">
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 text-sm font-mono border border-white/10">
                    <div class="text-green-400 mb-2"># Step 2: Expert Assignment</div>
                    <div class="text-blue-300">class ExpertMatcher:</div>
                    <div class="ml-4 text-orange-300">def find_best_expert(self, project):</div>
                    <div class="ml-8 text-purple-300">expertise = self.analyze(project)</div>
                    <div class="ml-8 text-cyan-300">return self.match_expert(expertise)</div>
                    <div class="ml-4 text-green-300">expert = matcher.find_best_expert()</div>
                </div>
            </div>

            <div class="absolute bottom-32 left-1/4 opacity-10 animate-float">
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 text-sm font-mono border border-white/10">
                    <div class="text-green-400 mb-2">/* Step 3: Development Process */</div>
                    <div class="text-blue-300">const developmentPipeline = {</div>
                    <div class="ml-4 text-orange-300">coding: () => writeCleanCode(),</div>
                    <div class="ml-4 text-purple-300">testing: () => runAllTests(),</div>
                    <div class="ml-4 text-cyan-300">review: () => qualityCheck(),</div>
                    <div class="ml-4 text-yellow-300">deploy: () => deliverProject()</div>
                    <div class="text-blue-300">};</div>
                </div>
            </div>

            <div class="absolute bottom-20 right-8 opacity-10 animate-float-slow">
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 text-sm font-mono border border-white/10">
                    <div class="text-green-400 mb-2">-- Step 4: Final Delivery</div>
                    <div class="text-blue-300">SELECT * FROM completed_projects</div>
                    <div class="text-orange-300">WHERE quality_score = 'Excellent'</div>
                    <div class="text-purple-300">AND client_satisfaction = 100</div>
                    <div class="text-cyan-300">AND delivery_time <= deadline;</div>
                            <div class="text-green-300">-- ✓ Project Successfully Delivered!</div>
                    </div>
                </div>

                <div class="absolute top-1/2 left-8 opacity-8 animate-float-delayed">
                    <div class="bg-white/5 backdrop-blur-sm rounded-lg p-3 text-xs font-mono border border-white/10">
                        <div class="text-rose-400">if (project.completed) {</div>
                        <div class="ml-2 text-green-400">notify.client("Ready for review!");</div>
                        <div class="ml-2 text-blue-400">generateDocumentation();</div>
                        <div class="ml-2 text-yellow-400">sendDeliveryEmail();</div>
                        <div class="text-rose-400">}</div>
                    </div>
                </div>

                <div class="absolute top-16 right-1/3 opacity-8 animate-float">
                    <div class="bg-white/5 backdrop-blur-sm rounded-lg p-3 text-xs font-mono border border-white/10">
                        <div class="text-emerald-400">export const success = {</div>
                        <div class="ml-2 text-blue-400">rate: "98.5%",</div>
                        <div class="ml-2 text-orange-400">delivery: "On-time",</div>
                        <div class="ml-2 text-purple-400">support: "24/7"</div>
                        <div class="text-emerald-400">};</div>
                    </div>
                </div>

                <!-- Enhanced Geometric Shapes -->
                <div
                    class="absolute top-20 left-20 w-40 h-40 bg-gradient-to-br from-blue-500/15 to-cyan-500/15 rounded-full blur-3xl animate-pulse-slow">
                </div>
                <div
                    class="absolute bottom-20 right-20 w-60 h-60 bg-gradient-to-br from-purple-500/15 to-pink-500/15 rounded-full blur-3xl animate-pulse-slow animation-delay-1000">
                </div>
                <div
                    class="absolute top-1/2 right-1/4 w-32 h-32 bg-gradient-to-br from-green-500/10 to-emerald-500/10 rounded-full blur-2xl animate-pulse-slow animation-delay-600">
                </div>
                <div
                    class="absolute bottom-1/3 left-1/3 w-24 h-24 bg-gradient-to-br from-orange-500/10 to-yellow-500/10 rounded-full blur-xl animate-bounce-slow">
                </div>

                <!-- Floating Particles -->
                <div class="absolute top-32 left-1/2 w-2 h-2 bg-blue-400/40 rounded-full animate-ping animation-delay-200">
                </div>
                <div
                    class="absolute bottom-40 left-2/3 w-3 h-3 bg-purple-400/40 rounded-full animate-pulse animation-delay-800">
                </div>
                <div
                    class="absolute top-2/3 right-1/3 w-1 h-1 bg-green-400/40 rounded-full animate-bounce animation-delay-400">
                </div>

                <!-- Matrix-style falling code effect -->
                <div class="absolute inset-0 opacity-5">
                    <div class="absolute top-0 left-1/6 animate-float-slow animation-delay-1000">
                        <div class="text-green-400 font-mono text-xs">01001000 01100101 01101100 01110000</div>
                    </div>
                    <div class="absolute top-20 left-2/3 animate-float animation-delay-600">
                        <div class="text-blue-400 font-mono text-xs">function() { return success; }</div>
                    </div>
                    <div class="absolute bottom-32 right-1/6 animate-float-delayed">
                        <div class="text-purple-400 font-mono text-xs">&lt;solution&gt;delivered&lt;/solution&gt;</div>
                    </div>
                </div>

                <!-- Grid Pattern Overlay -->
                <div class="absolute inset-0 opacity-5"
                    style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0); background-size: 40px 40px;">
                </div>
            </div>

            <div class="container mx-auto px-4 relative z-10">
                <!-- Section Header -->
                <div class="text-center mb-20">
                    <div
                        class="inline-flex items-center bg-gradient-to-r from-green-400 to-blue-500 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                        <span class="mr-3 text-xl">🌟</span>
                        WHY CHOOSE US
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black mb-8 leading-tight">
                        Features That Make Us
                        <br>
                        <span
                            class="bg-gradient-to-r from-green-400 to-blue-400 bg-clip-text text-transparent">Different</span>
                    </h2>
                </div>

                <!-- Enhanced Features Grid -->
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @foreach ($features as $index => $feature)
                        <div class="group relative" x-data="{ hovered: false }" @mouseenter="hovered = true"
                            @mouseleave="hovered = false">

                            <!-- Enhanced Card with Better Animations -->
                            <div class="relative h-full">
                                <!-- Background Glow Effect -->
                                @if ($feature['color'] == 'blue')
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-blue-500/20 to-blue-600/20 rounded-3xl blur-xl scale-75 group-hover:scale-100 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    </div>
                                @elseif($feature['color'] == 'green')
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-green-500/20 to-green-600/20 rounded-3xl blur-xl scale-75 group-hover:scale-100 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    </div>
                                @elseif($feature['color'] == 'purple')
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-purple-500/20 to-purple-600/20 rounded-3xl blur-xl scale-75 group-hover:scale-100 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    </div>
                                @else
                                    <div
                                        class="absolute inset-0 bg-gradient-to-br from-orange-500/20 to-orange-600/20 rounded-3xl blur-xl scale-75 group-hover:scale-100 transition-all duration-500 opacity-0 group-hover:opacity-100">
                                    </div>
                                @endif

                                <!-- Main Card -->
                                <div class="relative bg-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 border border-white/10 h-full flex flex-col"
                                    @if ($feature['color'] == 'blue') :class="hovered ? 'border-blue-400/50 shadow-2xl shadow-blue-500/25' : ''"
                                 @elseif($feature['color'] == 'green')
                                     :class="hovered ? 'border-green-400/50 shadow-2xl shadow-green-500/25' : ''"
                                 @elseif($feature['color'] == 'purple')
                                     :class="hovered ? 'border-purple-400/50 shadow-2xl shadow-purple-500/25' : ''"
                                 @else
                                     :class="hovered ? 'border-orange-400/50 shadow-2xl shadow-orange-500/25' : ''" @endif>

                                    <!-- Floating Particles -->
                                    <div class="absolute inset-0 overflow-hidden rounded-3xl pointer-events-none">
                                        <div class="absolute top-4 right-4 w-2 h-2 bg-white/30 rounded-full animate-ping"
                                            style="animation-delay: {{ $index * 0.5 }}s"></div>
                                        <div class="absolute bottom-6 left-6 w-1 h-1 bg-white/40 rounded-full animate-pulse"
                                            style="animation-delay: {{ $index * 0.3 }}s"></div>
                                        <div class="absolute top-1/2 left-4 w-1.5 h-1.5 bg-white/20 rounded-full animate-bounce"
                                            style="animation-delay: {{ $index * 0.7 }}s"></div>
                                    </div>

                                    <!-- Enhanced Icon with Better Effects -->
                                    <div class="relative mb-8">
                                        @if ($feature['color'] == 'blue')
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl opacity-30 scale-125 blur-lg group-hover:opacity-50 transition-all duration-300">
                                            </div>
                                            <div
                                                class="relative w-20 h-20 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-2xl shadow-blue-500/50">
                                                <span
                                                    class="text-4xl filter drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300">{{ $feature['icon'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-2xl border-2 border-blue-400/50 animate-pulse">
                                                </div>
                                            </div>
                                        @elseif($feature['color'] == 'green')
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl opacity-30 scale-125 blur-lg group-hover:opacity-50 transition-all duration-300">
                                            </div>
                                            <div
                                                class="relative w-20 h-20 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-2xl shadow-green-500/50">
                                                <span
                                                    class="text-4xl filter drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300">{{ $feature['icon'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-2xl border-2 border-green-400/50 animate-pulse">
                                                </div>
                                            </div>
                                        @elseif($feature['color'] == 'purple')
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl opacity-30 scale-125 blur-lg group-hover:opacity-50 transition-all duration-300">
                                            </div>
                                            <div
                                                class="relative w-20 h-20 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-2xl shadow-purple-500/50">
                                                <span
                                                    class="text-4xl filter drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300">{{ $feature['icon'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-2xl border-2 border-purple-400/50 animate-pulse">
                                                </div>
                                            </div>
                                        @else
                                            <div
                                                class="absolute inset-0 bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl opacity-30 scale-125 blur-lg group-hover:opacity-50 transition-all duration-300">
                                            </div>
                                            <div
                                                class="relative w-20 h-20 bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl flex items-center justify-center group-hover:scale-125 group-hover:rotate-12 transition-all duration-500 shadow-2xl shadow-orange-500/50">
                                                <span
                                                    class="text-4xl filter drop-shadow-lg transform group-hover:scale-110 transition-transform duration-300">{{ $feature['icon'] }}</span>
                                                <div
                                                    class="absolute inset-0 rounded-2xl border-2 border-orange-400/50 animate-pulse">
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Enhanced Content -->
                                    <div class="flex-grow flex flex-col">
                                        <h3 class="text-2xl font-black mb-4 text-white leading-tight group-hover:text-transparent"
                                            @if ($feature['color'] == 'blue') :class="hovered ? 'bg-gradient-to-r from-blue-400 to-blue-300 bg-clip-text' : ''"
                                        @elseif($feature['color'] == 'green')
                                            :class="hovered ? 'bg-gradient-to-r from-green-400 to-green-300 bg-clip-text' : ''"
                                        @elseif($feature['color'] == 'purple')
                                            :class="hovered ? 'bg-gradient-to-r from-purple-400 to-purple-300 bg-clip-text' : ''"
                                        @else
                                            :class="hovered ? 'bg-gradient-to-r from-orange-400 to-orange-300 bg-clip-text' : ''" @endif>
                                            {{ $feature['title'] }}
                                        </h3>

                                        <p
                                            class="text-gray-300 leading-relaxed text-lg flex-grow group-hover:text-gray-100 transition-colors duration-300">
                                            {{ $feature['description'] }}
                                        </p>
                                    </div>

                                    <!-- Interactive Bottom Element -->
                                    <div
                                        class="mt-6 pt-4 border-t border-white/10 group-hover:border-white/30 transition-colors duration-300">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center space-x-2">
                                                @if ($feature['color'] == 'blue')
                                                    <div class="w-3 h-3 bg-blue-400 rounded-full animate-pulse"></div>
                                                    <span class="text-sm text-blue-300 font-medium">Always Available</span>
                                                @elseif($feature['color'] == 'green')
                                                    <div class="w-3 h-3 bg-green-400 rounded-full animate-pulse"></div>
                                                    <span class="text-sm text-green-300 font-medium">Guaranteed</span>
                                                @elseif($feature['color'] == 'purple')
                                                    <div class="w-3 h-3 bg-purple-400 rounded-full animate-pulse"></div>
                                                    <span class="text-sm text-purple-300 font-medium">Verified
                                                        Quality</span>
                                                @else
                                                    <div class="w-3 h-3 bg-orange-400 rounded-full animate-pulse"></div>
                                                    <span class="text-sm text-orange-300 font-medium">Unlimited</span>
                                                @endif
                                            </div>
                                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                <svg class="w-5 h-5 text-white transform group-hover:translate-x-1 transition-transform duration-300"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Enhanced Gradient Overlay -->
                                    @if ($feature['color'] == 'blue')
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-blue-600/0 group-hover:from-blue-500/10 group-hover:to-blue-600/10 rounded-3xl transition-all duration-500 pointer-events-none">
                                        </div>
                                    @elseif($feature['color'] == 'green')
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-green-500/0 to-green-600/0 group-hover:from-green-500/10 group-hover:to-green-600/10 rounded-3xl transition-all duration-500 pointer-events-none">
                                        </div>
                                    @elseif($feature['color'] == 'purple')
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-purple-500/0 to-purple-600/0 group-hover:from-purple-500/10 group-hover:to-purple-600/10 rounded-3xl transition-all duration-500 pointer-events-none">
                                        </div>
                                    @else
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-orange-500/0 to-orange-600/0 group-hover:from-orange-500/10 group-hover:to-orange-600/10 rounded-3xl transition-all duration-500 pointer-events-none">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>

    <!-- Stats Counter Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Trusted by Students Worldwide</h3>
                <p class="text-xl text-gray-600">Our track record speaks for itself</p>
            </div>

            <!-- Animated Counter -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8" x-data="counters()" x-init="startCounting()">
                @foreach ($stats as $index => $stat)
                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">{{ $stat['icon'] }}</span>
                        </div>
                        <div x-text="counters[{{ $index }}]" class="text-4xl font-black text-gray-900 mb-2"></div>
                        <div class="text-gray-600 font-medium">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Student Reviews Section -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-40 h-40 bg-gradient-to-br from-blue-200/30 to-purple-200/30 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-16 w-60 h-60 bg-gradient-to-br from-purple-200/30 to-pink-200/30 rounded-full blur-3xl animate-pulse-slow animation-delay-1000"></div>
            <div class="absolute top-1/2 left-1/3 w-32 h-32 bg-gradient-to-br from-cyan-200/20 to-blue-200/20 rounded-full blur-2xl animate-bounce-slow"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-500 to-purple-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">💬</span>
                    STUDENT TESTIMONIALS
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 leading-tight">
                    What Our Students
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Say About Us</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Real feedback from real students who achieved academic success with our programming help
                </p>
            </div>

            <!-- Enhanced Reviews Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                @foreach ($reviews as $index => $review)
                    <div class="group relative"
                         x-data="{ expanded: false }"
                         x-intersect.once="$el.classList.add('animate-fade-in-up')"
                         style="animation-delay: {{ $index * 0.2 }}s">

                        <!-- Review Card -->
                        <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 h-full flex flex-col relative overflow-hidden">

                            <!-- Background Pattern -->
                            <div class="absolute top-0 right-0 w-32 h-32 opacity-5">
                                <svg viewBox="0 0 100 100" class="w-full h-full">
                                    <polygon points="0,0 100,0 50,50" fill="currentColor" class="text-blue-500"/>
                                </svg>
                            </div>

                            <!-- Rating Stars -->
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex space-x-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg class="w-5 h-5 {{ $i <= $review['rating'] ? 'text-yellow-400' : 'text-gray-300' }} transform hover:scale-125 transition-transform duration-200"
                                             fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.286-3.957a1 1 0 00-.364-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/>
                                        </svg>
                                    @endfor
                                </div>
                                @if ($review['verified'])
                                    <div class="flex items-center bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">
                                        <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                        </svg>
                                        Verified
                                    </div>
                                @endif
                            </div>

                            <!-- Review Content -->
                            <div class="flex-grow">
                                <blockquote class="text-gray-700 leading-relaxed mb-6 text-lg">
                                    <span class="text-4xl text-blue-500 opacity-30 leading-none">"</span>
                                    <span x-show="!expanded">{{ Str::limit($review['review'], 120) }}</span>
                                    <span x-show="expanded" x-transition>{{ $review['review'] }}</span>
                                    <span class="text-4xl text-blue-500 opacity-30 leading-none">"</span>
                                </blockquote>

                                @if (strlen($review['review']) > 120)
                                    <button @click="expanded = !expanded"
                                            class="text-blue-600 hover:text-blue-700 font-semibold text-sm mb-4 transition-colors duration-200">
                                        <span x-text="expanded ? 'Show Less' : 'Read More'"></span>
                                        <svg x-bind:class="expanded ? 'rotate-180' : ''"
                                             class="inline w-4 h-4 ml-1 transition-transform duration-200"
                                             fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                @endif
                            </div>

                            <!-- Student Info -->
                            <div class="border-t border-gray-100 pt-6 mt-auto">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-2xl shadow-lg">
                                            {{ $review['avatar'] }}
                                        </div>
                                        <div>
                                            <div class="font-bold text-gray-900">{{ $review['name'] }}</div>
                                            <div class="text-sm text-gray-600">{{ $review['role'] }}</div>
                                            <div class="text-xs text-blue-600 font-medium">{{ $review['university'] }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Details -->
                                <div class="mt-4 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-4">
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div>
                                            <div class="text-gray-500 font-medium">Project</div>
                                            <div class="text-gray-900 font-semibold">{{ $review['project'] }}</div>
                                        </div>
                                        <div>
                                            <div class="text-gray-500 font-medium">Completed in</div>
                                            <div class="text-green-600 font-semibold">{{ $review['completion_time'] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hover Gradient Effect -->
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-purple-500/0 group-hover:from-blue-500/5 group-hover:to-purple-500/5 rounded-3xl transition-all duration-300 pointer-events-none"></div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Overall Rating Summary -->
            <div class="text-center bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                <div class="grid md:grid-cols-3 gap-8 items-center">
                    <!-- Overall Rating -->
                    <div class="text-center">
                        <div class="text-6xl font-black text-gray-900 mb-2">4.9</div>
                        <div class="flex justify-center space-x-1 mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.286-3.957a1 1 0 00-.364-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/>
                                </svg>
                            @endfor
                        </div>
                        <div class="text-gray-600 font-medium">Overall Rating</div>
                    </div>

                    <!-- Divider -->
                    <div class="hidden md:block w-px h-16 bg-gradient-to-b from-transparent via-gray-300 to-transparent mx-auto"></div>

                    <!-- Reviews Stats -->
                    <div class="md:col-span-1 text-center">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <div class="text-3xl font-black text-blue-600">1,250+</div>
                                <div class="text-gray-600 font-medium">Happy Students</div>
                            </div>
                            <div>
                                <div class="text-3xl font-black text-green-600">98.5%</div>
                                <div class="text-gray-600 font-medium">Satisfaction Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Show More Reviews Button -->
            <div class="text-center mt-16">
                <div class="inline-flex flex-col items-center">
                    <p class="text-gray-600 mb-6 text-lg">
                        Read more authentic reviews from students like you
                    </p>
                    <a href="#"
                       class="group inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl hover:shadow-2xl">
                        <span class="mr-3 text-2xl">📚</span>
                        View All Student Reviews
                        <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <div class="mt-4 flex items-center text-sm text-gray-500">
                        <svg class="w-4 h-4 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        Over 1,200+ verified student reviews
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <!-- Background Animation -->
        <div class="absolute inset-0">
            <div
                class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-pink-500/20 animate-gradient-shift">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                    Ready to Experience Our <br>
                    Seamless Process?
                </h2>
                <p class="text-xl text-white/90 mb-12 leading-relaxed">
                    Join thousands of satisfied students who trust our expert programming help.
                    Start your project today and experience the difference.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('assignments.create') }}"
                        class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                        <span class="mr-4 text-3xl">🚀</span>
                        Start Your Project Now
                        <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('services.index') }}"
                        class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-blue-600 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300">
                        <span class="mr-4 text-3xl">⚡</span>
                        View All Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Animations and JavaScript -->
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 0.8;
            }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }

        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes gradient-shift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes expand-underline {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float-slow 4s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float 3s ease-in-out infinite 1s;
        }

        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }

        .animate-bounce-slow {
            animation: bounce-slow 2s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin-slow 8s linear infinite;
        }

        .animate-gradient-shift {
            animation: gradient-shift 3s ease-in-out infinite;
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out forwards;
        }

        .animate-expand-underline {
            animation: expand-underline 1s ease-out forwards;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
        }

        .animation-delay-600 {
            animation-delay: 0.6s;
        }

        .animation-delay-800 {
            animation-delay: 0.8s;
        }

        .animation-delay-1000 {
            animation-delay: 1s;
        }

        .animation-delay-1200 {
            animation-delay: 1.2s;
        }
    </style>

    <script>
        function counters() {
            return {
                counters: ['0', '0', '0', '0'],
                targets: ['2500+', '98.5%', '24/7', '150+'],

                startCounting() {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                this.animateCounters();
                                observer.unobserve(entry.target);
                            }
                        });
                    });

                    observer.observe(document.querySelector('[x-data="counters()"]'));
                },

                animateCounters() {
                    // Animate Project Count
                    this.animateNumber(0, 2500, 0, (val) => this.counters[0] = val + '+');

                    // Animate Satisfaction Rate
                    this.animateNumber(0, 98.5, 1, (val) => this.counters[1] = val + '%');

                    // Set 24/7 immediately
                    setTimeout(() => this.counters[2] = '24/7', 1000);

                    // Animate Languages Count
                    this.animateNumber(0, 150, 3, (val) => this.counters[3] = val + '+');
                },

                animateNumber(start, end, index, callback) {
                    const duration = 2000;
                    const startTime = performance.now();

                    const update = (currentTime) => {
                        const elapsed = currentTime - startTime;
                        const progress = Math.min(elapsed / duration, 1);

                        const easeOutQuart = 1 - Math.pow(1 - progress, 4);
                        const current = start + (end - start) * easeOutQuart;

                        callback(index === 1 ? current.toFixed(1) : Math.floor(current));

                        if (progress < 1) {
                            requestAnimationFrame(update);
                        }
                    };

                    requestAnimationFrame(update);
                }
            }
        }
    </script>
@endsection
