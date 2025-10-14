@extends('assignment-services.show')

@section('custom-content')
    <!-- Comprehensive Essay Writing Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-black text-gray-900 mb-6">Expert Essay Writing Services for Academic Excellence</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Essay writing is a fundamental skill that defines academic success across all educational levels. Whether you're crafting a persuasive argumentative essay, analyzing literature, or presenting a compelling narrative, our professional essay writing service provides the expertise and support you need to excel. We understand that effective essay writing requires more than just good grammar – it demands critical thinking, structured argumentation, thorough research, and the ability to communicate complex ideas with clarity and precision.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team of experienced academic writers holds advanced degrees from prestigious universities and specializes in various disciplines including humanities, social sciences, business, and STEM fields. Each essay is meticulously crafted to meet your specific requirements, whether it's adhering to MLA, APA, Chicago, or Harvard citation styles. We pride ourselves on delivering original, well-researched essays that demonstrate deep understanding of the subject matter while maintaining your unique voice and perspective throughout the writing.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">✍️</span>
                                Our Essay Writing Process
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Every essay we produce follows a rigorous writing process that ensures quality and authenticity. Our writers begin with comprehensive research, gathering relevant sources and evidence to support the thesis statement. They then create a detailed outline that ensures logical flow and coherent structure before drafting the essay with careful attention to introduction hooks, body paragraph development, and compelling conclusions.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Each completed essay undergoes multiple rounds of editing and proofreading, checking for grammatical accuracy, stylistic consistency, proper citation formatting, and plagiarism-free content. We use advanced plagiarism detection software to guarantee 100% original work that passes the most stringent academic integrity standards.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🎓</span>
                                Essay Types We Cover
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Our essay writing service covers every essay type you might encounter in your academic journey. From analytical essays that break down complex topics to compare and contrast essays examining similarities and differences, we handle it all. We excel at argumentative and persuasive essays that present compelling cases backed by solid evidence, descriptive essays that paint vivid pictures, and narrative essays that tell engaging stories.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We also specialize in college application essays, scholarship essays, reflective essays, and critical analysis essays. Whether you're a high school student, undergraduate, or graduate student pursuing a master's or doctoral degree, our writers adapt their approach to match your academic level and assignment requirements.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="text-3xl mr-3">🚀</span>
                            Why Choose Our Essay Writing Service
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Quality, reliability, and customer satisfaction are the cornerstones of our essay writing service. We offer flexible deadlines ranging from rush orders completed within hours to standard timelines that allow for thorough research and revision. Our pricing is transparent and affordable, starting at competitive rates per page with options tailored to different academic levels and urgency requirements. With unlimited revisions, 24/7 customer support, and a satisfaction guarantee, we ensure that your essay not only meets but exceeds your expectations. Get started today and experience the difference that professional essay writing expertise can make in your academic success.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('assignments.create', ['assignment_service' => $service->id ?? 1]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Order Your Essay Now
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
