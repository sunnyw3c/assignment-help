@extends('layouts.app')

@section('title', 'Essay Writing Service USA | 100% Original Essay Help')
@section('description', 'Get expert essay writing help in USA. 100% original, plagiarism-free essays written by PhD writers with 24/7 support & fast delivery.')
@section('keywords', 'essay writing service, essay writing service USA, professional essay writers, custom essay help, academic writing, essay help online, write my essay, argumentative essay help, college essay writing')

@push('head')
    <!-- Open Graph / Facebook Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Essay Writing Service USA | 100% Original Essay Help">
    <meta property="og:description" content="Get expert essay writing help in USA. 100% original, plagiarism-free essays written by PhD writers with 24/7 support & fast delivery.">
    <meta property="og:image" content="{{ asset('images/essay_writing_hero_banner.png') }}">

    <!-- Twitter Meta -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Essay Writing Service USA | 100% Original Essay Help">
    <meta property="twitter:description" content="Get expert essay writing help in USA. 100% original, plagiarism-free essays written by PhD writers with 24/7 support & fast delivery.">
    <meta property="twitter:image" content="{{ asset('images/essay_writing_hero_banner.png') }}">

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
                "name": "Professional Essay Writing Service USA",
                "provider": { "@@id": "{{ url('/') }}#organization" },
                "serviceType": "Academic Essay Writing Assistance",
                "areaServed": {
                    "@@type": "Country",
                    "name": "United States"
                },
                "description": "Custom academic essay writing assistance for US students across all academic levels. Original, Turnitin-verified essays written by native PhD & Master's writers.",
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
                    "reviewCount": "3580",
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
                        "name": "Essay Writing Help",
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
                        "name": "Can you write my essay overnight?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. We handle urgent essay writing orders with deadlines as short as 3 hours. Rush orders are matched instantly with active US PhD and Master's writers."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Is your essay writing service 100% plagiarism-free and AI-free?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Every essay is drafted completely from scratch based on your custom requirements. We scan every paper using Turnitin and advanced AI detectors, providing a free official report upon request."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "What citation and referencing styles do your essay writers support?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Our writers are fluent in all academic formatting styles including APA 7th, MLA 9th, Chicago/Turabian 17th, Harvard, IEEE, and OSCOLA."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "What if my delivered essay needs revisions?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "We offer unlimited free revisions for 21 days after delivery. If any detail from your original prompt needs adjustments, our team resolves it within 24 hours."
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
        title="Professional Essay Writing Service USA"
        subtitle="Struggling with complex essay prompts or tight deadlines? Get 100% original, Turnitin-verified essay writing help from US-based PhD & Master's writers. Customized to your exact rubrics, delivered on time." 
    />

    {{-- ===================================================
         TRUST BAR / SOCIAL PROOF (E-E-A-T)
    =================================================== --}}
    <section class="relative z-10 border-y border-slate-200/80 bg-white/90 py-5 backdrop-blur-md dark:border-slate-800/80 dark:bg-slate-900/90" aria-label="Trust Signals">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4 text-sm">
                <div class="flex items-center gap-2.5 px-3 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/20">
                    <div class="flex text-amber-400 text-sm">★★★★★</div>
                    <span class="font-bold text-slate-900 dark:text-white">4.9/5 Rating</span>
                    <span class="text-xs text-slate-500 dark:text-slate-400">(3,580+ Student Reviews)</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                    </span>
                    <span class="font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">42</strong> Experts Online Now</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-semibold px-3 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 9 0 0118 0z"/></svg>
                    <span>0% AI & 100% Turnitin Passed</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-300 md:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2 text-blue-600 dark:text-blue-400 font-semibold px-3 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                    <span>100% Confidential & Secure</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         VISUAL FEATURE 1: ESSAY STRUCTURE BLUEPRINT
    =================================================== --}}
    <section class="relative py-20 lg:py-24 bg-gradient-to-b from-slate-950 via-slate-900 to-indigo-950 text-white overflow-hidden" id="essay-structure">
        <!-- Background Ambient Glow -->
        <div class="absolute top-1/4 left-10 w-96 h-96 bg-blue-600/15 rounded-full filter blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-600/15 rounded-full filter blur-3xl pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-14 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-400/30 text-blue-400 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        Academic Excellence Blueprint
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight leading-tight">
                        Structured PEEL/TEEL Writing <br class="hidden sm:inline">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-300 to-purple-400">That Guarantees Top Grades</span>
                    </h2>
                    <p class="mt-5 text-slate-300 leading-relaxed text-base sm:text-lg">
                        Writing an A+ academic essay requires more than elegant phrasing—it demands rigorous structural logic, bulletproof thesis statements, and seamless evidence integration. Our writers craft every paragraph following standard university criteria.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-blue-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white font-black text-lg shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform">1</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Hook & Thesis Statement Precision</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Every essay opens with a compelling context hook and formulates a clear, arguable thesis statement that guides the entire discussion.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-indigo-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white font-black text-lg shadow-lg shadow-indigo-500/30 group-hover:scale-110 transition-transform">2</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">PEEL Paragraph Structure</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Body paragraphs follow Point, Evidence (scholarly peer-reviewed citations), Explanation, and Link back to the primary thesis.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-white/5 border border-white/10 hover:border-purple-400/50 hover:bg-white/10 transition-all duration-300 group">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-600 text-white font-black text-lg shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform">3</div>
                            <div>
                                <h3 class="font-bold text-white text-lg">Synthesis & Conclusion Impact</h3>
                                <p class="text-xs sm:text-sm text-slate-400 mt-1 leading-relaxed">Instead of simple repetition, our conclusions synthesize key findings and articulate broader academic implications.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-3xl blur-2xl opacity-40 group-hover:opacity-80 transition duration-700"></div>
                    <div class="relative overflow-hidden rounded-3xl border border-slate-700/80 bg-slate-950 shadow-2xl">
                        <img src="{{ asset('images/essay_structure_blueprint.png') }}" 
                             alt="Academic Essay Structure Blueprint Diagram" 
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
                        <img src="{{ asset('images/plagiarism_ai_check_preview.png') }}" 
                             alt="Turnitin Plagiarism and 0% AI Content Verification Report Preview" 
                             class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" 
                             loading="lazy">
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-300 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 text-xs font-bold uppercase tracking-wider mb-5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        100% Uncompromised Integrity
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900 dark:text-white leading-tight">
                        Zero Plagiarism & Zero AI Content Guarantee
                    </h2>
                    <p class="mt-5 text-slate-600 dark:text-slate-300 leading-relaxed text-base sm:text-lg">
                        Academic integrity is non-negotiable. Unlike generic services that rely on AI generators or recycled templates, every essay we write is drafted from scratch by subject matter experts.
                    </p>

                    <div class="mt-8 space-y-4">
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-emerald-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-500 text-white font-black text-sm shadow-md shadow-emerald-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Official Turnitin similarity report included with your order</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-emerald-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-500 text-white font-black text-sm shadow-md shadow-emerald-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Verified 0% AI detection on CopyLeaks, GPTZero & Turnitin AI</span>
                        </div>
                        <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-emerald-400 transition-colors">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-500 text-white font-black text-sm shadow-md shadow-emerald-500/30">✓</span>
                            <span class="text-sm font-semibold text-slate-800 dark:text-slate-200">Custom written exclusively to your specific rubric and guidelines</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         TYPES OF ESSAYS WE COVER
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950" id="essay-types">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Complete Academic Scope</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Types of Essays We Expertly Craft</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Whether high school, undergraduate, or postgraduate level, our qualified essay writers handle all paper formats.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Card 1: Argumentative --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-blue-500 to-indigo-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-50 dark:bg-blue-950/60 text-2xl group-hover:scale-110 transition-transform">⚔️</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Argumentative Essays</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Presenting compelling positions backed by empirical evidence, logical deduction, and structured counterargument refutation.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.essay-writing.show', 'argumentative') }}" class="text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Argumentative Essay Help <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Card 2: Analytical --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-indigo-500 to-purple-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 text-2xl group-hover:scale-110 transition-transform">🔍</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Analytical Essays</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Deconstructing complex literature, scientific studies, or historical events into core components for critical evaluation.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-indigo-600 hover:text-indigo-700 dark:text-indigo-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Analytical Essay <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Card 3: Persuasive --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-purple-500 to-pink-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-purple-50 dark:bg-purple-950/60 text-2xl group-hover:scale-110 transition-transform">🎯</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Persuasive Essays</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Combining emotional resonance, credible rhetoric, and authoritative sources to convince readers of your stance.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-purple-600 hover:text-purple-700 dark:text-purple-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Persuasive Essay <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Card 4: Compare & Contrast --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-emerald-500 to-teal-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-emerald-50 dark:bg-emerald-950/60 text-2xl group-hover:scale-110 transition-transform">⚖️</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Compare & Contrast</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Analyzing similarities and distinctions between theories, historical eras, literary works, or scientific methods.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-emerald-600 hover:text-emerald-700 dark:text-emerald-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Comparison Essay <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Card 5: Research Essays --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-amber-500 to-orange-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-amber-50 dark:bg-amber-950/60 text-2xl group-hover:scale-110 transition-transform">📚</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Research Papers</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            In-depth research incorporating peer-reviewed journals (JSTOR, PubMed, IEEE) and thorough citation synthesis.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('services.research-paper.index') }}" class="text-sm font-bold text-amber-600 hover:text-amber-700 dark:text-amber-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Research Paper Help <span>→</span>
                        </a>
                    </div>
                </div>

                {{-- Card 6: Application & Admission --}}
                <div class="group rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7 shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 flex flex-col justify-between relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1.5 bg-gradient-to-r from-rose-500 to-red-600"></div>
                    <div>
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-rose-50 dark:bg-rose-950/60 text-2xl group-hover:scale-110 transition-transform">🎓</span>
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">College Applications</h3>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Crafting personal statements and Common App essays that capture admissions committees' attention.
                        </p>
                    </div>
                    <div class="mt-6 pt-5 border-t border-slate-100 dark:border-slate-800">
                        <a href="{{ route('order') }}" class="text-sm font-bold text-rose-600 hover:text-rose-700 dark:text-rose-400 inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all">
                            Order Application Essay <span>→</span>
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
                <span class="inline-block bg-purple-100 text-purple-700 dark:bg-purple-950/80 dark:text-purple-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-purple-200 dark:border-purple-800">Academic Formatting</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Mastery of All Citation Styles</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">In-text citations, footnotes, endnotes, and reference lists tailored precisely to your university's guidelines.</p>
            </div>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-blue-400/50 transition-colors shadow-sm">
                    <div class="text-blue-600 dark:text-blue-400 font-black text-xl mb-2">APA 7th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for Psychology, Nursing, Social Sciences, and Business. Includes author-date citations and reference lists.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-indigo-400/50 transition-colors shadow-sm">
                    <div class="text-indigo-600 dark:text-indigo-400 font-black text-xl mb-2">MLA 9th Edition</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for English Literature, Cultural Studies, and Humanities. Includes author-page citations and Works Cited.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-purple-400/50 transition-colors shadow-sm">
                    <div class="text-purple-600 dark:text-purple-400 font-black text-xl mb-2">Chicago / Turabian 17th</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Standard for History, Fine Arts, and Political Science. Notes-Bibliography and Author-Date formatting.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-emerald-400/50 transition-colors shadow-sm">
                    <div class="text-emerald-600 dark:text-emerald-400 font-black text-xl mb-2">Harvard Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Widely used across US and international universities for economics, management, and life sciences.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-rose-400/50 transition-colors shadow-sm">
                    <div class="text-rose-600 dark:text-rose-400 font-black text-xl mb-2">IEEE Style</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Numbered citation standard for Computer Science, Electrical Engineering, and Technical essays.</p>
                </div>
                <div class="rounded-3xl bg-slate-50 dark:bg-slate-950 p-6 border border-slate-200/80 dark:border-slate-800 hover:border-amber-400/50 transition-colors shadow-sm">
                    <div class="text-amber-600 dark:text-amber-400 font-black text-xl mb-2">OSCOLA & Legal</div>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Specialized legal citation style for Law essays, case commentary, and statutory analysis.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         7 COMMON ESSAY MISTAKES
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-slate-50 dark:bg-slate-950">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-rose-100 text-rose-700 dark:bg-rose-950/80 dark:text-rose-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-rose-200 dark:border-rose-800">Grade Protection</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">7 Common Essay Errors Fixed</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Avoid these frequent pitfalls that cost students valuable rubric marks.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @php
                $mistakes = [
                    ['title' => 'Vague or Unarguable Thesis', 'desc' => 'Stating a general topic instead of taking a definitive, evidence-backed position.'],
                    ['title' => 'Unstructured Body Paragraphs', 'desc' => 'Failing to follow PEEL structure, causing arguments to feel fragmented.'],
                    ['title' => 'Over-quoting Without Analysis', 'desc' => 'Inserting lengthy quotes without explaining their analytical significance.'],
                    ['title' => 'Inconsistent Citation Formatting', 'desc' => 'Mixing APA and MLA rules or missing bibliography entries.'],
                    ['title' => 'Weak Transitions & Flow', 'desc' => 'Abrupt shifts between ideas without logical connective phrasing.'],
                    ['title' => 'Ignoring Marking Rubrics', 'desc' => 'Missing specific lecturer requirements and weighting criteria.'],
                    ['title' => 'Colloquial Language & First-Person', 'desc' => 'Using informal phrasing ("I think") instead of objective scholarly tone.'],
                ];
                @endphp
                @foreach($mistakes as $index => $m)
                <div class="flex gap-5 p-6 rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-white dark:bg-slate-900 hover:border-rose-300 dark:hover:border-rose-800 transition-colors shadow-sm">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl bg-rose-500 text-white font-black text-base shadow-md shadow-rose-500/20">
                        {{ $index + 1 }}
                    </div>
                    <div>
                        <h3 class="font-bold text-slate-900 dark:text-white text-lg mb-1">{{ $m['title'] }}</h3>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed">{{ $m['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================================================
         EXPERT WRITERS SHOWCASE
    =================================================== --}}
    <section class="py-20 lg:py-24 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="inline-block bg-blue-100 text-blue-700 dark:bg-blue-950/80 dark:text-blue-300 text-xs font-bold uppercase tracking-wider px-4 py-1.5 rounded-full mb-3 border border-blue-200 dark:border-blue-800">Vetted Academic Experts</span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 dark:text-white tracking-tight">Meet Our Top-Rated Essay Writers</h2>
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Every writer holds a Master's or PhD degree from top US universities and passes stringent quality verification.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @php
                $writers = [
                    [
                        'name' => 'Dr. Sarah Mitchell',
                        'degree' => 'PhD, English Literature — Columbia University',
                        'specialty' => 'Argumentative & Literary Analysis Essays',
                        'orders' => '1,420+',
                        'rating' => '4.98',
                        'badge' => 'Top 1% Writer'
                    ],
                    [
                        'name' => 'Prof. Marcus Vance',
                        'degree' => 'PhD, Political Economy — Harvard University',
                        'specialty' => 'Persuasive, History & Social Science Papers',
                        'orders' => '1,180+',
                        'rating' => '4.96',
                        'badge' => 'Senior Academic Editor'
                    ],
                    [
                        'name' => 'Dr. Elena Rostova',
                        'degree' => 'PhD, Psychology — UC Berkeley',
                        'specialty' => 'APA Formatting, Reflective & Clinical Essays',
                        'orders' => '950+',
                        'rating' => '4.97',
                        'badge' => 'PhD Subject Specialist'
                    ]
                ];
                @endphp

                @foreach($writers as $w)
                <div class="rounded-3xl border border-slate-200/80 dark:border-slate-800 bg-slate-50 dark:bg-slate-950 p-7 shadow-sm flex flex-col justify-between hover:shadow-xl transition-all duration-300">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-blue-100 dark:bg-blue-950 text-blue-700 dark:text-blue-300 border border-blue-200 dark:border-blue-800">{{ $w['badge'] }}</span>
                            <div class="flex items-center gap-1 text-amber-400 text-xs font-bold">
                                ★★★★★ <span class="text-slate-800 dark:text-slate-200 ml-1">{{ $w['rating'] }}</span>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white">{{ $w['name'] }}</h3>
                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400 mt-1 mb-4">{{ $w['degree'] }}</p>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-6">
                            <strong>Specialization:</strong> {{ $w['specialty'] }}
                        </p>
                    </div>

                    <div class="pt-5 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between text-xs sm:text-sm">
                        <span class="text-slate-500 dark:text-slate-400 font-medium">{{ $w['orders'] }} completed</span>
                        <a href="{{ route('order') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Hire Writer →</a>
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
                <p class="mt-4 text-slate-600 dark:text-slate-400 text-base sm:text-lg">Everything you need to know before hiring our essay writing team.</p>
            </div>

            <div class="space-y-4" x-data="{ open: null }">
                @php
                $faqs = [
                    [
                        'q' => 'Can you write my essay overnight or within 3 hours?',
                        'a' => 'Yes. We handle urgent essay orders with deadlines as short as 3 hours. Rush orders are assigned immediately to active US writers specializing in express academic turnarounds.'
                    ],
                    [
                        'q' => 'Will my essay be 100% plagiarism-free and AI-free?',
                        'a' => 'Absolutely. Every essay is written from scratch according to your specific brief. We run every document through Turnitin and advanced AI detectors, attaching a free similarity report upon request.'
                    ],
                    [
                        'q' => 'What referencing and citation styles do you support?',
                        'a' => 'Our academic writers are experts in APA 7th, MLA 9th, Chicago/Turabian 17th, Harvard, IEEE, OSCOLA, and custom university styles.'
                    ],
                    [
                        'q' => 'What if the delivered essay needs changes?',
                        'a' => 'We provide 21 days of unlimited free revisions within your original brief scope. If any detail needs tweaking, your writer will update it promptly within 24 hours.'
                    ],
                    [
                        'q' => 'Is your essay writing help confidential?',
                        'a' => 'Yes. We enforce strict privacy and data encryption standards. Your identity, email, and assignment details are never shared with third parties or your institution.'
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
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight">Ready to Boost Your Essay Marks?</h2>
            <p class="mt-5 text-blue-100 text-base sm:text-xl max-w-2xl mx-auto leading-relaxed">
                Connect with an expert US essay writer today. Get an original, flawlessly cited paper delivered before your deadline.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('order') }}" class="group inline-flex items-center gap-3 rounded-2xl bg-white px-9 py-4 text-lg font-bold text-blue-700 shadow-xl hover:bg-slate-100 hover:scale-105 transition-all duration-300">
                    Order Essay Now
                    <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
