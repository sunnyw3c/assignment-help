@extends('layouts.app')

@section('title', ' Assignment Help Online- Home')

@section('content')
<section class="bg-blue-50 py-16 text-center">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4">Expert Assignment Help Online</h1>
        <p class="text-lg mb-6 max-w-2xl mx-auto">Plagiarism-free content, 24/7 support, and affordable prices tailored for students.</p>
        <a href="{{ route('assignments.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Place an Order</a>
    </div>
</section>

<section class="py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-semibold mb-8">Our Services</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-semibold mb-2">Essay Writing</h3>
                <p>Get professionally written essays tailored to your topic.</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-semibold mb-2">Homework Help</h3>
                <p>Quick and reliable help with math, science, and more.</p>
            </div>
            <div class="bg-white p-6 shadow rounded">
                <h3 class="text-xl font-semibold mb-2">Dissertation Support</h3>
                <p>From research to final draft, we’ve got you covered.</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-12">
        <a href="{{ route('assignments.create') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Explore All Services</a>
    </div>
</section>

@endsection
