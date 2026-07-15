@extends('layouts.app')

@section('title', 'How It Works | Get Academic Help in 4 Easy Steps - Assignment Help USA')
@section('description', 'Get academic assistance in 4 simple steps at Assignment Help USA. From submitting requirements to expert delivery, our process is fast and seamless. Learn more!')


@section('content')
    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-slate-900 text-white py-16 lg:py-24 dark:bg-slate-950">
        <!-- Interactive Gradient Background Blobs -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-20"></div>
            <!-- Glowing Indigo/Purple Blob -->
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-full blur-[130px] animate-pulse-slow"></div>
            <!-- Glowing Blue/Cyan Blob -->
            <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-gradient-to-tr from-cyan-500/10 to-blue-500/10 rounded-full blur-[110px] animate-pulse-slow"></div>
        </div>

        <div class="relative z-10 section-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Text Content (Column span 7) -->
                <div class="text-left lg:col-span-7 max-w-2xl animate-fade-in-up">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-500/10 text-indigo-300 text-xs font-black uppercase tracking-wider mb-8 border border-indigo-500/20 shadow-sm shadow-indigo-500/5">
                        <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                        ⚡ Simple & Efficient Process
                    </div>

                    <!-- Main Title with multi-color gradient -->
                    <h1 class="text-4xl sm:text-6xl font-black mb-8 leading-tight tracking-tight text-white">
                        How Our Academic <br>
                        <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-indigo-300 bg-clip-text text-transparent">
                            Help Works
                        </span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg sm:text-xl text-slate-300 mb-10 leading-relaxed font-medium">
                        Get expert Academic assistance in just 4 simple steps. From submission to delivery, we make it seamless, secure, and stress-free.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('order') }}"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-7 py-4 rounded-xl font-black transition-all duration-300 shadow-xl shadow-purple-650/20 hover:-translate-y-1 active:scale-95">
                            🚀 Start Your Project
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#process"
                            class="inline-flex items-center justify-center border-2 border-slate-700 hover:border-slate-500 hover:bg-slate-800/30 text-slate-300 hover:text-white px-7 py-4 rounded-xl font-black transition-all duration-300 active:scale-95">
                            👀 See How It Works
                        </a>
                    </div>
                </div>

                <!-- Hero Image (Column span 5) -->
                <div class="relative flex justify-center lg:justify-end lg:col-span-5 animate-fade-in-up animation-delay-200">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-cyan-500/10 to-indigo-500/10 rounded-[2.8rem] blur-2xl opacity-30 pointer-events-none"></div>
                    <div class="relative w-full max-w-md lg:max-w-full rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.35)] dark:border-slate-800/80 dark:bg-slate-900">
                        <img src="{{ asset('images/ui/how_it_works_hero.png') }}" 
                             alt="How Academic Help Works - Assignment Help USA" 
                             class="w-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-purple-500/5 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Interactive Process Steps -->
    <section id="process" class="py-24 bg-gray-50 relative overflow-hidden dark:bg-slate-950">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-purple-50/50 dark:from-slate-950/50 dark:to-slate-900/50"></div>
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Enhanced Section Header -->
            <div class="text-center mb-20 relative">
                <!-- Background Decorative Elements -->

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
                <h2 class="text-4xl md:text-5xl lg:text-7xl font-black text-gray-900 mb-8 leading-tight relative dark:text-white">
                    <span class="inline-block animate-fade-in-up animation-delay-200">Your</span>
                    <span class="inline-block animate-fade-in-up animation-delay-400">Journey</span>
                    <span class="inline-block animate-fade-in-up animation-delay-600">to</span>
                    <br>
                    <span class="relative inline-block animate-fade-in-up animation-delay-800">
                        <span
                            class="bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                            Academic Success
                        </span>
                    </span>
                </h2>

                <!-- Enhanced Description with Icons -->
                <div class="max-w-4xl mx-auto animate-fade-in-up animation-delay-1000">
                    <p class="text-xl md:text-2xl text-gray-600 mb-8 leading-relaxed dark:text-slate-400">
                        Our streamlined process ensures you get high-quality Academic help quickly and efficiently.
                    </p>

                    <!-- Feature Highlights -->
                    <div class="flex flex-wrap justify-center gap-6 mt-8">
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group dark:bg-slate-900 dark:border-slate-800/80">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">🚀</span>
                            <span class="text-gray-700 font-semibold dark:text-slate-300">Fast Delivery</span>
                        </div>
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group dark:bg-slate-900 dark:border-slate-800/80">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">👥</span>
                            <span class="text-gray-700 font-semibold dark:text-slate-300">Expert Team</span>
                        </div>
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group dark:bg-slate-900 dark:border-slate-800/80">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">🎯</span>
                            <span class="text-gray-700 font-semibold dark:text-slate-300">100% Quality</span>
                        </div>
                        <div
                            class="flex items-center bg-white rounded-full px-6 py-3 shadow-lg border border-gray-100 hover:shadow-xl transition-all duration-300 group dark:bg-slate-900 dark:border-slate-800/80">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">🔒</span>
                            <span class="text-gray-700 font-semibold dark:text-slate-300">Secure & Private</span>
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
                        <span class="text-gray-500 text-sm font-medium dark:text-slate-500">4 Simple Steps</span>
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
                                class="relative bg-white rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-700 transform hover:-translate-y-6 border border-gray-100 overflow-hidden dark:bg-slate-900 dark:border-slate-800/80">
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
                                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center leading-tight dark:text-white">
                                        {{ $step['title'] }}
                                    </h3>

                                    <!-- Description with Better Formatting -->
                                    <p class="text-gray-600 text-center mb-6 leading-relaxed text-base dark:text-slate-400">
                                        {{ $step['description'] }}
                                    </p>

                                    <!-- Enhanced Time Estimate -->
                                    @if ($index == 0)
                                        <div
                                            class="bg-gradient-to-r from-blue-50 to-white rounded-2xl p-4 mb-6 border border-blue-500/10 dark:to-slate-900">
                                            <div class="flex items-center justify-center text-blue-500">
                                                <div
                                                    class="w-8 h-8 bg-blue-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium dark:text-slate-500">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($index == 1)
                                        <div
                                            class="bg-gradient-to-r from-purple-50 to-white rounded-2xl p-4 mb-6 border border-purple-500/10 dark:to-slate-900">
                                            <div class="flex items-center justify-center text-purple-500">
                                                <div
                                                    class="w-8 h-8 bg-purple-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium dark:text-slate-500">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($index == 2)
                                        <div
                                            class="bg-gradient-to-r from-rose-50 to-white rounded-2xl p-4 mb-6 border border-rose-500/10 dark:to-slate-900">
                                            <div class="flex items-center justify-center text-rose-500">
                                                <div
                                                    class="w-8 h-8 bg-rose-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium dark:text-slate-500">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div
                                            class="bg-gradient-to-r from-emerald-50 to-white rounded-2xl p-4 mb-6 border border-emerald-500/10 dark:to-slate-900">
                                            <div class="flex items-center justify-center text-emerald-500">
                                                <div
                                                    class="w-8 h-8 bg-emerald-500/10 rounded-full flex items-center justify-center mr-3">
                                                    <span class="text-lg">⏰</span>
                                                </div>
                                                <div>
                                                    <div class="text-sm text-gray-500 font-medium dark:text-slate-500">Estimated Time</div>
                                                    <div class="font-bold text-lg">{{ $step['estimated_time'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Enhanced Expand Button -->
                                    @if ($index == 0)
                                        <button x-on:click="expanded = !expanded"
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
                                        <button x-on:click="expanded = !expanded"
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
                                        <button x-on:click="expanded = !expanded"
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
                                        <button x-on:click="expanded = !expanded"
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
                                class="mt-6 bg-gradient-to-br {{ $index == 0 ? 'from-blue-50 via-white to-blue-50/50 border-blue-500/20 dark:from-blue-900/20 dark:via-slate-900 dark:to-blue-900/10' : ($index == 1 ? 'from-purple-50 via-white to-purple-50/50 border-purple-500/20 dark:from-purple-900/20 dark:via-slate-900 dark:to-purple-900/10' : ($index == 2 ? 'from-rose-50 via-white to-rose-50/50 border-rose-500/20 dark:from-rose-900/20 dark:via-slate-900 dark:to-rose-900/10' : 'from-emerald-50 via-white to-emerald-50/50 border-emerald-500/20 dark:from-emerald-900/20 dark:via-slate-900 dark:to-emerald-900/10')) }} rounded-3xl p-8 border-2 shadow-xl backdrop-blur-sm">
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
                                <h4 class="text-xl font-black text-gray-900 dark:text-white">What's Included:</h4>
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
                                        <span class="text-gray-700 leading-relaxed font-medium dark:text-slate-300">{{ $detail }}</span>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Progress Indicator -->
                            @if ($index == 0)
                                <div class="mt-6 pt-6 border-t border-blue-500/20">
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 font-medium dark:text-slate-500">Step Progress</span>
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
                                        <span class="text-gray-500 font-medium dark:text-slate-500">Step Progress</span>
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
                                        <span class="text-gray-500 font-medium dark:text-slate-500">Step Progress</span>
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
                                        <span class="text-gray-500 font-medium dark:text-slate-500">Step Progress</span>
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
                    class="inline-flex items-center bg-gradient-to-r from-gray-100 to-gray-50 dark:from-slate-800 dark:to-slate-850 rounded-full px-8 py-4 shadow-lg border border-gray-200 dark:border-slate-700">
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600 font-semibold dark:text-slate-400">Complete Process Time:</span>
                        <div class="flex items-center bg-white dark:bg-slate-900 rounded-full px-4 py-2 shadow-sm border border-slate-100 dark:border-slate-700">
                            <span class="text-2xl mr-2">⚡</span>
                            <span class="font-black text-xl text-gray-900 dark:text-white">1-3 Hours</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Detailed Alternating Steps Section -->
    <section class="py-24 bg-white relative overflow-hidden dark:bg-slate-900 border-b border-slate-100 dark:border-slate-800/60">
        <!-- Subtle decorative blobs -->
        <div class="absolute top-1/3 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-blue-500/10 to-indigo-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-1/3 right-0 w-[400px] h-[400px] bg-gradient-to-tr from-purple-500/10 to-pink-500/10 rounded-full blur-[100px] pointer-events-none"></div>

        <!-- Vertical connecting timeline line (desktop only) -->
        <div class="hidden lg:block absolute top-[10%] bottom-[10%] left-1/2 -translate-x-1/2 w-0.5 bg-slate-100 dark:bg-slate-800/80 pointer-events-none">
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-b from-blue-500 via-purple-500 via-rose-500 to-emerald-500 opacity-30"></div>
        </div>

        <div class="section-container relative z-10 space-y-32">
            <!-- Step 1 Details -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center relative">
                <!-- Central Timeline Node (desktop only) -->
                <div class="hidden lg:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white dark:bg-slate-900 border-4 border-blue-500 items-center justify-center font-black text-xs text-blue-500 shadow-lg shadow-blue-500/20 z-20">1</div>

                <!-- Text Left (Column span 6) -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400">
                        Step 01
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                        Submit Your Requirements & Guidelines
                    </h3>
                    <p class="text-slate-650 text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                        Fill out our intuitive submission form by providing your assignment parameters. Specify the programming language, framework, word count, formatting styles (APA, MLA, Harvard, Chicago), and upload your grading rubrics, lecture notes, or code templates.
                    </p>
                    <ul class="space-y-3 text-sm text-slate-700 dark:text-slate-300 font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span> Upload rubrics, files, and templates easily
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-blue-500"></span> Select your desired academic level & deadlines
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-blue-500"></span> Set specific budget preferences
                        </li>
                    </ul>
                </div>
                <!-- Interactive UI Mockup Right (Column span 6) -->
                <div class="lg:col-span-6 flex justify-center lg:justify-end animate-fade-in-up relative">
                    <!-- Floating Document Tag -->
                    <div class="absolute -top-5 -right-2 bg-gradient-to-r from-blue-500 to-indigo-600 text-white text-[10px] font-black uppercase px-3.5 py-2.5 rounded-xl shadow-xl rotate-6 animate-bounce z-20">
                        📂 rubric_guidelines.pdf
                    </div>

                    <div class="relative w-full max-w-md bg-slate-50 dark:bg-slate-950 rounded-3xl p-8 border border-slate-200 dark:border-slate-800 hover:border-blue-300 dark:hover:border-blue-500/30 shadow-[0_20px_50px_-15px_rgba(148,163,184,0.3)] dark:shadow-[0_30px_60px_-15px_rgba(30,41,59,0.5)] transition-all duration-500 group">
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-200 dark:border-slate-800">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            </div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 font-mono">new-order-request.json</span>
                        </div>
                        <div class="space-y-3 font-mono text-[11px] leading-relaxed">
                            <div class="bg-white dark:bg-slate-900/80 p-3.5 rounded-xl border border-slate-200 dark:border-slate-800 group-hover:border-blue-200 dark:group-hover:border-slate-700 transition-all">
                                <span class="text-purple-600 dark:text-purple-400">"subject":</span> <span class="text-emerald-600 dark:text-emerald-400">"Computer Science / Data Structures"</span>
                            </div>
                            <div class="bg-white dark:bg-slate-900/80 p-3.5 rounded-xl border border-slate-200 dark:border-slate-800 group-hover:border-blue-200 dark:group-hover:border-slate-700 transition-all">
                                <span class="text-purple-600 dark:text-purple-400">"deadline":</span> <span class="text-emerald-600 dark:text-emerald-400">"12 Hours (Standard)"</span>
                            </div>
                            <div class="bg-white dark:bg-slate-900/80 p-3.5 rounded-xl border border-slate-200 dark:border-slate-800 group-hover:border-blue-200 dark:group-hover:border-slate-700 transition-all">
                                <span class="text-purple-600 dark:text-purple-400">"academicLevel":</span> <span class="text-emerald-600 dark:text-emerald-400">"Graduate (PhD / Master's)"</span>
                            </div>
                            <div class="bg-white dark:bg-slate-900/80 p-3.5 rounded-xl border border-slate-200 dark:border-slate-800 group-hover:border-blue-200 dark:group-hover:border-slate-700 transition-all flex items-center justify-between">
                                <div>
                                    <span class="text-purple-600 dark:text-purple-400">"guidelines":</span> <span class="text-emerald-600 dark:text-emerald-400">["grading_rubric.pdf"]</span>
                                </div>
                                <span class="text-[9px] bg-emerald-100 dark:bg-emerald-500/20 text-emerald-700 dark:text-emerald-400 px-2 py-0.5 rounded-full font-bold border border-emerald-200 dark:border-transparent">100% Uploaded</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 Details -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center relative">
                <!-- Central Timeline Node (desktop only) -->
                <div class="hidden lg:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white dark:bg-slate-900 border-4 border-purple-500 items-center justify-center font-black text-xs text-purple-500 shadow-lg shadow-purple-500/20 z-20">2</div>

                <!-- Interactive UI Mockup Left (Column span 6) -->
                <div class="lg:col-span-6 order-2 lg:order-1 flex justify-center lg:justify-start animate-fade-in-up relative">
                    <!-- Floating Online Experts -->
                    <div class="absolute -bottom-5 -left-2 bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 p-2.5 rounded-2xl shadow-xl flex items-center gap-2 -rotate-6 z-20">
                        <div class="flex -space-x-2">
                            <div class="w-6 h-6 rounded-full bg-blue-500 border-2 border-white dark:border-slate-950 flex items-center justify-center text-[10px] font-bold">👩‍🎓</div>
                            <div class="w-6 h-6 rounded-full bg-green-500 border-2 border-white dark:border-slate-950 flex items-center justify-center text-[10px] font-bold">👨‍🔬</div>
                            <div class="w-6 h-6 rounded-full bg-purple-500 border-2 border-white dark:border-slate-950 flex items-center justify-center text-[10px] font-bold">👩‍💻</div>
                        </div>
                        <span class="text-[9px] text-slate-700 dark:text-slate-300 font-bold">12 Academic Scholars Online</span>
                    </div>

                    <div class="relative w-full max-w-md bg-slate-50 dark:bg-slate-950 rounded-3xl p-8 border border-slate-200 dark:border-slate-800 hover:border-purple-300 dark:hover:border-purple-500/30 shadow-[0_20px_50px_-15px_rgba(148,163,184,0.3)] dark:shadow-[0_30px_60px_-15px_rgba(30,41,59,0.5)] transition-all duration-500 group">
                        <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-200 dark:border-slate-800">
                            <span class="text-[10px] text-purple-600 dark:text-purple-400 font-bold uppercase tracking-wider">Expert Matching Engine</span>
                            <span class="flex h-3.5 w-3.5 relative">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3.5 w-3.5 bg-emerald-500"></span>
                            </span>
                        </div>
                        <div class="space-y-5">
                            <div class="flex items-center space-x-4 bg-white dark:bg-slate-900/60 p-4 rounded-2xl border border-slate-200 dark:border-slate-800 group-hover:border-purple-200 dark:group-hover:border-slate-700 transition-all shadow-sm dark:shadow-none">
                                <div class="w-12 h-12 rounded-xl bg-purple-600 flex items-center justify-center text-xl font-bold shadow-lg shadow-purple-600/30">👨‍🎓</div>
                                <div class="flex-1">
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-black text-slate-900 dark:text-white">Dr. Elizabeth R.</h5>
                                        <span class="text-[9px] text-purple-700 dark:text-purple-300 font-bold">99.2% Match</span>
                                    </div>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400">PhD in Advanced Calculus (MIT)</p>
                                </div>
                            </div>
                            <div class="pt-2">
                                <div class="flex justify-between text-xs mb-2">
                                    <span class="text-slate-500 dark:text-slate-400 font-medium">Scanning Verified Scholars...</span>
                                    <span class="text-emerald-600 dark:text-emerald-400 font-black">Expert Matched!</span>
                                </div>
                                <div class="w-full bg-slate-200 dark:bg-slate-800 h-2.5 rounded-full overflow-hidden">
                                    <div class="bg-gradient-to-r from-purple-500 via-indigo-500 to-emerald-500 h-full rounded-full w-full transition-all duration-1000"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Text Right (Column span 6) -->
                <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-100 text-purple-700 text-[10px] font-black uppercase tracking-widest border border-purple-200 dark:bg-purple-900/30 dark:text-purple-400">
                        Step 02
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                        Receive a Transparent Quote & Expert Match
                    </h3>
                    <p class="text-slate-650 text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                        Within 15 to 30 minutes, our support desk evaluates the project scope and assigns it to a verified academic scholar who matches your specific discipline. You will receive a detailed, all-inclusive quote with zero hidden fees.
                    </p>
                    <ul class="space-y-3 text-sm text-slate-700 dark:text-slate-300 font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-purple-500 animate-pulse"></span> 100% matched based on tutor qualifications
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-purple-500"></span> Transparent billing with secure payment options
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-purple-500"></span> Direct contact with your scholar confirmed
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Step 3 Details -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center relative">
                <!-- Central Timeline Node (desktop only) -->
                <div class="hidden lg:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white dark:bg-slate-900 border-4 border-rose-500 items-center justify-center font-black text-xs text-rose-500 shadow-lg shadow-rose-500/20 z-20">3</div>

                <!-- Text Left (Column span 6) -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-rose-100 text-rose-700 text-[10px] font-black uppercase tracking-widest border border-rose-200 dark:bg-rose-900/30 dark:text-rose-400">
                        Step 03
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                        Track Real-Time Progress & Collaborations
                    </h3>
                    <p class="text-slate-650 text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                        Log into your student dashboard at any time to monitor the progress of your assignment. Message your expert directly to upload files, clarify instructions, or download milestone drafts. We keep you updated every step of the way.
                    </p>
                    <ul class="space-y-3 text-sm text-slate-700 dark:text-slate-300 font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-rose-500 animate-pulse"></span> Interactive message center with files sharing
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-rose-500"></span> Milestone draft checks for long-term papers
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-rose-500"></span> Complete transparency during drafting phases
                        </li>
                    </ul>
                </div>
                <!-- Interactive UI Mockup Right (Column span 6) -->
                <div class="lg:col-span-6 flex justify-center lg:justify-end animate-fade-in-up relative">
                    <!-- Floating Terminal Test Check -->
                    <div class="absolute -bottom-5 -right-2 bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 p-3.5 rounded-xl shadow-2xl font-mono text-[9px] text-emerald-600 dark:text-emerald-400 rotate-3 z-20">
                        <span class="text-slate-400 dark:text-slate-500">$</span> php artisan test<br>
                        <span class="font-bold">✓ 18 academic tests passed</span>
                    </div>

                    <div class="relative w-full max-w-md bg-slate-50 dark:bg-slate-950 rounded-3xl p-8 border border-slate-200 dark:border-slate-800 hover:border-rose-300 dark:hover:border-rose-500/30 shadow-[0_20px_50px_-15px_rgba(148,163,184,0.3)] dark:shadow-[0_30px_60px_-15px_rgba(30,41,59,0.5)] transition-all duration-500 group">
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-200 dark:border-slate-800">
                            <span class="text-[10px] text-rose-600 dark:text-rose-400 font-bold uppercase tracking-wider">Project Dashboard</span>
                            <span class="text-[9px] bg-rose-100 dark:bg-rose-500/20 text-rose-700 dark:text-rose-400 border border-rose-200 dark:border-transparent px-2 py-0.5 rounded-full font-bold">In Development</span>
                        </div>
                        <div class="space-y-4 text-xs font-medium">
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-[10px]">✓</div>
                                <span class="text-slate-600 dark:text-slate-300">Phase 1: Outline & Research Structure</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-[10px]">✓</div>
                                <span class="text-slate-600 dark:text-slate-300">Phase 2: Core Drafting & Citation Layout</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <div class="w-5 h-5 rounded-full bg-rose-100 dark:bg-rose-500/25 text-rose-600 dark:text-rose-400 flex items-center justify-center font-bold text-[10px] animate-pulse">●</div>
                                <span class="text-slate-900 dark:text-white font-extrabold">Phase 3: Refinement & Rubric Compliance</span>
                            </div>
                            <div class="flex items-center space-x-3 opacity-50">
                                <div class="w-5 h-5 rounded-full bg-slate-200 dark:bg-slate-800 text-slate-500 dark:text-slate-400 flex items-center justify-center font-bold text-[10px]">○</div>
                                <span class="text-slate-500 dark:text-slate-400">Phase 4: Turnitin Check & Final Quality Audit</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 Details -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center relative">
                <!-- Central Timeline Node (desktop only) -->
                <div class="hidden lg:flex absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white dark:bg-slate-900 border-4 border-emerald-500 items-center justify-center font-black text-xs text-emerald-500 shadow-lg shadow-emerald-500/20 z-20">4</div>

                <!-- Interactive UI Mockup Left (Column span 6) -->
                <div class="lg:col-span-6 order-2 lg:order-1 flex justify-center lg:justify-start animate-fade-in-up relative">
                    <!-- Floating Turnitin Shield -->
                    <div class="absolute -top-5 -left-2 bg-gradient-to-r from-emerald-500 to-teal-600 text-white text-[10px] font-black uppercase px-4 py-2.5 rounded-xl shadow-xl -rotate-6 flex items-center gap-1 z-20">
                        🛡️ 100% Plagiarism Clean
                    </div>

                    <div class="relative w-full max-w-md bg-slate-50 dark:bg-slate-950 rounded-3xl p-8 border border-slate-200 dark:border-slate-800 hover:border-emerald-300 dark:hover:border-emerald-500/30 shadow-[0_20px_50px_-15px_rgba(148,163,184,0.3)] dark:shadow-[0_30px_60px_-15px_rgba(30,41,59,0.5)] transition-all duration-500 group">
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-slate-200 dark:border-slate-800">
                            <span class="text-[10px] text-emerald-700 dark:text-emerald-400 font-bold uppercase tracking-wider">Final Deliverable Pack</span>
                            <span class="text-[9px] bg-emerald-100 dark:bg-emerald-500/20 text-emerald-700 dark:text-emerald-400 border border-emerald-200 dark:border-transparent px-2 py-0.5 rounded-full font-bold">Passed Quality Audit</span>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="bg-white dark:bg-slate-900/40 p-4 rounded-2xl border border-slate-200 dark:border-slate-800 text-center group-hover:border-emerald-200 dark:group-hover:border-slate-700 transition-all shadow-sm dark:shadow-none">
                                <div class="text-2xl font-black text-emerald-600 dark:text-emerald-400">0%</div>
                                <div class="text-[9px] text-slate-500 dark:text-slate-400 uppercase font-black tracking-wider mt-1">Plagiarism Score</div>
                            </div>
                            <div class="bg-white dark:bg-slate-900/40 p-4 rounded-2xl border border-slate-200 dark:border-slate-800 text-center group-hover:border-emerald-200 dark:group-hover:border-slate-700 transition-all shadow-sm dark:shadow-none">
                                <div class="text-2xl font-black text-slate-900 dark:text-white">A+</div>
                                <div class="text-[9px] text-slate-500 dark:text-slate-400 uppercase font-black tracking-wider mt-1">Rubric Score</div>
                            </div>
                        </div>
                        <a href="{{ route('order') }}" class="w-full bg-gradient-to-r from-emerald-500 to-teal-600 hover:from-emerald-600 hover:to-teal-700 text-white py-3.5 rounded-xl font-bold text-sm flex items-center justify-center space-x-2 shadow-lg shadow-emerald-500/20 active:scale-95 transition-all">
                            <span>📥 Download Completed Assignment</span>
                        </a>
                    </div>
                </div>
                <!-- Text Right (Column span 6) -->
                <div class="lg:col-span-6 order-1 lg:order-2 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-black uppercase tracking-widest border border-emerald-200 dark:bg-emerald-950/30 dark:text-emerald-400">
                        Step 04
                    </div>
                    <h3 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                        Review, Download, & Request Free Revisions
                    </h3>
                    <p class="text-slate-650 text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                        Once completed, your final assignment goes through a rigid quality audit, which includes editing checkmarks, citation layout inspections, and Turnitin plagiarism scans. Download the package, review the output, and ask for free revisions if any details need touchups.
                    </p>
                    <ul class="space-y-3 text-sm text-slate-700 dark:text-slate-300 font-bold">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Free official plagiarism report included
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Unlimited revisions for 10-14 days
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span> High grades compliance guaranteed
                        </li>
                    </ul>
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
                        <div class="group relative" x-data="{ hovered: false }" x-on:mouseenter="hovered = true"
                            x-on:mouseleave="hovered = false">

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

                                @php
                                    $featureBorderClass = $feature['color'] == 'blue'
                                        ? 'border-blue-400/50 shadow-2xl shadow-blue-500/25'
                                        : ($feature['color'] == 'green'
                                            ? 'border-green-400/50 shadow-2xl shadow-green-500/25'
                                            : ($feature['color'] == 'purple'
                                                ? 'border-purple-400/50 shadow-2xl shadow-purple-500/25'
                                                : 'border-orange-400/50 shadow-2xl shadow-orange-500/25'));
                                    $featureTitleClass = $feature['color'] == 'blue'
                                        ? 'bg-gradient-to-r from-blue-400 to-blue-300 bg-clip-text'
                                        : ($feature['color'] == 'green'
                                            ? 'bg-gradient-to-r from-green-400 to-green-300 bg-clip-text'
                                            : ($feature['color'] == 'purple'
                                                ? 'bg-gradient-to-r from-purple-400 to-purple-300 bg-clip-text'
                                                : 'bg-gradient-to-r from-orange-400 to-orange-300 bg-clip-text'));
                                @endphp

                                <!-- Main Card -->
                                <div class="relative bg-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/10 transition-all duration-500 transform hover:-translate-y-4 hover:scale-105 border border-white/10 h-full flex flex-col"
                                    :class="hovered ? '{{ $featureBorderClass }}' : ''">

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
                                            :class="hovered ? '{{ $featureTitleClass }}' : ''">
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
    <section class="py-20 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h3 class="text-3xl font-bold text-gray-900 mb-4 dark:text-white">Trusted by Students Worldwide</h3>
                <p class="text-xl text-gray-600 dark:text-slate-400">Our track record speaks for itself</p>
            </div>

            <!-- Animated Counter -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8" x-data="counters()" x-init="startCounting()">
                @foreach ($stats as $index => $stat)
                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-2xl">{{ $stat['icon'] }}</span>
                        </div>
                        <div x-text="counters[{{ $index }}]" class="text-4xl font-black text-gray-900 mb-2 dark:text-white"></div>
                        <div class="text-gray-600 font-medium dark:text-slate-400">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Student Reviews Section -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 relative overflow-hidden dark:from-slate-950 dark:via-slate-900/50 dark:to-slate-950">
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
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6 leading-tight dark:text-white">
                    What Our Students
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Say About Us</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed dark:text-slate-400">
                    Real feedback from real students who achieved academic success with our assignment help USA
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
                        <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100 h-full flex flex-col relative overflow-hidden dark:bg-slate-900 dark:border-slate-800/80">

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
                                <blockquote class="text-gray-700 leading-relaxed mb-6 text-lg dark:text-slate-300">
                                    <span class="text-4xl text-blue-500 opacity-30 leading-none">"</span>
                                    <span x-show="!expanded">{{ Str::limit($review['review'], 120) }}</span>
                                    <span x-show="expanded" x-transition>{{ $review['review'] }}</span>
                                    <span class="text-4xl text-blue-500 opacity-30 leading-none">"</span>
                                </blockquote>

                                @if (strlen($review['review']) > 120)
                                    <button x-on:click="expanded = !expanded"
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
                            <div class="border-t border-gray-100 pt-6 mt-auto dark:border-slate-800/80">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-4">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-2xl shadow-lg">
                                            {{ $review['avatar'] }}
                                        </div>
                                        <div>
                                            <div class="font-bold text-gray-900 dark:text-white">{{ $review['name'] }}</div>
                                            <div class="text-sm text-gray-600 dark:text-slate-400">{{ $review['role'] }}</div>
                                            <div class="text-xs text-blue-600 font-medium">{{ $review['university'] }}</div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Details -->
                                <div class="mt-4 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-4 dark:to-slate-950">
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div>
                                            <div class="text-gray-500 font-medium dark:text-slate-500">Project</div>
                                            <div class="text-gray-900 font-semibold dark:text-white">{{ $review['project'] }}</div>
                                        </div>
                                        <div>
                                            <div class="text-gray-500 font-medium dark:text-slate-500">Completed in</div>
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
            <div class="text-center bg-white rounded-3xl p-8 shadow-xl border border-gray-100 dark:bg-slate-900 dark:border-slate-800/80">
                <div class="grid md:grid-cols-3 gap-8 items-center">
                    <!-- Overall Rating -->
                    <div class="text-center">
                        <div class="text-6xl font-black text-gray-900 mb-2 dark:text-white">4.9</div>
                        <div class="flex justify-center space-x-1 mb-2">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.286-3.957a1 1 0 00-.364-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z"/>
                                </svg>
                            @endfor
                        </div>
                        <div class="text-gray-600 font-medium dark:text-slate-400">Overall Rating</div>
                    </div>

                    <!-- Divider -->
                    <div class="hidden md:block w-px h-16 bg-gradient-to-b from-transparent via-gray-300 to-transparent mx-auto"></div>

                    <!-- Reviews Stats -->
                    <div class="md:col-span-1 text-center">
                        <div class="grid grid-cols-2 gap-6">
                            <div>
                                <div class="text-3xl font-black text-blue-600">1,250+</div>
                                <div class="text-gray-600 font-medium dark:text-slate-400">Happy Students</div>
                            </div>
                            <div>
                                <div class="text-3xl font-black text-green-600">98.5%</div>
                                <div class="text-gray-600 font-medium dark:text-slate-400">Satisfaction Rate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Show More Reviews Button -->
            <div class="text-center mt-16">
                <div class="inline-flex flex-col items-center">
                    <p class="text-gray-600 mb-6 text-lg dark:text-slate-400">
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
                    <div class="mt-4 flex items-center text-sm text-gray-500 dark:text-slate-500">
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
                    Join thousands of satisfied students who trust our expert assignment help USA.
                    Start your project today and experience the difference.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('order') }}"
                        class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl dark:bg-slate-900 dark:hover:bg-slate-800/50">
                        <span class="mr-4 text-3xl">🚀</span>
                        Start Your Project Now
                        <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('services.index') }}"
                        class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-blue-600 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 dark:hover:bg-slate-800/50">
                        <span class="mr-4 text-3xl">⚡</span>
                        View All Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-24 bg-white dark:bg-slate-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-4 dark:text-white">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto dark:text-slate-400">
                    Here are some of the most common questions we get about our process.
                </p>
            </div>

            <div class="max-w-4xl mx-auto" x-data="{ open: null }">
                @foreach($faqs as $index => $faq)
                    <div class="border-b border-gray-200 dark:border-slate-800/80">
                        <button x-on:click="open = open === {{ $index }} ? null : {{ $index }} " class="w-full flex justify-between items-center py-6 text-left">
                            <h3 class="text-xl font-semibold text-gray-800 dark:text-slate-200">{{ $faq['question'] }}</h3>
                            <svg :class="{'transform rotate-180': open === {{ $index }} }" class="w-6 h-6 text-gray-500 transition-transform duration-300 dark:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open === {{ $index }} " x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4" class="pb-6">
                            <p class="text-gray-600 leading-relaxed dark:text-slate-400">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-10">
                <p class="text-gray-500 mb-4">Still have questions? We've got answers.</p>
                <a href="{{ route('faq') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-4 rounded-2xl transition-all duration-300 hover:scale-105 shadow-lg">
                    View All FAQs
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "FAQPage",
        "mainEntity": [
            @foreach($faqs as $faq)
            {
                "@@type": "Question",
                "name": "{{ $faq['question'] }}",
                "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "{{ $faq['answer'] }}"
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>


    <!-- Custom Animations and JavaScript -->
    <style>
        @@keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @@keyframes float-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @@keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 0.8;
            }
        }

        @@keyframes fade-in-up {
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

        @@keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @@keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @@keyframes gradient-shift {

            0%,
            100% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }
        }

        @@keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @@keyframes expand-underline {
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
