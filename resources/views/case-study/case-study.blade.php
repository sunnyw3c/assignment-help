@extends('assignment-services.show')

@section('title', 'Case Study Analysis Service | Business Case Study Help | SWOT Analysis')
@section('meta_description', 'Professional case study analysis service for business, management, and MBA courses. Expert SWOT analysis, strategic recommendations, financial analysis, and implementation plans. All industries covered.')
@section('meta_keywords', 'case study analysis, business case study help, MBA case study writing, case study analysis service, SWOT analysis, strategic analysis, business case study writing, management case study help, case study recommendations')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Case Study Analysis Service | Business Experts">
    <meta property="og:description" content="Get expert case study analysis with SWOT, strategic recommendations, and implementation plans. Business, management, and MBA expertise.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Case Study Analysis Service | Business Experts">
    <meta property="twitter:description" content="Expert case study analysis for business and management courses. SWOT analysis, strategic recommendations, and more.">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Case Study Analysis Service",
        "description": "Professional case study analysis service with business experts providing comprehensive strategic analysis including SWOT, PESTEL, Porter's Five Forces, financial analysis, and strategic recommendations for business, management, and MBA courses across all industries.",
        "provider": {
            "@type": "Organization",
            "name": "Assignment Help Online"
        },
        "serviceType": "Business Case Study Analysis",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Case Study Analysis Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Business Case Study Analysis"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "SWOT Analysis"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Strategic Recommendations"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Financial Analysis"
                    }
                }
            ]
        }
    }
    </script>
@endpush

@section('custom-content')
    <!-- Comprehensive Case Study Content Section -->
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Case Study Analysis Service</h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Expert case study analysis for business, management, and MBA courses. Comprehensive SWOT analysis, strategic frameworks, financial evaluation, and actionable recommendations.
                    </p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Case study analysis represents one of the most challenging and practically valuable assignments in business education, requiring students to examine real-world business situations, identify complex problems, analyze multiple stakeholder perspectives, evaluate competitive dynamics, assess financial implications, and develop strategic recommendations that balance theoretical frameworks with practical business realities. Mastering case study analysis demands not only comprehensive understanding of business concepts across multiple functional areas including strategy, marketing, finance, operations, and human resources, but also critical thinking abilities, analytical rigor, creative problem-solving skills, and the capacity to synthesize diverse information sources into coherent strategic narratives that demonstrate business acumen and decision-making competence. Our professional case study analysis service provides expert assistance from experienced business analysts, consultants, and MBA-qualified professionals who understand industry dynamics and can help you create insightful, well-structured analyses that earn top grades.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team consists of business experts holding MBA degrees, industry certifications, and professional experience across diverse sectors including technology, retail, healthcare, manufacturing, financial services, consulting, and entrepreneurship who bring real-world business knowledge to academic case analysis. We provide comprehensive support for all case study components including executive summaries, company background and situation analysis, problem identification and definition, SWOT analysis examining internal strengths and weaknesses alongside external opportunities and threats, application of strategic frameworks such as PESTEL analysis, Porter's Five Forces, Value Chain Analysis, BCG Matrix, and Ansoff Matrix, evaluation of alternative strategic options with pros and cons assessment, development of actionable recommendations with clear justification, implementation plans specifying concrete steps and timelines, financial analysis including ratio analysis, break-even calculations, NPV/IRR computations, and profitability projections, and properly cited references from business literature, industry reports, and credible sources. Every analysis demonstrates strategic thinking, business literacy, analytical depth, and practical applicability expected in graduate-level business education.
                        </p>
                    </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Business Analysis Guarantees</h2>
                            <p class="text-lg text-gray-600">Your business education success is our priority</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">💼</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">MBA-Qualified Business Analysts</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Your case study will be analyzed by business professionals with MBA degrees or equivalent qualifications who possess deep understanding of strategic management, competitive analysis, and business decision-making. Many of our analysts have consulting experience with firms like McKinsey, BCG, Deloitte, or industry experience as business executives, bringing practical insights to academic analysis.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📊</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Comprehensive Strategic Frameworks</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We apply proven business frameworks including SWOT analysis for internal/external assessment, PESTEL analysis for macro-environmental factors, Porter's Five Forces for industry competitiveness, Value Chain Analysis for operational efficiency, BCG Matrix for portfolio management, Ansoff Matrix for growth strategies, and other analytical tools appropriate for your specific case situation and course requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">💰</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Financial Analysis Expertise</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            When cases require financial evaluation, we perform thorough analysis including financial ratio calculations (liquidity, profitability, efficiency, leverage), trend analysis across multiple years, break-even analysis, cost-benefit assessment, NPV and IRR calculations for investment decisions, sensitivity analysis, and financial projections. All calculations are accurate, properly formatted, and clearly explained with business implications discussed.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🎯</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Actionable Recommendations</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We develop practical, implementable recommendations grounded in analysis and supported by business theory. Each recommendation is clearly justified with supporting evidence, addresses identified problems, considers resource constraints and organizational capabilities, includes implementation steps with timelines, anticipates potential challenges, and aligns with overall business strategy. Recommendations demonstrate strategic thinking and business judgment.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Case Study Success Record</h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">3200+</div>
                                    <p class="text-sm text-gray-700">Case Studies Completed</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">96%</div>
                                    <p class="text-sm text-gray-700">Student Satisfaction Rate</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">150+</div>
                                    <p class="text-sm text-gray-700">Business Analysts</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">50+</div>
                                    <p class="text-sm text-gray-700">Industries Covered</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🔍</span>
                                Strategic Analysis Frameworks
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Professional case study analysis requires systematic application of proven strategic frameworks that provide structured approaches to examining business situations. Our SWOT analysis comprehensively identifies internal strengths including core competencies, resources, capabilities, brand equity, and competitive advantages, as well as weaknesses such as resource limitations, capability gaps, operational inefficiencies, and competitive vulnerabilities. We assess external opportunities including market growth potential, emerging trends, technological innovations, regulatory changes, and strategic partnerships, alongside threats like competitive pressures, market disruptions, economic challenges, and regulatory obstacles.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Beyond SWOT, we apply additional frameworks as appropriate: PESTEL analysis examines Political, Economic, Social, Technological, Environmental, and Legal factors affecting the business environment. Porter's Five Forces evaluates industry competitiveness by analyzing threat of new entrants, bargaining power of suppliers and buyers, threat of substitutes, and competitive rivalry. Value Chain Analysis identifies primary and support activities creating value and competitive advantage. BCG Matrix assesses business portfolio positioning. Ansoff Matrix explores growth strategies. Each framework application is thorough, insightful, and directly connected to strategic recommendations.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">📈</span>
                                Industry & Competitive Analysis
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Understanding industry dynamics and competitive positioning is essential for effective case study analysis. We conduct thorough industry research using credible sources including industry reports from IBISWorld, Statista, MarketLine, business publications like Harvard Business Review, Forbes, Bloomberg, company financial statements, investor presentations, and market research databases. Our competitive analysis identifies key competitors, maps competitive positioning, evaluates competitive strategies, assesses market share distribution, analyzes differentiation strategies, and identifies competitive advantages and vulnerabilities.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                We analyze business models, revenue streams, cost structures, distribution channels, customer segments, and value propositions. Market trends are examined including growth rates, technological disruptions, consumer behavior shifts, regulatory developments, and globalization impacts. Industry structure analysis considers concentration ratios, barriers to entry, supplier and buyer power dynamics, and profitability drivers. All analysis is supported with current data, industry benchmarks, and credible citations, demonstrating research depth and analytical rigor expected in graduate business education.
                            </p>
                        </div>
                    </div>

                    <!-- Industries & Business Areas Covered -->
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Industries & Business Areas We Cover
                        </h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Technology & Digital Business</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Software companies, SaaS platforms, e-commerce businesses, digital transformation cases, platform economics, tech startups, social media companies, cloud computing, artificial intelligence applications, cybersecurity, and technology disruption strategies with understanding of digital business models and tech industry dynamics.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Retail & Consumer Goods</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Traditional retail, online retail, omnichannel strategies, consumer packaged goods, luxury brands, fast fashion, grocery retail, supply chain management, merchandising strategies, customer experience, retail analytics, and adaptation to changing consumer preferences with retail industry expertise.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Healthcare & Pharmaceuticals</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Hospital management, pharmaceutical companies, biotech firms, healthcare delivery systems, medical devices, health insurance, telemedicine, drug development, regulatory compliance, healthcare policy impacts, patient care quality, and healthcare innovation with understanding of complex healthcare industry.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Financial Services & Banking</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Commercial banking, investment banking, fintech companies, insurance, asset management, private equity, venture capital, payment systems, financial regulation, risk management, digital banking, blockchain applications, and financial services transformation with finance industry knowledge.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Manufacturing & Operations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Manufacturing strategy, operations management, supply chain optimization, lean manufacturing, quality management, production planning, capacity management, process improvement, Industry 4.0, automation, global manufacturing, and operational excellence with operations management expertise.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Hospitality & Tourism</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Hotels, restaurants, travel agencies, airlines, cruise lines, tourism destinations, event management, hospitality technology, customer service excellence, revenue management, sustainability in tourism, and pandemic recovery strategies with hospitality industry understanding.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Energy & Sustainability</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Oil and gas, renewable energy, utilities, energy transition, sustainable business practices, corporate social responsibility, circular economy, environmental strategy, climate change adaptation, green technology, and sustainability reporting with ESG expertise.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Automotive & Transportation</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Automobile manufacturers, electric vehicles, autonomous vehicles, mobility services, logistics companies, supply chain networks, transportation infrastructure, shared mobility, automotive technology, and industry transformation with automotive sector knowledge.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Telecommunications & Media</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Telecom operators, media companies, streaming services, content production, advertising, digital media, 5G deployment, convergence strategies, entertainment industry, publishing, and media business model innovation with media industry expertise.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Entrepreneurship & Startups</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Startup strategy, business model canvas, lean startup methodology, growth hacking, venture funding, entrepreneurial challenges, scaling strategies, pivot decisions, innovation management, and entrepreneurial ecosystem with startup experience and entrepreneurship knowledge.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Case Study Components -->
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Case Study Analysis Components</h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Comprehensive coverage of all case analysis elements
                        </p>

                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📋</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Executive Summary</h4>
                                <p class="text-xs text-gray-600">Concise overview of key issues, analysis, and recommendations for quick understanding</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">🏢</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Company Background</h4>
                                <p class="text-xs text-gray-600">Company history, business model, products/services, market position, organizational structure</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">❓</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Problem Identification</h4>
                                <p class="text-xs text-gray-600">Clear definition of core issues, challenges, and decision points requiring analysis</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">🔍</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">SWOT Analysis</h4>
                                <p class="text-xs text-gray-600">Comprehensive assessment of Strengths, Weaknesses, Opportunities, and Threats</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📊</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Industry Analysis</h4>
                                <p class="text-xs text-gray-600">Market dynamics, competitive landscape, Porter's Five Forces, industry trends</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">💡</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Alternative Solutions</h4>
                                <p class="text-xs text-gray-600">Multiple strategic options with pros/cons evaluation for each alternative</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">🎯</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Recommendations</h4>
                                <p class="text-xs text-gray-600">Selected strategy with clear justification, expected outcomes, and strategic fit</p>
                            </div>

                            <div class="bg-white rounded-xl p-5 shadow-sm">
                                <div class="text-3xl mb-2">📅</div>
                                <h4 class="font-bold text-gray-900 mb-2 text-sm">Implementation Plan</h4>
                                <p class="text-xs text-gray-600">Action steps, timeline, resource requirements, responsibilities, and milestones</p>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Business Writing Excellence:</strong> Every case study analysis is written with professional business communication style, executive-level clarity, logical structure, smooth transitions between sections, appropriate business terminology, objective analytical tone, evidence-based arguments, and properly cited sources from business literature, industry reports, and company information. We balance theoretical frameworks with practical business insights.
                            </p>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Case Study Analysis Pricing</h2>
                        <p class="text-center text-gray-600 mb-8">Professional rates for business case study analysis</p>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">Service Level</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">96+ Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">72 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">48 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">24 Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Undergraduate</td>
                                        <td class="p-4 border-b border-gray-200">$20/page</td>
                                        <td class="p-4 border-b border-gray-200">$24/page</td>
                                        <td class="p-4 border-b border-gray-200">$28/page</td>
                                        <td class="p-4 border-b border-gray-200">$35/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Graduate/MBA</td>
                                        <td class="p-4 border-b border-gray-200">$28/page</td>
                                        <td class="p-4 border-b border-gray-200">$35/page</td>
                                        <td class="p-4 border-b border-gray-200">$42/page</td>
                                        <td class="p-4 border-b border-gray-200">$50/page</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 font-semibold">Executive MBA</td>
                                        <td class="p-4">$38/page</td>
                                        <td class="p-4">$45/page</td>
                                        <td class="p-4">$55/page</td>
                                        <td class="p-4">$65/page</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid md:grid-cols-3 gap-4">
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <h4 class="font-bold text-green-900 mb-2">✓ What's Included</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Complete case study analysis</li>
                                    <li>• SWOT & strategic frameworks</li>
                                    <li>• Financial analysis (if required)</li>
                                    <li>• Strategic recommendations</li>
                                    <li>• Implementation plan</li>
                                    <li>• Properly cited references</li>
                                    <li>• Free revisions (14 days)</li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-900 mb-2">🎁 Add-On Services</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• PowerPoint presentation slides</li>
                                    <li>• Executive summary one-pager</li>
                                    <li>• Additional frameworks (PESTEL, etc.)</li>
                                    <li>• Detailed financial modeling</li>
                                    <li>• Competitive benchmarking</li>
                                    <li>• Industry research report</li>
                                </ul>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="font-bold text-purple-900 mb-2">📏 Page Specifications</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• 1 page = 275 words (double-spaced)</li>
                                    <li>• Tables & charts included</li>
                                    <li>• References not counted separately</li>
                                    <li>• Appendices available on request</li>
                                    <li>• Professional business formatting</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Case Study Analysis FAQs
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What information do I need to provide for my case study analysis?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Share the case study document (PDF, Word file, or textbook reference), specific questions you need to answer, required analytical frameworks (SWOT, PESTEL, Porter's Five Forces, etc.) from your course syllabus, page length or word count requirements, citation style (APA, Harvard, Chicago), deadline, and any specific instructions from your professor. If you have access to additional company information, financial statements, or industry reports, those are helpful but not required. We can conduct additional research as needed. The more details you provide about your course requirements and professor's expectations, the better we can tailor the analysis.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What business frameworks do you use in case study analysis?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">We apply a comprehensive range of strategic management frameworks depending on your case requirements. SWOT Analysis identifies internal strengths/weaknesses and external opportunities/threats. PESTEL Analysis examines Political, Economic, Social, Technological, Environmental, and Legal factors. Porter's Five Forces evaluates industry competitiveness. Value Chain Analysis assesses operational efficiency and competitive advantage. BCG Matrix analyzes business portfolio. Ansoff Matrix explores growth strategies. Resource-Based View examines strategic resources and capabilities. We also use financial analysis frameworks including ratio analysis, break-even analysis, NPV/IRR for investment decisions, and various other tools appropriate for your specific case situation and academic requirements.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you handle industry-specific case studies?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes! Our team includes business analysts with expertise across diverse industries including technology, retail, healthcare, financial services, manufacturing, hospitality, energy, automotive, telecommunications, media, pharmaceuticals, logistics, real estate, and more. We have experience analyzing cases from various sectors and understand industry-specific dynamics, competitive landscapes, regulatory environments, and business models. Whether your case involves a tech startup disrupting traditional industries, a retail company adapting to e-commerce, a healthcare organization managing regulatory changes, or a manufacturing firm implementing lean operations, we have the industry knowledge to provide insightful analysis grounded in sector-specific understanding.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you provide financial analysis for case studies?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Absolutely. When cases include financial data or require financial evaluation, we perform comprehensive financial analysis. This includes calculating and interpreting financial ratios (liquidity ratios like current ratio and quick ratio, profitability ratios like ROA, ROE, and profit margins, efficiency ratios like asset turnover and inventory turnover, and leverage ratios like debt-to-equity). We conduct trend analysis comparing financial performance across multiple years, break-even analysis for pricing and volume decisions, NPV and IRR calculations for capital investment decisions, cost-benefit analysis, sensitivity analysis showing impact of changing assumptions, and financial projections with reasonable assumptions. All calculations are accurate, clearly presented in tables, and thoroughly interpreted with business implications discussed in context of strategic recommendations.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How do you develop strategic recommendations?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Our recommendations follow a systematic process. First, we thoroughly analyze the case situation using appropriate frameworks to understand problems, opportunities, constraints, and strategic options. Second, we identify and evaluate multiple alternative solutions, examining pros and cons, feasibility, resource requirements, and strategic fit for each option. Third, we select the most appropriate recommendation based on analysis, strategic alignment, and practical feasibility. Fourth, we provide clear justification explaining why this recommendation addresses the identified problems, leverages opportunities, fits organizational capabilities, and creates competitive advantage. Finally, we develop an implementation plan specifying concrete action steps, timeline with milestones, resource allocation, responsibilities, success metrics, and potential challenges with mitigation strategies. Recommendations are practical, actionable, and grounded in both analysis and business theory.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you create PowerPoint presentations for case study presentations?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes! Many MBA and business courses require case study presentations in addition to written analysis. We can create professional PowerPoint presentations summarizing your case analysis with clear structure, executive summary, problem identification, key findings from frameworks (SWOT, Porter's Five Forces, etc.), strategic recommendations with justification, implementation plan, and conclusion. Slides include professional design, clear bullet points, charts and graphs visualizing data and analysis, appropriate business graphics, and speaker notes for each slide to guide your presentation. Presentations follow best practices for business communication with clean layouts, readable fonts, logical flow, and appropriate use of visuals to support your narrative. This add-on service helps you confidently present your case analysis to your class or professor.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Success Stories -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Business Student Success Stories
                        </h2>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white rounded-xl p-6 shadow-md" itemscope itemtype="https://schema.org/Review">
                                <div class="flex items-center mb-4">
                                    <div class="flex text-yellow-400 text-xl" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                        <meta itemprop="ratingValue" content="5">
                                        <meta itemprop="bestRating" content="5">
                                        ⭐⭐⭐⭐⭐
                                    </div>
                                </div>
                                <p class="text-gray-700 leading-relaxed mb-4 italic" itemprop="reviewBody">
                                    "My Netflix case study analysis was outstanding! The competitive analysis using Porter's Five Forces was thorough, the SWOT was insightful, and the strategic recommendations for international expansion were well-justified with industry data. My MBA professor praised the depth of analysis. Got an A!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        TB
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Thomas B.</p>
                                        <p class="text-sm text-gray-600">MBA, Strategy Course</p>
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
                                    "Tesla case study required financial analysis which I struggle with. The analyst calculated all ratios correctly, performed valuation analysis, and connected financial performance to strategic decisions beautifully. The implementation plan was detailed and practical. Excellent service!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        ND
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Nicole D.</p>
                                        <p class="text-sm text-gray-600">Business Administration, Senior</p>
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
                                    "Starbucks international expansion case was complex with so many strategic considerations. The analysis covered market entry modes, competitive landscape in emerging markets, and cultural adaptation strategies. Recommendations were backed by solid evidence. My professor was impressed!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        KP
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Kevin P.</p>
                                        <p class="text-sm text-gray-600">International Business, MBA</p>
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
                                    "Healthcare management case on hospital operations was challenging. The analyst understood healthcare industry complexities, regulatory environment, and operational challenges perfectly. SWOT analysis was spot-on and recommendations addressed patient care quality while maintaining financial sustainability."
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        RM
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Rachel M.</p>
                                        <p class="text-sm text-gray-600">Healthcare Administration, Graduate</p>
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
                                    "Amazon vs Walmart competitive case required deep retail industry knowledge. The analysis compared business models, supply chain strategies, and digital transformation approaches brilliantly. Alternative strategies were evaluated thoroughly. Plus got a great PowerPoint presentation for my class presentation!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        JL
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">James L.</p>
                                        <p class="text-sm text-gray-600">Marketing Management, MBA</p>
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
                                    "Startup case study on fintech company required understanding of innovation, disruption theory, and venture capital considerations. The analyst demonstrated excellent entrepreneurship knowledge. PESTEL analysis covered regulatory challenges beautifully. Implementation plan was realistic and actionable. Highly recommend!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        SC
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Sarah C.</p>
                                        <p class="text-sm text-gray-600">Entrepreneurship, Graduate Student</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                <div class="text-4xl font-black text-gray-900 mr-4">4.88/5.0</div>
                                <div class="text-left">
                                    <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                    <p class="text-sm text-gray-600">Based on 3,200+ case study reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <span class="text-3xl mr-3">💼</span>
                            Ready for Expert Case Study Analysis?
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center max-w-3xl mx-auto">
                            Join thousands of business students who've achieved top grades with our professional case study analysis service. MBA-qualified analysts, comprehensive frameworks, strategic insights, financial expertise, and actionable recommendations. Your business education success starts here.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 6]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Order Your Case Study Analysis Today
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
