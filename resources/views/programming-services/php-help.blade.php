@extends('layouts.app')

@section('title', 'PHP Programming Help - Expert Laravel & PHP Development')
@section('description',
    'Get professional PHP programming help from expert developers. 24/7 support for Laravel,
    Symfony, WordPress, custom PHP projects, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

    <!-- Comprehensive Content Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                    <a href="{{ route('order') }}"
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
                    <a href="{{ route('order') }}"
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
                    <a href="{{ route('order') }}"
                        class="block w-full text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-3 rounded-lg font-semibold hover:from-indigo-700 hover:to-purple-700 transition-all duration-200">
                        Get Started
                    </a>
                </div>
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">Need a custom solution? Contact us for a personalized quote.</p>
                <a href="{{ route('order') }}"
                    class="text-indigo-600 font-semibold hover:text-indigo-700">
                    Request Custom Quote →
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-br from-indigo-50 via-purple-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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

                    <a href="{{ route('services.programming.show', 'java') }}"
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

                    <a href="{{ route('order') }}"
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
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Build Your PHP Project?</h2>
            <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
                Join 1100+ students who have successfully completed their PHP programming projects with our expert help.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('order') }}"
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
