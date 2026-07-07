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
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Thesis & Dissertation
                        Writing Service</h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Get expert thesis and dissertation help from PhD scholars. Comprehensive research support, rigorous
                        methodology, advanced data analysis, and defense preparation.
                    </p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Writing a thesis or dissertation represents the culmination of years of academic study and
                            stands as the most significant scholarly achievement in your educational journey. Whether you're
                            pursuing a Master's degree or working toward your PhD, completing a dissertation requires
                            extraordinary dedication, advanced research capabilities, mastery of complex methodologies,
                            sophisticated analytical skills, and the ability to contribute original knowledge to your field.
                            Our professional thesis and dissertation writing service provides comprehensive support from
                            experienced PhD scholars who understand the rigorous demands of graduate-level research and can
                            guide you through every stage of this challenging process with expertise and academic integrity.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
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
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Dissertation Guarantees</h2>
                            <p class="text-lg text-gray-600">Your doctoral success is our commitment</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div
                                class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🎓</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">PhD-Qualified Dissertation Experts
                                        </h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Your dissertation will be written by a scholar with a completed PhD in your
                                            specific field who has successfully defended their own dissertation. We match
                                            you with experts who have published research, understand institutional
                                            requirements, and possess years of experience guiding graduate students through
                                            the dissertation process.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🔬</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Rigorous Research Methodology</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We employ advanced research methodologies including quantitative analysis
                                            (regression, SEM, factor analysis using SPSS, R, STATA, Python), qualitative
                                            methods (grounded theory, phenomenology, ethnography, content analysis with
                                            NVivo), and mixed-methods designs. Every methodological choice is justified and
                                            documented.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">✅</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">100% Original Research</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Every dissertation is built on original research and analysis. We never recycle
                                            previous work or use pre-written content. Comprehensive plagiarism checks via
                                            Turnitin with detailed reports. All sources meticulously cited in your required
                                            format (APA 7th, MLA 9th, Chicago, Harvard, IEEE). Complete academic integrity
                                            guaranteed.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🛡️</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Defense Preparation Support</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Beyond writing, we help prepare you for your dissertation defense. Receive
                                            anticipated committee questions, practice responses, methodological
                                            justifications, and explanations of your analytical approach. We ensure you
                                            thoroughly understand every aspect of your dissertation research.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Dissertation Success Record
                            </h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">200+</div>
                                    <p class="text-sm text-gray-700">Completed Dissertations</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">✓</div>
                                    <p class="text-sm text-gray-700">Comprehensive Defense Preparation</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">85+</div>
                                    <p class="text-sm text-gray-700">PhD Dissertation Consultants</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">✓</div>
                                    <p class="text-sm text-gray-700">Methodologically Sound</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">📊</span>
                                Advanced Data Analysis Expertise
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Our dissertation consultants possess advanced proficiency in both quantitative and
                                qualitative data analysis methodologies. For quantitative dissertations, we provide
                                comprehensive statistical analysis including descriptive statistics, inferential tests,
                                multivariate analysis, structural equation modeling (SEM), hierarchical linear modeling
                                (HLM), time series analysis, and experimental design using industry-standard software such
                                as SPSS, R, STATA, SAS, Python, and MATLAB.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                For qualitative dissertations, our experts conduct rigorous coding procedures, thematic
                                analysis, narrative analysis, discourse analysis, grounded theory development,
                                phenomenological interpretation, and case study synthesis using NVivo, MAXQDA, or Atlas.ti.
                                Mixed-methods dissertations receive integrated analysis that meaningfully combines
                                quantitative and qualitative findings to provide comprehensive insights and robust
                                conclusions that withstand committee scrutiny.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">📚</span>
                                Comprehensive Literature Review
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                A robust literature review forms the theoretical foundation of every successful
                                dissertation. Our scholars conduct systematic searches across multiple academic databases
                                including JSTOR, ProQuest, EBSCOhost, Google Scholar, Web of Science, Scopus, PubMed, IEEE
                                Xplore, and discipline-specific repositories to identify seminal works, current research
                                trends, and gaps in existing scholarship. We analyze 50-150+ peer-reviewed sources depending
                                on your dissertation scope.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
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
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Comprehensive Dissertation Services We Provide
                        </h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Complete PhD Dissertations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Full dissertation writing from proposal through final defense including all chapters,
                                    original research design, data collection and analysis, comprehensive literature review,
                                    and theoretical framework development (150-400 pages).
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Master's Thesis Writing</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Complete thesis projects for Master's programs including empirical research,
                                    literature-based thesis, applied research projects, and capstone theses across all
                                    academic disciplines (50-150 pages).
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Dissertation Proposals</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Comprehensive proposals including problem statement, research questions, literature
                                    review, theoretical framework, methodology, significance, and expected contributions
                                    designed to gain committee approval.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Individual Dissertation Chapters</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Chapter-by-chapter assistance including Introduction/Chapter 1, Literature
                                    Review/Chapter 2, Methodology/Chapter 3, Results/Chapter 4, Discussion and
                                    Conclusions/Chapter 5, plus abstract and appendices.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Statistical Data Analysis</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Expert quantitative analysis using SPSS, R, STATA, SAS, or Python including descriptive
                                    statistics, regression models, ANOVA, factor analysis, SEM, survival analysis, and
                                    complex multivariate procedures with interpretation.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Qualitative Research Analysis</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Comprehensive qualitative analysis including interview transcription, coding procedures,
                                    thematic development, narrative analysis, phenomenological interpretation, grounded
                                    theory, and ethnographic analysis using NVivo or MAXQDA.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Systematic Literature Reviews</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Rigorous systematic reviews following PRISMA guidelines, meta-analysis, scoping reviews,
                                    and comprehensive narrative reviews synthesizing 50-200+ scholarly sources with critical
                                    evaluation and gap identification.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Dissertation Editing & Formatting</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Professional editing for clarity, coherence, academic tone, and grammar. Complete
                                    formatting according to university guidelines including APA 7th, MLA 9th, Chicago, or
                                    institutional-specific requirements. Table of contents, citations, references.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Methodology Design Consultation</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Expert guidance on research design selection, sampling strategies, instrument
                                    development, validity and reliability considerations, ethical approval processes, and
                                    methodological justification for committee approval.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Defense Preparation Coaching</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Comprehensive preparation including anticipated questions, practice sessions,
                                    explanation of methodology and findings, presentation development, and strategies for
                                    addressing committee concerns and critiques.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Dissertation Writing Process -->
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Our Dissertation Development Process
                        </h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Systematic, rigorous approach ensuring doctoral-level quality
                        </p>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    1</div>
                                <div class="text-3xl mb-2 mt-2">🎯</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Consultation & Matching</h4>
                                <p class="text-xs text-gray-600">Initial consultation to understand research goals, match
                                    with PhD expert in your field</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    2</div>
                                <div class="text-3xl mb-2 mt-2">📋</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Research Design</h4>
                                <p class="text-xs text-gray-600">Develop comprehensive research design, methodology,
                                    theoretical framework, and proposal</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    3</div>
                                <div class="text-3xl mb-2 mt-2">📚</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Literature Review</h4>
                                <p class="text-xs text-gray-600">Systematic search and synthesis of 50-150+ scholarly
                                    sources, gap identification</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    4</div>
                                <div class="text-3xl mb-2 mt-2">🔬</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Data Collection</h4>
                                <p class="text-xs text-gray-600">Execute research methodology, gather data, conduct
                                    interviews, distribute surveys</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    5</div>
                                <div class="text-3xl mb-2 mt-2">📊</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Analysis</h4>
                                <p class="text-xs text-gray-600">Rigorous statistical or qualitative analysis using
                                    appropriate software and methods</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    6</div>
                                <div class="text-3xl mb-2 mt-2">✍️</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Chapter Writing</h4>
                                <p class="text-xs text-gray-600">Draft all chapters with scholarly writing, proper
                                    citations, and logical flow</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    7</div>
                                <div class="text-3xl mb-2 mt-2">🔍</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Quality Review</h4>
                                <p class="text-xs text-gray-600">Comprehensive editing, plagiarism check, methodology
                                    verification, citation audit</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div
                                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">
                                    8</div>
                                <div class="text-3xl mb-2 mt-2">🎓</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Defense Prep</h4>
                                <p class="text-xs text-gray-600">Prepare defense materials, anticipated questions, practice
                                    explanations</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Complete Transparency:</strong> Throughout the dissertation process, you maintain
                                direct communication with your assigned PhD consultant. Review and approve each chapter
                                before proceeding. Request revisions at any stage. We provide detailed explanations of
                                methodology, analysis procedures, and theoretical frameworks so you fully understand your
                                dissertation and can confidently defend it before your committee.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope
                        itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Dissertation Writing FAQs
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"
                                class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Who will work on my
                                    dissertation?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Your dissertation will be
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
                                class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you help with
                                    statistical analysis for my dissertation?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes, we provide comprehensive
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
                                class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you provide support
                                    for qualitative dissertations?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Absolutely. Our qualitative
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
                                class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How do you ensure
                                    dissertation originality?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Every dissertation is built
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
                                class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Will you help me prepare
                                    for my dissertation defense?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes, defense preparation is
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
                    <div
                        class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Meet Your Dissertation Consultants</h2>
                            <p class="text-lg text-gray-600">Doctoral-level experts with extensive publication records and
                                dissertation committee experience</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <!-- Consultant 1 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        DJ
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Jennifer</h4>
                                            <span
                                                class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">PhD
                                                Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Education</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">22+ years academia • 18 journal publications • 45
                                    dissertations supervised • Mixed-methods, qualitative research, Ed.D & PhD expert</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Columbia University</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Consultant 2 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        DR
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Robert</h4>
                                            <span
                                                class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">PhD
                                                Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Statistics</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">18 years experience • Statistical consultant • 120+
                                    dissertations assisted • SPSS, R, SAS, quantitative analysis, regression, SEM</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>University of Michigan</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Consultant 3 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div
                                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        DM
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Maria</h4>
                                            <span
                                                class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">PhD
                                                Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Nursing</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">20+ years clinical research • 12 publications •
                                    DNP/PhD dissertations • Qualitative methods, phenomenology, grounded theory, NVivo</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Johns Hopkins</span>
                                    <span class="text-orange-600 font-semibold">2 Projects in Queue</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 text-center">
                                <strong>All consultants are published scholars with dissertation committee
                                    experience.</strong> We verify doctoral degrees, publication records, and teaching
                                credentials. One-on-one consultations available throughout your dissertation journey.
                            </p>
                        </div>
                    </div>

                    <!-- Dissertation Defense Success Rate -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Dissertation Success Record</h2>
                            <p class="text-lg text-gray-600">Proven track record of successful defenses and completions</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <!-- Success Metric 1 -->
                            <div
                                class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-8 text-center border border-green-200">
                                <div class="text-5xl font-black text-green-600 mb-2">94%</div>
                                <p class="text-lg font-semibold text-gray-900 mb-2">Defense Pass Rate</p>
                                <p class="text-sm text-gray-600">Students pass defense on 1st or 2nd attempt</p>
                            </div>

                            <!-- Success Metric 2 -->
                            <div
                                class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 text-center border border-blue-200">
                                <div class="text-5xl font-black text-blue-600 mb-2">450+</div>
                                <p class="text-lg font-semibold text-gray-900 mb-2">Completed Dissertations</p>
                                <p class="text-sm text-gray-600">PhD, Ed.D, DNP, DBA across all disciplines</p>
                            </div>

                            <!-- Success Metric 3 -->
                            <div
                                class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-8 text-center border border-purple-200">
                                <div class="text-5xl font-black text-purple-600 mb-2">4.9/5</div>
                                <p class="text-lg font-semibold text-gray-900 mb-2">Client Satisfaction</p>
                                <p class="text-sm text-gray-600">Based on 300+ doctoral student reviews</p>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Sample Timeline 1 -->
                            <div class="bg-gray-50 rounded-xl p-6">
                                <div class="flex items-center mb-4">
                                    <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-sm font-semibold">PhD
                                        Success</span>
                                    <span class="ml-auto text-green-600 font-bold">Defended Successfully</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Education Dissertation - 250 Pages</h4>
                                <p class="text-sm text-gray-700 mb-3">
                                    <strong>Challenge:</strong> Working full-time teacher completing Ed.D dissertation on
                                    urban school reform<br>
                                    <strong>Timeline:</strong> 8 months from proposal to defense<br>
                                    <strong>Result:</strong> Passed with minor revisions, now published
                                </p>
                                <div class="text-xs text-gray-600 italic">
                                    "Committee praised methodological rigor and contribution to field"
                                </div>
                            </div>

                            <!-- Sample Timeline 2 -->
                            <div class="bg-gray-50 rounded-xl p-6">
                                <div class="flex items-center mb-4">
                                    <span class="bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">DNP
                                        Success</span>
                                    <span class="ml-auto text-green-600 font-bold">Defended Successfully</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Nursing Practice Dissertation - 180 Pages</h4>
                                <p class="text-sm text-gray-700 mb-3">
                                    <strong>Challenge:</strong> Full-time nurse completing DNP project on patient safety
                                    protocols<br>
                                    <strong>Timeline:</strong> 6 months from data collection to completion<br>
                                    <strong>Result:</strong> Approved with zero revisions, implemented at hospital
                                </p>
                                <div class="text-xs text-gray-600 italic">
                                    "Quality improvement project now hospital-wide standard"
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Final CTA -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <span class="text-3xl mr-3">🎓</span>
                            Ready to Complete Your Dissertation Successfully?
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center max-w-3xl mx-auto">
                            Join hundreds of doctoral students who've successfully defended their dissertations with our
                            expert guidance. PhD-qualified consultants, rigorous methodology, comprehensive analysis, and
                            dedicated support from proposal through defense. Your doctoral success is our commitment.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 3]) }}"
                                class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Start Your Dissertation Journey Today
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Integrity Notice -->
        <div class="bg-amber-50 border border-amber-200 rounded-xl p-6 mt-8 max-w-5xl mx-auto">
            <p class="text-sm text-amber-800 leading-relaxed">
                <strong>Academic Use Notice:</strong> Our thesis and dissertation support services are provided as academic
                guidance and reference materials to help you develop your research skills. All work delivered is intended to
                be used as a learning aid. Please ensure your use of our services complies with your institution's academic
                integrity policies.
            </p>
        </div>
    </section>

    <!-- Chapter-by-Chapter Guidance -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-indigo-100 text-indigo-700 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full mb-4">Chapter
                    Guide</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Goes Into Each Dissertation Chapter</h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto">A well-structured dissertation follows a clear chapter
                    logic. Here's exactly what our doctoral writers include in each section.</p>
            </div>
            <div class="space-y-4">
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
                        class="flex gap-6 p-6 rounded-2xl border border-gray-100 bg-gray-50 hover:border-{{ $ch['color'] }}-200 hover:bg-{{ $ch['color'] }}-50 transition-colors duration-200">
                        <div class="flex-shrink-0 text-{{ $ch['color'] }}-200 font-black text-4xl leading-none w-12">
                            {{ $ch['num'] }}</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-gray-900 text-lg mb-3">Chapter {{ $ch['num'] }}:
                                {{ $ch['title'] }}</h3>
                            <ul class="grid sm:grid-cols-2 gap-x-6 gap-y-1.5">
                                @foreach ($ch['points'] as $point)
                                    <li class="flex items-start gap-2 text-sm text-gray-600">
                                        <svg class="w-4 h-4 text-{{ $ch['color'] }}-500 flex-shrink-0 mt-0.5"
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
    <section class="py-20 bg-gradient-to-br from-slate-50 to-gray-100">
        <div class="container mx-auto px-4 max-w-5xl">
            <div class="text-center mb-12">
                <span
                    class="inline-block bg-red-100 text-red-700 text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full mb-4">Critical
                    Errors</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">6 Dissertation Mistakes That Lead to
                    Resubmission</h2>
                <p class="text-gray-500 text-lg max-w-2xl mx-auto">These are the most common reasons dissertation
                    committees request major revisions.</p>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
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

            </div>
        </div>
    </section>

@endsection
