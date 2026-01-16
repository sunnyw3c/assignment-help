<nav class="bg-white shadow sticky top-0 z-50 border-b-2 border-purple-100">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <div class="text-2xl">💻</div>
            <span
                class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">Trending Tutor</span>
        </a>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex gap-8 text-sm font-medium items-center">
            <li><a href="{{ url('/') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->is('/') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">🏠
                    Home</a></li>

            <!-- Services Mega Menu -->
            <li class="relative group">
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
                    class="absolute left-1/2 transform -translate-x-1/2 top-full mt-2 w-screen max-w-6xl opacity-0 invisible transition-all duration-300 ease-in-out pointer-events-none">
                    <div class="bg-white rounded-2xl shadow-2xl border border-gray-100 overflow-hidden">
                        <div class="flex">
                            <!-- Left Navigation Tabs -->
                            <div class="w-64 bg-gradient-to-b from-gray-50 to-gray-100 p-6 border-r border-gray-200">
                                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-wider mb-4">Browse
                                    Services</h3>
                                <div class="space-y-2">
                                    <!-- Programming Tab -->
                                    <button data-tab="programming"
                                        class="mega-menu-tab w-full text-left px-4 py-3 rounded-xl font-semibold text-sm transition-all duration-200 flex items-center justify-between bg-gradient-to-r from-purple-600 to-blue-600 text-white shadow-lg">
                                        <div class="flex items-center">
                                            <span class="text-xl mr-3">💻</span>
                                            <div>
                                                <div class="font-bold">Programming</div>
                                                <div class="text-xs opacity-90">Web, Mobile, ML</div>
                                            </div>
                                        </div>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>

                                    <!-- Assignment Tab -->
                                    <button data-tab="assignment"
                                        class="mega-menu-tab w-full text-left px-4 py-3 rounded-xl font-semibold text-sm transition-all duration-200 flex items-center justify-between text-gray-700 hover:bg-white hover:shadow-md">
                                        <div class="flex items-center">
                                            <span class="text-xl mr-3">📝</span>
                                            <div>
                                                <div class="font-bold">Assignments</div>
                                                <div class="text-xs text-gray-500">Academic Writing</div>
                                            </div>
                                        </div>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>

                                <!-- Quick Stats -->
                                <div class="mt-6 pt-6 border-t border-gray-200">
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
                            <div class="flex-1 p-8">
                                <!-- Programming Services Content (Default) -->
                                <div id="programming-content" class="mega-menu-content">
                                    <div class="flex items-center mb-6">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-xl flex items-center justify-center mr-4">
                                            <span class="text-2xl">💻</span>
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-gray-900 text-xl">Programming Services</h3>
                                            <p class="text-sm text-gray-500">Expert development help for all your coding
                                                needs</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-4 mb-6">
                                        <a href="{{ route('services.programming.show', 'web-development') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🌐</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    Web Development</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Full-stack solutions with modern
                                                frameworks</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'mobile-app') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">📱</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    Mobile Apps</div>
                                            </div>
                                            <div class="text-xs text-gray-500">iOS, Android & Cross-platform development
                                            </div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'algorithms') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🔢</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    Algorithms</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Data structures & algorithm optimization
                                            </div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'database') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🗄️</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    Database</div>
                                            </div>
                                            <div class="text-xs text-gray-500">SQL, NoSQL & database optimization</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'machine-learning') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🤖</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    Machine Learning</div>
                                            </div>
                                            <div class="text-xs text-gray-500">AI models & ML algorithms</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'debugging') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🔧</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    Code Debugging</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Bug fixes & code optimization</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'api-development') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🔗</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    API Development</div>
                                            </div>
                                            <div class="text-xs text-gray-500">RESTful & GraphQL APIs</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'devops') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">⚙️</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    DevOps</div>
                                            </div>
                                            <div class="text-xs text-gray-500">CI/CD & cloud deployment</div>
                                        </a>

                                        <a href="{{ route('services.programming.show', 'cybersecurity') }}"
                                            class="group/item p-4 rounded-xl hover:bg-purple-50 transition-all duration-200 border border-transparent hover:border-purple-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🛡️</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-purple-600">
                                                    Cybersecurity</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Security & penetration testing</div>
                                        </a>
                                    </div>

                                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                        <a href="{{ route('services.programming.index') }}"
                                            class="inline-flex items-center text-purple-600 hover:text-purple-700 font-semibold text-sm group/more">
                                            View All Programming Services
                                            <svg class="w-4 h-4 ml-1 group-hover/more:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('assignments.create') }}"
                                            class="bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-6 py-2.5 rounded-lg font-semibold text-sm transition-all duration-200 transform hover:scale-105 shadow-lg">
                                            Get Help Now →
                                        </a>
                                    </div>
                                </div>

                                <!-- Assignment Services Content (Hidden by default) -->
                                <div id="assignment-content" class="mega-menu-content hidden">
                                    <div class="flex items-center mb-6">
                                        <div
                                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mr-4">
                                            <span class="text-2xl">📝</span>
                                        </div>
                                        <div>
                                            <h3 class="font-bold text-gray-900 text-xl">Assignment Services</h3>
                                            <p class="text-sm text-gray-500">Professional academic writing help for all
                                                subjects</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-4 mb-6">
                                        <a href="{{ route('services.essay-writing.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">✍️</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Essay Writing</div>
                                            </div>
                                            <div class="text-xs text-gray-500">All types of academic essays</div>
                                        </a>

                                        <a href="{{ route('services.research-paper.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">📄</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Research Paper</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Academic research & analysis</div>
                                        </a>

                                        <a href="{{ route('services.homework-help.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">📚</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Homework Help</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Help with daily homework tasks</div>
                                        </a>

                                        <a href="{{ route('services.thesis-dissertation.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🎓</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Thesis & Dissertation</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Graduate-level research work</div>
                                        </a>

                                        <a href="{{ route('services.assignment.show', 'math-problem-solving') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🔢</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Math Problems</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Step-by-step math solutions</div>
                                        </a>

                                        <a href="{{ route('services.proofreading-editing.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">✏️</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Proofreading</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Edit & polish your work</div>
                                        </a>

                                        <a href="{{ route('services.lab-report.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">🔬</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">Lab
                                                    Report</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Science lab documentation</div>
                                        </a>

                                        <a href="{{ route('services.case-study.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">📊</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Case Study</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Business & academic analysis</div>
                                        </a>

                                        <a href="{{ route('services.literature-review.index') }}"
                                            class="group/item p-4 rounded-xl hover:bg-blue-50 transition-all duration-200 border border-transparent hover:border-blue-200">
                                            <div class="flex items-center mb-2">
                                                <span
                                                    class="text-3xl mr-3 group-hover/item:scale-110 transition-transform">📖</span>
                                                <div class="font-bold text-gray-900 group-hover/item:text-blue-600">
                                                    Literature Review</div>
                                            </div>
                                            <div class="text-xs text-gray-500">Academic literature analysis</div>
                                        </a>
                                    </div>

                                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                        <a href="{{ route('services.assignment.index') }}"
                                            class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold text-sm group/more">
                                            View All Assignment Services
                                            <svg class="w-4 h-4 ml-1 group-hover/more:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('assignments.create') }}"
                                            class="bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-6 py-2.5 rounded-lg font-semibold text-sm transition-all duration-200 transform hover:scale-105 shadow-lg">
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
            <li><a href="{{ url('/how-it-works') }}"
                    class="hover:text-purple-600 transition-colors duration-200 text-gray-700">❓ How It Works</a></li>
            <li><a href="{{ route('experts') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('experts') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">👨‍🏫
                    Experts</a></li>
            <li><a href="{{ route('reviews') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('reviews') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">⭐
                    Reviews</a></li>
            <li><a href="{{ url('/blog') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->is('blog*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">📝
                    Blog</a></li>
            <li><a href="{{ route('assignments.create') }}"
                    class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('assignments.create') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">💻
                    Get Help</a></li>
        </ul>

        <!-- Desktop Auth Buttons -->
        <div class="hidden md:flex space-x-3">
            <a href="{{ route('login') }}"
                class="text-sm text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 hover:border-purple-300 transition-all duration-200">
                Login
            </a>
            <a href="{{ route('assignments.create') }}"
                class="bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white px-6 py-2 rounded-lg text-sm font-semibold transition-all duration-200 transform hover:scale-105 shadow-lg">
                Get Help Now
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 hover:text-purple-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
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

            <a href="{{ route('languages.index') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->routeIs('languages.*') ? 'text-purple-600 font-semibold' : '' }}">🔧
                Languages</a>
            <a href="{{ url('/how-it-works') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2">❓ How It
                Works</a>
            <a href="{{ route('experts') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->routeIs('experts') ? 'text-purple-600 font-semibold' : '' }}">👨‍🏫
                Experts</a>
            <a href="{{ route('reviews') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->routeIs('reviews') ? 'text-purple-600 font-semibold' : '' }}">⭐
                Reviews</a>
            <a href="{{ url('/blog') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->is('blog*') ? 'text-purple-600 font-semibold' : '' }}">📝
                Blog</a>
            <a href="{{ route('assignments.create') }}"
                class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 py-2 {{ request()->routeIs('assignments.create') ? 'text-purple-600 font-semibold' : '' }}">💻
                Get Help</a>

            <div class="pt-4 border-t border-gray-200 space-y-3">
                <a href="{{ route('login') }}"
                    class="block text-center text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 transition-all duration-200">
                    Login
                </a>
                <a href="{{ route('assignments.create') }}"
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

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

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

        if (servicesMenuTrigger && servicesMegaMenu) {
            // Toggle mega menu on click
            servicesMenuTrigger.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                isMegaMenuOpen = !isMegaMenuOpen;

                if (isMegaMenuOpen) {
                    servicesMegaMenu.classList.remove('opacity-0', 'invisible', 'pointer-events-none');
                    servicesMegaMenu.classList.add('opacity-100', 'visible', 'pointer-events-auto');
                    servicesMenuArrow.classList.add('rotate-180');
                } else {
                    servicesMegaMenu.classList.add('opacity-0', 'invisible', 'pointer-events-none');
                    servicesMegaMenu.classList.remove('opacity-100', 'visible', 'pointer-events-auto');
                    servicesMenuArrow.classList.remove('rotate-180');
                }
            });

            // Close mega menu when clicking outside
            document.addEventListener('click', function(e) {
                if (!servicesMenuTrigger.contains(e.target) && !servicesMegaMenu.contains(e.target)) {
                    if (isMegaMenuOpen) {
                        isMegaMenuOpen = false;
                        servicesMegaMenu.classList.add('opacity-0', 'invisible', 'pointer-events-none');
                        servicesMegaMenu.classList.remove('opacity-100', 'visible',
                            'pointer-events-auto');
                        servicesMenuArrow.classList.remove('rotate-180');
                    }
                }
            });

            // Keep mega menu open when clicking inside it
            servicesMegaMenu.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        }

        // Mega menu tab switching
        const megaMenuTabs = document.querySelectorAll('.mega-menu-tab');
        const megaMenuContents = document.querySelectorAll('.mega-menu-content');

        megaMenuTabs.forEach(tab => {
            tab.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const targetTab = this.getAttribute('data-tab');

                // Update tab styles
                megaMenuTabs.forEach(t => {
                    if (t.getAttribute('data-tab') === targetTab) {
                        t.classList.remove('text-gray-700', 'hover:bg-white',
                            'hover:shadow-md');
                        t.classList.add('bg-gradient-to-r', 'from-purple-600',
                            'to-blue-600', 'text-white', 'shadow-lg');
                        // Update Assignment tab colors if it's assignment
                        if (targetTab === 'assignment') {
                            t.classList.remove('from-purple-600', 'to-blue-600');
                            t.classList.add('from-blue-600', 'to-indigo-600');
                        }
                    } else {
                        t.classList.remove('bg-gradient-to-r', 'from-purple-600',
                            'to-blue-600', 'from-blue-600', 'to-indigo-600',
                            'text-white', 'shadow-lg');
                        t.classList.add('text-gray-700', 'hover:bg-white',
                            'hover:shadow-md');
                    }
                });

                // Update content visibility
                megaMenuContents.forEach(content => {
                    if (content.id === targetTab + '-content') {
                        content.classList.remove('hidden');
                    } else {
                        content.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>
