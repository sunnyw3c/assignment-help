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
        <section class="bg-slate-50 py-14 transition-colors duration-300 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">What We Offer</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Comprehensive {{ strtolower($service->name) }}
                        services tailored to your academic needs</p>
                </div>

                <div class="mx-auto grid max-w-6xl grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($details->what_we_offer as $offer)
                        <div
                            class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                            <div class="flex items-start gap-3">
                                <div
                                    class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-blue-50 dark:bg-blue-950/40">
                                    <span class="text-sm font-bold text-blue-600 dark:text-blue-400">✓</span>
                                </div>
                                <div class="text-sm font-medium text-slate-700 dark:text-slate-300">{{ $offer }}</div>
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
    <section class="bg-blue-600 py-14 text-white sm:py-16">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Ready to Get Started with {{ $service->name }}?</h2>
                <p class="mt-4 text-base leading-relaxed text-blue-100 sm:text-lg">
                    Get matched with an expert academic writer who understands your subject and requirements.
                </p>

                <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ route('order', ['assignment_service' => $service->id]) }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-blue-600 shadow-sm transition-colors hover:bg-slate-100 dark:bg-slate-900 dark:text-blue-400 dark:hover:bg-slate-800">
                        Order Now
                        <svg class="h-4 w-4" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('services.index') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-white px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white hover:text-blue-600">
                        View All Services
                    </a>
                </div>
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
