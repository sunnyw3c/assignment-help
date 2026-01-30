<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Reviews & Testimonials - Assignment Help Online</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    @include('partials.navbar')

    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Student Reviews & Testimonials</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto">
                See what our students say about their experience with our academic support services
            </p>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8">
        <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                <div>
                    <div class="text-4xl font-bold text-blue-600">98%</div>
                    <div class="text-gray-600 mt-2">Satisfaction Rate</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">10,000+</div>
                    <div class="text-gray-600 mt-2">Happy Students</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">4.9/5</div>
                    <div class="text-gray-600 mt-2">Average Rating</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-blue-600">50+</div>
                    <div class="text-gray-600 mt-2">Expert Writers</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <div class="mb-8 flex justify-between items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">What Our Students Say</h2>
                <p class="text-gray-600">Real reviews from real students who have used our services</p>
            </div>
            <div class="text-sm text-gray-600">
                Showing <span id="showing-start">0</span>-<span id="showing-end">0</span> of <span id="total-reviews">0</span> reviews
            </div>
        </div>

        <!-- Loading Spinner -->
        <div id="loading-spinner" class="flex justify-center items-center py-12">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-600"></div>
        </div>

        <!-- Reviews Grid -->
        <div id="reviews-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 hidden">
            <!-- Reviews will be inserted here by JavaScript -->
        </div>

        <!-- Pagination -->
        <div id="pagination-container" class="mt-8 flex justify-center items-center space-x-2 hidden">
            <!-- Pagination buttons will be inserted here by JavaScript -->
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
            <a href="{{ route('order') }}" class="inline-block bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors duration-300 shadow-lg">
                Get Started Today
            </a>
        </div>
    </div>

    <!-- Trust Indicators -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900">100% Original</h3>
                    <p class="text-sm text-gray-600 mt-1">Plagiarism-free work</p>
                </div>
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900">On-Time Delivery</h3>
                    <p class="text-sm text-gray-600 mt-1">Never miss a deadline</p>
                </div>
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900">Expert Writers</h3>
                    <p class="text-sm text-gray-600 mt-1">Qualified professionals</p>
                </div>
                <div>
                    <div class="text-blue-600 mb-2">
                        <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <h3 class="font-semibold text-gray-900">Secure & Private</h3>
                    <p class="text-sm text-gray-600 mt-1">Your data is safe</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script>
        // Reviews pagination configuration
        const REVIEWS_PER_PAGE = 9;
        let currentPage = 1;
        let allReviews = [];

        // Fetch reviews from JSON file
        async function fetchReviews() {
            try {
                const response = await fetch('/data/reviews.json');
                const data = await response.json();
                allReviews = data.reviews;
                displayReviews();
                updatePagination();

                // Hide spinner and show content
                document.getElementById('loading-spinner').classList.add('hidden');
                document.getElementById('reviews-container').classList.remove('hidden');
                document.getElementById('pagination-container').classList.remove('hidden');
            } catch (error) {
                console.error('Error loading reviews:', error);
                document.getElementById('loading-spinner').innerHTML =
                    '<p class="text-red-600">Error loading reviews. Please try again later.</p>';
            }
        }

        // Display reviews for current page
        function displayReviews() {
            const startIndex = (currentPage - 1) * REVIEWS_PER_PAGE;
            const endIndex = startIndex + REVIEWS_PER_PAGE;
            const reviewsToShow = allReviews.slice(startIndex, endIndex);

            const container = document.getElementById('reviews-container');
            container.innerHTML = '';

            reviewsToShow.forEach(review => {
                const reviewCard = createReviewCard(review);
                container.innerHTML += reviewCard;
            });

            // Update showing count
            document.getElementById('showing-start').textContent = startIndex + 1;
            document.getElementById('showing-end').textContent = Math.min(endIndex, allReviews.length);
            document.getElementById('total-reviews').textContent = allReviews.length;

            // Scroll to top of reviews section
            document.getElementById('reviews-container').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Create review card HTML
        function createReviewCard(review) {
            const initial = review.name.charAt(0);
            const stars = generateStars(review.rating);
            const formattedDate = new Date(review.date).toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });

            return `
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-shadow duration-300">
                    <!-- Rating Stars -->
                    <div class="flex items-center mb-3">
                        ${stars}
                        <span class="ml-2 text-sm text-gray-600">${review.rating}.0</span>
                    </div>

                    <!-- Service Badge -->
                    <div class="mb-3">
                        <span class="inline-block bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full font-medium">
                            ${review.service}
                        </span>
                    </div>

                    <!-- Review Text -->
                    <p class="text-gray-700 mb-4 leading-relaxed">
                        "${review.review}"
                    </p>

                    <!-- Reviewer Info -->
                    <div class="border-t pt-4">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-500 to-indigo-600 flex items-center justify-center text-white font-semibold">
                                    ${initial}
                                </div>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-semibold text-gray-900">${review.name}</p>
                                <p class="text-xs text-gray-600">${review.course}</p>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">${formattedDate}</p>
                    </div>
                </div>
            `;
        }

        // Generate star rating HTML
        function generateStars(rating) {
            let starsHTML = '';
            for (let i = 0; i < 5; i++) {
                if (i < rating) {
                    starsHTML += `
                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    `;
                } else {
                    starsHTML += `
                        <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    `;
                }
            }
            return starsHTML;
        }

        // Update pagination buttons
        function updatePagination() {
            const totalPages = Math.ceil(allReviews.length / REVIEWS_PER_PAGE);
            const container = document.getElementById('pagination-container');
            container.innerHTML = '';

            // Previous button
            const prevButton = createPaginationButton('Previous', currentPage - 1, currentPage === 1);
            container.innerHTML += prevButton;

            // Page number buttons
            for (let i = 1; i <= totalPages; i++) {
                // Show first page, last page, current page, and pages around current page
                if (i === 1 || i === totalPages || (i >= currentPage - 1 && i <= currentPage + 1)) {
                    const pageButton = createPageButton(i, i === currentPage);
                    container.innerHTML += pageButton;
                } else if (i === currentPage - 2 || i === currentPage + 2) {
                    container.innerHTML += '<span class="px-2 text-gray-500">...</span>';
                }
            }

            // Next button
            const nextButton = createPaginationButton('Next', currentPage + 1, currentPage === totalPages);
            container.innerHTML += nextButton;

            // Add event listeners
            addPaginationEventListeners();
        }

        // Create pagination button
        function createPaginationButton(text, page, disabled) {
            const disabledClass = disabled ? 'opacity-50 cursor-not-allowed' : 'hover:bg-blue-600 hover:text-white';
            return `
                <button
                    class="px-4 py-2 border border-gray-300 rounded-lg text-sm font-medium transition-colors duration-200 ${disabledClass}"
                    data-page="${page}"
                    ${disabled ? 'disabled' : ''}
                >
                    ${text}
                </button>
            `;
        }

        // Create page number button
        function createPageButton(page, isActive) {
            const activeClass = isActive
                ? 'bg-blue-600 text-white border-blue-600'
                : 'bg-white text-gray-700 border-gray-300 hover:bg-blue-600 hover:text-white';
            return `
                <button
                    class="px-4 py-2 border rounded-lg text-sm font-medium transition-colors duration-200 ${activeClass}"
                    data-page="${page}"
                >
                    ${page}
                </button>
            `;
        }

        // Add event listeners to pagination buttons
        function addPaginationEventListeners() {
            const buttons = document.querySelectorAll('#pagination-container button');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    if (!this.disabled) {
                        const page = parseInt(this.getAttribute('data-page'));
                        if (page > 0 && page <= Math.ceil(allReviews.length / REVIEWS_PER_PAGE)) {
                            currentPage = page;
                            displayReviews();
                            updatePagination();
                        }
                    }
                });
            });
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', fetchReviews);
    </script>
</body>
</html>
