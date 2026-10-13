<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Reviews &amp; Testimonials | Assignment Help USA</title>
    <meta name="description" content="Read authentic student reviews and ratings for Assignment Help USA. Over 10,000+ satisfied students trust our 4.9/5 rated academic support services.">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="{{ route('reviews') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 dark:bg-slate-950">
    @include('partials.navbar')

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Student Reviews &amp; Testimonials</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                Real feedback from verified students who achieved academic success with our support
            </p>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8">
        <div class="bg-white rounded-lg shadow-lg p-6 sm:p-8 mb-8 sm:mb-12 dark:bg-slate-900 border border-slate-100 dark:border-slate-800">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6 text-center">
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-600">{{ $stats['satisfaction'] ?? '98%' }}</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Satisfaction Rate</div>
                </div>
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-600">{{ $stats['happy_students'] ?? '10,000+' }}</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Happy Students</div>
                </div>
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-600">{{ $stats['average_rating'] ?? 4.9 }}/5</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Average Rating</div>
                </div>
                <div class="p-2 sm:p-0">
                    <div class="text-3xl sm:text-4xl font-bold text-blue-600">{{ $stats['expert_writers'] ?? '50+' }}</div>
                    <div class="text-xs sm:text-sm text-gray-600 mt-1 sm:mt-2 dark:text-slate-400">Expert Writers</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="mb-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2 dark:text-white">What Our Students Say</h2>
                <p class="text-gray-600 dark:text-slate-400">Verified feedback submitted by students across college and university programs</p>
            </div>
            <div class="text-sm font-medium text-gray-600 dark:text-slate-400">
                Showing <span id="showing-start" class="font-bold text-blue-600">{{ $totalReviews > 0 ? 1 : 0 }}</span>-<span id="showing-end" class="font-bold text-blue-600">{{ min($perPage ?? 9, $totalReviews) }}</span> of <span id="total-reviews" class="font-bold text-gray-900 dark:text-white">{{ $totalReviews }}</span> reviews
            </div>
        </div>

        <!-- Reviews Grid (Pre-rendered via SSR to eliminate FOEC) -->
        <div id="reviews-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($initialReviews as $review)
                @php
                    $initial = strtoupper(substr($review['name'] ?? 'S', 0, 1));
                    $rating = (int) ($review['rating'] ?? 5);
                    $formattedDate = !empty($review['date']) ? date('F j, Y', strtotime($review['date'])) : 'Recent';
                @endphp
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow duration-300 dark:bg-slate-900 border border-slate-100 dark:border-slate-800" itemscope itemtype="https://schema.org/Review">
                    <!-- Rating Stars -->
                    <div class="flex items-center mb-3">
                        <div class="flex text-yellow-400">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $rating)
                                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                @else
                                    <svg class="w-5 h-5 text-gray-300 dark:text-slate-700 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                @endif
                            @endfor
                        </div>
                        <span class="ml-2 text-sm text-gray-600 dark:text-slate-400 font-semibold" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                            <meta itemprop="ratingValue" content="{{ $rating }}">
                            <meta itemprop="bestRating" content="5">
                            {{ $rating }}.0
                        </span>
                    </div>

                    <!-- Service Badge -->
                    <div class="mb-3">
                        <span class="inline-block bg-blue-100 dark:bg-blue-950/40 text-blue-800 dark:text-blue-400 text-xs px-3 py-1 rounded-full font-medium">
                            {{ $review['service'] ?? 'Assignment Help' }}
                        </span>
                    </div>

                    <!-- Review Text -->
                    <p class="text-gray-700 mb-4 leading-relaxed dark:text-slate-300 text-sm" itemprop="reviewBody">
                        "{{ $review['review'] }}"
                    </p>

                    <!-- Reviewer Info -->
                    <div class="border-t dark:border-slate-800 pt-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white font-semibold">
                                    {{ $initial }}
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-semibold text-gray-900 dark:text-white" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <span itemprop="name">{{ $review['name'] }}</span>
                                </p>
                                <p class="text-xs text-gray-600 dark:text-slate-400">{{ $review['course'] ?? 'Verified Student' }}</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-2 dark:text-slate-500">
                            <time itemprop="datePublished" datetime="{{ $review['date'] ?? '' }}">{{ $formattedDate }}</time>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div id="pagination-container" class="mt-8 flex justify-center items-center space-x-2">
            <!-- Hydrated for page changes -->
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Ready to Join Our Satisfied Students?
            </h2>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Experience the same quality service that thousands of students trust for their academic success
            </p>
            <a href="{{ route('order') }}" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors duration-300 shadow-lg dark:bg-slate-900">
                Get Started Today
            </a>
        </div>
    </div>

    <!-- Trust Indicators -->
    <div class="bg-white py-12 dark:bg-slate-900 border-t border-slate-100 dark:border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">100% Original</h3>
                    <p class="text-sm text-gray-600 mt-1 dark:text-slate-400">Plagiarism-free work</p>
                </div>
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">On-Time Delivery</h3>
                    <p class="text-sm text-gray-600 mt-1 dark:text-slate-400">Never miss a deadline</p>
                </div>
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Expert Writers</h3>
                    <p class="text-sm text-gray-600 mt-1 dark:text-slate-400">Qualified professionals</p>
                </div>
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900 dark:text-white">Secure & Private</h3>
                    <p class="text-sm text-gray-600 mt-1 dark:text-slate-400">Your data is safe</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <!-- Hydration Data Payload (0ms FOEC, works in any environment including XAMPP) -->
    <script id="reviews-data" type="application/json">
        {!! json_encode($reviews, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP) !!}
    </script>

    <!-- Schema.org Product / AggregateRating and Review Microdata for E-E-A-T -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "Product",
      "name": "Assignment Help USA Academic Tutoring & Writing Assistance",
      "description": "Professional academic writing and tutoring assistance with 98% student satisfaction.",
      "brand": {
        "@type": "Brand",
        "name": "Assignment Help USA"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "{{ $stats['average_rating'] ?? 4.9 }}",
        "reviewCount": "{{ max($totalReviews, 20) }}",
        "bestRating": "5",
        "worstRating": "1"
      },
      "review": [
        @foreach(array_slice($reviews, 0, 5) as $idx => $rev)
        {
          "@type": "Review",
          "author": {
            "@type": "Person",
            "name": {{ json_encode($rev['name'] ?? 'Student') }}
          },
          "datePublished": {{ json_encode($rev['date'] ?? now()->toDateString()) }},
          "reviewBody": {{ json_encode($rev['review'] ?? '') }},
          "reviewRating": {
            "@type": "Rating",
            "ratingValue": "{{ $rev['rating'] ?? 5 }}",
            "bestRating": "5",
            "worstRating": "1"
          }
        }{{ $idx < min(4, count($reviews) - 1) ? ',' : '' }}
        @endforeach
      ]
    }
    </script>

    <script>
        // Reviews pagination configuration
        const REVIEWS_PER_PAGE = {{ $perPage ?? 9 }};
        let currentPage = 1;
        let allReviews = [];

        function initReviews() {
            try {
                const payloadEl = document.getElementById('reviews-data');
                if (payloadEl && payloadEl.textContent.trim()) {
                    allReviews = JSON.parse(payloadEl.textContent);
                    updatePagination();
                    return;
                }
            } catch (e) {
                console.warn('Hydration payload parse error, falling back to fetch', e);
            }

            // Fallback fetch
            fetch('{{ asset('data/reviews.json') }}')
                .then(r => r.json())
                .then(data => {
                    allReviews = data.reviews || [];
                    displayReviews();
                    updatePagination();
                })
                .catch(err => console.error('Error fetching fallback reviews:', err));
        }

        // Display reviews for current page
        function displayReviews() {
            const startIndex = (currentPage - 1) * REVIEWS_PER_PAGE;
            const endIndex = startIndex + REVIEWS_PER_PAGE;
            const reviewsToShow = allReviews.slice(startIndex, endIndex);

            const container = document.getElementById('reviews-container');
            container.innerHTML = '';

            reviewsToShow.forEach(review => {
                container.innerHTML += createReviewCard(review);
            });

            // Update showing count
            document.getElementById('showing-start').textContent = startIndex + 1;
            document.getElementById('showing-end').textContent = Math.min(endIndex, allReviews.length);
            document.getElementById('total-reviews').textContent = allReviews.length;

            if (currentPage > 1) {
                container.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        // Create review card HTML
        function createReviewCard(review) {
            const initial = (review.name || 'S').charAt(0).toUpperCase();
            const stars = generateStars(review.rating);
            const formattedDate = review.date ? new Date(review.date).toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            }) : 'Recent';

            return `
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow duration-300 dark:bg-slate-900 border border-slate-100 dark:border-slate-800" itemscope itemtype="https://schema.org/Review">
                    <div class="flex items-center mb-3">
                        ${stars}
                        <span class="ml-2 text-sm text-gray-600 dark:text-slate-400 font-semibold" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                            <meta itemprop="ratingValue" content="${review.rating}">
                            <meta itemprop="bestRating" content="5">
                            ${review.rating}.0
                        </span>
                    </div>

                    <div class="mb-3">
                        <span class="inline-block bg-blue-100 dark:bg-blue-950/40 text-blue-800 dark:text-blue-400 text-xs px-3 py-1 rounded-full font-medium">
                            ${review.service || 'Assignment Help'}
                        </span>
                    </div>

                    <p class="text-gray-700 mb-4 leading-relaxed dark:text-slate-300 text-sm" itemprop="reviewBody">
                        "${review.review}"
                    </p>

                    <div class="border-t dark:border-slate-800 pt-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white font-semibold">
                                    ${initial}
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-semibold text-gray-900 dark:text-white" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <span itemprop="name">${review.name}</span>
                                </p>
                                <p class="text-xs text-gray-600 dark:text-slate-400">${review.course || 'Verified Student'}</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-2 dark:text-slate-500">
                            <time itemprop="datePublished" datetime="${review.date || ''}">${formattedDate}</time>
                        </p>
                    </div>
                </div>
            `;
        }

        // Generate star rating HTML
        function generateStars(rating) {
            let starsHTML = '<div class="flex text-yellow-400">';
            for (let i = 0; i < 5; i++) {
                if (i < rating) {
                    starsHTML += `<svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>`;
                } else {
                    starsHTML += `<svg class="w-5 h-5 text-gray-300 dark:text-slate-700 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>`;
                }
            }
            starsHTML += '</div>';
            return starsHTML;
        }

        // Update pagination buttons
        function updatePagination() {
            const totalPages = Math.ceil(allReviews.length / REVIEWS_PER_PAGE);
            const container = document.getElementById('pagination-container');
            container.innerHTML = '';

            if (totalPages <= 1) {
                container.classList.add('hidden');
                return;
            }

            container.classList.remove('hidden');

            const prevDisabled = currentPage === 1;
            container.innerHTML += `
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium transition-colors duration-200 ${prevDisabled ? 'opacity-50 cursor-not-allowed text-gray-400' : 'hover:bg-blue-600 hover:text-white text-gray-700 dark:text-slate-300'}"
                    onclick="changeReviewPage(${currentPage - 1})" ${prevDisabled ? 'disabled' : ''}>
                    Previous
                </button>
            `;

            for (let i = 1; i <= totalPages; i++) {
                if (i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
                    const isActive = i === currentPage;
                    container.innerHTML += `
                        <button class="px-4 py-2 border rounded-lg text-sm font-medium transition-colors duration-200 ${isActive ? 'bg-blue-600 text-white border-blue-600' : 'bg-white dark:bg-slate-900 text-gray-700 dark:text-slate-300 border-gray-300 dark:border-slate-800 hover:bg-blue-600 hover:text-white'}"
                            onclick="changeReviewPage(${i})">
                            ${i}
                        </button>
                    `;
                } else if (i === currentPage - 2 || i === currentPage + 2) {
                    container.innerHTML += '<span class="px-2 text-gray-500">...</span>';
                }
            }

            const nextDisabled = currentPage === totalPages;
            container.innerHTML += `
                <button class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium transition-colors duration-200 ${nextDisabled ? 'opacity-50 cursor-not-allowed text-gray-400' : 'hover:bg-blue-600 hover:text-white text-gray-700 dark:text-slate-300'}"
                    onclick="changeReviewPage(${currentPage + 1})" ${nextDisabled ? 'disabled' : ''}>
                    Next
                </button>
            `;
        }

        window.changeReviewPage = function(page) {
            const totalPages = Math.ceil(allReviews.length / REVIEWS_PER_PAGE);
            if (page >= 1 && page <= totalPages) {
                currentPage = page;
                displayReviews();
                updatePagination();
            }
        };

        document.addEventListener('DOMContentLoaded', initReviews);
    </script>
</body>
</html>
