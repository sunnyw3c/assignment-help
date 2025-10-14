@extends('assignment-services.show')

@section('custom-content')
    <!-- Comprehensive Homework Help Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-black text-gray-900 mb-6">Professional Homework Help That Delivers Results</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Struggling with homework assignments that seem impossible to complete? Whether you're facing tight deadlines, complex subjects, or simply need expert guidance to understand challenging concepts, our professional homework help service is designed to support students at every academic level. We understand that modern education demands more than just completing assignments – it requires deep comprehension, critical thinking, and the ability to apply knowledge effectively.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team of qualified academic experts specializes in providing comprehensive homework assistance across all subjects including mathematics, sciences, languages, business studies, social sciences, and computer science. Each assignment is handled by a subject matter expert who holds advanced degrees in their field and has extensive experience in academic writing and tutoring. We don't just provide answers – we deliver detailed, step-by-step solutions with clear explanations that help you understand the underlying concepts and methodologies.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🎯</span>
                                Why Students Choose Our Service
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Time management is one of the biggest challenges students face today. Between classes, extracurricular activities, part-time jobs, and personal commitments, finding adequate time to complete all homework assignments to a high standard can be overwhelming. Our homework help service acts as your academic safety net, ensuring that you never miss a deadline while maintaining the quality of work that reflects your true potential.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We pride ourselves on delivering plagiarism-free, original work that adheres to your specific requirements and academic guidelines. Every solution is crafted from scratch, properly cited, and thoroughly checked for quality and accuracy before delivery.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">💡</span>
                                Our Unique Approach
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                What sets us apart is our educational philosophy. We believe homework help should be more than just completing tasks – it should be a learning opportunity. That's why our experts provide comprehensive explanations, annotated solutions, and additional resources that empower you to tackle similar problems independently in the future. This approach not only helps you complete current assignments but also builds your confidence and competence for future academic challenges.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Our flexible pricing structure ensures that quality academic support is accessible to students with varying budgets, starting at just $12 per page with quick turnaround times ranging from 3 to 48 hours depending on your urgency.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="text-3xl mr-3">🚀</span>
                            Get Started Today
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Getting professional homework help is simple and straightforward. Submit your assignment details through our secure platform, specify your deadline and academic level, and get matched with a qualified expert who understands your subject matter. You'll receive regular updates on your assignment progress and can communicate directly with your expert to ensure all requirements are met. With our 24/7 customer support and satisfaction guarantee, you can trust that your academic success is our top priority.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('assignments.create', ['assignment_service' => $service->id ?? 3]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Get Homework Help Now
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
