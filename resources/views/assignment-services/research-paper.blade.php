@extends('assignment-services.show')

@section('custom-content')
    <!-- Comprehensive Research Paper Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-black text-gray-900 mb-6">Professional Research Paper Writing Services</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
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

                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="text-3xl mr-3">🎯</span>
                            Quality Assurance and Originality
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Quality and originality are non-negotiable in academic research. Every research paper undergoes rigorous quality control including multiple rounds of expert editing, plagiarism screening using advanced detection software, and verification of all citations and references. We provide detailed reports showing zero plagiarism and complete originality. Our commitment extends beyond delivery – we offer unlimited revisions to ensure your research paper meets your exact specifications and your institution's requirements. With transparent pricing, timely delivery, and dedicated customer support available around the clock, we make professional research assistance accessible and stress-free. Start your research journey with confidence by partnering with experts who understand what it takes to produce outstanding academic research.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('assignments.create', ['assignment_service' => $service->id ?? 2]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Order Your Research Paper
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
