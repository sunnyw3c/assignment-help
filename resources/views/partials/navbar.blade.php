<nav class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 dark:border-slate-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 sm:h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <span class="text-xl sm:text-2xl font-black bg-gradient-to-r from-violet-600 to-indigo-600 dark:from-violet-400 dark:to-indigo-400 bg-clip-text text-transparent tracking-tight">
                        AssignmentHelp<span class="text-slate-800 dark:text-white">USA</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-8 font-semibold text-sm">
                <a href="{{ url('/') }}" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors {{ request()->is('/') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Home
                </a>

                <!-- Services Mega-Menu Trigger -->
                <div class="relative group">
                    <button id="mega-menu-trigger" class="flex items-center gap-1 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors py-2 focus:outline-none">
                        <span>Services</span>
                        <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <!-- Mega-Menu Dropdown Panel -->
                    <div class="absolute left-1/2 -translate-x-1/2 top-full w-[800px] bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-2xl rounded-2xl p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-350 transform origin-top scale-95 group-hover:scale-100 flex gap-8 z-50">
                        <!-- Programming Services -->
                        <div class="flex-1 flex flex-col gap-4">
                            <div class="flex items-center gap-2 text-violet-600 dark:text-violet-400 font-bold border-b border-slate-100 dark:border-slate-800 pb-2">
                                <span>💻</span>
                                <span>Programming Help</span>
                            </div>
                            <div class="grid grid-cols-2 gap-2 text-xs font-normal">
                                <a href="{{ route('services.programming.show', 'web-development') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Web Development</a>
                                <a href="{{ route('services.programming.show', 'mobile-app') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Mobile Apps</a>
                                <a href="{{ route('services.programming.show', 'algorithms') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Algorithms</a>
                                <a href="{{ route('services.programming.show', 'database') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Databases</a>
                                <a href="{{ route('services.programming.show', 'machine-learning') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Machine Learning</a>
                                <a href="{{ route('services.programming.show', 'debugging') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Code Debugging</a>
                            </div>
                            <a href="{{ route('services.programming.index') }}" class="text-xs text-indigo-600 dark:text-indigo-400 font-semibold hover:underline mt-2 inline-flex items-center gap-1">
                                View All Programming Services &rarr;
                            </a>
                        </div>

                        <!-- Academic Writing Services -->
                        <div class="flex-1 flex flex-col gap-4">
                            <div class="flex items-center gap-2 text-indigo-600 dark:text-indigo-400 font-bold border-b border-slate-100 dark:border-slate-800 pb-2">
                                <span>📝</span>
                                <span>Academic Writing</span>
                            </div>
                            <div class="grid grid-cols-2 gap-2 text-xs font-normal">
                                <a href="{{ route('services.essay-writing.index') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Essay Writing</a>
                                <a href="{{ route('services.research-paper.index') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Research Paper</a>
                                <a href="{{ route('services.case-study.index') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Case Studies</a>
                                <a href="{{ route('services.homework-help.index') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Homework Help</a>
                                <a href="{{ route('services.thesis-dissertation.index') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Thesis & Diss.</a>
                                <a href="{{ route('services.proofreading-editing.index') }}" class="p-2 hover:bg-slate-50 dark:hover:bg-slate-800/50 rounded-lg text-slate-700 dark:text-slate-300 transition-colors font-medium">Editing & Proof</a>
                            </div>
                            <a href="{{ route('services.assignment.index') }}" class="text-xs text-indigo-600 dark:text-indigo-400 font-semibold hover:underline mt-2 inline-flex items-center gap-1">
                                View All Assignment Services &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('how-it-works') }}" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors {{ request()->routeIs('how-it-works') ? 'text-indigo-600 dark:text-white' : '' }}">
                    How It Works
                </a>
                <a href="{{ route('pricing') }}" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors {{ request()->routeIs('pricing') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Pricing
                </a>
                <a href="{{ route('experts') }}" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors {{ request()->routeIs('experts') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Experts
                </a>
                <a href="{{ route('reviews') }}" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors {{ request()->routeIs('reviews') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Reviews
                </a>
                <a href="{{ route('faq') }}" class="text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors {{ request()->routeIs('faq') ? 'text-indigo-600 dark:text-white' : '' }}">
                    FAQ
                </a>
            </div>

            <!-- Action Buttons + Theme Toggle (Desktop) -->
            <div class="hidden lg:flex items-center gap-4">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" class="p-2 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors focus:outline-none" aria-label="Toggle Theme">
                    <!-- Sun Icon -->
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                    </svg>
                    <!-- Moon Icon -->
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>

                @guest
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors">
                        Log In
                    </a>
                    <a href="{{ route('register') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-xl text-sm font-semibold transition-all shadow-sm shadow-indigo-600/10">
                        Sign Up
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white transition-colors">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 px-4 py-2 rounded-xl text-sm font-semibold transition-all">
                            Logout
                        </button>
                    </form>
                @endguest

                <a href="{{ route('order') }}" class="bg-slate-900 hover:bg-slate-800 dark:bg-white dark:hover:bg-slate-100 text-white dark:text-slate-900 px-5 py-2.5 rounded-xl text-sm font-bold transition-all shadow-sm">
                    Order Now
                </a>
            </div>

            <!-- Mobile Menu Toggle (Burger) -->
            <div class="flex items-center gap-3 lg:hidden">
                <!-- Theme Toggle Button (Mobile) -->
                <button id="theme-toggle-mobile" class="p-2 rounded-xl text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors focus:outline-none" aria-label="Toggle Theme">
                    <svg id="theme-toggle-light-icon-mob" class="hidden w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                    </svg>
                    <svg id="theme-toggle-dark-icon-mob" class="hidden w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>

                <button id="mobile-menu-btn" class="p-2 rounded-xl text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors focus:outline-none" aria-label="Toggle Menu">
                    <svg id="mobile-menu-burger" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="mobile-menu-close" class="hidden w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Panel -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900 transition-colors duration-300">
        <div class="px-4 pt-4 pb-6 space-y-3 font-semibold text-base flex flex-col">
            <a href="{{ url('/') }}" class="px-3 py-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">Home</a>
            
            <!-- Mobile Services Accordion -->
            <div>
                <button id="mobile-services-btn" class="w-full px-3 py-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 flex items-center justify-between transition-colors focus:outline-none">
                    <span>Services</span>
                    <svg id="mobile-services-arrow" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobile-services-list" class="hidden pl-6 pr-3 py-2 space-y-2 text-sm font-medium">
                    <div class="text-violet-600 dark:text-violet-400 font-bold text-xs uppercase tracking-wider mt-2 mb-1">Programming Help</div>
                    <a href="{{ route('services.programming.show', 'web-development') }}" class="block p-2 text-slate-600 dark:text-slate-400 hover:text-indigo-600">Web Development</a>
                    <a href="{{ route('services.programming.show', 'mobile-app') }}" class="block p-2 text-slate-600 dark:text-slate-400 hover:text-indigo-600">Mobile Apps</a>
                    <a href="{{ route('services.programming.show', 'algorithms') }}" class="block p-2 text-slate-600 dark:text-slate-400 hover:text-indigo-600">Algorithms</a>
                    <a href="{{ route('services.programming.index') }}" class="block p-2 text-indigo-600 dark:text-indigo-400 font-semibold">All Programming &rarr;</a>

                    <div class="text-indigo-600 dark:text-indigo-400 font-bold text-xs uppercase tracking-wider mt-4 mb-1">Academic Writing</div>
                    <a href="{{ route('services.essay-writing.index') }}" class="block p-2 text-slate-600 dark:text-slate-400 hover:text-indigo-600">Essay Writing</a>
                    <a href="{{ route('services.research-paper.index') }}" class="block p-2 text-slate-600 dark:text-slate-400 hover:text-indigo-600">Research Paper</a>
                    <a href="{{ route('services.case-study.index') }}" class="block p-2 text-slate-600 dark:text-slate-400 hover:text-indigo-600">Case Studies</a>
                    <a href="{{ route('services.assignment.index') }}" class="block p-2 text-indigo-600 dark:text-indigo-400 font-semibold">All Assignments &rarr;</a>
                </div>
            </div>

            <a href="{{ route('how-it-works') }}" class="px-3 py-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">How It Works</a>
            <a href="{{ route('pricing') }}" class="px-3 py-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">Pricing</a>
            <a href="{{ route('experts') }}" class="px-3 py-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">Experts</a>
            <a href="{{ route('reviews') }}" class="px-3 py-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">Reviews</a>
            <a href="{{ route('faq') }}" class="px-3 py-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">FAQ</a>

            <div class="border-t border-slate-100 dark:border-slate-800 pt-4 mt-2 space-y-2">
                @guest
                    <a href="{{ route('login') }}" class="block text-center px-4 py-2.5 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">Log In</a>
                    <a href="{{ route('register') }}" class="block text-center bg-indigo-600 text-white px-4 py-2.5 rounded-xl transition-all shadow-sm">Sign Up</a>
                @else
                    <a href="{{ route('dashboard') }}" class="block text-center px-4 py-2.5 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800 text-slate-700 dark:text-slate-300 transition-colors">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="block w-full">
                        @csrf
                        <button type="submit" class="w-full text-center px-4 py-2.5 rounded-xl border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                            Logout
                        </button>
                    </form>
                @endguest
                <a href="{{ route('order') }}" class="block text-center bg-slate-900 dark:bg-white text-white dark:text-slate-900 px-4 py-2.5 rounded-xl font-bold transition-all shadow-sm">
                    Order Now
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeToggleMobileBtn = document.getElementById('theme-toggle-mobile');
        
        const darkIcon = document.getElementById('theme-toggle-dark-icon');
        const lightIcon = document.getElementById('theme-toggle-light-icon');
        const darkIconMob = document.getElementById('theme-toggle-dark-icon-mob');
        const lightIconMob = document.getElementById('theme-toggle-light-icon-mob');

        // Apply visual toggle state based on element class
        function syncThemeIcons() {
            const isDark = document.documentElement.classList.contains('dark');
            if (isDark) {
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
                lightIconMob.classList.remove('hidden');
                darkIconMob.classList.add('hidden');
            } else {
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
                lightIconMob.classList.add('hidden');
                darkIconMob.classList.remove('hidden');
            }
        }

        syncThemeIcons();

        function toggleTheme() {
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
            syncThemeIcons();
        }

        if (themeToggleBtn) themeToggleBtn.addEventListener('click', toggleTheme);
        if (themeToggleMobileBtn) themeToggleMobileBtn.addEventListener('click', toggleTheme);

        // Mobile menu toggle logic
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('mobile-menu-burger');
        const closeIcon = document.getElementById('mobile-menu-close');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    burgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                    burgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }
            });
        }

        // Mobile services accordion logic
        const mobileServicesBtn = document.getElementById('mobile-services-btn');
        const mobileServicesList = document.getElementById('mobile-services-list');
        const mobileServicesArrow = document.getElementById('mobile-services-arrow');

        if (mobileServicesBtn && mobileServicesList) {
            mobileServicesBtn.addEventListener('click', function() {
                const isHidden = mobileServicesList.classList.contains('hidden');
                if (isHidden) {
                    mobileServicesList.classList.remove('hidden');
                    mobileServicesArrow.classList.add('rotate-180');
                } else {
                    mobileServicesList.classList.add('hidden');
                    mobileServicesArrow.classList.remove('rotate-180');
                }
            });
        }
    });
</script>
