@extends('layouts.app')

@section('title', 'Place Order - Get Academic Help')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100 py-6 sm:py-12 lg:py-16 relative overflow-hidden">
    {{-- Animated Background Elements - Responsive --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 sm:top-20 left-5 sm:left-10 w-48 sm:w-72 h-48 sm:h-72 bg-purple-300/20 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-10 sm:bottom-20 right-5 sm:right-10 w-64 sm:w-96 h-64 sm:h-96 bg-blue-300/20 rounded-full blur-3xl animate-float-slower"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[300px] sm:w-[400px] lg:w-[500px] h-[300px] sm:h-[400px] lg:h-[500px] bg-indigo-300/10 rounded-full blur-3xl animate-pulse-slower"></div>
    </div>

    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header Section with Text Reveal Animation -->
        <div class="text-center mb-8 sm:mb-12 lg:mb-16">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-3 sm:mb-4 text-reveal gradient-text px-4">
                Get Academic Help
            </h1>
            <p class="text-base sm:text-lg md:text-xl text-gray-700 max-w-2xl mx-auto text-reveal text-reveal-delay-1 px-4">
                Submit your assignment and get expert help in minutes
            </p>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-6 animate-fade-in">
                <div class="flex">
                    <div class="text-green-500 mr-3">✓</div>
                    <div>{{ session('success') }}</div>
                </div>
            </div>
        @endif

        <!-- Livewire Order Form Component with Glass Card -->
        <div class="page-transition">
            @livewire('order.⚡order-form-component')
        </div>


        {{-- Enhanced Protection Cards Grid --}}
        <div class="mt-8 sm:mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Feature 1: Expert Writers -->
            <div class="card-3d-hover glass-card rounded-[2.5rem] p-8 border-2 border-white/70 shadow-2xl relative overflow-hidden group stagger-item">
                <div class="absolute inset-0 opacity-20 group-hover:opacity-30 transition-opacity duration-700 pointer-events-none">
                    <img src="{{ asset('images/ui/premium_academic_bg.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="absolute top-0 right-0 p-5">
                    <span class="bg-emerald-500 text-white text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full border border-emerald-400 shadow-lg shadow-emerald-200/50">Verified Expert</span>
                </div>
                <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-inner group-hover:scale-110 group-hover:rotate-12 transition-transform duration-500">✍️</div>
                <h3 class="text-xl font-black text-slate-800 mb-3">Premium Authors</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Access a global network of PhD-qualified subject matter experts vetted for academic excellence.</p>
                <div class="mt-6 flex items-center gap-2 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <svg class="w-4 h-4 text-emerald-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                    Top 2% Accuracy Guaranteed
                </div>
            </div>

            <!-- Feature 2: Fast Delivery -->
            <div class="card-3d-hover glass-card rounded-[2.5rem] p-8 border-2 border-white/70 shadow-2xl relative overflow-hidden group stagger-item">
                <div class="absolute inset-0 opacity-20 group-hover:opacity-30 transition-opacity duration-700 pointer-events-none">
                    <img src="{{ asset('images/ui/premium_academic_bg.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="absolute top-0 right-0 p-5">
                    <span class="bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full border border-blue-500 shadow-lg shadow-blue-200/50">Express Service</span>
                </div>
                <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-inner group-hover:scale-110 group-hover:-rotate-12 transition-transform duration-500">⚡</div>
                <h3 class="text-xl font-black text-slate-800 mb-3">Ultra-Fast Turnaround</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Meeting tight deadlines is our specialty. Receive high-quality solutions in as little as 3 hours.</p>
                <div class="mt-6 flex items-center gap-2 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <svg class="w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    100% On-Time Delivery
                </div>
            </div>

            <!-- Feature 3: Security -->
            <div class="card-3d-hover glass-card rounded-[2.5rem] p-8 border-2 border-white/70 shadow-2xl relative overflow-hidden group stagger-item sm:col-span-2 lg:col-span-1">
                <div class="absolute inset-0 opacity-20 group-hover:opacity-30 transition-opacity duration-700 pointer-events-none">
                    <img src="{{ asset('images/ui/secure_pattern_bg.png') }}" class="w-full h-full object-cover">
                </div>
                <div class="absolute top-0 right-0 p-5">
                    <span class="bg-indigo-600 text-white text-[10px] font-black uppercase tracking-widest px-4 py-1.5 rounded-full border border-indigo-500 shadow-lg shadow-indigo-200/50">256-Bit SSL</span>
                </div>
                <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-inner group-hover:scale-110 transition-transform duration-500">🔒</div>
                <h3 class="text-xl font-black text-slate-800 mb-3">Confidential & Secure</h3>
                <p class="text-sm text-slate-600 leading-relaxed">Your data is fully encrypted. We maintain 100% privacy with zero-data-sharing policies.</p>
                <div class="mt-6 flex items-center gap-2 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                    <svg class="w-4 h-4 text-indigo-500" fill="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Bank-Level Data Privacy
                </div>
            </div>
        </div>
    </div>

    {{-- Floating Action Button for Help --}}
    <x-floating-action-button
        position="bottom-right"
        icon="💬"
        text="Need Help?"
        onclick="alert('Chat support coming soon!')"
    />
</div>
@endsection
