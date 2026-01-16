@extends('layouts.app')

@section('title', 'Python Programming Help - Expert Django & Python Development')
@section('description',
    'Get professional Python programming help from expert developers. 24/7 support for Django, Flask, data science, machine learning, automation, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative hero-bg py-24 overflow-hidden min-h-screen flex items-center">
            <!-- Enhanced Background Pattern -->
            <div class="absolute inset-0 opacity-5 md:opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,<svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.15\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');"></div>
            </div>

            <!-- Animated Background Dots -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-20 left-20 w-2 h-2 bg-blue-400 rounded-full animate-ping opacity-20 md:opacity-30"></div>
                <div class="absolute top-40 right-32 w-3 h-3 bg-yellow-400 rounded-full animate-ping opacity-25 md:opacity-40" style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-16 w-1.5 h-1.5 bg-green-400 rounded-full animate-ping opacity-20 md:opacity-35" style="animation-delay: 1s;"></div>
                <div class="absolute top-60 left-1/3 w-2.5 h-2.5 bg-cyan-400 rounded-full animate-ping opacity-15 md:opacity-25" style="animation-delay: 1.5s;"></div>
                <div class="absolute bottom-20 right-20 w-2 h-2 bg-teal-400 rounded-full animate-ping opacity-20 md:opacity-30" style="animation-delay: 2s;"></div>
            </div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Floating Django View -->
                <div class="absolute top-16 left-8 bg-gradient-to-r from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet animate-glow">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">views.py</span>
                    </div>
                    <div><span class="text-purple-400">from</span> django.http <span class="text-purple-400">import</span> JsonResponse</div>
                    <div class="text-blue-400">def <span class="text-yellow-400">api_view</span>(request):</div>
                    <div class="ml-4">data = {<span class="text-orange-400">'status'</span>: <span class="text-cyan-400">'success'</span>}</div>
                    <div class="ml-4"><span class="text-purple-400">return</span> <span class="text-yellow-400">JsonResponse</span>(data)</div>
                </div>

                <!-- Floating Flask Route -->
                <div class="absolute top-28 right-12 bg-gradient-to-r from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">app.py</span>
                    </div>
                    <div><span class="text-purple-400">@app</span>.<span class="text-yellow-400">route</span>(<span class="text-green-400">'/api'</span>)</div>
                    <div><span class="text-blue-400">def</span> <span class="text-yellow-400">api</span>():</div>
                    <div class="ml-4"><span class="text-purple-400">return</span> jsonify({</div>
                    <div class="ml-8"><span class="text-orange-400">'message'</span>: <span class="text-green-400">'Hello World'</span></div>
                    <div class="ml-4">})</div>
                </div>

                <!-- Floating Data Science Code -->
                <div class="absolute bottom-24 left-1/4 bg-gradient-to-r from-gray-900 to-gray-800 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">analysis.py</span>
                    </div>
                    <div><span class="text-purple-400">import</span> pandas <span class="text-purple-400">as</span> pd</div>
                    <div>df = pd.<span class="text-yellow-400">read_csv</span>(<span class="text-green-400">'data.csv'</span>)</div>
                    <div>result = df.<span class="text-yellow-400">groupby</span>(<span class="text-orange-400">'category'</span>)</div>
                    <div class="ml-4">.<span class="text-yellow-400">mean</span>()</div>
                </div>

                <!-- Floating Requirements -->
                <div class="absolute top-72 right-8 bg-gradient-to-r from-gray-900 to-gray-800 text-orange-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">requirements.txt</span>
                    </div>
                    <div>django==<span class="text-yellow-400">5.0</span></div>
                    <div>flask==<span class="text-yellow-400">3.0.0</span></div>
                    <div>pandas==<span class="text-yellow-400">2.1.0</span></div>
                    <div>numpy==<span class="text-yellow-400">1.26.0</span></div>
                    <div>requests==<span class="text-yellow-400">2.31.0</span></div>
                </div>

                <!-- Floating Class Definition -->
                <div class="absolute bottom-16 right-1/3 bg-gradient-to-r from-gray-900 to-gray-800 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet" style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">models.py</span>
                    </div>
                    <div class="text-blue-400">class <span class="text-yellow-400">User</span>:</div>
                    <div class="ml-4"><span class="text-blue-400">def</span> <span class="text-yellow-400">__init__</span>(<span class="text-orange-400">self</span>, name):</div>
                    <div class="ml-8"><span class="text-orange-400">self</span>.name = name</div>
                    <div class="ml-4"><span class="text-blue-400">def</span> <span class="text-yellow-400">greet</span>(<span class="text-orange-400">self</span>):</div>
                    <div class="ml-8"><span class="text-purple-400">return</span> <span class="text-green-400">f'Hello {self.name}'</span></div>
                </div>

                <!-- Floating List Comprehension -->
                <div class="absolute top-96 left-16 bg-gradient-to-r from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet" style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">utils.py</span>
                    </div>
                    <div class="text-gray-300">numbers = [<span class="text-cyan-400">1, 2, 3, 4, 5</span>]</div>
                    <div class="text-gray-300">squares = [x<span class="text-orange-400">**</span><span class="text-cyan-400">2</span> <span class="text-purple-400">for</span> x <span class="text-purple-400">in</span> numbers]</div>
                    <div class="text-gray-500"># Pythonic & elegant!</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            🐍 Python Programming Expert Help
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Professional<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-green-600">Python Development</span><br>
                            Services
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert help with Python programming projects. From Django and Flask to data science and machine learning, our experienced developers deliver high-quality solutions in record time.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('assignments.create') }}"
                                class="bg-gradient-to-r from-blue-600 to-green-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-blue-700 hover:to-green-700 transition-all duration-200 shadow-lg hover:shadow-xl text-center">
                                Get Help Now
                            </a>
                            <a href="#pricing"
                                class="border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition-all duration-200 text-center">
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
                                <span>1500+ projects completed</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>2-48 hour delivery</span>
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
                                        src/app.py
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">Python 3.12</div>
                                    <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">Django</div>
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
                                    <div class="text-purple-400"># 🚀 Professional Python Development Solution</div>
                                    <div><span class="text-purple-400">from</span> <span class="text-cyan-400">django.views</span> <span class="text-purple-400">import</span> View</div>
                                    <div class="text-gray-300"></div>
                                    <div class="text-blue-400">class <span class="text-yellow-400">DataAPIView</span>(<span class="text-green-400">View</span>):</div>
                                    <div class="text-gray-300 ml-4"><span class="text-blue-400">def</span> <span class="text-yellow-400">get</span>(<span class="text-orange-400">self</span>, request):</div>
                                    <div class="text-gray-300 ml-8">data = {</div>
                                    <div class="text-gray-300 ml-12"><span class="text-orange-400">'quality'</span>: <span class="text-green-400">'Professional'</span>,</div>
                                    <div class="text-gray-300 ml-12"><span class="text-orange-400">'delivery'</span>: <span class="text-green-400">'2-48 hours'</span></div>
                                    <div class="text-gray-300 ml-8">}</div>
                                    <div class="text-gray-300 ml-8"><span class="text-purple-400">return</span> JsonResponse(data)</div>
                                    <div class="text-gray-500"></div>
                                    <div class="text-purple-400"># ⭐ Expert Available 24/7 - 4.9/5 Rating</div>
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
                                    <span>Python</span>
                                </div>
                                <div class="flex items-center space-x-2 text-gray-400">
                                    <span>Ln 12, Col 1</span>
                                    <span>Spaces: 4</span>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Floating Elements -->
                        <div class="absolute -top-6 -right-6 bg-gradient-to-r from-blue-500 to-green-500 text-white rounded-xl shadow-xl p-3 animate-bounce transform rotate-12">
                            <div class="text-2xl">🐍</div>
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-gradient-to-r from-cyan-500 to-blue-500 text-white rounded-xl shadow-xl p-3 animate-pulse transform -rotate-12">
                            <div class="text-2xl">🚀</div>
                        </div>
                        <div class="absolute top-1/2 -right-8 bg-gradient-to-r from-green-500 to-teal-500 text-white rounded-full shadow-xl p-2 animate-ping transform">
                            <div class="text-lg">⚡</div>
                        </div>

                        <!-- Glowing Effects -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-blue-500/20 to-green-500/20 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Content Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Expert Python Programming Services</h2>
                        <p class="text-xl text-gray-600 leading-relaxed">Get professional Python development help from experienced developers who specialize in Django, Flask, data science, machine learning, and automation.</p>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <div class="grid md:grid-cols-2 gap-12 mb-16">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-3">🎯</span>
                                    Why Choose Our Python Development Help?
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Python has become the most popular programming language in the world, powering everything from web applications to artificial intelligence. Our team of expert Python developers specializes in creating clean, efficient, and Pythonic solutions using modern frameworks and industry best practices. Whether you're building a Django web app, analyzing data with pandas, or creating machine learning models, we have the expertise to help you excel.
                                </p>
                                <p class="text-gray-600">
                                    We understand the versatility of Python—from web development with Django and Flask to data science with NumPy and pandas, machine learning with TensorFlow and scikit-learn, and automation scripts. Our experienced developers have worked on hundreds of Python projects across various domains, giving us deep knowledge of Python 3.12+ features, async programming, and testing methodologies.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-green-100 text-green-600 p-2 rounded-lg mr-3">🚀</span>
                                    Our Development Approach
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Our Python development process follows PEP 8 style guide and best practices. We begin by analyzing your project requirements and selecting the optimal approach—whether that's Django for robust web applications, Flask for lightweight APIs, or specialized libraries for data science and machine learning. We leverage the latest Python features including type hints, dataclasses, async/await, and pattern matching.
                                </p>
                                <p class="text-gray-600">
                                    Every project includes clean, well-documented code following Pythonic principles, comprehensive testing with pytest, proper error handling, virtual environment setup, and professional documentation. We use pip or poetry for dependency management and ensure your Python application is production-ready, maintainable, and scalable for future enhancements.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-blue-50 to-green-50 rounded-2xl p-8 mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">What We Cover in Python Development</h3>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-green-500 mr-2">🌐</span>
                                        Django & Flask
                                    </h4>
                                    <p class="text-sm text-gray-600">Complete web applications, REST APIs, Django ORM, authentication, middleware, and deployment.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-blue-500 mr-2">📊</span>
                                        Data Science
                                    </h4>
                                    <p class="text-sm text-gray-600">NumPy, pandas, data analysis, visualization with matplotlib/seaborn, and statistical computing.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-purple-500 mr-2">🤖</span>
                                        Machine Learning
                                    </h4>
                                    <p class="text-sm text-gray-600">scikit-learn, TensorFlow, PyTorch, neural networks, model training, and prediction systems.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-orange-500 mr-2">⚙️</span>
                                        Automation & Scripting
                                    </h4>
                                    <p class="text-sm text-gray-600">Web scraping, task automation, file processing, API integration, and scheduled jobs.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-cyan-500 mr-2">🗄️</span>
                                        Database Integration
                                    </h4>
                                    <p class="text-sm text-gray-600">SQLAlchemy, Django ORM, PostgreSQL, MySQL, MongoDB, Redis integration and optimization.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-red-500 mr-2">🧪</span>
                                        Testing & Quality
                                    </h4>
                                    <p class="text-sm text-gray-600">pytest, unittest, test coverage, TDD approach, and code quality with pylint/black.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Python Technologies & Frameworks We Master</h3>
                            <div class="grid md:grid-cols-2 gap-8">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <span class="bg-blue-500 text-white p-2 rounded mr-2">⚙️</span>
                                        Frameworks & Libraries
                                    </h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start">
                                            <span class="text-blue-600 mr-2">✓</span>
                                            <span><strong>Django:</strong> Full-featured web framework with ORM, admin panel, and authentication</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-600 mr-2">✓</span>
                                            <span><strong>Flask:</strong> Lightweight micro-framework perfect for APIs and small applications</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-600 mr-2">✓</span>
                                            <span><strong>FastAPI:</strong> Modern async framework for building high-performance APIs</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-600 mr-2">✓</span>
                                            <span><strong>pandas & NumPy:</strong> Data manipulation and numerical computing</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-blue-600 mr-2">✓</span>
                                            <span><strong>TensorFlow & PyTorch:</strong> Deep learning and machine learning frameworks</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <span class="bg-green-500 text-white p-2 rounded mr-2">🔧</span>
                                        Python Technologies
                                    </h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start">
                                            <span class="text-green-600 mr-2">✓</span>
                                            <span><strong>Python 3.12+:</strong> Latest features including pattern matching and type hints</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-600 mr-2">✓</span>
                                            <span><strong>Async Programming:</strong> asyncio, aiohttp for concurrent operations</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-600 mr-2">✓</span>
                                            <span><strong>Testing:</strong> pytest, unittest, coverage.py for comprehensive testing</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-600 mr-2">✓</span>
                                            <span><strong>Data Science:</strong> Jupyter, matplotlib, seaborn, scikit-learn</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-green-600 mr-2">✓</span>
                                            <span><strong>Web Scraping:</strong> Beautiful Soup, Scrapy, Selenium for data extraction</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="py-20 bg-gradient-to-br from-blue-50 via-green-50 to-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">How Our Assignment Help Process Works</h2>
                    <p class="text-xl text-gray-600">Get your programming assignment completed in 4 simple steps</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-blue-500 to-green-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            📋
                        </div>
                        <div class="text-blue-600 font-semibold mb-2">STEP 1</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Your Assignment</h3>
                        <p class="text-gray-600">Share your assignment requirements, deadline, and any specific instructions. Upload relevant files if needed.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-green-500 to-teal-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            👨‍💻
                        </div>
                        <div class="text-green-600 font-semibold mb-2">STEP 2</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Assignment</h3>
                        <p class="text-gray-600">We match you with a qualified programming expert who specializes in your assignment topic and language.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-teal-500 to-cyan-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            ✍️
                        </div>
                        <div class="text-teal-600 font-semibold mb-2">STEP 3</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Solution Development</h3>
                        <p class="text-gray-600">Our expert completes your assignment with clean code, comments, and explanations to help you learn.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            🎓
                        </div>
                        <div class="text-cyan-600 font-semibold mb-2">STEP 4</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Review & Learn</h3>
                        <p class="text-gray-600">Get your completed assignment with detailed documentation. Free revisions included to ensure your satisfaction.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing for Python Projects</h2>
                    <p class="text-xl text-gray-600">Choose the package that fits your project needs</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Basic Package -->
                    <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-blue-500 hover:shadow-xl transition-all duration-300">
                        <div class="text-blue-600 font-semibold mb-2">BASIC</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Simple Python Script</h3>
                        <div class="mb-6">
                            <span class="text-5xl font-bold text-gray-900">$30</span>
                            <span class="text-gray-600">/project</span>
                        </div>
                        <div class="text-gray-600 mb-6">⏱️ 12-24 hours delivery</div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Core Python functionality</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Object-oriented design</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">File operations</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Error handling</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Well-documented code</span>
                            </li>
                        </ul>
                        <a href="{{ route('assignments.create') }}"
                            class="block w-full text-center bg-gradient-to-r from-blue-600 to-green-600 text-white py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-green-700 transition-all duration-200">
                            Get Started
                        </a>
                    </div>

                    <!-- Standard Package - Popular -->
                    <div class="bg-gradient-to-br from-blue-600 to-green-600 border-2 border-blue-600 rounded-2xl p-8 text-white transform scale-105 shadow-2xl">
                        <div class="bg-yellow-400 text-blue-900 inline-block px-3 py-1 rounded-full text-sm font-semibold mb-2">
                            MOST POPULAR
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Python Application</h3>
                        <div class="mb-6">
                            <span class="text-5xl font-bold">$85</span>
                            <span class="text-blue-100">/project</span>
                        </div>
                        <div class="text-blue-100 mb-6">⏱️ 2-3 days delivery</div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Django or Flask framework</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>RESTful API development</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Database integration</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Authentication & authorization</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Testing with pytest</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Professional architecture</span>
                            </li>
                        </ul>
                        <a href="{{ route('assignments.create') }}"
                            class="block w-full text-center bg-white text-blue-600 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-200">
                            Get Started
                        </a>
                    </div>

                    <!-- Premium Package -->
                    <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-blue-500 hover:shadow-xl transition-all duration-300">
                        <div class="text-green-600 font-semibold mb-2">PREMIUM</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Data Science / ML Solution</h3>
                        <div class="mb-6">
                            <span class="text-5xl font-bold text-gray-900">$190</span>
                            <span class="text-gray-600">/project</span>
                        </div>
                        <div class="text-gray-600 mb-6">⏱️ 5-7 days delivery</div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Machine learning models</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Data analysis & visualization</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Deep learning with TensorFlow</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Web scraping & automation</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Performance optimization</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Jupyter notebooks included</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Comprehensive documentation</span>
                            </li>
                        </ul>
                        <a href="{{ route('assignments.create') }}"
                            class="block w-full text-center bg-gradient-to-r from-blue-600 to-green-600 text-white py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-green-700 transition-all duration-200">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-4">Need a custom solution? Contact us for a personalized quote.</p>
                    <a href="{{ route('assignments.create') }}" class="text-blue-600 font-semibold hover:text-blue-700">
                        Request Custom Quote →
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gradient-to-br from-blue-50 via-green-50 to-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Success Stories from Students</h2>
                    <p class="text-xl text-gray-600">See how we've helped students excel in their Python projects</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"I needed help with a Django project for my web development course. The developer built an amazing blog platform with user authentication, comments, and a clean admin interface. The code was so well-organized and documented - I finally understand how Django works!"</p>
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r from-blue-500 to-green-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                                EM
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Emma Martinez</div>
                                <div class="text-sm text-gray-600">Web Development Student • Stanford</div>
                                <div class="text-xs text-gray-500">Django Blog Platform</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"My data science project involved analyzing a huge dataset and building a machine learning model. They created beautiful visualizations with matplotlib, implemented multiple ML algorithms, and explained everything in a Jupyter notebook. Absolutely perfect!"</p>
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r from-green-500 to-teal-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                                RK
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Raj Kumar</div>
                                <div class="text-sm text-gray-600">Data Science Major • UC Berkeley</div>
                                <div class="text-xs text-gray-500">ML Prediction Model</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"Needed a web scraping script that could extract data from multiple websites and store it in a database. The Python expert created a robust solution using Scrapy with error handling and scheduling. Works like magic!"</p>
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r from-teal-500 to-cyan-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                                LT
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Lisa Thompson</div>
                                <div class="text-sm text-gray-600">Business Analytics Student • NYU</div>
                                <div class="text-xs text-gray-500">Web Scraping Bot</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                        <p class="text-xl text-gray-600">Everything you need to know about our Python development services</p>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-gradient-to-r from-blue-50 to-green-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">What Python versions do you support?</h3>
                            <p class="text-gray-600">We work with Python 3.8 to the latest Python 3.12+. We leverage modern features like type hints, dataclasses, pattern matching, and async/await based on your project requirements.</p>
                        </div>

                        <div class="bg-gradient-to-r from-green-50 to-teal-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Can you help with Django and Flask projects?</h3>
                            <p class="text-gray-600">Yes! We specialize in Django for full-featured web applications, Flask for lightweight APIs, and FastAPI for modern async applications. We handle everything from basic CRUD apps to complex systems.</p>
                        </div>

                        <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you provide data science and machine learning help?</h3>
                            <p class="text-gray-600">Absolutely! We have extensive experience with pandas, NumPy, scikit-learn, TensorFlow, and PyTorch. We can help with data analysis, visualization, statistical modeling, and machine learning implementations.</p>
                        </div>

                        <div class="bg-gradient-to-r from-cyan-50 to-blue-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">What about web scraping and automation?</h3>
                            <p class="text-gray-600">Yes, we create web scraping solutions using Beautiful Soup, Scrapy, and Selenium. We also build automation scripts for tasks like file processing, API integration, and scheduled jobs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Services Section -->
        <section class="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Related Programming Services</h2>
                    <p class="text-xl text-gray-600">Expand your development capabilities with complementary services</p>
                </div>

                <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8">
                    <!-- PHP Programming Card -->
                    <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-8 text-white shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-lg">
                                <span class="text-4xl">🐘</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-2xl font-bold">PHP Programming</h3>
                                <div class="flex items-center text-indigo-200 text-sm">
                                    <span class="mr-2">⭐</span>
                                    <span>4.8/5 • 1100+ Projects</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-indigo-100 mb-6 leading-relaxed">
                            Need web development or CMS solutions? Our PHP experts specialize in Laravel, Symfony, WordPress, and custom web applications.
                        </p>

                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                Laravel & Symfony
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                WordPress Dev
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                API Development
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                From $30/project
                            </div>
                        </div>

                        <a href="{{ route('services.programming.show', 'php-help') }}"
                            class="block w-full bg-white text-indigo-600 text-center py-3 rounded-xl font-semibold hover:bg-indigo-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Explore PHP Services →
                        </a>
                    </div>

                    <!-- Java Programming Card -->
                    <div class="bg-gradient-to-br from-orange-600 to-red-600 rounded-2xl p-8 text-white shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="flex items-center mb-6">
                            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center shadow-lg">
                                <span class="text-4xl">☕</span>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-2xl font-bold">Java Programming</h3>
                                <div class="flex items-center text-orange-200 text-sm">
                                    <span class="mr-2">⭐</span>
                                    <span>4.9/5 • 1350+ Projects</span>
                                </div>
                            </div>
                        </div>

                        <p class="text-orange-100 mb-6 leading-relaxed">
                            Need enterprise applications or Android development? Our Java experts specialize in Spring Boot, microservices, and mobile apps.
                        </p>

                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                Spring Boot & MVC
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                Android Development
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                Enterprise Solutions
                            </div>
                            <div class="flex items-center text-sm">
                                <span class="text-yellow-400 mr-2">✓</span>
                                From $35/project
                            </div>
                        </div>

                        <a href="{{ route('services.programming.show', 'java-help') }}"
                            class="block w-full bg-white text-orange-600 text-center py-3 rounded-xl font-semibold hover:bg-orange-50 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Explore Java Services →
                        </a>
                    </div>
                </div>

                <!-- Quick Navigation -->
                <div class="mt-12 text-center">
                    <a href="{{ route('services.programming.index') }}"
                        class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 text-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        View All Programming Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 bg-gradient-to-r from-blue-600 to-green-600 text-white">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Build Your Python Project?</h2>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                    Join 1500+ students who have successfully completed their Python programming projects with our expert help.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('assignments.create') }}"
                        class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Start Your Project Now
                    </a>
                    <a href="#pricing"
                        class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-all duration-200">
                        View Pricing Plans
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
