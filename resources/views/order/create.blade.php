@extends('layouts.app')

@section('title', 'Place Order - Get Academic Help')

@section('content')
<div class="min-h-screen bg-slate-50/60 py-6 sm:py-10 relative overflow-hidden">
    {{-- Subtle Ambient Mesh Background --}}
    <div class="absolute inset-0 pointer-events-none opacity-40">
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[800px] h-[360px] bg-gradient-to-b from-indigo-100/60 via-purple-50/30 to-transparent blur-3xl"></div>
    </div>

    <div class="container mx-auto max-w-6xl px-4 sm:px-6 relative z-10">
        <!-- Minimalist Page Header -->
        <div class="text-center max-w-2xl mx-auto mb-6 sm:mb-8">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-100/80 text-indigo-700 text-[11px] font-semibold tracking-wide mb-2.5">
                <span class="w-1.5 h-1.5 rounded-full bg-indigo-600 animate-pulse"></span>
                Instant Quote & Dedicated Expert Match
            </div>
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold tracking-tight text-slate-900 leading-tight">
                Submit Your Assignment
            </h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-1.5 leading-normal">
                Fill in the details below. Review your instant price estimate and get started in minutes.
            </p>
        </div>

        @if(session('success'))
            <div class="max-w-2xl mx-auto bg-emerald-50 border border-emerald-200 text-emerald-800 px-4 py-3 rounded-xl mb-6 text-xs sm:text-sm flex items-center gap-2 shadow-sm animate-fade-in">
                <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Livewire Order Form Component -->
        <div class="transition-all duration-300">
            @livewire('order.order-form-component')
        </div>

        {{-- Minimalist Guarantees Grid --}}
        <div class="mt-8 sm:mt-10 grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 max-w-5xl mx-auto">
            <div class="bg-white border border-slate-200/80 rounded-xl p-4 flex items-start gap-3 shadow-xs hover:border-slate-300 transition-colors">
                <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center flex-shrink-0 text-base">✍️</div>
                <div>
                    <h3 class="text-xs font-bold text-slate-900">Vetted PhD Writers</h3>
                    <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">Top 2% subject matter specialists tailored to your topic.</p>
                </div>
            </div>

            <div class="bg-white border border-slate-200/80 rounded-xl p-4 flex items-start gap-3 shadow-xs hover:border-slate-300 transition-colors">
                <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 text-base">⚡</div>
                <div>
                    <h3 class="text-xs font-bold text-slate-900">100% On-Time Delivery</h3>
                    <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">Guaranteed delivery before deadline or your money back.</p>
                </div>
            </div>

            <div class="bg-white border border-slate-200/80 rounded-xl p-4 flex items-start gap-3 shadow-xs hover:border-slate-300 transition-colors">
                <div class="w-8 h-8 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center flex-shrink-0 text-base">🔒</div>
                <div>
                    <h3 class="text-xs font-bold text-slate-900">Strict Confidentiality</h3>
                    <p class="text-[11px] text-slate-500 mt-0.5 leading-relaxed">End-to-end 256-bit encryption with zero data sharing.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

