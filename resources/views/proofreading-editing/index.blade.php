@extends('assignment-services.show')

@section('title', 'Proofreading & Editing Service | Academic Paper Editing Help')
@section('meta_description', 'Professional proofreading and editing service for academic papers, essays, theses, and dissertations. Expert grammar correction, style improvement, citation checking, and formatting. Fast turnaround available.')
@section('meta_keywords', 'proofreading service, editing service, academic editing, paper proofreading, thesis editing, dissertation editing, grammar correction, academic proofreading, manuscript editing, copy editing service')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Proofreading & Editing Service | Academic Experts">
    <meta property="og:description" content="Get expert proofreading and editing with grammar correction, style improvement, and citation checking. Fast, reliable academic editing service.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Proofreading & Editing Service | Academic Experts">
    <meta property="twitter:description" content="Expert proofreading and editing for academic papers. Grammar, style, citations, and formatting checked by professionals.">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Proofreading & Editing Service",
        "description": "Professional proofreading and editing service with expert editors providing comprehensive grammar correction, style improvement, citation checking, formatting review, and clarity enhancement for academic papers, essays, theses, dissertations, and manuscripts across all disciplines.",
        "provider": {
            "@type": "Organization",
            "name": "Assignment Help Online"
        },
        "serviceType": "Academic Proofreading and Editing",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Editing Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Proofreading"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Copy Editing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Substantive Editing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Citation Formatting"
                    }
                }
            ]
        }
    }
    </script>
@endpush

@section('custom-content')
    <!-- Comprehensive Proofreading & Editing Content Section -->
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Proofreading & Editing Service</h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Expert proofreading and editing for academic papers, essays, theses, and dissertations. Comprehensive grammar correction, style improvement, citation checking, and clarity enhancement.
                    </p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Academic writing excellence requires not only deep subject knowledge and critical thinking but also meticulous attention to grammar, punctuation, spelling, sentence structure, word choice, stylistic consistency, and formatting conventions that meet rigorous scholarly standards expected in university assignments, research papers, thesis projects, and dissertation manuscripts. Even the most brilliant research and innovative ideas can be undermined by grammatical errors, unclear expression, awkward phrasing, inconsistent terminology, citation mistakes, or formatting problems that distract readers and diminish credibility of your work. Professional proofreading and editing services provide essential quality assurance ensuring your academic writing communicates ideas clearly, follows proper grammar and style conventions, maintains consistent academic tone, adheres to citation requirements, and presents polished professional appearance that allows your intellectual contributions to shine without being obscured by technical writing errors or stylistic weaknesses.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our professional editing team consists of experienced academic editors, many holding advanced degrees in English, linguistics, communication, and various academic disciplines, who possess expert knowledge of grammar rules, style guides, citation formats, and scholarly writing conventions combined with extensive experience editing academic manuscripts across all educational levels from undergraduate essays to doctoral dissertations. We offer multiple levels of editing service tailored to your specific needs: proofreading that focuses on correcting grammar, spelling, punctuation, and typos while maintaining your original writing; copy editing that enhances clarity, improves sentence structure, refines word choice, ensures style consistency, and polishes overall readability while respecting your voice and meaning; substantive editing that provides deeper developmental feedback on organization, argument structure, logical flow, evidence support, and overall effectiveness of your academic writing; citation editing that verifies proper formatting of in-text citations and reference lists according to APA, MLA, Chicago, Harvard, or other required styles; and formatting review ensuring compliance with institutional guidelines for margins, spacing, headings, page numbers, and document structure. Every edited document is returned with track changes showing all modifications, editor comments explaining suggestions, clean version without markup for final submission, and summary of changes made highlighting patterns and areas for future improvement in your academic writing skills.
                        </p>
                    </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Editing Quality Guarantees</h2>
                            <p class="text-lg text-gray-600">Your academic excellence is our commitment</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">✍️</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Expert Academic Editors</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Your work will be edited by professionals with advanced degrees and extensive academic editing experience who understand scholarly writing conventions, discipline-specific terminology, and citation standards. Our editors have edited thousands of academic papers, theses, and dissertations across all fields including humanities, social sciences, natural sciences, business, engineering, medicine, and law. They combine technical expertise in grammar and style with understanding of academic discourse ensuring edits enhance clarity while maintaining scholarly tone and integrity of your arguments.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🔍</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Comprehensive Quality Checks</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Every document undergoes thorough review checking grammar (subject-verb agreement, verb tenses, pronoun usage, modifier placement), punctuation (commas, semicolons, apostrophes, quotation marks), spelling (including discipline-specific terminology), sentence structure (fragments, run-ons, parallel construction), word choice (precision, appropriateness, repetition), consistency (terminology, capitalization, number formats, abbreviations), and formatting (headings, spacing, fonts, margins). Multiple quality control layers ensure nothing is missed and all corrections are accurate.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📚</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Citation Format Expertise</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We verify and correct citations in all major academic styles including APA 7th edition (social sciences, education, psychology, nursing), MLA 9th edition (literature, humanities, languages), Chicago/Turabian (history, arts, humanities), Harvard referencing (business, economics, social sciences), IEEE (engineering, computer science), AMA (medicine, health sciences), ACS (chemistry), CSE (life sciences), and Vancouver (medicine, nursing). Citation editing includes in-text citations, reference lists, bibliographies, footnotes, and ensuring consistency between in-text citations and reference entries with proper formatting of authors, dates, titles, publication information, DOIs, and URLs.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">💬</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Track Changes & Comments</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            All editing is performed using Microsoft Word track changes feature allowing you to see every modification made to your document including deletions, additions, and formatting changes. Editor comments explain reasons for significant changes, point out patterns in your writing, suggest alternatives where meaning might be unclear, and provide educational feedback helping you improve future writing. You maintain complete control accepting or rejecting individual changes. Clean version without markup is also provided for final submission ensuring professional appearance while you learn from tracked changes version.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Editing Success Record</h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">6700+</div>
                                    <p class="text-sm text-gray-700">Documents Edited</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">99%</div>
                                    <p class="text-sm text-gray-700">Student Satisfaction Rate</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">180+</div>
                                    <p class="text-sm text-gray-700">Professional Editors</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">6hr</div>
                                    <p class="text-sm text-gray-700">Rush Service Available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">📖</span>
                                Grammar & Mechanics Correction
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Comprehensive grammar editing addresses all aspects of standard English usage ensuring your writing meets academic standards. We correct subject-verb agreement errors (singular/plural matching), verb tense consistency and proper sequence of tenses, pronoun agreement and clear antecedents, modifier placement avoiding dangling and misplaced modifiers, parallel structure in lists and comparisons, sentence fragments and run-on sentences, comma splices, and faulty predication. Punctuation is corrected including proper comma usage (serial commas, introductory elements, nonrestrictive clauses), semicolon and colon usage, apostrophes (possessives and contractions), quotation marks and periods/commas placement, hyphens and dashes, and parentheses.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Spelling corrections include common misspellings, homophones (their/there/they're, affect/effect, your/you're), British vs. American spelling consistency, and discipline-specific technical terminology spelled correctly. Capitalization is standardized (titles, headings, proper nouns, acronyms). Number formatting follows style guide rules (numerals vs. words, percentages, decimals, ranges). All corrections maintain formal academic tone appropriate for scholarly writing while preserving your intended meaning and voice.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">✨</span>
                                Style & Clarity Enhancement
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Copy editing enhances readability and effectiveness of your academic writing beyond basic grammar correction. We improve sentence structure by varying sentence length and complexity, eliminating redundancy, restructuring awkward constructions, and breaking up overly long sentences while combining short choppy sentences. Word choice is refined replacing vague terms with precise vocabulary, eliminating wordiness and unnecessary phrases, correcting inappropriate word usage, ensuring consistent terminology throughout, and suggesting stronger verbs to replace weak "to be" constructions.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Clarity improvements address ambiguous pronoun references, unclear logical connections between ideas, confusing sentence structure that obscures meaning, and jargon or technical terms needing explanation for your audience. Transitions between sentences and paragraphs are strengthened. Academic tone is maintained ensuring formal register without being overly verbose, avoiding contractions and colloquialisms, using appropriate hedging language (may suggest, appears to indicate), and maintaining objective scholarly voice. Flow and coherence are enhanced while preserving your unique writing style and argument structure.
                            </p>
                        </div>
                    </div>

                    <!-- Editing Service Levels -->
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Editing Service Levels
                        </h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-white rounded-lg p-6 shadow-md border-2 border-green-500">
                                <div class="text-center mb-4">
                                    <div class="text-4xl mb-2">📝</div>
                                    <h4 class="text-2xl font-bold text-green-600 mb-2">Proofreading</h4>
                                    <p class="text-lg font-semibold text-gray-700">$8/page</p>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 text-center">Surface-level correction focusing on technical errors</p>
                                <ul class="text-sm text-gray-700 space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Grammar and spelling correction</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Punctuation errors fixed</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Typo correction</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Basic formatting consistency</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Track changes document</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Clean final version</span>
                                    </li>
                                </ul>
                                <div class="mt-4 pt-4 border-t">
                                    <p class="text-xs text-gray-600"><strong>Best for:</strong> Nearly final drafts needing final polish before submission</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-6 shadow-md border-2 border-blue-500">
                                <div class="text-center mb-4">
                                    <div class="text-4xl mb-2">✏️</div>
                                    <h4 class="text-2xl font-bold text-blue-600 mb-2">Copy Editing</h4>
                                    <p class="text-lg font-semibold text-gray-700">$12/page</p>
                                    <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mt-1">Most Popular</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 text-center">Comprehensive editing for clarity and style</p>
                                <ul class="text-sm text-gray-700 space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-2">✓</span>
                                        <span>Everything in Proofreading</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-2">✓</span>
                                        <span>Sentence structure improvement</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-2">✓</span>
                                        <span>Word choice refinement</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-2">✓</span>
                                        <span>Clarity and flow enhancement</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-2">✓</span>
                                        <span>Citation format checking</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-2">✓</span>
                                        <span>Style consistency</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-blue-500 mr-2">✓</span>
                                        <span>Editor comments & suggestions</span>
                                    </li>
                                </ul>
                                <div class="mt-4 pt-4 border-t">
                                    <p class="text-xs text-gray-600"><strong>Best for:</strong> Most academic papers, essays, reports needing polish and clarity</p>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg p-6 shadow-md border-2 border-purple-500">
                                <div class="text-center mb-4">
                                    <div class="text-4xl mb-2">📚</div>
                                    <h4 class="text-2xl font-bold text-purple-600 mb-2">Substantive Editing</h4>
                                    <p class="text-lg font-semibold text-gray-700">$18/page</p>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 text-center">Deep developmental editing and feedback</p>
                                <ul class="text-sm text-gray-700 space-y-2">
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Everything in Copy Editing</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Organization and structure review</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Argument strengthening</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Evidence evaluation</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Logical flow improvement</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Comprehensive feedback letter</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Detailed editor comments</span>
                                    </li>
                                </ul>
                                <div class="mt-4 pt-4 border-t">
                                    <p class="text-xs text-gray-600"><strong>Best for:</strong> Theses, dissertations, manuscripts needing significant improvement</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Not sure which level you need?</strong> Contact us with a brief description of your document and concerns, and we'll recommend the most appropriate editing level. Most students choose Copy Editing for the best balance of thoroughness and value. All levels include track changes, clean version, and opportunity for questions after receiving edited document.
                            </p>
                        </div>
                    </div>

                    <!-- Document Types -->
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Documents We Edit</h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Expert editing for all academic writing types
                        </p>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Essays & Papers</h4>
                                <p class="text-xs text-gray-600">Argumentative essays, research papers, term papers, response papers, analytical essays</p>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Theses & Dissertations</h4>
                                <p class="text-xs text-gray-600">Master's theses, PhD dissertations, dissertation proposals, thesis chapters</p>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Reports</h4>
                                <p class="text-xs text-gray-600">Lab reports, business reports, technical reports, case study reports</p>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Literature Reviews</h4>
                                <p class="text-xs text-gray-600">Standalone reviews, thesis lit reviews, systematic reviews, annotated bibliographies</p>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Journal Articles</h4>
                                <p class="text-xs text-gray-600">Manuscript editing, journal submission preparation, revision responses</p>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Proposals</h4>
                                <p class="text-xs text-gray-600">Research proposals, grant proposals, project proposals, dissertation proposals</p>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Application Materials</h4>
                                <p class="text-xs text-gray-600">Personal statements, statements of purpose, admission essays, CVs</p>
                            </div>

                            <div class="bg-white rounded-lg p-4 shadow-sm">
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Other Documents</h4>
                                <p class="text-xs text-gray-600">Book chapters, conference papers, presentations, abstracts, cover letters</p>
                            </div>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Editing Service Pricing</h2>
                        <p class="text-center text-gray-600 mb-8">Fast, affordable rates for professional editing</p>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">Service Level</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">24+ Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">12 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">6 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">3 Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Proofreading</td>
                                        <td class="p-4 border-b border-gray-200">$8/page</td>
                                        <td class="p-4 border-b border-gray-200">$10/page</td>
                                        <td class="p-4 border-b border-gray-200">$12/page</td>
                                        <td class="p-4 border-b border-gray-200">$15/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Copy Editing</td>
                                        <td class="p-4 border-b border-gray-200">$12/page</td>
                                        <td class="p-4 border-b border-gray-200">$15/page</td>
                                        <td class="p-4 border-b border-gray-200">$18/page</td>
                                        <td class="p-4 border-b border-gray-200">$22/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 font-semibold">Substantive Editing</td>
                                        <td class="p-4">$18/page</td>
                                        <td class="p-4">$22/page</td>
                                        <td class="p-4">$28/page</td>
                                        <td class="p-4">$35/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid md:grid-cols-3 gap-4">
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <h4 class="font-bold text-green-900 mb-2">✓ What's Included</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Expert editor review</li>
                                    <li>• Track changes document</li>
                                    <li>• Clean final version</li>
                                    <li>• Editor comments</li>
                                    <li>• Summary of changes</li>
                                    <li>• Follow-up questions answered</li>
                                    <li>• 1 free re-edit round</li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-900 mb-2">📊 Word Count</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 1 page = 275 words (double-spaced)</li>
                                    <li>• 1 page = 550 words (single-spaced)</li>
                                    <li>• Minimum order: 2 pages</li>
                                    <li>• Volume discounts for 50+ pages</li>
                                    <li>• Rush service available</li>
                                </ul>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="font-bold text-purple-900 mb-2">🎯 Quality Promise</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 100% confidential</li>
                                    <li>• Native English editors</li>
                                    <li>• Academic expertise</li>
                                    <li>• On-time delivery guaranteed</li>
                                    <li>• Satisfaction guarantee</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Proofreading & Editing FAQs
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What's the difference between proofreading and copy editing?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Proofreading is surface-level correction focusing on grammar, spelling, punctuation, and typos without changing sentence structure or word choice significantly. It's the final polish before submission. Copy editing is more comprehensive, improving clarity, sentence structure, word choice, flow, and consistency while maintaining your voice. Copy editing enhances readability and effectiveness beyond just fixing errors. Substantive editing goes even deeper, providing developmental feedback on organization, arguments, and overall effectiveness. Most students need copy editing for the best combination of thoroughness and value, but if your draft is nearly perfect and just needs final error catching, proofreading may suffice.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Will the editor rewrite my paper?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">No, editing services improve and polish your existing writing rather than rewriting content. Editors maintain your voice, ideas, and arguments while correcting errors and enhancing clarity. Your work remains your own. All changes are shown in track changes so you can see exactly what was modified and why. You maintain complete control, accepting or rejecting individual edits. For substantive editing, editors provide suggestions and feedback but you implement changes. If you need new content written or major rewriting of sections, consider our writing services instead. Editing is about refining and perfecting your work, not replacing it.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you check my citations and references?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes! Citation checking is included with copy editing and substantive editing services. We verify proper formatting of in-text citations and reference lists according to your required style (APA 7th edition, MLA 9th edition, Chicago/Turabian, Harvard, IEEE, AMA, ACS, CSE, Vancouver, or other styles). We check that all in-text citations have corresponding reference entries, all references are cited in text, author names and dates match between in-text citations and references, formatting follows style guide rules (capitalization, italics, punctuation, spacing, hanging indents), and DOIs/URLs are properly formatted. We correct common citation errors but cannot verify accuracy of publication information if original sources aren't accessible. For proofreading-only service, basic citation format checking can be added for small additional fee.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How quickly can you edit my document?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Standard turnaround is 24 hours for documents up to 10 pages, 48 hours for 11-25 pages, and 3-5 days for longer documents. Rush services are available: 12-hour service for urgent deadlines, 6-hour service for same-day delivery, and 3-hour service for emergency situations (subject to editor availability and surcharge). Longer documents (50+ pages, theses, dissertations) require more time for quality editing and may need 5-7 days or more depending on length and complexity. We recommend submitting early when possible for best quality and to avoid rush fees. For theses and dissertations, chapter-by-chapter editing with staggered deadlines is available, allowing you time to review each chapter before proceeding.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What if I'm not satisfied with the editing?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">We guarantee your satisfaction. If you're not happy with the editing, contact us within 7 days and explain your concerns. We offer one free re-edit where the same or different editor addresses specific issues you identify. If you need clarification on changes made, the editor can answer questions and explain rationale. Most concerns are resolved quickly through communication. Our editors are experienced professionals committed to quality work. In rare cases where you remain unsatisfied after re-edit, we'll discuss refund options. We maintain 99% satisfaction rate because our editors are skilled and we stand behind our work. Your success is our priority.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Is my document confidential?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Absolutely. We maintain strict confidentiality with all documents. Your work is never shared, published, resold, or stored permanently. Editors sign confidentiality agreements. Files are securely transmitted and deleted from our systems after service completion (with temporary backup for customer service purposes). We don't retain copies of your documents. Your personal information is protected according to privacy policies. Many students submit thesis chapters, dissertations, and pre-publication manuscripts trusting our confidentiality. Academic integrity is paramount - editing services are legitimate and ethical academic support widely accepted by institutions. You retain complete ownership of your work. We're simply providing professional editing assistance like university writing centers, just with faster turnaround and specialized expertise.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Success Stories -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Student Success Stories
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
                                    "English is my second language and I always struggle with grammar. The editor caught so many errors I didn't see and improved my sentence structure significantly. The track changes helped me learn from mistakes. My paper grade improved from B to A-!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        YC
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Yuki C.</p>
                                        <p class="text-sm text-gray-600">International Student, Junior</p>
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
                                    "Dissertation editing was exactly what I needed! The editor fixed all APA 7th citations, improved clarity throughout, and caught inconsistencies across chapters. Committee approved with minor revisions. Professional service and fast turnaround. Highly recommend!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        PT
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Patricia T.</p>
                                        <p class="text-sm text-gray-600">PhD Candidate, Psychology</p>
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
                                    "Last-minute research paper editing saved me! Submitted at midnight with 6-hour rush service. Editor delivered on time with clean document ready to submit. Fixed grammar, improved flow, corrected MLA citations. Worth every penny for the peace of mind!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        MJ
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Marcus J.</p>
                                        <p class="text-sm text-gray-600">College Sophomore</p>
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
                                    "Substantive editing for my master's thesis provided incredible feedback. Editor pointed out weak arguments, suggested reorganization, and improved overall flow. The detailed comments helped me understand how to strengthen academic writing. Best investment for my thesis!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        LB
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Laura B.</p>
                                        <p class="text-sm text-gray-600">Master's Student, Sociology</p>
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
                                    "Copy editing for my history essay improved readability dramatically. The editor maintained my voice while fixing awkward sentences and unclear phrasing. Professor commented that my writing quality had improved significantly. Great learning experience seeing professional edits!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        DH
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">David H.</p>
                                        <p class="text-sm text-gray-600">History Major, Senior</p>
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
                                    "Journal manuscript editing helped me get published! The editor improved academic tone, fixed citation inconsistencies, enhanced clarity, and caught errors I missed after multiple self-reviews. Submission was accepted with minor revisions. Professional quality editing made the difference!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        AR
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Dr. Anna R.</p>
                                        <p class="text-sm text-gray-600">Assistant Professor, Biology</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                <div class="text-4xl font-black text-gray-900 mr-4">4.95/5.0</div>
                                <div class="text-left">
                                    <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                    <p class="text-sm text-gray-600">Based on 6,700+ editing reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <span class="text-3xl mr-3">✍️</span>
                            Ready to Polish Your Academic Writing?
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center max-w-3xl mx-auto">
                            Join thousands of students who've improved their grades with our professional editing service. Expert editors, comprehensive quality checks, fast turnaround, and satisfaction guaranteed. Your academic success starts with polished writing.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 9]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Get Your Document Edited Today
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
