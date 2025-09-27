<nav class="bg-white shadow sticky top-0 z-50 border-b-2 border-purple-100">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="flex items-center space-x-2">
            <div class="text-2xl">💻</div>
            <span class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-indigo-600 bg-clip-text text-transparent">CodeHelp</span>
        </a>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex gap-8 text-sm font-medium">
            <li><a href="{{ url('/') }}" class="hover:text-purple-600 transition-colors duration-200 {{ request()->is('/') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">🏠 Home</a></li>
            <li><a href="{{ route('services.index') }}" class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('services.*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">⚡ Services</a></li>
            <li><a href="{{ route('assignments.create') }}" class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('assignments.create') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">💻 Get Code Help</a></li>
            <li><a href="{{ route('languages.index') }}" class="hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('languages.*') ? 'text-purple-600 font-semibold' : 'text-gray-700' }}">🔧 Languages</a></li>
            <li><a href="{{ url('/how-it-works') }}" class="hover:text-purple-600 transition-colors duration-200 text-gray-700">❓ How It Works</a></li>
            <li><a href="{{ url('/pricing') }}" class="hover:text-purple-600 transition-colors duration-200 text-gray-700">💰 Pricing</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-purple-600 transition-colors duration-200 text-gray-700">📞 Contact</a></li>
        </ul>

        <!-- Desktop Auth Buttons -->
        <div class="hidden md:flex space-x-3">
            <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 hover:border-purple-300 transition-all duration-200">
                Login
            </a>
            <a href="{{ route('assignments.create') }}" class="bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white px-6 py-2 rounded-lg text-sm font-semibold transition-all duration-200 transform hover:scale-105 shadow-lg">
                Get Help Now
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-700 hover:text-purple-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
        <div class="px-4 py-4 space-y-4">
            <a href="{{ url('/') }}" class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 {{ request()->is('/') ? 'text-purple-600 font-semibold' : '' }}">🏠 Home</a>
            <a href="{{ route('services.index') }}" class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('services.*') ? 'text-purple-600 font-semibold' : '' }}">⚡ Services</a>
            <a href="{{ route('assignments.create') }}" class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('assignments.create') ? 'text-purple-600 font-semibold' : '' }}">💻 Get Code Help</a>
            <a href="{{ route('languages.index') }}" class="block text-gray-700 hover:text-purple-600 transition-colors duration-200 {{ request()->routeIs('languages.*') ? 'text-purple-600 font-semibold' : '' }}">🔧 Languages</a>
            <a href="{{ url('/how-it-works') }}" class="block text-gray-700 hover:text-purple-600 transition-colors duration-200">❓ How It Works</a>
            <a href="{{ url('/pricing') }}" class="block text-gray-700 hover:text-purple-600 transition-colors duration-200">💰 Pricing</a>
            <a href="{{ url('/contact') }}" class="block text-gray-700 hover:text-purple-600 transition-colors duration-200">📞 Contact</a>

            <div class="pt-4 border-t border-gray-200 space-y-3">
                <a href="{{ route('login') }}" class="block text-center text-gray-700 hover:text-purple-600 px-4 py-2 rounded-lg border border-gray-300 transition-all duration-200">
                    Login
                </a>
                <a href="{{ route('assignments.create') }}" class="block text-center bg-gradient-to-r from-orange-500 to-red-500 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-200">
                    Get Help Now
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });
});
</script>
