{{-- Immersive Hero Component with Modern Interactions --}}
<div class="relative overflow-hidden bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50 dark:from-gray-900 dark:via-purple-900/20 dark:to-indigo-900/20">
    {{-- Animated Background Elements --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-300/30 dark:bg-purple-500/20 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-300/30 dark:bg-blue-500/20 rounded-full blur-3xl animate-float-slower"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-indigo-300/20 dark:bg-indigo-500/10 rounded-full blur-3xl animate-pulse-slower"></div>
    </div>

    {{-- Hero Content --}}
    <div class="relative container mx-auto px-6 py-20 lg:py-32">
        <div class="max-w-4xl mx-auto text-center">
            {{-- Title with Text Reveal Animation --}}
            <h1 class="text-5xl lg:text-7xl font-bold mb-6 text-reveal gradient-text">
                {{ $title ?? 'Expert Assignment Help' }}
            </h1>

            {{-- Subtitle with Staggered Animation --}}
            <p class="text-xl lg:text-2xl text-gray-700 dark:text-gray-300 mb-12 text-reveal text-reveal-delay-1">
                {{ $subtitle ?? 'Get professional help from top tutors. Quality work, on time, every time.' }}
            </p>

            {{-- CTA Buttons with Magnetic Effect --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center text-reveal text-reveal-delay-2">
                <a href="{{ route('assignments.create') }}"
                   class="btn-magnetic ripple-effect px-8 py-4 bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold rounded-lg shadow-xl hover:shadow-2xl transition-all duration-400 ease-custom">
                    Get Started Now
                </a>

                <a href="#how-it-works"
                   class="btn-press px-8 py-4 bg-white/80 dark:bg-gray-800/80 backdrop-blur-glass text-gray-900 dark:text-white font-semibold rounded-lg border-2 border-gray-200 dark:border-gray-700 hover:border-purple-400 dark:hover:border-purple-500 transition-all duration-400 ease-custom">
                    Learn More
                </a>
            </div>
        </div>

        {{-- Feature Cards with 3D Hover --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20 text-reveal text-reveal-delay-3">
            @foreach ([
                ['icon' => '⚡', 'title' => 'Fast Turnaround', 'desc' => 'Quick delivery without compromising quality'],
                ['icon' => '🎓', 'title' => 'Expert Tutors', 'desc' => 'Verified professionals in every subject'],
                ['icon' => '🔒', 'title' => 'Secure & Private', 'desc' => 'Your information is safe with us'],
            ] as $feature)
                <div class="card-3d-hover glass-card gradient-follow p-8 rounded-2xl text-center">
                    <div class="text-5xl mb-4">{{ $feature['icon'] }}</div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900 dark:text-white">{{ $feature['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400">{{ $feature['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Parallax Decorative Elements --}}
    <div data-parallax="0.3" class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-white dark:from-gray-900 to-transparent pointer-events-none"></div>
</div>

{{-- Stats Section with Counter Animation --}}
<div class="bg-white dark:bg-gray-900 py-16">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center">
            @foreach ([
                ['number' => '10,000+', 'label' => 'Assignments Completed'],
                ['number' => '98%', 'label' => 'Satisfaction Rate'],
                ['number' => '500+', 'label' => 'Expert Tutors'],
                ['number' => '24/7', 'label' => 'Support Available'],
            ] as $index => $stat)
                <div class="stagger-item">
                    <div class="text-4xl lg:text-5xl font-bold gradient-text mb-2">{{ $stat['number'] }}</div>
                    <div class="text-gray-600 dark:text-gray-400">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
