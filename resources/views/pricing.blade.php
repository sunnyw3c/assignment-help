@extends('layouts.app')

@section('title', 'Pricing & Plans | Transparent Assignment Help Rates - Assignment Help USA')
@section('description', 'Simple, transparent pricing for assignment help. Plans from $15/page with up to 40% off, free plagiarism reports, and unlimited revisions. Get an instant quote today.')

@php
    $accentMap = [
        'blue' => [
            'grad' => 'from-blue-500 to-blue-600',
            'text' => 'text-blue-600 dark:text-blue-400',
            'soft' => 'bg-blue-50 dark:bg-blue-900/20',
            'ring' => 'border-blue-200 dark:border-blue-500/30',
            'btn'  => 'bg-blue-600 hover:bg-blue-700 text-white',
            'badge'=> 'bg-blue-50 text-blue-600 border-blue-100 dark:bg-blue-950/30 dark:text-blue-400 dark:border-blue-800',
        ],
        'indigo' => [
            'grad' => 'from-indigo-500 to-purple-600',
            'text' => 'text-indigo-600 dark:text-indigo-400',
            'soft' => 'bg-indigo-50 dark:bg-indigo-900/20',
            'ring' => 'border-indigo-200 dark:border-indigo-500/30',
            'btn'  => 'bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white shadow-lg shadow-indigo-600/20',
            'badge'=> 'bg-indigo-50 text-indigo-600 border-indigo-100 dark:bg-indigo-950/30 dark:text-indigo-400 dark:border-indigo-800',
        ],
        'purple' => [
            'grad' => 'from-purple-500 to-fuchsia-600',
            'text' => 'text-purple-600 dark:text-purple-400',
            'soft' => 'bg-purple-50 dark:bg-purple-900/20',
            'ring' => 'border-purple-200 dark:border-purple-500/30',
            'btn'  => 'bg-gradient-to-r from-purple-600 to-fuchsia-600 hover:from-purple-700 hover:to-fuchsia-700 text-white',
            'badge'=> 'bg-purple-50 text-purple-600 border-purple-100 dark:bg-purple-950/30 dark:text-purple-400 dark:border-purple-800',
        ],
    ];

    $pricingStructuredData = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($faqs)
            ->map(fn ($faq) => [
                '@type' => 'Question',
                'name' => $faq['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['answer'],
                ],
            ])
            ->all(),
    ];
@endphp

@push('structured-data')
    <script type="application/ld+json">
{!! json_encode($pricingStructuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
    {{-- ============================================================ --}}
    {{-- HERO HEADER WITH HERO GRAPHIC --}}
    {{-- ============================================================ --}}
    <header class="relative overflow-hidden bg-slate-900 text-white py-16 sm:py-20 lg:py-24 dark:bg-slate-950">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-30"></div>
            <div class="absolute -top-40 -right-40 w-[500px] h-[500px] bg-gradient-to-br from-blue-600/20 to-indigo-600/20 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute -bottom-20 -left-20 w-[450px] h-[450px] bg-gradient-to-tr from-purple-600/15 to-pink-600/15 rounded-full blur-[100px] animate-pulse" style="animation-delay: 2s"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                {{-- Left Text Column --}}
                <div class="lg:col-span-7 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-500/10 text-blue-400 text-xs font-black uppercase tracking-widest mb-6 border border-blue-500/20 backdrop-blur-sm">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-ping"></span>
                        💸 Transparent Rates — No Hidden Charges
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black mb-6 leading-[1.1] tracking-tight text-white">
                        Simple & Honest Rates<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-sky-300 to-indigo-300">
                            Designed For Students
                        </span>
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 mb-8 max-w-2xl leading-relaxed font-medium">
                        Pay only for what you need. Rates start from <span class="font-black text-white">$15/page</span>,
                        with up to <span class="font-black text-emerald-400">40% OFF</span> automatically applied. Every order includes free plagiarism reports & unlimited revisions.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                        <a href="#calculator"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-7 py-4 rounded-2xl font-black text-sm uppercase tracking-widest transition-all duration-300 shadow-xl shadow-blue-600/25 hover:-translate-y-1 active:scale-95">
                            🧮 Calculate My Price
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="{{ route('order') }}"
                            class="inline-flex items-center justify-center border-2 border-slate-700 hover:border-slate-500 hover:bg-slate-800/40 text-slate-300 hover:text-white px-7 py-4 rounded-2xl font-black text-sm uppercase tracking-widest transition-all duration-300 active:scale-95">
                            🚀 Instant Order
                        </a>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-xs font-bold text-slate-400 border-t border-slate-800 pt-6">
                        <span class="flex items-center gap-1.5"><span class="text-emerald-400">✓</span> No hidden fees</span>
                        <span class="flex items-center gap-1.5"><span class="text-emerald-400">✓</span> Free Turnitin report</span>
                        <span class="flex items-center gap-1.5"><span class="text-emerald-400">✓</span> Free revisions</span>
                        <span class="flex items-center gap-1.5"><span class="text-emerald-400">✓</span> 24/7 USA Support</span>
                    </div>
                </div>

                {{-- Right Hero Visual --}}
                <div class="lg:col-span-5 hidden lg:block relative">
                    <div class="relative mx-auto max-w-md">
                        <!-- Glow behind image -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[3rem] blur-2xl opacity-30 animate-pulse"></div>
                        
                        <div class="relative bg-slate-800/80 backdrop-blur-xl border border-white/10 rounded-[2.5rem] p-6 shadow-2xl overflow-hidden">
                            <img src="{{ asset('images/student-hero.png') }}" 
                                 alt="Assignment Help USA Student" 
                                 class="w-full h-auto rounded-2xl object-cover transform hover:scale-105 transition-transform duration-700">

                            <!-- Floating badge overlays -->
                            <div class="absolute top-8 left-8 bg-slate-900/90 border border-emerald-500/30 backdrop-blur-md px-3.5 py-2 rounded-xl shadow-lg flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
                                <span class="text-xs font-black text-emerald-400">40% OFF Applied</span>
                            </div>

                            <div class="absolute bottom-8 right-8 bg-slate-900/90 border border-blue-500/30 backdrop-blur-md px-4 py-2.5 rounded-xl shadow-lg">
                                <div class="text-[10px] font-black uppercase text-slate-400 tracking-wider">Starts From</div>
                                <div class="text-lg font-black text-blue-400">$15 <span class="text-xs text-slate-400 font-normal">/ page</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- ============================================================ --}}
    {{-- COMPACT & MINIMAL PLANS SECTION --}}
    {{-- ============================================================ --}}
    <section id="plans" class="py-16 sm:py-20 bg-slate-50 dark:bg-slate-950 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/60 text-blue-700 text-[10px] font-black uppercase tracking-widest border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 mb-4">
                    Choose Your Plan Tiers
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-4 leading-tight">
                    Flexible Plans For <span class="text-blue-600">Every Goal</span>
                </h2>
                <p class="text-base text-slate-600 dark:text-slate-400 font-medium">
                    Pick a tier matched to your academic level. Upgrade for express deadlines or dedicated PhD reviewers.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto items-stretch">
                @foreach ($plans as $plan)
                    @php $a = $accentMap[$plan['accent']]; @endphp
                    <div class="flex flex-col bg-slate-50 dark:bg-slate-950 rounded-[2.5rem] p-6 sm:p-8 relative overflow-hidden group transition-all duration-500 hover:bg-white dark:hover:bg-slate-900 border border-slate-200/80 dark:border-slate-800 hover:shadow-[0_30px_60px_-15px_rgba(37,99,235,0.12)] hover:-translate-y-1.5
                        {{ $plan['popular'] ? 'ring-2 ring-indigo-500 shadow-xl dark:ring-indigo-500/80' : '' }}">

                        @if ($plan['popular'])
                            <div class="absolute top-4 right-4">
                                <span class="inline-flex items-center gap-1 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-white shadow-md">
                                    ⭐ Popular
                                </span>
                            </div>
                        @endif

                        <div class="flex items-center gap-4 mb-5">
                            <div class="h-12 w-12 flex items-center justify-center rounded-2xl bg-gradient-to-br {{ $a['grad'] }} text-white text-2xl shadow-md group-hover:scale-110 transition-transform">
                                {{ $plan['icon'] }}
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 dark:text-white">{{ $plan['name'] }}</h3>
                                <div class="flex items-baseline gap-1 mt-0.5">
                                    <span class="text-xs text-slate-400">from</span>
                                    <span class="text-2xl font-black text-slate-900 dark:text-white">${{ $plan['price'] }}</span>
                                    <span class="text-xs text-slate-500">/ pg</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-xs text-slate-500 dark:text-slate-400 font-medium mb-6 leading-relaxed">
                            {{ $plan['tagline'] }}
                        </p>

                        <ul role="list" class="space-y-2.5 mb-8 text-xs font-semibold text-slate-600 dark:text-slate-300 flex-grow">
                            @foreach ($plan['features'] as $feature)
                                <li class="flex items-center gap-2.5">
                                    @if ($feature['included'])
                                        <div class="w-4 h-4 rounded-md bg-emerald-50 dark:bg-emerald-950/40 flex items-center justify-center text-emerald-600 dark:text-emerald-400 flex-shrink-0">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                        <span>{{ $feature['text'] }}</span>
                                    @else
                                        <div class="w-4 h-4 rounded-md bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-400 flex-shrink-0">
                                            <svg class="w-2.5 h-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M6 18L18 6M6 6l12 12"/></svg>
                                        </div>
                                        <span class="text-slate-400 dark:text-slate-600 line-through">{{ $feature['text'] }}</span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('order', ['plan' => strtolower($plan['name'])]) }}"
                            class="mt-auto inline-flex items-center justify-center gap-2 w-full py-3.5 rounded-2xl {{ $a['btn'] }} font-black text-xs uppercase tracking-widest transition-all duration-300 active:scale-95 shadow-sm">
                            {{ $plan['cta'] }}
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- ALWAYS INCLUDED GUARANTEES --}}
    {{-- ============================================================ --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900 border-y border-slate-100 dark:border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100/60 text-emerald-700 text-[10px] font-black uppercase tracking-widest border border-emerald-200 dark:bg-emerald-900/30 dark:text-emerald-400 mb-4">
                    Zero Extra Charge
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-4 leading-tight">
                    Every Order Includes <span class="text-emerald-600">These Guarantees</span>
                </h2>
                <p class="text-base text-slate-600 dark:text-slate-400 font-medium">
                    No matter which tier or level you pick, these standards are built into every order.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                @foreach ($includedForEveryone as $item)
                    <div class="group rounded-[2rem] border border-slate-200/80 dark:border-slate-800 bg-slate-50 dark:bg-slate-950/60 p-6 transition-all duration-300 hover:bg-white dark:hover:bg-slate-900 hover:shadow-xl hover:-translate-y-1 hover:border-emerald-500/30">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-white dark:bg-slate-900 text-2xl shadow-md group-hover:scale-110 transition-transform">
                            {{ $item['icon'] }}
                        </div>
                        <h3 class="text-lg font-black text-slate-900 dark:text-white mb-2">{{ $item['title'] }}</h3>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-medium leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- LIVE CALCULATOR --}}
    {{-- ============================================================ --}}
    <section id="calculator" class="py-16 sm:py-24 bg-slate-50 dark:bg-slate-950 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-100/60 text-red-700 text-[10px] font-black uppercase tracking-widest border border-red-200 dark:bg-red-900/30 dark:text-red-400 mb-4">
                    Instant Price Calculator
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-4 leading-tight">
                    Calculate Your <span class="text-red-600">Exact Rate</span>
                </h2>
                <p class="text-base text-slate-600 dark:text-slate-400 font-medium">
                    Select your level, page count, and deadline below. Your live quote updates instantly.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                @livewire('budget-calculator')
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- HOW PRICING WORKS (LEVELS & DEADLINES) --}}
    {{-- ============================================================ --}}
    <section class="py-16 sm:py-24 bg-white dark:bg-slate-900 border-y border-slate-100 dark:border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/60 text-blue-700 text-[10px] font-black uppercase tracking-widest border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 mb-4">
                    Rate Breakdown
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-4 leading-tight">
                    How Rates Are <span class="text-blue-600">Determined</span>
                </h2>
                <p class="text-base text-slate-600 dark:text-slate-400 font-medium">
                    Academic level and deadline turnaround are the two primary factors that shape your price quote.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                {{-- Academic level --}}
                <div class="rounded-[2.5rem] border border-slate-200/80 dark:border-slate-800 bg-slate-50 dark:bg-slate-950/60 p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-blue-600 text-white text-lg shadow-md">🎓</div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white">By Academic Level</h3>
                    </div>
                    <div class="space-y-3">
                        @foreach ($academicLevels as $level)
                            <div class="flex items-center justify-between rounded-2xl border border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 transition-all hover:border-blue-300 dark:hover:border-blue-500/30">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl">{{ $level['icon'] }}</span>
                                    <div>
                                        <div class="text-sm font-black text-slate-900 dark:text-white">{{ $level['level'] }}</div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400 font-medium">{{ $level['desc'] }}</div>
                                    </div>
                                </div>
                                <div class="text-right shrink-0 pl-3">
                                    <div class="text-lg font-black text-blue-600 dark:text-blue-400">${{ $level['price'] }}</div>
                                    <div class="text-[9px] uppercase font-bold tracking-wider text-slate-400">from / page</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Deadline --}}
                <div class="rounded-[2.5rem] border border-slate-200/80 dark:border-slate-800 bg-slate-50 dark:bg-slate-950/60 p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex h-10 w-10 items-center justify-center rounded-2xl bg-rose-600 text-white text-lg shadow-md">⏱️</div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white">By Deadline</h3>
                    </div>
                    <div class="space-y-3">
                        @foreach ($deadlines as $deadline)
                            <div class="flex items-center justify-between rounded-2xl border border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 transition-all hover:border-rose-300 dark:hover:border-rose-500/30">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl">{{ $deadline['icon'] }}</span>
                                    <div>
                                        <div class="text-sm font-black text-slate-900 dark:text-white">{{ $deadline['label'] }} <span class="font-normal text-slate-400 text-xs">· {{ $deadline['window'] }}</span></div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400 font-medium">{{ $deadline['note'] }}</div>
                                    </div>
                                </div>
                                <div class="text-right shrink-0 pl-3">
                                    <span class="inline-block rounded-full bg-slate-100 dark:bg-slate-800 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-slate-700 dark:text-slate-300">{{ $deadline['modifier'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- FAQ --}}
    {{-- ============================================================ --}}
    <section class="py-16 sm:py-24 bg-slate-50 dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-[10px] font-black uppercase tracking-widest border border-slate-300 dark:bg-slate-800 dark:text-slate-300 dark:border-slate-700 mb-4">
                    Pricing FAQ
                </div>
                <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-4 leading-tight">
                    Frequently Asked <span class="text-indigo-600">Questions</span>
                </h2>
            </div>

            <div class="max-w-3xl mx-auto space-y-4">
                @foreach ($faqs as $faq)
                    <div x-data="{ open: false }" class="rounded-2xl border border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden transition-all shadow-sm">
                        <button type="button" x-on:click="open = !open"
                            class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-black text-slate-900 dark:text-white text-base">
                            <span>{{ $faq['question'] }}</span>
                            <svg x-bind:class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-blue-600 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-cloak class="px-6 pb-5 text-xs sm:text-sm text-slate-600 dark:text-slate-400 font-medium leading-relaxed">
                            {{ $faq['answer'] }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- FINAL TRUST CTA (MATCHING HOME PAGE TRUST BANNER) --}}
    {{-- ============================================================ --}}
    <section class="py-16 sm:py-20 bg-slate-900 dark:bg-slate-950 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="relative rounded-[2.5rem] bg-[#0F172A] p-8 sm:p-14 overflow-hidden border border-white/10 shadow-2xl text-center max-w-5xl mx-auto">
                <div class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
                <div class="absolute bottom-0 left-0 -ml-24 -mb-24 w-96 h-96 bg-indigo-600/10 rounded-full blur-[100px] pointer-events-none"></div>

                <div class="relative z-10 max-w-3xl mx-auto">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Ready For Perfection</span>
                    </div>

                    <h2 class="text-3xl sm:text-5xl font-black text-white mb-4 leading-tight">
                        Ready to Get Your<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Exact Instant Quote?</span>
                    </h2>

                    <p class="text-sm sm:text-base text-slate-300 max-w-2xl mx-auto mb-8 font-medium">
                        Submit your assignment topic and deadline to lock in your 40% discount. No obligation, 100% confidential.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('order') }}"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all duration-300 shadow-xl shadow-blue-600/25 hover:-translate-y-1 active:scale-95">
                            🚀 Submit Assignment
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="{{ route('faq') }}"
                            class="inline-flex items-center justify-center border border-slate-700 hover:border-slate-500 hover:bg-slate-800/40 text-slate-300 hover:text-white px-8 py-4 rounded-2xl font-black text-xs uppercase tracking-widest transition-all duration-300 active:scale-95">
                            📖 View All FAQs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
