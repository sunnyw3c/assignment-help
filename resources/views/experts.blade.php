@extends('layouts.app')

@section('title', 'Our Expert Team - Assignment Help USA | Qualified Academic Support')
@section('description', 'Meet our team of 50+ verified academic experts and tutors at Assignment Help USA. PhD and Master\'s degree specialists providing reliable, plagiarism-free assistance.')

@section('content')

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-purple-600 to-indigo-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Meet Our Expert Team</h1>
            <p class="text-xl md:text-2xl text-purple-100 max-w-3xl mx-auto">
                Qualified professionals with advanced degrees ready to help you succeed
            </p>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8">
        <div class="bg-white rounded-lg shadow-lg p-6 sm:p-8 mb-8 sm:mb-12 dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 text-center">
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-purple-600">50+</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Expert Tutors</div>
                </div>
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-purple-600">15+</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Avg Experience</div>
                </div>
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-purple-600">7,500+</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Completed Projects</div>
                </div>
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-purple-600">4.9/5</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Average Rating</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <div class="bg-white rounded-lg shadow-md p-4 sm:p-6 dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div class="w-full md:w-auto">
                    <h2 class="text-base sm:text-lg font-semibold text-gray-900 mb-2.5 dark:text-white">Filter by Subject Area</h2>
                    <div class="flex flex-wrap gap-2 max-h-40 md:max-h-none overflow-y-auto md:overflow-visible pr-1" id="filter-buttons">
                        <button class="filter-btn active px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-medium transition-colors duration-200 bg-purple-600 text-white" data-filter="all">
                            All Experts
                        </button>
                        @foreach($specializations as $spec)
                            <button class="filter-btn px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-medium transition-colors duration-200 bg-gray-200 dark:bg-slate-800 text-gray-700 dark:text-slate-300 hover:bg-purple-100 hover:text-purple-700 dark:hover:bg-purple-950 dark:hover:text-purple-300" data-filter="{{ $spec }}">
                                {{ $spec }}
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="text-xs sm:text-sm font-medium text-gray-600 dark:text-slate-400 self-start md:self-auto">
                    Showing <span id="showing-count" class="font-bold text-purple-600 dark:text-purple-400">{{ min($perPage ?? 9, $totalExperts) }}</span> of <span id="total-experts" class="font-bold text-gray-900 dark:text-white">{{ $totalExperts }}</span> experts
                </div>
            </div>
        </div>
    </div>

    <!-- Experts Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <!-- Experts Grid (Pre-rendered via SSR to eliminate FOEC) -->
        <div id="experts-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($initialExperts as $expert)
                @php
                    $initials = collect(explode(' ', $expert['name']))->map(fn($n) => $n[0] ?? '')->take(2)->join('');
                    $rating = (float) $expert['rating'];
                    $fullStars = floor($rating);
                    $hasHalf = ($rating - $fullStars) >= 0.5;
                    $fallbackAvatar = 'https://ui-avatars.com/api/?name='.urlencode($expert['name']).'&background=6366f1&color=fff&size=128&bold=true';
                @endphp
                <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 dark:bg-slate-900 border border-slate-100 dark:border-slate-800 flex flex-col justify-between" itemscope itemtype="https://schema.org/Person">
                    <div>
                        <!-- Expert Header -->
                        <div class="flex items-start mb-4">
                            @if(!empty($expert['photo']))
                                <img src="{{ $expert['photo'] }}" alt="{{ $expert['name'] }}"
                                    onerror="this.onerror=null;this.src='{{ $fallbackAvatar }}';"
                                    class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border-2 border-purple-500 shadow-sm flex-shrink-0" itemprop="image">
                            @else
                                <div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-gradient-to-r from-purple-500 to-indigo-600 flex items-center justify-center text-white font-bold text-xl sm:text-2xl flex-shrink-0">
                                    {{ $initials }}
                                </div>
                            @endif
                            <div class="ml-3 sm:ml-4 flex-1 min-w-0">
                                <h3 class="text-base sm:text-lg font-bold text-gray-900 dark:text-white truncate" itemprop="name">{{ $expert['name'] }}</h3>
                                <p class="text-xs sm:text-sm text-purple-600 dark:text-purple-400 font-medium truncate" itemprop="jobTitle">{{ $expert['title'] }}</p>
                            <div class="flex items-center mt-1">
                                <div class="flex text-yellow-400">
                                    @for($i = 0; $i < 5; $i++)
                                        @if($i < $fullStars)
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        @elseif($i == $fullStars && $hasHalf)
                                            <svg class="w-4 h-4" viewBox="0 0 20 20">
                                                <defs>
                                                    <linearGradient id="half-star-{{ $expert['id'] }}">
                                                        <stop offset="50%" stop-color="#facc15"/>
                                                        <stop offset="50%" stop-color="#cbd5e1"/>
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#half-star-{{ $expert['id'] }})" d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                                            </svg>
                                        @else
                                            <svg class="w-4 h-4 text-gray-300 dark:text-slate-700 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                        @endif
                                    @endfor
                                </div>
                                <span class="ml-2 text-sm text-gray-600 dark:text-slate-400 font-semibold">{{ number_format($rating, 1) }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Specialization Badge -->
                    <div class="mb-3">
                        <span class="inline-block bg-indigo-100 dark:bg-indigo-950/40 text-indigo-800 dark:text-indigo-400 text-xs px-3 py-1 rounded-full font-medium">
                            {{ $expert['specialization'] }}
                        </span>
                    </div>

                    <!-- Bio -->
                    <p class="text-gray-700 text-sm mb-4 leading-relaxed dark:text-slate-350" itemprop="description">
                        {{ $expert['bio'] }}
                    </p>

                    <!-- Subjects -->
                    <div class="mb-4">
                        <p class="text-xs font-semibold text-gray-600 mb-2 dark:text-slate-450 uppercase tracking-wider">Expertise:</p>
                        <div class="flex flex-wrap gap-1">
                            @foreach(array_slice($expert['subjects'], 0, 3) as $subj)
                                <span class="inline-block bg-purple-100 dark:bg-purple-950/40 text-purple-800 dark:text-purple-300 text-xs px-2 py-1 rounded">
                                    {{ $subj }}
                                </span>
                            @endforeach
                            @if(count($expert['subjects']) > 3)
                                <span class="text-xs text-gray-500 dark:text-slate-400 self-center">
                                    +{{ count($expert['subjects']) - 3 }} more
                                </span>
                            @endif
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="border-t dark:border-slate-800 pt-4 grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-xs text-gray-500 dark:text-slate-400">Experience</p>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $expert['experience'] }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 dark:text-slate-400">Completed Projects</p>
                            <p class="text-sm font-semibold text-gray-900 dark:text-white">{{ $expert['completedProjects'] }}+</p>
                        </div>
                    </div>

                    </div>

                    <!-- Availability & CTA -->
                    <div class="mt-4 pt-4 border-t dark:border-slate-800 flex items-center justify-between">
                        <span class="inline-flex items-center text-xs font-medium text-green-700 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-950/20 px-2.5 py-1 rounded-lg">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            {{ $expert['availability'] }}
                        </span>
                        <a href="{{ route('order') }}" class="inline-flex items-center text-xs sm:text-sm font-semibold text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 transition-colors px-3 py-1.5 rounded-lg hover:bg-purple-50 dark:hover:bg-purple-950/30">
                            Request Help →
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div id="pagination-container" class="mt-8 flex justify-center items-center space-x-2">
            <!-- Pagination will hydrate dynamically for page changes -->
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-purple-600 to-indigo-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Get Expert Help Today
            </h2>
            <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">
                Our qualified experts are ready to help you with any academic challenge
            </p>
            <a href="{{ route('order') }}" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors duration-300 shadow-lg dark:bg-slate-900">
                Request Help Now
            </a>
        </div>
    </div>

    <!-- Why Choose Our Experts -->
    <div class="bg-white py-16 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12 dark:text-white">Why Choose Our Experts?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 dark:text-white">Verified Credentials</h3>
                    <p class="text-gray-600 dark:text-slate-400">All experts hold advanced degrees from accredited universities and undergo rigorous verification</p>
                </div>
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 dark:text-white">Quick Response Time</h3>
                    <p class="text-gray-600 dark:text-slate-400">Get matched with an expert quickly and receive prompt responses to your questions</p>
                </div>
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2 dark:text-white">Subject Specialists</h3>
                    <p class="text-gray-600 dark:text-slate-400">Each expert specializes in specific subjects to provide in-depth knowledge and guidance</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Hydration Data Payload (0ms FOEC, works in any environment including XAMPP) -->
    <script id="experts-data" type="application/json">
        {!! json_encode($experts, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) !!}
    </script>

    <!-- Schema.org E-E-A-T Microdata -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "ItemList",
      "name": "Verified Academic Experts & Tutors",
      "description": "50+ verified academic tutors and subject specialists at Assignment Help USA.",
      "numberOfItems": {{ $totalExperts }},
      "itemListElement": [
        @foreach(array_slice($experts, 0, 12) as $idx => $expert)
        {
          "@type": "ListItem",
          "position": {{ $idx + 1 }},
          "item": {
            "@type": "Person",
            "name": {{ json_encode($expert['name']) }},
            "jobTitle": {{ json_encode($expert['title']) }},
            "description": {{ json_encode($expert['bio']) }},
            "knowsAbout": {{ json_encode($expert['subjects']) }}
          }
        }{{ $idx < min(11, count($experts) - 1) ? ',' : '' }}
        @endforeach
      ]
    }
    </script>

    @push('scripts')
    <script>
        // Experts pagination configuration
        const EXPERTS_PER_PAGE = {{ $perPage ?? 9 }};
        let currentPage = 1;
        let allExperts = [];
        let filteredExperts = [];
        let currentFilter = 'all';

        // Initialize from hydration payload
        function initExperts() {
            try {
                const payloadEl = document.getElementById('experts-data');
                if (payloadEl && payloadEl.textContent.trim()) {
                    allExperts = JSON.parse(payloadEl.textContent);
                    filteredExperts = allExperts;
                    bindFilterButtons();
                    updatePagination();
                    return;
                }
            } catch (e) {
                console.warn('Hydration payload parse error, falling back to fetch', e);
            }

            // Fallback fetch if payload was somehow missing
            fetch('{{ asset('data/experts.json') }}')
                .then(r => r.json())
                .then(data => {
                    allExperts = data.experts || [];
                    filteredExperts = allExperts;
                    bindFilterButtons();
                    displayExperts();
                    updatePagination();
                })
                .catch(err => console.error('Error fetching fallback experts:', err));
        }

        // Bind filter button events
        function bindFilterButtons() {
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.querySelectorAll('.filter-btn').forEach(b => {
                        b.classList.remove('active', 'bg-purple-600', 'text-white');
                        b.classList.add('bg-gray-200', 'text-gray-700');
                    });
                    this.classList.add('active', 'bg-purple-600', 'text-white');
                    this.classList.remove('bg-gray-200', 'text-gray-700');

                    currentFilter = this.getAttribute('data-filter');
                    filterExperts();
                });
            });
        }

        // Filter experts by specialization
        function filterExperts() {
            if (currentFilter === 'all') {
                filteredExperts = allExperts;
            } else {
                filteredExperts = allExperts.filter(expert => expert.specialization === currentFilter);
            }

            currentPage = 1;
            displayExperts();
            updatePagination();
        }

        // Display experts for current page
        function displayExperts() {
            const startIndex = (currentPage - 1) * EXPERTS_PER_PAGE;
            const endIndex = startIndex + EXPERTS_PER_PAGE;
            const expertsToShow = filteredExperts.slice(startIndex, endIndex);

            const container = document.getElementById('experts-container');
            container.innerHTML = '';

            expertsToShow.forEach(expert => {
                container.innerHTML += createExpertCard(expert);
            });

            // Update showing count
            document.getElementById('showing-count').textContent = expertsToShow.length;
            document.getElementById('total-experts').textContent = filteredExperts.length;

            if (currentPage > 1) {
                container.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        // Create expert card HTML
        function createExpertCard(expert) {
            const stars = generateStars(expert.rating);
            const initials = expert.name.split(' ').map(n => n[0]).slice(0, 2).join('');
            const subjectsHTML = (expert.subjects || []).slice(0, 3).map(subject =>
                `<span class="inline-block bg-purple-100 dark:bg-purple-950/40 text-purple-800 dark:text-purple-300 text-xs px-2 py-1 rounded mr-1 mb-1">${subject}</span>`
            ).join('');
            const fallbackAvatar = `https://ui-avatars.com/api/?name=${encodeURIComponent(expert.name)}&background=6366f1&color=fff&size=128&bold=true`;
            const avatarHTML = expert.photo
                ? `<img src="${expert.photo}" alt="${expert.name}" onerror="this.onerror=null;this.src='${fallbackAvatar}';" class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border-2 border-purple-500 shadow-sm flex-shrink-0">`
                : `<div class="w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-gradient-to-r from-purple-500 to-indigo-600 flex items-center justify-center text-white font-bold text-xl sm:text-2xl flex-shrink-0">${initials}</div>`;

            return `
                <div class="bg-white rounded-lg shadow-md p-5 sm:p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 dark:bg-slate-900 border border-slate-100 dark:border-slate-800 flex flex-col justify-between" itemscope itemtype="https://schema.org/Person">
                    <div>
                        <div class="flex items-start mb-4">
                            ${avatarHTML}
                            <div class="ml-3 sm:ml-4 flex-1 min-w-0">
                                <h3 class="text-base sm:text-lg font-bold text-gray-900 dark:text-white truncate" itemprop="name">${expert.name}</h3>
                                <p class="text-xs sm:text-sm text-purple-600 dark:text-purple-400 font-medium truncate" itemprop="jobTitle">${expert.title}</p>
                                <div class="flex items-center mt-1">
                                    ${stars}
                                    <span class="ml-2 text-xs sm:text-sm text-gray-600 dark:text-slate-400 font-semibold">${Number(expert.rating).toFixed(1)}</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <span class="inline-block bg-indigo-100 dark:bg-indigo-950/40 text-indigo-800 dark:text-indigo-400 text-xs px-3 py-1 rounded-full font-medium">
                                ${expert.specialization}
                            </span>
                        </div>

                        <p class="text-gray-700 text-sm mb-4 leading-relaxed dark:text-slate-350" itemprop="description">
                            ${expert.bio}
                        </p>

                        <div class="mb-4">
                            <p class="text-xs font-semibold text-gray-600 mb-2 dark:text-slate-450 uppercase tracking-wider">Expertise:</p>
                            <div class="flex flex-wrap gap-1">
                                ${subjectsHTML}
                                ${moreSubjects}
                            </div>
                        </div>

                        <div class="border-t dark:border-slate-800 pt-4 grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-xs text-gray-500 dark:text-slate-400">Experience</p>
                                <p class="text-sm font-semibold text-gray-900 dark:text-white">${expert.experience}</p>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 dark:text-slate-400">Completed Projects</p>
                                <p class="text-sm font-semibold text-gray-900 dark:text-white">${expert.completedProjects}+</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4 pt-4 border-t dark:border-slate-800 flex items-center justify-between">
                        <span class="inline-flex items-center text-xs font-medium text-green-700 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-950/20 px-2.5 py-1 rounded-lg">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            ${expert.availability || 'Available'}
                        </span>
                        <a href="{{ route('order') }}" class="inline-flex items-center text-xs sm:text-sm font-semibold text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 transition-colors px-3 py-1.5 rounded-lg hover:bg-purple-50 dark:hover:bg-purple-950/30">
                            Request Help →
                        </a>
                    </div>
                </div>
            `;
        }

        // Generate star rating HTML
        function generateStars(rating) {
            let starsHTML = '<div class="flex text-yellow-400">';
            const fullStars = Math.floor(rating);
            const hasHalfStar = (rating - fullStars) >= 0.5;

            for (let i = 0; i < 5; i++) {
                if (i < fullStars) {
                    starsHTML += `<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>`;
                } else if (i === fullStars && hasHalfStar) {
                    starsHTML += `<svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>`;
                } else {
                    starsHTML += `<svg class="w-4 h-4 text-gray-300 dark:text-slate-700 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>`;
                }
            }
            starsHTML += '</div>';
            return starsHTML;
        }

        // Update pagination buttons
        function updatePagination() {
            const totalPages = Math.ceil(filteredExperts.length / EXPERTS_PER_PAGE);
            const container = document.getElementById('pagination-container');
            container.innerHTML = '';

            if (totalPages <= 1) {
                container.classList.add('hidden');
                return;
            }

            container.classList.remove('hidden');

            // Previous button
            const prevDisabled = currentPage === 1;
            container.innerHTML += `
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium transition-colors duration-200 ${prevDisabled ? 'opacity-50 cursor-not-allowed text-gray-400' : 'hover:bg-purple-600 hover:text-white text-gray-700 dark:text-slate-300'}"
                    onclick="changePage(${currentPage - 1})" ${prevDisabled ? 'disabled' : ''}>
                    Previous
                </button>
            `;

            // Page numbers
            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
                    const isActive = i === currentPage;
                    container.innerHTML += `
                        <button class="px-4 py-2 border rounded-lg text-sm font-medium transition-colors duration-200 ${isActive ? 'bg-purple-600 text-white border-purple-600' : 'bg-white dark:bg-slate-900 text-gray-700 dark:text-slate-300 border-gray-300 dark:border-slate-800 hover:bg-purple-600 hover:text-white'}"
                            onclick="changePage(${i})">
                            ${i}
                        </button>
                    `;
                } else if (i === currentPage - 2 || i === currentPage + 2) {
                    container.innerHTML += '<span class="px-2 text-gray-500">...</span>';
                }
            }

            // Next button
            const nextDisabled = currentPage === totalPages;
            container.innerHTML += `
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium transition-colors duration-200 ${nextDisabled ? 'opacity-50 cursor-not-allowed text-gray-400' : 'hover:bg-purple-600 hover:text-white text-gray-700 dark:text-slate-300'}"
                    onclick="changePage(${currentPage + 1})" ${nextDisabled ? 'disabled' : ''}>
                    Next
                </button>
            `;
        }

        window.changePage = function(page) {
            const totalPages = Math.ceil(filteredExperts.length / EXPERTS_PER_PAGE);
            if (page >= 1 && page <= totalPages) {
                currentPage = page;
                displayExperts();
                updatePagination();
            }
        };

        document.addEventListener('DOMContentLoaded', initExperts);
    </script>
    @endpush
@endsection
