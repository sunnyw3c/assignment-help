@extends('layouts.app')

@section('title', 'Mobile App Development - Expert Help Available')
@section('description', 'Get professional help with mobile app development projects. Expert developers available 24/7 for React Native, Flutter, Swift, Kotlin, and more.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section with Code Background -->
    <section class="relative bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100 py-20 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.1\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');"></div>
        </div>

        <!-- Floating Code Snippets -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <!-- Floating React Native -->
            <div class="absolute top-10 left-10 bg-gray-900 text-cyan-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-float opacity-80 max-w-xs">
                <div class="text-green-400">// React Native Component</div>
                <div>const <span class="text-yellow-400">MobileApp</span> = () => {</div>
                <div class="ml-2 text-orange-400">return &lt;AppNavigator /&gt;;</div>
                <div>};</div>
            </div>

            <!-- Floating Flutter -->
            <div class="absolute top-32 right-20 bg-gray-900 text-blue-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-float-delayed opacity-80 max-w-xs">
                <div class="text-purple-400">class</div>
                <div><span class="text-yellow-400">MyApp</span> extends StatelessWidget {</div>
                <div class="ml-2 text-green-400">Widget build(context) {</div>
                <div class="ml-4">return MaterialApp();</div>
                <div class="ml-2">}</div>
                <div>}</div>
            </div>

            <!-- Floating Swift -->
            <div class="absolute bottom-20 left-1/4 bg-gray-900 text-orange-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-bounce opacity-80 max-w-xs">
                <div class="text-purple-400">class</div>
                <div><span class="text-yellow-400">ViewController</span>: UIViewController {</div>
                <div class="ml-2 text-green-400">override func viewDidLoad() {</div>
                <div class="ml-4">super.viewDidLoad()</div>
                <div class="ml-2">}</div>
                <div>}</div>
            </div>

            <!-- Floating Kotlin -->
            <div class="absolute top-64 right-1/4 bg-gray-900 text-purple-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-pulse opacity-80 max-w-xs">
                <div class="text-blue-400">class</div>
                <div><span class="text-yellow-400">MainActivity</span> : AppCompatActivity() {</div>
                <div class="ml-2 text-green-400">override fun onCreate() {</div>
                <div class="ml-4">setContentView(R.layout.main)</div>
                <div class="ml-2">}</div>
                <div>}</div>
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <div class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        📱 Mobile App Development Expert Help
                    </div>

                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Professional<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Mobile App</span><br>
                        Development
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Get expert help with your mobile app development projects. From React Native and Flutter to native iOS and Android development, our experienced developers deliver high-quality mobile solutions.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="{{ route('assignments.create') }}" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl text-center">
                            Get Help Now
                        </a>
                        <a href="#pricing" class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-purple-600 hover:text-white transition-all duration-200 text-center">
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
                            <div class="text-blue-400">class <span class="text-yellow-400">MobileApp</span> extends StatelessWidget {</div>
                            <div class="text-gray-300 ml-4">@override</div>
                            <div class="text-gray-300 ml-4">Widget build(BuildContext context) {</div>
                            <div class="text-gray-300 ml-8">return MaterialApp(</div>
                            <div class="text-gray-300 ml-12">home: <span class="text-green-400">MainScreen()</span>,</div>
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

    <!-- Technologies Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Mobile Technologies We Master</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert mobile developers work with cutting-edge technologies to build native and cross-platform mobile applications.</p>
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
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on app complexity. No hidden fees, no surprises.</p>
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
                        <a href="{{ route('assignments.create') }}" class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200 border-2 border-purple-600 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-purple-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
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
                        <a href="{{ route('assignments.create') }}" class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
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
                        <a href="{{ route('assignments.create') }}" class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
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
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering high-quality mobile applications.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Requirements Analysis</h3>
                    <p class="text-gray-600">We analyze your app requirements, target platform, and user experience needs.</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Design & Architecture</h3>
                    <p class="text-gray-600">Create wireframes, UI design, and technical architecture for your mobile app.</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Development & Testing</h3>
                    <p class="text-gray-600">Build your app with clean code, implement features, and conduct thorough testing.</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery & Support</h3>
                    <p class="text-gray-600">Deliver your completed app with documentation and deployment assistance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who got help with their mobile app development projects.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Incredible work on my React Native app! The developer created a beautiful, functional mobile app that works perfectly on both iOS and Android. Excellent communication!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">A</div>
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
                    <p class="text-gray-600 mb-6">"Amazing Flutter app development! The expert delivered a cross-platform app with smooth animations and perfect performance. Highly recommend for mobile projects."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">J</div>
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
                    <p class="text-gray-600 mb-6">"Professional iOS development with Swift! The app was delivered ahead of schedule with clean code and excellent documentation. Great experience overall!"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">R</div>
                        <div>
                            <div class="font-semibold text-gray-900">Ryan M.</div>
                            <div class="text-sm text-gray-500">iOS Development Student</div>
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
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our mobile app development service.</p>
            </div>

            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Which mobile platforms do you support?</h3>
                    <p class="text-gray-600">We develop for both iOS and Android platforms, using native technologies (Swift, Kotlin) or cross-platform frameworks (React Native, Flutter). We can help you choose the best approach for your project.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">How long does mobile app development take?</h3>
                    <p class="text-gray-600">Development time varies by complexity. Simple apps take 3-5 days, advanced apps with multiple features take 5-7 days, and complete solutions with backend integration take 7-14 days.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you help with app store submission?</h3>
                    <p class="text-gray-600">Yes! For complete mobile solutions, we provide guidance on app store submission requirements, help with app store optimization, and assist with the deployment process for both iOS App Store and Google Play Store.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you integrate APIs and backend services?</h3>
                    <p class="text-gray-600">Absolutely! We can integrate your app with REST APIs, GraphQL, Firebase, authentication services, payment gateways, and other third-party services your app requires.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the mobile app delivery?</h3>
                    <p class="text-gray-600">You'll receive complete source code, project documentation, setup instructions, and any necessary configuration files. For advanced projects, we also include testing documentation and deployment guides.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your Mobile App?</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully launched their mobile apps with our expert development help.</p>
            <a href="{{ route('assignments.create') }}" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                Start Your Mobile App Today
            </a>
        </div>
    </section>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-10px) rotate(1deg); }
    66% { transform: translateY(5px) rotate(-1deg); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(10px) rotate(-1deg); }
    66% { transform: translateY(-5px) rotate(1deg); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
}
</style>
@endsection