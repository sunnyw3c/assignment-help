@extends('assignment-services.show')

@section('title', 'Case Study Help USA | Top-Rated Case Study Analysis Service')
@section('meta_description', 'Get expert Case Study Help in the USA from top MBA writers. 100% original, Turnitin plagiarism-free business case solutions with SWOT & 24/7 support.')
@section('meta_keywords', 'Case Study Help, Case Study Help USA, business case study help, MBA case study help, case study analysis service USA, Harvard case study help, buy case study online USA, custom case study writing, online case study solver')

@push('head')
    <!-- Canonical URL (Google SEO Guideline) -->
    <link rel="canonical" href="{{ route('services.case-study.index') }}">

    <!-- Robots Meta (Google Indexing Guideline) -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Case Study Help USA | Top-Rated Case Study Analysis Service">
    <meta property="og:description" content="Get expert Case Study Help in the USA from top MBA writers. 100% original, Turnitin plagiarism-free business case solutions with SWOT & 24/7 support.">
    <meta property="og:url" content="{{ route('services.case-study.index') }}">
    <meta property="og:site_name" content="Assignment Help USA">
    <meta property="og:image" content="{{ asset('images/case-study-analysis-hero.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Case Study Help USA | Top-Rated Case Study Analysis Service">
    <meta property="twitter:description" content="Get expert Case Study Help in the USA from top MBA writers. 100% original, Turnitin plagiarism-free business case solutions with SWOT & 24/7 support.">
    <meta property="twitter:image" content="{{ asset('images/case-study-analysis-hero.png') }}">

    <!-- JSON-LD Structured Data for Search Engine Optimization (Google Schema Guidelines) -->
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>url('/')],
                    ['@type'=>'ListItem','position'=>2,'name'=>'Case Study Help','item'=>route('services.case-study.index')],
                ],
            ],
            [
                '@type'       => 'Service',
                '@id'         => route('services.case-study.index').'#service',
                'name'        => 'Case Study Help USA',
                'serviceType' => 'Academic Case Study Analysis Service for US Students',
                'description' => 'Case Study Help for undergraduate, graduate, and MBA students in the USA. Expert solutions for Harvard Business School (HBS) cases, SWOT analysis, PESTEL, Porter\'s 5 Forces, DuPont financial ratio diagnostics, and strategic implementation plans.',
                'provider'    => ['@type'=>'Organization','name'=>'Assignment Help USA','url'=>url('/')],
                'areaServed'  => ['@type'=>'Country','name'=>'United States'],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name'  => 'Case Study Help USA Services',
                    'itemListElement' => [
                        ['@type'=>'Offer','itemOffered'=>['@type'=>'Service','name'=>'Undergraduate Case Study Help USA']],
                        ['@type'=>'Offer','itemOffered'=>['@type'=>'Service','name'=>'Graduate & MBA Case Study Help USA']],
                        ['@type'=>'Offer','itemOffered'=>['@type'=>'Service','name'=>'Harvard Business School (HBS) Case Solutions']],
                    ],
                ],
                'aggregateRating' => ['@type'=>'AggregateRating','ratingValue'=>'4.9','reviewCount'=>'3200','bestRating'=>'5','worstRating'=>'1'],
            ],
            [
                '@type'       => 'HowTo',
                'name'        => '8-Step Case Study Help Analysis Process',
                'description' => 'How our US MBA analysts deliver top-grade case study solutions for college students.',
                'step' => [
                    ['@type'=>'HowToStep','position'=>1,'name'=>'Read & Contextualize','text'=>'Thoroughly review company background, internal assets, and external US industry dynamics.'],
                    ['@type'=>'HowToStep','position'=>2,'name'=>'Identify Core Dilemma','text'=>'Distinguish root strategic challenges from surface-level operational symptoms.'],
                    ['@type'=>'HowToStep','position'=>3,'name'=>'SWOT & TOWS Matrix','text'=>'Audit internal strengths vs external environmental threats and market opportunities.'],
                    ['@type'=>'HowToStep','position'=>4,'name'=>'Apply Strategic Models','text'=>'Systematically execute PESTEL, Porter\'s Five Forces, Value Chain, and VRIO analysis.'],
                    ['@type'=>'HowToStep','position'=>5,'name'=>'Financial Ratio Diagnostics','text'=>'Compute liquidity, profitability, leverage, and DuPont financial turnover ratios.'],
                    ['@type'=>'HowToStep','position'=>6,'name'=>'Evaluate Strategic Options','text'=>'Formulate 2-3 strategic alternatives with detailed pros/cons evaluation.'],
                    ['@type'=>'HowToStep','position'=>7,'name'=>'Formulate Recommendation','text'=>'Select and defend the optimal solution grounded in empirical data and business theory.'],
                    ['@type'=>'HowToStep','position'=>8,'name'=>'Actionable Implementation Plan','text'=>'Construct step-by-step timelines, resource allocation, KPI metrics, and risk controls.'],
                ],
            ],
            [
                '@type' => 'FAQPage',
                'mainEntity' => [
                    ['@type'=>'Question','name'=>'Why is your service the best choice for Case Study Help in the USA?','acceptedAnswer'=>['@type'=>'Answer','text'=>'We provide dedicated Case Study Help tailored specifically to US university standards. Every paper is written by US MBA-qualified experts, strictly adheres to your rubric, includes Turnitin originality reports, and guarantees 100% human-written content.']],
                    ['@type'=>'Question','name'=>'Can you provide Case Study Help for Harvard Business School (HBS) cases?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes! Our writers are highly experienced with the Harvard Business School participant-centered case method, Ivey Publishing, Darden, and Stanford GSB case studies.']],
                    ['@type'=>'Question','name'=>'What analytical frameworks are included in your Case Study Help?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Our Case Study Help covers SWOT & TOWS Matrix, PESTEL Analysis, Porter\'s Five Forces, Value Chain Analysis, McKinsey 7S Framework, VRIO Model, BCG Matrix, Ansoff Matrix, Balanced Scorecard, and DuPont Financial Ratio Diagnostics.']],
                    ['@type'=>'Question','name'=>'Do you provide urgent Case Study Help for US students?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Yes! We offer express Case Study Help with turnaround times as fast as 12 to 24 hours while maintaining 100% academic quality and zero plagiarism.']],
                    ['@type'=>'Question','name'=>'Is your Case Study Help service confidential?','acceptedAnswer'=>['@type'=>'Answer','text'=>'Absolutely. We operate with a strict no-disclosure policy. Your personal information, order details, and submitted case study materials are never shared with any third party.']],
                    ['@type'=>'Question','name'=>'What citation styles do you support for Case Study Help?','acceptedAnswer'=>['@type'=>'Answer','text'=>'We support all major citation styles including APA 7th Edition, Harvard Referencing, MLA, Chicago, and Turabian formatting, each with a complete reference list included at no extra charge.']],
                ],
            ],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endpush

@section('custom-content')
    <!-- ══════════════════════════════════════════════ -->
    <!-- SECTION 1: Hero + Trust Badges + Intro Visual -->
    <!-- ══════════════════════════════════════════════ -->
    <section class="py-14 sm:py-20 bg-slate-50 relative overflow-hidden dark:bg-slate-950" itemscope itemtype="https://schema.org/Service" id="case-study-hero">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:24px_24px] opacity-40 dark:bg-[radial-gradient(#1e293b_1px,transparent_1px)]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-5xl mx-auto">

                <!-- Breadcrumb: Home › Case Study Help -->
                <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center gap-1.5 text-[11px] font-semibold text-slate-500 dark:text-slate-400">
                        <li><a href="{{ url('/') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a></li>
                        <li><span class="text-slate-400 dark:text-slate-600">›</span></li>
                        <li class="text-blue-600 dark:text-blue-400 font-bold" aria-current="page">Case Study Help</li>
                    </ol> 
                </nav>

                
                <!-- Hero Header -->
                <header class="text-center mb-10 sm:mb-14">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/60 text-blue-700 text-[10px] font-black uppercase tracking-widest mb-4 border border-blue-200/80 dark:bg-blue-950/50 dark:text-blue-400 dark:border-blue-800/50">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                        Top-Rated Case Study Help in USA
                    </div> 
                    <h1 class="text-3xl sm:text-5xl font-black tracking-tight text-slate-900 mb-6 leading-tight dark:text-white" itemprop="name" id="main-heading">
                        <span class="text-blue-600 dark:text-blue-400">Case Study Help</span> — Expert USA Academic Solutions
                    </h1>
                    <p class="text-base sm:text-lg text-slate-600 max-w-3xl mx-auto leading-relaxed dark:text-slate-400" itemprop="description">
                        <strong>Case Study Help</strong> made easy — our USA-based MBA writers deliver 100% original, high-scoring business case solutions using Harvard Business School (HBS) methods, SWOT, PESTEL, Porter's 5 Forces, and DuPont financial diagnostics. Get expert <strong>Case Study Help</strong> in 12–24 hours.
                    </p>
                </header>

                <!-- Trust Guarantee Badges -->
                <section class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-10" id="trust-guarantees" aria-label="Service Guarantees">
                    <div class="flex items-center gap-3 p-4 rounded-2xl bg-white border border-slate-100 shadow-sm dark:bg-slate-900 dark:border-slate-800 hover:shadow-md transition-shadow">
                        <div class="h-10 w-10 shrink-0 rounded-xl bg-emerald-50 flex items-center justify-center dark:bg-emerald-950/50">
                            <svg class="w-5 h-5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white">100% Turnitin Clear</h3>
                            <p class="text-[10px] text-slate-500 dark:text-slate-400">Plagiarism report included</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 rounded-2xl bg-white border border-slate-100 shadow-sm dark:bg-slate-900 dark:border-slate-800 hover:shadow-md transition-shadow">
                        <div class="h-10 w-10 shrink-0 rounded-xl bg-blue-50 flex items-center justify-center dark:bg-blue-950/50">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white">100% Human Written</h3>
                            <p class="text-[10px] text-slate-500 dark:text-slate-400">Zero AI generated text</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 rounded-2xl bg-white border border-slate-100 shadow-sm dark:bg-slate-900 dark:border-slate-800 hover:shadow-md transition-shadow">
                        <div class="h-10 w-10 shrink-0 rounded-xl bg-purple-50 flex items-center justify-center dark:bg-purple-950/50">
                            <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white">US Student Privacy</h3>
                            <p class="text-[10px] text-slate-500 dark:text-slate-400">100% Confidential</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 p-4 rounded-2xl bg-white border border-slate-100 shadow-sm dark:bg-slate-900 dark:border-slate-800 hover:shadow-md transition-shadow">
                        <div class="h-10 w-10 shrink-0 rounded-xl bg-amber-50 flex items-center justify-center dark:bg-amber-950/50">
                            <svg class="w-5 h-5 text-amber-500 dark:text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white">Fast Turnaround</h3>
                            <p class="text-[10px] text-slate-500 dark:text-slate-400">12–24 Hour delivery</p>
                        </div>
                    </div>
                </section>

                <!-- ══════════════════════════════════ -->
                <!-- Intro Overview + Hero Image Block  -->
                <!-- ══════════════════════════════════ -->
                <article class="rounded-[2rem] border border-slate-200/80 bg-white/90 overflow-hidden mb-12 shadow-sm backdrop-blur-sm dark:bg-slate-900/90 dark:border-slate-800/80" id="service-overview">
                    <div class="grid sm:grid-cols-2 gap-0">
                        <div class="p-6 sm:p-8 flex flex-col justify-center">
                            <h2 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white mb-3">
                                Why US College Students Trust Our Case Study Help
                            </h2>
                            <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-300 mb-4">
                                Across undergraduate, graduate, and MBA programs in the United States, case study assignments require synthesizing complex business data, identifying critical strategic bottlenecks, and formulating realistic recommendations. Standard essays fall short — professors demand structured, data-driven analytical depth.
                            </p>
                            <p class="text-sm sm:text-base leading-relaxed text-slate-600 dark:text-slate-300 mb-5">
                                Our <strong>Case Study Help USA</strong> service connects you with American business researchers and MBA graduates who understand US business school rubrics. We deliver well-cited, perfectly formatted case study solutions designed to achieve top grades.
                            </p>
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 6]) }}"
                               class="inline-flex self-start items-center gap-2 px-5 py-2.5 bg-blue-600 text-white font-bold rounded-xl shadow-md shadow-blue-600/20 hover:bg-blue-700 hover:scale-105 transition-all duration-200 text-xs uppercase tracking-widest">
                                Get Case Study Help
                                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                        </div>
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-950/30 dark:to-indigo-950/30 flex items-center justify-center p-6 min-h-[240px]">
                            <img src="{{ asset('images/case-study-analysis-hero.png') }}"
                                 alt="Case study analysis illustration with business strategy frameworks"
                                 class="w-full max-w-xs object-contain rounded-xl"
                                 loading="lazy" width="380" height="280">
                        </div>
                    </div>
                </article>

                <!-- ══════════════════════════════════════ -->
                <!-- STATS COUNTER SECTION                 -->
                <!-- ══════════════════════════════════════ -->
                <section class="mb-12 rounded-[2rem] bg-gradient-to-r from-blue-600 to-indigo-600 p-6 sm:p-8 shadow-lg shadow-blue-600/20" id="stats-counter" aria-label="Service Statistics">
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center text-white">
                        <div>
                            <div class="text-3xl sm:text-4xl font-black mb-1">4,200+</div>
                            <div class="text-xs text-blue-100 font-semibold uppercase tracking-widest">Cases Solved</div>
                        </div>
                        <div>
                            <div class="text-3xl sm:text-4xl font-black mb-1">98%</div>
                            <div class="text-xs text-blue-100 font-semibold uppercase tracking-widest">On-Time Delivery</div>
                        </div>
                        <div>
                            <div class="text-3xl sm:text-4xl font-black mb-1">4.9★</div>
                            <div class="text-xs text-blue-100 font-semibold uppercase tracking-widest">Average Rating</div>
                        </div>
                        <div>
                            <div class="text-3xl sm:text-4xl font-black mb-1">50</div>
                            <div class="text-xs text-blue-100 font-semibold uppercase tracking-widest">US States Covered</div>
                        </div>
                    </div>
                </section>

                <!-- ══════════════════════════════════════ -->
                <!-- SECTION 2: Top US Business Schools    -->
                <!-- ══════════════════════════════════════ -->
                <section class="mb-14 rounded-3xl border border-slate-100 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-800 dark:bg-slate-900" id="business-schools">
                    <div class="text-center mb-8">
                        <span class="inline-block bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full mb-2 dark:bg-blue-950/50 dark:text-blue-400">US University Standards</span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">Case Study Help for Leading US Business Schools</h2>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-1 font-medium">Custom solutions for students at top universities across all 50 US states</p>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-50 to-blue-100/50 dark:from-blue-950/40 dark:to-blue-950/20 border border-blue-100 dark:border-blue-900/40 hover:shadow-md transition-shadow group">
                            <div class="text-lg font-black text-blue-600 dark:text-blue-400 mb-1 group-hover:scale-105 transition-transform inline-block">HBS Method</div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white mb-2">Harvard Case Study Help</h3>
                            <p class="text-[11px] leading-relaxed text-slate-500 dark:text-slate-400">Participant-centered decision frameworks, executive summaries, and multi-stakeholder trade-off evaluations.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-50 to-emerald-100/50 dark:from-emerald-950/40 dark:to-emerald-950/20 border border-emerald-100 dark:border-emerald-900/40 hover:shadow-md transition-shadow group">
                            <div class="text-lg font-black text-emerald-600 dark:text-emerald-400 mb-1 group-hover:scale-105 transition-transform inline-block">Ivey Cases</div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white mb-2">Ivey Publishing Solutions</h3>
                            <p class="text-[11px] leading-relaxed text-slate-500 dark:text-slate-400">Rigorous decision-tree modeling, operational execution, and strategic alignment analysis.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-50 to-purple-100/50 dark:from-purple-950/40 dark:to-purple-950/20 border border-purple-100 dark:border-purple-900/40 hover:shadow-md transition-shadow group">
                            <div class="text-lg font-black text-purple-600 dark:text-purple-400 mb-1 group-hover:scale-105 transition-transform inline-block">Wharton & NYU</div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white mb-2">Finance & Strategy Cases</h3>
                            <p class="text-[11px] leading-relaxed text-slate-500 dark:text-slate-400">DuPont financial ratio valuation, capital structure, M&A restructuring, and corporate governance.</p>
                        </div>
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-amber-50 to-amber-100/50 dark:from-amber-950/40 dark:to-amber-950/20 border border-amber-100 dark:border-amber-900/40 hover:shadow-md transition-shadow group">
                            <div class="text-lg font-black text-amber-500 dark:text-amber-400 mb-1 group-hover:scale-105 transition-transform inline-block">Stanford & Kellogg</div>
                            <h3 class="text-xs font-bold text-slate-900 dark:text-white mb-2">Innovation & Tech Cases</h3>
                            <p class="text-[11px] leading-relaxed text-slate-500 dark:text-slate-400">Disruptive technology business models, platform economics, venture scaling, and marketing strategy.</p>
                        </div>
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════════ -->
                <!-- SECTION 3: Subject Matrix + Framework Image Block  -->
                <!-- ══════════════════════════════════════════════════ -->
                <section class="mb-14" id="subject-specializations">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mb-2">Business Subjects We Cover for US Students</h2>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium">Domain expertise tailored for US college & graduate courses</p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        @php
                        $subjects = [
                            ['color'=>'blue',    'dot'=>'bg-blue-500',   'title'=>'Strategic Management',      'desc'=>'VRIO framework, core competencies, diversification strategies, corporate governance, and competitive advantage.'],
                            ['color'=>'emerald', 'dot'=>'bg-emerald-500','title'=>'Corporate Finance',          'desc'=>'DuPont ratio diagnostics, WACC calculation, NPV/IRR valuation, liquidity ratios, and capital budgeting.'],
                            ['color'=>'purple',  'dot'=>'bg-purple-500', 'title'=>'Marketing Strategy',        'desc'=>'STP marketing model, Customer Lifetime Value (CLV), brand positioning, digital funnels, and pricing strategies.'],
                            ['color'=>'amber',   'dot'=>'bg-amber-500',  'title'=>'Operations & Supply Chain', 'desc'=>'Lean manufacturing, Six Sigma bottleneck resolution, Industry 4.0 automation, and global logistics optimization.'],
                            ['color'=>'indigo',  'dot'=>'bg-indigo-500', 'title'=>'Healthcare Administration', 'desc'=>'Hospital operations, HIPAA compliance, health economics, patient care quality metrics, and healthcare policy.'],
                            ['color'=>'rose',    'dot'=>'bg-rose-500',   'title'=>'Business Analytics',        'desc'=>'Predictive data modeling, quantitative forecasting, decision tree analysis, and strategic data applications.'],
                            ['color'=>'teal',    'dot'=>'bg-teal-500',   'title'=>'Organizational Behavior',   'desc'=>'McKinsey 7S framework, leadership models, change management, corporate culture, and team dynamics.'],
                            ['color'=>'cyan',    'dot'=>'bg-cyan-500',   'title'=>'Business Law & Ethics',     'desc'=>'ESG compliance, corporate social responsibility (CSR), regulatory risk mitigation, and international trade law.'],
                        ];
                        @endphp
                        @foreach($subjects as $sub)
                        <div class="rounded-2xl border border-slate-100 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900 hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="w-2 h-2 rounded-full {{ $sub['dot'] }} shrink-0"></span>
                                <h3 class="font-bold text-slate-900 dark:text-white text-xs">{{ $sub['title'] }}</h3>
                            </div>
                            <p class="text-[11px] leading-relaxed text-slate-500 dark:text-slate-400">{{ $sub['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════════ -->
                <!-- SECTION 4: Strategic Frameworks + Visual Image     -->
                <!-- ══════════════════════════════════════════════════ -->
                <section class="mb-14" id="strategic-frameworks">
                    <!-- Frameworks visual banner -->
                    <div class="rounded-[2rem] overflow-hidden border border-slate-100 dark:border-slate-800 mb-8">
                        <div class="grid sm:grid-cols-5">
                            <div class="sm:col-span-3 p-6 sm:p-8 bg-white dark:bg-slate-900 flex flex-col justify-center">
                                <span class="inline-block bg-purple-100 text-purple-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full mb-3 self-start dark:bg-purple-950/50 dark:text-purple-400">Strategic Frameworks</span>
                                <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mb-3">Analytical Models Included in Our Case Study Help</h2>
                                <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">Every case study solution we deliver applies proven business strategy frameworks — rigorously matched to the specific company, industry context, and university rubric requirements.</p>
                            </div>
                            <div class="sm:col-span-2 bg-gradient-to-br from-purple-50 to-indigo-100 dark:from-purple-950/30 dark:to-indigo-950/30 flex items-center justify-center p-6 min-h-[200px]">
                                <img src="{{ asset('images/case-study-frameworks.png') }}"
                                     alt="Business strategy frameworks - SWOT, PESTEL, Porter's 5 Forces diagram"
                                     class="w-full max-w-[220px] object-contain rounded-xl"
                                     loading="lazy" width="320" height="240">
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        @php
                        $frameworks = [
                            ['abbr'=>'SWOT', 'color'=>'blue',   'title'=>'SWOT & TOWS Matrix',  'sub'=>'Internal vs External Audit',         'desc'=>'Diagnoses internal Strengths and Weaknesses against external Opportunities and Threats, formulating TOWS strategic action pairs.'],
                            ['abbr'=>'PEST', 'color'=>'emerald','title'=>'PESTEL Analysis',      'sub'=>'Macro-Environmental Factors',        'desc'=>'Evaluates Political, Economic, Social, Technological, Environmental, and Legal forces shaping US & global industry trajectories.'],
                            ['abbr'=>'5F',   'color'=>'purple', 'title'=>"Porter's 5 Forces",    'sub'=>'Industry Profitability Audit',       'desc'=>'Assesses buyer power, supplier leverage, threat of substitutes, barriers to entry, and competitive rivalry intensity.'],
                            ['abbr'=>'VRIO', 'color'=>'amber',  'title'=>'VRIO & McKinsey 7S',   'sub'=>'Resource-Based Capabilities',        'desc'=>'Analyzes whether corporate assets are Valuable, Rare, Inimitable, and Organized, ensuring sustainable competitive advantage.'],
                            ['abbr'=>'BCG',  'color'=>'indigo', 'title'=>'BCG & Ansoff Matrix',  'sub'=>'Portfolio & Growth Options',         'desc'=>'Categorizes business units into Stars, Cash Cows, Question Marks, & Dogs while mapping market penetration vs diversification.'],
                            ['abbr'=>'BSC',  'color'=>'rose',   'title'=>'Balanced Scorecard',   'sub'=>'Performance Metric Control',         'desc'=>'Aligns strategic objectives across financial performance, customer satisfaction, internal processes, and organizational learning.'],
                        ];
                        $colorMap = [
                            'blue'   => ['bg'=>'bg-blue-50 dark:bg-blue-950/50',   'text'=>'text-blue-600 dark:text-blue-400'],
                            'emerald'=> ['bg'=>'bg-emerald-50 dark:bg-emerald-950/50', 'text'=>'text-emerald-600 dark:text-emerald-400'],
                            'purple' => ['bg'=>'bg-purple-50 dark:bg-purple-950/50',   'text'=>'text-purple-600 dark:text-purple-400'],
                            'amber'  => ['bg'=>'bg-amber-50 dark:bg-amber-950/50',  'text'=>'text-amber-500 dark:text-amber-400'],
                            'indigo' => ['bg'=>'bg-indigo-50 dark:bg-indigo-950/50',   'text'=>'text-indigo-600 dark:text-indigo-400'],
                            'rose'   => ['bg'=>'bg-rose-50 dark:bg-rose-950/50',    'text'=>'text-rose-500 dark:text-rose-400'],
                        ];
                        @endphp
                        @foreach($frameworks as $fw)
                        @php $c = $colorMap[$fw['color']]; @endphp
                        <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900 hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="h-10 w-10 rounded-xl {{ $c['bg'] }} {{ $c['text'] }} font-black text-xs flex items-center justify-center">{{ $fw['abbr'] }}</div>
                                <div>
                                    <h3 class="font-bold text-slate-900 dark:text-white text-sm">{{ $fw['title'] }}</h3>
                                    <p class="text-[10px] {{ $c['text'] }} font-semibold">{{ $fw['sub'] }}</p>
                                </div>
                            </div>
                            <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400">{{ $fw['desc'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 5: Sample Case Study Format           -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="relative mb-14 overflow-hidden rounded-[2.5rem] border border-slate-200/80 bg-gradient-to-br from-white via-slate-50 to-blue-50/70 p-6 shadow-xl shadow-slate-200/40 sm:p-10 dark:border-slate-800 dark:from-slate-900 dark:via-slate-900 dark:to-blue-950/30 dark:shadow-black/20" id="sample-format">
                    <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-blue-500/10 blur-3xl"></div>
                    <div class="pointer-events-none absolute -bottom-32 -left-24 h-72 w-72 rounded-full bg-indigo-500/10 blur-3xl"></div>

                    <div class="relative z-10">
                        <div class="mb-8 flex flex-col gap-5 border-b border-slate-200/80 pb-8 sm:flex-row sm:items-end sm:justify-between dark:border-slate-800">
                            <div class="max-w-2xl">
                                <span class="mb-3 inline-flex items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1.5 text-[10px] font-black uppercase tracking-[0.18em] text-emerald-700 dark:border-emerald-900 dark:bg-emerald-950/40 dark:text-emerald-400">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    Quality Blueprint
                                </span>
                                <h2 class="text-2xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">Sample Case Study Analysis Format</h2>
                                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">A professional five-part structure that moves logically from business context to a measurable implementation plan.</p>
                            </div>

                            <div class="flex shrink-0 flex-wrap gap-2">
                                <span class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white/80 px-3 py-2 text-[11px] font-bold text-slate-700 shadow-sm dark:border-slate-700 dark:bg-slate-950/60 dark:text-slate-300">
                                    <span class="flex h-5 w-5 items-center justify-center rounded-md bg-blue-100 text-[10px] font-black text-blue-700 dark:bg-blue-950 dark:text-blue-400">5</span>
                                    Core Sections
                                </span>
                                <span class="inline-flex items-center gap-2 rounded-xl border border-slate-200 bg-white/80 px-3 py-2 text-[11px] font-bold text-slate-700 shadow-sm dark:border-slate-700 dark:bg-slate-950/60 dark:text-slate-300">
                                    <svg class="h-4 w-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Rubric Aligned
                                </span>
                            </div>
                        </div>

                        <div class="grid items-start gap-6 lg:grid-cols-[0.72fr_1.28fr] lg:gap-8">
                            <div class="relative overflow-hidden rounded-[2rem] bg-slate-950 p-6 text-white shadow-2xl shadow-blue-950/20 sm:p-7">
                                <div class="absolute -right-14 -top-14 h-40 w-40 rounded-full bg-blue-600/20 blur-3xl"></div>
                                <div class="relative">
                                    <div class="mb-6 flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-blue-600 shadow-lg shadow-blue-600/30">
                                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                </svg>
                                            </span>
                                            <div>
                                                <p class="text-sm font-black">Case Analysis</p>
                                                <p class="text-[10px] font-semibold uppercase tracking-widest text-slate-500">Document Blueprint</p>
                                            </div>
                                        </div>
                                        <span class="rounded-lg border border-white/10 bg-white/5 px-2.5 py-1 text-[9px] font-black uppercase tracking-wider text-blue-300">Sample</span>
                                    </div>

                                    <div class="space-y-3 rounded-2xl border border-white/10 bg-white/[0.04] p-4">
                                        @foreach(['Executive context', 'Problem diagnosis', 'Framework analysis', 'Financial evaluation', 'Action roadmap'] as $previewIndex => $previewLabel)
                                        <div class="flex items-center gap-3">
                                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-lg {{ $previewIndex === 4 ? 'bg-emerald-500 text-white' : 'bg-blue-500/15 text-blue-300' }} text-[9px] font-black">{{ $previewIndex + 1 }}</span>
                                            <div class="min-w-0 flex-1">
                                                <div class="mb-1 flex items-center justify-between gap-2">
                                                    <span class="truncate text-[10px] font-bold text-slate-300">{{ $previewLabel }}</span>
                                                    <span class="text-[8px] font-semibold text-slate-600">{{ ($previewIndex + 1) * 20 }}%</span>
                                                </div>
                                                <div class="h-1 overflow-hidden rounded-full bg-white/5">
                                                    <div class="h-full rounded-full {{ $previewIndex === 4 ? 'bg-emerald-500' : 'bg-blue-500' }}" style="width: {{ ($previewIndex + 1) * 20 }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>

                                    <div class="mt-5 grid grid-cols-3 gap-2 text-center">
                                        <div class="rounded-xl bg-white/5 px-2 py-3">
                                            <p class="text-sm font-black text-white">APA 7</p>
                                            <p class="mt-0.5 text-[8px] uppercase tracking-wider text-slate-500">Format</p>
                                        </div>
                                        <div class="rounded-xl bg-white/5 px-2 py-3">
                                            <p class="text-sm font-black text-white">100%</p>
                                            <p class="mt-0.5 text-[8px] uppercase tracking-wider text-slate-500">Original</p>
                                        </div>
                                        <div class="rounded-xl bg-white/5 px-2 py-3">
                                            <p class="text-sm font-black text-white">A+</p>
                                            <p class="mt-0.5 text-[8px] uppercase tracking-wider text-slate-500">Standard</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-3">
                                @php
                                $parts = [
                                    ['num'=>'01','label'=>'Part I',  'title'=>'Executive Summary & Context',               'desc'=>'Synthesizes core company background, market environment, primary strategic dilemma, concise thesis statement, and high-level recommendations.', 'badge'=>'bg-blue-600 shadow-blue-600/25',    'pill'=>'bg-blue-50 text-blue-700 dark:bg-blue-950/50 dark:text-blue-400',       'hover'=>'hover:border-blue-300 dark:hover:border-blue-800'],
                                    ['num'=>'02','label'=>'Part II', 'title'=>'Problem Identification & Diagnosis',         'desc'=>'Isolates core structural bottlenecks from superficial operational symptoms, prioritizing critical decision points requiring executive intervention.', 'badge'=>'bg-indigo-600 shadow-indigo-600/25','pill'=>'bg-indigo-50 text-indigo-700 dark:bg-indigo-950/50 dark:text-indigo-400','hover'=>'hover:border-indigo-300 dark:hover:border-indigo-800'],
                                    ['num'=>'03','label'=>'Part III','title'=>'Theoretical Framework Application',          'desc'=>'Applies SWOT, PESTEL, Porter\'s Five Forces, and VRIO models directly to empirical evidence from the case prompt without generic filler.', 'badge'=>'bg-purple-600 shadow-purple-600/25','pill'=>'bg-purple-50 text-purple-700 dark:bg-purple-950/50 dark:text-purple-400','hover'=>'hover:border-purple-300 dark:hover:border-purple-800'],
                                    ['num'=>'04','label'=>'Part IV', 'title'=>'Financial Ratio Diagnostics & Evaluation',  'desc'=>'Computes liquidity, profitability, leverage, and DuPont turnover ratios formatted in clean professional financial tables with business explanations.', 'badge'=>'bg-amber-500 shadow-amber-500/25',  'pill'=>'bg-amber-50 text-amber-700 dark:bg-amber-950/50 dark:text-amber-400',    'hover'=>'hover:border-amber-300 dark:hover:border-amber-800'],
                                    ['num'=>'05','label'=>'Part V',  'title'=>'Justified Strategy & Implementation Roadmap','desc'=>'Outlines actionable recommendations with step-by-step implementation timelines, budget allocations, resource needs, KPI metrics, and risk mitigations.', 'badge'=>'bg-emerald-600 shadow-emerald-600/25','pill'=>'bg-emerald-50 text-emerald-700 dark:bg-emerald-950/50 dark:text-emerald-400','hover'=>'hover:border-emerald-300 dark:hover:border-emerald-800'],
                                ];
                                @endphp
                                @foreach($parts as $part)
                                <article class="group flex gap-4 rounded-2xl border border-slate-200 bg-white/80 p-4 shadow-sm backdrop-blur-sm transition-all duration-300 {{ $part['hover'] }} hover:-translate-y-0.5 hover:shadow-lg sm:p-5 dark:border-slate-800 dark:bg-slate-950/60">
                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl text-xs font-black text-white shadow-lg transition-transform duration-300 group-hover:scale-105 {{ $part['badge'] }}">{{ $part['num'] }}</div>
                                    <div class="min-w-0 flex-1">
                                        <div class="mb-1.5 flex flex-wrap items-center justify-between gap-2">
                                            <h3 class="text-sm font-black text-slate-900 sm:text-base dark:text-white">{{ $part['title'] }}</h3>
                                            <span class="shrink-0 rounded-lg px-2.5 py-1 text-[9px] font-black uppercase tracking-wider {{ $part['pill'] }}">{{ $part['label'] }}</span>
                                        </div>
                                        <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400">{{ $part['desc'] }}</p>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 6: Visual Workflow Timeline (8 Steps)  -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14 rounded-3xl border border-slate-100 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/HowTo" id="analysis-workflow">
                    <div class="text-center mb-8">
                        <span class="inline-block bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full mb-2 dark:bg-blue-950/50 dark:text-blue-400">How It Works</span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white" itemprop="name">
                            Our 8-Step Case Study Help Workflow
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-1">A systematic, rubric-aligned methodology used for every US student case</p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        @php
                        $steps = [
                            ['n'=>1,'title'=>'Read & Contextualize','desc'=>'Examine internal and external US industry situation.','icon'=>'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253'],
                            ['n'=>2,'title'=>'Identify Core Problem','desc'=>'Separate symptoms from root strategic issues.','icon'=>'M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z'],
                            ['n'=>3,'title'=>'SWOT Audit','desc'=>'Map internal assets vs external opportunities.','icon'=>'M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z'],
                            ['n'=>4,'title'=>'Apply Frameworks','desc'=>'PESTEL, Porter\'s 5 Forces, Value Chain, VRIO.','icon'=>'M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z'],
                            ['n'=>5,'title'=>'Financial Analysis','desc'=>'Ratios, break-even, valuation, DuPont model.','icon'=>'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'],
                            ['n'=>6,'title'=>'Evaluate Alternatives','desc'=>'Compare pros/cons of 2–3 strategic options.','icon'=>'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4'],
                            ['n'=>7,'title'=>'Formulate Strategy','desc'=>'Select and justify the optimal recommendation.','icon'=>'M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z'],
                            ['n'=>8,'title'=>'Implementation Plan','desc'=>'Timeline, budget, KPIs, and risk controls.','icon'=>'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z'],
                        ];
                        @endphp
                        @foreach($steps as $step)
                        <div itemprop="step" itemscope itemtype="https://schema.org/HowToStep" class="flex gap-3 p-4 rounded-2xl bg-slate-50 dark:bg-slate-950/60 border border-slate-100 dark:border-slate-800 hover:border-blue-200 dark:hover:border-blue-800 hover:shadow-sm transition-all group">
                            <div class="shrink-0">
                                <div class="h-9 w-9 rounded-xl bg-blue-600 text-white font-black text-xs flex items-center justify-center shadow-md shadow-blue-600/20 group-hover:scale-105 transition-transform">{{ $step['n'] }}</div>
                            </div>
                            <div>
                                <h3 class="text-xs font-bold text-slate-900 dark:text-white" itemprop="name">{{ $step['title'] }}</h3>
                                <p class="text-[11px] text-slate-500 dark:text-slate-400 leading-snug mt-0.5">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 7: Why Choose Us vs Competitors        -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14" id="why-choose-us">
                    <div class="text-center mb-8">
                        <span class="inline-block bg-blue-100 text-blue-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full mb-2 dark:bg-blue-950/50 dark:text-blue-400">Why Choose Us</span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">Assignment Help USA vs Generic Services</h2>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-1 font-medium">What sets our Case Study Help apart from the rest</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 dark:border-slate-700 overflow-hidden shadow-sm">
                        <div class="overflow-x-auto">
                            <table class="w-full text-xs sm:text-sm">
                                <thead>
                                    <tr class="bg-slate-900 dark:bg-slate-950 text-white">
                                        <th class="text-left p-4 font-bold">Feature</th>
                                        <th class="text-center p-4 font-bold text-blue-400">Assignment Help USA</th>
                                        <th class="text-center p-4 font-bold text-slate-400">Generic Services</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $compare = [
                                        ['feature'=>'US Business School Expertise',   'us'=>true,  'them'=>false],
                                        ['feature'=>'HBS/Ivey Case Method Knowledge', 'us'=>true,  'them'=>false],
                                        ['feature'=>'SWOT + PESTEL + Financial Ratios','us'=>true,  'them'=>'Partial'],
                                        ['feature'=>'Turnitin Plagiarism Report',      'us'=>true,  'them'=>'Paid Extra'],
                                        ['feature'=>'100% Human Written (Zero AI)',    'us'=>true,  'them'=>false],
                                        ['feature'=>'Free Revisions (14 Days)',        'us'=>true,  'them'=>false],
                                        ['feature'=>'12–24 Hour Urgent Delivery',      'us'=>true,  'them'=>'Limited'],
                                        ['feature'=>'APA 7th / Harvard Referencing',  'us'=>true,  'them'=>true],
                                        ['feature'=>'Confidential & Secure Ordering', 'us'=>true,  'them'=>'Varies'],
                                    ];
                                    @endphp
                                    @foreach($compare as $i => $row)
                                    <tr class="{{ $i % 2 === 0 ? 'bg-white dark:bg-slate-900' : 'bg-slate-50 dark:bg-slate-900/60' }}">
                                        <td class="p-3 sm:p-4 font-medium text-slate-700 dark:text-slate-300">{{ $row['feature'] }}</td>
                                        <td class="p-3 sm:p-4 text-center">
                                            <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-950/50">
                                                <svg class="w-3.5 h-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                            </span>
                                        </td>
                                        <td class="p-3 sm:p-4 text-center">
                                            @if($row['them'] === true)
                                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-950/50">
                                                    <svg class="w-3.5 h-3.5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                                                </span>
                                            @elseif($row['them'] === false)
                                                <span class="inline-flex items-center justify-center w-6 h-6 rounded-full bg-rose-100 dark:bg-rose-950/50">
                                                    <svg class="w-3.5 h-3.5 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                                                </span>
                                            @else
                                                <span class="text-[10px] font-bold text-amber-600 dark:text-amber-400 bg-amber-50 dark:bg-amber-950/30 px-2 py-0.5 rounded-full">{{ $row['them'] }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 8: Service Specifications              -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14 rounded-3xl border border-slate-100 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-800 dark:bg-slate-900" id="service-specifications">
                    <div class="text-center mb-6">
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mb-1">Case Study Service Specifications</h2>
                        <p class="text-xs text-slate-500 dark:text-slate-400 font-medium">Included features, add-on options, and standard formatting guidelines</p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-3">
                        <div class="rounded-2xl border border-emerald-100 bg-emerald-50/50 p-5 dark:border-emerald-950/40 dark:bg-emerald-950/20">
                            <h3 class="font-bold text-emerald-900 dark:text-emerald-400 text-xs mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                What's Included
                            </h3>
                            <ul class="text-[11px] text-slate-600 dark:text-slate-400 space-y-1.5">
                                <li class="flex items-start gap-1.5"><span class="text-emerald-500 mt-0.5">✓</span> Full SWOT & Strategic frameworks</li>
                                <li class="flex items-start gap-1.5"><span class="text-emerald-500 mt-0.5">✓</span> Financial ratio analysis & tables</li>
                                <li class="flex items-start gap-1.5"><span class="text-emerald-500 mt-0.5">✓</span> Justified recommendations</li>
                                <li class="flex items-start gap-1.5"><span class="text-emerald-500 mt-0.5">✓</span> Implementation plan & timelines</li>
                                <li class="flex items-start gap-1.5"><span class="text-emerald-500 mt-0.5">✓</span> Free revisions within 14 days</li>
                                <li class="flex items-start gap-1.5"><span class="text-emerald-500 mt-0.5">✓</span> Turnitin report attached</li>
                            </ul>
                        </div>

                        <div class="rounded-2xl border border-blue-100 bg-blue-50/50 p-5 dark:border-blue-950/40 dark:bg-blue-950/20">
                            <h3 class="font-bold text-blue-900 dark:text-blue-400 text-xs mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                                Add-On Options
                            </h3>
                            <ul class="text-[11px] text-slate-600 dark:text-slate-400 space-y-1.5">
                                <li class="flex items-start gap-1.5"><span class="text-blue-500 mt-0.5">+</span> PowerPoint presentation slides</li>
                                <li class="flex items-start gap-1.5"><span class="text-blue-500 mt-0.5">+</span> 1-page Executive summary deck</li>
                                <li class="flex items-start gap-1.5"><span class="text-blue-500 mt-0.5">+</span> Financial modeling spreadsheets</li>
                                <li class="flex items-start gap-1.5"><span class="text-blue-500 mt-0.5">+</span> Competitor benchmark reports</li>
                                <li class="flex items-start gap-1.5"><span class="text-blue-500 mt-0.5">+</span> Priority expert allocation</li>
                            </ul>
                        </div>

                        <div class="rounded-2xl border border-purple-100 bg-purple-50/50 p-5 dark:border-purple-950/40 dark:bg-purple-950/20">
                            <h3 class="font-bold text-purple-900 dark:text-purple-400 text-xs mb-3 flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                                Formatting Specs
                            </h3>
                            <ul class="text-[11px] text-slate-600 dark:text-slate-400 space-y-1.5">
                                <li class="flex items-start gap-1.5"><span class="text-purple-500 mt-0.5">•</span> 1 Page = 250 words (Double Spaced)</li>
                                <li class="flex items-start gap-1.5"><span class="text-purple-500 mt-0.5">•</span> APA 7th, Harvard, MLA citation</li>
                                <li class="flex items-start gap-1.5"><span class="text-purple-500 mt-0.5">•</span> Reference list included free</li>
                                <li class="flex items-start gap-1.5"><span class="text-purple-500 mt-0.5">•</span> Professional business tables</li>
                                <li class="flex items-start gap-1.5"><span class="text-purple-500 mt-0.5">•</span> Turnitin report attached</li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 9: Common Pitfalls                     -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14" id="pitfalls-to-avoid">
                    <div class="text-center mb-8">
                        <span class="inline-block bg-rose-100 text-rose-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full mb-2 dark:bg-rose-950/50 dark:text-rose-400">Pitfalls To Avoid</span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">6 Common Case Study Mistakes Students Make</h2>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-1 font-medium">Our experts ensure none of these errors appear in your submission</p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        @php
                        $mistakes = [
                            ['title' => 'Describing Instead of Analyzing', 'desc' => 'Summarizing company history without diagnosing strategic issues costs valuable marks. Focus on root cause analysis.'],
                            ['title' => 'Mechanical Framework Dumping', 'desc' => 'Listing SWOT points without connecting them to final recommendations renders frameworks useless.'],
                            ['title' => 'Vague Recommendations', 'desc' => '"Improve marketing" is weak. Specific, actionable metrics ("Reallocate 15% digital budget to retargeting") win top grades.'],
                            ['title' => 'Missing Empirical Evidence', 'desc' => 'Assertions without financial ratios, benchmarks, or peer citations lack academic credibility.'],
                            ['title' => 'Ignoring Implementation Constraints', 'desc' => 'Skipping timeline, budget, risk mitigation, and KPI sections reduces practical feasibility scores.'],
                            ['title' => 'Surface Financial Analysis', 'desc' => 'Stating revenues without computing liquidity, leverage, and margin ratios limits analytical depth.'],
                        ];
                        @endphp
                        @foreach($mistakes as $m)
                        <div class="flex gap-4 p-5 rounded-2xl border border-slate-100 bg-white hover:border-rose-200 transition-colors shadow-sm dark:bg-slate-900 dark:border-slate-800 dark:hover:border-rose-800">
                            <div class="shrink-0 w-8 h-8 rounded-xl bg-rose-50 dark:bg-rose-950/40 flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-rose-600 dark:text-rose-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 dark:text-white text-xs mb-1">{{ $m['title'] }}</h3>
                                <p class="text-xs leading-relaxed text-slate-500 dark:text-slate-400">{{ $m['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 10: Expert Analysts Cards              -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14" id="expert-analysts">
                    <div class="text-center mb-8">
                        <span class="inline-block bg-purple-100 text-purple-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full mb-2 dark:bg-purple-950/50 dark:text-purple-400">Our Experts</span>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">MBA Case Study Analysts</h2>
                        <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-1 font-medium">Experienced writers from top US and international business schools</p>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-3">
                        @php
                        $experts = [
                            ['initials'=>'DK','bg'=>'bg-purple-600','shadow'=>'shadow-purple-600/20','badge'=>'text-purple-600 dark:text-purple-400','name'=>'David Kingsford','cred'=>'Harvard MBA • Strategy','desc'=>'Specializes in corporate strategy, tech industry disruption, and Harvard business case studies.','cases'=>'620+','rating'=>'4.97'],
                            ['initials'=>'FA','bg'=>'bg-emerald-600','shadow'=>'shadow-emerald-600/20','badge'=>'text-emerald-600 dark:text-emerald-400','name'=>'Dr. Fatima Al-Hassan','cred'=>'LBS PhD • Finance','desc'=>'Expert in financial modeling, valuation analysis, ratio diagnostics, and capital structure cases.','cases'=>'480+','rating'=>'4.96'],
                            ['initials'=>'RC','bg'=>'bg-blue-600','shadow'=>'shadow-blue-600/20','badge'=>'text-blue-600 dark:text-blue-400','name'=>'Robert Chen','cred'=>'INSEAD MBA • Operations','desc'=>'Specializes in global supply chain networks, lean manufacturing, retail operations, and logistics.','cases'=>'540+','rating'=>'4.95'],
                        ];
                        @endphp
                        @foreach($experts as $expert)
                        <div class="rounded-3xl border border-slate-100 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900 hover:shadow-lg hover:-translate-y-1 transition-all duration-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-2xl {{ $expert['bg'] }} text-white font-bold flex items-center justify-center text-sm shadow-md {{ $expert['shadow'] }}">{{ $expert['initials'] }}</div>
                                <div>
                                    <h3 class="font-bold text-slate-900 dark:text-white text-sm">{{ $expert['name'] }}</h3>
                                    <p class="text-[10px] font-bold {{ $expert['badge'] }} uppercase tracking-wider">{{ $expert['cred'] }}</p>
                                </div>
                            </div>
                            <p class="text-xs text-slate-600 dark:text-slate-400 mb-4 leading-relaxed">{{ $expert['desc'] }}</p>
                            <div class="flex items-center justify-between text-xs pt-3 border-t border-slate-100 dark:border-slate-800 text-slate-500 dark:text-slate-400">
                                <span>{{ $expert['cases'] }} Cases Solved</span>
                                <span class="font-bold text-amber-500">★ {{ $expert['rating'] }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 11: Student Testimonials              -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14" id="student-reviews">
                    <div class="grid sm:grid-cols-5 gap-0 rounded-[2rem] overflow-hidden border border-slate-100 dark:border-slate-800 shadow-sm">
                        <!-- Image Side -->
                        <div class="sm:col-span-2 bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center p-8 min-h-[240px]">
                            <div class="text-center text-white">
                                <img src="{{ asset('images/case-study-students.png') }}"
                                     alt="Happy US students who got case study help"
                                     class="w-full max-w-[200px] mx-auto object-contain rounded-xl mb-4"
                                     loading="lazy" width="280" height="240">
                                <div class="text-2xl font-black">3,200+ Students</div>
                                <div class="text-xs text-blue-200 font-medium">Helped across the USA</div>
                            </div>
                        </div>
                        <!-- Reviews Side -->
                        <div class="sm:col-span-3 bg-white dark:bg-slate-900 p-6 sm:p-8">
                            <div class="mb-5">
                                <span class="inline-block bg-amber-100 text-amber-700 text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full dark:bg-amber-950/50 dark:text-amber-400">Student Reviews</span>
                                <h2 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white mt-2">What US Students Are Saying</h2>
                            </div>
                            <div class="space-y-4">
                                @php
                                $reviews = [
                                    ['name'=>'Sarah M.','uni'=>'NYU Stern MBA','rating'=>5,'text'=>'Incredible Case Study Help! The SWOT and Porter\'s analysis was exactly what my professor expected. Got an A on my final strategy paper.'],
                                    ['name'=>'James R.','uni'=>'Wharton Undergrad','rating'=>5,'text'=>'Fast delivery, zero plagiarism, and the financial ratios section was professional-level. Highly recommend for any MBA student.'],
                                    ['name'=>'Priya K.','uni'=>'Harvard Extension','rating'=>5,'text'=>'The HBS case method was applied perfectly. My professor couldn\'t believe how well-structured and analytical my submission was.'],
                                ];
                                @endphp
                                @foreach($reviews as $review)
                                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-950/60 border border-slate-100 dark:border-slate-800">
                                    <div class="flex items-center justify-between mb-2">
                                        <div>
                                            <span class="font-bold text-slate-900 dark:text-white text-xs">{{ $review['name'] }}</span>
                                            <span class="text-[10px] text-slate-500 dark:text-slate-400 ml-2">— {{ $review['uni'] }}</span>
                                        </div>
                                        <div class="text-amber-400 text-xs font-bold">{{ str_repeat('★', $review['rating']) }}</div>
                                    </div>
                                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed italic">"{{ $review['text'] }}"</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 12: FAQ Accordion                     -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14 rounded-3xl border border-slate-100 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/FAQPage" id="faq-section">
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mb-6 text-center">
                        Case Study Help USA — Frequently Asked Questions
                    </h2>

                    <div class="space-y-3" x-data="{ open: null }">
                        @php
                        $faqs = [
                            ['q' => 'Why is your service the best choice for Case Study Help in the USA?', 'a' => 'We provide dedicated Case Study Help tailored specifically to US university standards. Every paper is written by US MBA-qualified experts, strictly adheres to your rubric, includes Turnitin originality reports, and guarantees 100% human-written content.'],
                            ['q' => 'Can you provide Case Study Help for Harvard Business School (HBS) cases?', 'a' => 'Yes! Our writers are highly experienced with the Harvard Business School participant-centered case method, Ivey Publishing, Darden, and Stanford GSB case studies.'],
                            ['q' => 'What analytical frameworks are included in your Case Study Help?', 'a' => 'Our Case Study Help covers SWOT & TOWS Matrix, PESTEL Analysis, Porter\'s Five Forces, Value Chain Analysis, McKinsey 7S Framework, VRIO Model, BCG Matrix, Ansoff Matrix, Balanced Scorecard, and DuPont Financial Ratio Diagnostics.'],
                            ['q' => 'Do you provide urgent Case Study Help for US students?', 'a' => 'Yes! We offer express Case Study Help with turnaround times as fast as 12 to 24 hours while maintaining 100% academic quality and zero plagiarism.'],
                            ['q' => 'Is your Case Study Help service confidential?', 'a' => 'Absolutely. We operate with a strict no-disclosure policy. Your personal information, order details, and submitted case study materials are never shared with any third party.'],
                            ['q' => 'What citation styles do you support for Case Study Help?', 'a' => 'We support all major citation styles including APA 7th Edition, Harvard Referencing, MLA, Chicago, and Turabian formatting, each with a complete reference list included at no extra charge.'],
                        ];
                        @endphp
                        @foreach($faqs as $i => $faq)
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="border border-slate-100 rounded-2xl overflow-hidden dark:border-slate-800">
                            <button
                                x-on:click="open = open === {{ $i }} ? null : {{ $i }}"
                                class="w-full flex items-center justify-between p-4 text-left transition-colors dark:hover:bg-slate-800/40"
                                :class="open === {{ $i }} ? 'bg-blue-50/50 dark:bg-blue-950/30' : 'bg-slate-50/30 dark:bg-slate-900'">
                                <span class="font-bold text-xs sm:text-sm text-slate-900 dark:text-white pr-4" itemprop="name">{{ $faq['q'] }}</span>
                                <svg class="w-4 h-4 text-blue-600 dark:text-blue-400 shrink-0 transition-transform duration-200"
                                    :class="open === {{ $i }} ? 'rotate-180' : ''"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>
                            <div x-show="open === {{ $i }}" x-collapse itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="px-4 pb-4 pt-1 bg-blue-50/30 dark:bg-blue-950/20">
                                <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 13: Academic Integrity EEAT            -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="mb-14 rounded-3xl border border-slate-100 bg-white p-6 sm:p-8 shadow-sm dark:border-slate-800 dark:bg-slate-900" id="academic-integrity">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-50 dark:bg-blue-950/50">
                            <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                        </span>
                        <h2 class="text-lg font-bold text-slate-900 dark:text-white">Academic Integrity & Ethical Standards</h2>
                    </div>
                    <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400 mb-3">
                        Assignment Help USA operates under strict ethical guidelines. All case study solutions, analytical frameworks, and financial models provided on this platform are intended as model reference materials to assist students in understanding complex business concepts, developing critical thinking skills, and mastering academic writing.
                    </p>
                    <p class="text-xs leading-relaxed text-slate-600 dark:text-slate-400">
                        We encourage students to utilize our model solutions responsibly as study aids, reference sources, and structural benchmarks in full compliance with their academic institution's honor code policies.
                    </p>
                </section>

                <!-- ══════════════════════════════════════════════ -->
                <!-- SECTION 14: Final CTA Banner                   -->
                <!-- ══════════════════════════════════════════════ -->
                <section class="relative group" id="final-cta">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-[2.5rem] blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>

                    <div class="relative rounded-[2.5rem] bg-[#0F172A] p-8 sm:p-14 overflow-hidden border border-white/10 shadow-2xl">
                        <div class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px]"></div>
                        <div class="absolute bottom-0 left-0 -ml-24 -mb-24 w-96 h-96 bg-indigo-600/10 rounded-full blur-[100px]"></div>

                        <div class="relative max-w-3xl mx-auto text-center">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                                <svg class="w-3.5 h-3.5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">100% Confidential & On-Time</span>
                            </div>

                            <h2 class="text-3xl sm:text-5xl font-black text-white mb-4 leading-tight">
                                Get Expert<br>
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Case Study Help USA</span>
                            </h2>

                            <p class="text-sm sm:text-base text-slate-400 max-w-xl mx-auto mb-8 leading-relaxed">
                                Join over 3,200 US college and MBA students achieving top grades with expert Case Study Help, SWOT analysis, HBS case methods, and strategic recommendations.
                            </p>

                            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                                <a href="{{ route('order', ['assignment_service' => $service->id ?? 6]) }}"
                                   id="final-cta-order-btn"
                                   class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-black rounded-2xl shadow-lg shadow-blue-600/30 hover:scale-105 transition-all duration-300 text-xs uppercase tracking-widest">
                                    Get Case Study Help Now
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </a>
                                <a href="{{ route('pricing') }}"
                                   id="final-cta-price-btn"
                                   class="inline-flex items-center justify-center gap-2 w-full sm:w-auto px-8 py-4 bg-white/10 text-white font-black rounded-2xl border border-white/10 hover:bg-white/20 transition-all duration-300 text-xs uppercase tracking-widest">
                                    Calculate Price
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>
@endsection
