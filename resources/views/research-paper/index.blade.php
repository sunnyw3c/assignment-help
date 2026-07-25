@extends('layouts.app')

@section('title', 'Research Paper Help USA | PhD Research Paper Writers')
@section('description', 'Get expert research paper help in USA. Original empirical papers, literature reviews & statistical analysis written by PhD researchers with 24/7 support.')
@section('keywords', 'research paper help, research paper help USA, research paper writing service, write my research paper, PhD research writers, literature review help, empirical research paper, spss data analysis help')

@push('head')
    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Research Paper Help USA | PhD Research Paper Writers">
    <meta property="og:description" content="Get expert research paper help in USA. Original empirical papers, literature reviews & statistical analysis written by PhD researchers with 24/7 support.">
    <meta property="og:image" content="{{ asset('images/research_paper_hero_banner.png') }}">

    <!-- Twitter Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Research Paper Help USA | PhD Research Paper Writers">
    <meta property="twitter:description" content="Get expert research paper help in USA. Original empirical papers, literature reviews & statistical analysis written by PhD researchers with 24/7 support.">
    <meta property="twitter:image" content="{{ asset('images/research_paper_hero_banner.png') }}">

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
                "name": "Professional Research Paper Help USA",
                "provider": { "@@id": "{{ url('/') }}#organization" },
                "serviceType": "Academic Research Paper Assistance",
                "areaServed": {
                    "@@type": "Country",
                    "name": "United States"
                },
                "description": "Custom academic research paper assistance for US university students. Original empirical studies, literature reviews, and statistical data analysis written by native PhD researchers.",
                "offers": {
                    "@@type": "Offer",
                    "priceCurrency": "USD",
                    "price": "15.00",
                    "priceValidUntil": "2027-12-31",
                    "availability": "https://schema.org/InStock"
                },
                "aggregateRating": {
                    "@@type": "AggregateRating",
                    "ratingValue": "4.9",
                    "reviewCount": "4210",
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
                        "name": "Research Paper Help",
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
                        "name": "Who will write my research paper?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Your research paper is assigned to a subject-matter expert holding a PhD or Master's degree from a top US university with published research experience in peer-reviewed journals."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Do you provide statistical analysis in SPSS, R, or Python for empirical papers?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. Our quantitative researchers perform advanced data analysis using SPSS, R, Python, STATA, and NVivo for qualitative coding, providing output logs and data interpretation."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Are your research papers 100% original and verified by Turnitin?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Every research paper is written from scratch using peer-reviewed sources. We scan every paper with Turnitin and AI detection tools, attaching a free similarity report upon request."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Can I get urgent research paper help with tight deadlines?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. We accommodate express research paper requests with turnarounds as fast as 6 to 12 hours. Express orders are assigned immediately to senior PhD researchers."
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
        title="Professional Research Paper Help USA"
        subtitle="Need high-impact academic research assistance? Get 100% original, peer-reviewed research paper writing help from US-based PhD researchers. Rigorous methodology, SPSS/R data analysis, and flawless APA/IEEE citations delivered on time." 
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
                    <span class="text-xs text-slate-500 dark:text-slate-400">(4,210+ US Research Papers)</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">38</strong> PhD Researchers Online</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-semibold px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"/></svg>
                    <span>100% Peer-Reviewed Sources (JSTOR / IEEE)</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-blue-600 dark:text-blue-400 font-semibold px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    <span>0% AI & Turnitin Verified</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 1: RESEARCH METHODOLOGY BLUEPRINT
    =================================================== --}}
    <section class="relative py-20 lg:py-24 bg-gradient-to-b from-slate-950 via-slate-900 to-indigo-950 text-white overflow-hidden" id="research-methodology">
        <!-- Background Ambient Glow -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-blue-600/15 rounded-full filter blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-600/15 rounded-full filter blur-3xl pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/30 text-blue-400 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        Rigorous Empirical Framework
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        End-to-End Academic Research <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">Engineered by PhD Specialists</span>
                    </h2>
                    <p class="mt-5 text-slate-300 leading-relaxed text-base sm:text-lg">
                        Executing a publication-grade research paper requires methodological precision, critical literature synthesis, and empirical validation. Our team guides your paper through all critical academic phases.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-blue-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-black text-lg shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform">1</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Hypothesis & Problem Statement Formulation</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Defining precise research questions, null/alternative hypotheses, and clear scope alignment with target academic rubrics.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white font-black text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-110 transition-transform">2</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Peer-Reviewed Literature Synthesis</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Systematically surveying current studies from JSTOR, PubMed, ScienceDirect, and IEEE to identify research gaps and theoretical frameworks.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 text-white font-black text-lg shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform">3</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Data Analysis & Empirical Findings (SPSS / R / Python)</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Executing quantitative statistical tests (ANOVA, Regression, Chi-Square) or qualitative thematic coding with full transparency and data logs.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-2xl opacity-40 group-hover:opacity-80 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/lab_data_analysis_preview.png') }}" 
                             alt="Empirical Research Data Analysis and Statistical Synthesis Preview" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 2: PLAGIARISM & AI CHECK SHOWCASE
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div class="order-2 lg:order-1 relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 via-teal-500 to-cyan-500 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/lab_report_hero_banner.png') }}" 
                             alt="Peer-Reviewed Scholarly Research and Turnitin Originality Verification" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-300 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Authentic Scholarly Standards
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Zero Plagiarism & 0% AI Content Guarantee
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        University plagiarism checkers and AI detection algorithms are stricter than ever. Every research paper we produce is written 100% from scratch by qualified PhD researchers using verified academic sources.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-emerald-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-500 text-white font-black text-sm shadow-md shadow-emerald-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Official Turnitin originality report attached to every research order</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-emerald-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-500 text-white font-black text-sm shadow-md shadow-emerald-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Verified 0% AI score on CopyLeaks, GPTZero & Turnitin AI Detection</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-emerald-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-500 text-white font-black text-sm shadow-md shadow-emerald-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Primary and secondary peer-reviewed references cited accurately</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 3: SCHOLAR WORKSTATION SHOWCASE
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-100 dark:bg-blue-950/60 border border-blue-300 dark:border-blue-800 text-blue-700 dark:text-blue-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-500 animate-pulse"></span>
                        Academic Excellence
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Tailored for US Undergraduate, Master's & Doctoral Research
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        Whether you need a term paper, an empirical thesis chapter, or a complex meta-analysis, our PhD writers adapt their research methodology to match your university's exact rubric standards.
                    </p>

                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-blue-600 dark:text-blue-400 font-bold text-lg mb-1">Empirical Studies</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Quantitative data analysis, SPSS output interpretation, and experimental design.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-indigo-600 dark:text-indigo-400 font-bold text-lg mb-1">Literature Reviews</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Systematic thematic synthesis identifying research gaps in JSTOR and IEEE.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-purple-600 dark:text-purple-400 font-bold text-lg mb-1">Case Study Research</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">In-depth qualitative inquiry using NVivo coding, field data, and industry frameworks.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-emerald-600 dark:text-emerald-400 font-bold text-lg mb-1">Thesis & Dissertations</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Comprehensive chapter assistance from proposal defense to final discussion.</p>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/research_paper_hero_banner.png') }}" 
                             alt="Professional PhD Research Paper Workstation Environment" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         RESEARCH PAPER CATEGORIES & TYPES
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950" id="research-types">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Specialized Disciplines</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Types of Research Papers We Write</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our PhD researchers specialize across STEM, Humanities, Business, Medicine, and Social Sciences.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Category 1 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 dark:bg-blue-950/60 text-2xl group-hover:scale-110 transition-transform">📊</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Quantitative & Empirical Papers</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Hypothesis testing, regression modeling, survey design, and statistical data execution in SPSS, R, Python, or STATA.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Quantitative Paper <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Category 2 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 text-2xl group-hover:scale-110 transition-transform">📚</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Systematic Literature Reviews</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Comprehensive PRISMA literature reviews synthesizing hundreds of peer-reviewed articles to identify research gaps.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Literature Review <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Category 3 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-50 dark:bg-purple-950/60 text-2xl group-hover:scale-110 transition-transform">🔬</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Qualitative Case Studies</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Thematic analysis, interview transcript coding (NVivo), grounded theory, and qualitative research design.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.case-study.index') }}" class="text-sm font-bold text-purple-600 hover:text-purple-700 dark:text-purple-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Case Study Research Help <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Category 4 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 dark:bg-emerald-950/60 text-2xl group-hover:scale-110 transition-transform">💻</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Computer Science & STEM Papers</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Algorithm complexity analysis, machine learning model evaluation, IEEE formatted technical research papers.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order STEM Research Paper <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Category 5 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-amber-500 to-orange-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 dark:bg-amber-950/60 text-2xl group-hover:scale-110 transition-transform">🏥</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Nursing & Medical Papers</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Evidence-based practice (EBP) papers, clinical trial reviews, PubMed references, and APA 7th health research.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-amber-600 hover:text-amber-700 dark:text-amber-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Nursing Research <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Category 6 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-rose-500 to-red-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-50 dark:bg-rose-950/60 text-2xl group-hover:scale-110 transition-transform">📜</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Thesis & Dissertation Chapters</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Proposal writing, methodology design, results chapter drafting, and comprehensive dissertation defense prep.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-rose-600 hover:text-rose-700 dark:text-rose-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Dissertation Help <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         ACADEMIC DATABASES INTEGRATION SHOWCASE
    =================================================== --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="inline-block bg-emerald-100 text-emerald-700 dark:bg-emerald-950/80 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-emerald-200 dark:border-emerald-800">Academic Sources</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">Direct Access to Global Journal Databases</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-400 text-base">We cite recent, high-impact peer-reviewed journals to satisfy the strictest US university rubrics.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4 text-center">
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">
                    JSTOR
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">
                    PubMed
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">
                    IEEE Xplore
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">
                    ScienceDirect
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">
                    Scopus
                </div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">
                    Web of Science
                </div>
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
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Mastery of All Citation Formats</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">In-text citations, DOI links, footnotes, and bibliographies formatted strictly to your department's manual.</p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-blue-400/50 transition-colors shadow-sm">
                    <div class="text-blue-600 dark:text-blue-400 font-black text-xl mb-2">APA 7th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for Psychology, Nursing, Social Sciences, and Business research papers with DOI reference formatting.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-indigo-400/50 transition-colors shadow-sm">
                    <div class="text-indigo-600 dark:text-indigo-400 font-black text-xl mb-2">MLA 9th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for English Literature, Media, and Cultural Studies with container-based Works Cited formatting.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-purple-400/50 transition-colors shadow-sm">
                    <div class="text-purple-600 dark:text-purple-400 font-black text-xl mb-2">Chicago / Turabian 17th</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for History, Art, and Political Science with Footnotes/Endnotes or Author-Date citations.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-emerald-400/50 transition-colors shadow-sm">
                    <div class="text-emerald-600 dark:text-emerald-400 font-black text-xl mb-2">Harvard Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Widely used across US economics and management departments for parenthetical referencing.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-rose-400/50 transition-colors shadow-sm">
                    <div class="text-rose-600 dark:text-rose-400 font-black text-xl mb-2">IEEE Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Numbered bracket citation standard for Engineering, Computer Science, and Technical research.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-amber-400/50 transition-colors shadow-sm">
                    <div class="text-amber-600 dark:text-amber-400 font-black text-xl mb-2">OSCOLA & Legal</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Specialized legal citation style for Law research, case law commentary, and statutory analysis.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         7 COMMON RESEARCH PAPER PITFALLS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-rose-100 text-rose-700 dark:bg-rose-950/80 dark:text-rose-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-rose-200 dark:border-rose-800">Grade Protection</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">7 Research Paper Pitfalls Fixed</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our PhD researchers systematically eliminate errors that cost students top marks.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $pitfalls = [
                    ['title' => 'Weak Research Gap Formulation', 'desc' => 'Failing to establish why the study is necessary relative to existing literature.'],
                    ['title' => 'Flawed Statistical Methodology', 'desc' => 'Applying wrong test models (e.g. running linear regression without checking normality).'],
                    ['title' => 'Superficial Literature Synthesis', 'desc' => 'Summarizing papers individually instead of synthesizing themes and trends.'],
                    ['title' => 'Outdated or Uncredible Sources', 'desc' => 'Citing blogs or outdated papers instead of peer-reviewed journals from the last 5 years.'],
                    ['title' => 'Inconsistent In-Text Citations', 'desc' => 'Mixing APA and Chicago rules or leaving cited works out of the reference list.'],
                    ['title' => 'Overstated Discussion Claims', 'desc' => 'Drawing conclusions that exceed empirical data findings without stating study limitations.'],
                    ['title' => 'Rubric Misalignment', 'desc' => 'Failing to meet specific university section weighting and formatting requirements.'],
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
         EXPERT PHD RESEARCHERS SHOWCASE
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Vetted PhD Faculty</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Meet Our Top-Rated Research Specialists</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Every researcher holds a PhD or Master's degree from top US institutions with extensive publishing credentials.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                $researchers = [
                    [
                        'name' => 'Dr. Robert Chen',
                        'degree' => 'PhD, Applied Statistics — MIT',
                        'specialty' => 'SPSS/R Quantitative Analysis, Econometrics & Data Modeling',
                        'orders' => '1,650+',
                        'rating' => '4.99',
                        'badge' => 'Senior Research Fellow'
                    ],
                    [
                        'name' => 'Dr. Katherine Sterling',
                        'degree' => 'PhD, Clinical Psychology — Stanford University',
                        'specialty' => 'Qualitative Research, APA 7th Literature Reviews & Medical Papers',
                        'orders' => '1,410+',
                        'rating' => '4.97',
                        'badge' => 'PhD Faculty Specialist'
                    ],
                    [
                        'name' => 'Prof. David Thorne',
                        'degree' => 'PhD, Computer Science — Columbia University',
                        'specialty' => 'IEEE Technical Research, AI Model Evaluation & STEM Papers',
                        'orders' => '1,120+',
                        'rating' => '4.98',
                        'badge' => 'STEM Lead Writer'
                    ]
                ];
                @endphp

                @foreach($researchers as $r)
                <div class="rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-950 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800">{{ $r['badge'] }}</span>
                            <div class="flex items-center gap-1 text-amber-400 text-xs font-bold">
                                ★★★★★ <span class="text-slate-800 dark:text-slate-200 ml-1">{{ $r['rating'] }}</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ $r['name'] }}</h3>
                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400 mt-1 mb-4">{{ $r['degree'] }}</p>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                            <strong>Specialization:</strong> {{ $r['specialty'] }}
                        </p>
                    </div>

                    <div class="pt-5 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs sm:text-sm">
                        <span class="text-slate-500 dark:text-slate-400 font-medium">{{ $r['orders'] }} papers completed</span>
                        <a href="{{ route('order') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Hire Researcher →</a>
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
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Everything you need to know before hiring our research paper writing team.</p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">
                @php
                $faqs = [
                    [
                        'q' => 'Who will write my research paper?',
                        'a' => 'Your paper is matched to a researcher holding a PhD or Master\'s degree in your specific academic field. We verify academic credentials and writing background before assignment.'
                    ],
                    [
                        'q' => 'Do you handle quantitative data analysis in SPSS, R, or Python?',
                        'a' => 'Yes. Our quantitative researchers execute advanced statistical tests (ANOVA, Regression, Chi-Square, SEM) in SPSS, R, Python, and STATA, delivering clean data output files alongside full text interpretation.'
                    ],
                    [
                        'q' => 'Will my research paper be 100% original and Turnitin-verified?',
                        'a' => 'Every research paper is drafted from scratch using peer-reviewed sources from JSTOR, PubMed, and IEEE. We attach a free official Turnitin originality report with your order.'
                    ],
                    [
                        'q' => 'Can you write urgent research papers on short deadlines?',
                        'a' => 'Yes. We accommodate urgent research paper requests with express turnarounds as short as 6 to 12 hours. Express orders are assigned immediately to available senior PhD researchers.'
                    ],
                    [
                        'q' => 'What if my research paper needs revisions?',
                        'a' => 'We offer 21 days of unlimited free revisions within your original prompt instructions. Any required tweaks are handled promptly within 24 hours.'
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
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight">Ready to Publish a Top-Tier Research Paper?</h2>
            <p class="mt-5 text-blue-100 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                Connect with an expert US PhD researcher today. Get an original, peer-reviewed paper with flawless methodology delivered before your deadline.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('order') }}" class="group inline-flex items-center gap-3 rounded-2xl bg-white px-9 py-4 text-lg font-bold text-blue-700 shadow-xl hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                    Order Research Paper Now
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
