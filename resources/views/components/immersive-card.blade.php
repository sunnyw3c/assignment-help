{{-- Reusable Immersive Card Component - Responsive --}}
@props([
    'variant' => 'default', // default, glass, 3d
    'hover' => true,
])

@php
    $baseClasses = 'rounded-lg sm:rounded-xl lg:rounded-2xl transition-all duration-400 ease-custom touch-manipulation';

    $variantClasses = match($variant) {
        'glass' => 'glass-card p-4 sm:p-6 md:p-8',
        '3d' => 'card-3d-hover bg-white dark:bg-gray-800 p-4 sm:p-6 md:p-8 shadow-lg',
        'gradient' => 'gradient-follow bg-gradient-to-br from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 p-4 sm:p-6 md:p-8 shadow-xl',
        default => 'bg-white dark:bg-gray-800 p-4 sm:p-5 md:p-6 shadow-md hover:shadow-xl',
    };

    $hoverClasses = $hover ? 'hover-lift' : '';

    $classes = trim($baseClasses . ' ' . $variantClasses . ' ' . $hoverClasses);
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
