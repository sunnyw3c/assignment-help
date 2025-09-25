<nav class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="{{ url('/') }}" class="text-xl font-bold text-blue-600">AllAssignmentHelp</a>
        <ul class="flex gap-6 text-sm font-medium">
            <li><a href="{{ url('/') }}" class="hover:text-blue-600">Home</a></li>
            <li><a href="{{ url('/about') }}" class="hover:text-blue-600">About</a></li>
            <li><a href="{{ url('/services') }}" class="hover:text-blue-600">Services</a></li>
            <li><a href="{{ url('/blog') }}" class="hover:text-blue-600">Blog</a></li>
            <li><a href="{{ url('/contact') }}" class="hover:text-blue-600">Contact</a></li>
        </ul>
        <div class="space-x-2">
            <a href="{{ route('login') }}" class="text-sm text-gray-700 hover:text-blue-600">Login</a>
            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-4 py-2 rounded text-sm hover:bg-blue-700">Sign Up</a>
        </div>
    </div>
</nav>
