@extends('layouts.app')

@section('title', 'PHP Programming Help - Expert Laravel & PHP Development')
@section('description',
    'Get professional PHP programming help from expert developers. 24/7 support for Laravel,
    Symfony, WordPress, custom PHP projects, and more.')

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
                    class="absolute top-20 left-20 w-2 h-2 bg-indigo-400 rounded-full animate-ping opacity-20 md:opacity-30">
                </div>
                <div class="absolute top-40 right-32 w-3 h-3 bg-purple-400 rounded-full animate-ping opacity-25 md:opacity-40"
                    style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-16 w-1.5 h-1.5 bg-blue-400 rounded-full animate-ping opacity-20 md:opacity-35"
                    style="animation-delay: 1s;"></div>
                <div class="absolute top-60 left-1/3 w-2.5 h-2.5 bg-violet-400 rounded-full animate-ping opacity-15 md:opacity-25"
                    style="animation-delay: 1.5s;"></div>
                <div class="absolute bottom-20 right-20 w-2 h-2 bg-fuchsia-400 rounded-full animate-ping opacity-20 md:opacity-30"
                    style="animation-delay: 2s;"></div>
            </div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Floating Laravel Route -->
                <div
                    class="absolute top-16 left-8 bg-gradient-to-r from-gray-900 to-gray-800 text-red-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet animate-glow">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">routes/web.php</span>
                    </div>
                    <div class="text-purple-400">&lt;?php</div>
                    <div><span class="text-blue-400">Route</span>::<span class="text-yellow-400">get</span>('/api', <span
                            class="text-green-400">fn</span>() =&gt;</div>
                    <div class="ml-4 text-orange-400">response()->json($data)</div>
                    <div>);</div>
                </div>

                <!-- Floating Eloquent Query -->
                <div
                    class="absolute top-28 right-12 bg-gradient-to-r from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">models/User.php</span>
                    </div>
                    <div><span class="text-purple-400">User</span>::<span class="text-yellow-400">where</span>('active',
                        <span class="text-green-400">true</span>)
                    </div>
                    <div class="ml-4">-&gt;<span class="text-yellow-400">with</span>('posts')</div>
                    <div class="ml-4">-&gt;<span class="text-yellow-400">latest</span>()</div>
                    <div class="ml-4">-&gt;<span class="text-yellow-400">get</span>();</div>
                </div>

                <!-- Floating PHP Class -->
                <div
                    class="absolute bottom-24 left-1/4 bg-gradient-to-r from-gray-900 to-gray-800 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">Controllers/ApiController.php</span>
                    </div>
                    <div class="text-blue-400">class <span class="text-yellow-400">ApiController</span> extends <span
                            class="text-green-400">Controller</span> {</div>
                    <div class="ml-2 text-purple-400">public function</div>
                    <div class="ml-2">return <span class="text-orange-400">$this</span>-&gt;<span
                            class="text-yellow-400">success</span>($data);</div>
                    <div>}</div>
                </div>

                <!-- Floating Composer Config -->
                <div
                    class="absolute top-72 right-8 bg-gradient-to-r from-gray-900 to-gray-800 text-orange-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">composer.json</span>
                    </div>
                    <div>{</div>
                    <div class="ml-2"><span class="text-blue-400">"require"</span>: {</div>
                    <div class="ml-4"><span class="text-green-400">"php"</span>: <span
                            class="text-yellow-400">"^8.2"</span>,</div>
                    <div class="ml-4"><span class="text-green-400">"laravel/framework"</span>: <span
                            class="text-yellow-400">"^11.0"</span></div>
                    <div class="ml-2">}</div>
                    <div>}</div>
                </div>

                <!-- Floating Database Migration -->
                <div class="absolute bottom-16 right-1/3 bg-gradient-to-r from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">migrations/create_users.php</span>
                    </div>
                    <div><span class="text-purple-400">Schema</span>::<span class="text-yellow-400">create</span>('users',
                        <span class="text-blue-400">function</span>($table) {
                    </div>
                    <div class="ml-2">$table-&gt;<span class="text-orange-400">id</span>();</div>
                    <div class="ml-2">$table-&gt;<span class="text-orange-400">string</span>('email');</div>
                    <div class="ml-2">$table-&gt;<span class="text-orange-400">timestamps</span>();</div>
                    <div>});</div>
                </div>

                <!-- Floating Blade Template -->
                <div class="absolute top-96 left-16 bg-gradient-to-r from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">views/welcome.blade.php</span>
                    </div>
                    <div class="text-yellow-400">@@extends<span class="text-green-400">('layouts.app')</span></div>
                    <div class="text-yellow-400">@@section<span class="text-green-400">('content')</span></div>
                    <div class="ml-2">&lt;<span class="text-purple-400">h1</span>&gt;@{{ <span class="text-orange-400">$title</span> @}}&lt;/<span class="text-purple-400">h1</span>&gt;</div>
                    <div class="text-yellow-400">@@endsection</div>
                </div>
            </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <div
                        class="inline-flex items-center bg-indigo-100 text-indigo-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        🐘 PHP Programming Expert Help
                    </div>

                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Professional<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">PHP
                            Development</span><br>
                        Services
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Get expert help with PHP programming projects. From Laravel and Symfony to custom PHP solutions,
                        our experienced developers deliver high-quality code in record time.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="{{ route('assignments.create') }}"
                            class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-200 shadow-lg hover:shadow-xl text-center">
                            Get Help Now
                        </a>
                        <a href="#pricing"
                            class="border-2 border-indigo-600 text-indigo-600 px-8 py-4 rounded-lg font-semibold hover:bg-indigo-600 hover:text-white transition-all duration-200 text-center">
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
                            <span>1100+ projects completed</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-blue-500 mr-1">⚡</span>
                            <span>2-48 hour delivery</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Enhanced Code Editor Mockup -->
                <div class="relative transform hover:scale-105 transition-transform duration-300">
                    <div
                        class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-2xl shadow-2xl overflow-hidden border border-gray-700 backdrop-blur-sm">
                        <!-- Editor Header -->
                        <div
                            class="flex items-center justify-between p-4 bg-gradient-to-r from-gray-800 to-gray-700 border-b border-gray-600">
                            <div class="flex items-center space-x-3">
                                <div class="flex space-x-2">
                                    <div
                                        class="w-3 h-3 bg-red-500 rounded-full hover:bg-red-400 transition-colors cursor-pointer">
                                    </div>
                                    <div
                                        class="w-3 h-3 bg-yellow-500 rounded-full hover:bg-yellow-400 transition-colors cursor-pointer">
                                    </div>
                                    <div
                                        class="w-3 h-3 bg-green-500 rounded-full hover:bg-green-400 transition-colors cursor-pointer">
                                    </div>
                                </div>
                                <div class="ml-4 text-gray-300 text-sm font-mono flex items-center">
                                    <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2 animate-pulse"></span>
                                    app/Http/Controllers/ApiController.php
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">PHP 8.2</div>
                                <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">Laravel</div>
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
                                <div class="text-purple-400">// 🚀 Professional PHP Development Solution</div>
                                <div class="text-blue-400">class <span class="text-yellow-400">ApiController</span>
                                    extends <span class="text-green-400">Controller</span> {</div>
                                <div class="text-gray-300 ml-4">public function <span
                                        class="text-yellow-400">index</span>(): <span
                                        class="text-cyan-400">JsonResponse</span></div>
                                <div class="text-gray-300 ml-4">{</div>
                                <div class="text-gray-300 ml-8">return response()-&gt;<span
                                        class="text-yellow-400">json</span>([</div>
                                <div class="text-gray-300 ml-12"><span class="text-orange-400">'quality'</span> =&gt;
                                    <span class="text-green-400">'Production Ready'</span>,
                                </div>
                                <div class="text-gray-300 ml-12"><span class="text-orange-400">'delivery'</span> =&gt;
                                    <span class="text-green-400">'2-48 hours'</span>
                                </div>
                                <div class="text-gray-300 ml-8">]);</div>
                                <div class="text-gray-300 ml-4">}</div>
                                <div class="text-blue-400">}</div>
                                <div class="text-gray-500"></div>
                                <div class="text-purple-400">// ⭐ Expert Available 24/7 - 4.8/5 Rating</div>
                            </div>
                        </div>

                        <!-- Status Bar -->
                        <div
                            class="bg-gradient-to-r from-gray-800 to-gray-700 px-4 py-2 border-t border-gray-600 flex items-center justify-between text-xs">
                            <div class="flex items-center space-x-4 text-gray-400">
                                <span class="flex items-center">
                                    <span class="w-2 h-2 bg-green-500 rounded-full mr-1 animate-pulse"></span>
                                    Ready
                                </span>
                                <span>UTF-8</span>
                                <span>PHP</span>
                            </div>
                            <div class="flex items-center space-x-2 text-gray-400">
                                <span>Ln 12, Col 1</span>
                                <span>Spaces: 4</span>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Floating Elements -->
                    <div
                        class="absolute -top-6 -right-6 bg-gradient-to-r from-indigo-500 to-purple-500 text-white rounded-xl shadow-xl p-3 animate-bounce transform rotate-12">
                        <div class="text-2xl">🐘</div>
                    </div>
                    <div
                        class="absolute -bottom-6 -left-6 bg-gradient-to-r from-violet-500 to-fuchsia-500 text-white rounded-xl shadow-xl p-3 animate-pulse transform -rotate-12">
                        <div class="text-2xl">🚀</div>
                    </div>
                    <div
                        class="absolute top-1/2 -right-8 bg-gradient-to-r from-blue-500 to-cyan-500 text-white rounded-full shadow-xl p-2 animate-ping transform">
                        <div class="text-lg">⚡</div>
                    </div>

                    <!-- Glowing Effects -->
                    <div
                        class="absolute inset-0 rounded-2xl bg-gradient-to-r from-indigo-500/20 to-purple-500/20 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Expert PHP Programming Services</h2>
                    <p class="text-xl text-gray-600 leading-relaxed">Get professional PHP development help from
                        experienced developers who specialize in Laravel, Symfony, WordPress, and custom PHP solutions
                        for web applications.</p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="grid md:grid-cols-2 gap-12 mb-16">
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="bg-indigo-100 text-indigo-600 p-2 rounded-lg mr-3">🎯</span>
                                Why Choose Our PHP Development Help?
                            </h3>
                            <p class="text-gray-600 mb-4">
                                PHP remains one of the most popular server-side programming languages, powering over 77%
                                of all websites. Our team of expert PHP developers specializes in creating robust,
                                secure, and scalable PHP applications using modern frameworks and best practices.
                                Whether you're working on a Laravel project, building a WordPress plugin, or creating a
                                custom PHP application, we have the expertise to help you succeed.
                            </p>
                            <p class="text-gray-600">
                                We understand that PHP development can present unique challenges, from managing
                                dependencies with Composer to implementing complex database relationships with Eloquent
                                ORM. Our experienced developers have worked on hundreds of PHP projects, giving us deep
                                knowledge of modern PHP 8.x features, framework-specific patterns, and industry best
                                practices.
                            </p>
                        </div>

                        <div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">🚀</span>
                                Our Development Approach
                            </h3>
                            <p class="text-gray-600 mb-4">
                                Our PHP development process follows modern methodologies and PSR standards. We begin by
                                understanding your project requirements and selecting the most appropriate
                                approach—whether that's Laravel for full-featured web applications, Symfony for
                                enterprise solutions, or custom PHP for specific needs. We leverage the latest PHP 8.x
                                features including typed properties, named arguments, and match expressions.
                            </p>
                            <p class="text-gray-600">
                                Every project includes clean, well-documented code following PSR-12 coding standards,
                                proper MVC architecture, comprehensive error handling, and security best practices. We
                                ensure your PHP application is not only functional but also maintainable, testable, and
                                ready for production deployment.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-2xl p-8 mb-16">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">What We Cover in PHP Development
                        </h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-red-500 mr-2">🔴</span>
                                    Laravel Development
                                </h4>
                                <p class="text-sm text-gray-600">Complete Laravel applications, Eloquent ORM,
                                    migrations, authentication, API development, and deployment.</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-purple-500 mr-2">🎼</span>
                                    Symfony Projects
                                </h4>
                                <p class="text-sm text-gray-600">Symfony framework development, bundles, Doctrine ORM,
                                    form handling, and enterprise applications.</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-blue-500 mr-2">📝</span>
                                    WordPress Development
                                </h4>
                                <p class="text-sm text-gray-600">Custom themes, plugins, WooCommerce customization,
                                    REST API integration, and WordPress optimization.</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-orange-500 mr-2">🗄️</span>
                                    Database Integration
                                </h4>
                                <p class="text-sm text-gray-600">MySQL, PostgreSQL, MongoDB integration, query
                                    optimization, database design, and migrations.</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-green-500 mr-2">🔗</span>
                                    API Development
                                </h4>
                                <p class="text-sm text-gray-600">RESTful APIs, GraphQL, authentication, rate limiting,
                                    API documentation, and third-party integrations.</p>
                            </div>
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                    <span class="text-indigo-500 mr-2">🛡️</span>
                                    Security & Testing
                                </h4>
                                <p class="text-sm text-gray-600">Security best practices, input validation, CSRF
                                    protection, unit testing, and feature testing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-16">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">PHP Technologies & Frameworks We
                            Master</h3>
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-indigo-500 text-white p-2 rounded mr-2">⚙️</span>
                                    Frameworks & Tools
                                </h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <span class="text-indigo-600 mr-2">✓</span>
                                        <span><strong>Laravel:</strong> The most popular PHP framework for web artisans,
                                            including Livewire, Jetstream, and Breeze</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-indigo-600 mr-2">✓</span>
                                        <span><strong>Symfony:</strong> Enterprise-grade framework with reusable
                                            components and bundles</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-indigo-600 mr-2">✓</span>
                                        <span><strong>CodeIgniter:</strong> Lightweight framework perfect for smaller
                                            applications</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-indigo-600 mr-2">✓</span>
                                        <span><strong>Slim Framework:</strong> Micro-framework ideal for APIs and
                                            microservices</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-indigo-600 mr-2">✓</span>
                                        <span><strong>Composer:</strong> Dependency management and autoloading</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-purple-500 text-white p-2 rounded mr-2">🔧</span>
                                    PHP Technologies
                                </h4>
                                <ul class="space-y-2 text-gray-600">
                                    <li class="flex items-start">
                                        <span class="text-purple-600 mr-2">✓</span>
                                        <span><strong>PHP 8.x:</strong> Modern PHP with typed properties, attributes,
                                            and JIT compilation</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-600 mr-2">✓</span>
                                        <span><strong>OOP & Design Patterns:</strong> SOLID principles, MVC, Repository
                                            pattern, Service layer</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-600 mr-2">✓</span>
                                        <span><strong>WordPress:</strong> Custom themes, plugins, Gutenberg blocks, and
                                            WooCommerce</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-600 mr-2">✓</span>
                                        <span><strong>Testing:</strong> PHPUnit, Pest, feature testing, and integration
                                            testing</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-600 mr-2">✓</span>
                                        <span><strong>Databases:</strong> MySQL, PostgreSQL, Redis, MongoDB, Eloquent,
                                            and Doctrine</span>
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
    <section id="how-it-works" class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">How Our Assignment Help Process Works</h2>
                <p class="text-xl text-gray-600">Get your programming assignment completed in 4 simple steps</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div
                    class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div
                        class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                        📋
                    </div>
                    <div class="text-indigo-600 font-semibold mb-2">STEP 1</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Your Assignment</h3>
                    <p class="text-gray-600">Share your assignment requirements, deadline, and any specific instructions. Upload relevant files if needed.</p>
                </div>

                <div
                    class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div
                        class="bg-gradient-to-r from-purple-500 to-pink-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                        👨‍💻
                    </div>
                    <div class="text-purple-600 font-semibold mb-2">STEP 2</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Assignment</h3>
                    <p class="text-gray-600">We match you with a qualified programming expert who specializes in your assignment topic and language.</p>
                </div>

                <div
                    class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div
                        class="bg-gradient-to-r from-pink-500 to-red-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                        ✍️
                    </div>
                    <div class="text-pink-600 font-semibold mb-2">STEP 3</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Solution Development</h3>
                    <p class="text-gray-600">Our expert completes your assignment with clean code, comments, and explanations to help you learn.</p>
                </div>

                <div
                    class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div
                        class="bg-gradient-to-r from-red-500 to-orange-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                        🎓
                    </div>
                    <div class="text-red-600 font-semibold mb-2">STEP 4</div>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing for PHP Projects</h2>
                <p class="text-xl text-gray-600">Choose the package that fits your project needs</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Basic Package -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-indigo-500 hover:shadow-xl transition-all duration-300">
                    <div class="text-indigo-600 font-semibold mb-2">BASIC</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Simple PHP Script</h3>
                    <div class="mb-6">
                        <span class="text-5xl font-bold text-gray-900">$30</span>
                        <span class="text-gray-600">/project</span>
                    </div>
                    <div class="text-gray-600 mb-6">⏱️ 12-24 hours delivery</div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Basic PHP functionality</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Form processing</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Database CRUD operations</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Simple authentication</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Clean, commented code</span>
                        </li>
                    </ul>
                    <a href="{{ route('assignments.create') }}"
                        class="block w-full text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-lg font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-200">
                        Get Started
                    </a>
                </div>

                <!-- Standard Package - Popular -->
                <div
                    class="bg-gradient-to-br from-indigo-600 to-purple-600 border-2 border-indigo-600 rounded-2xl p-8 text-white transform scale-105 shadow-2xl">
                    <div
                        class="bg-yellow-400 text-indigo-900 inline-block px-3 py-1 rounded-full text-sm font-semibold mb-2">
                        MOST POPULAR
                    </div>
                    <h3 class="text-2xl font-bold mb-4">PHP Web Application</h3>
                    <div class="mb-6">
                        <span class="text-5xl font-bold">$80</span>
                        <span class="text-indigo-100">/project</span>
                    </div>
                    <div class="text-indigo-100 mb-6">⏱️ 2-3 days delivery</div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Laravel or Symfony framework</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>MVC architecture</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>RESTful API development</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Database design & migrations</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>User authentication & authorization</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-yellow-400 mr-2">✓</span>
                            <span>Unit testing</span>
                        </li>
                    </ul>
                    <a href="{{ route('assignments.create') }}"
                        class="block w-full text-center bg-white text-indigo-600 py-3 rounded-lg font-semibold hover:bg-indigo-50 transition-all duration-200">
                        Get Started
                    </a>
                </div>

                <!-- Premium Package -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-indigo-500 hover:shadow-xl transition-all duration-300">
                    <div class="text-purple-600 font-semibold mb-2">PREMIUM</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise PHP Solution</h3>
                    <div class="mb-6">
                        <span class="text-5xl font-bold text-gray-900">$180</span>
                        <span class="text-gray-600">/project</span>
                    </div>
                    <div class="text-gray-600 mb-6">⏱️ 5-7 days delivery</div>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Full-featured PHP application</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Advanced Laravel features</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Payment gateway integration</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Admin dashboard</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Email notifications</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Deployment setup</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span class="text-gray-600">Complete documentation</span>
                        </li>
                    </ul>
                    <a href="{{ route('assignments.create') }}"
                        class="block w-full text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-lg font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-200">
                        Get Started
                    </a>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">Need a custom solution? Contact us for a personalized quote.</p>
                <a href="{{ route('assignments.create') }}"
                    class="text-indigo-600 font-semibold hover:text-indigo-700">
                    Request Custom Quote →
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Success Stories from Students</h2>
                <p class="text-xl text-gray-600">See how we've helped students excel in their PHP projects</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"I was completely lost with Laravel for my web development
                        course. The developer helped me build a complete blog system with authentication, CRUD
                        operations, and file uploads. They explained everything step by step and now I actually
                        understand how Laravel works!"</p>
                    <div class="flex items-center">
                        <div
                            class="bg-gradient-to-r from-indigo-500 to-purple-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                            AJ
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Alex Johnson</div>
                            <div class="text-sm text-gray-600">Web Development Student • NYU</div>
                            <div class="text-xs text-gray-500">Laravel Blog System</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"My e-commerce project was due in 3 days and I had barely
                        started. They built an amazing PHP shopping cart with payment integration, admin panel, and
                        order management. The code quality was excellent and well-documented. Saved my semester!"</p>
                    <div class="flex items-center">
                        <div
                            class="bg-gradient-to-r from-purple-500 to-pink-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                            PP
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Priya Patel</div>
                            <div class="text-sm text-gray-600">Computer Science Major • UC Berkeley</div>
                            <div class="text-xs text-gray-500">PHP E-commerce Platform</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Needed help building a REST API in PHP for my mobile app
                        backend. The developer created a robust API using Slim Framework with JWT authentication, proper
                        error handling, and comprehensive documentation. Exactly what I needed!"</p>
                    <div class="flex items-center">
                        <div
                            class="bg-gradient-to-r from-pink-500 to-red-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                            MW
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Marcus Williams</div>
                            <div class="text-sm text-gray-600">Full Stack Development Student • MIT</div>
                            <div class="text-xs text-gray-500">RESTful API Development</div>
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
                    <p class="text-xl text-gray-600">Everything you need to know about our PHP development services</p>
                </div>

                <div class="space-y-6">
                    <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Which PHP frameworks do you work with?
                        </h3>
                        <p class="text-gray-600">We specialize in Laravel and Symfony but also work with CodeIgniter,
                            Yii, CakePHP, Slim, and pure PHP. We choose the best framework based on your project
                            requirements and learning goals.</p>
                    </div>

                    <div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Can you help with WordPress development?
                        </h3>
                        <p class="text-gray-600">Yes! We provide WordPress theme development, plugin creation, custom
                            functionality, WooCommerce customization, and WordPress API integration services.</p>
                    </div>

                    <div class="bg-gradient-to-r from-pink-50 to-red-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you follow modern PHP best practices?
                        </h3>
                        <p class="text-gray-600">Absolutely! We use PHP 8.x features, follow PSR standards, implement
                            OOP principles, use Composer for dependency management, and write clean, well-documented
                            code with proper error handling.</p>
                    </div>

                    <div class="bg-gradient-to-r from-red-50 to-orange-50 rounded-xl p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Can you integrate payment gateways and
                            APIs?</h3>
                        <p class="text-gray-600">Yes, we can integrate popular payment gateways like Stripe, PayPal,
                            and Razorpay, as well as third-party APIs including social media, email services, SMS, and
                            more.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Services Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-indigo-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Related Programming Services</h2>
                <p class="text-xl text-gray-600">Expand your development capabilities with complementary services</p>
            </div>

            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8">
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
                        Need enterprise-grade applications or Android development? Our Java experts specialize in Spring Boot, microservices, and mobile apps.
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

                <!-- Full-Stack Combination -->
                <div class="bg-white border-2 border-indigo-200 rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                    <div class="text-center mb-6">
                        <div class="flex items-center justify-center mb-4">
                            <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">🐘</span>
                            </div>
                            <span class="text-2xl font-bold text-gray-400 mx-3">+</span>
                            <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                <span class="text-2xl">☕</span>
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Full-Stack Solution</h3>
                        <p class="text-gray-600">Combine PHP & Java expertise</p>
                    </div>

                    <div class="bg-gradient-to-r from-indigo-50 to-orange-50 rounded-xl p-4 mb-6">
                        <h4 class="font-semibold text-gray-900 mb-3">Why Use Both?</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>PHP for web frontend + Java for enterprise backend</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Laravel web app + Spring Boot microservices</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>PHP API + Java Android mobile app</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span>Best of both ecosystems for complex projects</span>
                            </li>
                        </ul>
                    </div>

                    <a href="{{ route('assignments.create') }}"
                        class="block w-full bg-gradient-to-r from-indigo-600 to-orange-600 text-white text-center py-3 rounded-xl font-semibold hover:from-indigo-700 hover:to-orange-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Discuss Full-Stack Project →
                    </a>
                </div>
            </div>

            <!-- Quick Navigation -->
            <div class="mt-12 text-center">
                <a href="{{ route('services.programming.index') }}"
                    class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-700 text-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    View All Programming Services
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Build Your PHP Project?</h2>
            <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                Join 1100+ students who have successfully completed their PHP programming projects with our expert help.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('assignments.create') }}"
                    class="bg-white text-indigo-600 px-8 py-4 rounded-lg font-semibold hover:bg-indigo-50 transition-all duration-200 shadow-lg hover:shadow-xl">
                    Start Your Project Now
                </a>
                <a href="#pricing"
                    class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition-all duration-200">
                    View Pricing Plans
                </a>
            </div>
        </div>
    </section>
</div>
@endsection
