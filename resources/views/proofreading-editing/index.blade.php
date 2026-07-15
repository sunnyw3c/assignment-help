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

@endpush

@section('custom-content')
    <!-- Comprehensive Proofreading & Editing Content Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" itemscope itemtype="https://schema.org/Service">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white" itemprop="name">Professional Proofreading &amp; Editing Service</h1>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400" itemprop="description">
                        Expert proofreading and editing for academic papers, essays, theses, and dissertations. Comprehensive grammar correction, style improvement, citation checking, and clarity enhancement.
                    </p>
                </div>

                <div>
                    <div class="mb-8 rounded-2xl border border-blue-100 bg-blue-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Academic writing excellence requires not only deep subject knowledge and critical thinking but also meticulous attention to grammar, punctuation, spelling, sentence structure, word choice, stylistic consistency, and formatting conventions that meet rigorous scholarly standards expected in university assignments, research papers, thesis projects, and dissertation manuscripts. Even the most brilliant research and innovative ideas can be undermined by grammatical errors, unclear expression, awkward phrasing, inconsistent terminology, citation mistakes, or formatting problems that distract readers and diminish credibility of your work. Professional proofreading and editing services provide essential quality assurance ensuring your academic writing communicates ideas clearly, follows proper grammar and style conventions, maintains consistent academic tone, adheres to citation requirements, and presents polished professional appearance that allows your intellectual contributions to shine without being obscured by technical writing errors or stylistic weaknesses.
                        </p>

                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Our professional editing team consists of experienced academic editors, many holding advanced degrees in English, linguistics, communication, and various academic disciplines, who possess expert knowledge of grammar rules, style guides, citation formats, and scholarly writing conventions combined with extensive experience editing academic manuscripts across all educational levels from undergraduate essays to doctoral dissertations. We offer multiple levels of editing service tailored to your specific needs: proofreading that focuses on correcting grammar, spelling, punctuation, and typos while maintaining your original writing; copy editing that enhances clarity, improves sentence structure, refines word choice, ensures style consistency, and polishes overall readability while respecting your voice and meaning; substantive editing that provides deeper developmental feedback on organization, argument structure, logical flow, evidence support, and overall effectiveness of your academic writing; citation editing that verifies proper formatting of in-text citations and reference lists according to APA, MLA, Chicago, Harvard, or other required styles; and formatting review ensuring compliance with institutional guidelines for margins, spacing, headings, page numbers, and document structure. Every edited document is returned with track changes showing all modifications, editor comments explaining suggestions, clean version without markup for final submission, and summary of changes made highlighting patterns and areas for future improvement in your academic writing skills.
                        </p>
                    </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-8 max-w-2xl text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Our Editing Quality Guarantees</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Your academic excellence is our commitment</p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-lg text-white">✍️</div>
                                    <h3 class="mt-1.5 text-base font-bold text-slate-900 dark:text-white">Expert Academic Editors</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Your work will be edited by professionals with advanced degrees and extensive academic editing experience who understand scholarly writing conventions, discipline-specific terminology, and citation standards. Our editors have edited thousands of academic papers, theses, and dissertations across all fields including humanities, social sciences, natural sciences, business, engineering, medicine, and law. They combine technical expertise in grammar and style with understanding of academic discourse ensuring edits enhance clarity while maintaining scholarly tone and integrity of your arguments.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-lg text-white">🔍</div>
                                    <h3 class="mt-1.5 text-base font-bold text-slate-900 dark:text-white">Comprehensive Quality Checks</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Every document undergoes thorough review checking grammar (subject-verb agreement, verb tenses, pronoun usage, modifier placement), punctuation (commas, semicolons, apostrophes, quotation marks), spelling (including discipline-specific terminology), sentence structure (fragments, run-ons, parallel construction), word choice (precision, appropriateness, repetition), consistency (terminology, capitalization, number formats, abbreviations), and formatting (headings, spacing, fonts, margins). Multiple quality control layers ensure nothing is missed and all corrections are accurate.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-lg text-white">📚</div>
                                    <h3 class="mt-1.5 text-base font-bold text-slate-900 dark:text-white">Citation Format Expertise</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    We verify and correct citations in all major academic styles including APA 7th edition (social sciences, education, psychology, nursing), MLA 9th edition (literature, humanities, languages), Chicago/Turabian (history, arts, humanities), Harvard referencing (business, economics, social sciences), IEEE (engineering, computer science), AMA (medicine, health sciences), ACS (chemistry), CSE (life sciences), and Vancouver (medicine, nursing). Citation editing includes in-text citations, reference lists, bibliographies, footnotes, and ensuring consistency between in-text citations and reference entries with proper formatting of authors, dates, titles, publication information, DOIs, and URLs.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-500 text-lg text-white">💬</div>
                                    <h3 class="mt-1.5 text-base font-bold text-slate-900 dark:text-white">Track Changes &amp; Comments</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    All editing is performed using Microsoft Word track changes feature allowing you to see every modification made to your document including deletions, additions, and formatting changes. Editor comments explain reasons for significant changes, point out patterns in your writing, suggest alternatives where meaning might be unclear, and provide educational feedback helping you improve future writing. You maintain complete control accepting or rejecting individual changes. Clean version without markup is also provided for final submission ensuring professional appearance while you learn from tracked changes version.
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Our Editing Success Record</h3>
                            <div class="grid grid-cols-2 gap-4 text-center sm:grid-cols-4">
                                <div>
                                    <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">6700+</div>
                                    <p class="mt-0.5 text-xs text-slate-600 dark:text-slate-400">Documents Edited</p>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">99%</div>
                                    <p class="mt-0.5 text-xs text-slate-600 dark:text-slate-400">Student Satisfaction Rate</p>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">180+</div>
                                    <p class="mt-0.5 text-xs text-slate-600 dark:text-slate-400">Professional Editors</p>
                                </div>
                                <div>
                                    <div class="text-2xl font-bold text-amber-600 dark:text-amber-400">6hr</div>
                                    <p class="mt-0.5 text-xs text-slate-600 dark:text-slate-400">Rush Service Available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8 grid gap-5 sm:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="text-xl">📖</span>
                                Grammar &amp; Mechanics Correction
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Comprehensive grammar editing addresses all aspects of standard English usage ensuring your writing meets academic standards. We correct subject-verb agreement errors (singular/plural matching), verb tense consistency and proper sequence of tenses, pronoun agreement and clear antecedents, modifier placement avoiding dangling and misplaced modifiers, parallel structure in lists and comparisons, sentence fragments and run-on sentences, comma splices, and faulty predication. Punctuation is corrected including proper comma usage (serial commas, introductory elements, nonrestrictive clauses), semicolon and colon usage, apostrophes (possessives and contractions), quotation marks and periods/commas placement, hyphens and dashes, and parentheses.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Spelling corrections include common misspellings, homophones (their/there/they're, affect/effect, your/you're), British vs. American spelling consistency, and discipline-specific technical terminology spelled correctly. Capitalization is standardized (titles, headings, proper nouns, acronyms). Number formatting follows style guide rules (numerals vs. words, percentages, decimals, ranges). All corrections maintain formal academic tone appropriate for scholarly writing while preserving your intended meaning and voice.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-base font-bold text-slate-900 dark:text-white">
                                <span class="text-xl">✨</span>
                                Style &amp; Clarity Enhancement
                            </h3>
                            <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Copy editing enhances readability and effectiveness of your academic writing beyond basic grammar correction. We improve sentence structure by varying sentence length and complexity, eliminating redundancy, restructuring awkward constructions, and breaking up overly long sentences while combining short choppy sentences. Word choice is refined replacing vague terms with precise vocabulary, eliminating wordiness and unnecessary phrases, correcting inappropriate word usage, ensuring consistent terminology throughout, and suggesting stronger verbs to replace weak "to be" constructions.
                            </p>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Clarity improvements address ambiguous pronoun references, unclear logical connections between ideas, confusing sentence structure that obscures meaning, and jargon or technical terms needing explanation for your audience. Transitions between sentences and paragraphs are strengthened. Academic tone is maintained ensuring formal register without being overly verbose, avoiding contractions and colloquialisms, using appropriate hedging language (may suggest, appears to indicate), and maintaining objective scholarly voice. Flow and coherence are enhanced while preserving your unique writing style and argument structure.
                            </p>
                        </div>
                    </div>

                    <!-- Editing Service Levels -->
                    <div class="mb-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Editing Service Levels
                        </h2>
                        <div class="grid gap-5 md:grid-cols-3">
                            <div class="rounded-xl border-2 border-emerald-500 bg-white p-6 shadow-sm dark:bg-slate-900">
                                <div class="mb-4 text-center">
                                    <div class="mb-2 text-3xl">📝</div>
                                    <h4 class="mb-1 text-lg font-bold text-emerald-600 dark:text-emerald-400">Proofreading</h4>
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">$8/page</p>
                                </div>
                                <p class="mb-4 text-center text-sm leading-relaxed text-slate-600 dark:text-slate-400">Surface-level correction focusing on technical errors</p>
                                <ul class="space-y-2 text-sm text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-2">
                                        <span class="text-emerald-500">✓</span>
                                        <span>Grammar and spelling correction</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-emerald-500">✓</span>
                                        <span>Punctuation errors fixed</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-emerald-500">✓</span>
                                        <span>Typo correction</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-emerald-500">✓</span>
                                        <span>Basic formatting consistency</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-emerald-500">✓</span>
                                        <span>Track changes document</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-emerald-500">✓</span>
                                        <span>Clean final version</span>
                                    </li>
                                </ul>
                                <div class="mt-4 border-t border-slate-100 pt-4 dark:border-slate-800">
                                    <p class="text-xs text-slate-500 dark:text-slate-400"><strong class="text-slate-700 dark:text-slate-300">Best for:</strong> Nearly final drafts needing final polish before submission</p>
                                </div>
                            </div>

                            <div class="rounded-xl border-2 border-blue-500 bg-white p-6 shadow-sm dark:bg-slate-900">
                                <div class="mb-4 text-center">
                                    <div class="mb-2 text-3xl">✏️</div>
                                    <h4 class="mb-1 text-lg font-bold text-blue-600 dark:text-blue-400">Copy Editing</h4>
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">$12/page</p>
                                    <span class="mt-1 inline-block rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700 dark:bg-blue-950/40 dark:text-blue-300">Most Popular</span>
                                </div>
                                <p class="mb-4 text-center text-sm leading-relaxed text-slate-600 dark:text-slate-400">Comprehensive editing for clarity and style</p>
                                <ul class="space-y-2 text-sm text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-500">✓</span>
                                        <span>Everything in Proofreading</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-500">✓</span>
                                        <span>Sentence structure improvement</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-500">✓</span>
                                        <span>Word choice refinement</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-500">✓</span>
                                        <span>Clarity and flow enhancement</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-500">✓</span>
                                        <span>Citation format checking</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-500">✓</span>
                                        <span>Style consistency</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-500">✓</span>
                                        <span>Editor comments &amp; suggestions</span>
                                    </li>
                                </ul>
                                <div class="mt-4 border-t border-slate-100 pt-4 dark:border-slate-800">
                                    <p class="text-xs text-slate-500 dark:text-slate-400"><strong class="text-slate-700 dark:text-slate-300">Best for:</strong> Most academic papers, essays, reports needing polish and clarity</p>
                                </div>
                            </div>

                            <div class="rounded-xl border-2 border-purple-500 bg-white p-6 shadow-sm dark:bg-slate-900">
                                <div class="mb-4 text-center">
                                    <div class="mb-2 text-3xl">📚</div>
                                    <h4 class="mb-1 text-lg font-bold text-purple-600 dark:text-purple-400">Substantive Editing</h4>
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">$18/page</p>
                                </div>
                                <p class="mb-4 text-center text-sm leading-relaxed text-slate-600 dark:text-slate-400">Deep developmental editing and feedback</p>
                                <ul class="space-y-2 text-sm text-slate-700 dark:text-slate-300">
                                    <li class="flex items-start gap-2">
                                        <span class="text-purple-500">✓</span>
                                        <span>Everything in Copy Editing</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-purple-500">✓</span>
                                        <span>Organization and structure review</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-purple-500">✓</span>
                                        <span>Argument strengthening</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-purple-500">✓</span>
                                        <span>Evidence evaluation</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-purple-500">✓</span>
                                        <span>Logical flow improvement</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-purple-500">✓</span>
                                        <span>Comprehensive feedback letter</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-purple-500">✓</span>
                                        <span>Detailed editor comments</span>
                                    </li>
                                </ul>
                                <div class="mt-4 border-t border-slate-100 pt-4 dark:border-slate-800">
                                    <p class="text-xs text-slate-500 dark:text-slate-400"><strong class="text-slate-700 dark:text-slate-300">Best for:</strong> Theses, dissertations, manuscripts needing significant improvement</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">Not sure which level you need?</strong> Contact us with a brief description of your document and concerns, and we'll recommend the most appropriate editing level. Most students choose Copy Editing for the best balance of thoroughness and value. All levels include track changes, clean version, and opportunity for questions after receiving edited document.
                            </p>
                        </div>
                    </div>

                    <!-- Document Types -->
                    <div class="mb-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-2 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Documents We Edit</h2>
                        <p class="mx-auto mb-6 max-w-2xl text-center text-sm text-slate-600 dark:text-slate-400">
                            Expert editing for all academic writing types
                        </p>

                        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Essays &amp; Papers</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Argumentative essays, research papers, term papers, response papers, analytical essays</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Theses &amp; Dissertations</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Master's theses, PhD dissertations, dissertation proposals, thesis chapters</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Reports</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Lab reports, business reports, technical reports, case study reports</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Literature Reviews</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Standalone reviews, thesis lit reviews, systematic reviews, annotated bibliographies</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Journal Articles</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Manuscript editing, journal submission preparation, revision responses</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Proposals</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Research proposals, grant proposals, project proposals, dissertation proposals</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Application Materials</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Personal statements, statements of purpose, admission essays, CVs</p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Other Documents</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Book chapters, conference papers, presentations, abstracts, cover letters</p>
                            </div>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-2 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Editing Service Pricing</h2>
                        <p class="mb-6 text-center text-sm text-slate-600 dark:text-slate-400">Fast, affordable rates for professional editing</p>

                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse text-left text-sm">
                                <thead>
                                    <tr class="bg-slate-50 dark:bg-slate-900">
                                        <th class="border-b-2 border-slate-200 p-3 font-bold text-slate-900 dark:border-slate-800 dark:text-white">Service Level</th>
                                        <th class="border-b-2 border-slate-200 p-3 font-bold text-slate-900 dark:border-slate-800 dark:text-white">24+ Hours</th>
                                        <th class="border-b-2 border-slate-200 p-3 font-bold text-slate-900 dark:border-slate-800 dark:text-white">12 Hours</th>
                                        <th class="border-b-2 border-slate-200 p-3 font-bold text-slate-900 dark:border-slate-800 dark:text-white">6 Hours</th>
                                        <th class="border-b-2 border-slate-200 p-3 font-bold text-slate-900 dark:border-slate-800 dark:text-white">3 Hours</th>
                                    </tr>
                                </thead>
                                <tbody class="text-slate-600 dark:text-slate-400">
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-900">
                                        <td class="border-b border-slate-100 p-3 font-semibold text-slate-800 dark:border-slate-800 dark:text-slate-200">Proofreading</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$8/page</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$10/page</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$12/page</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$15/page</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-900">
                                        <td class="border-b border-slate-100 p-3 font-semibold text-slate-800 dark:border-slate-800 dark:text-slate-200">Copy Editing</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$12/page</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$15/page</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$18/page</td>
                                        <td class="border-b border-slate-100 p-3 dark:border-slate-800">$22/page</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-900">
                                        <td class="p-3 font-semibold text-slate-800 dark:text-slate-200">Substantive Editing</td>
                                        <td class="p-3">$18/page</td>
                                        <td class="p-3">$22/page</td>
                                        <td class="p-3">$28/page</td>
                                        <td class="p-3">$35/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-5 grid gap-4 sm:grid-cols-3">
                            <div class="rounded-xl border border-emerald-100 bg-emerald-50 p-4 dark:border-emerald-900/40 dark:bg-emerald-950/20">
                                <h4 class="mb-2 text-sm font-bold text-emerald-800 dark:text-emerald-300">✓ What's Included</h4>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>• Expert editor review</li>
                                    <li>• Track changes document</li>
                                    <li>• Clean final version</li>
                                    <li>• Editor comments</li>
                                    <li>• Summary of changes</li>
                                    <li>• Follow-up questions answered</li>
                                    <li>• 1 free re-edit round</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-blue-100 bg-blue-50 p-4 dark:border-blue-900/40 dark:bg-blue-950/20">
                                <h4 class="mb-2 text-sm font-bold text-blue-800 dark:text-blue-300">📊 Word Count</h4>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>• 1 page = 250 words (double-spaced)</li>
                                    <li>• 1 page = 500 words (single-spaced)</li>
                                    <li>• Minimum order: 2 pages</li>
                                    <li>• Volume discounts for 50+ pages</li>
                                    <li>• Rush service available</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-purple-100 bg-purple-50 p-4 dark:border-purple-900/40 dark:bg-purple-950/20">
                                <h4 class="mb-2 text-sm font-bold text-purple-800 dark:text-purple-300">🎯 Quality Promise</h4>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
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
                    <div class="mb-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="mb-8 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Proofreading &amp; Editing FAQs
                        </h2>

                        <div class="space-y-4">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">What's the difference between proofreading and copy editing?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Proofreading is surface-level correction focusing on grammar, spelling, punctuation, and typos without changing sentence structure or word choice significantly. It's the final polish before submission. Copy editing is more comprehensive, improving clarity, sentence structure, word choice, flow, and consistency while maintaining your voice. Copy editing enhances readability and effectiveness beyond just fixing errors. Substantive editing goes even deeper, providing developmental feedback on organization, arguments, and overall effectiveness. Most students need copy editing for the best combination of thoroughness and value, but if your draft is nearly perfect and just needs final error catching, proofreading may suffice.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Will the editor rewrite my paper?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">No — editing services improve and polish your existing writing rather than rewriting content. Editors maintain your voice, ideas, and arguments while correcting errors and enhancing clarity, and every change is shown in track changes so you can see exactly what was modified and why. You keep complete control, accepting or rejecting individual edits. For substantive editing, editors provide suggestions and feedback but you implement the changes. If you need new content written or major rewriting, consider our writing services instead — editing refines your work, it doesn't replace it.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Can you check my citations and references?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Yes — citation checking is included with copy editing and substantive editing. We verify in-text citations and reference lists against your required style (APA 7th, MLA 9th, Chicago/Turabian, Harvard, IEEE, AMA, ACS, CSE, Vancouver, or others), confirm every citation has a matching reference entry, and check formatting consistency (capitalization, italics, spacing, hanging indents, DOIs/URLs). We correct common citation errors but can't verify source accuracy if the original isn't accessible. Basic citation checking can be added to proofreading-only orders for a small fee.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">How quickly can you edit my document?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Standard turnaround is 24 hours for up to 10 pages, 48 hours for 11-25 pages, and 3-5 days for longer documents. Rush options include 12-hour, 6-hour, and 3-hour service (subject to editor availability and surcharge). Theses and dissertations (50+ pages) may need 5-7 days, and chapter-by-chapter editing with staggered deadlines is available so you can review each chapter before proceeding. Submitting early gets the best quality and avoids rush fees.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">What if I'm not satisfied with the editing?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">We guarantee your satisfaction. Contact us within 7 days and we'll arrange one free re-edit addressing the specific issues you raise, and your editor can explain the rationale behind any change. Most concerns are resolved quickly through direct communication. In the rare case you're still unsatisfied after a re-edit, we'll discuss refund options — we maintain a 99% satisfaction rate and stand behind our editors' work.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Is my document confidential?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Absolutely. Your work is never shared, published, resold, or stored permanently — editors sign confidentiality agreements, and files are securely transmitted and deleted after service completion. Many students trust us with thesis chapters, dissertations, and pre-publication manuscripts. Editing is legitimate, ethical academic support widely accepted by institutions; you retain complete ownership of your work, and we simply provide the kind of assistance a university writing center offers, with faster turnaround and more specialized expertise.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Success Stories -->
                    <div class="mb-8 rounded-2xl border border-blue-100 bg-blue-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-8 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Student Success Stories
                        </h2>

                        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Proofreading & Editing Service"></div>
                                <div class="mb-3 flex items-center gap-1 text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    ⭐⭐⭐⭐⭐
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "English is my second language and I always struggle with grammar. The editor caught so many errors I didn't see and improved my sentence structure significantly. The track changes helped me learn from mistakes. My paper grade improved from B to A-!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-bold text-white">
                                        YC
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Yuki C.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">International Student, Junior</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Proofreading & Editing Service"></div>
                                <div class="mb-3 flex items-center gap-1 text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    ⭐⭐⭐⭐⭐
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Dissertation editing was exactly what I needed! The editor fixed all APA 7th citations, improved clarity throughout, and caught inconsistencies across chapters. Committee approved with minor revisions. Professional service and fast turnaround. Highly recommend!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-bold text-white">
                                        PT
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Patricia T.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">PhD Candidate, Psychology</p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Proofreading & Editing Service"></div>
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Last-minute research paper editing saved me! Submitted at midnight with 6-hour rush service. Editor delivered on time with clean document ready to submit. Fixed grammar, improved flow, corrected MLA citations. Worth every penny for the peace of mind!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-600 text-sm font-bold text-white">
                                        MJ
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Marcus J.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">College Sophomore</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Proofreading & Editing Service"></div>
                                <div class="mb-3 flex items-center gap-1 text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    ⭐⭐⭐⭐⭐
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Substantive editing for my master's thesis provided incredible feedback. Editor pointed out weak arguments, suggested reorganization, and improved overall flow. The detailed comments helped me understand how to strengthen academic writing. Best investment for my thesis!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-red-600 text-sm font-bold text-white">
                                        LB
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Laura B.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Master's Student, Sociology</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Proofreading & Editing Service"></div>
                                <div class="mb-3 flex items-center gap-1 text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    ⭐⭐⭐⭐⭐
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Copy editing for my history essay improved readability dramatically. The editor maintained my voice while fixing awkward sentences and unclear phrasing. Professor commented that my writing quality had improved significantly. Great learning experience seeing professional edits!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-sm font-bold text-white">
                                        DH
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">David H.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">History Major, Senior</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Proofreading & Editing Service"></div>
                                <div class="mb-3 flex items-center gap-1 text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    ⭐⭐⭐⭐⭐
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Journal manuscript editing helped me get published! The editor improved academic tone, fixed citation inconsistencies, enhanced clarity, and caught errors I missed after multiple self-reviews. Submission was accepted with minor revisions. Professional quality editing made the difference!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-pink-600 text-sm font-bold text-white">
                                        AR
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Dr. Anna R.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Assistant Professor, Biology</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center gap-4 rounded-xl border border-slate-200 bg-white px-6 py-4 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="text-2xl font-bold text-slate-900 dark:text-white">4.95/5.0</div>
                                <div class="text-left">
                                    <div class="mb-0.5 flex text-sm text-amber-400">⭐⭐⭐⭐⭐</div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Based on 6,700+ editing reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-3 flex items-center justify-center gap-2 text-xl font-bold text-slate-900 sm:text-2xl dark:text-white">
                            <span class="text-2xl">✍️</span>
                            Ready to Polish Your Academic Writing?
                        </h3>
                        <p class="mx-auto mb-6 max-w-2xl text-center text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Join thousands of students who've improved their grades with our professional editing service. Expert editors, comprehensive quality checks, fast turnaround, and satisfaction guaranteed.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 9]) }}"
                               class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                <span>📝</span>
                                Get Your Document Edited Today
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Integrity Notice -->
        <div class="mx-auto mt-8 max-w-3xl rounded-xl border border-amber-200 bg-amber-50 p-5 dark:border-amber-900/40 dark:bg-amber-950/20">
            <p class="text-xs leading-relaxed text-amber-800 dark:text-amber-300">
                <strong>Academic Use Notice:</strong> Our proofreading and editing service is designed to help you improve your own written work through expert feedback and corrections. We encourage you to review all edits, understand the changes made, and ensure your final submission reflects your own understanding. Use of our service should comply with your institution's academic policies.
            </p>
        </div>
    </section>
@endsection
