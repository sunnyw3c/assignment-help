@extends('assignment-services.show')

@section('title', 'Law Assignment Help | Legal Research & Writing Service | Expert Law Tutors')
@section('meta_description', 'Professional law assignment help from qualified legal experts. Expert assistance with case briefs, legal research, IRAC analysis, contracts, constitutional law, tort law, and more. 24/7 law tutoring support.')
@section('meta_keywords', 'law assignment help, legal writing service, law homework help, case brief help, legal research assistance, IRAC analysis, law essay writing, legal studies help, law school help, contract law help')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Law Assignment Help | Expert Legal Writers">
    <meta property="og:description" content="Get expert law assignment help from qualified legal professionals. Case briefs, legal research, IRAC analysis, and comprehensive law tutoring support.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Law Assignment Help | Expert Legal Writers">
    <meta property="twitter:description" content="Expert law assignment help for case briefs, legal research, and all law school assignments.">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Law Assignment Help Service",
        "description": "Professional law assignment help service with qualified legal experts providing comprehensive assistance with case briefs, legal research, IRAC analysis, memorandums, contracts, constitutional law, criminal law, tort law, property law, and all areas of legal studies for law students at undergraduate, graduate, and law school levels.",
        "provider": {
            "@type": "Organization",
            "name": "Assignment Help Online"
        },
        "serviceType": "Law Assignment Assistance",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Law Assignment Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Legal Case Brief Writing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Legal Research & Analysis"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "IRAC Method Analysis"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Legal Memorandum Writing"
                    }
                }
            ]
        }
    }
    </script>
@endpush

@section('custom-content')
    <!-- Comprehensive Law Assignment Content Section -->
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Law Assignment Help Service</h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Expert law assignment assistance from qualified legal professionals. Comprehensive help with case briefs, legal research, IRAC analysis, memorandums, and all areas of law.
                    </p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Law school and legal studies present unique challenges requiring precise analytical thinking, comprehensive understanding of legal principles, mastery of legal research methodologies, proficiency in legal writing conventions, ability to synthesize complex statutory and case law, critical evaluation of judicial reasoning, application of legal frameworks to factual scenarios, and articulation of well-reasoned legal arguments supported by authoritative sources and persuasive logic. Successfully completing law assignments demands not only thorough knowledge of substantive and procedural law across diverse practice areas including constitutional law, criminal law, civil procedure, torts, contracts, property law, administrative law, and specialized subjects, but also sophisticated research skills using legal databases like Westlaw, LexisNexis, and HeinOnline, precise citation in Bluebook or other legal citation formats, structured analysis using frameworks like IRAC (Issue, Rule, Application, Conclusion), and clear professional legal writing that meets the exacting standards expected in legal education and practice. Our professional law assignment help service provides expert assistance from qualified legal professionals including practicing attorneys, law professors, and advanced law students who understand legal doctrine and can help you excel in your legal studies.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team consists of legal experts holding JD, LLB, LLM, or SJD degrees from accredited law schools, bar-qualified attorneys with litigation and transactional experience, law professors and adjunct faculty teaching at universities, legal researchers with expertise in various jurisdictions including U.S. federal and state law, common law systems, civil law traditions, and international law, who bring both academic knowledge and practical legal experience to assignment assistance. We provide comprehensive support for all law assignment types including case briefs that identify key facts, procedural history, issues, holdings, reasoning, and dissenting opinions, legal memorandums analyzing legal questions with objective research and application of law to facts, IRAC-format analyses demonstrating systematic legal reasoning, legal research assignments using primary authorities (cases, statutes, regulations) and secondary sources (treatises, law review articles), contract analysis examining formation, terms, performance, breach, and remedies, constitutional law essays analyzing constitutional provisions, judicial review, federalism, separation of powers, and individual rights, criminal law assignments addressing elements of crimes, defenses, criminal procedure, and sentencing, tort law analyses covering negligence, intentional torts, strict liability, and damages, and properly cited work using Bluebook legal citation format or other required citation systems. Every assignment demonstrates legal reasoning, analytical depth, citation accuracy, and professional legal writing quality expected in law school coursework.
                        </p>
                    </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Legal Expertise Guarantees</h2>
                            <p class="text-lg text-gray-600">Your law school success is our commitment</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">⚖️</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Qualified Legal Professionals</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Your law assignment will be handled by legal experts with JD, LLB, or LLM degrees from accredited law schools. Many of our professionals are licensed attorneys with bar admission, litigation experience, or law firm backgrounds in areas like corporate law, criminal defense, civil rights, or appellate practice. Some are law professors and teaching assistants with deep academic knowledge of legal theory, doctrine, and pedagogy who understand exactly what law professors expect in assignments.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📚</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Comprehensive Legal Research</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We conduct thorough legal research using authoritative legal databases including Westlaw, LexisNexis, Bloomberg Law, HeinOnline, Google Scholar, and law library resources. Our research covers primary authorities (U.S. Supreme Court decisions, federal and state court cases, statutes, regulations, constitutional provisions) and secondary sources (legal treatises, Restatements, law review articles, legal encyclopedias) to support legal analysis with credible, relevant, and current authority properly cited in Bluebook format.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🎯</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">IRAC Method Expertise</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We structure legal analyses using the IRAC framework (Issue, Rule, Application, Conclusion) that is fundamental to legal reasoning and writing. Issue identification frames the precise legal question, Rule section states the applicable law from statutes and cases with proper authority, Application systematically applies legal rules to the specific facts with analogical reasoning comparing to precedent cases, and Conclusion clearly answers the legal question. This analytical framework demonstrates legal thinking valued in law school and legal practice.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📖</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Perfect Bluebook Citations</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            All legal citations follow Bluebook format (The Bluebook: A Uniform System of Citation) or alternative citation systems like ALWD Guide to Legal Citation as specified by your law school. We ensure accurate citation of cases (proper case name format, reporter citation, court, year), statutes (code abbreviation, section, year), constitutional provisions, law review articles, books, and other legal authorities. Citations are correctly formatted for textual sentences, citation sentences, and string citations. Proper citation demonstrates legal research competence and academic integrity.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Law Assignment Success Record</h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">4500+</div>
                                    <p class="text-sm text-gray-700">Law Assignments Completed</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">97%</div>
                                    <p class="text-sm text-gray-700">Student Satisfaction Rate</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">200+</div>
                                    <p class="text-sm text-gray-700">Legal Experts</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">All</div>
                                    <p class="text-sm text-gray-700">Legal Areas Covered</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">📝</span>
                                Case Brief Writing
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Case briefs are essential tools for law students to synthesize judicial opinions and prepare for class discussion using the Socratic method. Our case brief assistance ensures comprehensive coverage of all essential elements. We identify and articulate the key facts relevant to the legal issues while distinguishing material facts from background information. Procedural history traces the case through lower courts including trial court decisions, intermediate appellate court rulings, and basis for appeal or certiorari. We precisely frame the legal issues before the court as questions of law, identify the legal rules and precedents applied by the court, explain the court's reasoning and analysis including policy considerations, and note the holding and disposition.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Our case briefs include analysis of concurring and dissenting opinions when significant, explain the ratio decidendi (binding precedent) versus obiter dicta (non-binding commentary), and provide critical commentary on the decision's implications for legal doctrine. Whether briefing landmark Supreme Court decisions like Brown v. Board of Education, Roe v. Wade, or Miranda v. Arizona, or analyzing circuit court splits, state court decisions, or international tribunal judgments, our case briefs demonstrate deep understanding of legal reasoning, precedential value, and doctrinal significance essential for class preparation and exam readiness.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🔍</span>
                                Legal Research & Memorandums
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Legal research and memorandum writing are fundamental lawyering skills requiring systematic investigation of legal questions and objective analysis of findings. We conduct comprehensive legal research beginning with identification of relevant jurisdiction (federal, state, or international), determination of controlling law, examination of primary authorities including constitutions, statutes, regulations, and case law, and review of secondary sources like legal treatises, Restatements of Law, American Law Reports annotations, and scholarly law review articles. Research strategy includes Boolean searches in legal databases, shepardizing or KeyCiting cases to verify good law and find citing references, and tracking legislative history when statutory interpretation is relevant.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Legal memorandums synthesize research into objective analyses addressing specific legal questions. Standard memo format includes Question Presented framing the legal issue, Brief Answer providing a concise conclusion, Statement of Facts presenting relevant factual background, Discussion section with IRAC analysis applying law to facts while discussing favorable and adverse authority with balanced treatment, and Conclusion summarizing findings. Our memorandums demonstrate sophisticated legal analysis, thorough research reflected in comprehensive citations, logical organization, clear professional writing, and practical recommendations addressing the legal question with candid assessment of strengths and weaknesses of legal positions.
                            </p>
                        </div>
                    </div>

                    <!-- Legal Areas Covered -->
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Areas of Law We Cover
                        </h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Constitutional Law</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Judicial review and Marbury v. Madison, federalism and Commerce Clause, separation of powers, individual rights under Bill of Rights, Fourteenth Amendment equal protection and due process, First Amendment freedoms (speech, religion, press, assembly), constitutional interpretation methodologies (originalism, living constitution, textualism), landmark Supreme Court decisions, and constitutional litigation.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Criminal Law & Procedure</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Elements of crimes (actus reus, mens rea, causation), specific intent vs. general intent crimes, homicide classifications, theft offenses, defenses (self-defense, insanity, duress, necessity, entrapment), Fourth Amendment search and seizure, Fifth Amendment rights (Miranda, privilege against self-incrimination, double jeopardy), Sixth Amendment right to counsel, criminal procedure from arrest through trial.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Contracts & Commercial Law</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Contract formation (offer, acceptance, consideration), statute of frauds, contract interpretation, performance and breach, remedies (expectation damages, reliance, restitution, specific performance), defenses (mistake, fraud, duress, unconscionability, illegality), UCC Article 2 for sale of goods, third-party beneficiaries, assignment and delegation, and commercial transactions.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Tort Law</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Negligence (duty, breach, causation, damages), standard of care, res ipsa loquitur, contributory and comparative negligence, intentional torts (battery, assault, false imprisonment, intentional infliction of emotional distress, trespass, conversion), strict liability including products liability, defamation and privacy torts, nuisance, and tort remedies including compensatory and punitive damages.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Property Law</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Real property (estates in land, future interests, concurrent ownership, landlord-tenant law, easements, covenants, servitudes), adverse possession, recording acts and chain of title, land use regulation (zoning, takings), personal property (possession, bailments, gifts), intellectual property basics, and property theory including Lockean labor theory and utilitarian approaches.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Civil Procedure</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Personal jurisdiction (minimum contacts, long-arm statutes), subject matter jurisdiction (federal question, diversity jurisdiction), venue, pleadings and motions, discovery (interrogatories, depositions, document requests), summary judgment, trial procedure, Erie doctrine, class actions, and appellate procedure including standards of review.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Corporate & Business Law</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Business entity formation (corporations, LLCs, partnerships), fiduciary duties (duty of care, duty of loyalty), shareholder rights and derivative suits, mergers and acquisitions, securities regulation, agency law, corporate governance, business judgment rule, piercing the corporate veil, and transactional law.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Administrative Law</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Administrative Procedure Act, agency rulemaking (notice-and-comment, formal rulemaking), agency adjudication, judicial review of agency action (Chevron deference, arbitrary and capricious standard), delegation doctrine, procedural due process in administrative proceedings, Freedom of Information Act, and regulatory law.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">International & Comparative Law</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Public international law, treaty interpretation, international human rights law, international trade law (WTO), international criminal law, law of the sea, use of force and armed conflict, comparative legal systems (common law vs. civil law), European Union law, and transnational legal issues.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Specialized Legal Topics</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Environmental law, employment and labor law, family law, immigration law, tax law, bankruptcy law, intellectual property (patents, trademarks, copyrights), antitrust law, health law, education law, Native American law, elder law, and emerging areas like cybersecurity law, privacy law, and cryptocurrency regulation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Assignment Types -->
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Types of Law Assignments We Help With</h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Comprehensive assistance for all law school and legal studies assignments
                        </p>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📋</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Case Briefs</h4>
                                <p class="text-xs text-gray-600">Complete case brief analysis with facts, issues, rules, holdings, reasoning, and dissents</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📝</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Legal Memorandums</h4>
                                <p class="text-xs text-gray-600">Objective legal research memos analyzing legal questions with IRAC framework</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">⚖️</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Legal Opinions</h4>
                                <p class="text-xs text-gray-600">Persuasive legal opinions advocating specific positions with supporting authority</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">🔍</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Legal Research</h4>
                                <p class="text-xs text-gray-600">Comprehensive legal research using Westlaw, LexisNexis, and other databases</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📚</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Law Essays</h4>
                                <p class="text-xs text-gray-600">Academic legal essays analyzing doctrinal questions, policy issues, or legal theory</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📄</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Contract Analysis</h4>
                                <p class="text-xs text-gray-600">Contract review, interpretation, and analysis of contractual obligations and remedies</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">🎓</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Law School Exams</h4>
                                <p class="text-xs text-gray-600">Exam preparation assistance including issue spotting and IRAC answer frameworks</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📖</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Statutory Analysis</h4>
                                <p class="text-xs text-gray-600">Interpretation and application of statutes using textualism, purposivism, and legislative history</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Professional Legal Writing Standards:</strong> All law assignments follow professional legal writing conventions including clear topic sentences, logical paragraph organization, precise legal terminology, active voice where appropriate, proper citation format, objective analytical tone for memorandums or persuasive tone for advocacy documents, and thorough proofreading for grammar, spelling, and typographical errors. We adhere to legal citation rules including proper case name formatting, signal usage, parenthetical explanations, and string citation order.
                            </p>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Law Assignment Help Pricing</h2>
                        <p class="text-center text-gray-600 mb-8">Transparent rates for legal assignment assistance</p>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">Assignment Type</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">96+ Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">72 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">48 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">24 Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Undergraduate Law</td>
                                        <td class="p-4 border-b border-gray-200">$22/page</td>
                                        <td class="p-4 border-b border-gray-200">$28/page</td>
                                        <td class="p-4 border-b border-gray-200">$35/page</td>
                                        <td class="p-4 border-b border-gray-200">$45/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Law School (JD)</td>
                                        <td class="p-4 border-b border-gray-200">$32/page</td>
                                        <td class="p-4 border-b border-gray-200">$40/page</td>
                                        <td class="p-4 border-b border-gray-200">$50/page</td>
                                        <td class="p-4 border-b border-gray-200">$65/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 font-semibold">Graduate Law (LLM/SJD)</td>
                                        <td class="p-4">$42/page</td>
                                        <td class="p-4">$52/page</td>
                                        <td class="p-4">$65/page</td>
                                        <td class="p-4">$80/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid md:grid-cols-3 gap-4">
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <h4 class="font-bold text-green-900 mb-2">✓ What's Included</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Complete legal analysis</li>
                                    <li>• Comprehensive legal research</li>
                                    <li>• Bluebook citation format</li>
                                    <li>• IRAC framework where applicable</li>
                                    <li>• Case law and statutory references</li>
                                    <li>• Professional legal writing</li>
                                    <li>• Free revisions (14 days)</li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-900 mb-2">🎁 Add-On Services</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Extended legal research ($50-100)</li>
                                    <li>• PowerPoint for presentations</li>
                                    <li>• Multiple jurisdictional analysis</li>
                                    <li>• Legislative history research</li>
                                    <li>• Shepardizing/KeyCite report</li>
                                    <li>• Oral argument outline</li>
                                </ul>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="font-bold text-purple-900 mb-2">📏 Page Specifications</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 1 page = 275 words (double-spaced)</li>
                                    <li>• Standard legal formatting</li>
                                    <li>• Bluebook citations included</li>
                                    <li>• Case briefs typically 2-3 pages</li>
                                    <li>• Memos typically 8-12 pages</li>
                                    <li>• Bibliography/table of authorities</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Law Assignment Help FAQs
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What qualifications do your law assignment experts have?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Our legal experts hold JD (Juris Doctor), LLB (Bachelor of Laws), LLM (Master of Laws), or SJD (Doctor of Juridical Science) degrees from accredited law schools including T14 schools and top-ranked law programs. Many are licensed attorneys admitted to state bars with experience in law firms, public defenders' offices, prosecutors' offices, corporate legal departments, or judicial clerkships. Some are law professors, adjunct faculty, or advanced law students serving as teaching assistants. All legal experts demonstrate deep knowledge of legal doctrine, research proficiency, analytical skills, and professional legal writing ability verified through rigorous screening including legal writing samples and subject matter testing.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you help with case briefs for law school?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes! Case brief assistance is one of our most popular services for law students. We help you brief any case from your casebook or supplemental readings including Supreme Court landmark decisions, federal circuit court cases, state court decisions, and international tribunal judgments. Our case briefs include all essential elements: case citation and procedural posture, key facts relevant to legal issues, precise issue framing as legal questions, applicable rules and legal principles, court's reasoning and analysis, holding and disposition, treatment of concurring/dissenting opinions, and critical commentary on doctrinal significance. Case briefs are formatted for easy class preparation and demonstrate understanding of legal reasoning essential for Socratic method discussion and exam preparation.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you conduct legal research using Westlaw or LexisNexis?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Absolutely. Our legal researchers have access to comprehensive legal research databases including Westlaw, LexisNexis, Bloomberg Law, HeinOnline, Google Scholar legal opinions, law school libraries, and other specialized legal resources. We conduct thorough research covering federal and state case law, statutory codes, administrative regulations, legislative history materials, legal treatises, Restatements of Law, law review articles, and other secondary sources. Research includes proper shepardizing (LexisNexis) or KeyCiting (Westlaw) to verify cases are still good law, identify negative treatment, and find citing references. We provide research results with proper Bluebook citations and analysis of how authorities apply to your specific legal question or assignment requirements.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What is IRAC and do you use it in legal writing?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">IRAC is the fundamental legal analysis framework standing for Issue, Rule, Application, and Conclusion. This structured approach to legal reasoning is essential in law school and legal practice. Issue identifies the specific legal question or problem. Rule states the applicable law from constitutions, statutes, regulations, and case precedent with proper citation to authority. Application systematically applies the legal rules to the specific facts of your problem, using analogical reasoning to compare to precedent cases, distinguishing unfavorable authority, and analyzing how courts would likely rule. Conclusion answers the legal question based on the analysis. We structure legal memorandums, exam answers, and legal analyses using IRAC or variations like CREAC (Conclusion, Rule, Explanation, Application, Conclusion) or TREAT depending on assignment requirements and whether predictive or persuasive writing is needed.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you follow Bluebook citation format?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes! All legal citations follow The Bluebook: A Uniform System of Citation (21st edition or whichever edition your law school requires) or alternative citation systems like ALWD Guide to Legal Citation if specified. We ensure perfect citation format for all legal authorities including cases (proper case name italicization or underlining, reporter abbreviation, pinpoint citations, court abbreviation, year), statutes (code abbreviation, title/section number, publisher, year), constitutional provisions, administrative regulations, legislative materials, law review articles, books and treatises, and other sources. Citations use proper signals (e.g., see, see also, cf., but see, see generally), explanatory parentheticals, and string citation order. We format both citation sentences and textual citations correctly. Proper legal citation demonstrates research competence and academic integrity essential in legal education.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you help with law school exams and practice questions?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">We provide exam preparation assistance including guidance on issue spotting, IRAC analysis for exam answers, practice question walkthroughs, and outline preparation. For practice exams and hypothetical problems, we can demonstrate proper exam technique including identifying all legal issues presented in fact patterns, organizing analysis by issue, applying relevant rules with supporting authority, conducting thorough application to facts with both plaintiff and defendant arguments, and reaching conclusions. We help you understand how to structure exam answers with clear headings, comprehensive coverage of issues, balanced analysis of both sides, policy considerations where relevant, and efficient time management. This preparation helps you develop skills to succeed on law school essay exams which test both substantive knowledge and analytical writing ability under time pressure.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Success Stories -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Law Student Success Stories
                        </h2>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "The constitutional law analysis was exceptional! My expert cited relevant Supreme Court precedent, explained the three-tiered scrutiny framework clearly, and applied it to the hypothetical perfectly. The Bluebook citations were flawless. Got the highest grade in my section!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        JM
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Jessica M.</p>
                                        <p class="text-sm text-gray-600">Harvard Law School, 2L</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "Needed help with a complex contracts memo involving UCC provisions and common law. The legal research was thorough, Westlaw citations were perfect, and the IRAC analysis was exactly what my professor expected. Definitely recommend for complicated assignments!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        RK
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Robert K.</p>
                                        <p class="text-sm text-gray-600">Georgetown Law, 1L</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "Criminal procedure assignment on Fourth Amendment search and seizure. My expert analyzed the reasonableness test, exceptions to warrant requirement, and applied precedent beautifully. The case comparisons were sophisticated. My professor called it 'exemplary legal analysis.'"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        AL
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Amanda L.</p>
                                        <p class="text-sm text-gray-600">NYU School of Law, 3L</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "Torts essay on negligence was incredibly well-written. Hit all elements (duty, breach, causation, damages), discussed multiple theories, analyzed comparative fault, and cited Restatement provisions. The legal writing was clear and professional. Worth every dollar!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        DC
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">David C.</p>
                                        <p class="text-sm text-gray-600">UC Berkeley Law, 1L</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "International law assignment required analysis of treaty interpretation under Vienna Convention. The research included ICJ cases, UN documents, and scholarly commentary. Everything was properly cited. My professor was impressed by the depth of analysis. A+ work!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        SP
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Sarah P.</p>
                                        <p class="text-sm text-gray-600">Yale Law School, LLM</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "Property law memo on adverse possession was outstanding. Discussed elements, jurisdictional variations, policy rationales, and applied to a tricky fact pattern. The case analogies were spot-on. This service helped me understand complex property concepts better. Highly recommend!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        MT
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Michael T.</p>
                                        <p class="text-sm text-gray-600">Columbia Law School, 2L</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                <div class="text-4xl font-black text-gray-900 mr-4">4.9/5.0</div>
                                <div class="text-left">
                                    <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                    <p class="text-sm text-gray-600">Based on 4,500+ law student reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <span class="text-3xl mr-3">⚖️</span>
                            Ready for Expert Law Assignment Help?
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center max-w-3xl mx-auto">
                            Join thousands of law students who've achieved academic success with our professional law assignment help service. Qualified legal experts, comprehensive research, perfect Bluebook citations, IRAC analysis, and professional legal writing. Your law school success starts here.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 1]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Order Your Law Assignment Help Today
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
