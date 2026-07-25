@extends('layouts.app')

@section('title', 'Presentation Design Help USA | PowerPoint Slide Experts')
@section('description', 'Get expert presentation design help in USA. Custom PowerPoint, Keynote & Google Slides with infographics, data charts & speaker notes by PhD designers.')
@section('keywords', 'presentation design help, presentation design help USA, PowerPoint slide help, Google Slides design, Keynote presentation, thesis defense slides, dissertation presentation design, pitch deck design')

@push('head')
    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Presentation Design Help USA | PowerPoint Slide Experts">
    <meta property="og:description" content="Get expert presentation design help in USA. Custom PowerPoint, Keynote & Google Slides with infographics, data charts & speaker notes by PhD designers.">
    <meta property="og:image" content="{{ asset('images/math_solver_preview.png') }}">

    <!-- Twitter Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Presentation Design Help USA | PowerPoint Slide Experts">
    <meta property="twitter:description" content="Get expert presentation design help in USA. Custom PowerPoint, Keynote & Google Slides with infographics, data charts & speaker notes by PhD designers.">
    <meta property="twitter:image" content="{{ asset('images/math_solver_preview.png') }}">

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
                "name": "Professional Presentation Design Help USA",
                "provider": { "@@id": "{{ url('/') }}#organization" },
                "serviceType": "Academic and Business Presentation Slide Design",
                "areaServed": {
                    "@@type": "Country",
                    "name": "United States"
                },
                "description": "Custom PowerPoint, Google Slides, and Keynote presentation design assistance for US students and professionals. High-impact infographics, professional data charts, custom layouts, and comprehensive speaker notes by expert designers.",
                "offers": {
                    "@@type": "Offer",
                    "priceCurrency": "USD",
                    "price": "10.00",
                    "priceValidUntil": "2027-12-31",
                    "availability": "https://schema.org/InStock"
                },
                "aggregateRating": {
                    "@@type": "AggregateRating",
                    "ratingValue": "4.9",
                    "reviewCount": "4200",
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
                        "name": "Presentation Design Help",
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
                        "name": "What presentation platforms do you support?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "We create and deliver editable presentation slide decks in Microsoft PowerPoint (.pptx), Google Slides, Apple Keynote, Canva, and PDF formats."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Are speaker notes included with my presentation design?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. Every presentation order includes detailed speaker notes written under each slide, providing oral talking points, transition cues, and delivery guidance."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Can you design slides for a thesis or dissertation defense?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. Our academic presentation specialists design professional thesis and dissertation defense slide decks, transforming complex methodology and statistical data into clear visual charts."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Can I request urgent express presentation design?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. We accommodate express presentation requests with turnarounds as fast as 6 to 12 hours. Express orders are assigned immediately to active senior designers."
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
        title="Professional Presentation Design Help USA"
        subtitle="Need high-impact PowerPoint, Google Slides, or Keynote presentations? Get 100% custom, visually stunning slide decks from expert US designers. Data infographics, clean visual layouts, and detailed speaker notes delivered on time." 
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
                    <span class="text-xs text-slate-500 dark:text-slate-400">(4,200+ Presentations Designed)</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">36</strong> Slide Designers Online</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-semibold px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"/></svg>
                    <span>PowerPoint, Google Slides & Keynote Compatible</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-blue-600 dark:text-blue-400 font-semibold px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    <span>Detailed Speaker Notes Included</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 1: 4-PHASE PRESENTATION DESIGN BLUEPRINT
    =================================================== --}}
    <section class="relative py-20 lg:py-24 bg-gradient-to-b from-slate-950 via-slate-900 to-indigo-950 text-white overflow-hidden" id="design-blueprint">
        <!-- Background Ambient Glow -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-blue-600/15 rounded-full filter blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-600/15 rounded-full filter blur-3xl pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/30 text-blue-400 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        High-Impact Visual Framework
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        4-Phase Presentation Design <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">Engineered to Captivate Audiences</span>
                    </h2>
                    <p class="mt-5 text-slate-300 leading-relaxed text-base sm:text-lg">
                        A great presentation balances visual clarity, concise message hierarchy, and engaging data graphics. Our designers transform dense text into clear, memorable slide decks.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-blue-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-black text-lg shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform">1</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Phase 1: Storyboard & Content Structuring</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Organizing slide progression, establishing narrative logic, and condensing paragraphs into impactful bullet points.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white font-black text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-110 transition-transform">2</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Phase 2: Visual Layout & Custom Typography</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Applying 16:9 widescreen grids, high-contrast color palettes, custom vector icons, and balanced whitespace.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 text-white font-black text-lg shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform">3</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Phase 3: Data Visualization & Infographics</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Converting complex statistical tables into high-impact bar charts, pie graphs, process diagrams, and timeline graphics.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-2xl opacity-40 group-hover:opacity-80 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/math_solver_preview.png') }}" 
                             alt="Professional Data Visualization Charts and Infographic Presentation Slide Layout" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 2: SPEAKER NOTES & DEFENSE COACHING
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div class="order-2 lg:order-1 relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/math_tutor_marcus.png') }}" 
                             alt="Speaker Notes and Oral Presentation Defense Coaching Visual" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-100 dark:bg-indigo-950/60 border border-indigo-300 dark:border-indigo-800 text-indigo-700 dark:text-indigo-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-indigo-500 animate-pulse"></span>
                        Oral Presentation Preparedness
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Comprehensive Speaker Notes & Oral Delivery Scripts
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        Great slides need a confident speaker. Every presentation design order includes detailed speaker notes written directly beneath each slide, giving you clear talking points, transition cues, and timing estimates.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Word-for-word oral delivery script or bulleted key talking points</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Slide transition phrases and pacing guidelines for timed presentations</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-indigo-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-500 text-white font-black text-sm shadow-md shadow-indigo-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Anticipated committee & audience Q&A response preparations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 3: TECH & ISOMETRIC SLIDE LAYOUTS
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-300 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        Fully Editable Master Files
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        100% Editable PowerPoint & Google Slides Files
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        We deliver open, fully editable slide master files. You can customize text, modify color themes, replace images, or adjust data charts effortlessly before your talk.
                    </p>

                    <div class="mt-8 grid sm:grid-cols-2 gap-4">
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-emerald-600 dark:text-emerald-400 font-bold text-lg mb-1">Microsoft PowerPoint (.pptx)</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Native PowerPoint files with embedded master slides and custom fonts.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-blue-600 dark:text-blue-400 font-bold text-lg mb-1">Google Slides & Keynote</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Cloud-synced Google Slides links and Apple Keynote files.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-indigo-600 dark:text-indigo-400 font-bold text-lg mb-1">Custom Vector Icons</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">High-resolution vector icons and custom infographics.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-sm">
                            <div class="text-purple-600 dark:text-purple-400 font-bold text-lg mb-1">Unlimited Revisions</div>
                            <p class="text-xs text-slate-600 dark:text-slate-400">21 days of free visual adjustments until you are 100% satisfied.</p>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-teal-600 rounded-3xl blur-2xl opacity-30 group-hover:opacity-70 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/coding-isometric.png') }}" 
                             alt="Modern Tech Presentation Slide Deck and Isometric Custom Icon Layout" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         PRESENTATION TYPES COVERED
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950" id="presentation-types">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Complete Presentation Scope</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Types of Presentations We Design</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our designers craft presentation decks across academic, technical, and business domains.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Type 1 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 dark:bg-blue-950/60 text-2xl group-hover:scale-110 transition-transform">🎓</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Thesis & Dissertation Defense Decks</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Academic presentation decks for Master's thesis and PhD dissertation oral defense committees.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.thesis-dissertation.index') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Thesis & Dissertation Services <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 2 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 text-2xl group-hover:scale-110 transition-transform">🎤</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Academic Conference Keynotes</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            High-impact slide decks for symposiums, research conferences, and scholarly keynotes.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Keynote Design <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 3 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-50 dark:bg-purple-950/60 text-2xl group-hover:scale-110 transition-transform">📊</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Business & Pitch Decks</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Investor pitch decks, executive briefings, sales presentations, and corporate slide redesigns.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-purple-600 hover:text-purple-700 dark:text-purple-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Pitch Deck Design <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 4 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 dark:bg-emerald-950/60 text-2xl group-hover:scale-110 transition-transform">🔬</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Research Seminar Slides</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Transforming complex data tables, SPSS outputs, and equations into clear visual charts.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.research-paper.index') }}" class="text-sm font-bold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Research Services <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 5 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-amber-500 to-orange-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 dark:bg-amber-950/60 text-2xl group-hover:scale-110 transition-transform">📚</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Classroom Lecture Decks</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Engaging lecture slides designed for university professors, teaching assistants, and educators.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-amber-600 hover:text-amber-700 dark:text-amber-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Lecture Decks <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Type 6 --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-rose-500 to-red-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-50 dark:bg-rose-950/60 text-2xl group-hover:scale-110 transition-transform">🎨</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Poster Presentation Redesign</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Designing large-format academic research posters for conference display and poster sessions.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-rose-600 hover:text-rose-700 dark:text-rose-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Poster Design <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SUPPORTED PLATFORMS MATRIX
    =================================================== --}}
    <section class="py-16 sm:py-20 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-10">
                <span class="inline-block bg-emerald-100 text-emerald-700 dark:bg-emerald-950/80 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-emerald-200 dark:border-emerald-800">Multi-Platform Compatibility</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white tracking-tight">Compatible Across All Major Platforms</h2>
                <p class="mt-3 text-slate-600 dark:text-slate-400 text-base">Delivered in fully editable formats optimized for your presentation software.</p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-4 text-center">
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">PowerPoint (.pptx)</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">Google Slides</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">Apple Keynote</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">Canva Templates</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">PDF Presentations</div>
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200/80 dark:border-slate-800 font-bold text-slate-800 dark:text-slate-200 text-sm">Prezi Interactive</div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         7 PRESENTATION ERRORS FIXED
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-rose-100 text-rose-700 dark:bg-rose-950/80 dark:text-rose-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-rose-200 dark:border-rose-800">Grade & Impression Protection</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">7 Slide Design Errors Fixed</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Our designers eliminate common mistakes that distract presentation audiences.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $errors = [
                    ['title' => 'Text-Cluttered Wall of Words', 'desc' => 'Pasting dense essay paragraphs on slides instead of visual bulleted highlights.'],
                    ['title' => 'Low-Contrast & Hard-to-Read Fonts', 'desc' => 'Using faint font colors or small font sizes that cannot be read from the back of the room.'],
                    ['title' => 'Amateur Clipart & Low-Res Images', 'desc' => 'Inserting pixelated web images instead of high-resolution vector icons and graphics.'],
                    ['title' => 'Unreadable & Complex Data Tables', 'desc' => 'Displaying raw SPSS tables instead of custom visual bar graphs and pie charts.'],
                    ['title' => 'Missing Speaker Notes & Script', 'desc' => 'Leaving presenters unprepared to speak naturally without reading off the screen.'],
                    ['title' => 'Inconsistent Slide Master Layouts', 'desc' => 'Mixing inconsistent fonts, bullet styles, and header positions across slides.'],
                    ['title' => 'Lack of Visual Hierarchy', 'desc' => 'Failing to guide the audience’s eye to key takeaways and conclusions.'],
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
         EXPERT PHD SLIDE DESIGNERS SHOWCASE
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Vetted Slide Designers</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Meet Our Top Presentation Specialists</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Every designer holds advanced degrees in graphic design, communication, or STEM fields.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                $designers = [
                    [
                        'name' => 'Dr. Victoria Sterling',
                        'degree' => 'MFA, Visual Communication — RISD',
                        'specialty' => 'Academic Defense Decks, Data Visualization & Infographics',
                        'orders' => '1,680+',
                        'rating' => '4.99',
                        'badge' => 'Senior Design Director'
                    ],
                    [
                        'name' => 'Prof. Liam Vance',
                        'degree' => 'PhD, Information Design — MIT',
                        'specialty' => 'STEM Conference Presentations, SPSS Charts & Vector Icons',
                        'orders' => '1,420+',
                        'rating' => '4.98',
                        'badge' => 'STEM Slide Specialist'
                    ],
                    [
                        'name' => 'Dr. Chloe Bennett',
                        'degree' => 'PhD, Educational Technology — Stanford University',
                        'specialty' => 'Speaker Notes, Oral Defense Scripts & Pitch Deck Redesigns',
                        'orders' => '1,250+',
                        'rating' => '4.97',
                        'badge' => 'Presentation Coach'
                    ]
                ];
                @endphp

                @foreach($designers as $d)
                <div class="rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 p-7 shadow-sm flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-950 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800">{{ $d['badge'] }}</span>
                            <div class="flex items-center gap-1 text-amber-400 text-xs font-bold">
                                ★★★★★ <span class="text-slate-800 dark:text-slate-200 ml-1">{{ $d['rating'] }}</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ $d['name'] }}</h3>
                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400 mt-1 mb-4">{{ $d['degree'] }}</p>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                            <strong>Specialization:</strong> {{ $d['specialty'] }}
                        </p>
                    </div>

                    <div class="pt-5 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs sm:text-sm">
                        <span class="text-slate-500 dark:text-slate-400 font-medium">{{ $d['orders'] }} presentations designed</span>
                        <a href="{{ route('order') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Hire Designer →</a>
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
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Everything you need to know before hiring our presentation design team.</p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">
                @php
                $faqs = [
                    [
                        'q' => 'What presentation file formats will I receive?',
                        'a' => 'You will receive fully editable presentation files in Microsoft PowerPoint (.pptx), Google Slides links, or Apple Keynote formats, along with a high-resolution PDF backup.'
                    ],
                    [
                        'q' => 'Are speaker notes included with every slide?',
                        'a' => 'Yes. Every slide includes detailed speaker notes directly in the presentation file, giving you clear talking points, transition cues, and timing guidance.'
                    ],
                    [
                        'q' => 'Can you design slides for a thesis or dissertation defense?',
                        'a' => 'Yes. Our presentation design team specializes in academic defense decks, converting complex research papers, methodologies, and SPSS data into clear visual charts.'
                    ],
                    [
                        'q' => 'Can I request urgent express presentation design?',
                        'a' => 'Yes. We offer express presentation design turnarounds in as little as 6 to 12 hours for urgent academic talks and business pitches.'
                    ],
                    [
                        'q' => 'What if I need visual revisions on my slides?',
                        'a' => 'We offer 21 days of unlimited free visual revisions until your slide deck perfectly aligns with your presentation requirements.'
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
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight">Ready to Wow Your Presentation Audience?</h2>
            <p class="mt-5 text-blue-100 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                Connect with an expert US slide designer today. Get a custom, visually stunning presentation deck delivered before your talk.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('order') }}" class="group inline-flex items-center gap-3 rounded-2xl bg-white px-9 py-4 text-lg font-bold text-blue-700 shadow-xl hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                    Order Presentation Design Now
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
