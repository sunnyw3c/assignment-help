@extends('layouts.app')

@section('title', 'Place Order - Get Academic Help')

@section('content')
<div class="relative min-h-screen py-8 sm:py-16 bg-gradient-to-br from-[#f5f0e8] via-[#fdf8f0] to-[#f9f4ec] dark:from-[#0f172a] dark:via-[#1a2537] dark:to-[#0f172a] overflow-hidden transition-colors duration-300">
    <!-- Dot grid overlay -->
    <div class="absolute inset-0 z-0 pointer-events-none opacity-50 bg-[radial-gradient(#d1c9bd_1px,transparent_1px)] dark:bg-[radial-gradient(#1e3a5f_1px,transparent_1px)] [background-size:24px_24px]"></div>
    
    <!-- Radial glow elements -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="absolute top-[10%] left-[5%] w-[60%] h-[50%] bg-[radial-gradient(circle_at_center,rgba(255,200,120,0.18),transparent_70%)] dark:bg-[radial-gradient(circle_at_center,rgba(241,103,0,0.06),transparent_70%)]"></div>
        <div class="absolute bottom-[20%] right-[5%] w-[50%] h-[40%] bg-[radial-gradient(circle_at_center,rgba(255,230,170,0.14),transparent_70%)] dark:bg-[radial-gradient(circle_at_center,rgba(251,146,60,0.04),transparent_70%)]"></div>
    </div>

    <div class="max-w-[1260px] mx-auto px-4 sm:px-6 lg:px-8 relative z-10">


        @if(session('success'))
            <div class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-500 p-4 rounded-xl mb-6 text-sm flex items-center gap-2">
                <span>✓</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Livewire Order Form Component -->
        <div class="transition-all duration-300">
            @livewire('order.⚡order-form-component')
        </div>

        {{-- Enhanced Protection Cards Grid --}}
        <div class="mt-8 sm:mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            <!-- Feature 1: Expert Writers -->
            <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden group">
                <div class="w-10 h-10 bg-purple-100 dark:bg-purple-950/40 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">✍️</div>
                <h3 class="text-sm sm:text-base font-extrabold text-slate-800 dark:text-slate-200 mb-1.5">Premium Academic Authors</h3>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">Access a global network of PhD-qualified subject matter experts vetted for academic excellence.</p>
                <div class="mt-4 flex items-center gap-1.5 text-[9px] font-bold text-slate-400 uppercase tracking-wider">
                    <span class="text-emerald-500">✓</span>
                    Top 2% Accuracy Guaranteed
                </div>
            </div>

            <!-- Feature 2: Fast Delivery -->
            <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden group">
                <div class="w-10 h-10 bg-blue-100 dark:bg-blue-950/40 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:scale-110 group-hover:-rotate-6 transition-transform duration-300">⚡</div>
                <h3 class="text-sm sm:text-base font-extrabold text-slate-800 dark:text-slate-200 mb-1.5">Ultra-Fast Turnaround</h3>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">Meeting tight deadlines is our specialty. Receive high-quality solutions in as little as 3 hours.</p>
                <div class="mt-4 flex items-center gap-1.5 text-[9px] font-bold text-slate-400 uppercase tracking-wider">
                    <span class="text-blue-500">✓</span>
                    100% On-Time Delivery
                </div>
            </div>

            <!-- Feature 3: Security -->
            <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-2xl p-6 shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden group sm:col-span-2 lg:col-span-1">
                <div class="w-10 h-10 bg-emerald-100 dark:bg-emerald-950/40 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:scale-110 transition-transform duration-300">🔒</div>
                <h3 class="text-sm sm:text-base font-extrabold text-slate-800 dark:text-slate-200 mb-1.5">Confidential & Secure</h3>
                <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed">Your data is fully encrypted. We maintain 100% privacy with zero-data-sharing policies.</p>
                <div class="mt-4 flex items-center gap-1.5 text-[9px] font-bold text-slate-400 uppercase tracking-wider">
                    <span class="text-emerald-500">✓</span>
                    Bank-Level Data Privacy
                </div>
            </div>
        </div>

        <!-- Legal Disclaimer -->
        <p class="text-center text-[10px] sm:text-xs text-slate-400 dark:text-slate-500 mt-8 max-w-2xl mx-auto leading-relaxed">
            By placing an order you agree to our
            <a href="{{ url('/terms-of-service') }}" class="text-[#f16700] hover:underline font-bold">Terms of Service</a>
            and
            <a href="{{ url('/privacy-policy') }}" class="text-[#f16700] hover:underline font-bold">Privacy Policy</a>.
            All work is intended for reference and learning purposes only.
        </p>
    </div>

    {{-- Floating Action Button for Help --}}
    <x-floating-action-button
        position="bottom-right"
        icon="💬"
        text="Need Help?"
        href="mailto:support@assignmenthelpusa.com"
    />
</div>
@endsection
