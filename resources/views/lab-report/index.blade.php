@extends('assignment-services.show')

@section('title', 'Lab Report Help & Scientific Writing Service | Hire Expert Writers')
@section('meta_description', 'Need urgent lab report help? Get professional assistance for Chemistry, Physics, Biology, and Engineering lab reports. Accurate data analysis, graphs, error calculations, and APA/CSE formatting. 100% original.')
@section('meta_keywords', 'lab report help, buy lab report online, hire lab report writer, chemistry lab report help, physics lab report help, biology lab report help, online lab report assistance, lab data analysis help, error propagation lab report, scientific report writing service')

@push('head')
    <!-- Canonical Tag -->
    <link rel="canonical" href="{{ url('/lab-report-help') }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Top-Rated Lab Report Help & Scientific Writing Service | AssignmentHelpUSA">
    <meta property="og:description" content="Struggling with raw data, error propagation, or scientific graphs? Hire verified PhD lab report writers for Chemistry, Physics, Biology & Engineering. Guaranteed A grade standards.">
    <meta property="og:url" content="{{ url('/lab-report-help') }}">
    <meta property="og:image" content="{{ asset('images/lab_report_hero_banner.png') }}">

    <!-- Twitter Card -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Expert Lab Report Help & Data Analysis Writing Service">
    <meta property="twitter:description" content="Get fast, accurate lab report help from PhD science specialists. Data calculations, titration graphs, error propagation, and 100% plagiarism-free writing.">
    <meta property="twitter:image" content="{{ asset('images/lab_report_hero_banner.png') }}">

    <!-- JSON-LD Structured Data for Service, FAQPage & HowTo -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "Service",
                "@@id": "{{ url('/lab-report-help') }}#service",
                "name": "Lab Report Help & Scientific Writing Service",
                "provider": {
                    "@@type": "EducationalOrganization",
                    "name": "AssignmentHelpUSA",
                    "url": "{{ url('/') }}"
                },
                "serviceType": "Scientific Writing, Data Analysis & Academic Tutoring",
                "description": "Professional online lab report help for college, university, and high school science students. Specialist support in data analysis, graph generation, error propagation calculations, and scientific formatting (APA, CSE, ACS).",
                "areaServed": "US",
                "hasOfferCatalog": {
                    "@@type": "OfferCatalog",
                    "name": "Lab Report Help Services",
                    "itemListElement": [
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Chemistry Lab Report Help"
                            }
                        },
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Physics Lab Report Help"
                            }
                        },
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Biology Lab Report Help"
                            }
                        },
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Engineering Lab Report Help"
                            }
                        }
                    ]
                }
            },
            {
                "@@type": "FAQPage",
                "@@id": "{{ url('/lab-report-help') }}#faq",
                "mainEntity": [
                    {
                        "@@type": "Question",
                        "name": "What is professional lab report help?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Professional lab report help is academic support provided by qualified science specialists who assist students with processing experimental data, calculating uncertainties and percent errors, plotting publication-quality scientific graphs, and writing comprehensive lab reports adhering to APA, CSE, or ACS style guidelines."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Can I hire a writer to analyze my raw lab data and generate graphs?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes, our science experts analyze your raw measurements, perform all statistical and mathematical calculations with proper significant figures, and create professional charts (calibration curves, scatter plots with error bars, titration graphs) using software like Excel, OriginPro, and GraphPad Prism."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Which scientific disciplines are supported for lab report help?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "We provide lab report help for General Chemistry, Organic Chemistry, Analytical Chemistry, Physics (Kinematics, Circuits, Optics), Biology, Biochemistry, Microbiology, Environmental Science, Electrical & Mechanical Engineering, and Computer Science."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "How quickly can I receive lab report help for an urgent deadline?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "We offer express lab report help with turnaround times as fast as 12 to 24 hours for urgent assignments, as well as standard options for 48+ hours."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Is your lab report writing service confidential and plagiarism-free?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. Every lab report is written 100% from scratch tailored to your dataset and rubric. We include a complimentary Turnitin plagiarism report and protect all client data under 256-bit SSL encryption."
                        }
                    }
                ]
            }
        ]
    }
    </script>
@endpush

@section('custom-content')
    <!-- HERO SECTION: Matching Home Page Branding & Color Combination -->
    <section class="relative bg-gradient-to-b from-slate-900 via-slate-900 to-slate-950 text-white py-14 sm:py-20 overflow-hidden dark:from-slate-950 dark:via-slate-900 dark:to-slate-950" itemscope itemtype="https://schema.org/Service">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#38bdf8_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <!-- Left Column: High-Intent Hero Copy with Brand Blue Colors -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="inline-flex items-center gap-2 rounded-full bg-blue-100/80 text-blue-700 text-xs font-black uppercase tracking-wider px-4 py-1.5 border border-blue-200 backdrop-blur-md dark:bg-blue-950/40 dark:text-blue-300 dark:border-blue-800">
                        <span class="flex h-2 w-2 rounded-full bg-blue-600 animate-pulse"></span>
                        <span>#1 Rated Scientific Lab Report Writing Service</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight text-white leading-[1.15]" itemprop="name">
                        Expert <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-cyan-300 bg-clip-text text-transparent">Lab Report Help</span> From PhD Science Writers
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 leading-relaxed max-w-2xl" itemprop="description">
                        Struggling with raw data calculations, complex titration graphs, or error propagation? Get high-scoring <strong>lab report help</strong> from verified PhD scientists in Chemistry, Physics, Biology, and Engineering. Precision data analysis, publication-grade figures, and 100% Turnitin-safe reports delivered on time.
                    </p>

                    <!-- E-E-A-T Key Value Pills -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-1">
                        <div class="flex items-center gap-2.5 text-xs font-semibold text-slate-200 bg-slate-800/80 p-2.5 rounded-xl border border-slate-700/80 shadow-sm">
                            <span class="text-blue-400 font-bold text-sm">✓</span> Verified PhD Scientists
                        </div>
                        <div class="flex items-center gap-2.5 text-xs font-semibold text-slate-200 bg-slate-800/80 p-2.5 rounded-xl border border-slate-700/80 shadow-sm">
                            <span class="text-blue-400 font-bold text-sm">✓</span> Publication Graphs
                        </div>
                        <div class="flex items-center gap-2.5 text-xs font-semibold text-slate-200 bg-slate-800/80 p-2.5 rounded-xl border border-slate-700/80 shadow-sm">
                            <span class="text-blue-400 font-bold text-sm">✓</span> Exact Error Propagation
                        </div>
                        <div class="flex items-center gap-2.5 text-xs font-semibold text-slate-200 bg-slate-800/80 p-2.5 rounded-xl border border-slate-700/80 shadow-sm">
                            <span class="text-blue-400 font-bold text-sm">✓</span> APA / CSE / ACS Formats
                        </div>
                        <div class="flex items-center gap-2.5 text-xs font-semibold text-slate-200 bg-slate-800/80 p-2.5 rounded-xl border border-slate-700/80 shadow-sm">
                            <span class="text-blue-400 font-bold text-sm">✓</span> 100% Originality Report
                        </div>
                        <div class="flex items-center gap-2.5 text-xs font-semibold text-slate-200 bg-slate-800/80 p-2.5 rounded-xl border border-slate-700/80 shadow-sm">
                            <span class="text-blue-400 font-bold text-sm">✓</span> Express 12h Turnaround
                        </div>
                    </div>

                    <!-- Brand Blue High-Converting CTA Buttons -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 pt-3">
                        <a href="{{ route('order', ['assignment_service' => $service->id ?? 5]) }}"
                            class="inline-flex items-center justify-center gap-2.5 rounded-2xl bg-gradient-to-r from-blue-600 to-indigo-600 px-7 py-4 text-base font-extrabold text-white shadow-xl shadow-blue-600/25 transition-all duration-300 hover:from-blue-500 hover:to-indigo-500 hover:scale-[1.02] hover:shadow-blue-600/40">
                            <span>🔬</span>
                            <span>Hire a Lab Report Writer Now</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="#featured-snippet-definition" class="inline-flex items-center justify-center gap-2 rounded-2xl bg-slate-800/90 px-6 py-4 text-sm font-bold text-slate-200 border border-slate-700 hover:bg-slate-700 hover:text-white transition-colors">
                            <span>📘 Explore 8-Section Structure</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Dual-Theme Graphic Card -->
                <div class="lg:col-span-5">
                    <div class="relative rounded-3xl overflow-hidden border border-slate-700/80 bg-slate-800/60 shadow-2xl p-2.5 group backdrop-blur-sm">
                        <img src="{{ asset('images/lab_report_hero_banner.png') }}" 
                             alt="Professional Lab Report Help Workspace with Chemistry Equipment, Laptop, and Data Charts" 
                             class="w-full h-auto rounded-2xl object-cover transition-transform duration-700 group-hover:scale-105"
                             width="600" height="400">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-5 left-5 right-5 p-4 rounded-2xl bg-slate-900/90 border border-slate-700/90 backdrop-blur-md shadow-lg">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <div class="h-11 w-11 rounded-2xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-extrabold text-xl">99%</div>
                                    <div>
                                        <p class="text-xs font-bold text-white">Calculation Accuracy Score</p>
                                        <p class="text-[11px] text-slate-400">Verified by peer review</p>
                                    </div>
                                </div>
                                <span class="text-xs bg-blue-500/20 text-blue-300 font-bold px-3 py-1.5 rounded-xl border border-blue-500/30">Live Lab Mentors</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN BODY SECTION: Optimized for Light Mode and Dark Mode with Site Blue Colors -->
    <section class="py-16 sm:py-20 bg-slate-50 text-slate-900 transition-colors duration-300 dark:bg-slate-950 dark:text-slate-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto space-y-16">

                <!-- FEATURED SNIPPET OPTIMIZED BLOCK: What is Lab Report Help? -->
                <div id="featured-snippet-definition" class="rounded-3xl bg-white p-6 sm:p-10 border-2 border-blue-500/40 shadow-lg relative transition-colors duration-300 dark:bg-slate-900 dark:border-blue-500/40">
                    <div class="absolute -top-4 left-8 bg-gradient-to-r from-blue-600 to-indigo-600 text-white text-xs font-extrabold px-4 py-1.5 rounded-full uppercase tracking-wider shadow-md">
                        Featured Snippet Quick Answer
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 mb-4 flex items-center gap-3 dark:text-white">
                        <span class="text-blue-600 dark:text-blue-400 text-3xl">💡</span> What is Lab Report Help?
                    </h2>

                    <!-- Direct Answer Box (Snippet Optimized 35-50 Words) -->
                    <div class="text-base leading-relaxed text-slate-800 bg-slate-50 p-5 rounded-2xl border border-slate-200 font-semibold mb-5 transition-colors duration-300 dark:bg-slate-950 dark:border-slate-800 dark:text-slate-200">
                        <strong>Lab report help</strong> is professional academic assistance provided by scientific experts to assist students in organizing raw experimental data, performing error propagation and calculations, generating publication-quality graphs, and drafting standard lab report sections (Abstract, Methodology, Results, Discussion) formatted in APA, CSE, or ACS style.
                    </div>

                    <p class="text-sm sm:text-base leading-relaxed text-slate-600 mb-6 dark:text-slate-400">
                        Unlike standard essay writing, scientific lab reports require strict numerical accuracy, logical synthesis of experimental observations, error propagation analysis, and formatting adherence to specific university lab manuals. Our online <strong>lab report writing service</strong> provides complete support across Chemistry, Physics, Biology, and Engineering courses.
                    </p>

                    <!-- E-E-A-T Author & Reviewer Verification Box -->
                    <div class="flex items-center gap-4 pt-5 border-t border-slate-200 dark:border-slate-800">
                        <div class="h-12 w-12 rounded-2xl bg-blue-600 text-white font-black flex items-center justify-center text-lg shrink-0 shadow-md">
                            RV
                        </div>
                        <div>
                            <p class="text-xs font-black text-slate-900 dark:text-white">Scientifically Reviewed By: Dr. Robert Vance, Ph.D. in Analytical Chemistry</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Senior Academic Writing Mentor | Ex-University Laboratory Instructor (12+ Yrs Experience)</p>
                        </div>
                    </div>
                </div>

                <!-- NEW INFORMATION GAIN SECTION: COMMON LAB REPORT MISTAKES & EXPERT FIXES (Google Helpful Content System) -->
                <div class="space-y-8">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/80 text-blue-800 text-[10px] font-black uppercase tracking-widest mb-3 border border-blue-200 dark:bg-blue-950/40 dark:text-blue-300 dark:border-blue-800">
                            Academic Excellence Guide
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 dark:text-white">Common Lab Report Errors & How We Fix Them</h2>
                        <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Avoid the most frequent grade-deducting mistakes students make in laboratory papers</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Left Column: Common Student Errors -->
                        <div class="rounded-3xl bg-red-50/70 p-6 sm:p-8 border border-red-200 space-y-4 transition-colors duration-300 dark:bg-red-950/20 dark:border-red-900/40">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-2xl bg-red-600 text-white font-black flex items-center justify-center text-lg shadow-sm">❌</div>
                                <h3 class="text-lg font-black text-red-950 dark:text-red-300">Frequent Student Errors</h3>
                            </div>

                            <ul class="space-y-3.5 text-xs sm:text-sm text-red-900 dark:text-red-200">
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>First-Person Narrative:</strong> Writing "I measured 25mL of HCl and mixed it" instead of scientific third-person passive voice.</div>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>Mixing Results & Discussion:</strong> Interpreting observations or explaining errors inside the Results section instead of reserving it for Discussion.</div>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>Unlabeled Graphs & Missing Units:</strong> Plotting data without axis labels, measurement units, trendline R² values, or error bars.</div>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>Ignoring Uncertainty & Significant Digits:</strong> Reporting 5 decimal places from a calculator when instrument precision only allows 2.</div>
                                </li>
                            </ul>
                        </div>

                        <!-- Right Column: How Our Experts Solve It -->
                        <div class="rounded-3xl bg-emerald-50/70 p-6 sm:p-8 border border-emerald-200 space-y-4 transition-colors duration-300 dark:bg-emerald-950/20 dark:border-emerald-900/40">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-2xl bg-emerald-600 text-white font-black flex items-center justify-center text-lg shadow-sm">✅</div>
                                <h3 class="text-lg font-black text-emerald-950 dark:text-emerald-300">How Our Lab Writers Fix It</h3>
                            </div>

                            <ul class="space-y-3.5 text-xs sm:text-sm text-emerald-900 dark:text-emerald-200">
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Strict Passive Voice:</strong> "25.0 mL of HCl was titrated with standard NaOH solution to a phenolphthalein endpoint."</div>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Logical Section Separation:</strong> Objective findings presented cleanly in Results; theoretical explanations and error analysis placed in Discussion.</div>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Publication Figures:</strong> Excel, OriginPro, and Prism plots complete with SI units, R² equations, and standard deviation error bars.</div>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Rigorous Error Propagation:</strong> Percent error calculations and instrument precision bounds ($\pm \delta x$) fully calculated.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- KEY METRICS / TRUST BANNER (Matching Home Page Dark Card) -->
                <div class="rounded-3xl bg-slate-900 p-8 text-white shadow-xl border border-slate-800 transition-colors duration-300 dark:bg-slate-900/90 dark:border-slate-800">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                        <div class="space-y-1">
                            <p class="text-3xl sm:text-4xl font-black text-blue-400">3,500+</p>
                            <p class="text-xs text-slate-300 font-bold uppercase tracking-wider">Lab Reports Written</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-3xl sm:text-4xl font-black text-emerald-400">99.4%</p>
                            <p class="text-xs text-slate-300 font-bold uppercase tracking-wider">Calculation Accuracy</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-3xl sm:text-4xl font-black text-indigo-400">140+</p>
                            <p class="text-xs text-slate-300 font-bold uppercase tracking-wider">PhD Science Tutors</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-3xl sm:text-4xl font-black text-cyan-300">4.9 / 5.0</p>
                            <p class="text-xs text-slate-300 font-bold uppercase tracking-wider">Student Rating (2k+ Reviews)</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION: HOW OUR LAB REPORT HELP WORKS (5 Step Workflow) -->
                <div class="space-y-8">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/80 text-blue-800 text-[10px] font-black uppercase tracking-widest mb-3 border border-blue-200 dark:bg-blue-950/40 dark:text-blue-300 dark:border-blue-800">
                            Simple 5-Step Process
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 dark:text-white">How Our Online Lab Report Help Works</h2>
                        <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Get fast, accurate, and stress-free scientific report assistance</p>
                    </div>

                    <div class="grid md:grid-cols-5 gap-4">
                        <div class="flex flex-col bg-white rounded-2xl p-6 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-sm">1</div>
                            <h3 class="font-extrabold text-base text-slate-900 mb-2 dark:text-white">Upload Raw Data</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">Submit your lab manual, raw measurements, photos of your notebook, or professor rubrics.</p>
                        </div>

                        <div class="flex flex-col bg-white rounded-2xl p-6 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-sm">2</div>
                            <h3 class="font-extrabold text-base text-slate-900 mb-2 dark:text-white">PhD Writer Match</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">We pair you with a verified scientist in Chemistry, Physics, Biology, or Engineering.</p>
                        </div>

                        <div class="flex flex-col bg-white rounded-2xl p-6 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-sm">3</div>
                            <h3 class="font-extrabold text-base text-slate-900 mb-2 dark:text-white">Math & Graphs</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">We execute error propagation, titration curves, R² linear fits, and statistical calculations.</p>
                        </div>

                        <div class="flex flex-col bg-white rounded-2xl p-6 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-sm">4</div>
                            <h3 class="font-extrabold text-base text-slate-900 mb-2 dark:text-white">Report Drafting</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">Full 8-section report drafting in scientific past-tense passive voice with APA/CSE citations.</p>
                        </div>

                        <div class="flex flex-col bg-white rounded-2xl p-6 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-blue-600 text-white font-extrabold flex items-center justify-center text-base mb-4 shadow-sm">5</div>
                            <h3 class="font-extrabold text-base text-slate-900 mb-2 dark:text-white">Quality Audit</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">Double-blind calculation check and Turnitin plagiarism scan before on-time delivery.</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION: DATA ANALYSIS SHOWCASE WITH CUSTOM GRAPHIC -->
                <div class="grid lg:grid-cols-12 gap-8 items-center rounded-3xl bg-white p-6 sm:p-10 border border-slate-200 shadow-md transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="lg:col-span-6 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-blue-100 text-blue-800 text-xs font-extrabold dark:bg-blue-950/40 dark:text-blue-300">
                            <span>📊 Precision Data Visualization & Math</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white">Advanced Data Analysis & Custom Scientific Graphs</h2>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Raw laboratory data requires analytical treatment to unlock full grade potential. When you request our <strong>lab report data analysis help</strong>, our team utilizes software tools like Microsoft Excel, OriginPro, GraphPad Prism, and R Studio to model your experimental findings.
                        </p>

                        <div class="space-y-3.5 text-sm text-slate-700 dark:text-slate-300">
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 font-bold shrink-0 dark:bg-blue-950/50 dark:text-blue-400">✓</div>
                                <div><strong>Scatter Plots & Linear Regression:</strong> Best-fit trendlines, R² correlation coefficients, and equation display.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 font-bold shrink-0 dark:bg-blue-950/50 dark:text-blue-400">✓</div>
                                <div><strong>Error Bars & Propagation:</strong> Standard deviation, standard error of the mean (SEM), and confidence intervals.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 font-bold shrink-0 dark:bg-blue-950/50 dark:text-blue-400">✓</div>
                                <div><strong>Specialized Plots:</strong> Titration curves, absorption spectra, chromatograms, and enzyme kinetics curves.</div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-md bg-blue-50 flex items-center justify-center text-blue-600 font-bold shrink-0 dark:bg-blue-950/50 dark:text-blue-400">✓</div>
                                <div><strong>Significant Digits & SI Units:</strong> Meticulous adherence to physical constants, units, and table captions.</div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-6">
                        <div class="rounded-2xl overflow-hidden border border-slate-200 bg-slate-50 p-2 shadow-lg dark:bg-slate-950 dark:border-slate-800">
                            <img src="{{ asset('images/lab_data_analysis_preview.png') }}" 
                                 alt="Scientific Data Analysis Infographic displaying graphs, titration curves, error margins and statistical tables" 
                                 class="w-full h-auto rounded-xl object-cover"
                                 width="550" height="380">
                        </div>
                    </div>
                </div>

                <!-- FEATURED SNIPPET TABLE: 8 SECTIONS OF A LAB REPORT -->
                <div class="space-y-8">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 dark:text-white">8 Standard Sections Included in Our Lab Report Help</h2>
                        <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Every report adheres to international scientific publishing standards</p>
                    </div>

                    <div class="overflow-x-auto rounded-3xl border border-slate-200 bg-white shadow-md transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                        <table class="w-full text-left border-collapse text-sm">
                            <thead>
                                <tr class="bg-slate-900 text-white dark:bg-slate-950">
                                    <th class="p-4 sm:p-5 font-black border-b border-slate-800">Lab Report Section</th>
                                    <th class="p-4 sm:p-5 font-black border-b border-slate-800">Core Content & Objective</th>
                                    <th class="p-4 sm:p-5 font-black border-b border-slate-800">Scientific Tense & Style</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 text-slate-700 dark:divide-slate-800 dark:text-slate-300">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">1. Title Page & Abstract</td>
                                    <td class="p-4 sm:p-5">Descriptive experiment title, 150-250 word summary of purpose, key findings, and main conclusions.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Present / Past Tense</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">2. Introduction & Theory</td>
                                    <td class="p-4 sm:p-5">Theoretical background, scientific laws, equation derivations, hypothesis, and experimental rationale.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Present Tense (Established Theory)</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">3. Materials & Methods</td>
                                    <td class="p-4 sm:p-5">Step-by-step experimental procedure, chemical formulas, equipment specs, and safety precautions.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Past Tense, Passive Voice</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">4. Raw & Processed Results</td>
                                    <td class="p-4 sm:p-5">Structured data tables, sample calculations, percent yield, unit conversions, and formatted graphs.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Past Tense (Objective Data)</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">5. Error Propagation & Analysis</td>
                                    <td class="p-4 sm:p-5">Systematic vs. random error identification, percent error formulas, equipment uncertainty bounds.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Analytical & Mathematical</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">6. Discussion</td>
                                    <td class="p-4 sm:p-5">Critical evaluation of findings, comparison with theoretical values, literature links, and anomalies.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Present / Interpretive</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">7. Conclusion</td>
                                    <td class="p-4 sm:p-5">Concise summary confirming whether hypothesis was supported, overall experimental success.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Past Tense Summary</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-4 sm:p-5 font-bold text-slate-900 dark:text-white">8. References & Appendices</td>
                                    <td class="p-4 sm:p-5">In-text citations and reference list formatted in APA, CSE, ACS, or Vancouver style + raw data logs.</td>
                                    <td class="p-4 sm:p-5 text-xs font-bold text-blue-600 dark:text-blue-400">Strict Style Guide</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- SECTION: LONG-TAIL KEYWORD EXPERIMENT INDEX (Google Search Intent Optimization) -->
                <div class="space-y-8">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/80 text-blue-800 text-[10px] font-black uppercase tracking-widest mb-3 border border-blue-200 dark:bg-blue-950/40 dark:text-blue-300 dark:border-blue-800">
                            Experiment Index
                        </div>
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 dark:text-white">Frequent Science Lab Experiments We Help With</h2>
                        <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Expert calculation and report writing across popular university lab topics</p>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-blue-600 dark:text-blue-400">Chemistry Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Acid-Base Titration</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Standardization of NaOH, equivalence point determination, derivative pH curves.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-blue-600 dark:text-blue-400">Chemistry Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Aspirin Synthesis</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Esterification of salicylic acid, percent yield, recrystallization, and melting point analysis.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-purple-600 dark:text-purple-400">Physics Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Ohm's Law & Circuits</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Voltage-current linear regression, Kirchhoff's circuit loops, and resistor tolerance calculation.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-purple-600 dark:text-purple-400">Physics Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Optics & Diffraction</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Young's double-slit experiment, laser wavelength calculation, diffraction grating analysis.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-emerald-600 dark:text-emerald-400">Biology Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Enzyme Kinetics</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Substrate concentration velocity curves, Km and Vmax calculation, inhibitor effect plotting.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-emerald-600 dark:text-emerald-400">Biology Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Gel Electrophoresis</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Plasmid DNA migration analysis, standard ladder log molecular weight mapping.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-amber-600 dark:text-amber-400">Engineering Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Tensile Strength Test</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Stress-strain curves, Young's Modulus calculation, yield strength determination.</p>
                        </div>
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-2">
                            <span class="text-xs font-extrabold text-amber-600 dark:text-amber-400">Engineering Labs</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Fluid Mechanics</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Reynolds number calculations, pipe friction loss, Bernoulli's energy balance verification.</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION: SCIENCE DISCIPLINES COVERED (Grid with Light/Dark Cards) -->
                <div class="space-y-8">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 dark:text-white">Comprehensive Lab Report Help Across All Science Fields</h2>
                        <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Targeted support by subject-matter specialists</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Chemistry Card -->
                        <div class="flex flex-col bg-white rounded-3xl p-7 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-12 w-12 rounded-2xl bg-blue-100 text-blue-600 font-black flex items-center justify-center text-2xl mb-5 dark:bg-blue-950/50 dark:text-blue-400">🧪</div>
                            <h3 class="text-lg font-black text-slate-900 mb-2 dark:text-white">Chemistry Lab Report Help</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Cover General, Organic, Physical, and Analytical Chemistry. Acid-base titrations, spectrophotometry, stoichiometry, thermochemistry, NMR/IR spectrum analysis, and organic synthesis.
                            </p>
                        </div>

                        <!-- Physics Card -->
                        <div class="flex flex-col bg-white rounded-3xl p-7 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-12 w-12 rounded-2xl bg-purple-100 text-purple-600 font-black flex items-center justify-center text-2xl mb-5 dark:bg-purple-950/50 dark:text-purple-400">⚡</div>
                            <h3 class="text-lg font-black text-slate-900 mb-2 dark:text-white">Physics Lab Report Help</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Kinematics, projectile motion, Ohm's law, circuit analysis, optics, lens diffraction, pendulum mechanics, thermodynamics, and quantum physics error calculations.
                            </p>
                        </div>

                        <!-- Biology Card -->
                        <div class="flex flex-col bg-white rounded-3xl p-7 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-600 font-black flex items-center justify-center text-2xl mb-5 dark:bg-emerald-950/50 dark:text-emerald-400">🔬</div>
                            <h3 class="text-lg font-black text-slate-900 mb-2 dark:text-white">Biology Lab Report Help</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Cell respiration, photosynthesis, enzyme kinetics, DNA extraction, agarose gel electrophoresis, microbiology staining, genetics Punnett squares, and ecology field sampling.
                            </p>
                        </div>

                        <!-- Biochemistry Card -->
                        <div class="flex flex-col bg-white rounded-3xl p-7 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-12 w-12 rounded-2xl bg-teal-100 text-teal-600 font-black flex items-center justify-center text-2xl mb-5 dark:bg-teal-950/50 dark:text-teal-400">🧬</div>
                            <h3 class="text-lg font-black text-slate-900 mb-2 dark:text-white">Biochemistry Lab Report Help</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Protein assays (Bradford/BCA), Michaelis-Menten enzyme kinetics (Km and Vmax determination), SDS-PAGE, Western blot analysis, and metabolic pathway assays.
                            </p>
                        </div>

                        <!-- Engineering Card -->
                        <div class="flex flex-col bg-white rounded-3xl p-7 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-12 w-12 rounded-2xl bg-amber-100 text-amber-600 font-black flex items-center justify-center text-2xl mb-5 dark:bg-amber-950/50 dark:text-amber-400">⚙️</div>
                            <h3 class="text-lg font-black text-slate-900 mb-2 dark:text-white">Engineering Lab Report Help</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Tensile strength testing, fluid mechanics, heat exchanger efficiency, oscilloscope signal analysis, microcontrollers, MATLAB simulation reports, and structural stress.
                            </p>
                        </div>

                        <!-- Environmental Science Card -->
                        <div class="flex flex-col bg-white rounded-3xl p-7 border border-slate-200 shadow-sm transition-all duration-300 hover:shadow-lg hover:-translate-y-1 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-12 w-12 rounded-2xl bg-rose-100 text-rose-600 font-black flex items-center justify-center text-2xl mb-5 dark:bg-rose-950/50 dark:text-rose-400">🌱</div>
                            <h3 class="text-lg font-black text-slate-900 mb-2 dark:text-white">Environmental Science Help</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Water dissolved oxygen testing, soil heavy metal concentration, air quality indexing, biodiversity Shannon index calculations, and GIS spatial data reporting.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SECTION: EXPERT TUTORS SHOWCASE WITH CUSTOM GRAPHIC (E-E-A-T) -->
                <div class="grid lg:grid-cols-12 gap-8 items-center rounded-3xl bg-slate-900 p-6 sm:p-10 text-white shadow-xl border border-slate-800 dark:bg-slate-900">
                    <div class="lg:col-span-6">
                        <div class="rounded-2xl overflow-hidden border border-slate-700 bg-slate-800 p-2 shadow-lg">
                            <img src="{{ asset('images/science_tutors_lab.png') }}" 
                                 alt="Verified Scientific Tutors working in modern research lab on lab report data analysis" 
                                 class="w-full h-auto rounded-xl object-cover"
                                 width="550" height="380">
                        </div>
                    </div>

                    <div class="lg:col-span-6 space-y-5">
                        <div class="inline-flex items-center gap-2 text-xs font-black text-emerald-400 bg-emerald-500/10 border border-emerald-500/30 px-3.5 py-1.5 rounded-full">
                            <span>🎓 Strict E-E-A-T Standards</span>
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-black text-white">Who Will Write Your Lab Report?</h2>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            We never assign generic essay writers to scientific reports. Your project is assigned exclusively to domain experts holding M.Sc or Ph.D. degrees with active hands-on laboratory experience.
                        </p>

                        <div class="space-y-3.5 text-xs sm:text-sm text-slate-200">
                            <div class="flex items-center gap-3.5 bg-slate-800/80 p-3.5 rounded-2xl border border-slate-700">
                                <span class="text-emerald-400 text-xl font-bold">👩‍🔬</span>
                                <div><strong>Verified Academic Degrees:</strong> Transcripts and credentials are independently audited before joining.</div>
                            </div>
                            <div class="flex items-center gap-3.5 bg-slate-800/80 p-3.5 rounded-2xl border border-slate-700">
                                <span class="text-emerald-400 text-xl font-bold">📈</span>
                                <div><strong>Software Mastery:</strong> Native expertise in Excel formulas, OriginPro, Prism, R Studio, and ChemDraw.</div>
                            </div>
                            <div class="flex items-center gap-3.5 bg-slate-800/80 p-3.5 rounded-2xl border border-slate-700">
                                <span class="text-emerald-400 text-xl font-bold">🛡️</span>
                                <div><strong>Academic Rigor:</strong> 100% compliance with university lab manual criteria, grading rubrics, and deadlines.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FREQUENTLY ASKED QUESTIONS (FAQ Accordion with Schema) -->
                <div class="space-y-8" itemscope itemtype="https://schema.org/FAQPage">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-3xl sm:text-4xl font-black tracking-tight text-slate-900 dark:text-white">Lab Report Help FAQs</h2>
                        <p class="mt-2 text-sm sm:text-base text-slate-600 dark:text-slate-400">Answers to common questions regarding scientific report assistance</p>
                    </div>

                    <div class="space-y-4 max-w-4xl mx-auto">
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-2xl bg-white p-6 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-base font-extrabold text-slate-900 mb-2 dark:text-white" itemprop="name">What information do I need to submit for lab report help?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    Upload your lab manual instructions sheet, raw measurements or observations recorded in your lab notebook, your required citation format (APA, CSE, ACS), and your target deadline. If you have partial data, our specialists will assist in calculating theoretical values.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-2xl bg-white p-6 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-base font-extrabold text-slate-900 mb-2 dark:text-white" itemprop="name">Can you construct graphs and perform error propagation calculations?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    Yes! Graphs, trendlines with R² values, percent error calculations, standard deviation, and error propagation analysis are core features of our <strong>lab report help</strong>. We format all figures professionally with labels, units, and descriptive captions.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-2xl bg-white p-6 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-base font-extrabold text-slate-900 mb-2 dark:text-white" itemprop="name">Is your lab report help service confidential and plagiarism-free?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    Absolutely. Every lab report is written 100% from scratch tailored to your unique dataset and rubric. We include a complimentary Turnitin plagiarism report and strictly protect client privacy under 256-bit SSL encryption.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-2xl bg-white p-6 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-base font-extrabold text-slate-900 mb-2 dark:text-white" itemprop="name">What if my professor requests revisions?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    We offer 7 days of free unlimited revisions. If your professor requests specific additions, graph modifications, or formatting tweaks, your designated science mentor will update the report promptly at no extra charge.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INTERNAL LINKING FOOTER HUB (SEO Equity Link Building) -->
                <div class="rounded-3xl bg-slate-100 p-8 border border-slate-200 transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <h3 class="text-sm font-black uppercase tracking-wider text-slate-900 mb-4 dark:text-white">Explore Related Academic Assistance Services</h3>
                    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 text-xs">
                        <a href="{{ route('services.homework-help.index') }}" class="p-3 rounded-xl bg-white border border-slate-200 font-bold text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400">
                            📚 General Homework Help
                        </a>
                        <a href="{{ route('services.homework-help.physics') }}" class="p-3 rounded-xl bg-white border border-slate-200 font-bold text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400">
                            ⚡ Physics Homework Help
                        </a>
                        <a href="{{ route('services.homework-help.math') }}" class="p-3 rounded-xl bg-white border border-slate-200 font-bold text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400">
                            📐 Math Problem Solver
                        </a>
                        <a href="{{ route('services.research-paper.index') }}" class="p-3 rounded-xl bg-white border border-slate-200 font-bold text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400">
                            📄 Research Paper Writing
                        </a>
                    </div>
                </div>

                <!-- FINAL CONVERSION CTA BANNER: Matching Site Blue Theme -->
                <div class="rounded-3xl bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 p-8 sm:p-12 text-center text-white shadow-2xl space-y-5">
                    <h2 class="text-3xl sm:text-4xl font-black">Ready to Get Professional Lab Report Help?</h2>
                    <p class="text-base sm:text-lg text-blue-100 max-w-2xl mx-auto">
                        Don't let raw data or tight deadlines stress you out. Connect with a PhD scientific mentor today and receive an accurate, publication-ready lab report.
                    </p>

                    <div class="pt-2">
                        <a href="{{ route('order', ['assignment_service' => $service->id ?? 5]) }}"
                            class="inline-flex items-center justify-center gap-3 rounded-2xl bg-white px-9 py-4.5 text-base font-black text-blue-700 shadow-xl transition-all duration-300 hover:bg-slate-100 hover:scale-105">
                            <span>📝</span>
                            <span>Order Your Lab Report Now</span>
                            <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- ACADEMIC INTEGRITY NOTICE -->
                <div class="rounded-2xl bg-amber-50/90 border border-amber-200 p-5 text-xs leading-relaxed text-amber-900 transition-colors duration-300 dark:bg-amber-950/20 dark:border-amber-900/40 dark:text-amber-300">
                    <p>
                        <strong>Academic Integrity & Fair Use Policy:</strong> The lab report assistance provided by AssignmentHelpUSA is intended as an educational writing guide, model analysis, and research reference. Students are encouraged to study the provided methodology, formulas, and graphs to deepen their scientific understanding and cite sources in compliance with university code of conduct.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
