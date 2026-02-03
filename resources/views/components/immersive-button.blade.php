{{-- Reusable Immersive Button Component - Responsive --}}
@props([
    'variant' => 'primary', // primary, secondary, outline, ghost
    'size' => 'md', // sm, md, lg
    'effect' => 'magnetic', // magnetic, ripple, press, none
    'href' => null,
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-semibold rounded-lg transition-all duration-400 ease-custom focus:outline-none focus:ring-4 focus:ring-purple-300/50 touch-manipulation';

    $sizeClasses = match($size) {
        'sm' => 'px-3 py-2 sm:px-4 sm:py-2 text-xs sm:text-sm',
        'lg' => 'px-6 py-3 sm:px-8 md:px-10 sm:py-4 md:py-5 text-base sm:text-lg',
        default => 'px-5 py-3 sm:px-6 md:px-8 sm:py-3.5 md:py-4 text-sm sm:text-base',
    };

    $variantClasses = match($variant) {
        'primary' => 'bg-gradient-to-r from-purple-600 to-blue-600 text-white hover:from-purple-700 hover:to-blue-700 shadow-lg hover:shadow-xl active:scale-95',
        'secondary' => 'bg-gradient-to-r from-indigo-600 to-purple-600 text-white hover:from-indigo-700 hover:to-purple-700 shadow-lg hover:shadow-xl active:scale-95',
        'outline' => 'bg-white/80 dark:bg-gray-800/80 backdrop-blur-glass text-gray-900 dark:text-white border-2 border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-500 active:scale-95',
        'ghost' => 'bg-transparent text-purple-600 dark:text-purple-400 hover:bg-purple-50 dark:hover:bg-purple-900/20 active:scale-95',
        default => 'bg-purple-600 text-white hover:bg-purple-700 active:scale-95',
    };

    $effectClasses = match($effect) {
        'magnetic' => 'btn-magnetic',
        'ripple' => 'ripple-effect',
        'press' => 'btn-press',
        default => '',
    };

    $classes = trim($baseClasses . ' ' . $sizeClasses . ' ' . $variantClasses . ' ' . $effectClasses);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => $classes, 'type' => 'button']) }}>
        {{ $slot }}
    </button>
@endif
