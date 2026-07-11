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
        "@@type": "FAQPage",
        "mainEntity": [
            @foreach($details->faqs as $index => $faq)
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
    @endif
 --}}
    <!-- Hero Section -->
    <x-creative-hero :service="$service" />

    <!-- What We Offer Section -->
    @if ($details && $details->what_we_offer && count($details->what_we_offer) > 0)
        <section class="py-20 bg-gray-50 dark:bg-slate-950 transition-colors duration-300">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-black text-gray-900 dark:text-white mb-6">What We Offer</h2>
                    <p class="text-xl text-gray-600 dark:text-slate-400 max-w-3xl mx-auto">Comprehensive {{ strtolower($service->name) }}
                        services tailored to your academic needs</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    @foreach ($details->what_we_offer as $offer)
                        <div
                            class="bg-white dark:bg-slate-900 rounded-xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-slate-800">
                            <div class="flex items-start space-x-3">
                                <div
                                    class="w-8 h-8 bg-blue-100 dark:bg-blue-900/30 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                    <span class="text-blue-600 dark:text-blue-400 text-sm font-bold">✓</span>
                                </div>
                                <div class="text-gray-700 dark:text-slate-300 font-medium">{{ $offer }}</div>
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
                    class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 dark:bg-slate-900 dark:text-blue-400 dark:hover:bg-slate-800 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl border border-transparent dark:border-slate-800">
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

        @@keyframes float-delayed {

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
