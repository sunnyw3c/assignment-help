@extends('layouts.app')

@section('title', 'Web Development Projects - Expert Help Available')
@section('description',
    'Get professional help with web development projects. Expert developers available 24/7 for
    React, Vue, Angular, PHP, Laravel, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative hero-bg py-20 lg:py-28 overflow-hidden min-h-[600px] lg:min-h-[85vh] flex items-center">
            <!-- Enhanced Background Pattern -->
            <div class="absolute inset-0 opacity-5 md:opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,<svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.15\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');"></div>
            </div>

            <!-- Animated Background Dots -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-20 left-20 w-2 h-2 bg-purple-400 rounded-full animate-ping opacity-20 md:opacity-30"></div>
                <div class="absolute top-40 right-32 w-3 h-3 bg-blue-400 rounded-full animate-ping opacity-25 md:opacity-40" style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-16 w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping opacity-20 md:opacity-35" style="animation-delay: 1s;"></div>
                <div class="absolute top-60 left-1/3 w-2.5 h-2.5 bg-green-400 rounded-full animate-ping opacity-15 md:opacity-25" style="animation-delay: 1.5s;"></div>
                <div class="absolute bottom-20 right-20 w-2 h-2 bg-yellow-400 rounded-full animate-ping opacity-20 md:opacity-30" style="animation-delay: 2s;"></div>
            </div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden hidden lg:block">
                <!-- Floating React Component - Top Right -->
                <div class="absolute top-24 right-[5%] bg-gray-900/90 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-40 border border-gray-700/50 backdrop-blur-sm code-snippet transform rotate-6" style="animation-delay: 0s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">components/App.jsx</span>
                    </div>
                    <div class="text-blue-400">import</div>
                    <div>&lt;<span class="text-yellow-400">Hero</span> /&gt;</div>
                </div>

                <!-- Floating Modern CSS - Bottom Right -->
                <div class="absolute bottom-32 right-[8%] bg-gray-900/90 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-40 border border-gray-700/50 backdrop-blur-sm code-snippet transform -rotate-3" style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">styles.css</span>
                    </div>
                    <div><span class="text-yellow-400">.hero</span> {</div>
                    <div class="ml-2 text-orange-400">display: grid;</div>
                    <div>}</div>
                </div>

                <!-- Floating API Call - Top Middle-Right -->
                <div class="absolute top-32 right-[35%] bg-gray-900/90 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-30 border border-gray-700/50 backdrop-blur-sm code-snippet transform -rotate-6" style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">api.js</span>
                    </div>
                    <div><span class="text-blue-400">fetch</span>('/api/data')</div>
                </div>

                <!-- Floating Database Query - Bottom Middle-Right -->
                <div class="absolute bottom-24 right-[40%] bg-gray-900/90 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-30 border border-gray-700/50 backdrop-blur-sm code-snippet transform rotate-3" style="animation-delay: 3s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">models/User.php</span>
                    </div>
                    <div><span class="text-purple-400">User</span>::<span class="text-yellow-400">where</span>('active', <span class="text-green-400">true</span>)</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            🚀 Web Development Expert Help
                        </div>

                        <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Professional<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Web
                                Development</span><br>
                            Projects
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert help with your web development projects. From React and Vue to PHP and Laravel, our
                            experienced developers deliver high-quality solutions in record time.
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
                                <span class="font-semibold">4.9/5</span> rating
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-500 mr-1">✓</span>
                                <span>1200+ projects completed</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>2-24 hour delivery</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Enhanced Code Editor Mockup -->
                    <div class="relative transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-2xl shadow-2xl overflow-hidden border border-gray-700 backdrop-blur-sm">
                            <!-- Editor Header -->
                            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-gray-800 to-gray-700 border-b border-gray-600">
                                <div class="flex items-center space-x-3">
                                    <div class="flex space-x-2">
                                        <div class="w-3 h-3 bg-red-500 rounded-full hover:bg-red-400 transition-colors cursor-pointer"></div>
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full hover:bg-yellow-400 transition-colors cursor-pointer"></div>
                                        <div class="w-3 h-3 bg-green-500 rounded-full hover:bg-green-400 transition-colors cursor-pointer"></div>
                                    </div>
                                    <div class="ml-4 text-gray-300 text-sm font-mono flex items-center">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse"></span>
                                        web-project.js
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">React</div>
                                    <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">TypeScript</div>
                                </div>
                            </div>

                            <!-- Line Numbers and Code Content -->
                            <div class="flex">
                                <!-- Line Numbers -->
                                <div class="bg-gray-800 px-3 py-6 text-gray-500 font-mono text-xs leading-6 select-none">
                                    <div>1</div>
                                    <div>2</div>
                                    <div>3</div>
                                    <div>4</div>
                                    <div>5</div>
                                    <div>6</div>
                                    <div>7</div>
                                    <div>8</div>
                                    <div>9</div>
                                    <div>10</div>
                                    <div>11</div>
                                    <div>12</div>
                                </div>

                                <!-- Code Content -->
                                <div class="font-mono text-sm space-y-1 p-6 flex-1 leading-6">
                                    <div class="text-purple-400">// 🚀 Professional Web Development Solution</div>
                                    <div class="text-blue-400">const <span class="text-yellow-400">webProject</span> = {</div>
                                    <div class="text-gray-300 ml-4">framework: <span class="text-green-400">"React + Next.js"</span>,</div>
                                    <div class="text-gray-300 ml-4">responsive: <span class="text-green-400">true</span>,</div>
                                    <div class="text-gray-300 ml-4">delivery: <span class="text-orange-400">"2-24 hours"</span>,</div>
                                    <div class="text-gray-300 ml-4">quality: <span class="text-green-400">"Production Ready"</span></div>
                                    <div class="text-blue-400">};</div>
                                    <div class="text-gray-500"></div>
                                    <div class="text-purple-400">// ⭐ Expert Available 24/7 - 4.9/5 Rating</div>
                                    <div class="text-blue-400">function <span class="text-yellow-400">startProject</span>() {</div>
                                    <div class="text-gray-300 ml-4">return <span class="text-green-400">"Success Guaranteed! 💯"</span>;</div>
                                    <div class="text-blue-400">}</div>
                                </div>
                            </div>

                            <!-- Status Bar -->
                            <div class="bg-gradient-to-r from-gray-800 to-gray-700 px-4 py-2 border-t border-gray-600 flex items-center justify-between text-xs">
                                <div class="flex items-center space-x-4 text-gray-400">
                                    <span class="flex items-center">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1 animate-pulse"></span>
                                        Ready
                                    </span>
                                    <span>UTF-8</span>
                                    <span>JavaScript</span>
                                </div>
                                <div class="flex items-center space-x-2 text-gray-400">
                                    <span>Ln 12, Col 1</span>
                                    <span>Spaces: 4</span>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Floating Elements -->
                        <div class="absolute -top-6 -right-6 bg-gradient-to-r from-purple-500 to-blue-500 text-white rounded-xl shadow-xl p-3 animate-bounce transform rotate-12">
                            <div class="text-2xl">💻</div>
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-xl shadow-xl p-3 animate-pulse transform -rotate-12">
                            <div class="text-2xl">🚀</div>
                        </div>
                        <div class="absolute top-1/2 -right-8 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-full shadow-xl p-2 animate-ping transform">
                            <div class="text-lg">⚡</div>
                        </div>

                        <!-- Glowing Effects -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-purple-500/20 to-blue-500/20 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Content Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Professional Web Development Services</h2>
                        <p class="text-xl text-gray-600 leading-relaxed">Get expert help with your web development projects from experienced developers who understand modern frameworks, industry best practices, and cutting-edge technologies.</p>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <div class="grid md:grid-cols-2 gap-12 mb-16">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">🎯</span>
                                    Why Choose Our Web Development Help?
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    In today's digital landscape, having a robust web presence is crucial for success. Our team of expert web developers specializes in creating high-quality, scalable, and responsive web applications that meet modern industry standards. Whether you're a student working on your first project or a professional looking to enhance your skills, we provide comprehensive support tailored to your specific needs.
                                </p>
                                <p class="text-gray-600">
                                    We understand that web development can be challenging, especially when dealing with complex frameworks, database integrations, and responsive design requirements. Our experienced developers have worked on hundreds of projects ranging from simple static websites to complex full-stack applications, giving us the expertise to tackle any challenge you might face.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-3">🚀</span>
                                    Our Development Approach
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Our development process follows industry best practices and modern methodologies. We begin by thoroughly understanding your project requirements, analyzing the scope, and selecting the most appropriate technology stack. Whether you need a React single-page application, a Vue.js dashboard, an Angular enterprise solution, or a full-stack application with Laravel or Node.js backend, we have the expertise to deliver.
                                </p>
                                <p class="text-gray-600">
                                    Every project includes proper code documentation, clean architecture, responsive design implementation, and thorough testing. We ensure that your web application not only works flawlessly but also follows modern development standards that make it maintainable and scalable for future enhancements.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-purple-50 to-blue-50 rounded-2xl p-8 mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">What We Cover in Web Development</h3>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-orange-500 mr-2">⚛️</span>
                                        Frontend Development
                                    </h4>
                                    <p class="text-sm text-gray-600">React, Vue.js, Angular, HTML5, CSS3, JavaScript, TypeScript, responsive design, and modern UI frameworks.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-green-500 mr-2">🔧</span>
                                        Backend Development
                                    </h4>
                                    <p class="text-sm text-gray-600">Node.js, Laravel, Django, Express.js, API development, database design, and server-side logic implementation.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-blue-500 mr-2">🗄️</span>
                                        Database Integration
                                    </h4>
                                    <p class="text-sm text-gray-600">MySQL, PostgreSQL, MongoDB, Firebase, database optimization, and data modeling for web applications.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-purple-500 mr-2">🎨</span>
                                        UI/UX Implementation
                                    </h4>
                                    <p class="text-sm text-gray-600">Modern design implementation, user interface optimization, accessibility standards, and cross-browser compatibility.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-red-500 mr-2">🚀</span>
                                        Deployment & DevOps
                                    </h4>
                                    <p class="text-sm text-gray-600">Cloud deployment, Docker containerization, CI/CD pipelines, and production environment setup.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-yellow-500 mr-2">🧪</span>
                                        Testing & Quality
                                    </h4>
                                    <p class="text-sm text-gray-600">Unit testing, integration testing, code quality assurance, performance optimization, and debugging.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Industries We Serve</h3>
                            <p class="text-gray-600 mb-8 text-center">
                                Our web development expertise spans across various industries and project types. We've successfully delivered solutions for students, startups, small businesses, and enterprise clients.
                            </p>
                            <div class="grid md:grid-cols-2 gap-8">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">Educational Projects</h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>Student portfolio websites and personal projects</li>
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>University coursework and assignment submissions</li>
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>Capstone projects and final year dissertations</li>
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>Learning management systems and educational platforms</li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">Business Applications</h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>E-commerce platforms and online stores</li>
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>Customer management systems and dashboards</li>
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>Content management systems and blogs</li>
                                        <li class="flex items-start"><span class="text-green-500 mr-2 mt-1">✓</span>Real-time applications and progressive web apps</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gray-50 rounded-2xl p-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Why Students and Professionals Trust Us</h3>
                            <p class="text-gray-600 mb-6 text-center">
                                With over 1200+ successful web development projects completed and a 4.9/5 average rating, we've established ourselves as the go-to solution for quality web development assistance.
                            </p>
                            <div class="grid md:grid-cols-3 gap-6 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">98%</div>
                                    <div class="text-sm text-gray-600">Project Success Rate</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">2-24hr</div>
                                    <div class="text-sm text-gray-600">Average Delivery Time</div>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">24/7</div>
                                    <div class="text-sm text-gray-600">Expert Availability</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-20 gradient-bg">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert developers work with the latest technologies and frameworks to build modern, scalable web applications.</p>
                    <div class="mt-6 flex justify-center space-x-4">
                        <button id="prevBtn" class="nav-button bg-purple-600 hover:bg-purple-700 text-white p-3 rounded-full shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button id="nextBtn" class="nav-button bg-purple-600 hover:bg-purple-700 text-white p-3 rounded-full shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Technology Slider -->
                <div class="relative overflow-hidden rounded-2xl">
                    <div id="techSlider" class="flex transition-transform duration-700 ease-out will-change-transform">
                        <!-- Frontend Technologies -->
                        <div class="flex-none w-full">
                            <h3 class="text-2xl font-bold text-center text-gray-900 mb-8">Frontend Technologies</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">⚛️</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">React</h3>
                                        <p class="text-xs text-gray-500 mt-1">UI Library</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"green-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🟢</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Vue.js</h3>
                                        <p class="text-xs text-gray-500 mt-1">Progressive Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"red-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🅰️</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Angular</h3>
                                        <p class="text-xs text-gray-500 mt-1">Full Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"yellow-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">⚡</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">JavaScript</h3>
                                        <p class="text-xs text-gray-500 mt-1">Core Language</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"blue-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">📘</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">TypeScript</h3>
                                        <p class="text-xs text-gray-500 mt-1">Typed JavaScript</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"purple-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🎨</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Tailwind</h3>
                                        <p class="text-xs text-gray-500 mt-1">CSS Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"indigo-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🌐</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Next.js</h3>
                                        <p class="text-xs text-gray-500 mt-1">React Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"green-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🍃</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Nuxt.js</h3>
                                        <p class="text-xs text-gray-500 mt-1">Vue Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"pink-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">💅</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Sass/SCSS</h3>
                                        <p class="text-xs text-gray-500 mt-1">CSS Preprocessor</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"orange-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🔥</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Vite</h3>
                                        <p class="text-xs text-gray-500 mt-1">Build Tool</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"cyan-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">📦</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Webpack</h3>
                                        <p class="text-xs text-gray-500 mt-1">Module Bundler</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"teal-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🎭</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Redux</h3>
                                        <p class="text-xs text-gray-500 mt-1">State Management</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Backend Technologies -->
                        <div class="flex-none w-full">
                            <h3 class="text-2xl font-bold text-center text-gray-900 mb-8">Backend Technologies</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"green-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🟢</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Node.js</h3>
                                        <p class="text-xs text-gray-500 mt-1">JavaScript Runtime</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"purple-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🐘</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">PHP</h3>
                                        <p class="text-xs text-gray-500 mt-1">Server Language</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"red-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🔧</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Laravel</h3>
                                        <p class="text-xs text-gray-500 mt-1">PHP Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"gray-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">⚡</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Express.js</h3>
                                        <p class="text-xs text-gray-500 mt-1">Node Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"green-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🐍</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Django</h3>
                                        <p class="text-xs text-gray-500 mt-1">Python Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"blue-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🌪️</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">FastAPI</h3>
                                        <p class="text-xs text-gray-500 mt-1">Python API</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"orange-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">☕</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Spring Boot</h3>
                                        <p class="text-xs text-gray-500 mt-1">Java Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"purple-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">💎</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Ruby on Rails</h3>
                                        <p class="text-xs text-gray-500 mt-1">Ruby Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"indigo-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🔷</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">ASP.NET</h3>
                                        <p class="text-xs text-gray-500 mt-1">C# Framework</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"cyan-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🚀</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">GraphQL</h3>
                                        <p class="text-xs text-gray-500 mt-1">Query Language</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"gray-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🔌</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">REST API</h3>
                                        <p class="text-xs text-gray-500 mt-1">API Architecture</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"teal-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🌐</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Serverless</h3>
                                        <p class="text-xs text-gray-500 mt-1">Cloud Functions</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Database & DevOps -->
                        <div class="flex-none w-full">
                            <h3 class="text-2xl font-bold text-center text-gray-900 mb-8">Database & DevOps</h3>
                            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"blue-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🐬</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">MySQL</h3>
                                        <p class="text-xs text-gray-500 mt-1">Relational DB</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"blue-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🐘</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">PostgreSQL</h3>
                                        <p class="text-xs text-gray-500 mt-1">Advanced SQL</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"green-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🍃</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">MongoDB</h3>
                                        <p class="text-xs text-gray-500 mt-1">NoSQL Database</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"orange-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🔥</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Firebase</h3>
                                        <p class="text-xs text-gray-500 mt-1">Google Cloud</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"red-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">⚡</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Redis</h3>
                                        <p class="text-xs text-gray-500 mt-1">In-Memory DB</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"blue-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🐳</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Docker</h3>
                                        <p class="text-xs text-gray-500 mt-1">Containerization</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"blue-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">☸️</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Kubernetes</h3>
                                        <p class="text-xs text-gray-500 mt-1">Orchestration</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"orange-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">☁️</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">AWS</h3>
                                        <p class="text-xs text-gray-500 mt-1">Cloud Platform</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"blue-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">⚡</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Azure</h3>
                                        <p class="text-xs text-gray-500 mt-1">Microsoft Cloud</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"yellow-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🔧</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">CI/CD</h3>
                                        <p class="text-xs text-gray-500 mt-1">Automation</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"gray-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">🔍</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Git</h3>
                                        <p class="text-xs text-gray-500 mt-1">Version Control</p>
                                    </div>
                                </div>
                                <div class="text-center tech-card cursor-pointer slide-in">
                                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100"green-50 transition-all duration-300 border border-gray-100">
                                        <div class="tech-icon text-5xl mb-3">📊</div>
                                        <h3 class="font-semibold text-gray-900 text-sm">Monitoring</h3>
                                        <p class="text-xs text-gray-500 mt-1">Performance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Indicators -->
                <div class="flex justify-center mt-8 space-x-2">
                    <button class="slide-indicator w-3 h-3 rounded-full bg-purple-600 transition-all duration-200" data-slide="0"></button>
                    <button class="slide-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-purple-400 transition-all duration-200" data-slide="1"></button>
                    <button class="slide-indicator w-3 h-3 rounded-full bg-gray-300 hover:bg-purple-400 transition-all duration-200" data-slide="2"></button>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on project
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic Web Project</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $25</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple HTML/CSS/JS
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Responsive Design
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    2-6 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic documentation
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Project</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $75</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    React/Vue/Angular
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    API Integration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    6-24 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complete documentation
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Testing included
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Full-Stack Project</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $150</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complete web application
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Database integration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    1-3 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Deployment assistance
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Post-project support
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">How It Works</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Simple, straightforward process to get your web
                        development project completed.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Submit Project</h3>
                        <p class="text-gray-600">Tell us about your web development project requirements and deadline.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Expert Assignment</h3>
                        <p class="text-gray-600">We match you with a web development expert who specializes in your
                            technology stack.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Development</h3>
                        <p class="text-gray-600">Your expert works on your project, keeping you updated throughout the
                            process.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery</h3>
                        <p class="text-gray-600">Receive your completed project with documentation and post-project
                            support.</p>
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
                        web development projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing work on my React project! The developer created a beautiful,
                            responsive web app that exceeded my expectations. Great communication throughout."</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                S</div>
                            <div>
                                <div class="font-semibold text-gray-900">Sarah M.</div>
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
                        <p class="text-gray-600 mb-6">"Needed help with a complex Laravel application. The expert delivered
                            a fully functional web app with clean code and excellent documentation."</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                M</div>
                            <div>
                                <div class="font-semibold text-gray-900">Michael R.</div>
                                <div class="text-sm text-gray-500">Web Development Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"The Vue.js project was completed ahead of schedule. Professional
                            work with modern best practices. Highly recommend for any web development needs!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                E</div>
                            <div>
                                <div class="font-semibold text-gray-900">Emily K.</div>
                                <div class="text-sm text-gray-500">Software Engineering Student</div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our web
                        development help service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What web technologies do you support?</h3>
                        <p class="text-gray-600">We support all major web technologies including React, Vue.js, Angular,
                            JavaScript, PHP, Laravel, Node.js, HTML5, CSS3, and many more. Our experts have experience with
                            both frontend and backend technologies.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">How quickly can you complete my project?</h3>
                        <p class="text-gray-600">Most web development projects are completed within 2-24 hours, depending
                            on complexity. Larger full-stack applications may take 1-3 days. We always work within your
                            deadline requirements.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide responsive designs?</h3>
                        <p class="text-gray-600">Yes! All our web development projects include responsive design by
                            default. Your website or application will work perfectly on desktop, tablet, and mobile devices.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with existing projects or only
                            new ones?</h3>
                        <p class="text-gray-600">We can help with both new projects from scratch and improvements to
                            existing web applications. This includes bug fixes, feature additions, code refactoring, and
                            performance optimization.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the delivery?</h3>
                        <p class="text-gray-600">You'll receive complete source code, documentation, setup instructions,
                            and any necessary configuration files. For larger projects, we also provide deployment
                            assistance and post-project support.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Start Your Web Development Project?
                </h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join thousands of students who have successfully
                    completed their web development projects with our expert help.</p>
                <a href="{{ route('assignments.create') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Get Started Today
                </a>
            </div>
        </section>

        <!-- Industry Trends & Best Practices Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-6xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Industry Trends & Best Practices</h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Stay ahead of the curve with our deep understanding of current web development trends, emerging technologies, and industry best practices that ensure your project meets modern standards.</p>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-12 mb-16">
                        <!-- Current Web Development Trends -->
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span class="bg-gradient-to-r from-purple-500 to-blue-500 text-white p-3 rounded-lg mr-4">📈</span>
                                Current Web Development Trends
                            </h3>
                            <div class="space-y-6">
                                <div class="bg-gradient-to-r from-purple-50 to-blue-50 rounded-xl p-6 border border-purple-100">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                        <span class="text-purple-600 mr-2">⚛️</span>
                                        Component-Based Architecture
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">Modern web applications leverage component-based frameworks like React, Vue.js, and Angular to build scalable, maintainable user interfaces. Our developers excel at creating reusable components that improve development efficiency and code quality while ensuring consistent user experiences across your application.</p>
                                </div>

                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                        <span class="text-green-600 mr-2">🚀</span>
                                        JAMstack & Static Site Generation
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">The JAMstack architecture (JavaScript, APIs, and Markup) represents the future of web development, offering improved performance, security, and developer experience. We utilize tools like Next.js, Nuxt.js, and Gatsby to build fast, secure websites that load instantly and rank higher in search engines.</p>
                                </div>

                                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                        <span class="text-blue-600 mr-2">🔄</span>
                                        Serverless & Edge Computing
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">Serverless functions and edge computing are revolutionizing how we deploy and scale web applications. Our team implements serverless architectures using AWS Lambda, Vercel Functions, and Netlify Functions to create highly scalable, cost-effective solutions that automatically handle traffic spikes.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Modern Development Practices -->
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span class="bg-gradient-to-r from-orange-500 to-red-500 text-white p-3 rounded-lg mr-4">⚡</span>
                                Modern Development Practices
                            </h3>
                            <div class="space-y-6">
                                <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-xl p-6 border border-orange-100">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                        <span class="text-orange-600 mr-2">🛠️</span>
                                        DevOps & CI/CD Integration
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">We implement comprehensive DevOps practices including automated testing, continuous integration, and deployment pipelines. Using tools like GitHub Actions, GitLab CI, and Docker, we ensure your code is automatically tested, built, and deployed with zero downtime, maintaining high code quality and rapid delivery cycles.</p>
                                </div>

                                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 border border-indigo-100">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                        <span class="text-indigo-600 mr-2">🔒</span>
                                        Security-First Development
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">Security is integrated into every stage of our development process. We implement OWASP best practices, conduct security audits, use secure authentication methods like OAuth 2.0 and JWT, and ensure all data transmission is encrypted. Our developers stay updated on the latest security vulnerabilities and mitigation strategies.</p>
                                </div>

                                <div class="bg-gradient-to-r from-cyan-50 to-teal-50 rounded-xl p-6 border border-cyan-100">
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3 flex items-center">
                                        <span class="text-cyan-600 mr-2">📱</span>
                                        Mobile-First & Progressive Web Apps
                                    </h4>
                                    <p class="text-gray-600 leading-relaxed">With mobile traffic dominating web usage, we prioritize mobile-first design and Progressive Web App (PWA) features. Our applications work seamlessly across all devices, offer offline functionality, push notifications, and app-like experiences that keep users engaged while maintaining excellent performance on slower networks.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Performance & Optimization -->
                    <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-8 mb-12">
                        <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center flex items-center justify-center">
                            <span class="bg-gradient-to-r from-gray-700 to-gray-900 text-white p-3 rounded-lg mr-4">⚡</span>
                            Performance Optimization & Core Web Vitals
                        </h3>
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="text-center">
                                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 h-full">
                                    <div class="text-4xl mb-4">🚀</div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">Speed Optimization</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">We optimize every aspect of your web application for speed, including image optimization, code splitting, lazy loading, and CDN implementation. Our goal is to achieve sub-3-second load times and perfect Core Web Vitals scores, directly impacting your SEO rankings and user experience.</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 h-full">
                                    <div class="text-4xl mb-4">♿</div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">Accessibility Standards</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">We ensure your web application meets WCAG 2.1 AA accessibility standards, making it usable for everyone including users with disabilities. This includes proper semantic HTML, keyboard navigation, screen reader compatibility, and color contrast optimization for inclusive user experiences.</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200 h-full">
                                    <div class="text-4xl mb-4">🔍</div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-3">SEO Excellence</h4>
                                    <p class="text-gray-600 text-sm leading-relaxed">Every project includes comprehensive SEO optimization with proper meta tags, structured data, sitemap generation, and social media integration. We implement technical SEO best practices that help your website rank higher in search results and attract more organic traffic.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Technology Stack Evolution -->
                    <div class="text-center mb-12">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Technology Stack Evolution</h3>
                        <p class="text-gray-600 leading-relaxed mb-8 max-w-4xl mx-auto">
                            The web development landscape evolves rapidly, and staying current with the latest technologies is crucial for project success. Our developers continuously update their skills and adapt to new tools, frameworks, and methodologies to ensure your project benefits from the latest innovations while maintaining stability and reliability.
                        </p>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                                <div class="text-3xl mb-3">🔄</div>
                                <h4 class="font-semibold text-gray-900 mb-2">Continuous Learning</h4>
                                <p class="text-sm text-gray-600">Our team stays current with emerging technologies and industry updates</p>
                            </div>
                            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                                <div class="text-3xl mb-3">🧪</div>
                                <h4 class="font-semibold text-gray-900 mb-2">Innovation Testing</h4>
                                <p class="text-sm text-gray-600">We evaluate and integrate new tools that enhance development efficiency</p>
                            </div>
                            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                                <div class="text-3xl mb-3">📊</div>
                                <h4 class="font-semibold text-gray-900 mb-2">Performance Monitoring</h4>
                                <p class="text-sm text-gray-600">Real-time analytics and monitoring ensure optimal application performance</p>
                            </div>
                            <div class="bg-white rounded-lg p-6 shadow-sm border border-gray-200">
                                <div class="text-3xl mb-3">🔮</div>
                                <h4 class="font-semibold text-gray-900 mb-2">Future-Proofing</h4>
                                <p class="text-sm text-gray-600">Architecture designed to adapt to future technological advancements</p>
                            </div>
                        </div>
                    </div>

                    <!-- Call to Action for This Section -->
                    <div class="text-center bg-gradient-to-r from-purple-600 to-blue-600 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-4">Ready to Build with Modern Technologies?</h3>
                        <p class="text-purple-100 mb-6 max-w-2xl mx-auto">
                            Let our expert developers create a cutting-edge web application that leverages the latest technologies and follows industry best practices for optimal performance, security, and user experience.
                        </p>
                        <a href="{{ route('assignments.create') }}"
                           class="inline-block bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                            Start Your Modern Web Project
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
            }
            25% {
                transform: translateY(-15px) rotate(1deg) scale(1.02);
            }
            50% {
                transform: translateY(-5px) rotate(-0.5deg) scale(1.01);
            }
            75% {
                transform: translateY(-10px) rotate(0.5deg) scale(1.02);
            }
        }

        @keyframes float-delayed {
            0%, 100% {
                transform: translateY(0px) rotate(0deg) scale(1);
            }
            25% {
                transform: translateY(12px) rotate(-1deg) scale(1.01);
            }
            50% {
                transform: translateY(-8px) rotate(1deg) scale(1.02);
            }
            75% {
                transform: translateY(5px) rotate(-0.5deg) scale(1.01);
            }
        }

        @keyframes glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(168, 85, 247, 0.4), 0 0 40px rgba(168, 85, 247, 0.2);
            }
            50% {
                box-shadow: 0 0 30px rgba(59, 130, 246, 0.6), 0 0 60px rgba(59, 130, 246, 0.3);
            }
        }

        @keyframes code-typing {
            0% { width: 0; }
            100% { width: 100%; }
        }

        @keyframes gradient-shift {
            0%, 100% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
        }

        .animate-float {
            animation: float 8s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 10s ease-in-out infinite;
        }

        .animate-glow {
            animation: glow 3s ease-in-out infinite;
        }

        .code-section {
            background: linear-gradient(-45deg, #1f2937, #111827, #1f2937, #0f172a);
            background-size: 400% 400%;
            animation: gradient-shift 8s ease infinite;
        }

        .code-snippet {
            transition: all 0.3s ease;
        }

        .code-snippet:hover {
            transform: scale(1.05) rotate(2deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .hero-bg {
            background: linear-gradient(-45deg, #f3e8ff, #dbeafe, #e0e7ff, #f0f9ff);
            background-size: 400% 400%;
            animation: gradient-shift 15s ease infinite;
        }

        /* Typing effect for code */
        .typing-effect {
            overflow: hidden;
            border-right: 2px solid #10b981;
            white-space: nowrap;
            animation: code-typing 3s steps(40, end) infinite alternate;
        }

        /* Glitch effect for tech elements */
        @keyframes glitch {
            0%, 100% { transform: translate(0); }
            10% { transform: translate(-1px, -1px); }
            20% { transform: translate(1px, 1px); }
            30% { transform: translate(-1px, 1px); }
            40% { transform: translate(1px, -1px); }
        }

        .glitch {
            animation: glitch 0.3s infinite;
        }

        /* Enhanced smooth transitions */
        .smooth-transition {
            transition: all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            will-change: transform;
        }

        .ultra-smooth {
            transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* Technology card animations */
        .tech-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-origin: center;
            backface-visibility: hidden;
            perspective: 1000px;
        }

        .tech-card:hover {
            transform: translateY(-8px) scale(1.05);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15), 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .tech-icon {
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .tech-card:hover .tech-icon {
            transform: scale(1.2) rotate(5deg);
        }

        /* Slide fade in animation */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in {
            animation: slideIn 0.6s ease-out forwards;
        }

        /* Staggered animation for cards */
        .tech-card:nth-child(1) { animation-delay: 0.1s; }
        .tech-card:nth-child(2) { animation-delay: 0.15s; }
        .tech-card:nth-child(3) { animation-delay: 0.2s; }
        .tech-card:nth-child(4) { animation-delay: 0.25s; }
        .tech-card:nth-child(5) { animation-delay: 0.3s; }
        .tech-card:nth-child(6) { animation-delay: 0.35s; }
        .tech-card:nth-child(7) { animation-delay: 0.4s; }
        .tech-card:nth-child(8) { animation-delay: 0.45s; }
        .tech-card:nth-child(9) { animation-delay: 0.5s; }
        .tech-card:nth-child(10) { animation-delay: 0.55s; }
        .tech-card:nth-child(11) { animation-delay: 0.6s; }
        .tech-card:nth-child(12) { animation-delay: 0.65s; }

        /* Enhanced button animations */
        .nav-button {
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform-origin: center;
        }

        .nav-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(139, 92, 246, 0.4);
        }

        .nav-button:active {
            transform: scale(0.95);
        }

        /* Indicator smooth transitions */
        .slide-indicator {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .slide-indicator:hover {
            transform: scale(1.3);
        }

        .slide-indicator.active {
            transform: scale(1.2);
        }

        /* Smooth gradient background animation */
        .gradient-bg {
            background: linear-gradient(-45deg, #f9fafb, #e0e7ff, #ddd6fe, #fdf2f8);
            background-size: 400% 400%;
            animation: gradientShift 12s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Mobile-specific enhancements for code background */
        @media (max-width: 768px) {
            .code-snippet {
                transform: scale(0.8);
                opacity: 0.4 !important;
            }

            .hero-bg {
                background: linear-gradient(-45deg, #f8fafc, #e2e8f0, #cbd5e1, #f1f5f9);
            }

            /* Hide some floating elements on very small screens */
            .code-snippet:nth-child(n+4) {
                display: none;
            }

            /* Adjust positioning for remaining elements */
            .code-snippet:nth-child(1) {
                top: 2rem;
                left: 0.5rem;
                max-width: 12rem;
            }

            .code-snippet:nth-child(2) {
                top: 6rem;
                right: 0.5rem;
                max-width: 12rem;
            }

            .code-snippet:nth-child(3) {
                bottom: 4rem;
                left: 1rem;
                max-width: 12rem;
            }
        }

        /* Extra small screens */
        @media (max-width: 480px) {
            .code-snippet {
                opacity: 0.25 !important;
                font-size: 0.7rem;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('techSlider');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const indicators = document.querySelectorAll('.slide-indicator');

            let currentSlide = 0;
            const totalSlides = 3;
            let autoSlideInterval;
            let isAutoSliding = true;
            let isTransitioning = false;

            // Enhanced smooth transition function
            function goToSlide(slideIndex, smooth = true) {
                if (isTransitioning) return;

                isTransitioning = true;
                currentSlide = slideIndex;

                // Add ultra-smooth class for better easing
                slider.classList.add('ultra-smooth');

                const translateX = -slideIndex * 100;
                slider.style.transform = `translateX(${translateX}%)`;

                // Update indicators with smooth transitions
                indicators.forEach((indicator, index) => {
                    indicator.classList.remove('active');
                    if (index === slideIndex) {
                        indicator.classList.remove('bg-gray-300');
                        indicator.classList.add('bg-purple-600', 'active');
                    } else {
                        indicator.classList.remove('bg-purple-600', 'active');
                        indicator.classList.add('bg-gray-300');
                    }
                });

                // Trigger staggered card animations for the current slide
                setTimeout(() => {
                    animateCurrentSlideCards(slideIndex);
                }, 100);

                // Reset transition lock
                setTimeout(() => {
                    isTransitioning = false;
                    slider.classList.remove('ultra-smooth');
                }, 800);
            }

            // Animate cards in current slide with staggered effect
            function animateCurrentSlideCards(slideIndex) {
                const currentSlideElement = slider.children[slideIndex];
                const cards = currentSlideElement.querySelectorAll('.tech-card');

                cards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        card.style.transition = `all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275)`;
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 50);
                });
            }

            // Next slide function
            function nextSlide() {
                currentSlide = (currentSlide + 1) % totalSlides;
                goToSlide(currentSlide);
            }

            // Previous slide function
            function prevSlide() {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
                goToSlide(currentSlide);
            }

            // Start auto-slide with smoother timing
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, 6000); // Slightly longer for better UX
                isAutoSliding = true;
            }

            // Stop auto-slide
            function stopAutoSlide() {
                clearInterval(autoSlideInterval);
                isAutoSliding = false;
            }

            // Enhanced button interactions
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (isTransitioning) return;

                stopAutoSlide();
                nextSlide();

                // Add button feedback
                nextBtn.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    nextBtn.style.transform = '';
                }, 150);

                setTimeout(startAutoSlide, 8000); // Resume auto-slide after 8 seconds
            });

            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                if (isTransitioning) return;

                stopAutoSlide();
                prevSlide();

                // Add button feedback
                prevBtn.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    prevBtn.style.transform = '';
                }, 150);

                setTimeout(startAutoSlide, 8000); // Resume auto-slide after 8 seconds
            });

            // Enhanced indicator interactions
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (isTransitioning || index === currentSlide) return;

                    stopAutoSlide();
                    goToSlide(index);
                    setTimeout(startAutoSlide, 8000); // Resume auto-slide after 8 seconds
                });

                // Add hover effects
                indicator.addEventListener('mouseenter', () => {
                    if (index !== currentSlide) {
                        indicator.style.transform = 'scale(1.3)';
                        indicator.style.backgroundColor = '#a855f7';
                    }
                });

                indicator.addEventListener('mouseleave', () => {
                    if (index !== currentSlide) {
                        indicator.style.transform = 'scale(1)';
                        indicator.style.backgroundColor = '#d1d5db';
                    }
                });
            });

            // Pause auto-slide on hover
            slider.addEventListener('mouseenter', stopAutoSlide);
            slider.addEventListener('mouseleave', () => {
                if (!isAutoSliding) {
                    startAutoSlide();
                }
            });

            // Touch/swipe support for mobile
            let startX = 0;
            let startY = 0;
            let isDragging = false;

            slider.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                startY = e.touches[0].clientY;
                isDragging = true;
                stopAutoSlide();
            });

            slider.addEventListener('touchmove', (e) => {
                if (!isDragging) return;
                e.preventDefault();
            });

            slider.addEventListener('touchend', (e) => {
                if (!isDragging) return;
                isDragging = false;

                const endX = e.changedTouches[0].clientX;
                const endY = e.changedTouches[0].clientY;
                const diffX = startX - endX;
                const diffY = startY - endY;

                // Check if horizontal swipe is more significant than vertical
                if (Math.abs(diffX) > Math.abs(diffY) && Math.abs(diffX) > 50) {
                    if (diffX > 0) {
                        nextSlide(); // Swipe left - next slide
                    } else {
                        prevSlide(); // Swipe right - previous slide
                    }
                }

                setTimeout(startAutoSlide, 10000); // Resume auto-slide after 10 seconds
            });

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    stopAutoSlide();
                    prevSlide();
                    setTimeout(startAutoSlide, 10000);
                } else if (e.key === 'ArrowRight') {
                    stopAutoSlide();
                    nextSlide();
                    setTimeout(startAutoSlide, 10000);
                }
            });

            // Initialize the slider with smooth animations
            function initializeSlider() {
                // Set initial slide
                goToSlide(0, false);

                // Animate initial cards
                setTimeout(() => {
                    animateCurrentSlideCards(0);
                }, 300);

                // Start auto-slide
                setTimeout(startAutoSlide, 2000);
            }

            // Enhanced tech card interactions
            document.querySelectorAll('.tech-card').forEach((card, index) => {
                card.addEventListener('click', () => {
                    // Add click effect with bounce
                    card.style.transform = 'scale(0.95) translateY(-5px)';
                    setTimeout(() => {
                        card.style.transform = '';
                    }, 200);
                });

                // Add subtle parallax effect on mouse move
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const centerX = rect.left + rect.width / 2;
                    const centerY = rect.top + rect.height / 2;
                    const deltaX = (e.clientX - centerX) * 0.1;
                    const deltaY = (e.clientY - centerY) * 0.1;

                    const icon = card.querySelector('.tech-icon');
                    if (icon) {
                        icon.style.transform = `translate(${deltaX}px, ${deltaY}px) scale(1.1)`;
                    }
                });

                card.addEventListener('mouseleave', () => {
                    const icon = card.querySelector('.tech-icon');
                    if (icon) {
                        icon.style.transform = '';
                    }
                });
            });

            // Performance optimization - use RAF for smooth animations
            let rafId;
            function smoothUpdate() {
                rafId = requestAnimationFrame(smoothUpdate);
            }
            smoothUpdate();

            // Initialize everything
            initializeSlider();
        });
    </script>
@endsection
