@extends('layouts.app')

@section('title', $language['name'] . ' Programming Help - Expert Assistance | Assignment Help USA')
@section('description', 'Get expert ' . $language['name'] . ' programming help. ' . $language['description'] . ' Available 24/7 with fast turnaround.')

@section('content')

    <!-- Hero -->
    <header class="bg-slate-900 py-14 text-white sm:py-16">
        <div class="mx-auto max-w-3xl px-4 text-center sm:px-6 lg:px-8">
            <div class="mb-4 text-4xl">{{ $language['icon'] }}</div>
            <h1 class="text-3xl font-bold tracking-tight sm:text-4xl">
                {{ $language['name'] }} Programming Help
            </h1>
            <p class="mx-auto mt-4 max-w-2xl text-sm leading-relaxed text-slate-400 sm:text-base">{{ $language['description'] }}</p>
            <div class="mb-2 mt-6 flex flex-wrap justify-center gap-2">
                <span class="rounded-full bg-white/15 px-3 py-1 text-xs font-semibold">{{ $language['difficulty'] }}</span>
                @foreach($language['use_cases'] as $useCase)
                    <span class="rounded-full bg-white/10 px-3 py-1 text-xs">{{ $useCase }}</span>
                @endforeach
            </div>
            <a href="{{ route('order') }}"
               class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                Get {{ $language['name'] }} Help Now
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </header>

    <!-- What We Help With -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">What We Help With</h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">Expert {{ $language['name'] }} assistance across all areas</p>
            </div>
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($language['use_cases'] as $useCase)
                <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-3 text-2xl">💻</div>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">{{ $useCase }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Other Languages -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Other Languages We Support</h2>
            </div>
            <div class="grid grid-cols-2 gap-4 md:grid-cols-5">
                @foreach($languages as $lang)
                    @if($lang['slug'] !== $language['slug'])
                    <a href="{{ route('languages.show', $lang['slug']) }}"
                       class="rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-2 text-2xl">{{ $lang['icon'] }}</div>
                        <div class="text-sm font-semibold text-slate-800 dark:text-slate-200">{{ $lang['name'] }}</div>
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-blue-600 py-14 text-center text-white sm:py-16">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold tracking-tight sm:text-3xl">Ready to Get {{ $language['name'] }} Help?</h2>
            <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-blue-100 sm:text-base">Expert tutors available 24/7. Fast delivery, quality guaranteed.</p>
            <a href="{{ route('order') }}"
               class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-blue-600 shadow-sm transition-colors hover:bg-blue-50">
                Place Your Order
            </a>
        </div>
    </section>

@endsection
