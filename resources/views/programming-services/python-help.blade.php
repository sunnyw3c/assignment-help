@extends('layouts.app')

@section('title', 'Python Programming Help - Expert Django & Python Development')
@section('description',
    'Get professional Python programming help from expert developers. 24/7 support for Django, Flask, data science, machine learning, automation, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                        <a href="{{ route('order') }}"
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
                        <a href="{{ route('order') }}"
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
                        <a href="{{ route('order') }}"
                            class="block w-full text-center bg-gradient-to-r from-blue-600 to-green-600 text-white py-3 rounded-lg font-semibold hover:from-blue-700 hover:to-green-700 transition-all duration-200">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-4">Need a custom solution? Contact us for a personalized quote.</p>
                    <a href="{{ route('order') }}" class="text-blue-600 font-semibold hover:text-blue-700">
                        Request Custom Quote →
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gradient-to-br from-blue-50 via-green-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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

                        <a href="{{ route('services.programming.show', 'php') }}"
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

                        <a href="{{ route('services.programming.show', 'java') }}"
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Build Your Python Project?</h2>
                <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                    Join 1500+ students who have successfully completed their Python programming projects with our expert help.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('order') }}"
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
