@extends('layouts.app')

@section('title', 'Java Programming Help - Expert Spring Boot & Java Development')
@section('description',
    'Get professional Java programming help from expert developers. 24/7 support for Spring Boot, Android, core Java, enterprise applications, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Expert Java Programming Services</h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Get professional Java development help from experienced developers who specialize in Spring Boot, Android, enterprise applications, and core Java programming.</p>
                    </div>

                    <div class="grid gap-6 md:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-orange-100 text-base dark:bg-orange-950/40">🎯</span>
                                Why Choose Our Java Development Help?
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Java remains one of the most widely used programming languages, powering millions of applications from mobile apps to enterprise systems. Our team of expert Java developers specializes in creating robust, scalable, and maintainable Java applications using modern frameworks and industry best practices. Whether you're building a Spring Boot microservice, developing an Android app, or working on core Java assignments, we have the expertise to help you excel.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                We understand the complexities of Java development—from mastering object-oriented principles and design patterns to implementing efficient multithreading and working with popular frameworks like Spring and Hibernate. Our experienced developers have worked on hundreds of Java projects across various domains, giving us deep knowledge of Java 17+ features, enterprise architecture, and testing methodologies.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-red-100 text-base dark:bg-red-950/40">🚀</span>
                                Our Development Approach
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Our Java development process follows industry-standard methodologies and best practices. We begin by analyzing your project requirements and selecting the optimal approach—whether that's Spring Boot for modern web applications, JavaFX for desktop apps, or Android SDK for mobile development. We leverage the latest Java features including records, sealed classes, pattern matching, and the powerful Stream API.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Every project includes clean, well-structured code following SOLID principles, comprehensive unit testing with JUnit 5, proper exception handling, and professional documentation. We use Maven or Gradle for dependency management and ensure your Java application is production-ready, maintainable, and scalable for future enhancements.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-5 text-center text-2xl font-bold tracking-tight text-slate-900 dark:text-white">What We Cover in Java Development</h3>
                        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-green-500">🌱</span>
                                    Spring Boot & MVC
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Complete Spring Boot applications, REST APIs, Spring Data JPA, Spring Security, and microservices architecture.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-blue-500">☕</span>
                                    Core Java
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">OOP principles, collections, generics, lambda expressions, streams, multithreading, and Java 17+ features.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-cyan-500">📱</span>
                                    Android Development
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Android apps with activities, fragments, RecyclerView, Room database, Retrofit, and Material Design.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-purple-500">🗄️</span>
                                    Database & JPA
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Hibernate, JPA, JDBC, MySQL, PostgreSQL integration, entity relationships, and query optimization.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-orange-500">🛠️</span>
                                    Build Tools
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Maven and Gradle setup, dependency management, multi-module projects, and build automation.</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1.5 flex items-center gap-2 text-sm font-semibold text-slate-900 dark:text-white">
                                    <span class="text-red-500">🧪</span>
                                    Testing & Quality
                                </h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">JUnit 5, Mockito, integration testing, test-driven development, and code quality assurance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h3 class="mb-5 text-center text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Java Technologies & Frameworks We Master</h3>
                        <div class="grid gap-5 md:grid-cols-2">
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                                <h4 class="mb-3 flex items-center gap-2 text-sm font-bold text-slate-900 dark:text-white">
                                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-orange-500 text-sm text-white">⚙️</span>
                                    Frameworks & Libraries
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-orange-600 dark:text-orange-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Spring Boot:</strong> Complete Spring ecosystem including MVC, Data, Security, and Cloud</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-orange-600 dark:text-orange-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Hibernate & JPA:</strong> Object-relational mapping and database persistence</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-orange-600 dark:text-orange-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Android SDK:</strong> Native Android app development with modern architecture</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-orange-600 dark:text-orange-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">JavaFX & Swing:</strong> Desktop GUI application development</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-orange-600 dark:text-orange-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Apache & Jakarta EE:</strong> Enterprise application servers and specifications</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                                <h4 class="mb-3 flex items-center gap-2 text-sm font-bold text-slate-900 dark:text-white">
                                    <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-red-500 text-sm text-white">🔧</span>
                                    Core Java & Tools
                                </h4>
                                <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-red-600 dark:text-red-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Java 17+:</strong> Modern Java features including records, sealed classes, and pattern matching</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-red-600 dark:text-red-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Maven & Gradle:</strong> Build automation and dependency management</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-red-600 dark:text-red-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">JUnit & Mockito:</strong> Comprehensive testing frameworks</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-red-600 dark:text-red-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Design Patterns:</strong> Singleton, Factory, Builder, Observer, and more</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="mt-0.5 text-red-600 dark:text-red-400">✓</span>
                                        <span><strong class="font-semibold text-slate-900 dark:text-white">Multithreading:</strong> Executors, CompletableFuture, and concurrent programming</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How It Works Section -->
        <section id="how-it-works" class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">How Our Assignment Help Process Works</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Get your programming assignment completed in 4 simple steps</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-orange-600 text-xl text-white">
                            📋
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-orange-600 dark:text-orange-400">Step 1</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Submit Your Assignment</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Share your assignment requirements, deadline, and any specific instructions. Upload relevant files if needed.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-red-600 text-xl text-white">
                            👨‍💻
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-red-600 dark:text-red-400">Step 2</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Assignment</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We match you with a qualified programming expert who specializes in your assignment topic and language.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-rose-600 text-xl text-white">
                            ✍️
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-rose-600 dark:text-rose-400">Step 3</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Solution Development</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our expert completes your assignment with clean code, comments, and explanations to help you learn.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-pink-600 text-xl text-white">
                            🎓
                        </div>
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-pink-600 dark:text-pink-400">Step 4</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Review & Learn</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Get your completed assignment with detailed documentation. Free revisions included to ensure your satisfaction.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Transparent Pricing for Java Projects</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Choose the package that fits your project needs</p>
                </div>

                <div class="mx-auto grid max-w-6xl gap-6 md:grid-cols-3">
                    <!-- Basic Package -->
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-orange-600 dark:text-orange-400">Basic</div>
                        <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">Simple Java Program</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-slate-900 dark:text-white">$35</span>
                            <span class="text-sm text-slate-600 dark:text-slate-400">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-slate-600 dark:text-slate-400">⏱️ 12-24 hours delivery</div>
                        <ul class="mb-6 space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Core Java functionality
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Object-oriented design
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Exception handling
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                File I/O operations
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Well-documented code
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-orange-500">
                            Get Started
                        </a>
                    </div>

                    <!-- Standard Package - Popular -->
                    <div class="flex flex-col rounded-2xl border border-orange-600 bg-orange-600 p-6 text-white shadow-sm">
                        <div class="mb-2 inline-block w-fit rounded-full bg-yellow-400 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-orange-900">
                            Most Popular
                        </div>
                        <h3 class="mb-3 text-lg font-bold">Java Application</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold">$90</span>
                            <span class="text-sm text-orange-100">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-orange-100">⏱️ 2-3 days delivery</div>
                        <ul class="mb-6 space-y-2 text-sm">
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Spring Boot framework
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                RESTful API development
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Database integration (JPA/Hibernate)
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Maven/Gradle build setup
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Unit testing with JUnit
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-yellow-400">✓</span>
                                Professional architecture
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-orange-600 shadow-sm transition-colors hover:bg-orange-50">
                            Get Started
                        </a>
                    </div>

                    <!-- Premium Package -->
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-1.5 text-xs font-semibold uppercase tracking-wider text-red-600 dark:text-red-400">Premium</div>
                        <h3 class="mb-3 text-lg font-bold text-slate-900 dark:text-white">Enterprise Java Solution</h3>
                        <div class="mb-4">
                            <span class="text-3xl font-bold text-slate-900 dark:text-white">$200</span>
                            <span class="text-sm text-slate-600 dark:text-slate-400">/project</span>
                        </div>
                        <div class="mb-5 text-sm text-slate-600 dark:text-slate-400">⏱️ 5-7 days delivery</div>
                        <ul class="mb-6 space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Complete enterprise application
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Microservices architecture
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Spring Cloud integration
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Security implementation
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Performance optimization
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Docker deployment
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                Comprehensive documentation
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex w-full items-center justify-center gap-2 rounded-xl bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-orange-500">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <p class="mb-2 text-sm text-slate-600 dark:text-slate-400">Need a custom solution? Contact us for a personalized quote.</p>
                    <a href="{{ route('order') }}" class="text-sm font-semibold text-orange-600 hover:text-orange-700 dark:text-orange-400 dark:hover:text-orange-300">
                        Request Custom Quote →
                    </a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Success Stories from Students</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">See how we've helped students excel in their Java projects</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"I was struggling with my Spring Boot project for weeks. The developer built an amazing REST API with JWT authentication, MySQL database integration, and proper error handling. The code was clean and well-organized. Finally understood how Spring works!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-orange-600 text-sm font-bold text-white">
                                DK
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">David Kim</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Computer Science Student • Carnegie Mellon</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">Spring Boot REST API</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"My Android app project was due in 2 days and I couldn't get the backend communication working. They created a perfect Java backend with proper API endpoints, helped me integrate it with my Android app, and even added Firebase push notifications. Lifesaver!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-red-600 text-sm font-bold text-white">
                                SC
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">Sarah Chen</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Software Engineering Major • Georgia Tech</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">Android App Backend</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center text-amber-400">
                            ⭐⭐⭐⭐⭐
                        </div>
                        <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400">"Needed help with a complex multithreading assignment using ExecutorService and CompletableFuture. The expert not only solved the problem but also taught me about proper thread synchronization and concurrent programming patterns. Best investment ever!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-rose-600 text-sm font-bold text-white">
                                JR
                            </div>
                            <div>
                                <div class="text-sm font-bold text-slate-900 dark:text-white">James Rodriguez</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Java Development Bootcamp • Coding Dojo</div>
                                <div class="text-xs text-slate-500 dark:text-slate-500">Multithreading Application</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Frequently Asked Questions</h2>
                        <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Everything you need to know about our Java development services</p>
                    </div>

                    <div class="space-y-4">
                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What Java versions do you support?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We work with all modern Java versions from Java 8 to the latest Java 21+. We leverage modern features like lambda expressions, streams, modules, records, and pattern matching based on your project requirements.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you help with Spring Boot and Spring Framework?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes! We specialize in Spring Boot, Spring MVC, Spring Data JPA, Spring Security, and Spring Cloud. We can build complete microservices architectures and enterprise applications.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Do you provide Android development help?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely! We offer Android app development using Java, including activities, fragments, RecyclerView, networking, database (Room, SQLite), Firebase integration, and Material Design.</p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What about testing and build tools?</h3>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We include comprehensive unit testing with JUnit 5, integration testing, and use Maven or Gradle for build automation. We also set up CI/CD pipelines when needed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Related Services Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Related Programming Services</h2>
                    <p class="mt-4 text-base text-slate-600 sm:text-lg dark:text-slate-400">Expand your development capabilities with complementary services</p>
                </div>

                <div class="mx-auto grid max-w-5xl gap-6 md:grid-cols-2">
                    <!-- PHP Programming Card -->
                    <div class="rounded-2xl border border-slate-800 bg-indigo-600 p-6 text-white shadow-sm">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white text-2xl shadow-sm">
                                🐘
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">PHP Programming</h3>
                                <div class="flex items-center gap-1 text-xs text-indigo-200">
                                    <span>⭐</span>
                                    <span>4.8/5 • 1100+ Projects</span>
                                </div>
                            </div>
                        </div>

                        <p class="mb-4 text-sm leading-relaxed text-indigo-100">
                            Need web development or CMS solutions? Our PHP experts specialize in Laravel, Symfony, WordPress, and custom web applications.
                        </p>

                        <div class="mb-5 grid grid-cols-2 gap-2 text-sm">
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                Laravel & Symfony
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                WordPress Dev
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                API Development
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="text-yellow-400">✓</span>
                                From $30/project
                            </div>
                        </div>

                        <a href="{{ route('services.programming.show', 'php') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-white px-4 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm transition-colors hover:bg-indigo-50">
                            Explore PHP Services →
                        </a>
                    </div>

                    <!-- Full-Stack Combination -->
                    <div class="rounded-2xl border border-orange-200 bg-white p-6 shadow-sm dark:border-orange-900/40 dark:bg-slate-900">
                        <div class="mb-4 text-center">
                            <div class="mb-3 flex items-center justify-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-orange-100 text-lg dark:bg-orange-950/40">☕</div>
                                <span class="text-lg font-bold text-slate-400 dark:text-slate-600">+</span>
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-100 text-lg dark:bg-indigo-950/40">🐘</div>
                            </div>
                            <h3 class="mb-1 text-lg font-bold text-slate-900 dark:text-white">Full-Stack Solution</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Combine Java & PHP expertise</p>
                        </div>

                        <div class="mb-5 rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                            <h4 class="mb-2 text-sm font-semibold text-slate-900 dark:text-white">Why Use Both?</h4>
                            <ul class="space-y-1.5 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>Java for robust backend + PHP for dynamic web frontend</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>Spring Boot microservices + Laravel admin panel</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>Java Android app + PHP REST API backend</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    <span>Enterprise-grade architecture for scalable systems</span>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-orange-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-orange-500">
                            Discuss Full-Stack Project →
                        </a>
                    </div>
                </div>

                <!-- Quick Navigation -->
                <div class="mt-8 text-center">
                    <a href="{{ route('services.programming.index') }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-orange-600 transition-colors hover:text-orange-700 dark:text-orange-400 dark:hover:text-orange-300">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        View All Programming Services
                    </a>
                </div>
            </div>
        </section>

        <!-- Final CTA Section -->
        <section class="bg-orange-600 py-14 text-white sm:py-16">
            <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Ready to Build Your Java Project?</h2>
                <p class="mx-auto mt-4 max-w-2xl text-base text-orange-100 sm:text-lg">
                    Join 1350+ students who have successfully completed their Java programming projects with our expert help.
                </p>
                <div class="mt-7 flex flex-col items-center justify-center gap-3 sm:flex-row">
                    <a href="{{ route('order') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-orange-600 shadow-sm transition-colors hover:bg-orange-50">
                        Start Your Project Now
                    </a>
                    <a href="#pricing"
                        class="inline-flex items-center justify-center gap-2 rounded-xl border border-white px-6 py-3 text-sm font-semibold text-white transition-colors hover:bg-white hover:text-orange-600">
                        View Pricing Plans
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
