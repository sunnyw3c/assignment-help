@extends('layouts.app')

@section('title', 'API Development - Expert Help Available')
@section('description', 'Get professional help with API development projects. Expert developers available 24/7 for REST APIs, GraphQL, microservices, authentication, and API integration.')

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
                <!-- Floating REST API -->
                <div
                    class="absolute top-16 left-8 bg-gradient-to-r from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet animate-glow">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">api.js</span>
                    </div>
                    <div><span class="text-green-400">app</span>.<span class="text-yellow-400">get</span>(<span class="text-orange-400">'/api/users'</span>, <span class="text-blue-400">async</span> (req, res) => {</div>
                    <div class="ml-2"><span class="text-purple-400">const</span> users = <span class="text-blue-400">await</span> User.<span class="text-yellow-400">findAll</span>();</div>
                    <div class="ml-2">res.<span class="text-yellow-400">json</span>(users);</div>
                    <div>});</div>
                </div>

                <!-- Floating GraphQL -->
                <div
                    class="absolute top-28 right-12 bg-gradient-to-r from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">schema.graphql</span>
                    </div>
                    <div><span class="text-purple-400">type</span> <span class="text-yellow-400">Query</span> {</div>
                    <div class="ml-2">users: [<span class="text-blue-400">User</span>]</div>
                    <div class="ml-2">user(id: <span class="text-blue-400">ID!</span>): <span class="text-blue-400">User</span></div>
                    <div>}</div>
                </div>

                <!-- Floating JWT Auth -->
                <div
                    class="absolute bottom-24 left-1/4 bg-gradient-to-r from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">auth.js</span>
                    </div>
                    <div><span class="text-purple-400">const</span> token = jwt.<span class="text-yellow-400">sign</span>({</div>
                    <div class="ml-2">userId: user.id</div>
                    <div>}, <span class="text-orange-400">SECRET_KEY</span>);</div>
                </div>

                <!-- Floating Middleware -->
                <div
                    class="absolute top-72 right-8 bg-gradient-to-r from-gray-900 to-gray-800 text-orange-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">middleware.js</span>
                    </div>
                    <div><span class="text-purple-400">const</span> <span class="text-yellow-400">auth</span> = (req, res, next) => {</div>
                    <div class="ml-2"><span class="text-purple-400">const</span> token = req.headers.auth;</div>
                    <div class="ml-2"><span class="text-blue-400">if</span> (token) <span class="text-yellow-400">next</span>();</div>
                    <div>};</div>
                </div>

                <!-- Floating Express Route -->
                <div class="absolute bottom-16 right-1/3 bg-gradient-to-r from-gray-900 to-gray-800 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">routes.js</span>
                    </div>
                    <div>router.<span class="text-yellow-400">post</span>(<span class="text-orange-400">'/api/login'</span>,</div>
                    <div class="ml-2">validateBody,</div>
                    <div class="ml-2">authController.<span class="text-yellow-400">login</span></div>
                    <div>);</div>
                </div>

                <!-- Floating API Response -->
                <div class="absolute top-96 left-16 bg-gradient-to-r from-gray-900 to-gray-800 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">response.json</span>
                    </div>
                    <div>{</div>
                    <div class="ml-2"><span class="text-blue-400">"status"</span>: <span class="text-orange-400">"success"</span>,</div>
                    <div class="ml-2"><span class="text-blue-400">"data"</span>: [...]</div>
                    <div>}</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            🔗 API Development Expert Help
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Professional<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">API Development</span><br>
                            Solutions
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert help with API development projects. From RESTful APIs and GraphQL to microservices architecture and API integration, our experienced developers deliver secure, scalable API solutions.
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
                                <span>650+ APIs built</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>12-48 hour delivery</span>
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
                                <div class="ml-4 text-gray-400 text-sm font-mono">api-endpoint.js</div>
                            </div>

                            <!-- Code Content -->
                            <div class="font-mono text-sm space-y-1 p-6">
                                <div class="text-purple-400">// RESTful API Endpoint</div>
                                <div class="text-green-400">app<span class="text-white">.</span><span class="text-yellow-400">get</span><span class="text-white">(</span><span class="text-orange-400">'/api/data'</span><span class="text-white">, </span><span class="text-blue-400">async</span> <span class="text-white">(req, res)</span> <span class="text-blue-400">=></span> <span class="text-white">{</span></div>
                                <div class="ml-4 text-purple-400">const <span class="text-cyan-400">data</span> <span class="text-white">=</span> <span class="text-blue-400">await</span> fetch<span class="text-white">();</span></div>
                                <div class="ml-4 text-white">res<span class="text-white">.</span><span class="text-yellow-400">json</span><span class="text-white">(</span>data<span class="text-white">);</span></div>
                                <div class="text-white">});</div>
                                <div class="text-gray-500"></div>
                                <div class="text-purple-400">// Secure & Scalable API 4.8/5 ⭐</div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                            <div class="text-2xl">🔗</div>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-lg shadow-lg p-4 animate-pulse">
                            <div class="text-2xl">⚡</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
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
            <div class="container mx-auto px-6">
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
                            <a href="{{ route('assignments.create') }}"
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
            <div class="container mx-auto px-6">
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

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
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
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your API?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully completed their API projects with our expert help.</p>
                <a href="{{ route('assignments.create') }}"
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
