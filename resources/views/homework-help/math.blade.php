@extends('layouts.app')

@section('title', 'Online Math Homework Solver | Step-by-Step Mathematics Help')
@section('description', 'Struggling with equations, calculus integrals, stats probability, or algebra matrices? Get math answers from our online math homework solver.')

@section('content')
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950">
        {{-- ===================================================
             HERO SECTION — COPY FROM HOME PAGE
        =================================================== --}}
        <x-creative-hero 
            :service="$service" 
            title="Online Math Homework Solver" 
            subtitle="Solve limits, derivatives, integration parameters, statistics probability models, and linear algebra matrices with our math tutors. We write down clear, step-by-step derivations so you learn the underlying formulas." 
        />

        {{-- ===================================================
             SECTION 1 – TRUST BAR / SOCIAL PROOF
        =================================================== --}}
        <section class="border-y border-slate-200 bg-white py-5 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
                    <div class="flex items-center gap-2.5">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">4.9/5</span>
                        <span class="text-xs text-slate-500 dark:text-slate-400">from 2,400+ math reviews</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">14</strong> Math Tutors Online</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">99% Calculation Accuracy</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – MATH CONTENT — 2.5rem ROUNDED CARD PATTERN
        =================================================== --}}
        <section class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="math-details">
            <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-40"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="mx-auto max-w-3xl text-center mb-24">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/50 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200 dark:bg-blue-950/30 dark:text-blue-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                        Math Solver
                    </div>
                    <h2 class="text-4xl sm:text-6xl font-black tracking-tight text-slate-900 mb-8 leading-tight dark:text-white">
                        Online Math <br>
                        <span class="text-blue-600">Homework Solver</span>
                    </h2>
                    <p class="text-xl leading-relaxed text-slate-600 max-w-2xl mx-auto dark:text-slate-400">
                        Solve limits, derivatives, integration parameters, statistics probability models, and linear algebra matrices with our math tutors.
                    </p>
                </div>

                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    
                    <!-- Card 1: Why Use Math Solver -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-blue-500/5 group-hover:bg-blue-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">🧩</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Why Use Math Solver</h3>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                            Math homework requires more than memorizing formulas; it requires understanding the steps. Many college students find themselves stuck on complex calculus integrals, matrix multiplications, or statistics regressions. Our online math homework solver matches you with subject-matter experts who detail each step of the solution. We write out the equations, note the formulas used, and provide graph coordinates when needed, ensuring you learn the methods to prepare for your exams.
                        </p>
                    </article>

                    <!-- Card 2: Math Fields Covered -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(16,185,129,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-emerald-500/5 group-hover:bg-emerald-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-emerald-600 text-white shadow-lg shadow-emerald-600/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">📐</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Fields Covered</h3>
                            </div>
                        </div>
                        <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Calculus &amp; Analysis (Limits, derivatives, differential equations)
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Statistics &amp; Probability (Hypothesis testing, normal distribution)
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Algebra &amp; Discrete Math (Proofs, vector spaces, matrices)
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – STAGGERED WORKFLOW
        =================================================== --}}
        <section id="how-it-works" class="py-24 bg-gradient-to-br from-slate-800 via-indigo-950 to-slate-900 relative overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/20 rounded-full blur-[100px] animate-pulse"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px] animate-pulse" style="animation-delay: 2s"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-md border border-white/10 px-6 py-2 rounded-full mb-6 hover:bg-white/10 transition-colors cursor-default">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                        </span>
                        <span class="text-indigo-200 font-medium text-sm tracking-wide uppercase">Simple Workflow</span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">
                        Your Path to <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">Success</span>
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 relative max-w-7xl mx-auto">
                    <!-- Step 1 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">01</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-3xl">📋</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Upload Guidelines</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">Submit math tasks guidelines, specific requirements, and deadline times.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-3xl">🎯</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Get Fair Pricing</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">A vetted math expert reviews your calculations complexity and quotes.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-3xl">💻</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Solver Works</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">The expert calculates math formulas, drafts steps, and double-checks equations.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">04</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-3xl">🚀</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Download &amp; Study</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">Download scannable math solutions files and learn from step calculations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – FAQ ACCORDION — ALPINE.JS PATTERN
        =================================================== --}}
        <section class="py-16 lg:py-24 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="faq">
            <div class="absolute inset-0 opacity-40 pointer-events-none">
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100 rounded-full blur-[120px] dark:bg-blue-900/10"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-purple-100 rounded-full blur-[120px] dark:bg-purple-900/10"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto text-center mb-12 lg:mb-16">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 mb-6 tracking-tight dark:text-white">
                        Math Solver <span class="text-blue-600 dark:text-blue-400">FAQs</span>
                    </h2>
                </div>

                <div class="max-w-4xl mx-auto space-y-4">
                    <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                        <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">Will the solver show step-by-step calculus steps?</span>
                            <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                            <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">Yes. We write out every derivation step, including u-substitution mappings, limit limits theorems, and integration formulas, so you can trace how the final answer was calculated.</p>
                        </div>
                    </div>

                    <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                        <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">How do I submit my geometry graphs or stats tables?</span>
                            <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                            <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">You can upload screenshots, Excel data sheets, PDF assignments, or textbook numbers on our order page. We support calculations across all file formats.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – FINAL CTA
        =================================================== --}}
        <section class="py-24 relative overflow-hidden">
            <div class="absolute inset-0 bg-slate-900">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[100px]"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-600/10 rounded-full blur-[120px]"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                        Solve Your Math Homework<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Accurately Today</span>
                    </h2>
                    <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                        Submit files guidelines to our math solver and receive clear calculations files step-by-step.
                    </p>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-[0_10px_30px_-10px_rgba(37,99,235,0.5)] hover:shadow-2xl hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                            <span class="relative z-10 text-sm">Solve My Math Homework</span>
                            <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- Schema --}}
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "FAQPage",
          "mainEntity": [
            {
              "@@type": "Question",
              "name": "Will the solver show step-by-step calculus steps?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We write out every derivation step, including u-substitution mappings, limit limits theorems, and integration formulas, so you can trace how the final answer was calculated."
              }
            },
            {
              "@@type": "Question",
              "name": "How do I submit my geometry graphs or stats tables?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "You can upload screenshots, Excel data sheets, PDF assignments, or textbook numbers on our order page. We support calculations across all file formats."
              }
            }
          ]
        }
        </script>
    </div>
@endsection
