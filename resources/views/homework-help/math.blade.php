@extends('layouts.app')

@section('title', 'Math Homework Help & Solver | Step-by-Step Math Answers')
@section('description', 'Get expert math homework help & step-by-step online solver solutions for calculus, statistics, algebra & ODE. 24/7 live tutors & 100% accuracy.')
@section('canonical', route('services.homework-help.math'))

@section('content')
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950">
        {{-- ===================================================
             HERO SECTION — CREATIVE HERO WITH TECHNICAL MATH PRESET
        =================================================== --}}
        <x-creative-hero 
            :service="$service" 
            title="Math Homework Help &amp; Online Step-by-Step Solver" 
            subtitle="Struggling with calculus integrals, statistics regressions, matrix algebra, or differential equations? Get <strong class='text-[#f16700]'>100% accurate, step-by-step math assignment solutions</strong> from 24/7 live PhD mathematics experts." 
            serviceType="Technical"
            defaultSubject="Mathematics"
        />

        {{-- ===================================================
             SECTION 1 – TRUST BAR / SOCIAL PROOF
        =================================================== --}}
        <section class="border-y border-slate-200 bg-white py-6 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-x-12 gap-y-4 text-center">
                    <div class="flex items-center gap-3">
                        <div class="flex text-amber-400 text-base">★★★★★</div>
                        <span class="text-sm font-extrabold text-slate-900 dark:text-white">4.9/5 Rating</span>
                        <span class="text-xs text-slate-500 dark:text-slate-400">(2,450+ Verified Math Reviews)</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2.5 w-2.5 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">
                            <strong class="text-slate-900 dark:text-white">28 PhD Tutors</strong> Online Now
                        </span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">100% Calculation &amp; Proof Accuracy</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 lg:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Fast 3-Hour Urgent Turnaround</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – INTERACTIVE MATH SOLVER DEMO SHOWCASE
        =================================================== --}}
        <section class="py-16 sm:py-24 bg-slate-900 relative overflow-hidden text-white" id="interactive-solver">
            <div class="absolute inset-0 bg-[radial-gradient(#3b82f6_1px,transparent_1px)] [background-size:32px_32px] opacity-10"></div>
            <div class="absolute top-0 right-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-[120px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-500/10 text-blue-400 text-xs font-bold uppercase tracking-widest mb-4 border border-blue-500/20">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-ping"></span>
                        Live Interactive Demonstration
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black tracking-tight text-white mb-6 leading-tight">
                        See How Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">Step-by-Step Math Solver</span> Works
                    </h2>
                    <p class="text-slate-400 text-lg leading-relaxed">
                        Unlike generic automated apps that output simple final numbers, our math experts provide fully derived equations, formula citations, graph coordinates, and explanatory notes so you score top marks.
                    </p>
                </div>

                <!-- Interactive Tab Component (Alpine.js) -->
                <div x-data="{ activeTab: 'calculus' }" class="max-w-5xl mx-auto bg-slate-800/80 backdrop-blur-xl border border-slate-700/80 rounded-3xl p-6 sm:p-10 shadow-2xl">
                    <!-- Tab Buttons -->
                    <div class="flex flex-wrap gap-2 mb-8 border-b border-slate-700/60 pb-6 justify-center">
                        <button 
                            x-on:click="activeTab = 'calculus'" 
                            :class="activeTab === 'calculus' ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-900/60 text-slate-400 hover:text-white hover:bg-slate-700/50'"
                            class="px-5 py-3 rounded-2xl font-bold text-sm transition-all duration-300 flex items-center gap-2"
                        >
                            <span>∫</span> Calculus (Integrals)
                        </button>
                        <button 
                            x-on:click="activeTab = 'stats'" 
                            :class="activeTab === 'stats' ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-900/60 text-slate-400 hover:text-white hover:bg-slate-700/50'"
                            class="px-5 py-3 rounded-2xl font-bold text-sm transition-all duration-300 flex items-center gap-2"
                        >
                            <span>📊</span> Statistics (t-Test)
                        </button>
                        <button 
                            x-on:click="activeTab = 'algebra'" 
                            :class="activeTab === 'algebra' ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-900/60 text-slate-400 hover:text-white hover:bg-slate-700/50'"
                            class="px-5 py-3 rounded-2xl font-bold text-sm transition-all duration-300 flex items-center gap-2"
                        >
                            <span>📐</span> Linear Algebra (Matrices)
                        </button>
                        <button 
                            x-on:click="activeTab = 'ode'" 
                            :class="activeTab === 'ode' ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/30' : 'bg-slate-900/60 text-slate-400 hover:text-white hover:bg-slate-700/50'"
                            class="px-5 py-3 rounded-2xl font-bold text-sm transition-all duration-300 flex items-center gap-2"
                        >
                            <span>⚡</span> Differential Equations
                        </button>
                    </div>

                    <!-- Tab 1: Calculus -->
                    <div x-show="activeTab === 'calculus'" x-transition:enter="transition ease-out duration-300 opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="space-y-6">
                        <div class="flex items-center justify-between bg-slate-900/80 p-4 rounded-xl border border-slate-700/60">
                            <span class="text-xs font-bold uppercase tracking-wider text-blue-400">Problem Statement</span>
                            <span class="text-xs bg-blue-500/20 text-blue-300 px-3 py-1 rounded-full font-mono">MATH 2413 - Calculus I</span>
                        </div>
                        <div class="p-4 bg-slate-950 font-mono text-emerald-400 text-lg rounded-xl border border-slate-800">
                            Evaluate the indefinite integral: &nbsp; <strong>∫ x · e^(2x) dx</strong>
                        </div>
                        <div class="space-y-4 text-slate-300 text-sm">
                            <div class="p-4 bg-slate-900/50 rounded-xl border border-slate-700/40">
                                <h4 class="font-bold text-white mb-1 flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">1</span>
                                    Apply Integration by Parts Formula: ∫ u dv = u·v - ∫ v du
                                </h4>
                                <p class="text-slate-400 text-xs ml-8">Choose u = x ⇒ du = dx &nbsp;|&nbsp; Choose dv = e^(2x) dx ⇒ v = (1/2)e^(2x)</p>
                            </div>
                            <div class="p-4 bg-slate-900/50 rounded-xl border border-slate-700/40">
                                <h4 class="font-bold text-white mb-1 flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center text-xs">2</span>
                                    Substitute and Evaluate the Remaining Integral
                                </h4>
                                <p class="text-slate-400 text-xs ml-8 font-mono text-blue-300">∫ x·e^(2x) dx = (1/2)x·e^(2x) - ∫ (1/2)e^(2x) dx = (1/2)x·e^(2x) - (1/4)e^(2x) + C</p>
                            </div>
                            <div class="p-4 bg-emerald-950/40 rounded-xl border border-emerald-500/30 flex items-center justify-between">
                                <div>
                                    <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider block">Final Formatted Answer</span>
                                    <span class="font-mono text-emerald-300 font-bold text-base">Answer: (1/4) e^(2x) (2x - 1) + C</span>
                                </div>
                                <span class="text-xs bg-emerald-500/20 text-emerald-300 px-3 py-1 rounded-lg font-bold">100% Verified</span>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Statistics -->
                    <div x-show="activeTab === 'stats'" x-transition:enter="transition ease-out duration-300 opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="space-y-6" style="display: none;">
                        <div class="flex items-center justify-between bg-slate-900/80 p-4 rounded-xl border border-slate-700/60">
                            <span class="text-xs font-bold uppercase tracking-wider text-purple-400">Problem Statement</span>
                            <span class="text-xs bg-purple-500/20 text-purple-300 px-3 py-1 rounded-full font-mono">STAT 3000 - Applied Statistics</span>
                        </div>
                        <div class="p-4 bg-slate-950 font-mono text-purple-300 text-sm rounded-xl border border-slate-800">
                            Conduct a Two-Sample Independent t-Test: Sample A (n1=30, x̄1=85, s1=6) vs Sample B (n2=30, x̄2=80, s2=7) at α = 0.05.
                        </div>
                        <div class="space-y-4 text-slate-300 text-sm">
                            <div class="p-4 bg-slate-900/50 rounded-xl border border-slate-700/40">
                                <h4 class="font-bold text-white mb-1 flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-purple-600 text-white flex items-center justify-center text-xs">1</span>
                                    Formulate Hypotheses &amp; Standard Error
                                </h4>
                                <p class="text-slate-400 text-xs ml-8">H0: μ1 = μ2 &nbsp;vs&nbsp; H1: μ1 ≠ μ2. &nbsp; SE = √[(s1²/n1) + (s2²/n2)] = √[(36/30) + (49/30)] = 1.683</p>
                            </div>
                            <div class="p-4 bg-slate-900/50 rounded-xl border border-slate-700/40">
                                <h4 class="font-bold text-white mb-1 flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-purple-600 text-white flex items-center justify-center text-xs">2</span>
                                    Calculate Test Statistic (t-value) &amp; p-value
                                </h4>
                                <p class="text-slate-400 text-xs ml-8 font-mono text-purple-300">t = (85 - 80) / 1.683 = 2.971 &nbsp;|&nbsp; df = 58 &nbsp;|&nbsp; p-value = 0.0043 < 0.05</p>
                            </div>
                            <div class="p-4 bg-emerald-950/40 rounded-xl border border-emerald-500/30">
                                <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider block">Statistical Conclusion</span>
                                <p class="text-emerald-300 text-xs font-medium mt-1">Reject Null Hypothesis (H0). There is a statistically significant difference between the two sample means at the 5% significance level.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Algebra -->
                    <div x-show="activeTab === 'algebra'" x-transition:enter="transition ease-out duration-300 opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="space-y-6" style="display: none;">
                        <div class="flex items-center justify-between bg-slate-900/80 p-4 rounded-xl border border-slate-700/60">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-400">Problem Statement</span>
                            <span class="text-xs bg-amber-500/20 text-amber-300 px-3 py-1 rounded-full font-mono">MATH 3330 - Linear Algebra</span>
                        </div>
                        <div class="p-4 bg-slate-950 font-mono text-amber-300 text-sm rounded-xl border border-slate-800">
                            Find the determinant and inverse of 2x2 Matrix A = [[4, 7], [2, 6]].
                        </div>
                        <div class="space-y-4 text-slate-300 text-sm">
                            <div class="p-4 bg-slate-900/50 rounded-xl border border-slate-700/40">
                                <h4 class="font-bold text-white mb-1 flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-amber-600 text-white flex items-center justify-center text-xs">1</span>
                                    Calculate Determinant: det(A) = ad - bc
                                </h4>
                                <p class="text-slate-400 text-xs ml-8 font-mono">det(A) = (4)(6) - (7)(2) = 24 - 14 = 10 ≠ 0 (Invertible)</p>
                            </div>
                            <div class="p-4 bg-emerald-950/40 rounded-xl border border-emerald-500/30">
                                <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider block">Matrix Inverse Answer</span>
                                <p class="font-mono text-emerald-300 text-sm font-bold mt-1">A^(-1) = (1/10) [[6, -7], [-2, 4]] = [[0.6, -0.7], [-0.2, 0.4]]</p>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Differential Equations -->
                    <div x-show="activeTab === 'ode'" x-transition:enter="transition ease-out duration-300 opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" class="space-y-6" style="display: none;">
                        <div class="flex items-center justify-between bg-slate-900/80 p-4 rounded-xl border border-slate-700/60">
                            <span class="text-xs font-bold uppercase tracking-wider text-cyan-400">Problem Statement</span>
                            <span class="text-xs bg-cyan-500/20 text-cyan-300 px-3 py-1 rounded-full font-mono">MATH 3321 - Differential Equations</span>
                        </div>
                        <div class="p-4 bg-slate-950 font-mono text-cyan-300 text-sm rounded-xl border border-slate-800">
                            Solve 2nd Order Homogeneous ODE: y'' - 5y' + 6y = 0 with y(0)=2, y'(0)=5.
                        </div>
                        <div class="space-y-4 text-slate-300 text-sm">
                            <div class="p-4 bg-slate-900/50 rounded-xl border border-slate-700/40">
                                <h4 class="font-bold text-white mb-1 flex items-center gap-2">
                                    <span class="w-6 h-6 rounded-full bg-cyan-600 text-white flex items-center justify-center text-xs">1</span>
                                    Form Characteristic Equation &amp; Find Roots
                                </h4>
                                <p class="text-slate-400 text-xs ml-8 font-mono">r² - 5r + 6 = 0 ⇒ (r - 2)(r - 3) = 0 ⇒ r1 = 2, r2 = 3</p>
                            </div>
                            <div class="p-4 bg-emerald-950/40 rounded-xl border border-emerald-500/30">
                                <span class="text-xs font-bold text-emerald-400 uppercase tracking-wider block">Particular Solution</span>
                                <p class="font-mono text-emerald-300 text-sm font-bold mt-1">y(t) = e^(2t) + e^(3t)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 text-center">
                    <a href="{{ route('order') }}" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-extrabold rounded-2xl hover:from-blue-500 hover:to-indigo-500 transition-all duration-300 shadow-xl shadow-blue-600/30 hover:-translate-y-1">
                        <span>Get Your Custom Math Solution Now</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – 6 CORE MATH DISCIPLINES GRID
        =================================================== --}}
        <section class="py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="math-branches">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="mx-auto max-w-3xl text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-100 text-indigo-700 text-xs font-black uppercase tracking-widest mb-4 dark:bg-indigo-950/50 dark:text-indigo-400 border border-indigo-200 dark:border-indigo-800">
                        Academic Coverage
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black tracking-tight text-slate-900 mb-6 leading-tight dark:text-white">
                        Comprehensive Coverage Across All <span class="text-indigo-600 dark:text-indigo-400">Math Disciplines</span>
                    </h2>
                    <p class="text-lg text-slate-600 leading-relaxed dark:text-slate-400">
                        Whether you are an undergraduate tackling Calculus I or a graduate student working on stochastic processes, our team of specialized math solvers is ready.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Branch 1: Calculus -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 dark:bg-slate-900 dark:border-slate-800 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-blue-100 text-blue-600 dark:bg-blue-950/60 dark:text-blue-400 flex items-center justify-center text-2xl font-black mb-6">
                                ∫dx
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Calculus &amp; Multivariable Analysis</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                                From single-variable limits and derivatives to multivariable double integrals, Green's theorem, and Stokes' theorem derivations.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-slate-500 dark:text-slate-400 mb-6">
                                <li class="flex items-center gap-2"><span class="text-blue-500 font-bold">•</span> Differential &amp; Integral Calculus</li>
                                <li class="flex items-center gap-2"><span class="text-blue-500 font-bold">•</span> Limits, Continuity &amp; L'Hôpital's Rule</li>
                                <li class="flex items-center gap-2"><span class="text-blue-500 font-bold">•</span> Sequences, Infinite Series &amp; Taylor Series</li>
                                <li class="flex items-center gap-2"><span class="text-blue-500 font-bold">•</span> Vector Fields &amp; Partial Derivatives</li>
                            </ul>
                        </div>
                        <a href="{{ route('order') }}" class="text-xs font-bold text-blue-600 dark:text-blue-400 hover:underline flex items-center gap-1">
                            Get Calculus Help &rarr;
                        </a>
                    </div>

                    <!-- Branch 2: Statistics & Probability -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 dark:bg-slate-900 dark:border-slate-800 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-purple-100 text-purple-600 dark:bg-purple-950/60 dark:text-purple-400 flex items-center justify-center text-2xl font-black mb-6">
                                📊
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Statistics &amp; Probability Theory</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                                Hypothesis testing, z-scores, t-tests, ANOVA, linear regression models, Poisson distributions, and Bayes' theorem problem solving.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-slate-500 dark:text-slate-400 mb-6">
                                <li class="flex items-center gap-2"><span class="text-purple-500 font-bold">•</span> Descriptive &amp; Inferential Statistics</li>
                                <li class="flex items-center gap-2"><span class="text-purple-500 font-bold">•</span> Confidence Intervals &amp; p-Value Analysis</li>
                                <li class="flex items-center gap-2"><span class="text-purple-500 font-bold">•</span> Probability Distributions (Binomial, Normal)</li>
                                <li class="flex items-center gap-2"><span class="text-purple-500 font-bold">•</span> SPSS, R, Excel &amp; STATA Computations</li>
                            </ul>
                        </div>
                        <a href="{{ route('order') }}" class="text-xs font-bold text-purple-600 dark:text-purple-400 hover:underline flex items-center gap-1">
                            Get Statistics Help &rarr;
                        </a>
                    </div>

                    <!-- Branch 3: Linear Algebra & Matrix Theory -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 dark:bg-slate-900 dark:border-slate-800 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-emerald-100 text-emerald-600 dark:bg-emerald-950/60 dark:text-emerald-400 flex items-center justify-center text-2xl font-black mb-6">
                                📐
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Linear Algebra &amp; Matrices</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                                Matrix multiplication, Gaussian elimination, eigenvalues &amp; eigenvectors, linear transformations, vector spaces, and SVD decomposition.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-slate-500 dark:text-slate-400 mb-6">
                                <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">•</span> Systems of Linear Equations &amp; Determinants</li>
                                <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">•</span> Eigenvalues, Eigenvectors &amp; Diagonalization</li>
                                <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">•</span> Vector Spaces, Basis &amp; Dimension</li>
                                <li class="flex items-center gap-2"><span class="text-emerald-500 font-bold">•</span> Orthogonality &amp; Gram-Schmidt Process</li>
                            </ul>
                        </div>
                        <a href="{{ route('order') }}" class="text-xs font-bold text-emerald-600 dark:text-emerald-400 hover:underline flex items-center gap-1">
                            Get Linear Algebra Help &rarr;
                        </a>
                    </div>

                    <!-- Branch 4: Algebra & Trigonometry -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 dark:bg-slate-900 dark:border-slate-800 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-amber-100 text-amber-600 dark:bg-amber-950/60 dark:text-amber-400 flex items-center justify-center text-2xl font-black mb-6">
                                🧮
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Algebra, Trig &amp; Pre-Calculus</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                                Polynomial equations, quadratic formulas, logarithmic functions, trigonometric identities, unit circle proofs, and complex numbers.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-slate-500 dark:text-slate-400 mb-6">
                                <li class="flex items-center gap-2"><span class="text-amber-500 font-bold">•</span> College Algebra &amp; Polynomial Factoring</li>
                                <li class="flex items-center gap-2"><span class="text-amber-500 font-bold">•</span> Logarithmic &amp; Exponential Equations</li>
                                <li class="flex items-center gap-2"><span class="text-amber-500 font-bold">•</span> Trigonometric Identities &amp; Waves</li>
                                <li class="flex items-center gap-2"><span class="text-amber-500 font-bold">•</span> Complex Numbers &amp; De Moivre's Theorem</li>
                            </ul>
                        </div>
                        <a href="{{ route('order') }}" class="text-xs font-bold text-amber-600 dark:text-amber-400 hover:underline flex items-center gap-1">
                            Get Algebra Help &rarr;
                        </a>
                    </div>

                    <!-- Branch 5: Discrete Math & Proofs -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 dark:bg-slate-900 dark:border-slate-800 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-pink-100 text-pink-600 dark:bg-pink-950/60 dark:text-pink-400 flex items-center justify-center text-2xl font-black mb-6">
                                🧩
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Discrete Math &amp; Formal Proofs</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                                Propositional logic, mathematical induction proofs, set theory, graph theory, combinatorics, and recurrence relations.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-slate-500 dark:text-slate-400 mb-6">
                                <li class="flex items-center gap-2"><span class="text-pink-500 font-bold">•</span> Direct, Contradiction &amp; Induction Proofs</li>
                                <li class="flex items-center gap-2"><span class="text-pink-500 font-bold">•</span> Set Operations &amp; Venn Diagrams</li>
                                <li class="flex items-center gap-2"><span class="text-pink-500 font-bold">•</span> Combinatorics, Permutations &amp; Combinations</li>
                                <li class="flex items-center gap-2"><span class="text-pink-500 font-bold">•</span> Graph Theory, Trees &amp; Euler Paths</li>
                            </ul>
                        </div>
                        <a href="{{ route('order') }}" class="text-xs font-bold text-pink-600 dark:text-pink-400 hover:underline flex items-center gap-1">
                            Get Discrete Math Help &rarr;
                        </a>
                    </div>

                    <!-- Branch 6: Differential Equations & Applied Math -->
                    <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 dark:bg-slate-900 dark:border-slate-800 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-cyan-100 text-cyan-600 dark:bg-cyan-950/60 dark:text-cyan-400 flex items-center justify-center text-2xl font-black mb-6">
                                ⚡
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">Differential Equations &amp; ODE/PDE</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                                First and second-order ordinary differential equations, Laplace transforms, Fourier series, boundary value problems, and numerical ODE solvers.
                            </p>
                            <ul class="space-y-2 text-xs font-semibold text-slate-500 dark:text-slate-400 mb-6">
                                <li class="flex items-center gap-2"><span class="text-cyan-500 font-bold">•</span> Separable &amp; Exact Differential Equations</li>
                                <li class="flex items-center gap-2"><span class="text-cyan-500 font-bold">•</span> Laplace Transforms &amp; Inverse Laplace</li>
                                <li class="flex items-center gap-2"><span class="text-cyan-500 font-bold">•</span> Partial Differential Equations (PDE)</li>
                                <li class="flex items-center gap-2"><span class="text-cyan-500 font-bold">•</span> Mathematical Modeling &amp; Optimization</li>
                            </ul>
                        </div>
                        <a href="{{ route('order') }}" class="text-xs font-bold text-cyan-600 dark:text-cyan-400 hover:underline flex items-center gap-1">
                            Get ODE / PDE Help &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – MATH SOFTWARE & COMPUTATION TOOLS
        =================================================== --}}
        <section class="py-16 bg-white border-y border-slate-200 dark:bg-slate-900 dark:border-slate-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-12">
                    <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-3">
                        Supported Math Software &amp; Computational Tools
                    </h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400">
                        Our math experts write scripts, format LaTeX documents, and construct computational models across all major platforms.
                    </p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-8 gap-4 text-center">
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">MATLAB</span>
                        <span class="text-[10px] text-slate-500 font-medium">Scripts &amp; Plots</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">LaTeX</span>
                        <span class="text-[10px] text-slate-500 font-medium">PDF Documents</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">R-Studio</span>
                        <span class="text-[10px] text-slate-500 font-medium">Stats &amp; Plots</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">SPSS</span>
                        <span class="text-[10px] text-slate-500 font-medium">Data Output</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">GeoGebra</span>
                        <span class="text-[10px] text-slate-500 font-medium">Geometry &amp; Calc</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">Python</span>
                        <span class="text-[10px] text-slate-500 font-medium">NumPy &amp; SymPy</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">Mathematica</span>
                        <span class="text-[10px] text-slate-500 font-medium">Wolfram Code</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 hover:border-blue-400 transition-colors">
                        <span class="font-black text-slate-800 dark:text-slate-200 text-sm block">Excel</span>
                        <span class="text-[10px] text-slate-500 font-medium">Solver &amp; Stats</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – STAGGERED 4-STEP WORKFLOW WITH BACKGROUND NUMBERS
        =================================================== --}}
        <section id="how-it-works" class="py-24 bg-gradient-to-br from-slate-900 via-indigo-950 to-slate-900 relative overflow-hidden text-white">
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/20 rounded-full blur-[120px] animate-pulse"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-20">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/10 px-6 py-2 rounded-full mb-6 hover:bg-white/15 transition-colors cursor-default">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                        </span>
                        <span class="text-indigo-200 font-medium text-xs tracking-wider uppercase">Simple Step-by-Step Order Pipeline</span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">
                        How Our Math Solver Gets You <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">Top Grades</span>
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-10 relative max-w-7xl mx-auto">
                    <!-- Step 1 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-4 -bottom-14 text-[11rem] font-black text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">01</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-blue-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-3xl">📋</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Upload Guidelines</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">Submit math task guidelines, specific requirements, and deadline times.</p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-4 -bottom-14 text-[11rem] font-black text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-3xl">🎯</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Get Fair Pricing</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">A vetted math expert reviews your calculations complexity and quotes.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-4 -bottom-14 text-[11rem] font-black text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-purple-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-3xl">💻</span>
                            </div>
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Solver Works</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">The expert calculates math formulas, drafts steps, and double-checks equations.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                            <div class="absolute -right-4 -bottom-14 text-[11rem] font-black text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">04</div>
                            <div class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-emerald-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
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
             SECTION 6 – RICH SEO PILLAR CONTENT ARTICLE
        =================================================== --}}
        <section class="py-20 bg-white dark:bg-slate-950 text-slate-800 dark:text-slate-200">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <article class="prose prose-slate dark:prose-invert max-w-none space-y-8">
                    <div class="border-b border-slate-200 dark:border-slate-800 pb-8">
                        <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight mb-4">
                            Why Professional Math Homework Help is Essential for College Success
                        </h2>
                        <p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed">
                            Mathematics is the foundational language of STEM degrees, business analytics, engineering, and computer science. However, university math courses often move at a rapid pace, leaving students struggling with complex calculus integration techniques, matrix transformations, and statistical inference hypothesis tests. When stuck on difficult homework assignments, automated online math solvers often output simple numeric answers without showing how the solution was derived—leaving students unprepared for exams.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 my-8">
                        <div class="bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">The Problem with Automated AI Solvers</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                Basic free math solver apps use automated algorithms that frequently misinterpret complex word problems, fail on multi-variable partial differential equations, and lack step-by-step reasoning. Professors look for complete derivations, clear variable definitions, and correct mathematical notation.
                            </p>
                        </div>
                        <div class="bg-slate-50 dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3">The Human Expert Advantage</h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                                Our platform connects you with vetted human math tutors holding Master's and PhD degrees in Applied Mathematics and Statistics. Every assignment solution includes step-by-step work, state-of-the-art graphs, and formula annotations tailored to your course syllabus.
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-black text-slate-900 dark:text-white mb-4">
                            Popular Math Courses We Provide Assignment Help For
                        </h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                            We assist undergraduate and graduate students across top universities in North America and worldwide with coursework across all standard curriculum codes:
                        </p>

                        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
                            <div class="p-4 bg-slate-50 dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="font-bold text-blue-600 dark:text-blue-400 block text-xs uppercase">MATH 1314 / 2412</span>
                                <span class="font-extrabold text-slate-900 dark:text-white text-sm">College Algebra &amp; Pre-Calc</span>
                            </div>
                            <div class="p-4 bg-slate-50 dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="font-bold text-blue-600 dark:text-blue-400 block text-xs uppercase">MATH 2413 / 2414</span>
                                <span class="font-extrabold text-slate-900 dark:text-white text-sm">Calculus I &amp; Calculus II</span>
                            </div>
                            <div class="p-4 bg-slate-50 dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="font-bold text-blue-600 dark:text-blue-400 block text-xs uppercase">MATH 2415</span>
                                <span class="font-extrabold text-slate-900 dark:text-white text-sm">Multivariable Calculus (Calc III)</span>
                            </div>
                            <div class="p-4 bg-slate-50 dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="font-bold text-blue-600 dark:text-blue-400 block text-xs uppercase">STAT 2000 / 3000</span>
                                <span class="font-extrabold text-slate-900 dark:text-white text-sm">Intro &amp; Business Statistics</span>
                            </div>
                            <div class="p-4 bg-slate-50 dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="font-bold text-blue-600 dark:text-blue-400 block text-xs uppercase">MATH 3330</span>
                                <span class="font-extrabold text-slate-900 dark:text-white text-sm">Linear Algebra &amp; Matrices</span>
                            </div>
                            <div class="p-4 bg-slate-50 dark:bg-slate-900 rounded-xl border border-slate-200 dark:border-slate-800">
                                <span class="font-bold text-blue-600 dark:text-blue-400 block text-xs uppercase">MATH 3321</span>
                                <span class="font-extrabold text-slate-900 dark:text-white text-sm">Differential Equations (ODE)</span>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – STUDENT REVIEWS & TESTIMONIALS
        =================================================== --}}
        <section class="py-20 bg-slate-50 dark:bg-slate-900/60 border-t border-slate-200 dark:border-slate-800" id="reviews">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mb-4">
                        Verified Student Reviews for Math Assignment Help
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        Here is what college students say about our step-by-step math solver and tutoring services.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-slate-900 p-8 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-sm">
                        <div class="flex items-center gap-1 text-amber-400 text-sm mb-4">★★★★★</div>
                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-6 font-medium">
                            "I was struggling with u-substitution and integration by parts in my Calculus II class. The math solver provided every single step written clearly with LaTeX formatting. Scored 98% on my assignment!"
                        </p>
                        <div class="flex items-center justify-between text-xs border-t border-slate-100 dark:border-slate-800 pt-4">
                            <div>
                                <span class="font-bold text-slate-900 dark:text-white block">David M.</span>
                                <span class="text-slate-400">UT Austin - Calc II</span>
                            </div>
                            <span class="px-2.5 py-1 rounded-full bg-emerald-100 dark:bg-emerald-950 text-emerald-700 dark:text-emerald-300 font-bold text-[10px]">Verified Student</span>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-slate-900 p-8 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-sm">
                        <div class="flex items-center gap-1 text-amber-400 text-sm mb-4">★★★★★</div>
                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-6 font-medium">
                            "Got my SPSS statistics regression output and hypothesis testing breakdown in less than 6 hours. The explanations for p-values and confidence intervals made my final report super easy to present."
                        </p>
                        <div class="flex items-center justify-between text-xs border-t border-slate-100 dark:border-slate-800 pt-4">
                            <div>
                                <span class="font-bold text-slate-900 dark:text-white block">Sarah K.</span>
                                <span class="text-slate-400">NYU - Business Statistics</span>
                            </div>
                            <span class="px-2.5 py-1 rounded-full bg-emerald-100 dark:bg-emerald-950 text-emerald-700 dark:text-emerald-300 font-bold text-[10px]">Verified Student</span>
                        </div>
                    </div>

                    <div class="bg-white dark:bg-slate-900 p-8 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-sm">
                        <div class="flex items-center gap-1 text-amber-400 text-sm mb-4">★★★★★</div>
                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-6 font-medium">
                            "Linear algebra matrices and vector spaces felt impossible until I used this service. The step-by-step row reduction and eigenvalue steps were totally accurate and easy to follow."
                        </p>
                        <div class="flex items-center justify-between text-xs border-t border-slate-100 dark:border-slate-800 pt-4">
                            <div>
                                <span class="font-bold text-slate-900 dark:text-white block">Alex R.</span>
                                <span class="text-slate-400">UC Berkeley - Linear Algebra</span>
                            </div>
                            <span class="px-2.5 py-1 rounded-full bg-emerald-100 dark:bg-emerald-950 text-emerald-700 dark:text-emerald-300 font-bold text-[10px]">Verified Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 8 – FAQ ACCORDION — ALPINE.JS PATTERN
        =================================================== --}}
        <section class="py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="faq">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-black text-slate-900 mb-4 tracking-tight dark:text-white">
                        Math Homework Help <span class="text-blue-600 dark:text-blue-400">FAQs</span>
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        Frequently asked questions about our online math problem solver and homework assistance.
                    </p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ 1 -->
                    <div x-data="{ open: false }" class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-300 hover:border-blue-300 dark:bg-slate-900 dark:border-slate-800">
                        <button x-on:click="open = !open" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-lg font-bold text-slate-900 dark:text-white">Will the solver show full step-by-step derivations for calculus &amp; algebra?</span>
                            <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 transition-transform duration-300" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" class="px-8 pb-6 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Yes. Every math problem solution includes complete step-by-step derivations, stated theorems (e.g. u-substitution rules, limit laws, Integration by Parts), and simplified final answers so you can easily learn the solution logic.
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div x-data="{ open: false }" class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-300 hover:border-blue-300 dark:bg-slate-900 dark:border-slate-800">
                        <button x-on:click="open = !open" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-lg font-bold text-slate-900 dark:text-white">How do I submit geometry diagrams, textbook pages, or stats tables?</span>
                            <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 transition-transform duration-300" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" class="px-8 pb-6 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            You can upload photos, PDF worksheets, Word documents, Excel files, or screenshots directly through our order form. Our math tutors support all input file formats.
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div x-data="{ open: false }" class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-300 hover:border-blue-300 dark:bg-slate-900 dark:border-slate-800">
                        <button x-on:click="open = !open" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-lg font-bold text-slate-900 dark:text-white">What is your turnaround time for urgent math assignments?</span>
                            <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 transition-transform duration-300" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" class="px-8 pb-6 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            We provide express turnarounds as fast as 3 hours for urgent problem sets, overnight assignments, or tight deadline math quizzes.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div x-data="{ open: false }" class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-300 hover:border-blue-300 dark:bg-slate-900 dark:border-slate-800">
                        <button x-on:click="open = !open" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-lg font-bold text-slate-900 dark:text-white">Do you guarantee calculation accuracy?</span>
                            <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 transition-transform duration-300" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" class="px-8 pb-6 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Yes. Every math solution goes through a secondary verification check by a senior math expert to guarantee 100% calculation accuracy and proper mathematical formatting.
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div x-data="{ open: false }" class="bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-300 hover:border-blue-300 dark:bg-slate-900 dark:border-slate-800">
                        <button x-on:click="open = !open" class="w-full px-8 py-6 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-lg font-bold text-slate-900 dark:text-white">Can you format solutions in LaTeX or MATLAB code?</span>
                            <div class="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 transition-transform duration-300" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200" class="px-8 pb-6 text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Absolutely. You can request outputs formatted in LaTeX PDF, handwritten scannable notes, MATLAB scripts, R Markdown, or Word equation format based on your instructor's guidelines.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 9 – FINAL CTA
        =================================================== --}}
        <section class="py-24 relative overflow-hidden bg-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
                <div class="max-w-3xl mx-auto">
                    <h2 class="text-4xl sm:text-5xl font-black leading-tight mb-6">
                        Ready to Ace Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">Math Homework</span>?
                    </h2>
                    <p class="text-slate-400 text-lg mb-10">
                        Submit your equations, calculus integrals, or stats problem set to our PhD math experts and get step-by-step solutions guaranteed for top grades.
                    </p>
                    <a href="{{ route('order') }}" class="inline-flex items-center gap-3 px-10 py-5 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-black text-lg rounded-2xl hover:from-blue-500 hover:to-indigo-500 transition-all duration-300 shadow-2xl shadow-blue-600/40 hover:-translate-y-1">
                        <span>Get Math Solver Help Now</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- ===================================================
             STRUCTURED DATA (JSON-LD)
        =================================================== --}}
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@graph": [
            {
              "@@type": "Service",
              "@@id": "{{ route('services.homework-help.math') }}#service",
              "name": "Math Homework Help & Online Step-by-Step Solver",
              "serviceType": "Mathematics Homework Help & Problem Solver",
              "provider": {
                "@@type": "EducationalOrganization",
                "name": "Assignment Help USA",
                "url": "{{ url('/') }}"
              },
              "description": "Get expert online math homework help and step-by-step problem solver solutions for calculus, statistics, linear algebra, differential equations, and algebra.",
              "areaServed": "US",
              "hasOfferCatalog": {
                "@@type": "OfferCatalog",
                "name": "Math Homework Services",
                "itemListElement": [
                  { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Calculus Homework Help" } },
                  { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Statistics & Probability Help" } },
                  { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Linear Algebra & Matrix Solver" } },
                  { "@@type": "Offer", "itemOffered": { "@@type": "Service", "name": "Differential Equations Solver" } }
                ]
              }
            },
            {
              "@@type": "BreadcrumbList",
              "itemListElement": [
                { "@@type": "ListItem", "position": 1, "name": "Home", "item": "{{ route('home') }}" },
                { "@@type": "ListItem", "position": 2, "name": "Homework Help", "item": "{{ route('services.homework-help.index') }}" },
                { "@@type": "ListItem", "position": 3, "name": "Math Homework Help", "item": "{{ route('services.homework-help.math') }}" }
              ]
            },
            {
              "@@type": "FAQPage",
              "mainEntity": [
                {
                  "@@type": "Question",
                  "name": "Will the solver show full step-by-step derivations for calculus & algebra?",
                  "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Yes. Every math problem solution includes complete step-by-step derivations, stated theorems, and simplified final answers so you can easily learn the solution logic."
                  }
                },
                {
                  "@@type": "Question",
                  "name": "How do I submit geometry diagrams, textbook pages, or stats tables?",
                  "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "You can upload photos, PDF worksheets, Word documents, Excel files, or screenshots directly through our order form. Our math tutors support all input file formats."
                  }
                },
                {
                  "@@type": "Question",
                  "name": "What is your turnaround time for urgent math assignments?",
                  "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "We provide express turnarounds as fast as 3 hours for urgent problem sets, overnight assignments, or tight deadline math quizzes."
                  }
                },
                {
                  "@@type": "Question",
                  "name": "Do you guarantee calculation accuracy?",
                  "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Yes. Every math solution goes through a secondary verification check by a senior math expert to guarantee 100% calculation accuracy and proper mathematical formatting."
                  }
                },
                {
                  "@@type": "Question",
                  "name": "Can you format solutions in LaTeX or MATLAB code?",
                  "acceptedAnswer": {
                    "@@type": "Answer",
                    "text": "Absolutely. You can request outputs formatted in LaTeX PDF, handwritten scannable notes, MATLAB scripts, R Markdown, or Word equation format based on your instructor's guidelines."
                  }
                }
              ]
            }
          ]
        }
        </script>
    </div>
@endsection
