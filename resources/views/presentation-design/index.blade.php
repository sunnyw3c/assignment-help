@extends('assignment-services.show')

@section('title', 'Presentation Design Service | PowerPoint & Slide Design Help')
@section('meta_description', 'Professional presentation design service for PowerPoint, Google Slides, and Keynote. Expert visual design, engaging content, speaker notes, and custom graphics for academic and business presentations.')
@section('meta_keywords', 'presentation design service, PowerPoint help, slide design, presentation slides, Google Slides design, Keynote presentation, academic presentation, business presentation, presentation graphics, pitch deck design')

@push('head')
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Professional Presentation Design Service | PowerPoint Experts">
    <meta property="og:description" content="Get expert presentation design with visual appeal, engaging content, and professional layouts. PowerPoint, Google Slides, and Keynote expertise.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Professional Presentation Design Service | PowerPoint Experts">
    <meta property="twitter:description" content="Expert presentation design for academic and business needs. Visual design, engaging content, and professional layouts.">

    <!-- Schema.org markup for Google -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Presentation Design Service",
        "description": "Professional presentation design service with expert designers creating visually stunning PowerPoint, Google Slides, and Keynote presentations with engaging content, professional layouts, custom graphics, charts, animations, and speaker notes for academic and business presentations.",
        "provider": {
            "@type": "Organization",
            "name": "Assignment Help Online"
        },
        "serviceType": "Presentation and Slide Design",
        "areaServed": "Worldwide",
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Presentation Design Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "PowerPoint Design"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Google Slides Design"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Academic Presentation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Business Pitch Deck"
                    }
                }
            ]
        }
    }
    </script>
@endpush

@section('custom-content')
    <!-- Comprehensive Presentation Design Content Section -->
    <section class="py-20 bg-white" itemscope itemtype="https://schema.org/Service">
        <div class="container mx-auto px-4">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h1 class="text-4xl font-black text-gray-900 mb-6" itemprop="name">Professional Presentation Design Service</h1>
                    <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto" itemprop="description">
                        Expert presentation design for PowerPoint, Google Slides, and Keynote. Visually stunning slides, engaging content, professional layouts, and custom graphics that captivate your audience.
                    </p>
                </div>

                <div class="prose prose-lg max-w-none">
                    <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Effective presentations represent powerful communication tools that can inform, persuade, inspire, and engage audiences whether in academic settings such as thesis defenses, research conferences, and classroom presentations, or business contexts including investor pitches, client proposals, product launches, and executive briefings. Creating compelling presentations that successfully convey complex information while maintaining audience attention demands not only deep understanding of your subject matter and clear communication skills but also visual design expertise, mastery of presentation software, knowledge of visual hierarchy and typography principles, proficiency in data visualization techniques, and understanding of audience psychology and engagement strategies. Our professional presentation design service provides comprehensive support from experienced designers and content specialists who understand both the technical aspects of slide creation and the art of visual storytelling, helping you deliver presentations that look professionally polished, communicate messages clearly, and leave lasting impressions on your audiences.
                        </p>

                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Our team consists of professional presentation designers, graphic designers, and communication specialists with expertise in PowerPoint, Google Slides, Keynote, and other presentation platforms who have created thousands of presentations across academic, business, nonprofit, and creative sectors. We provide end-to-end presentation design services including content development from your research, notes, or outlines, visual design and layout creation following principles of balance, contrast, and visual hierarchy, custom graphics and iconography tailored to your content and brand, professional charts and data visualizations that make complex information understandable, color scheme selection that enhances readability and creates visual appeal, typography choices that balance aesthetics with legibility, slide transitions and animations that enhance rather than distract from content, image sourcing and editing including stock photos and custom illustrations, speaker notes providing detailed talking points for each slide, and template creation allowing future customization while maintaining design consistency. Every presentation we create demonstrates professional quality through clean layouts, consistent branding, effective use of white space, readable fonts, high-quality visuals, and logical flow that guides audiences through your narrative while reinforcing key messages through strategic repetition and visual emphasis.
                        </p>
                    </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border-2 border-green-200 shadow-lg">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold text-gray-900 mb-3">Our Presentation Design Guarantees</h2>
                            <p class="text-lg text-gray-600">Your presentation success is our mission</p>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🎨</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Professional Design Expertise</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Your presentation will be designed by professionals with expertise in graphic design, visual communication, and presentation platforms (PowerPoint, Google Slides, Keynote). Our designers understand visual hierarchy, color theory, typography, layout principles, and audience engagement techniques. They create presentations that look polished, communicate clearly, and align with your academic or business context while maintaining professional standards expected in high-stakes presentations.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">📊</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Data Visualization Excellence</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            We create professional charts, graphs, infographics, and data visualizations that transform complex information into clear, understandable visuals. Bar charts, line graphs, pie charts, scatter plots, flowcharts, timelines, organizational charts, process diagrams, and custom infographics are designed with appropriate colors, labels, legends, and visual emphasis. All data visualizations follow best practices for clarity, accuracy, and visual appeal ensuring your audience grasps key insights quickly.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">✨</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Custom Graphics & Icons</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Every presentation includes custom graphics, icons, and visual elements tailored to your content rather than generic clip art or overused templates. We source high-quality stock images from premium libraries, create custom illustrations when needed, design branded icons consistent with your theme, develop visual metaphors that reinforce concepts, and ensure all visuals are high-resolution and professionally edited. Custom graphics elevate presentations from amateur to professional quality.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="flex items-start mb-4">
                                    <div class="text-4xl mr-4">🎤</div>
                                    <div>
                                        <h3 class="text-xl font-bold text-gray-900 mb-2">Comprehensive Speaker Notes</h3>
                                        <p class="text-gray-700 leading-relaxed">
                                            Beyond visual design, we provide detailed speaker notes for each slide including key talking points, explanations of complex concepts, transition phrases connecting slides, time estimates for pacing, answers to potential questions, and delivery tips. Speaker notes ensure you can present confidently without reading directly from slides. For academic defenses or important business presentations, comprehensive notes help you navigate questions and demonstrate deep understanding of your material.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-gray-50 rounded-xl p-6">
                            <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Our Presentation Design Success Record</h3>
                            <div class="grid md:grid-cols-4 gap-4 text-center">
                                <div>
                                    <div class="text-3xl font-bold text-blue-600 mb-2">4200+</div>
                                    <p class="text-sm text-gray-700">Presentations Designed</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-green-600 mb-2">98%</div>
                                    <p class="text-sm text-gray-700">Client Satisfaction Rate</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-purple-600 mb-2">95+</div>
                                    <p class="text-sm text-gray-700">Professional Designers</p>
                                </div>
                                <div>
                                    <div class="text-3xl font-bold text-orange-600 mb-2">24hr</div>
                                    <p class="text-sm text-gray-700">Rush Service Available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">🎯</span>
                                Visual Design Principles
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Effective presentation design follows proven visual principles that enhance communication and audience engagement. We apply the principle of visual hierarchy to guide audience attention to most important information first through size, color, placement, and contrast. Consistent layouts across slides create predictability allowing audiences to focus on content rather than navigating new designs each slide. Strategic use of white space prevents cluttered slides and improves readability. Typography is carefully selected with maximum two font families, appropriate sizes for readability from distance, and sufficient contrast between text and backgrounds.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Color schemes follow the 60-30-10 rule with dominant color (60%), secondary color (30%), and accent color (10%) creating visual balance while ensuring accessibility for color-blind audiences. The rule of thirds guides placement of key elements. Alignment creates organization and professionalism. Repetition of design elements, colors, and fonts creates cohesion. Contrast emphasizes important information. Every design choice serves the purpose of enhancing message communication rather than merely decorating slides, resulting in presentations that are both aesthetically pleasing and functionally effective.
                            </p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100">
                            <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center">
                                <span class="text-3xl mr-3">💡</span>
                                Content Development & Storytelling
                            </h3>
                            <p class="text-gray-700 leading-relaxed mb-4">
                                Beyond visual design, effective presentations require compelling content structured as engaging narratives. We help transform your research, data, or ideas into clear presentation narratives following storytelling principles: strong opening that captures attention and establishes relevance, logical middle that develops arguments progressively with supporting evidence, and memorable conclusion that reinforces key messages and calls to action. Each slide serves specific purpose advancing your overall narrative rather than simply listing information.
                            </p>
                            <p class="text-gray-700 leading-relaxed">
                                Content is distilled to essential points following the "one idea per slide" principle, avoiding text-heavy slides that audiences can't process while listening. Complex concepts are broken down into digestible components across multiple slides. Abstract ideas are made concrete through examples, analogies, and visual metaphors. Technical jargon is explained or replaced with accessible language appropriate for your audience. Transitions between slides and sections are smooth with connecting phrases that maintain narrative flow. The result is presentations that tell coherent stories keeping audiences engaged from opening to closing rather than overwhelming them with information dumps.
                            </p>
                        </div>
                    </div>

                    <!-- Presentation Types -->
                    <div class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-8 mb-8 border border-indigo-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-6 text-center">
                            Types of Presentations We Design
                        </h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Academic Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Thesis and dissertation defenses, research conference presentations, classroom lectures, seminar presentations, poster presentations converted to slides, literature review presentations, research proposal presentations, and academic job talks. Formatted according to academic standards with proper citations, methodological rigor, and scholarly tone.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Business Pitch Decks</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Investor pitch decks for startups seeking funding, venture capital presentations, business plan presentations, partnership proposals, sales pitches, product launch presentations, and elevator pitch decks. Include market analysis, financial projections, competitive positioning, team credentials, and compelling value propositions designed to secure funding or partnerships.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Corporate Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Executive briefings, board presentations, quarterly business reviews, strategic planning presentations, training and development presentations, change management communications, project proposals, department updates, and internal communications. Professional corporate design with brand consistency and executive-level polish.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Marketing Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Marketing strategy presentations, campaign proposals, social media strategy decks, content marketing plans, brand positioning presentations, market research findings, customer persona presentations, and digital marketing strategy decks. Visually engaging designs that showcase creative concepts and marketing insights.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Educational Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Lesson plans converted to slides, educational workshops, professional development training, student project presentations, curriculum presentations, educational technology demonstrations, teaching philosophy presentations, and e-learning modules. Designed for clarity and educational effectiveness with appropriate interactivity.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Conference Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Industry conference talks, TED-style presentations, panel discussion slides, keynote presentations, breakout session materials, poster presentations, lightning talks (5-minute presentations), and virtual conference presentations optimized for online delivery. Designed to engage large audiences and convey expertise.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Sales Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Client proposals, solution presentations, product demonstrations, service offerings, pricing presentations, ROI calculations, case study presentations, testimonial showcases, and competitive comparison presentations. Persuasive designs focused on benefits, value proposition, and closing deals.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Technical Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Technical architecture presentations, software demonstrations, engineering design reviews, scientific research presentations, data analysis presentations, system integration presentations, and technology roadmap presentations. Clear visualization of complex technical concepts for mixed technical and non-technical audiences.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Nonprofit Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Grant proposals, donor presentations, annual reports, impact presentations showcasing program outcomes, fundraising campaign presentations, volunteer recruitment presentations, and board presentations. Emotionally engaging storytelling combined with data-driven impact metrics.
                                </p>
                            </div>

                            <div class="bg-white rounded-lg p-5 shadow-sm">
                                <h4 class="text-xl font-bold text-blue-600 mb-3">Creative Presentations</h4>
                                <p class="text-gray-700 leading-relaxed">
                                    Portfolio presentations for designers, artists, photographers, creative pitches for agencies, film and video presentations, architectural presentations, fashion design presentations, and creative project proposals. Emphasis on visual impact, creativity, and artistic expression while maintaining clarity.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Platform Support -->
                    <div class="bg-gradient-to-br from-slate-50 to-gray-100 rounded-2xl p-8 mb-8 border border-gray-200">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Presentation Platforms We Support</h2>
                        <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">
                            Expert design for all major presentation software
                        </p>

                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="text-4xl mb-3">📊</div>
                                <h4 class="font-bold text-gray-900 mb-2">Microsoft PowerPoint</h4>
                                <p class="text-sm text-gray-600 mb-3">Most popular presentation software with extensive features</p>
                                <ul class="text-xs text-gray-700 space-y-1">
                                    <li>• Advanced animations & transitions</li>
                                    <li>• Custom templates & master slides</li>
                                    <li>• SmartArt & diagrams</li>
                                    <li>• Embedded videos & audio</li>
                                    <li>• .pptx and .ppt formats</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="text-4xl mb-3">📱</div>
                                <h4 class="font-bold text-gray-900 mb-2">Google Slides</h4>
                                <p class="text-sm text-gray-600 mb-3">Cloud-based collaboration and easy sharing</p>
                                <ul class="text-xs text-gray-700 space-y-1">
                                    <li>• Real-time collaboration</li>
                                    <li>• Cloud storage & accessibility</li>
                                    <li>• Easy sharing & permissions</li>
                                    <li>• Add-ons & extensions</li>
                                    <li>• Works on any device</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="text-4xl mb-3">🍎</div>
                                <h4 class="font-bold text-gray-900 mb-2">Apple Keynote</h4>
                                <p class="text-sm text-gray-600 mb-3">Beautiful designs with smooth animations</p>
                                <ul class="text-xs text-gray-700 space-y-1">
                                    <li>• Stunning visual effects</li>
                                    <li>• Cinematic transitions</li>
                                    <li>• 4K display support</li>
                                    <li>• iCloud integration</li>
                                    <li>• .key format</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="text-4xl mb-3">🎨</div>
                                <h4 class="font-bold text-gray-900 mb-2">Canva Presentations</h4>
                                <p class="text-sm text-gray-600 mb-3">User-friendly with beautiful templates</p>
                                <ul class="text-xs text-gray-700 space-y-1">
                                    <li>• Drag-and-drop interface</li>
                                    <li>• Extensive graphics library</li>
                                    <li>• Brand kit integration</li>
                                    <li>• Social media sizing</li>
                                    <li>• Export to PDF or video</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="text-4xl mb-3">⚡</div>
                                <h4 class="font-bold text-gray-900 mb-2">Prezi</h4>
                                <p class="text-sm text-gray-600 mb-3">Dynamic zooming presentations</p>
                                <ul class="text-xs text-gray-700 space-y-1">
                                    <li>• Non-linear navigation</li>
                                    <li>• Zoom-based storytelling</li>
                                    <li>• Interactive presentations</li>
                                    <li>• Video presentations</li>
                                    <li>• Presenter view</li>
                                </ul>
                            </div>

                            <div class="bg-white rounded-xl p-6 shadow-sm">
                                <div class="text-4xl mb-3">📄</div>
                                <h4 class="font-bold text-gray-900 mb-2">PDF & Print</h4>
                                <p class="text-sm text-gray-600 mb-3">Universal formats for sharing</p>
                                <ul class="text-xs text-gray-700 space-y-1">
                                    <li>• PDF export for universal viewing</li>
                                    <li>• Print-ready formats</li>
                                    <li>• Handout versions</li>
                                    <li>• Image exports (PNG, JPG)</li>
                                    <li>• Video presentations</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-8 bg-white rounded-xl p-6 border-l-4 border-blue-600">
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Platform Flexibility:</strong> All presentations are delivered in editable source format plus PDF for universal viewing. We can convert between platforms (PowerPoint to Google Slides, etc.) and provide multiple format options. If you need custom branding, templates, or specific institutional requirements, we adapt designs accordingly.
                            </p>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200 shadow-md">
                        <h2 class="text-3xl font-bold text-gray-900 mb-3 text-center">Presentation Design Pricing</h2>
                        <p class="text-center text-gray-600 mb-8">Affordable rates for professional slide design</p>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-gray-100">
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">Service Level</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">48+ Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">24 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">12 Hours</th>
                                        <th class="p-4 border-b-2 border-gray-300 font-bold text-gray-900">6 Hours</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Basic Design</td>
                                        <td class="p-4 border-b border-gray-200">$10/slide</td>
                                        <td class="p-4 border-b border-gray-200">$12/slide</td>
                                        <td class="p-4 border-b border-gray-200">$15/slide</td>
                                        <td class="p-4 border-b border-gray-200">$20/slide</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 border-b border-gray-200 font-semibold">Premium Design</td>
                                        <td class="p-4 border-b border-gray-200">$15/slide</td>
                                        <td class="p-4 border-b border-gray-200">$18/slide</td>
                                        <td class="p-4 border-b border-gray-200">$22/slide</td>
                                        <td class="p-4 border-b border-gray-200">$28/slide</td>
                                    </tr>
                                    <tr class="hover:bg-gray-50">
                                        <td class="p-4 font-semibold">Executive Design</td>
                                        <td class="p-4">$25/slide</td>
                                        <td class="p-4">$30/slide</td>
                                        <td class="p-4">$38/slide</td>
                                        <td class="p-4">$48/slide</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-6 grid md:grid-cols-3 gap-4">
                            <div class="bg-green-50 rounded-lg p-4 border border-green-200">
                                <h4 class="font-bold text-green-900 mb-2">Basic Design Includes</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Professional layouts</li>
                                    <li>• Text formatting & structure</li>
                                    <li>• Basic graphics & icons</li>
                                    <li>• Color scheme selection</li>
                                    <li>• Simple charts/tables</li>
                                    <li>• PDF export</li>
                                </ul>
                            </div>

                            <div class="bg-blue-50 rounded-lg p-4 border border-blue-200">
                                <h4 class="font-bold text-blue-900 mb-2">Premium Design Includes</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Everything in Basic</li>
                                    <li>• Custom graphics & icons</li>
                                    <li>• Advanced data visualization</li>
                                    <li>• Animations & transitions</li>
                                    <li>• Speaker notes</li>
                                    <li>• 2 rounds of revisions</li>
                                </ul>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-200">
                                <h4 class="font-bold text-purple-900 mb-2">Executive Design Includes</h4>
                                <ul class="text-sm text-gray-700 space-y-1">
                                    <li>• Everything in Premium</li>
                                    <li>• Custom illustrations</li>
                                    <li>• Infographic design</li>
                                    <li>• Video integration</li>
                                    <li>• Complete speaker script</li>
                                    <li>• Unlimited revisions</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="bg-white rounded-2xl p-8 mb-8 border border-gray-200" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Presentation Design FAQs
                        </h2>

                        <div class="space-y-6">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What do I need to provide for my presentation design?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Provide your content in any format: written notes, outlines, bullet points, research papers, or even rough drafts. Include any specific requirements such as number of slides, branding guidelines (colors, fonts, logos), presentation platform preference (PowerPoint, Google Slides, Keynote), deadline, and target audience (academic committee, investors, students, etc.). If you have data for charts or specific images to include, share those. The more information you provide about your presentation goals and audience, the better we can tailor the design. We can work with minimal information and develop content from your topic area, or polish existing slides that need professional redesign.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you design presentations in my company or university branding?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Absolutely! We specialize in creating presentations that match your brand identity or institutional requirements. Share your brand guidelines including color codes (hex/RGB values), official fonts, logo files (vector formats preferred), existing templates, or examples of branded materials. If your university or company has official PowerPoint templates, we can work within those constraints or create custom designs that incorporate your branding elements. For academic presentations, we follow discipline-specific conventions and institutional formatting requirements. Corporate presentations maintain brand consistency across all slides ensuring professional polish aligned with your organization's visual identity.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Do you provide speaker notes to help me present?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes! Speaker notes are included with Premium and Executive packages, or available as an add-on for Basic packages. Speaker notes provide detailed talking points for each slide including: explanations of key concepts, transitions between slides, approximate timing suggestions, answers to potential audience questions, emphasis points for delivery, and tips for engaging audience. Notes help you present confidently without reading directly from slides, maintain good pacing, and handle Q&A effectively. For important presentations like thesis defenses or investor pitches, comprehensive speaker notes ensure you're fully prepared to deliver compelling presentations that demonstrate expertise and command of material.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">Can you create charts and graphs from my data?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Yes! Data visualization is a core component of professional presentation design. Share your data in any format (Excel, CSV, raw numbers, tables from documents) and specify what you want to show. We create appropriate chart types: bar charts for comparisons, line graphs for trends over time, pie charts for compositional data, scatter plots for correlations, flowcharts for processes, timelines for chronological information, organizational charts for hierarchies, and custom infographics for complex information. All charts are professionally designed with clear labels, legends, appropriate colors, and visual emphasis on key insights. We ensure charts are accurate, easy to understand at a glance, and visually appealing, transforming raw data into compelling visual stories.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">How many revisions are included?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">Basic Design includes 1 round of revisions, Premium Design includes 2 rounds, and Executive Design includes unlimited revisions. Revisions cover changes to content, layout adjustments, color modifications, font changes, repositioning elements, adding or removing slides, updating charts, changing graphics, and other design modifications. We want you completely satisfied with your presentation. Revision requests should be submitted together for efficiency. Turnaround for revisions is typically 24-48 hours depending on extent of changes. Major scope changes beyond original requirements may incur additional fees, but we're flexible and work with you to achieve your vision within reasonable parameters.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-xl font-bold text-gray-900 mb-3" itemprop="name">What file formats will I receive?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-gray-700 leading-relaxed" itemprop="text">You receive your presentation in editable source format (.pptx for PowerPoint, Google Slides shareable link, .key for Keynote) allowing you to make future updates. We also provide PDF version for universal viewing and sharing, ensuring anyone can view your presentation regardless of software. Additional formats available upon request include: individual slide images (PNG or JPG) for social media or websites, video presentations with narration, presenter view handouts, and audience handout versions (multiple slides per page). All graphics and custom elements created for your presentation are embedded ensuring you have complete, self-contained presentation files ready to present on any device.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Success Stories -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 mb-8 border border-blue-100">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">
                            Presentation Success Stories
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
                                    "My thesis defense presentation was stunning! The designer transformed my dense research into clear, visually appealing slides with beautiful charts showing my data analysis results. My committee complimented the professional quality. The speaker notes helped me stay confident throughout. Successfully defended!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        AL
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Andrew L.</p>
                                        <p class="text-sm text-gray-600">PhD Student, Biology</p>
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
                                    "Needed a pitch deck for investors and this service delivered exactly what I needed. Professional design, compelling story flow, strong financial projections visualized beautifully. We secured seed funding! The presentation made our startup look polished and credible. Highly recommend for entrepreneurs!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-green-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        MC
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Michelle C.</p>
                                        <p class="text-sm text-gray-600">Startup Founder</p>
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
                                    "Marketing strategy presentation for my MBA capstone project looked amazing. Custom graphics, professional brand mockups, market analysis charts, and competitive positioning slides. Professor said it was the best-designed presentation she'd seen in years. Got an A+ on the project!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        JR
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">James R.</p>
                                        <p class="text-sm text-gray-600">MBA Student</p>
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
                                    "Conference presentation on educational technology was perfect! The designer understood my research and created engaging visuals that explained complex concepts clearly. Audience engagement was high and I got great questions afterward. Several attendees asked about my presentation design!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        DK
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Dr. Diana K.</p>
                                        <p class="text-sm text-gray-600">Education Researcher</p>
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
                                    "Sales presentation for a major client proposal needed to look professional and persuasive. The designer created a compelling story with great visuals, ROI calculations beautifully displayed, and strong call-to-action slides. We won the $500K contract! Investment paid off immediately."
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-indigo-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        RB
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Robert B.</p>
                                        <p class="text-sm text-gray-600">Sales Director</p>
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
                                    "Classroom presentation for my teaching demonstration during job interview was outstanding. Clean design, age-appropriate graphics for elementary students, interactive elements, and clear learning objectives displayed. The hiring committee loved it and I got the teaching position!"
                                </p>
                                <div class="flex items-center" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="w-10 h-10 bg-pink-600 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                        EW
                                    </div>
                                    <div>
                                        <p class="font-bold text-gray-900" itemprop="name">Emily W.</p>
                                        <p class="text-sm text-gray-600">Education Graduate</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center bg-white rounded-lg px-6 py-4 shadow-md">
                                <div class="text-4xl font-black text-gray-900 mr-4">4.89/5.0</div>
                                <div class="text-left">
                                    <div class="flex text-yellow-400 text-xl mb-1">⭐⭐⭐⭐⭐</div>
                                    <p class="text-sm text-gray-600">Based on 4,200+ presentation reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <span class="text-3xl mr-3">🎨</span>
                            Ready for Professional Presentation Design?
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6 text-center max-w-3xl mx-auto">
                            Join thousands of students and professionals who've captivated audiences with our presentation design service. Expert designers, stunning visuals, engaging content, and professional polish. Your presentation success starts with great design.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 8]) }}"
                               class="inline-flex items-center justify-center bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-4 rounded-xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <span class="mr-2">📝</span>
                                Order Your Presentation Design Today
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
