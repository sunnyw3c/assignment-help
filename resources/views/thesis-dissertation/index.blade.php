@extends('assignment-services.show')

@section('title', 'Thesis & Dissertation Writing Service | PhD Experts | Original Research')
@section('meta_description',
    'Expert thesis and dissertation writing help from PhD scholars. Complete chapters or full
    dissertations with original research, methodology, data analysis, and defense preparation. All academic disciplines.')
@section('meta_keywords',
    'dissertation writing service, thesis help, PhD dissertation assistance, masters thesis
    writing, dissertation chapters, literature review writing, methodology help, data analysis, dissertation editing, thesis
    proposal writing')

    @push('head')
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="Professional Thesis & Dissertation Writing Service | PhD Experts">
        <meta property="og:description"
            content="Get expert thesis and dissertation help from PhD scholars. Complete writing, research, methodology, and data analysis. All disciplines covered.">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:title" content="Professional Thesis & Dissertation Writing Service | PhD Experts">
        <meta property="twitter:description"
            content="Expert thesis and dissertation help from PhD scholars. Original research with rigorous methodology and analysis.">
    @endpush

@section('custom-content')
    <!-- Comprehensive Thesis & Dissertation Content Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" itemscope itemtype="https://schema.org/Service">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <div class="mb-10 text-center sm:mb-12">
                    <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">PhD-Qualified Dissertation Support</p>
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white" itemprop="name">
                        Professional Thesis &amp; Dissertation Writing Service
                    </h1>
                    <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400" itemprop="description">
                        Get expert thesis and dissertation help from PhD scholars. Comprehensive research support, rigorous
                        methodology, advanced data analysis, and defense preparation.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        Writing a thesis or dissertation represents the culmination of years of academic study and
                        stands as the most significant scholarly achievement in your educational journey. Whether you're
                        pursuing a Master's degree or working toward your PhD, completing a dissertation requires
                        extraordinary dedication, advanced research capabilities, mastery of complex methodologies,
                        sophisticated analytical skills, and the ability to contribute original knowledge to your field.
                        Our professional thesis and dissertation writing service provides comprehensive support from
                        experienced PhD scholars who understand the rigorous demands of graduate-level research and can
                        guide you through every stage of this challenging process with expertise and academic integrity.
                    </p>

                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        Our team consists exclusively of doctoral-qualified researchers and subject matter experts who
                        have successfully defended their own dissertations and possess deep understanding of academic
                        research conventions across diverse disciplines including humanities, social sciences, business
                        administration, engineering, natural sciences, medicine, law, and education. We provide tailored
                        assistance for complete dissertations spanning 80-400 pages, individual chapters including
                        proposals, literature reviews, methodology, results, and discussion sections, comprehensive
                        statistical and qualitative data analysis, systematic literature reviews, theoretical
                        frameworks, and defense preparation. Every dissertation we support demonstrates scholarly rigor,
                        methodological soundness, critical analysis, and original contribution to academic knowledge
                        while adhering to your institution's specific formatting guidelines and citation requirements.
                    </p>
                </div>

                <!-- Trust & Guarantees Section -->
                <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-8 text-center">
                        <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Our Dissertation Guarantees</h2>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Your doctoral success is our commitment</p>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-start gap-3">
                                <div class="text-2xl">🎓</div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">PhD-Qualified Dissertation Experts</h3>
                            </div>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Your dissertation will be written by a scholar with a completed PhD in your
                                specific field who has successfully defended their own dissertation. We match
                                you with experts who have published research, understand institutional
                                requirements, and possess years of experience guiding graduate students through
                                the dissertation process.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-start gap-3">
                                <div class="text-2xl">🔬</div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Rigorous Research Methodology</h3>
                            </div>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                We employ advanced research methodologies including quantitative analysis
                                (regression, SEM, factor analysis using SPSS, R, STATA, Python), qualitative
                                methods (grounded theory, phenomenology, ethnography, content analysis with
                                NVivo), and mixed-methods designs. Every methodological choice is justified and
                                documented.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-start gap-3">
                                <div class="text-2xl">✅</div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">100% Original Research</h3>
                            </div>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Every dissertation is built on original research and analysis. We never recycle
                                previous work or use pre-written content. Comprehensive plagiarism checks via
                                Turnitin with detailed reports. All sources meticulously cited in your required
                                format (APA 7th, MLA 9th, Chicago, Harvard, IEEE). Complete academic integrity
                                guaranteed.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-start gap-3">
                                <div class="text-2xl">🛡️</div>
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">Defense Preparation Support</h3>
                            </div>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Beyond writing, we help prepare you for your dissertation defense. Receive
                                anticipated committee questions, practice responses, methodological
                                justifications, and explanations of your analytical approach. We ensure you
                                thoroughly understand every aspect of your dissertation research.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Our Dissertation Success Record</h3>
                        <div class="grid grid-cols-2 gap-4 text-center sm:grid-cols-4">
                            <div>
                                <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">200+</p>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Completed Dissertations</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">✓</p>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Comprehensive Defense Preparation</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">85+</p>
                                <p class="text-xs text-slate-600 dark:text-slate-400">PhD Dissertation Consultants</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">✓</p>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Methodologically Sound</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 grid gap-5 sm:grid-cols-2">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-3 flex items-center gap-2 text-lg font-bold text-slate-900 dark:text-white">
                            <span class="text-xl">📊</span>
                            Advanced Data Analysis Expertise
                        </h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Our dissertation consultants possess advanced proficiency in both quantitative and
                            qualitative data analysis methodologies. For quantitative dissertations, we provide
                            comprehensive statistical analysis including descriptive statistics, inferential tests,
                            multivariate analysis, structural equation modeling (SEM), hierarchical linear modeling
                            (HLM), time series analysis, and experimental design using industry-standard software such
                            as SPSS, R, STATA, SAS, Python, and MATLAB.
                        </p>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            For qualitative dissertations, our experts conduct rigorous coding procedures, thematic
                            analysis, narrative analysis, discourse analysis, grounded theory development,
                            phenomenological interpretation, and case study synthesis using NVivo, MAXQDA, or Atlas.ti.
                            Mixed-methods dissertations receive integrated analysis that meaningfully combines
                            quantitative and qualitative findings to provide comprehensive insights and robust
                            conclusions that withstand committee scrutiny.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-3 flex items-center gap-2 text-lg font-bold text-slate-900 dark:text-white">
                            <span class="text-xl">📚</span>
                            Comprehensive Literature Review
                        </h3>
                        <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            A robust literature review forms the theoretical foundation of every successful
                            dissertation. Our scholars conduct systematic searches across multiple academic databases
                            including JSTOR, ProQuest, EBSCOhost, Google Scholar, Web of Science, Scopus, PubMed, IEEE
                            Xplore, and discipline-specific repositories to identify seminal works, current research
                            trends, and gaps in existing scholarship. We analyze 50-150+ peer-reviewed sources depending
                            on your dissertation scope.
                        </p>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            We synthesize diverse theoretical perspectives, critically evaluate methodological
                            approaches, identify contradictions and consensus in the literature, trace the evolution of
                            key concepts, and position your research within broader scholarly conversations. Our
                            literature reviews demonstrate sophisticated critical analysis, theoretical integration, and
                            clear articulation of how your dissertation contributes original knowledge to advance your
                            academic field.
                        </p>
                    </div>
                </div>

                <!-- Dissertation Services Types -->
                <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                    <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                        Comprehensive Dissertation Services We Provide
                    </h2>
                    <div class="grid gap-5 sm:grid-cols-2">
                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Complete PhD Dissertations</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Full dissertation writing from proposal through final defense including all chapters,
                                original research design, data collection and analysis, comprehensive literature review,
                                and theoretical framework development (150-400 pages).
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Master's Thesis Writing</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Complete thesis projects for Master's programs including empirical research,
                                literature-based thesis, applied research projects, and capstone theses across all
                                academic disciplines (50-150 pages).
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Dissertation Proposals</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Comprehensive proposals including problem statement, research questions, literature
                                review, theoretical framework, methodology, significance, and expected contributions
                                designed to gain committee approval.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Individual Dissertation Chapters</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Chapter-by-chapter assistance including Introduction/Chapter 1, Literature
                                Review/Chapter 2, Methodology/Chapter 3, Results/Chapter 4, Discussion and
                                Conclusions/Chapter 5, plus abstract and appendices.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Statistical Data Analysis</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Expert quantitative analysis using SPSS, R, STATA, SAS, or Python including descriptive
                                statistics, regression models, ANOVA, factor analysis, SEM, survival analysis, and
                                complex multivariate procedures with interpretation.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Qualitative Research Analysis</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Comprehensive qualitative analysis including interview transcription, coding procedures,
                                thematic development, narrative analysis, phenomenological interpretation, grounded
                                theory, and ethnographic analysis using NVivo or MAXQDA.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Systematic Literature Reviews</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Rigorous systematic reviews following PRISMA guidelines, meta-analysis, scoping reviews,
                                and comprehensive narrative reviews synthesizing 50-200+ scholarly sources with critical
                                evaluation and gap identification.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Dissertation Editing &amp; Formatting</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Professional editing for clarity, coherence, academic tone, and grammar. Complete
                                formatting according to university guidelines including APA 7th, MLA 9th, Chicago, or
                                institutional-specific requirements. Table of contents, citations, references.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Methodology Design Consultation</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Expert guidance on research design selection, sampling strategies, instrument
                                development, validity and reliability considerations, ethical approval processes, and
                                methodological justification for committee approval.
                            </p>
                        </div>

                        <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Defense Preparation Coaching</h4>
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Comprehensive preparation including anticipated questions, practice sessions,
                                explanation of methodology and findings, presentation development, and strategies for
                                addressing committee concerns and critiques.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Dissertation Writing Process -->
                <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                    <h2 class="text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Our Dissertation Development Process</h2>
                    <p class="mx-auto mt-2 mb-8 max-w-2xl text-center text-sm text-slate-600 dark:text-slate-400">
                        Systematic, rigorous approach ensuring doctoral-level quality
                    </p>

                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">1</div>
                            <div class="mb-2 mt-2 text-2xl">🎯</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Consultation & Matching</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Initial consultation to understand research goals, match with PhD expert in your field</p>
                        </div>

                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">2</div>
                            <div class="mb-2 mt-2 text-2xl">📋</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Research Design</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Develop comprehensive research design, methodology, theoretical framework, and proposal</p>
                        </div>

                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">3</div>
                            <div class="mb-2 mt-2 text-2xl">📚</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Literature Review</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Systematic search and synthesis of 50-150+ scholarly sources, gap identification</p>
                        </div>

                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">4</div>
                            <div class="mb-2 mt-2 text-2xl">🔬</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Data Collection</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Execute research methodology, gather data, conduct interviews, distribute surveys</p>
                        </div>

                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">5</div>
                            <div class="mb-2 mt-2 text-2xl">📊</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Analysis</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Rigorous statistical or qualitative analysis using appropriate software and methods</p>
                        </div>

                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">6</div>
                            <div class="mb-2 mt-2 text-2xl">✍️</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Chapter Writing</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Draft all chapters with scholarly writing, proper citations, and logical flow</p>
                        </div>

                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">7</div>
                            <div class="mb-2 mt-2 text-2xl">🔍</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Quality Review</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Comprehensive editing, plagiarism check, methodology verification, citation audit</p>
                        </div>

                        <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">8</div>
                            <div class="mb-2 mt-2 text-2xl">🎓</div>
                            <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Defense Prep</h4>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Prepare defense materials, anticipated questions, practice explanations</p>
                        </div>
                    </div>

                    <div class="mt-6 rounded-xl border-l-4 border-blue-600 bg-white p-6 dark:bg-slate-900">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            <strong class="font-semibold text-slate-900 dark:text-white">Complete Transparency:</strong> Throughout the dissertation process, you maintain
                            direct communication with your assigned PhD consultant. Review and approve each chapter
                            before proceeding. Request revisions at any stage. We provide detailed explanations of
                            methodology, analysis procedures, and theoretical frameworks so you fully understand your
                            dissertation and can confidently defend it before your committee.
                        </p>
                    </div>
                </div>

                <!-- FAQ Section -->
                <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950" itemscope
                    itemtype="https://schema.org/FAQPage">
                    <h2 class="mb-8 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                        Dissertation Writing FAQs
                    </h2>

                    <div class="space-y-4">
                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                            class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Who will work on my dissertation?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Your dissertation will be
                                    assigned to a PhD-qualified scholar who has completed their own doctoral
                                    dissertation in your specific field of study. All our dissertation consultants hold
                                    earned doctorates from accredited universities and have experience in academic
                                    research, publishing, and graduate-level teaching. We carefully match you with an
                                    expert whose research interests, methodological expertise, and academic background
                                    align with your dissertation topic. You communicate directly with your consultant
                                    throughout the entire process.</p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                            class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Can you help with statistical analysis for my dissertation?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Yes, we provide comprehensive
                                    statistical analysis services for quantitative and mixed-methods dissertations. Our
                                    statisticians are proficient in SPSS, R, STATA, SAS, Python, and MATLAB. We conduct
                                    descriptive statistics, t-tests, ANOVA, MANOVA, regression analysis (linear,
                                    logistic, multinomial), factor analysis, reliability analysis, structural equation
                                    modeling (SEM), hierarchical linear modeling (HLM), survival analysis, time series
                                    analysis, and advanced multivariate procedures. All analyses include detailed output
                                    interpretation, APA-formatted tables, assumption testing, and methodological
                                    justification for your dissertation.</p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                            class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Do you provide support for qualitative dissertations?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Absolutely. Our qualitative
                                    research experts specialize in various methodological approaches including
                                    phenomenology, grounded theory, ethnography, narrative inquiry, case study research,
                                    and participatory action research. We assist with interview protocol development,
                                    data collection procedures, transcription services, coding strategies (open, axial,
                                    selective coding), thematic analysis, member checking, trustworthiness criteria, and
                                    theoretical saturation. We use NVivo, MAXQDA, and Atlas.ti for systematic coding and
                                    analysis. All qualitative work includes detailed audit trails and methodological
                                    rigor documentation.</p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                            class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">How do you ensure dissertation originality?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Every dissertation is built
                                    from original research conducted specifically for your project. We never recycle
                                    previous dissertations or use pre-written content. All literature reviews are based
                                    on current scholarly sources specific to your topic. Data analysis is conducted on
                                    your unique dataset or research questions. Before delivery, we scan all content
                                    through Turnitin plagiarism detection software and provide you with a comprehensive
                                    originality report showing proper citations and zero plagiarism. All sources are
                                    meticulously cited in your required format (APA, MLA, Chicago, etc.). We guarantee
                                    100% original scholarly work.</p>
                            </div>
                        </div>

                        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                            class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Will you help me prepare for my dissertation defense?</h3>
                            <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Yes, defense preparation is
                                    included with all complete dissertation packages. We provide comprehensive defense
                                    preparation materials including anticipated committee questions with detailed
                                    responses, explanations of methodological choices and justifications, interpretation
                                    of findings and implications, limitations and future research directions, and
                                    strategies for addressing potential critiques. We help you develop a clear
                                    presentation and ensure you thoroughly understand every aspect of your dissertation
                                    research so you can confidently defend your work. Mock defense sessions can be
                                    arranged for additional preparation.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Meet Our Dissertation Consultants -->
                <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-8 text-center">
                        <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Meet Your Dissertation Consultants</h2>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Doctoral-level experts with extensive publication records and dissertation committee experience</p>
                    </div>

                    <div class="mb-6 grid gap-5 sm:grid-cols-3">
                        <!-- Consultant 1 -->
                        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-purple-500 text-sm font-bold text-white">
                                    DJ
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2">
                                        <h4 class="text-sm font-bold text-slate-900 dark:text-white">Dr. Jennifer</h4>
                                        <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">PhD Verified</span>
                                    </div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">PhD in Education</p>
                                    <div class="mt-1 text-xs text-amber-400">⭐⭐⭐⭐⭐ 5.0</div>
                                </div>
                            </div>
                            <p class="mb-3 text-xs text-slate-600 dark:text-slate-400">22+ years academia • 18 journal publications • 45
                                dissertations supervised • Mixed-methods, qualitative research, Ed.D & PhD expert</p>
                            <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                                <span>Columbia University</span>
                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">Available Now</span>
                            </div>
                        </div>

                        <!-- Consultant 2 -->
                        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 text-sm font-bold text-white">
                                    DR
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2">
                                        <h4 class="text-sm font-bold text-slate-900 dark:text-white">Dr. Robert</h4>
                                        <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">PhD Verified</span>
                                    </div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">PhD in Statistics</p>
                                    <div class="mt-1 text-xs text-amber-400">⭐⭐⭐⭐⭐ 5.0</div>
                                </div>
                            </div>
                            <p class="mb-3 text-xs text-slate-600 dark:text-slate-400">18 years experience • Statistical consultant • 120+
                                dissertations assisted • SPSS, R, SAS, quantitative analysis, regression, SEM</p>
                            <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                                <span>University of Michigan</span>
                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">Available Now</span>
                            </div>
                        </div>

                        <!-- Consultant 3 -->
                        <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 text-sm font-bold text-white">
                                    DM
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center gap-2">
                                        <h4 class="text-sm font-bold text-slate-900 dark:text-white">Dr. Maria</h4>
                                        <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">PhD Verified</span>
                                    </div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">PhD in Nursing</p>
                                    <div class="mt-1 text-xs text-amber-400">⭐⭐⭐⭐⭐ 4.9</div>
                                </div>
                            </div>
                            <p class="mb-3 text-xs text-slate-600 dark:text-slate-400">20+ years clinical research • 12 publications •
                                DNP/PhD dissertations • Qualitative methods, phenomenology, grounded theory, NVivo</p>
                            <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                                <span>Johns Hopkins</span>
                                <span class="font-semibold text-amber-600 dark:text-amber-400">2 Projects in Queue</span>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border-l-4 border-blue-600 bg-white p-6 dark:bg-slate-900">
                        <p class="text-center text-sm text-slate-600 dark:text-slate-400">
                            <strong class="font-semibold text-slate-900 dark:text-white">All consultants are published scholars with dissertation committee
                                experience.</strong> We verify doctoral degrees, publication records, and teaching
                            credentials. One-on-one consultations available throughout your dissertation journey.
                        </p>
                    </div>
                </div>

                <!-- Dissertation Defense Success Rate -->
                <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-8 text-center">
                        <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Our Dissertation Success Record</h2>
                        <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Proven track record of successful defenses and completions</p>
                    </div>

                    <div class="mb-6 grid gap-5 sm:grid-cols-3">
                        <!-- Success Metric 1 -->
                        <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-6 text-center dark:border-emerald-900 dark:bg-emerald-950/30">
                            <p class="text-3xl font-bold text-emerald-600 dark:text-emerald-400">94%</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900 dark:text-white">Defense Pass Rate</p>
                            <p class="mt-1 text-xs text-slate-600 dark:text-slate-400">Students pass defense on 1st or 2nd attempt</p>
                        </div>

                        <!-- Success Metric 2 -->
                        <div class="rounded-xl border border-blue-200 bg-blue-50 p-6 text-center dark:border-blue-900 dark:bg-blue-950/30">
                            <p class="text-3xl font-bold text-blue-600 dark:text-blue-400">450+</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900 dark:text-white">Completed Dissertations</p>
                            <p class="mt-1 text-xs text-slate-600 dark:text-slate-400">PhD, Ed.D, DNP, DBA across all disciplines</p>
                        </div>

                        <!-- Success Metric 3 -->
                        <div class="rounded-xl border border-purple-200 bg-purple-50 p-6 text-center dark:border-purple-900 dark:bg-purple-950/30">
                            <p class="text-3xl font-bold text-purple-600 dark:text-purple-400">4.9/5</p>
                            <p class="mt-1 text-sm font-semibold text-slate-900 dark:text-white">Client Satisfaction</p>
                            <p class="mt-1 text-xs text-slate-600 dark:text-slate-400">Based on 300+ doctoral student reviews</p>
                        </div>
                    </div>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <!-- Sample Timeline 1 -->
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-center gap-2">
                                <span class="rounded-full bg-blue-600 px-3 py-1 text-xs font-semibold text-white">PhD Success</span>
                                <span class="ml-auto text-xs font-semibold text-emerald-600 dark:text-emerald-400">Defended Successfully</span>
                            </div>
                            <h4 class="mb-2 text-sm font-bold text-slate-900 dark:text-white">Education Dissertation - 250 Pages</h4>
                            <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">Challenge:</strong> Working full-time teacher completing Ed.D dissertation on
                                urban school reform<br>
                                <strong class="font-semibold text-slate-900 dark:text-white">Timeline:</strong> 8 months from proposal to defense<br>
                                <strong class="font-semibold text-slate-900 dark:text-white">Result:</strong> Passed with minor revisions, now published
                            </p>
                            <div class="text-xs italic text-slate-500 dark:text-slate-500">
                                "Committee praised methodological rigor and contribution to field"
                            </div>
                        </div>

                        <!-- Sample Timeline 2 -->
                        <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-3 flex items-center gap-2">
                                <span class="rounded-full bg-purple-600 px-3 py-1 text-xs font-semibold text-white">DNP Success</span>
                                <span class="ml-auto text-xs font-semibold text-emerald-600 dark:text-emerald-400">Defended Successfully</span>
                            </div>
                            <h4 class="mb-2 text-sm font-bold text-slate-900 dark:text-white">Nursing Practice Dissertation - 180 Pages</h4>
                            <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">Challenge:</strong> Full-time nurse completing DNP project on patient safety
                                protocols<br>
                                <strong class="font-semibold text-slate-900 dark:text-white">Timeline:</strong> 6 months from data collection to completion<br>
                                <strong class="font-semibold text-slate-900 dark:text-white">Result:</strong> Approved with zero revisions, implemented at hospital
                            </p>
                            <div class="text-xs italic text-slate-500 dark:text-slate-500">
                                "Quality improvement project now hospital-wide standard"
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Final CTA -->
                <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                    <h3 class="mb-3 flex items-center justify-center gap-2 text-xl font-bold text-slate-900 dark:text-white">
                        <span class="text-xl">🎓</span>
                        Ready to Complete Your Dissertation Successfully?
                    </h3>
                    <p class="mx-auto mb-6 max-w-2xl text-center text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        Join hundreds of doctoral students who've successfully defended their dissertations with our
                        expert guidance. PhD-qualified consultants, rigorous methodology, comprehensive analysis, and
                        dedicated support from proposal through defense. Your doctoral success is our commitment.
                    </p>
                    <div class="text-center">
                        <a href="{{ route('order', ['assignment_service' => $service->id ?? 3]) }}"
                            class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                            <span>📝</span>
                            Start Your Dissertation Journey Today
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Integrity Notice -->
        <div class="mx-auto mt-8 max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-xl border border-amber-200 bg-amber-50 p-5 dark:border-amber-900 dark:bg-amber-950/30">
                <p class="text-xs leading-relaxed text-amber-800 dark:text-amber-300">
                    <strong class="font-semibold">Academic Use Notice:</strong> Our thesis and dissertation support services are provided as academic
                    guidance and reference materials to help you develop your research skills. All work delivered is intended to
                    be used as a learning aid. Please ensure your use of our services complies with your institution's academic
                    integrity policies.
                </p>
            </div>
        </div>
    </section>

    <!-- Chapter-by-Chapter Guidance -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <span class="mb-3 inline-block rounded-full bg-indigo-100 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-indigo-700 dark:bg-indigo-950/40 dark:text-indigo-400">Chapter Guide</span>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">What Goes Into Each Dissertation Chapter</h2>
                <p class="mt-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">A well-structured dissertation follows a clear chapter
                    logic. Here's exactly what our doctoral writers include in each section.</p>
            </div>
            <div class="space-y-3">
                @php
                    $chapters = [
                        [
                            'num' => '01',
                            'title' => 'Introduction',
                            'color' => 'blue',
                            'points' => [
                                'Background and context of the research problem',
                                'Clear statement of the research gap your study addresses',
                                'Research aims, objectives, and questions or hypotheses',
                                'Scope and limitations of the study',
                                'Overview of the dissertation structure',
                            ],
                        ],
                        [
                            'num' => '02',
                            'title' => 'Literature Review',
                            'color' => 'indigo',
                            'points' => [
                                'Synthesis (not summary) of existing scholarship',
                                'Identification of contradictions, gaps, and debates in the field',
                                'Theoretical framework underpinning your study',
                                'Justification for how your research addresses identified gaps',
                                'Organised thematically or chronologically — not source by source',
                            ],
                        ],
                        [
                            'num' => '03',
                            'title' => 'Methodology',
                            'color' => 'purple',
                            'points' => [
                                'Research philosophy (positivist, interpretivist, pragmatist)',
                                'Research design justification (qualitative, quantitative, mixed methods)',
                                'Sampling strategy and participant recruitment',
                                'Data collection methods and instruments',
                                'Data analysis approach and tools (SPSS, NVivo, R, etc.)',
                                'Ethical considerations and approval',
                            ],
                        ],
                        [
                            'num' => '04',
                            'title' => 'Results / Findings',
                            'color' => 'green',
                            'points' => [
                                'Objective presentation of data without interpretation',
                                'Tables, figures, and statistical outputs clearly labelled',
                                'For qualitative: themes and categories with supporting quotes',
                                'For quantitative: descriptive statistics, regression outputs, significance values',
                                'Structured to directly address each research question',
                            ],
                        ],
                        [
                            'num' => '05',
                            'title' => 'Discussion',
                            'color' => 'orange',
                            'points' => [
                                'Interpretation of findings in relation to the literature',
                                'Explanation of unexpected or contradictory results',
                                'Theoretical and practical implications',
                                'Limitations of the current study',
                                'Directions for future research',
                            ],
                        ],
                        [
                            'num' => '06',
                            'title' => 'Conclusion',
                            'color' => 'red',
                            'points' => [
                                'Direct answer to the research question(s)',
                                'Summary of key contributions to knowledge',
                                'Practical recommendations based on findings',
                                'Honest acknowledgement of limitations',
                                'Final reflective statement',
                            ],
                        ],
                    ];
                @endphp
                @foreach ($chapters as $ch)
                    <div
                        class="flex gap-5 rounded-2xl border border-slate-200 bg-white p-6 transition-colors duration-200 hover:border-{{ $ch['color'] }}-200 hover:bg-{{ $ch['color'] }}-50 dark:border-slate-800 dark:bg-slate-900">
                        <div class="w-10 shrink-0 text-2xl font-bold leading-none text-{{ $ch['color'] }}-300 dark:text-{{ $ch['color'] }}-800">
                            {{ $ch['num'] }}</div>
                        <div class="flex-1">
                            <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Chapter {{ $ch['num'] }}:
                                {{ $ch['title'] }}</h3>
                            <ul class="grid gap-x-6 gap-y-1.5 sm:grid-cols-2">
                                @foreach ($ch['points'] as $point)
                                    <li class="flex items-start gap-2 text-sm text-slate-600 dark:text-slate-400">
                                        <svg class="mt-0.5 h-4 w-4 shrink-0 text-{{ $ch['color'] }}-500"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        {{ $point }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Common Dissertation Mistakes -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <span class="mb-3 inline-block rounded-full bg-red-100 px-3 py-1 text-[11px] font-semibold uppercase tracking-wider text-red-700 dark:bg-red-950/40 dark:text-red-400">Critical Errors</span>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">6 Dissertation Mistakes That Lead to
                    Resubmission</h2>
                <p class="mt-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">These are the most common reasons dissertation
                    committees request major revisions.</p>
            </div>
            <div class="grid gap-5 sm:grid-cols-2">
                @php
                    $mistakes = [
                        [
                            'title' => 'Research Question That Cannot Be Answered',
                            'desc' =>
                                'Questions that are too broad, too philosophical, or unanswerable with available data lead to entire dissertations being rejected. A good research question is specific, original, answerable with your chosen methodology, and significant to the field.',
                        ],
                        [
                            'title' => 'Methodology Not Aligned With Research Question',
                            'desc' =>
                                'Using a quantitative survey to explore lived experiences, or a qualitative interview approach to test statistical hypotheses — misalignment between your question and methodology is a fundamental flaw that no amount of good writing can fix.',
                        ],
                        [
                            'title' => 'Literature Review That Summarises Instead of Synthesises',
                            'desc' =>
                                'A literature review that goes source by source ("Smith (2019) says X. Jones (2020) says Y.") shows low-level reading. Examiners want to see you compare, contrast, and build a theoretical argument — not a bibliography with commentary.',
                        ],
                        [
                            'title' => 'Inadequate Sample Size or Sampling Justification',
                            'desc' =>
                                'Choosing 10 interview participants with no justification, or running a survey on 15 people and claiming statistical significance — sampling decisions must be justified with reference to appropriate standards for your methodology and field.',
                        ],
                        [
                            'title' => 'Results and Discussion Chapters Not Clearly Separated',
                            'desc' =>
                                'Results present data. Discussion interprets it. Mixing interpretation into your results chapter, or producing a discussion that just repeats the results, are both examined as structural failures that suggest poor understanding of research conventions.',
                        ],
                        [
                            'title' => 'Ignoring the Marking Criteria and Supervisor Feedback',
                            'desc' =>
                                'Every dissertation is assessed against specific criteria. Students who don\'t map their work to these criteria, or who ignore supervisor comments, regularly score below their ability. Our writers always structure work to address every assessment criterion explicitly.',
                        ],
                    ];
                @endphp
                @foreach ($mistakes as $m)
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 transition-colors hover:border-red-200 hover:bg-red-50 dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">{{ $m['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $m['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
