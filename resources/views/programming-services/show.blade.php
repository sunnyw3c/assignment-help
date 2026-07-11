@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <x-creative-hero :service="$service" />

    <!-- Technologies Section -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Technologies We Work With</h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Our experts are proficient in all modern web development technologies and frameworks.</p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($serviceDetails['technologies'] as $category => $techs)
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">{{ $category }}</h3>
                        <div class="space-y-2">
                            @foreach ($techs as $tech)
                                <div class="flex items-center justify-center rounded-lg bg-blue-50 px-4 py-2 dark:bg-slate-950">
                                    <span class="text-sm font-medium text-slate-700 dark:text-slate-300">{{ $tech }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Transparent Pricing</h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Choose the package that fits your project needs and budget.</p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
                @foreach ($serviceDetails['pricing'] as $key => $package)
                    <div
                        class="relative flex flex-col rounded-2xl border bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:bg-slate-950 {{ $key === 'standard' ? 'border-blue-500 ring-2 ring-blue-500/20' : 'border-slate-200 dark:border-slate-800' }}">

                        @if ($key === 'standard')
                            <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                                <span class="rounded-full bg-blue-600 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">Most Popular</span>
                            </div>
                        @endif

                        <div class="mb-6 text-center">
                            <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $package['name'] }}</h3>
                            <p class="mt-2 text-3xl font-bold text-slate-900 dark:text-white">{{ $package['price'] }}</p>
                            <p class="text-sm text-slate-500 dark:text-slate-400">{{ $package['timeframe'] }}</p>
                        </div>

                        <ul class="mb-6 space-y-2">
                            @foreach ($package['features'] as $feature)
                                <li class="flex items-start gap-2">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-sm text-slate-700 dark:text-slate-300">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl px-4 py-2.5 text-sm font-semibold shadow-sm transition-colors {{ $key === 'standard' ? 'bg-blue-600 text-white hover:bg-blue-500' : 'border border-slate-300 text-slate-700 hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400' }}">
                            Get Started
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Our Development Process</h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">A proven methodology that delivers results.</p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($serviceDetails['process'] as $step)
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-lg">
                            <span>{{ $step['icon'] }}</span>
                        </div>
                        <p class="mb-1 text-xs font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400">{{ $step['step'] }}</p>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">{{ $step['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $step['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white dark:bg-slate-900 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 dark:text-white mb-6">What Students Say</h2>
                <p class="text-xl text-gray-600 dark:text-slate-400 max-w-3xl mx-auto">Real feedback from students who got help with their web
                    development projects</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($serviceDetails['testimonials'] as $testimonial)
                    <div
                        class="bg-white dark:bg-slate-950 rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 dark:border-slate-800">
                        <!-- Rating -->
                        <div class="flex space-x-1 mb-4">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300' }}"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.286-3.957a1 1 0 00-.364-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z" />
                                </svg>
                            @endfor
                        </div>

                        <!-- Review -->
                        <blockquote class="text-gray-700 dark:text-slate-300 leading-relaxed mb-6">
                            "{{ $testimonial['review'] }}"
                        </blockquote>

                        <!-- Student Info -->
                        <div class="border-t border-gray-100 dark:border-slate-800 pt-4">
                            <div class="font-bold text-gray-900 dark:text-white">{{ $testimonial['name'] }}</div>
                            <div class="text-sm text-gray-600 dark:text-slate-400">{{ $testimonial['role'] }}</div>
                            <div class="text-xs text-blue-600 dark:text-blue-400 font-medium">{{ $testimonial['university'] }}</div>
                            <div class="text-xs text-green-600 dark:text-green-400 font-medium mt-1">Project: {{ $testimonial['project'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50 dark:bg-slate-950 transition-colors duration-300">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 dark:text-white mb-6">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 dark:text-slate-400 max-w-3xl mx-auto">Everything you need to know about our web development
                    services</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                @foreach ($serviceDetails['faq'] as $index => $faq)
                    <div x-data="{ open: false }" class="bg-white dark:bg-slate-900 rounded-2xl shadow-lg border border-gray-100 dark:border-slate-800">
                        <button @click="open = !open"
                            class="w-full text-left px-8 py-6 flex items-center justify-between hover:bg-gray-50 dark:hover:bg-slate-800 rounded-2xl transition-colors duration-200">
                            <span class="text-lg font-bold text-gray-900 dark:text-white">{{ $faq['question'] }}</span>
                            <svg x-bind:class="open ? 'rotate-180' : ''"
                                class="w-6 h-6 text-gray-500 transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" class="px-8 pb-6">
                            <p class="text-gray-700 dark:text-slate-300 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-black mb-8">Ready to Start Your Web Development Project?</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">
                Get matched with an expert developer who understands your technology stack and project requirements.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('order') }}"
                    class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 dark:bg-slate-900 dark:text-blue-400 dark:hover:bg-slate-800 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl border border-transparent dark:border-slate-800">
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
    </section>

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

        @@keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 0.8;
            }
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

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        .animate-bounce-slow {
            animation: bounce-slow 3s ease-in-out infinite;
        }

        .animation-delay-1000 {
            animation-delay: 1s;
        }
    </style>
@endsection
