@extends('layouts.app')

@section('title', 'Frequently Asked Questions - Assignment Help & Tutoring FAQ | CodeHelp')
@section('description',
    'Find answers to common questions about our assignment help and tutoring services. Learn about pricing, delivery, quality, privacy, and more.')
@section('keywords',
    'FAQ, frequently asked questions, assignment help questions, tutoring FAQ, student questions, help center, support')

@section('content')
    <!-- Structured Data for FAQ -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            @foreach($faqCategories as $category)
                @foreach($category['questions'] as $faq)
                {
                    "@type": "Question",
                    "name": "{{ $faq['question'] }}",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "{{ $faq['answer'] }}"
                    }
                }@if(!$loop->parent->last || !$loop->last),@endif
                @endforeach
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
                    ❓
                </div>
            </div>
            <div class="absolute top-40 right-20 opacity-20 animate-float-delayed">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    💡
                </div>
            </div>
            <div class="absolute bottom-40 left-1/4 opacity-20 animate-float">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    📖
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
                    <span class="mr-3 text-xl animate-bounce">💬</span>
                    HELP CENTER
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight animate-fade-in-up animation-delay-200">
                    Frequently Asked <br>
                    <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                        Questions
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-200 mb-12 leading-relaxed animate-fade-in-up animation-delay-400">
                    Find answers to common questions about our services, pricing, quality, and more.
                </p>

                <!-- Search Box -->
                <div class="max-w-2xl mx-auto animate-fade-in-up animation-delay-600">
                    <div class="relative">
                        <input type="text"
                               placeholder="Search for answers..."
                               class="w-full px-6 py-5 rounded-2xl text-gray-900 text-lg focus:outline-none focus:ring-4 focus:ring-blue-400 shadow-xl"
                               x-data
                               x-on:input.debounce.300ms="
                                   const searchTerm = $event.target.value.toLowerCase();
                                   document.querySelectorAll('[data-faq-item]').forEach(item => {
                                       const question = item.querySelector('[data-faq-question]').textContent.toLowerCase();
                                       const answer = item.querySelector('[data-faq-answer]').textContent.toLowerCase();
                                       if (question.includes(searchTerm) || answer.includes(searchTerm) || searchTerm === '') {
                                           item.style.display = 'block';
                                       } else {
                                           item.style.display = 'none';
                                       }
                                   });
                               ">
                        <svg class="absolute right-6 top-1/2 transform -translate-y-1/2 w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
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

    <!-- FAQ Categories Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <!-- Quick Category Navigation -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-black text-gray-900 mb-4">Browse by Category</h2>
                    <p class="text-lg text-gray-600">Select a category to jump to relevant questions</p>
                </div>

                <div class="flex flex-wrap justify-center gap-4">
                    @foreach($faqCategories as $index => $category)
                        <a href="#category-{{ $index }}"
                           class="group flex items-center bg-white hover:bg-gradient-to-r
                                  @if($category['color'] == 'blue') hover:from-blue-500 hover:to-blue-600
                                  @elseif($category['color'] == 'green') hover:from-green-500 hover:to-green-600
                                  @elseif($category['color'] == 'purple') hover:from-purple-500 hover:to-purple-600
                                  @elseif($category['color'] == 'orange') hover:from-orange-500 hover:to-orange-600
                                  @elseif($category['color'] == 'indigo') hover:from-indigo-500 hover:to-indigo-600
                                  @else hover:from-pink-500 hover:to-pink-600
                                  @endif
                                  px-6 py-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 border-2 border-gray-200">
                            <span class="text-2xl mr-3 group-hover:scale-110 transition-transform">{{ $category['icon'] }}</span>
                            <span class="font-bold text-gray-900 group-hover:text-white transition-colors">{{ $category['name'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- FAQ Categories -->
            @foreach($faqCategories as $categoryIndex => $category)
                <div id="category-{{ $categoryIndex }}" class="mb-20 scroll-mt-24">
                    <!-- Category Header -->
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center bg-gradient-to-r
                                    @if($category['color'] == 'blue') from-blue-500 to-blue-600
                                    @elseif($category['color'] == 'green') from-green-500 to-green-600
                                    @elseif($category['color'] == 'purple') from-purple-500 to-purple-600
                                    @elseif($category['color'] == 'orange') from-orange-500 to-orange-600
                                    @elseif($category['color'] == 'indigo') from-indigo-500 to-indigo-600
                                    @else from-pink-500 to-pink-600
                                    @endif
                                    text-white px-8 py-4 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="mr-3 text-2xl">{{ $category['icon'] }}</span>
                            {{ strtoupper($category['name']) }}
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-gray-900">
                            {{ $category['name'] }}
                        </h2>
                    </div>

                    <!-- Questions List -->
                    <div class="max-w-4xl mx-auto space-y-6">
                        @foreach($category['questions'] as $questionIndex => $faq)
                            <div class="group" x-data="{ open: false }" data-faq-item>
                                <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden border-2
                                            @if($category['color'] == 'blue') border-blue-100 hover:border-blue-300
                                            @elseif($category['color'] == 'green') border-green-100 hover:border-green-300
                                            @elseif($category['color'] == 'purple') border-purple-100 hover:border-purple-300
                                            @elseif($category['color'] == 'orange') border-orange-100 hover:border-orange-300
                                            @elseif($category['color'] == 'indigo') border-indigo-100 hover:border-indigo-300
                                            @else border-pink-100 hover:border-pink-300
                                            @endif">
                                    <button @click="open = !open"
                                            class="w-full px-8 py-6 text-left flex items-center justify-between hover:bg-gray-50 transition-colors duration-200">
                                        <div class="flex items-center flex-1">
                                            <div class="w-12 h-12 bg-gradient-to-br
                                                        @if($category['color'] == 'blue') from-blue-500 to-blue-600
                                                        @elseif($category['color'] == 'green') from-green-500 to-green-600
                                                        @elseif($category['color'] == 'purple') from-purple-500 to-purple-600
                                                        @elseif($category['color'] == 'orange') from-orange-500 to-orange-600
                                                        @elseif($category['color'] == 'indigo') from-indigo-500 to-indigo-600
                                                        @else from-pink-500 to-pink-600
                                                        @endif
                                                        rounded-full flex items-center justify-center mr-4 flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
                                                <span class="text-white font-bold text-lg">Q</span>
                                            </div>
                                            <h3 class="text-lg md:text-xl font-bold text-gray-900" data-faq-question>{{ $faq['question'] }}</h3>
                                        </div>
                                        <svg x-bind:class="open ? 'rotate-180' : ''"
                                             class="w-6 h-6
                                                    @if($category['color'] == 'blue') text-blue-500
                                                    @elseif($category['color'] == 'green') text-green-500
                                                    @elseif($category['color'] == 'purple') text-purple-500
                                                    @elseif($category['color'] == 'orange') text-orange-500
                                                    @elseif($category['color'] == 'indigo') text-indigo-500
                                                    @else text-pink-500
                                                    @endif
                                                    transition-transform duration-300 flex-shrink-0 ml-4"
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
                                         class="px-8 pb-6 border-t border-gray-100">
                                        <div class="pl-16 pt-6">
                                            <div class="bg-gradient-to-br
                                                        @if($category['color'] == 'blue') from-blue-50 to-white
                                                        @elseif($category['color'] == 'green') from-green-50 to-white
                                                        @elseif($category['color'] == 'purple') from-purple-50 to-white
                                                        @elseif($category['color'] == 'orange') from-orange-50 to-white
                                                        @elseif($category['color'] == 'indigo') from-indigo-50 to-white
                                                        @else from-pink-50 to-white
                                                        @endif
                                                        rounded-2xl p-6 border-2
                                                        @if($category['color'] == 'blue') border-blue-100
                                                        @elseif($category['color'] == 'green') border-green-100
                                                        @elseif($category['color'] == 'purple') border-purple-100
                                                        @elseif($category['color'] == 'orange') border-orange-100
                                                        @elseif($category['color'] == 'indigo') border-indigo-100
                                                        @else border-pink-100
                                                        @endif">
                                                <div class="flex items-start">
                                                    <div class="w-8 h-8 bg-gradient-to-br
                                                                @if($category['color'] == 'blue') from-blue-500 to-blue-600
                                                                @elseif($category['color'] == 'green') from-green-500 to-green-600
                                                                @elseif($category['color'] == 'purple') from-purple-500 to-purple-600
                                                                @elseif($category['color'] == 'orange') from-orange-500 to-orange-600
                                                                @elseif($category['color'] == 'indigo') from-indigo-500 to-indigo-600
                                                                @else from-pink-500 to-pink-600
                                                                @endif
                                                                rounded-full flex items-center justify-center mr-4 flex-shrink-0 mt-1">
                                                        <span class="text-white font-bold">A</span>
                                                    </div>
                                                    <p class="text-gray-700 leading-relaxed text-lg" data-faq-answer>{{ $faq['answer'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Still Have Questions Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">💬</span>
                    NEED MORE HELP?
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    Still Have Questions?
                </h2>
                <p class="text-xl text-gray-600 mb-12">
                    Can't find the answer you're looking for? Our support team is here to help!
                </p>

                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <!-- Live Chat -->
                    <div class="bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 shadow-lg border-2 border-blue-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">💬</span>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-3">Live Chat</h3>
                        <p class="text-gray-600 mb-4">Chat with our support team in real-time</p>
                        <div class="text-sm text-blue-600 font-semibold">Average response: 2 min</div>
                    </div>

                    <!-- Email Support -->
                    <div class="bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 shadow-lg border-2 border-purple-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">📧</span>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-3">Email Support</h3>
                        <p class="text-gray-600 mb-4">Send us an email anytime</p>
                        <a href="mailto:support@codehelp.com" class="text-sm text-purple-600 font-semibold hover:text-purple-700">support@codehelp.com</a>
                    </div>

                    <!-- Phone Support -->
                    <div class="bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 shadow-lg border-2 border-green-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <span class="text-3xl">📱</span>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-3">Phone Support</h3>
                        <p class="text-gray-600 mb-4">Call us for immediate assistance</p>
                        <a href="tel:+15551234567" class="text-sm text-green-600 font-semibold hover:text-green-700">+1 (555) 123-4567</a>
                    </div>
                </div>

                <a href="{{ route('assignments.create') }}"
                   class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <span class="mr-3 text-2xl">🚀</span>
                    Get Started Now
                    <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
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
                    Ready to Get Expert Help?
                </h2>
                <p class="text-xl text-white/90 mb-12 leading-relaxed">
                    Join thousands of students who trust CodeHelp for their assignment needs.
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
                    <a href="{{ route('pricing') }}"
                        class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-blue-600 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300">
                        <span class="mr-4 text-3xl">💰</span>
                        View Pricing
                    </a>
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

        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection
