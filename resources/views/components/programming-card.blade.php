@props(['language', 'icon', 'gradient', 'features'])

<div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
    <div class="bg-gradient-to-r {{ $gradient }} p-6 text-white">
        <div class="flex items-center mb-4">
            <div class="w-12 h-12 bg-white rounded-lg flex items-center justify-center mr-4">
                <span class="text-2xl font-bold {{ $icon['color'] }}">{{ $icon['text'] }}</span>
            </div>
            <h3 class="text-2xl font-bold">{{ $language }}</h3>
        </div>
    </div>
    <div class="p-6">
        <ul class="space-y-3 text-gray-700">
            @foreach($features as $feature)
                <li class="flex items-center">
                    <span class="text-green-500 mr-2">✓</span>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>
        <a href="{{ route('order') }}"
           class="mt-6 w-full bg-purple-600 hover:bg-purple-700 text-white py-3 rounded-lg font-semibold transition-colors duration-300 block text-center">
            Get {{ $language }} Help
        </a>
    </div>
</div>