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

        <!-- Trust Indicators with 3D Cards - Responsive -->
        <div class="mt-8 sm:mt-12 lg:mt-16 grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-6 text-center">
            <div class="card-3d-hover glass-card gradient-follow p-4 sm:p-5 md:p-6 rounded-lg sm:rounded-xl stagger-item touch-manipulation">
                <div class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mb-1 sm:mb-2">98%</div>
                <div class="text-xs sm:text-sm text-gray-700 font-semibold">Success Rate</div>
            </div>
            <div class="card-3d-hover glass-card gradient-follow p-4 sm:p-5 md:p-6 rounded-lg sm:rounded-xl stagger-item touch-manipulation">
                <div class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mb-1 sm:mb-2">24/7</div>
                <div class="text-xs sm:text-sm text-gray-700 font-semibold">Support</div>
            </div>
            <div class="card-3d-hover glass-card gradient-follow p-4 sm:p-5 md:p-6 rounded-lg sm:rounded-xl stagger-item touch-manipulation">
                <div class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mb-1 sm:mb-2">500+</div>
                <div class="text-xs sm:text-sm text-gray-700 font-semibold">Experts</div>
            </div>
            <div class="card-3d-hover glass-card gradient-follow p-4 sm:p-5 md:p-6 rounded-lg sm:rounded-xl stagger-item touch-manipulation">
                <div class="text-2xl sm:text-3xl md:text-4xl font-bold gradient-text mb-1 sm:mb-2">15min</div>
                <div class="text-xs sm:text-sm text-gray-700 font-semibold">Avg Response</div>
            </div>
        </div>

        {{-- Features Section - Responsive --}}
        <div class="mt-12 sm:mt-16 lg:mt-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <x-immersive-card variant="glass" class="text-center stagger-item touch-manipulation p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-3 sm:mb-4">🎓</div>
                <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-gray-800">Expert Writers</h3>
                <p class="text-sm sm:text-base text-gray-600">PhD-qualified professionals in every subject</p>
            </x-immersive-card>

            <x-immersive-card variant="glass" class="text-center stagger-item touch-manipulation p-6 sm:p-8">
                <div class="text-4xl sm:text-5xl mb-3 sm:mb-4">⚡</div>
                <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-gray-800">Fast Delivery</h3>
                <p class="text-sm sm:text-base text-gray-600">Quick turnaround without compromising quality</p>
            </x-immersive-card>

            <x-immersive-card variant="glass" class="text-center stagger-item touch-manipulation p-6 sm:p-8 sm:col-span-2 lg:col-span-1">
                <div class="text-4xl sm:text-5xl mb-3 sm:mb-4">🔒</div>
                <h3 class="text-lg sm:text-xl font-bold mb-2 sm:mb-3 text-gray-800">100% Secure</h3>
                <p class="text-sm sm:text-base text-gray-600">Your privacy and data are completely protected</p>
            </x-immersive-card>
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
