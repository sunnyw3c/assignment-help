@extends('assignment-services.show')

@section('title', 'Homework Help Service | Expert Tutors | All Subjects | 24/7 Support')
@section('meta_description', 'Professional homework help with qualified tutors across all subjects. Math, science, English, history & more. Step-by-step solutions, plagiarism-free work. Fast delivery from 3 hours. Affordable prices starting at $8/page.')
@section('meta_keywords', 'homework help, homework help online, do my homework, homework assistance, homework tutoring, math homework help, science homework help, online homework help, college homework help, homework solver, assignment help')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Homework Help Service | Expert Tutors | All Subjects">
    <meta property="og:description" content="Get expert homework help from qualified tutors. All subjects covered with step-by-step solutions. Fast, affordable, plagiarism-free. 24/7 support.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Homework Help Service | Expert Tutors">
    <meta property="twitter:description" content="Expert homework help across all subjects. Step-by-step solutions with clear explanations. Fast delivery, affordable prices.">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Homework Help Service",
        "description": "Professional homework help service with qualified tutors providing step-by-step solutions across all subjects including math, science, English, history, and more.",
        "provider": {
            "@type": "Organization",
            "name": "Assignment Help Online"
        },
        "serviceType": "Academic Homework Assistance",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Homework Help Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Math Homework Help"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Science Homework Help"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "English Homework Help"
                    }
                }
            ]
        }
    }
    </script>
@endpush

@section('custom-content')
    <!-- Comprehensive Homework Help Content Section -->
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Homework Help Service</h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Get expert homework help from qualified tutors across all subjects. Step-by-step solutions with clear explanations. Fast delivery, affordable prices, 100% plagiarism-free.
                    </p>
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

                    <!-- Trust & Guarantees Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Why Students Trust Our Homework Help</h2>
                            <p class="text-lg text-gray-600">Reliable, affordable, and effective homework assistance</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🎓</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Qualified Subject Experts</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Your homework is completed by tutors with Bachelor's, Master's, or PhD degrees in specific subjects. We verify all qualifications and test subject knowledge before hiring. Math tutors solve calculus problems, chemistry experts balance equations, English tutors analyze literature - real expertise in every subject.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📝</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Step-by-Step Solutions</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We don't just give you answers - we show you how to solve problems. Every homework solution includes detailed explanations, formulas used, reasoning steps, and examples. Perfect for learning and understanding concepts, not just submitting assignments.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">⚡</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fast Turnaround</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Urgent homework due tonight? We offer delivery from 3 hours to 24 hours for most assignments. Standard homework is completed within 2-3 days. We've completed over 5,000 urgent homework assignments with 99% on-time delivery rate.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">💰</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Student-Friendly Pricing</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Starting at just $8/page for high school homework and $12/page for college level. No hidden fees. Pay only for the work completed. Money-back guarantee if homework doesn't meet requirements or is late.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Performance Stats</h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">10,000+</div>
                                    <p class="text-sm text-gray-700">Homework Assignments Completed</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">99%</div>
                                    <p class="text-sm text-gray-700">On-Time Delivery</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">50+</div>
                                    <p class="text-sm text-gray-700">Subjects Covered</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">4.8/5</div>
                                    <p class="text-sm text-gray-700">Average Student Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Subjects We Cover -->
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Subjects We Cover
                        </h2>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">📐 Mathematics</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Algebra (linear, quadratic equations)</li>
                                    <li>• Calculus (derivatives, integrals)</li>
                                    <li>• Geometry & Trigonometry</li>
                                    <li>• Statistics & Probability</li>
                                    <li>• Discrete Math & Linear Algebra</li>
                                    <li>• Differential Equations</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">🔬 Sciences</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Physics (mechanics, electricity)</li>
                                    <li>• Chemistry (organic, inorganic)</li>
                                    <li>• Biology (cell biology, genetics)</li>
                                    <li>• Earth Science & Environmental</li>
                                    <li>• Astronomy</li>
                                    <li>• Lab Reports & Experiments</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">📚 English & Literature</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Essay Writing & Analysis</li>
                                    <li>• Literature Analysis</li>
                                    <li>• Grammar & Composition</li>
                                    <li>• Poetry Analysis</li>
                                    <li>• Book Reports & Reviews</li>
                                    <li>• Creative Writing</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">🏛️ History & Social Sciences</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• World History & US History</li>
                                    <li>• Psychology</li>
                                    <li>• Sociology & Anthropology</li>
                                    <li>• Political Science</li>
                                    <li>• Geography</li>
                                    <li>• Economics</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">💼 Business & Accounting</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Accounting (financial, managerial)</li>
                                    <li>• Business Management</li>
                                    <li>• Marketing & Finance</li>
                                    <li>• Economics (micro, macro)</li>
                                    <li>• Statistics for Business</li>
                                    <li>• Case Study Analysis</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">💻 Computer Science</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Programming (Python, Java, C++)</li>
                                    <li>• Data Structures & Algorithms</li>
                                    <li>• Web Development (HTML, CSS, JS)</li>
                                    <li>• Database Management (SQL)</li>
                                    <li>• Computer Networks</li>
                                    <li>• Operating Systems</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">🌍 Foreign Languages</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Spanish</li>
                                    <li>• French</li>
                                    <li>• German</li>
                                    <li>• Italian</li>
                                    <li>• Mandarin Chinese</li>
                                    <li>• Latin</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">🎨 Arts & Humanities</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Philosophy</li>
                                    <li>• Art History</li>
                                    <li>• Music Theory</li>
                                    <li>• Religious Studies</li>
                                    <li>• Film Studies</li>
                                    <li>• Theater & Drama</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">⚕️ Health & Nursing</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Nursing (medical-surgical)</li>
                                    <li>• Anatomy & Physiology</li>
                                    <li>• Pharmacology</li>
                                    <li>• Nutrition</li>
                                    <li>• Public Health</li>
                                    <li>• Health Sciences</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-6 bg-white rounded-lg p-5 text-center">
                            <p class="text-gray-700">
                                <strong>Don't see your subject?</strong> We cover 50+ subjects. Contact us with your homework details and we'll find the right expert for you.
                            </p>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Homework Help Pricing</h2>
                        <p class="text-center text-gray-600 mb-8">Affordable rates for students - pay only for what you need</p>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">Academic Level</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">7+ Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">3 Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">24 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">12 Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">High School</td>
                                        <td class="p-4 border-b border-gray-200">$8/page</td>
                                        <td class="p-4 border-b border-gray-200">$10/page</td>
                                        <td class="p-4 border-b border-gray-200">$15/page</td>
                                        <td class="p-4 border-b border-gray-200">$20/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">College/Undergraduate</td>
                                        <td class="p-4 border-b border-gray-200">$12/page</td>
                                        <td class="p-4 border-b border-gray-200">$15/page</td>
                                        <td class="p-4 border-b border-gray-200">$20/page</td>
                                        <td class="p-4 border-b border-gray-200">$25/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 font-semibold">Graduate</td>
                                        <td class="p-4">$18/page</td>
                                        <td class="p-4">$22/page</td>
                                        <td class="p-4">$28/page</td>
                                        <td class="p-4">$35/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid md:grid-cols-3 gap-4">
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <h4 class="font-bold text-green-900 mb-2">✓ What's Included</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Step-by-step solutions</li>
                                    <li>• Clear explanations & workings</li>
                                    <li>• Plagiarism-free answers</li>
                                    <li>• Free revisions (7 days)</li>
                                    <li>• Direct tutor messaging</li>
                                    <li>• Quality checked before delivery</li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-900 mb-2">💰 Special Offers</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 20% off first homework order</li>
                                    <li>• 15% off for orders over 10 pages</li>
                                    <li>• 10% loyalty discount</li>
                                    <li>• Bulk homework packages available</li>
                                    <li>• Weekly homework subscriptions</li>
                                    <li>• Refer a friend - get $10 credit</li>
                                </ul>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="font-bold text-purple-900 mb-2">📄 Pricing Notes</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
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
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">How Our Homework Help Works</h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Get your homework done in 4 simple steps
                        </p>

                        <div class="grid md:grid-cols-4 gap-6">
                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold">1</div>
                                <div class="text-4xl mb-3 mt-2">📤</div>
                                <h4 class="font-bold text-gray-900 mb-2">Submit Homework</h4>
                                <p class="text-sm text-gray-600">Upload your homework questions, problems, or assignment instructions. Include any files, textbook pages, or specific requirements.</p>
                            </div>

                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold">2</div>
                                <div class="text-4xl mb-3 mt-2">🎯</div>
                                <h4 class="font-bold text-gray-900 mb-2">Get Matched</h4>
                                <p class="text-sm text-gray-600">We assign a qualified tutor who specializes in your subject. See their credentials and ratings before they start.</p>
                            </div>

                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold">3</div>
                                <div class="text-4xl mb-3 mt-2">✍️</div>
                                <h4 class="font-bold text-gray-900 mb-2">Expert Solves</h4>
                                <p class="text-sm text-gray-600">Your tutor solves the homework with detailed explanations. You can message them with questions during the process.</p>
                            </div>

                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold">4</div>
                                <div class="text-4xl mb-3 mt-2">✅</div>
                                <h4 class="font-bold text-gray-900 mb-2">Review & Learn</h4>
                                <p class="text-sm text-gray-600">Receive detailed solutions with explanations. Review the work, ask follow-up questions, request revisions if needed.</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Learning Guarantee:</strong> Our goal isn't just to complete your homework - it's to help you understand it. Every solution includes explanations so you can learn the concepts and solve similar problems yourself. If you don't understand something, ask your tutor for clarification at no extra cost.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Homework Help FAQs
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Is using homework help cheating?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Our homework help service is designed as a learning tool, similar to working with a tutor. We provide step-by-step solutions with detailed explanations so you can understand how to solve problems, not just copy answers. Many students use our service to study for exams, understand difficult concepts, or check their own work. However, you should use our solutions responsibly according to your school's academic integrity policies. We recommend using our help as a study guide and learning resource.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How fast can you complete my homework?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">We offer homework help from as fast as 3 hours for urgent assignments. Typical turnaround times: math problems (3-6 hours), short essays (6-12 hours), longer assignments (1-2 days). For homework due tonight or tomorrow, choose our rush service. However, we recommend ordering at least 24 hours in advance for best quality and lower prices. Complex assignments like coding projects or lab reports may need 2-3 days.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What if the homework solution is wrong?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">We stand behind our work with a quality guarantee. If any answer is incorrect or doesn't match your homework requirements, we'll fix it for free within 7 days of delivery. Simply point out the issue and your tutor will revise it. For major errors, we offer partial refunds. We also have a quality control team that reviews solutions before delivery to catch mistakes. Our tutors maintain a 95%+ accuracy rate across all subjects.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you help with online homework platforms like MyMathLab or WebAssign?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes, we can help with homework from online platforms including MyMathLab, WebAssign, ALEKS, Connect, Pearson, McGraw Hill, Cengage, and others. You can take screenshots of the problems or share the questions with us. We'll provide solutions that you can then enter into the platform yourself. For security reasons, we don't log into your accounts directly - you maintain control of your login credentials and submit the answers yourself.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How much does homework help cost?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Pricing varies by academic level and deadline. High school homework starts at $8/page, college at $12/page, and graduate at $18/page for standard deadlines. Individual problems cost $3-5 for math/science questions. Rush delivery (under 24 hours) costs 50-100% more. We offer a 20% discount on your first order and bulk discounts for regular homework help. There are no hidden fees - the price you see is what you pay. You can get a free quote by submitting your homework details.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you guarantee good grades on homework?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">While we can't guarantee specific grades (since grading is subjective and depends on your teacher), we guarantee accurate, high-quality solutions that meet standard academic requirements. Our tutors follow instructions carefully, show all work, and provide complete answers. Most students report receiving A or B grades when using our solutions as reference. If your teacher marks something as incorrect and it's our tutor's error, we'll issue a partial refund. We maintain 95%+ accuracy across all subjects based on student feedback.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meet Our Expert Tutors -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Meet Your Homework Help Tutors</h2>
                            <p class="text-lg text-gray-600">Subject experts with verified qualifications and proven track records</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <!-- Tutor 1 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        JC
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Prof. James</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Mathematics</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">15+ years teaching • 1,200+ homework solved • Calculus, algebra, statistics, trigonometry expert</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>MIT</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Tutor 2 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        SK
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Sarah</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Chemistry</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">10 years experience • 890+ assignments • Chemistry, biology, physics homework specialist</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Cambridge University</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Tutor 3 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        AL
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Alex L.</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">MS in Computer Science</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">7 years experience • 750+ projects • Python, Java, C++, web development homework</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Berkeley</span>
                                    <span class="text-orange-600 font-semibold">3 Orders in Queue</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 text-center">
                                <strong>All tutors pass rigorous screening.</strong> We test subject knowledge, verify degrees, and check teaching ability. Message your tutor anytime during your homework.
                            </p>
                        </div>
                    </div>

                    <!-- Before/After Success Stats -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Real Student Grade Improvements</h2>
                            <p class="text-lg text-gray-600">How our homework help boosted student performance</p>
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
                                        <div class="text-4xl font-bold text-red-600">D+</div>
                                        <p class="text-xs text-gray-600">Struggling</p>
                                    </div>
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-green-600">A-</div>
                                        <p class="text-xs text-gray-600">Excelling</p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 font-semibold mb-2">Calculus II - Marcus J.</p>
                                <p class="text-xs text-gray-600">"Used homework help for 8 weeks. Understanding derivatives finally clicked. Now I help classmates!"</p>
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
                                        <div class="text-4xl font-bold text-orange-600">C-</div>
                                        <p class="text-xs text-gray-600">Barely passing</p>
                                    </div>
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                    <div class="text-center">
                                        <div class="text-4xl font-bold text-green-600">A</div>
                                        <p class="text-xs text-gray-600">Top of class</p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 font-semibold mb-2">Organic Chemistry - Lisa P.</p>
                                <p class="text-xs text-gray-600">"Balancing equations made sense after detailed explanations. Aced my final exam!"</p>
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
                                        <div class="text-4xl font-bold text-green-600">A+</div>
                                        <p class="text-xs text-gray-600">Dean's List</p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 font-semibold mb-2">Python Programming - Ashley T.</p>
                                <p class="text-xs text-gray-600">"Code comments helped me understand logic. Now I code without help!"</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-gradient-to-r from-blue-50 to-green-50 rounded-lg p-6 text-center">
                            <p class="text-gray-900 font-bold text-lg mb-2">Average Grade Improvement: C+ to A-</p>
                            <p class="text-gray-600 text-sm">Based on 1,500+ student feedback surveys over 6 months</p>
                        </div>
                    </div>

                    <!-- Student Reviews with Countries -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Students Worldwide Trust Our Homework Help</h2>
                            <p class="text-lg text-gray-600">Real testimonials from students in 50+ countries</p>
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
                                    "Had calculus homework due at midnight and was completely stuck on derivatives. Ordered at 6pm and got perfect solutions with full explanations by 9pm! The tutor showed every step so I could actually learn it. Used it to study for my exam and got an A!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            MJ
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Marcus J.</p>
                                            <p class="text-sm text-gray-600">Texas A&M, USA</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">A Grade</div>
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
                                    "Chemistry homework on balancing equations was impossible for me. The tutor not only solved all 20 problems but explained the concept so clearly with examples. Finally understand oxidation-reduction! Price was super affordable for a broke college student."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            LP
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Lisa P.</p>
                                            <p class="text-sm text-gray-600">McGill University, Canada</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">98%</div>
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
                                    "Working full-time while in college is tough. This service saves me so much time on weekly homework. The explanations help me prepare for tests. My stats homework went from a C average to A's. Worth every penny!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            KR
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Kevin R.</p>
                                            <p class="text-sm text-gray-600">London, UK</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">C→A</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-2xl">🇦🇺</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "Python coding homework was killing me. The tutor wrote clean code with comments explaining every line. Not only did I submit working code, but I actually learned how to code properly. Now I can do assignments myself!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            AT
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Ashley T.</p>
                                            <p class="text-sm text-gray-600">Sydney, Australia</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">100%</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-2xl">🇮🇳</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "English literature analysis was my weakness. The tutor analyzed the poem beautifully with themes, symbolism, and literary devices. Teacher loved my homework! The explanations taught me how to analyze literature better."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            DJ
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Daniel J.</p>
                                            <p class="text-sm text-gray-600">Delhi, India</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">A- Grade</div>
                                </div>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                    <span class="text-2xl">🇸🇬</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "MyMathLab homework is the worst! Sent screenshots of 15 problems and got perfect solutions within 4 hours. All answers were correct when I entered them. Customer support answered my questions super fast. Definitely using again!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            SC
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Sophia C.</p>
                                            <p class="text-sm text-gray-600">NUS, Singapore</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">15/15 Correct</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                    <div class="text-4xl font-black text-gray-900 mr-4">4.8/5.0</div>
                                    <div class="text-left">
                                        <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                        <p class="text-sm text-gray-600">Based on 10,000+ verified student reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-4 text-center text-sm">
                                <div>
                                    <p class="text-2xl mb-1">🇺🇸🇨🇦🇲🇽</p>
                                    <p class="text-gray-600 font-semibold">Americas</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-1">🇬🇧🇩🇪🇫🇷</p>
                                    <p class="text-gray-600 font-semibold">Europe</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-1">🇦🇺🇳🇿🇸🇬</p>
                                    <p class="text-gray-600 font-semibold">Asia-Pacific</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-1">🇮🇳🇦🇪🇿🇦</p>
                                    <p class="text-gray-600 font-semibold">Other Regions</p>
                                </div>
                            </div>
                            <p class="text-center text-gray-700 mt-6">
                                <strong>Helping students in 50+ countries, 24/7.</strong> We accept international payments and match you with tutors in your time zone.
                            </p>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <span class="text-3xl mr-3">🚀</span>
                            Get Your Homework Done Tonight
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center max-w-3xl mx-auto">
                            Don't stress about homework deadlines. Join 10,000+ students who get expert help with math, science, English, and 50+ other subjects. Step-by-step solutions, affordable prices, fast delivery. Get 20% off your first order.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('assignments.create', ['assignment_service' => $service->id ?? 3]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Get Homework Help - 20% Off First Order
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
