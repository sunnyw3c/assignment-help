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


@endpush

@section('custom-content')
    <!-- Comprehensive Presentation Design Content Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" itemscope itemtype="https://schema.org/Service">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-5xl">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white" itemprop="name">Professional Presentation Design Service</h1>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400" itemprop="description">
                        Expert presentation design for PowerPoint, Google Slides, and Keynote. Visually stunning slides, engaging content, professional layouts, and custom graphics that captivate your audience.
                    </p>
                </div>

                <div class="space-y-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Effective presentations are powerful communication tools that inform, persuade, and engage audiences — whether in academic settings like thesis defenses and research conferences, or business contexts like investor pitches and executive briefings. Creating compelling presentations demands more than subject-matter knowledge: it takes visual design expertise, mastery of presentation software, an understanding of visual hierarchy and typography, and skill in data visualization and audience engagement. Our professional presentation design service pairs you with experienced designers and content specialists who combine the technical craft of slide creation with the art of visual storytelling, so your presentation looks polished, communicates clearly, and leaves a lasting impression.
                        </p>

                        <p class="mt-4 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Our team of presentation designers, graphic designers, and communication specialists has built expertise across PowerPoint, Google Slides, Keynote, and other platforms, creating thousands of presentations for academic, business, nonprofit, and creative clients. Our end-to-end service covers content development from your notes or outlines, visual design and layout, custom graphics and iconography, professional charts and data visualizations, color and typography selection, speaker notes with detailed talking points, and reusable templates. Every presentation we deliver reflects clean layouts, consistent branding, effective white space, readable fonts, high-quality visuals, and a logical flow that guides your audience through the narrative.
                        </p>
                    </div>

                    <!-- Trust & Guarantees Section -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-8 max-w-2xl text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Our Presentation Design Guarantees</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Your presentation success is our mission</p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div class="flex gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-50 text-xl dark:bg-emerald-950/40">🎨</div>
                                <div>
                                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Professional Design Expertise</h3>
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Your presentation is designed by professionals skilled in visual communication and presentation platforms (PowerPoint, Google Slides, Keynote). Our designers apply visual hierarchy, color theory, typography, and layout principles to create presentations that look polished, communicate clearly, and align with your academic or business context.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-50 text-xl dark:bg-blue-950/40">📊</div>
                                <div>
                                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Data Visualization Excellence</h3>
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        We create professional charts, graphs, infographics, and data visualizations that turn complex information into clear visuals — bar charts, line graphs, pie charts, scatter plots, flowcharts, timelines, and organizational charts, all designed with appropriate colors, labels, and emphasis so your audience grasps key insights quickly.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-50 text-xl dark:bg-purple-950/40">✨</div>
                                <div>
                                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Custom Graphics &amp; Icons</h3>
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Every presentation includes custom graphics, icons, and visual elements tailored to your content rather than generic clip art. We source high-quality stock imagery, create custom illustrations when needed, design branded icons, and ensure every visual is high-resolution and professionally edited.
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-4 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-50 text-xl dark:bg-amber-950/40">🎤</div>
                                <div>
                                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Comprehensive Speaker Notes</h3>
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Beyond visual design, we provide detailed speaker notes for each slide — key talking points, transition phrases, timing estimates, likely audience questions, and delivery tips — so you can present confidently without reading directly from slides.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 rounded-2xl bg-slate-50 p-6 dark:bg-slate-900">
                            <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Our Presentation Design Success Record</h3>
                            <div class="grid grid-cols-2 gap-4 text-center sm:grid-cols-4">
                                <div>
                                    <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">4200+</p>
                                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Presentations Designed</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">98%</p>
                                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Client Satisfaction Rate</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-purple-600 dark:text-purple-400">95+</p>
                                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Professional Designers</p>
                                </div>
                                <div>
                                    <p class="text-2xl font-bold text-amber-600 dark:text-amber-400">24hr</p>
                                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Rush Service Available</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid gap-5 lg:grid-cols-2">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-lg font-bold text-slate-900 dark:text-white">
                                <span class="text-xl">🎯</span>
                                Visual Design Principles
                            </h3>
                            <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Effective presentation design follows proven visual principles. We use visual hierarchy to guide attention to the most important information through size, color, and contrast. Consistent layouts across slides let audiences focus on content rather than re-reading new designs each slide, and strategic white space prevents clutter. Typography sticks to a maximum of two font families with sizes and contrast chosen for readability from a distance.
                            </p>
                            <p class="mt-3 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Color schemes follow the 60-30-10 rule — dominant, secondary, and accent colors — for balance and accessibility. The rule of thirds guides placement of key elements, alignment creates organization, and repetition of colors and fonts creates cohesion. Every design choice serves message communication, not decoration, resulting in presentations that are both aesthetically pleasing and functionally effective.
                            </p>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-3 flex items-center gap-2 text-lg font-bold text-slate-900 dark:text-white">
                                <span class="text-xl">💡</span>
                                Content Development &amp; Storytelling
                            </h3>
                            <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Beyond visual design, effective presentations need content structured as an engaging narrative. We transform your research, data, or ideas into a clear story: a strong opening that captures attention, a logical middle that develops arguments with supporting evidence, and a memorable conclusion that reinforces key messages. Each slide serves the overall narrative rather than simply listing information.
                            </p>
                            <p class="mt-3 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Content is distilled to essential points following the "one idea per slide" principle, avoiding text-heavy slides audiences can't process while listening. Complex concepts are broken into digestible components, abstract ideas are made concrete through examples and visual metaphors, and jargon is explained or replaced with accessible language — so your presentation tells a coherent story from opening to close.
                            </p>
                        </div>
                    </div>

                    <!-- Presentation Types -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-6 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Types of Presentations We Design
                        </h2>
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Academic Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Thesis and dissertation defenses, research conference talks, classroom lectures, seminar presentations, poster-to-slide conversions, and academic job talks — formatted to academic standards with proper citations and scholarly tone.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Business Pitch Decks</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Investor pitch decks, venture capital presentations, partnership proposals, sales pitches, and product launch decks — including market analysis, financial projections, and compelling value propositions designed to secure funding or partnerships.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Corporate Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Executive briefings, board presentations, quarterly business reviews, training materials, project proposals, and internal communications — professional corporate design with brand consistency and executive-level polish.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Marketing Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Marketing strategy decks, campaign proposals, social media strategy presentations, brand positioning, market research findings, and customer persona presentations — visually engaging designs that showcase creative concepts and insights.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Educational Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Lesson plans converted to slides, workshops, professional development training, student project presentations, and e-learning modules — designed for clarity and educational effectiveness.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Conference Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Industry conference talks, TED-style presentations, panel discussion slides, keynotes, breakout session materials, and lightning talks — designed to engage large audiences and convey expertise.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Sales Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Client proposals, product demonstrations, pricing presentations, ROI calculations, case studies, and competitive comparisons — persuasive designs focused on value proposition and closing deals.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Technical Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Technical architecture reviews, software demonstrations, engineering design reviews, and technology roadmaps — clear visualization of complex technical concepts for mixed technical and non-technical audiences.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Nonprofit Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Grant proposals, donor presentations, annual reports, impact presentations, and fundraising campaigns — emotionally engaging storytelling combined with data-driven impact metrics.
                                </p>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h4 class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">Creative Presentations</h4>
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Portfolio presentations for designers, artists, and photographers, creative agency pitches, and architectural or fashion design presentations — emphasis on visual impact and artistic expression while maintaining clarity.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Platform Support -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-8 max-w-2xl text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Presentation Platforms We Support</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">
                                Expert design for all major presentation software
                            </p>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 text-2xl">📊</div>
                                <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Microsoft PowerPoint</h4>
                                <p class="mb-3 text-xs text-slate-500 dark:text-slate-400">Most popular presentation software with extensive features</p>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Advanced animations &amp; transitions</li>
                                    <li>Custom templates &amp; master slides</li>
                                    <li>SmartArt &amp; diagrams</li>
                                    <li>Embedded videos &amp; audio</li>
                                    <li>.pptx and .ppt formats</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 text-2xl">📱</div>
                                <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Google Slides</h4>
                                <p class="mb-3 text-xs text-slate-500 dark:text-slate-400">Cloud-based collaboration and easy sharing</p>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Real-time collaboration</li>
                                    <li>Cloud storage &amp; accessibility</li>
                                    <li>Easy sharing &amp; permissions</li>
                                    <li>Add-ons &amp; extensions</li>
                                    <li>Works on any device</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 text-2xl">🍎</div>
                                <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Apple Keynote</h4>
                                <p class="mb-3 text-xs text-slate-500 dark:text-slate-400">Beautiful designs with smooth animations</p>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Stunning visual effects</li>
                                    <li>Cinematic transitions</li>
                                    <li>4K display support</li>
                                    <li>iCloud integration</li>
                                    <li>.key format</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 text-2xl">🎨</div>
                                <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Canva Presentations</h4>
                                <p class="mb-3 text-xs text-slate-500 dark:text-slate-400">User-friendly with beautiful templates</p>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Drag-and-drop interface</li>
                                    <li>Extensive graphics library</li>
                                    <li>Brand kit integration</li>
                                    <li>Social media sizing</li>
                                    <li>Export to PDF or video</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 text-2xl">⚡</div>
                                <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">Prezi</h4>
                                <p class="mb-3 text-xs text-slate-500 dark:text-slate-400">Dynamic zooming presentations</p>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Non-linear navigation</li>
                                    <li>Zoom-based storytelling</li>
                                    <li>Interactive presentations</li>
                                    <li>Video presentations</li>
                                    <li>Presenter view</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <div class="mb-3 text-2xl">📄</div>
                                <h4 class="mb-1 text-base font-bold text-slate-900 dark:text-white">PDF &amp; Print</h4>
                                <p class="mb-3 text-xs text-slate-500 dark:text-slate-400">Universal formats for sharing</p>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>PDF export for universal viewing</li>
                                    <li>Print-ready formats</li>
                                    <li>Handout versions</li>
                                    <li>Image exports (PNG, JPG)</li>
                                    <li>Video presentations</li>
                                </ul>
                            </div>
                        </div>

                        <div class="mt-6 rounded-xl border-l-4 border-blue-600 bg-slate-50 p-5 dark:bg-slate-900">
                            <p class="max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-slate-900 dark:text-white">Platform Flexibility:</strong> All presentations are delivered in editable source format plus PDF for universal viewing. We can convert between platforms (PowerPoint to Google Slides, etc.) and adapt to custom branding, templates, or specific institutional requirements.
                            </p>
                        </div>
                    </div>

                    <!-- Transparent Pricing -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="mx-auto mb-8 max-w-2xl text-center">
                            <h2 class="text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">Presentation Design Pricing</h2>
                            <p class="mt-2 text-sm text-slate-600 dark:text-slate-400">Affordable rates for professional slide design</p>
                        </div>

                        <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-800">
                            <table class="w-full text-left text-sm">
                                <thead>
                                    <tr class="bg-slate-50 dark:bg-slate-900">
                                        <th class="p-4 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">Service Level</th>
                                        <th class="p-4 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">48+ Hours</th>
                                        <th class="p-4 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">24 Hours</th>
                                        <th class="p-4 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">12 Hours</th>
                                        <th class="p-4 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">6 Hours</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                                    <tr>
                                        <td class="p-4 font-semibold text-slate-900 dark:text-white">Basic Design</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$10/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$12/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$15/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$20/slide</td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 font-semibold text-slate-900 dark:text-white">Premium Design</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$15/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$18/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$22/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$28/slide</td>
                                    </tr>
                                    <tr>
                                        <td class="p-4 font-semibold text-slate-900 dark:text-white">Executive Design</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$25/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$30/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$38/slide</td>
                                        <td class="p-4 text-slate-600 dark:text-slate-400">$48/slide</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-5 grid gap-4 sm:grid-cols-3">
                            <div class="rounded-xl border border-emerald-200 bg-emerald-50 p-4 dark:border-emerald-900 dark:bg-emerald-950/40">
                                <h4 class="mb-2 text-sm font-bold text-emerald-700 dark:text-emerald-300">Basic Design Includes</h4>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Professional layouts</li>
                                    <li>Text formatting &amp; structure</li>
                                    <li>Basic graphics &amp; icons</li>
                                    <li>Color scheme selection</li>
                                    <li>Simple charts/tables</li>
                                    <li>PDF export</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-blue-200 bg-blue-50 p-4 dark:border-blue-900 dark:bg-blue-950/40">
                                <h4 class="mb-2 text-sm font-bold text-blue-700 dark:text-blue-300">Premium Design Includes</h4>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Everything in Basic</li>
                                    <li>Custom graphics &amp; icons</li>
                                    <li>Advanced data visualization</li>
                                    <li>Animations &amp; transitions</li>
                                    <li>Speaker notes</li>
                                    <li>2 rounds of revisions</li>
                                </ul>
                            </div>

                            <div class="rounded-xl border border-purple-200 bg-purple-50 p-4 dark:border-purple-900 dark:bg-purple-950/40">
                                <h4 class="mb-2 text-sm font-bold text-purple-700 dark:text-purple-300">Executive Design Includes</h4>
                                <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                    <li>Everything in Premium</li>
                                    <li>Custom illustrations</li>
                                    <li>Infographic design</li>
                                    <li>Video integration</li>
                                    <li>Complete speaker script</li>
                                    <li>Unlimited revisions within original scope</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950" itemscope itemtype="https://schema.org/FAQPage">
                        <h2 class="mb-8 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Presentation Design FAQs
                        </h2>

                        <div class="space-y-3">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">What do I need to provide for my presentation design?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Provide your content in any format — written notes, outlines, bullet points, research papers, or rough drafts. Include requirements like slide count, branding guidelines (colors, fonts, logos), platform preference, deadline, and target audience. If you have data for charts or specific images, share those too. We can work with minimal information and develop content from your topic, or polish existing slides that need a professional redesign.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Can you design presentations in my company or university branding?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Absolutely. Share your brand guidelines — color codes, official fonts, logo files, existing templates, or examples of branded materials. If your university or company has official templates, we work within those constraints or create custom designs incorporating your branding. Academic presentations follow discipline-specific conventions and institutional formatting; corporate presentations maintain brand consistency across every slide.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Do you provide speaker notes to help me present?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Yes. Speaker notes are included with Premium and Executive packages, or available as an add-on for Basic. Notes cover key talking points, transitions between slides, timing suggestions, answers to likely questions, and delivery tips — so you can present confidently without reading directly from slides, especially for high-stakes presentations like thesis defenses or investor pitches.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">Can you create charts and graphs from my data?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Yes. Share your data in any format (Excel, CSV, raw numbers, or tables from documents) and specify what you want to show. We create the right chart type — bar charts for comparisons, line graphs for trends, pie charts for composition, scatter plots for correlations, flowcharts, timelines, org charts, or custom infographics — all professionally designed with clear labels, legends, and visual emphasis on key insights.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">How many revisions are included?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">Basic Design includes 1 round of revisions, Premium includes 2 rounds, and Executive includes unlimited revisions. Revisions cover content changes, layout adjustments, color and font changes, repositioning, adding or removing slides, and chart or graphic updates. Submit revision requests together for the fastest turnaround — typically 24-48 hours depending on scope. Major changes beyond the original requirements may incur additional fees.</p>
                                </div>
                            </div>

                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question" class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white" itemprop="name">What file formats will I receive?</h3>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400" itemprop="text">You receive your presentation in editable source format (.pptx, a Google Slides link, or .key for Keynote) plus a PDF for universal viewing. Additional formats available on request include individual slide images (PNG/JPG), video presentations with narration, and audience handout versions. All graphics and custom elements are embedded so your files are complete and ready to present on any device.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Student Success Stories -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h2 class="mb-8 text-center text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl dark:text-white">
                            Presentation Success Stories
                        </h2>

                        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Presentation Design Service"></div>
                                <div class="mb-3 flex items-center" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    <span class="text-amber-400">★★★★★</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "My thesis defense presentation was stunning! The designer transformed my dense research into clear, visually appealing slides with beautiful charts showing my data analysis results. My committee complimented the professional quality. The speaker notes helped me stay confident throughout. Successfully defended!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-600 text-xs font-bold text-white">
                                        AL
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Andrew L.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">PhD Student, Biology</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Presentation Design Service"></div>
                                <div class="mb-3 flex items-center" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    <span class="text-amber-400">★★★★★</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Needed a pitch deck for investors and this service delivered exactly what I needed. Professional design, compelling story flow, strong financial projections visualized beautifully. We secured seed funding! The presentation made our startup look polished and credible. Highly recommend for entrepreneurs!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-xs font-bold text-white">
                                        MC
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Michelle C.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Startup Founder</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Presentation Design Service"></div>
                                <div class="mb-3 flex items-center" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    <span class="text-amber-400">★★★★★</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Marketing strategy presentation for my MBA capstone project looked amazing. Custom graphics, professional brand mockups, market analysis charts, and competitive positioning slides. Professor said it was the best-designed presentation she'd seen in years. Got an A+ on the project!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-600 text-xs font-bold text-white">
                                        JR
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">James R.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">MBA Student</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Presentation Design Service"></div>
                                <div class="mb-3 flex items-center" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    <span class="text-amber-400">★★★★★</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Conference presentation on educational technology was perfect! The designer understood my research and created engaging visuals that explained complex concepts clearly. Audience engagement was high and I got great questions afterward. Several attendees asked about my presentation design!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-rose-600 text-xs font-bold text-white">
                                        DK
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Dr. Diana K.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Education Researcher</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Presentation Design Service"></div>
                                <div class="mb-3 flex items-center" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    <span class="text-amber-400">★★★★★</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Sales presentation for a major client proposal needed to look professional and persuasive. The designer created a compelling story with great visuals, ROI calculations beautifully displayed, and strong call-to-action slides. We won the $500K contract! Investment paid off immediately."
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-indigo-600 text-xs font-bold text-white">
                                        RB
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Robert B.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Sales Director</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900" itemscope itemtype="https://schema.org/Review">
                                <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/Service" style="display:none"><meta itemprop="name" content="Presentation Design Service"></div>
                                <div class="mb-3 flex items-center" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="5">
                                    <meta itemprop="bestRating" content="5">
                                    <span class="text-amber-400">★★★★★</span>
                                </div>
                                <p class="mb-4 text-sm italic leading-relaxed text-slate-600 dark:text-slate-400" itemprop="reviewBody">
                                    "Classroom presentation for my teaching demonstration during job interview was outstanding. Clean design, age-appropriate graphics for elementary students, interactive elements, and clear learning objectives displayed. The hiring committee loved it and I got the teaching position!"
                                </p>
                                <div class="flex items-center gap-3" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                    <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-pink-600 text-xs font-bold text-white">
                                        EW
                                    </div>
                                    <div>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white" itemprop="name">Emily W.</p>
                                        <p class="text-xs text-slate-500 dark:text-slate-400">Education Graduate</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-center">
                            <div class="inline-flex items-center gap-4 rounded-xl border border-slate-200 bg-slate-50 px-6 py-4 dark:border-slate-800 dark:bg-slate-900">
                                <div class="text-2xl font-bold text-slate-900 dark:text-white">4.89/5.0</div>
                                <div class="text-left">
                                    <div class="mb-0.5 text-amber-400">★★★★★</div>
                                    <p class="text-xs text-slate-500 dark:text-slate-400">Based on 4,200+ presentation reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA -->
                    <div class="rounded-2xl bg-slate-900 p-8 sm:p-10 dark:border dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-3 flex items-center justify-center gap-2 text-xl font-bold text-white sm:text-2xl">
                            <span class="text-2xl">🎨</span>
                            Ready for Professional Presentation Design?
                        </h3>
                        <p class="mx-auto mb-6 max-w-2xl text-center text-sm leading-relaxed text-slate-400">
                            Join thousands of students and professionals who've captivated audiences with our presentation design service. Expert designers, stunning visuals, engaging content, and professional polish. Your presentation success starts with great design.
                        </p>
                        <div class="text-center">
                            <a href="{{ route('order', ['assignment_service' => $service->id ?? 8]) }}"
                               class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Order Your Presentation Design Today
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Integrity Notice -->
        <div class="mx-auto mt-8 max-w-5xl px-4 sm:px-6 lg:px-8">
            <div class="rounded-xl border border-amber-200 bg-amber-50 p-5 dark:border-amber-900 dark:bg-amber-950/30">
                <p class="text-xs leading-relaxed text-amber-800 dark:text-amber-300">
                    <strong class="font-semibold">Academic Use Notice:</strong> Our presentation design assistance is provided as a design guide and learning reference. All work delivered is intended to help you understand effective presentation principles. Please ensure your use of our services complies with your institution's academic integrity policies.
                </p>
            </div>
        </div>
    </section>
@endsection
