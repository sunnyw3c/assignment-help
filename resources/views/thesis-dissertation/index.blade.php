@extends('layouts.app')

@section('title', 'Thesis & Dissertation Help USA | PhD Writing Services')
@section('description', 'Get expert thesis & dissertation help in USA. Master\'s theses & PhD dissertations with original research, data analysis & defense prep by PhD writers.')
@section('keywords', 'thesis help, dissertation help USA, PhD dissertation writing service, masters thesis help, write my dissertation, dissertation methodology, SPSS data analysis dissertation, dissertation defense prep')

@push('head')
    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Thesis & Dissertation Help USA | PhD Writing Services">
    <meta property="og:description" content="Get expert thesis & dissertation help in USA. Master\'s theses & PhD dissertations with original research, data analysis & defense prep by PhD writers.">
    <meta property="og:image" content="{{ asset('images/grad-cap.png') }}">

    <!-- Twitter Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Thesis & Dissertation Help USA | PhD Writing Services">
    <meta property="twitter:description" content="Get expert thesis & dissertation help in USA. Master\'s theses & PhD dissertations with original research, data analysis & defense prep by PhD writers.">
    <meta property="twitter:image" content="{{ asset('images/grad-cap.png') }}">

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
                "name": "Professional Thesis & Dissertation Help USA",
                "provider": { "@@id": "{{ url('/') }}#organization" },
                "serviceType": "Academic Thesis and Dissertation Assistance",
                "areaServed": {
                    "@@type": "Country",
                    "name": "United States"
                },
                "description": "Custom Master's thesis and PhD dissertation writing assistance for US university students. Comprehensive 5-chapter research support, empirical data analysis (SPSS/R), and defense prospectus preparation by native PhD scholars.",
                "offers": {
                    "@@type": "Offer",
                    "priceCurrency": "USD",
                    "price": "20.00",
                    "priceValidUntil": "2027-12-31",
                    "availability": "https://schema.org/InStock"
                },
                "aggregateRating": {
                    "@@type": "AggregateRating",
                    "ratingValue": "4.9",
                    "reviewCount": "5120",
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
                        "name": "Thesis & Dissertation Help",
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
                        "name": "Can I order individual dissertation chapters instead of a complete dissertation?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. You can order specific dissertation chapters, such as Chapter 1 (Introduction), Chapter 2 (Literature Review), Chapter 3 (Methodology), Chapter 4 (Results & SPSS Analysis), or Chapter 5 (Discussion)."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Who will assist with my thesis or PhD dissertation?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Your project is assigned to a scholar holding a PhD from a top US university in your exact discipline who has served on dissertation committees and published peer-reviewed research."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Do you perform statistical analysis in SPSS, R, STATA, or NVivo?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. Our quantitative & qualitative data specialists run complex statistical models (SEM, ANOVA, Regression) in SPSS, R, STATA, and thematic coding in NVivo, delivering complete raw data outputs and written interpretations."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Are your dissertations 100% original and Turnitin-verified?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Every dissertation is written 100% from scratch. We scan every document using Turnitin and advanced AI detection tools, attaching an official similarity report with your order."
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
        title="Professional Thesis & Dissertation Help USA"
        subtitle="Struggling with complex doctoral methodology, data analysis, or tight defense deadlines? Get 100% original, publication-grade thesis & dissertation help from US-based PhD scholars. Complete 5-chapter assistance, SPSS/R statistical analysis, and committee defense prep." 
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
                    <span class="text-xs text-slate-500 dark:text-slate-400">(5,120+ Graduate Dissertations)</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">45</strong> PhD Committee Scholars Online</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-semibold px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"/></svg>
                    <span>100% University Rubric Compliant</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-blue-600 dark:text-blue-400 font-semibold px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    <span>0% AI & Turnitin Passed</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 1: 5-CHAPTER DISSERTATION BLUEPRINT
    =================================================== --}}
    <section class="relative py-20 lg:py-24 bg-gradient-to-b from-slate-950 via-slate-900 to-indigo-950 text-white overflow-hidden" id="dissertation-framework">
        <!-- Background Ambient Glow -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-blue-600/15 rounded-full filter blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-600/15 rounded-full filter blur-3xl pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/30 text-blue-400 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        Doctoral Research Lifecycle
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        Standard 5-Chapter Dissertation <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">Engineered to Committee Standards</span>
                    </h2>
                    <p class="mt-5 text-slate-300 leading-relaxed text-base sm:text-lg">
                        Completing a Master's thesis or PhD dissertation requires rigorous adherence to university committee expectations. Our PhD scholars assist with complete manuscripts or individual chapters.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-blue-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-black text-lg shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform">1</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Ch 1 & 2: Proposal, Introduction & Literature Review</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Formulating research questions, theoretical frameworks, and synthesizing peer-reviewed literature to establish empirical research gaps.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white font-black text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-110 transition-transform">2</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Ch 3 & 4: Methodology, Sampling & SPSS/R Data Analysis</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Designing quantitative/qualitative instruments, sample power calculations, running SPSS/R/STATA tests, and presenting data tables.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 text-white font-black text-lg shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform">3</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Ch 5 & Defense: Discussion, Implications & Slide Prep</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Synthesizing findings with existing literature, articulating policy/practical implications, and preparing oral defense slide decks.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-2xl opacity-40 group-hover:opacity-80 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/database_ecosystem_banner.png') }}" 
                             alt="Standard 5-Chapter Doctoral Dissertation Research Framework Blueprint" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 2: STATISTICAL DATA & STRUCTURAL MODELING
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div class="order-2 lg:order-1 relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/database_erd_preview.png') }}" 
                             alt="Advanced Statistical Data Analysis and Structural Equation Modeling Diagram" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-100 dark:bg-indigo-950/60 border border-indigo-300 dark:border-indigo-800 text-indigo-700 dark:text-indigo-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-indigo-500 animate-pulse"></span>
                        Empirical Data Mastery
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Advanced SPSS, R, STATA & NVivo Data Analysis
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        Statistical errors in Chapter 4 are the leading cause of dissertation committee pushback. Our PhD data specialists run complex quantitative models and qualitative coding with full raw data outputs.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Quantitative modeling: Regression, ANOVA, SEM, Factor Analysis in SPSS & R</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Qualitative analysis: NVivo interview coding, thematic matrices & grounded theory</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Raw output files (.spv, .RData) and APA formatted data tables included</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 3: DOCTORAL WORKSTATION SHOWCASE
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-950/60 border border-blue-300 dark:border-blue-800 text-blue-700 dark:text-blue-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-500 animate-pulse"></span>
                        Guaranteed Academic Originality
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        100% Custom Written & Turnitin Verified Original
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        Doctoral dissertations require absolute originality. Every document is crafted from scratch according to your committee prospectus, verified by Turnitin, and backed by unlimited committee revisions.
                    </p>

                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-blue-600 dark:text-blue-400 font-bold text-lg mb-1">Turnitin Similarity Report</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Official plagiarism scan attached to every dissertation order.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-indigo-600 dark:text-indigo-400 font-bold text-lg mb-1">0% AI Content</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Scanned and verified on CopyLeaks, GPTZero, and Turnitin AI.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-purple-600 dark:text-purple-400 font-bold text-lg mb-1">Committee Revisions</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Unlimited free adjustments until your committee approves your draft.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-emerald-600 dark:text-emerald-400 font-bold text-lg mb-1">Strict Confidentiality</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Encrypted data protocols ensuring 100% privacy protection.</p>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/case-study-analysis-hero.png') }}" 
                             alt="Doctoral Dissertation Research Workstation Environment" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         DISSERTATION SERVICES COVERED
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950" id="dissertation-services">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Comprehensive Scope</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Our Thesis & Dissertation Services</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">From proposal prospectus to final defense slides, we assist at every stage.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Service 1 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 dark:bg-blue-950/60 text-2xl group-hover:scale-110 transition-transform">🎓</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Full PhD Dissertations</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            End-to-end doctoral research assistance across all 5 chapters (100–300+ pages) customized to committee rubrics.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Full Dissertation <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 text-2xl group-hover:scale-110 transition-transform">📜</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Master's Theses</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Tailored Master's thesis writing support (50–100 pages) incorporating rigorous literature review and empirical research.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Master's Thesis <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-50 dark:bg-purple-950/60 text-2xl group-hover:scale-110 transition-transform">📝</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Proposal & Prospectus</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Crafting persuasive dissertation proposals, problem statements, and methodology designs to win committee approval.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-purple-600 hover:text-purple-700 dark:text-purple-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Proposal Help <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 4 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 dark:bg-emerald-950/60 text-2xl group-hover:scale-110 transition-transform">📊</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">SPSS & R Data Analysis (Ch 4)</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Quantitative statistical analysis (SEM, Regression, ANOVA) in SPSS/R and qualitative thematic coding in NVivo.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Data Analysis <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 5 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-amber-500 to-orange-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 dark:bg-amber-950/60 text-2xl group-hover:scale-110 transition-transform">📚</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Systematic Literature Review (Ch 2)</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Systematic literature reviews following PRISMA frameworks, thematic matrices, and research gap identification.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.literature-review.index') }}" class="text-sm font-bold text-amber-600 hover:text-amber-700 dark:text-amber-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Literature Review Help <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Service 6 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-rose-500 to-red-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-50 dark:bg-rose-950/60 text-2xl group-hover:scale-110 transition-transform">🎯</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Defense Slide Prep & Response</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Creating professional oral defense presentation decks and writing point-by-point committee feedback response letters.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-rose-600 hover:text-rose-700 dark:text-rose-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Defense Prep <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         ACADEMIC DATABASES & STATISTICAL SOFTWARE MATRIX
    =================================================== --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="inline-block bg-emerald-100 text-emerald-700 dark:bg-emerald-950/80 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-emerald-200 dark:border-emerald-800">Tools & Repositories</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">Statistical Tools & Journal Repositories</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-400 text-base">Our PhD researchers master advanced software tools and global academic databases.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-8 gap-4 text-center">
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">SPSS</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">R Studio</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">STATA</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">NVivo</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">JSTOR</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">PubMed</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">Web of Science</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">IEEE Xplore</div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         CITATIONS & FORMATTING STANDARDS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-purple-100 text-purple-700 dark:bg-purple-950/80 dark:text-purple-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-purple-200 dark:border-purple-800">Citation Compliance</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Mastery of All University Citation Manuals</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">In-text citations, DOI links, footnotes, and bibliographies formatted strictly to your university's manual.</p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-blue-400/50 transition-colors shadow-sm">
                    <div class="text-blue-600 dark:text-blue-400 font-black text-xl mb-2">APA 7th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for Psychology, Nursing, Social Sciences, and Education dissertations with DOI reference formatting.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-indigo-400/50 transition-colors shadow-sm">
                    <div class="text-indigo-600 dark:text-indigo-400 font-black text-xl mb-2">MLA 9th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for Literature, Humanities, and Cultural Studies with container-based Works Cited formatting.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-purple-400/50 transition-colors shadow-sm">
                    <div class="text-purple-600 dark:text-purple-400 font-black text-xl mb-2">Chicago / Turabian 17th</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for History, Fine Arts, and Political Science dissertations with Footnotes/Endnotes formatting.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-emerald-400/50 transition-colors shadow-sm">
                    <div class="text-emerald-600 dark:text-emerald-400 font-black text-xl mb-2">Harvard Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Widely used across US business schools and economics departments for parenthetical referencing.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-rose-400/50 transition-colors shadow-sm">
                    <div class="text-rose-600 dark:text-rose-400 font-black text-xl mb-2">IEEE Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Numbered bracket citation standard for Electrical Engineering, Computer Science, and STEM dissertations.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-amber-400/50 transition-colors shadow-sm">
                    <div class="text-amber-600 dark:text-amber-400 font-black text-xl mb-2">OSCOLA & Legal</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Specialized legal citation style for LLM theses, SJD dissertations, and statutory legal research.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         7 DISSERTATION PITFALLS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-rose-100 text-rose-700 dark:bg-rose-950/80 dark:text-rose-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-rose-200 dark:border-rose-800">Grade Protection</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">7 Dissertation Pitfalls Fixed</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our PhD scholars eliminate common committee objections before submission.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $pitfalls = [
                    ['title' => 'Methodology-Research Question Mismatch', 'desc' => 'Choosing quantitative surveys for questions that require qualitative phenomenology.'],
                    ['title' => 'Insufficient Sample Size Power', 'desc' => 'Failing to conduct G*Power calculations, resulting in statistically underpowered results.'],
                    ['title' => 'Weak Conceptual Framework', 'desc' => 'Failing to connect Chapter 2 theoretical literature to Chapter 4 empirical data variables.'],
                    ['title' => 'Endless Committee Revision Loops', 'desc' => 'Failing to address committee feedback with a structured point-by-point response letter.'],
                    ['title' => 'Superficial Data Discussion (Ch 5)', 'desc' => 'Reporting numbers in Chapter 4 without explaining their broader academic implications in Chapter 5.'],
                    ['title' => 'Inconsistent Citation Formatting', 'desc' => 'Mixing APA 6th and 7th rules or missing DOI links in the reference list.'],
                    ['title' => 'Unrealistic Scope & Timelines', 'desc' => 'Overcommitting to unrealistic data collection timelines that cause graduation delays.'],
                ];
                @endphp
                @foreach($pitfalls as $index => $p)
                <div class="flex gap-5 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 hover:border-rose-300 dark:hover:border-rose-800 transition-colors shadow-sm">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-rose-500 text-white font-black text-base shadow-md shadow-rose-500/20">
                        {{ $index + 1 }}
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-lg mb-1">{{ $p['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">{{ $p['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================================================
         EXPERT PHD DISSERTATION COMMITTEE MEMBERS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Vetted PhD Faculty</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Meet Our Top Dissertation Committee Scholars</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Every scholar holds a PhD degree from top US universities and has served on graduate committees.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                $scholars = [
                    [
                        'name' => 'Dr. Alexander Hayes',
                        'degree' => 'PhD, Educational Leadership — Harvard University',
                        'specialty' => 'Doctoral Prospectus, Mixed-Methods & Chapter 1-5 Assistance',
                        'orders' => '1,840+',
                        'rating' => '4.99',
                        'badge' => 'Former Committee Chair'
                    ],
                    [
                        'name' => 'Dr. Rebecca Sterling',
                        'degree' => 'PhD, Biostatistics & Public Health — Johns Hopkins University',
                        'specialty' => 'SPSS/R Quantitative Analysis, Survival Analysis & Chapter 4 Data',
                        'orders' => '1,620+',
                        'rating' => '4.98',
                        'badge' => 'Biostatistics Fellow'
                    ],
                    [
                        'name' => 'Prof. Jonathan Vance',
                        'degree' => 'PhD, Business Administration — Stanford University',
                        'specialty' => 'DBA & PhD Dissertations, SEM Structural Modeling & APA 7th',
                        'orders' => '1,450+',
                        'rating' => '4.97',
                        'badge' => 'Senior Doctoral Editor'
                    ]
                ];
                @endphp

                @foreach($scholars as $s)
                <div class="rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-950 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800">{{ $s['badge'] }}</span>
                            <div class="flex items-center gap-1 text-amber-400 text-xs font-bold">
                                ★★★★★ <span class="text-slate-800 dark:text-slate-200 ml-1">{{ $s['rating'] }}</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ $s['name'] }}</h3>
                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400 mt-1 mb-4">{{ $s['degree'] }}</p>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                            <strong>Specialization:</strong> {{ $s['specialty'] }}
                        </p>
                    </div>

                    <div class="pt-5 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs sm:text-sm">
                        <span class="text-slate-500 dark:text-slate-400 font-medium">{{ $s['orders'] }} dissertations completed</span>
                        <a href="{{ route('order') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Hire Scholar →</a>
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
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Everything you need to know before hiring our thesis & dissertation writing team.</p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">
                @php
                $faqs = [
                    [
                        'q' => 'Can I order individual dissertation chapters instead of a full dissertation?',
                        'a' => 'Yes. You can order specific chapters, such as Chapter 1 (Introduction), Chapter 2 (Literature Review), Chapter 3 (Methodology), Chapter 4 (Results & SPSS Analysis), or Chapter 5 (Discussion).'
                    ],
                    [
                        'q' => 'Who will assist with my thesis or PhD dissertation?',
                        'a' => 'Your project is assigned to a scholar holding a PhD from a top US university in your exact discipline who has served on dissertation committees and published peer-reviewed research.'
                    ],
                    [
                        'q' => 'Do you perform statistical analysis in SPSS, R, STATA, or NVivo?',
                        'a' => 'Yes. Our quantitative & qualitative data specialists run complex statistical models (SEM, ANOVA, Regression) in SPSS, R, STATA, and thematic coding in NVivo, delivering complete raw data outputs and written interpretations.'
                    ],
                    [
                        'q' => 'Are your dissertations 100% original and Turnitin-verified?',
                        'a' => 'Every dissertation is written 100% from scratch. We scan every document using Turnitin and advanced AI detection tools, attaching an official similarity report with your order.'
                    ],
                    [
                        'q' => 'What if my committee requests revisions on my draft?',
                        'a' => 'We offer unlimited free revisions until your dissertation committee approves your draft. We also provide point-by-point response letters to address committee feedback directly.'
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
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight">Ready to Defend Your Dissertation with Confidence?</h2>
            <p class="mt-5 text-blue-100 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                Connect with an expert US PhD dissertation scholar today. Get a publication-grade, committee-ready manuscript delivered before your defense.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('order') }}" class="group inline-flex items-center gap-3 rounded-2xl bg-white px-9 py-4 text-lg font-bold text-blue-700 shadow-xl hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                    Order Thesis / Dissertation Now
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
