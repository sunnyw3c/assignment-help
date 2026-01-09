@extends('assignment-services.show')

@section('title', 'Research Paper Writing Service | PhD Writers | Original Research Help')
@section('meta_description', 'Professional research paper writing service with PhD-qualified researchers. Original, plagiarism-free research papers with proper citations. All academic levels: undergraduate, graduate, PhD. 24/7 support.')
@section('meta_keywords', 'research paper writing service, research paper help, write my research paper, professional research writers, academic research assistance, custom research papers, research methodology help, literature review writing, thesis writing, dissertation help')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Research Paper Writing Service | PhD Researchers">
    <meta property="og:description" content="Get expert research paper help from PhD-qualified researchers. Original, well-researched papers with proper methodology and citations. All disciplines covered.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Research Paper Writing Service | PhD Researchers">
    <meta property="twitter:description" content="Expert research paper help from PhD-qualified researchers. Original research with proper methodology and citations.">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Research Paper Writing Service",
        "description": "Professional research paper writing service with PhD-qualified researchers providing original, well-researched academic papers across all disciplines and academic levels.",
        "provider": {
            "@type": "Organization",
            "name": "Assignment Help Online"
        },
        "serviceType": "Academic Research Paper Writing",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Research Paper Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Research Paper Writing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Literature Review Writing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Thesis Writing"
                    }
                }
            ]
        }
    }
    </script>
@endpush

@section('custom-content')
    <!-- Comprehensive Research Paper Content Section -->
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Research Paper Writing Service</h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Get expert research paper help from PhD-qualified researchers. Original, well-researched papers with proper methodology, citations, and academic rigor.
                    </p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Writing a research paper is one of the most challenging and important assignments in higher education. It requires not only extensive knowledge of your subject matter but also advanced research skills, critical analysis abilities, and the capacity to synthesize information from multiple sources into a coherent, well-argued document. Our professional research paper writing service is designed to support students at all academic levels, from undergraduate coursework to doctoral dissertations, providing expert assistance that combines scholarly rigor with original thinking and impeccable academic standards.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team consists of PhD-qualified researchers and subject matter experts who have published in peer-reviewed journals and understand the nuances of academic research methodology. Whether you need help with a short literature review, a comprehensive thesis, or a complex empirical study requiring data analysis, we provide tailored support that meets the specific requirements of your discipline. From formulating research questions and developing hypotheses to conducting literature reviews, analyzing data, and presenting findings, we guide you through every stage of the research paper writing process with professionalism and expertise.
                        </p>
                    </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Research Guarantees</h2>
                            <p class="text-lg text-gray-600">Your academic success is protected</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🎓</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">PhD-Qualified Researchers</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Your research paper will be written by a researcher with a PhD or Master's degree in your specific field. We verify all academic credentials and writing samples before hiring. Many of our writers have published in peer-reviewed journals and teach at universities.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📊</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Proper Research Methodology</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We use proper research methods including literature reviews, data collection, statistical analysis (SPSS, R, Python), qualitative coding, and scholarly databases (JSTOR, PubMed, Google Scholar). Every claim is supported with credible peer-reviewed sources.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">✅</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Zero Plagiarism Guarantee</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Every research paper is written from scratch - no pre-written papers, no AI content, no copy-paste. Includes free Turnitin plagiarism report showing 0% similarity. All sources properly cited in APA, MLA, Chicago, or Harvard style.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">💯</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Money-Back Guarantee</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            If your research paper doesn't meet the agreed requirements, methodology standards, or is delivered late, you get a full refund. We also offer free unlimited revisions for 21 days after delivery.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Track Record</h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                                    <p class="text-sm text-gray-700">Research Papers Completed</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">97%</div>
                                    <p class="text-sm text-gray-700">Customer Satisfaction</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">150+</div>
                                    <p class="text-sm text-gray-700">PhD Writers</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">100%</div>
                                    <p class="text-sm text-gray-700">Original Research</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🔬</span>
                                Research Methodology Expertise
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Our research specialists are proficient in both qualitative and quantitative research methodologies, ensuring that your research paper employs the most appropriate approach for your topic and discipline. We excel at designing robust research frameworks, selecting suitable data collection methods, and applying rigorous analysis techniques including statistical analysis, thematic analysis, content analysis, and case study methodology.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Every research paper we produce demonstrates mastery of academic conventions including proper citation practices, adherence to formatting guidelines such as APA 7th edition, MLA, Chicago, or Harvard styles, and the integration of credible scholarly sources from academic databases. We ensure that all research is ethically conducted and properly documented, meeting the highest standards of academic integrity.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">📚</span>
                                Comprehensive Literature Review
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                A strong literature review is the foundation of any excellent research paper. Our writers conduct exhaustive searches of academic databases including JSTOR, Google Scholar, PubMed, and discipline-specific repositories to identify relevant peer-reviewed articles, books, and authoritative sources. We critically evaluate existing research, identify gaps in the literature, and position your research within the broader academic conversation.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We synthesize diverse perspectives, compare contrasting viewpoints, and build a logical argument that establishes the significance of your research question. Our literature reviews demonstrate critical thinking, analytical depth, and the ability to contextualize your research within current scholarly debates, providing a solid theoretical framework for your entire research paper.
                            </p>
                        </div>
                    </div>

                    <!-- Research Paper Types -->
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Types of Research Papers We Write
                        </h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Empirical Research Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Original research with data collection, statistical analysis, and findings. Includes methodology, results, discussion sections with proper scientific reporting.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Literature Review Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Comprehensive analysis and synthesis of existing research on a topic. Critical evaluation of scholarly sources with identification of research gaps.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Analytical Research Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    In-depth analysis of complex topics, theories, or phenomena using multiple scholarly sources and critical thinking frameworks.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Experimental Research Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Laboratory or field experiments with hypothesis testing, controlled variables, and statistical analysis of results.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Survey Research Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Questionnaire-based research with sample populations, data collection, statistical analysis (SPSS, R), and interpretation of findings.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Case Study Research</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Detailed examination of specific cases, organizations, or phenomena with qualitative or mixed-methods analysis.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Comparative Research Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Analysis comparing theories, policies, countries, or systems with evidence-based evaluation of similarities and differences.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Meta-Analysis Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Statistical synthesis of multiple research studies to identify patterns, effect sizes, and overall conclusions.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Thesis & Dissertation Chapters</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Master's thesis or PhD dissertation chapters with extensive research, methodology, data analysis, and scholarly writing.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Qualitative Research Papers</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Interview, focus group, or ethnographic research with thematic analysis, coding, and interpretation.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Research Paper Pricing</h2>
                        <p class="text-center text-gray-600 mb-8">Transparent rates based on academic level and timeline</p>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">Academic Level</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">14+ Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">7 Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">3 Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">48 Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Undergraduate</td>
                                        <td class="p-4 border-b border-gray-200">$18/page</td>
                                        <td class="p-4 border-b border-gray-200">$22/page</td>
                                        <td class="p-4 border-b border-gray-200">$28/page</td>
                                        <td class="p-4 border-b border-gray-200">$35/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Graduate (Master's)</td>
                                        <td class="p-4 border-b border-gray-200">$28/page</td>
                                        <td class="p-4 border-b border-gray-200">$35/page</td>
                                        <td class="p-4 border-b border-gray-200">$42/page</td>
                                        <td class="p-4 border-b border-gray-200">$50/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 font-semibold">PhD/Doctoral</td>
                                        <td class="p-4">$40/page</td>
                                        <td class="p-4">$48/page</td>
                                        <td class="p-4">$58/page</td>
                                        <td class="p-4">$70/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid md:grid-cols-3 gap-4">
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <h4 class="font-bold text-green-900 mb-2">✓ What's Included</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Original research from credible sources</li>
                                    <li>• Free plagiarism report (Turnitin)</li>
                                    <li>• Free title page, abstract, references</li>
                                    <li>• Unlimited revisions (21 days)</li>
                                    <li>• Direct researcher communication</li>
                                    <li>• Proper APA/MLA/Chicago formatting</li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-900 mb-2">💰 Discounts Available</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 15% off first research paper</li>
                                    <li>• 10% off papers over 15 pages</li>
                                    <li>• 5% loyalty discount</li>
                                    <li>• 20% off thesis/dissertation chapters</li>
                                    <li>• Bulk order discounts</li>
                                </ul>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="font-bold text-purple-900 mb-2">📄 Page Details</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 1 page = 275 words (double-spaced)</li>
                                    <li>• Minimum order: 5 pages</li>
                                    <li>• References not counted in page count</li>
                                    <li>• Tables/figures included free</li>
                                    <li>• Appendices available on request</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- How Research Writing Works -->
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Our Research Process</h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Rigorous academic methodology from start to finish
                        </p>

                        <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-4">
                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">1</div>
                                <div class="text-3xl mb-2 mt-2">🎯</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Topic Review</h4>
                                <p class="text-xs text-gray-600">Analyze requirements and research question</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">2</div>
                                <div class="text-3xl mb-2 mt-2">📚</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Literature Search</h4>
                                <p class="text-xs text-gray-600">Find peer-reviewed sources from academic databases</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">3</div>
                                <div class="text-3xl mb-2 mt-2">🔍</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Research Design</h4>
                                <p class="text-xs text-gray-600">Develop methodology and analysis framework</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">4</div>
                                <div class="text-3xl mb-2 mt-2">✍️</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Writing</h4>
                                <p class="text-xs text-gray-600">Draft with proper structure and citations</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">5</div>
                                <div class="text-3xl mb-2 mt-2">🔬</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Quality Check</h4>
                                <p class="text-xs text-gray-600">Plagiarism scan, citation verification</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm">6</div>
                                <div class="text-3xl mb-2 mt-2">📨</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Delivery</h4>
                                <p class="text-xs text-gray-600">Receive paper + plagiarism report</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Academic Transparency:</strong> We follow strict research ethics. All sources are properly cited. No fabricated data or fake references. Your researcher will explain their methodology and can provide source PDFs upon request. You can track progress and communicate with your researcher at any stage.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Research Paper FAQs
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How do you ensure research papers are original and not plagiarized?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Every research paper is written completely from scratch by PhD-qualified researchers. We never use pre-written papers, AI-generated content, or copy from existing sources. All papers are scanned through Turnitin plagiarism detection software before delivery, and you receive a free plagiarism report showing 0% similarity. Every source is properly cited in your required format (APA, MLA, Chicago, Harvard). If any plagiarism is detected, we provide a full refund.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What qualifications do your research writers have?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">All our research paper writers hold at least a Master's degree, with the majority having PhDs from accredited universities. Many have published research in peer-reviewed journals and teach at universities. We verify all academic credentials before hiring and match your research paper with a writer who has specific expertise in your subject area and research methodology. For graduate-level and PhD papers, we only assign writers with doctoral degrees in the relevant field.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you help with data analysis for my research paper?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes, our researchers are proficient in both quantitative and qualitative data analysis. For quantitative research, we can perform statistical analysis using SPSS, R, Python, or Excel including t-tests, ANOVA, regression analysis, factor analysis, and more. For qualitative research, we conduct thematic analysis, content analysis, coding, and interpretation. We can work with your existing data or help design data collection methods. All analysis is properly documented with methodology and interpretation sections.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How long does it take to write a research paper?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Research paper timelines depend on length, complexity, and academic level. Typical timelines: 10-page undergraduate paper (7-10 days), 15-page graduate paper (10-14 days), 20-page PhD-level paper (14-21 days). We offer rush service with minimum 48-hour delivery for shorter papers, though we recommend longer timelines for thorough research and analysis. Longer papers like thesis chapters or dissertations typically require 3-6 weeks. We always meet agreed deadlines with 98% on-time delivery rate.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What sources do you use for research papers?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">We use only credible academic sources including peer-reviewed journal articles, academic books, conference proceedings, and authoritative reports. Our researchers have access to major academic databases including JSTOR, Google Scholar, PubMed, IEEE Xplore, ScienceDirect, ProQuest, and discipline-specific repositories. We never use Wikipedia, blogs, or unreliable websites as primary sources. All sources are current (typically within 5-10 years unless historical context is needed) and properly cited with full bibliographic information.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you offer revisions if I need changes?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes, we offer unlimited free revisions for 21 days after delivery. If anything doesn't match your original instructions or if your supervisor requests specific changes, we'll revise it at no additional cost. This includes adjusting arguments, adding more sources, reformatting, or clarifying methodology. Major changes outside the original scope (like changing the research question or adding new sections) may require additional payment, but we'll discuss this upfront. Your satisfaction is guaranteed.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meet Our PhD Researchers -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Meet Your PhD Researchers</h2>
                            <p class="text-lg text-gray-600">Published academics with doctoral degrees and research expertise</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <!-- Researcher 1 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        DS
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Sarah</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">PhD Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Psychology</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">18+ years research • 12 published papers • Specializes in qualitative & quantitative research, SPSS, literature reviews</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Stanford University</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Researcher 2 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        DM
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Martin</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">PhD Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Economics</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">14 years research • 9 journal publications • Expert in econometrics, data analysis, research methodology, statistical modeling</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>LSE London</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Researcher 3 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        PL
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Prof. Linda</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">PhD Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Sociology</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">20+ years academia • 15 publications • Specializes in mixed methods, ethnography, survey research, thematic analysis</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>University of Toronto</span>
                                    <span class="text-orange-600 font-semibold">1 Order in Queue</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 text-center">
                                <strong>All researchers hold doctoral degrees and have published in peer-reviewed journals.</strong> We verify academic credentials, check publication records, and review writing samples. Direct communication with your researcher available.
                            </p>
                        </div>
                    </div>

                    <!-- Research Paper Samples -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Sample Research Papers - See Our Quality</h2>
                            <p class="text-lg text-gray-600">Real examples from completed graduate & undergraduate research projects</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Sample 1 -->
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Quantitative Research</span>
                                    <span class="text-green-600 font-bold">Grade: A+</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Social Media Impact on Teen Mental Health</h4>
                                <p class="text-sm text-gray-600 mb-3">Psychology • Graduate • APA 7th • 25 pages • 60+ sources</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Survey of 500+ participants. SPSS analysis with correlation & regression. Comprehensive literature review. Well-structured methodology. Clear findings presentation with limitations discussed..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Completed in 10 days</div>
                                    <button class="text-blue-600 hover:text-blue-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>

                            <!-- Sample 2 -->
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-green-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Qualitative Research</span>
                                    <span class="text-green-600 font-bold">Grade: A</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Teacher Burnout in Urban Schools</h4>
                                <p class="text-sm text-gray-600 mb-3">Education • Master's • APA • 30 pages • Interviews with 15 teachers</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Phenomenological approach. Semi-structured interviews. Thematic analysis using NVivo. Rich quotes. Insightful findings. Proper reflexivity statement. Triangulation with observations..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Completed in 14 days</div>
                                    <button class="text-green-600 hover:text-green-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>

                            <!-- Sample 3 -->
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-purple-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Literature Review</span>
                                    <span class="text-green-600 font-bold">Grade: A-</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Renewable Energy Policy: Systematic Review</h4>
                                <p class="text-sm text-gray-600 mb-3">Environmental Science • Undergraduate • Harvard • 18 pages • 80+ articles</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Systematic review of 2010-2023 literature. PRISMA methodology. Thematic organization. Critical synthesis. Gap identification. Clear recommendations for future research..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Completed in 7 days</div>
                                    <button class="text-purple-600 hover:text-purple-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>

                            <!-- Sample 4 -->
                            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border border-orange-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-orange-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Mixed Methods</span>
                                    <span class="text-green-600 font-bold">Grade: A</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Consumer Behavior in E-Commerce</h4>
                                <p class="text-sm text-gray-600 mb-3">Business • PhD • APA • 40 pages • Survey + Interviews</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Sequential explanatory design. Quantitative phase (n=300) followed by qualitative interviews (n=20). Integration of findings. Theoretical framework applied. Scholarly contribution..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Completed in 18 days</div>
                                    <button class="text-orange-600 hover:text-orange-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center bg-gray-50 rounded-lg p-6">
                            <p class="text-gray-700 mb-4">
                                <strong>All samples are anonymized real student papers.</strong> Each received A or A+ grades from professors.
                            </p>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                View Full Research Sample Library (30+ Papers)
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Student Reviews with Countries -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Students Worldwide Trust Our Research Writing</h2>
                            <p class="text-lg text-gray-600">Graduate students from top universities in 50+ countries</p>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-2xl">🇺🇸</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "My 20-page psychology research paper on cognitive behavioral therapy required extensive literature review and statistical analysis. The researcher had a PhD in Clinical Psychology and delivered an exceptional paper with 45 peer-reviewed sources. My professor called it 'publication-quality work.' Got an A!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            RW
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Rachel W.</p>
                                            <p class="text-sm text-gray-600">Columbia University, USA</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">Grade: A</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-2xl">🇬🇧</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "Needed help with data analysis for my economics research paper. The writer used SPSS for regression analysis and explained every statistical test clearly. All calculations were accurate, properly formatted in APA, and the methodology section was flawless. Turnitin showed 0% plagiarism."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            TM
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Thomas M.</p>
                                            <p class="text-sm text-gray-600">LSE, London</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">0% Plagiarism</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-2xl">🇨🇦</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "My literature review for my Master's thesis in education was overwhelming - needed to review 80+ studies. The researcher organized everything thematically, identified gaps in the literature, and created a perfect foundation for my thesis. Communication was excellent throughout."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            JK
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Jennifer K.</p>
                                            <p class="text-sm text-gray-600">UofT, Canada</p>
                                        </div>
                                    </div>
                                    <div class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-semibold">80+ Sources</div>
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
                                    "As an international student, academic English was challenging. My nursing research paper on patient outcomes required medical terminology and proper scientific formatting. The researcher had a PhD in Nursing and delivered exactly what I needed. Passed with distinction!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        AL
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Anna L.</p>
                                        <p class="text-sm text-gray-600">Nursing, Undergraduate</p>
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
                                    "My environmental science research paper needed field data analysis and comparison with existing studies. The quality of research was incredible - used sources from Nature, Science, and Environmental Research journals. My professor asked if I planned to publish it!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        DH
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">David H.</p>
                                        <p class="text-sm text-gray-600">Environmental Science, Junior</p>
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
                                    "Working full-time while doing my PhD was impossible. This service helped with my dissertation methodology chapter. The researcher understood mixed-methods research perfectly and delivered rigorous work that passed my committee's review on first submission. Forever grateful!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        SP
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Sarah P.</p>
                                        <p class="text-sm text-gray-600">Sociology, PhD Candidate</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                <div class="text-4xl font-black text-gray-900 mr-4">4.9/5.0</div>
                                <div class="text-left">
                                    <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                    <p class="text-sm text-gray-600">Based on 500+ research paper reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <span class="text-3xl mr-3">🎯</span>
                            Ready for Expert Research Help?
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center max-w-3xl mx-auto">
                            Join hundreds of students who've achieved academic success with our professional research paper writing service. PhD-qualified researchers, original work, guaranteed quality, and transparent pricing. Get started with 15% off your first research paper.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('assignments.create', ['assignment_service' => $service->id ?? 2]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Order Your Research Paper - Get 15% Off
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
