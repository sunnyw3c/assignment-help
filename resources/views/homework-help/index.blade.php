@extends('assignment-services.show')

@section('title', 'Homework Help Service USA | Expert Tutors | All Subjects | 24/7 Support')
@section('meta_description', 'Professional homework help with qualified tutors across all subjects in USA. Math, science, English, history & more. Step-by-step solutions, plagiarism-free work. Fast delivery from 3 hours. Affordable prices starting at $8/page for US students.')
@section('meta_keywords', 'homework help, homework help online USA, do my homework, homework assistance, homework tutoring, math homework help, science homework help, online homework help, college homework help, homework solver, assignment help, cheap homework help, homework answers')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Homework Help Service | Expert Tutors | All Subjects">
    <meta property="og:description" content="Get expert homework help from qualified tutors. All subjects covered with step-by-step solutions. Fast, affordable, plagiarism-free. 24/7 support.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Homework Help Service | Expert Tutors">
    <meta property="twitter:description" content="Expert homework help across all subjects. Step-by-step solutions with clear explanations. Fast delivery, affordable prices.">


@endpush

@section('custom-content')
    <!-- Comprehensive Homework Help Content Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" itemscope itemtype="https://schema.org/Service">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl">
                <div class="mb-10 text-center sm:mb-12">
                    <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Trusted by 5,000+ Students</p>
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white" itemprop="name">Professional Homework Help Service</h1>
                    <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400" itemprop="description">
                        Get expert homework help from qualified tutors across all subjects. Step-by-step solutions with clear explanations. Fast delivery, affordable prices, 100% plagiarism-free.
                    </p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        Struggling with homework assignments that seem impossible to complete? Whether you're facing tight deadlines, complex subjects, or simply need expert guidance to understand challenging concepts, our professional homework help service is designed to support students at every academic level. We understand that modern education demands more than just completing assignments — it requires deep comprehension, critical thinking, and the ability to apply knowledge effectively.
                    </p>

                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        Our team of qualified academic experts specializes in providing comprehensive homework assistance across all subjects including mathematics, sciences, languages, business studies, social sciences, and computer science. Each assignment is handled by a subject matter expert who holds advanced degrees in their field and has extensive experience in academic writing and tutoring. We don't just provide answers — we deliver detailed, step-by-step solutions with clear explanations that help you understand the underlying concepts and methodologies.
                    </p>
                </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-8 text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Why Students Trust Our Homework Help</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Reliable, affordable, and effective homework assistance</p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="text-2xl">🎓</div>
                                    <h3 class="text-base font-bold text-slate-900 dark:text-white">Qualified Subject Experts</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Your homework is completed by tutors with Bachelor's, Master's, or PhD degrees in specific subjects. We verify all qualifications and test subject knowledge before hiring. Math tutors solve calculus problems, chemistry experts balance equations, English tutors analyze literature — real expertise in every subject.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="text-2xl">📝</div>
                                    <h3 class="text-base font-bold text-slate-900 dark:text-white">Step-by-Step Solutions</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    We don't just give you answers — we show you how to solve problems. Every homework solution includes detailed explanations, formulas used, reasoning steps, and examples. Perfect for learning and understanding concepts, not just submitting assignments.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="text-2xl">⚡</div>
                                    <h3 class="text-base font-bold text-slate-900 dark:text-white">Fast Turnaround</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Urgent homework due tonight? We offer delivery from 3 hours to 24 hours for most assignments. Standard homework is completed within 2-3 days. We've completed over 5,000 urgent homework assignments with on-time delivery guaranteed.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="text-2xl">💰</div>
                                    <h3 class="text-base font-bold text-slate-900 dark:text-white">Student-Friendly Pricing</h3>
                                </div>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Starting at just $8/page for high school homework and $12/page for college level. No hidden fees. Pay only for the work completed. Money-back guarantee if homework doesn't meet requirements or is late.
                                </p>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                            <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Our Performance Stats</h3>
                            <div class="grid grid-cols-2 gap-4 text-center sm:grid-cols-4">
                                <div>
                                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">5,000+</p>
                                    <p class="text-xs text-slate-600 dark:text-slate-400">Homework Assignments Completed</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">98%</p>
                                    <p class="text-xs text-slate-600 dark:text-slate-400">Satisfaction Rate</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">50+</p>
                                    <p class="text-xs text-slate-600 dark:text-slate-400">Subjects Covered</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">4.8/5</p>
                                    <p class="text-xs text-slate-600 dark:text-slate-400">Average Student Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subjects We Cover -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Subjects We Cover
                        </h2>
                        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">📐 Mathematics</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Algebra (linear, quadratic equations)</li>
                                    <li>• Calculus (derivatives, integrals)</li>
                                    <li>• Geometry &amp; Trigonometry</li>
                                    <li>• Statistics &amp; Probability</li>
                                    <li>• Discrete Math &amp; Linear Algebra</li>
                                    <li>• Differential Equations</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">🔬 Sciences</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Physics (mechanics, electricity)</li>
                                    <li>• Chemistry (organic, inorganic)</li>
                                    <li>• Biology (cell biology, genetics)</li>
                                    <li>• Earth Science &amp; Environmental</li>
                                    <li>• Astronomy</li>
                                    <li>• Lab Reports &amp; Experiments</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">📚 English &amp; Literature</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Essay Writing &amp; Analysis</li>
                                    <li>• Literature Analysis</li>
                                    <li>• Grammar &amp; Composition</li>
                                    <li>• Poetry Analysis</li>
                                    <li>• Book Reports &amp; Reviews</li>
                                    <li>• Creative Writing</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">🏛️ History &amp; Social Sciences</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• World History &amp; US History</li>
                                    <li>• Psychology</li>
                                    <li>• Sociology &amp; Anthropology</li>
                                    <li>• Political Science</li>
                                    <li>• Geography</li>
                                    <li>• Economics</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">💼 Business &amp; Accounting</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Accounting (financial, managerial)</li>
                                    <li>• Business Management</li>
                                    <li>• Marketing &amp; Finance</li>
                                    <li>• Economics (micro, macro)</li>
                                    <li>• Statistics for Business</li>
                                    <li>• Case Study Analysis</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">💻 Computer Science</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Programming (Python, Java, C++)</li>
                                    <li>• Data Structures &amp; Algorithms</li>
                                    <li>• Web Development (HTML, CSS, JS)</li>
                                    <li>• Database Management (SQL)</li>
                                    <li>• Computer Networks</li>
                                    <li>• Operating Systems</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">🌍 Foreign Languages</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Spanish</li>
                                    <li>• French</li>
                                    <li>• German</li>
                                    <li>• Italian</li>
                                    <li>• Mandarin Chinese</li>
                                    <li>• Latin</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">🎨 Arts &amp; Humanities</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Philosophy</li>
                                    <li>• Art History</li>
                                    <li>• Music Theory</li>
                                    <li>• Religious Studies</li>
                                    <li>• Film Studies</li>
                                    <li>• Theater &amp; Drama</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-3 text-base font-bold text-blue-600 dark:text-blue-400">⚕️ Health &amp; Nursing</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Nursing (medical-surgical)</li>
                                    <li>• Anatomy &amp; Physiology</li>
                                    <li>• Pharmacology</li>
                                    <li>• Nutrition</li>
                                    <li>• Public Health</li>
                                    <li>• Health Sciences</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border border-slate-200 bg-white p-5 text-center dark:border-slate-800 dark:bg-slate-900">
                            <p class="text-sm text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">Don't see your subject?</strong> We cover 50+ subjects. Contact us with your homework details and we'll find the right expert for you.
                            </p>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Homework Help Pricing</h2>
                        <p class="mt-2 mb-6 text-center text-sm text-slate-600 dark:text-slate-400">Affordable rates for students — pay only for what you need</p>

                        <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-800">
                            <table class="w-full border-collapse text-left text-sm">
                                <thead>
                                    <tr class="bg-slate-50 dark:bg-slate-900">
                                        <th class="p-3 font-bold text-slate-900 dark:text-white">Academic Level</th>
                                        <th class="p-3 font-bold text-slate-900 dark:text-white">7+ Days</th>
                                        <th class="p-3 font-bold text-slate-900 dark:text-white">3 Days</th>
                                        <th class="p-3 font-bold text-slate-900 dark:text-white">24 Hours</th>
                                        <th class="p-3 font-bold text-slate-900 dark:text-white">12 Hours</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-900">
                                        <td class="p-3 font-semibold text-slate-900 dark:text-white">High School</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$8/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$10/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$15/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$20/page</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-900">
                                        <td class="p-3 font-semibold text-slate-900 dark:text-white">College/Undergraduate</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$12/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$15/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$20/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$25/page</td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-900">
                                        <td class="p-3 font-semibold text-slate-900 dark:text-white">Graduate</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$18/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$22/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$28/page</td>
                                        <td class="p-3 text-slate-600 dark:text-slate-400">$35/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid gap-4 sm:grid-cols-3">
                            <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-4 dark:border-emerald-900 dark:bg-emerald-950/30">
                                <h4 class="mb-2 text-sm font-bold text-emerald-900 dark:text-emerald-300">✓ What's Included</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Step-by-step solutions</li>
                                    <li>• Clear explanations &amp; workings</li>
                                    <li>• Plagiarism-free answers</li>
                                    <li>• Free revisions (7 days)</li>
                                    <li>• Direct tutor messaging</li>
                                    <li>• Quality checked before delivery</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-blue-200 bg-blue-50 p-4 dark:border-blue-900 dark:bg-blue-950/30">
                                <h4 class="mb-2 text-sm font-bold text-blue-900 dark:text-blue-300">💰 Special Offers</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• 20% off first homework order</li>
                                    <li>• 15% off for orders over 10 pages</li>
                                    <li>• 10% loyalty discount</li>
                                    <li>• Bulk homework packages available</li>
                                    <li>• Weekly homework subscriptions</li>
                                    <li>• Refer a friend — get $10 credit</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-purple-200 bg-purple-50 p-4 dark:border-purple-900 dark:bg-purple-950/30">
                                <h4 class="mb-2 text-sm font-bold text-purple-900 dark:text-purple-300">📄 Pricing Notes</h4>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Math problems: $3-5 per problem</li>
                                    <li>• Short answer questions: $2-4 each</li>
                                    <li>• Multiple choice (with explanations): $1-2</li>
                                    <li>• Coding assignments: custom quote</li>
                                    <li>• Lab reports: starting at $25</li>
                                    <li>• No hidden fees or extra charges</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- How It Works -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">How Our Homework Help Works</h2>
                        <p class="mx-auto mt-2 mb-8 max-w-2xl text-center text-sm text-slate-600 dark:text-slate-400">
                            Get your homework done in 4 simple steps
                        </p>

                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                            <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">1</div>
                                <div class="mb-2 mt-2 text-2xl">📤</div>
                                <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Submit Homework</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Upload your homework questions, problems, or assignment instructions, plus any files or requirements.</p>
                            </div>

                            <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">2</div>
                                <div class="mb-2 mt-2 text-2xl">🎯</div>
                                <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Get Matched</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">We assign a qualified tutor who specializes in your subject. See their credentials and ratings before they start.</p>
                            </div>

                            <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">3</div>
                                <div class="mb-2 mt-2 text-2xl">✍️</div>
                                <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Expert Solves</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Your tutor solves the homework with detailed explanations, and you can message them with questions.</p>
                            </div>

                            <div class="relative rounded-xl border border-slate-200 bg-white p-5 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="absolute -top-3 left-1/2 flex h-7 w-7 -translate-x-1/2 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">4</div>
                                <div class="mb-2 mt-2 text-2xl">✅</div>
                                <h4 class="mb-1.5 text-sm font-bold text-slate-900 dark:text-white">Review &amp; Learn</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Receive detailed solutions with explanations. Review the work, ask follow-up questions, request revisions if needed.</p>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border-l-4 border-blue-600 bg-white p-6 dark:bg-slate-900">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">Learning Guarantee:</strong> Our goal isn't just to complete your homework — it's to help you understand it. Every solution includes explanations so you can learn the concepts and solve similar problems yourself. If you don't understand something, ask your tutor for clarification at no extra cost.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="mb-8 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Homework Help FAQs
                        </h2>

                        <div class="space-y-4">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Is using homework help cheating?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Our homework help service is designed as a learning tool, similar to working with a tutor. We provide step-by-step solutions with detailed explanations so you can understand how to solve problems, not just copy answers. Many students use our service to study for exams, understand difficult concepts, or check their own work. However, you should use our solutions responsibly according to your school's academic integrity policies. We recommend using our help as a study guide and learning resource.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">How fast can you complete my homework?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">We offer homework help from as fast as 3 hours for urgent assignments. Typical turnaround times: math problems (3-6 hours), short essays (6-12 hours), longer assignments (1-2 days). For homework due tonight or tomorrow, choose our rush service. However, we recommend ordering at least 24 hours in advance for best quality and lower prices. Complex assignments like coding projects or lab reports may need 2-3 days.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">What if the homework solution is wrong?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">We stand behind our work with a quality guarantee. If any answer is incorrect or doesn't match your homework requirements, we'll fix it for free within 7 days of delivery. Simply point out the issue and your tutor will revise it. For major errors, we offer partial refunds. We also have a quality control team that reviews solutions before delivery to catch mistakes. Our tutors maintain a 95%+ accuracy rate across all subjects.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Can you help with online homework platforms like MyMathLab or WebAssign?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Yes, we can help with homework from online platforms including MyMathLab, WebAssign, ALEKS, Connect, Pearson, McGraw Hill, Cengage, and others. You can take screenshots of the problems or share the questions with us. We'll provide solutions that you can then enter into the platform yourself. For security reasons, we don't log into your accounts directly — you maintain control of your login credentials and submit the answers yourself.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">How much does homework help cost?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Pricing varies by academic level and deadline. High school homework starts at $8/page, college at $12/page, and graduate at $18/page for standard deadlines. Individual problems cost $3-5 for math/science questions. Rush delivery (under 24 hours) costs 50-100% more. We offer a 20% discount on your first order and bulk discounts for regular homework help. There are no hidden fees — the price you see is what you pay. You can get a free quote by submitting your homework details.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Do you guarantee good grades on homework?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">While we can't guarantee specific grades (since grading is subjective and depends on your teacher), we guarantee accurate, high-quality solutions that meet standard academic requirements. Our tutors follow instructions carefully, show all work, and provide complete answers. Most students report receiving A or B grades when using our solutions as reference. If your teacher marks something as incorrect and it's our tutor's error, we'll issue a partial refund. We maintain 95%+ accuracy across all subjects based on student feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meet Our Expert Tutors -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-8 text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Meet Your Homework Help Tutors</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Subject experts with verified qualifications and proven track records</p>
                        </div>

                        <div class="mb-6 grid gap-5 sm:grid-cols-3">
                            <!-- Tutor 1 -->
                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-sm font-bold text-white">
                                        JC
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <h4 class="text-sm font-bold text-slate-900 dark:text-white">Prof. James</h4>
                                            <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">Verified</span>
                                        </div>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">PhD in Mathematics</p>
                                        <div class="mt-1 text-xs text-amber-400">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="mb-3 text-xs text-slate-600 dark:text-slate-400">15+ years teaching • 1,200+ homework solved • Calculus, algebra, statistics, trigonometry expert</p>
                                <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                                    <span>MIT</span>
                                    <span class="font-semibold text-emerald-600 dark:text-emerald-400">Available Now</span>
                                </div>
                            </div>

                            <!-- Tutor 2 -->
                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-sm font-bold text-white">
                                        SK
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <h4 class="text-sm font-bold text-slate-900 dark:text-white">Dr. Sarah</h4>
                                            <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">Verified</span>
                                        </div>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">PhD in Chemistry</p>
                                        <div class="mt-1 text-xs text-amber-400">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="mb-3 text-xs text-slate-600 dark:text-slate-400">10 years experience • 890+ assignments • Chemistry, biology, physics homework specialist</p>
                                <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                                    <span>Cambridge University</span>
                                    <span class="font-semibold text-emerald-600 dark:text-emerald-400">Available Now</span>
                                </div>
                            </div>

                            <!-- Tutor 3 -->
                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex items-start gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-sm font-bold text-white">
                                        AL
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center gap-2">
                                            <h4 class="text-sm font-bold text-slate-900 dark:text-white">Alex L.</h4>
                                            <span class="rounded-full bg-emerald-50 px-2 py-0.5 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">Verified</span>
                                        </div>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">MS in Computer Science</p>
                                        <div class="mt-1 text-xs text-amber-400">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="mb-3 text-xs text-slate-600 dark:text-slate-400">7 years experience • 750+ projects • Python, Java, C++, web development homework</p>
                                <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                                    <span>Berkeley</span>
                                    <span class="font-semibold text-amber-600 dark:text-amber-400">3 Orders in Queue</span>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-xl border-l-4 border-blue-600 bg-white p-6 dark:bg-slate-900">
                            <p class="text-center text-sm text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">All tutors pass rigorous screening.</strong> We test subject knowledge, verify degrees, and check teaching ability. Message your tutor anytime during your homework.
                            </p>
                        </div>
                    </div>

                    <!-- Before/After Success Stats -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-8 text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Real Student Grade Improvements</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">How our homework help boosted student performance</p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-3">
                            <!-- Success Story 1 -->
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-4 flex items-center justify-between">
                                    <span class="rounded-full bg-red-100 px-2.5 py-1 text-[11px] font-semibold text-red-700 dark:bg-red-950/40 dark:text-red-400">Before</span>
                                    <span class="text-lg text-slate-400">→</span>
                                    <span class="rounded-full bg-emerald-100 px-2.5 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">After</span>
                                </div>
                                <div class="mb-4 flex items-center justify-around">
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-red-600 dark:text-red-400">D+</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Struggling</p>
                                    </div>
                                    <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">A-</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Excelling</p>
                                    </div>
                                </div>
                                <p class="mb-2 text-sm font-semibold text-slate-900 dark:text-white">Calculus II - Marcus J.</p>
                                <p class="text-xs text-slate-600 dark:text-slate-400">"Used homework help for 8 weeks. Understanding derivatives finally clicked. Now I help classmates!"</p>
                            </div>

                            <!-- Success Story 2 -->
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-4 flex items-center justify-between">
                                    <span class="rounded-full bg-orange-100 px-2.5 py-1 text-[11px] font-semibold text-orange-700 dark:bg-orange-950/40 dark:text-orange-400">Before</span>
                                    <span class="text-lg text-slate-400">→</span>
                                    <span class="rounded-full bg-emerald-100 px-2.5 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">After</span>
                                </div>
                                <div class="mb-4 flex items-center justify-around">
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-orange-600 dark:text-orange-400">C-</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Barely passing</p>
                                    </div>
                                    <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">A</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Top of class</p>
                                    </div>
                                </div>
                                <p class="mb-2 text-sm font-semibold text-slate-900 dark:text-white">Organic Chemistry - Lisa P.</p>
                                <p class="text-xs text-slate-600 dark:text-slate-400">"Balancing equations made sense after detailed explanations. Aced my final exam!"</p>
                            </div>

                            <!-- Success Story 3 -->
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-4 flex items-center justify-between">
                                    <span class="rounded-full bg-amber-100 px-2.5 py-1 text-[11px] font-semibold text-amber-700 dark:bg-amber-950/40 dark:text-amber-400">Before</span>
                                    <span class="text-lg text-slate-400">→</span>
                                    <span class="rounded-full bg-emerald-100 px-2.5 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">After</span>
                                </div>
                                <div class="mb-4 flex items-center justify-around">
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">B-</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Average</p>
                                    </div>
                                    <svg class="h-5 w-5 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">A+</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Dean's List</p>
                                    </div>
                                </div>
                                <p class="mb-2 text-sm font-semibold text-slate-900 dark:text-white">Python Programming - Ashley T.</p>
                                <p class="text-xs text-slate-600 dark:text-slate-400">"Code comments helped me understand logic. Now I code without help!"</p>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border border-slate-200 bg-slate-50 p-6 text-center dark:border-slate-800 dark:bg-slate-900">
                            <p class="mb-1 text-base font-bold text-slate-900 dark:text-white">Average Grade Improvement: C+ to A-</p>
                            <p class="text-xs text-slate-600 dark:text-slate-400">Based on 1,500+ student feedback surveys over 6 months</p>
                        </div>
                    </div>

                    <!-- Student Reviews with Countries -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <div class="mb-8 text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Students Worldwide Trust Our Homework Help</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Real testimonials from students in 50+ countries</p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div class="mb-3 flex items-center justify-between">
                                    <div class="flex text-sm text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-lg">🇺🇸</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Had calculus homework due at midnight and was completely stuck on derivatives. Ordered at 6pm and got perfect solutions with full explanations by 9pm! The tutor showed every step so I could actually learn it. Used it to study for my exam and got an A!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-xs font-bold text-white">
                                            MJ
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Marcus J.</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Texas A&amp;M, USA</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-emerald-100 px-2 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">A Grade</span>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div class="mb-3 flex items-center justify-between">
                                    <div class="flex text-sm text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-lg">🇨🇦</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Chemistry homework on balancing equations was impossible for me. The tutor not only solved all 20 problems but explained the concept so clearly with examples. Finally understand oxidation-reduction! Price was super affordable for a broke college student."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-xs font-bold text-white">
                                            LP
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Lisa P.</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">McGill University, Canada</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-emerald-100 px-2 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">98%</span>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div class="mb-3 flex items-center justify-between">
                                    <div class="flex text-sm text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-lg">🇬🇧</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Working full-time while in college is tough. This service saves me so much time on weekly homework. The explanations help me prepare for tests. My stats homework went from a C average to A's. Worth every penny!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-xs font-bold text-white">
                                            KR
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Kevin R.</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">London, UK</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-emerald-100 px-2 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">C→A</span>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div class="mb-3 flex items-center justify-between">
                                    <div class="flex text-sm text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-lg">🇦🇺</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Python coding homework was killing me. The tutor wrote clean code with comments explaining every line. Not only did I submit working code, but I actually learned how to code properly. Now I can do assignments myself!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-red-600 text-xs font-bold text-white">
                                            AT
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Ashley T.</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Sydney, Australia</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-emerald-100 px-2 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">100%</span>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div class="mb-3 flex items-center justify-between">
                                    <div class="flex text-sm text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-lg">🇮🇳</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "English literature analysis was my weakness. The tutor analyzed the poem beautifully with themes, symbolism, and literary devices. Teacher loved my homework! The explanations taught me how to analyze literature better."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-xs font-bold text-white">
                                            DJ
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Daniel J.</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">Delhi, India</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-emerald-100 px-2 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">A- Grade</span>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div class="mb-3 flex items-center justify-between">
                                    <div class="flex text-sm text-amber-400" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-lg">🇸🇬</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "MyMathLab homework is the worst! Sent screenshots of 15 problems and got perfect solutions within 4 hours. All answers were correct when I entered them. Customer support answered my questions super fast. Definitely using again!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center gap-3">
                                        <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-pink-600 text-xs font-bold text-white">
                                            SC
                                        </div>
                                        <div>
                                            <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Sophia C.</p>
                                            <p class="text-xs text-slate-500 dark:text-slate-400">NUS, Singapore</p>
                                        </div>
                                    </div>
                                    <span class="rounded-full bg-emerald-100 px-2 py-1 text-[11px] font-semibold text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">15/15 Correct</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-6 text-center">
                                <div class="inline-flex items-center gap-4 rounded-xl border border-slate-200 bg-white px-5 py-3 dark:border-slate-800 dark:bg-slate-950">
                                    <p class="text-2xl font-bold text-slate-900 dark:text-white">4.8/5.0</p>
                                    <div class="text-left">
                                        <div class="mb-0.5 text-sm text-amber-400">⭐⭐⭐⭐⭐</div>
                                        <p class="text-xs text-slate-600 dark:text-slate-400">Based on 5,000+ verified student reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-4 text-center text-sm">
                                <div>
                                    <p class="mb-1 text-xl">🇺🇸🇨🇦🇲🇽</p>
                                    <p class="text-xs font-semibold text-slate-600 dark:text-slate-400">Americas</p>
                                </div>
                                <div>
                                    <p class="mb-1 text-xl">🇬🇧🇩🇪🇫🇷</p>
                                    <p class="text-xs font-semibold text-slate-600 dark:text-slate-400">Europe</p>
                                </div>
                                <div>
                                    <p class="mb-1 text-xl">🇦🇺🇳🇿🇸🇬</p>
                                    <p class="text-xs font-semibold text-slate-600 dark:text-slate-400">Asia-Pacific</p>
                                </div>
                                <div>
                                    <p class="mb-1 text-xl">🇮🇳🇦🇪🇿🇦</p>
                                    <p class="text-xs font-semibold text-slate-600 dark:text-slate-400">Other Regions</p>
                                </div>
                            </div>
                            <p class="mt-6 text-center text-sm text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">Helping students in 50+ countries, 24/7.</strong> We accept international payments and match you with tutors in your time zone.
                            </p>
                        </div>
                    </div>

                    <!-- USA K-12 and College Homework Help -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">🇺🇸 Homework Help for USA Students (K-12 &amp; College)</h2>
                        <p class="mx-auto mb-6 max-w-2xl text-center text-sm text-slate-600 dark:text-slate-400">
                            <strong class="font-semibold text-slate-900 dark:text-white">Trusted by US students</strong> from elementary school through college. We understand Common Core standards, state curriculum requirements, AP coursework, SAT/ACT prep, and college-level assignments across all subjects.
                        </p>
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4">
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-2 text-2xl">🏫</div>
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">K-12 Homework</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Elementary, middle &amp; high school — $8/page</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-2 text-2xl">🎓</div>
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">College Homework</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Undergraduate assignments — $12/page</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-2 text-2xl">⚡</div>
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">Urgent Homework</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Due tonight? 3-6 hour delivery</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-white p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-2 text-2xl">📱</div>
                                <h4 class="mb-1 text-sm font-bold text-slate-900 dark:text-white">24/7 US Support</h4>
                                <p class="text-xs text-slate-600 dark:text-slate-400">Live chat in US time zones</p>
                            </div>
                        </div>
                    </div>

                    <!-- Subject-Specific Homework Help -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Homework Help by Subject</h2>
                        <div class="grid gap-5 sm:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-3 text-base font-bold text-slate-900 dark:text-white">📐 Math &amp; Science</h3>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Algebra, Geometry, Calculus</li>
                                    <li>• Physics, Chemistry, Biology</li>
                                    <li>• Statistics, Pre-Calculus</li>
                                    <li>• Trigonometry, Linear Algebra</li>
                                </ul>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-3 text-base font-bold text-slate-900 dark:text-white">📚 English &amp; Humanities</h3>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Reading Comprehension</li>
                                    <li>• Essay Writing, Grammar</li>
                                    <li>• History, Geography</li>
                                    <li>• Literature Analysis</li>
                                </ul>
                            </div>
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-3 text-base font-bold text-slate-900 dark:text-white">💻 Other Subjects</h3>
                                <ul class="space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                    <li>• Computer Science, Coding</li>
                                    <li>• Business, Economics</li>
                                    <li>• Foreign Languages</li>
                                    <li>• Psychology, Sociology</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- How to Get Homework Help -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950" itemscope itemtype="https://schema.org/HowTo">
                        <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white" itemprop="name">How to Get Homework Help Online</h2>
                        <div class="rounded-xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                            <ol class="list-inside list-decimal space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                <li itemprop="text"><strong class="font-semibold text-slate-900 dark:text-white">Submit your homework</strong> — Upload instructions, files, or take a photo</li>
                                <li itemprop="text"><strong class="font-semibold text-slate-900 dark:text-white">Get instant quote</strong> — See price and delivery time immediately</li>
                                <li itemprop="text"><strong class="font-semibold text-slate-900 dark:text-white">Expert solves it</strong> — Qualified tutor provides step-by-step solutions</li>
                                <li itemprop="text"><strong class="font-semibold text-slate-900 dark:text-white">Receive &amp; review</strong> — Download homework with explanations, request changes if needed</li>
                            </ol>
                        </div>
                    </div>

                    <!-- Related Services -->
                    <div class="mt-8 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Related Academic Services</h2>
                        <div class="grid gap-5 sm:grid-cols-3">
                            <a href="{{ route('services.essay-writing.index') }}" class="group rounded-xl border border-slate-200 bg-slate-50 p-5 transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-blue-50 text-lg dark:bg-blue-950/40">✍️</div>
                                <h3 class="mb-1 text-base font-bold text-blue-600 group-hover:text-blue-700 dark:text-blue-400">Essay Writing</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">For longer writing assignments beyond daily homework</p>
                            </a>
                            <a href="{{ route('services.lab-report.index') }}" class="group rounded-xl border border-slate-200 bg-slate-50 p-5 transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-purple-50 text-lg dark:bg-purple-950/40">🔬</div>
                                <h3 class="mb-1 text-base font-bold text-purple-600 group-hover:text-purple-700 dark:text-purple-400">Lab Reports</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">Science lab report writing with data analysis</p>
                            </a>
                            <a href="{{ route('services.proofreading-editing.index') }}" class="group rounded-xl border border-slate-200 bg-slate-50 p-5 transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-emerald-50 text-lg dark:bg-emerald-950/40">✏️</div>
                                <h3 class="mb-1 text-base font-bold text-emerald-600 group-hover:text-emerald-700 dark:text-emerald-400">Editing &amp; Proofreading</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">Check and improve homework you've written</p>
                            </a>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="mt-8 rounded-2xl bg-slate-900 p-8 sm:p-10 dark:border dark:border-slate-800">
                        <div class="mx-auto max-w-2xl text-center">
                            <h3 class="mb-3 flex items-center justify-center gap-2 text-xl font-bold text-white sm:text-2xl">
                                <span class="text-xl">🚀</span>
                                Get Your Homework Done Tonight
                            </h3>
                            <p class="mb-6 text-sm leading-relaxed text-slate-400">
                                Don't stress about homework deadlines. Join 5,000+ students who get expert help with math, science, English, and 50+ other subjects. Step-by-step solutions, affordable prices, fast delivery. Get up to 40% off your order.
                            </p>
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 3]) }}"
                               class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                <span>📝</span>
                                Get Homework Help — Up to 40% Off
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
        <div class="mx-auto mt-8 max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-xl border border-amber-200 bg-amber-50 p-5 dark:border-amber-900 dark:bg-amber-950/30">
                <p class="text-xs leading-relaxed text-amber-800 dark:text-amber-300">
                    <strong class="font-semibold">Academic Use Notice:</strong> Our homework help is provided as a study tool and learning reference — similar to working with a tutor. Step-by-step solutions are intended to help you understand how to approach problems, not to be submitted as your own work. Please use our assistance responsibly and in accordance with your institution's academic integrity policies.
                </p>
            </div>
        </div>
    </section>

    <!-- Typical Turnaround Times -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Delivery Times</p>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">How Fast Can We Complete Your Homework?</h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Turnaround depends on subject difficulty and length. Here's what students typically receive.</p>
            </div>
            <div class="overflow-x-auto rounded-2xl border border-slate-200 dark:border-slate-800">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-slate-200 bg-slate-50 dark:border-slate-800 dark:bg-slate-950">
                            <th class="px-4 py-3 text-left font-bold text-slate-900 dark:text-white">Subject / Task Type</th>
                            <th class="px-4 py-3 text-center font-bold text-slate-900 dark:text-white">Short (1–5 questions)</th>
                            <th class="px-4 py-3 text-center font-bold text-slate-900 dark:text-white">Medium (6–15 questions)</th>
                            <th class="px-4 py-3 text-center font-bold text-slate-900 dark:text-white">Long / Complex</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        @php
                        $times = [
                            ['subject' => 'Mathematics / Statistics', 'short' => '1–3 hrs', 'medium' => '3–6 hrs', 'long' => '6–12 hrs'],
                            ['subject' => 'Programming / Coding', 'short' => '2–4 hrs', 'medium' => '4–8 hrs', 'long' => '12–24 hrs'],
                            ['subject' => 'Science (Physics, Chemistry, Biology)', 'short' => '1–3 hrs', 'medium' => '3–8 hrs', 'long' => '8–16 hrs'],
                            ['subject' => 'English / Writing Assignments', 'short' => '2–4 hrs', 'medium' => '4–8 hrs', 'long' => '8–24 hrs'],
                            ['subject' => 'History / Social Sciences', 'short' => '2–4 hrs', 'medium' => '4–8 hrs', 'long' => '8–24 hrs'],
                            ['subject' => 'Economics / Business', 'short' => '2–6 hrs', 'medium' => '6–12 hrs', 'long' => '12–24 hrs'],
                            ['subject' => 'Nursing / Healthcare', 'short' => '3–6 hrs', 'medium' => '6–12 hrs', 'long' => '12–48 hrs'],
                        ];
                        @endphp
                        @foreach($times as $i => $t)
                        <tr class="{{ $i % 2 === 0 ? 'bg-white dark:bg-slate-900' : 'bg-slate-50 dark:bg-slate-950' }} hover:bg-blue-50 dark:hover:bg-blue-950/20 transition-colors">
                            <td class="px-4 py-3 font-medium text-slate-900 dark:text-white">{{ $t['subject'] }}</td>
                            <td class="px-4 py-3 text-center font-semibold text-emerald-700 dark:text-emerald-400">{{ $t['short'] }}</td>
                            <td class="px-4 py-3 text-center font-semibold text-blue-700 dark:text-blue-400">{{ $t['medium'] }}</td>
                            <td class="px-4 py-3 text-center font-semibold text-orange-700 dark:text-orange-400">{{ $t['long'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="mt-4 text-center text-xs text-slate-500 dark:text-slate-500">All times are estimates. Minimum deadline is 1 hour for simple problems.</p>
        </div>
    </section>

    <!-- Common Mistakes Students Make With Homework -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-orange-600 dark:text-orange-400">Study Smarter</p>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">5 Homework Mistakes That Keep Students Stuck</h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Our tutors see these patterns constantly. Recognising them is the first step to breaking them.</p>
            </div>
            <div class="grid gap-5 sm:grid-cols-2">
                @php
                $mistakes = [
                    ['title' => 'Starting Without Reading the Full Question', 'desc' => 'Students begin solving before understanding what\'s actually being asked. Re-read the question twice, underline key terms, and identify exactly what output is expected before you start any working.'],
                    ['title' => 'Skipping the Working-Out Steps', 'desc' => 'For maths and science, showing your working is often worth more marks than the final answer. A correct answer with no method shown can score zero. Our tutors always show full step-by-step solutions.'],
                    ['title' => 'Leaving It Until the Night Before', 'desc' => 'Complex subjects like statistics, calculus, or chemistry need time for concepts to settle. Last-minute homework produces surface-level answers. Earlier submission also gives you time to ask questions about the solution.'],
                    ['title' => 'Not Checking Units and Formatting', 'desc' => 'In sciences, forgetting to include units (kg, m/s, mol/L) costs marks even when the calculation is correct. In writing tasks, ignoring word limits or formatting requirements is an easy way to lose marks unnecessarily.'],
                    ['title' => 'Copying Without Understanding', 'desc' => 'Using a solved example to copy answers — without understanding the method — means the next similar question will go wrong too. Our step-by-step solutions are written to help you learn the process, not just get the answer.'],
                ];
                @endphp
                @foreach($mistakes as $m)
                <div class="flex gap-4 rounded-xl border border-slate-200 bg-white p-5 transition-colors duration-200 hover:border-orange-200 hover:bg-orange-50 dark:border-slate-800 dark:bg-slate-900 dark:hover:border-orange-900">
                    <div class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-orange-50 dark:bg-orange-950/40">
                        <svg class="h-4 w-4 text-orange-600 dark:text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="mb-1 text-base font-bold text-slate-900 dark:text-white">{{ $m['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $m['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">FAQ</p>
                <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Homework Help — Frequently Asked Questions</h2>
            </div>
            <div class="space-y-3" x-data="{ open: null }">
                @php
                $faqs = [
                    ['q' => 'Can you help with homework due in a few hours?', 'a' => 'Yes. Our fastest turnaround is 1 hour for simple problems. As long as the task is achievable in the time available, submit your order immediately and we\'ll match you to an available expert right away. For complex problems, 3–6 hours gives us enough time for quality step-by-step work.'],
                    ['q' => 'Do you solve problems step by step?', 'a' => 'Always. Every solution includes clear working so you can follow the logic. For maths and science problems, you\'ll see each step written out. For written assignments, you\'ll get an explanation of the approach and reasoning used.'],
                    ['q' => 'Can you help with online homework platforms like MyMathLab or Pearson?', 'a' => 'Yes. Our tutors work across all major homework platforms including MyMathLab, WebAssign, Blackboard, Canvas, and others. Share the login details or screenshot the questions and we handle the rest.'],
                    ['q' => 'Which subjects do you cover?', 'a' => 'We cover 50+ subjects including all maths levels (from algebra to advanced calculus), all sciences (physics, chemistry, biology), programming (Python, Java, C++, SQL, and more), economics, accounting, history, English, nursing, and psychology. If you\'re unsure, ask us and we\'ll confirm.'],
                    ['q' => 'Is the homework completed by real experts?', 'a' => 'Yes — every tutor on our platform holds at least a bachelor\'s degree in their subject area. Many hold master\'s or doctoral qualifications. We don\'t use AI to generate homework solutions — every answer is worked through by a human expert.'],
                    ['q' => 'What if the answer is wrong?', 'a' => 'If we made an error, we fix it at no charge. Submit a correction request with details of what was wrong and we\'ll review and rework it. Our accuracy rate across all subjects is consistently above 96%.'],
                ];
                @endphp
                @foreach($faqs as $i => $faq)
                <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-colors hover:border-blue-300 dark:border-slate-800 dark:bg-slate-950 dark:hover:border-blue-800">
                    <button
                        x-on:click="open = open === {{ $i }} ? null : {{ $i }}"
                        class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left focus:outline-none sm:px-6">
                        <span class="text-sm font-semibold text-slate-900 sm:text-base dark:text-white">{{ $faq['q'] }}</span>
                        <svg class="h-5 w-5 shrink-0 text-slate-400 transition-transform duration-300"
                            :class="open === {{ $i }} ? 'rotate-180 text-blue-600 dark:text-blue-400' : ''"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="open === {{ $i }}" x-collapse class="px-5 pb-4 sm:px-6">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
