@extends('layouts.app')

@section('title', $language['name'] . ' Programming Help - Expert Assistance | Assignment Help USA')
@section('description', 'Get expert ' . $language['name'] . ' programming help. ' . $language['description'] . ' Available 24/7 with fast turnaround.')

@section('content')

    <!-- Hero -->
    <header class="bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 text-white py-20">
        <div class="container mx-auto px-4 text-center max-w-4xl">
            <div class="text-7xl mb-6">{{ $language['icon'] }}</div>
            <h1 class="text-5xl md:text-6xl font-black mb-6">
                {{ $language['name'] }} Programming Help
            </h1>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">{{ $language['description'] }}</p>
            <div class="flex flex-wrap gap-3 justify-center mb-8">
                <span class="bg-white/20 px-4 py-2 rounded-full text-sm font-medium">{{ $language['difficulty'] }}</span>
                @foreach($language['use_cases'] as $useCase)
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm">{{ $useCase }}</span>
                @endforeach
            </div>
            <a href="{{ route('order') }}"
               class="inline-flex items-center bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-10 py-4 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-xl">
                Get {{ $language['name'] }} Help Now
                <svg class="ml-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </header>

    <!-- What We Help With -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-4">What We Help With</h2>
                <p class="text-lg text-gray-600">Expert {{ $language['name'] }} assistance across all areas</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($language['use_cases'] as $useCase)
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-6 border border-indigo-100 text-center hover:shadow-lg transition-shadow">
                    <div class="text-4xl mb-3">💻</div>
                    <h3 class="font-bold text-gray-900">{{ $useCase }}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Other Languages -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-3xl font-black text-gray-900 text-center mb-12">Other Languages We Support</h2>
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                @foreach($languages as $lang)
                    @if($lang['slug'] !== $language['slug'])
                    <a href="{{ route('languages.show', $lang['slug']) }}"
                       class="bg-white rounded-2xl p-4 text-center shadow hover:shadow-md transition-all hover:-translate-y-1 border border-gray-100">
                        <div class="text-3xl mb-2">{{ $lang['icon'] }}</div>
                        <div class="text-sm font-semibold text-gray-800">{{ $lang['name'] }}</div>
                    </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white text-center">
        <div class="container mx-auto px-4 max-w-3xl">
            <h2 class="text-4xl font-black mb-6">Ready to Get {{ $language['name'] }} Help?</h2>
            <p class="text-xl text-indigo-100 mb-10">Expert tutors available 24/7. Fast delivery, quality guaranteed.</p>
            <a href="{{ route('order') }}"
               class="inline-flex items-center bg-white text-indigo-600 hover:bg-indigo-50 px-12 py-5 rounded-2xl font-black text-xl transition-all shadow-2xl hover:scale-105">
                Place Your Order
            </a>
        </div>
    </section>

@endsection
