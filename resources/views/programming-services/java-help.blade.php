@extends('layouts.app')

@section('title', 'Java Assignment Help | Expert Spring Boot & OOP Programming Assistance')
@section('description', 'Struggling with Java OOP concepts, multithreading, or Spring Boot microservices? Get expert Java assignment help from vetted USA developers. 100% compilable code.')

@section('content')
    <div class="min-h-screen">
        {{-- ===================================================
             CREATIVE HERO SECTION — DO NOT MODIFY
        =================================================== --}}
        <x-creative-hero :service="$service" />

        {{-- ===================================================
             SECTION 1 – TRUST BAR / SOCIAL PROOF
             SEO: Builds E-E-A-T immediately after hero
        =================================================== --}}
        <section class="border-y border-slate-100 bg-white py-5 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
                    <div class="flex items-center gap-2.5">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">4.9/5</span>
                        <span class="text-xs text-slate-500 dark:text-slate-400">from 1,350+ Java reviews</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">24</strong> Java Experts Online</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">4,800+ Java Systems Coded</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">JUnit &amp; Maven Verified</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – CORE JAVA TECH & FRAMEWORKS
             SEO: Keyword coverage for search terms
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" id="java-coverage" aria-labelledby="java-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Complete Java Ecosystem</p>
                    <h2 id="java-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Get <span class="text-blue-600 dark:text-blue-400">Java Assignment Help</span> in Any Framework
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Whether it is structuring object-oriented design patterns, coding Spring Boot microservices, building JavaFX desktops, or resolving concurrency locks — we cover all Java paradigms.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🌱</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Spring Boot</span>
                        <span class="text-[10px] text-slate-500">JPA / Microservices / MVC</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-orange-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">📦</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Core Java OOP</span>
                        <span class="text-[10px] text-slate-500">Classes / Interface / Stream</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🖥️</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">JavaFX &amp; Swing</span>
                        <span class="text-[10px] text-slate-500">UI Layouts / Controllers</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-red-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">⚙️</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Maven &amp; Gradle</span>
                        <span class="text-[10px] text-slate-500">pom.xml / Dependencies</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🧪</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">JUnit &amp; Mockito</span>
                        <span class="text-[10px] text-slate-500">Unit Tests / Mocking</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🔗</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">JDBC &amp; Hibernate</span>
                        <span class="text-[10px] text-slate-500">SQL Persist / Queries</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – WHY STUDENTS PREFER US FOR JAVA HELP
             SEO: High EEAT block
        =================================================== --}}
        <section class="bg-slate-900 py-16 sm:py-20" aria-labelledby="why-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">OOP Clean Code Guaranteed</span>
                    </div>
                    <h2 id="why-heading" class="text-4xl md:text-5xl font-black text-white leading-tight">
                        Why Choose Our <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Java Programming Help</span>
                    </h2>
                    <p class="mt-5 text-base text-slate-400 max-w-2xl mx-auto">
                        Java development requires mastering SOLID principles, polymorphic classes, clean interface separations, and efficient threading. Here is why students choose us.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-start">
                    <div class="space-y-5 text-slate-400 text-[15px] leading-relaxed">
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                                Vetted Java Software Developers
                            </h3>
                            <p>Every Java project is handled by an expert developer specializing in JVM architectures. They write clean, object-oriented code following structural design patterns (Singleton, Factory, Builder, Strategy).</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                                Standard Build &amp; Dependency Configs
                            </h3>
                            <p>We configure build automation setups cleanly. Whether your project guidelines specify Maven (pom.xml) or Gradle dependency scripts, your libraries compile and download automatically without folder path issues.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                                Comprehensive JUnit Test Cases Included
                            </h3>
                            <p>We write comprehensive test layers. If requested, we include detailed JUnit 5 and Mockito test files checking edge cases, database transactions, and component mock triggers.</p>
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div class="p-7 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10">
                            <h3 class="text-xl font-black text-white mb-6">What We Deliver with Every Order</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">✅</div>
                                    <div><p class="text-white font-bold text-sm">Tested Source Code (.java files)</p><p class="text-xs text-slate-500 mt-0.5">Fully-functional code directory, classes, interfaces, and packages</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📦</div>
                                    <div><p class="text-white font-bold text-sm">Build Configuration Files</p><p class="text-xs text-slate-500 mt-0.5">Correct Maven pom.xml or Gradle build scripts, resolving dependency paths</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📝</div>
                                    <div><p class="text-white font-bold text-sm">Step-by-Step Setup README</p><p class="text-xs text-slate-500 mt-0.5">Instructions to run classes, compile via CLI, or load into IntelliJ/Eclipse/NetBeans</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">⚡</div>
                                    <div><p class="text-white font-bold text-sm">Fast urgent Delivery Options</p><p class="text-xs text-slate-500 mt-0.5">Stuck on NullPointer crashes or multithreading deadlocks? We solve it in hours</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔒</div>
                                    <div><p class="text-white font-bold text-sm">Strict Confidentiality</p><p class="text-xs text-slate-500 mt-0.5">Your email, names, class parameters, and source folders are kept highly secure</p></div>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}" class="group relative inline-flex w-full items-center justify-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-500 transition-all duration-300 shadow-lg hover:-translate-y-0.5 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                            <span class="relative z-10">Get Java Assignment Help Now</span>
                            <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – TYPES OF JAVA ASSIGNMENTS TACKLED
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" id="java-services" aria-labelledby="services-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Assignment Scope</p>
                    <h2 id="services-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Types of <span class="text-blue-600 dark:text-blue-400">Java Assignments</span> We Handle
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Our experts possess deep knowledge of Java specifications, concurrency, frameworks, and GUI layout tools.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white text-xl">☕</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Object-Oriented Design (OOD)</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Designing abstract structures. Implementing inheritance chains, polymorphic methods, interfaces, abstract classes, encapsulation boundaries, and design patterns.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• SOLID principles design</li>
                            <li>• Interface &amp; Abstract class separation</li>
                            <li>• Polymorphic method overriding</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white text-xl">🌱</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Spring Boot &amp; REST APIs</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Building web servers and backend APIs. Coding Spring Controller endpoints, Spring Data JPA repositories, Spring Security configurations, and microservices.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• REST API endpoint mappings</li>
                            <li>• Hibernate Entity mappings</li>
                            <li>• JPA Query methods optimization</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-600 text-white text-xl">🔢</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Java Collections &amp; Streams</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Managing in-memory data structures. Implementing custom Lists, HashMaps, Binary Trees, Graph traversals, sorting criteria, and Stream API conversions.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• HashMap hashing collisons</li>
                            <li>• Tree traversals (DFS/BFS)</li>
                            <li>• Lambda &amp; functional Streams</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-600 text-white text-xl">🔄</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Multithreading &amp; Concurrency</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Handling concurrent tasks. Synchronizing shared states, implementing Thread Pools, Executors, Runnable interfaces, Lock objects, and Semaphores.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Thread synchronization locks</li>
                            <li>• Producer-Consumer structures</li>
                            <li>• ExecutorService thread pools</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-600 text-white text-xl">🖥️</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Java GUI Desktop Apps</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Designing graphical desktop user interfaces. Structuring JavaFX FXML files, setting up event controllers, or building traditional Swing layouts.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• JavaFX FXML view layout</li>
                            <li>• Controller action listeners</li>
                            <li>• Swing JFrames / Components</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-600 text-white text-xl">🔧</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Build Automation Configs</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Setting up package builds. Syncing Maven pom.xml declarations, configuring plugins, updating Gradle build files, and resolving compiler discrepancies.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Maven pom.xml dependencies</li>
                            <li>• Gradle compilation setups</li>
                            <li>• Classpath variable resolutions</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – STEPS TO GET JAVA ASSISTANCE
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="steps-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-purple-600 dark:text-purple-400">Streamlined Process</p>
                    <h2 id="steps-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Get Your Java Code in 4 Steps
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 text-base font-black text-white shadow-md">1</div>
                        <div class="mb-3 text-2xl">📋</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Upload Guidelines</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Submit your class criteria, database specs, deadlines, and target build environment details.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 text-base font-black text-white shadow-md">2</div>
                        <div class="mb-3 text-2xl">🎯</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Get Fair Quote</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">A vetted Java systems engineer reviews your OOP or microservice guidelines and provides a quote.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 text-base font-black text-white shadow-md">3</div>
                        <div class="mb-3 text-2xl">💻</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Codes System</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">The developer designs classes, codes methods, integrates databases, structures tests, and compiles the code.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-600 text-base font-black text-white shadow-md">4</div>
                        <div class="mb-3 text-2xl">🚀</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Run &amp; Review</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Download the working project folder, review the README compile directions, run classes, and request tweaks.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 6 – RISK-FREE GUARANTEES
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="guarantee-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Guarantees</p>
                    <h2 id="guarantee-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Guaranteed Java Code execution
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-900/40 dark:bg-blue-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">💡</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Original Code</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every interface layout, class hierarchy, and controller endpoint is coded from scratch based on your custom requirements.</p>
                    </div>
                    <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-900/40 dark:bg-emerald-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-xl text-white">⏱️</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Deadline Compliance</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We monitor our JVM compilation pipelines continuously to ensure your source folders are delivered before the deadline.</p>
                    </div>
                    <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6 dark:border-purple-900/40 dark:bg-purple-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-xl text-white">🔄</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">72-Hour Free Revisions</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Need minor variable shifts, additional inline comments, or updated libraries? We offer free revisions within 72 hours of delivery.</p>
                    </div>
                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-900/40 dark:bg-amber-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-600 text-xl text-white">💰</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Refund Guarantee</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">If our Java code fails to compile or misses critical OOP constraints explicitly detailed in your instructions, you are covered by our refund policy.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-slate-700 text-xl text-white">🔒</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Privacy</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your details are kept strictly private. Your files and assignment solutions are never shared or published.</p>
                    </div>
                    <div class="rounded-2xl border border-cyan-200 bg-cyan-50 p-6 dark:border-cyan-900/40 dark:bg-cyan-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-600 text-xl text-white">💬</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">24/7 Support Desk</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Connect with customer support or message your assigned Java specialist directly to clarify requirements or get progress updates.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – STUDENT JAVA REVIEWS
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="reviews-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">Student Reviews</p>
                    <h2 id="reviews-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        What Students Say About Our Java Help
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Spring Boot API</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"I was struggling to link Spring Data JPA entities with PostgreSQL mapping. The expert structured the repository files, added database validations, and verified everything compiled cleanly. Incredible service!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Sophia L.</p><p class="text-xs text-slate-500">UC Berkeley</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">JavaFX Desktop App</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"My JavaFX desktop assignment required complex FXML views with custom event controllers. The code delivered was extremely clean, fully documented, and ran perfectly on my IntelliJ IDE."</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">David K.</p><p class="text-xs text-slate-500">UIUC</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Multithreading Concurrency</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Had persistent thread deadlock crashes in my Java simulation project. The helper traced the concurrency loop, added reentrant locks, and explained the solution inside the README. Saved me!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Marcus T.</p><p class="text-xs text-slate-500">UT Austin</p></div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 8 – IN-DEPTH SEO CONTENT BLOCK
             SEO: Long-form keyword-rich educational material
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="content-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <div class="space-y-6">
                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h2 id="content-heading" class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">🎯</span>
                                What is Java Assignment Help?
                            </h2>
                            <div class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <p><strong class="text-slate-900 dark:text-white font-semibold">Java assignment help</strong> is a specialized programming service designed to support computer science students with object-oriented design, multithreading synchronization, build configs, and desktop layout tasks. Coding in Java requires understanding compile restrictions, object design guidelines (SOLID), garbage collection cycles, and library syncs.</p>
                                <p>Whether you are coding custom lists, building Spring Boot REST API routes, configuring Hibernate JPA database entities, or resolving JavaFX controller actions — our experts write clean code and provide setup guides to help you succeed.</p>
                                <p>We cover all major platforms: Core Java 8-21+, Spring Boot, JavaFX, Swing, Maven, Gradle, Hibernate JPA, JDBC, JUnit 5, and Android SDK.</p>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">🏫</span>
                                Common Java Coding Challenges We Solve
                            </h3>
                            <ul class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">NullPointerExceptions (NPE):</strong> Checking object instantiations, using Optional wrappers, and handling null boundary states.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Thread deadlocks:</strong> Fixing thread synchronization overlaps, managing resource locks, and setting up executor systems.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Maven / Gradle Mismatches:</strong> Syncing dependency coordinates inside pom.xml or build.gradle configs.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">⭐</span>
                                Java Technologies &amp; Tools We Cover
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Spring Boot','Core Java','JavaFX','Swing','Maven','Gradle','Hibernate JPA','JDBC','JUnit 5','Mockito','IntelliJ IDEA','Eclipse IDE','NetBeans','Spring Security','Restful API','JSON Jackson','Docker','PostgreSQL','MySQL','AWS RDS'] as $tech)
                                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-bold text-slate-700 dark:bg-slate-800 dark:text-slate-300">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">📊</span>
                                Our Java Track Record
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-blue-600 dark:text-blue-400">4,800+</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Systems Built</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-emerald-600 dark:text-emerald-400">98%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Delivery</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-amber-600 dark:text-amber-400">4.9★</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-purple-600 dark:text-purple-400">100%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Compilation Rate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 9 – FAQ ACCORDION
             SEO: Targets rich SERP results
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="faq-heading">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">FAQs</p>
                    <h2 id="faq-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Java Assignment Help FAQs
                    </h2>
                </div>

                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can your developers write Spring Boot microservices?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We specialize in Spring Boot development. Our specialists design microservices, configure Spring Data JPA entities, write REST controllers, and setup security filters.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you write JUnit test files?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. If specified in your guidelines, we include JUnit 5 and Mockito mock tests checking component integrations, constraints, and method returns.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">How do I load the project into IntelliJ IDEA or Eclipse?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every codebase we deliver contains a `README.md` file. It explains how to import the directory as a Maven or Gradle project, downloading all dependencies automatically inside IntelliJ, Eclipse, or VS Code.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the Java source code be plagiarism-free?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely. We write all interfaces, abstract declarations, loops, streams, and repositories from scratch based on your custom requirements. We do not use generic code bases.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">How fast can you compile and deliver my Java project?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Simple OOP class tasks, algorithm functions, or GUI layouts can be solved inside 3 to 12 hours. Large enterprise systems or Spring Boot integrations usually take 24 to 72 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 10 – FINAL CTA
             SEO: High converting closing block
        =================================================== --}}
        <section class="relative overflow-hidden bg-slate-900 py-16 sm:py-20">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                    <span class="flex h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Java Specialists Online Now</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                    Ready to Get Your<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Java Code Compilable?</span>
                </h2>

                <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                    Get clean, compilable Java code complete with setup files, Maven/Gradle dependencies, and JUnit test cases. Submit details for a free quote within 5 minutes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="relative z-10 text-sm">Get Java Assignment Help</span>
                        <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                    <span class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.3em]">Free Quote &middot; No Obligation</span>
                </div>

                <div class="mt-12 flex flex-wrap items-center justify-center gap-x-10 gap-y-5">
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">4,800+</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Systems Built</p>
                    </div>
                    <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">4.9/5</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</p>
                    </div>
                    <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">98%</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Delivery</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             FAQ & SERVICE SCHEMA MARKUP
        =================================================== --}}
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "FAQPage",
          "mainEntity": [
            {
              "@@type": "Question",
              "name": "Can your developers write Spring Boot microservices?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We specialize in Spring Boot development. Our specialists design microservices, configure Spring Data JPA entities, write REST controllers, and setup security filters."
              }
            },
            {
              "@@type": "Question",
              "name": "Do you write JUnit test files?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. If specified in your guidelines, we include JUnit 5 and Mockito mock tests checking component integrations, constraints, and method returns."
              }
            },
            {
              "@@type": "Question",
              "name": "How do I load the project into IntelliJ IDEA or Eclipse?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Every codebase we deliver contains a README.md file. It explains how to import the directory as a Maven or Gradle project, downloading all dependencies automatically inside IntelliJ, Eclipse, or VS Code."
              }
            },
            {
              "@@type": "Question",
              "name": "Will the Java source code be plagiarism-free?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Absolutely. We write all interfaces, abstract declarations, loops, streams, and repositories from scratch based on your custom requirements. We do not use generic code bases."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Service",
          "name": "Java Assignment Help",
          "description": "Professional Java assignment help and JVM programming assistance. Expert developers available 24/7 for Spring Boot, MVC, JPA Hibernate, collections, multithreading, and JavaFX setups.",
          "provider": {
            "@@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "serviceType": "Java Assignment Help",
          "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "15",
            "highPrice": "500"
          },
          "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "1350",
            "bestRating": "5"
          }
        }
        </script>
    </div>
@endsection
