@extends('layouts.app')

@section('title', 'Java Programming Help - Expert Spring Boot & Java Development')
@section('description',
    'Get professional Java programming help from expert developers. 24/7 support for Spring Boot, Android, core Java, enterprise applications, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Expert Java Programming Services</h2>
                        <p class="text-xl text-gray-600 leading-relaxed">Get professional Java development help from experienced developers who specialize in Spring Boot, Android, enterprise applications, and core Java programming.</p>
                    </div>

                    <div class="prose prose-lg max-w-none">
                        <div class="grid md:grid-cols-2 gap-12 mb-16">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-orange-100 text-orange-600 p-2 rounded-lg mr-3">🎯</span>
                                    Why Choose Our Java Development Help?
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Java remains one of the most widely used programming languages, powering millions of applications from mobile apps to enterprise systems. Our team of expert Java developers specializes in creating robust, scalable, and maintainable Java applications using modern frameworks and industry best practices. Whether you're building a Spring Boot microservice, developing an Android app, or working on core Java assignments, we have the expertise to help you excel.
                                </p>
                                <p class="text-gray-600">
                                    We understand the complexities of Java development—from mastering object-oriented principles and design patterns to implementing efficient multithreading and working with popular frameworks like Spring and Hibernate. Our experienced developers have worked on hundreds of Java projects across various domains, giving us deep knowledge of Java 17+ features, enterprise architecture, and testing methodologies.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                    <span class="bg-red-100 text-red-600 p-2 rounded-lg mr-3">🚀</span>
                                    Our Development Approach
                                </h3>
                                <p class="text-gray-600 mb-4">
                                    Our Java development process follows industry-standard methodologies and best practices. We begin by analyzing your project requirements and selecting the optimal approach—whether that's Spring Boot for modern web applications, JavaFX for desktop apps, or Android SDK for mobile development. We leverage the latest Java features including records, sealed classes, pattern matching, and the powerful Stream API.
                                </p>
                                <p class="text-gray-600">
                                    Every project includes clean, well-structured code following SOLID principles, comprehensive unit testing with JUnit 5, proper exception handling, and professional documentation. We use Maven or Gradle for dependency management and ensure your Java application is production-ready, maintainable, and scalable for future enhancements.
                                </p>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-8 mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">What We Cover in Java Development</h3>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-green-500 mr-2">🌱</span>
                                        Spring Boot & MVC
                                    </h4>
                                    <p class="text-sm text-gray-600">Complete Spring Boot applications, REST APIs, Spring Data JPA, Spring Security, and microservices architecture.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-blue-500 mr-2">☕</span>
                                        Core Java
                                    </h4>
                                    <p class="text-sm text-gray-600">OOP principles, collections, generics, lambda expressions, streams, multithreading, and Java 17+ features.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-cyan-500 mr-2">📱</span>
                                        Android Development
                                    </h4>
                                    <p class="text-sm text-gray-600">Android apps with activities, fragments, RecyclerView, Room database, Retrofit, and Material Design.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-purple-500 mr-2">🗄️</span>
                                        Database & JPA
                                    </h4>
                                    <p class="text-sm text-gray-600">Hibernate, JPA, JDBC, MySQL, PostgreSQL integration, entity relationships, and query optimization.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-orange-500 mr-2">🛠️</span>
                                        Build Tools
                                    </h4>
                                    <p class="text-sm text-gray-600">Maven and Gradle setup, dependency management, multi-module projects, and build automation.</p>
                                </div>
                                <div class="bg-white rounded-lg p-4 shadow-sm">
                                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                                        <span class="text-red-500 mr-2">🧪</span>
                                        Testing & Quality
                                    </h4>
                                    <p class="text-sm text-gray-600">JUnit 5, Mockito, integration testing, test-driven development, and code quality assurance.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Java Technologies & Frameworks We Master</h3>
                            <div class="grid md:grid-cols-2 gap-8">
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <span class="bg-orange-500 text-white p-2 rounded mr-2">⚙️</span>
                                        Frameworks & Libraries
                                    </h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start">
                                            <span class="text-orange-600 mr-2">✓</span>
                                            <span><strong>Spring Boot:</strong> Complete Spring ecosystem including MVC, Data, Security, and Cloud</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-orange-600 mr-2">✓</span>
                                            <span><strong>Hibernate & JPA:</strong> Object-relational mapping and database persistence</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-orange-600 mr-2">✓</span>
                                            <span><strong>Android SDK:</strong> Native Android app development with modern architecture</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-orange-600 mr-2">✓</span>
                                            <span><strong>JavaFX & Swing:</strong> Desktop GUI application development</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-orange-600 mr-2">✓</span>
                                            <span><strong>Apache & Jakarta EE:</strong> Enterprise application servers and specifications</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                        <span class="bg-red-500 text-white p-2 rounded mr-2">🔧</span>
                                        Core Java & Tools
                                    </h4>
                                    <ul class="space-y-2 text-gray-600">
                                        <li class="flex items-start">
                                            <span class="text-red-600 mr-2">✓</span>
                                            <span><strong>Java 17+:</strong> Modern Java features including records, sealed classes, and pattern matching</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-red-600 mr-2">✓</span>
                                            <span><strong>Maven & Gradle:</strong> Build automation and dependency management</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-red-600 mr-2">✓</span>
                                            <span><strong>JUnit & Mockito:</strong> Comprehensive testing frameworks</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-red-600 mr-2">✓</span>
                                            <span><strong>Design Patterns:</strong> Singleton, Factory, Builder, Observer, and more</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-red-600 mr-2">✓</span>
                                            <span><strong>Multithreading:</strong> Executors, CompletableFuture, and concurrent programming</span>
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
        <section id="how-it-works" class="py-20 bg-gradient-to-br from-orange-50 via-red-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">How Our Assignment Help Process Works</h2>
                    <p class="text-xl text-gray-600">Get your programming assignment completed in 4 simple steps</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            📋
                        </div>
                        <div class="text-orange-600 font-semibold mb-2">STEP 1</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Submit Your Assignment</h3>
                        <p class="text-gray-600">Share your assignment requirements, deadline, and any specific instructions. Upload relevant files if needed.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-red-500 to-rose-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            👨‍💻
                        </div>
                        <div class="text-red-600 font-semibold mb-2">STEP 2</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Expert Assignment</h3>
                        <p class="text-gray-600">We match you with a qualified programming expert who specializes in your assignment topic and language.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-rose-500 to-pink-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            ✍️
                        </div>
                        <div class="text-rose-600 font-semibold mb-2">STEP 3</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4">Solution Development</h3>
                        <p class="text-gray-600">Our expert completes your assignment with clean code, comments, and explanations to help you learn.</p>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-pink-500 to-purple-500 text-white w-16 h-16 rounded-xl flex items-center justify-center text-3xl mb-6 shadow-lg">
                            🎓
                        </div>
                        <div class="text-pink-600 font-semibold mb-2">STEP 4</div>
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing for Java Projects</h2>
                    <p class="text-xl text-gray-600">Choose the package that fits your project needs</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <!-- Basic Package -->
                    <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-orange-500 hover:shadow-xl transition-all duration-300">
                        <div class="text-orange-600 font-semibold mb-2">BASIC</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Simple Java Program</h3>
                        <div class="mb-6">
                            <span class="text-5xl font-bold text-gray-900">$35</span>
                            <span class="text-gray-600">/project</span>
                        </div>
                        <div class="text-gray-600 mb-6">⏱️ 12-24 hours delivery</div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Core Java functionality</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Object-oriented design</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Exception handling</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">File I/O operations</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Well-documented code</span>
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="block w-full text-center bg-gradient-to-r from-orange-600 to-red-600 text-white py-3 rounded-lg font-semibold hover:from-orange-700 hover:to-red-700 transition-all duration-200">
                            Get Started
                        </a>
                    </div>

                    <!-- Standard Package - Popular -->
                    <div class="bg-gradient-to-br from-orange-600 to-red-600 border-2 border-orange-600 rounded-2xl p-8 text-white transform scale-105 shadow-2xl">
                        <div class="bg-yellow-400 text-orange-900 inline-block px-3 py-1 rounded-full text-sm font-semibold mb-2">
                            MOST POPULAR
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Java Application</h3>
                        <div class="mb-6">
                            <span class="text-5xl font-bold">$90</span>
                            <span class="text-orange-100">/project</span>
                        </div>
                        <div class="text-orange-100 mb-6">⏱️ 2-3 days delivery</div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Spring Boot framework</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>RESTful API development</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Database integration (JPA/Hibernate)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Maven/Gradle build setup</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Unit testing with JUnit</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-yellow-400 mr-2">✓</span>
                                <span>Professional architecture</span>
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="block w-full text-center bg-white text-orange-600 py-3 rounded-lg font-semibold hover:bg-orange-50 transition-all duration-200">
                            Get Started
                        </a>
                    </div>

                    <!-- Premium Package -->
                    <div class="bg-white border-2 border-gray-200 rounded-2xl p-8 hover:border-orange-500 hover:shadow-xl transition-all duration-300">
                        <div class="text-red-600 font-semibold mb-2">PREMIUM</div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">Enterprise Java Solution</h3>
                        <div class="mb-6">
                            <span class="text-5xl font-bold text-gray-900">$200</span>
                            <span class="text-gray-600">/project</span>
                        </div>
                        <div class="text-gray-600 mb-6">⏱️ 5-7 days delivery</div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Complete enterprise application</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Microservices architecture</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Spring Cloud integration</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Security implementation</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Performance optimization</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Docker deployment</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-500 mr-2">✓</span>
                                <span class="text-gray-600">Comprehensive documentation</span>
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="block w-full text-center bg-gradient-to-r from-orange-600 to-red-600 text-white py-3 rounded-lg font-semibold hover:from-orange-700 hover:to-red-700 transition-all duration-200">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-4">Need a custom solution? Contact us for a personalized quote.</p>
                    <a href="{{ route('order') }}" class="text-orange-600 font-semibold hover:text-orange-700">
                        Request Custom Quote →
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gradient-to-br from-orange-50 via-red-50 to-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Success Stories from Students</h2>
                    <p class="text-xl text-gray-600">See how we've helped students excel in their Java projects</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"I was struggling with my Spring Boot project for weeks. The developer built an amazing REST API with JWT authentication, MySQL database integration, and proper error handling. The code was clean and well-organized. Finally understood how Spring works!"</p>
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                                DK
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">David Kim</div>
                                <div class="text-sm text-gray-600">Computer Science Student • Carnegie Mellon</div>
                                <div class="text-xs text-gray-500">Spring Boot REST API</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"My Android app project was due in 2 days and I couldn't get the backend communication working. They created a perfect Java backend with proper API endpoints, helped me integrate it with my Android app, and even added Firebase push notifications. Lifesaver!"</p>
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r from-red-500 to-rose-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                                SC
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">Sarah Chen</div>
                                <div class="text-sm text-gray-600">Software Engineering Major • Georgia Tech</div>
                                <div class="text-xs text-gray-500">Android App Backend</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                ⭐⭐⭐⭐⭐
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"Needed help with a complex multithreading assignment using ExecutorService and CompletableFuture. The expert not only solved the problem but also taught me about proper thread synchronization and concurrent programming patterns. Best investment ever!"</p>
                        <div class="flex items-center">
                            <div class="bg-gradient-to-r from-rose-500 to-pink-500 text-white w-12 h-12 rounded-full flex items-center justify-center font-bold mr-4">
                                JR
                            </div>
                            <div>
                                <div class="font-semibold text-gray-900">James Rodriguez</div>
                                <div class="text-sm text-gray-600">Java Development Bootcamp • Coding Dojo</div>
                                <div class="text-xs text-gray-500">Multithreading Application</div>
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
                        <p class="text-xl text-gray-600">Everything you need to know about our Java development services</p>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">What Java versions do you support?</h3>
                            <p class="text-gray-600">We work with all modern Java versions from Java 8 to the latest Java 21+. We leverage modern features like lambda expressions, streams, modules, records, and pattern matching based on your project requirements.</p>
                        </div>

                        <div class="bg-gradient-to-r from-red-50 to-rose-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Can you help with Spring Boot and Spring Framework?</h3>
                            <p class="text-gray-600">Yes! We specialize in Spring Boot, Spring MVC, Spring Data JPA, Spring Security, and Spring Cloud. We can build complete microservices architectures and enterprise applications.</p>
                        </div>

                        <div class="bg-gradient-to-r from-rose-50 to-pink-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">Do you provide Android development help?</h3>
                            <p class="text-gray-600">Absolutely! We offer Android app development using Java, including activities, fragments, RecyclerView, networking, database (Room, SQLite), Firebase integration, and Material Design.</p>
                        </div>

                        <div class="bg-gradient-to-r from-pink-50 to-purple-50 rounded-xl p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-3">What about testing and build tools?</h3>
                            <p class="text-gray-600">We include comprehensive unit testing with JUnit 5, integration testing, and use Maven or Gradle for build automation. We also set up CI/CD pipelines when needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Services Section -->
        <section class="py-20 bg-gradient-to-br from-gray-50 to-orange-50">
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

                    <!-- Full-Stack Combination -->
                    <div class="bg-white border-2 border-orange-200 rounded-2xl p-8 shadow-xl hover:shadow-2xl transform hover:-translate-y-2 transition-all duration-300">
                        <div class="text-center mb-6">
                            <div class="flex items-center justify-center mb-4">
                                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">☕</span>
                                </div>
                                <span class="text-2xl font-bold text-gray-400 mx-3">+</span>
                                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                    <span class="text-2xl">🐘</span>
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Full-Stack Solution</h3>
                            <p class="text-gray-600">Combine Java & PHP expertise</p>
                        </div>

                        <div class="bg-gradient-to-r from-orange-50 to-indigo-50 rounded-xl p-4 mb-6">
                            <h4 class="font-semibold text-gray-900 mb-3">Why Use Both?</h4>
                            <ul class="space-y-2 text-sm text-gray-600">
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>Java for robust backend + PHP for dynamic web frontend</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>Spring Boot microservices + Laravel admin panel</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>Java Android app + PHP REST API backend</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>Enterprise-grade architecture for scalable systems</span>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}"
                            class="block w-full bg-gradient-to-r from-orange-600 to-indigo-600 text-white text-center py-3 rounded-xl font-semibold hover:from-orange-700 hover:to-indigo-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                            Discuss Full-Stack Project →
                        </a>
                    </div>
                </div>

                <!-- Quick Navigation -->
                <div class="mt-12 text-center">
                    <a href="{{ route('services.programming.index') }}"
                        class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700 text-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        View All Programming Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="py-20 bg-gradient-to-r from-orange-600 to-red-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-6">Ready to Build Your Java Project?</h2>
                <p class="text-xl text-orange-100 mb-8 max-w-2xl mx-auto">
                    Join 1350+ students who have successfully completed their Java programming projects with our expert help.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('order') }}"
                        class="bg-white text-orange-600 px-8 py-4 rounded-lg font-semibold hover:bg-orange-50 transition-all duration-200 shadow-lg hover:shadow-xl">
                        Start Your Project Now
                    </a>
                    <a href="#pricing"
                        class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-orange-600 transition-all duration-200">
                        View Pricing Plans
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
