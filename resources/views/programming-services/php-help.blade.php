@extends('layouts.app')

@section('title', 'PHP Programming Help USA | Expert Laravel 11 & Web Coders')
@section('description', 'Get expert PHP programming help in the USA. Vetted US developers code Laravel 11 apps, Symfony APIs, Eloquent ORM & PHPUnit test suites. Fast 24/7 delivery.')

@section('content')
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950">
        {{-- ===================================================
             CREATIVE HERO SECTION
        =================================================== --}}
        <x-creative-hero 
            :service="$service" 
            title="Get Expert <span class='text-[#f16700] font-extrabold'>PHP Programming Help</span> in the USA"
            subtitle="Master Laravel 11, Symfony 7, Core PHP 8.3 OOP, Eloquent ORM, and RESTful APIs. Get clean, compilable, PSR-12 compliant PHP code delivered directly by vetted US software engineers — Plagiarism-free with 2-hour urgent delivery."
            :breadcrumbs="[
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Programming Help', 'url' => route('services.programming.index')],
                ['label' => 'PHP Programming Help', 'url' => '']
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
                        <span class="text-xs text-slate-500 dark:text-slate-400">(1,150+ PHP reviews)</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2.5 w-2.5 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">
                            <strong class="text-slate-900 dark:text-white">22</strong> PHP Specialists Online
                        </span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Compilable Code Guarantee</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 2 00-2 2v12a2 2 002 2h10a2 2 002-2V7a2 2 00-2-2h-2M9 5a2 2 002 2h2a2 2 2 002-2M9 5a2 2 001 2-2h2a2 2 2 001 2 2" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">PSR-12 &amp; PHPUnit Verified</span>
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
                            <span class="text-xs font-black uppercase tracking-widest text-blue-700 dark:text-blue-300">Top-Rated PHP Programming Help USA</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-[1.15]">
                            Master <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 dark:from-blue-400 dark:via-indigo-400 dark:to-purple-400">PHP Development</span> with Vetted US Engineers
                        </h2>

                        <p class="text-base sm:text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                            Whether you need help architecting object-oriented MVC controllers, configuring Laravel Eloquent relationships, writing custom WordPress hooks, or passing strict PHPUnit test suites — we provide production-grade, compilable PHP code designed for US university standards.
                        </p>

                        {{-- Feature Checklist --}}
                        <div class="space-y-3 pt-1">
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Custom PHP 8.x Source Code (.php files &amp; PSR-4 autoload directory)</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Composer json &amp; Eloquent database migrations configured</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Step-by-step README.md guide for XAMPP, Herd, PhpStorm, or VS Code</span>
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
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Syntax Verified &amp; Clean</p>
                                </div>
                            </div>

                            {{-- Card 2: PHPUnit --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-indigo-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-indigo-100 dark:border-slate-700/80 hover:border-indigo-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-600/10 dark:bg-indigo-500/20 border border-indigo-500/30 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    🧪
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">PHPUnit &amp; Pest</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Unit Test Suites Included</p>
                                </div>
                            </div>

                            {{-- Card 3: Composer --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-purple-100 dark:border-slate-700/80 hover:border-purple-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-purple-600/10 dark:bg-purple-500/20 border border-purple-500/30 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    📦
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Composer PSR-4</h3>
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
                                <span>Get PHP Programming Help</span>
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="#php-code-preview" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-800 dark:text-slate-200 font-bold text-sm rounded-2xl transition-all border border-slate-200 dark:border-slate-700">
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
                                <span class="text-xs font-bold">Compilable Code Guarantee</span>
                            </div>

                            <img src="{{ asset('images/php_hero_banner.png') }}" 
                                 alt="Top-Rated PHP Programming Help USA - Laravel 11 and Object-Oriented Development" 
                                 class="w-full h-auto rounded-2xl object-cover transform group-hover:scale-105 transition-transform duration-700" 
                                 loading="eager" />
                                 
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-transparent to-transparent"></div>
                            
                            {{-- Bottom Floating Control Bar --}}
                            <div class="absolute bottom-5 left-5 right-5 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-slate-800 text-white flex items-center justify-between shadow-xl">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-purple-600/30 border border-purple-500/50 flex items-center justify-center text-xl">🐘</div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-100">PHP 8.3 &amp; Laravel 11 MVC</p>
                                        <p class="text-[11px] text-slate-400">PSR-12 &amp; Plagiarism-Free</p>
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
             SECTION 3 – INTERACTIVE CODE & EXECUTION PREVIEW
             SEO: High engagement & interactive proof
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-slate-900 text-white border-b border-slate-800" id="php-code-preview">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-xs font-black uppercase tracking-widest text-purple-400">Interactive IDE Preview</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-white mt-2">
                        Production-Grade <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">PHP Code Quality</span>
                    </h2>
                    <p class="text-sm text-slate-400 mt-2">
                        We deliver clean, compilable, PSR-12 compliant code files with complete Laravel controllers, Eloquent ORM models, and Pest test assertions.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center" x-data="{ activeTab: 'controller' }">
                    {{-- IDE Window Column --}}
                    <div class="lg:col-span-7 rounded-2xl overflow-hidden border border-slate-800 bg-slate-950 shadow-2xl">
                        {{-- Editor Top Bar --}}
                        <div class="px-4 py-3 bg-slate-900 border-b border-slate-800 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                                <span class="ml-2 text-xs font-mono text-slate-400">PhpStorm — PHP 8.3 &middot; PSR-12</span>
                            </div>
                            
                            {{-- Code Tabs --}}
                            <div class="flex gap-1 text-xs">
                                <button @click="activeTab = 'controller'" :class="activeTab === 'controller' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    UserController.php
                                </button>
                                <button @click="activeTab = 'test'" :class="activeTab === 'test' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    UserTest.php
                                </button>
                                <button @click="activeTab = 'composer'" :class="activeTab === 'composer' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    composer.json
                                </button>
                            </div>
                        </div>

                        {{-- Code Panels --}}
                        <div class="p-5 font-mono text-xs leading-relaxed overflow-x-auto min-h-[300px]">
                            {{-- Tab 1: UserController --}}
                            <div x-show="activeTab === 'controller'" class="space-y-1 text-slate-300">
                                <p><span class="text-purple-400">&lt;?php</span></p>
                                <br>
                                <p><span class="text-purple-400">namespace</span> App\Http\Controllers;</p>
                                <p><span class="text-purple-400">use</span> App\Models\User;</p>
                                <p><span class="text-purple-400">use</span> Illuminate\Http\JsonResponse;</p>
                                <br>
                                <p><span class="text-purple-400">class</span> <span class="text-blue-300">UserController</span> <span class="text-purple-400">extends</span> Controller {</p>
                                <p class="pl-4"><span class="text-purple-400">public function</span> <span class="text-blue-300">index</span>(): JsonResponse {</p>
                                <p class="pl-8"><span class="text-slate-500">// Fetch active users with eager-loaded posts</span></p>
                                <p class="pl-8">$users = User::<span class="text-blue-300">with</span>(<span class="text-emerald-400">'posts'</span>)-&gt;<span class="text-blue-300">where</span>(<span class="text-emerald-400">'active'</span>, true)-&gt;<span class="text-blue-300">get</span>();</p>
                                <p class="pl-8"><span class="text-purple-400">return</span> response()-&gt;<span class="text-blue-300">json</span>([<span class="text-emerald-400">'status'</span> =&gt; <span class="text-emerald-400">'success'</span>, <span class="text-emerald-400">'data'</span> =&gt; $users]);</p>
                                <p class="pl-4">}</p>
                                <p>}</p>
                            </div>

                            {{-- Tab 2: UserTest --}}
                            <div x-show="activeTab === 'test'" class="space-y-1 text-slate-300" x-cloak>
                                <p><span class="text-purple-400">&lt;?php</span></p>
                                <br>
                                <p><span class="text-purple-400">use</span> App\Models\User;</p>
                                <br>
                                <p><span class="text-blue-300">test</span>(<span class="text-emerald-400">'can fetch active user list via api'</span>, <span class="text-purple-400">function</span> () {</p>
                                <p class="pl-4">$user = User::<span class="text-blue-300">factory</span>()-&gt;<span class="text-blue-300">create</span>([<span class="text-emerald-400">'active'</span> =&gt; true]);</p>
                                <br>
                                <p class="pl-4">$response = <span class="text-purple-400">$this</span>-&gt;<span class="text-blue-300">getJson</span>(<span class="text-emerald-400">'/api/users'</span>);</p>
                                <br>
                                <p class="pl-4">$response-&gt;<span class="text-blue-300">assertStatus</span>(200)</p>
                                <p class="pl-8">-&gt;<span class="text-blue-300">assertJsonPath</span>(<span class="text-emerald-400">'status'</span>, <span class="text-emerald-400">'success'</span>);</p>
                                <p>});</p>
                            </div>

                            {{-- Tab 3: composer.json --}}
                            <div x-show="activeTab === 'composer'" class="space-y-1 text-slate-300" x-cloak>
                                <p>{</p>
                                <p class="pl-4"><span class="text-blue-300">"name"</span>: <span class="text-emerald-400">"assignmenthelp/php-app"</span>,</p>
                                <p class="pl-4"><span class="text-blue-300">"require"</span>: {</p>
                                <p class="pl-8"><span class="text-blue-300">"php"</span>: <span class="text-emerald-400">"^8.3"</span>,</p>
                                <p class="pl-8"><span class="text-blue-300">"laravel/framework"</span>: <span class="text-emerald-400">"^11.0"</span></p>
                                <p class="pl-4">},</p>
                                <p class="pl-4"><span class="text-blue-300">"autoload"</span>: {</p>
                                <p class="pl-8"><span class="text-blue-300">"psr-4"</span>: { <span class="text-blue-300">"App\\"</span>: <span class="text-emerald-400">"app/"</span> }</p>
                                <p class="pl-4">}</p>
                                <p>}</p>
                            </div>
                        </div>

                        {{-- Execution Bar --}}
                        <div class="px-5 py-3 bg-slate-900 border-t border-slate-800 flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-emerald-400 font-mono font-bold">PEST TESTS PASSED in 0.42s</span>
                            </div>
                            <span class="text-slate-400 font-mono">0 Errors &middot; 0 Warnings</span>
                        </div>
                    </div>

                    {{-- Image Column --}}
                    <div class="lg:col-span-5 space-y-6">
                        <div class="rounded-2xl overflow-hidden border border-slate-800 shadow-xl bg-slate-950 p-2">
                            <img src="{{ asset('images/php_hero_banner.png') }}" 
                                 alt="PhpStorm PHP 8 Code Execution and Pest Passing Tests" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – ECOSYSTEM & FRAMEWORKS COVERED (MINIMAL & COMPACT)
             SEO: High-density keyword coverage for PHP subtopics
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Complete Ecosystem</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        PHP Programming &amp; Assignment Help Coverage
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Full-stack PHP support: from core OOP fundamentals to Laravel cloud microservices.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/php_ecosystem_map.png') }}" 
                                 alt="PHP Ecosystem Architecture Map" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>
                    </div>

                    {{-- Compact Micro-Badges Grid Column --}}
                    <div class="lg:col-span-7">
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            @foreach([
                                ['Core PHP 8.3', '🐘', 'OOP & Classes'],
                                ['Laravel 11', '🔴', 'MVC & Eloquent'],
                                ['Symfony 7', '🎼', 'Doctrine & Bundles'],
                                ['Composer & PSR-4', '📦', 'Autoloading Sync'],
                                ['PHPUnit & Pest', '🧪', 'Unit Test Suites'],
                                ['RESTful API', '🔗', 'JWT & JSON Routes'],
                                ['WordPress Plugins', '📝', 'Custom Actions/Hooks'],
                                ['MySQL & PDO', '🗄️', 'Migrations & Queries'],
                                ['Livewire & Blade', '⚡', 'Reactive UI Components']
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
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white text-base">⭐</span>
                        PHP Technologies &amp; Tools We Cover
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['PHP 8.3','Laravel 11','Symfony 7','CodeIgniter','Slim','WordPress','WooCommerce','Composer','Eloquent ORM','Doctrine','MySQL','PostgreSQL','SQLite','REST API','JWT Auth','Blade','Twig','PHPUnit','Pest','Docker','Git','PSR-12'] as $tech)
                        <span class="rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200/60 dark:border-slate-700/60 px-3.5 py-1.5 text-xs font-bold text-slate-700 dark:text-slate-300 hover:border-blue-500/50 transition-colors shadow-2xs">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – TYPES OF PHP ASSIGNMENTS TACKLED
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Tailored Solutions</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2">
                        Types of <span class="text-indigo-600 dark:text-indigo-400">PHP Assignment Help</span> We Provide in USA
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3">
                        Whether you are stuck on a 2-hour homework submission or a semester-long capstone Laravel web system, we provide targeted solutions.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-blue-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-950/60 border border-blue-200 dark:border-blue-800 flex items-center justify-center text-2xl mb-4">🐘</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Core OOP &amp; Classes</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Designing abstract PHP structures. Coding OOP classes, inheritance loops, namespaces, traits, and interface separations using PHP 8.x attributes.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Class properties &amp; traits</li>
                            <li>• PHP namespaces &amp; PSR standards</li>
                            <li>• Polymorphic interface override</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-red-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-red-100 dark:bg-red-950/60 border border-red-200 dark:border-red-800 flex items-center justify-center text-2xl mb-4">🔴</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Laravel Web Applications</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Building server web systems. Coding Laravel routes, Blade templates, middleware parameters, controller actions, and Livewire layouts.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Blade template configurations</li>
                            <li>• Middleware route protections</li>
                            <li>• Livewire responsive actions</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-purple-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-950/60 border border-purple-200 dark:border-purple-800 flex items-center justify-center text-2xl mb-4">🗄️</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Database &amp; Eloquent ORM</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Managing database data persistence. Writing database migrations, Eloquent relationships (hasMany, belongsTo), raw PDO requests, and SQLite syncs.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Laravel migrations structure</li>
                            <li>• Eloquent relationships mapping</li>
                            <li>• Raw PDO query transactions</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-emerald-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-200 dark:border-emerald-800 flex items-center justify-center text-2xl mb-4">🔗</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">RESTful API Controllers</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Designing application backend endpoints. Structuring JSON payloads, setting up JWT auth rules, handling resource policies, and rate limits.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• JWT backend authorizations</li>
                            <li>• Resource serialization classes</li>
                            <li>• CORS header configurations</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-amber-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-950/60 border border-amber-200 dark:border-amber-800 flex items-center justify-center text-2xl mb-4">📝</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">WordPress Theme &amp; Plugin</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Customizing WordPress systems. Coding action hooks, filter configurations, custom themes, plugin actions, and WooCommerce integrations.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Theme template overrides</li>
                            <li>• Action &amp; filter hook calls</li>
                            <li>• WooCommerce checkout setup</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-cyan-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-cyan-100 dark:bg-cyan-950/60 border border-cyan-200 dark:border-cyan-800 flex items-center justify-center text-2xl mb-4">🔧</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Composer &amp; Testing</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Managing package installations. Syncing composer.json dependencies, configuring autoloading namespaces, and coding PHPUnit/Pest test blocks.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Composer package synchronization</li>
                            <li>• PHPUnit test cases execution</li>
                            <li>• PSR-4 autoloading configurations</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 6 – MATRIX TABLE: VERSIONS & ENVIRONMENT
             SEO: High informational value
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-xs font-black uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Environment Support</span>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mt-2">
                        Supported PHP Versions, Frameworks &amp; Tools
                    </h2>
                </div>

                <div class="overflow-x-auto rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm">
                    <table class="w-full text-left border-collapse text-xs sm:text-sm">
                        <thead>
                            <tr class="bg-slate-100 dark:bg-slate-800/80 text-slate-900 dark:text-white border-b border-slate-200 dark:border-slate-700">
                                <th class="p-4 font-bold">Category</th>
                                <th class="p-4 font-bold">Supported Technologies</th>
                                <th class="p-4 font-bold">Key Capabilities</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800 text-slate-600 dark:text-slate-300">
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">PHP Engine Versions</td>
                                <td class="p-4">PHP 7.4, 8.0, 8.1, 8.2, 8.3 (Latest)</td>
                                <td class="p-4">Match exact server version, JIT compiler, attributes, and strict types.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">Web Frameworks</td>
                                <td class="p-4">Laravel 11, Symfony 7, CodeIgniter 4, Slim Framework</td>
                                <td class="p-4">MVC architecture, artisan CLI, bundle configs, REST API controllers.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">ORMs &amp; Databases</td>
                                <td class="p-4">Eloquent ORM, Doctrine, MySQL, PostgreSQL, SQLite</td>
                                <td class="p-4">Database migrations, seeders, relationships, raw PDO queries.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">Package &amp; Testing</td>
                                <td class="p-4">Composer, PSR-4 Autoloading, PHPUnit 10, Pest PHP</td>
                                <td class="p-4">Dependency resolution, unit assertions, feature testing, HTTP mocks.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">IDEs &amp; Environments</td>
                                <td class="p-4">PhpStorm, VS Code, XAMPP, Herd, Docker, DDEV</td>
                                <td class="p-4">Clean project zips ready to run on any local development server setup.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – MEET OUR PHP EXPERTS (VERIFIED CREDENTIALS - MINIMAL & COMPACT)
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Verified Credentials</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        Meet Our Vetted US PHP Experts
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Senior Laravel Architects and Core PHP Developers averaging 8+ years of industry experience.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="relative rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/php_expert_tutor.png') }}" 
                                 alt="Senior PHP Programming Expert Conducting Code Review" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                            <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-slate-900/90 backdrop-blur-md border border-slate-700 text-white flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span class="font-bold">22 PHP Specialists Online</span>
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">100% US Engineers</span>
                            </div>
                        </div>
                    </div>

                    {{-- 3 Compact Expert Cards Column --}}
                    <div class="lg:col-span-7 space-y-3">
                        @foreach([
                            ['Dr. Lucas Vance', 'LV', 'bg-blue-600', 'PhD CS &middot; Laravel Master Architect', '1,100+ Projects', '4.98', ['Laravel 11', 'Eloquent', 'REST APIs']],
                            ['Sarah Jenkins', 'SJ', 'bg-indigo-600', 'Senior Symfony Architect &middot; MS CS', '890+ Projects', '4.96', ['Symfony', 'Doctrine', 'Composer']],
                            ['David Ross', 'DR', 'bg-purple-600', 'PHP Concurrency &amp; Testing Specialist', '820+ Projects', '4.95', ['Core PHP', 'PHPUnit', 'Pest']]
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
             SECTION 8 – HOW OUR PHP HELP WORKS (HOMEPAGE STAGGERED MATCH)
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
                        How Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-indigo-600 to-blue-600 dark:from-purple-400 dark:via-indigo-400 dark:to-blue-400">PHP Assignment Help</span> Works
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3 max-w-2xl mx-auto">
                        We've streamlined PHP programming assistance into a 4-step collaborative workflow from initial upload to compilable delivery.
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
                                Share your PHP assignment specifications, PDF guidelines, database rules, and target deadline.
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
                                We match your task with a vetted US PHP specialist (Laravel 11, Core OOP, or WordPress).
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
                                Your developer writes clean PHP classes, sets up Eloquent migrations, and verifies PHPUnit test suites pass.
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
                                Download your project zip with README instructions, execute migration scripts, and request free edits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 9 – STUDENT REVIEWS & TESTIMONIAL CARDS
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-amber-500">Student Reviews</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2">
                        What Students Say About Our <span class="text-blue-600 dark:text-blue-400">PHP Programming Help</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "I was struggling to link Laravel database migrations with custom Eloquent hasMany models. The developer resolved the relationships, created the seeders, and verified the database loaded cleanly."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Ethan P.</span>
                            <span class="text-slate-500">Penn State &middot; Laravel MVC</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "Had an assignment requiring building a custom MVC routing architecture in core PHP. The expert structured clean controller classes, mapped path variables, and documented everything."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Chloe D.</span>
                            <span class="text-slate-500">USC &middot; Custom Router</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "Stuck trying to capture user form submissions and save them inside a custom database table in WordPress. The PHP expert coded a clean plugin using actions and database hooks."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">William K.</span>
                            <span class="text-slate-500">UC Berkeley &middot; WordPress Plugin</span>
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
                                Why Is PHP Assignment Help &amp; Programming Assistance Essential for CS Students in the USA?
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                PHP remains a core enterprise language across North American universities. Whether you need expert <strong>PHP programming help</strong> or <strong>PHP assignment help</strong>, CS students face steep learning curves with static typing, SOLID design patterns, Spring/Laravel Data JPA repositories, multithreaded locks, and PHPUnit testing.
                            </p>
                        </div>

                        {{-- Compact Concepts Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🏛️</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">1. SOLID Principles in PHP</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Single Responsibility, Open-Closed, Liskov, Interface Segregation, and Dependency Inversion.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🌱</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">2. Laravel Web Systems</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">REST API controllers, Eloquent ORM repositories, DTO mappers, and Composer build files.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">⚡</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">3. PSR-12 &amp; Autoloading</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Composer PSR-4 namespace autoloading, class traits, and strict type hints.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🧪</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">4. Unit Testing with PHPUnit</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Test assertions, Pest mock objects, and verifying boundary edge-case scenarios.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right Column: Full-Height Quality Guarantee Card --}}
                    <div class="lg:col-span-4 h-full">
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 text-white shadow-lg h-full flex flex-col justify-between space-y-4">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-9 h-9 rounded-xl bg-purple-600/30 border border-purple-500/50 flex items-center justify-center text-lg shrink-0">
                                        🛡️
                                    </div>
                                    <div>
                                        <h3 class="text-base font-bold text-white">Our PHP Guarantee</h3>
                                        <p class="text-[10px] text-slate-400">PSR-12 &amp; PHPUnit Verified</p>
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
                                        <span>PHPUnit &amp; Pest Test Suite Included</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Composer json &amp; Eloquent Migrations</span>
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
                                        <span class="text-[10px] text-slate-400">PHPUnit Tests</span>
                                    </div>
                                </div>

                                <a href="{{ route('order') }}" class="group relative inline-flex items-center justify-center gap-2 w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs rounded-xl transition-all shadow-md">
                                    <span>Get PHP Programming Help</span>
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
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800" aria-labelledby="faq-heading">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">FAQs</p>
                    <h2 id="faq-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        PHP Programming &amp; Assignment Help FAQs
                    </h2>
                </div>

                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can your developers build custom web systems in Laravel or Symfony?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We specialize in PHP web frameworks. Our developers code Eloquent database models, set up schema migrations, configure routes, build controllers, and verify API responses.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you write PHPUnit test files?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. If specified in your assignment guidelines, we include PHPUnit or Pest unit and feature tests checking endpoints, middleware, and request validation responses.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will you include a database migration and seeder config?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Every project requiring a database persistence layer includes Laravel migration files and test seeders, alongside instructions to set up database configurations in your local environment.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the PHP code be original and secure?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely. We write all routing, controllers, variables sanitizations, and database queries from scratch based on your custom requirements. We do not use recycled templates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 12 – FINAL CTA BANNER & SCHEMA MARKUP
        =================================================== --}}
        <section class="relative overflow-hidden bg-slate-900 py-16 sm:py-20 text-white">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                    <span class="flex h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">PHP Specialists Online Now</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                    Ready to Get Your<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">PHP Application Coded?</span>
                </h2>

                <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                    Get clean, compilable, PSR-12 compliant PHP code files complete with environment setups, database migrations, and PHPUnit test suites. Submit your details for a free quote within 5 minutes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="relative z-10 text-sm">Get PHP Programming Help</span>
                        <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- FAQ & SERVICE SCHEMA MARKUP (ESCAPED FOR BLADE COMPILER) --}}
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "FAQPage",
          "mainEntity": [
            {
              "@@type": "Question",
              "name": "Can your developers build custom web systems in Laravel or Symfony?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We specialize in PHP web frameworks. Our developers code Eloquent database models, set up schema migrations, configure routes, build controllers, and verify API responses."
              }
            },
            {
              "@@type": "Question",
              "name": "Do you write PHPUnit test files?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. If specified in your assignment guidelines, we include PHPUnit or Pest unit and feature tests checking endpoints, middleware, and request validation responses."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Service",
          "name": "PHP Programming Help",
          "description": "Professional PHP programming help and assignment assistance in the USA. Expert developers available 24/7 for Laravel, Symfony, custom MVC frameworks, Eloquent ORM, and PHPUnit setups.",
          "provider": {
            "@@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "serviceType": "PHP Programming Help",
          "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "15",
            "highPrice": "500"
          }
        }
        </script>
    </div>
@endsection
