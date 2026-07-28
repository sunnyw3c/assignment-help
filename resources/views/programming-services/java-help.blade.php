@extends('layouts.app')

@section('title', 'Java Programming Help USA | Clean OOP & Spring Boot Code')
@section('description', 'Get expert Java programming help in the USA. Vetted US developers build clean OOP classes, Spring Boot APIs, multithreading & JUnit tests. Fast 24/7 delivery.')

@section('content')
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950">
        {{-- ===================================================
             CREATIVE HERO SECTION
        =================================================== --}}
        <x-creative-hero 
            :service="$service" 
            title="Get Expert <span class='text-[#f16700] font-extrabold'>Java Programming Help</span> in the USA"
            subtitle="Conquer complex Object-Oriented Programming, Spring Boot microservices, multithreaded concurrency, and JUnit test suites. Get clean, compilable Java source code delivered directly by vetted US software engineers — Plagiarism-free with 2-hour urgent delivery."
            :breadcrumbs="[
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Programming Help', 'url' => route('services.programming.index')],
                ['label' => 'Java Programming Help', 'url' => '']
            ]"
        />

        {{-- ===================================================
             SECTION 1 – TRUST BAR / EEAT SOCIAL PROOF
             SEO: Builds immediate E-E-A-T trust signals
        =================================================== --}}
        <section class="border-y border-slate-200 bg-white py-5 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-4 text-center sm:text-left">
                    <div class="flex items-center gap-2.5">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">4.9/5 Rating</span>
                        <span class="text-xs text-slate-500 dark:text-slate-400">(1,350+ Java reviews)</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2.5 w-2.5 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">
                            <strong class="text-slate-900 dark:text-white">28</strong> Java Specialists Online
                        </span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Compilable Code Guarantee</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 2 00-2 2v12a2 2 002 2h10a2 2 002-2V7a2 2 00-2-2h-2M9 5a2 2 002 2h2a2 2 002-2M9 5a2 2 001 2-2h2a2 2 2 001 2 2" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">JUnit &amp; SonarQube Verified</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – HERO FEATURE BANNER & OVERVIEW WITH IMAGE
             SEO: Keyword inclusion & visual engagement
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 relative overflow-hidden">
            <div class="absolute top-1/2 left-0 w-72 h-72 bg-blue-500/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-7">
                        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-gradient-to-r from-blue-500/10 via-indigo-500/10 to-purple-500/10 dark:from-blue-950/80 dark:to-purple-950/80 border border-blue-200 dark:border-blue-800/80 shadow-sm">
                            <span class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-pulse"></span>
                            <span class="text-xs font-black uppercase tracking-widest text-blue-700 dark:text-blue-300">Top-Rated Java Programming Help USA</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-[1.15]">
                            Master <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 dark:from-blue-400 dark:via-indigo-400 dark:to-purple-400">Java Programming</span> with Vetted US Engineers
                        </h2>

                        <p class="text-base sm:text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                            Whether you need help architecting SOLID object-oriented class hierarchies, configuring Spring Data JPA repositories, debugging multithreaded deadlocks, or passing strict JUnit test suites — we provide production-grade, compilable Java code designed for US university standards.
                        </p>

                        {{-- Feature Checklist --}}
                        <div class="space-y-3 pt-1">
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Custom Java Source Code (.java files &amp; complete package directory)</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Maven pom.xml or Gradle build scripts configured automatically</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Step-by-step README.md guide for IntelliJ IDEA, Eclipse, or NetBeans</span>
                            </div>
                        </div>

                        {{-- 4 Metric Cards Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            {{-- Card 1: Zero Errors --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-blue-100 dark:border-slate-700/80 hover:border-blue-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-blue-600/10 dark:bg-blue-500/20 border border-blue-500/30 text-blue-600 dark:text-blue-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    ⚡
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Zero Errors</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Syntax Verified &amp; Compilable</p>
                                </div>
                            </div>

                            {{-- Card 2: JUnit 5 --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-indigo-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-indigo-100 dark:border-slate-700/80 hover:border-indigo-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-600/10 dark:bg-indigo-500/20 border border-indigo-500/30 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    🧪
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">JUnit 5 &amp; Mockito</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Unit Test Suites Included</p>
                                </div>
                            </div>

                            {{-- Card 3: Maven/Gradle --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-purple-100 dark:border-slate-700/80 hover:border-purple-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-purple-600/10 dark:bg-purple-500/20 border border-purple-500/30 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    📦
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Maven &amp; Gradle</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Auto Dependency Sync</p>
                                </div>
                            </div>

                            {{-- Card 4: Urgent Delivery --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-emerald-100 dark:border-slate-700/80 hover:border-emerald-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-emerald-600/10 dark:bg-emerald-500/20 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    ⏱️
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">2–48 Hours</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Urgent Delivery Option</p>
                                </div>
                            </div>
                        </div>

                        {{-- CTA Buttons --}}
                        <div class="pt-3 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                            <a href="{{ route('order') }}" class="group relative inline-flex items-center justify-center gap-2 px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-black text-sm rounded-2xl transition-all shadow-lg shadow-blue-600/25 hover:-translate-y-0.5">
                                <span>Get Java Programming Help</span>
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="#java-code-preview" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-800 dark:text-slate-200 font-bold text-sm rounded-2xl transition-all border border-slate-200 dark:border-slate-700">
                                <span>View Code Sample</span>
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Image Container (Right Column) --}}
                    <div class="lg:col-span-6">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-800 bg-slate-950 p-2.5 group">
                            {{-- Top Floating Badge --}}
                            <div class="absolute top-6 left-6 z-20 px-3.5 py-1.5 rounded-full bg-slate-900/90 backdrop-blur-md border border-slate-700 text-white flex items-center gap-2 shadow-lg">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-xs font-bold">100% Compilable Code</span>
                            </div>

                            <img src="{{ asset('images/java_hero_banner.png') }}" 
                                 alt="Top-Rated Java Programming Help USA - Spring Boot and Object-Oriented Development" 
                                 class="w-full h-auto rounded-2xl object-cover transform group-hover:scale-105 transition-transform duration-700" 
                                 loading="eager" />
                                 
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-transparent to-transparent"></div>
                            
                            {{-- Bottom Floating Control Bar --}}
                            <div class="absolute bottom-5 left-5 right-5 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-slate-800 text-white flex items-center justify-between shadow-xl">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-blue-600/30 border border-blue-500/50 flex items-center justify-center text-xl">☕</div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-100">Java SE 8-22 &amp; Spring Boot 3</p>
                                        <p class="text-[11px] text-slate-400">Compilable &amp; Plagiarism-Free</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-lg bg-emerald-500/20 text-emerald-400 text-[11px] font-black uppercase tracking-wider border border-emerald-500/30">Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – INTERACTIVE JAVA CODE & IDE EXECUTION PREVIEW
             SEO & EEAT: Demonstrates technical competence with real code
        =================================================== --}}
        <section id="java-code-preview" class="py-14 sm:py-20 bg-slate-900 text-white" x-data="{ activeTab: 'springboot' }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-400">Empirical Code Quality</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-white mt-2">
                        Real <span class="text-blue-400">Java Code Samples</span> Delivered to Students
                    </h2>
                    <p class="text-sm sm:text-base text-slate-400 mt-3">
                        We don't write pseudocode or broken snippets. We deliver enterprise-grade, compilable Java source code following SOLID principles and industry conventions.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                    {{-- Code Editor Column --}}
                    <div class="lg:col-span-7 rounded-2xl bg-slate-950 border border-slate-800 shadow-2xl overflow-hidden">
                        {{-- Editor Header & Tabs --}}
                        <div class="flex items-center justify-between px-4 py-3 bg-slate-900 border-b border-slate-800 overflow-x-auto">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                                <span class="w-3 h-3 rounded-full bg-green-500"></span>
                                <span class="ml-2 text-xs font-mono text-slate-400 hidden sm:inline">IntelliJ IDEA - Java Editor</span>
                            </div>
                            <div class="flex gap-2">
                                <button @click="activeTab = 'springboot'" :class="activeTab === 'springboot' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 text-xs rounded-md transition-colors font-mono">StudentController.java</button>
                                <button @click="activeTab = 'junit'" :class="activeTab === 'junit' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 text-xs rounded-md transition-colors font-mono">StudentTest.java</button>
                                <button @click="activeTab = 'concurrency'" :class="activeTab === 'concurrency' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 text-xs rounded-md transition-colors font-mono">TaskExecutor.java</button>
                            </div>
                        </div>

                        {{-- Code Content Windows --}}
                        <div class="p-5 font-mono text-xs sm:text-sm leading-relaxed overflow-x-auto min-h-[380px] bg-slate-950 text-slate-200">
                            {{-- Tab 1: Spring Boot Controller --}}
                            <div x-show="activeTab === 'springboot'" class="space-y-1">
                                <p><span class="text-purple-400">package</span> com.assignmenthelp.controller;</p>
                                <p class="text-slate-500">// Fully documented Spring Boot 3 REST API Endpoint</p>
                                <p><span class="text-purple-400">import</span> org.springframework.web.bind.annotation.*;</p>
                                <p><span class="text-purple-400">import</span> org.springframework.http.ResponseEntity;</p>
                                <p><span class="text-purple-400">import</span> com.assignmenthelp.service.StudentService;</p>
                                <br>
                                <p><span class="text-yellow-400">@RestController</span></p>
                                <p><span class="text-yellow-400">@RequestMapping</span>(<span class="text-emerald-300">"/api/v1/students"</span>)</p>
                                <p><span class="text-purple-400">public class</span> <span class="text-blue-300">StudentController</span> {</p>
                                <p class="pl-4"><span class="text-purple-400">private final</span> StudentService studentService;</p>
                                <br>
                                <p class="pl-4"><span class="text-purple-400">public</span> <span class="text-blue-300">StudentController</span>(StudentService service) {</p>
                                <p class="pl-8"><span class="text-purple-400">this</span>.studentService = service;</p>
                                <p class="pl-4">}</p>
                                <br>
                                <p class="pl-4"><span class="text-yellow-400">@GetMapping</span>(<span class="text-emerald-300">"/{id}"</span>)</p>
                                <p class="pl-4"><span class="text-purple-400">public</span> ResponseEntity&lt;StudentDTO&gt; <span class="text-blue-300">getStudentById</span>(<span class="text-yellow-400">@PathVariable</span> Long id) {</p>
                                <p class="pl-8">StudentDTO student = studentService.findById(id);</p>
                                <p class="pl-8"><span class="text-purple-400">return</span> ResponseEntity.ok(student);</p>
                                <p class="pl-4">}</p>
                                <p>}</p>
                            </div>

                            {{-- Tab 2: JUnit Test --}}
                            <div x-show="activeTab === 'junit'" class="space-y-1" style="display: none;">
                                <p><span class="text-purple-400">package</span> com.assignmenthelp.test;</p>
                                <p class="text-slate-500">// JUnit 5 &amp; Mockito Unit Testing Suite</p>
                                <p><span class="text-purple-400">import</span> org.junit.jupiter.api.Test;</p>
                                <p><span class="text-purple-400">import</span> static org.junit.jupiter.api.Assertions.*;</p>
                                <br>
                                <p><span class="text-purple-400">class</span> <span class="text-blue-300">StudentServiceTest</span> {</p>
                                <p class="pl-4"><span class="text-yellow-400">@Test</span></p>
                                <p class="pl-4"><span class="text-purple-400">void</span> <span class="text-blue-300">shouldReturnStudentWhenValidIdProvided</span>() {</p>
                                <p class="pl-8"><span class="text-slate-500">// Arrange</span></p>
                                <p class="pl-8">Long studentId = 101L;</p>
                                <p class="pl-8"><span class="text-slate-500">// Act</span></p>
                                <p class="pl-8">StudentDTO result = studentService.findById(studentId);</p>
                                <p class="pl-8"><span class="text-slate-500">// Assert</span></p>
                                <p class="pl-8">assertNotNull(result);</p>
                                <p class="pl-8">assertEquals(<span class="text-emerald-300">"Java OOP Specialist"</span>, result.getTrackName());</p>
                                <p class="pl-4">}</p>
                                <p>}</p>
                            </div>

                            {{-- Tab 3: Concurrency --}}
                            <div x-show="activeTab === 'concurrency'" class="space-y-1" style="display: none;">
                                <p><span class="text-purple-400">package</span> com.assignmenthelp.concurrency;</p>
                                <p class="text-slate-500">// Thread Pool Executor &amp; Synchronization Locks</p>
                                <p><span class="text-purple-400">import</span> java.util.concurrent.*;</p>
                                <br>
                                <p><span class="text-purple-400">public class</span> <span class="text-blue-300">ParallelTaskExecutor</span> {</p>
                                <p class="pl-4"><span class="text-purple-400">private final</span> ExecutorService pool = Executors.newFixedThreadPool(4);</p>
                                <br>
                                <p class="pl-4"><span class="text-purple-400">public</span> Future&lt;String&gt; <span class="text-blue-300">executeTask</span>(Callable&lt;String&gt; task) {</p>
                                <p class="pl-8"><span class="text-purple-400">return</span> pool.submit(task);</p>
                                <p class="pl-4">}</p>
                                <p>}</p>
                            </div>
                        </div>

                        {{-- Execution Bar --}}
                        <div class="px-5 py-3 bg-slate-900 border-t border-slate-800 flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-emerald-400 font-mono font-bold">BUILD SUCCESSFUL in 1.14s</span>
                            </div>
                            <span class="text-slate-400 font-mono">0 Errors &middot; 0 Warnings</span>
                        </div>
                    </div>

                    {{-- Image & Verification Column --}}
                    <div class="lg:col-span-5 space-y-6">
                        <div class="rounded-2xl overflow-hidden border border-slate-800 shadow-xl bg-slate-950 p-2">
                            <img src="{{ asset('images/java_ide_preview.png') }}" 
                                 alt="IntelliJ IDEA Java Code Execution and JUnit Passing Tests" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>

                        <div class="p-6 rounded-2xl bg-slate-800/60 border border-slate-700/80 space-y-4">
                            <h3 class="text-lg font-bold text-white flex items-center gap-2">
                                <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                What Makes Our Java Code Compilable?
                            </h3>
                            <ul class="space-y-2.5 text-xs text-slate-300 leading-relaxed">
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-400 font-bold">•</span>
                                    <span><strong>Strict JDK Target Matching:</strong> We compile against your university's specific Java version (Java 8, 11, 17, or 21 LTS).</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-400 font-bold">•</span>
                                    <span><strong>Dependency Injection:</strong> Automated Maven <code class="bg-slate-900 px-1 py-0.5 rounded text-blue-300">pom.xml</code> or Gradle scripts prevent ClassNotFound exceptions.</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-400 font-bold">•</span>
                                    <span><strong>Complete Package Structure:</strong> Delivered ready to import into IntelliJ IDEA, Eclipse, or NetBeans.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – ECOSYSTEM & FRAMEWORKS COVERED (MINIMAL & COMPACT)
             SEO: High-density keyword coverage for Java subtopics
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Complete Ecosystem</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        Java Programming &amp; Assignment Help Coverage
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Full-stack JVM support: from core object-oriented fundamentals to Spring Boot cloud microservices.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/java_ecosystem_map.png') }}" 
                                 alt="Java Ecosystem Architecture Map" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>
                    </div>

                    {{-- Compact Micro-Badges Grid Column --}}
                    <div class="lg:col-span-7">
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            @foreach([
                                ['Core Java OOP', '☕', 'SOLID & Classes'],
                                ['Spring Boot 3', '🌱', 'REST & Microservices'],
                                ['Hibernate JPA', '🔗', 'ORM & Databases'],
                                ['Multithreading', '🔄', 'Concurrency Locks'],
                                ['JUnit 5 Testing', '🧪', 'Mockito & Tests'],
                                ['Maven & Gradle', '📦', 'Build Management'],
                                ['JavaFX & Swing', '🖥️', 'GUI Desktop Apps'],
                                ['Data Structures', '🔢', 'Trees & HashMaps'],
                                ['JDBC & MySQL', '🗄️', 'Database Queries']
                            ] as [$name, $icon, $desc])
                            <div class="p-3 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 flex items-center gap-3 hover:border-blue-500/50 transition-colors shadow-sm">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-lg shrink-0">
                                    {{ $icon }}
                                </div>
                                <div class="min-w-0">
                                    <div class="text-xs font-bold text-slate-900 dark:text-white truncate">{{ $name }}</div>
                                    <div class="text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $desc }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Full-Width SEO Tag Cloud Card --}}
                <div class="mt-6 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm">
                    <h3 class="mb-4 flex items-center gap-3 text-lg font-black text-slate-900 dark:text-white">
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white text-base">⭐</span>
                        Java Technologies &amp; Tools We Cover
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Java 22','Spring Boot 3','Spring MVC','Hibernate ORM','Spring Data JPA','Maven','Gradle','JUnit 5','Mockito','JavaFX','Swing','Multithreading','ExecutorService','REST API','Microservices','JDBC','MySQL','PostgreSQL','IntelliJ IDEA','Eclipse','SonarQube'] as $tech)
                        <span class="rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200/60 dark:border-slate-700/60 px-3.5 py-1.5 text-xs font-bold text-slate-700 dark:text-slate-300 hover:border-orange-500/50 transition-colors shadow-2xs">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – TYPES OF JAVA ASSIGNMENT HELP WE PROVIDE
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Tailored Solutions</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2">
                        Types of <span class="text-indigo-600 dark:text-indigo-400">Java Assignment Help</span> We Provide in USA
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3">
                        Whether you are stuck on a 2-hour homework submission or a semester-long capstone microservice project, we provide targeted solutions.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {{-- Card 1 --}}
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/60 flex flex-col justify-between hover:border-blue-500 transition-all">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-blue-600 text-white flex items-center justify-center text-xl font-bold mb-4">01</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Java OOP &amp; Class Hierarchy Design</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Designing clean inheritance trees, abstract interfaces, polymorphic methods, encapsulation parameters, and SOLID architectural patterns.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between text-xs font-semibold text-blue-600 dark:text-blue-400">
                            <span>Includes UML Diagrams</span>
                            <span>100% Compilable</span>
                        </div>
                    </div>

                    {{-- Card 2 --}}
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/60 flex flex-col justify-between hover:border-blue-500 transition-all">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-xl font-bold mb-4">02</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Spring Boot Web APIs &amp; JPA Persistence</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Building REST controllers, Spring Data JPA repositories, Hibernate entity mappings, database connection pools, and Spring Security filters.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between text-xs font-semibold text-emerald-600 dark:text-emerald-400">
                            <span>PostgreSQL / MySQL</span>
                            <span>Swagger OpenAPI</span>
                        </div>
                    </div>

                    {{-- Card 3 --}}
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/60 flex flex-col justify-between hover:border-blue-500 transition-all">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-purple-600 text-white flex items-center justify-center text-xl font-bold mb-4">03</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Java Multithreading &amp; Concurrency</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Resolving thread deadlocks, synchronizing shared resources, implementing Producer-Consumer queue models, Semaphores, and ThreadPools.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between text-xs font-semibold text-purple-600 dark:text-purple-400">
                            <span>Zero Deadlocks</span>
                            <span>ExecutorService</span>
                        </div>
                    </div>

                    {{-- Card 4 --}}
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/60 flex flex-col justify-between hover:border-blue-500 transition-all">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-amber-600 text-white flex items-center justify-center text-xl font-bold mb-4">04</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">JavaFX &amp; Swing GUI Applications</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Designing desktop user interfaces using JavaFX FXML layouts, Scene Builder, custom CSS styling, action listener event handlers, and Swing components.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between text-xs font-semibold text-amber-600 dark:text-amber-400">
                            <span>FXML &amp; Controllers</span>
                            <span>Responsive UI</span>
                        </div>
                    </div>

                    {{-- Card 5 --}}
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/60 flex flex-col justify-between hover:border-blue-500 transition-all">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-cyan-600 text-white flex items-center justify-center text-xl font-bold mb-4">05</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Data Structures &amp; Algorithm Optimization</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Implementing custom Binary Search Trees, Graphs, HashMaps, Heap Priority Queues, Sorting algorithms, Big-O time complexity analysis, and recursion.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between text-xs font-semibold text-cyan-600 dark:text-cyan-400">
                            <span>Big-O Analysis</span>
                            <span>Optimal Memory</span>
                        </div>
                    </div>

                    {{-- Card 6 --}}
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/60 flex flex-col justify-between hover:border-blue-500 transition-all">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-red-600 text-white flex items-center justify-center text-xl font-bold mb-4">06</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Maven &amp; Gradle Build Bug Fixes</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                                Fixing NullPointerExceptions, ClassNotFoundErrors, missing POM dependency declarations, incompatible JDK compiler targets, and build script crashes.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-slate-200 dark:border-slate-700 flex items-center justify-between text-xs font-semibold text-red-600 dark:text-red-400">
                            <span>Urgent Debugging</span>
                            <span>1-Hour Fixes</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 6 – COMPATIBILITY & TECHNICAL MATRIX (EEAT)
             SEO: High EEAT signal showing deep technical specs
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950 border-y border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Technical Rigor</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-2">
                        Supported Java Versions, IDEs &amp; Environment Matrix
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-2">
                        We configure your Java projects to run seamlessly in your university's exact runtime setup.
                    </p>
                </div>

                <div class="overflow-x-auto rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm">
                    <table class="w-full text-left text-xs sm:text-sm text-slate-700 dark:text-slate-300">
                        <thead class="bg-slate-100 dark:bg-slate-800/80 text-slate-900 dark:text-white font-bold border-b border-slate-200 dark:border-slate-700">
                            <tr>
                                <th class="p-4">Category</th>
                                <th class="p-4">Supported Technologies</th>
                                <th class="p-4">Quality Verification Standard</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                            <tr>
                                <td class="p-4 font-bold text-blue-600 dark:text-blue-400">Java JDK Versions</td>
                                <td class="p-4">Java 8, Java 11 LTS, Java 17 LTS, Java 21 LTS, Java 22</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 font-bold text-xs">Target Compiler Match</span></td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-blue-600 dark:text-blue-400">Supported IDEs</td>
                                <td class="p-4">IntelliJ IDEA Ultimate/Community, Eclipse IDE, Apache NetBeans, VS Code</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 font-bold text-xs">Ready-to-Import Project Files</span></td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-blue-600 dark:text-blue-400">Build Tools</td>
                                <td class="p-4">Apache Maven (pom.xml), Gradle (build.gradle), Ant</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 font-bold text-xs">Automated Dependency Sync</span></td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-blue-600 dark:text-blue-400">Testing &amp; Quality</td>
                                <td class="p-4">JUnit 5, Mockito, AssertJ, SonarQube, Checkstyle</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 font-bold text-xs">Passing Test Suite Guarantee</span></td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-blue-600 dark:text-blue-400">Databases</td>
                                <td class="p-4">PostgreSQL, MySQL, H2 In-Memory, Oracle DB, SQLite, MongoDB</td>
                                <td class="p-4"><span class="px-2 py-0.5 rounded bg-emerald-100 dark:bg-emerald-950/60 text-emerald-700 dark:text-emerald-300 font-bold text-xs">JDBC &amp; JPA Scripted Setup</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – MEET OUR JAVA EXPERTS (VERIFIED CREDENTIALS - MINIMAL & COMPACT)
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Verified Credentials</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        Meet Our Vetted US Java Experts
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Oracle Certified Java Masters and Senior Spring Boot Architects averaging 8+ years of industry experience.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="relative rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/java_expert_tutor.png') }}" 
                                 alt="Senior Java Programming Expert Conducting Code Review" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                            <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-slate-900/90 backdrop-blur-md border border-slate-700 text-white flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span class="font-bold">28 Java Specialists Online</span>
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">100% US Engineers</span>
                            </div>
                        </div>
                    </div>

                    {{-- 3 Compact Expert Cards Column --}}
                    <div class="lg:col-span-7 space-y-3">
                        @foreach([
                            ['Dr. Alex Rivera', 'AR', 'bg-blue-600', 'PhD CS &middot; Oracle Certified Master', '1,200+ Projects', '4.98', ['Core Java', 'OOP', 'Spring Boot']],
                            ['Elena Rostova', 'ER', 'bg-indigo-600', 'Senior Spring Boot Architect &middot; MS CS', '950+ Projects', '4.96', ['REST APIs', 'JPA', 'Microservices']],
                            ['Marcus Vance', 'MV', 'bg-purple-600', 'Java Concurrency & Systems Specialist', '880+ Projects', '4.95', ['Multithreading', 'JVM', 'JUnit 5']]
                        ] as [$name, $initials, $bg, $title, $projects, $rating, $tags])
                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-blue-500/50 transition-colors shadow-sm flex items-center gap-4">
                            <div class="relative shrink-0">
                                <div class="w-11 h-11 rounded-full {{ $bg }} text-white font-bold text-sm flex items-center justify-center shadow-md">
                                    {{ $initials }}
                                </div>
                                <span class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-emerald-500 border-2 border-white dark:border-slate-800"></span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between gap-2">
                                    <h3 class="text-sm font-bold text-slate-900 dark:text-white truncate">{{ $name }}</h3>
                                    <div class="flex items-center gap-1 text-xs text-amber-500 font-bold shrink-0">
                                        <span>★</span>
                                        <span>{{ $rating }}</span>
                                        <span class="text-[10px] font-normal text-slate-500">({{ $projects }})</span>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5 truncate">{!! $title !!}</p>
                                <div class="flex flex-wrap gap-1.5 mt-2">
                                    @foreach($tags as $tag)
                                    <span class="px-2 py-0.5 rounded bg-slate-200/70 dark:bg-slate-700/70 text-[10px] font-semibold text-slate-700 dark:text-slate-300">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 8 – HOW OUR JAVA HELP WORKS (HOMEPAGE DESIGN MATCH)
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800 relative overflow-hidden">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-purple-500/10 border border-purple-500/20 text-purple-600 dark:text-purple-400 mb-3">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-purple-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-purple-500"></span>
                        </span>
                        <span class="text-xs font-black uppercase tracking-wider">Streamlined Process</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 dark:text-white tracking-tight">
                        How Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 dark:from-purple-400 dark:via-indigo-400 dark:to-blue-400">Java Assignment Help</span> Works
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3 max-w-2xl mx-auto">
                        We've streamlined Java programming assistance into a 4-step collaborative workflow from initial upload to compilable delivery.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    {{-- Step 1 --}}
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">01</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">📝</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Upload Brief</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                Share your Java assignment specifications, PDF guidelines, UML diagrams, and target deadline.
                            </p>
                        </div>
                    </div>

                    {{-- Step 2 (Staggered Down) --}}
                    <div class="group relative lg:mt-16">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Expert Match</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                We match your task with a vetted US Java specialist (Spring Boot, Core OOP, or Multithreading).
                            </p>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-purple-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">⚡</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Code &amp; Compile</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                Your developer writes clean Java classes, configures Maven/Gradle dependencies, and passes JUnit tests.
                            </p>
                        </div>
                    </div>

                    {{-- Step 4 (Staggered Down) --}}
                    <div class="group relative lg:mt-16">
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">04</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-emerald-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">✅</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Deliver &amp; Review</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                Download your project zip with README instructions, run classes in your IDE, and request free edits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 9 – STUDENT REVIEWS & TESTIMONIALS
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-amber-500">Student Reviews</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2">
                        What Students Say About Our <span class="text-blue-600 dark:text-blue-400">Java Programming Help</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "I was struggling with Spring Data JPA entity mappings for my web services final assignment. The expert structured the repository files, added database validations, and included clean JUnit tests. Best Java programming help!"
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Sophia L.</span>
                            <span class="text-slate-500">UC Berkeley &middot; Spring Boot</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "My JavaFX GUI project required complex FXML views and event controllers. The code delivered was extremely clean, fully documented with inline comments, and ran perfectly on IntelliJ IDEA."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">David K.</span>
                            <span class="text-slate-500">UIUC &middot; JavaFX GUI</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "Had persistent thread deadlock crashes in my Java concurrency simulation project. The helper traced the synchronized loop, implemented ReentrantLocks, and explained the solution inside the README."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Marcus T.</span>
                            <span class="text-slate-500">UT Austin &middot; Multithreading</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 10 – IN-DEPTH EDUCATIONAL CONTENT (MINIMAL & COMPACT)
             SEO: Long-form keyword-rich educational material
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
                    {{-- Left Column: Educational Intro + Compact Concepts Grid --}}
                    <div class="lg:col-span-8 space-y-4 flex flex-col justify-between">
                        <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-3">
                            <span class="text-[11px] font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Academic Excellence</span>
                            <h2 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white leading-snug">
                                Why Is Java Assignment Help &amp; Programming Assistance Essential for CS Students in the USA?
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Java remains a core enterprise language in North American universities. Whether you need expert <strong>Java programming help</strong> or <strong>Java assignment help</strong>, CS students face steep learning curves with static typing, SOLID design patterns, Spring Data JPA repositories, multithreaded locks, and JUnit testing.
                            </p>
                        </div>

                        {{-- Compact Concepts Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🏛️</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">1. SOLID Principles in OOP</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Single Responsibility, Open-Closed, Liskov, Interface Segregation, and Dependency Inversion.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🌱</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">2. Spring Boot Microservices</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">REST API controllers, Spring Data JPA repositories, DTO mappers, and Maven pom.xml build files.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">⚡</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">3. Concurrency &amp; Thread Safety</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Java ExecutorService, ReentrantLock, and synchronized blocks preventing multithreaded deadlocks.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🧪</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">4. Unit Testing with JUnit 5</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Test assertions, Mockito mock objects, and verifying boundary edge-case scenarios.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right Column: Full-Height Quality Guarantee Card --}}
                    <div class="lg:col-span-4 h-full">
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 text-white shadow-lg h-full flex flex-col justify-between space-y-4">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-9 h-9 rounded-xl bg-blue-600/30 border border-blue-500/50 flex items-center justify-center text-lg shrink-0">
                                        🛡️
                                    </div>
                                    <div>
                                        <h3 class="text-base font-bold text-white">Our Java Guarantee</h3>
                                        <p class="text-[10px] text-slate-400">SonarQube &amp; JUnit Verified</p>
                                    </div>
                                </div>

                                <ul class="space-y-2.5 text-xs text-slate-300">
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Zero Syntax or Compilation Errors</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Turnitin Plagiarism Report Included</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Detailed Setup README.md Included</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>JUnit 5 &amp; Mockito Test Suite Included</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Maven pom.xml &amp; Gradle Build Scripts</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Free Revisions within 72 Hours</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>100% Confidential &amp; Secure Order</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="pt-3 space-y-3 border-t border-slate-800">
                                <div class="grid grid-cols-2 gap-2 text-center text-[11px]">
                                    <div class="p-2 rounded-lg bg-slate-800/70 border border-slate-700/50">
                                        <span class="block font-bold text-slate-200">4.2 Hours</span>
                                        <span class="text-[10px] text-slate-400">Avg Delivery</span>
                                    </div>
                                    <div class="p-2 rounded-lg bg-slate-800/70 border border-slate-700/50">
                                        <span class="block font-bold text-emerald-400">100% Pass</span>
                                        <span class="text-[10px] text-slate-400">JUnit Tests</span>
                                    </div>
                                </div>

                                <a href="{{ route('order') }}" class="group relative inline-flex items-center justify-center gap-2 w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs rounded-xl transition-all shadow-md">
                                    <span>Get Java Programming Help</span>
                                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 11 – FAQ ACCORDION
             SEO: Targets rich SERP results
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-10">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Frequently Asked Questions</span>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mt-2">
                        Java Programming Help FAQs
                    </h2>
                </div>

                <div class="space-y-4">
                    <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-bold text-slate-900 dark:text-white text-sm">
                            <span>Can your Java experts code Spring Boot microservices and REST APIs?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We specialize in Spring Boot 3 web applications. Our specialists design microservices, configure Spring Data JPA entities, write REST controllers, handle security filters, and provide Maven/Gradle build configurations.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-bold text-slate-900 dark:text-white text-sm">
                            <span>Do you include JUnit unit tests with the Java solution?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. When specified in your assignment requirements, we include JUnit 5 and Mockito test suites checking edge cases, boundary parameters, and component mock triggers.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-bold text-slate-900 dark:text-white text-sm">
                            <span>How do I import and run the code in IntelliJ IDEA or Eclipse?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every Java solution we deliver contains a step-by-step <code class="bg-slate-200 dark:bg-slate-800 px-1 py-0.5 rounded text-blue-600 dark:text-blue-400">README.md</code> file explaining how to import the project directory, sync Maven or Gradle dependencies automatically, and run the main class file.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-bold text-slate-900 dark:text-white text-sm">
                            <span>Is the Java code guaranteed to compile without errors?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-400">100% yes. We compile and test every Java project against your requested JDK target version prior to delivery, ensuring zero syntax or compiler errors.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 12 – FINAL CTA
        =================================================== --}}
        <section class="py-16 sm:py-20 bg-slate-900 text-white relative overflow-hidden">
            <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center space-y-6">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-bold uppercase border border-emerald-500/30">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    24/7 Java Developers Available
                </span>
                <h2 class="text-3xl sm:text-5xl font-black tracking-tight">
                    Ready to Get Compilable <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Java Programming Help?</span>
                </h2>
                <p class="text-sm sm:text-base text-slate-400 max-w-2xl mx-auto">
                    Get clean, compilable Java source code complete with Maven/Gradle dependencies, JUnit test suites, and setup directions. Free quote in under 5 minutes.
                </p>
                <div class="pt-4 flex justify-center">
                    <a href="{{ route('order') }}" class="px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white font-black text-sm rounded-xl transition-all shadow-lg hover:shadow-blue-500/30">
                        Get Java Programming Help Now
                    </a>
                </div>
            </div>
        </section>

        {{-- ===================================================
             STRUCTURED DATA / JSON-LD SCHEMA MARKUP
        =================================================== --}}
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "FAQPage",
          "mainEntity": [
            {
              "@@type": "Question",
              "name": "Can your Java experts code Spring Boot microservices and REST APIs?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We specialize in Spring Boot 3 web applications. Our specialists design microservices, configure Spring Data JPA entities, write REST controllers, handle security filters, and provide Maven/Gradle build configurations."
              }
            },
            {
              "@@type": "Question",
              "name": "Do you include JUnit unit tests with the Java solution?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. When specified in your assignment requirements, we include JUnit 5 and Mockito test suites checking edge cases, boundary parameters, and component mock triggers."
              }
            },
            {
              "@@type": "Question",
              "name": "How do I import and run the code in IntelliJ IDEA or Eclipse?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Every Java solution we deliver contains a step-by-step README.md file explaining how to import the project directory, sync Maven or Gradle dependencies automatically, and run the main class file."
              }
            },
            {
              "@@type": "Question",
              "name": "Is the Java code guaranteed to compile without errors?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "100% yes. We compile and test every Java project against your requested JDK target version prior to delivery, ensuring zero syntax or compiler errors."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Service",
          "name": "Java Programming Help",
          "serviceType": "Java Programming Assignment Help",
          "description": "Professional Java programming help and JVM code development. Vetted developers available 24/7 for Spring Boot microservices, Core Java OOP design, multithreading, and JUnit unit testing.",
          "provider": {
            "@@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "35",
            "highPrice": "500"
          }
        }
        </script>
        <x-related-services currentSlug="java" />
    </div>
@endsection
