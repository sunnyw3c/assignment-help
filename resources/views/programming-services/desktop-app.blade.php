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
                            <a href="{{ route('order') }}"
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

        <!-- Comprehensive Content Section 1 -->
        <section class="py-32 bg-gradient-to-br from-white via-indigo-50/30 to-blue-50/30 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-indigo-100 to-blue-100 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-purple-100 to-indigo-100 rounded-full opacity-20 blur-3xl"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                🖥️ Build Desktop Apps That Matter
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Professional Desktop Application<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-blue-600">Development That Works</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Get expert help from developers who've built real desktop applications and understand native performance, cross-platform deployment, and modern UI frameworks.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Ever struggled with Electron app memory leaks eating 2GB of RAM? Or spent days fighting WPF data binding errors you don't understand?</strong> Desktop development isn't just HTML in a wrapper – you're managing native OS integrations, file system access, multi-threading without freezing the UI, inter-process communication, auto-updates, and making your app not look like a 1990s disaster. When your Electron app crashes on startup, your WPF XAML bindings mysteriously return null, or your Java Swing interface looks terrible on high-DPI displays, frustration mounts quickly. That's when you need developers who've shipped actual desktop applications that users rely on daily.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Picture submitting a desktop application that your professor calls "production quality."</strong> Your Electron app uses modern React with proper IPC communication between main and renderer processes, efficient memory management with worker threads for heavy operations, and native notifications that actually work. Or your .NET WPF application features proper MVVM architecture, responsive data binding with observable collections, smooth animations, and a professional-looking modern UI with Material Design. The window resizes properly, icons scale beautifully on 4K displays, file dialogs work correctly, and keyboard shortcuts respond instantly. That's what separates student projects from applications that feel native and polished – and it's exactly what you get from developers who've built 380+ desktop applications.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>We don't just write desktop code – we build complete native experiences.</strong> Need a cross-platform Electron app? You'll get proper main process architecture, secure IPC with context isolation, SQLite or IndexedDB for local storage, efficient file handling with streams, auto-update integration, menu bar/tray functionality, and bundled installers for Windows, Mac, and Linux. Building a Windows WPF application? Expect clean MVVM patterns with dependency injection, responsive layouts with proper data templates, asynchronous operations that don't freeze the UI, custom controls when needed, and professional styling with modern design principles. Working with Java Swing or Python Tkinter? We make them look modern with proper layouts, high-DPI scaling, and intuitive user flows.
                            </p>

                            <p class="text-gray-700 leading-relaxed">
                                <strong>Here's a real desktop dev crisis:</strong> Your desktop application is due in 4 days. The main window freezes when loading data. File saving corrupts randomly. The app crashes on other computers. Threading is a mess. You're not sure how to package it for distribution. Panic. You reach out. Within hours, a desktop expert analyzes your application, refactors the threading to use async/await properly, implements proper error handling, fixes the file I/O bugs, adds progress indicators, and provides platform-specific installers with proper signing. We don't just fix bugs – we explain why desktop applications need different architectures than web apps, why background workers matter, and how to debug native crashes. Understanding desktop development makes you versatile in ways web-only developers never are.
                            </p>
                        </div>

                        <!-- Feature Highlights -->
                        <div class="grid md:grid-cols-3 gap-6 mt-12">
                            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 border border-indigo-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">⚡</div>
                                <h3 class="font-bold text-gray-900 mb-2">Cross-Platform Apps</h3>
                                <p class="text-gray-600 text-sm">Electron, Tauri, Qt - run everywhere seamlessly</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">🪟</div>
                                <h3 class="font-bold text-gray-900 mb-2">Native Windows Apps</h3>
                                <p class="text-gray-600 text-sm">WPF, WinForms with modern MVVM architecture</p>
                            </div>
                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">☕</div>
                                <h3 class="font-bold text-gray-900 mb-2">Java & Python GUI</h3>
                                <p class="text-gray-600 text-sm">Swing, JavaFX, Tkinter, PyQt that looks modern</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Content Section 2 -->
        <section class="py-32 bg-gradient-to-br from-gray-50 via-blue-50/20 to-indigo-50/20 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-20 left-0 w-72 h-72 bg-gradient-to-br from-blue-200 to-indigo-200 rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute bottom-20 right-0 w-72 h-72 bg-gradient-to-tl from-indigo-200 to-purple-200 rounded-full opacity-10 blur-3xl"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                ⭐ Trusted by 380+ Desktop App Students
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Why Desktop Developers<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">Choose Our Services</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Real desktop development expertise, native performance optimization, and cross-platform deployment knowledge that actually ships.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Imagine your professor opening your desktop app and being impressed by how native and polished it feels.</strong> That happens when you work with developers who understand the fundamental differences between desktop and web development. We know that desktop apps need responsive UIs with background threading, efficient memory management for long-running processes, proper file system integration with error handling, native OS notifications and system tray functionality, and installer packages that work correctly. We've built inventory management systems in WPF, code editors in Electron, data analysis tools in Python Qt, and finance trackers in JavaFX. This real-world experience means we deliver applications that feel professional, not like JavaScript demos running in Chrome.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>What you actually receive goes way beyond basic desktop code.</strong> Open your delivery to find a complete application project with proper architecture (MVVM for WPF, modular design for Electron), well-structured code with separation of concerns, responsive UI layouts that adapt to different window sizes, proper asynchronous operations using async/await or background workers, comprehensive error handling and logging, settings persistence with configuration files, and platform-specific installers (MSI for Windows, DMG for Mac, DEB/RPM for Linux). Every component includes comments explaining why certain patterns are used – why we separated business logic from UI code, why threading matters for file operations, how to prevent memory leaks in long-running applications. This is education through professional-grade examples.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Speed without sacrificing desktop quality:</strong> It's 11 PM. Your desktop application is due tomorrow. The UI freezes when loading files. Cross-platform deployment is broken. You can't figure out how to make an installer. Background tasks crash the app. Complete panic mode. You message us. Within 30 minutes, a desktop development expert responds with a rescue plan. Within hours, you're testing a refactored application where file loading happens on background threads with progress feedback, the UI stays responsive during heavy operations, installers are generated for all platforms, and crashes are fixed with proper exception handling. We don't just patch issues – we restructure applications to follow desktop development best practices that prevent these problems in the first place.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Desktop development requires thinking differently from web development.</strong> We teach you why desktop apps need different architectures – why synchronous file operations freeze UIs, why proper threading matters more than in web apps, how to manage application state across different windows, why memory management is critical for long-running applications, and how to handle platform-specific quirks. You'll understand the trade-offs between Electron's ease of development and native apps' better performance, when to use WPF vs WinForms, and how to make cross-platform applications feel native on each OS. This knowledge makes you a more complete developer who can choose the right technology for each project.
                            </p>

                            <p class="text-gray-700 leading-relaxed">
                                <strong>The real value is mastering desktop development in an increasingly web-focused world.</strong> While everyone rushes to build web apps, desktop applications remain essential for tools that need offline functionality, direct hardware access, high performance, or rich native integrations. Our documentation doesn't just show code – it explains desktop development patterns, threading models, memory optimization strategies, and deployment best practices. Students return for more projects because they appreciate learning from developers who've shipped desktop applications that handle millions of files, run 24/7 without memory leaks, and provide desktop experiences that web apps simply can't match. With 380+ desktop applications built and 4.7/5 rating, we've proven that expert guidance helps you master a skill set that differentiates you in the job market.
                            </p>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid md:grid-cols-4 gap-6 mt-12">
                            <div class="text-center bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="text-4xl font-bold text-green-600 mb-2">4.7/5</div>
                                <div class="text-gray-600 text-sm font-medium">User Rating</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="text-4xl font-bold text-blue-600 mb-2">35min</div>
                                <div class="text-gray-600 text-sm font-medium">Avg Response</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-indigo-50 to-violet-50 rounded-xl p-6 border border-indigo-200">
                                <div class="text-4xl font-bold text-indigo-600 mb-2">380+</div>
                                <div class="text-gray-600 text-sm font-medium">Apps Built</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-purple-50 to-fuchsia-50 rounded-xl p-6 border border-purple-200">
                                <div class="text-4xl font-bold text-purple-600 mb-2">3 OS</div>
                                <div class="text-gray-600 text-sm font-medium">Cross-Platform</div>
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
                            <a href="{{ route('order') }}"
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
                            <a href="{{ route('order') }}"
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
                            <a href="{{ route('order') }}"
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
                <a href="{{ route('order') }}"
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
