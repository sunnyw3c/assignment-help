@props(['emoji', 'title', 'description'])

<div class="text-center p-8 bg-gray-50 rounded-xl hover:bg-purple-50 transition-colors duration-300">
    <div class="text-5xl mb-4">{{ $emoji }}</div>
    <h3 class="text-xl font-semibold mb-3 text-gray-800">{{ $title }}</h3>
    <p class="text-gray-600">{{ $description }}</p>
</div>