@extends('layouts.app')

@section('title', 'About AssignmentHelpUSA | Trusted Online Academic Support Services')
@section('description', 'Learn about AssignmentHelpUSA – a trusted online academic support platform connecting students with expert tutors for assignments, essays, research papers, dissertations, editing, and more. Serving students in the US and worldwide.')

@section('content')
    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-slate-900 text-white py-16 lg:py-24 dark:bg-slate-950">
        <!-- Background Blobs -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-20"></div>
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-full blur-[130px] animate-pulse-slow"></div>
            <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-gradient-to-tr from-cyan-500/10 to-blue-500/10 rounded-full blur-[110px] animate-pulse-slow"></div>
        </div>

        <div class="relative z-10 section-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Text Content (Column span 7) -->
                <div class="text-left lg:col-span-7 max-w-2xl">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-500/10 text-indigo-300 text-xs font-black uppercase tracking-wider mb-8 border border-indigo-500/20 shadow-sm shadow-indigo-500/5 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                        Trusted Academic Support Platform
                    </div>

                    <!-- Main Title -->
                    <h1 class="text-4xl sm:text-6xl font-black mb-8 leading-tight tracking-tight text-white animate-fade-in-up">
                        Your Trusted Partner for <br>
                        <span class="bg-gradient-to-r from-cyan-400 via-sky-300 to-indigo-300 bg-clip-text text-transparent">
                            Academic Success
                        </span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg sm:text-xl text-slate-300 mb-10 leading-relaxed font-medium">
                        At AssignmentHelpUSA, we believe every student deserves access to high-quality academic support that encourages learning, strengthens subject knowledge, and builds confidence. We connect students with experienced academic professionals who provide personalized guidance across a wide range of subjects and academic levels.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ route('order') }}"
                            class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-7 py-4 rounded-xl font-black transition-all duration-300 shadow-xl shadow-purple-650/20 hover:-translate-y-1 active:scale-95">
                            🚀 Get Help Today
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#our-services"
                            class="inline-flex items-center justify-center border-2 border-slate-700 hover:border-slate-500 hover:bg-slate-800/30 text-slate-300 hover:text-white px-7 py-4 rounded-xl font-black transition-all duration-300 active:scale-95">
                            📖 Explore Our Services
                        </a>
                    </div>
                </div>

                <!-- Hero Image (Column span 5) -->
                <div class="relative flex justify-center lg:justify-end lg:col-span-5">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-cyan-500/10 to-indigo-500/10 rounded-[2.8rem] blur-2xl opacity-30 pointer-events-none"></div>
                    <div class="relative w-full max-w-md lg:max-w-full rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.35)] dark:border-slate-800/80 dark:bg-slate-900">
                        <img src="{{ asset('images/ui/about_hero_illustration.png') }}"
                             alt="Academic Support - AssignmentHelpUSA"
                             class="w-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-purple-500/5 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mission / Vision / Values -->
    <section class="mmv-section relative overflow-hidden bg-slate-950 py-20 text-white" aria-labelledby="foundation-title">
        <!-- Animated ambient color, kept decorative and out of the reading order -->
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute inset-0 opacity-[0.16] [background-image:linear-gradient(rgba(148,163,184,.18)_1px,transparent_1px),linear-gradient(90deg,rgba(148,163,184,.18)_1px,transparent_1px)] [background-size:48px_48px] [mask-image:linear-gradient(to_bottom,black,transparent_88%)]"></div>
            <div class="mmv-orb mmv-orb--blue absolute -left-32 top-20 h-80 w-80 rounded-full bg-blue-500/25 blur-[100px]"></div>
            <div class="mmv-orb mmv-orb--violet absolute -right-20 -top-24 h-96 w-96 rounded-full bg-violet-500/20 blur-[110px]"></div>
            <div class="absolute left-1/2 top-0 h-px w-2/3 -translate-x-1/2 bg-gradient-to-r from-transparent via-cyan-300/60 to-transparent"></div>
        </div>

        <div class="section-container relative z-10">
            <div class="mb-12 grid items-end gap-7 lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <div class="mb-6 inline-flex items-center gap-2.5 rounded-full border border-cyan-300/20 bg-cyan-300/10 px-4 py-2 text-[10px] font-black uppercase tracking-[0.22em] text-cyan-200 backdrop-blur-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-cyan-300 opacity-70"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-cyan-300"></span>
                        </span>
                        What drives us
                    </div>
                    <h2 id="foundation-title" class="max-w-3xl text-4xl font-black leading-tight tracking-tight text-white sm:text-5xl">
                        Built on purpose.<br>
                        <span class="bg-gradient-to-r from-cyan-300 via-sky-300 to-violet-300 bg-clip-text text-transparent">Guided by student success.</span>
                    </h2>
                </div>
                <p class="max-w-lg border-l-2 border-violet-400/60 pl-5 font-medium leading-relaxed text-slate-300 lg:col-span-5 lg:justify-self-end">
                    More than words on a page—these principles shape how we support every learner, solve every challenge, and measure every outcome.
                </p>
            </div>

            <!-- Mission and vision form one connected story on larger screens -->
            <div class="relative mb-10 grid gap-5 lg:grid-cols-2">
                <div class="absolute left-1/2 top-1/2 z-20 hidden h-12 w-12 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full border-4 border-slate-950 bg-white text-slate-900 shadow-xl lg:flex" aria-hidden="true">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" /></svg>
                </div>

                <article class="mmv-feature-card group relative min-h-[290px] overflow-hidden rounded-[2rem] border border-blue-300/20 bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 p-8 shadow-[0_28px_80px_-28px_rgba(37,99,235,.75)] sm:p-10">
                    <div class="absolute -right-12 -top-14 h-52 w-52 rounded-full border-[38px] border-white/[0.06] transition-transform duration-700 group-hover:scale-110" aria-hidden="true"></div>
                    <span class="absolute bottom-2 right-7 select-none text-[7rem] font-black leading-none text-white/[0.05]" aria-hidden="true">01</span>
                    <div class="relative z-10 flex h-full flex-col">
                        <div class="mb-8 flex items-center justify-between">
                            <div class="mmv-icon flex h-14 w-14 items-center justify-center rounded-2xl border border-white/20 bg-white/15 shadow-lg backdrop-blur-sm">
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="7"/><circle cx="12" cy="12" r="3"/><path stroke-linecap="round" d="M12 2v3m0 14v3M2 12h3m14 0h3"/></svg>
                            </div>
                            <span class="rounded-full border border-white/20 px-3 py-1 text-[10px] font-black uppercase tracking-[0.2em] text-blue-100">Today</span>
                        </div>
                        <p class="mb-2 text-xs font-black uppercase tracking-[0.24em] text-cyan-200">Our mission</p>
                        <h3 class="mb-4 text-2xl font-black tracking-tight text-white sm:text-3xl">Make expert support feel within reach.</h3>
                        <p class="max-w-xl font-medium leading-relaxed text-blue-100">
                            We help students strengthen research, writing, critical thinking, and problem-solving skills through dependable, personalized academic guidance.
                        </p>
                    </div>
                </article>

                <article class="mmv-feature-card group relative min-h-[290px] overflow-hidden rounded-[2rem] border border-violet-300/20 bg-gradient-to-br from-violet-600 via-purple-700 to-fuchsia-800 p-8 shadow-[0_28px_80px_-28px_rgba(147,51,234,.7)] sm:p-10">
                    <div class="absolute -bottom-16 -left-14 h-56 w-56 rounded-full border-[42px] border-white/[0.05] transition-transform duration-700 group-hover:scale-110" aria-hidden="true"></div>
                    <span class="absolute bottom-2 right-7 select-none text-[7rem] font-black leading-none text-white/[0.05]" aria-hidden="true">02</span>
                    <div class="relative z-10 flex h-full flex-col">
                        <div class="mb-8 flex items-center justify-between">
                            <div class="mmv-icon flex h-14 w-14 items-center justify-center rounded-2xl border border-white/20 bg-white/15 shadow-lg backdrop-blur-sm">
                                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12s3.5-6 9.75-6 9.75 6 9.75 6-3.5 6-9.75 6-9.75-6-9.75-6Z"/><circle cx="12" cy="12" r="2.75"/><path stroke-linecap="round" d="m17.5 4.5 1-1m-13 1-1-1"/></svg>
                            </div>
                            <span class="rounded-full border border-white/20 px-3 py-1 text-[10px] font-black uppercase tracking-[0.2em] text-violet-100">Tomorrow</span>
                        </div>
                        <p class="mb-2 text-xs font-black uppercase tracking-[0.24em] text-fuchsia-200">Our vision</p>
                        <h3 class="mb-4 text-2xl font-black tracking-tight text-white sm:text-3xl">A world where every learner can thrive.</h3>
                        <p class="max-w-xl font-medium leading-relaxed text-violet-100">
                            We aim to be the world’s most trusted academic support platform—combining professional guidance, innovative learning tools, and resources that empower lifelong progress.
                        </p>
                    </div>
                </article>
            </div>

            <div class="mb-5 flex items-center gap-4">
                <p class="shrink-0 text-xs font-black uppercase tracking-[0.24em] text-slate-400">Values in action</p>
                <div class="h-px flex-1 bg-gradient-to-r from-slate-700 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach([
                    ['number' => '01', 'title' => 'Academic Excellence', 'desc' => 'High standards, thoughtful guidance, and work we are proud to stand behind.', 'icon' => 'star', 'cardClass' => 'hover:border-cyan-300/40', 'lineClass' => 'via-cyan-300/70', 'iconClass' => 'bg-cyan-400/10 text-cyan-300 ring-cyan-300/20', 'numberClass' => 'group-hover:text-cyan-300/70'],
                    ['number' => '02', 'title' => 'Integrity & Transparency', 'desc' => 'Clear communication and ethical support—from pricing through delivery.', 'icon' => 'shield', 'cardClass' => 'hover:border-blue-300/40', 'lineClass' => 'via-blue-300/70', 'iconClass' => 'bg-blue-400/10 text-blue-300 ring-blue-300/20', 'numberClass' => 'group-hover:text-blue-300/70'],
                    ['number' => '03', 'title' => 'Student-First Success', 'desc' => 'Every decision begins with better understanding and lasting student growth.', 'icon' => 'user', 'cardClass' => 'hover:border-violet-300/40', 'lineClass' => 'via-violet-300/70', 'iconClass' => 'bg-violet-400/10 text-violet-300 ring-violet-300/20', 'numberClass' => 'group-hover:text-violet-300/70'],
                    ['number' => '04', 'title' => 'Always Improving', 'desc' => 'We learn, adapt, and evolve alongside modern education and its standards.', 'icon' => 'spark', 'cardClass' => 'hover:border-fuchsia-300/40', 'lineClass' => 'via-fuchsia-300/70', 'iconClass' => 'bg-fuchsia-400/10 text-fuchsia-300 ring-fuchsia-300/20', 'numberClass' => 'group-hover:text-fuchsia-300/70'],
                ] as $v)
                <article class="mmv-value-card group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.06] p-6 backdrop-blur-md transition-all duration-500 hover:-translate-y-1 hover:bg-white/[0.1] {{ $v['cardClass'] }}">
                    <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-100 {{ $v['lineClass'] }}"></div>
                    <div class="mb-7 flex items-center justify-between">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl ring-1 ring-inset transition-transform duration-500 group-hover:scale-110 {{ $v['iconClass'] }}">
                            @if($v['icon'] === 'star')
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m12 3 2.6 5.27 5.82.85-4.21 4.1.99 5.8L12 16.28l-5.2 2.74.99-5.8-4.21-4.1 5.82-.85L12 3Z"/></svg>
                            @elseif($v['icon'] === 'shield')
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3 5 6v5c0 4.42 2.99 8.55 7 10 4.01-1.45 7-5.58 7-10V6l-7-3Z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 12 2 2 4-4"/></svg>
                            @elseif($v['icon'] === 'user')
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path stroke-linecap="round" d="M4.5 21a7.5 7.5 0 0 1 15 0"/></svg>
                            @else
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.9" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v3m0 12v3M3 12h3m12 0h3M5.64 5.64l2.12 2.12m8.48 8.48 2.12 2.12m0-12.72-2.12 2.12m-8.48 8.48-2.12 2.12"/><circle cx="12" cy="12" r="3.5"/></svg>
                            @endif
                        </div>
                        <span class="font-mono text-xs font-bold text-slate-600 transition-colors {{ $v['numberClass'] }}">{{ $v['number'] }}</span>
                    </div>
                    <h3 class="mb-3 text-lg font-black tracking-tight text-white">{{ $v['title'] }}</h3>
                    <p class="text-sm font-medium leading-relaxed text-slate-400">{{ $v['desc'] }}</p>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- What We Do / Services -->
    <section id="our-services" class="about-services py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950 border-y border-slate-100 dark:border-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-40 dark:opacity-10"></div>
        <div class="section-container relative z-10">
            <div class="about-section-heading text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 text-indigo-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-indigo-200 dark:bg-indigo-950/30 dark:text-indigo-400 dark:border-indigo-900/50">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-600 animate-pulse"></span>
                    Academic Support Services
                </div>
                <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 dark:text-white mb-4 leading-tight">
                    Online Academic Support Services We Provide
                </h2>
                <p class="text-slate-500 dark:text-slate-400 max-w-2xl mx-auto font-medium leading-relaxed">
                    AssignmentHelpUSA provides comprehensive academic support designed to help students succeed. Our expert-led services complement classroom learning and cover every stage of the academic writing and research process.
                </p>
                <div class="h-1.5 w-16 bg-indigo-600 rounded-full mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">
                @foreach([
                    ['icon' => '📝', 'title' => 'Assignment Guidance', 'color' => 'from-blue-500 to-indigo-600', 'shadow' => 'shadow-blue-500/25'],
                    ['icon' => '📚', 'title' => 'Homework Help', 'color' => 'from-emerald-500 to-teal-600', 'shadow' => 'shadow-emerald-500/25'],
                    ['icon' => '✍️', 'title' => 'Essay Writing Guidance', 'color' => 'from-purple-500 to-violet-600', 'shadow' => 'shadow-purple-500/25'],
                    ['icon' => '🔬', 'title' => 'Research Paper Assistance', 'color' => 'from-sky-400 to-blue-600', 'shadow' => 'shadow-sky-500/25'],
                    ['icon' => '🎓', 'title' => 'Dissertation & Thesis Support', 'color' => 'from-rose-500 to-pink-600', 'shadow' => 'shadow-rose-500/25'],
                    ['icon' => '📖', 'title' => 'Coursework Assistance', 'color' => 'from-amber-500 to-orange-600', 'shadow' => 'shadow-amber-500/25'],
                    ['icon' => '🗂️', 'title' => 'Case Study Guidance', 'color' => 'from-cyan-500 to-blue-600', 'shadow' => 'shadow-cyan-500/25'],
                    ['icon' => '🔍', 'title' => 'Editing & Proofreading', 'color' => 'from-teal-500 to-emerald-600', 'shadow' => 'shadow-teal-500/25'],
                    ['icon' => '📌', 'title' => 'Referencing & Citation Help', 'color' => 'from-indigo-500 to-purple-600', 'shadow' => 'shadow-indigo-500/25'],
                    ['icon' => '📊', 'title' => 'Research Methodology Guidance', 'color' => 'from-violet-500 to-indigo-600', 'shadow' => 'shadow-violet-500/25'],
                    ['icon' => '🖥️', 'title' => 'Presentation Support', 'color' => 'from-orange-500 to-red-600', 'shadow' => 'shadow-orange-500/25'],
                    ['icon' => '🧑', 'title' => 'Online Academic Tutoring', 'color' => 'from-green-500 to-teal-600', 'shadow' => 'shadow-green-500/25'],
                ] as $s)
                <div class="about-service-card group bg-white dark:bg-slate-900 rounded-[1.75rem] p-6 border border-slate-100 dark:border-slate-800 hover:shadow-[0_30px_60px_-15px_rgba(99,102,241,0.15)] hover:-translate-y-1.5 transition-all duration-500 flex items-center gap-4">
                    <div class="h-12 w-12 shrink-0 flex items-center justify-center rounded-xl bg-gradient-to-br {{ $s['color'] }} text-xl shadow-lg {{ $s['shadow'] }} group-hover:scale-110 transition-transform duration-500">
                        {{ $s['icon'] }}
                    </div>
                    <h3 class="text-sm font-black text-slate-900 dark:text-white leading-snug">{{ $s['title'] }}</h3>
                </div>
                @endforeach
            </div>

            <p class="text-center text-slate-500 dark:text-slate-400 text-sm font-medium mt-10 max-w-xl mx-auto">
                Every academic support request is handled with attention to academic standards, subject-specific requirements, and individual student learning objectives.
            </p>
        </div>
    </section>

    <!-- Academic Integrity -->
    <section class="about-integrity py-20 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-emerald-200 dark:bg-emerald-950/30 dark:text-emerald-400 dark:border-emerald-900/50">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span>
                        Academic Integrity
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-6 leading-tight tracking-tight">
                        Our Commitment to <span class="bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">Responsible Academic Learning</span>
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-4 leading-relaxed font-medium">
                        AssignmentHelpUSA is committed to promoting responsible learning and genuine academic development. Our academic support services are designed as educational tools to help students grow, not shortcuts. We encourage all students to use our guidance responsibly in accordance with their institution's academic policies.
                    </p>
                    <p class="text-slate-500 dark:text-slate-400 text-sm mb-6 font-medium">Our services are designed to help students:</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach([
                            'Understand complex academic concepts',
                            'Improve academic essay writing',
                            'Strengthen independent research skills',
                            'Learn proper referencing & citation',
                            'Develop stronger critical thinking',
                            'Enhance subject knowledge & grades',
                        ] as $item)
                        <div class="flex items-center gap-3 group">
                            <div class="w-7 h-7 rounded-lg bg-emerald-50 dark:bg-emerald-950/40 flex items-center justify-center text-emerald-600 shrink-0 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300 shadow-sm">
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-sm text-slate-800 dark:text-slate-300 font-bold">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-emerald-500 to-teal-500 rounded-[2.8rem] blur-3xl opacity-10 pointer-events-none"></div>
                    <div class="integrity-card relative bg-gradient-to-br from-slate-900 to-slate-800 dark:from-slate-800 dark:to-slate-900 rounded-[2rem] p-8 md:p-10 text-white border border-slate-700/50 shadow-2xl">
                        <div class="text-5xl mb-6">🛡️</div>
                        <h3 class="text-xl font-black mb-4">Why Academic Integrity Matters</h3>
                        <p class="text-slate-300 text-sm leading-relaxed mb-6 font-medium">
                            We understand the pressures students face. Our platform exists not to replace learning, but to support it, providing expert models, structured guidance, and proven frameworks that help students build genuine, lasting academic skills.
                        </p>
                        <div class="space-y-3">
                            @foreach(['Secure & confidential platform', 'Ethical academic guidance only', 'Student learning-first approach', 'Globally compliant support service'] as $badge)
                            <div class="flex items-center gap-3 bg-white/5 rounded-xl px-4 py-3 border border-white/10">
                                <span class="text-emerald-400 text-sm font-bold">✓</span>
                                <span class="text-sm text-slate-300 font-semibold">{{ $badge }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quality Assurance Process -->
    <section class="about-quality py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950 border-y border-slate-100 dark:border-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1.5px,transparent_1.5px)] [background-size:32px_32px] opacity-40 dark:opacity-10"></div>
        <div class="section-container relative z-10">
            <div class="about-section-heading text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-violet-100 text-violet-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-violet-200 dark:bg-violet-950/30 dark:text-violet-400 dark:border-violet-900/50">
                    <span class="w-1.5 h-1.5 rounded-full bg-violet-600 animate-pulse"></span>
                    Quality Assurance Process
                </div>
                <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 dark:text-white mb-4 leading-tight">
                    How We Ensure Academic Quality
                </h2>
                <p class="text-slate-500 dark:text-slate-400 max-w-xl mx-auto font-medium">
                    Maintaining consistent, high-quality academic support is central to everything we do. Every student project follows our structured five-step review process.
                </p>
                <div class="h-1.5 w-16 bg-violet-600 rounded-full mx-auto mt-6"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
                @foreach([
                    ['num' => '01', 'icon' => '👤', 'color' => 'from-blue-500 to-indigo-600', 'shadow' => 'shadow-blue-500/25', 'title' => 'Expert Allocation', 'desc' => 'Each student request is matched with a subject specialist with verified academic expertise in your specific discipline.'],
                    ['num' => '02', 'icon' => '🔎', 'color' => 'from-purple-500 to-violet-600', 'shadow' => 'shadow-purple-500/25', 'title' => 'Research & Analysis', 'desc' => 'Our professionals carefully review all assignment requirements and supporting materials before providing guidance.'],
                    ['num' => '03', 'icon' => '📐', 'color' => 'from-emerald-500 to-teal-600', 'shadow' => 'shadow-emerald-500/25', 'title' => 'Academic Review', 'desc' => 'Content is evaluated for clarity, academic coherence, and subject accuracy against required academic standards.'],
                    ['num' => '04', 'icon' => '✏', 'color' => 'from-sky-400 to-blue-600', 'shadow' => 'shadow-sky-500/25', 'title' => 'Editing & Proofreading', 'desc' => 'Grammar, spelling, academic formatting, and referencing are carefully reviewed and refined for overall quality.'],
                    ['num' => '05', 'icon' => '✅', 'color' => 'from-amber-500 to-orange-600', 'shadow' => 'shadow-amber-500/25', 'title' => 'Final Quality Check', 'desc' => 'Before delivery, every project undergoes a final review to ensure it fully meets our rigorous academic quality standards.'],
                ] as $step)
                <div class="quality-step group flex flex-col items-center text-center">
                    <div class="relative mb-6">
                        <div class="h-20 w-20 flex items-center justify-center rounded-2xl bg-gradient-to-br {{ $step['color'] }} text-3xl shadow-xl {{ $step['shadow'] }} group-hover:scale-110 transition-transform duration-500">
                            {{ $step['icon'] }}
                        </div>
                        <div class="absolute -top-2 -right-2 h-6 w-6 bg-white dark:bg-slate-950 rounded-full flex items-center justify-center text-xs font-black text-slate-700 dark:text-white border-2 border-slate-200 dark:border-slate-700 shadow-sm">
                            {{ $step['num'] }}
                        </div>
                    </div>
                    <h3 class="text-base font-black text-slate-900 dark:text-white mb-2 tracking-tight">{{ $step['title'] }}</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-medium">{{ $step['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Our Approach Works -->
    <section class="about-approach py-20 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="section-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Visual Left -->
                <div class="relative order-2 lg:order-1">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-[2.8rem] blur-3xl opacity-10 pointer-events-none"></div>
                    <div class="approach-panel relative bg-slate-50 dark:bg-slate-950 rounded-[2rem] p-8 border border-slate-100 dark:border-slate-800 shadow-sm">
                        <div class="text-center mb-8">
                            <div class="text-5xl mb-3">🎯</div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white">Personalized, Not Generic Support</h3>
                            <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 font-medium">
                                Tailored academic guidance designed around each student's unique learning goals.
                            </p>
                        </div>
                        <div class="space-y-3">
                            @foreach([
                                ['icon' => '👁', 'label' => 'Individual Student Attention'],
                                ['icon' => '🧠', 'label' => 'Subject-Specific Expertise'],
                                ['icon' => '📋', 'label' => 'Practical Academic Guidance'],
                                ['icon' => '💬', 'label' => 'Constructive Feedback & Revision'],
                                ['icon' => '📈', 'label' => 'Improved Independent Research Skills'],
                                ['icon' => '✍', 'label' => 'Better Academic Essay Writing'],
                                ['icon' => '💪', 'label' => 'Stronger Confidence in Learning'],
                            ] as $b)
                            <div class="approach-benefit flex items-center gap-3 bg-white dark:bg-slate-900 rounded-xl px-5 py-3 border border-slate-100 dark:border-slate-800 shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
                                <span class="text-lg">{{ $b['icon'] }}</span>
                                <span class="text-sm font-bold text-slate-800 dark:text-slate-200">{{ $b['label'] }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Text Right -->
                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 dark:border-blue-800/50">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                        Our Approach
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black text-slate-900 dark:text-white mb-6 leading-tight tracking-tight">
                        Why Our Academic Support Approach <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Works</span>
                    </h2>
                    <div class="space-y-5 text-slate-600 dark:text-slate-400 font-medium leading-relaxed">
                        <p>
                            Rather than providing one-size-fits-all solutions, AssignmentHelpUSA focuses on <strong class="text-slate-900 dark:text-white">personalized academic support</strong> tailored to each student's unique learning needs, course requirements, and academic level, from high school to postgraduate study.
                        </p>
                        <p>
                            Our objective is to support <strong class="text-slate-900 dark:text-white">long-term educational development</strong> rather than simply helping students complete individual tasks. We invest in understanding your subject area, your institution's expectations, and your individual learning style.
                        </p>
                        <p>
                            Every piece of academic guidance we deliver is designed not just to solve an immediate problem, but to <strong class="text-slate-900 dark:text-white">build the knowledge, skills, and academic confidence</strong> you need for lasting success in your studies and career.
                        </p>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('how-it-works') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-7 py-3.5 rounded-xl font-bold transition-all shadow-lg hover:shadow-xl hover:-translate-y-0.5 active:scale-95">
                            See How It Works
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="about-stats py-20 bg-slate-900 text-white relative overflow-hidden dark:bg-slate-950">
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-40 h-40 bg-gradient-to-br from-indigo-500/15 to-cyan-500/15 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-20 w-60 h-60 bg-gradient-to-br from-purple-500/15 to-pink-500/15 rounded-full blur-3xl animate-pulse-slow"></div>
        </div>
        <div class="section-container relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-5xl font-black mb-4 tracking-tight">Our Academic Support Track Record</h2>
                <p class="text-lg text-slate-300 font-medium">Trusted by students across the United States and internationally</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                @foreach([
                    ['icon' => '📚', 'color' => 'from-blue-500 to-indigo-600', 'shadow' => 'shadow-blue-600/20', 'num' => '5,000+', 'label' => 'Assignments Completed', 'anim' => 'animate-float'],
                    ['icon' => '🎓', 'color' => 'from-green-500 to-teal-600', 'shadow' => 'shadow-green-600/20', 'num' => '2,500+', 'label' => 'Students Supported', 'anim' => 'animate-float-delayed'],
                    ['icon' => '⭐', 'color' => 'from-purple-500 to-indigo-600', 'shadow' => 'shadow-indigo-600/20', 'num' => '98.5%', 'label' => 'Student Satisfaction Rate', 'anim' => 'animate-float'],
                    ['icon' => '🌍', 'color' => 'from-orange-500 to-red-600', 'shadow' => 'shadow-red-600/20', 'num' => '100+', 'label' => 'Subjects & Disciplines', 'anim' => 'animate-float-delayed'],
                ] as $stat)
                <div class="stat-card text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br {{ $stat['color'] }} rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-500 shadow-lg {{ $stat['shadow'] }} {{ $stat['anim'] }}">
                        <span class="text-2xl">{{ $stat['icon'] }}</span>
                    </div>
                    <div class="text-4xl sm:text-5xl font-black mb-3 text-white tracking-tight">{{ $stat['num'] }}</div>
                    <div class="text-sm text-slate-300 font-medium">{{ $stat['label'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="about-faq py-20 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="section-container">
            <div class="about-section-heading text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 dark:border-blue-800/50">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                    Frequently Asked Questions
                </div>
                <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 dark:text-white mb-4 leading-tight">
                    Questions About AssignmentHelpUSA?
                </h2>
                <p class="text-slate-500 dark:text-slate-400 max-w-xl mx-auto font-medium">
                    Find answers to the most common questions students ask about our online academic support services.
                </p>
                <div class="h-1.5 w-16 bg-blue-600 rounded-full mx-auto mt-6"></div>
            </div>

            <div class="max-w-3xl mx-auto space-y-4">
                @foreach([
                    ['q' => 'What is AssignmentHelpUSA and what do you do?', 'a' => 'AssignmentHelpUSA is a trusted online academic support platform that connects students with experienced subject matter experts who provide personalized educational guidance. We help students improve their understanding, research skills, and academic writing across more than 100 disciplines.'],
                    ['q' => 'Which students does AssignmentHelpUSA support?', 'a' => 'We support students at all academic levels including high school, undergraduate, postgraduate, and doctoral students studying in the United States and internationally. Our services are available to any student seeking quality academic guidance.'],
                    ['q' => 'Which academic subjects and disciplines do you cover?', 'a' => 'Our academic support covers more than 100 subjects and disciplines, including business management, engineering, nursing, law, computer science, healthcare, mathematics, social sciences, humanities, and many more. Contact us if your subject is not listed and we will match you with a relevant expert.'],
                    ['q' => 'How does AssignmentHelpUSA maintain academic quality standards?', 'a' => 'Every student request is carefully matched with a qualified subject specialist. All work passes through our structured five-step quality assurance process including expert allocation, research and analysis, academic review, editing and proofreading, and a final quality check before delivery.'],
                    ['q' => 'Is my personal information and data kept confidential?', 'a' => 'Yes, absolutely. Student privacy and data security are our top priority. All personal information is protected through secure encrypted systems and strict confidentiality policies. We never share your personal data or order details with any third parties.'],
                ] as $i => $faq)
                <div
                    x-data="{ open: false }"
                    class="faq-card border border-slate-100 dark:border-slate-800 rounded-2xl overflow-hidden transition-all duration-300"
                    :class="open ? 'bg-white dark:bg-slate-900 shadow-md' : 'bg-slate-50 dark:bg-slate-950'"
                >
                    <button
                        @click="open = !open"
                        class="w-full flex items-center justify-between gap-4 px-7 py-5 text-left group"
                        :aria-expanded="open"
                        id="faq-btn-{{ $i }}"
                    >
                        <span class="font-black text-slate-900 dark:text-white text-base leading-snug group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            {{ $faq['q'] }}
                        </span>
                        <div class="w-8 h-8 shrink-0 flex items-center justify-center rounded-full border transition-all duration-300"
                            :class="open ? 'bg-blue-600 border-blue-600 text-white rotate-180' : 'bg-blue-50 dark:bg-blue-950/50 border-blue-100 dark:border-blue-900/50 text-blue-600 dark:text-blue-400'">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </div>
                    </button>
                    <div
                        x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="px-7 pb-6"
                        id="faq-panel-{{ $i }}"
                    >
                        <div class="h-px bg-slate-100 dark:bg-slate-800 mb-5"></div>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed font-medium">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="about-cta py-20 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10 z-0"></div>
        <div class="absolute top-0 left-0 w-64 h-64 bg-white/5 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-white/5 rounded-full blur-3xl translate-x-1/2 translate-y-1/2 pointer-events-none"></div>

        <div class="about-cta-panel max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-white/10 text-white text-xs font-black uppercase tracking-wider mb-8 border border-white/20">
                <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
                Start Your Academic Journey Today
            </div>
            <h2 class="text-3xl sm:text-5xl font-black mb-6 leading-tight tracking-tight">
                Ready to Achieve Your Academic Goals?
            </h2>
            <p class="text-lg text-white/90 mb-4 leading-relaxed max-w-2xl mx-auto font-medium">
                Whether you need assignment guidance, homework support, research assistance, essay editing, proofreading, or subject-specific online tutoring, AssignmentHelpUSA is committed to helping you succeed through reliable, personalized, and professional academic support.
            </p>
            <p class="text-white/80 text-base font-semibold mb-10">
                Get started today and experience academic guidance designed around your individual learning goals.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('order') }}"
                    class="group inline-flex items-center justify-center bg-white text-indigo-600 hover:bg-slate-50 px-8 py-4 rounded-xl font-black transition-all shadow-xl hover:-translate-y-1 active:scale-95">
                    🚀 Get Started Now
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('how-it-works') }}"
                    class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white/10 px-8 py-4 rounded-xl font-black transition-all active:scale-95">
                    How It Works
                </a>
            </div>
        </div>
    </section>

    <style>
        @keyframes float          { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
        @keyframes float-delayed  { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
        @keyframes pulse-slow     { 0%, 100% { opacity: 0.3; transform: scale(1); } 50% { opacity: 0.6; transform: scale(1.05); } }
        @keyframes fade-in-up     { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-float          { animation: float 4s ease-in-out infinite; }
        .animate-float-delayed  { animation: float-delayed 4s ease-in-out infinite 2s; }
        .animate-pulse-slow     { animation: pulse-slow 6s ease-in-out infinite; }
        .animate-fade-in-up     { animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
    </style>

@endsection
