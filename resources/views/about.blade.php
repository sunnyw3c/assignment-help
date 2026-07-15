@extends('layouts.app')

@section('title', 'About Us - Assignment Help USA | Leading US Academic Support')
@section('description', 'Meet the team behind Assignment Help USA. We connect US college students with native-English PhD & Master\'s experts for plagiarism-free, custom assignment help aligned with Ivy League and State University grading rubrics.')

@section('content')
    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-slate-900 text-white py-16 lg:py-24 dark:bg-slate-950">
        <!-- Interactive Gradient Background Blobs -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:24px_24px] opacity-20"></div>
            <!-- Glowing Purple/Indigo Blob -->
            <div class="absolute -top-40 -right-40 w-[600px] h-[600px] bg-gradient-to-br from-indigo-500/20 to-purple-500/20 rounded-full blur-[130px] animate-pulse-slow"></div>
            <!-- Glowing Blue/Cyan Blob -->
            <div class="absolute -bottom-20 -left-20 w-[500px] h-[500px] bg-gradient-to-tr from-cyan-500/10 to-blue-500/10 rounded-full blur-[110px] animate-pulse-slow"></div>
        </div>

        <div class="relative z-10 section-container">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Text Content (Column span 7) -->
                <div class="text-left lg:col-span-7 max-w-2xl">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-indigo-500/10 text-indigo-300 text-xs font-black uppercase tracking-wider mb-8 border border-indigo-500/20 shadow-sm shadow-indigo-500/5 animate-fade-in-up">
                        <span class="w-2 h-2 rounded-full bg-indigo-450 bg-indigo-400 animate-pulse"></span>
                        USA Academic Support Pioneers
                    </div>

                    <!-- Main Title with multi-color gradient and heavy weight -->
                    <h1 class="text-4xl sm:text-6xl font-black mb-8 leading-tight tracking-tight text-white animate-fade-in-up">
                        Your Trusted Partner for <br>
                        <span class="bg-gradient-to-r from-cyan-450 from-cyan-400 via-sky-300 to-indigo-300 bg-clip-text text-transparent">
                            Academic Success
                        </span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="text-lg sm:text-xl text-slate-300 mb-10 leading-relaxed font-medium">
                        Empowering college and university students across the United States. We connect you with elite, US-based subject matter experts to tackle high-stakes assignments, essays, and complex homework.
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
                        <a href="#our-story"
                            class="inline-flex items-center justify-center border-2 border-slate-700 hover:border-slate-500 hover:bg-slate-800/30 text-slate-300 hover:text-white px-7 py-4 rounded-xl font-black transition-all duration-300 active:scale-95">
                            📖 Learn Our Story
                        </a>
                    </div>
                </div>

                <!-- Hero Image (Column span 5) -->
                <div class="relative flex justify-center lg:justify-end lg:col-span-5">
                    <div class="absolute -inset-4 bg-gradient-to-tr from-cyan-500/10 to-indigo-500/10 rounded-[2.8rem] blur-2xl opacity-30 pointer-events-none"></div>
                    <div class="relative w-full max-w-md lg:max-w-full rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.35)] dark:border-slate-800/80 dark:bg-slate-900">
                        <img src="{{ asset('images/ui/about_hero_illustration.png') }}" 
                             alt="Academic Success - Assignment Help USA" 
                             class="w-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-purple-500/5 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Our Story Section -->
    <section id="our-story" class="py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950 border-b border-slate-100 dark:border-slate-900">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-40"></div>
        <div class="section-container relative z-10">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 dark:border-blue-800/50">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                    Our Roots
                </div>
                <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-slate-900 mb-6 dark:text-white leading-tight">
                    Supporting American Students Since <span class="bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">2020</span>
                </h2>
                <div class="h-1.5 w-16 bg-blue-600 rounded-full mx-auto"></div>
            </div>

            <!-- Glassmorphic Large Card -->
            <div class="bg-white rounded-[2.5rem] p-8 md:p-14 border border-slate-100 dark:bg-slate-900 dark:border-slate-800 max-w-4xl mx-auto shadow-sm">
                <p class="text-lg text-slate-750 leading-relaxed mb-8 dark:text-slate-300 font-medium">
                    <strong>Assignment Help USA</strong> was established to address a critical challenge faced by higher education students across the country: the intense pressure of tight deadlines, complex curricula, and the lack of high-quality, personalized academic mentorship.
                </p>
                <p class="text-base text-slate-605 text-slate-600 leading-relaxed mb-8 dark:text-slate-400 font-medium font-normal">
                    We recognized that student tutoring services often fall short when it comes to guiding students through advanced research papers, sophisticated programming tasks, and complex analytical problems. Our platform bridges this gap by connecting students directly with verified academic experts who hold degrees from prestigious US institutions.
                </p>
                <p class="text-base text-slate-600 leading-relaxed dark:text-slate-400 font-medium font-normal">
                    Over the years, we have grown from a small group of university graduates into a nationwide network of PhD and Master's tutors covering over 100 academic disciplines. Today, we are proud to be the premier destination for students seeking to improve their grades, master difficult topics, and meet their deadlines with confidence.
                </p>
            </div>
        </div>
    </section>

    <!-- Meet Our Tutors Section -->
    <section class="py-20 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="section-container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <!-- Image Left (Column span 5) -->
                <div class="order-2 lg:order-1 lg:col-span-5 relative flex justify-center lg:justify-start">
                    <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-[2.8rem] blur-3xl opacity-10 pointer-events-none"></div>
                    <div class="relative w-full max-w-md lg:max-w-full rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.35)] dark:border-slate-800/80 dark:bg-slate-900">
                        <img src="{{ asset('images/ui/about_team_experts.png') }}" 
                             alt="Academic Experts Tutors - Assignment Help USA" 
                             class="w-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-purple-500/5 pointer-events-none"></div>
                    </div>
                </div>

                <!-- Text Right (Column span 7) -->
                <div class="order-1 lg:order-2 lg:col-span-7 text-left max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-emerald-200 dark:bg-emerald-950/30 dark:text-emerald-400 dark:border-emerald-900/50">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-600 animate-pulse"></span>
                        Elite Team
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black text-slate-900 mb-6 dark:text-white leading-tight">
                        Writers & Tutors with Ivy League and State University Degrees
                    </h2>
                    <p class="text-slate-600 dark:text-slate-400 mb-8 leading-relaxed font-medium">
                        We maintain an extremely rigorous vetting process, hiring only the top 3% of applicants. Our team is composed exclusively of native English-speaking experts based in the United States, holding Master's and PhD degrees in fields ranging from Computer Science and Nursing to Law and Business Administration.
                    </p>
                    
                    <!-- Bullet list using home page styling (with card icons) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-10">
                        <div class="flex items-center gap-3 font-bold group">
                            <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 dark:bg-blue-950/40 shrink-0 shadow-sm">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-sm text-slate-800 dark:text-slate-300 font-extrabold">Verified US Degrees</span>
                        </div>
                        <div class="flex items-center gap-3 font-bold group">
                            <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 dark:bg-blue-950/40 shrink-0 shadow-sm">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-sm text-slate-800 dark:text-slate-300 font-extrabold">Strict Grading Rubrics</span>
                        </div>
                        <div class="flex items-center gap-3 font-bold group">
                            <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 dark:bg-blue-950/40 shrink-0 shadow-sm">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-sm text-slate-800 dark:text-slate-300 font-extrabold">Native English Speakers</span>
                        </div>
                        <div class="flex items-center gap-3 font-bold group">
                            <div class="w-8 h-8 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300 dark:bg-blue-950/40 shrink-0 shadow-sm">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-sm text-slate-800 dark:text-slate-300 font-extrabold">Continuous Quality Auditing</span>
                        </div>
                    </div>
                    
                    <a href="{{ route('experts') }}" class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 hover:from-purple-700 hover:to-blue-700 text-white px-7 py-3.5 rounded-xl font-bold transition-all shadow-lg hover:shadow-xl active:scale-95">
                        Meet Our Experts
                        <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Standards Section -->
    <section class="py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950 border-b border-slate-100 dark:border-slate-900">
        <!-- Dot Pattern Background -->
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1.5px,transparent_1.5px)] [background-size:32px_32px] opacity-40"></div>
        
        <div class="section-container relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                <!-- Text Left (Column span 7) -->
                <div class="text-left lg:col-span-7 max-w-2xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-violet-100 text-violet-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-violet-200 dark:bg-violet-950/30 dark:text-violet-400">
                        <span class="w-1.5 h-1.5 rounded-full bg-violet-600 animate-pulse"></span>
                        US University Rubrics
                    </div>
                    <h2 class="text-3xl sm:text-5xl font-black text-slate-900 mb-6 dark:text-white leading-tight">
                        Adherence to Strict US Formatting & Quality Standards
                    </h2>
                    <p class="text-slate-650 text-slate-600 dark:text-slate-400 mb-10 leading-relaxed font-medium">
                        US universities maintain some of the strictest academic formatting and integrity standards in the world. We ensure that every document we produce matches your professor's expectations perfectly, from citation layout to argumentative depth.
                    </p>
                    
                    <!-- 2x2 Grid of standard cards styled matching home page cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Card 1 -->
                        <div class="group relative flex flex-col bg-white rounded-[2rem] p-8 border border-slate-100/80 shadow-sm hover:shadow-[0_30px_60px_-15px_rgba(139,92,246,0.12)] hover:-translate-y-1.5 transition-all duration-500 dark:bg-slate-900 dark:border-slate-800/60 overflow-hidden">
                            <!-- Background gradient glow decoration -->
                            <div class="absolute top-0 right-0 -mr-6 -mt-6 w-24 h-24 rounded-full bg-violet-500/5 group-hover:bg-violet-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                            
                            <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-gradient-to-br from-violet-500 to-indigo-600 text-white shadow-lg shadow-violet-500/25 group-hover:scale-110 transition-transform duration-500 mb-6">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base mb-2 tracking-tight">Citation Manuals</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-medium">APA 7th, MLA 9th, Harvard, Chicago, Turabian, and IEEE formatting.</p>
                        </div>
                        
                        <!-- Card 2 -->
                        <div class="group relative flex flex-col bg-white rounded-[2rem] p-8 border border-slate-100/80 shadow-sm hover:shadow-[0_30px_60px_-15px_rgba(16,185,129,0.12)] hover:-translate-y-1.5 transition-all duration-500 dark:bg-slate-900 dark:border-slate-800/60 overflow-hidden">
                            <div class="absolute top-0 right-0 -mr-6 -mt-6 w-24 h-24 rounded-full bg-emerald-500/5 group-hover:bg-emerald-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                            
                            <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white shadow-lg shadow-emerald-500/25 group-hover:scale-110 transition-transform duration-500 mb-6">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base mb-2 tracking-tight">Turnitin Checked</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-medium">Every single project includes a free, comprehensive plagiarism report.</p>
                        </div>
                        
                        <!-- Card 3 -->
                        <div class="group relative flex flex-col bg-white rounded-[2rem] p-8 border border-slate-100/80 shadow-sm hover:shadow-[0_30px_60px_-15px_rgba(56,189,248,0.12)] hover:-translate-y-1.5 transition-all duration-500 dark:bg-slate-900 dark:border-slate-800/60 overflow-hidden">
                            <div class="absolute top-0 right-0 -mr-6 -mt-6 w-24 h-24 rounded-full bg-sky-500/5 group-hover:bg-sky-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                            
                            <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-gradient-to-br from-sky-400 to-blue-600 text-white shadow-lg shadow-sky-500/25 group-hover:scale-110 transition-transform duration-500 mb-6">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base mb-2 tracking-tight">100% Human Writing</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-medium">Zero-AI generation policy. All content is written from scratch by real scholars.</p>
                        </div>
                        
                        <!-- Card 4 -->
                        <div class="group relative flex flex-col bg-white rounded-[2rem] p-8 border border-slate-100/80 shadow-sm hover:shadow-[0_30px_60px_-15px_rgba(245,158,11,0.12)] hover:-translate-y-1.5 transition-all duration-500 dark:bg-slate-900 dark:border-slate-800/60 overflow-hidden">
                            <div class="absolute top-0 right-0 -mr-6 -mt-6 w-24 h-24 rounded-full bg-amber-500/5 group-hover:bg-amber-500/10 group-hover:scale-150 transition-all duration-700 pointer-events-none"></div>
                            
                            <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 text-white shadow-lg shadow-amber-500/25 group-hover:scale-110 transition-transform duration-500 mb-6">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <h4 class="font-black text-slate-900 dark:text-white text-base mb-2 tracking-tight">Confidentiality</h4>
                            <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed font-medium">Strict data protection. We never disclose client details to third parties.</p>
                        </div>
                    </div>
                </div>

                <!-- Image Right (Column span 5) -->
                <div class="relative lg:col-span-5 flex justify-center lg:justify-end">
                    <div class="absolute -inset-4 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-[2.8rem] blur-3xl opacity-10 pointer-events-none"></div>
                    <div class="relative w-full max-w-md lg:max-w-full rounded-3xl overflow-hidden border border-slate-200 bg-white shadow-[0_24px_60px_-30px_rgba(15,23,42,0.35)] dark:border-slate-800/80 dark:bg-slate-900">
                        <img src="{{ asset('images/ui/about_academic_standards.png') }}" 
                             alt="US Academic Standards Infographic - Assignment Help USA" 
                             class="w-full object-cover object-center">
                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-500/5 via-transparent to-pink-500/5 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-20 bg-white relative overflow-hidden dark:bg-slate-900">
        <div class="section-container">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-blue-200 dark:bg-blue-900/30 dark:text-blue-400 dark:border-blue-800/50">
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                    Values
                </div>
                <h2 class="text-4xl sm:text-5xl font-black text-slate-900 mb-4 dark:text-white">
                    The Pillars of Our Academic Support
                </h2>
                <div class="h-1.5 w-16 bg-blue-600 rounded-full mx-auto"></div>
            </div>

            <!-- Values Grid - using home page card styling with large border-radius and hover offsets -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Quality Excellence -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-9 border border-slate-100 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_45px_90px_-25px_rgba(99,102,241,0.18)] hover:-translate-y-3 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800">
                    <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-600/25 group-hover:scale-110 transition-transform duration-500 mb-8 font-bold text-2xl">
                        ⭐
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-4 dark:text-white">Quality Excellence</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        We deliver customized, thoroughly researched papers and perfectly annotated code that align precisely with university rubrics.
                    </p>
                </article>

                <!-- Student-Centric -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-9 border border-slate-100 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_45px_90px_-25px_rgba(99,102,241,0.18)] hover:-translate-y-3 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800">
                    <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-600/25 group-hover:scale-110 transition-transform duration-500 mb-8 font-bold text-2xl">
                        🎓
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-4 dark:text-white">Student-Centric</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        Your learning and deadline success are our primary goals. We adjust our drafts according to your individual voice and needs.
                    </p>
                </article>

                <!-- Integrity & Trust -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-9 border border-slate-100 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_45px_90px_-25px_rgba(99,102,241,0.18)] hover:-translate-y-3 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800">
                    <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-600/25 group-hover:scale-110 transition-transform duration-500 mb-8 font-bold text-2xl">
                        🔒
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-4 dark:text-white">Integrity & Trust</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        We stand by strict academic guidelines and data policies. We promise total discretion, secure transactions, and no hidden fees.
                    </p>
                </article>

                <!-- Innovation -->
                <article class="flex flex-col bg-slate-50 rounded-[2.5rem] p-9 border border-slate-100 relative overflow-hidden group transition-all duration-500 hover:bg-white hover:shadow-[0_45px_90px_-25px_rgba(99,102,241,0.18)] hover:-translate-y-3 dark:bg-slate-950 dark:hover:bg-slate-800/50 dark:border-slate-800">
                    <div class="h-14 w-14 flex items-center justify-center rounded-2xl bg-indigo-600 text-white shadow-lg shadow-indigo-600/25 group-hover:scale-110 transition-transform duration-500 mb-8 font-bold text-2xl">
                        💡
                    </div>
                    <h3 class="text-xl font-black text-slate-900 mb-4 dark:text-white">Innovation</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        We build intuitive tools like budget calculators and grade checkers to help you organize your academic tasks effortlessly.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Grid Section -->
    <section class="py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950/50">
        <div class="section-container">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-50 text-indigo-700 text-[10px] font-black uppercase tracking-widest mb-6 border border-indigo-200 dark:bg-indigo-950/30 dark:text-indigo-400">
                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-600 animate-pulse"></span>
                    Guarantees
                </div>
                <h2 class="text-4xl sm:text-5xl font-black text-slate-900 mb-4 dark:text-white">
                    What Makes Us the Top Choice for US Students
                </h2>
                <div class="h-1.5 w-16 bg-indigo-600 rounded-full mx-auto"></div>
            </div>

            <!-- Features Grid (using home page style card grid) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Vetted Academics -->
                <div class="bg-white rounded-[2.5rem] p-9 border border-slate-100 hover:shadow-lg transition-all duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="text-4xl mb-5">👨‍🏫</div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 dark:text-white">Vetted Academics</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        Every helper undergoes language, writing, and analytical exams, with background degrees verified against academic registries.
                    </p>
                </div>

                <!-- 24/7 Support -->
                <div class="bg-white rounded-[2.5rem] p-9 border border-slate-100 hover:shadow-lg transition-all duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="text-4xl mb-5">⏰</div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 dark:text-white">24/7 Support</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        Stuck on a homework deadline in the middle of the night? Tutors and customer support teams are active to handle orders instantly.
                    </p>
                </div>

                <!-- Affordable Pricing -->
                <div class="bg-white rounded-[2.5rem] p-9 border border-slate-100 hover:shadow-lg transition-all duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="text-4xl mb-5">💰</div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 dark:text-white">Affordable Prices</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        We balance high quality standards with pocket-friendly pricing, offering discount packages for recurring homework.
                    </p>
                </div>

                <!-- Timely Delivery -->
                <div class="bg-white rounded-[2.5rem] p-9 border border-slate-100 hover:shadow-lg transition-all duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="text-4xl mb-5">🚀</div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 dark:text-white">On-Time Delivery</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        We respect your deadlines. Our tutors ensure timely completion without compromising on quality, even for 6-hour requests.
                    </p>
                </div>

                <!-- Plagiarism-Free -->
                <div class="bg-white rounded-[2.5rem] p-9 border border-slate-100 hover:shadow-lg transition-all duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="text-4xl mb-5">✅</div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 dark:text-white">100% Originality</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium">
                        Our strict quality checkers run plagiarism-detecting algorithms on every draft before sending it, assuring zero duplication.
                    </p>
                </div>

                <!-- Confidential -->
                <div class="bg-white rounded-[2.5rem] p-9 border border-slate-100 hover:shadow-lg transition-all duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="text-4xl mb-5">🔐</div>
                    <h3 class="text-xl font-black text-slate-900 mb-3 dark:text-white">SSL Security</h3>
                    <p class="text-sm text-slate-500 leading-relaxed dark:text-slate-400 font-medium font-normal">
                        Your billing information and transaction details are guarded with advanced SSL security layers and payment gateways.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-slate-900 text-white relative overflow-hidden dark:bg-slate-950">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-40 h-40 bg-gradient-to-br from-indigo-500/15 to-cyan-500/15 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-20 w-60 h-60 bg-gradient-to-br from-purple-500/15 to-pink-500/15 rounded-full blur-3xl animate-pulse-slow"></div>
        </div>

        <div class="section-container relative z-10">
            <div class="text-center mb-20">
                <h3 class="text-3xl sm:text-5xl font-black mb-4 tracking-tight">Our Track Record in Numbers</h3>
                <p class="text-lg sm:text-xl text-slate-300 font-medium">Trusted by students across the United States</p>
            </div>

            <!-- Stats Grid (using home page stat counters) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-115 transition-transform duration-550 shadow-lg shadow-blue-600/20 animate-float">
                        <span class="text-2xl">📚</span>
                    </div>
                    <div class="text-4xl sm:text-5xl font-black mb-3 text-white tracking-tight">5,000+</div>
                    <div class="text-sm text-slate-300 font-medium font-normal">Assignments Completed</div>
                </div>

                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-115 transition-transform duration-550 shadow-lg shadow-green-600/20 animate-float-delayed">
                        <span class="text-2xl">🎓</span>
                    </div>
                    <div class="text-4xl sm:text-5xl font-black mb-3 text-white tracking-tight">2,500+</div>
                    <div class="text-sm text-slate-300 font-medium font-normal">Active Happy Scholars</div>
                </div>

                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-115 transition-transform duration-550 shadow-lg shadow-indigo-600/20 animate-float">
                        <span class="text-2xl">⭐</span>
                    </div>
                    <div class="text-4xl sm:text-5xl font-black mb-3 text-white tracking-tight">98.5%</div>
                    <div class="text-sm text-slate-300 font-medium font-normal">Grade Success Rate</div>
                </div>

                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-115 transition-transform duration-550 shadow-lg shadow-red-600/20 animate-float-delayed">
                        <span class="text-2xl">👨‍🏫</span>
                    </div>
                    <div class="text-4xl sm:text-5xl font-black mb-3 text-white tracking-tight">150+</div>
                    <div class="text-sm text-slate-300 font-medium font-normal">PhD & Master\'s Tutors</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10 z-0"></div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center text-white">
            <h2 class="text-3xl sm:text-5xl font-black mb-6 leading-tight tracking-tight">
                Struggling with Complex Homework? <br>Let Our US Experts Write It for You!
            </h2>
            <p class="text-lg text-white/95 mb-10 leading-relaxed max-w-2xl mx-auto font-medium">
                Join thousands of students from top US schools who rely on our experts to deliver original, plagiarism-free, and high-scoring papers on time.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('order') }}"
                    class="group inline-flex items-center justify-center bg-white text-indigo-600 hover:bg-slate-50 px-7 py-4 rounded-xl font-black transition-all shadow-xl hover:-translate-y-1 active:scale-95 dark:bg-slate-900 dark:text-white dark:hover:bg-slate-800">
                    🚀 Order Now
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
                <a href="{{ route('how-it-works') }}"
                    class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white/10 px-7 py-4 rounded-xl font-black transition-all active:scale-95">
                    ❓ How It Works
                </a>
            </div>
        </div>
    </section>

    <!-- Custom Micro-Animations -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes float-delayed {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 0.6; transform: scale(1.05); }
        }
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-float-delayed { animation: float-delayed 4s ease-in-out infinite 2s; }
        .animate-pulse-slow { animation: pulse-slow 6s ease-in-out infinite; }
        .animate-fade-in-up { animation: fade-in-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
    </style>
@endsection
