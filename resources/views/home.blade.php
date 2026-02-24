@extends('layouts.app')

@section('title', 'Assignment Help USA | Expert Academic Support You Can Trust')
@section('description', 'Struggling with deadlines? Assignment Help USA offers reliable, plagiarism-free academic assistance. Expert USA-based support for students. Success starts here!')


@section('content')

    <!-- Creative Animated Hero Section -->
    <div id="creative-hero-root"></div>

    @push('scripts')
        @vite(['resources/js/creative-hero-entry.tsx'])
    @endpush


    <section class="py-32 bg-slate-50 relative overflow-hidden" id="services">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-40"></div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative">
            <div class="mx-auto max-w-3xl text-center mb-24">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/50 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                    Professional Academic Services
                </div>
                <h2 class="text-4xl sm:text-6xl font-black tracking-tight text-slate-900 mb-8 leading-tight">
                    Reliable <span class="text-blue-600">Assignment Help</span> <br> 
                    Tailored for Success
                </h2>
                <p class="text-xl leading-relaxed text-slate-600 max-w-2xl mx-auto">
                    We specialize in high-stakes academic projects. Whether it's a freshman essay or a doctoral dissertation, our USA-based quality standards ensure perfection.
                </p>
            </div>

            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                <!-- Service Card 1: Assignment Help -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.15)] hover:-translate-y-2 border border-slate-100">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-blue-500/5 group-hover:bg-blue-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>

                    <div class="flex items-center gap-5 mb-8 relative">
                        <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20 group-hover:scale-110 transition-transform duration-500">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 tracking-tight">Assignment Help</h3>
                            <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit">
                                <span class="w-1 h-1 rounded-full bg-emerald-500 animate-ping"></span>
                                Top Verified
                            </div>
                        </div>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium">
                        Bespoke academic solutions crafted by senior researchers. From complex case studies to extensive literature reviews.
                    </p>

                    <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600">
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Essays & Research Reports
                        </li>
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Thesis & Dissertations
                        </li>
                    </ul>

                    <a href="{{ route('services.assignment.index') }}"
                        class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-blue-600 font-black rounded-2xl border-2 border-blue-50 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest">
                        Explore Custom Writing
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </article>

                <!-- Service Card 2: Programming Help -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(16,185,129,0.15)] hover:-translate-y-2 border border-slate-100">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-emerald-500/5 group-hover:bg-emerald-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>

                    <div class="flex items-center gap-5 mb-8 relative">
                        <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-emerald-600 text-white shadow-lg shadow-emerald-600/20 group-hover:scale-110 transition-transform duration-500">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 tracking-tight">Programming Help</h3>
                            <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-blue-50 text-[10px] font-black text-blue-600 uppercase tracking-widest w-fit">
                                <span class="w-1 h-1 rounded-full bg-blue-500 animate-pulse"></span>
                                Code Validated
                            </div>
                        </div>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium">
                        Stuck on a coding bug or complex algorithm? Our developers provide clean, commented, and efficient code solutions.
                    </p>

                    <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600">
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Algorithms & Data Science
                        </li>
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Web & Application Dev
                        </li>
                    </ul>

                    <a href="{{ route('services.programming.index') }}"
                        class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-emerald-600 font-black rounded-2xl border-2 border-emerald-50 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest">
                        Debug Your Architecture
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </a>
                </article>

                <!-- Service Card 3: Homework Help -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(245,158,11,0.15)] hover:-translate-y-2 border border-slate-100">
                    <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-amber-500/5 group-hover:bg-amber-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>

                    <div class="flex items-center gap-5 mb-8 relative">
                        <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-amber-500 text-white shadow-lg shadow-amber-500/20 group-hover:scale-110 transition-transform duration-500">
                            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 tracking-tight">Homework Help</h3>
                            <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit">
                                <span class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></span>
                                Step-by-Step
                            </div>
                        </div>
                    </div>

                    <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium">
                        Complete support for your daily problem sets and textbook questions. We clarify the "how" and "why".
                    </p>

                    <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600">
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Advanced Mathematics & Calc
                        </li>
                        <li class="flex items-center gap-3 font-bold group/item">
                            <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            Physics, Chemistry & Stats
                        </li>
                    </ul>

                    <a href="{{ route('order') }}"
                        class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-amber-600 font-black rounded-2xl border-2 border-amber-50 hover:bg-amber-500 hover:text-white hover:border-amber-500 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest">
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

                    <div class="relative grid grid-cols-1 gap-x-16 gap-y-12 lg:grid-cols-2 lg:items-center">
                        <div>
                            <div class="flex items-center gap-3 mb-8">
                                <div class="w-10 h-10 rounded-xl bg-emerald-500/20 flex items-center justify-center text-emerald-400 group-hover:bg-white group-hover:text-emerald-500 transition-all duration-500 shadow-lg">
                                    <svg class="w-6 h-6 transition-transform group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <span class="text-emerald-400 group-hover:text-white text-xs font-black uppercase tracking-[0.2em] transition-colors">Verified Secure Platform</span>
                                <div class="h-px flex-1 bg-gradient-to-r from-emerald-500/20 to-transparent ml-4"></div>
                            </div>

                            <h2 class="text-4xl sm:text-5xl font-black text-white mb-8 leading-[1.1]">
                                Trust Us With <br>
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Your Grades</span>
                            </h2>

                            <p class="text-lg leading-relaxed text-slate-400 group-hover:text-indigo-100 transition-colors duration-500 mb-10 max-w-xl">
                                Assignment Help USA is a legally registered academic assistance provider. We adhere to
                                strict privacy policies and <span class="text-white font-semibold">academic integrity standards</span>.
                            </p>
                            
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8 lg:mb-0">
                                <!-- Genuine Experts -->
                                <div class="flex items-center gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 group-hover:bg-white/10 group-hover:border-white/20 transition-all duration-500">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-400 group-hover:bg-white group-hover:text-blue-600 transition-all duration-500 shadow-lg">
                                        <svg class="w-6 h-6 transition-transform group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-white text-sm transition-colors group-hover:text-indigo-100">Genuine Experts</h3>
                                        <p class="text-[11px] text-slate-500 group-hover:text-white/60 mt-0.5 uppercase tracking-wider font-extrabold transition-colors">PhD Holders Only</p>
                                    </div>
                                </div>
                                
                                <!-- Bank-Grade Security -->
                                <div class="flex items-center gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 group-hover:bg-white/10 group-hover:border-white/20 transition-all duration-500">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400 group-hover:bg-white group-hover:text-indigo-600 transition-all duration-500 shadow-lg">
                                        <svg class="w-6 h-6 transition-transform group-hover:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-white text-sm transition-colors group-hover:text-indigo-100">Safe Payments</h3>
                                        <p class="text-[11px] text-slate-500 group-hover:text-white/60 mt-0.5 uppercase tracking-wider font-extrabold transition-colors">SSL Encrypted</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="relative">
                            <!-- Premium Success Metrics Card -->
                            <div class="relative p-8 sm:p-10 rounded-[2rem] bg-gradient-to-br from-white/[0.08] to-transparent border border-white/10 backdrop-blur-xl overflow-hidden group/metric">
                                <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/5 to-transparent opacity-0 group-hover/metric:opacity-100 transition-opacity duration-700"></div>
                                
                                <div class="relative space-y-8">
                                    <div class="flex justify-between items-end">
                                        <div>
                                            <span class="text-[10px] font-black text-blue-400 uppercase tracking-[0.2em] block mb-2">Platform Performance</span>
                                            <div class="flex items-baseline gap-1">
                                                <span class="text-6xl font-black text-white tracking-tighter">98</span>
                                                <span class="text-3xl font-bold text-blue-500">%</span>
                                            </div>
                                        </div>
                                        <div class="text-right pb-1">
                                            <div class="flex items-center justify-end -space-x-2 mb-2">
                                                <div class="w-8 h-8 rounded-full border-2 border-[#0F172A] bg-blue-500 flex items-center justify-center text-[10px] font-bold text-white">JD</div>
                                                <div class="w-8 h-8 rounded-full border-2 border-[#0F172A] bg-indigo-500 flex items-center justify-center text-[10px] font-bold text-white">AS</div>
                                                <div class="w-8 h-8 rounded-full border-2 border-[#0F172A] bg-slate-700 flex items-center justify-center text-[10px] font-bold text-white">+5k</div>
                                            </div>
                                            <span class="text-xs font-bold text-slate-400 italic">Trusted Success Rate</span>
                                        </div>
                                    </div>

                                    <!-- Enhanced Progress Bar -->
                                    <div class="space-y-3">
                                        <div class="flex justify-between text-[10px] font-black uppercase tracking-widest text-slate-500">
                                            <span>Current Reliability</span>
                                            <span class="text-white">Optimal Range</span>
                                        </div>
                                        <div class="relative h-4 w-full bg-white/5 rounded-full p-1 border border-white/5">
                                            <div class="absolute inset-y-1 left-1 bg-gradient-to-r from-blue-600 via-indigo-500 to-blue-400 rounded-full shadow-[0_0_20px_rgba(37,99,235,0.4)]" style="width: 98%">
                                                <div class="absolute inset-0 bg-[linear-gradient(45deg,rgba(255,255,255,0.15)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.15)_50%,rgba(255,255,255,0.15)_75%,transparent_75%,transparent)] bg-[length:20px_20px] animate-[shimmer_2s_linear_infinite]"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-4">
                                        <a href="{{ route('order') }}" class="group/btn relative flex w-full items-center justify-between gap-4 px-8 py-6 bg-blue-600 text-white font-black rounded-[1.5rem] hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-[0_20px_40px_-15px_rgba(37,99,235,0.5)] hover:shadow-2xl hover:-translate-y-1 active:scale-95 overflow-hidden">
                                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover/btn:translate-x-full transition-transform duration-1000"></div>
                                            <div class="flex flex-col items-start relative z-10">
                                                <span class="text-[10px] font-black uppercase tracking-[0.2em] opacity-80 mb-0.5">Instant Access</span>
                                                <span class="text-sm font-black">START YOUR ORDER NOW</span>
                                            </div>
                                            <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center group-hover/btn:bg-blue-600 group-hover/btn:text-white transition-all duration-500 relative z-10 shadow-lg">
                                                <svg class="w-5 h-5 transition-transform group-hover/btn:rotate-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                                </svg>
                                            </div>
                                        </a>
                                        <p class="text-center text-[10px] text-slate-500 mt-4 font-bold uppercase tracking-[0.3em]">Based on 50,000+ Completed Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                @keyframes scroll {
                    0% { transform: translateY(-100%); }
                    100% { transform: translateY(200%); }
                }

                @keyframes shimmer {
                    0% { background-position: 0 0; }
                    100% { background-position: 40px 0; }
                }

                @keyframes blob {
                    0% { transform: translate(0, 0) scale(1); }
                    33% { transform: translate(30px, -50px) scale(1.1); }
                    66% { transform: translate(-20px, 20px) scale(0.9); }
                    100% { transform: translate(0, 0) scale(1); }
                }
            </style>

        </div>
    </section>




    <!-- Dynamic CTA Section -->
    <section class="py-32 relative overflow-hidden">
        <!-- Background with Animated Gradient Orbs -->
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-indigo-600/20 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto bg-white/5 backdrop-blur-2xl border border-white/10 rounded-[4rem] p-12 md:p-20 text-center shadow-2xl">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blue-500/10 border border-blue-500/20 mb-8">
                    <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">Limited Time Offer: 30% Off Your First Order</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight leading-tight">
                    Ready to Transform <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Your Academic Future?</span>
                </h2>
                <p class="text-xl text-slate-400 font-medium mb-12 max-w-2xl mx-auto leading-relaxed">
                    Join over 50,000 students across the USA who have already unlocked their potential with our expert academic support.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('order') }}"
                        class="group relative inline-flex items-center justify-center gap-3 px-12 py-6 bg-blue-600 rounded-2xl text-white font-bold text-xl hover:bg-blue-700 transition-all duration-300 hover:scale-105 active:scale-95 shadow-xl shadow-blue-600/20">
                        Get Started Now
                        <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ route('services.assignment.index') }}"
                        class="inline-flex items-center justify-center gap-3 px-12 py-6 bg-white/5 backdrop-blur-md border border-white/10 rounded-2xl text-white font-bold text-xl hover:bg-white/10 transition-all duration-300">
                        View Services
                    </a>
                </div>
                <div class="mt-12 flex flex-wrap justify-center gap-8 text-slate-500 text-sm font-bold uppercase tracking-widest">
                    <span class="flex items-center gap-2">✓ No Plagiarism</span>
                    <span class="flex items-center gap-2">✓ 24/7 Support</span>
                    <span class="flex items-center gap-2">✓ Safe Payment</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Levels We Cover Section: Elite USA Standards -->
    <section class="py-32 bg-slate-50 relative overflow-hidden">
        <!-- Background Accents -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 opacity-20"></div>
        <div class="absolute -right-24 top-1/4 w-96 h-96 bg-blue-100/50 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute -left-24 bottom-1/4 w-96 h-96 bg-indigo-100/50 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-24">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white shadow-sm border border-slate-200 mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                    </span>
                    <span class="text-slate-900 font-black text-[10px] uppercase tracking-[0.2em]">Institutional Grade Support</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight leading-tight">
                    Covering Every <span class="text-blue-600">Academic Milestone.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl mx-auto">
                    From foundational high school coursework to advanced post-doctoral research, our USA-based experts deliver institutional precision at every stage.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Level 1: High School -->
                <div class="group relative bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.03)] transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.1)] hover:-translate-y-2 overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight">High School</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        Foundational assistance for grades 9-12, focusing on AP coursework and GPA optimization.
                    </p>

                    <div class="space-y-4 pt-8 border-t border-slate-50">
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600">AP Coursework</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600">SAT/ACT Help</span>
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
                <div class="group relative bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.03)] transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(16,185,129,0.1)] hover:-translate-y-2 overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-emerald-600 text-white flex items-center justify-center shadow-lg shadow-emerald-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight">Graduate</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        Sophisticated academic solutions for Master's programs, including advanced analytics and thesis work.
                    </p>

                    <div class="space-y-4 pt-8 border-t border-slate-50">
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600">Master's Thesis</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-emerald-50 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600">Applied Statistics</span>
                        </div>
                    </div>
                </div>

                <!-- Level 4: PhD -->
                <div class="group relative bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.03)] transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(139,92,246,0.1)] hover:-translate-y-2 overflow-hidden flex flex-col h-full">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700"></div>
                    
                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-purple-600 text-white flex items-center justify-center shadow-lg shadow-purple-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                        </div>
                    </div>

                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight">Doctoral (PhD)</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        Elite-level support for dissertation writing, research proposals, and academic publishing.
                    </p>

                    <div class="space-y-4 pt-8 border-t border-slate-50">
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-purple-50 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-purple-600">Dissertations</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default">
                            <div class="w-5 h-5 rounded-full bg-purple-50 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest">Research Defense</span>
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

    <!-- Budget Calculator Section -->
    <section class="relative py-24 lg:py-40 bg-[#0F172A] overflow-hidden">
        <!-- Modern Abstract Background -->
        <div class="absolute inset-0">
            <!-- Dynamic Gradient Orbs -->
            <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-indigo-600/20 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-purple-600/10 rounded-full blur-[150px] animate-pulse" style="animation-delay: 4s"></div>

            <!-- Stylized Mesh Pattern -->
            <div class="absolute inset-0 opacity-[0.15] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTSAzMCAwIEwgMzAgNjAgTSAwIDMwIEwgNjAgMzAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjUiIHN0cm9rZS13aWR0aD0iMC41Ii8+PC9zdmc+')] [mask-image:radial-gradient(ellipse_at_center,black_70%,transparent_100%)]"></div>
            
            <!-- Circuit Lines Accent -->
            <div class="absolute inset-0 opacity-20">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M 0 20 L 20 20 L 25 25 L 100 25" stroke="rgba(59, 130, 246, 0.2)" stroke-width="0.1" fill="none" />
                    <path d="M 100 80 L 80 80 L 75 75 L 0 75" stroke="rgba(139, 92, 246, 0.2)" stroke-width="0.1" fill="none" />
                </svg>
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-24">
                <!-- Architectural Step Indicator -->
                <div class="mb-10">
                    <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-5 py-2 rounded-full mb-5 shadow-[0_10px_30px_-16px_rgba(59,130,246,0.8)]">
                        <span class="relative flex h-2.5 w-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-blue-300"></span>
                        </span>
                        <span class="text-blue-100 font-extrabold text-xs uppercase tracking-[0.2em]">Pricing Engine v2.0</span>
                    </div>

                    <div class="max-w-3xl mx-auto grid grid-cols-1 sm:grid-cols-3 gap-3">
                        <div class="group rounded-2xl border border-white/15 bg-white/5 px-4 py-4 text-left hover:bg-white/[0.08] transition-colors">
                            <div class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-blue-500/20 text-blue-200 text-xs font-black mb-2">1</div>
                            <p class="text-white text-sm font-bold">Input Details</p>
                            <p class="text-slate-300 text-xs">Share deadline, pages, and level.</p>
                        </div>
                        <div class="group rounded-2xl border border-white/15 bg-white/5 px-4 py-4 text-left hover:bg-white/[0.08] transition-colors">
                            <div class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-indigo-500/20 text-indigo-200 text-xs font-black mb-2">2</div>
                            <p class="text-white text-sm font-bold">Smart Analysis</p>
                            <p class="text-slate-300 text-xs">Our model evaluates complexity instantly.</p>
                        </div>
                        <div class="group rounded-2xl border border-white/15 bg-white/5 px-4 py-4 text-left hover:bg-white/[0.08] transition-colors">
                            <div class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-purple-500/20 text-purple-200 text-xs font-black mb-2">3</div>
                            <p class="text-white text-sm font-bold">Clear Quote</p>
                            <p class="text-slate-300 text-xs">Get a transparent price with no hidden fees.</p>
                        </div>
                    </div>
                </div>

                <!-- Main Title -->
                <h2 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight">
                    Smart Pricing, <br class="hidden md:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Zero Surprises</span>
                </h2>

                <!-- Subtitle -->
                <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    Get a scientifically calculated quote based on academic complexity, 
                    urgency, and expert level. Transparent. Fast. Precise.
                </p>

                <!-- Vertical Flow Line -->
                <div class="mt-12 flex justify-center">
                    <div class="w-px h-16 bg-gradient-to-b from-blue-500/50 to-transparent"></div>
                </div>
            </div>

            <!-- Calculator Component with Premium Frame -->
            <div class="relative max-w-5xl mx-auto">
                <!-- Floating Decorative Accents -->
                <div class="absolute -top-12 -left-12 w-24 h-24 bg-blue-500/20 rounded-full blur-2xl animate-pulse"></div>
                <div class="absolute -bottom-12 -right-12 w-32 h-32 bg-purple-500/20 rounded-full blur-2xl animate-pulse" style="animation-delay: 1.5s"></div>

                <!-- Live Status Indicator -->
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 z-20">
                    <div class="bg-slate-900 border border-white/10 rounded-full px-4 py-1 flex items-center gap-2 shadow-2xl">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                        </span>
                        <span class="text-[10px] font-bold text-white uppercase tracking-tighter">Live Pricing Engine Active</span>
                    </div>
                </div>

                <div class="relative h-full bg-slate-800/40 backdrop-blur-3xl border border-white/10 rounded-[2.5rem] p-4 md:p-8 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.5)] overflow-hidden">
                    <!-- Subtle Glass Highlight -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-white/[0.02] to-transparent pointer-events-none"></div>
                    
                    <div class="relative z-10">
                        <livewire:budget-calculator />
                    </div>
                </div>
            </div>

            <!-- Bottom Stats Section -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <!-- Stat 1 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">01</div>
                        
                        <div class="w-14 h-14 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">⚡</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">Instant</h3>
                        <p class="text-blue-200 text-sm">Quote Results</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                        
                        <div class="w-14 h-14 bg-indigo-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">💯</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">100%</h3>
                        <p class="text-indigo-200 text-sm">Price Match</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                        
                        <div class="w-14 h-14 bg-purple-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🎓</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">50+</h3>
                        <p class="text-purple-200 text-sm">Expert Subjects</p>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-pink-600 to-orange-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">04</div>
                        
                        <div class="w-14 h-14 bg-pink-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">💰</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">20%</h3>
                        <p class="text-pink-200 text-sm">Early Bird Discount</p>
                    </div>
                </div>
            </div>

                <!-- CTA Section and Satisfaction -->
                <div class="mt-24 text-center">
                    <div class="inline-flex flex-wrap items-center justify-center gap-6 mb-12">
                        <div class="flex items-center gap-2 text-slate-400 text-sm">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span>Enterprise-grade Security</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-400 text-sm">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span>100% Privacy Protected</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ route('order') }}"
                            class="group relative inline-flex items-center gap-3 px-10 py-5 bg-white rounded-full text-indigo-950 font-bold text-lg hover:bg-indigo-50 transition-all duration-300 hover:scale-105 active:scale-95 shadow-[0_0_50px_-10px_rgba(255,255,255,0.4)]">
                            <span class="relative z-10">Start Your Order</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform relative z-10" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-3 px-10 py-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-full text-white font-bold text-lg hover:bg-white/10 transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span>Talk to Expert</span>
                        </a>
                    </div>
                </div>

                <!-- Professional Bridge Section -->
                <div class="mt-16 max-w-5xl mx-auto">
                    <div class="rounded-3xl border border-white/10 bg-slate-900/70 backdrop-blur-xl px-6 py-8 md:px-10 md:py-9">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8 items-start">
                            <div>
                                <p class="text-[11px] font-extrabold uppercase tracking-[0.2em] text-cyan-300 mb-2">Pricing Integrity</p>
                                <h3 class="text-white text-2xl font-black leading-tight">Professional and transparent by design</h3>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm font-semibold text-white">Structured Estimation</p>
                                <p class="text-sm text-slate-300">Pricing is calculated from deadline, complexity, and academic level.</p>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm font-semibold text-white">No Hidden Charges</p>
                                <p class="text-sm text-slate-300">You see the real cost upfront with clear revision and support coverage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Dark Separator -->
            <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-slate-950 via-slate-950/70 to-transparent pointer-events-none"></div>
    </section>

    <!-- Professional Insights Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:28px_28px] opacity-30"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-6xl mx-auto rounded-[2rem] border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-8 md:p-12">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-slate-100 border border-slate-200 mb-5">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <span class="text-slate-700 font-extrabold text-xs uppercase tracking-[0.18em]">Assignment Help USA</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black text-slate-900 tracking-tight leading-tight mb-4">
                            Assignment Help USA For Serious Academic Results
                        </h2>
                        <p class="text-slate-600 text-lg leading-relaxed mb-7">
                            Clear pricing, expert support, and reliable delivery for essays, research papers, and urgent assignments.
                        </p>

                        <div class="space-y-3 mb-8">
                            <p class="text-slate-700 text-sm"><span class="font-bold text-slate-900">US-ready quality:</span> Academic formatting and citation alignment.</p>
                            <p class="text-slate-700 text-sm"><span class="font-bold text-slate-900">Transparent process:</span> Scope and timeline defined before payment.</p>
                            <p class="text-slate-700 text-sm"><span class="font-bold text-slate-900">Always available:</span> 24/7 support from order to final delivery.</p>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('order') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl bg-slate-900 text-white font-black hover:bg-slate-800 transition-colors">
                                Start Order
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                            <a href="#how-it-works" class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl border border-slate-300 text-slate-700 font-black hover:bg-slate-50 transition-colors">
                                See Process
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="relative rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.35)]">
                            <img src="{{ asset('images/student-hero.png') }}" alt="USA student receiving assignment help support" class="w-full h-[360px] object-cover object-center">
                            <div class="absolute top-4 left-4 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white/95 border border-slate-200 shadow-sm">
                                <span class="text-[11px] font-extrabold text-slate-800 uppercase tracking-[0.12em]">USA Student Focus</span>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-red-500/10 pointer-events-none"></div>
                            <div class="absolute inset-x-0 bottom-0 p-6 bg-gradient-to-t from-slate-900/85 to-transparent">
                                <p class="text-white text-base font-bold">Trusted by students across the USA for quality-focused assignment support.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-3 mt-4">
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center">
                                <p class="text-slate-900 text-xl font-black">24/7</p>
                                <p class="text-slate-500 text-xs uppercase tracking-wide">Support</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center">
                                <p class="text-slate-900 text-xl font-black">50+</p>
                                <p class="text-slate-500 text-xs uppercase tracking-wide">Subjects</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center">
                                <p class="text-slate-900 text-xl font-black">98%</p>
                                <p class="text-slate-500 text-xs uppercase tracking-wide">On-Time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-6xl mx-auto mt-6 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="rounded-2xl bg-white border border-slate-200 p-5">
                    <p class="text-slate-900 text-sm font-black mb-1">Plagiarism-Safe Drafts</p>
                    <p class="text-slate-600 text-xs leading-relaxed">Original, quality-checked content prepared for academic submission.</p>
                </div>
                <div class="rounded-2xl bg-white border border-slate-200 p-5">
                    <p class="text-slate-900 text-sm font-black mb-1">Deadline Precision</p>
                    <p class="text-slate-600 text-xs leading-relaxed">Urgent and standard windows with clear turnaround commitments.</p>
                </div>
                <div class="rounded-2xl bg-white border border-slate-200 p-5">
                    <p class="text-slate-900 text-sm font-black mb-1">Secure Communication</p>
                    <p class="text-slate-600 text-xs leading-relaxed">Private updates and consistent support at every stage.</p>
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

        <div class="container mx-auto px-6 relative z-10">
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
                    class="group relative inline-flex items-center gap-3 px-10 py-5 bg-white rounded-full text-indigo-950 font-bold text-lg hover:bg-indigo-50 transition-all duration-300 hover:scale-105 active:scale-95 shadow-[0_0_40px_-10px_rgba(255,255,255,0.3)]">
                    <span class="relative z-10">Start Your Journey</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform relative z-10" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <p class="mt-6 text-slate-500 text-sm">No credit card required for quote</p>
            </div>
        </div>
    </section>

    <!-- Benefits & Guarantees Section: Institutional Protection -->
    <section class="py-32 bg-white relative overflow-hidden">
        <!-- Background decorative elements with motion -->
        <div class="absolute top-0 right-0 w-1/3 h-1/3 bg-blue-100/30 rounded-full blur-[120px] -mr-24 -mt-24 pointer-events-none animate-[blob_7s_infinite_alternate]"></div>
        <div class="absolute bottom-0 left-0 w-1/3 h-1/3 bg-indigo-100/30 rounded-full blur-[120px] -ml-24 -mb-24 pointer-events-none animate-[blob_10s_infinite_alternate_reverse]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:40px_40px] opacity-20 pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-24">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-slate-50 border border-slate-200 mb-8 hover:scale-105 transition-transform duration-300 cursor-default">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-600"></span>
                    </span>
                    <span class="text-slate-900 font-black text-[10px] uppercase tracking-[0.2em]">Institutional-Grade Protection</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight leading-tight">
                    Your Success, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600">Ironclad & Guaranteed.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed max-w-2xl mx-auto">
                    We stand behind our elite experts with comprehensive protections that ensure every submission meets institutional standards.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- 1: Original Work -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-blue-100 hover:shadow-[0_40px_100px_-20px_rgba(37,99,235,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col">
                    <!-- Shine Effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none">
                        <div class="absolute -inset-full bg-gradient-to-tr from-transparent via-white/40 to-transparent rotate-45 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out"></div>
                    </div>

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-blue-600 text-white flex items-center justify-center shadow-lg shadow-blue-600/20 group-hover:rotate-[15deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-blue-600 transition-colors">100% Original Work</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        Every assignment is written from scratch and validated through advanced plagiarism detection software.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600">Turnitin Verified</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 transition-all duration-300 group-hover/item:bg-blue-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-blue-600">Scratch-Built Only</span>
                        </div>
                    </div>
                </div>

                <!-- 2: Money Back -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-emerald-100 hover:shadow-[0_40px_100px_-20px_rgba(16,185,129,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col">
                    <!-- Shine Effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none">
                        <div class="absolute -inset-full bg-gradient-to-tr from-transparent via-white/40 to-transparent rotate-45 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out"></div>
                    </div>

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-emerald-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-emerald-600 text-white flex items-center justify-center shadow-lg shadow-emerald-600/20 group-hover:rotate-[-15deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-emerald-600 transition-colors">Money-Back Guarantee</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        If we can't meet your institutional requirements, we offer a full, transparent refund. No questions asked.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600">Full Protection</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 transition-all duration-300 group-hover/item:bg-emerald-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-emerald-600">Zero-Risk Hire</span>
                        </div>
                    </div>
                </div>

                <!-- 3: Revisions -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-purple-100 hover:shadow-[0_40px_100px_-20px_rgba(139,92,246,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col">
                    <!-- Shine Effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none">
                        <div class="absolute -inset-full bg-gradient-to-tr from-transparent via-white/40 to-transparent rotate-45 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out"></div>
                    </div>

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-purple-600 text-white flex items-center justify-center shadow-lg shadow-purple-600/20 group-hover:rotate-[15deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-purple-600 transition-colors">Unlimited Revisions</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        We revise until perfection. Your feedback is our roadmap to an A grade, with zero additional costs.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-purple-600">Feedback Loops</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-purple-100 flex items-center justify-center text-purple-600 transition-all duration-300 group-hover/item:bg-purple-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-purple-600">Total Satisfaction</span>
                        </div>
                    </div>
                </div>

                <!-- 4: Delivery -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-amber-100 hover:shadow-[0_40px_100px_-20px_rgba(245,158,11,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col">
                    <!-- Shine Effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none">
                        <div class="absolute -inset-full bg-gradient-to-tr from-transparent via-white/40 to-transparent rotate-45 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out"></div>
                    </div>

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-amber-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-amber-600 text-white flex items-center justify-center shadow-lg shadow-amber-600/20 group-hover:rotate-12 group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-amber-600 transition-colors">On-Time Delivery</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        We respect the clock. 98% of our submissions arrive before the deadline to give you review time.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 transition-all duration-300 group-hover/item:bg-amber-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-amber-600">Deadline Lock</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-amber-100 flex items-center justify-center text-amber-600 transition-all duration-300 group-hover/item:bg-amber-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-amber-600">Early Access</span>
                        </div>
                    </div>
                </div>

                <!-- 5: Support -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-cyan-100 hover:shadow-[0_40px_100px_-20px_rgba(6,182,212,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col">
                    <!-- Shine Effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none">
                        <div class="absolute -inset-full bg-gradient-to-tr from-transparent via-white/40 to-transparent rotate-45 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out"></div>
                    </div>

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-cyan-600 text-white flex items-center justify-center shadow-lg shadow-cyan-600/20 group-hover:rotate-[-12deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-cyan-600 transition-colors">24/7 Elite Support</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        Real humans, available round the clock. Connect with our academic coordinators whenever duty calls.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 transition-all duration-300 group-hover/item:bg-cyan-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-cyan-600">Immediate Chat</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-cyan-100 flex items-center justify-center text-cyan-600 transition-all duration-300 group-hover/item:bg-cyan-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-cyan-600">Expert Coordination</span>
                        </div>
                    </div>
                </div>

                <!-- 6: Confidentiality -->
                <div class="group relative bg-slate-50 rounded-[2.5rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-rose-100 hover:shadow-[0_40px_100px_-20px_rgba(244,63,94,0.15)] hover:-translate-y-3 overflow-hidden flex flex-col">
                    <!-- Shine Effect -->
                    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none">
                        <div class="absolute -inset-full bg-gradient-to-tr from-transparent via-white/40 to-transparent rotate-45 translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out"></div>
                    </div>

                    <!-- Decorative Expanding Circle -->
                    <div class="absolute top-0 right-0 w-32 h-32 bg-rose-50/50 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700 pointer-events-none"></div>

                    <div class="mb-10 relative">
                        <div class="w-16 h-16 rounded-2xl bg-rose-600 text-white flex items-center justify-center shadow-lg shadow-rose-600/20 group-hover:rotate-[20deg] group-hover:scale-110 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4 tracking-tight group-hover:text-rose-600 transition-colors">100% Confidential</h3>
                    <p class="text-slate-500 text-sm font-medium leading-relaxed mb-8 flex-grow">
                        Your identity is your power. We use military-grade encryption to ensure your data stays strictly private.
                    </p>
                    <div class="space-y-4 pt-8 border-t border-slate-200/50">
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300">
                            <div class="w-5 h-5 rounded-full bg-rose-100 flex items-center justify-center text-rose-600 transition-all duration-300 group-hover/item:bg-rose-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-rose-600">Encrypted Vault</span>
                        </div>
                        <div class="flex items-center gap-3 group/item cursor-default group-hover:translate-x-1 transition-transform duration-300 delay-75">
                            <div class="w-5 h-5 rounded-full bg-rose-100 flex items-center justify-center text-rose-600 transition-all duration-300 group-hover/item:bg-rose-600 group-hover/item:text-white group-hover/item:scale-110 group-hover/item:rotate-[360deg]">
                                <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="4"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-xs font-black text-slate-700 uppercase tracking-widest transition-colors duration-300 group-hover/item:text-rose-600">Total Anonymity</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Testimonials: Verified Success Stories -->
    <section class="py-32 bg-slate-50 relative overflow-hidden" id="testimonials">
        <div class="absolute inset-0 z-0 opacity-30">
            <div class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:24px_24px]"></div>
        </div>
        
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-24">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-600 shadow-xl mb-8">
                    <span class="flex h-2 w-2 rounded-full bg-white animate-pulse"></span>
                    <span class="text-white text-[10px] font-black uppercase tracking-widest">Verified Collegiate Results</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight">
                    Trusted by <br>
                    <span class="text-blue-600">USA's Elite Students.</span>
                </h2>
                <p class="text-xl text-slate-500 max-w-2xl mx-auto font-medium leading-relaxed">
                    Hear from thousands of students across top American universities who transformed their grades with our expert assistance.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                
                <!-- Testimonial 1 -->
                <div class="group bg-white rounded-[3rem] p-10 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.05)] border border-slate-100 transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.1)] hover:-translate-y-2">
                    <div class="flex items-center gap-1 text-amber-400 mb-8">
                        @for($i=0; $i<5; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        @endfor
                    </div>
                    <blockquote class="text-lg font-medium text-slate-700 leading-relaxed mb-10 italic">
                        "I was struggling with my Nursing capstone project at NYU. The expert delivered institutional-grade work that exceeded expectations. Secured an A+!"
                    </blockquote>
                    <div class="flex items-center gap-5 border-t border-slate-50 pt-8">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center text-white font-black text-xl shadow-lg">SM</div>
                        <div>
                            <div class="font-black text-slate-900">Sarah M.</div>
                            <div class="text-xs font-black text-blue-600 uppercase tracking-widest">Nursing • New York, NY</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="group bg-white rounded-[3rem] p-10 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.05)] border border-slate-100 transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.1)] hover:-translate-y-2 lg:mt-12">
                    <div class="flex items-center gap-1 text-amber-400 mb-8">
                        @for($i=0; $i<5; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        @endfor
                    </div>
                    <blockquote class="text-lg font-medium text-slate-700 leading-relaxed mb-10 italic">
                        "The most transparent coding service I've used. No hidden fees, and the Python expert at Stanford was extremely helpful. Clean, elegant code."
                    </blockquote>
                    <div class="flex items-center gap-5 border-t border-slate-50 pt-8">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-slate-900 to-slate-800 flex items-center justify-center text-white font-black text-xl shadow-lg">JL</div>
                        <div>
                            <div class="font-black text-slate-900">James L.</div>
                            <div class="text-xs font-black text-slate-500 uppercase tracking-widest">CS Student • Palo Alto, CA</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="group bg-white rounded-[3rem] p-10 shadow-[0_20px_50px_-12px_rgba(0,0,0,0.05)] border border-slate-100 transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.1)] hover:-translate-y-2">
                    <div class="flex items-center gap-1 text-amber-400 mb-8">
                        @for($i=0; $i<5; $i++)
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        @endfor
                    </div>
                    <blockquote class="text-lg font-medium text-slate-700 leading-relaxed mb-10 italic">
                        "Absolute lifesaver for my Business minor. The confidentiality policy is robust, and they delivered a perfect business plan on short notice."
                    </blockquote>
                    <div class="flex items-center gap-5 border-t border-slate-50 pt-8">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-600 to-emerald-700 flex items-center justify-center text-white font-black text-xl shadow-lg">MR</div>
                        <div>
                            <div class="font-black text-slate-900">Michael R.</div>
                            <div class="text-xs font-black text-emerald-600 uppercase tracking-widest">Business • Austin, TX</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Premium SEO Content Section: Target "Assignment Help" USA -->
    <section class="py-32 bg-[#0F172A] relative overflow-hidden text-white">
        <!-- Background Accents -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-indigo-600/20 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mb-24">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 backdrop-blur-md">
                    <span class="flex h-2 w-2 rounded-full bg-blue-400 animate-ping"></span>
                    <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">E-E-A-T Verified Support</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black mb-8 tracking-tight leading-[1.1]">
                    The Gold Standard for <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Online Assignment Help USA.</span>
                </h2>
                <p class="text-xl text-slate-400 font-medium leading-relaxed max-w-3xl">
                    In the competitive landscape of American higher education, average work isn't enough. We provide elite academic intervention that bridges the gap between struggling and succeeding.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 lg:gap-20">
                <!-- Left Column: Expertise -->
                <div class="space-y-12">
                    <div class="group">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-blue-600/20 flex items-center justify-center text-blue-400 group-hover:scale-110 transition-transform shadow-lg border border-blue-500/30">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold">Expert US-Based PhD Writers</h3>
                        </div>
                        <p class="text-slate-400 leading-relaxed">
                            Our platform connects you with the finest academic minds in America. Every writer in our <strong class="text-white">assignment help USA</strong> network holds an advanced degree (Masters or PhD) from prestigious institutions. We don’t just write; we research, analyze, and synthesize according to the highest Ivy League and state university standards.
                        </p>
                    </div>

                    <div class="group">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-600/20 flex items-center justify-center text-emerald-400 group-hover:scale-110 transition-transform shadow-lg border border-emerald-500/30">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold">Zero-AI & Plagiarism-Free Content</h3>
                        </div>
                        <p class="text-slate-400 leading-relaxed">
                            Integrity is our hallmark. We guarantee that every assignment is 100% human-written. Each order is accompanied by a comprehensive <strong class="text-white">Turnitin Report</strong>, ensuring your submission is entirely original and free from AI-generated patterns.
                        </p>
                    </div>
                </div>

                <!-- Right Column: Reliability -->
                <div class="space-y-12">
                    <div class="group">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-purple-600/20 flex items-center justify-center text-purple-400 group-hover:scale-110 transition-transform shadow-lg border border-purple-500/30">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold">24/7 Coast-to-Coast Support</h3>
                        </div>
                        <p class="text-slate-400 leading-relaxed">
                            Whether you're in New York (EST) or Los Angeles (PST), our coordinators are always awake. We provide round-the-clock assistance, ensuring that urgent deadlines are met with precision. Your <strong class="text-white">assignment helper</strong> is just a chat away, anytime.
                        </p>
                    </div>

                    <div class="group">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 rounded-2xl bg-amber-600/20 flex items-center justify-center text-amber-400 group-hover:scale-110 transition-transform shadow-lg border border-amber-500/30">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                            </div>
                            <h3 class="text-2xl font-bold">Native Academic Formatting</h3>
                        </div>
                        <p class="text-slate-400 leading-relaxed">
                            Presentation matters. Our writers are specialists in all American academic formatting styles: <strong class="text-white">APA, MLA, Chicago, Harvard, and Bluebook</strong>. We ensure perfect citations, consistent referencing, and professional layout standards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Students Choose Assignment Help USA -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24 max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blue-50 border border-blue-100 mb-8">
                    <span class="text-blue-600 text-[10px] font-black uppercase tracking-[0.2em]">Our Value Proposition</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight">
                    Elevate Your <br>
                    <span class="text-blue-600">Academic Potential.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed">
                    We don't just complete assignments; we empower students to achieve excellence through strategic academic support.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Original Content Card -->
                <div class="group bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-blue-100 hover:shadow-2xl">
                    <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4">Original Content</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Unique perspectives crafted exclusively for your prompt, ensuring distinctiveness in every paragraph.</p>
                </div>

                <!-- Qualified Professionals Card -->
                <div class="group bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-emerald-100 hover:shadow-2xl lg:mt-12">
                    <div class="w-16 h-16 bg-emerald-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4">Expert Minds</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Direct access to subject matter experts with deep pedagogical understanding of American curriculum.</p>
                </div>

                <!-- Reliable Timelines Card -->
                <div class="group bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-amber-100 hover:shadow-2xl">
                    <div class="w-16 h-16 bg-amber-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4">Swift Delivery</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Precision-engineered timelines that respect your deadlines, always allowing time for final review.</p>
                </div>

                <!-- Referencing Specialists Card -->
                <div class="group bg-slate-50 rounded-[3rem] p-10 border border-transparent transition-all duration-500 hover:bg-white hover:border-purple-100 hover:shadow-2xl lg:mt-12">
                    <div class="w-16 h-16 bg-purple-600 text-white rounded-2xl flex items-center justify-center mb-8 shadow-lg group-hover:rotate-12 transition-transform">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 012 2h8a2 2 0 012-2v-2" /></svg>
                    </div>
                    <h3 class="text-2xl font-black text-slate-900 mb-4">Cite Right</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Mastery of all citation protocols, ensuring your paper meets the strictest academic integrity codes.</p>
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


    <!-- Academic Services Deep-Dive: Strategic Support for Every Requirement -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24 max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-slate-50 border border-slate-200 mb-8">
                    <span class="text-slate-900 font-black text-[10px] uppercase tracking-[0.2em]">Detailed Service Portfolio</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight">
                    Precision Academic <br>
                    <span class="text-blue-600">Intervention.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed">
                    Our specialized departments provide tailored solutions for every academic challenge, ensuring institutional standards are met with surgical precision.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
                <!-- Essay Writing -->
                <div class="group relative flex flex-col p-1 bg-gradient-to-br from-blue-600 to-indigo-600 rounded-[3rem] transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="bg-white rounded-[2.9rem] p-10 flex-grow">
                        <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">Essay Writing</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">From argumentative to descriptive, our writers craft compelling narratives that adhere to specified rubrics and academic levels. We focus on thesis strength, logical flow, and evidence-based argumentation to ensure your ideas resonate with high-authority impact.</p>
                        <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-blue-600 font-black text-[10px] uppercase tracking-widest">Starting $15/page</span>
                            <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study/Report -->
                <div class="group relative flex flex-col p-1 bg-gradient-to-br from-emerald-600 to-teal-600 rounded-[3rem] transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="bg-white rounded-[2.9rem] p-10 flex-grow transition-colors">
                        <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">Case Study & Reports</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">In-depth analysis of real-world scenarios or technical datasets. We provide structured reports with executive summaries, SWOT analyses, and data-driven recommendations that mirror professional industry standards and academic rigor.</p>
                        <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-emerald-600 font-black text-[10px] uppercase tracking-widest">Data-Driven analysis</span>
                            <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dissertation -->
                <div class="group relative flex flex-col p-1 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-[3rem] transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="bg-white rounded-[2.9rem] p-10 flex-grow transition-colors">
                        <div class="w-16 h-16 bg-purple-50 text-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">Dissertation & Thesis</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">Long-form research support for Masters and PhD candidates. We assist with literature reviews, methodology design, and comprehensive findings. Our experts ensure your original contribution is presented with technical accuracy and academic gravitas.</p>
                        <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-purple-600 font-black text-[10px] uppercase tracking-widest">PhD Expert network</span>
                            <div class="w-8 h-8 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Programming Help -->
                <div class="group relative flex flex-col p-1 bg-gradient-to-br from-indigo-900 to-slate-900 rounded-[3rem] transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="bg-slate-900 rounded-[2.9rem] p-10 flex-grow text-white">
                        <div class="w-16 h-16 bg-white/10 text-white rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-white mb-4">Programming Help</h3>
                        <p class="text-slate-400 text-sm leading-relaxed mb-8">Clean, commented, and executable code in Java, Python, C++, and more. We handle complex algorithms, data structures, and full-stack projects, providing robust documentation and logical breakdowns for every code snippet.</p>
                        <div class="mt-auto pt-6 border-t border-white/5 flex items-center justify-between">
                            <span class="text-indigo-400 font-black text-[10px] uppercase tracking-widest">Full-Stack Experts</span>
                            <div class="w-8 h-8 rounded-full bg-white/10 text-white flex items-center justify-center group-hover:bg-white group-hover:text-indigo-950 transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Editing & Proofreading -->
                <div class="group relative flex flex-col p-1 bg-gradient-to-br from-amber-500 to-orange-600 rounded-[3rem] transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="bg-white rounded-[2.9rem] p-10 flex-grow transition-colors">
                        <div class="w-16 h-16 bg-amber-50 text-amber-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">Editing & Proofreading</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">Refine your drafts to perfection. We correct syntax, clarify ambiguous phrasing, and ensure perfect adherence to citation styles. Our editorial process elevates your voice while maintaining academic integrity.</p>
                        <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-amber-600 font-black text-[10px] uppercase tracking-widest">Grammar & Syntax Hub</span>
                            <div class="w-8 h-8 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center group-hover:bg-amber-600 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </div>
                    </div>
                </div>

            
                <!-- Online Course Help -->
                <div class="group relative flex flex-col p-1 bg-gradient-to-br from-cyan-600 to-blue-600 rounded-[3rem] transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
                    <div class="bg-white rounded-[2.9rem] p-10 flex-grow transition-colors">
                        <div class="w-16 h-16 bg-cyan-50 text-cyan-600 rounded-2xl flex items-center justify-center mb-8 shadow-sm group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" /></svg>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900 mb-4">Online Course Help</h3>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">Full-term academic management for your online courses. We assist with weekly discussions, periodic quizzes, midterm exams, and complex final projects to ensure you maintain a consistent GPA throughout the semester.</p>
                        <div class="mt-auto pt-6 border-t border-slate-100 flex items-center justify-between">
                            <span class="text-cyan-600 font-black text-[10px] uppercase tracking-widest">Full-Term Management</span>
                            <div class="w-8 h-8 rounded-full bg-cyan-50 text-cyan-600 flex items-center justify-center group-hover:bg-cyan-600 group-hover:text-white transition-colors">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subject Areas Comprehensive Grid Section -->
    <section class="py-32 bg-slate-50 relative overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-24 max-w-4xl mx-auto">
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight">
                    Omni-Disciplinary <br>
                    <span class="text-blue-600">Expertise.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium leading-relaxed">
                    From STEM to Humanities, our specialty network covers over 100+ academic disciplines with localized US expertise.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- STEM -->
                <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">🔬</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">STEM Fields</h3>
                    <ul class="space-y-3 text-sm text-gray-600 font-bold">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span> Advanced Mathematics</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span> Physics & Astrophysics</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span> Bio-Medical Sciences</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span> Chemical Engineering</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span> Environmental Geology</li>
                    </ul>
                </div>

                <!-- Business -->
                <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-emerald-50 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">💼</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Business & Econ</h3>
                    <ul class="space-y-3 text-sm text-gray-600 font-bold">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Financial Analysis</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Strategic Management</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Market Research</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Econometrics</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Supply Chain Logistics</li>
                    </ul>
                </div>

                <!-- CS & Tech -->
                <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">💻</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">CS & Technology</h3>
                    <ul class="space-y-3 text-sm text-gray-600 font-bold">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span> Software Engineering</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span> AI & Machine Learning</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span> Cyber Security</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span> Data Science & Analytics</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-indigo-400"></span> Cloud Architecture</li>
                    </ul>
                </div>

                <!-- Humanities -->
                <div class="bg-white rounded-[2.5rem] p-8 border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-500 group">
                    <div class="w-14 h-14 bg-purple-50 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">📚</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4">Humanities</h3>
                    <ul class="space-y-3 text-sm text-gray-600 font-bold">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> English Literature</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> Modern Philosophy</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> Political Sociology</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> Cultural Anthropology</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span> Applied Psychology</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Geographic Coverage - USA Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-red-50 border border-red-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-red-900 font-semibold text-sm">Serving Students Across USA</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Available Nationwide in the USA</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We proudly serve students from coast to coast with 24/7 online support regardless of your location
                </p>
            </div>

            <div class="max-w-7xl mx-auto">
                <!-- Major Cities -->
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-gray-100 mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Popular Cities We Serve</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🗽</div>
                            <div class="font-semibold text-gray-900 text-sm">New York</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌴</div>
                            <div class="font-semibold text-gray-900 text-sm">Los Angeles</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏙️</div>
                            <div class="font-semibold text-gray-900 text-sm">Chicago</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🤠</div>
                            <div class="font-semibold text-gray-900 text-sm">Houston</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🔔</div>
                            <div class="font-semibold text-gray-900 text-sm">Philadelphia</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌵</div>
                            <div class="font-semibold text-gray-900 text-sm">Phoenix</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌁</div>
                            <div class="font-semibold text-gray-900 text-sm">San Francisco</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏖️</div>
                            <div class="font-semibold text-gray-900 text-sm">Miami</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏛️</div>
                            <div class="font-semibold text-gray-900 text-sm">Washington DC</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🎭</div>
                            <div class="font-semibold text-gray-900 text-sm">Boston</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">☕</div>
                            <div class="font-semibold text-gray-900 text-sm">Seattle</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🎸</div>
                            <div class="font-semibold text-gray-900 text-sm">Austin</div>
                        </div>
                    </div>
                    <p class="text-center text-gray-500 mt-6 text-sm">+ Hundreds more cities across all 50 states</p>
                </div>

                <!-- State Coverage -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 East Coast</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>New York</div>
                            <div>Pennsylvania</div>
                            <div>Massachusetts</div>
                            <div>Virginia</div>
                            <div>Florida</div>
                            <div>Maryland</div>
                            <div>New Jersey</div>
                            <div>Georgia</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 Midwest</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>Illinois</div>
                            <div>Ohio</div>
                            <div>Michigan</div>
                            <div>Wisconsin</div>
                            <div>Minnesota</div>
                            <div>Missouri</div>
                            <div>Indiana</div>
                            <div>Iowa</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 West Coast</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>California</div>
                            <div>Washington</div>
                            <div>Oregon</div>
                            <div>Arizona</div>
                            <div>Nevada</div>
                            <div>Colorado</div>
                            <div>Utah</div>
                            <div>Texas</div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-center text-white">
                    <h4 class="text-2xl font-bold mb-3">🇺🇸 All 50 States Covered</h4>
                    <p class="text-lg mb-4">No matter where you are in the United States, our expert help is just a click
                        away</p>
                    <div class="flex flex-wrap gap-3 justify-center text-sm">
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">Online Platform</span>
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">24/7 Available</span>
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">All Time Zones</span>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Premium FAQ Section -->
    <section class="py-32 bg-slate-50 relative overflow-hidden" id="faq">
        <!-- Background Accents -->
        <div class="absolute inset-0 opacity-40 pointer-events-none">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100 rounded-full blur-[120px]"></div>
            <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-purple-100 rounded-full blur-[120px]"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-24">
                <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blue-600/10 border border-blue-600/20 mb-8">
                    <span class="text-blue-600 text-[10px] font-black uppercase tracking-[0.2em]">Clarifying Success</span>
                </div>
                <h2 class="text-5xl md:text-7xl font-black text-slate-900 mb-8 tracking-tight">
                    Frequently Asked <br>
                    <span class="text-blue-600">Questions.</span>
                </h2>
                <p class="text-xl text-slate-500 font-medium">Everything you need to know about navigating your academic journey with Assignment Help USA.</p>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <!-- FAQ Item 1 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl">
                    <button @click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">Is Assignment Help USA legit and safe to use?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium">
                            Yes! Assignment Help USA is a vetted platform trusted by over 50,000 students nationwide. We employ military-grade 256-bit SSL encryption for all data transfers and use industry-standard secure payment processors. Our service is fully compliant with privacy laws, ensuring 100% anonymity for every user.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl">
                    <button @click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">How much does it cost?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium">
                            Our pricing is dynamic and designed to be student-friendly. Writing services start at $15 per page, while complex programming or technical tasks begin at $25. Factors influencing the final quote include academic level, complexity, and deadline urgency. We also offer standard discounts for large orders and first-time users.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl">
                    <button @click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">How fast can you complete my assignment?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium">
                            We pride ourselves on meeting tight constraints. Our express delivery team can handle turnarounds as short as 6-12 hours for urgent tasks. Standard assignments are typically delivered within 3-5 days. Regardless of the timeline, 98% of our orders are delivered before the deadline to allow time for student review.
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl">
                    <button @click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                        <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors">What if I'm not satisfied with the work?</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </div>
                    </button>
                    <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                        <p class="text-slate-600 leading-relaxed font-medium">
                            Total satisfaction is guaranteed. We offer an unlimited free revision policy—we will work with you until the paper perfectly aligns with your initial instructions. In the rare event that we fail to meet your institutional requirements, we provide a transparent, full refund under our money-back guarantee.
                        </p>
                    </div>
                </div>
            </div>

            <!-- FAQ Footer -->
            <div class="mt-20 text-center">
                <p class="text-slate-500 font-bold mb-6">Didn't find your answer?</p>
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
