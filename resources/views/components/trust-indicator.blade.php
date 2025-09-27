@props(['number', 'label', 'color' => 'purple'])

<div class="flex flex-col items-center">
    <div class="text-3xl font-bold text-{{ $color }}-700 mb-2">{{ $number }}</div>
    <div class="text-gray-600">{{ $label }}</div>
</div>