{{-- Floating Action Button (FAB) Component - Responsive --}}
@props([
    'position' => 'bottom-right', // bottom-right, bottom-left, top-right, top-left
    'icon' => '💬',
    'text' => null,
])

@php
    $positionClasses = match($position) {
        'bottom-left' => 'bottom-4 sm:bottom-6 md:bottom-8 left-4 sm:left-6 md:left-8',
        'top-right' => 'top-4 sm:top-6 md:top-8 right-4 sm:right-6 md:right-8',
        'top-left' => 'top-4 sm:top-6 md:top-8 left-4 sm:left-6 md:left-8',
        default => 'bottom-4 sm:bottom-6 md:bottom-8 right-4 sm:right-6 md:right-8',
    };
@endphp

<div {{ $attributes->merge(['class' => "fixed {$positionClasses} z-50"]) }}>
    <button class="btn-magnetic ripple-effect bg-gradient-to-r from-purple-600 to-blue-600 text-white p-3 sm:p-4 rounded-full shadow-2xl hover:shadow-purple-500/50 transition-all duration-400 ease-custom group touch-manipulation">
        <div class="flex items-center gap-2 sm:gap-3">
            <span class="text-xl sm:text-2xl">{{ $icon }}</span>
            @if($text)
                <span class="hidden md:group-hover:inline-block font-semibold text-sm sm:text-base whitespace-nowrap">{{ $text }}</span>
            @endif
        </div>
    </button>
</div>
