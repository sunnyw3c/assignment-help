@extends('layouts.app')

@section('title', 'Literature Review Help USA | PhD Literature Review Writers')
@section('description', 'Get expert literature review help in USA. Comprehensive synthesis, PRISMA systematic methodology & research gap identification by PhD writers with 24/7 support.')
@section('keywords', 'literature review help, literature review help USA, literature review writing service, write my literature review, PRISMA systematic literature review, thesis literature review, dissertation literature review help, literature synthesis')

@push('head')
    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Literature Review Help USA | PhD Literature Review Writers">
    <meta property="og:description" content="Get expert literature review help in USA. Comprehensive synthesis, PRISMA systematic methodology & research gap identification by PhD writers with 24/7 support.">
    <meta property="og:image" content="{{ asset('images/books-stack.png') }}">

    <!-- Twitter Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Literature Review Help USA | PhD Literature Review Writers">
    <meta property="twitter:description" content="Get expert literature review help in USA. Comprehensive synthesis, PRISMA systematic methodology & research gap identification by PhD writers with 24/7 support.">
    <meta property="twitter:image" content="{{ asset('images/books-stack.png') }}">

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
                "name": "Professional Literature Review Help USA",
                "provider": { "@@id": "{{ url('/') }}#organization" },
                "serviceType": "Academic Literature Review Writing Assistance",
                "areaServed": {
                    "@@type": "Country",
                    "name": "United States"
                },
                "description": "Custom academic literature review writing assistance for US university students. Systematic PRISMA reviews, thematic synthesis, and research gap identification by native PhD writers.",
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
                    "reviewCount": "2850",
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
                        "name": "Literature Review Help",
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
                        "name": "What is the difference between an annotated bibliography and a literature review?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "An annotated bibliography lists sources with individual summaries. A literature review synthesizes sources thematically, analyzing connections, theoretical frameworks, and research gaps."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Do you write PRISMA systematic literature reviews?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. Our PhD researchers execute systematic reviews following PRISMA guidelines, including search strategy matrices, inclusion/exclusion criteria, and flowcharts."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "How many peer-reviewed sources do you include in a literature review?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "We tailor source counts to your rubric requirements, typically incorporating 20 to 100+ recent peer-reviewed journal articles from JSTOR, PubMed, Web of Science, and IEEE."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Are your literature reviews 100% original and Turnitin-verified?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Every literature review is written completely from scratch. We run every document through Turnitin and AI detection tools, attaching a free similarity report upon request."
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
        title="Professional Literature Review Help USA"
        subtitle="Struggling to synthesize complex academic studies or identify research gaps? Get expert, 100% original literature review writing help from US PhD researchers. PRISMA systematic reviews, theoretical framework mapping, and APA/IEEE citations delivered on time." 
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
                    <span class="text-xs text-slate-500 dark:text-slate-400">(2,850+ Literature Reviews)</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">34</strong> PhD Researchers Online</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-semibold px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"/></svg>
                    <span>PRISMA & Systematic Review Compliant</span>
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
         VISUAL FEATURE 1: LITERATURE SYNTHESIS BLUEPRINT
    =================================================== --}}
    <section class="relative py-20 lg:py-24 bg-gradient-to-b from-slate-950 via-slate-900 to-indigo-950 text-white overflow-hidden" id="literature-synthesis">
        <!-- Background Ambient Glow -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-blue-600/15 rounded-full filter blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-600/15 rounded-full filter blur-3xl pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/30 text-blue-400 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        Rigorous Synthesis Methodology
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        Critical Literature Synthesis <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">That Establishes Research Gaps</span>
                    </h2>
                    <p class="mt-5 text-slate-300 leading-relaxed text-base sm:text-lg">
                        A top-scoring literature review goes far beyond summarizing sources individually. It synthesizes scholarly perspectives, maps theoretical frameworks, and justifies your research questions.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-blue-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-black text-lg shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform">1</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Systematic Source Identification</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Searching JSTOR, PubMed, Web of Science, and IEEE for seminal works, current studies (last 5 years), and peer-reviewed articles.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white font-black text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-110 transition-transform">2</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Thematic & Conceptual Synthesis</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Grouping sources into logical thematic matrices, comparing contrasting arguments, and highlighting methodological patterns.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 text-white font-black text-lg shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform">3</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Unanswered Research Gap Formulation</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Identifying clear theoretical, empirical, or methodological gaps that justify your specific research project or thesis statement.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-2xl opacity-40 group-hover:opacity-80 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/books-stack.png') }}" 
                             alt="Academic Literature Review Library Books and Source Synthesis Preview" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 2: THEORETICAL FRAMEWORK MAPPING
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div class="order-2 lg:order-1 relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/case-study-frameworks.png') }}" 
                             alt="Theoretical and Conceptual Framework Mapping Diagram" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-100 dark:bg-indigo-950/60 border border-indigo-300 dark:border-indigo-800 text-indigo-700 dark:text-indigo-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-indigo-500 animate-pulse"></span>
                        Conceptual Framework Mastery
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Theoretical Framework & Variable Mapping
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        A strong literature review anchors your paper to established academic theories. We construct clear theoretical and conceptual framework sections that connect variables, theories, and empirical research.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Integration of foundational seminal theories and modern adaptations</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Conceptual model diagrams illustrating independent & dependent variables</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">PRISMA flowcharts for systematic reviews upon request</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 3: 0% AI & TURNITIN SHOWCASE
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-300 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        100% Originality Guarantee
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Zero Plagiarism & 0% AI Content Verified
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        Literature reviews must reflect genuine scholarly engagement, not generic AI summaries. Our PhD researchers write every sentence from scratch, providing verified Turnitin reports with every order.
                    </p>

                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-emerald-600 dark:text-emerald-400 font-bold text-lg mb-1">Turnitin Passed</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Official similarity report demonstrating 0% unquoted text matching.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-blue-600 dark:text-blue-400 font-bold text-lg mb-1">0% AI Score</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Scanned on CopyLeaks, GPTZero, and Turnitin AI detection tools.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-indigo-600 dark:text-indigo-400 font-bold text-lg mb-1">Seminal & Recent Sources</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Balancing historical foundational works with 2021-2026 peer-reviewed studies.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-purple-600 dark:text-purple-400 font-bold text-lg mb-1">Full Citation Accuracy</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Every in-text citation matches the bibliography with DOI links.</p>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/science_tutors_lab.png') }}" 
                             alt="Peer-Reviewed Literature Database Searching and Originality Verification" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         TYPES OF LITERATURE REVIEWS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950" id="review-types">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Comprehensive Types</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Types of Literature Reviews We Write</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our PhD researchers handle all literature review methodologies across all academic disciplines.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Type 1 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 dark:bg-blue-950/60 text-2xl group-hover:scale-110 transition-transform">📋</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Systematic Reviews (PRISMA)</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Following PRISMA guidelines with search strategies, eligibility criteria, study quality appraisal, and flowcharts.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Systematic Review <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 2 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 text-2xl group-hover:scale-110 transition-transform">📖</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Narrative & Critical Reviews</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Synthesizing research themes, critical evaluation of methodology, and comprehensive overview of academic fields.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Narrative Review <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 3 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-50 dark:bg-purple-950/60 text-2xl group-hover:scale-110 transition-transform">🔍</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Scoping Reviews & Mapping</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Mapping available evidence, clarifying key concepts, and identifying nature/extent of research in emerging topics.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-purple-600 hover:text-purple-700 dark:text-purple-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Scoping Review <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 4 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 dark:bg-emerald-950/60 text-2xl group-hover:scale-110 transition-transform">📊</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Meta-Analyses</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Statistical pooling of quantitative effect sizes across multiple empirical studies for conclusive evidence synthesis.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.research-paper.index') }}" class="text-sm font-bold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Research Paper Services <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 5 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-amber-500 to-orange-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 dark:bg-amber-950/60 text-2xl group-hover:scale-110 transition-transform">💡</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Integrative Reviews</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Combining experimental and non-experimental research to provide a comprehensive understanding of healthcare and social phenomena.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-amber-600 hover:text-amber-700 dark:text-amber-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Integrative Review <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 6 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-rose-500 to-red-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-50 dark:bg-rose-950/60 text-2xl group-hover:scale-110 transition-transform">📜</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Thesis & Dissertation Chapters</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Drafting Chapter 2 of Master's theses and PhD dissertations with extensive theoretical and empirical literature coverage.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-rose-600 hover:text-rose-700 dark:text-rose-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Thesis Literature Chapter <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         ACADEMIC DATABASES MATRIX
    =================================================== --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="inline-block bg-emerald-100 text-emerald-700 dark:bg-emerald-950/80 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-emerald-200 dark:border-emerald-800">Scholarly Repositories</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">Access to Premier Academic Databases</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-400 text-base">We systematically index sources across all major global repositories.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-8 gap-4 text-center">
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">JSTOR</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">PubMed</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">Web of Science</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">Scopus</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">IEEE Xplore</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">ProQuest</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">PsycINFO</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-xs">ScienceDirect</div>
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
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for Psychology, Nursing, Social Sciences, and Business literature reviews with DOI reference formatting.</p>
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
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Numbered bracket citation standard for Engineering, Computer Science, and Technical reviews.</p>
                </div>
                <div class="rounded-3xl bg-white dark:bg-slate-900 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-amber-400/50 transition-colors shadow-sm">
                    <div class="text-amber-600 dark:text-amber-400 font-black text-xl mb-2">OSCOLA & Legal</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Specialized legal citation style for Law literature reviews, case law commentary, and statutory analysis.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         7 LITERATURE REVIEW PITFALLS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-rose-100 text-rose-700 dark:bg-rose-950/80 dark:text-rose-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-rose-200 dark:border-rose-800">Grade Protection</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">7 Literature Review Errors Fixed</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our PhD writers systematically fix errors that cause literature reviews to lose marks.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $pitfalls = [
                    ['title' => 'Summary Listing Instead of Synthesis', 'desc' => 'Listing studies one by one without connecting themes, patterns, or contrasting perspectives.'],
                    ['title' => 'Missing Seminal & Foundational Works', 'desc' => 'Focusing only on recent articles while ignoring core historical theories that define the discipline.'],
                    ['title' => 'Weak or Missing Research Gap Definition', 'desc' => 'Failing to highlight unanswered questions or empirical gaps that justify the study.'],
                    ['title' => 'Over-reliance on Low-Quality Sources', 'desc' => 'Citing non-peer-reviewed websites instead of high-impact journal articles.'],
                    ['title' => 'Lack of Conceptual Framework', 'desc' => 'Failing to present a coherent theoretical framework that guides literature categorization.'],
                    ['title' => 'Inconsistent Citation Formatting', 'desc' => 'Mixing APA and MLA styles or missing DOI links in the bibliography.'],
                    ['title' => 'Passive Tone & Uncritical Acceptance', 'desc' => 'Accepting published findings without evaluating study limitations and sample biases.'],
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
         EXPERT PHD LITERATURE SPECIALISTS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Vetted PhD Faculty</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Meet Our Top Literature Review Writers</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Every writer holds a PhD or Master's degree with extensive publishing credentials.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                $specialists = [
                    [
                        'name' => 'Dr. Eleanor Vance',
                        'degree' => 'PhD, English & Comparative Literature — Columbia University',
                        'specialty' => 'Thematic Literature Synthesis & MLA 9th Citation Standards',
                        'orders' => '1,520+',
                        'rating' => '4.99',
                        'badge' => 'Top 1% Literature Specialist'
                    ],
                    [
                        'name' => 'Dr. Aris Thorne',
                        'degree' => 'PhD, Public Health & Medicine — Oxford University',
                        'specialty' => 'PRISMA Systematic Reviews, Meta-Analyses & PubMed Searching',
                        'orders' => '1,340+',
                        'rating' => '4.98',
                        'badge' => 'Systematic Review Fellow'
                    ],
                    [
                        'name' => 'Prof. Julian Mercer',
                        'degree' => 'PhD, Sociology & Behavioral Science — Harvard University',
                        'specialty' => 'Theoretical Framework Mapping & Qualitative Literature Reviews',
                        'orders' => '1,190+',
                        'rating' => '4.97',
                        'badge' => 'Senior Academic Editor'
                    ]
                ];
                @endphp

                @foreach($specialists as $s)
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
                        <span class="text-slate-500 dark:text-slate-400 font-medium">{{ $s['orders'] }} reviews completed</span>
                        <a href="{{ route('order') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Hire Specialist →</a>
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
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Everything you need to know before hiring our literature review team.</p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">
                @php
                $faqs = [
                    [
                        'q' => 'What is the difference between an annotated bibliography and a literature review?',
                        'a' => 'An annotated bibliography lists sources with individual summaries. A literature review synthesizes sources thematically, analyzing connections, theoretical frameworks, and research gaps.'
                    ],
                    [
                        'q' => 'Do you write PRISMA systematic literature reviews?',
                        'a' => 'Yes. Our PhD researchers execute systematic reviews following PRISMA guidelines, including search strategy matrices, inclusion/exclusion criteria, and flowcharts.'
                    ],
                    [
                        'q' => 'How many peer-reviewed sources do you include in a literature review?',
                        'a' => 'We tailor source counts to your rubric requirements, typically incorporating 20 to 100+ recent peer-reviewed journal articles from JSTOR, PubMed, Web of Science, and IEEE.'
                    ],
                    [
                        'q' => 'Are your literature reviews 100% original and Turnitin-verified?',
                        'a' => 'Every literature review is written completely from scratch. We run every document through Turnitin and AI detection tools, attaching a free similarity report upon request.'
                    ],
                    [
                        'q' => 'What if my literature review needs revisions?',
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
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight">Ready to Master Your Literature Review?</h2>
            <p class="mt-5 text-blue-100 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                Connect with an expert US PhD literature specialist today. Get a comprehensive, flawlessly cited literature review delivered before your deadline.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('order') }}" class="group inline-flex items-center gap-3 rounded-2xl bg-white px-9 py-4 text-lg font-bold text-blue-700 shadow-xl hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                    Order Literature Review Now
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
