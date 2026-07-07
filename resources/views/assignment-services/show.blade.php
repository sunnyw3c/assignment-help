@extends('layouts.app')

@section('title', $service->meta_title ?? $service->name . ' - Professional Assignment Help | AssignmentHelp')
@section('description', $service->meta_description ?? $service->short_description)
@section('keywords',
    'assignment help, ' .
    strtolower($service->name) .
    ', academic writing, essay writing, research
    paper help')

@section('content')
    <!-- Structured Data for Service -->


    {{-- @if ($details && $details->faqs)
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            @foreach($details->faqs as $index => $faq)
            {
                "@type": "Question",
                "name": "{{ $faq['question'] }}",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "{{ $faq['answer'] }}"
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script>
    @endif
 --}}
    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 pt-20 pb-16"
        role="banner">
        <!-- Background Elements -->
        <div class="absolute inset-0 opacity-30">
            <!-- Academic Elements -->
            <div class="absolute top-20 left-10 animate-float-slow">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs text-gray-600">
                    <div class="text-blue-600 font-semibold">{{ $service->name }}</div>
                    <div class="text-gray-500">{{ $service->rating }}⭐ Rating</div>
                </div>
            </div>

            <div class="absolute top-40 right-16 animate-float-delayed">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs text-gray-600">
                    <div class="text-green-600 font-semibold">✓ Plagiarism-Free</div>
                    <div class="text-gray-500">100% Original</div>
                </div>
            </div>

            <div class="absolute bottom-32 left-1/4 animate-float">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs text-gray-600">
                    <div class="text-purple-600 font-semibold">{{ $service->turnaround }}</div>
                    <div class="text-gray-500">Fast Delivery</div>
                </div>
            </div>

            <!-- Geometric Shapes -->
            <div class="absolute top-20 right-20 w-32 h-32 bg-blue-200 rounded-full opacity-30 animate-pulse"></div>
            <div class="absolute bottom-40 left-10 w-20 h-20 bg-indigo-200 rounded-full opacity-40 animate-bounce"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-purple-200 transform rotate-45 opacity-25"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-left">
                    <!-- Breadcrumb -->
                    <nav class="mb-6">
                        <div class="flex items-center space-x-2 text-gray-500 text-sm">
                            <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Home</a>
                            <span>›</span>
                            <a href="{{ route('services.index') }}" class="hover:text-blue-600 transition-colors">All
                                Services</a>
                            <span>›</span>
                            <span class="text-gray-900 font-medium">{{ $service->name }}</span>
                        </div>
                    </nav>

                    <!-- Status Badge -->
                    <div
                        class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        {{ $service->orders_completed }}+ Orders Completed Successfully
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        @if ($details && $details->hero_title)
                            {{ $details->hero_title }}
                        @else
                            {{ $service->name }}
                        @endif
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-lg">
                        @if ($details && $details->hero_description)
                            {{ $details->hero_description }}
                        @else
                            {{ $service->short_description }}
                        @endif
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-10">
                        <a href="{{ route('order', ['assignment_service' => $service->id]) }}"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="mr-2">📝</span>
                            Order Now
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-1">{{ $service->rating }}</div>
                            <div class="text-sm text-gray-500">Rating</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 mb-1">{{ $service->orders_completed }}+</div>
                            <div class="text-sm text-gray-500">Orders</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-1">{{ $service->turnaround }}</div>
                            <div class="text-sm text-gray-500">Delivery</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Document Mockup -->
                <div class="relative">
                    <!-- Document Mockup -->
                    <div
                        class="bg-white rounded-xl shadow-2xl p-8 transform rotate-3 hover:rotate-1 transition-transform duration-500 border border-gray-200">
                        <!-- Document Header -->
                        <div class="border-b border-gray-200 pb-4 mb-6">
                            <div class="text-2xl font-bold text-gray-900 mb-2">{{ $service->name }}</div>
                            <div class="flex items-center space-x-4 text-sm text-gray-600">
                                <span class="flex items-center">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    {{ $service->rating }}⭐ Rating
                                </span>
                                <span>|</span>
                                <span>{{ $service->orders_completed }}+ Orders</span>
                            </div>
                        </div>

                        <!-- Document Content -->
                        <div class="space-y-4">
                            @if ($service->features && count($service->features) > 0)
                                @foreach (array_slice($service->features, 0, 5) as $feature)
                                    <div class="flex items-start space-x-3">
                                        <div
                                            class="w-6 h-6 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                            <span class="text-green-600 text-xs">✓</span>
                                        </div>
                                        <div class="text-gray-700">{{ $feature }}</div>
                                    </div>
                                @endforeach
                            @endif

                            <div class="pt-4 border-t border-gray-200">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-gray-600">Price per page:</span>
                                    <span class="text-2xl font-bold text-blue-600">{{ $service->formatted_price }}</span>
                                </div>
                                <div class="flex items-center justify-between text-sm">
                                    <span class="text-gray-600">Turnaround:</span>
                                    <span class="font-semibold text-purple-600">{{ $service->turnaround }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div
                        class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce border border-green-200">
                        <div class="flex items-center text-sm">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            <span class="font-semibold text-gray-800">Expert Available</span>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-blue-600 text-white rounded-lg shadow-lg p-4">
                        <div class="text-sm font-semibold">✅ {{ $service->name }} Ready!</div>
                        <div class="text-xs opacity-90">Starting from {{ $service->formatted_price }}</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- What We Offer Section -->
    @if ($details && $details->what_we_offer && count($details->what_we_offer) > 0)
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-black text-gray-900 mb-6">What We Offer</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive {{ strtolower($service->name) }}
                        services tailored to your academic needs</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    @foreach ($details->what_we_offer as $offer)
                        <div
                            class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <span class="text-blue-600 text-sm">✓</span>
                                </div>
                                <div class="text-gray-700 font-medium">{{ $offer }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Custom Content Section (for child templates) -->
    @yield('custom-content')

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-black mb-8">Ready to Get Started with {{ $service->name }}?</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">
                Get matched with an expert academic writer who understands your subject and requirements.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('order', ['assignment_service' => $service->id]) }}"
                    class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <span class="mr-4 text-3xl">📝</span>
                    Order Now
                    <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('services.index') }}"
                    class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-blue-600 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300">
                    <span class="mr-4 text-3xl">📚</span>
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Price Calculator Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calculateBtn = document.getElementById('calculate-btn');
            const priceResult = document.getElementById('price-result');
            const finalPriceSpan = document.getElementById('final-price');
            const pricePerPageSpan = document.getElementById('price-per-page');

            calculateBtn.addEventListener('click', function() {
                const pages = parseInt(document.getElementById('pages').value);
                const academicLevel = document.getElementById('academic_level').value;
                const urgencyHours = parseInt(document.getElementById('urgency_hours').value);
                const serviceId = {{ $service->id }};

                fetch('{{ route('services.assignment.calculate-price') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            service_id: serviceId,
                            pages: pages,
                            academic_level: academicLevel,
                            urgency_hours: urgencyHours
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        finalPriceSpan.textContent = data.final_price;
                        pricePerPageSpan.textContent = '$' + data.price_per_page;
                        priceResult.classList.remove('hidden');
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error calculating price. Please try again.');
                    });
            });
        });
    </script>

    <!-- Custom Styles -->
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

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-25px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 7s ease-in-out infinite;
            animation-delay: 2s;
        }
    </style>
@endsection
