<nav class="bg-white shadow sticky top-0 z-50 border-b-2 border-purple-100 relative">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.svg') }}" alt="Assignment Help USA" class="h-10 w-auto">
        </a>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex gap-8 text-sm font-medium items-center">
            <li><a href="{{ url('/') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->is('/') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">🏠
                    Home</a></li>

            <!-- Services Mega Menu -->
            <li>
                <button id="services-menu-trigger"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('services.*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }} flex items-center">
                    ⚡ Services
                    <svg id="services-menu-arrow" class="w-4 h-4 ml-1 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Mega Menu Dropdown -->
                <div id="services-mega-menu"
                    class="fixed lg:absolute left-0 lg:left-1/2 lg:-translate-x-1/2 top-16 lg:top-full lg:mt-2 w-full lg:w-[calc(100vw-2rem)] lg:max-w-5xl xl:max-w-6xl 2xl:max-w-7xl max-h-[calc(100vh-5rem)] lg:max-h-[calc(100vh-6rem)] overflow-y-auto bg-black/20 lg:bg-transparent opacity-0 invisible transition-all duration-300 ease-in-out pointer-events-none z-50">
                    <div class="bg-white md:rounded-2xl shadow-2xl border border-gray-100 md:mx-0 mx-4 overflow-hidden">
                        <!-- Mobile/Tablet: Tab Bar -->
                        <div class="lg:hidden flex border-b border-gray-200">
                            <button data-tab="programming" data-tab-type="mobile"
                                class="mega-menu-tab flex-1 px-4 py-3 text-center font-semibold text-sm transition-all duration-200 bg-gradient-to-r from-purple-600 to-blue-600 text-white shadow-lg">
                                💻 Programming
                            </button>
                            <button data-tab="assignment" data-tab-type="mobile"
                                class="mega-menu-tab flex-1 px-4 py-3 text-center font-semibold text-sm transition-all duration-200 text-gray-700 hover:bg-gray-50">
                                📝 Assignments
                            </button>
                        </div>

                        <div class="flex flex-col lg:flex-row">
                            <!-- Left Navigation Tabs (Desktop only) -->
                            <div class="hidden lg:block w-56 xl:w-64 bg-gradient-to-b from-gray-50 to-gray-100 p-5 xl:p-6 border-b lg:border-b-0 lg:border-r border-gray-200 flex-shrink-0">
                                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-4">Browse
                                    Services</h3>
                                <div class="space-y-2">
                                    <button data-tab="programming" data-tab-type="desktop"
                                        class="mega-menu-tab w-full text-left px-4 py-3 rounded-xl font-semibold text-sm transition-all duration-200 flex items-center justify-between bg-gradient-to-r from-purple-600 to-blue-600 text-white shadow-lg">
                                        <div class="flex items-center">
                                            <span class="text-xl mr-3">💻</span>
                                            <div>
                                                <div class="font-bold">Programming</div>
                                                <div class="text-xs opacity-90">Web, Mobile, ML</div>
                                            </div>
                                        </div>
                                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>

                                    <button data-tab="assignment" data-tab-type="desktop"
                                        class="mega-menu-tab w-full text-left px-4 py-3 rounded-xl font-semibold text-sm transition-all duration-200 flex items-center justify-between text-gray-700 hover:bg-white hover:shadow-md">
                                        <div class="flex items-center">
                                            <span class="text-xl mr-3">📝</span>
                                            <div>
                                                <div class="font-bold">Assignments</div>
                                                <div class="text-xs text-gray-500">Academic Writing</div>
                                            </div>
                                        </div>
                                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>

                                <div class="mt-5 pt-5 border-t border-gray-200">
                                    <div class="text-xs text-gray-500 mb-3">Why Choose Us</div>
                                    <div class="space-y-2 text-xs">
                                        <div class="flex items-center text-gray-700">
                                            <span class="text-green-500 mr-2">✓</span>
                                            <span>Expert Professionals</span>
                                        </div>
                                        <div class="flex items-center text-gray-700">
                                            <span class="text-green-500 mr-2">✓</span>
                                            <span>24/7 Support</span>
                                        </div>
                                        <div class="flex items-center text-gray-700">
                                            <span class="text-green-500 mr-2">✓</span>
                                            <span>Money-Back Guarantee</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Right Content Area -->
                            <div class="flex-1 p-4 md:p-5 xl:p-8 min-w-0">
                                <!-- Programming Services Content -->
                                <div id="programming-content" class="mega-menu-content">
                                    <div class="flex items-center mb-4 md:mb-6">
                                        <div
                                            class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-xl flex items-center justify-center mr-3 md:mr-4 flex-shrink-0">
                                            <span class="text-xl md:text-2xl">💻</span>
                                        </div>
                                        <div class="min-w-0">
                                            <h3 class="font-bold text-gray-900 text-lg md:text-xl">Programming Services</h3>
                                            <p class="text-xs md:text-sm text-gray-500 truncate">Expert development help for all your coding needs</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3 md:gap-4 mb-4 md:mb-6">
                                        <a href="{{ route('services.programming.show', 'web-development') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🌐</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    Web Development</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Full-stack solutions with modern frameworks</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'mobile-app') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">📱</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    Mobile Apps</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">iOS, Android & cross-platform development</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'algorithms') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🔢</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    Algorithms</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Data structures & algorithm optimization</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'database') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🗄️</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    Database</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">SQL, NoSQL & database optimization</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'machine-learning') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🤖</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    Machine Learning</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">AI models & ML algorithms</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'debugging') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🔧</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    Code Debugging</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Bug fixes & code optimization</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'api-development') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🔗</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    API Development</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">RESTful & GraphQL APIs</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'devops') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">⚙️</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    DevOps</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">CI/CD & cloud deployment</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'cybersecurity') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🛡️</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-purple-600">
                                                    Cybersecurity</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Security & penetration testing</div>
                                        </a>
                                    </div>

                                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pt-4 border-t border-gray-200">
                                        <a href="{{ route('services.programming.index') }}"
                                            class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold text-xs md:text-sm group/more">
                                            View All Programming Services
                                            <svg class="w-4 h-4 ml-1 group-hover/more:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('order') }}"
                                            class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-5 md:px-6 py-2 md:py-2.5 rounded-lg font-semibold text-xs md:text-sm transition-all duration-200 text-center w-full sm:w-auto">
                                            Get Help Now →
                                        </a>
                                    </div>
                                </div>

                                <!-- Assignment Services Content -->
                                <div id="assignment-content" class="mega-menu-content hidden">
                                    <div class="flex items-center mb-4 md:mb-6">
                                        <div
                                            class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mr-3 md:mr-4 flex-shrink-0">
                                            <span class="text-xl md:text-2xl">📝</span>
                                        </div>
                                        <div class="min-w-0">
                                            <h3 class="font-bold text-gray-900 text-lg md:text-xl">Assignment Services</h3>
                                            <p class="text-xs md:text-sm text-gray-500 truncate">Professional academic writing help for all subjects</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3 md:gap-4 mb-4 md:mb-6">
                                        <a href="{{ route('services.essay-writing.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">✍️</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Essay Writing</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">All types of academic essays</div>
                                        </a>

                                        <a href="{{ route('services.research-paper.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">📄</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Research Paper</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Academic research & analysis</div>
                                        </a>

                                        <a href="{{ route('services.homework-help.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">📚</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Homework Help</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Help with daily homework tasks</div>
                                        </a>

                                        <a href="{{ route('services.thesis-dissertation.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🎓</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Thesis & Dissertation</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Graduate-level research work</div>
                                        </a>

                                        <a href="{{ route('services.assignment.show', 'math-problem-solving') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🔢</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Math Problems</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Step-by-step math solutions</div>
                                        </a>

                                        <a href="{{ route('services.proofreading-editing.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">✏️</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Proofreading</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Edit & polish your work</div>
                                        </a>

                                        <a href="{{ route('services.lab-report.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">🔬</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Lab Report</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Science lab documentation</div>
                                        </a>

                                        <a href="{{ route('services.case-study.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">📊</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Case Study</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Business & academic analysis</div>
                                        </a>

                                        <a href="{{ route('services.literature-review.index') }}"
                                            class="group/item p-3 md:p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-1 md:mb-2">
                                                <span
                                                    class="text-2xl md:text-3xl mr-2 md:mr-3 group-hover/item:scale-110 transition-transform">📖</span>
                                                <div class="font-bold text-sm md:text-base text-gray-900 group-hover/item:text-blue-600">
                                                    Literature Review</div>
                                            </div>
                                            <div class="text-xs text-gray-500 leading-relaxed">Academic literature analysis</div>
                                        </a>
                                    </div>

                                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 pt-4 border-t border-gray-200">
                                        <a href="{{ route('services.assignment.index') }}"
                                            class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-xs md:text-sm group/more">
                                            View All Assignment Services
                                            <svg class="w-4 h-4 ml-1 group-hover/more:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('order') }}"
                                            class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-5 md:px-6 py-2 md:py-2.5 rounded-lg font-semibold text-xs md:text-sm transition-all duration-200 text-center w-full sm:w-auto">
                                            Order Now →
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            {{-- <li><a href="{{ route('languages.index') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('languages.*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">🔧
                    Languages</a></li> --}}
            {{-- <li><a href="{{ url('/how-it-works') }}"
                    class="hover:text-purple-600 transition-colors duration-200 text-gray-700">❓ How It Works</a></li> --}}
            <li><a href="{{ route('experts') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('experts') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">👨‍🏫
                    Experts</a></li>
            <li><a href="{{ route('reviews') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('reviews') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">⭐
                    Reviews</a></li>
            <li><a href="{{ url('/blog') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->is('blog*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">📝
                    Blog</a></li>
            {{-- <li><a href="{{ route('order') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('order') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">💻
                    Get Help</a></li> --}}
        </ul>

        <!-- Desktop Auth Buttons -->
        <div class="hidden md:flex space-x-3 items-center">
            @guest
                <a href="{{ route('login') }}"
                    class="text-sm text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 hover:border-purple-300 transition-all duration-200">
                    Login
                </a>
            @else
                <a href="{{ route('dashboard') }}"
                    class="text-sm text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 hover:border-purple-300 transition-all duration-200">
                    Dashboard
                </a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                        class="text-sm text-red-600 hover:text-red-700 px-4 py-2 rounded-lg border border-red-200 hover:border-red-300 transition-all duration-200">
                        Logout
                    </button>
                </form>
            @endguest
            <a href="{{ route('order') }}"
                class="bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white px-6 py-2 rounded-lg text-sm font-semibold transition-all duration-200 transform hover:scale-105 shadow-lg">
                Get Help Now
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 hover:text-purple-600 focus:outline-none relative w-8 h-8 flex items-center justify-center">
                <!-- Hamburger Icon (default) -->
                <svg id="hamburger-icon" class="w-6 h-6 absolute transition-opacity duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <!-- Close Icon (hidden by default) -->
                <svg id="close-icon" class="w-6 h-6 absolute transition-opacity duration-200 opacity-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 max-h-screen overflow-y-auto">
        <div class="px-4 py-4 space-y-2">
            <a href="{{ url('/') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->is('/') ? 'text-purple-600 font-semibold' : '' }}">🏠
                Home</a>

            <!-- Mobile Services Accordion -->
            <div class="border-b border-gray-100">
                <button id="mobile-services-toggle"
                    class="w-full flex items-center justify-between text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->routeIs('services.*') ? 'text-purple-600 font-semibold' : '' }}">
                    <span>⚡ Services</span>
                    <svg id="mobile-services-icon" class="w-4 h-4 transition-transform duration-200" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div id="mobile-services-dropdown" class="hidden pl-4 pb-3 space-y-3">
                    <!-- Programming Services -->
                    <div class="bg-purple-50 rounded-lg p-3">
                        <div class="font-semibold text-purple-900 mb-2 text-sm">💻 Programming</div>
                        <div class="space-y-2">
                            <a href="{{ route('services.programming.show', 'web-development') }}"
                                class="block text-sm text-gray-700 hover:text-purple-600">🌐 Web Development</a>
                            <a href="{{ route('services.programming.show', 'mobile-app') }}"
                                class="block text-sm text-gray-700 hover:text-purple-600">📱 Mobile Apps</a>
                            <a href="{{ route('services.programming.show', 'algorithms') }}"
                                class="block text-sm text-gray-700 hover:text-purple-600">🔢 Algorithms</a>
                            <a href="{{ route('services.programming.index') }}"
                                class="block text-sm text-purple-600 font-semibold mt-2">View All →</a>
                        </div>
                    </div>
                    <!-- Assignment Services -->
                    <div class="bg-blue-50 rounded-lg p-3">
                        <div class="font-semibold text-blue-900 mb-2 text-sm">📝 Assignments</div>
                        <div class="space-y-2">
                            <a href="{{ route('services.essay-writing.index') }}"
                                class="block text-sm text-gray-700 hover:text-blue-600">✍️ Essay Writing</a>
                            <a href="{{ route('services.assignment.show', 'research-paper') }}"
                                class="block text-sm text-gray-700 hover:text-blue-600">📄 Research Paper</a>
                            <a href="{{ route('services.assignment.show', 'homework-help') }}"
                                class="block text-sm text-gray-700 hover:text-blue-600">📚 Homework Help</a>
                            <a href="{{ route('services.assignment.index') }}"
                                class="block text-sm text-blue-600 font-semibold mt-2">View All →</a>
                        </div>
                    </div>
                    <a href="{{ route('services.index') }}"
                        class="block text-center bg-gradient-to-r from-purple-600 to-blue-600 text-white px-4 py-2 rounded-lg font-semibold text-sm">View
                        All Services</a>
                </div>
            </div>

            <a href="{{ route('experts') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->routeIs('experts') ? 'text-purple-600 font-semibold' : '' }}">👨‍🏫
                Experts</a>
            <a href="{{ route('reviews') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->routeIs('reviews') ? 'text-purple-600 font-semibold' : '' }}">⭐
                Reviews</a>
            <a href="{{ url('/blog') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->is('blog*') ? 'text-purple-600 font-semibold' : '' }}">📝
                Blog</a>

            <div class="pt-4 border-t border-gray-200 space-y-3">
                @guest
                    <a href="{{ route('login') }}"
                        class="block text-center text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 transition-all duration-200">
                        Login
                    </a>
                @else
                    <a href="{{ route('dashboard') }}"
                        class="block text-center text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 transition-all duration-200">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-center text-red-600 hover:text-red-700 px-4 py-2 rounded-lg border border-red-200 transition-all duration-200">
                            Logout
                        </button>
                    </form>
                @endguest
                <a href="{{ route('order') }}"
                    class="block text-center bg-gradient-to-r from-orange-500 to-red-500 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-200">
                    Get Help Now
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');
        let isMobileMenuOpen = false;

        function toggleMobileMenu(open) {
            isMobileMenuOpen = open;
            if (open) {
                mobileMenu.classList.remove('hidden');
                hamburgerIcon.classList.add('opacity-0');
                closeIcon.classList.remove('opacity-0');
                document.body.style.overflow = 'hidden';
            } else {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('opacity-0');
                closeIcon.classList.add('opacity-0');
                document.body.style.overflow = '';
                // Also close services accordion
                const mobileServicesDropdown = document.getElementById('mobile-services-dropdown');
                const mobileServicesIcon = document.getElementById('mobile-services-icon');
                if (mobileServicesDropdown) mobileServicesDropdown.classList.add('hidden');
                if (mobileServicesIcon) mobileServicesIcon.classList.remove('rotate-180');
            }
        }

        mobileMenuButton.addEventListener('click', function() {
            toggleMobileMenu(!isMobileMenuOpen);
        });

        // Close mobile menu when clicking any link inside it
        mobileMenu.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                toggleMobileMenu(false);
            });
        });

        // Close mobile menu on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                if (isMobileMenuOpen) {
                    toggleMobileMenu(false);
                }
                // Also close desktop mega menu
                if (isMegaMenuOpen) {
                    toggleMegaMenu(false);
                }
            }
        });

        // Close mobile menu when window is resized to desktop
        const mdBreakpoint = window.matchMedia('(min-width: 768px)');
        mdBreakpoint.addEventListener('change', function(e) {
            if (e.matches && isMobileMenuOpen) {
                toggleMobileMenu(false);
            }
        });

        // Close mega menu when window is resized from tablet to mobile or mobile to tablet
        const lgBreakpoint = window.matchMedia('(min-width: 1024px)');

        // Mobile services accordion toggle
        const mobileServicesToggle = document.getElementById('mobile-services-toggle');
        const mobileServicesDropdown = document.getElementById('mobile-services-dropdown');
        const mobileServicesIcon = document.getElementById('mobile-services-icon');

        if (mobileServicesToggle) {
            mobileServicesToggle.addEventListener('click', function() {
                mobileServicesDropdown.classList.toggle('hidden');
                mobileServicesIcon.classList.toggle('rotate-180');
            });
        }

        // Desktop Services Mega Menu Toggle
        const servicesMenuTrigger = document.getElementById('services-menu-trigger');
        const servicesMegaMenu = document.getElementById('services-mega-menu');
        const servicesMenuArrow = document.getElementById('services-menu-arrow');
        let isMegaMenuOpen = false;

        function toggleMegaMenu(open) {
            isMegaMenuOpen = open;
            if (open) {
                servicesMegaMenu.classList.remove('opacity-0', 'invisible', 'pointer-events-none');
                servicesMegaMenu.classList.add('opacity-100', 'visible', 'pointer-events-auto');
                servicesMenuArrow.classList.add('rotate-180');
                document.body.style.overflow = 'hidden';
            } else {
                servicesMegaMenu.classList.add('opacity-0', 'invisible', 'pointer-events-none');
                servicesMegaMenu.classList.remove('opacity-100', 'visible', 'pointer-events-auto');
                servicesMenuArrow.classList.remove('rotate-180');
                // Only unlock body scroll if mobile menu is also closed
                if (!isMobileMenuOpen) {
                    document.body.style.overflow = '';
                }
            }
        }

        if (servicesMenuTrigger && servicesMegaMenu) {
            // Toggle mega menu on click
            servicesMenuTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMegaMenu(!isMegaMenuOpen);
            });

            // Close mega menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!servicesMenuTrigger.contains(e.target) && !servicesMegaMenu.contains(e.target)) {
                    if (isMegaMenuOpen) {
                        toggleMegaMenu(false);
                    }
                }
            });

            // Close mega menu when clicking the dark overlay (the container itself on mobile)
            servicesMegaMenu.addEventListener('click', function(e) {
                if (e.target === servicesMegaMenu) {
                    toggleMegaMenu(false);
                } else {
                    e.stopPropagation();
                }
            });

            // Close mega menu on window resize crossing lg breakpoint
            lgBreakpoint.addEventListener('change', function(e) {
                if (!e.matches && isMegaMenuOpen) {
                    toggleMegaMenu(false);
                }
            });
        }

        // Mega menu tab switching
        const megaMenuTabs = document.querySelectorAll('.mega-menu-tab');
        const megaMenuContents = document.querySelectorAll('.mega-menu-content');

        function getTabType(tab) {
            return tab.getAttribute('data-tab-type') || 'desktop';
        }

        const tabStyles = {
            mobile: {
                programming: {
                    active: ['bg-gradient-to-r', 'from-purple-600', 'to-blue-600', 'text-white', 'shadow-lg'],
                    inactive: ['text-gray-700', 'hover:bg-gray-50']
                },
                assignment: {
                    active: ['bg-gradient-to-r', 'from-blue-600', 'to-indigo-600', 'text-white', 'shadow-lg'],
                    inactive: ['text-gray-700', 'hover:bg-gray-50']
                }
            },
            desktop: {
                programming: {
                    active: ['bg-gradient-to-r', 'from-purple-600', 'to-blue-600', 'text-white', 'shadow-lg'],
                    inactive: ['text-gray-700', 'hover:bg-white', 'hover:shadow-md']
                },
                assignment: {
                    active: ['bg-gradient-to-r', 'from-blue-600', 'to-indigo-600', 'text-white', 'shadow-lg'],
                    inactive: ['text-gray-700', 'hover:bg-white', 'hover:shadow-md']
                }
            }
        };

        function switchTab(targetTab) {
            megaMenuTabs.forEach(t => {
                const tabName = t.getAttribute('data-tab');
                const tabType = getTabType(t);
                const isActive = tabName === targetTab;
                const styles = tabStyles[tabType][tabName] || tabStyles[tabType].programming;

                t.classList.remove(
                    'bg-gradient-to-r', 'from-purple-600', 'to-blue-600',
                    'from-blue-600', 'to-indigo-600', 'text-white', 'shadow-lg',
                    'text-gray-700', 'hover:bg-white', 'hover:shadow-md', 'hover:bg-gray-50'
                );

                if (isActive) {
                    t.classList.add(...styles.active);
                } else {
                    t.classList.add(...styles.inactive);
                }
            });

            megaMenuContents.forEach(content => {
                if (content.id === targetTab + '-content') {
                    content.classList.remove('hidden');
                } else {
                    content.classList.add('hidden');
                }
            });
        }

        megaMenuTabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                switchTab(this.getAttribute('data-tab'));
            });
        });
    });
</script>
