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

                    <!-- Meet Our Math Experts -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Meet Your Math Problem Solvers</h2>
                            <p class="text-lg text-gray-600">Advanced degree mathematicians with teaching and tutoring expertise</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <!-- Expert 1 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        PM
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Prof. Michael</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">PhD Math</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Mathematics</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">20+ years teaching • 2,500+ problems solved • Calculus, differential equations, linear algebra, proofs specialist</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>MIT</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Expert 2 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        SL
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Sarah</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">MS Stats</span>
                                        </div>
                                        <p class="text-sm text-gray-600">MS in Statistics</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">15 years experience • 1,800+ solutions • Statistics, probability, data analysis, SPSS, R programming expert</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Stanford University</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Expert 3 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        AK
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Alex K.</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">MS Applied</span>
                                        </div>
                                        <p class="text-sm text-gray-600">MS Applied Mathematics</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">12 years tutoring • 1,500+ students helped • Algebra, trigonometry, geometry, pre-calculus, ACT/SAT math prep</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>UC Berkeley</span>
                                    <span class="text-orange-600 font-semibold">3 Orders in Queue</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 text-center">
                                <strong>All math experts are verified professionals.</strong> We test mathematical knowledge, verify degrees, and check problem-solving methodology before hiring.
                            </p>
                        </div>
                    </div>

                    <!-- Math Success Stories -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Student Math Success Stories</h2>
                            <p class="text-lg text-gray-600">How our step-by-step solutions helped students master mathematics</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6">
                            <!-- Success Story 1 -->
                            <div class="bg-gradient-to-br from-red-50 to-green-50 rounded-xl p-6 border border-gray-200">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-red-100 text-red-700 text-xs px-3 py-1 rounded-full font-semibold">Before</span>
                                    <span class="text-2xl">→</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">After</span>
                                </div>
                                <div class="flex items-center justify-around mb-4">
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-red-600">D</div>
                                        <p class="text-xs text-gray-600">Failing</p>
                                    </div>
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-green-600">A-</div>
                                        <p class="text-xs text-gray-600">Mastered it!</p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 font-semibold mb-2">Calculus I - Marcus T.</p>
                                <p class="text-xs text-gray-600">"Step-by-step derivative explanations finally made sense. Now I help my study group!"</p>
                            </div>

                            <!-- Success Story 2 -->
                            <div class="bg-gradient-to-br from-orange-50 to-green-50 rounded-xl p-6 border border-gray-200">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-orange-100 text-orange-700 text-xs px-3 py-1 rounded-full font-semibold">Before</span>
                                    <span class="text-2xl">→</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">After</span>
                                </div>
                                <div class="flex items-center justify-around mb-4">
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-orange-600">C</div>
                                        <p class="text-xs text-gray-600">Struggling</p>
                                    </div>
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-green-600">A+</div>
                                        <p class="text-xs text-gray-600">Top student</p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 font-semibold mb-2">Statistics - Jennifer K.</p>
                                <p class="text-xs text-gray-600">"Hypothesis testing made simple. Aced my final exam with 95%!"</p>
                            </div>

                            <!-- Success Story 3 -->
                            <div class="bg-gradient-to-br from-yellow-50 to-green-50 rounded-xl p-6 border border-gray-200">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-yellow-100 text-yellow-700 text-xs px-3 py-1 rounded-full font-semibold">Before</span>
                                    <span class="text-2xl">→</span>
                                    <span class="bg-green-100 text-green-700 text-xs px-3 py-1 rounded-full font-semibold">After</span>
                                </div>
                                <div class="flex items-center justify-around mb-4">
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-yellow-600">B-</div>
                                        <p class="text-xs text-gray-600">Average</p>
                                    </div>
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-green-600">A</div>
                                        <p class="text-xs text-gray-600">Excellent</p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 font-semibold mb-2">Linear Algebra - David L.</p>
                                <p class="text-xs text-gray-600">"Matrix operations crystal clear. Understanding eigenvectors changed everything!"</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-gradient-to-r from-blue-50 to-green-50 rounded-lg p-6 text-center">
                            <p class="text-gray-900 font-bold text-lg mb-2">Average Grade Improvement: C to A-</p>
                            <p class="text-gray-600 text-sm">Based on 800+ student feedback surveys in math courses</p>
                        </div>
                    </div>

                    <!-- Student Testimonials with Countries -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Students Worldwide Trust Our Math Help</h2>
                            <p class="text-lg text-gray-600">From algebra to advanced calculus - helping students globally</p>
                        </div>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                                    <span class="text-2xl">🇺🇸</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic">
                                    "Calculus integration problems were destroying my GPA. The expert showed every step clearly with u-substitution and integration by parts. Finally understand it! Got 92% on my exam."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">MT</div>
                                        <div>
                                            <p class="font-bold text-gray-900">Marcus T.</p>
                                            <p class="text-sm text-gray-600">Penn State, USA</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">92%</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                                    <span class="text-2xl">🇨🇦</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic">
                                    "Linear algebra matrix transformations made no sense. The tutor used visual diagrams and step-by-step explanations. Now eigenvalues and eigenvectors are easy!"
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">JK</div>
                                        <div>
                                            <p class="font-bold text-gray-900">Jennifer K.</p>
                                            <p class="text-sm text-gray-600">UBC, Canada</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">A Grade</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                                    <span class="text-2xl">🇬🇧</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic">
                                    "Statistics homework on hypothesis testing was impossible. Expert explained p-values, confidence intervals perfectly. All answers correct. Professor impressed!"
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">DL</div>
                                        <div>
                                            <p class="font-bold text-gray-900">David L.</p>
                                            <p class="text-sm text-gray-600">Edinburgh, UK</p>
                                        </div>
                                    </div>
                                    <div class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-semibold">100% Correct</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                                    <span class="text-2xl">🇦🇺</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic">
                                    "Differential equations assignment due in 12 hours. Got complete solutions with Laplace transforms explained perfectly. Submitted on time, got A-!"
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">SK</div>
                                        <div>
                                            <p class="font-bold text-gray-900">Sarah K.</p>
                                            <p class="text-sm text-gray-600">Sydney, Australia</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">A-</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                                    <span class="text-2xl">🇮🇳</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic">
                                    "Struggling with trigonometric identities and proofs. The detailed solutions showed me proof techniques I can use for other problems. Game changer!"
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">RP</div>
                                        <div>
                                            <p class="font-bold text-gray-900">Raj P.</p>
                                            <p class="text-sm text-gray-600">Mumbai, India</p>
                                        </div>
                                    </div>
                                    <div class="bg-purple-100 text-purple-700 text-xs px-2 py-1 rounded-full font-semibold">Proofs Mastered</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl">⭐⭐⭐⭐⭐</div>
                                    <span class="text-2xl">🇸🇬</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic">
                                    "Complex numbers and polar form confused me for weeks. Visual diagrams plus step-by-step conversions made it click. Aced my midterm!"
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">LT</div>
                                        <div>
                                            <p class="font-bold text-gray-900">Lisa T.</p>
                                            <p class="text-sm text-gray-600">NUS, Singapore</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">Midterm: A</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                    <div class="text-4xl font-black text-gray-900 mr-4">4.9/5.0</div>
                                    <div class="text-left">
                                        <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                        <p class="text-sm text-gray-600">Based on 5,000+ verified math students</p>
                                    </div>
                                </div>
                            </div>
                            <p class="text-center text-gray-700">
                                <strong>Helping math students in 50+ countries, 24/7.</strong> From basic algebra to advanced calculus and beyond.
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
