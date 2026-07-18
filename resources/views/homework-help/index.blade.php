@extends('layouts.app')

@section('title', 'Online Homework Help | Get Your Assignments Done by US Experts')
@section('description', 'Struggling to keep up with college assignments? Get original, step-by-step homework help from vetted US tutors. 100% human-written, 24/7 support.')

@section('content')
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950">
        {{-- ===================================================
             HERO SECTION — COPY FROM HOME PAGE
        =================================================== --}}
        <x-creative-hero :service="$service" />

        {{-- ===================================================
             SECTION 1 – TRUST BAR / SOCIAL PROOF
        =================================================== --}}
        <section class="border-y border-slate-200 bg-white py-5 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
                    <div class="flex items-center gap-2.5">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">4.9/5</span>
                        <span class="text-xs text-slate-500 dark:text-slate-400">from 5,000+ student reviews</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">45</strong> Academic Tutors Online</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Turnitin Verified Reports Included</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – SUBJECTS GRID — 2.5rem ROUNDED CARD PATTERN
        =================================================== --}}
        {{-- SEO overview: placed high on the page to establish topic and search intent before service details. --}}
        <section class="relative overflow-hidden bg-white py-16 sm:py-20 dark:bg-slate-900" aria-labelledby="homework-overview-heading">
            <div class="absolute inset-0 pointer-events-none bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:28px_28px] opacity-30 dark:opacity-10"></div>

            <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-6xl rounded-[2rem] border border-slate-200 bg-gradient-to-br from-white to-slate-50 p-6 shadow-[0_30px_80px_-55px_rgba(15,23,42,0.45)] sm:p-8 md:p-12 dark:border-slate-800 dark:from-slate-900 dark:to-slate-950">
                    <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2 lg:gap-14">
                        <div>
                            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-blue-50 px-4 py-2 dark:border-blue-900/60 dark:bg-blue-950/40">
                                <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-blue-700 dark:text-blue-300">Homework Help USA</span>
                            </div>

                            <h2 id="homework-overview-heading" class="mb-5 text-3xl font-black leading-tight tracking-tight text-slate-900 sm:text-4xl md:text-5xl dark:text-white">
                                Online Homework Help Built Around Your Course and Deadline
                            </h2>
                            <p class="mb-7 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                                Our online homework help connects college students with subject specialists for clear, original academic guidance. Share your question, grading rubric, and supporting files to receive a solution you can review, understand, and use to strengthen your own work.
                            </p>

                            <div class="mb-8 space-y-4">
                                <div class="flex items-start gap-3">
                                    <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-600 dark:bg-blue-950/60 dark:text-blue-400">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    </span>
                                    <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300"><span class="font-bold text-slate-900 dark:text-white">Subject-matched expertise:</span> Explore homework assistance for <a href="{{ url('/homework-help/math') }}" class="font-semibold text-blue-600 underline decoration-blue-200 underline-offset-2 hover:text-blue-700 dark:text-blue-400">math</a>, science, coding, business, nursing, and writing.</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-600 dark:bg-blue-950/60 dark:text-blue-400">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    </span>
                                    <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300"><span class="font-bold text-slate-900 dark:text-white">Useful explanations:</span> Formulas, reasoning, citations, and working steps are included where required.</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-blue-100 text-blue-600 dark:bg-blue-950/60 dark:text-blue-400">
                                        <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    </span>
                                    <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300"><span class="font-bold text-slate-900 dark:text-white">A transparent timeline:</span> The scope and delivery window are confirmed before work begins.</p>
                                </div>
                            </div>

                            <div class="flex flex-col gap-3 sm:flex-row sm:gap-4">
                                <a href="{{ route('order') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-slate-900 px-7 py-4 font-black text-white transition-colors hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500">
                                    Get Homework Help
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </a>
                                <a href="#subjects" class="inline-flex items-center justify-center rounded-xl border border-slate-300 px-7 py-4 font-black text-slate-700 transition-colors hover:bg-slate-100 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-800">
                                    Explore Homework Subjects
                                </a>
                            </div>
                        </div>

                        <div>
                            <figure class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.45)] dark:border-slate-800 dark:bg-slate-900">
                                <img src="{{ asset('images/homework-help-tutoring.png') }}" alt="College student solving math homework during an online tutoring session" width="1536" height="1024" class="h-[300px] w-full object-cover object-center sm:h-[380px]" loading="lazy" decoding="async">
                                <div class="absolute left-4 top-4 inline-flex items-center gap-2 rounded-full border border-white/70 bg-white/90 px-3 py-1.5 shadow-sm backdrop-blur-sm">
                                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                                    <span class="text-[11px] font-extrabold uppercase tracking-[0.12em] text-slate-800">Student-first support</span>
                                </div>
                                <div class="pointer-events-none absolute inset-0 bg-gradient-to-br from-blue-500/10 via-transparent to-indigo-500/10"></div>
                                <figcaption class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-slate-950/90 via-slate-900/55 to-transparent p-6 pt-20 text-base font-bold leading-relaxed text-white">
                                    Clear solutions, helpful working steps, and dependable delivery for busy students.
                                </figcaption>
                            </figure>

                            <div class="mt-4 grid grid-cols-3 gap-2 sm:gap-3">
                                <div class="rounded-xl border border-slate-200 bg-white p-3 text-center sm:p-4 dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-lg font-black text-slate-900 sm:text-xl dark:text-white">24/7</p>
                                    <p class="text-[10px] uppercase tracking-wide text-slate-500 sm:text-xs">Support</p>
                                </div>
                                <div class="rounded-xl border border-slate-200 bg-white p-3 text-center sm:p-4 dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-lg font-black text-slate-900 sm:text-xl dark:text-white">50+</p>
                                    <p class="text-[10px] uppercase tracking-wide text-slate-500 sm:text-xs">Subjects</p>
                                </div>
                                <div class="rounded-xl border border-slate-200 bg-white p-3 text-center sm:p-4 dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-lg font-black text-slate-900 sm:text-xl dark:text-white">98%</p>
                                    <p class="text-[10px] uppercase tracking-wide text-slate-500 sm:text-xs">On-time</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-auto mt-6 grid max-w-6xl grid-cols-1 gap-4 md:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-1 text-sm font-black text-slate-900 dark:text-white">Step-by-Step Solutions</h3>
                        <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400">See the method behind the answer with organized calculations, reasoning, and notes.</p>
                    </article>
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-1 text-sm font-black text-slate-900 dark:text-white">Requirements Followed</h3>
                        <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400">Your rubric, course level, file format, and citation style guide every deliverable.</p>
                    </article>
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-1 text-sm font-black text-slate-900 dark:text-white">Private Collaboration</h3>
                        <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400">Share files and receive progress updates through a secure, confidential process.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="py-16 sm:py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="subjects">
            <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-40"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
                <div class="mx-auto max-w-3xl text-center mb-24">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/50 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200 dark:bg-blue-950/30 dark:text-blue-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                        Academic Scope
                    </div>
                    <h2 class="text-4xl sm:text-6xl font-black tracking-tight text-slate-900 mb-8 leading-tight dark:text-white">
                        Do My Homework: <br>
                        <span class="text-blue-600">Assistance for Any Subject</span>
                    </h2>
                    <p class="text-xl leading-relaxed text-slate-600 max-w-2xl mx-auto dark:text-slate-400">
                        We cover over 50 subject areas. Each task is routed to a specialized tutor holding advanced degrees in that specific academic field.
                    </p>
                </div>

                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    
                    <!-- Subject 1: Math -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-blue-500/5 group-hover:bg-blue-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">📐</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Math &amp; Stats</h3>
                                <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit dark:bg-emerald-950/30">
                                    <span class="w-1 h-1 rounded-full bg-emerald-500 animate-ping"></span>
                                    Solver Active
                                </div>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                            Get step-by-step math answers from basic algebra to advanced university-level calculus equations. If you are struggling with complex equations, try our dedicated <span class="text-blue-600 font-bold dark:text-blue-400">online math homework solver</span>.
                        </p>
                        <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all dark:bg-blue-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Calculus, Integrals &amp; Series
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all dark:bg-blue-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Algebra &amp; Vector Spaces
                            </li>
                        </ul>
                        <a href="{{ url('/homework-help/math') }}"
                            class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-blue-600 font-black rounded-2xl border-2 border-blue-50 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                            Math Solver Subpage
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </article>

                    <!-- Subject 2: Computer Science -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(16,185,129,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-emerald-500/5 group-hover:bg-emerald-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-emerald-600 text-white shadow-lg shadow-emerald-600/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">💻</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">CS &amp; Coding</h3>
                                <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-blue-50 text-[10px] font-black text-blue-600 uppercase tracking-widest w-fit dark:bg-blue-950/30">
                                    <span class="w-1 h-1 rounded-full bg-blue-500 animate-pulse"></span>
                                    Code Checked
                                </div>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                            Clean compilable code. We write files, configure databases, and build programs. Need language-specific help? Visit our dedicated Python, Java, or Web Development sections.
                        </p>
                        <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Python &amp; Java Programming
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Database Design &amp; SQL Queries
                            </li>
                        </ul>
                        <a href="{{ url('/programming-help') }}"
                            class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-emerald-600 font-black rounded-2xl border-2 border-emerald-50 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                            Explore Programming
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </article>

                    <!-- Subject 3: Physics -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(245,158,11,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-amber-500/5 group-hover:bg-amber-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-amber-500 text-white shadow-lg shadow-amber-500/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">🔬</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Sciences &amp; Labs</h3>
                                <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit dark:bg-emerald-950/30">
                                    <span class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></span>
                                    Lab Checked
                                </div>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                            Get accurate scientific calculations, formulas, and fully structured academic reports. If you need help with physics problems, try our dedicated <span class="text-amber-600 font-bold">physics lab report help</span> section.
                        </p>
                        <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all dark:bg-amber-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Physics &amp; Chemistry Labs
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all dark:bg-amber-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Error Analysis &amp; Data Fitting
                            </li>
                        </ul>
                        <a href="{{ url('/homework-help/physics') }}"
                            class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-amber-600 font-black rounded-2xl border-2 border-amber-50 hover:bg-amber-500 hover:text-white hover:border-amber-500 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                            Physics Lab Subpage
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </article>

                    <!-- Subject 4: Business & Finance -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(245,158,11,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-amber-500/5 group-hover:bg-amber-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-amber-500 text-white shadow-lg shadow-amber-500/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">📊</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Business &amp; Econ</h3>
                                <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit dark:bg-emerald-950/30">
                                    <span class="w-1 h-1 rounded-full bg-emerald-500 animate-pulse"></span>
                                    Analyst Vetted
                                </div>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                            Excel models, managerial accounting balance sheets, and economic analysis papers.
                        </p>
                        <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all dark:bg-amber-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Corporate Finance &amp; Valuation
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-amber-50 flex items-center justify-center text-amber-600 group-hover/item:bg-amber-600 group-hover/item:text-white transition-all dark:bg-amber-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Micro &amp; Macro Economics
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-amber-600 font-black rounded-2xl border-2 border-amber-50 hover:bg-amber-500 hover:text-white hover:border-amber-500 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                            Submit Business Task
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </article>

                    <!-- Subject 5: Essays & Nursing -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(37,99,235,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-blue-500/5 group-hover:bg-blue-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-blue-600 text-white shadow-lg shadow-blue-600/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">📝</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Humanities &amp; NCPs</h3>
                                <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-emerald-50 text-[10px] font-black text-emerald-600 uppercase tracking-widest w-fit dark:bg-emerald-950/30">
                                    <span class="w-1 h-1 rounded-full bg-emerald-500 animate-ping"></span>
                                    Writer Active
                                </div>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                            Research essays, literary reviews, and historical analysis formatted to your guidelines. Struggling with nursing tasks? Try our dedicated <span class="text-blue-600 font-bold dark:text-blue-400">nursing homework essay help</span>.
                        </p>
                        <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all dark:bg-blue-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Nursing Care Plans &amp; Health Policy
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 group-hover/item:bg-blue-600 group-hover/item:text-white transition-all dark:bg-blue-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Literature Reviews &amp; Case Analysis
                            </li>
                        </ul>
                        <a href="{{ url('/homework-help/nursing') }}"
                            class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-blue-600 font-black rounded-2xl border-2 border-blue-50 hover:bg-blue-600 hover:text-white hover:border-blue-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                            Nursing Essay Subpage
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </article>

                    <!-- Subject 6: Engineering -->
                    <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-10 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_40px_80px_-20px_rgba(16,185,129,0.15)] hover:-translate-y-2 border border-slate-100 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800/80">
                        <div class="absolute top-0 right-0 -mr-8 -mt-8 w-32 h-32 rounded-full bg-emerald-500/5 group-hover:bg-emerald-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                        <div class="flex items-center gap-5 mb-8 relative">
                            <div class="h-16 w-16 flex items-center justify-center rounded-2xl bg-emerald-600 text-white shadow-lg shadow-emerald-600/20 group-hover:scale-110 transition-transform duration-500">
                                <span class="text-3xl">⚙️</span>
                            </div>
                            <div>
                                <h3 class="text-xl font-black text-slate-900 tracking-tight dark:text-white">Engineering</h3>
                                <div class="mt-1 flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-blue-50 text-[10px] font-black text-blue-600 uppercase tracking-widest w-fit dark:bg-blue-950/30">
                                    <span class="w-1 h-1 rounded-full bg-blue-500 animate-pulse"></span>
                                    Engineer Active
                                </div>
                            </div>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-500 mb-8 font-medium dark:text-slate-500">
                            Technical mechanics problems, electrical circuit layouts, and MATLAB simulations.
                        </p>
                        <ul role="list" class="mb-10 space-y-4 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                Mechanical &amp; Civil Calculations
                            </li>
                            <li class="flex items-center gap-3 font-bold group/item">
                                <div class="w-5 h-5 rounded-md bg-emerald-50 flex items-center justify-center text-emerald-600 group-hover/item:bg-emerald-600 group-hover/item:text-white transition-all dark:bg-emerald-950/30">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                                </div>
                                MATLAB Modeling &amp; CAD Layouts
                            </li>
                        </ul>
                        <a href="{{ route('order') }}"
                            class="mt-auto inline-flex items-center justify-center gap-2 w-full py-4 bg-white text-emerald-600 font-black rounded-2xl border-2 border-emerald-50 hover:bg-emerald-600 hover:text-white hover:border-emerald-600 transition-all duration-500 shadow-sm text-xs uppercase tracking-widest dark:bg-slate-900">
                            Submit Engineering Task
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – WHAT WE DELIVER / E-E-A-T
             SEO: High EEAT block
        =================================================== --}}
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
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Homework Help Services</span>
                        </h2>
                        <p class="mt-4 text-base text-slate-400 max-w-2xl mx-auto">
                            We don't just provide flat answers. We write thorough, step-by-step educational explanations so you actually understand the concepts.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-10 items-start">
                        <div class="space-y-5 text-slate-400 text-[15px] leading-relaxed">
                            <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                                <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                    <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                                    Vetted Academic Experts
                                </h3>
                                <p>We verify all credentials. Every homework assistant holds a Bachelor's, Master's, or PhD degree from top US universities and passes strict subject knowledge tests before being hired.</p>
                            </div>
                            <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                                <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                    <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                                    Step-by-Step Educational Explanations
                                </h3>
                                <p>We break down each problem. Math solutions show formulas and steps; coding answers explain logic loops; essays include thesis mappings and references lists.</p>
                            </div>
                            <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                                <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                    <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                                    Plagiarism &amp; AI Free Reports
                                </h3>
                                <p>We maintain strict integrity. Every solution is checked against database systems to ensure originality. We include a Turnitin originality report with every order.</p>
                            </div>
                        </div>

                        <div class="space-y-5">
                            <div class="p-7 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10">
                                <h3 class="text-xl font-black text-white mb-6">Our Commitments to You</h3>
                                <ul class="space-y-4">
                                    <li class="flex items-start gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">✅</div>
                                        <div><p class="text-white font-bold text-sm">Perfect Accuracy Guarantee</p><p class="text-xs text-slate-500 mt-0.5">Every equation, code script, and essay is double checked for accuracy and standards compliance</p></div>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">⏱️</div>
                                        <div><p class="text-white font-bold text-sm">Strict Deadline Compliance</p><p class="text-xs text-slate-500 mt-0.5">We track our queue carefully. Your homework is delivered on or before your specified deadline</p></div>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔄</div>
                                        <div><p class="text-white font-bold text-sm">72-Hour Free Revisions</p><p class="text-xs text-slate-500 mt-0.5">Need minor changes, more explanations, or updated formats? We revise it for free within 72 hours</p></div>
                                    </li>
                                    <li class="flex items-start gap-3">
                                        <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔒</div>
                                        <div><p class="text-white font-bold text-sm">100% Secure &amp; Anonymous</p><p class="text-xs text-slate-500 mt-0.5">Your email, name, class parameters, and papers are encrypted and kept strictly confidential</p></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – REAL HOMEWORK RESCUE CASES
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="cases-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Rescue Portfolios</p>
                    <h2 id="cases-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Typical Homework Problems We Solve
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Here are typical homework struggles students face and how our experts resolve them.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white text-xl">📐</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Calculus &amp; Complex Math</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Stuck on limits, derivatives, integration parameters, or linear algebra proofs? We write clear derivations step-by-step.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Detailed formulas derivations</li>
                            <li>• Step-by-step calculation tables</li>
                            <li>• Scannable PDF equations sheets</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white text-xl">💻</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Programming Debugging</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Script failing compilation? We resolve python/java/C++ index errors, configure databases, and include run readmes.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Bug-free executable source files</li>
                            <li>• Clean comments explaining logic</li>
                            <li>• Step-by-step setup README guides</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-600 text-white text-xl">📝</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Research Papers &amp; Essays</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Need a literature review or research essay? We draft well-cited papers with APA/MLA references directories.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Vetted peer-reviewed citations</li>
                            <li>• Turnitin originality certificate</li>
                            <li>• Clear thesis layout mappings</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – STEPS TO GET HOMEWORK ASSISTANCE — STAGGERED WORKFLOW
        =================================================== --}}
        <section id="how-it-works" class="py-24 bg-gradient-to-br from-slate-800 via-indigo-950 to-slate-900 relative overflow-hidden">
            <!-- Modern Abstract Background -->
            <div class="absolute inset-0">
                <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/20 rounded-full blur-[100px] animate-pulse"></div>
                <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px] animate-pulse" style="animation-delay: 2s"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <!-- Section Header -->
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
                    <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                        We've streamlined academic assistance into a simple, collaborative journey.
                    </p>
                </div>

                <!-- Staggered Card Layout -->
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
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">Submit homework files, subject specifications, citation formats, and deadlines.</p>
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
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">A vetted academic tutor in your subject reviews the guidelines and provides a quote.</p>
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
                            <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Tutor Solves Task</h3>
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">The tutor writes out step-by-step calculations, codes scripts, or writes essays cleanly.</p>
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
                            <p class="text-sm leading-relaxed text-slate-400 relative z-10">Download the files, check step-by-step explanations, and ask questions if needed.</p>
                        </div>
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
                        Guaranteed Homework Success
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-900/40 dark:bg-blue-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">💡</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Original Work</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We do not recycle solutions. Every calculation, essay, and code script is drafted from scratch to fit your guidelines.</p>
                    </div>
                    <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-900/40 dark:bg-emerald-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-xl text-white">⏱️</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Deadline Compliance</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We prioritize on-time delivery. We guarantee your homework will be ready before the deadline or we offer a full refund.</p>
                    </div>
                    <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6 dark:border-purple-900/40 dark:bg-purple-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-xl text-white">🔄</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">72-Hour Free Revisions</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Want extra explanations, altered formulas formatting, or minor citation changes? We revise it for free within 72 hours.</p>
                    </div>
                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-900/40 dark:bg-amber-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-600 text-xl text-white">💰</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Refund Guarantee</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">If our solutions contain errors, fail validation checks, or miss critical specifications detailed in your guidelines, you are covered by our refund policy.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-slate-700 text-xl text-white">🔒</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Anonymous</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your privacy is protected. We encrypt all user databases. Your files are never shared or published.</p>
                    </div>
                    <div class="rounded-2xl border border-cyan-200 bg-cyan-50 p-6 dark:border-cyan-900/40 dark:bg-cyan-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-600 text-xl text-white">💬</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">24/7 Live Support</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our customer desk and live chat portals are active 24/7 to solve your queries and check order progress.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – STUDENT TESTIMONIALS
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="reviews-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">Student Reviews</p>
                    <h2 id="reviews-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        What US Students Say About Our Tutors
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">College Calculus</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"I was completely lost in my Integration &amp; Series homework. The tutor provided step-by-step calculus derivations that actually explained why we used u-substitution. Perfect help!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Ethan M.</p><p class="text-xs text-slate-500">Penn State</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Python OOP</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Had a programming homework task due requiring building class inheritances. The tutor delivered clean compiled code, added comments, and wrote a great README setup file."</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Sophia L.</p><p class="text-xs text-slate-500">UCLA</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Literature Review</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"I needed a 5-page literature review on nursing history in APA format. The paper was beautifully structured, referenced thoroughly, and passed Turnitin without any issues."</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Chloe K.</p><p class="text-xs text-slate-500">NYU</p></div>
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
                                Online Homework Help: Why It Matters
                            </h2>
                            <div class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <p>Let's be real: college life in the US is a massive balancing act. Between managing a full course load, working part-time to pay off tuition, and trying to maintain a social life, the hours in a day quickly slip away. The pressure peaks when you are hit with multiple homework assignments due in the same week.</p>
                                <p>That is where finding a reliable <strong class="text-slate-900 dark:text-white font-semibold">online homework helper</strong> comes in. Our service matches you with subject specialists who know your curriculum inside out. We do not just hand over the answers; we write detailed, step-by-step explanations so you can follow the logic, learn the concepts, and be fully prepared for your exams.</p>
                                <p>Whether you are trying to debug a complex python script, balance organic chemistry equations, draft a rhetorical analysis essay, or calculate statistics probability distributions, we provide the clean, plagiarism-free support you need to succeed.</p>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">🏫</span>
                                Vetted US Tutors and Academic Integrity
                            </h3>
                            <div class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <p>We understand that submitting someone else's work as your own violates academic integrity policies. That is why our materials are intended as educational references. Use our solutions to structure your own arguments, check your calculations, and master difficult formulas.</p>
                                <p>Every solution goes through strict quality control, including Turnitin scans and AI writing checks. This ensures you receive completely original, human-crafted references to guide your studies safely.</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">⭐</span>
                                Homework Subjects We Cover
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Algebra','Calculus','Statistics','Probability','Physics','Chemistry','Biology','Lab Reports','Python','Java','SQL Databases','Web Dev','Finance','Accounting','Economics','APA citation','MLA citation','Essay writing','Literature review','MATLAB'] as $tech)
                                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-bold text-slate-700 dark:bg-slate-800 dark:text-slate-300">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">📊</span>
                                Our Homework Track Record
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-blue-600 dark:text-blue-400">5,000+</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Tasks Completed</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-emerald-600 dark:text-emerald-400">98%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Satisfaction Rate</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-amber-600 dark:text-amber-400">4.9★</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-purple-600 dark:text-purple-400">100%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 9 – FAQ ACCORDION — ALPINE.JS PATTERN
        =================================================== --}}
        <section class="py-16 lg:py-24 bg-slate-50 relative overflow-hidden dark:bg-slate-950" id="faq">
            <!-- Background Accents -->
            <div class="absolute inset-0 opacity-40 pointer-events-none">
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-100 rounded-full blur-[120px] dark:bg-blue-900/10"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-purple-100 rounded-full blur-[120px] dark:bg-purple-900/10"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto text-center mb-12 lg:mb-16">
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blue-600/10 border border-blue-600/20 mb-8">
                        <span class="text-blue-600 text-[10px] font-black uppercase tracking-[0.2em] dark:text-blue-400">Clarifying Success</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-slate-900 mb-6 tracking-tight dark:text-white">
                        Frequently Asked <br>
                        <span class="text-blue-600 dark:text-blue-400">Questions.</span>
                    </h2>
                </div>

                <div class="max-w-4xl mx-auto space-y-4">
                    <!-- FAQ Item 1 -->
                    <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                        <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">Is online homework help safe and legal?</span>
                            <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                            <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">Yes. Getting academic guidance, explanations, and model solutions from qualified tutors is fully safe and permitted as an educational resource, similar to private tutoring.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                        <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">Will the solutions include step-by-step explanations?</span>
                            <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                            <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">Yes. Our tutors write comprehensive, step-by-step calculations, document code logic, list references databases, and outline essays paragraphs so you understand how the solution was achieved.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                        <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">Do you check assignments for plagiarism and AI?</span>
                            <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                            <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">Absolutely. We run all solutions through Turnitin and specialized AI detectors before delivery. We include a certified originality report with every final order.</p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div x-data="{ open: false }" class="group bg-white border border-slate-200 rounded-[2rem] overflow-hidden transition-all duration-500 hover:border-blue-300 hover:shadow-xl dark:bg-slate-900 dark:border-slate-800/80">
                        <button x-on:click="open = !open" class="w-full px-10 py-8 flex items-center justify-between text-left focus:outline-none">
                            <span class="text-xl font-bold text-slate-900 group-hover:text-blue-600 transition-colors dark:text-white">How fast can you do my homework?</span>
                            <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 transition-transform duration-500 dark:bg-slate-950" :class="open ? 'rotate-180 bg-blue-600 text-white' : ''">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                            </div>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" class="px-10 pb-8">
                            <p class="text-slate-600 leading-relaxed font-medium dark:text-slate-400">We accept urgent orders with delivery options starting from 3 to 12 hours for simple calculations, codes, or essays. Long-form reports or research take 24 to 72 hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 10 – FINAL CTA — FROM HOME PAGE
        =================================================== --}}
        <section class="py-24 relative overflow-hidden">
            <div class="absolute inset-0 bg-slate-900">
                <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-blue-600/10 rounded-full blur-[100px]"></div>
                <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-indigo-600/10 rounded-full blur-[120px]"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Homework Specialists Online Now</span>
                    </div>

                    <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                        Ready to Get Your<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Homework Solved Correctly?</span>
                    </h2>

                    <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                        Get clean, plagiarism-free, step-by-step solutions complete with calculations, formulas, or codes. Submit your details for a free quote within 5 minutes.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-[0_10px_30px_-10px_rgba(37,99,235,0.5)] hover:shadow-2xl hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                            <span class="relative z-10 text-sm">Get Homework Help</span>
                            <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                        <span class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.3em]">Free Quote &middot; No Obligation</span>
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
              "name": "Is online homework help safe and legal?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Getting academic guidance, explanations, and model solutions from qualified tutors is fully safe and permitted as an educational resource, similar to private tutoring."
              }
            },
            {
              "@@type": "Question",
              "name": "Will the solutions include step-by-step explanations?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Our tutors write comprehensive, step-by-step calculations, document code logic, list references databases, and outline essays paragraphs so you understand how the solution was achieved."
              }
            },
            {
              "@@type": "Question",
              "name": "Do you check assignments for plagiarism and AI?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Absolutely. We run all solutions through Turnitin and specialized AI detectors before delivery. We include a certified originality report with every final order."
              }
            },
            {
              "@@type": "Question",
              "name": "How fast can you do my homework?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "We accept urgent orders with delivery options starting from 3 to 12 hours for simple calculations, codes, or essays. Long-form reports or research take 24 to 72 hours."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Service",
          "name": "Homework Help USA",
          "description": "Professional homework help and online academic tutoring for US students. Expert tutors available 24/7 for math, science, programming, business, and humanities assignments.",
          "provider": {
            "@@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "serviceType": "Homework Help Service",
          "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "8",
            "highPrice": "300"
          }
        }
        </script>
    </div>
@endsection
