@extends('layouts.app')

@section('title', 'API Development - Expert Help Available')
@section('description', 'Get professional help with API development projects. Expert developers available 24/7 for REST APIs, GraphQL, microservices, authentication, and API integration.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Technologies Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">API Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert API developers work with modern frameworks, protocols, and tools to build robust, scalable APIs.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- API Frameworks -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">API Frameworks</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🚀</div>
                                    <h4 class="font-semibold text-gray-900">Express.js</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">⚙️</div>
                                    <h4 class="font-semibold text-gray-900">FastAPI</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔷</div>
                                    <h4 class="font-semibold text-gray-900">Django REST</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- API Standards -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">API Standards</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🔗</div>
                                    <h4 class="font-semibold text-gray-900">REST</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">📊</div>
                                    <h4 class="font-semibold text-gray-900">GraphQL</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">⚡</div>
                                    <h4 class="font-semibold text-gray-900">gRPC</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Authentication -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Authentication</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔐</div>
                                    <h4 class="font-semibold text-gray-900">JWT</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🛡️</div>
                                    <h4 class="font-semibold text-gray-900">OAuth 2.0</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔑</div>
                                    <h4 class="font-semibold text-gray-900">API Keys</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Documentation -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Documentation</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">📝</div>
                                    <h4 class="font-semibold text-gray-900">Swagger</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">📖</div>
                                    <h4 class="font-semibold text-gray-900">Postman</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">📚</div>
                                    <h4 class="font-semibold text-gray-900">OpenAPI</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on API complexity and features. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic API</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $40</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple REST API
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    CRUD operations
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    12-24 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic documentation
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced API</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $90</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complex REST/GraphQL API
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    JWT authentication
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Rate limiting
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Swagger docs
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise API</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $180</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Microservices architecture
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    OAuth 2.0 integration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    2-3 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    API gateway setup
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full testing suite
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our API Development Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering secure, scalable, and well-documented APIs.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">API Design</h3>
                        <p class="text-gray-600">We design RESTful or GraphQL endpoints with clear resource structures and efficient data models.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Authentication & Security</h3>
                        <p class="text-gray-600">Implement JWT, OAuth 2.0, or API key authentication with proper validation and rate limiting.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Development & Testing</h3>
                        <p class="text-gray-600">Build endpoints with error handling, input validation, and comprehensive API testing.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Documentation & Delivery</h3>
                        <p class="text-gray-600">Create Swagger/OpenAPI docs, provide Postman collections, and deliver complete API package.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who got help with their API development projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Perfect REST API for my mobile app backend! Clean code, JWT authentication, and excellent Swagger documentation. The expert even added rate limiting. Highly recommend!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                M</div>
                            <div>
                                <div class="font-semibold text-gray-900">Marcus T.</div>
                                <div class="text-sm text-gray-500">Mobile Dev Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing GraphQL API implementation! The schema design was perfect for my requirements. Got full CRUD operations with filtering and pagination. Great work!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                E</div>
                            <div>
                                <div class="font-semibold text-gray-900">Emily R.</div>
                                <div class="text-sm text-gray-500">Web Dev Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Professional microservices architecture! The developer built separate services with API gateway integration. Excellent documentation and deployment guide included!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                J</div>
                            <div>
                                <div class="font-semibold text-gray-900">James W.</div>
                                <div class="text-sm text-gray-500">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Use Cases Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">API Development Use Cases</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Explore the diverse applications of our API development expertise across different domains.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">📱</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile App Backends</h3>
                        <p class="text-gray-700">RESTful APIs for iOS and Android apps with user authentication, data synchronization, push notifications, and offline support.</p>
                    </div>

                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🛒</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">E-commerce Solutions</h3>
                        <p class="text-gray-700">Product catalog APIs, shopping cart management, payment gateway integration, order processing, and inventory tracking systems.</p>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🔗</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Third-Party Integrations</h3>
                        <p class="text-gray-700">Connect your application with external services like payment processors, social media platforms, cloud storage, and analytics tools.</p>
                    </div>

                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">📊</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Data Analytics APIs</h3>
                        <p class="text-gray-700">Build APIs for data aggregation, real-time analytics, reporting dashboards, and business intelligence applications.</p>
                    </div>

                    <div class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🤖</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">AI/ML Integration</h3>
                        <p class="text-gray-700">APIs for machine learning models, natural language processing, image recognition, and AI-powered features.</p>
                    </div>

                    <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                        <div class="text-4xl mb-4">🏢</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Enterprise Systems</h3>
                        <p class="text-gray-700">Microservices architecture, API gateways, service mesh implementation, and distributed system communication.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- API Features Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Essential API Features We Implement</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Every API we build includes industry-standard features for security, performance, and scalability.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">🔐</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Authentication & Authorization</h3>
                                <p class="text-gray-600">JWT tokens, OAuth 2.0, API keys, role-based access control (RBAC), and session management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">⚡</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Rate Limiting & Throttling</h3>
                                <p class="text-gray-600">Protect your API from abuse with configurable rate limits, request throttling, and quota management.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">✅</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Input Validation & Sanitization</h3>
                                <p class="text-gray-600">Comprehensive validation rules, data sanitization, and protection against injection attacks.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">❌</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Error Handling & Logging</h3>
                                <p class="text-gray-600">Standardized error responses, detailed logging, and debugging support for easy troubleshooting.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">📄</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Pagination & Filtering</h3>
                                <p class="text-gray-600">Efficient data retrieval with pagination, sorting, filtering, and search capabilities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">🔄</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Versioning & Backward Compatibility</h3>
                                <p class="text-gray-600">API versioning strategies to maintain backward compatibility while introducing new features.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">💾</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Caching & Performance</h3>
                                <p class="text-gray-600">Redis caching, response optimization, and performance tuning for fast API responses.</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">📡</span>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-bold text-gray-900 mb-2">Webhooks & Real-time Updates</h3>
                                <p class="text-gray-600">Event-driven architecture with webhooks, WebSockets, and server-sent events for real-time features.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Our API Development Service?</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">We go beyond basic API development to deliver production-ready, enterprise-grade solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">🎯</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Best Practices</h3>
                        <p class="text-gray-600">We follow REST/GraphQL best practices, proper HTTP methods, status codes, and API design principles.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">🛡️</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Security First</h3>
                        <p class="text-gray-600">HTTPS encryption, input validation, SQL injection prevention, and OWASP security guidelines compliance.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">🚀</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Scalable Architecture</h3>
                        <p class="text-gray-600">Built to scale with microservices, load balancing, and cloud-native deployment strategies.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">📚</span>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Complete Documentation</h3>
                        <p class="text-gray-600">Interactive Swagger docs, Postman collections, code examples, and deployment guides included.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive API Development Guide Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Complete Guide to API Development Excellence</h2>
                        <p class="text-xl text-gray-600">Understanding the fundamentals and advanced concepts that make APIs powerful and reliable</p>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <div class="bg-gradient-to-r from-purple-50 to-blue-50 rounded-2xl p-8 mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">What Makes a Great API?</h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Application Programming Interfaces (APIs) serve as the backbone of modern software architecture, enabling seamless communication between different applications, services, and systems. A well-designed API is not just about exposing endpoints; it's about creating an intuitive, secure, and scalable interface that developers love to work with. Our API development service focuses on building APIs that adhere to industry best practices while meeting your specific project requirements.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                The foundation of excellent API design begins with understanding the core principles of REST (Representational State Transfer) or GraphQL architecture. RESTful APIs utilize standard HTTP methods (GET, POST, PUT, DELETE) and follow a resource-based approach, making them intuitive and easy to understand. GraphQL, on the other hand, provides clients with the flexibility to request exactly the data they need, reducing over-fetching and under-fetching issues common in traditional REST APIs. Our experts carefully evaluate your project requirements to recommend the most suitable API architecture.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-gray-50 rounded-xl p-6">
                                <h4 class="text-xl font-bold text-gray-900 mb-3">Security & Authentication</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Security is paramount in API development. We implement robust authentication mechanisms including JSON Web Tokens (JWT) for stateless authentication, OAuth 2.0 for third-party authorization, and API key management for service-to-service communication. Each API we build includes comprehensive input validation, SQL injection prevention, cross-site scripting (XSS) protection, and rate limiting to prevent abuse. We follow OWASP API Security Top 10 guidelines to ensure your API is protected against common vulnerabilities.
                                </p>
                            </div>

                            <div class="bg-gray-50 rounded-xl p-6">
                                <h4 class="text-xl font-bold text-gray-900 mb-3">Performance Optimization</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Performance optimization is critical for delivering fast, responsive APIs. We implement caching strategies using Redis or Memcached to reduce database load and improve response times. Database query optimization, connection pooling, and efficient indexing ensure your API can handle high traffic loads. For data-intensive operations, we implement pagination, lazy loading, and field filtering to minimize payload sizes and bandwidth consumption, ensuring optimal performance even under heavy usage.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">API Documentation & Developer Experience</h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Comprehensive documentation is what separates good APIs from great ones. We create interactive API documentation using industry-standard tools like Swagger (OpenAPI Specification) that allows developers to test endpoints directly from the documentation interface. Each endpoint includes detailed descriptions, request/response examples, parameter specifications, and error code explanations. We also provide Postman collections that enable developers to quickly test and integrate your API into their applications.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                The developer experience extends beyond documentation. We implement consistent error handling with meaningful error messages, proper HTTP status codes, and standardized response formats. API versioning strategies ensure backward compatibility, allowing existing integrations to continue working while new features are added. Our APIs include comprehensive logging and monitoring hooks, making it easy to track usage patterns, identify bottlenecks, and debug issues in production environments.
                            </p>
                        </div>

                        <div class="bg-gray-50 rounded-xl p-8 mb-8">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Microservices & Scalability</h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                For complex applications, we design microservices architecture where different functionalities are separated into independent services that communicate through APIs. This approach offers tremendous benefits including independent deployment, technology diversity, fault isolation, and easier scaling of specific components. We implement API gateways that serve as a single entry point, handling authentication, rate limiting, request routing, and load balancing across multiple service instances.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Scalability considerations are built into every API we develop. Horizontal scaling capabilities allow your API to handle increasing traffic by adding more server instances. We implement database sharding strategies for distributed data storage, use message queues for asynchronous processing, and design stateless APIs that can be easily replicated across multiple servers. Our cloud-native approach ensures your API can leverage modern infrastructure like Kubernetes for container orchestration and auto-scaling based on demand.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="bg-purple-50 rounded-xl p-6 text-center">
                                <div class="text-4xl mb-3">🎯</div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Best Practices</h4>
                                <p class="text-gray-700">Following RESTful conventions, proper HTTP methods, status codes, and resource naming for intuitive API design</p>
                            </div>

                            <div class="bg-blue-50 rounded-xl p-6 text-center">
                                <div class="text-4xl mb-3">🔒</div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Enterprise Security</h4>
                                <p class="text-gray-700">Implementing authentication, authorization, encryption, and compliance with industry security standards</p>
                            </div>

                            <div class="bg-indigo-50 rounded-xl p-6 text-center">
                                <div class="text-4xl mb-3">📈</div>
                                <h4 class="text-lg font-bold text-gray-900 mb-2">Production Ready</h4>
                                <p class="text-gray-700">Comprehensive testing, error handling, monitoring, and deployment strategies for reliable production APIs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Popular API Projects Section -->
        <section class="py-20 bg-gradient-to-br from-purple-50 to-blue-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Popular API Development Projects</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real-world API projects our experts have successfully delivered to students.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-purple-500">
                        <h3 class="font-bold text-gray-900 mb-2">Social Media API</h3>
                        <p class="text-sm text-gray-600 mb-3">User profiles, posts, comments, likes, following system, and news feed with GraphQL</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded">GraphQL</span>
                            <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded">JWT</span>
                            <span class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded">MongoDB</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-blue-500">
                        <h3 class="font-bold text-gray-900 mb-2">E-commerce REST API</h3>
                        <p class="text-sm text-gray-600 mb-3">Product catalog, shopping cart, payment processing with Stripe, order management</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">REST</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">Stripe</span>
                            <span class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded">PostgreSQL</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-green-500">
                        <h3 class="font-bold text-gray-900 mb-2">Task Management API</h3>
                        <p class="text-sm text-gray-600 mb-3">Project boards, task CRUD, team collaboration, file uploads, and real-time updates</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Express</span>
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">WebSocket</span>
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">MySQL</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-orange-500">
                        <h3 class="font-bold text-gray-900 mb-2">Weather Data API</h3>
                        <p class="text-sm text-gray-600 mb-3">Third-party API integration, data aggregation, caching, and location-based queries</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">FastAPI</span>
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">Redis</span>
                            <span class="bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded">OpenWeather</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-pink-500">
                        <h3 class="font-bold text-gray-900 mb-2">Blog & CMS API</h3>
                        <p class="text-sm text-gray-600 mb-3">Content management, categories, tags, comments, search, and media handling</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded">Django REST</span>
                            <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded">S3</span>
                            <span class="bg-pink-100 text-pink-700 text-xs px-2 py-1 rounded">Elasticsearch</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg p-6 shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-indigo-500">
                        <h3 class="font-bold text-gray-900 mb-2">Authentication Microservice</h3>
                        <p class="text-sm text-gray-600 mb-3">User registration, login, OAuth 2.0, password reset, email verification, 2FA</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-indigo-100 text-indigo-700 text-xs px-2 py-1 rounded">Node.js</span>
                            <span class="bg-indigo-100 text-indigo-700 text-xs px-2 py-1 rounded">OAuth</span>
                            <span class="bg-indigo-100 text-indigo-700 text-xs px-2 py-1 rounded">Redis</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our API development service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What types of APIs can you build?</h3>
                        <p class="text-gray-600">We build RESTful APIs, GraphQL APIs, gRPC services, microservices, webhooks, and third-party API integrations. We work with any framework including Express, FastAPI, Django REST, Spring Boot, and more.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you implement authentication and security?</h3>
                        <p class="text-gray-600">Yes! We implement JWT authentication, OAuth 2.0, API key management, rate limiting, input validation, and security best practices. All APIs include proper error handling and security measures.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Is API documentation included?</h3>
                        <p class="text-gray-600">Absolutely! We provide comprehensive API documentation using Swagger/OpenAPI specifications, Postman collections for testing, and clear README files with endpoint descriptions and examples.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you integrate third-party APIs?</h3>
                        <p class="text-gray-600">Yes, we can integrate payment gateways (Stripe, PayPal), social media APIs, cloud services (AWS, Google Cloud), mapping services, email services, and any other third-party APIs you need.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the API delivery?</h3>
                        <p class="text-gray-600">You'll receive complete source code, API documentation (Swagger/Postman), authentication implementation, database schemas, deployment instructions, and testing examples. For advanced projects, we include API gateway configuration and monitoring setup.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your API?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully completed their API projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Your API Project Today
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
