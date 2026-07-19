@php
    $serviceMenu = [
        [
            'title' => 'Programming Help',
            'description' => 'Code, apps, data, cloud, security, and debugging.',
            'href' => route('services.programming.index'),
            'accent' => 'text-violet-600 dark:text-violet-400',
            'groups' => [
                'Languages' => [
                    ['label' => 'Python Help', 'href' => route('services.programming.show', 'python')],
                    ['label' => 'Java Help', 'href' => route('services.programming.show', 'java')],
                    ['label' => 'PHP Help', 'href' => route('services.programming.show', 'php')],
                ],
                'Web & Apps' => [
                    ['label' => 'Web Development', 'href' => route('services.programming.show', 'web-development')],
                    ['label' => 'Mobile Apps', 'href' => route('services.programming.show', 'mobile-app')],
                    ['label' => 'Desktop Apps', 'href' => route('services.programming.show', 'desktop-app')],
                    ['label' => 'API Development', 'href' => route('services.programming.show', 'api-development')],
                ],
                'CS & Data' => [
                    ['label' => 'Algorithms', 'href' => route('services.programming.show', 'algorithms')],
                    ['label' => 'Databases', 'href' => route('services.programming.show', 'database')],
                    ['label' => 'Machine Learning', 'href' => route('services.programming.show', 'machine-learning')],
                ],
                'Systems & Security' => [
                    ['label' => 'Cybersecurity', 'href' => route('services.programming.show', 'cybersecurity')],
                    ['label' => 'Cloud Computing', 'href' => route('services.programming.show', 'cloud-computing')],
                    ['label' => 'DevOps', 'href' => route('services.programming.show', 'devops')],
                    ['label' => 'Testing & QA', 'href' => route('services.programming.show', 'testing-qa')],
                    ['label' => 'Debugging', 'href' => route('services.programming.show', 'debugging')],
                    ['label' => 'Game Development', 'href' => route('services.programming.show', 'game-development')],
                ],
            ],
        ],
        [
            'title' => 'Assignment Help',
            'description' => 'General assignments, subjects, homework, and reports.',
            'href' => route('services.homework-help.index'),
            'accent' => 'text-blue-600 dark:text-blue-400',
            'groups' => [
                'Core Assignment Help' => [
                    ['label' => 'Homework Help', 'href' => route('services.homework-help.index')],
                    ['label' => 'Lab Report Help', 'href' => route('services.lab-report.index')],
                ],
                'Subject Help' => [
                    ['label' => 'Law Assignment Help', 'href' => route('services.law-assignment.index')],
                ],
            ],
        ],
        [
            'title' => 'Essay Help',
            'description' => 'Essays, papers, case studies, editing, and presentations.',
            'href' => route('services.essay-writing.index'),
            'accent' => 'text-indigo-600 dark:text-indigo-400',
            'groups' => [
                'Essays & Papers' => [
                    ['label' => 'Essay Writing', 'href' => route('services.essay-writing.index')],
                    ['label' => 'Research Paper', 'href' => route('services.research-paper.index')],
                    ['label' => 'Case Study', 'href' => route('services.case-study.index')],
                    ['label' => 'Literature Review', 'href' => route('services.literature-review.index')],
                ],
                'Long Form & Polish' => [
                    ['label' => 'Thesis & Dissertation', 'href' => route('services.thesis-dissertation.index')],
                    ['label' => 'Proofreading & Editing', 'href' => route('services.proofreading-editing.index')],
                    ['label' => 'Presentation Design', 'href' => route('services.presentation-design.index')],
                ],
            ],
        ],
    ];
@endphp

<nav class="sticky top-0 z-50 border-b border-slate-100 bg-white/80 backdrop-blur-md transition-colors duration-300 dark:border-slate-800 dark:bg-slate-900/80">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between sm:h-20">
            <div class="flex shrink-0 items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Assignment Help USA" class="h-8 w-auto sm:h-10">
                </a>
            </div>

            <div class="hidden items-center gap-8 text-sm font-semibold lg:flex">
                <a href="{{ url('/') }}" class="text-slate-600 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white {{ request()->is('/') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Home
                </a>

                <div class="group relative">
                    <button id="mega-menu-trigger" class="flex items-center gap-1 py-2 text-slate-600 transition-colors hover:text-indigo-600 focus:outline-none dark:text-slate-300 dark:hover:text-white">
                        <span>Services</span>
                        <svg class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>

                    <div class="invisible fixed left-1/2 top-16 z-50 w-[920px] max-w-[calc(100vw-2rem)] origin-top -translate-x-1/2 scale-95 rounded-2xl border border-slate-100 bg-white p-4 opacity-0 shadow-2xl transition-all duration-300 group-hover:visible group-hover:scale-100 group-hover:opacity-100 dark:border-slate-800 dark:bg-slate-900 sm:top-20">
                        <div class="grid grid-cols-[250px_1fr] gap-4">
                            <div class="space-y-2 rounded-xl bg-slate-50 p-2 dark:bg-slate-950/50">
                                @foreach($serviceMenu as $section)
                                    <button type="button" data-service-tab="{{ $loop->index }}" class="service-menu-tab w-full rounded-lg p-3 text-left transition-colors {{ $loop->index === 1 ? 'bg-white shadow-sm dark:bg-slate-800' : 'hover:bg-white dark:hover:bg-slate-800/70' }}">
                                        <span class="{{ $section['accent'] }} block text-sm font-black">{{ $section['title'] }}</span>
                                        <span class="mt-1 block text-[11px] font-medium leading-relaxed text-slate-500 dark:text-slate-400">{{ $section['description'] }}</span>
                                    </button>
                                @endforeach

                            </div>

                            <div class="rounded-xl border border-slate-100 bg-slate-50/70 p-4 dark:border-slate-800 dark:bg-slate-950/40">
                            @foreach($serviceMenu as $section)
                                <div data-service-panel="{{ $loop->index }}" class="service-menu-panel {{ $loop->index === 1 ? '' : 'hidden' }}">
                                    <div class="mb-4 flex items-start justify-between gap-4 border-b border-slate-200 pb-3 dark:border-slate-800">
                                        <div>
                                            <p class="{{ $section['accent'] }} text-base font-black">{{ $section['title'] }}</p>
                                            <p class="mt-1 text-xs font-medium leading-relaxed text-slate-500 dark:text-slate-400">{{ $section['description'] }}</p>
                                        </div>
                                        <a href="{{ $section['href'] }}" class="shrink-0 rounded-lg bg-white px-3 py-2 text-[10px] font-black uppercase tracking-widest text-slate-600 transition-colors hover:text-indigo-600 dark:bg-slate-900 dark:text-slate-300 dark:hover:text-white">
                                            View all
                                        </a>
                                    </div>

                                    <div class="grid grid-cols-2 gap-5">
                                        @foreach($section['groups'] as $groupTitle => $links)
                                            <div>
                                                <p class="mb-2 text-[10px] font-black uppercase tracking-widest text-slate-400 dark:text-slate-500">{{ $groupTitle }}</p>
                                                <div class="grid grid-cols-2 gap-1">
                                                    @foreach($links as $link)
                                                        <a href="{{ $link['href'] }}" class="rounded-lg px-2.5 py-1.5 text-xs font-semibold text-slate-700 transition-colors hover:bg-white hover:text-indigo-600 dark:text-slate-300 dark:hover:bg-slate-800/70 dark:hover:text-white">
                                                            {{ $link['label'] }}
                                                        </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>

                        <div class="mt-5 flex items-center justify-between rounded-xl bg-slate-900 px-4 py-3 text-white dark:bg-white dark:text-slate-900">
                            <span class="text-xs font-black uppercase tracking-widest">Need help choosing?</span>
                            <a href="{{ route('order') }}" class="rounded-lg bg-white px-4 py-2 text-xs font-black text-slate-900 transition-colors hover:bg-slate-100 dark:bg-slate-900 dark:text-white dark:hover:bg-slate-800">Order Now</a>
                        </div>
                    </div>
                </div>

                <a href="{{ route('how-it-works') }}" class="text-slate-600 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white {{ request()->routeIs('how-it-works') ? 'text-indigo-600 dark:text-white' : '' }}">
                    How It Works
                </a>
                <a href="{{ route('pricing') }}" class="text-slate-600 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white {{ request()->routeIs('pricing') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Pricing
                </a>
                <a href="{{ route('experts') }}" class="text-slate-600 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white {{ request()->routeIs('experts') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Experts
                </a>
                <a href="{{ route('reviews') }}" class="text-slate-600 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white {{ request()->routeIs('reviews') ? 'text-indigo-600 dark:text-white' : '' }}">
                    Reviews
                </a>
                <a href="{{ route('faq') }}" class="text-slate-600 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white {{ request()->routeIs('faq') ? 'text-indigo-600 dark:text-white' : '' }}">
                    FAQ
                </a>
            </div>

            <div class="hidden items-center gap-4 lg:flex">
                <button id="theme-toggle" class="rounded-xl p-2 text-slate-500 transition-colors hover:bg-slate-100 focus:outline-none dark:text-slate-400 dark:hover:bg-slate-800" aria-label="Toggle Theme">
                    <svg id="theme-toggle-light-icon" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                    </svg>
                    <svg id="theme-toggle-dark-icon" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>

                @guest
                    <a href="{{ route('login') }}" class="text-sm font-semibold text-slate-700 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white">
                        Log In
                    </a>
                    <a href="{{ route('register') }}" class="rounded-xl bg-indigo-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm shadow-indigo-600/10 transition-all hover:bg-indigo-700">
                        Sign Up
                    </a>
                @else
                    <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-slate-700 transition-colors hover:text-indigo-600 dark:text-slate-300 dark:hover:text-white">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-semibold text-slate-700 transition-all hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-800">
                            Logout
                        </button>
                    </form>
                @endguest

                <a href="{{ route('order') }}" class="rounded-xl bg-slate-900 px-5 py-2.5 text-sm font-bold text-white shadow-sm transition-all hover:bg-slate-800 dark:bg-white dark:text-slate-900 dark:hover:bg-slate-100">
                    Order Now
                </a>
            </div>

            <div class="flex items-center gap-3 lg:hidden">
                <button id="theme-toggle-mobile" class="rounded-xl p-2 text-slate-500 transition-colors hover:bg-slate-100 focus:outline-none dark:text-slate-400 dark:hover:bg-slate-800" aria-label="Toggle Theme">
                    <svg id="theme-toggle-light-icon-mob" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"></path>
                    </svg>
                    <svg id="theme-toggle-dark-icon-mob" class="hidden h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>

                <button id="mobile-menu-btn" type="button" aria-expanded="false" aria-controls="mobile-menu" class="rounded-xl p-2 text-slate-600 transition-colors hover:bg-slate-100 focus:outline-none dark:text-slate-300 dark:hover:bg-slate-800" aria-label="Toggle Menu">
                    <svg id="mobile-menu-burger" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="mobile-menu-close" class="hidden h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden max-h-[calc(100dvh-4rem)] overflow-y-auto overscroll-contain border-t border-slate-100 bg-white transition-colors duration-300 dark:border-slate-800 dark:bg-slate-900 lg:hidden">
        <div class="flex flex-col space-y-3 px-4 pb-6 pt-4 text-base font-semibold">
            <a href="{{ url('/') }}" class="rounded-xl px-3 py-2 text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">Home</a>

            <div>
                <button id="mobile-services-btn" type="button" aria-expanded="false" aria-controls="mobile-services-list" class="flex w-full items-center justify-between rounded-xl px-3 py-2 text-slate-700 transition-colors hover:bg-slate-50 focus:outline-none dark:text-slate-300 dark:hover:bg-slate-800">
                    <span>Services</span>
                    <svg id="mobile-services-arrow" class="h-4 w-4 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="mobile-services-list" class="hidden space-y-2 px-1 py-2 text-sm font-medium">
                    @foreach($serviceMenu as $section)
                        <div class="overflow-hidden rounded-xl border border-slate-100 dark:border-slate-800">
                            <button type="button" data-mobile-section="{{ $loop->index }}" aria-expanded="false" aria-controls="mobile-section-panel-{{ $loop->index }}" class="mobile-section-btn flex w-full items-start justify-between gap-3 p-3 text-left transition-colors hover:bg-slate-50 dark:hover:bg-slate-800/60">
                                <span class="min-w-0">
                                    <span class="{{ $section['accent'] }} block text-xs font-black uppercase tracking-wider">{{ $section['title'] }}</span>
                                    <span class="mt-1 block text-xs leading-relaxed text-slate-500 dark:text-slate-400">{{ $section['description'] }}</span>
                                </span>
                                <svg class="mobile-section-arrow mt-0.5 h-4 w-4 shrink-0 text-slate-400 transition-transform dark:text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div id="mobile-section-panel-{{ $loop->index }}" class="mobile-section-panel hidden space-y-3 border-t border-slate-100 px-3 py-3 dark:border-slate-800">
                                <a href="{{ $section['href'] }}" class="block rounded-lg bg-slate-50 px-2.5 py-1.5 text-center text-[10px] font-black uppercase tracking-widest text-slate-600 transition-colors hover:text-indigo-600 dark:bg-slate-800/60 dark:text-slate-300 dark:hover:text-white">
                                    View all {{ $section['title'] }}
                                </a>
                                @foreach($section['groups'] as $groupTitle => $links)
                                    <div>
                                        <p class="mb-1 text-[10px] font-black uppercase tracking-widest text-slate-400 dark:text-slate-500">{{ $groupTitle }}</p>
                                        <div class="grid grid-cols-1 gap-1">
                                            @foreach($links as $link)
                                                <a href="{{ $link['href'] }}" class="block rounded-lg px-2 py-2 text-slate-600 transition-colors hover:bg-slate-50 hover:text-indigo-600 dark:text-slate-400 dark:hover:bg-slate-800 dark:hover:text-white">
                                                    {{ $link['label'] }}
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <a href="{{ route('how-it-works') }}" class="rounded-xl px-3 py-2 text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">How It Works</a>
            <a href="{{ route('pricing') }}" class="rounded-xl px-3 py-2 text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">Pricing</a>
            <a href="{{ route('experts') }}" class="rounded-xl px-3 py-2 text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">Experts</a>
            <a href="{{ route('reviews') }}" class="rounded-xl px-3 py-2 text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">Reviews</a>
            <a href="{{ route('faq') }}" class="rounded-xl px-3 py-2 text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">FAQ</a>

            <div class="mt-2 space-y-2 border-t border-slate-100 pt-4 dark:border-slate-800">
                @guest
                    <a href="{{ route('login') }}" class="block rounded-xl px-4 py-2.5 text-center text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">Log In</a>
                    <a href="{{ route('register') }}" class="block rounded-xl bg-indigo-600 px-4 py-2.5 text-center text-white shadow-sm transition-all">Sign Up</a>
                @else
                    <a href="{{ route('dashboard') }}" class="block rounded-xl px-4 py-2.5 text-center text-slate-700 transition-colors hover:bg-slate-50 dark:text-slate-300 dark:hover:bg-slate-800">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="block w-full">
                        @csrf
                        <button type="submit" class="w-full rounded-xl border border-slate-200 px-4 py-2.5 text-center text-slate-700 transition-all hover:bg-slate-50 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-800">
                            Logout
                        </button>
                    </form>
                @endguest
                <a href="{{ route('order') }}" class="block rounded-xl bg-slate-900 px-4 py-2.5 text-center font-bold text-white shadow-sm transition-all dark:bg-white dark:text-slate-900">
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

        function syncThemeIcons() {
            const isDark = document.documentElement.classList.contains('dark');

            if (darkIcon && lightIcon) {
                lightIcon.classList.toggle('hidden', !isDark);
                darkIcon.classList.toggle('hidden', isDark);
            }

            if (darkIconMob && lightIconMob) {
                lightIconMob.classList.toggle('hidden', !isDark);
                darkIconMob.classList.toggle('hidden', isDark);
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
            } else if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }

            syncThemeIcons();
        }

        if (themeToggleBtn) themeToggleBtn.addEventListener('click', toggleTheme);
        if (themeToggleMobileBtn) themeToggleMobileBtn.addEventListener('click', toggleTheme);

        const serviceTabs = document.querySelectorAll('.service-menu-tab');
        const servicePanels = document.querySelectorAll('.service-menu-panel');

        function setActiveServicePanel(index) {
            serviceTabs.forEach(function(tab) {
                const isActive = tab.dataset.serviceTab === String(index);
                tab.classList.toggle('bg-white', isActive);
                tab.classList.toggle('shadow-sm', isActive);
                tab.classList.toggle('dark:bg-slate-800', isActive);
            });

            servicePanels.forEach(function(panel) {
                panel.classList.toggle('hidden', panel.dataset.servicePanel !== String(index));
            });
        }

        serviceTabs.forEach(function(tab) {
            tab.addEventListener('mouseenter', function() {
                setActiveServicePanel(tab.dataset.serviceTab);
            });
            tab.addEventListener('click', function() {
                setActiveServicePanel(tab.dataset.serviceTab);
            });
        });

        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const burgerIcon = document.getElementById('mobile-menu-burger');
        const closeIcon = document.getElementById('mobile-menu-close');

        function setMobileMenu(open) {
            if (!mobileMenu) return;
            mobileMenu.classList.toggle('hidden', !open);
            if (mobileMenuBtn) mobileMenuBtn.setAttribute('aria-expanded', String(open));
            if (burgerIcon && closeIcon) {
                burgerIcon.classList.toggle('hidden', open);
                closeIcon.classList.toggle('hidden', !open);
            }
        }

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                setMobileMenu(mobileMenu.classList.contains('hidden'));
            });
        }

        const mobileServicesBtn = document.getElementById('mobile-services-btn');
        const mobileServicesList = document.getElementById('mobile-services-list');
        const mobileServicesArrow = document.getElementById('mobile-services-arrow');

        if (mobileServicesBtn && mobileServicesList) {
            mobileServicesBtn.addEventListener('click', function() {
                const willOpen = mobileServicesList.classList.contains('hidden');
                mobileServicesList.classList.toggle('hidden', !willOpen);
                mobileServicesBtn.setAttribute('aria-expanded', String(willOpen));
                if (mobileServicesArrow) {
                    mobileServicesArrow.classList.toggle('rotate-180', willOpen);
                }
            });
        }

        // Per-section accordions inside the mobile Services list — only one open at a time.
        const mobileSectionBtns = document.querySelectorAll('.mobile-section-btn');

        mobileSectionBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const panel = document.getElementById('mobile-section-panel-' + btn.dataset.mobileSection);
                const arrow = btn.querySelector('.mobile-section-arrow');
                const willOpen = panel && panel.classList.contains('hidden');

                mobileSectionBtns.forEach(function(other) {
                    if (other === btn) return;
                    const otherPanel = document.getElementById('mobile-section-panel-' + other.dataset.mobileSection);
                    const otherArrow = other.querySelector('.mobile-section-arrow');
                    if (otherPanel) otherPanel.classList.add('hidden');
                    if (otherArrow) otherArrow.classList.remove('rotate-180');
                    other.setAttribute('aria-expanded', 'false');
                });

                if (panel) panel.classList.toggle('hidden', !willOpen);
                if (arrow) arrow.classList.toggle('rotate-180', willOpen);
                btn.setAttribute('aria-expanded', String(willOpen));
            });
        });

        // Close the mobile menu if the viewport grows to the desktop breakpoint (lg = 1024px).
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
                setMobileMenu(false);
            }
        });
    });
</script>
