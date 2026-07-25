@extends('layouts.app')

@section('title', 'Proofreading & Editing Help USA | Academic Editors')
@section('description', 'Get expert proofreading & editing help in USA. Track-changes grammar correction, style polishing & citation formatting by PhD editors with 24/7 support.')
@section('keywords', 'proofreading editing help, proofreading editing help USA, academic proofreading service, essay editing help, dissertation proofreading, track changes editing, APA citation editing, paper editing service')

@push('head')
    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Proofreading & Editing Help USA | Academic Editors">
    <meta property="og:description" content="Get expert proofreading & editing help in USA. Track-changes grammar correction, style polishing & citation formatting by PhD editors with 24/7 support.">
    <meta property="og:image" content="{{ asset('images/homework-help-tutoring.png') }}">

    <!-- Twitter Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Proofreading & Editing Help USA | Academic Editors">
    <meta property="twitter:description" content="Get expert proofreading & editing help in USA. Track-changes grammar correction, style polishing & citation formatting by PhD editors with 24/7 support.">
    <meta property="twitter:image" content="{{ asset('images/homework-help-tutoring.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Structured Data (JSON-LD) for Google SEO -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "EducationalOrganization",
                "@@id": "{{ url('/') }}#organization",
                "name": "Assignment Help USA",
                "url": "{{ url('/') }}",
                "logo": "{{ asset('images/logo.png') }}",
                "sameAs": []
            },
            {
                "@@type": "Service",
                "@@id": "{{ url()->current() }}#service",
                "name": "Professional Proofreading & Editing Help USA",
                "provider": { "@@id": "{{ url('/') }}#organization" },
                "serviceType": "Academic Paper Proofreading and Editing Assistance",
                "areaServed": {
                    "@@type": "Country",
                    "name": "United States"
                },
                "description": "Professional academic proofreading and copy-editing services for US university students. Comprehensive grammar correction, style polishing, citation formatting (APA/MLA/Chicago), and MS Word Track Changes delivery by native PhD editors.",
                "offers": {
                    "@@type": "Offer",
                    "priceCurrency": "USD",
                    "price": "8.00",
                    "priceValidUntil": "2027-12-31",
                    "availability": "https://schema.org/InStock"
                },
                "aggregateRating": {
                    "@@type": "AggregateRating",
                    "ratingValue": "4.9",
                    "reviewCount": "6700",
                    "bestRating": "5",
                    "worstRating": "1"
                }
            },
            {
                "@@type": "BreadcrumbList",
                "@@id": "{{ url()->current() }}#breadcrumb",
                "itemListElement": [
                    {
                        "@@type": "ListItem",
                        "position": 1,
                        "name": "Home",
                        "item": "{{ url('/') }}"
                    },
                    {
                        "@@type": "ListItem",
                        "position": 2,
                        "name": "Services",
                        "item": "{{ url('/services') }}"
                    },
                    {
                        "@@type": "ListItem",
                        "position": 3,
                        "name": "Proofreading & Editing Help",
                        "item": "{{ url()->current() }}"
                    }
                ]
            },
            {
                "@@type": "FAQPage",
                "@@id": "{{ url()->current() }}#faq",
                "mainEntity": [
                    {
                        "@@type": "Question",
                        "name": "How will I see the edits made to my document?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "We deliver your edited document using Microsoft Word Track Changes. You will receive two files: one displaying tracked changes and editor marginal notes, and one clean final submission version."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Who will edit my academic paper?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Your paper is assigned to a native English-speaking academic editor holding a PhD or Master's degree in your specific discipline from a top US or UK university."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Do you check and format citations in APA, MLA, or Chicago style?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. We perform thorough citation audits checking in-text citations against your reference list according to APA 7th, MLA 9th, Chicago 17th, Harvard, IEEE, or OSCOLA style guidelines."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Can I get urgent express proofreading for tight deadlines?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. We offer express academic proofreading with turnarounds as fast as 3 hours, 6 hours, or 12 hours without compromising editorial accuracy."
                        }
                    }
                ]
            }
        ]
    }
    </script>
@endpush

@section('content')
<div class="min-h-screen bg-slate-50 dark:bg-slate-950 font-sans antialiased text-slate-900 dark:text-slate-100">

    {{-- ===================================================
         HERO SECTION
    =================================================== --}}
    <x-creative-hero 
        :service="$service" 
        title="Professional Proofreading & Editing Help USA"
        subtitle="Uncertain about grammar, flow, or citation rules in your academic paper? Get 100% human, expert proofreading & editing help from native English PhD editors. Track-changes transparency, style polishing, and APA/MLA formatting delivered on time." 
    />

    {{-- ===================================================
         TRUST BAR / SOCIAL PROOF (E-E-A-T)
    =================================================== --}}
    <section class="relative z-10 border-y border-slate-200/80 bg-white/90 py-5 backdrop-blur-md dark:border-slate-800/80 dark:bg-slate-900/90" aria-label="Trust Signals">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4 text-sm">
                <div class="flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20">
                    <div class="flex text-amber-400 text-sm">★★★★★</div>
                    <span class="font-bold text-slate-900 dark:text-white">4.9/5 Rating</span>
                    <span class="text-xs text-slate-500 dark:text-slate-400">(6,700+ Edited Papers)</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">40</strong> Native PhD Editors Online</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-semibold px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"/></svg>
                    <span>MS Word Track Changes & Editor Notes Included</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-blue-600 dark:text-blue-400 font-semibold px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    <span>0% AI & 100% Human Editing</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 1: 4-LEVEL EDITING BLUEPRINT
    =================================================== --}}
    <section class="relative py-20 lg:py-24 bg-gradient-to-b from-slate-950 via-slate-900 to-indigo-950 text-white overflow-hidden" id="editing-levels">
        <!-- Background Ambient Glow -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-blue-600/15 rounded-full filter blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-600/15 rounded-full filter blur-3xl pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/30 text-blue-400 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        Comprehensive Editorial Framework
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        4 Levels of Academic Editing <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">That Guarantee Flawless Submissions</span>
                    </h2>
                    <p class="mt-5 text-slate-300 leading-relaxed text-base sm:text-lg">
                        Even innovative research can lose marks due to minor typos, informal phrasing, or citation errors. Our multi-tiered editing framework polishes every sentence while preserving your authentic academic voice.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-blue-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-black text-lg shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform">1</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Level 1: Basic Proofreading & Grammar Correction</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Fixing typos, spelling errors, punctuation mistakes, subject-verb disagreements, and modifier placements.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white font-black text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-110 transition-transform">2</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Level 2: Copy Editing & Scholarly Style Polishing</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Enhancing sentence flow, eliminating passive voice, refining vocabulary precision, and ensuring objective academic tone.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 text-white font-black text-lg shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform">3</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Level 3: Substantive Structural & Argument Cohesion</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Improving logical transitions between paragraphs, strengthening argument cohesion, and eliminating repetitive phrasing.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-2xl opacity-40 group-hover:opacity-80 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/homework-help-tutoring.png') }}" 
                             alt="Academic Proofreading and Line Editing Manuscript Review Environment" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 2: TRACK CHANGES TRANSPARENCY
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div class="order-2 lg:order-1 relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/student-hero.png') }}" 
                             alt="Microsoft Word Track Changes and Editorial Marginal Comments Preview" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-100 dark:bg-indigo-950/60 border border-indigo-300 dark:border-indigo-800 text-indigo-700 dark:text-indigo-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-indigo-500 animate-pulse"></span>
                        Transparent Edit Tracking
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Complete Transparency with MS Word Track Changes
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        We never alter your core meaning silently. Every order is returned with 2 versions: a Tracked Changes document showing every edit and marginal comment, plus a clean, ready-to-submit final file.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Tracked markup version showing all deletions, insertions, and formatting updates</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Marginal editor notes explaining significant phrasing and structural choices</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Clean, fully accepted final version formatted and ready for submission</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 3: NATIVE PHD EDITOR STANDARDS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-300 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Native English PhD Quality
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Native English PhD Editors Across All Academic Disciplines
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        Automated AI grammar checkers miss subtle academic context and field-specific jargon. Our human editors hold Master's and PhD degrees from top US universities and know your subject's exact terminology.
                    </p>

                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-emerald-600 dark:text-emerald-400 font-bold text-lg mb-1">Human-Only Proofreading</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">100% human editing preserving original voice and intellectual logic.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-blue-600 dark:text-blue-400 font-bold text-lg mb-1">Citation Style Audit</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Rigorous reference list auditing in APA, MLA, Chicago, and IEEE.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-indigo-600 dark:text-indigo-400 font-bold text-lg mb-1">Express Rush Delivery</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Urgent turnarounds available in 3, 6, 12, or 24 hours.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-purple-600 dark:text-purple-400 font-bold text-lg mb-1">Certificate of Editing</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Official proofreading certificate for journal and university submission.</p>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/math_tutor_elena.png') }}" 
                             alt="Native English Academic Proofreader and Quality Specialist" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         EDITING SERVICES COVERED
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950" id="editing-services">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Tailored Editing Options</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Our Academic Proofreading Services</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">From undergraduate essays to journal manuscripts and dissertations, we cover all academic documents.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Service 1 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 dark:bg-blue-950/60 text-2xl group-hover:scale-110 transition-transform">✍️</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Essay & Paper Proofreading</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Fixing spelling, punctuation, grammar, and typos in coursework essays and term papers.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.essay-writing.index') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Essay Services <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 text-2xl group-hover:scale-110 transition-transform">🔬</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Research Paper Copy Editing</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Refining sentence structure, active voice, and technical vocabulary for research manuscripts.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.research-paper.index') }}" class="text-sm font-bold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Research Paper Services <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-50 dark:bg-purple-950/60 text-2xl group-hover:scale-110 transition-transform">🎓</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Thesis & Dissertation Editing</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Comprehensive line-by-line editing and formatting alignment for graduate Master's & PhD dissertations.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.thesis-dissertation.index') }}" class="text-sm font-bold text-purple-600 hover:text-purple-700 dark:text-purple-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Thesis & Dissertation Services <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 dark:bg-emerald-950/60 text-2xl group-hover:scale-110 transition-transform">📚</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Citation & Reference List Audit</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Verifying in-text citations against bibliography entries in APA, MLA, Chicago, and IEEE.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Citation Audit <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 5 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-amber-500 to-orange-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 dark:bg-amber-950/60 text-2xl group-hover:scale-110 transition-transform">💡</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">ESL Academic Polishing</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Specialized editing for non-native English scholars ensuring natural academic phrasing.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-amber-600 hover:text-amber-700 dark:text-amber-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order ESL Editing <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 6 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-rose-500 to-red-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-50 dark:bg-rose-950/60 text-2xl group-hover:scale-110 transition-transform">⚡</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Express 3-Hour Proofreading</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Rapid emergency proofreading for last-minute submissions delivered in under 3 hours.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-rose-600 hover:text-rose-700 dark:text-rose-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Express Editing <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         CITATIONS & FORMATTING STANDARDS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-purple-100 text-purple-700 dark:bg-purple-950/80 dark:text-purple-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-purple-200 dark:border-purple-800">Style Manuals</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Mastery of All Academic Style Guides</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">In-text citations, footnotes, margins, and bibliographies formatted strictly to manual guidelines.</p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-blue-400/50 transition-colors shadow-sm">
                    <div class="text-blue-600 dark:text-blue-400 font-black text-xl mb-2">APA 7th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for Psychology, Social Sciences, Business, and Nursing papers with precise DOI and heading formatting.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-indigo-400/50 transition-colors shadow-sm">
                    <div class="text-indigo-600 dark:text-indigo-400 font-black text-xl mb-2">MLA 9th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for Literature, Humanities, and Media studies with container-based Works Cited formatting.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-purple-400/50 transition-colors shadow-sm">
                    <div class="text-purple-600 dark:text-purple-400 font-black text-xl mb-2">Chicago / Turabian 17th</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for History, Art, and Political Science with Footnotes/Endnotes or Author-Date citations.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-emerald-400/50 transition-colors shadow-sm">
                    <div class="text-emerald-600 dark:text-emerald-400 font-black text-xl mb-2">Harvard Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Widely used across US economics and management departments for parenthetical referencing.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-rose-400/50 transition-colors shadow-sm">
                    <div class="text-rose-600 dark:text-rose-400 font-black text-xl mb-2">IEEE Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Numbered bracket citation standard for Engineering, Computer Science, and STEM papers.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-amber-400/50 transition-colors shadow-sm">
                    <div class="text-amber-600 dark:text-amber-400 font-black text-xl mb-2">OSCOLA & Legal</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Specialized legal citation style for Law papers, case commentary, and statutory analysis.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         7 WRITING & GRAMMAR ERRORS FIXED
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-rose-100 text-rose-700 dark:bg-rose-950/80 dark:text-rose-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-rose-200 dark:border-rose-800">Grade Protection</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">7 Writing Errors Our Editors Fix</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our native English editors systematically eliminate common mistakes that cost students marks.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $errors = [
                    ['title' => 'Subject-Verb & Tense Disagreements', 'desc' => 'Shifting between past and present tense mid-paragraph or misaligning singular/plural verbs.'],
                    ['title' => 'Excessive Passive Phrasing', 'desc' => 'Overusing weak passive constructions instead of concise, active academic statements.'],
                    ['title' => 'Dangling & Misplaced Modifiers', 'desc' => 'Confusing sentence logic by detaching descriptive phrases from their target nouns.'],
                    ['title' => 'Citation Mismatches & Missing DOIs', 'desc' => 'Citing sources in text that are absent in the reference list or missing required URLs.'],
                    ['title' => 'Informal Phrasing & Colloquialisms', 'desc' => 'Using conversational language ("a lot", "get", "I think") instead of scholarly tone.'],
                    ['title' => 'Run-On Sentences & Fragments', 'desc' => 'Fragmenting thoughts or chaining independent clauses with comma splices.'],
                    ['title' => 'Inconsistent Formatting & Spacing', 'desc' => 'Mixing font sizes, line spacing, indentations, or heading styles.'],
                ];
                @endphp
                @foreach($errors as $index => $e)
                <div class="flex gap-5 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900 hover:border-rose-300 dark:hover:border-rose-800 transition-colors shadow-sm">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-rose-500 text-white font-black text-base shadow-md shadow-rose-500/20">
                        {{ $index + 1 }}
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-lg mb-1">{{ $e['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">{{ $e['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================================================
         EXPERT PHD FACULTY EDITORS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Native English Editors</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Meet Our Top Academic Editors</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Every editor holds a Master's or PhD degree with extensive academic publishing credentials.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                $editors = [
                    [
                        'name' => 'Dr. Claire Montgomery',
                        'degree' => 'PhD, English Linguistics — Yale University',
                        'specialty' => 'Academic Copy Editing, APA 7th & Dissertation Polishing',
                        'orders' => '2,350+',
                        'rating' => '4.99',
                        'badge' => 'Senior Managing Editor'
                    ],
                    [
                        'name' => 'Prof. Arthur Sterling',
                        'degree' => 'PhD, History & Rhetoric — Oxford University',
                        'specialty' => 'Substantive Editing, Chicago 17th & Humanities Papers',
                        'orders' => '1,980+',
                        'rating' => '4.98',
                        'badge' => 'PhD Faculty Editor'
                    ],
                    [
                        'name' => 'Dr. Hannah Vance',
                        'degree' => 'PhD, Biomedical Communications — Columbia University',
                        'specialty' => 'STEM Papers, IEEE/AMA Formatting & ESL Polishing',
                        'orders' => '1,720+',
                        'rating' => '4.97',
                        'badge' => 'STEM Lead Editor'
                    ]
                ];
                @endphp

                @foreach($editors as $ed)
                <div class="rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 p-7 shadow-sm flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-950 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800">{{ $ed['badge'] }}</span>
                            <div class="flex items-center gap-1 text-amber-400 text-xs font-bold">
                                ★★★★★ <span class="text-slate-800 dark:text-slate-200 ml-1">{{ $ed['rating'] }}</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ $ed['name'] }}</h3>
                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400 mt-1 mb-4">{{ $ed['degree'] }}</p>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                            <strong>Specialization:</strong> {{ $ed['specialty'] }}
                        </p>
                    </div>

                    <div class="pt-5 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs sm:text-sm">
                        <span class="text-slate-500 dark:text-slate-400 font-medium">{{ $ed['orders'] }} papers edited</span>
                        <a href="{{ route('order') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Hire Editor →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================================================
         ACCORDION FAQ SECTION
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950" id="faq">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3">Answers & Clarity</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Frequently Asked Questions</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Everything you need to know before hiring our proofreading & editing team.</p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">
                @php
                $faqs = [
                    [
                        'q' => 'How will I see the edits made to my document?',
                        'a' => 'We deliver your edited document using Microsoft Word Track Changes. You will receive two files: one displaying tracked changes and editor marginal notes, and one clean final submission version.'
                    ],
                    [
                        'q' => 'Who will edit my academic paper?',
                        'a' => 'Your paper is assigned to a native English-speaking academic editor holding a PhD or Master\'s degree in your specific discipline from a top US or UK university.'
                    ],
                    [
                        'q' => 'Do you check and format citations in APA, MLA, or Chicago style?',
                        'a' => 'Yes. We perform thorough citation audits checking in-text citations against your reference list according to APA 7th, MLA 9th, Chicago 17th, Harvard, IEEE, or OSCOLA style guidelines.'
                    ],
                    [
                        'q' => 'Can I get urgent express proofreading for tight deadlines?',
                        'a' => 'Yes. We offer express academic proofreading with turnarounds as fast as 3 hours, 6 hours, or 12 hours without compromising editorial accuracy.'
                    ],
                    [
                        'q' => 'What if I need changes after receiving my edited paper?',
                        'a' => 'We provide 21 days of unlimited free re-checks if you make minor tweaks to your text based on editor comments.'
                    ]
                ];
                @endphp

                @foreach($faqs as $i => $faq)
                <div class="rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 overflow-hidden shadow-sm transition-colors"
                     :class="open === {{ $i }} ? 'border-blue-500 dark:border-blue-500 shadow-md' : ''">
                    <button 
                        x-on:click="open = open === {{ $i }} ? null : {{ $i }}"
                        class="w-full flex items-center justify-between px-7 py-6 text-left font-bold text-slate-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 transition-colors text-base sm:text-lg">
                        <span>{{ $faq['q'] }}</span>
                        <svg class="w-6 h-6 text-blue-600 dark:text-blue-400 shrink-0 transition-transform duration-300"
                            :class="open === {{ $i }} ? 'rotate-180' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === {{ $i }}" x-collapse class="px-7 pb-6 pt-1 text-sm sm:text-base text-slate-600 dark:text-slate-400 leading-relaxed border-t border-slate-100 dark:border-slate-800/80">
                        {{ $faq['a'] }}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================================================
         FINAL CTA SECTION
    =================================================== --}}
    <section class="relative py-20 lg:py-24 bg-gradient-to-r from-blue-700 via-indigo-700 to-purple-800 text-white overflow-hidden">
        <!-- Decorative glowing circles -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-white/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-400/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight">Ready to Submit a Flawless Academic Paper?</h2>
            <p class="mt-5 text-blue-100 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                Connect with a native English PhD editor today. Get a perfectly formatted, track-changed document delivered before your deadline.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('order') }}" class="group inline-flex items-center gap-3 rounded-2xl bg-white px-9 py-4 text-lg font-bold text-blue-700 shadow-xl hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                    Order Proofreading Now
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
