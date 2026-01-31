@extends('layouts.app')

@section('title', 'Place Order - Get Academic Help')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 to-indigo-100 py-12">
    <div class="container mx-auto max-w-7xl px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Get Academic Help</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Submit your assignment and get expert help in minutes</p>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6">
                <div class="flex">
                    <div class="text-green-500 mr-3">✓</div>
                    <div>{{ session('success') }}</div>
                </div>
            </div>
        @endif

        <!-- Livewire Order Form Component -->
        @livewire('order.⚡order-form-component')

        <!-- Trust Indicators -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-green-600">98%</div>
                <div class="text-sm text-gray-600">Success Rate</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-blue-600">24/7</div>
                <div class="text-sm text-gray-600">Support</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-purple-600">500+</div>
                <div class="text-sm text-gray-600">Experts</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-orange-600">15min</div>
                <div class="text-sm text-gray-600">Avg Response</div>
            </div>
        </div>
    </div>
</div>
@endsection
