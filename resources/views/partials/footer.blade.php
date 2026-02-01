<footer class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="flex items-center mb-6">
                    <img src="{{ asset('images/logo-footer.svg') }}" alt="Assignment Help USA" height="50"
                        class="h-12">
                </div>
                <p class="text-gray-400 text-sm leading-relaxed max-w-md">
                    Your trusted partner for academic success. Get expert assignment help from qualified tutors across all subjects, available 24/7 with guaranteed quality and on-time delivery.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-semibold mb-6 text-gray-200 tracking-wider">Quick Links</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="{{ route('how-it-works') }}" class="hover:text-purple-400 transition-colors duration-300 flex items-center"><svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>How It Works</a></li>
                    <li><a href="{{ route('pricing') }}" class="hover:text-purple-400 transition-colors duration-300 flex items-center"><svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01"></path></svg>Pricing</a></li>
                    <li><a href="{{ route('experts') }}" class="hover:text-purple-400 transition-colors duration-300 flex items-center"><svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>Our Experts</a></li>
                    <li><a href="{{ url('/blog') }}" class="hover:text-purple-400 transition-colors duration-300 flex items-center"><svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m-1 13V11a2 2 0 00-2-2H7a2 2 0 00-2 2v8m12-4h-8"></path></svg>Blog</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-purple-400 transition-colors duration-300 flex items-center"><svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>About Us</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-lg font-semibold mb-6 text-gray-200 tracking-wider">Services</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="{{ route('services.programming.index') }}" class="hover:text-purple-400 transition-colors duration-300">Programming Help</a></li>
                    <li><a href="{{ route('services.assignment.index') }}" class="hover:text-purple-400 transition-colors duration-300">Assignment Help</a></li>
                    <li><a href="{{ route('services.essay-writing.index') }}" class="hover:text-purple-400 transition-colors duration-300">Essay Writing</a></li>
                    <li><a href="{{ route('services.thesis-dissertation.index') }}" class="hover:text-purple-400 transition-colors duration-300">Thesis & Dissertation</a></li>
            <li></li>
                </ul>
            </div>

            <!-- Contact & Social -->
            <div>
                <h4 class="text-lg font-semibold mb-6 text-gray-200 tracking-wider">Get In Touch</h4>
                <div class="space-y-4 text-sm">
                    <p class="flex items-center"><svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> support@assignmenthelpusa.com</p>
                    <p class="flex items-center"><svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg> +1 (555) 123-4567</p>
                </div>
                <div class="flex space-x-4 mt-8">
                    <a href="#" class="text-gray-400 hover:text-white transition-transform duration-300 transform hover:scale-110"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-transform duration-300 transform hover:scale-110"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-transform duration-300 transform hover:scale-110"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12.011c0 4.434 2.865 8.18 6.839 9.504.5.092.682-.217.682-.482 0-.237-.009-.868-.014-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.031-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.03 1.595 1.03 2.688 0 3.848-2.338 4.695-4.566 4.942.359.308.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.001 10.001 0 0022 12.011C22 6.477 17.523 2 12 2z" clip-rule="evenodd" /></svg></a>
                    <a href="#" class="text-gray-400 hover:text-white transition-transform duration-300 transform hover:scale-110"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.389 0-1.601 1.086-1.601 2.206v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.28 9.763H6.28v-8.59H3.725v8.59zM17.638 2H6.362A4.362 4.362 0 002 6.362v11.276A4.362 4.362 0 006.362 22h11.276A4.362 4.362 0 0022 17.638V6.362A4.362 4.362 0 0017.638 2z" clip-rule="evenodd" /></svg></a>
                </div>
            </div>
        </div>
        <!-- Bottom Bar -->
        <div class="border-t border-gray-800 mt-12 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-sm">
                <p class="text-gray-500 mb-4 md:mb-0">
                    &copy; {{ date('Y') }} Assignment Help USA. All Rights Reserved.
                </p>
                <div class="flex space-x-6 text-gray-500">
                    <a href="#" class="hover:text-white transition-colors duration-300">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors duration-300">Terms of Service</a>
                </div>
            </div>
        </div>
    </div>
</footer>