@extends('layouts.app')

@section('title', 'Pricing Plans - Affordable Assignment Help & Tutoring | Trending Tutor')
@section('description',
    'View our transparent pricing plans for assignment help and tutoring services. Choose from Basic, Standard, or Premium packages. No hidden fees, money-back guarantee.')
@section('keywords',
    'pricing, assignment help pricing, tutoring costs, affordable help, student pricing, academic assistance rates, transparent pricing')

@section('content')
    <!-- Structured Data for Pricing -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Assignment Help Service",
        "description": "Professional assignment help and tutoring services",
        "provider": {
            "@type": "Organization",
            "name": "Trending Tutor"
        },
        "offers": [
            @foreach($pricingPlans as $index => $plan)
            {
                "@type": "Offer",
                "name": "{{ $plan['name'] }} Plan",
                "price": "{{ $plan['price'] }}",
                "priceCurrency": "USD",
                "description": "{{ $plan['description'] }}"
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 text-white">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Floating Icons -->
            <div class="absolute top-20 left-10 opacity-20 animate-float-slow">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    💰
                </div>
            </div>
            <div class="absolute top-40 right-20 opacity-20 animate-float-delayed">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    💳
                </div>
            </div>
            <div class="absolute bottom-40 left-1/4 opacity-20 animate-float">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    ✨
                </div>
            </div>

            <!-- Geometric Shapes -->
            <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-1/3 left-1/3 w-20 h-20 bg-gradient-to-br from-pink-500/20 to-red-500/20 rounded-full animate-bounce-slow"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-24 lg:py-32">
            <div class="text-center max-w-4xl mx-auto">
                <!-- Badge -->
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-full text-sm font-bold mb-8 animate-fade-in-up">
                    <span class="mr-3 text-xl animate-bounce">💎</span>
                    TRANSPARENT PRICING
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight animate-fade-in-up animation-delay-200">
                    Simple, Fair Pricing for <br>
                    <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                        Every Student
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-200 mb-12 leading-relaxed animate-fade-in-up animation-delay-400">
                    Choose the plan that fits your needs. No hidden fees, no surprises. <br>
                    Quality assistance at student-friendly prices.
                </p>

                <!-- Trust Badges -->
                <div class="flex flex-wrap justify-center gap-6 animate-fade-in-up animation-delay-600">
                    <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-full px-6 py-3">
                        <span class="text-2xl mr-3">🔒</span>
                        <span class="font-semibold">Secure Payment</span>
                    </div>
                    <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-full px-6 py-3">
                        <span class="text-2xl mr-3">💰</span>
                        <span class="font-semibold">Money-Back Guarantee</span>
                    </div>
                    <div class="flex items-center bg-white/10 backdrop-blur-sm rounded-full px-6 py-3">
                        <span class="text-2xl mr-3">⚡</span>
                        <span class="font-semibold">Instant Quote</span>
                    </div>
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

    <!-- Pricing Plans Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">💎</span>
                    PRICING PLANS
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    Choose Your
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Perfect Plan</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    All plans include quality guarantee, plagiarism report, and expert assistance
                </p>
            </div>

            <!-- Pricing Cards Grid -->
            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto mb-16">
                @foreach($pricingPlans as $index => $plan)
                    <div class="group relative" x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false">
                        <!-- Recommended Badge -->
                        @if($plan['recommended'])
                            <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 z-10">
                                <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg">
                                    ⭐ MOST POPULAR
                                </div>
                            </div>
                        @endif

                        <!-- Pricing Card -->
                        <div class="relative bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border-2 {{ $plan['recommended'] ? 'border-purple-500' : 'border-gray-200' }} overflow-hidden h-full flex flex-col"
                             :class="{ 'scale-105': {{ $plan['recommended'] ? 'true' : 'false' }} }">

                            <!-- Background Glow Effect -->
                            @if($plan['color'] == 'blue')
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-blue-600/0 group-hover:from-blue-500/5 group-hover:to-blue-600/5 transition-all duration-500"></div>
                            @elseif($plan['color'] == 'purple')
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-500/0 to-purple-600/0 group-hover:from-purple-500/5 group-hover:to-purple-600/5 transition-all duration-500"></div>
                            @else
                                <div class="absolute inset-0 bg-gradient-to-br from-orange-500/0 to-orange-600/0 group-hover:from-orange-500/5 group-hover:to-orange-600/5 transition-all duration-500"></div>
                            @endif

                            <!-- Card Header -->
                            <div class="relative p-8 text-center">
                                <!-- Icon -->
                                @if($plan['color'] == 'blue')
                                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                        <span class="text-4xl">📘</span>
                                    </div>
                                @elseif($plan['color'] == 'purple')
                                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                        <span class="text-4xl">👑</span>
                                    </div>
                                @else
                                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                        <span class="text-4xl">🚀</span>
                                    </div>
                                @endif

                                <!-- Plan Name -->
                                <h3 class="text-3xl font-black text-gray-900 mb-2">{{ $plan['name'] }}</h3>
                                <p class="text-gray-600 mb-6">{{ $plan['description'] }}</p>

                                <!-- Price -->
                                <div class="mb-6">
                                    <div class="flex items-baseline justify-center">
                                        <span class="text-5xl font-black text-gray-900">${{ $plan['price'] }}</span>
                                        <span class="text-xl text-gray-500 ml-2">/ {{ $plan['period'] }}</span>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                @if($plan['color'] == 'blue')
                                    <a href="{{ route('assignments.create') }}"
                                       class="block w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                        Get Started
                                    </a>
                                @elseif($plan['color'] == 'purple')
                                    <a href="{{ route('assignments.create') }}"
                                       class="block w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                        Get Started
                                    </a>
                                @else
                                    <a href="{{ route('assignments.create') }}"
                                       class="block w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                        Get Started
                                    </a>
                                @endif
                            </div>

                            <!-- Features List -->
                            <div class="relative p-8 pt-0 flex-grow">
                                <div class="space-y-4">
                                    @foreach($plan['features'] as $feature)
                                        <div class="flex items-start">
                                            @if($plan['color'] == 'blue')
                                                <div class="w-6 h-6 bg-blue-500 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                                    <span class="text-white text-xs">✓</span>
                                                </div>
                                            @elseif($plan['color'] == 'purple')
                                                <div class="w-6 h-6 bg-purple-500 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                                    <span class="text-white text-xs">✓</span>
                                                </div>
                                            @else
                                                <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                                    <span class="text-white text-xs">✓</span>
                                                </div>
                                            @endif
                                            <span class="text-gray-700">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Additional Info -->
            <div class="text-center max-w-3xl mx-auto">
                <div class="bg-white rounded-3xl p-8 shadow-lg border border-gray-200">
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Need a Custom Quote?</h3>
                    <p class="text-gray-600 mb-6">
                        Have a unique project or specific requirements? Contact us for a personalized quote tailored to your needs.
                    </p>
                    <a href="{{ route('assignments.create') }}"
                       class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span class="mr-3 text-2xl">📝</span>
                        Request Custom Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Price Calculator Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center bg-gradient-to-r from-green-500 to-blue-500 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">🧮</span>
                    INSTANT CALCULATOR
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    Get Your
                    <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">Instant Quote</span>
                </h2>
                <p class="text-xl text-gray-600 mb-12">
                    Use our pricing calculator to get an instant quote for your assignment
                </p>

                <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-12 shadow-xl border border-blue-100">
                    <div class="flex flex-col items-center">
                        <div class="text-6xl mb-6">🧮</div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Interactive Price Calculator</h3>
                        <p class="text-gray-600 mb-8">
                            Fill out your assignment details and get an instant price estimate
                        </p>
                        <a href="{{ route('assignments.create') }}"
                           class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <span class="mr-3 text-2xl">🚀</span>
                            Calculate My Price
                            <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">❓</span>
                    FREQUENTLY ASKED QUESTIONS
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    Pricing
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Questions Answered</span>
                </h2>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                @foreach($faqs as $index => $faq)
                    <div class="group" x-data="{ open: false }">
                        <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border border-gray-100">
                            <button @click="open = !open"
                                    class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-200">
                                <div class="flex items-center flex-1">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <span class="text-white font-bold">{{ $index + 1 }}</span>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">{{ $faq['question'] }}</h3>
                                </div>
                                <svg x-bind:class="open ? 'rotate-180' : ''"
                                     class="w-6 h-6 text-gray-500 transition-transform duration-300 flex-shrink-0 ml-4"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="open"
                                 x-transition:enter="transition ease-out duration-300"
                                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                                 x-transition:enter-end="opacity-100 transform translate-y-0"
                                 x-transition:leave="transition ease-in duration-200"
                                 x-transition:leave-start="opacity-100 transform translate-y-0"
                                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                                 class="px-8 pb-6">
                                <div class="pl-14 text-gray-600 leading-relaxed">
                                    {{ $faq['answer'] }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-pink-500/20 animate-gradient-shift"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                    Ready to Get Started?
                </h2>
                <p class="text-xl text-white/90 mb-12 leading-relaxed">
                    Choose your plan and experience quality assignment help today. <br>
                    100% satisfaction guaranteed or your money back.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('assignments.create') }}"
                        class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                        <span class="mr-4 text-3xl">🚀</span>
                        Start Your Order
                        <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <div class="mt-8 flex items-center justify-center text-white/80 text-sm">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                    </svg>
                    No commitment required. Cancel anytime.
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Animations -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes float-slow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 0.8; }
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

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-float-slow { animation: float-slow 4s ease-in-out infinite; }
        .animate-float-delayed { animation: float 3s ease-in-out infinite 1s; }
        .animate-pulse-slow { animation: pulse-slow 3s ease-in-out infinite; }
        .animate-bounce-slow { animation: bounce-slow 2s ease-in-out infinite; }
        .animate-gradient-shift { animation: gradient-shift 3s ease-in-out infinite; }
        .animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; }

        .animation-delay-200 { animation-delay: 0.2s; }
        .animation-delay-400 { animation-delay: 0.4s; }
        .animation-delay-600 { animation-delay: 0.6s; }
    </style>
@endsection
