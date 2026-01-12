<footer class="bg-gradient-to-br from-gray-900 via-purple-900 to-indigo-900 text-white">
    <!-- Main Footer Content -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="text-3xl">💻</div>
                    <span
                        class="text-3xl font-bold bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent">CodeHelp</span>
                </div>
                <p class="text-gray-300 mb-6 text-lg leading-relaxed max-w-md">
                    Get expert programming help 24/7. From Python to Java, our skilled developers are ready to assist
                    with your coding challenges.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-10 h-10 bg-purple-600 hover:bg-purple-500 rounded-full flex items-center justify-center transition-colors duration-200">
                        <span class="text-white text-sm font-bold">f</span>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-blue-500 hover:bg-blue-400 rounded-full flex items-center justify-center transition-colors duration-200">
                        <span class="text-white text-sm font-bold">t</span>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-red-600 hover:bg-red-500 rounded-full flex items-center justify-center transition-colors duration-200">
                        <span class="text-white text-sm font-bold">y</span>
                    </a>
                    <a href="#"
                        class="w-10 h-10 bg-blue-700 hover:bg-blue-600 rounded-full flex items-center justify-center transition-colors duration-200">
                        <span class="text-white text-sm font-bold">in</span>
                    </a>
                </div>
            </div>

            <!-- Programming Languages -->
            <div>
                <h4 class="text-xl font-bold mb-6 text-orange-400">Programming Languages</h4>
                <ul class="space-y-3 text-gray-300">
                    <li><a href="#"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">🐍</span>Python Help</a></li>
                    <li><a href="#"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">☕</span>Java Help</a></li>
                    <li><a href="#"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">🟨</span>JavaScript Help</a></li>
                    <li><a href="#"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">⚡</span>C++ Help</a></li>
                    <li><a href="#"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">🟦</span>C# Help</a></li>
                    <li><a href="#"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">🟣</span>PHP Help</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <h4 class="text-xl font-bold mb-6 text-orange-400">Our Services</h4>
                <ul class="space-y-3 text-gray-300">
                    <li><a href="{{ route('services.programming.show', 'debugging') }}"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">🔧</span>Code Debugging</a></li>
                    <li><a href="{{ route('services.programming.show', 'web-development') }}"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">💻</span>Web Development</a></li>
                    <li><a href="{{ route('services.programming.show', 'mobile-app') }}"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">📱</span>Mobile App Development</a></li>
                    <li><a href="{{ route('services.assignment.show', 'homework-help') }}"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">🎯</span>Homework Help</a></li>
                    <li><a href="{{ route('services.assignment.index') }}"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">📚</span>Assignment Help</a></li>
                    <li><a href="{{ route('services.programming.show', 'testing-qa') }}"
                            class="hover:text-orange-400 transition-colors duration-200 flex items-center"><span
                                class="mr-2">🧪</span>Testing & QA</a></li>
                </ul>
            </div>
        </div>

        <!-- Contact Info & Quick Links -->
        <div class="border-t border-gray-700 mt-12 pt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contact Info -->
            <div>
                <h4 class="text-lg font-bold mb-4 text-white">Contact Information</h4>
                <div class="space-y-3 text-gray-300">
                    <p class="flex items-center"><span class="mr-3">📧</span>support@codehelp.com</p>
                    <p class="flex items-center"><span class="mr-3">📱</span>+1 (555) 123-4567</p>
                    <p class="flex items-center"><span class="mr-3">💬</span>Live Chat Available 24/7</p>
                    <p class="flex items-center"><span class="mr-3">⏰</span>Average Response: 15 minutes</p>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-lg font-bold mb-4 text-white">Quick Links</h4>
                <ul class="space-y-2 text-gray-300">
                    <li><a href="{{ route('how-it-works') }}"
                            class="hover:text-orange-400 transition-colors duration-200">How It Works</a>
                    </li>
                    <li><a href="{{ route('pricing') }}"
                            class="hover:text-orange-400 transition-colors duration-200">Pricing</a></li>
                    <li><a href="{{ route('faq') }}"
                            class="hover:text-orange-400 transition-colors duration-200">FAQ</a></li>
                    <li><a href="{{ route('about') }}"
                            class="hover:text-orange-400 transition-colors duration-200">About Us</a></li>
                    <li><a href="#" class="hover:text-orange-400 transition-colors duration-200">Blog</a></li>
                </ul>
            </div>

            <!-- Trust & Security -->
            <div>
                <h4 class="text-lg font-bold mb-4 text-white">Trust & Security</h4>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-center"><span class="mr-2">🔒</span>100% Secure Payment</li>
                    <li class="flex items-center"><span class="mr-2">🛡️</span>Privacy Protected</li>
                    <li class="flex items-center"><span class="mr-2">✅</span>Plagiarism Free</li>
                    <li class="flex items-center"><span class="mr-2">💰</span>Money Back Guarantee</li>
                    <li class="flex items-center"><span class="mr-2">⭐</span>4.9/5 Customer Rating</li>
                </ul>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="bg-black bg-opacity-30 border-t border-gray-700">
        <div class="container mx-auto px-4 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">
                    &copy; {{ date('Y') }} CodeHelp. All rights reserved. | Professional Programming Help Service
                </p>
                <div class="flex space-x-6 text-sm text-gray-400">
                    <a href="#" class="hover:text-white transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors duration-200">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors duration-200">Refund Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
