@extends('layouts.app')

@section('title', 'Desktop Application Development - Expert Help Available')
@section('description', 'Get professional help with desktop application development. Expert developers available 24/7 for Electron, .NET, Java, Python GUI apps, and cross-platform solutions.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative hero-bg py-24 overflow-hidden min-h-screen flex items-center">
            <!-- Enhanced Background Pattern -->
            <div class="absolute inset-0 opacity-5 md:opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,<svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.15\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');">
                </div>
            </div>

            <!-- Animated Background Dots -->
            <div class="absolute inset-0 pointer-events-none">
                <div
                    class="absolute top-20 left-20 w-2 h-2 bg-purple-400 rounded-full animate-ping opacity-20 md:opacity-30">
                </div>
                <div class="absolute top-40 right-32 w-3 h-3 bg-blue-400 rounded-full animate-ping opacity-25 md:opacity-40"
                    style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-16 w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping opacity-20 md:opacity-35"
                    style="animation-delay: 1s;"></div>
                <div class="absolute top-60 left-1/3 w-2.5 h-2.5 bg-green-400 rounded-full animate-ping opacity-15 md:opacity-25"
                    style="animation-delay: 1.5s;"></div>
                <div class="absolute bottom-20 right-20 w-2 h-2 bg-yellow-400 rounded-full animate-ping opacity-20 md:opacity-30"
                    style="animation-delay: 2s;"></div>
            </div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Floating Electron Main -->
                <div
                    class="absolute top-16 left-8 bg-gradient-to-r from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet animate-glow">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">main.js</span>
                    </div>
                    <div><span class="text-blue-400">const</span> { app, BrowserWindow } = </div>
                    <div class="ml-2"><span class="text-purple-400">require</span>(<span class="text-green-400">'electron'</span>)</div>
                    <div></div>
                    <div>app.<span class="text-yellow-400">on</span>(<span class="text-green-400">'ready'</span>, createWindow)</div>
                </div>

                <!-- Floating WPF XAML -->
                <div
                    class="absolute top-28 right-12 bg-gradient-to-r from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">MainWindow.xaml</span>
                    </div>
                    <div><span class="text-purple-400">&lt;Window</span> <span class="text-orange-400">x:Class</span>=<span class="text-green-400">"App"</span>&gt;</div>
                    <div class="ml-2"><span class="text-purple-400">&lt;Button</span> <span class="text-orange-400">Click</span>=<span class="text-green-400">"OnClick"</span>/&gt;</div>
                    <div><span class="text-purple-400">&lt;/Window&gt;</span></div>
                </div>

                <!-- Floating JavaFX -->
                <div
                    class="absolute bottom-24 left-1/4 bg-gradient-to-r from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">App.java</span>
                    </div>
                    <div><span class="text-purple-400">public class</span> <span class="text-yellow-400">App</span> <span class="text-purple-400">extends</span> Application {</div>
                    <div class="ml-2">@Override</div>
                    <div class="ml-2"><span class="text-blue-400">public void</span> <span class="text-yellow-400">start</span>(Stage stage)</div>
                    <div>}</div>
                </div>

                <!-- Floating Python Tkinter -->
                <div
                    class="absolute top-72 right-8 bg-gradient-to-r from-gray-900 to-gray-800 text-orange-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">gui.py</span>
                    </div>
                    <div><span class="text-purple-400">import</span> tkinter <span class="text-purple-400">as</span> tk</div>
                    <div></div>
                    <div>root = tk.<span class="text-yellow-400">Tk</span>()</div>
                    <div>root.<span class="text-green-400">mainloop</span>()</div>
                </div>

                <!-- Floating Qt -->
                <div class="absolute bottom-16 right-1/3 bg-gradient-to-r from-gray-900 to-gray-800 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">window.cpp</span>
                    </div>
                    <div>QMainWindow <span class="text-yellow-400">window</span>;</div>
                    <div>window.<span class="text-green-400">setWindowTitle</span>(</div>
                    <div class="ml-2"><span class="text-orange-400">"My App"</span></div>
                    <div>);</div>
                </div>

                <!-- Floating Swing -->
                <div class="absolute top-96 left-16 bg-gradient-to-r from-gray-900 to-gray-800 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">Frame.java</span>
                    </div>
                    <div>JFrame frame = <span class="text-purple-400">new</span> <span class="text-cyan-400">JFrame</span>();</div>
                    <div>frame.<span class="text-green-400">setVisible</span>(<span class="text-blue-400">true</span>);</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            🖥️ Desktop Application Expert Help
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Professional<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Desktop
                                Application</span><br>
                            Development
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert help with desktop application development. From Electron and .NET to Java Swing and
                            Python GUI frameworks, our experienced developers create powerful cross-platform desktop
                            applications.
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
                                <span class="font-semibold">4.7/5</span> rating
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-500 mr-1">✓</span>
                                <span>380+ desktop apps built</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>4-7 day delivery</span>
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
                                <div class="ml-4 text-gray-400 text-sm font-mono">MainWindow.cs</div>
                            </div>

                            <!-- Code Content -->
                            <div class="font-mono text-sm space-y-1 p-6">
                                <div class="text-purple-400">// Desktop Application Solution</div>
                                <div class="text-blue-400">public class <span class="text-yellow-400">MainWindow</span> : Window</div>
                                <div>{</div>
                                <div class="ml-2"><span class="text-blue-400">public</span> <span class="text-yellow-400">MainWindow</span>()</div>
                                <div class="ml-2">{</div>
                                <div class="ml-4">InitializeComponent();</div>
                                <div class="ml-2">}</div>
                                <div>}</div>
                                <div class="text-purple-400">// Cross-platform & Expert Available 4.7/5 ⭐</div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                            <div class="text-2xl">🖥️</div>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-lg shadow-lg p-4 animate-pulse">
                            <div class="text-2xl">💻</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Desktop Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert desktop developers work with Electron, .NET,
                        and modern GUI frameworks to build powerful cross-platform applications.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Cross-Platform -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Cross-Platform</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">⚡</div>
                                    <h4 class="font-semibold text-gray-900">Electron</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🌐</div>
                                    <h4 class="font-semibold text-gray-900">Tauri</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔷</div>
                                    <h4 class="font-semibold text-gray-900">Qt</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Windows & .NET -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Windows & .NET</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🪟</div>
                                    <h4 class="font-semibold text-gray-900">WPF</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">📝</div>
                                    <h4 class="font-semibold text-gray-900">WinForms</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🔷</div>
                                    <h4 class="font-semibold text-gray-900">.NET MAUI</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Java GUI -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Java GUI</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">☕</div>
                                    <h4 class="font-semibold text-gray-900">JavaFX</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔧</div>
                                    <h4 class="font-semibold text-gray-900">Swing</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">📱</div>
                                    <h4 class="font-semibold text-gray-900">AWT</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Python & Others -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Python & Others</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🐍</div>
                                    <h4 class="font-semibold text-gray-900">Tkinter</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🎨</div>
                                    <h4 class="font-semibold text-gray-900">PyQt</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🖼️</div>
                                    <h4 class="font-semibold text-gray-900">Kivy</h4>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on application
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic Desktop App</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $40</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple GUI application
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic functionality
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    2-3 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Source code included
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Cross-Platform App</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $90</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Electron or .NET
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Advanced features
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    4-5 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    File operations
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full documentation
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise Desktop App</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $200</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complex application
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Database integration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    5-7 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Multi-window support
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Professional UI/UX
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Desktop App Development Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering professional and
                        user-friendly desktop applications.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Requirements & Planning</h3>
                        <p class="text-gray-600">We analyze your application requirements, features, and choose the best
                            framework for your needs.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">UI/UX Design</h3>
                        <p class="text-gray-600">Design intuitive user interfaces with modern layouts and user-friendly
                            controls.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Development & Integration</h3>
                        <p class="text-gray-600">Build the application with clean code, integrate features, and ensure
                            cross-platform compatibility.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Testing & Delivery</h3>
                        <p class="text-gray-600">Thorough testing, bug fixes, packaging, and delivery with complete
                            documentation.</p>
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
                        desktop application projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Excellent Electron desktop app for my inventory management project! The developer
                            created a beautiful cross-platform application with smooth performance. Works perfectly on Windows and Mac!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                T</div>
                            <div>
                                <div class="font-semibold text-gray-900">Tom R.</div>
                                <div class="text-sm text-gray-500">CS Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing WPF application in C#! The expert built a professional Windows desktop app with
                            great UI/UX and database integration. Clean code and well-documented. Highly recommend!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                K</div>
                            <div>
                                <div class="font-semibold text-gray-900">Katie M.</div>
                                <div class="text-sm text-gray-500">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Perfect JavaFX desktop application! The developer created an intuitive file manager with
                            modern design and excellent functionality. Code is organized and easy to understand!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                J</div>
                            <div>
                                <div class="font-semibold text-gray-900">James P.</div>
                                <div class="text-sm text-gray-500">Java Development Student</div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our desktop
                        application development service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Which desktop frameworks do you support?</h3>
                        <p class="text-gray-600">We work with all major desktop frameworks including Electron, WPF, WinForms,
                            JavaFX, Swing, Qt, Tkinter, PyQt, and more. We can help you choose the best framework for
                            your application requirements.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you create cross-platform desktop apps?
                        </h3>
                        <p class="text-gray-600">Absolutely! We specialize in cross-platform desktop applications using Electron,
                            Tauri, Qt, and .NET MAUI that work seamlessly on Windows, macOS, and Linux with a single codebase.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide UI/UX design for desktop apps?
                        </h3>
                        <p class="text-gray-600">Yes! We create modern, intuitive user interfaces with professional layouts,
                            responsive controls, and excellent user experience. We follow platform-specific design guidelines
                            for native look and feel.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you integrate databases with desktop applications?</h3>
                        <p class="text-gray-600">Yes, we integrate various databases including SQLite, MySQL, PostgreSQL, and MongoDB
                            with desktop applications. We implement proper data access layers and ensure secure database operations.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the application delivery?</h3>
                        <p class="text-gray-600">You'll receive complete source code, compiled executables, setup instructions,
                            user documentation, and deployment guides. For complex projects, we also provide installer packages
                            and update mechanisms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your Desktop Application?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their desktop app projects with our expert help.</p>
                <a href="{{ route('assignments.create') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Your Desktop App Project Today
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
