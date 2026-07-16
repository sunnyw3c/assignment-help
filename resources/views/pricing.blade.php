@extends('layouts.app')

@section('title', 'Pricing & Plans | Transparent Assignment Help Rates - Assignment Help USA')
@section('description', 'Simple, transparent pricing for assignment help. Plans from $25/page with up to 40% off, free plagiarism reports, and unlimited revisions. Get an instant quote today.')

@php
    $accentMap = [
        'blue' => [
            'grad' => 'from-blue-500 to-blue-600',
            'text' => 'text-blue-600 dark:text-blue-400',
            'soft' => 'bg-blue-50 dark:bg-blue-900/20',
            'ring' => 'border-blue-200 dark:border-blue-500/30',
            'btn'  => 'bg-blue-600 hover:bg-blue-700',
        ],
        'indigo' => [
            'grad' => 'from-indigo-500 to-purple-600',
            'text' => 'text-indigo-600 dark:text-indigo-400',
            'soft' => 'bg-indigo-50 dark:bg-indigo-900/20',
            'ring' => 'border-indigo-200 dark:border-indigo-500/30',
            'btn'  => 'bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700',
        ],
        'purple' => [
            'grad' => 'from-purple-500 to-fuchsia-600',
            'text' => 'text-purple-600 dark:text-purple-400',
            'soft' => 'bg-purple-50 dark:bg-purple-900/20',
            'ring' => 'border-purple-200 dark:border-purple-500/30',
            'btn'  => 'bg-gradient-to-r from-purple-600 to-fuchsia-600 hover:from-purple-700 hover:to-fuchsia-700',
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
    {{-- HERO --}}
    {{-- ============================================================ --}}
    <header class="relative overflow-hidden bg-slate-900 text-white py-16 lg:py-24 dark:bg-slate-950">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-20"></div>
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-full blur-[130px] animate-pulse-slow"></div>
            <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-gradient-to-tr from-cyan-500/10 to-blue-500/10 rounded-full blur-[110px] animate-pulse-slow"></div>
        </div>

        <div class="relative z-10 section-container text-center">
            <div class="mx-auto max-w-3xl animate-fade-in-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-500/10 text-indigo-300 text-xs font-black uppercase tracking-wider mb-8 border border-indigo-500/20 shadow-sm shadow-indigo-500/5">
                    <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                    💸 Transparent Pricing — No Hidden Fees
                </div>

                <h1 class="text-4xl sm:text-6xl font-black mb-8 leading-tight tracking-tight text-white">
                    Simple, Honest Pricing <br>
                    <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-indigo-300 bg-clip-text text-transparent">
                        You Can Afford
                    </span>
                </h1>

                <p class="text-lg sm:text-xl text-slate-300 mb-10 leading-relaxed font-medium">
                    Pay only for what you need. Plans starting at <span class="font-black text-white">$25/page</span>,
                    with up to <span class="font-black text-white">40% off</span> automatically applied — plus free plagiarism
                    reports and unlimited revisions on every order.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#plans"
                        class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-7 py-4 rounded-xl font-black transition-all duration-300 shadow-xl shadow-purple-650/20 hover:-translate-y-1 active:scale-95">
                        👀 View Plans
                        <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#calculator"
                        class="inline-flex items-center justify-center border-2 border-slate-700 hover:border-slate-500 hover:bg-slate-800/30 text-slate-300 hover:text-white px-7 py-4 rounded-xl font-black transition-all duration-300 active:scale-95">
                        🧮 Calculate My Price
                    </a>
                </div>

                <div class="mt-10 flex flex-wrap items-center justify-center gap-x-8 gap-y-3 text-sm font-semibold text-slate-400">
                    <span class="flex items-center gap-2"><span class="text-emerald-400">✓</span> No hidden fees</span>
                    <span class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Free revisions</span>
                    <span class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Money-back guarantee</span>
                    <span class="flex items-center gap-2"><span class="text-emerald-400">✓</span> 24/7 support</span>
                </div>
            </div>
        </div>
    </header>

    {{-- ============================================================ --}}
    {{-- PLANS --}}
    {{-- ============================================================ --}}
    <section id="plans" class="py-24 bg-gray-50 dark:bg-slate-950 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500"></div>

        <div class="section-container relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-100 text-indigo-700 text-[10px] font-black uppercase tracking-widest border border-indigo-200 dark:bg-indigo-900/30 dark:text-indigo-400 mb-6">
                    Choose Your Plan
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-5 leading-tight">
                    Plans Built Around <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Your Deadline</span>
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 font-medium">
                    Every plan is priced per page and includes our core guarantees. Scale up when the work gets tougher or the clock gets tighter.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch max-w-6xl mx-auto">
                @foreach ($plans as $plan)
                    @php $a = $accentMap[$plan['accent']]; @endphp
                    <div class="relative flex flex-col rounded-3xl border bg-white dark:bg-slate-900 p-8 shadow-xl transition-all duration-500 hover:-translate-y-2
                        {{ $plan['popular'] ? 'border-transparent ring-2 ring-indigo-500 shadow-2xl lg:scale-105 lg:z-10' : 'border-slate-100 dark:border-slate-800 hover:shadow-2xl' }}">

                        @if ($plan['popular'])
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2">
                                <span class="inline-flex items-center gap-1.5 rounded-full bg-gradient-to-r from-indigo-600 to-purple-600 px-4 py-1.5 text-[11px] font-black uppercase tracking-wider text-white shadow-lg shadow-indigo-600/30">
                                    ⭐ Most Popular
                                </span>
                            </div>
                        @endif

                        <div class="mb-6">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-br {{ $a['grad'] }} flex items-center justify-center text-3xl shadow-lg mb-5">
                                {{ $plan['icon'] }}
                            </div>
                            <h3 class="text-2xl font-black text-slate-900 dark:text-white">{{ $plan['name'] }}</h3>
                            <p class="mt-2 text-sm text-slate-500 dark:text-slate-400 font-medium leading-relaxed">{{ $plan['tagline'] }}</p>
                        </div>

                        <div class="mb-6 flex items-baseline gap-1.5">
                            <span class="text-sm font-bold text-slate-400 dark:text-slate-500">from</span>
                            <span class="text-5xl font-black text-slate-900 dark:text-white tracking-tight">${{ $plan['price'] }}</span>
                            <span class="text-sm font-bold text-slate-500 dark:text-slate-400">/ {{ $plan['unit'] }}</span>
                        </div>

                        <a href="{{ route('order') }}"
                            class="mb-8 block w-full rounded-xl {{ $a['btn'] }} px-6 py-3.5 text-center text-sm font-black text-white shadow-lg transition-all active:scale-95">
                            {{ $plan['cta'] }}
                        </a>

                        <ul class="space-y-3.5 flex-grow">
                            @foreach ($plan['features'] as $feature)
                                <li class="flex items-start gap-3 text-sm">
                                    @if ($feature['included'])
                                        <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-gradient-to-br {{ $a['grad'] }} text-[11px] font-black text-white">✓</span>
                                        <span class="font-medium text-slate-700 dark:text-slate-300">{{ $feature['text'] }}</span>
                                    @else
                                        <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-slate-100 dark:bg-slate-800 text-[11px] font-black text-slate-400 dark:text-slate-600">✕</span>
                                        <span class="font-medium text-slate-400 dark:text-slate-600 line-through">{{ $feature['text'] }}</span>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>

            <p class="mt-10 text-center text-sm text-slate-500 dark:text-slate-400 font-medium">
                Not sure which fits? <a href="{{ route('order') }}" class="font-bold text-indigo-600 dark:text-indigo-400 hover:underline underline-offset-2">Submit your assignment</a> and get an exact quote in 15–30 minutes.
            </p>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- INCLUDED FOR EVERYONE --}}
    {{-- ============================================================ --}}
    <section class="py-24 bg-white dark:bg-slate-900 border-y border-slate-100 dark:border-slate-800/60">
        <div class="section-container">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-black uppercase tracking-widest border border-emerald-200 dark:bg-emerald-900/30 dark:text-emerald-400 mb-6">
                    Always Included
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-5 leading-tight">
                    Every Plan Comes With <span class="bg-gradient-to-r from-emerald-500 to-teal-600 bg-clip-text text-transparent">These Guarantees</span>
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 font-medium">
                    No matter which plan you pick, these are baked in — never billed as extras.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                @foreach ($includedForEveryone as $item)
                    <div class="group rounded-2xl border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-950/40 p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:border-emerald-200 dark:hover:border-emerald-500/30">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-white dark:bg-slate-900 text-2xl shadow-sm group-hover:scale-110 transition-transform">
                            {{ $item['icon'] }}
                        </div>
                        <h3 class="text-lg font-black text-slate-900 dark:text-white mb-2">{{ $item['title'] }}</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 font-medium leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- LIVE CALCULATOR --}}
    {{-- ============================================================ --}}
    <section id="calculator" class="py-24 bg-gray-50 dark:bg-slate-950 relative overflow-hidden">
        <div class="absolute top-1/4 right-0 w-[400px] h-[400px] bg-gradient-to-tr from-red-500/10 to-rose-500/10 rounded-full blur-[110px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-purple-500/10 to-indigo-500/10 rounded-full blur-[110px] pointer-events-none"></div>

        <div class="section-container relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-rose-100 text-rose-700 text-[10px] font-black uppercase tracking-widest border border-rose-200 dark:bg-rose-900/30 dark:text-rose-400 mb-6">
                    Instant Quote
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-5 leading-tight">
                    Calculate Your <span class="bg-gradient-to-r from-red-600 to-rose-600 bg-clip-text text-transparent">Exact Price</span>
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 font-medium">
                    Adjust the level, pages, and deadline below. Your discounted price updates live — no signup required.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                @livewire('budget-calculator')
            </div>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- HOW PRICE IS DETERMINED (LEVELS + DEADLINES) --}}
    {{-- ============================================================ --}}
    <section class="py-24 bg-white dark:bg-slate-900 border-y border-slate-100 dark:border-slate-800/60">
        <div class="section-container">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 mb-6">
                    How Pricing Works
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-5 leading-tight">
                    Four Things Shape <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Your Quote</span>
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400 font-medium">
                    Academic level, page count, subject complexity, and deadline. Here's how the two biggest levers move your price.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 max-w-6xl mx-auto">
                {{-- Academic level --}}
                <div class="rounded-3xl border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-950/40 p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-lg shadow-lg">🎓</div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white">By Academic Level</h3>
                    </div>
                    <div class="space-y-3">
                        @foreach ($academicLevels as $level)
                            <div class="flex items-center justify-between rounded-2xl border border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 transition-all hover:border-blue-200 dark:hover:border-blue-500/30">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl">{{ $level['icon'] }}</span>
                                    <div>
                                        <div class="text-sm font-black text-slate-900 dark:text-white">{{ $level['level'] }}</div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400 font-medium">{{ $level['desc'] }}</div>
                                    </div>
                                </div>
                                <div class="text-right shrink-0 pl-3">
                                    <div class="text-lg font-black text-blue-600 dark:text-blue-400">${{ $level['price'] }}</div>
                                    <div class="text-[10px] uppercase font-bold tracking-wider text-slate-400">from / page</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Deadline --}}
                <div class="rounded-3xl border border-slate-100 dark:border-slate-800 bg-slate-50 dark:bg-slate-950/40 p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-rose-500 to-orange-500 text-lg shadow-lg">⏱️</div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white">By Deadline</h3>
                    </div>
                    <div class="space-y-3">
                        @foreach ($deadlines as $deadline)
                            <div class="flex items-center justify-between rounded-2xl border border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 p-4 transition-all hover:border-rose-200 dark:hover:border-rose-500/30">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl">{{ $deadline['icon'] }}</span>
                                    <div>
                                        <div class="text-sm font-black text-slate-900 dark:text-white">{{ $deadline['label'] }} <span class="font-medium text-slate-400">· {{ $deadline['window'] }}</span></div>
                                        <div class="text-xs text-slate-500 dark:text-slate-400 font-medium">{{ $deadline['note'] }}</div>
                                    </div>
                                </div>
                                <div class="text-right shrink-0 pl-3">
                                    <span class="inline-block rounded-full bg-slate-100 dark:bg-slate-800 px-3 py-1 text-[10px] font-black uppercase tracking-wider text-slate-600 dark:text-slate-300">{{ $deadline['modifier'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Add-ons --}}
            <div class="mt-10 max-w-6xl mx-auto">
                <div class="rounded-3xl border border-slate-100 dark:border-slate-800 bg-gradient-to-br from-indigo-50 to-purple-50 dark:from-slate-950/40 dark:to-slate-950/40 p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-fuchsia-600 text-lg shadow-lg">➕</div>
                        <h3 class="text-xl font-black text-slate-900 dark:text-white">Optional Add-Ons</h3>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        @foreach ($addons as $addon)
                            <div class="flex items-center gap-3 rounded-2xl border border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 p-4">
                                <span class="text-2xl">{{ $addon['icon'] }}</span>
                                <div>
                                    <div class="text-sm font-black text-slate-900 dark:text-white">{{ $addon['name'] }}</div>
                                    <div class="text-xs font-bold text-purple-600 dark:text-purple-400">{{ $addon['price'] }} <span class="text-slate-400 font-medium">{{ $addon['unit'] }}</span></div>
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
    <section class="py-24 bg-gray-50 dark:bg-slate-950">
        <div class="section-container">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-slate-200 text-slate-700 text-[10px] font-black uppercase tracking-widest border border-slate-300 dark:bg-slate-800 dark:text-slate-300 dark:border-slate-700 mb-6">
                    Pricing FAQ
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 dark:text-white mb-5 leading-tight">
                    Pricing Questions, <span class="bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Answered</span>
                </h2>
            </div>

            <div class="max-w-3xl mx-auto space-y-4">
                @foreach ($faqs as $faq)
                    <div x-data="{ open: false }" class="rounded-2xl border border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden transition-all">
                        <button type="button" x-on:click="open = !open"
                            class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-base font-black text-slate-900 dark:text-white">{{ $faq['question'] }}</span>
                            <svg x-bind:class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-indigo-500 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-collapse x-cloak class="px-6 pb-5 -mt-1">
                            <p class="text-sm text-slate-600 dark:text-slate-400 font-medium leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <p class="mt-10 text-center text-sm text-slate-500 dark:text-slate-400 font-medium">
                Still have questions? Read the <a href="{{ route('faq') }}" class="font-bold text-indigo-600 dark:text-indigo-400 hover:underline underline-offset-2">full FAQ</a> or reach our 24/7 support team.
            </p>
        </div>
    </section>

    {{-- ============================================================ --}}
    {{-- FINAL CTA --}}
    {{-- ============================================================ --}}
    <section class="relative overflow-hidden bg-slate-900 dark:bg-slate-950 py-20">
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-20"></div>
            <div class="absolute -top-20 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-full blur-[120px]"></div>
        </div>

        <div class="relative z-10 section-container text-center">
            <h2 class="text-3xl sm:text-5xl font-black text-white mb-6 leading-tight">
                Ready to Get an Exact Quote?
            </h2>
            <p class="mx-auto max-w-2xl text-lg text-slate-300 font-medium mb-10">
                Submit your assignment details and receive a transparent, all-inclusive price in 15–30 minutes. No commitment, no hidden fees.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('order') }}"
                    class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-black transition-all duration-300 shadow-xl shadow-purple-650/20 hover:-translate-y-1 active:scale-95">
                    🚀 Get My Quote
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('how-it-works') }}"
                    class="inline-flex items-center justify-center border-2 border-slate-700 hover:border-slate-500 hover:bg-slate-800/30 text-slate-300 hover:text-white px-8 py-4 rounded-xl font-black transition-all duration-300 active:scale-95">
                    📖 How It Works
                </a>
            </div>
        </div>
    </section>
@endsection
