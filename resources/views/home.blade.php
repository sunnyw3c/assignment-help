@extends('layouts.app')

@section('title', 'Assignment Help USA | Expert Academic Support You Can Trust')
@section('description', 'Struggling with deadlines? Assignment Help USA offers reliable, plagiarism-free academic assistance. Expert USA-based support for students. Success starts here!')


@section('content')

    <x-creative-hero />


    <section class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="services">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-40"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="mx-auto max-w-3xl text-center mb-24">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/50 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                    Professional Academic Services
                </div>
                <h2 class="text-4xl sm:text-6xl font-black tracking-tight text-slate-900 mb-8 leading-tight dark:text-white">
                    Reliable <span class="text-blue-600">Assignment Help</span> <br> 
                    Tailored for Success
                </h2>
                <p class="text-xl leading-relaxed text-slate-600 max-w-2xl mx-auto dark:text-slate-400">
                    We specialize in high-stakes academic projects. Whether it's a freshman essay or a doctoral dissertation, our USA-based quality standards ensure perfection.
                </p>
            </div>

            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                <!-- Service Card 1: Assignment Help -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-blue-500/5 group-hover:bg-blue-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>

                    <div class="flex items-center gap-5 mb-8 relative">
                        <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20 group-hover:scale-110 transition-transform duration-500">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Assignment Help</h3>
                            <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit dark:bg-emerald-950/30">
                                <span class="w-1 h-1 rounded-full bg-emerald-500 animate-ping"></span>
                                Top Verified
                            </div>
                        </div>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                        Bespoke academic solutions crafted by senior researchers. From complex case studies to extensive literature reviews.
                    </p>

                    <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all dark:bg-blue-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Essays & Research Reports
                        </li>
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all dark:bg-blue-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Thesis & Dissertations
                        </li>
                    </ul>

                    <a href="{{ route('services.assignment.index') }}"
                        class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-blue-600 font-black rounded-2xl border-2 border-blue-50 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                        Explore Custom Writing
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </article>

                <!-- Service Card 2: Programming Help -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(16,185,129,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-emerald-500/5 group-hover:bg-emerald-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>

                    <div class="flex items-center gap-5 mb-8 relative">
                        <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-emerald-600 text-white shadow-lg shadow-emerald-600/20 group-hover:scale-110 transition-transform duration-500">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Programming Help</h3>
                            <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-blue-50 text-[10px] font-black text-blue-600 uppercase tracking-widest w-fit dark:bg-blue-950/30">
                                <span class="w-1 h-1 rounded-full bg-blue-500 animate-pulse"></span>
                                Code Validated
                            </div>
                        </div>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                        Stuck on a coding bug or complex algorithm? Our developers provide clean, commented, and efficient code solutions.
                    </p>

                    <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Algorithms & Data Science
                        </li>
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Web & Application Dev
                        </li>
                    </ul>

                    <a href="{{ route('services.programming.index') }}"
                        class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-emerald-600 font-black rounded-2xl border-2 border-emerald-50 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                        Debug Your Architecture
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </article>

                <!-- Service Card 3: Homework Help -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(245,158,11,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-amber-500/5 group-hover:bg-amber-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>

                    <div class="flex items-center gap-5 mb-8 relative">
                        <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-amber-500 text-white shadow-lg shadow-amber-500/20 group-hover:scale-110 transition-transform duration-500">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Homework Help</h3>
                            <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit dark:bg-emerald-950/30">
                                <span class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></span>
                                Step-by-Step
                            </div>
                        </div>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                        Complete support for your daily problem sets and textbook questions. We clarify the "how" and "why".
                    </p>

                    <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all dark:bg-amber-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Advanced Mathematics & Calc
                        </li>
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all dark:bg-amber-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Physics, Chemistry & Stats
                        </li>
                    </ul>

                    <a href="{{ route('order') }}"
                        class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-amber-600 font-black rounded-2xl border-2 border-amber-50 hover:bg-amber-500 hover:text-white hover:border-amber-500 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                        Submit Your Problems
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </article>
            </div>

            <!-- SEO Trust Banner -->
            <div class="mt-24 relative group">
                <!-- Decorative Glows -->
                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[2.5rem] blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                
                <div class="relative rounded-[2.5rem] bg-[#0F172A] group-hover:bg-[#1E1B4B] p-8 sm:p-16 overflow-hidden border border-white/5 transition-all duration-700 shadow-2xl">
                    <!-- Premium Background Effects -->
                    <div class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] animate-pulse"></div>
                    <div class="absolute bottom-0 left-0 -ml-24 -mb-24 w-96 h-96 bg-indigo-600/10 rounded-full blur-[100px] animate-pulse" style="animation-delay: 2s"></div>
                    
                    <!-- Chat-inspired Scaling Circle -->
                    <div class="absolute -right-16 -bottom-16 w-80 h-80 bg-white/5 rounded-full group-hover:scale-150 transition-transform duration-1000 pointer-events-none"></div>

                    <!-- Mesh Pattern -->
                    <div class="absolute inset-0 opacity-[0.03] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTSAzMCAwIEwgMzAgNjAgTSAwIDMwIEwgNjAgMzAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjUiIHN0cm9rZS13aWR0aD0iMC41Ii8+PC9zdmc+')]"></div>

                    <div class="relative max-w-4xl mx-auto text-center">
                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                            <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Privacy Guaranteed</span>
                        </div>

                        <h2 class="text-4xl sm:text-5xl font-black text-white mb-4 leading-[1.1]">
                            Trust Us With<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Your Grades</span>
                        </h2>

                        <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                            Legally registered academic assistance provider with strict privacy policies.
                        </p>

                        <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-5 mb-10">
                            <div class="flex items-center gap-3">
                                <div class="flex -space-x-2">
                                    <div class="w-9 h-9 rounded-full border-2 border-[#0F172A] bg-blue-500 flex items-center justify-center text-[10px] font-bold text-white">JD</div>
                                    <div class="w-9 h-9 rounded-full border-2 border-[#0F172A] bg-indigo-500 flex items-center justify-center text-[10px] font-bold text-white">AS</div>
                                    <div class="w-9 h-9 rounded-full border-2 border-[#0F172A] bg-slate-600 flex items-center justify-center text-[9px] font-bold text-white">+5k</div>
                                </div>
                                <div class="text-left">
                                    <div class="flex items-baseline gap-0.5">
                                        <span class="text-2xl font-black text-white">98</span>
                                        <span class="text-lg font-bold text-blue-500">%</span>
                                    </div>
                                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Success Rate</p>
                                </div>
                            </div>

                            <div class="hidden sm:block w-px h-12 bg-white/10"></div>

                            <div class="flex items-center gap-6">
                                <div class="flex items-center gap-2">
                                    <div class="w-9 h-9 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-400">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-sm font-bold text-white">PhD Experts</p>
                                        <p class="text-[10px] text-slate-500 font-extrabold uppercase tracking-wider">Qualified Only</p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="w-9 h-9 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-400">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-sm font-bold text-white">Safe Payments</p>
                                        <p class="text-[10px] text-slate-500 font-extrabold uppercase tracking-wider">SSL Encrypted</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                            <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-[0_10px_30px_-10px_rgba(37,99,235,0.5)] hover:shadow-2xl hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                                <span class="relative z-10 text-sm">Place Your Order</span>
                                <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                            <span class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.3em]">50,000+ Orders Completed</span>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                @@keyframes scroll {
                    0% { transform: translateY(-100%); }
                    100% { transform: translateY(200%); }
                }

                @@keyframes shimmer {
                    0% { background-position: 0 0; }
                    100% { background-position: 40px 0; }
                }

                @@keyframes blob {
                    0% { transform: translate(0, 0) scale(1); }
                    33% { transform: translate(30px, -50px) scale(1.1); }
                    66% { transform: translate(-20px, 20px) scale(0.9); }
                    100% { transform: translate(0, 0) scale(1); }
                }
            </style>

        </div>
    </section>

    <!-- Creative SEO Content + CTA: Assignment Help -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-600/10 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-6xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">Trusted by 50,000+ Students</span>
                    </div>
                    <h2 class="text-4xl md:text-6xl font-black text-white leading-tight">
                        Why Students Trust Our<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Assignment Help Services</span>
                    </h2>
                </div>

                <div class="grid md:grid-cols-2 gap-12 items-start">
                    <!-- Left: Content -->
                    <div class="space-y-6 text-slate-400 leading-relaxed text-[15px]">
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                                What Makes Our Assignment Help Different
                            </h3>
                            <p>
                                Every <strong class="text-white font-semibold">assignment help</strong> request on our platform is handled through a 
                                rigorous matching process. We don't just assign any writer — we analyze your subject, 
                                academic level, paper type, and deadline to pair you with a PhD-qualified expert who 
                                has proven experience in your specific field. This precision ensures that when you 
                                search for <strong class="text-white font-semibold">assignment help</strong> online, you land with a service that 
                                delivers genuinely original, well-structured work rather than generic content.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                                Beyond Deadlines — Quality That Matters
                            </h3>
                            <p>
                                Tight deadlines shouldn't mean compromised quality. Our <strong class="text-white font-semibold">assignment help</strong> 
                                process includes multi-stage quality checks: subject review, plagiarism scanning via 
                                Turnitin, and format compliance. Whether you need a last-minute essay or a 
                                semester-long research project, every submission undergoes the same rigorous 
                                standards. We've built our reputation on delivering <strong class="text-white font-semibold">assignment help</strong> that 
                                doesn't just meet requirements — it exceeds expectations.
                            </p>
                        </div>

                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                                Real Experts, Real Results
                            </h3>
                            <p>
                                Unlike many platforms that outsource <strong class="text-white font-semibold">assignment help</strong> to anonymous writers, 
                                we maintain a vetted team of subject-matter experts across all major disciplines. 
                                Our writers hold advanced degrees from accredited USA universities and undergo 
                                continuous evaluation. This commitment to quality means your <strong class="text-white font-semibold">assignment help</strong> 
                                is written by someone who truly understands your curriculum, citation style, and 
                                academic expectations.
                            </p>
                        </div>
                    </div>

                    <!-- Right: Features + CTA -->
                    <div class="space-y-6">
                        <div class="p-8 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10 backdrop-blur-xl">
                            <h3 class="text-xl font-black text-white mb-6">Everything You Get</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-4">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold text-sm">Plagiarism-Free Guarantee</p>
                                        <p class="text-xs text-slate-500">Every paper scanned with Turnitin — zero copied content</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold text-sm">PhD-Level Writers</p>
                                        <p class="text-xs text-slate-500">Subject-matched experts with verified credentials</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold text-sm">On-Time Delivery</p>
                                        <p class="text-xs text-slate-500">98% of orders delivered before the deadline</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold text-sm">24/7 Support</p>
                                        <p class="text-xs text-slate-500">Live chat with your writer and support team anytime</p>
                                    </div>
                                </li>
                                <li class="flex items-start gap-4">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5">
                                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <div>
                                        <p class="text-white font-bold text-sm">Unlimited Revisions</p>
                                        <p class="text-xs text-slate-500">Free revisions until you're completely satisfied</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="p-8 rounded-[2rem] bg-white/[0.03] border border-white/5 text-center">
                            <h3 class="text-lg font-black text-white mb-3">
                                Get Started With Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Assignment Help</span>
                            </h3>
                            <p class="text-xs text-slate-500 mb-6">
                                100% confidential · No AI-generated content · Fair pricing from $12/page
                            </p>
                            <a href="{{ route('order') }}" class="group inline-flex items-center gap-3 px-10 py-5 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-[0_10px_30px_-10px_rgba(37,99,235,0.5)] hover:shadow-2xl hover:-translate-y-0.5 active:scale-95 overflow-hidden text-sm">
                                <span class="relative z-10">Place Your Order Now</span>
                                <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                            </a>
                            <div class="mt-6 flex flex-wrap justify-center gap-6 text-[10px] text-slate-600 font-bold uppercase tracking-wider">
                                <span class="flex items-center gap-1">✓ No Plagiarism</span>
                                <span class="flex items-center gap-1">✓ 24/7 Support</span>
                                <span class="flex items-center gap-1">✓ Safe Payment</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Showcase with Cinematic Motion -->
                <div class="mt-20" x-data="testimonialShowcase()">
                    <div class="relative rounded-[2.5rem] overflow-hidden" x-on:mouseenter="paused = true" x-on:mouseleave="paused = false; resetParallax()" @mousemove="onMouseMove">
                        <!-- Animated gradient orbs that follow current testimonial -->
                        <div class="absolute inset-0 transition-colors duration-1000" :style="'background: radial-gradient(ellipse at 20% 50%, ' + currentTestimonial.orb1 + ' 0%, transparent 60%), radial-gradient(ellipse at 80% 50%, ' + currentTestimonial.orb2 + ' 0%, transparent 60%)'"></div>
                        
                        <!-- Floating decorative particles -->
                        <div class="absolute inset-0 overflow-hidden pointer-events-none">
                            <div class="absolute w-1.5 h-1.5 rounded-full bg-white/10 animate-pulse" :style="'top: 15%; left: 10%; animation-duration: ' + (3 + Math.random() * 4) + 's'"></div>
                            <div class="absolute w-1 h-1 rounded-full bg-white/5 animate-pulse" style="top: 25%; right: 15%; animation-duration: 5s; animation-delay: 1s"></div>
                            <div class="absolute w-2 h-2 rounded-full bg-white/5 animate-pulse" style="bottom: 30%; left: 20%; animation-duration: 4s; animation-delay: 2s"></div>
                            <div class="absolute w-1 h-1 rounded-full bg-white/10 animate-pulse" style="top: 60%; right: 25%; animation-duration: 6s; animation-delay: 0.5s"></div>
                            <div class="absolute w-1.5 h-1.5 rounded-full bg-white/5 animate-pulse" style="bottom: 15%; right: 10%; animation-duration: 3.5s; animation-delay: 1.5s"></div>
                            
                            <!-- Parallax floating elements -->
                            <div class="absolute w-3 h-3 rounded-full border border-white/10" :style="'top: 20%; left: 30%; transform: translate(' + mouseX * 0.02 + 'px, ' + mouseY * 0.02 + 'px)'"></div>
                            <div class="absolute w-2 h-2 rounded-full bg-white/5" :style="'bottom: 25%; right: 30%; transform: translate(' + mouseX * -0.015 + 'px, ' + mouseY * -0.015 + 'px)'"></div>
                        </div>

                        <!-- Large decorative quote mark -->
                        <div class="absolute -top-6 -left-2 text-8xl font-black text-white/5 select-none pointer-events-none leading-none" :style="'transform: translate(' + mouseX * 0.01 + 'px, ' + mouseY * 0.01 + 'px)'">&ldquo;</div>
                        <div class="absolute -bottom-16 -right-4 text-9xl font-black text-white/[0.02] select-none pointer-events-none leading-none" :style="'transform: translate(' + mouseX * -0.01 + 'px, ' + mouseY * -0.01 + 'px)'">&rdquo;</div>

                        <!-- Main card -->
                        <div class="relative p-8 md:p-12" :style="tiltStyle">
                            <!-- Animated gradient border -->
                            <div class="absolute inset-0 rounded-[2.5rem] p-[1px] overflow-hidden pointer-events-none">
                                <div class="absolute inset-[-2px] bg-[conic-gradient(from_var(--angle,0deg),transparent_0%,rgba(255,255,255,0.1)_20%,transparent_40%)] rounded-[2.5rem]" style="animation: rotateBorder 4s linear infinite"></div>
                            </div>

                            <div class="relative flex flex-col md:flex-row gap-8 items-start">
                                <!-- Avatar with animated ring -->
                                <div class="flex-shrink-0 relative">
                                    <div class="relative">
                                        <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-lg font-black text-white shadow-xl border-2 border-white/20 relative z-10" :style="'background: ' + currentTestimonial.color">
                                            <span x-text="currentTestimonial.initials"></span>
                                        </div>
                                        <div class="absolute -inset-2 rounded-2xl opacity-40 animate-ping" :style="'background: ' + currentTestimonial.orb1 + '; animation-duration: 2.5s'"></div>
                                    </div>
                                    <!-- Rating badge -->
                                    <div class="absolute -bottom-2 -right-2 bg-slate-900 border border-white/10 rounded-lg px-2 py-0.5 text-[10px] font-black text-amber-400 flex items-center gap-1 shadow-lg z-20">
                                        <span x-text="currentTestimonial.rating"></span>
                                        <svg class="w-2.5 h-2.5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="flex-1 min-w-0 space-y-4">
                                    <!-- Stars with stagger -->
                                    <div class="flex items-center gap-1">
                                        <template x-for="s in 5" :key="s">
                                            <svg class="w-4 h-4 transition-all duration-300" :class="s <= currentTestimonial.rating ? 'text-amber-400 drop-shadow-[0_0_6px_rgba(251,191,36,0.3)]' : 'text-slate-600'" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                        </template>
                                    </div>

                                    <!-- Quote text -->
                                    <div class="relative">
                                        <p class="text-base md:text-lg text-slate-200 leading-relaxed font-medium" x-text="currentTestimonial.text"></p>
                                    </div>

                                    <!-- Author info -->
                                    <div class="flex items-center justify-between pt-2">
                                        <div>
                                            <p class="text-base font-bold text-white" x-text="currentTestimonial.name"></p>
                                            <p class="text-xs text-slate-500 font-extrabold uppercase tracking-wider" x-text="currentTestimonial.university"></p>
                                        </div>
                                        <span class="text-[11px] text-blue-400 font-black uppercase tracking-[0.15em] bg-blue-500/10 px-4 py-1.5 rounded-full border border-blue-500/20" x-text="currentTestimonial.service"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls row -->
                    <div class="flex items-center justify-between mt-8">
                        <!-- Animated progress dots -->
                        <div class="flex items-center gap-2">
                            <template x-for="(t, i) in testimonials" :key="'dot-' + i">
                                <button x-on:click="goTo(i)" class="relative h-1.5 rounded-full transition-all duration-500 overflow-hidden" :class="i === current ? 'w-10 bg-blue-500/30' : 'w-2 bg-white/10 hover:bg-white/30'">
                                    <div x-show="i === current" class="absolute inset-y-0 left-0 bg-blue-500 rounded-full transition-all duration-100" :style="'width: ' + progress + '%'"></div>
                                </button>
                            </template>
                        </div>

                        <div class="flex items-center gap-4">
                            <span class="text-xs text-slate-500 font-bold tabular-nums" x-text="pad(current + 1) + ' / ' + pad(testimonials.length)"></span>
                            <div class="flex gap-1.5">
                                <button x-on:click="prev" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:bg-white/10 hover:text-white hover:scale-105 active:scale-95 transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                                </button>
                                <button x-on:click="next" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 hover:bg-white/10 hover:text-white hover:scale-105 active:scale-95 transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    @@keyframes rotateBorder {
                        to { --angle: 360deg; }
                    }
                    @property --angle {
                        syntax: '<angle>';
                        initial-value: 0deg;
                        inherits: false;
                    }
                </style>
            </div>
        </div>
    </section>

    <script>
        function testimonialShowcase() {
            return {
                current: 0,
                paused: false,
                timer: null,
                progress: 0,
                progressInterval: null,
                tiltX: 0,
                tiltY: 0,
                mouseX: 0,
                mouseY: 0,
                testimonials: [
                    { initials: 'SK', color: 'linear-gradient(135deg, #6366f1, #8b5cf6)', orb1: 'rgba(99,102,241,0.15)', orb2: 'rgba(139,92,246,0.1)', name: 'Sarah K.', university: 'University of California', rating: 5, service: 'Research Paper', text: 'I was struggling with my final year research paper until I found this service. The assignment help I received was outstanding \u2014 my professor actually used it as a reference for the class.' },
                    { initials: 'MT', color: 'linear-gradient(135deg, #10b981, #059669)', orb1: 'rgba(16,185,129,0.15)', orb2: 'rgba(5,150,105,0.1)', name: 'Michael T.', university: 'NYU', rating: 5, service: 'Essay Writing', text: 'Been using them for two semesters now. Every paper has been well-researched, properly cited, and delivered ahead of schedule. Highly recommend their assignment help.' },
                    { initials: 'AL', color: 'linear-gradient(135deg, #f43f5e, #e11d48)', orb1: 'rgba(244,63,94,0.15)', orb2: 'rgba(225,29,72,0.1)', name: 'Amanda L.', university: 'University of Texas', rating: 5, service: 'Dissertation', text: 'I was genuinely stressed about my dissertation until a friend recommended this platform. The PhD expert assigned to me guided me through every chapter. Truly professional assignment help.' },
                    { initials: 'JR', color: 'linear-gradient(135deg, #f59e0b, #d97706)', orb1: 'rgba(245,158,11,0.15)', orb2: 'rgba(217,119,6,0.1)', name: 'James R.', university: 'Florida State University', rating: 4, service: 'Programming', text: 'The Python project I submitted got an A. The code was clean, well-commented, and followed all the requirements. Best assignment help for computer science students.' },
                    { initials: 'EC', color: 'linear-gradient(135deg, #3b82f6, #2563eb)', orb1: 'rgba(59,130,246,0.15)', orb2: 'rgba(37,99,235,0.1)', name: 'Emily C.', university: 'University of Michigan', rating: 5, service: 'Math Problems', text: 'Statistics was killing my GPA. I reached out for assignment help and within hours I was connected to a stats PhD. Not only did I pass, but I actually started understanding.' },
                    { initials: 'DW', color: 'linear-gradient(135deg, #8b5cf6, #6d28d9)', orb1: 'rgba(139,92,246,0.15)', orb2: 'rgba(109,40,217,0.1)', name: 'David W.', university: 'Ohio State University', rating: 5, service: 'Case Study', text: 'The case study analysis was incredibly detailed and followed all Harvard referencing guidelines. My professor was impressed. Worth every penny.' },
                    { initials: 'RN', color: 'linear-gradient(135deg, #ec4899, #db2777)', orb1: 'rgba(236,72,153,0.15)', orb2: 'rgba(219,39,119,0.1)', name: 'Rachel N.', university: 'Boston University', rating: 5, service: 'Literature Review', text: 'Went from C+ average to straight As this semester. The writers tailor content to American academic standards perfectly. Best assignment help in the USA.' },
                    { initials: 'TP', color: 'linear-gradient(135deg, #14b8a6, #0d9488)', orb1: 'rgba(20,184,166,0.15)', orb2: 'rgba(13,148,136,0.1)', name: 'Thomas P.', university: 'University of Washington', rating: 4, service: 'Term Paper', text: 'Deadline was 12 hours and I thought I was done for. The team delivered a complete term paper that passed Turnitin with flying colors. Incredibly fast.' },
                    { initials: 'LJ', color: 'linear-gradient(135deg, #f97316, #ea580c)', orb1: 'rgba(249,115,22,0.15)', orb2: 'rgba(234,88,12,0.1)', name: 'Laura J.', university: 'Arizona State University', rating: 5, service: 'Admission Essay', text: 'My grad school application essay was beautifully written. The writer captured my voice while keeping it professional. I got into my top-choice program.' },
                    { initials: 'CB', color: 'linear-gradient(135deg, #06b6d4, #0891b2)', orb1: 'rgba(6,182,212,0.15)', orb2: 'rgba(8,145,178,0.1)', name: 'Chris B.', university: 'Penn State University', rating: 5, service: 'Homework Help', text: 'I work full-time and study part-time. This assignment help service has been a lifesaver. Consistent quality, fair pricing, always on time.' },
                    { initials: 'KH', color: 'linear-gradient(135deg, #a855f7, #7c3aed)', orb1: 'rgba(168,85,247,0.15)', orb2: 'rgba(124,58,237,0.1)', name: 'Kimberly H.', university: 'University of Illinois', rating: 4, service: 'Proofreading', text: 'Already had a draft but needed polishing. The editor refined my arguments, fixed citations, and improved the flow dramatically. Exactly what I needed.' },
                    { initials: 'JS', color: 'linear-gradient(135deg, #ef4444, #dc2626)', orb1: 'rgba(239,68,68,0.15)', orb2: 'rgba(220,38,38,0.1)', name: 'Jason S.', university: 'UNC Chapel Hill', rating: 5, service: 'Lab Report', text: 'Science lab reports require precision. Data analysis, methodology, and discussion were all thorough and accurate. Reliable assignment help for STEM.' }
                ],
                get currentTestimonial() {
                    return this.testimonials[this.current];
                },
                get tiltStyle() {
                    return 'transform: perspective(1200px) rotateX(' + this.tiltX + 'deg) rotateY(' + this.tiltY + 'deg)';
                },
                pad(n) {
                    return n < 10 ? '0' + n : '' + n;
                },
                init() {
                    this.startAutoPlay();
                },
                startAutoPlay() {
                    var self = this;
                    if (this.timer) clearInterval(this.timer);
                    if (this.progressInterval) clearInterval(this.progressInterval);
                    this.progress = 0;
                    this.progressInterval = setInterval(function() {
                        if (!self.paused) {
                            self.progress = Math.min(self.progress + 100/120, 100);
                        }
                    }, 50);
                    this.timer = setInterval(function() {
                        if (!self.paused) {
                            self.current = (self.current + 1) % self.testimonials.length;
                            self.progress = 0;
                        }
                    }, 6000);
                },
                next() {
                    this.current = (this.current + 1) % this.testimonials.length;
                    this.startAutoPlay();
                },
                prev() {
                    this.current = (this.current - 1 + this.testimonials.length) % this.testimonials.length;
                    this.startAutoPlay();
                },
                goTo(i) {
                    this.current = i;
                    this.startAutoPlay();
                },
                resetParallax() {
                    this.tiltX = 0;
                    this.tiltY = 0;
                    this.mouseX = 0;
                    this.mouseY = 0;
                },
                onMouseMove(e) {
                    var rect = e.currentTarget.getBoundingClientRect();
                    var x = e.clientX - rect.left;
                    var y = e.clientY - rect.top;
                    this.tiltX = ((y - rect.height / 2) / rect.height) * -6;
                    this.tiltY = ((x - rect.width / 2) / rect.width) * 6;
                    this.mouseX = x - rect.width / 2;
                    this.mouseY = y - rect.height / 2;
                }
            };
        }
    </script>

    <!-- Academic Levels We Cover Section: Elite USA Standards -->
    <section class="py-32 bg-slate-50 relative overflow-hidden dark:bg-slate-950">
        <!-- Background Accents -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 opacity-20"></div>
        <div class="absolute -right-24 top-1/4 w-96 h-96 bg-blue-100/50 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -left-24 bottom-1/4 w-96 h-96 bg-indigo-100/50 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-24">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white shadow-sm border border-slate-200 mb-8 dark:bg-slate-900 dark:border-slate-800/80">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                    </span>
                    <span class="text-slate-900 font-black text-[10px] uppercase tracking-[0.2em] dark:text-white">Institutional Grade Support</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight leading-tight dark:text-white">
                    Covering Every <span class="text-blue-600">Academic Milestone.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl mx-auto dark:text-slate-500">
                    From foundational high school coursework to advanced post-doctoral research, our USA-based experts deliver institutional precision at every stage.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Level 1: High School -->
                <div class="group relative bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.03)] transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.1)] hover:-translate-y-2 overflow-hidden flex flex-col h-full dark:bg-slate-900 dark:border-slate-800/80">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight dark:text-white">High School</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        Foundational assistance for grades 9-12, focusing on AP coursework and GPA optimization.
                    </p>

                    <div class="space-y-4 pt-8 border-t border-slate-50">
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110 dark:bg-blue-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600 dark:text-slate-300">AP Coursework</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110 dark:bg-blue-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600 dark:text-slate-300">SAT/ACT Help</span>
                        </div>
                    </div>
                </div>

                <!-- Level 2: College -->
                <div class="group relative bg-slate-900 rounded-[2.5rem] p-10 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.1)] transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.2)] hover:-translate-y-2 overflow-hidden flex flex-col h-full active-card">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-indigo-600 text-white flex items-center justify-center shadow-lg shadow-indigo-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-white mb-4 tracking-tight">Undergraduate</h3>
                    <p class="text-slate-400 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        Comprehensive major-specific support for Bachelor's students across all USA universities.
                    </p>

                    <div class="space-y-4 pt-8 border-t border-white/5">
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400 transition-all duration-300 group-hover/item:bg-indigo-500 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-white uppercase tracking-widest transition-colors duration-300 group-hover/item:text-indigo-400">Major Research</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-indigo-500/20 flex items-center justify-center text-indigo-400 transition-all duration-300 group-hover/item:bg-indigo-500 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-white uppercase tracking-widest transition-colors duration-300 group-hover/item:text-indigo-400">Capstone Units</span>
                        </div>
                    </div>
                </div>

                <!-- Level 3: Graduate -->
                <div class="group relative bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.03)] transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(16,185,129,0.1)] hover:-translate-y-2 overflow-hidden flex flex-col h-full dark:bg-slate-900 dark:border-slate-800/80">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-emerald-600 text-white flex items-center justify-center shadow-lg shadow-emerald-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight dark:text-white">Graduate</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        Sophisticated academic solutions for Master's programs, including advanced analytics and thesis work.
                    </p>

                    <div class="space-y-4 pt-8 border-t border-slate-50">
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110 dark:bg-emerald-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600 dark:text-slate-300">Master's Thesis</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110 dark:bg-emerald-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600 dark:text-slate-300">Applied Statistics</span>
                        </div>
                    </div>
                </div>

                <!-- Level 4: PhD -->
                <div class="group relative bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.03)] transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(139,92,246,0.1)] hover:-translate-y-2 overflow-hidden flex flex-col h-full dark:bg-slate-900 dark:border-slate-800/80">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-purple-600 text-white flex items-center justify-center shadow-lg shadow-purple-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight dark:text-white">Doctoral (PhD)</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        Elite-level support for dissertation writing, research proposals, and academic publishing.
                    </p>

                    <div class="space-y-4 pt-8 border-t border-slate-50">
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-purple-50 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110 dark:bg-purple-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-purple-600 dark:text-slate-300">Dissertations</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-purple-50 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110 dark:bg-purple-950/30">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest dark:text-slate-300">Research Defense</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('order') }}" class="inline-flex items-center gap-4 text-blue-600 font-black text-xs uppercase tracking-[0.3em] group/link">
                    Select Your Level & Get Started
                    <svg class="w-5 h-5 group-hover/link:translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                </a>
            </div>
        </div>
    </section>


    <!-- Professional Insights Section -->
    <section class="py-20 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="absolute inset-0 pointer-events-none bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:28px_28px] opacity-30"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-6xl mx-auto rounded-[2rem] border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-8 md:p-12 dark:border-slate-800/80">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-100 border border-slate-200 mb-5 dark:bg-slate-900 dark:border-slate-800/80">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span class="text-slate-700 font-extrabold text-xs uppercase tracking-[0.18em] dark:text-slate-300">Assignment Help USA</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight mb-4 dark:text-white">
                            Assignment Help USA For Serious Academic Results
                        </h2>
                        <p class="text-slate-600 text-lg leading-relaxed mb-7 dark:text-slate-400">
                            Clear pricing, expert support, and reliable delivery for essays, research papers, and urgent assignments.
                        </p>

                        <div class="space-y-3 mb-8">
                            <p class="text-slate-700 text-sm dark:text-slate-300"><span class="font-bold text-slate-900 dark:text-white">US-ready quality:</span> Academic formatting and citation alignment.</p>
                            <p class="text-slate-700 text-sm dark:text-slate-300"><span class="font-bold text-slate-900 dark:text-white">Transparent process:</span> Scope and timeline defined before payment.</p>
                            <p class="text-slate-700 text-sm dark:text-slate-300"><span class="font-bold text-slate-900 dark:text-white">Always available:</span> 24/7 support from order to final delivery.</p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('order') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl bg-slate-900 text-white font-black hover:bg-slate-800 transition-colors">
                                Start Order
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                            <a href="#how-it-works" class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl border border-slate-300 text-slate-700 font-black hover:bg-slate-50 transition-colors dark:text-slate-300 dark:hover:bg-slate-800/50">
                                See Process
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="relative rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.35)] dark:border-slate-800/80 dark:bg-slate-900">
                            <img src="{{ asset('images/student-hero.png') }}" alt="USA student receiving assignment help support" class="w-full h-[360px] object-cover object-center">
                            <div class="absolute top-4 left-4 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/95 border border-slate-200 shadow-sm dark:border-slate-800/80">
                                <span class="text-[11px] font-extrabold text-slate-800 uppercase tracking-[0.12em] dark:text-slate-200">USA Student Focus</span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-red-500/10 pointer-events-none"></div>
                            <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-slate-900/85 to-transparent">
                                <p class="text-white text-base font-bold">Trusted by students across the USA for quality-focused assignment support.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-3 mt-4">
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800/80 dark:bg-slate-900">
                                <p class="text-slate-900 text-xl font-black dark:text-white">24/7</p>
                                <p class="text-slate-500 text-xs uppercase tracking-wide dark:text-slate-500">Support</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800/80 dark:bg-slate-900">
                                <p class="text-slate-900 text-xl font-black dark:text-white">50+</p>
                                <p class="text-slate-500 text-xs uppercase tracking-wide dark:text-slate-500">Subjects</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800/80 dark:bg-slate-900">
                                <p class="text-slate-900 text-xl font-black dark:text-white">98%</p>
                                <p class="text-slate-500 text-xs uppercase tracking-wide dark:text-slate-500">On-Time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="rounded-2xl bg-white border border-slate-200 p-5 dark:bg-slate-900 dark:border-slate-800/80">
                    <p class="text-slate-900 text-sm font-black mb-1 dark:text-white">Plagiarism-Safe Drafts</p>
                    <p class="text-slate-600 text-xs leading-relaxed dark:text-slate-400">Original, quality-checked content prepared for academic submission.</p>
                </div>
                <div class="rounded-2xl bg-white border border-slate-200 p-5 dark:bg-slate-900 dark:border-slate-800/80">
                    <p class="text-slate-900 text-sm font-black mb-1 dark:text-white">Deadline Precision</p>
                    <p class="text-slate-600 text-xs leading-relaxed dark:text-slate-400">Urgent and standard windows with clear turnaround commitments.</p>
                </div>
                <div class="rounded-2xl bg-white border border-slate-200 p-5 dark:bg-slate-900 dark:border-slate-800/80">
                    <p class="text-slate-900 text-sm font-black mb-1 dark:text-white">Secure Communication</p>
                    <p class="text-slate-600 text-xs leading-relaxed dark:text-slate-400">Private updates and consistent support at every stage.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-24 bg-gradient-to-br from-slate-800 via-indigo-950 to-slate-900 relative overflow-hidden">
        <!-- Modern Abstract Background -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/20 rounded-full blur-[100px] animate-pulse">
            </div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px] animate-pulse"
                style="animation-delay: 2s"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div
                    class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-md border border-white/10 px-6 py-2 rounded-full mb-6 hover:bg-white/10 transition-colors cursor-default">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                    </span>
                    <span class="text-indigo-200 font-medium text-sm tracking-wide uppercase">Simple Workflow</span>
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">
                    Your Path to <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">Success</span>
                </h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    We've streamlined academic assistance into a simple, collaborative journey.
                </p>
            </div>

            <!-- Staggered Card Layout -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 relative max-w-7xl mx-auto">

                <!-- Step 1 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            01</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">📝</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Submit Brief</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Fill out our smart order form. Upload requirements and set your deadline in under 2 minutes.
                        </p>
                    </div>
                </div>

                <!-- Step 2 (Staggered Down) -->
                <div class="group relative lg:mt-24">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            02</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-purple-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">🎯</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Expert Match</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Our AI matches you with a subject matter expert who specializes in your specific topic.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-pink-600 to-rose-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            03</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-pink-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">⚡</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Process</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Track progress in real-time. Chat directly with your expert and request drafts along the way.
                        </p>
                    </div>
                </div>

                <!-- Step 4 (Staggered Down) -->
                <div class="group relative lg:mt-24">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-rose-600 to-orange-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            04</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-rose-500 to-orange-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-rose-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">✅</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Quality Check</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Receive your polished work on time, complete with a plagiarism report and free revisions.
                        </p>
                    </div>
                </div>

            </div>

            <!-- CTA Button -->
            <div class="text-center mt-24">
                <a href="{{ route('order') }}"
                    class="group relative inline-flex items-center gap-3 px-10 py-5 bg-white rounded-full text-indigo-950 font-bold text-lg hover:bg-indigo-50 transition-all duration-300 hover:scale-105 active:scale-95 shadow-[0_0_40px_-10px_rgba(255,255,255,0.3)] dark:bg-slate-900">
                    <span class="relative z-10">Start Your Journey</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform relative z-10" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <p class="mt-6 text-slate-500 text-sm dark:text-slate-500">No credit card required for quote</p>
            </div>
        </div>
    </section>

    <!-- Benefits & Guarantees Section: Institutional Protection -->
    <section class="py-32 bg-white relative overflow-hidden dark:bg-slate-900">
        <!-- Background decorative elements with motion -->
        <div class="absolute top-0 right-0 w-1/3 h-1/3 bg-blue-100/30 rounded-full blur-[120px] -mr-24 -mt-24 pointer-events-none animate-[blob_7s_infinite_alternate]"></div>
        <div class="absolute bottom-0 left-0 w-1/3 h-1/3 bg-indigo-100/30 rounded-full blur-[120px] -ml-24 -mb-24 pointer-events-none animate-[blob_10s_infinite_alternate_reverse]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:40px_40px] opacity-20 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-24">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-slate-50 border border-slate-200 mb-8 hover:scale-105 transition-transform duration-300 cursor-default dark:bg-slate-950 dark:border-slate-800/80">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-600"></span>
                    </span>
                    <span class="text-slate-900 font-black text-[10px] uppercase tracking-[0.2em] dark:text-white">Institutional-Grade Protection</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight leading-tight dark:text-white">
                    Your Success, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">Ironclad & Guaranteed.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl mx-auto dark:text-slate-500">
                    We stand behind our elite experts with comprehensive protections that ensure every submission meets institutional standards.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- 1: Original Work -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-blue-100 hover:shadow-[0_40px_100px_-20px_rgba(37,99,235,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col dark:bg-slate-950 dark:hover:bg-slate-800/50">

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-600/20 group-hover:rotate-[15deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-blue-600 transition-colors dark:text-white">100% Original Work</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        Every assignment is written from scratch and validated through advanced plagiarism detection software.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600 dark:text-slate-300">Turnitin Verified</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600 dark:text-slate-300">Scratch-Built Only</span>
                        </div>
                    </div>
                </div>

                <!-- 2: Money Back -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-emerald-100 hover:shadow-[0_40px_100px_-20px_rgba(16,185,129,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col dark:bg-slate-950 dark:hover:bg-slate-800/50">

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-emerald-600 text-white flex items-center justify-center shadow-lg shadow-emerald-600/20 group-hover:rotate-[-15deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-emerald-600 transition-colors dark:text-white">Money-Back Guarantee</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        If we can't meet your institutional requirements, we offer a full, transparent refund. No questions asked.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600 dark:text-slate-300">Full Protection</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600 dark:text-slate-300">Zero-Risk Hire</span>
                        </div>
                    </div>
                </div>

                <!-- 3: Revisions -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-purple-100 hover:shadow-[0_40px_100px_-20px_rgba(139,92,246,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col dark:bg-slate-950 dark:hover:bg-slate-800/50">

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-purple-600 text-white flex items-center justify-center shadow-lg shadow-purple-600/20 group-hover:rotate-[15deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-purple-600 transition-colors dark:text-white">Unlimited Revisions</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        We revise until perfection. Your feedback is our roadmap to an A grade, with zero additional costs.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-purple-600 dark:text-slate-300">Feedback Loops</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-purple-600 dark:text-slate-300">Total Satisfaction</span>
                        </div>
                    </div>
                </div>

                <!-- 4: Delivery -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-amber-100 hover:shadow-[0_40px_100px_-20px_rgba(245,158,11,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col dark:bg-slate-950 dark:hover:bg-slate-800/50">

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-amber-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-amber-600 text-white flex items-center justify-center shadow-lg shadow-amber-600/20 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-amber-600 transition-colors dark:text-white">On-Time Delivery</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        We respect the clock. 98% of our submissions arrive before the deadline to give you review time.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 transition-all duration-300 group-hover/item:bg-amber-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-amber-600 dark:text-slate-300">Deadline Lock</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 transition-all duration-300 group-hover/item:bg-amber-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-amber-600 dark:text-slate-300">Early Access</span>
                        </div>
                    </div>
                </div>

                <!-- 5: Support -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-cyan-100 hover:shadow-[0_40px_100px_-20px_rgba(6,182,212,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col dark:bg-slate-950 dark:hover:bg-slate-800/50">

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-cyan-600 text-white flex items-center justify-center shadow-lg shadow-cyan-600/20 group-hover:rotate-[-12deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-cyan-600 transition-colors dark:text-white">24/7 Elite Support</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        Real humans, available round the clock. Connect with our academic coordinators whenever duty calls.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 transition-all duration-300 group-hover/item:bg-cyan-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-cyan-600 dark:text-slate-300">Immediate Chat</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 transition-all duration-300 group-hover/item:bg-cyan-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-cyan-600 dark:text-slate-300">Expert Coordination</span>
                        </div>
                    </div>
                </div>

                <!-- 6: Confidentiality -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-rose-100 hover:shadow-[0_40px_100px_-20px_rgba(244,63,94,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col dark:bg-slate-950 dark:hover:bg-slate-800/50">

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-rose-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-rose-600 text-white flex items-center justify-center shadow-lg shadow-rose-600/20 group-hover:rotate-[20deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-rose-600 transition-colors dark:text-white">100% Confidential</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow dark:text-slate-500">
                        Your identity is your power. We use military-grade encryption to ensure your data stays strictly private.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-rose-100 flex items-center justify-center text-rose-600 transition-all duration-300 group-hover/item:bg-rose-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-rose-600 dark:text-slate-300">Encrypted Vault</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-rose-100 flex items-center justify-center text-rose-600 transition-all duration-300 group-hover/item:bg-rose-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-rose-600 dark:text-slate-300">Total Anonymity</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Why Students Choose Assignment Help USA -->
    <section class="py-32 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-24 max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 mb-8 dark:bg-blue-950/30 dark:border-blue-900/50">
                    <span class="text-blue-600 text-[10px] font-black uppercase tracking-[0.2em]">Our Value Proposition</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight dark:text-white">
                    Elevate Your <br>
                    <span class="text-blue-600">Academic Potential.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed dark:text-slate-500">
                    We don't just complete assignments; we empower students to achieve excellence through strategic academic support.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Original Content Card -->
                <div class="group relative overflow-hidden bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-blue-100 hover:shadow-2xl dark:bg-slate-950 dark:hover:bg-slate-800/50">
                    <!-- Watermark Number -->
                    <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-slate-950/[0.03] dark:text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">01</div>
                    <div class="relative z-10 w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 relative z-10 dark:text-white">Original Content</h3>
                    <p class="text-slate-500 text-sm leading-relaxed relative z-10 dark:text-slate-500">Unique perspectives crafted exclusively for your prompt, ensuring distinctiveness in every paragraph.</p>
                </div>

                <!-- Qualified Professionals Card -->
                <div class="group relative overflow-hidden bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-emerald-100 hover:shadow-2xl lg:mt-12 dark:bg-slate-950 dark:hover:bg-slate-800/50">
                    <!-- Watermark Number -->
                    <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-slate-950/[0.03] dark:text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                    <div class="relative z-10 w-16 h-16 bg-emerald-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 relative z-10 dark:text-white">Expert Minds</h3>
                    <p class="text-slate-500 text-sm leading-relaxed relative z-10 dark:text-slate-500">Direct access to subject matter experts with deep pedagogical understanding of American curriculum.</p>
                </div>

                <!-- Reliable Timelines Card -->
                <div class="group relative overflow-hidden bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-amber-100 hover:shadow-2xl dark:bg-slate-950 dark:hover:bg-slate-800/50">
                    <!-- Watermark Number -->
                    <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-slate-950/[0.03] dark:text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                    <div class="relative z-10 w-16 h-16 bg-amber-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 relative z-10 dark:text-white">Swift Delivery</h3>
                    <p class="text-slate-500 text-sm leading-relaxed relative z-10 dark:text-slate-500">Precision-engineered timelines that respect your deadlines, always allowing time for final review.</p>
                </div>

                <!-- Referencing Specialists Card -->
                <div class="group relative overflow-hidden bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-purple-100 hover:shadow-2xl lg:mt-12 dark:bg-slate-950 dark:hover:bg-slate-800/50">
                    <!-- Watermark Number -->
                    <div class="absolute -right-6 -bottom-16 text-[12rem] font-black text-slate-950/[0.03] dark:text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">04</div>
                    <div class="relative z-10 w-16 h-16 bg-purple-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 012 2h8a2 2 0 012-2v-2" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 relative z-10 dark:text-white">Cite Right</h3>
                    <p class="text-slate-500 text-sm leading-relaxed relative z-10 dark:text-slate-500">Mastery of all citation protocols, ensuring your paper meets the strictest academic integrity codes.</p>
                </div>
            </div>

            <!-- Core Commitment Banner -->
            <div class="mt-24 bg-slate-900 rounded-[3.5rem] p-12 relative overflow-hidden group">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center justify-between gap-12">
                    <div class="max-w-xl text-center md:text-left">
                        <h3 class="text-3xl font-black text-white mb-6">Our Core Commitment to US Students</h3>
                        <p class="text-slate-400 font-medium">We process every order with military-grade confidentiality and a relentless focus on quality. Your success is our reputation.</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="px-6 py-3 bg-white/5 rounded-2xl border border-white/10 text-white font-bold text-sm backdrop-blur-md transition-colors hover:bg-white/10 cursor-default">✓ 100% Confidential</div>
                        <div class="px-6 py-3 bg-white/5 rounded-2xl border border-white/10 text-white font-bold text-sm backdrop-blur-md transition-colors hover:bg-white/10 cursor-default">✓ PhD Expert Only</div>
                        <div class="px-6 py-3 bg-white/5 rounded-2xl border border-white/10 text-white font-bold text-sm backdrop-blur-md transition-colors hover:bg-white/10 cursor-default">✓ 24/7 Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Academic Services — Compact Minimal -->
    <section class="py-16 bg-white dark:bg-slate-900" id="services">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Compact header -->
            <div class="text-center mb-12 max-w-xl mx-auto">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                    <span class="text-slate-600 dark:text-slate-400 font-bold text-[10px] uppercase tracking-widest">Service Portfolio</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white tracking-tight mb-3">
                    Precision Academic <span class="text-blue-600">Intervention.</span>
                </h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium leading-relaxed">Tailored solutions for every academic challenge — delivered with surgical precision.</p>
            </div>

            <!-- Service cards grid — compact -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-3 max-w-5xl mx-auto">

                <!-- Essay Writing -->
                <div class="group flex gap-4 p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 hover:shadow-md transition-all duration-300 hover:-translate-y-0.5">
                    <div class="shrink-0 w-10 h-10 rounded-xl bg-blue-100 dark:bg-blue-950/60 text-blue-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-black text-slate-900 dark:text-white text-sm">Essay Writing</h3>
                            <span class="text-[10px] font-bold text-blue-600 dark:text-blue-400 shrink-0 ml-2">from $15/pg</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Argumentative, descriptive, analytical — crafted to rubric with strong thesis &amp; flow.</p>
                    </div>
                </div>

                <!-- Case Study & Reports -->
                <div class="group flex gap-4 p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 hover:shadow-md transition-all duration-300 hover:-translate-y-0.5">
                    <div class="shrink-0 w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 text-emerald-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-black text-slate-900 dark:text-white text-sm">Case Study &amp; Reports</h3>
                            <span class="text-[10px] font-bold text-emerald-600 dark:text-emerald-400 shrink-0 ml-2">Data-driven</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">SWOT analysis, executive summaries &amp; data-backed recommendations.</p>
                    </div>
                </div>

                <!-- Dissertation & Thesis -->
                <div class="group flex gap-4 p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 hover:shadow-md transition-all duration-300 hover:-translate-y-0.5">
                    <div class="shrink-0 w-10 h-10 rounded-xl bg-purple-100 dark:bg-purple-950/60 text-purple-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-black text-slate-900 dark:text-white text-sm">Dissertation &amp; Thesis</h3>
                            <span class="text-[10px] font-bold text-purple-600 dark:text-purple-400 shrink-0 ml-2">PhD experts</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Literature reviews, methodology design &amp; full-chapter support for Masters &amp; PhD.</p>
                    </div>
                </div>

                <!-- Programming Help -->
                <div class="group flex gap-4 p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 hover:shadow-md transition-all duration-300 hover:-translate-y-0.5">
                    <div class="shrink-0 w-10 h-10 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 text-indigo-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-black text-slate-900 dark:text-white text-sm">Programming Help</h3>
                            <span class="text-[10px] font-bold text-indigo-600 dark:text-indigo-400 shrink-0 ml-2">Full-stack</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Clean, commented code in Python, Java, C++ with full documentation.</p>
                    </div>
                </div>

                <!-- Editing & Proofreading -->
                <div class="group flex gap-4 p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 hover:shadow-md transition-all duration-300 hover:-translate-y-0.5">
                    <div class="shrink-0 w-10 h-10 rounded-xl bg-amber-100 dark:bg-amber-950/60 text-amber-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-black text-slate-900 dark:text-white text-sm">Editing &amp; Proofreading</h3>
                            <span class="text-[10px] font-bold text-amber-600 dark:text-amber-400 shrink-0 ml-2">Grammar hub</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Syntax, citation style &amp; clarity refinement while preserving your voice.</p>
                    </div>
                </div>

                <!-- Online Course Help -->
                <div class="group flex gap-4 p-5 rounded-2xl bg-slate-50 dark:bg-slate-800/50 hover:bg-white dark:hover:bg-slate-800 hover:shadow-md transition-all duration-300 hover:-translate-y-0.5">
                    <div class="shrink-0 w-10 h-10 rounded-xl bg-cyan-100 dark:bg-cyan-950/60 text-cyan-600 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                    </div>
                    <div class="min-w-0">
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="font-black text-slate-900 dark:text-white text-sm">Online Course Help</h3>
                            <span class="text-[10px] font-bold text-cyan-600 dark:text-cyan-400 shrink-0 ml-2">Full-term</span>
                        </div>
                        <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed">Quizzes, discussions, exams &amp; projects managed to keep your GPA consistent.</p>
                    </div>
                </div>

            </div>

            <!-- Footer row -->
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('order') }}" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold transition-all duration-200 shadow-md shadow-blue-500/20 hover:shadow-lg hover:shadow-blue-500/30 hover:-translate-y-0.5">
                    Get Expert Help Now
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                </a>
                <span class="text-slate-400 dark:text-slate-600 text-xs font-medium">100% Confidential &nbsp;·&nbsp; PhD Experts &nbsp;·&nbsp; 24/7 Support</span>
            </div>

        </div>
    </section>



    <!-- Geographic Coverage - USA Section -->
    <!-- Nationwide Coverage Section (Compact) -->
    <section class="py-16 bg-slate-50 dark:bg-slate-950 relative overflow-hidden" id="locations">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Compact Header -->
            <div class="text-center mb-10 max-w-2xl mx-auto">
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-rose-500/10 border border-rose-500/20 mb-5">
                    <span class="relative flex h-1.5 w-1.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-rose-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-rose-500"></span>
                    </span>
                    <span class="text-rose-600 dark:text-rose-400 font-bold text-[10px] uppercase tracking-[0.2em]">National Academic Network</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white tracking-tight mb-3">
                    Nationwide Coverage.
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 dark:from-blue-400 dark:to-indigo-400">Coast-to-Coast.</span>
                </h2>
                <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">All 50 states covered. PhD experts routing your requests 24/7.</p>
            </div>

            <!-- Stylized SVG Connection Network Map -->
            <div class="max-w-4xl mx-auto mb-10 relative rounded-3xl border border-slate-200/60 bg-white/40 p-8 backdrop-blur-xl dark:border-slate-800/80 dark:bg-slate-900/30 overflow-hidden shadow-2xl" id="coverage-map">
                <!-- Grid background patterns inside map card -->
                <div class="absolute inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none"></div>

                <!-- Tooltip -->
                <div id="map-tooltip" class="absolute z-50 hidden pointer-events-none">
                    <div class="bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-xl px-3 py-2.5 shadow-xl min-w-[140px]">
                        <div id="tooltip-city" class="font-black text-slate-900 dark:text-white text-sm mb-0.5"></div>
                        <div id="tooltip-sub" class="text-[11px] text-slate-500 dark:text-slate-400 font-medium mb-1.5"></div>
                        <div class="flex items-center gap-1 text-blue-600 dark:text-blue-400 text-[10px] font-bold">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                            Open in Maps
                        </div>
                    </div>
                    <div class="w-2.5 h-2.5 bg-white dark:bg-slate-800 border-b border-r border-slate-200 dark:border-slate-700 rotate-45 mx-auto -mt-1.5 relative z-10"></div>
                </div>

                <div class="relative z-10 w-full h-[220px] md:h-[300px]">
                    <svg id="network-svg" class="w-full h-full text-slate-300 dark:text-slate-700" viewBox="0 0 800 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Connecting network route lines -->
                        <path d="M120 80 L350 140 M350 140 L680 70 M350 140 L520 220 M120 80 L220 200 M220 200 L350 140 M520 220 L680 70 M520 220 L600 240 M680 70 L600 240 M350 140 L600 240" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4 4" />
                        <path d="M120 80 L350 140 M350 140 L680 70 M520 220 L680 70" stroke="url(#lineGrad)" stroke-width="2" stroke-dasharray="10 10">
                            <animate attributeName="stroke-dashoffset" values="20;0" dur="2s" repeatCount="indefinite" />
                        </path>

                        <!-- Glowing Node Beacons (Pulsing circles) -->
                        <!-- Seattle/West Coast Hub -->
                        <circle cx="120" cy="80" r="12" class="fill-blue-500/10 dark:fill-blue-400/10" />
                        <circle cx="120" cy="80" r="6" class="fill-blue-600 dark:fill-blue-400" />
                        <circle cx="120" cy="80" r="2" fill="white" />
                        <text x="120" y="60" text-anchor="middle" class="font-extrabold text-[10px] tracking-wider fill-slate-500 dark:fill-slate-400 uppercase">PST Hub</text>

                        <!-- San Francisco Hub -->
                        <circle cx="220" cy="200" r="16" class="fill-indigo-500/10 dark:fill-indigo-400/10">
                            <animate attributeName="r" values="8;18;8" dur="3s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="220" cy="200" r="6" class="fill-indigo-600 dark:fill-indigo-400" />

                        <!-- Midwest Hub (Chicago) -->
                        <circle cx="350" cy="140" r="20" class="fill-purple-500/10 dark:fill-purple-400/10">
                            <animate attributeName="r" values="10;24;10" dur="2.5s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="350" cy="140" r="8" class="fill-purple-600 dark:fill-purple-400" />
                        <circle cx="350" cy="140" r="3" fill="white" />
                        <text x="350" y="115" text-anchor="middle" class="font-extrabold text-[10px] tracking-wider fill-slate-500 dark:fill-slate-400 uppercase">CST Hub</text>

                        <!-- Houston Hub -->
                        <circle cx="520" cy="220" r="14" class="fill-teal-500/10 dark:fill-teal-400/10" />
                        <circle cx="520" cy="220" r="6" class="fill-teal-600 dark:fill-teal-400" />

                        <!-- East Coast Hub (New York) -->
                        <circle cx="680" cy="70" r="22" class="fill-blue-500/15 dark:fill-blue-400/15">
                            <animate attributeName="r" values="10;26;10" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle cx="680" cy="70" r="9" class="fill-blue-600 dark:fill-blue-400" />
                        <circle cx="680" cy="70" r="3" fill="white" />
                        <text x="680" y="45" text-anchor="middle" class="font-extrabold text-[10px] tracking-wider fill-slate-500 dark:fill-slate-400 uppercase">EST Hub</text>

                        <!-- Miami Hub -->
                        <circle cx="600" cy="240" r="12" class="fill-pink-500/10 dark:fill-pink-400/10" />
                        <circle cx="600" cy="240" r="5" class="fill-pink-600 dark:fill-pink-400" />

                        <!-- Gradients definition -->
                        <defs>
                            <linearGradient id="lineGrad" x1="120" y1="80" x2="680" y2="70" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#2563eb" />
                                <stop offset="0.5" stop-color="#8b5cf6" />
                                <stop offset="1" stop-color="#ec4899" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Info overlay -->
                <div class="absolute bottom-6 right-6 flex items-center gap-2 bg-slate-900/85 backdrop-blur-md px-4 py-2 rounded-xl text-white border border-white/10 shadow-lg text-xs font-bold cursor-default">
                    <span class="h-2 w-2 rounded-full bg-emerald-500 animate-ping"></span>
                    Live Academic Routing Active
                </div>
            </div>

            <!-- JS tooltip -->
            <script>
            (function(){
                var tip=document.getElementById('map-tooltip'),
                    tc=document.getElementById('tooltip-city'),
                    ts=document.getElementById('tooltip-sub'),
                    svg=document.getElementById('network-svg'),
                    mc=document.getElementById('coverage-map');
                document.querySelectorAll('.map-node').forEach(function(n){
                    var dot=n.querySelector('.node-dot'),origR=dot?dot.getAttribute('r'):null;
                    n.addEventListener('mouseenter',function(){
                        tc.textContent=n.dataset.city; ts.textContent=n.dataset.sub;
                        if(dot&&origR)dot.setAttribute('r',parseFloat(origR)*1.45);
                        tip.classList.remove('hidden'); pos(n);
                    });
                    n.addEventListener('mouseleave',function(){
                        tip.classList.add('hidden');
                        if(dot&&origR)dot.setAttribute('r',origR);
                    });
                    n.addEventListener('click',function(){window.open(n.dataset.url,'_blank','noopener');});
                });
                function pos(n){
                    if(!svg||!mc)return;
                    var sr=svg.getBoundingClientRect(),cr=mc.getBoundingClientRect(),vb=svg.viewBox.baseVal;
                    var sx=sr.width/vb.width,sy=sr.height/vb.height;
                    var px=sr.left-cr.left+parseFloat(n.dataset.cx)*sx;
                    var py=sr.top-cr.top+parseFloat(n.dataset.cy)*sy;
                    var tw=tip.querySelector('div');
                    var w=tw?tw.offsetWidth:140,h=tw?tw.offsetHeight:70;
                    var l=px-w/2, t=py-h-14;
                    l=Math.max(4,Math.min(l,cr.width-w-4));
                    if(t<4)t=py+22;
                    tip.style.left=l+'px'; tip.style.top=t+'px';
                }
            })();
            </script>

            <!-- City links — slim pill row -->
            <div class="max-w-4xl mx-auto">
                <p class="text-center text-[10px] font-bold text-slate-400 dark:text-slate-600 uppercase tracking-widest mb-4">Popular Cities</p>
                <div class="flex flex-wrap justify-center gap-2">
                    <a href="https://www.google.com/maps/search/assignment+help+New+York" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-blue-400 hover:text-blue-600 dark:hover:text-blue-400 hover:shadow-sm transition-all duration-200">🗽 <span>New York</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Los+Angeles" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-orange-400 hover:text-orange-600 dark:hover:text-orange-400 hover:shadow-sm transition-all duration-200">🌴 <span>Los Angeles</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Chicago" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-purple-400 hover:text-purple-600 dark:hover:text-purple-400 hover:shadow-sm transition-all duration-200">🏙️ <span>Chicago</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Houston" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-amber-400 hover:text-amber-600 dark:hover:text-amber-400 hover:shadow-sm transition-all duration-200">🤠 <span>Houston</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Philadelphia" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-teal-400 hover:text-teal-600 dark:hover:text-teal-400 hover:shadow-sm transition-all duration-200">🔔 <span>Philadelphia</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Phoenix" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-yellow-400 hover:text-yellow-600 dark:hover:text-yellow-400 hover:shadow-sm transition-all duration-200">🌵 <span>Phoenix</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+San+Francisco" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-red-400 hover:text-red-600 dark:hover:text-red-400 hover:shadow-sm transition-all duration-200">🌁 <span>San Francisco</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Miami" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-pink-400 hover:text-pink-600 dark:hover:text-pink-400 hover:shadow-sm transition-all duration-200">🏖️ <span>Miami</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Washington+DC" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-blue-400 hover:text-blue-600 dark:hover:text-blue-400 hover:shadow-sm transition-all duration-200">🏛️ <span>Washington DC</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Boston" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-rose-400 hover:text-rose-600 dark:hover:text-rose-400 hover:shadow-sm transition-all duration-200">🎭 <span>Boston</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Seattle" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-cyan-400 hover:text-cyan-600 dark:hover:text-cyan-400 hover:shadow-sm transition-all duration-200">☕ <span>Seattle</span></a>
                    <a href="https://www.google.com/maps/search/assignment+help+Austin" target="_blank" rel="noopener" class="group inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-400 text-xs font-semibold hover:border-emerald-400 hover:text-emerald-600 dark:hover:text-emerald-400 hover:shadow-sm transition-all duration-200">🎸 <span>Austin</span></a>
                    <span class="inline-flex items-center px-3.5 py-1.5 rounded-full bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-400 dark:text-slate-600 text-xs font-semibold">+ 38 more states</span>
                </div>
            </div>

        </div>
    </section>



    <!-- Premium FAQ Section -->
    <section class="py-16 lg:py-24 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="faq">
        <!-- Background Accents -->
        <div class="absolute inset-0 opacity-40 pointer-events-none">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-purple-100 rounded-full blur-[120px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-12 lg:mb-16">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blue-600/10 border border-blue-600/20 mb-8">
                    <span class="text-blue-600 text-[10px] font-black uppercase tracking-[0.2em]">Clarifying Success</span>
                </div>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 mb-6 tracking-tight dark:text-white">
                    Frequently Asked <br>
                    <span class="text-blue-600">Questions.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium dark:text-slate-500">Everything you need to know about navigating your academic journey with Assignment Help USA.</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                    <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">Is Assignment Help USA legit and safe to use?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">
                            Yes! Assignment Help USA is a vetted platform trusted by over 50,000 students nationwide. We employ military-grade 256-bit SSL encryption for all data transfers and use industry-standard secure payment processors. Our service is fully compliant with privacy laws, ensuring 100% anonymity for every user.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                    <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">How much does it cost?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">
                            Our pricing is dynamic and designed to be student-friendly. Writing services start at $15 per page, while complex programming or technical tasks begin at $25. Factors influencing the final quote include academic level, complexity, and deadline urgency. We also offer standard discounts for large orders and first-time users.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                    <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">How fast can you complete my assignment?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">
                            We pride ourselves on meeting tight constraints. Our express delivery team can handle turnarounds as short as 6-12 hours for urgent tasks. Standard assignments are typically delivered within 3-5 days. Regardless of the timeline, 98% of our orders are delivered before the deadline to allow time for student review.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                    <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">What if I'm not satisfied with the work?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">
                            Total satisfaction is guaranteed. We offer an unlimited free revision policy—we will work with you until the paper perfectly aligns with your initial instructions. In the rare event that we fail to meet your institutional requirements, we provide a transparent, full refund under our money-back guarantee.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Footer -->
            <div class="mt-12 lg:mt-16 text-center">
                <p class="text-slate-500 font-bold mb-6 dark:text-slate-500">Didn't find your answer?</p>
                <a href="{{ route('order') }}" class="inline-flex items-center gap-2 text-blue-600 font-black hover:text-blue-700 transition-colors group">
                    Chat with an expert 
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
