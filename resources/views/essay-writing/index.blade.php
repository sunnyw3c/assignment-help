@extends('assignment-services.show')

@section('title', 'Professional Essay Writing Service | Expert Writers | 24/7 Support')
@section('meta_description', 'Get expert essay writing help from professional writers. 100% original, plagiarism-free essays with 24/7 support. All types: argumentative, persuasive, analytical, research & more. Fast delivery guaranteed.')
@section('meta_keywords', 'essay writing service, professional essay writers, custom essay help, academic writing, essay help online, write my essay, essay writing assistance, college essay writing, argumentative essay, research essay')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Essay Writing Service | Expert Academic Writers">
    <meta property="og:description" content="Get expert essay writing help from professional writers. 100% original, plagiarism-free essays with 24/7 support. All essay types covered.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Essay Writing Service | Expert Academic Writers">
    <meta property="twitter:description" content="Get expert essay writing help from professional writers. 100% original, plagiarism-free essays with 24/7 support.">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Essay Writing Service",
        "description": "Professional essay writing service with expert academic writers providing custom, plagiarism-free essays across all academic levels and disciplines.",
        "provider": {
            "@type": "Organization",
            "name": "Assignment Help Online"
        },
        "serviceType": "Academic Essay Writing",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Essay Writing Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Argumentative Essay Writing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Research Essay Writing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Persuasive Essay Writing"
                    }
                }
            ]
        }
    }
    </script>
@endpush

@section('custom-content')
    <!-- Comprehensive Essay Writing Content Section -->
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Essay Writing Service for Academic Excellence
                    </h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Get expert essay writing help from qualified academic writers. Custom essays delivered on time with guaranteed originality and quality.
                    </p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Essay writing is a fundamental skill that defines academic success across all educational
                            levels. Whether you're crafting a persuasive <a href="{{ route('services.essay-writing.show', 'argumentative') }}" class="text-blue-600 hover:text-blue-700 font-semibold underline">argumentative essay</a>, analyzing literature, or
                            presenting a compelling narrative, our professional essay writing service provides the expertise
                            and support you need to excel. We understand that effective essay writing requires more than
                            just good grammar – it demands critical thinking, structured argumentation, thorough research,
                            and the ability to communicate complex ideas with clarity and precision.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team of experienced academic writers holds advanced degrees from prestigious universities
                            and specializes in various disciplines including humanities, social sciences, business, and STEM
                            fields. Each essay is meticulously crafted to meet your specific requirements, whether it's
                            adhering to MLA, APA, Chicago, or Harvard citation styles. We pride ourselves on delivering
                            original, well-researched essays that demonstrate deep understanding of the subject matter while
                            maintaining your unique voice and perspective throughout the writing.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">✍️</span>
                                Our Essay Writing Process
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Every essay we produce follows a rigorous writing process that ensures quality and
                                authenticity. Our writers begin with comprehensive research, gathering relevant sources and
                                evidence to support the thesis statement. They then create a detailed outline that ensures
                                logical flow and coherent structure before drafting the essay with careful attention to
                                introduction hooks, body paragraph development, and compelling conclusions.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Each completed essay undergoes multiple rounds of editing and proofreading, checking for
                                grammatical accuracy, stylistic consistency, proper citation formatting, and plagiarism-free
                                content. We use advanced plagiarism detection software to guarantee 100% original work that
                                passes the most stringent academic integrity standards.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🎓</span>
                                Essay Types We Cover
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Our essay writing service covers every essay type you might encounter in your academic
                                journey. From analytical essays that break down complex topics to compare and contrast
                                essays examining similarities and differences, we handle it all. We excel at argumentative
                                and persuasive essays that present compelling cases backed by solid evidence, descriptive
                                essays that paint vivid pictures, and narrative essays that tell engaging stories.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We also specialize in college application essays, scholarship essays, reflective essays, and
                                critical analysis essays. Whether you're a high school student, undergraduate, or graduate
                                student pursuing a master's or doctoral degree, our writers adapt their approach to match
                                your academic level and assignment requirements.
                            </p>
                        </div>
                    </div>

                    <!-- Trust & Transparency Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Commitment to You</h2>
                            <p class="text-lg text-gray-600">Transparent policies that protect your interests</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">💯</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Money-Back Guarantee</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            If your essay doesn't meet the agreed requirements or is delivered late, you get a full refund. No questions asked. We also offer partial refunds if you're not completely satisfied with the quality - your money is protected.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🔐</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Privacy Protected</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We never share your personal information, email, or order details with anyone. Your payment is processed through secure, encrypted channels. We don't store credit card information. Your academic privacy is our priority.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📋</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Free Plagiarism Report</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Every essay comes with a free plagiarism report from Turnitin or Copyscape showing 0% similarity. You can verify the originality yourself before submitting. We write everything from scratch - no pre-written templates or AI-generated content.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">✏️</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Unlimited Free Revisions</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Request as many revisions as you need within 14 days of delivery at no extra cost. If something doesn't match your instructions, we'll fix it immediately. Your satisfaction is guaranteed.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Quality Standards</h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">100%</div>
                                    <p class="text-sm text-gray-700">Original Content</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">98%</div>
                                    <p class="text-sm text-gray-700">On-Time Delivery Rate</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">95%</div>
                                    <p class="text-sm text-gray-700">Customer Satisfaction</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">24/7</div>
                                    <p class="text-sm text-gray-700">Support Available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- How It Works - Transparent Process -->
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">How Our Essay Service Works</h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Simple, transparent process from order to delivery
                        </p>

                        <div class="grid md:grid-cols-5 gap-4">
                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">1</div>
                                <div class="text-4xl mb-3 mt-2">📝</div>
                                <h4 class="font-bold text-gray-900 mb-2">Submit Details</h4>
                                <p class="text-sm text-gray-600">Fill out a simple form with your essay topic, requirements, deadline, and academic level</p>
                            </div>

                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">2</div>
                                <div class="text-4xl mb-3 mt-2">💳</div>
                                <h4 class="font-bold text-gray-900 mb-2">Secure Payment</h4>
                                <p class="text-sm text-gray-600">Make a secure payment through encrypted channels. Your money is held safely until delivery</p>
                            </div>

                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">3</div>
                                <div class="text-4xl mb-3 mt-2">🎓</div>
                                <h4 class="font-bold text-gray-900 mb-2">Writer Match</h4>
                                <p class="text-sm text-gray-600">We assign a qualified writer with expertise in your subject area and academic level</p>
                            </div>

                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">4</div>
                                <div class="text-4xl mb-3 mt-2">✍️</div>
                                <h4 class="font-bold text-gray-900 mb-2">Writing & QC</h4>
                                <p class="text-sm text-gray-600">Writer researches and writes your essay. Quality team checks for plagiarism and errors</p>
                            </div>

                            <div class="bg-white rounded-xl p-6 text-center shadow-sm relative">
                                <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold">5</div>
                                <div class="text-4xl mb-3 mt-2">📨</div>
                                <h4 class="font-bold text-gray-900 mb-2">Delivery & Review</h4>
                                <p class="text-sm text-gray-600">Receive your essay with plagiarism report. Request free revisions if needed</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Full Transparency:</strong> You can communicate directly with your writer throughout the process. Track your order status in real-time. If you have questions or concerns at any stage, our customer support team is available 24/7 via live chat, email, or phone. We believe in complete honesty about our process, pricing, and policies.
                            </p>
                        </div>
                    </div>

                    <!-- Real Pricing Information -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Transparent Pricing</h2>
                        <p class="text-center text-gray-600 mb-8">No hidden fees - see exactly what you'll pay</p>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">Academic Level</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">14+ Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">7 Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">3 Days</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">24 Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">High School</td>
                                        <td class="p-4 border-b border-gray-200">$10/page</td>
                                        <td class="p-4 border-b border-gray-200">$12/page</td>
                                        <td class="p-4 border-b border-gray-200">$15/page</td>
                                        <td class="p-4 border-b border-gray-200">$20/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Undergraduate</td>
                                        <td class="p-4 border-b border-gray-200">$15/page</td>
                                        <td class="p-4 border-b border-gray-200">$18/page</td>
                                        <td class="p-4 border-b border-gray-200">$22/page</td>
                                        <td class="p-4 border-b border-gray-200">$28/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Graduate (Master's)</td>
                                        <td class="p-4 border-b border-gray-200">$25/page</td>
                                        <td class="p-4 border-b border-gray-200">$30/page</td>
                                        <td class="p-4 border-b border-gray-200">$35/page</td>
                                        <td class="p-4 border-b border-gray-200">$42/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 font-semibold">PhD/Doctoral</td>
                                        <td class="p-4">$35/page</td>
                                        <td class="p-4">$40/page</td>
                                        <td class="p-4">$48/page</td>
                                        <td class="p-4">$55/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid md:grid-cols-3 gap-4">
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <h4 class="font-bold text-green-900 mb-2">✓ What's Included</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Original essay written from scratch</li>
                                    <li>• Free plagiarism report</li>
                                    <li>• Free title page & bibliography</li>
                                    <li>• Unlimited revisions (14 days)</li>
                                    <li>• Direct writer communication</li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-900 mb-2">💰 Special Discounts</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 15% off first order</li>
                                    <li>• 10% off orders over 10 pages</li>
                                    <li>• 5% loyalty discount for returning customers</li>
                                    <li>• Seasonal promotions</li>
                                    <li>• Referral bonuses</li>
                                </ul>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="font-bold text-purple-900 mb-2">📏 Page Specifications</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 1 page = 275 words (double-spaced)</li>
                                    <li>• 1 page = 550 words (single-spaced)</li>
                                    <li>• Standard: Times New Roman, 12pt</li>
                                    <li>• 1-inch margins on all sides</li>
                                    <li>• Free formatting in any style</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Comprehensive Essay Types Section -->
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h3 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Types of Essays We Cover
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm hover:shadow-lg transition-shadow duration-300">
                                <a href="{{ route('services.essay-writing.show', 'argumentative') }}">
                                    <h4 class="text-xl font-bold text-blue-600 hover:text-blue-700 mb-3 transition-colors">Argumentative Essays →</h4>
                                </a>
                                <p class="text-gray-700 leading-relaxed mb-3">
                                    Present a clear position on a debatable topic with strong evidence, logical reasoning,
                                    and counterargument refutation.
                                </p>
                                <a href="{{ route('services.essay-writing.show', 'argumentative') }}"
                                   class="text-blue-600 hover:text-blue-700 font-semibold text-sm inline-flex items-center group">
                                    Learn More About Argumentative Essays
                                    <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Persuasive Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Convince readers to adopt a particular viewpoint using emotional appeals, credible
                                    sources, and compelling rhetoric.
                                </p>
                            </div>


                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Persuasive Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Convince readers to adopt a particular viewpoint using emotional appeals, credible
                                    sources, and compelling rhetoric.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Analytical Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Break down complex topics, texts, or concepts into components for detailed examination
                                    and interpretation.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Compare and Contrast Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Examine similarities and differences between two or more subjects, highlighting
                                    meaningful connections and distinctions.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Descriptive Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Use vivid sensory details and figurative language to paint a detailed picture of a
                                    person, place, object, or experience.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Narrative Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Tell a compelling story with a clear plot, characters, setting, and theme, often drawing
                                    from personal experiences.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Expository Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Explain, describe, or inform about a topic using facts, statistics, and examples in a
                                    clear, straightforward manner.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Cause and Effect Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Explore the reasons why something happened and the resulting consequences, establishing
                                    clear causal relationships.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Reflective Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Examine personal experiences and insights, analyzing how events have shaped your
                                    understanding and growth.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Critical Analysis Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Evaluate and interpret literary works, films, art, or theories with evidence-based
                                    critique and scholarly insight.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Definition Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Explore the meaning of abstract concepts or terms through detailed explanation,
                                    examples, and analysis.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Process Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Provide step-by-step instructions or explanations of how something works or how to
                                    accomplish a specific task.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">College Application Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Craft compelling personal statements that showcase your unique qualities, experiences,
                                    and aspirations to admissions committees.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Scholarship Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Demonstrate your qualifications, achievements, and goals to secure funding for your
                                    education.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Research Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Conduct in-depth investigation of a topic using scholarly sources, presenting findings
                                    with proper citations.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Synthesis Essays</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Combine information from multiple sources to develop a new perspective or argument on a
                                    topic.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Why Choose Our Professional Essay Writing Service
                        </h2>

                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="text-4xl mb-3">✅</div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">100% Original Content</h3>
                                <p class="text-gray-700">Every essay is written from scratch with advanced plagiarism detection ensuring authentic, unique work.</p>
                            </div>

                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="text-4xl mb-3">🎓</div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Expert PhD Writers</h3>
                                <p class="text-gray-700">Qualified academic writers with advanced degrees from top universities across all disciplines.</p>
                            </div>

                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="text-4xl mb-3">⚡</div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Fast Turnaround</h3>
                                <p class="text-gray-700">Rush delivery available from 3 hours to standard timelines with guaranteed on-time delivery.</p>
                            </div>

                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="text-4xl mb-3">💰</div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Affordable Pricing</h3>
                                <p class="text-gray-700">Competitive rates starting from $10/page with discounts for first-time customers and bulk orders.</p>
                            </div>

                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="text-4xl mb-3">🔄</div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Unlimited Revisions</h3>
                                <p class="text-gray-700">Free revisions until you're completely satisfied with your essay - your success is our priority.</p>
                            </div>

                            <div class="bg-white rounded-lg p-6 shadow-sm">
                                <div class="text-4xl mb-3">🔒</div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2">Confidential & Secure</h3>
                                <p class="text-gray-700">Your personal information and order details are protected with bank-level encryption.</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('assignments.create', ['assignment_service' => $service->id ?? 1]) }}"
                                class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Order Your Essay Now - Get 15% Off
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Additional SEO Content -->
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 mb-8 border border-purple-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">
                            How to Choose the Best Essay Writing Service in 2025
                        </h2>

                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p>
                                <strong>Finding a reliable essay writing service</strong> requires careful consideration of several key factors. With hundreds of essay help websites available online, it's essential to identify legitimate providers that deliver quality work. Here's what to look for when choosing an essay writing service:
                            </p>

                            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">1. Writer Qualifications and Expertise</h3>
                            <p>
                                The best essay writing services employ writers with advanced degrees (Master's or PhD) from accredited universities. Check if the service verifies writer credentials and allows you to communicate with your assigned writer. Professional essay writers should have expertise in specific academic disciplines and experience with various citation styles (APA, MLA, Chicago, Harvard).
                            </p>

                            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">2. Originality and Plagiarism Checks</h3>
                            <p>
                                A trustworthy essay service must guarantee 100% original, plagiarism-free content. Look for services that use professional plagiarism detection software like Turnitin or Copyscape and provide free plagiarism reports. All essays should be written from scratch with proper citations and references.
                            </p>

                            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">3. Customer Reviews and Reputation</h3>
                            <p>
                                Read independent customer reviews on platforms like Trustpilot, SiteJabber, or Reddit. Look for consistent positive feedback about essay quality, meeting deadlines, customer support responsiveness, and handling revisions. Avoid services with numerous complaints about missed deadlines or poor quality.
                            </p>

                            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">4. Pricing and Value</h3>
                            <p>
                                Compare pricing across multiple essay writing services. Legitimate services typically charge $15-30 per page for college-level work. Be cautious of extremely cheap services (under $10/page) as they may deliver low-quality work or plagiarized content. Look for transparent pricing with no hidden fees and options for discounts on first orders or bulk assignments.
                            </p>

                            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">5. Revision Policy and Guarantees</h3>
                            <p>
                                The best essay services offer unlimited free revisions within a reasonable timeframe (usually 7-14 days after delivery). Check for money-back guarantees if the essay doesn't meet your requirements or is delivered late. Quality services stand behind their work with clear refund policies.
                            </p>

                            <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">6. Customer Support Availability</h3>
                            <p>
                                24/7 customer support through multiple channels (live chat, email, phone) is essential for addressing urgent questions or concerns. Test their responsiveness before placing an order - quick, helpful responses indicate a professional service.
                            </p>

                            <p class="mt-6 font-semibold">
                                Our essay writing service meets all these criteria with qualified PhD writers, guaranteed originality, transparent pricing, unlimited revisions, and round-the-clock customer support. We've helped thousands of students achieve academic success with high-quality, custom-written essays across all subjects and academic levels.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Section for SEO -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Frequently Asked Questions About Essay Writing Services
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What is an essay writing service?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">An essay writing service is a professional academic assistance platform that provides custom-written essays by qualified writers. These services help students with research, writing, editing, and formatting of essays across various academic levels and subjects. Professional essay writers create original, plagiarism-free content tailored to specific requirements, citation styles (APA, MLA, Chicago, Harvard), and deadlines.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How does your essay writing service work?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Our essay writing process is simple: (1) Submit your essay requirements including topic, length, deadline, and citation style, (2) We match you with a qualified writer who specializes in your subject area, (3) The writer conducts research and crafts your custom essay, (4) Your essay goes through quality checks and plagiarism detection, (5) You receive your completed essay and can request unlimited free revisions if needed. The entire process is transparent with 24/7 customer support available.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Are your essay writing services legit and safe?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes, our essay writing service is completely legitimate and safe. We employ qualified academic writers with verified credentials, use secure payment processing, and protect your personal information with encryption. All essays are written from scratch and checked with advanced plagiarism detection software. We maintain strict confidentiality - your identity and order details remain private. Our service operates within legal boundaries as an academic assistance platform.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How much does an essay writing service cost?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Essay writing service costs typically range from $10 to $50 per page depending on academic level, urgency, and complexity. Our pricing starts at $10/page for high school essays with standard deadlines, $15-25/page for undergraduate work, and $30-50/page for graduate-level essays or dissertations. Rush orders (3-24 hours) cost more than standard timelines (7-14 days). We offer first-time customer discounts, bulk order savings, and transparent pricing with no hidden fees.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you write my essay in 24 hours?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes, we offer urgent essay writing with deadlines as short as 3 hours. Our express service can complete essays within 6, 12, or 24 hours while maintaining high quality standards. For rush orders, we assign your essay to writers who specialize in quick turnarounds without compromising on research quality or originality. The cost for urgent essays is higher than standard deadlines, but we guarantee on-time delivery with the same plagiarism-free guarantee and revision policy.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What types of essays can you write?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">We write all types of academic essays including argumentative essays, persuasive essays, analytical essays, compare and contrast essays, descriptive essays, narrative essays, expository essays, cause and effect essays, reflective essays, critical analysis essays, definition essays, process essays, college application essays, scholarship essays, research essays, and synthesis essays. Our writers are experienced across all academic disciplines and citation styles (APA, MLA, Chicago, Harvard, IEEE).</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you guarantee plagiarism-free essays?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Absolutely. Every essay is written from scratch by our professional writers and checked with advanced plagiarism detection software (Turnitin, Copyscape) before delivery. We guarantee 100% original content with proper citations for all sources. You receive a free plagiarism report with your essay. If any plagiarism is detected, we will rewrite the content at no additional charge or provide a full refund. Academic integrity is our top priority.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Who will write my essay?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Your essay will be written by a qualified academic writer with expertise in your subject area. All our writers hold at least a Master's degree, with many having PhDs from accredited universities. We carefully match each order with a writer who has the appropriate educational background, subject knowledge, and writing experience. You can communicate directly with your assigned writer throughout the process to provide additional instructions or clarifications.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meet Our Expert Writers Section -->
                    <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Meet Your Essay Writing Experts</h2>
                            <p class="text-lg text-gray-600">PhD-verified writers with proven expertise in academic essay writing</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-6 mb-8">
                            <!-- Writer 1 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        DR
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Rachel</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in English Literature</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 4.9</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">12+ years experience • 850+ essays completed • Specializes in argumentative & analytical essays, MLA/APA formatting</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Oxford University</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Writer 2 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        PM
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Prof. Michael</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Social Sciences</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 5.0</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">9 years experience • 620+ essays completed • Expert in research essays, sociology, psychology topics</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Harvard University</span>
                                    <span class="text-green-600 font-semibold">Available Now</span>
                                </div>
                            </div>

                            <!-- Writer 3 -->
                            <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300">
                                <div class="flex items-start mb-4">
                                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-2xl mr-4">
                                        EL
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center mb-1">
                                            <h4 class="font-bold text-gray-900">Dr. Emily</h4>
                                            <span class="ml-2 bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Verified</span>
                                        </div>
                                        <p class="text-sm text-gray-600">PhD in Creative Writing</p>
                                        <div class="flex text-yellow-400 text-sm mt-1">⭐⭐⭐⭐⭐ 4.8</div>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-700 mb-3">8 years experience • 580+ essays completed • Narrative, descriptive, college application essays specialist</p>
                                <div class="flex items-center justify-between text-xs text-gray-500">
                                    <span>Stanford University</span>
                                    <span class="text-orange-600 font-semibold">2 Orders in Queue</span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-lg p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 text-center">
                                <strong>All writers are verified professionals.</strong> We verify degrees, check writing samples, and test subject knowledge before hiring. You can message your assigned writer directly throughout the process.
                            </p>
                        </div>
                    </div>

                    <!-- Sample Essays Gallery -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Sample Essays - See Our Quality</h2>
                            <p class="text-lg text-gray-600">Anonymized examples of actual student essays we've completed</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <!-- Sample 1 -->
                            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-blue-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Argumentative Essay</span>
                                    <span class="text-green-600 font-bold">Grade: A+</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Climate Change Policy Reform</h4>
                                <p class="text-sm text-gray-600 mb-3">Environmental Science • Undergraduate • APA Format • 8 pages</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Strong thesis with compelling evidence from peer-reviewed sources. Excellent counterargument refutation. Clear structure with smooth transitions. Citations formatted perfectly..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Completed in 48 hours</div>
                                    <button class="text-blue-600 hover:text-blue-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>

                            <!-- Sample 2 -->
                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-purple-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Analytical Essay</span>
                                    <span class="text-green-600 font-bold">Grade: A</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Symbolism in "The Great Gatsby"</h4>
                                <p class="text-sm text-gray-600 mb-3">English Literature • High School • MLA Format • 5 pages</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Deep literary analysis with textual evidence. Insightful interpretation of symbolism. Well-organized paragraphs with topic sentences. Proper MLA in-text citations..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Completed in 72 hours</div>
                                    <button class="text-purple-600 hover:text-purple-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>

                            <!-- Sample 3 -->
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-green-600 text-white text-xs px-3 py-1 rounded-full font-semibold">Research Essay</span>
                                    <span class="text-green-600 font-bold">Grade: A-</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Impact of Social Media on Mental Health</h4>
                                <p class="text-sm text-gray-600 mb-3">Psychology • Graduate • APA Format • 12 pages</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Comprehensive literature review. 25+ scholarly sources. Critical analysis of research methodologies. Well-synthesized findings with implications..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Completed in 5 days</div>
                                    <button class="text-green-600 hover:text-green-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>

                            <!-- Sample 4 -->
                            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border border-orange-100 hover:shadow-lg transition-all duration-300">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="bg-orange-600 text-white text-xs px-3 py-1 rounded-full font-semibold">College Application Essay</span>
                                    <span class="text-green-600 font-bold">Accepted!</span>
                                </div>
                                <h4 class="font-bold text-gray-900 mb-2">Personal Statement - Overcoming Adversity</h4>
                                <p class="text-sm text-gray-600 mb-3">High School • Common App • 650 words</p>
                                <p class="text-sm text-gray-700 leading-relaxed mb-4">
                                    "Authentic voice. Compelling narrative arc. Shows growth and reflection. Demonstrates character strengths. Memorable opening hook and conclusion..."
                                </p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-500">Student accepted to 1st choice school</div>
                                    <button class="text-orange-600 hover:text-orange-700 font-semibold text-sm">View Sample →</button>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center bg-gray-50 rounded-lg p-6">
                            <p class="text-gray-700 mb-4">
                                <strong>These are real examples (anonymized for privacy).</strong> All samples show actual work delivered to students.
                            </p>
                            <a href="#" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                                View Full Sample Gallery (20+ Examples)
                                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Student Success Stories with Countries -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Students Worldwide Trust Our Essay Service</h2>
                            <p class="text-lg text-gray-600">Real testimonials from international students in 50+ countries</p>
                        </div>

                        <!-- Video Testimonials Section -->
                        <div class="grid md:grid-cols-2 gap-6 mb-8">
                            <!-- Video Testimonial 1 -->
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                                <div class="relative bg-gradient-to-br from-gray-800 to-gray-900 h-48 flex items-center justify-center cursor-pointer group">
                                    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                                    <div class="relative z-10 text-center">
                                        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                            </svg>
                                        </div>
                                        <p class="text-white font-semibold">Watch Sarah's Story</p>
                                        <p class="text-gray-300 text-sm">How essay help improved her grades</p>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <span class="text-2xl mr-2">🇬🇧</span>
                                            <div>
                                                <p class="font-bold text-gray-900">Sarah K.</p>
                                                <p class="text-xs text-gray-600">University of London</p>
                                            </div>
                                        </div>
                                        <div class="text-yellow-400">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Video Testimonial 2 -->
                            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                                <div class="relative bg-gradient-to-br from-blue-800 to-blue-900 h-48 flex items-center justify-center cursor-pointer group">
                                    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                                    <div class="relative z-10 text-center">
                                        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-3 group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z"/>
                                            </svg>
                                        </div>
                                        <p class="text-white font-semibold">Watch Raj's Experience</p>
                                        <p class="text-gray-300 text-sm">International student success story</p>
                                    </div>
                                </div>
                                <div class="p-4">
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <span class="text-2xl mr-2">🇮🇳</span>
                                            <div>
                                                <p class="font-bold text-gray-900">Raj P.</p>
                                                <p class="text-xs text-gray-600">Melbourne University</p>
                                            </div>
                                        </div>
                                        <div class="text-yellow-400">⭐⭐⭐⭐⭐</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Written Testimonials with Countries -->
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
                                    "I was struggling with my argumentative essay on climate change and had only 48 hours left. The writer delivered an exceptional essay with strong arguments and perfect APA citations. Got an A+ on my assignment!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            SK
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Sarah K.</p>
                                            <p class="text-sm text-gray-600">UCLA, USA</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">Grade: A+</div>
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
                                    "The quality of the research essay was outstanding. My writer had a PhD in History and it really showed. Detailed analysis, scholarly sources, and impeccable Chicago-style formatting. Will definitely use again!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            MC
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Michael C.</p>
                                            <p class="text-sm text-gray-600">Oxford, UK</p>
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
                                    <span class="text-2xl">🇨🇦</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "Needed help with my college application essay and was nervous about using a service. They helped me tell my story authentically while highlighting my strengths. Got accepted to my dream school!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            EP
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Emily P.</p>
                                            <p class="text-sm text-gray-600">Toronto, Canada</p>
                                        </div>
                                    </div>
                                    <div class="bg-blue-100 text-blue-700 text-xs px-2 py-1 rounded-full font-semibold">Accepted!</div>
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
                                    "As an international student, English essays were challenging for me. This service not only delivered a great compare and contrast essay but helped me understand proper structure and academic writing conventions."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            JL
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">James L.</p>
                                            <p class="text-sm text-gray-600">Sydney, Australia</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">Grade: A-</div>
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
                                    "Working full-time and studying for my MBA was overwhelming. Their essay service saved me during finals week. Professional, fast, and the quality exceeded my expectations. Customer support was also incredibly helpful."
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            AR
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">Amanda R.</p>
                                            <p class="text-sm text-gray-600">NUS, Singapore</p>
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
                                    <span class="text-2xl">🇩🇪</span>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "I was skeptical at first, but the plagiarism report showed 100% originality and my professor praised the critical analysis. The revision process was smooth - they made all changes I requested within hours. Highly recommend!"
                                </p>
                                <div class="flex items-center justify-between" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                            DT
                                        </div>
                                        <div>
                                            <p class="font-bold text-gray-900" itemprop="name">David T.</p>
                                            <p class="text-sm text-gray-600">Munich, Germany</p>
                                        </div>
                                    </div>
                                    <div class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full font-semibold">Grade: A+</div>
                                </div>
                            </div>
                        </div>

                        <!-- Global Reach Stats -->
                        <div class="mt-8 bg-white rounded-xl p-6">
                            <div class="text-center mb-6">
                                <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                    <div class="text-4xl font-black text-gray-900 mr-4">4.9/5.0</div>
                                    <div class="text-left">
                                        <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                        <p class="text-sm text-gray-600">Based on 2,500+ verified student reviews</p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-4 gap-4 text-center text-sm">
                                <div>
                                    <p class="text-2xl mb-1">🇺🇸🇬🇧🇨🇦</p>
                                    <p class="text-gray-600 font-semibold">North America & UK</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-1">🇦🇺🇳🇿🇸🇬</p>
                                    <p class="text-gray-600 font-semibold">Asia-Pacific</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-1">🇩🇪🇫🇷🇪🇸</p>
                                    <p class="text-gray-600 font-semibold">Europe</p>
                                </div>
                                <div>
                                    <p class="text-2xl mb-1">🇮🇳🇦🇪🇿🇦</p>
                                    <p class="text-gray-600 font-semibold">Other Regions</p>
                                </div>
                            </div>
                            <p class="text-center text-gray-700 mt-6">
                                <strong>Trusted by students in 50+ countries.</strong> We accept international payments and work in all time zones.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
