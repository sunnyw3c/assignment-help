<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Expert Tutors & Writers - Assignment Help Online</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50">
    @include('partials.navbar')

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
        <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center">
                <div>
                    <div class="text-4xl font-bold text-purple-600">50+</div>
                    <div class="text-gray-600 mt-2">Expert Tutors</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-purple-600">15+</div>
                    <div class="text-gray-600 mt-2">Years Average Experience</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-purple-600">7,500+</div>
                    <div class="text-gray-600 mt-2">Projects Completed</div>
                </div>
                <div>
                    <div class="text-4xl font-bold text-purple-600">4.9/5</div>
                    <div class="text-gray-600 mt-2">Average Expert Rating</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-2">Filter by Subject Area</h2>
                    <div class="flex flex-wrap gap-2" id="filter-buttons">
                        <button class="filter-btn active px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 bg-purple-600 text-white" data-filter="all">
                            All Experts
                        </button>
                        <!-- Filter buttons will be added dynamically -->
                    </div>
                </div>
                <div class="text-sm text-gray-600">
                    Showing <span id="showing-count">0</span> of <span id="total-experts">0</span> experts
                </div>
            </div>
        </div>
    </div>

    <!-- Experts Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
        <!-- Loading Spinner -->
        <div id="loading-spinner" class="flex justify-center items-center py-12">
            <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-purple-600"></div>
        </div>

        <!-- Experts Grid -->
        <div id="experts-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 hidden">
            <!-- Experts will be inserted here by JavaScript -->
        </div>

        <!-- Pagination -->
        <div id="pagination-container" class="mt-8 flex justify-center items-center space-x-2 hidden">
            <!-- Pagination buttons will be inserted here by JavaScript -->
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
            <a href="{{ route('order') }}" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold text-lg hover:bg-gray-100 transition-colors duration-300 shadow-lg">
                Request Help Now
            </a>
        </div>
    </div>

    <!-- Why Choose Our Experts -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Why Choose Our Experts?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Verified Credentials</h3>
                    <p class="text-gray-600">All experts hold advanced degrees from accredited universities and undergo rigorous verification</p>
                </div>
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Quick Response Time</h3>
                    <p class="text-gray-600">Get matched with an expert quickly and receive prompt responses to your questions</p>
                </div>
                <div class="text-center">
                    <div class="bg-purple-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Subject Specialists</h3>
                    <p class="text-gray-600">Each expert specializes in specific subjects to provide in-depth knowledge and guidance</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script>
        // Experts pagination configuration
        const EXPERTS_PER_PAGE = 9;
        let currentPage = 1;
        let allExperts = [];
        let filteredExperts = [];
        let currentFilter = 'all';

        // Fetch experts from JSON file
        async function fetchExperts() {
            try {
                const response = await fetch('/data/experts.json');
                const data = await response.json();
                allExperts = data.experts;
                filteredExperts = allExperts;

                createFilterButtons();
                displayExperts();
                updatePagination();

                // Hide spinner and show content
                document.getElementById('loading-spinner').classList.add('hidden');
                document.getElementById('experts-container').classList.remove('hidden');
                document.getElementById('pagination-container').classList.remove('hidden');
            } catch (error) {
                console.error('Error loading experts:', error);
                document.getElementById('loading-spinner').innerHTML =
                    '<p class="text-red-600">Error loading experts. Please try again later.</p>';
            }
        }

        // Create filter buttons
        function createFilterButtons() {
            const specializations = [...new Set(allExperts.map(expert => expert.specialization))];
            const filterContainer = document.getElementById('filter-buttons');

            specializations.forEach(spec => {
                const button = document.createElement('button');
                button.className = 'filter-btn px-4 py-2 rounded-full text-sm font-medium transition-colors duration-200 bg-gray-200 text-gray-700 hover:bg-purple-100 hover:text-purple-700';
                button.setAttribute('data-filter', spec);
                button.textContent = spec;
                filterContainer.appendChild(button);
            });

            // Add event listeners to filter buttons
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

            currentPage = 1; // Reset to first page
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
                const expertCard = createExpertCard(expert);
                container.innerHTML += expertCard;
            });

            // Update showing count
            document.getElementById('showing-count').textContent = filteredExperts.length;
            document.getElementById('total-experts').textContent = allExperts.length;

            // Scroll to top of experts section
            if (currentPage > 1) {
                document.getElementById('experts-container').scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }

        // Create expert card HTML
        function createExpertCard(expert) {
            const stars = generateStars(expert.rating);
            const subjectsHTML = expert.subjects.slice(0, 3).map(subject =>
                `<span class="inline-block bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded mr-1 mb-1">${subject}</span>`
            ).join('');
            const moreSubjects = expert.subjects.length > 3 ? `<span class="text-xs text-gray-600">+${expert.subjects.length - 3} more</span>` : '';

            return `
                <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <!-- Expert Header -->
                    <div class="flex items-start mb-4">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-purple-500 to-indigo-600 flex items-center justify-center text-white font-bold text-2xl flex-shrink-0">
                            ${expert.name.split(' ').map(n => n[0]).join('')}
                        </div>
                        <div class="ml-4 flex-1">
                            <h3 class="text-lg font-bold text-gray-900">${expert.name}</h3>
                            <p class="text-sm text-purple-600 font-medium">${expert.title}</p>
                            <div class="flex items-center mt-1">
                                ${stars}
                                <span class="ml-2 text-sm text-gray-600">${expert.rating}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Specialization Badge -->
                    <div class="mb-3">
                        <span class="inline-block bg-indigo-100 text-indigo-800 text-xs px-3 py-1 rounded-full font-medium">
                            ${expert.specialization}
                        </span>
                    </div>

                    <!-- Bio -->
                    <p class="text-gray-700 text-sm mb-4 leading-relaxed">
                        ${expert.bio}
                    </p>

                    <!-- Subjects -->
                    <div class="mb-4">
                        <p class="text-xs font-semibold text-gray-600 mb-2">EXPERTISE:</p>
                        <div class="flex flex-wrap">
                            ${subjectsHTML}
                            ${moreSubjects}
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="border-t pt-4 grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-xs text-gray-600">Experience</p>
                            <p class="text-sm font-semibold text-gray-900">${expert.experience}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-600">Completed Projects</p>
                            <p class="text-sm font-semibold text-gray-900">${expert.completedProjects}+</p>
                        </div>
                    </div>

                    <!-- Availability Badge -->
                    <div class="mt-4 pt-4 border-t flex items-center justify-between">
                        <span class="inline-flex items-center text-xs font-medium text-green-700">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            ${expert.availability}
                        </span>
                        <a href="{{ route('order') }}" class="text-sm font-medium text-purple-600 hover:text-purple-700 transition-colors">
                            Request Help →
                        </a>
                    </div>
                </div>
            `;
        }

        // Generate star rating HTML
        function generateStars(rating) {
            let starsHTML = '';
            const fullStars = Math.floor(rating);
            const hasHalfStar = rating % 1 !== 0;

            for (let i = 0; i < 5; i++) {
                if (i < fullStars) {
                    starsHTML += `
                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    `;
                } else if (i === fullStars && hasHalfStar) {
                    starsHTML += `
                        <svg class="w-4 h-4 text-yellow-400" viewBox="0 0 20 20">
                            <defs>
                                <linearGradient id="half-star">
                                    <stop offset="50%" stop-color="currentColor" stop-opacity="1"/>
                                    <stop offset="50%" stop-color="currentColor" stop-opacity="0.3"/>
                                </linearGradient>
                            </defs>
                            <path fill="url(#half-star)" d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    `;
                } else {
                    starsHTML += `
                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                            <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                        </svg>
                    `;
                }
            }
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
            const prevButton = createPaginationButton('Previous', currentPage - 1, currentPage === 1);
            container.innerHTML += prevButton;

            // Page number buttons
            for (let i = 1; i <= totalPages; i++) {
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
            addPaginationEventListeners(totalPages);
        }

        // Create pagination button
        function createPaginationButton(text, page, disabled) {
            const disabledClass = disabled ? 'opacity-50 cursor-not-allowed' : 'hover:bg-purple-600 hover:text-white';
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
                ? 'bg-purple-600 text-white border-purple-600'
                : 'bg-white text-gray-700 border-gray-300 hover:bg-purple-600 hover:text-white';
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
        function addPaginationEventListeners(totalPages) {
            const buttons = document.querySelectorAll('#pagination-container button');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    if (!this.disabled) {
                        const page = parseInt(this.getAttribute('data-page'));
                        if (page > 0 && page <= totalPages) {
                            currentPage = page;
                            displayExperts();
                            updatePagination();
                        }
                    }
                });
            });
        }

        // Initialize when DOM is loaded
        document.addEventListener('DOMContentLoaded', fetchExperts);
    </script>
</body>
</html>
