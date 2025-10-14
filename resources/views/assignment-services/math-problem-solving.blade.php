@extends('assignment-services.show')

@section('custom-content')
    <!-- Comprehensive Math Problem Solving Content Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-black text-gray-900 mb-6">Expert Math Problem Solving Services</h2>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Mathematics can be one of the most challenging subjects for students at any level, from basic arithmetic to advanced calculus and beyond. Whether you're struggling with algebra, geometry, trigonometry, statistics, differential equations, or linear algebra, our professional math problem solving service provides expert assistance that helps you understand complex mathematical concepts and solve problems with confidence. We recognize that mathematics requires not just memorization but deep conceptual understanding, logical reasoning, and the ability to apply various problem-solving strategies to different types of mathematical challenges.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team of mathematics experts includes certified tutors, university professors, and professional mathematicians with advanced degrees in mathematics, applied mathematics, statistics, and related fields. They possess comprehensive knowledge across all areas of mathematics and are skilled at breaking down complex problems into manageable steps. Whether you need help with homework assignments, exam preparation, understanding mathematical proofs, or working through applied mathematics problems in fields like physics, engineering, economics, or computer science, we provide detailed, step-by-step solutions with clear explanations that enhance your mathematical comprehension and problem-solving abilities.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🧮</span>
                                Comprehensive Math Coverage
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                We provide expert assistance across all mathematical disciplines and educational levels. From elementary mathematics including fractions, decimals, and percentages to high school topics like quadratic equations, polynomials, and coordinate geometry, we cover it all. Our expertise extends to college-level mathematics including calculus (differential and integral), multivariable calculus, vector calculus, linear algebra, differential equations, discrete mathematics, probability theory, and mathematical statistics.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We also specialize in advanced topics such as real analysis, complex analysis, abstract algebra, topology, numerical analysis, and mathematical modeling. For students in applied fields, we handle mathematical applications in physics, engineering mathematics, financial mathematics, econometrics, and computational mathematics including algorithm analysis and optimization problems.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">💡</span>
                                Step-by-Step Solutions
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Understanding mathematics requires more than just getting the right answer – it's about understanding the process and reasoning behind each step. Our math experts provide comprehensive, step-by-step solutions that show you exactly how to approach each problem. Every solution includes detailed explanations of the mathematical concepts involved, identification of the appropriate formulas or theorems, systematic working showing all intermediate steps, and verification of the final answer.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We use clear mathematical notation, include helpful diagrams and graphs where applicable, and provide alternative solution methods when available. This approach not only helps you complete your current assignment but also builds your mathematical intuition and problem-solving skills for future challenges, preparing you for exams and advanced coursework.
                            </p>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                            <span class="text-3xl mr-3">🎯</span>
                            Accurate and Timely Math Help
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Accuracy is paramount in mathematics, and we take pride in delivering solutions that are not only correct but also elegantly presented and thoroughly explained. Every problem undergoes careful verification through multiple checking methods to ensure accuracy. We understand that math assignments often come with tight deadlines, which is why we offer flexible turnaround times from urgent same-day assistance to more extended timelines for complex projects. Our affordable pricing structure makes professional math help accessible to students at all levels, with rates tailored to problem complexity and academic level. With unlimited clarifications, detailed explanations for every step, and round-the-clock customer support, we're committed to helping you master mathematics and achieve academic success. Get started today and experience the difference that expert mathematical guidance can make in your understanding and performance.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('assignments.create', ['assignment_service' => $service->id ?? 4]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">🧮</span>
                                Get Math Help Now
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
