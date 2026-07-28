@extends('layouts.app')

@section('title', 'Python Programming Help USA | Django, Data Science & Pytest')
@section('description', 'Get expert Python programming help in the USA. Vetted US developers code Django web APIs, Pandas dataframes, PyTorch models & Pytest suites. 24/7 delivery.')

@section('content')
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950">
        {{-- ===================================================
             CREATIVE HERO SECTION
        =================================================== --}}
        <x-creative-hero 
            :service="$service" 
            title="Get Expert <span class='text-[#f16700] font-extrabold'>Python Programming Help</span> in the USA"
            subtitle="Master Django 5, Flask, FastAPI, Pandas, PyTorch, and Data Structures. Get expert online Python assignment help from vetted US software engineers — 100% clean, compilable, PEP 8 compliant code delivered directly with 2-hour urgent delivery."
            :breadcrumbs="[
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Programming Help', 'url' => route('services.programming.index')],
                ['label' => 'Online Python Assignment Help', 'url' => '']
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
                        <span class="text-xs text-slate-500 dark:text-slate-400">(1,550+ Python reviews)</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2.5 w-2.5 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">
                            <strong class="text-slate-900 dark:text-white">35</strong> Python Specialists Online
                        </span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Compilable Code Guarantee</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 00-2 2v12a2 2 002 2h10a2 2 002-2V7a2 2 00-2-2h-2M9 5a2 2 002 2h2a2 2 2 002-2M9 5a2 2 001 2-2h2a2 2 2 001 2 2" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">PEP 8 &amp; Pytest Verified</span>
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
                        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-gradient-to-r from-blue-500/10 via-amber-500/10 to-emerald-500/10 dark:from-blue-950/80 dark:to-emerald-950/80 border border-blue-200 dark:border-blue-800/80 shadow-sm">
                            <span class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-pulse"></span>
                            <span class="text-xs font-black uppercase tracking-widest text-blue-700 dark:text-blue-300">Top-Rated Online Python Assignment Help USA</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-[1.15]">
                            Master <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-amber-500 to-emerald-600 dark:from-blue-400 dark:via-amber-400 dark:to-emerald-400">Python Development</span> with Vetted US Engineers
                        </h2>

                        <p class="text-base sm:text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                            Whether you need expert <strong>online Python assignment help</strong>, assistance building object-oriented Django web systems, analyzing datasets with Pandas &amp; NumPy, or writing passing Pytest test suites — we provide 24/7 online Python programming assistance designed for US university standards.
                        </p>

                        {{-- Feature Checklist --}}
                        <div class="space-y-3 pt-1">
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Custom Python 3.12 Source Code (.py files &amp; Jupyter notebooks)</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Virtual Environment (venv &amp; requirements.txt) configured</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Step-by-step README.md guide for PyCharm, VS Code, or Anaconda</span>
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
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">PEP 8 &amp; Syntax Verified</p>
                                </div>
                            </div>

                            {{-- Card 2: Pytest --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-emerald-100 dark:border-slate-700/80 hover:border-emerald-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-emerald-600/10 dark:bg-emerald-500/20 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    🧪
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Pytest &amp; Unittest</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Test Suites Included</p>
                                </div>
                            </div>

                            {{-- Card 3: Virtual Environment --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-amber-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-amber-100 dark:border-slate-700/80 hover:border-amber-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-amber-600/10 dark:bg-amber-500/20 border border-amber-500/30 text-amber-600 dark:text-amber-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    📦
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Venv &amp; Pip</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">requirements.txt Locked</p>
                                </div>
                            </div>

                            {{-- Card 4: Urgent Delivery --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-purple-100 dark:border-slate-700/80 hover:border-purple-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-purple-600/10 dark:bg-purple-500/20 border border-purple-500/30 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
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
                                <span>Get Python Programming Help</span>
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="#python-code-preview" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-800 dark:text-slate-200 font-bold text-sm rounded-2xl transition-all border border-slate-200 dark:border-slate-700">
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

                            <img src="{{ asset('images/python_hero_banner.png') }}" 
                                 alt="Top-Rated Python Programming Help USA - Data Science, Django & Pytest Development" 
                                 class="w-full h-auto rounded-2xl object-cover transform group-hover:scale-105 transition-transform duration-700" 
                                 loading="eager" />
                                 
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-transparent to-transparent"></div>
                            
                            {{-- Bottom Floating Control Bar --}}
                            <div class="absolute bottom-5 left-5 right-5 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-slate-800 text-white flex items-center justify-between shadow-xl">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-blue-600/30 border border-blue-500/50 flex items-center justify-center text-xl">🐍</div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-100">Python 3.12 &amp; Data Science</p>
                                        <p class="text-[11px] text-slate-400">PEP 8 &amp; Plagiarism-Free</p>
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
             WHY CHOOSE OUR PYTHON ASSIGNMENT HELP (PEP 8 FORMATTING CHECKED)
             SEO: High EEAT trust block
        =================================================== --}}
        <section class="bg-slate-900 py-16 sm:py-20 text-white border-b border-slate-800" aria-labelledby="why-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">PEP 8 Formatting Checked</span>
                    </div>
                    <h2 id="why-heading" class="text-4xl md:text-5xl font-black text-white leading-tight">
                        Why Choose Our <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Online Python Assignment Help</span>
                    </h2>
                    <p class="mt-5 text-base text-slate-400 max-w-2xl mx-auto">
                        Getting online Python assignment help in the USA guarantees PEP 8 compliance, pandas vectorization, virtual environment setups, and passing Pytest suites.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-start">
                    <div class="space-y-5 text-slate-400 text-[15px] leading-relaxed">
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                                Vetted Python Software Engineers
                            </h3>
                            <p>Every Python assignment is handled by an expert developer specializing in pythonic paradigms. They follow PEP 8 styling conventions, writing clean, structured classes and functions.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                                Virtual Environment Setup Guides
                            </h3>
                            <p>We solve the "works on my machine" problem. Every project directory includes virtual environment specifications (venv setup, requirements.txt, or poetry locks) for seamless local execution.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                                Rigorous Pytest Verifications
                            </h3>
                            <p>We write comprehensive test layers. If requested, we include detailed pytest code files checking edge cases, boundary parameters, and mock API endpoints.</p>
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div class="p-7 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10">
                            <h3 class="text-xl font-black text-white mb-6">What We Deliver with Every Order</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">✅</div>
                                    <div><p class="text-white font-bold text-sm">Tested Source Code (.py files / .ipynb)</p><p class="text-xs text-slate-400 mt-0.5">Fully-functional script folders, modules, classes, and Jupyter sheets</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📦</div>
                                    <div><p class="text-white font-bold text-sm">Virtual Environment Files</p><p class="text-xs text-slate-400 mt-0.5">Correct requirements.txt or poetry configurations, resolving import locks</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📝</div>
                                    <div><p class="text-white font-bold text-sm">Step-by-Step Setup README</p><p class="text-xs text-slate-400 mt-0.5">Instructions to run local virtualenvs, execute pytest suites, or launch Jupyter</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">⚡</div>
                                    <div><p class="text-white font-bold text-sm">Fast 2-Hour Urgent Delivery</p><p class="text-xs text-slate-400 mt-0.5">Stuck on Pandas dataframe errors or PyTorch tensors? We deliver clean code fast</p></div>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}" class="group relative inline-flex w-full items-center justify-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-500 transition-all duration-300 shadow-lg hover:-translate-y-0.5 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                            <span class="relative z-10">Get Online Python Assignment Help Now</span>
                            <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             IN-DEPTH EDUCATIONAL SEO CONTENT BLOCK (GOOGLE HELPFUL CONTENT)
             SEO: Keyword-rich longform content targeting USA CS students
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800" aria-labelledby="python-educational-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                    {{-- Left Card: What is Online Python Assignment Help --}}
                    <div class="p-7 sm:p-8 rounded-3xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-950/60 border border-blue-200 dark:border-blue-800 text-blue-700 dark:text-blue-300 text-xs font-black uppercase tracking-wider">
                            <span>🎯 Academic Overview</span>
                        </div>

                        <h2 id="python-educational-heading" class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white leading-snug">
                            What Is Professional Online Python Assignment Help for US Students?
                        </h2>

                        <div class="space-y-4 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            <p>
                                <strong class="text-slate-900 dark:text-white">Online Python assignment help</strong> is a specialized 24/7 coding assistance service designed to help computer science students, data analysts, and software engineering majors across North American universities. Python's clean syntax hides advanced architectural complexities — including object-oriented inheritance, Pandas vectorization, virtual environment dependency management, and asynchronous web request lifecycles.
                            </p>
                            <p>
                                Whether you are searching for expert <strong>online Python assignment help</strong> or looking to <strong>pay someone to do my Python assignment online</strong> in the USA, CS coursework requires building error-free code that adheres to strict PEP 8 formatting standards, includes virtual environment lockfiles (<code class="bg-slate-200 dark:bg-slate-800 px-1 py-0.5 rounded text-blue-600 dark:text-blue-400 font-mono text-[11px]">requirements.txt</code>), and passes automated Pytest or Unittest suites.
                            </p>
                        </div>
                    </div>

                    {{-- Right Card: Common Python Challenges We Solve --}}
                    <div class="p-7 sm:p-8 rounded-3xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-200 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 text-xs font-black uppercase tracking-wider">
                            <span>🏫 Coursework Solutions</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white leading-snug">
                            Common Python Coding Challenges We Solve for US Students
                        </h3>

                        <ul class="space-y-3.5 text-xs sm:text-sm text-slate-600 dark:text-slate-300">
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0 mt-0.5">✓</div>
                                <span><strong class="text-slate-900 dark:text-white">Pandas &amp; NumPy Vectorization:</strong> Resolving NaN missing values, key indexing locks, groupby aggregations, and matrix shape mismatches.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0 mt-0.5">✓</div>
                                <span><strong class="text-slate-900 dark:text-white">Virtual Environment Lockups:</strong> Fixing <code class="bg-slate-200 dark:bg-slate-800 px-1 py-0.5 rounded text-purple-600 dark:text-purple-400 font-mono text-[11px]">ModuleNotFoundError</code>, broken pip dependencies, and setting up venv/poetry.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0 mt-0.5">✓</div>
                                <span><strong class="text-slate-900 dark:text-white">Django &amp; FastAPI Routes:</strong> Resolving CSRF token validation blocks, CORS headers, SQLite/PostgreSQL ORM migrations, and Pydantic serialization.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs shrink-0 mt-0.5">✓</div>
                                <span><strong class="text-slate-900 dark:text-white">Pytest &amp; Flake8 Compliance:</strong> Writing automated unit test fixtures, mock objects, and verifying boundary edge-case assertions.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – INTERACTIVE CODE & EXECUTION PREVIEW
             SEO: High engagement & interactive proof
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-slate-900 text-white border-b border-slate-800" id="python-code-preview">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-xs font-black uppercase tracking-widest text-amber-400">Interactive IDE Preview</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-white mt-2">
                        Production-Grade <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-amber-400 to-emerald-400">Python Code Quality</span>
                    </h2>
                    <p class="text-sm text-slate-400 mt-2">
                        We deliver clean, compilable, PEP 8 compliant code files with complete Pandas dataframes, PySpark scripts, and Pytest assertions.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center" x-data="{ activeTab: 'analyzer' }">
                    {{-- IDE Window Column --}}
                    <div class="lg:col-span-7 rounded-2xl overflow-hidden border border-slate-800 bg-slate-950 shadow-2xl">
                        {{-- Editor Top Bar --}}
                        <div class="px-4 py-3 bg-slate-900 border-b border-slate-800 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                                <span class="ml-2 text-xs font-mono text-slate-400">PyCharm — Python 3.12 &middot; PEP 8</span>
                            </div>
                            
                            {{-- Code Tabs --}}
                            <div class="flex gap-1 text-xs">
                                <button @click="activeTab = 'analyzer'" :class="activeTab === 'analyzer' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    analyzer.py
                                </button>
                                <button @click="activeTab = 'test'" :class="activeTab === 'test' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    test_analyzer.py
                                </button>
                                <button @click="activeTab = 'reqs'" :class="activeTab === 'reqs' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    requirements.txt
                                </button>
                            </div>
                        </div>

                        {{-- Code Panels --}}
                        <div class="p-5 font-mono text-xs leading-relaxed overflow-x-auto min-h-[300px]">
                            {{-- Tab 1: analyzer.py --}}
                            <div x-show="activeTab === 'analyzer'" class="space-y-1 text-slate-300">
                                <p><span class="text-purple-400">import</span> pandas <span class="text-purple-400">as</span> pd</p>
                                <p><span class="text-purple-400">import</span> numpy <span class="text-purple-400">as</span> np</p>
                                <p><span class="text-purple-400">from</span> typing <span class="text-purple-400">import</span> List, Dict</p>
                                <br>
                                <p><span class="text-purple-400">class</span> <span class="text-blue-300">DataAnalyzer</span>:</p>
                                <p class="pl-4"><span class="text-purple-400">def</span> <span class="text-blue-300">__init__</span>(self, filepath: str):</p>
                                <p class="pl-8">self.df = pd.read_csv(filepath)</p>
                                <br>
                                <p class="pl-4"><span class="text-purple-400">def</span> <span class="text-blue-300">clean_and_aggregate</span>(self) -&gt; pd.DataFrame:</p>
                                <p class="pl-8"><span class="text-slate-500"># Handle missing values &amp; compute group metrics</span></p>
                                <p class="pl-8">self.df.fillna(self.df.mean(numeric_only=True), inplace=True)</p>
                                <p class="pl-8"><span class="text-purple-400">return</span> self.df.groupby(<span class="text-emerald-400">'category'</span>).agg({<span class="text-emerald-400">'score'</span>: [<span class="text-emerald-400">'mean'</span>, <span class="text-emerald-400">'std'</span>]})</p>
                            </div>

                            {{-- Tab 2: test_analyzer.py --}}
                            <div x-show="activeTab === 'test'" class="space-y-1 text-slate-300" x-cloak>
                                <p><span class="text-purple-400">import</span> pytest</p>
                                <p><span class="text-purple-400">from</span> analyzer <span class="text-purple-400">import</span> DataAnalyzer</p>
                                <br>
                                <p><span class="text-blue-300">@pytest.fixture</span></p>
                                <p><span class="text-purple-400">def</span> <span class="text-blue-300">sample_analyzer</span>(tmp_path):</p>
                                <p class="pl-4">d = tmp_path / <span class="text-emerald-400">"data.csv"</span></p>
                                <p class="pl-4">d.write_text(<span class="text-emerald-400">"category,score\nA,90\nA,95\nB,80"</span>)</p>
                                <p class="pl-4"><span class="text-purple-400">return</span> DataAnalyzer(str(d))</p>
                                <br>
                                <p><span class="text-purple-400">def</span> <span class="text-blue-300">test_aggregation</span>(sample_analyzer):</p>
                                <p class="pl-4">res = sample_analyzer.clean_and_aggregate()</p>
                                <p class="pl-4"><span class="text-purple-400">assert</span> len(res) == 2</p>
                                <p class="pl-4"><span class="text-purple-400">assert</span> res.loc[<span class="text-emerald-400">'A'</span>][(<span class="text-emerald-400">'score'</span>, <span class="text-emerald-400">'mean'</span>)] == 92.5</p>
                            </div>

                            {{-- Tab 3: requirements.txt --}}
                            <div x-show="activeTab === 'reqs'" class="space-y-1 text-slate-300" x-cloak>
                                <p><span class="text-emerald-400">pandas==2.2.1</span></p>
                                <p><span class="text-emerald-400">numpy==1.26.4</span></p>
                                <p><span class="text-emerald-400">scikit-learn==1.4.1</span></p>
                                <p><span class="text-emerald-400">pytest==8.1.1</span></p>
                                <p><span class="text-emerald-400">django==5.0.3</span></p>
                            </div>
                        </div>

                        {{-- Execution Bar --}}
                        <div class="px-5 py-3 bg-slate-900 border-t border-slate-800 flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-emerald-400 font-mono font-bold">PYTEST PASSED (3/3 tests) in 0.18s</span>
                            </div>
                            <span class="text-slate-400 font-mono">0 Errors &middot; PEP 8 Compliant</span>
                        </div>
                    </div>

                    {{-- Image Column --}}
                    <div class="lg:col-span-5 space-y-6">
                        <div class="rounded-2xl overflow-hidden border border-slate-800 shadow-xl bg-slate-950 p-2">
                            <img src="{{ asset('images/python_hero_banner.png') }}" 
                                 alt="PyCharm Python 3 Code Execution and Pytest Passing Tests" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – ECOSYSTEM & FRAMEWORKS COVERED (MINIMAL & COMPACT)
             SEO: High-density keyword coverage for Python subtopics
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Complete Ecosystem</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        Python Programming &amp; Assignment Help Coverage
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Full-spectrum Python support: from core OOP algorithms to deep learning neural networks.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/python_ecosystem_map.png') }}" 
                                 alt="Python Ecosystem Architecture Map" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>
                    </div>

                    {{-- Compact Micro-Badges Grid Column --}}
                    <div class="lg:col-span-7">
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            @foreach([
                                ['Core Python 3.12', '🐍', 'OOP & Data Structures'],
                                ['Data Science', '📊', 'Pandas & NumPy'],
                                ['Django & Flask', '🌱', 'REST APIs & Web Apps'],
                                ['Machine Learning', '🤖', 'Sklearn & PyTorch'],
                                ['Web Scraping', '🕸️', 'BeautifulSoup & Selenium'],
                                ['Testing & QA', '🧪', 'Pytest & Unittest'],
                                ['Jupyter Notebooks', '📓', 'Data Analysis Reports'],
                                ['FastAPI', '⚡', 'Asynchronous APIs'],
                                ['SQL & AsyncIO', '🗄️', 'SQLAlchemy & Async']
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
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white text-base">⭐</span>
                        Python Technologies &amp; Tools We Cover
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Python 3.12','Django','Flask','FastAPI','pandas','NumPy','scikit-learn','TensorFlow','PyTorch','Jupyter Notebook','BeautifulSoup','Selenium','Scrapy','Requests','SQLAlchemy','SQLite','PostgreSQL','Pytest','Unittest','venv setup','Flake8','Black'] as $tech)
                        <span class="rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200/60 dark:border-slate-700/60 px-3.5 py-1.5 text-xs font-bold text-slate-700 dark:text-slate-300 hover:border-purple-500/50 transition-colors shadow-2xs">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – TYPES OF PYTHON ASSIGNMENTS TACKLED
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Tailored Solutions</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2">
                        Types of <span class="text-indigo-600 dark:text-indigo-400">Python Assignment Help</span> We Provide in USA
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3">
                        Whether you are stuck on a 2-hour homework submission or a semester-long capstone machine learning model, we provide targeted solutions.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-blue-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-950/60 border border-blue-200 dark:border-blue-800 flex items-center justify-center text-2xl mb-4">🐍</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Core OOP &amp; Algorithms</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Coding pythonic classes, inheritance, dunder methods, decorators, recursion, binary search trees, and custom data structures.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Decorators &amp; dunder methods</li>
                            <li>• Data structures &amp; Big-O analysis</li>
                            <li>• Memory management &amp; generators</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-amber-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-950/60 border border-amber-200 dark:border-amber-800 flex items-center justify-center text-2xl mb-4">📊</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Data Science &amp; Pandas</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Cleaning raw CSV datasets, performing matrix vectorization in NumPy, aggregating Pandas dataframes, and plotting Matplotlib charts.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Pandas dataframe transformations</li>
                            <li>• NumPy array vectorization</li>
                            <li>• Seaborn &amp; Matplotlib plots</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-emerald-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-200 dark:border-emerald-800 flex items-center justify-center text-2xl mb-4">🌱</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Django &amp; Flask Web Apps</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Structuring Django REST framework controllers, SQLite/PostgreSQL ORM models, Flask routes, and user authentication middleware.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Django REST framework APIs</li>
                            <li>• SQLAlchemy ORM mappings</li>
                            <li>• Jinja2 &amp; HTML5 templates</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-purple-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-950/60 border border-purple-200 dark:border-purple-800 flex items-center justify-center text-2xl mb-4">🤖</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Machine Learning &amp; AI</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Training regression/classification models in Scikit-Learn, building PyTorch neural networks, and evaluating confusion matrices.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Scikit-learn classification &amp; regression</li>
                            <li>• PyTorch &amp; TensorFlow models</li>
                            <li>• Cross-validation &amp; hyperparameter tuning</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-yellow-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-yellow-100 dark:bg-yellow-950/60 border border-yellow-200 dark:border-yellow-800 flex items-center justify-center text-2xl mb-4">🕸️</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Web Scraping &amp; Automation</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Extracting dynamic web data using BeautifulSoup, Scrapy spiders, and headless Selenium browsers with anti-bot handling.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• BeautifulSoup HTML parsing</li>
                            <li>• Selenium browser automation</li>
                            <li>• Asynchronous Scrapy spiders</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-cyan-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-cyan-100 dark:bg-cyan-950/60 border border-cyan-200 dark:border-cyan-800 flex items-center justify-center text-2xl mb-4">🧪</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Pytest &amp; Unit Testing</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Writing comprehensive test files using Pytest fixtures, mock objects, parameterized tests, and coverage reports.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Pytest fixtures &amp; parametrization</li>
                            <li>• Unittest mocking &amp; assertions</li>
                            <li>• PEP 8 flake8 linting compliance</li>
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
                        Supported Python Versions, Libraries &amp; Tools
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
                                <td class="p-4 font-bold text-slate-900 dark:text-white">Python Interpreters</td>
                                <td class="p-4">Python 3.8, 3.9, 3.10, 3.11, 3.12 (Latest)</td>
                                <td class="p-4">Match exact interpreter version, type hints, pattern matching, and GIL optimization.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">Web Frameworks</td>
                                <td class="p-4">Django 5, Flask, FastAPI, Tornado</td>
                                <td class="p-4">MVC/MVT architecture, ORM migrations, OpenAPI routes, async endpoints.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">Data &amp; ML Libraries</td>
                                <td class="p-4">Pandas, NumPy, Scikit-learn, PyTorch, TensorFlow, SciPy</td>
                                <td class="p-4">Matrix transformations, data cleaning, neural networks, cross-validation.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">Testing &amp; Linting</td>
                                <td class="p-4">Pytest, Unittest, Flake8, Black, MyPy</td>
                                <td class="p-4">PEP 8 compliance, static type checking, test fixtures, unit assertions.</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">IDEs &amp; Environments</td>
                                <td class="p-4">PyCharm, VS Code, Jupyter Notebooks, Anaconda, Google Colab</td>
                                <td class="p-4">Clean project directories ready to run on any local environment setup.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – MEET OUR PYTHON EXPERTS (VERIFIED CREDENTIALS - MINIMAL & COMPACT)
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Verified Credentials</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        Meet Our Vetted US Python Experts
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Senior Machine Learning Engineers and Django Architects averaging 8+ years of industry experience.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="relative rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/python_expert_tutor.png') }}" 
                                 alt="Senior Python Programming Expert Conducting Code Review" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                            <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-slate-900/90 backdrop-blur-md border border-slate-700 text-white flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span class="font-bold">35 Python Specialists Online</span>
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">100% US Engineers</span>
                            </div>
                        </div>
                    </div>

                    {{-- 3 Compact Expert Cards Column --}}
                    <div class="lg:col-span-7 space-y-3">
                        @foreach([
                            ['Dr. Elena Rostova', 'ER', 'bg-blue-600', 'PhD CS &middot; Machine Learning &amp; PyTorch Specialist', '1,450+ Projects', '4.99', ['PyTorch', 'Pandas', 'Scikit-learn']],
                            ['Marcus Thorne', 'MT', 'bg-indigo-600', 'Senior Django Architect &middot; MS Software Eng', '1,120+ Projects', '4.97', ['Django', 'FastAPI', 'Pytest']],
                            ['Dr. Alan Grant', 'AG', 'bg-amber-600', 'Data Structures &amp; Algorithms Professor', '980+ Projects', '4.96', ['Core Python', 'Algorithms', 'Jupyter']]
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
             SECTION 8 – HOW OUR PYTHON HELP WORKS (HOMEPAGE STAGGERED MATCH)
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800 relative overflow-hidden">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 mb-3">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-xs font-black uppercase tracking-wider">Streamlined Process</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 dark:text-white tracking-tight">
                        How Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-amber-500 to-emerald-600 dark:from-blue-400 dark:via-amber-400 dark:to-emerald-400">Python Assignment Help</span> Works
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3 max-w-2xl mx-auto">
                        We've streamlined Python programming assistance into a 4-step collaborative workflow from initial upload to compilable delivery.
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
                                Share your Python assignment specifications, dataset files, Jupyter guidelines, and target deadline.
                            </p>
                        </div>
                    </div>

                    {{-- Step 2 (Staggered Down) --}}
                    <div class="group relative lg:mt-16">
                        <div class="absolute inset-0 bg-gradient-to-r from-amber-500 to-orange-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-amber-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Expert Match</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                We match your task with a vetted US Python specialist (Pandas, Django, PyTorch, or Algorithms).
                            </p>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-purple-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">⚡</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Code &amp; Compile</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                Your developer writes pythonic classes, configures venv dependencies, and verifies Pytest suites pass.
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
                                Download your project zip with README instructions, execute scripts, and request free edits.
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
                        What Students Say About Our <span class="text-blue-600 dark:text-blue-400">Python Programming Help</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "Stuck on a complex Pandas data cleaning pipeline with missing values and groupby aggregations. The expert cleaned the dataframe, generated Matplotlib plots, and explained every line."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Sophia M.</span>
                            <span class="text-slate-500">NYU &middot; Pandas Data Science</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "Had a Django REST framework API project due in 6 hours. The developer created the serializers, set up SQLite migrations, and included a complete Pytest test suite."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Brandon T.</span>
                            <span class="text-slate-500">UT Austin &middot; Django REST API</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "My machine learning assignment required tuning a PyTorch neural network for image classification. The expert tuned hyperparameters, achieved 94% accuracy, and submitted a clean Jupyter notebook."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Daniel R.</span>
                            <span class="text-slate-500">Georgia Tech &middot; Machine Learning</span>
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
                                Why Is Python Assignment Help &amp; Programming Assistance Essential for CS Students in the USA?
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Python is the foundational language of modern computer science and data analytics across North American universities. Whether you need expert <strong>Python programming help</strong> or <strong>Python assignment help</strong>, CS students face complex bottlenecks with OOP class inheritance, Pandas vectorization, PyTorch neural networks, virtual environment setups, and Pytest assertions.
                            </p>
                        </div>

                        {{-- Compact Concepts Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🏛️</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">1. Pythonic OOP &amp; SOLID</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Dunder methods, decorators, abstract base classes, generator expressions, and type hints.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🌱</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">2. Django &amp; Flask Web Systems</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">REST API serializers, ORM migrations, async endpoints, and venv requirements.txt lockfiles.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">📊</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">3. Data Analytics &amp; Pandas</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Dataframe aggregations, NumPy matrix operations, Seaborn visualization, and Jupyter notebooks.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🧪</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">4. Unit Testing with Pytest</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Test fixtures, parameterized tests, unittest mocking, and PEP 8 flake8 compliance.</p>
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
                                        <h3 class="text-base font-bold text-white">Our Python Guarantee</h3>
                                        <p class="text-[10px] text-slate-400">PEP 8 &amp; Pytest Verified</p>
                                    </div>
                                </div>

                                <ul class="space-y-2.5 text-xs text-slate-300">
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Zero Syntax or Runtime Errors</span>
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
                                        <span>Pytest &amp; Unittest Suite Included</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Venv &amp; requirements.txt Configured</span>
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
                                        <span class="text-[10px] text-slate-400">Pytest Pass</span>
                                    </div>
                                </div>

                                <a href="{{ route('order') }}" class="group relative inline-flex items-center justify-center gap-2 w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs rounded-xl transition-all shadow-md">
                                    <span>Get Python Programming Help</span>
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
                        Python Programming &amp; Assignment Help FAQs
                    </h2>
                </div>

                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">How does your online Python assignment help service work in the USA?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our online Python assignment help platform connects US computer science students with vetted software engineers. Simply upload your assignment requirements, receive a instant price quote, and get compilable PEP 8 code delivered before your deadline.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can I pay someone to do my Python assignment online with urgent delivery?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes! We offer 2-hour urgent delivery for Python assignments. Whether you need help with a broken Django view, Pandas dataframe script, or Pytest assertions, our US developers deliver 100% working code on short notice.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can your developers handle Pandas data analytics and Jupyter notebook tasks?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We specialize in data science assignments. Our developers write clean Pandas data transformations, NumPy vectorization, Matplotlib/Seaborn plots, and deliver fully executed .ipynb notebooks.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you write Pytest unit and integration tests?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. If specified in your assignment guidelines, we include complete Pytest test suites checking edge cases, boundary parameters, and mock API responses.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will you include a virtual environment requirements.txt file?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Every Python submission includes a exact `requirements.txt` or `environment.yml` configuration, alongside instructions to create virtual environments in PyCharm, VS Code, or Anaconda.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the Python code follow PEP 8 standards?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely. All source code is formatted to strict PEP 8 guidelines using Flake8 and Black linters, ensuring clean indentation, type hinting, and docstring documentation.</p>
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
                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Python Specialists Online Now</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                    Ready to Get Your<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-amber-400 to-emerald-400">Python Script Coded?</span>
                </h2>

                <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                    Get clean, compilable, PEP 8 compliant Python code files complete with environment setups, pandas scripts, and Pytest test suites. Submit your details for a free quote within 5 minutes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="relative z-10 text-sm">Get Python Programming Help</span>
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
              "name": "Can your developers handle Pandas data analytics and Jupyter notebook tasks?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We specialize in data science assignments. Our developers write clean Pandas data transformations, NumPy vectorization, Matplotlib/Seaborn plots, and deliver fully executed .ipynb notebooks."
              }
            },
            {
              "@@type": "Question",
              "name": "Do you write Pytest unit and integration tests?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. If specified in your assignment guidelines, we include complete Pytest test suites checking edge cases, boundary parameters, and mock API responses."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Service",
          "name": "Python Programming Help",
          "description": "Professional Python programming help and assignment assistance in the USA. Expert developers available 24/7 for Django, Flask, Pandas, Data Science, Machine Learning, PyTorch, and Pytest setups.",
          "provider": {
            "@@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "serviceType": "Python Programming Help",
          "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "15",
            "highPrice": "500"
          }
        }
        </script>
        <x-related-services currentSlug="python" />
    </div>
@endsection
