@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50 pt-20 pb-16"
        role="banner">
        <!-- Animated Coding Background -->
        <div class="absolute inset-0 opacity-30">
            <!-- Floating Code Snippets -->
            @if ($service['slug'] === 'mobile-app')
                <div class="absolute top-20 left-10 animate-float-slow">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-green-600">// React Native Component</div>
                        <div class="text-blue-600">const MobileApp = () => {</div>
                        <div class="ml-2 text-orange-600">return &lt;AppNavigator /&gt;;</div>
                        <div class="text-blue-600">};</div>
                    </div>
                </div>

                <div class="absolute top-40 right-16 animate-float-delayed">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-green-600">// App Configuration</div>
                        <div class="text-blue-600">const config = {</div>
                        <div class="ml-2 text-orange-600">platforms: ["iOS", "Android"],</div>
                        <div class="ml-2 text-purple-600">rating: {{ $service['rating'] }}</div>
                        <div class="text-blue-600">};</div>
                    </div>
                </div>

                <div class="absolute bottom-32 left-1/4 animate-float">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-green-600"># Flutter App</div>
                        <div class="text-blue-600">class MyApp extends StatelessWidget {</div>
                        <div class="ml-4 text-orange-600">@override</div>
                        <div class="ml-4 text-purple-600">Widget build(context) => MaterialApp();</div>
                        <div class="text-blue-600">}</div>
                    </div>
                </div>

                <div class="absolute bottom-20 right-8 animate-float-slow">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-green-600">/* Swift iOS Development */</div>
                        <div class="text-blue-600">func createApp() {</div>
                        <div class="ml-4 text-orange-600">let app = UIApplication.shared</div>
                        <div class="ml-4 text-purple-600">// {{ $service['turnaround'] }} delivery</div>
                        <div class="text-blue-600">}</div>
                    </div>
                </div>
            @else
                <div class="absolute top-20 left-10 animate-float-slow">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-blue-600">&lt;div class="hero"&gt;</div>
                        <div class="ml-2 text-purple-600">{{ $service['name'] }}</div>
                        <div class="text-blue-600">&lt;/div&gt;</div>
                    </div>
                </div>

                <div class="absolute top-40 right-16 animate-float-delayed">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-green-600">// Expert Available</div>
                        <div class="text-blue-600">const support = {</div>
                        <div class="ml-2 text-orange-600">available: true,</div>
                        <div class="ml-2 text-purple-600">rating: {{ $service['rating'] }}</div>
                        <div class="text-blue-600">};</div>
                    </div>
                </div>

                <div class="absolute bottom-32 left-1/4 animate-float">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-green-600"># Web Development</div>
                        <div class="text-blue-600">def create_website():</div>
                        <div class="ml-4 text-orange-600">frameworks = ["React", "Vue", "Angular"]</div>
                        <div class="ml-4 text-purple-600">return "Professional Solution"</div>
                    </div>
                </div>

                <div class="absolute bottom-20 right-8 animate-float-slow">
                    <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-xs font-mono text-gray-600">
                        <div class="text-green-600">/* {{ $service['turnaround'] }} delivery */</div>
                        <div class="text-blue-600">SELECT * FROM projects</div>
                        <div class="text-orange-600">WHERE status = 'completed'</div>
                        <div class="text-purple-600">ORDER BY satisfaction DESC;</div>
                    </div>
                </div>
            @endif

            <!-- Geometric Shapes -->
            <div class="absolute top-20 right-20 w-32 h-32 bg-purple-200 rounded-full opacity-30 animate-pulse"></div>
            <div class="absolute bottom-40 left-10 w-20 h-20 bg-blue-200 rounded-full opacity-40 animate-bounce"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-indigo-200 transform rotate-45 opacity-25"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-20 lg:py-32">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-left">
                    <!-- Breadcrumb -->
                    <nav class="mb-6">
                        <div class="flex items-center space-x-2 text-gray-500 text-sm">
                            <a href="{{ route('home') }}" class="hover:text-purple-600 transition-colors">Home</a>
                            <span>›</span>
                            <a href="{{ route('services.programming.index') }}"
                                class="hover:text-purple-600 transition-colors">Services</a>
                            <span>›</span>
                            <span class="text-gray-900 font-medium">{{ $service['name'] }}</span>
                        </div>
                    </nav>

                    <!-- Status Badge -->
                    <div
                        class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                        {{ $service['orders_completed'] }}+ Projects Completed Successfully
                    </div>

                    <!-- Main Headline -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                        {{ $serviceDetails['hero']['title'] }}
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-lg">
                        {{ $serviceDetails['hero']['description'] }}
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 mb-10">
                        <a href="{{ route('order') }}"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="mr-2">🚀</span>
                            Start Your Project
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#pricing"
                            class="inline-flex items-center justify-center border-2 border-purple-600 text-purple-600 hover:bg-purple-600 hover:text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300">
                            <span class="mr-2">💰</span>
                            View Pricing
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="grid grid-cols-4 gap-6">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-1">{{ $service['rating'] }}</div>
                            <div class="text-sm text-gray-500">Rating</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-green-600 mb-1">{{ $service['orders_completed'] }}+</div>
                            <div class="text-sm text-gray-500">Projects</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-1">{{ $service['turnaround'] }}</div>
                            <div class="text-sm text-gray-500">Delivery</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-orange-600 mb-1">{{ $service['price_from'] }}+</div>
                            <div class="text-sm text-gray-500">Starting</div>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Code Editor Mockup -->
                <div class="relative">
                    <!-- Code Editor Mockup -->
                    <div
                        class="bg-gray-900 rounded-xl shadow-2xl p-6 transform rotate-3 hover:rotate-1 transition-transform duration-500">
                        <!-- Editor Header -->
                        <div class="flex items-center mb-4">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            </div>
                            @if ($service['slug'] === 'mobile-app')
                                <div class="ml-4 text-gray-400 text-sm font-mono">MobileApp.dart</div>
                            @else
                                <div class="ml-4 text-gray-400 text-sm font-mono">web-project.js</div>
                            @endif
                        </div>

                        <!-- Code Content -->
                        <div class="font-mono text-sm space-y-1">
                            @if ($service['slug'] === 'mobile-app')
                                <div class="text-purple-400">// {{ $service['name'] }} Solution</div>
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
                                <div class="text-purple-400">// Expert Available {{ $service['rating'] }}/5 ⭐</div>
                            @else
                                <div class="text-purple-400">// {{ $service['name'] }} Solution</div>
                                <div class="text-blue-400">const <span class="text-yellow-400">webProject</span> = {</div>
                                <div class="text-gray-300 ml-4">framework: <span class="text-green-400">"Modern
                                        Stack"</span>,</div>
                                <div class="text-gray-300 ml-4">responsive: <span class="text-green-400">true</span>,
                                </div>
                                <div class="text-gray-300 ml-4">delivery: <span
                                        class="text-orange-400">"{{ $service['turnaround'] }}"</span></div>
                                <div class="text-blue-400">};</div>
                                <div class="text-gray-500"></div>
                                <div class="text-purple-400">// Expert Available {{ $service['rating'] }}/5 ⭐</div>
                                <div class="text-blue-400">function <span class="text-yellow-400">startProject</span>() {
                                </div>
                                <div class="text-gray-300 ml-4">return <span class="text-green-400">"Success
                                        Guaranteed!"</span>;</div>
                                <div class="text-blue-400">}</div>
                            @endif
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                        <div class="flex items-center text-sm">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                            <span class="font-semibold text-gray-800">Expert Online</span>
                        </div>
                    </div>

                    <div class="absolute -bottom-4 -left-4 bg-purple-600 text-white rounded-lg shadow-lg p-4">
                        <div class="text-sm font-semibold">✅ {{ $service['name'] }} Ready!</div>
                        <div class="text-xs opacity-90">Starting from {{ $service['price_from'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Technologies Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-6">Technologies We Work With</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our experts are proficient in all modern web development
                    technologies and frameworks</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($serviceDetails['technologies'] as $category => $techs)
                    <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow duration-300">
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">{{ $category }}</h3>
                        <div class="space-y-3">
                            @foreach ($techs as $tech)
                                <div
                                    class="flex items-center justify-center bg-gradient-to-r from-blue-50 to-purple-50 rounded-lg py-2 px-4">
                                    <span class="text-gray-700 font-medium">{{ $tech }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-6">Transparent Pricing</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Choose the package that fits your project needs and
                    budget</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @foreach ($serviceDetails['pricing'] as $key => $package)
                    <div
                        class="relative bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border {{ $key === 'standard' ? 'border-blue-500 ring-4 ring-blue-500/20' : 'border-gray-200' }}">

                        @if ($key === 'standard')
                            <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                                <span
                                    class="bg-gradient-to-r from-blue-500 to-purple-500 text-white px-6 py-2 rounded-full text-sm font-bold">Most
                                    Popular</span>
                            </div>
                        @endif

                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-black text-gray-900 mb-4">{{ $package['name'] }}</h3>
                            <div class="text-5xl font-black text-gray-900 mb-2">{{ $package['price'] }}</div>
                            <div class="text-gray-600">{{ $package['timeframe'] }}</div>
                        </div>

                        <ul class="space-y-4 mb-8">
                            @foreach ($package['features'] as $feature)
                                <li class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" />
                                    </svg>
                                    <span class="text-gray-700">{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>

                        <a href="{{ route('order') }}"
                            class="w-full block text-center {{ $key === 'standard' ? 'bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white' : 'bg-gray-100 hover:bg-gray-200 text-gray-900' }} py-4 rounded-2xl font-bold text-lg transition-all duration-300">
                            Get Started
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-6">Our Development Process</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">A proven methodology that delivers results</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($serviceDetails['process'] as $step)
                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <span class="text-3xl">{{ $step['icon'] }}</span>
                        </div>
                        <div class="text-2xl font-black text-blue-500 mb-2">{{ $step['step'] }}</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">{{ $step['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $step['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-6">What Students Say</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who got help with their web
                    development projects</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($serviceDetails['testimonials'] as $testimonial)
                    <div
                        class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 border border-gray-100">
                        <!-- Rating -->
                        <div class="flex space-x-1 mb-4">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg class="w-5 h-5 {{ $i <= $testimonial['rating'] ? 'text-yellow-400' : 'text-gray-300' }}"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.957c.3.921-.755 1.688-1.54 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.784.57-1.838-.197-1.539-1.118l1.286-3.957a1 1 0 00-.364-1.118L2.05 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z" />
                                </svg>
                            @endfor
                        </div>

                        <!-- Review -->
                        <blockquote class="text-gray-700 leading-relaxed mb-6">
                            "{{ $testimonial['review'] }}"
                        </blockquote>

                        <!-- Student Info -->
                        <div class="border-t border-gray-100 pt-4">
                            <div class="font-bold text-gray-900">{{ $testimonial['name'] }}</div>
                            <div class="text-sm text-gray-600">{{ $testimonial['role'] }}</div>
                            <div class="text-xs text-blue-600 font-medium">{{ $testimonial['university'] }}</div>
                            <div class="text-xs text-green-600 font-medium mt-1">Project: {{ $testimonial['project'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-black text-gray-900 mb-6">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our web development
                    services</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                @foreach ($serviceDetails['faq'] as $index => $faq)
                    <div x-data="{ open: false }" class="bg-white rounded-2xl shadow-lg border border-gray-100">
                        <button @click="open = !open"
                            class="w-full text-left px-8 py-6 flex items-center justify-between hover:bg-gray-50 rounded-2xl transition-colors duration-200">
                            <span class="text-lg font-bold text-gray-900">{{ $faq['question'] }}</span>
                            <svg x-bind:class="open ? 'rotate-180' : ''"
                                class="w-6 h-6 text-gray-500 transition-transform duration-200" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale-100"
                            x-transition:leave-end="opacity-0 transform scale-95" class="px-8 pb-6">
                            <p class="text-gray-700 leading-relaxed">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-black mb-8">Ready to Start Your Web Development Project?</h2>
            <p class="text-xl mb-12 max-w-3xl mx-auto">
                Get matched with an expert developer who understands your technology stack and project requirements.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="{{ route('order') }}"
                    class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                    <span class="mr-4 text-3xl">🚀</span>
                    Start Your Project Now
                    <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('services.index') }}"
                    class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-blue-600 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300">
                    <span class="mr-4 text-3xl">⚡</span>
                    View All Services
                </a>
            </div>
        </div>
    </section>

    <!-- Custom Styles -->
    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes float-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-25px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 0.8;
            }
        }

        @keyframes bounce-slow {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-slow {
            animation: float-slow 8s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 7s ease-in-out infinite;
            animation-delay: 2s;
        }

        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        .animate-bounce-slow {
            animation: bounce-slow 3s ease-in-out infinite;
        }

        .animation-delay-1000 {
            animation-delay: 1s;
        }
    </style>
@endsection
