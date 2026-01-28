@extends('layouts.app')

@section('title', 'Mobile App Development - Expert Help Available')
@section('description', 'Get professional help with mobile app development projects. Expert developers available 24/7
    for React Native, Flutter, Swift, Kotlin, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative overflow-hidden min-h-[600px] lg:min-h-[85vh] flex items-center bg-gradient-to-br from-purple-50 via-violet-50 to-blue-50 py-20 lg:py-28">
            <!-- Mobile App Background Image -->
            {{-- <div class="absolute inset-0 opacity-50">
                <img src="{{ asset('images/mobile-app-hero-bg.svg') }}" alt="Mobile App Background" class="w-full h-full object-cover">
            </div> --}}

            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-white/80 via-white/60 to-transparent"></div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden hidden lg:block">
                <!-- Floating React Native - Top Right -->
                <div class="absolute top-24 right-[5%] bg-gray-900/90 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-40 border border-gray-700/50 backdrop-blur-sm code-snippet transform rotate-6" style="animation-delay: 0s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">App.jsx</span>
                    </div>
                    <div class="text-green-400">// React Native Component</div>
                    <div>const <span class="text-yellow-400">MobileApp</span> = () => {</div>
                    <div class="ml-2 text-orange-400">return &lt;View /&gt;;</div>
                    <div>};</div>
                </div>

                <!-- Floating Flutter - Bottom Right -->
                <div class="absolute bottom-32 right-[8%] bg-gray-900/90 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-40 border border-gray-700/50 backdrop-blur-sm code-snippet transform -rotate-3" style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">MyApp.dart</span>
                    </div>
                    <div><span class="text-yellow-400">MaterialApp</span>(</div>
                    <div class="ml-2">home: <span class="text-green-400">Scaffold</span>(</div>
                    <div class="ml-4">body: <span class="text-green-400">Center</span>(),</div>
                    <div class="ml-2">),</div>
                </div>

                <!-- Floating Swift - Top Middle-Right -->
                <div class="absolute top-32 right-[35%] bg-gray-900/90 text-orange-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-30 border border-gray-700/50 backdrop-blur-sm code-snippet transform -rotate-6" style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">View.swift</span>
                    </div>
                    <div class="text-purple-400">struct</div>
                    <div><span class="text-yellow-400">ContentView</span>: View {</div>
                    <div class="ml-2">var body: some View</div>
                </div>

                <!-- Floating Kotlin - Bottom Middle-Right -->
                <div class="absolute bottom-24 right-[40%] bg-gray-900/90 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-30 border border-gray-700/50 backdrop-blur-sm code-snippet transform rotate-3" style="animation-delay: 3s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">MainActivity.kt</span>
                    </div>
                    <div class="text-blue-400">class</div>
                    <div><span class="text-yellow-400">MainActivity</span> : AppCompatActivity() {</div>
                    <div class="ml-2 text-green-400">fun onCreate()</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            📱 Mobile App Development Expert Help
                        </div>

                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Professional<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Mobile
                                App</span><br>
                            Development
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert help with your mobile app development projects. From React Native and Flutter to
                            native iOS and Android development, our experienced developers deliver high-quality mobile
                            solutions.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('assignments.create') }}"
                                class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl text-center">
                                Get Help Now
                            </a>
                            <a href="#pricing"
                                class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-purple-600 hover:text-white transition-all duration-200 text-center">
                                View Pricing
                            </a>
                        </div>

                        <div class="flex items-center space-x-6 text-sm text-gray-600">
                            <div class="flex items-center">
                                <span class="text-yellow-400 mr-1">⭐</span>
                                <span class="font-semibold">4.8/5</span> rating
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-500 mr-1">✓</span>
                                <span>500+ apps developed</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>3-7 day delivery</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Code Editor Mockup -->
                    <div class="relative">
                        <div class="bg-gray-900 rounded-lg shadow-2xl overflow-hidden">
                            <!-- Editor Header -->
                            <div class="flex items-center mb-4">
                                <div class="flex space-x-2">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="ml-4 text-gray-400 text-sm font-mono">MobileApp.dart</div>
                            </div>

                            <!-- Code Content -->
                            <div class="font-mono text-sm space-y-1 p-6">
                                <div class="text-purple-400">// Mobile App Development Solution</div>
                                <div class="text-blue-400">class <span class="text-yellow-400">MobileApp</span> extends
                                    StatelessWidget {</div>
                                <div class="text-gray-300 ml-4">@override</div>
                                <div class="text-gray-300 ml-4">Widget build(BuildContext context) {</div>
                                <div class="text-gray-300 ml-8">return MaterialApp(</div>
                                <div class="text-gray-300 ml-12">home: <span class="text-green-400">MainScreen()</span>,
                                </div>
                                <div class="text-gray-300 ml-8">);</div>
                                <div class="text-gray-300 ml-4">}</div>
                                <div class="text-blue-400">}</div>
                                <div class="text-gray-500"></div>
                                <div class="text-purple-400">// Expert Available 4.8/5 ⭐</div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                            <div class="text-2xl">📱</div>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-lg shadow-lg p-4 animate-pulse">
                            <div class="text-2xl">🚀</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Mobile App Development Content Section -->
        <section class="py-20 bg-gradient-to-b from-gray-50 via-purple-50 to-white">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="text-xl">📱</span>
                            COMPREHENSIVE MOBILE DEVELOPMENT GUIDE
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            Complete Mobile App <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600">Development Solutions</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">From idea to App Store launch—your complete roadmap to mobile app success</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Hero Introduction Card -->
                        <div class="bg-gradient-to-br from-white via-blue-50 to-purple-50 rounded-2xl shadow-2xl p-8 border-2 border-blue-100 relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-purple-200 rounded-full opacity-20 -mr-16 -mt-16"></div>
                            <div class="absolute bottom-0 left-0 w-40 h-40 bg-blue-200 rounded-full opacity-20 -ml-20 -mb-20"></div>

                            <div class="relative z-10">
                                <div class="flex items-start gap-4 mb-6">
                                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 rounded-2xl p-4 shadow-lg">
                                        <span class="text-4xl">🚀</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-gray-900 mb-2">Transform Your Ideas Into Reality</h3>
                                        <p class="text-purple-600 font-semibold text-lg">Join 5+ billion smartphone users worldwide</p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-3 gap-4 mb-6">
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-purple-500">
                                        <div class="text-3xl font-bold text-purple-600 mb-1">5B+</div>
                                        <p class="text-gray-700 text-sm font-semibold">Global Mobile Users</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
                                        <div class="text-3xl font-bold text-blue-600 mb-1">90%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Time Spent on Mobile Apps</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-indigo-500">
                                        <div class="text-3xl font-bold text-indigo-600 mb-1">$693B</div>
                                        <p class="text-gray-700 text-sm font-semibold">App Revenue (2024)</p>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-purple-600">Mobile apps have revolutionized how we live.</span> From ordering food and managing finances to staying connected and learning new skills, billions of people worldwide rely on mobile applications every single day. Whether you're a student tackling a mobile development assignment, an entrepreneur with the next big app idea, or a developer needing expert guidance on complex features—professional mobile app development services are your shortcut to success.
                                </p>

                                <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl p-6 text-white">
                                    <p class="font-bold text-lg mb-2">💡 Why Mobile Matters:</p>
                                    <p class="text-purple-50">
                                        Mobile isn't the future—it's the present. Apps generate more revenue than desktop, have higher engagement rates, and provide experiences that websites simply can't match. The question isn't whether to build mobile apps, but how to build them right.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Technology Deep Dive Cards -->
                        <div class="grid md:grid-cols-2 gap-8 mb-8">
                            <!-- Cross-Platform Card -->
                            <div class="bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50 rounded-2xl p-8 border-2 border-purple-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-purple-500 to-blue-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">⚛️</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Cross-Platform Magic</h4>
                                        <p class="text-purple-600 text-sm font-semibold">Write once, deploy everywhere</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-blue-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-blue-600">React Native + Flutter = Developer Paradise.</span> Build stunning apps for iOS and Android using a single codebase. Save 50% development time while maintaining near-native performance. Facebook, Instagram, Alibaba, and Google Ads all trust cross-platform frameworks—so can you!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-blue-900 text-lg">60%</p>
                                            <p class="text-xs text-gray-700">Cost Reduction</p>
                                        </div>
                                        <div class="bg-gradient-to-br from-purple-100 to-purple-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-purple-900 text-lg">2x</p>
                                            <p class="text-xs text-gray-700">Faster Launch</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">React Native</span>
                                        <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">Flutter</span>
                                        <span class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded-full text-xs font-semibold">Hot Reload</span>
                                        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-semibold">Single Codebase</span>
                                    </div>
                                </div>
                            </div>

                            <!-- iOS Card -->
                            <div class="bg-gradient-to-br from-orange-50 via-pink-50 to-red-50 rounded-2xl p-8 border-2 border-orange-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-orange-500 to-pink-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🍎</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Native iOS Excellence</h4>
                                        <p class="text-orange-600 text-sm font-semibold">Premium Apple experience</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-orange-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-orange-600">Swift + SwiftUI = iOS Perfection.</span> Build lightning-fast apps that feel like they were made by Apple. Access exclusive features like ARKit, HealthKit, and seamless integration with Apple Watch, iPad, and Mac. Your users deserve the best—give it to them!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-gradient-to-br from-orange-100 to-orange-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-orange-900 text-lg">1.5B+</p>
                                            <p class="text-xs text-gray-700">Active Devices</p>
                                        </div>
                                        <div class="bg-gradient-to-br from-pink-100 to-pink-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-pink-900 text-lg">$1.1T</p>
                                            <p class="text-xs text-gray-700">App Store Revenue</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-semibold">Swift</span>
                                        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-semibold">SwiftUI</span>
                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">UIKit</span>
                                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-semibold">Combine</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Android Card -->
                            <div class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 rounded-2xl p-8 border-2 border-green-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🤖</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Native Android Power</h4>
                                        <p class="text-green-600 text-sm font-semibold">Reach the world's largest audience</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-green-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-green-600">Kotlin + Jetpack Compose = Modern Android.</span> Tap into 3+ billion Android devices worldwide! Modern, declarative UI, null-safe code, and seamless coroutines make Android development a joy. Google Play's massive reach means unlimited potential!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-gradient-to-br from-green-100 to-green-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-green-900 text-lg">3B+</p>
                                            <p class="text-xs text-gray-700">Active Devices</p>
                                        </div>
                                        <div class="bg-gradient-to-br from-emerald-100 to-emerald-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-emerald-900 text-lg">72%</p>
                                            <p class="text-xs text-gray-700">Market Share</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-semibold">Kotlin</span>
                                        <span class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-semibold">Jetpack Compose</span>
                                        <span class="bg-teal-100 text-teal-700 px-3 py-1 rounded-full text-xs font-semibold">Material Design</span>
                                        <span class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded-full text-xs font-semibold">Coroutines</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Backend Card -->
                            <div class="bg-gradient-to-br from-yellow-50 via-orange-50 to-red-50 rounded-2xl p-8 border-2 border-yellow-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-yellow-500 to-red-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🔥</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Backend & APIs</h4>
                                        <p class="text-yellow-600 text-sm font-semibold">Power your app with cloud magic</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-yellow-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-yellow-600">Firebase + REST APIs = Unlimited Power.</span> Real-time databases, cloud storage, authentication, push notifications, and analytics—all in one platform. Your app becomes intelligent, connected, and scalable from day one!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-gradient-to-br from-yellow-100 to-yellow-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-yellow-900 text-lg">99.9%</p>
                                            <p class="text-xs text-gray-700">Uptime SLA</p>
                                        </div>
                                        <div class="bg-gradient-to-br from-orange-100 to-orange-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-orange-900 text-lg">&lt;100ms</p>
                                            <p class="text-xs text-gray-700">API Response</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-xs font-semibold">Firebase</span>
                                        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-semibold">REST APIs</span>
                                        <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-xs font-semibold">GraphQL</span>
                                        <span class="bg-pink-100 text-pink-700 px-3 py-1 rounded-full text-xs font-semibold">WebSocket</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced Features Showcase -->
                        <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 rounded-2xl shadow-2xl p-8 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-10 rounded-full -mr-32 -mt-32"></div>
                            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-10 rounded-full -ml-24 -mb-24"></div>

                            <div class="relative z-10">
                                <div class="text-center mb-8">
                                    <h3 class="text-3xl font-bold mb-3">🎯 Advanced Features Arsenal</h3>
                                    <p class="text-purple-100 text-lg">Everything you need to build world-class mobile apps</p>
                                </div>

                                <div class="grid md:grid-cols-3 gap-6">
                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition-all">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="bg-gradient-to-br from-pink-400 to-red-500 rounded-lg p-2">
                                                <span class="text-2xl">📸</span>
                                            </div>
                                            <h5 class="font-bold text-white text-lg">Camera & Media</h5>
                                        </div>
                                        <ul class="space-y-2 text-purple-100 text-sm">
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Photo/video capture
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Image filters & editing
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> QR code scanning
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Gallery integration
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Media compression
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition-all">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="bg-gradient-to-br from-blue-400 to-cyan-500 rounded-lg p-2">
                                                <span class="text-2xl">📍</span>
                                            </div>
                                            <h5 class="font-bold text-white text-lg">Location Services</h5>
                                        </div>
                                        <ul class="space-y-2 text-purple-100 text-sm">
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> GPS tracking
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Geofencing alerts
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Maps integration
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Location-based notifications
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Distance calculations
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition-all">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="bg-gradient-to-br from-green-400 to-emerald-500 rounded-lg p-2">
                                                <span class="text-2xl">💳</span>
                                            </div>
                                            <h5 class="font-bold text-white text-lg">Payments & Commerce</h5>
                                        </div>
                                        <ul class="space-y-2 text-purple-100 text-sm">
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Stripe integration
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> In-app purchases
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Payment gateways
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Subscription management
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Digital wallets
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition-all">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg p-2">
                                                <span class="text-2xl">🔔</span>
                                            </div>
                                            <h5 class="font-bold text-white text-lg">Notifications</h5>
                                        </div>
                                        <ul class="space-y-2 text-purple-100 text-sm">
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Push notifications
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Local notifications
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Rich media alerts
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Notification actions
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Badge management
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition-all">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="bg-gradient-to-br from-purple-400 to-indigo-500 rounded-lg p-2">
                                                <span class="text-2xl">🔐</span>
                                            </div>
                                            <h5 class="font-bold text-white text-lg">Authentication</h5>
                                        </div>
                                        <ul class="space-y-2 text-purple-100 text-sm">
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Social login integration
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Biometric auth (Face/Touch ID)
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> JWT token management
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Multi-factor authentication
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Password recovery flows
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-6 border border-white border-opacity-20 hover:bg-opacity-20 transition-all">
                                        <div class="flex items-center gap-3 mb-4">
                                            <div class="bg-gradient-to-br from-teal-400 to-cyan-500 rounded-lg p-2">
                                                <span class="text-2xl">💾</span>
                                            </div>
                                            <h5 class="font-bold text-white text-lg">Data Management</h5>
                                        </div>
                                        <ul class="space-y-2 text-purple-100 text-sm">
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> SQLite databases
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Realm integration
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Offline-first architecture
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Data synchronization
                                            </li>
                                            <li class="flex items-center gap-2">
                                                <span class="text-green-300">✓</span> Encrypted storage
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Why Choose Us Card -->
                        <div class="bg-gradient-to-br from-white to-gray-50 rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🏆</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Why We're Different</h3>
                                    <p class="text-orange-600 font-semibold text-lg">Not just code—we build mobile app masterpieces</p>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-3 gap-6 mb-6">
                                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border-2 border-purple-200">
                                    <div class="text-center mb-3">
                                        <div class="bg-purple-200 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                            <span class="text-3xl">🎯</span>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-2">Clean Architecture</h4>
                                    </div>
                                    <p class="text-gray-700 text-sm text-center">
                                        MVVM, Redux, BLoC—we use battle-tested patterns that make your code maintainable, testable, and scalable for years to come.
                                    </p>
                                </div>

                                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border-2 border-blue-200">
                                    <div class="text-center mb-3">
                                        <div class="bg-blue-200 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                            <span class="text-3xl">⚡</span>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-2">Performance First</h4>
                                    </div>
                                    <p class="text-gray-700 text-sm text-center">
                                        Lazy loading, image caching, memory optimization—your app will be lightning fast on day one, not after months of debugging.
                                    </p>
                                </div>

                                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border-2 border-green-200">
                                    <div class="text-center mb-3">
                                        <div class="bg-green-200 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-3">
                                            <span class="text-3xl">🔒</span>
                                        </div>
                                        <h4 class="font-bold text-gray-900 mb-2">Fort Knox Security</h4>
                                    </div>
                                    <p class="text-gray-700 text-sm text-center">
                                        Keychain storage, certificate pinning, OWASP compliance—we protect your users' data like it's our own.
                                    </p>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600 rounded-xl p-8 text-white mb-6">
                                <div class="grid md:grid-cols-3 gap-6 text-center">
                                    <div>
                                        <div class="text-4xl font-bold mb-1">100%</div>
                                        <p class="text-purple-100 text-sm">Code Coverage</p>
                                    </div>
                                    <div>
                                        <div class="text-4xl font-bold mb-1">24/7</div>
                                        <p class="text-purple-100 text-sm">Expert Support</p>
                                    </div>
                                    <div>
                                        <div class="text-4xl font-bold mb-1">500+</div>
                                        <p class="text-purple-100 text-sm">Apps Delivered</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-orange-500">
                                <h4 class="font-bold text-gray-900 mb-3 flex items-center">
                                    <span class="text-2xl mr-2">📚</span> Complete Documentation Included
                                </h4>
                                <p class="text-gray-700 mb-3">
                                    You don't just get working code—you get the knowledge to maintain and enhance it. Every project includes:
                                </p>
                                <div class="grid md:grid-cols-2 gap-3">
                                    <div class="flex items-center gap-2 text-sm text-gray-700">
                                        <span class="text-green-500">✓</span>
                                        <span>Architecture decision records</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-700">
                                        <span class="text-green-500">✓</span>
                                        <span>API integration guides</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-700">
                                        <span class="text-green-500">✓</span>
                                        <span>Setup & deployment instructions</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-gray-700">
                                        <span class="text-green-500">✓</span>
                                        <span>Maintenance best practices</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mobile Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert mobile developers work with cutting-edge
                        technologies to build native and cross-platform mobile applications.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Cross-Platform -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Cross-Platform</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">⚛️</div>
                                    <h4 class="font-semibold text-gray-900">React Native</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🎯</div>
                                    <h4 class="font-semibold text-gray-900">Flutter</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">⚡</div>
                                    <h4 class="font-semibold text-gray-900">Xamarin</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- iOS Development -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">iOS Development</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🍎</div>
                                    <h4 class="font-semibold text-gray-900">Swift</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">📱</div>
                                    <h4 class="font-semibold text-gray-900">Objective-C</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🎨</div>
                                    <h4 class="font-semibold text-gray-900">SwiftUI</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Android Development -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Android Development</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🤖</div>
                                    <h4 class="font-semibold text-gray-900">Kotlin</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">☕</div>
                                    <h4 class="font-semibold text-gray-900">Java</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🎯</div>
                                    <h4 class="font-semibold text-gray-900">Jetpack Compose</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend & APIs -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Backend & APIs</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🔥</div>
                                    <h4 class="font-semibold text-gray-900">Firebase</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🌐</div>
                                    <h4 class="font-semibold text-gray-900">REST APIs</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">📊</div>
                                    <h4 class="font-semibold text-gray-900">GraphQL</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on app complexity.
                        No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic Mobile App</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $75</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple mobile app features
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic UI/UX design
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    3-5 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Documentation included
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200 border-2 border-purple-600 relative">
                        <div
                            class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-purple-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Mobile App</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $150</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Cross-platform development
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    API integration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    5-7 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Testing & debugging
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    App store guidelines
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Complete Mobile Solution</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $300</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full-featured mobile app
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Backend integration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    7-14 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    App store deployment
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Post-launch support
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Mobile App Development Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering high-quality
                        mobile applications.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Requirements Analysis</h3>
                        <p class="text-gray-600">We analyze your app requirements, target platform, and user experience
                            needs.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Design & Architecture</h3>
                        <p class="text-gray-600">Create wireframes, UI design, and technical architecture for your mobile
                            app.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Development & Testing</h3>
                        <p class="text-gray-600">Build your app with clean code, implement features, and conduct thorough
                            testing.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery & Support</h3>
                        <p class="text-gray-600">Deliver your completed app with documentation and deployment assistance.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who got help with their
                        mobile app development projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Incredible work on my React Native app! The developer created a
                            beautiful, functional mobile app that works perfectly on both iOS and Android. Excellent
                            communication!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                A</div>
                            <div>
                                <div class="font-semibold text-gray-900">Alex T.</div>
                                <div class="text-sm text-gray-500">Mobile Development Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing Flutter app development! The expert delivered a
                            cross-platform app with smooth animations and perfect performance. Highly recommend for mobile
                            projects."</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                J</div>
                            <div>
                                <div class="font-semibold text-gray-900">Jessica L.</div>
                                <div class="text-sm text-gray-500">Computer Science Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Professional iOS development with Swift! The app was delivered ahead
                            of schedule with clean code and excellent documentation. Great experience overall!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                R</div>
                            <div>
                                <div class="font-semibold text-gray-900">Ryan M.</div>
                                <div class="text-sm text-gray-500">iOS Development Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Expert Content Section -->
        <section class="py-20 bg-gradient-to-b from-white to-gray-50">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div class="inline-block bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold mb-4">
                            ⭐ EXPERT INSIGHTS
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            Master Mobile App Development <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Like a Pro</span>
                        </h2>
                        <p class="text-xl text-gray-600">Industry-proven strategies that separate amateur apps from professional success stories</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Interactive UI/UX Card -->
                        <div class="bg-gradient-to-br from-white via-purple-50 to-blue-50 rounded-2xl shadow-2xl p-8 border-2 border-purple-100 hover:shadow-3xl transition-all duration-300 transform hover:-translate-y-1">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-purple-500 to-blue-500 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🎨</span>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Mobile UI/UX Design That Users Love</h3>
                                    <p class="text-purple-600 font-semibold">The secret to 5-star app store ratings</p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-purple-500">
                                    <h4 class="font-bold text-gray-900 mb-2 flex items-center">
                                        <span class="bg-purple-100 text-purple-600 rounded-full w-8 h-8 flex items-center justify-center mr-3 text-sm">1</span>
                                        Platform-Native Design Language
                                    </h4>
                                    <p class="text-gray-700">
                                        Creating exceptional mobile experiences isn't about copying desktop designs—it's about embracing each platform's unique personality. iOS users expect the elegance of Apple's Human Interface Guidelines: crisp typography, smooth animations, and interfaces that feel like they belong on an iPhone. Android users appreciate Material Design's bold colors, responsive surfaces, and meaningful motion that makes apps feel alive and interactive.
                                    </p>
                                    <div class="mt-3 flex gap-2">
                                        <span class="bg-purple-50 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">iOS Guidelines</span>
                                        <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Material Design</span>
                                        <span class="bg-indigo-50 text-indigo-700 px-3 py-1 rounded-full text-xs font-semibold">Adaptive UI</span>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-4">
                                    <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow">
                                        <div class="flex items-center gap-2 mb-3">
                                            <span class="text-2xl">👆</span>
                                            <h5 class="font-bold text-gray-900">Touch Target Perfection</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Mobile screens demand precision. We ensure every button, link, and interactive element meets the golden standard: <span class="font-bold text-purple-600">44x44 points on iOS, 48x48dp on Android</span>. No more frustrated taps on tiny buttons—your users will thank you!
                                        </p>
                                    </div>

                                    <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow">
                                        <div class="flex items-center gap-2 mb-3">
                                            <span class="text-2xl">🧭</span>
                                            <h5 class="font-bold text-gray-900">Intuitive Navigation</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Users should never feel lost in your app. Whether it's tab bars, drawer navigation, or stack-based flows, we implement navigation patterns that feel natural and familiar, reducing cognitive load and boosting user satisfaction.
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl p-6 text-white">
                                    <p class="text-lg font-semibold mb-2">💡 Pro Tip:</p>
                                    <p class="text-purple-50">
                                        The best mobile UIs are invisible—users don't think about how to use them, they just do. We achieve this through relentless focus on information hierarchy, whitespace, and platform conventions that users already understand.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Performance & Security Cards -->
                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- Performance Card -->
                            <div class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 rounded-2xl p-8 border-2 border-blue-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">⚡</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Lightning-Fast Performance</h4>
                                        <p class="text-blue-600 text-sm font-semibold">Speed is a feature</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow">
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-xl">🚀</span>
                                            <h5 class="font-bold text-gray-900 text-sm">Launch Speed</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Users abandon apps that take more than 3 seconds to load. We optimize startup time through code splitting, lazy loading, and efficient initialization sequences.
                                        </p>
                                    </div>

                                    <div class="bg-white rounded-lg p-4 shadow">
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-xl">🖼️</span>
                                            <h5 class="font-bold text-gray-900 text-sm">Image Optimization</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Smart image handling with WebP/HEIF formats, progressive loading, and caching strategies using SDWebImage or Glide keeps your app snappy.
                                        </p>
                                    </div>

                                    <div class="bg-white rounded-lg p-4 shadow">
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-xl">📡</span>
                                            <h5 class="font-bold text-gray-900 text-sm">Network Efficiency</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Request batching, intelligent caching, pagination, and debouncing ensure smooth operation even on 3G connections.
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold">📊 Performance Impact:</p>
                                        <p class="text-blue-50 text-xs mt-1">
                                            A 1-second delay decreases user satisfaction by 16%. We ensure your app performs flawlessly across all devices!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Security Card -->
                            <div class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 rounded-2xl p-8 border-2 border-green-100 shadow-xl hover:shadow-2xl transition-all duration-300">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🔒</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Fort Knox Security</h4>
                                        <p class="text-green-600 text-sm font-semibold">Protect your users</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow">
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-xl">🔐</span>
                                            <h5 class="font-bold text-gray-900 text-sm">Secure Data Storage</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Keychain (iOS) and Keystore (Android) protect sensitive data. Never plain-text passwords or tokens in UserDefaults!
                                        </p>
                                    </div>

                                    <div class="bg-white rounded-lg p-4 shadow">
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-xl">🛡️</span>
                                            <h5 class="font-bold text-gray-900 text-sm">Network Security</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            HTTPS with certificate pinning prevents man-in-the-middle attacks. All API communications are encrypted and verified.
                                        </p>
                                    </div>

                                    <div class="bg-white rounded-lg p-4 shadow">
                                        <div class="flex items-center gap-2 mb-2">
                                            <span class="text-xl">👤</span>
                                            <h5 class="font-bold text-gray-900 text-sm">Authentication Done Right</h5>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            OAuth 2.0, biometric authentication, JWT tokens, and secure session management keep accounts safe.
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold">⚠️ Security Alert:</p>
                                        <p class="text-green-50 text-xs mt-1">
                                            81% of mobile apps have security vulnerabilities. Don't be a statistic—we follow OWASP best practices!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Architecture Card -->
                        <div class="bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow-2xl p-8 border-2 border-indigo-100">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🏗️</span>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Architecture That Scales</h3>
                                    <p class="text-indigo-600 font-semibold">From MVP to enterprise-grade applications</p>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-6 text-white mb-6">
                                <p class="text-lg font-bold mb-2">🚨 The Truth About Bad Architecture:</p>
                                <p class="text-indigo-100">
                                    Without proper architecture, your app becomes a tangled mess of spaghetti code. Adding features takes weeks instead of days. Bugs multiply faster than you can fix them. Testing becomes impossible. We've seen it too many times—don't let it happen to you!
                                </p>
                            </div>

                            <div class="grid md:grid-cols-3 gap-4 mb-6">
                                <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-5 border-2 border-purple-200 hover:shadow-lg transition-all">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-2xl">📐</span>
                                        <h5 class="font-bold text-gray-900">MVVM</h5>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Model-View-ViewModel separates UI from business logic. Your ViewModels expose reactive data streams that Views observe—making testing a breeze!
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="bg-purple-200 text-purple-800 px-2 py-1 rounded text-xs">Testable</span>
                                        <span class="bg-purple-200 text-purple-800 px-2 py-1 rounded text-xs">Reactive</span>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-5 border-2 border-blue-200 hover:shadow-lg transition-all">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-2xl">🎯</span>
                                        <h5 class="font-bold text-gray-900">Clean Architecture</h5>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Layers (Presentation, Domain, Data) with clear boundaries. Your business logic stays pure, independent, and portable.
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="bg-blue-200 text-blue-800 px-2 py-1 rounded text-xs">Scalable</span>
                                        <span class="bg-blue-200 text-blue-800 px-2 py-1 rounded text-xs">Maintainable</span>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-5 border-2 border-green-200 hover:shadow-lg transition-all">
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="text-2xl">💾</span>
                                        <h5 class="font-bold text-gray-900">Repository Pattern</h5>
                                    </div>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Single source of truth for data. Seamlessly switch between cache, API, or mocks without changing business logic.
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-xs">Flexible</span>
                                        <span class="bg-green-200 text-green-800 px-2 py-1 rounded text-xs">Clean</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md border-l-4 border-indigo-500">
                                <h5 class="font-bold text-gray-900 mb-3 flex items-center">
                                    <span class="text-xl mr-2">🎮</span> State Management Mastery
                                </h5>
                                <p class="text-gray-700 mb-3">
                                    State management is the beating heart of modern apps. We implement battle-tested solutions:
                                </p>
                                <div class="grid md:grid-cols-3 gap-3">
                                    <div class="bg-purple-50 rounded-lg p-3">
                                        <p class="font-semibold text-purple-900 text-sm mb-1">React Native</p>
                                        <p class="text-xs text-gray-600">Redux, MobX, Zustand</p>
                                    </div>
                                    <div class="bg-blue-50 rounded-lg p-3">
                                        <p class="font-semibold text-blue-900 text-sm mb-1">Flutter</p>
                                        <p class="text-xs text-gray-600">BLoC, Provider, Riverpod</p>
                                    </div>
                                    <div class="bg-green-50 rounded-lg p-3">
                                        <p class="font-semibold text-green-900 text-sm mb-1">SwiftUI</p>
                                        <p class="text-xs text-gray-600">@State, @ObservedObject</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testing Card -->
                        <div class="bg-gradient-to-br from-white to-yellow-50 rounded-2xl shadow-2xl p-8 border-2 border-yellow-100">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🧪</span>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Testing That Catches Bugs Before Users Do</h3>
                                    <p class="text-yellow-600 font-semibold">Quality isn't luck—it's process</p>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-3 gap-4 mb-6">
                                <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow">
                                    <div class="bg-red-100 rounded-full w-12 h-12 flex items-center justify-center mb-3">
                                        <span class="text-2xl">🎯</span>
                                    </div>
                                    <h5 class="font-bold text-gray-900 mb-2">Unit Tests</h5>
                                    <p class="text-gray-700 text-sm">
                                        XCTest, JUnit, Jest—we test every function in isolation to ensure rock-solid foundations.
                                    </p>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow">
                                    <div class="bg-blue-100 rounded-full w-12 h-12 flex items-center justify-center mb-3">
                                        <span class="text-2xl">🔗</span>
                                    </div>
                                    <h5 class="font-bold text-gray-900 mb-2">Integration Tests</h5>
                                    <p class="text-gray-700 text-sm">
                                        Verify modules work together seamlessly. No surprises when components interact!
                                    </p>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow">
                                    <div class="bg-green-100 rounded-full w-12 h-12 flex items-center justify-center mb-3">
                                        <span class="text-2xl">📱</span>
                                    </div>
                                    <h5 class="font-bold text-gray-900 mb-2">UI Tests</h5>
                                    <p class="text-gray-700 text-sm">
                                        Automated user flows catch regressions before they reach production.
                                    </p>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl p-6 text-white mb-4">
                                <p class="font-bold mb-2">⚙️ CI/CD Pipeline Magic:</p>
                                <p class="text-yellow-50 text-sm">
                                    GitHub Actions + Fastlane = automated builds, tests on every commit, beta distribution, and smooth App Store releases. Set it once, benefit forever!
                                </p>
                            </div>
                        </div>

                        <!-- App Store Deployment Card -->
                        <div class="bg-gradient-to-br from-purple-600 via-blue-600 to-indigo-700 rounded-2xl shadow-2xl p-8 text-white relative overflow-hidden">
                            <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
                            <div class="absolute bottom-0 left-0 w-48 h-48 bg-white opacity-5 rounded-full -ml-24 -mb-24"></div>

                            <div class="relative z-10">
                                <div class="flex items-start gap-4 mb-6">
                                    <div class="bg-white bg-opacity-20 backdrop-blur-sm rounded-2xl p-4 shadow-lg">
                                        <span class="text-4xl">🚀</span>
                                    </div>
                                    <div>
                                        <h3 class="text-2xl font-bold mb-2">Launch Like a Rocket: App Store Success</h3>
                                        <p class="text-purple-100 font-semibold">From submission to 5-star reviews</p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-2 gap-6 mb-6">
                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-5 border border-white border-opacity-20">
                                        <h5 class="font-bold text-white mb-3 flex items-center">
                                            <span class="mr-2">📝</span> App Store Optimization (ASO)
                                        </h5>
                                        <ul class="space-y-2 text-purple-50 text-sm">
                                            <li>✨ Compelling descriptions that convert</li>
                                            <li>📸 Screenshot designs that pop</li>
                                            <li>🎬 Preview videos that engage</li>
                                            <li>🔑 Keyword strategies that rank</li>
                                        </ul>
                                    </div>

                                    <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-5 border border-white border-opacity-20">
                                        <h5 class="font-bold text-white mb-3 flex items-center">
                                            <span class="mr-2">✅</span> Submission Mastery
                                        </h5>
                                        <ul class="space-y-2 text-purple-50 text-sm">
                                            <li>🍎 Pass App Store Review first try</li>
                                            <li>🤖 Google Play compliance</li>
                                            <li>🔒 Privacy policies handled</li>
                                            <li>⚖️ Legal compliance guaranteed</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="bg-gradient-to-r from-yellow-400 to-orange-500 rounded-xl p-6 text-gray-900">
                                    <div class="flex items-start gap-3">
                                        <span class="text-3xl">📊</span>
                                        <div>
                                            <h5 class="font-bold mb-2">Post-Launch Analytics & Optimization</h5>
                                            <p class="text-sm text-gray-800">
                                                Firebase Analytics + Crashlytics + A/B Testing = data-driven decisions. We help you understand users, fix crashes instantly, and optimize for growth!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-6 bg-white bg-opacity-10 backdrop-blur-sm rounded-xl p-4 border border-white border-opacity-20">
                                    <p class="text-center text-purple-100 text-sm">
                                        <span class="font-bold">💡 Success Rate:</span> Our apps average <span class="font-bold text-yellow-300">4.5+ stars</span> on app stores with <span class="font-bold text-yellow-300">95% first-submission approval</span> rate!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our mobile app
                        development service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Which mobile platforms do you support?</h3>
                        <p class="text-gray-600">We develop for both iOS and Android platforms, using native technologies
                            (Swift, Kotlin) or cross-platform frameworks (React Native, Flutter). We can help you choose the
                            best approach for your project.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">How long does mobile app development take?
                        </h3>
                        <p class="text-gray-600">Development time varies by complexity. Simple apps take 3-5 days, advanced
                            apps with multiple features take 5-7 days, and complete solutions with backend integration take
                            7-14 days.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you help with app store submission?</h3>
                        <p class="text-gray-600">Yes! For complete mobile solutions, we provide guidance on app store
                            submission requirements, help with app store optimization, and assist with the deployment
                            process for both iOS App Store and Google Play Store.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you integrate APIs and backend services?
                        </h3>
                        <p class="text-gray-600">Absolutely! We can integrate your app with REST APIs, GraphQL, Firebase,
                            authentication services, payment gateways, and other third-party services your app requires.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the mobile app delivery?
                        </h3>
                        <p class="text-gray-600">You'll receive complete source code, project documentation, setup
                            instructions, and any necessary configuration files. For advanced projects, we also include
                            testing documentation and deployment guides.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your Mobile App?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    launched their mobile apps with our expert development help.</p>
                <a href="{{ route('assignments.create') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Your Mobile App Today
                </a>
            </div>
        </section>
    </div>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-10px) rotate(1deg);
            }

            66% {
                transform: translateY(5px) rotate(-1deg);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(10px) rotate(-1deg);
            }

            66% {
                transform: translateY(-5px) rotate(1deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }
    </style>
@endsection
