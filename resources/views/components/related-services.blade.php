@props([
    'title' => 'Related Assignment &amp; Programming Services',
    'subtitle' => 'Explore popular technical languages, homework subjects, and academic writing services.',
    'currentSlug' => ''
])

@php
    $services = [
        ['name' => 'Python Help', 'slug' => 'python', 'type' => 'programming', 'icon' => '🐍', 'url' => route('services.programming.show', 'python')],
        ['name' => 'Java Help', 'slug' => 'java', 'type' => 'programming', 'icon' => '☕', 'url' => route('services.programming.show', 'java')],
        ['name' => 'PHP Help', 'slug' => 'php', 'type' => 'programming', 'icon' => '🐘', 'url' => route('services.programming.show', 'php')],
        ['name' => 'Web Development', 'slug' => 'web-development', 'type' => 'programming', 'icon' => '🌐', 'url' => route('services.programming.show', 'web-development')],
        ['name' => 'Mobile Apps', 'slug' => 'mobile-app', 'type' => 'programming', 'icon' => '📱', 'url' => route('services.programming.show', 'mobile-app')],
        ['name' => 'Algorithms & DSA', 'slug' => 'algorithms', 'type' => 'programming', 'icon' => '🔢', 'url' => route('services.programming.show', 'algorithms')],
        ['name' => 'Database SQL', 'slug' => 'database', 'type' => 'programming', 'icon' => '🗄️', 'url' => route('services.programming.show', 'database')],
        ['name' => 'Machine Learning', 'slug' => 'machine-learning', 'type' => 'programming', 'icon' => '🤖', 'url' => route('services.programming.show', 'machine-learning')],
        ['name' => 'Code Debugging', 'slug' => 'debugging', 'type' => 'programming', 'icon' => '🔧', 'url' => route('services.programming.show', 'debugging')],
        ['name' => 'DevOps & Cloud', 'slug' => 'devops', 'type' => 'programming', 'icon' => '⚙️', 'url' => route('services.programming.show', 'devops')],
        ['name' => 'Cybersecurity', 'slug' => 'cybersecurity', 'type' => 'programming', 'icon' => '🛡️', 'url' => route('services.programming.show', 'cybersecurity')],
        ['name' => 'Math Homework', 'slug' => 'math', 'type' => 'homework', 'icon' => '📐', 'url' => route('services.homework-help.math')],
        ['name' => 'Nursing Assignment', 'slug' => 'nursing', 'type' => 'homework', 'icon' => '🩺', 'url' => route('services.homework-help.nursing')],
        ['name' => 'Physics Homework', 'slug' => 'physics', 'type' => 'homework', 'icon' => '⚡', 'url' => route('services.homework-help.physics')],
        ['name' => 'Essay Writing', 'slug' => 'essay', 'type' => 'essay', 'icon' => '📝', 'url' => route('services.essay-writing.index')],
        ['name' => 'Argumentative Essay', 'slug' => 'argumentative', 'type' => 'essay', 'icon' => '💡', 'url' => url('/essay-writing-help/argumentative')],
    ];

    $filteredServices = collect($services)->reject(fn($s) => $s['slug'] === $currentSlug)->take(8);
@endphp

<section class="py-12 bg-slate-100 dark:bg-slate-900/50 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 gap-4">
            <div>
                <h2 class="text-2xl font-black text-slate-900 dark:text-white mt-1">{!! $title !!}</h2>
                <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1">{!! $subtitle !!}</p>
            </div>
            <a href="{{ route('sitemap.html') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-indigo-600 dark:text-indigo-400 hover:underline">
                View All Services Directory &rarr;
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3.5">
            @foreach($filteredServices as $item)
                <a href="{{ $item['url'] }}" class="flex items-center gap-3 p-3.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 hover:border-indigo-500 dark:hover:border-indigo-400 shadow-sm transition-all duration-200 hover:-translate-y-0.5 group">
                    <span class="text-2xl group-hover:scale-110 transition-transform">{{ $item['icon'] }}</span>
                    <div>
                        <h3 class="text-xs sm:text-sm font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">{{ $item['name'] }}</h3>
                        <span class="text-[10px] font-semibold text-slate-600 dark:text-slate-400 uppercase tracking-wider">{{ $item['type'] }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
