@extends('assignment-services.show')

@section('title', 'Law Assignment Help | Legal Research & Case Brief Writing Service')
@section('meta_description', 'Get expert law assignment help from qualified J.D., LL.M. attorneys and law professors. Specialist assistance with case briefs, legal memorandums, IRAC analysis, Westlaw/Lexis research, and Bluebook citations.')
@section('meta_keywords', 'law assignment help, legal writing service, law homework help, case brief help, legal research assistance, IRAC analysis, law essay writing, legal studies help, law school help, contract law help, constitutional law assignment help')

@push('head')
    <!-- Canonical Tag -->
    <link rel="canonical" href="{{ url('/law-assignment-help') }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Top-Rated Law Assignment Help & Legal Writing Service | AssignmentHelpUSA">
    <meta property="og:description" content="Struggling with complex IRAC analysis, case briefs, or legal research? Hire verified J.D. and LL.M. legal experts for Constitutional, Contract, Criminal, and Tort law assignments.">
    <meta property="og:url" content="{{ url('/law-assignment-help') }}">
    <meta property="og:image" content="{{ asset('images/law_assignment_hero_banner.png') }}">

    <!-- Twitter Card -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Expert Law Assignment Help & Legal Research Service">
    <meta property="twitter:description" content="Get fast, accurate law assignment help from J.D. attorneys. Westlaw/Lexis research, IRAC structuring, Bluebook citations, and 100% plagiarism-free writing.">
    <meta property="twitter:image" content="{{ asset('images/law_assignment_hero_banner.png') }}">

    <!-- JSON-LD Structured Data for Service & FAQPage -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@graph": [
            {
                "@@type": "Service",
                "@@id": "{{ url('/law-assignment-help') }}#service",
                "name": "Law Assignment Help & Legal Writing Service",
                "provider": {
                    "@@type": "EducationalOrganization",
                    "name": "AssignmentHelpUSA",
                    "url": "{{ url('/') }}"
                },
                "serviceType": "Legal Writing, Case Briefs & Academic Tutoring",
                "description": "Professional law assignment help for law school (J.D./LL.M.) and undergraduate legal studies students. Expert support in legal research (Westlaw, LexisNexis), IRAC/CREAC structuring, case briefs, and Bluebook citations.",
                "areaServed": "US",
                "hasOfferCatalog": {
                    "@@type": "OfferCatalog",
                    "name": "Law Assignment Help Services",
                    "itemListElement": [
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Constitutional Law Assignment Help"
                            }
                        },
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Contract Law & UCC Assignment Help"
                            }
                        },
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Criminal Law & Procedure Help"
                            }
                        },
                        {
                            "@@type": "Offer",
                            "itemOffered": {
                                "@@type": "Service",
                                "name": "Tort Law & Personal Injury Assignment Help"
                            }
                        }
                    ]
                }
            },
            {
                "@@type": "FAQPage",
                "@@id": "{{ url('/law-assignment-help') }}#faq",
                "mainEntity": [
                    {
                        "@@type": "Question",
                        "name": "What qualifications do your law assignment experts hold?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Our legal writing team comprises verified legal professionals holding J.D. (Juris Doctor), LL.M., or Ph.D. in Law degrees from accredited law schools. Many are practicing attorneys, former judicial clerks, and adjunct law professors experienced in legal research and Bluebook citations."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Do you use the IRAC and CREAC legal frameworks?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. Every legal memorandum, law essay, and exam response is structured using standard legal analytical frameworks such as IRAC (Issue, Rule, Application, Conclusion) or CREAC (Conclusion, Rule, Explanation, Application, Conclusion) tailored to your instructor's rubric."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Which legal research databases do your writers use?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Our legal scholars conduct primary and secondary legal research using Westlaw Precision, Lexis+ (LexisNexis), Bloomberg Law, HeinOnline, and official state/federal court dockets with proper KeyCite and Shepardizing verification."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Are Bluebook 21st Edition citations included?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "Yes. We format all case citations, statutory codes, Restatements, law review articles, and constitutional clauses in strict accordance with The Bluebook: A Uniform System of Citation (21st Edition) or ALWD rules as required."
                        }
                    },
                    {
                        "@@type": "Question",
                        "name": "Is your law assignment help service confidential and plagiarism-free?",
                        "acceptedAnswer": {
                            "@@type": "Answer",
                            "text": "100% confidential. All assignments are drafted from scratch specifically for your fact pattern and syllabus. We provide a complimentary Turnitin plagiarism report with every completed order."
                        }
                    }
                ]
            }
        ]
    }
    </script>
@endpush

@section('custom-content')
    <!-- HERO SECTION: High Impact Branding -->
    <section class="relative bg-slate-950 text-white py-12 sm:py-16 overflow-hidden dark:bg-slate-950" itemscope itemtype="https://schema.org/Service">
        <div class="absolute inset-0 bg-[radial-gradient(#1e293b_1px,transparent_1px)] [background-size:20px_20px] opacity-40 pointer-events-none"></div>
        <div class="absolute top-0 right-0 -mr-24 -mt-24 w-80 h-80 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -ml-24 -mb-24 w-80 h-80 bg-indigo-600/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <!-- Left Column: Hero Content -->
                <div class="lg:col-span-7 space-y-5">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-100/50 text-blue-700 text-[10px] font-black uppercase tracking-widest border border-blue-200 dark:bg-blue-950/40 dark:text-blue-300 dark:border-blue-800">
                        <span class="w-1.5 h-1.5 rounded-full bg-blue-600 animate-pulse"></span>
                        #1 Verified Legal Writing & Case Brief Service
                    </div>

                    <h1 class="text-3xl sm:text-5xl font-black tracking-tight text-white leading-tight" itemprop="name">
                        Expert <span class="text-blue-600">Law Assignment Help</span> <br>
                        From Verified J.D. Writers
                    </h1>

                    <p class="text-base text-slate-300 leading-relaxed max-w-2xl" itemprop="description">
                        Overwhelmed by complex IRAC fact patterns, precedent case law, or Bluebook formatting? Get high-scoring <strong>law assignment help</strong> from practicing attorneys and J.D. graduates. Westlaw & Lexis research, rigorous case briefs, and 100% Turnitin-safe legal memorandums delivered on time.
                    </p>

                    <!-- Key Value Pills -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 pt-1">
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-200 bg-slate-900/80 p-2.5 rounded-xl border border-slate-800 shadow-sm">
                            <span class="text-blue-500 font-black">✓</span> Verified J.D. Writers
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-200 bg-slate-900/80 p-2.5 rounded-xl border border-slate-800 shadow-sm">
                            <span class="text-blue-500 font-black">✓</span> IRAC & CREAC Method
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-200 bg-slate-900/80 p-2.5 rounded-xl border border-slate-800 shadow-sm">
                            <span class="text-blue-500 font-black">✓</span> Westlaw / Lexis Research
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-200 bg-slate-900/80 p-2.5 rounded-xl border border-slate-800 shadow-sm">
                            <span class="text-blue-500 font-black">✓</span> Bluebook 21st Edition
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-200 bg-slate-900/80 p-2.5 rounded-xl border border-slate-800 shadow-sm">
                            <span class="text-blue-500 font-black">✓</span> 100% Originality Report
                        </div>
                        <div class="flex items-center gap-2 text-xs font-bold text-slate-200 bg-slate-900/80 p-2.5 rounded-xl border border-slate-800 shadow-sm">
                            <span class="text-blue-500 font-black">✓</span> Express 12h Delivery
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-2">
                        <a href="{{ route('order', ['assignment_service' => $service->id ?? 1]) }}"
                            class="group relative inline-flex items-center justify-center gap-2.5 px-6 py-3.5 bg-blue-600 text-white font-black rounded-xl hover:bg-white hover:text-blue-600 transition-all duration-300 shadow-lg shadow-blue-600/20 text-xs uppercase tracking-wider">
                            <span>⚖️</span>
                            <span>Hire a Law Writer Now</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </a>
                        <a href="#featured-snippet-definition" 
                           class="inline-flex items-center justify-center gap-2 py-3.5 px-5 bg-slate-900 text-slate-200 font-bold rounded-xl border border-slate-800 hover:bg-slate-800 hover:text-white transition-all text-xs uppercase tracking-wider">
                            <span>📖 Explore IRAC Framework</span>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Compact Graphic Card -->
                <div class="lg:col-span-5">
                    <div class="relative rounded-2xl overflow-hidden border border-slate-800 bg-slate-900 p-2 shadow-xl group">
                        <img src="{{ asset('images/law_assignment_hero_banner.png') }}" 
                             alt="Professional Law Assignment Help Workspace" 
                             class="w-full h-auto rounded-xl object-cover transition-transform duration-500 group-hover:scale-105"
                             width="550" height="360">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-slate-950/90 border border-slate-800 backdrop-blur-md shadow-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="h-10 w-10 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-black text-lg">99%</div>
                                    <div>
                                        <p class="text-xs font-black text-white">IRAC Reasoning Score</p>
                                        <p class="text-[11px] text-slate-400">Audited by practicing attorneys</p>
                                    </div>
                                </div>
                                <span class="text-[10px] bg-blue-500/20 text-blue-300 font-bold px-2.5 py-1 rounded-lg border border-blue-500/30 uppercase tracking-wider">J.D. Mentors</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPACT & MINIMAL MAIN BODY SECTION -->
    <section class="py-10 sm:py-12 bg-slate-50 relative overflow-hidden dark:bg-slate-950 transition-colors duration-300">
        <div class="absolute inset-0 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:20px_20px] opacity-30 dark:bg-[radial-gradient(#1e293b_1px,transparent_1px)] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-6xl mx-auto space-y-10 sm:space-y-12">

                <!-- FEATURED SNIPPET QUICK ANSWER CARD (Minimal & Compact) -->
                <div id="featured-snippet-definition" class="rounded-2xl bg-white p-6 sm:p-8 border border-slate-200 shadow-sm relative transition-all duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <div class="absolute -top-3 left-6 bg-blue-600 text-white text-[10px] font-black px-3.5 py-1 rounded-full uppercase tracking-wider shadow-sm">
                        Featured Snippet Quick Answer
                    </div>

                    <h2 class="text-2xl font-black text-slate-900 mb-3 flex items-center gap-2.5 dark:text-white">
                        <span class="text-blue-600 text-2xl">💡</span> What is Law Assignment Help?
                    </h2>

                    <!-- Direct Answer Box -->
                    <div class="text-sm sm:text-base leading-relaxed text-slate-800 bg-slate-50 p-4 rounded-xl border border-slate-200 font-semibold mb-4 dark:bg-slate-950 dark:border-slate-800 dark:text-slate-200">
                        <strong>Law assignment help</strong> is specialized academic guidance provided by qualified legal scholars to assist law students in conducting legal research on Westlaw and LexisNexis, structuring case briefs and legal memorandums using the IRAC framework, analyzing statutory provisions, and formatting Bluebook citations.
                    </div>

                    <p class="text-xs sm:text-sm leading-relaxed text-slate-600 mb-5 dark:text-slate-400">
                        Unlike general academic writing, law school assignments require rigorous application of controlling precedent to complex fact patterns, identification of material facts versus dicta, and adherence to strict citation standards. Our online <strong>legal writing service</strong> covers all primary law disciplines including Constitutional Law, Contracts (UCC), Torts, Criminal Procedure, Property, and Corporate Law.
                    </p>

                    <!-- Author Verification Badge -->
                    <div class="flex items-center gap-3 pt-4 border-t border-slate-100 dark:border-slate-800">
                        <div class="h-10 w-10 rounded-xl bg-blue-600 text-white font-black flex items-center justify-center text-sm shrink-0 shadow-md">
                            MS
                        </div>
                        <div>
                            <p class="text-xs font-bold text-slate-900 dark:text-white">Reviewed By: Marcus Sterling, J.D., LL.M.</p>
                            <p class="text-[11px] text-slate-500 dark:text-slate-400">Senior Legal Research Director | Ex-Federal Judicial Clerk (15+ Yrs Experience)</p>
                        </div>
                    </div>
                </div>

                <!-- HELPFUL CONTENT SYSTEM: COMMON ERRORS VS FIXES (Compact 2-Column) -->
                <div class="space-y-6">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-blue-100/50 text-blue-700 text-[10px] font-black uppercase tracking-wider mb-2 border border-blue-200 dark:bg-blue-950/40 dark:text-blue-300 dark:border-blue-800">
                            Helpful Content Guide
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 dark:text-white">Common Legal Writing Errors & How We Fix Them</h2>
                        <p class="mt-1 text-xs sm:text-sm text-slate-600 dark:text-slate-400">Avoid grade-deducting pitfalls in law school essays and memorandums</p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-5">
                        <!-- Common Student Errors -->
                        <div class="rounded-2xl bg-red-50/70 p-5 sm:p-6 border border-red-200 space-y-4 dark:bg-red-950/20 dark:border-red-900/40">
                            <div class="flex items-center gap-3">
                                <div class="h-8 w-8 rounded-xl bg-red-600 text-white font-bold flex items-center justify-center text-sm shadow-sm">❌</div>
                                <h3 class="text-base font-black text-red-950 dark:text-red-300">Frequent Student Mistakes</h3>
                            </div>

                            <ul class="space-y-2.5 text-xs text-red-900 dark:text-red-200">
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>Vague Issue Statement:</strong> Framing issues broadly as "Was John guilty?" instead of specific legal questions under governing statutes.</div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>Mixing Rule & Application:</strong> Jumping directly into factual arguments without establishing controlling legal rules first.</div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>Flawed Bluebook Formatting:</strong> Incorrect case names, missing pinpoint page numbers (`123 U.S. at 456`), or broken reporter abbreviations.</div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-red-600">•</span>
                                    <div><strong>Ignoring Counter-Arguments:</strong> Failing to analyze opposing arguments, resulting in one-sided, unpersuasive legal analysis.</div>
                                </li>
                            </ul>
                        </div>

                        <!-- How Our Legal Experts Fix It -->
                        <div class="rounded-2xl bg-emerald-50/70 p-5 sm:p-6 border border-emerald-200 space-y-4 dark:bg-emerald-950/20 dark:border-emerald-900/40">
                            <div class="flex items-center gap-3">
                                <div class="h-8 w-8 rounded-xl bg-emerald-600 text-white font-bold flex items-center justify-center text-sm shadow-sm">✅</div>
                                <h3 class="text-base font-black text-emerald-950 dark:text-emerald-300">How Our Legal Writers Fix It</h3>
                            </div>

                            <ul class="space-y-2.5 text-xs text-emerald-900 dark:text-emerald-200">
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Precise Framing:</strong> "Whether a warrantless search of an encrypted smartphone violates the Fourth Amendment when conducted incident to arrest..."</div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Rigorous IRAC Structure:</strong> Clear separation of Issue, Rule Statement (statute/precedent), Application (fact synthesis), and Conclusion.</div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Bluebook 21st Edition Rigor:</strong> Exact case formatting, signals (`see, e.g.`), short forms, and KeyCite/Shepardizing verification.</div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="font-bold text-emerald-600">✓</span>
                                    <div><strong>Balanced Advocacy & Rebuttal:</strong> Rigorous evaluation of defendant vs. plaintiff positions to demonstrate comprehensive legal insight.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- KEY METRICS BANNER (Minimal & Sleek) -->
                <div class="rounded-2xl bg-slate-900 py-6 px-4 text-white shadow-lg border border-slate-800 dark:bg-slate-900">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
                        <div>
                            <p class="text-2xl sm:text-3xl font-black text-blue-400">4,500+</p>
                            <p class="text-[11px] text-slate-300 font-bold uppercase tracking-wider">Law Papers Completed</p>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-black text-emerald-400">99.1%</p>
                            <p class="text-[11px] text-slate-300 font-bold uppercase tracking-wider">IRAC Accuracy Score</p>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-black text-indigo-400">60+</p>
                            <p class="text-[11px] text-slate-300 font-bold uppercase tracking-wider">Verified J.D. Writers</p>
                        </div>
                        <div>
                            <p class="text-2xl sm:text-3xl font-black text-cyan-300">4.9 / 5.0</p>
                            <p class="text-[11px] text-slate-300 font-bold uppercase tracking-wider">Law Student Rating</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION: THE IRAC & CREAC LEGAL ANALYTICAL FRAMEWORK TABLE (Compact Table) -->
                <div class="space-y-6">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 dark:text-white">Mastery of Legal Frameworks: IRAC & CREAC</h2>
                        <p class="mt-1 text-xs sm:text-sm text-slate-600 dark:text-slate-400">Every law paper is structured according to formal legal reasoning standards</p>
                    </div>

                    <div class="overflow-x-auto rounded-2xl border border-slate-200 bg-white shadow-sm dark:bg-slate-900 dark:border-slate-800">
                        <table class="w-full text-left border-collapse text-xs sm:text-sm">
                            <thead>
                                <tr class="bg-slate-900 text-white dark:bg-slate-950">
                                    <th class="p-3.5 font-bold border-b border-slate-800">Framework Stage</th>
                                    <th class="p-3.5 font-bold border-b border-slate-800">Core Component & Objective</th>
                                    <th class="p-3.5 font-bold border-b border-slate-800">Legal Standard Applied</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-200 text-slate-700 dark:divide-slate-800 dark:text-slate-300">
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-3.5 font-bold text-slate-900 dark:text-white">1. Issue (I) / Conclusion (C)</td>
                                    <td class="p-3.5">Formulate the specific question of law presented by the fact pattern, or state the overall holding.</td>
                                    <td class="p-3.5 text-xs font-bold text-blue-600 dark:text-blue-400">Under-Does-When Format</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-3.5 font-bold text-slate-900 dark:text-white">2. Rule Statement (R)</td>
                                    <td class="p-3.5">Synthesize controlling statutes, constitutional provisions, Restatements, and landmark judicial precedent.</td>
                                    <td class="p-3.5 text-xs font-bold text-blue-600 dark:text-blue-400">Primary Authority Citation</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-3.5 font-bold text-slate-900 dark:text-white">3. Rule Explanation (E)</td>
                                    <td class="p-3.5">Explicate how prior courts applied the rule, discussing precedent holdings, policy rationales, and splits.</td>
                                    <td class="p-3.5 text-xs font-bold text-blue-600 dark:text-blue-400">Doctrinal Synthesis</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-3.5 font-bold text-slate-900 dark:text-white">4. Application / Analysis (A)</td>
                                    <td class="p-3.5">Apply rule elements directly to client facts. Analogize favorable case precedent and distinguish adverse authority.</td>
                                    <td class="p-3.5 text-xs font-bold text-blue-600 dark:text-blue-400">Analogical & Counter-Argument</td>
                                </tr>
                                <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40">
                                    <td class="p-3.5 font-bold text-slate-900 dark:text-white">5. Conclusion (C)</td>
                                    <td class="p-3.5">Deliver a clear, definitive prediction or resolution specifying legal outcome, liability, or remedy.</td>
                                    <td class="p-3.5 text-xs font-bold text-blue-600 dark:text-blue-400">Definitive Resolution</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- NEW LANDMARK CASE STUDIES & TOPICS INDEX (High Long-Tail Search Intent) -->
                <div class="space-y-6">
                    <div class="text-center max-w-2xl mx-auto">
                        <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-blue-100/50 text-blue-700 text-[10px] font-black uppercase tracking-wider mb-2 border border-blue-200 dark:bg-blue-950/40 dark:text-blue-300 dark:border-blue-800">
                            Precedent & Case Studies
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 dark:text-white">Popular Law School Case Studies & Topics We Help With</h2>
                        <p class="mt-1 text-xs sm:text-sm text-slate-600 dark:text-slate-400">Expert legal analysis across landmark precedents and course hypotheticals</p>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <span class="text-[10px] font-black uppercase tracking-wider text-blue-600 dark:text-blue-400">Con Law Precedent</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Marbury v. Madison</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Establishment of judicial review, Section 13 Judiciary Act constitutionality, and Article III jurisdiction.</p>
                        </div>
                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <span class="text-[10px] font-black uppercase tracking-wider text-blue-600 dark:text-blue-400">Contracts Case</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Hamer v. Sidway</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Consideration doctrine analysis, legal detriment vs benefit, waiver of legal rights as valid consideration.</p>
                        </div>
                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <span class="text-[10px] font-black uppercase tracking-wider text-purple-600 dark:text-purple-400">Crim Proc Case</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Katz v. United States</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Fourth Amendment expectation of privacy test, electronic eavesdropping, and search warrant requirements.</p>
                        </div>
                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <span class="text-[10px] font-black uppercase tracking-wider text-amber-600 dark:text-amber-400">Tort Law Classic</span>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Palsgraf v. Long Island R.R.</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Proximate causation, duty owed to foreseeable plaintiffs, and Cardozo vs. Andrews judicial rationale.</p>
                        </div>
                    </div>
                </div>

                <!-- SECTION: SUBSTANTIVE LAW DISCIPLINES (Compact 3-Column Cards) -->
                <div class="space-y-6">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 dark:text-white">Substantive Law Areas We Cover</h2>
                        <p class="mt-1 text-xs sm:text-sm text-slate-600 dark:text-slate-400">Comprehensive legal research and writing across all core law school courses</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-4 sm:gap-5">
                        <!-- Constitutional Law -->
                        <div class="flex flex-col bg-white rounded-2xl p-5 border border-slate-200 shadow-sm transition-all duration-300 hover:border-blue-500/40 hover:-translate-y-0.5 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-blue-100 text-blue-600 font-bold flex items-center justify-center text-lg mb-3 dark:bg-blue-950/50 dark:text-blue-400">📜</div>
                            <h3 class="text-base font-extrabold text-slate-900 mb-1.5 dark:text-white">Constitutional Law</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Judicial review, Commerce Clause federalism, Separation of Powers, First Amendment speech/religion, Equal Protection tiers of scrutiny, and Due Process rights.
                            </p>
                        </div>

                        <!-- Criminal Law & Procedure -->
                        <div class="flex flex-col bg-white rounded-2xl p-5 border border-slate-200 shadow-sm transition-all duration-300 hover:border-purple-500/40 hover:-translate-y-0.5 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-purple-100 text-purple-600 font-bold flex items-center justify-center text-lg mb-3 dark:bg-purple-950/50 dark:text-purple-400">⚖️</div>
                            <h3 class="text-base font-extrabold text-slate-900 mb-1.5 dark:text-white">Criminal Law & Procedure</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Actus reus, mens rea, homicide degrees, self-defense, Fourth Amendment search & seizure warrants, Fifth Amendment Miranda rights, and Sixth Amendment counsel.
                            </p>
                        </div>

                        <!-- Contracts & UCC -->
                        <div class="flex flex-col bg-white rounded-2xl p-5 border border-slate-200 shadow-sm transition-all duration-300 hover:border-emerald-500/40 hover:-translate-y-0.5 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-emerald-100 text-emerald-600 font-bold flex items-center justify-center text-lg mb-3 dark:bg-emerald-950/50 dark:text-emerald-400">🖋️</div>
                            <h3 class="text-base font-extrabold text-slate-900 mb-1.5 dark:text-white">Contracts & UCC Article 2</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Offer, acceptance, consideration, Statute of Frauds, breach remedies (expectation, reliance, specific performance), promissory estoppel, and UCC sales.
                            </p>
                        </div>

                        <!-- Tort Law -->
                        <div class="flex flex-col bg-white rounded-2xl p-5 border border-slate-200 shadow-sm transition-all duration-300 hover:border-amber-500/40 hover:-translate-y-0.5 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-amber-100 text-amber-600 font-bold flex items-center justify-center text-lg mb-3 dark:bg-amber-950/50 dark:text-amber-400">⚠️</div>
                            <h3 class="text-base font-extrabold text-slate-900 mb-1.5 dark:text-white">Tort Law & Strict Liability</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Negligence (duty, breach, proximate cause, damages), intentional torts, battery, defamation, products liability, comparative fault, and nuisance claims.
                            </p>
                        </div>

                        <!-- Property Law -->
                        <div class="flex flex-col bg-white rounded-2xl p-5 border border-slate-200 shadow-sm transition-all duration-300 hover:border-teal-500/40 hover:-translate-y-0.5 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-teal-100 text-teal-600 font-bold flex items-center justify-center text-lg mb-3 dark:bg-teal-950/50 dark:text-teal-400">🏛️</div>
                            <h3 class="text-base font-extrabold text-slate-900 mb-1.5 dark:text-white">Real & Personal Property</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Estates in land, future interests, landlord-tenant law, easements, covenants, adverse possession, recording acts, eminent domain, and zoning.
                            </p>
                        </div>

                        <!-- Civil Procedure -->
                        <div class="flex flex-col bg-white rounded-2xl p-5 border border-slate-200 shadow-sm transition-all duration-300 hover:border-rose-500/40 hover:-translate-y-0.5 dark:bg-slate-900 dark:border-slate-800">
                            <div class="h-10 w-10 rounded-xl bg-rose-100 text-rose-600 font-bold flex items-center justify-center text-lg mb-3 dark:bg-rose-950/50 dark:text-rose-400">🔍</div>
                            <h3 class="text-base font-extrabold text-slate-900 mb-1.5 dark:text-white">Civil Procedure & Jurisdiction</h3>
                            <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400">
                                Personal jurisdiction (International Shoe), diversity vs. federal question, Erie Doctrine, Rule 12(b)(6) motions to dismiss, summary judgment, and class actions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- SECTION: TYPES OF LAW ASSIGNMENTS SUPPORTED (Minimal Grid) -->
                <div class="space-y-6">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 dark:text-white">Types of Law Assignments We Handle</h2>
                        <p class="mt-1 text-xs sm:text-sm text-slate-600 dark:text-slate-400">From 1L case briefs to graduate LL.M. thesis memorandums</p>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <div class="text-2xl">📋</div>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Case Briefs</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Procedural history, material facts, legal issues, court holdings, rationale, and dissents.</p>
                        </div>

                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <div class="text-2xl">📝</div>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Legal Memorandums</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Objective predictive memos analyzing complex fact patterns with IRAC analysis.</p>
                        </div>

                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <div class="text-2xl">⚖️</div>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Appellate Briefs</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Persuasive advocacy briefs with compelling legal arguments and statutory citations.</p>
                        </div>

                        <div class="rounded-xl bg-white p-4 border border-slate-200 shadow-sm dark:bg-slate-900 dark:border-slate-800 space-y-1.5">
                            <div class="text-2xl">📑</div>
                            <h3 class="font-bold text-sm text-slate-900 dark:text-white">Contract Analysis</h3>
                            <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed">Contractual clause breakdown, ambiguity resolution, breach evaluation, and remedies.</p>
                        </div>
                    </div>
                </div>

                <!-- LAW STUDENT REVIEWS / TESTIMONIALS (Minimal Cards) -->
                <div class="space-y-6">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 dark:text-white">Verified Law Student Reviews</h2>
                        <p class="mt-1 text-xs sm:text-sm text-slate-600 dark:text-slate-400">Trusted by students at top accredited law programs nationwide</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-5">
                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm space-y-3 dark:bg-slate-900 dark:border-slate-800">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <p class="text-xs leading-relaxed text-slate-600 italic dark:text-slate-300">
                                "The constitutional law memo was flawless! My writer cited relevant Supreme Court precedent, explained the three-tiered scrutiny framework clearly, and applied it to the hypothetical. Flawless Bluebook citations!"
                            </p>
                            <div class="flex items-center gap-2.5 pt-2.5 border-t border-slate-100 dark:border-slate-800">
                                <div class="h-8 w-8 rounded-full bg-blue-600 text-white font-bold flex items-center justify-center text-[10px]">JM</div>
                                <div>
                                    <p class="text-xs font-bold text-slate-900 dark:text-white">Jessica M.</p>
                                    <p class="text-[10px] text-slate-500">Harvard Law School, 2L</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm space-y-3 dark:bg-slate-900 dark:border-slate-800">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <p class="text-xs leading-relaxed text-slate-600 italic dark:text-slate-300">
                                "Needed help with a complex contracts memo involving UCC Article 2 provisions. The legal research on Westlaw was thorough and the IRAC analysis was exactly what my professor expected."
                            </p>
                            <div class="flex items-center gap-2.5 pt-2.5 border-t border-slate-100 dark:border-slate-800">
                                <div class="h-8 w-8 rounded-full bg-emerald-600 text-white font-bold flex items-center justify-center text-[10px]">RK</div>
                                <div>
                                    <p class="text-xs font-bold text-slate-900 dark:text-white">Robert K.</p>
                                    <p class="text-[10px] text-slate-500">Georgetown Law, 1L</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-2xl bg-white p-5 border border-slate-200 shadow-sm space-y-3 dark:bg-slate-900 dark:border-slate-800">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <p class="text-xs leading-relaxed text-slate-600 italic dark:text-slate-300">
                                "Criminal procedure search and seizure paper. My attorney writer analyzed the Fourth Amendment warrant exceptions and applied precedent beautifully. Highest score in my section!"
                            </p>
                            <div class="flex items-center gap-2.5 pt-2.5 border-t border-slate-100 dark:border-slate-800">
                                <div class="h-8 w-8 rounded-full bg-purple-600 text-white font-bold flex items-center justify-center text-[10px]">AL</div>
                                <div>
                                    <p class="text-xs font-bold text-slate-900 dark:text-white">Amanda L.</p>
                                    <p class="text-[10px] text-slate-500">NYU School of Law, 3L</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FREQUENTLY ASKED QUESTIONS (FAQ Minimal Accordion) -->
                <div class="space-y-6" itemscope itemtype="https://schema.org/FAQPage">
                    <div class="text-center max-w-2xl mx-auto">
                        <h2 class="text-2xl sm:text-3xl font-black tracking-tight text-slate-900 dark:text-white">Law Assignment Help FAQs</h2>
                        <p class="mt-1 text-xs sm:text-sm text-slate-600 dark:text-slate-400">Answers to common questions regarding legal writing assistance</p>
                    </div>

                    <div class="space-y-3 max-w-4xl mx-auto">
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl bg-white p-5 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-sm font-extrabold text-slate-900 mb-1.5 dark:text-white" itemprop="name">What qualifications do your law assignment writers hold?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    Our legal writing team comprises verified legal professionals holding J.D. (Juris Doctor), LL.M., or Ph.D. in Law degrees from accredited law schools. Many are practicing attorneys, former judicial clerks, and adjunct law professors experienced in legal research and Bluebook citations.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl bg-white p-5 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-sm font-extrabold text-slate-900 mb-1.5 dark:text-white" itemprop="name">Do you use Westlaw and LexisNexis for primary legal research?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    Yes! Our researchers access Westlaw Precision, Lexis+, Bloomberg Law, and HeinOnline to verify controlling case law, statutes, administrative codes, and law review articles with KeyCite and Shepardizing verification.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl bg-white p-5 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-sm font-extrabold text-slate-900 mb-1.5 dark:text-white" itemprop="name">Are citations formatted in Bluebook 21st Edition style?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    Absolutely. We format all case citations, statutes, Restatements, and legal periodicals strictly according to The Bluebook: A Uniform System of Citation (21st Edition) or ALWD guidelines as requested.
                                </p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl bg-white p-5 border border-slate-200 shadow-sm transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                            <h3 class="text-sm font-extrabold text-slate-900 mb-1.5 dark:text-white" itemprop="name">Is your law assignment help service confidential and plagiarism-free?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-xs text-slate-600 leading-relaxed dark:text-slate-400" itemprop="text">
                                    100% confidential. All assignments are drafted from scratch specifically for your fact pattern and syllabus. We provide a complimentary Turnitin plagiarism report with every completed order.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- INTERNAL LINKING FOOTER HUB (Minimal Bar) -->
                <div class="rounded-2xl bg-slate-100 p-6 border border-slate-200 transition-colors duration-300 dark:bg-slate-900 dark:border-slate-800">
                    <h3 class="text-xs font-black uppercase tracking-wider text-slate-900 mb-3 dark:text-white">Explore Related Academic Services</h3>
                    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-3 text-xs font-bold">
                        <a href="{{ route('services.case-study.index') }}" class="p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400 shadow-sm">
                            📊 Case Study Help
                        </a>
                        <a href="{{ route('services.essay-writing.index') }}" class="p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400 shadow-sm">
                            ✍️ Essay Writing Help
                        </a>
                        <a href="{{ route('services.homework-help.nursing') }}" class="p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400 shadow-sm">
                            🩺 Nursing Homework Help
                        </a>
                        <a href="{{ route('services.research-paper.index') }}" class="p-3 rounded-xl bg-white border border-slate-200 text-slate-700 hover:text-blue-600 hover:border-blue-300 transition-all dark:bg-slate-950 dark:border-slate-800 dark:text-slate-300 dark:hover:text-blue-400 shadow-sm">
                            📄 Research Paper Writing
                        </a>
                    </div>
                </div>

                <!-- FINAL CONVERSION CTA BANNER (Compact & Minimal) -->
                <div class="rounded-2xl bg-gradient-to-r from-blue-600 via-indigo-600 to-blue-700 p-6 sm:p-10 text-center text-white shadow-xl space-y-4">
                    <h2 class="text-2xl sm:text-4xl font-black tracking-tight">Ready for Expert Law Assignment Help?</h2>
                    <p class="text-sm sm:text-base text-blue-100 max-w-2xl mx-auto">
                        Join thousands of law students who achieve academic success with our professional legal writing assistance. Connect with a J.D. legal mentor today.
                    </p>

                    <div class="pt-1">
                        <a href="{{ route('order', ['assignment_service' => $service->id ?? 1]) }}"
                            class="inline-flex items-center justify-center gap-2.5 rounded-xl bg-white px-8 py-3.5 text-sm font-black text-blue-700 shadow-lg transition-all duration-300 hover:bg-slate-100 hover:scale-105">
                            <span>⚖️</span>
                            <span>Order Your Law Assignment Today</span>
                            <svg class="w-4 h-4 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- ACADEMIC INTEGRITY DISCLAIMER -->
                <div class="rounded-xl bg-amber-50/90 border border-amber-200 p-4 text-[11px] leading-relaxed text-amber-900 transition-colors duration-300 dark:bg-amber-950/20 dark:border-amber-900/40 dark:text-amber-300">
                    <p>
                        <strong>Academic Integrity & Fair Use Disclaimer:</strong> The law assignment assistance, case briefs, and legal research materials provided by AssignmentHelpUSA are designed for reference, educational research, and model writing purposes. Students are expected to utilize these materials to assist their own legal study and adhere to their institution's honor code.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection
