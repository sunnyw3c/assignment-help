@extends('layouts.app')

@section('title', 'Research Paper Help for College Students | Assignment Help USA')
@section('description', 'Get research paper help with questions, scholarly sources, literature synthesis, methodology, structure, citations, editing, and college deadlines.')
@section('canonical', url('/research-paper-help'))
@section('og_image', asset('images/research-paper/research-paper-help-og.jpg'))
@section('twitter_image', asset('images/research-paper/research-paper-help-og.jpg'))
@section('primary_image', asset('images/research-paper/research-paper-help-student.jpg'))
@section('date_modified', '2026-08-03')
@section('schema_main_entity', url('/research-paper-help') . '#service')

@push('structured-data')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => url('/research-paper-help') . '#service',
        'name' => 'Research Paper Help',
        'serviceType' => 'Academic research paper planning, source, writing, citation, and editing support',
        'url' => url('/research-paper-help'),
        'description' => 'Research paper help for US college students, including assignment analysis, research questions, source evaluation, literature synthesis, organization, methodology, citations, revision, and proofreading.',
        'image' => asset('images/research-paper/research-paper-help-student.jpg'),
        'provider' => [
            '@type' => 'Organization',
            '@id' => rtrim(config('app.url') ?: url('/'), '/') . '#organization',
            'name' => 'Assignment Help USA',
        ],
        'areaServed' => [
            '@type' => 'Country',
            'name' => 'United States',
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
<div class="min-h-screen bg-slate-50 text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">
    <x-creative-hero
        :service="$service"
        title="Research Paper Help for <span class='text-[#f16700]'>Evidence-Led Academic Work</span>"
        subtitle="Get focused support with your research question, scholarly sources, literature synthesis, methodology, structure, citations, and revision. Every project is developed around your prompt, rubric, academic level, and required format."
        :stats="[
            ['Brief-led', 'Research planning'],
            ['Source-aware', 'Evidence use'],
            ['Format-ready', 'Citation support'],
        ]"
        :features="[
            'Original support for your assignment brief',
            'Research and source-evaluation guidance',
            'Citation, revision, and formatting support',
            'Secure and confidential ordering',
        ]"
        :breadcrumbs="[
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Research Paper Help', 'url' => ''],
        ]"
    />

    <section class="relative z-10 border-y border-slate-200/80 bg-white/95 py-5 backdrop-blur dark:border-slate-800 dark:bg-slate-900/95" aria-label="Research paper service features">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-8 gap-y-4 px-4 sm:px-6 lg:px-8">
            @foreach ([
                ['Research question and scope', 'blue'],
                ['Scholarly source synthesis', 'emerald'],
                ['Methods and structure', 'violet'],
                ['Citations and final review', 'orange'],
            ] as [$label, $color])
                @php
                    $iconClass = match ($color) {
                        'blue' => 'bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400',
                        'emerald' => 'bg-emerald-50 text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400',
                        'violet' => 'bg-violet-50 text-violet-600 dark:bg-violet-500/10 dark:text-violet-400',
                        default => 'bg-orange-50 text-orange-600 dark:bg-orange-500/10 dark:text-orange-400',
                    };
                @endphp
                <div class="flex items-center gap-2.5 text-sm font-bold text-slate-700 dark:text-slate-200">
                    <span class="flex h-8 w-8 items-center justify-center rounded-lg {{ $iconClass }}">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                    </span>
                    {{ $label }}
                </div>
            @endforeach
        </div>
    </section>

    <div class="border-b border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-5 text-sm sm:px-6 md:flex-row md:items-center md:justify-between lg:px-8">
            <p class="text-slate-600 dark:text-slate-400">
                <span class="font-bold text-slate-900 dark:text-white">Prepared by the Assignment Help USA Editorial Team</span>
                <span class="mx-2 text-slate-300 dark:text-slate-700" aria-hidden="true">|</span>
                Updated <time datetime="2026-08-03">August 3, 2026</time>
            </p>
            <a href="{{ route('about') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">About our academic support team <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>

    <nav class="border-b border-slate-200 bg-slate-50 dark:border-slate-800 dark:bg-slate-950" aria-label="On this page">
        <div class="mx-auto flex max-w-7xl gap-2 overflow-x-auto px-4 py-4 sm:px-6 lg:px-8">
            <span class="shrink-0 px-2 py-2 text-xs font-black uppercase tracking-[.18em] text-slate-500">On this page</span>
            @foreach ([
                ['Overview', '#overview'],
                ['Support', '#support'],
                ['Paper types', '#paper-types'],
                ['Research process', '#process'],
                ['Source check', '#sources'],
                ['Paper structure', '#structure'],
                ['FAQs', '#faqs'],
            ] as [$label, $anchor])
                <a href="{{ $anchor }}" class="shrink-0 rounded-lg px-3 py-2 text-xs font-bold text-slate-600 transition hover:bg-white hover:text-blue-600 hover:shadow-sm dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-blue-400">{{ $label }}</a>
            @endforeach
        </div>
    </nav>

    <section id="overview" class="relative scroll-mt-24 overflow-hidden bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="research-overview-heading">
        <div class="absolute -left-28 top-10 h-72 w-72 rounded-full bg-blue-500/5 blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/5 blur-3xl"></div>
        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-[1.02fr_.98fr] lg:px-8">
            <div>
                <span class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-2 text-[11px] font-black uppercase tracking-[.18em] text-orange-700 dark:border-orange-500/20 dark:bg-orange-500/10 dark:text-orange-300">
                    <span class="h-2 w-2 rounded-full bg-[#f16700]"></span>
                    Question. Investigate. Explain.
                </span>
                <h2 id="research-overview-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">
                    Research paper help built around <span class="text-blue-600 dark:text-blue-400">a defensible inquiry</span>
                </h2>
                <p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">
                    A research paper does more than collect facts. It asks a focused question, positions that question within existing scholarship, evaluates evidence, and develops a reasoned answer. The exact structure depends on the discipline and assignment: an empirical psychology paper, historical analysis, engineering report, and literature-based argument do not use the same method.
                </p>
                <p class="mt-4 text-base leading-8 text-slate-600 dark:text-slate-300">
                    Our research paper help can begin with a prompt or an existing draft. We account for the rubric, academic level, required readings, permitted source types, word count, and citation style. Delivered material is intended as a model and learning resource that you should review and use according to your institution's academic-integrity rules.
                </p>

                <div class="mt-8 grid gap-3 sm:grid-cols-2">
                    @foreach (['Researchable question and scope', 'Credible, relevant source selection', 'Synthesis instead of source-by-source summary', 'Transparent citations and references'] as $point)
                        <div class="flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-bold text-slate-700 dark:border-slate-700 dark:bg-slate-800/70 dark:text-slate-200">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-white">
                                <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            {{ $point }}
                        </div>
                    @endforeach
                </div>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-blue-600 px-7 py-4 text-sm font-black text-white shadow-[0_12px_30px_-12px_rgba(37,99,235,.65)] transition hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl">
                        Get Research Paper Help
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                    <a href="{{ route('how-it-works') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-7 py-4 text-sm font-black text-slate-700 transition hover:border-blue-300 hover:text-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">How It Works</a>
                </div>
            </div>

            <figure class="group relative">
                <div class="absolute -inset-3 rounded-[2rem] bg-gradient-to-br from-blue-600/20 via-transparent to-orange-500/20 blur-xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-white/70 bg-white p-2 shadow-2xl dark:border-slate-700 dark:bg-slate-800">
                    <img src="{{ asset('images/research-paper/research-paper-help-student.jpg') }}"
                         alt="College student evaluating journal articles, research notes, and data in a university library"
                         width="1536" height="1024"
                         class="h-[360px] w-full rounded-[1.55rem] object-cover object-center transition duration-700 group-hover:scale-[1.02] sm:h-[470px]"
                         loading="lazy" decoding="async">
                </div>
                <figcaption class="absolute -bottom-5 left-5 right-5 flex items-center gap-3 rounded-2xl border border-slate-200/80 bg-white/95 p-4 shadow-xl backdrop-blur sm:left-8 sm:right-auto dark:border-slate-700 dark:bg-slate-900/95">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-500 text-white shadow-lg shadow-orange-500/25">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M10 6h8m-8 4h8m-8 4h5M6 6h.01M6 10h.01M6 14h.01M4 19h16a2 2 0 002-2V5a2 2 0 00-2-2H4a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    </span>
                    <span><strong class="block text-sm text-slate-900 dark:text-white">Evidence needs interpretation</strong><span class="text-xs text-slate-500 dark:text-slate-400">Question, source, method, finding, significance</span></span>
                </figcaption>
            </figure>
        </div>
    </section>

    <section id="support" class="scroll-mt-24 bg-slate-50 py-20 sm:py-24 dark:bg-slate-950" aria-labelledby="research-support-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Focused academic support</span>
                <h2 id="research-support-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">What our research paper service can help with</h2>
                <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Request support for the complete project or for the stage currently blocking your progress.</p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['01', 'Prompt and rubric analysis', 'Clarify the task, intended audience, scope, required sections, source expectations, and assessment criteria.', 'bg-blue-500'],
                    ['02', 'Research question development', 'Turn a broad topic into a focused, feasible question and a working claim that can evolve with the evidence.', 'bg-emerald-500'],
                    ['03', 'Search and source strategy', 'Develop keywords, distinguish source types, and select evidence for relevance, authority, method, and currency.', 'bg-violet-500'],
                    ['04', 'Literature synthesis', 'Group sources by themes, debates, methods, or findings to show relationships rather than writing a list of summaries.', 'bg-orange-500'],
                    ['05', 'Drafting and revision', 'Connect claims, evidence, analysis, limitations, and transitions while keeping the paper aligned with its central question.', 'bg-cyan-500'],
                    ['06', 'Citations and formatting', 'Review in-text citations, notes, references, headings, tables, figures, and document format against the required style.', 'bg-rose-500'],
                ] as [$number, $heading, $copy, $badgeClass])
                    <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900">
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl text-sm font-black text-white shadow-lg {{ $badgeClass }}">{{ $number }}</span>
                        <h3 class="mt-6 text-xl font-black text-slate-900 dark:text-white">{{ $heading }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="paper-types" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="paper-types-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
                <div class="max-w-3xl">
                    <span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">Research paper types</span>
                    <h2 id="paper-types-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Different questions require different research designs</h2>
                    <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">A useful research plan follows the discipline, available evidence, and assignment—not a universal template.</p>
                </div>
                <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-700 dark:text-blue-400">Discuss your paper <span aria-hidden="true">&rarr;</span></a>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Analytical research papers', 'Examine a question, text, theory, event, or body of evidence and develop an interpretation supported by analysis.', null],
                    ['Argumentative research papers', 'Take a defensible position, compare competing explanations, and respond to credible counterarguments.', route('services.essay-writing.show', 'argumentative')],
                    ['Empirical research papers', 'Report a transparent quantitative, qualitative, or mixed-method investigation using an appropriate disciplinary structure.', null],
                    ['Literature-based papers', 'Synthesize and evaluate existing scholarship to identify patterns, disagreements, limitations, or research gaps.', route('services.literature-review.index')],
                    ['Case-based research', 'Investigate a bounded organization, event, policy, person, community, or problem using relevant evidence and context.', route('services.case-study.index')],
                    ['Policy and applied research', 'Define a practical problem, assess options against clear criteria, and develop an evidence-based recommendation.', null],
                ] as [$heading, $copy, $url])
                    <article class="flex flex-col rounded-3xl border border-slate-200 bg-slate-50 p-6 transition hover:border-blue-200 hover:bg-white hover:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:hover:border-blue-500/30 dark:hover:bg-slate-800">
                        <h3 class="text-lg font-black text-slate-900 dark:text-white">{{ $heading }}</h3>
                        <p class="mt-3 flex-1 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p>
                        @if ($url)
                            <a href="{{ $url }}" class="mt-5 text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Explore related support <span aria-hidden="true">&rarr;</span></a>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="process" class="relative scroll-mt-24 overflow-hidden bg-slate-900 py-20 sm:py-24" aria-labelledby="research-process-heading">
        <div class="absolute inset-0 opacity-[.035] [background-image:radial-gradient(circle_at_1px_1px,#fff_1px,transparent_0)] [background-size:28px_28px]"></div>
        <div class="absolute -left-24 top-0 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div>
        <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/15 blur-[100px]"></div>
        <div class="absolute left-1/2 top-8 -translate-x-1/2 select-none text-[7rem] font-black tracking-tighter text-white/[.018] sm:text-[11rem]" aria-hidden="true">RESEARCH</div>
        <div class="relative mx-auto grid max-w-7xl items-start gap-14 px-4 sm:px-6 lg:grid-cols-[.82fr_1.18fr] lg:px-8">
            <div class="lg:sticky lg:top-28">
                <span class="inline-flex rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-[11px] font-black uppercase tracking-[.2em] text-blue-300">Research roadmap</span>
                <h2 id="research-process-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-white sm:text-5xl">From a broad topic to a supported conclusion</h2>
                <p class="mt-6 text-base leading-8 text-slate-300">Research develops through iteration. Searching can narrow the question, conflicting evidence can reshape the claim, and revision can reveal missing sources or limitations.</p>
                <div class="mt-6 flex gap-3 rounded-2xl border border-emerald-400/20 bg-emerald-400/[.07] p-4">
                    <span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-emerald-400/15 text-emerald-300" aria-hidden="true">&#8634;</span>
                    <div>
                        <p class="text-sm font-black text-emerald-200">Keep the question, evidence, and claim connected</p>
                        <p class="mt-1 text-sm leading-6 text-slate-400">When one changes, revisit the others before polishing the final draft.</p>
                    </div>
                </div>
                <div class="mt-8 rounded-2xl border border-white/10 bg-white/[.04] p-5">
                    <p class="text-sm font-bold text-white">Is the project mainly a synthesis of previous studies?</p>
                    <p class="mt-2 text-sm leading-6 text-slate-400">Our literature review page explains thematic organization, critical comparison, and research-gap development.</p>
                    <a href="{{ route('services.literature-review.index') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-black text-blue-300 transition hover:text-white">Explore literature review help <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>

            <div class="relative rounded-[2rem] border border-white/10 bg-slate-950/45 p-4 shadow-2xl shadow-blue-950/30 backdrop-blur-sm sm:p-7">
                <div class="mb-7 flex items-center justify-between gap-4 border-b border-white/10 pb-5">
                    <div class="flex items-center gap-2" aria-hidden="true"><span class="h-2.5 w-2.5 rounded-full bg-red-400/80"></span><span class="h-2.5 w-2.5 rounded-full bg-amber-400/80"></span><span class="h-2.5 w-2.5 rounded-full bg-emerald-400/80"></span></div>
                    <p class="font-mono text-[10px] font-bold uppercase tracking-[.16em] text-slate-500">research-roadmap / working file</p>
                </div>
                <div class="absolute left-10 top-28 h-[calc(100%-13rem)] w-px bg-gradient-to-b from-blue-500 via-violet-500 to-orange-500 sm:left-1/2" aria-hidden="true"></div>
                <ol class="space-y-5">
                    @foreach ([
                        ['Frame', 'Define the research problem', 'Translate the prompt into a focused, feasible question with clear boundaries and significance.', 'Research question', 'hover:border-blue-400/40', 'bg-blue-500', 'text-blue-300', 'bg-blue-400/10'],
                        ['Discover', 'Search strategically', 'Develop keywords and use citation trails, subject databases, catalogs, and other appropriate discovery tools.', 'Source set', 'hover:border-emerald-400/40', 'bg-emerald-500', 'text-emerald-300', 'bg-emerald-400/10'],
                        ['Evaluate', 'Read and synthesize evidence', 'Assess source quality, record usable notes, compare findings, and organize relationships among sources.', 'Evidence map', 'hover:border-violet-400/40', 'bg-violet-500', 'text-violet-300', 'bg-violet-400/10'],
                        ['Build', 'Develop the paper', 'Refine the claim, choose an appropriate structure, and connect each section to the central inquiry.', 'Working draft', 'hover:border-fuchsia-400/40', 'bg-fuchsia-500', 'text-fuchsia-300', 'bg-fuchsia-400/10'],
                        ['Verify', 'Revise and document', 'Test the reasoning, acknowledge limits, confirm source attribution, and complete the required format.', 'Final review', 'hover:border-orange-400/40', 'bg-orange-500', 'text-orange-300', 'bg-orange-400/10'],
                    ] as $index => [$stage, $heading, $copy, $output, $hoverClass, $dotClass, $textClass, $tintClass])
                        <li class="group relative ml-14 rounded-2xl border border-white/10 bg-white/[.055] p-5 backdrop-blur transition duration-300 hover:-translate-y-0.5 hover:bg-white/[.09] hover:shadow-xl sm:ml-0 sm:w-[calc(50%-1.75rem)] {{ $index % 2 ? 'sm:ml-auto' : 'sm:mr-auto' }} {{ $hoverClass }}">
                            <span class="absolute -left-[2.65rem] top-5 flex h-8 w-8 items-center justify-center rounded-full border-4 border-slate-950 text-[10px] font-black text-white shadow-lg {{ $dotClass }} {{ $index % 2 ? 'sm:-left-[2.75rem]' : 'sm:-right-[2.75rem] sm:left-auto' }}">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="mb-3 flex items-center justify-between gap-3"><span class="text-[9px] font-black uppercase tracking-[.2em] {{ $textClass }}">{{ $stage }}</span><span class="rounded-full px-2.5 py-1 text-[9px] font-bold text-slate-300 {{ $tintClass }}">{{ $output }}</span></div>
                            <h3 class="font-black text-white">{{ $heading }}</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-400">{{ $copy }}</p>
                        </li>
                    @endforeach
                </ol>
                <div class="relative mt-7 overflow-hidden rounded-2xl border border-orange-300/20 bg-gradient-to-r from-orange-400/10 via-white/[.04] to-blue-400/10 p-5">
                    <div class="absolute -right-5 -top-8 text-7xl font-black text-white/[.035]" aria-hidden="true">?</div>
                    <p class="text-[10px] font-black uppercase tracking-[.2em] text-orange-300">Final research checkpoint</p>
                    <p class="mt-2 pr-8 text-sm font-bold leading-6 text-white">Can a reader trace each major conclusion back to relevant evidence and understand the limits of the claim?</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sources" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="source-check-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-[.9fr_1.1fr] lg:items-center">
                <div>
                    <span class="text-xs font-black uppercase tracking-[.22em] text-emerald-600 dark:text-emerald-400">Source-quality check</span>
                    <h2 id="source-check-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">A scholarly source is useful only when it fits the question</h2>
                    <p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">Peer review can be valuable, but it is not the only test. Depending on the project, primary documents, datasets, government reports, technical standards, court decisions, interviews, or archival material may also be appropriate. Evaluation should consider how the evidence was produced and how it will be used.</p>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    @foreach ([
                        ['Authority', 'Who created the source, and what relevant expertise, institution, or firsthand position do they have?', 'A'],
                        ['Relevance', 'Does the source directly help answer the research question at the right depth and scope?', 'R'],
                        ['Method', 'How were the evidence and conclusions produced, and are the limitations visible?', 'M'],
                        ['Currency', 'Does the field require recent evidence, or is an older foundational or primary source appropriate?', 'C'],
                        ['Corroboration', 'How does the source agree, disagree, or connect with other credible evidence?', 'C'],
                        ['Traceability', 'Can readers locate the original work, data, quotation, or claim through complete citation details?', 'T'],
                    ] as [$heading, $copy, $letter])
                        <article class="rounded-2xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-700 dark:bg-slate-800/60">
                            <div class="flex items-center gap-3"><span class="flex h-9 w-9 items-center justify-center rounded-xl bg-emerald-500 text-xs font-black text-white">{{ $letter }}</span><h3 class="font-black text-slate-900 dark:text-white">{{ $heading }}</h3></div>
                            <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="structure" class="scroll-mt-24 border-y border-slate-200 bg-slate-50 py-20 sm:py-24 dark:border-slate-800 dark:bg-slate-950" aria-labelledby="paper-structure-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-violet-600 dark:text-violet-400">Paper architecture</span>
                <h2 id="paper-structure-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Common research-paper sections and their purpose</h2>
                <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Not every paper uses every section. Follow the assignment, discipline, and required reporting convention.</p>
            </div>
            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Introduction', 'Establish the problem, context, significance, scope, and central question or claim.'],
                    ['Literature review', 'Synthesize relevant scholarship and show where the current inquiry sits within the conversation.'],
                    ['Method or approach', 'Explain how evidence was selected, collected, analyzed, or interpreted so the process is understandable.'],
                    ['Results or findings', 'Present relevant observations or outcomes clearly without overstating what the evidence establishes.'],
                    ['Discussion', 'Interpret the findings, connect them to the question and prior research, and consider alternatives and limits.'],
                    ['Conclusion', 'Answer the central question, explain the contribution, and identify implications or appropriate next steps.'],
                ] as $index => [$heading, $copy])
                    <article class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <span class="absolute right-5 top-3 text-5xl font-black text-slate-100 dark:text-slate-800" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3 class="relative text-xl font-black text-slate-900 dark:text-white">{{ $heading }}</h3>
                        <p class="relative mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>

            <div class="mt-10 grid gap-5 lg:grid-cols-2">
                <div class="rounded-3xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-500/20 dark:bg-blue-500/10">
                    <p class="text-xs font-black uppercase tracking-[.18em] text-blue-700 dark:text-blue-300">Research paper vs. standard essay</p>
                    <p class="mt-3 text-sm leading-7 text-slate-700 dark:text-slate-300">Both need a focused argument and clear structure, but research papers usually require a more explicit search process, deeper engagement with scholarship, and—in empirical work—a transparent method. For a shorter thesis-led assignment, <a href="{{ route('services.essay-writing.index') }}" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 dark:text-blue-300">essay writing help</a> may be the better match.</p>
                </div>
                <div class="rounded-3xl border border-orange-200 bg-orange-50 p-6 dark:border-orange-500/20 dark:bg-orange-500/10">
                    <p class="text-xs font-black uppercase tracking-[.18em] text-orange-700 dark:text-orange-300">Citation styles</p>
                    <p class="mt-3 text-sm leading-7 text-slate-700 dark:text-slate-300">APA, MLA, Chicago, IEEE, Harvard, and other styles differ in how they document authors, dates, titles, locators, notes, and references. The assignment or department guide takes priority, and every in-text citation should connect to a complete reference entry.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="research-faq-heading">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Questions before you begin</span>
                <h2 id="research-faq-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Research paper help FAQs</h2>
            </div>
            <div class="mt-12 space-y-4">
                @foreach ([
                    ['What should I provide with my research paper order?', 'Send the complete prompt, rubric, academic level, deadline, word count, citation style, required readings, approved topic or question, and any draft, notes, feedback, data, or source restrictions.'],
                    ['Can I request help with only one part of the paper?', 'Yes. Support can focus on the research question, search strategy, annotated notes, literature synthesis, outline, a specific section, citations, revision, or final proofreading.'],
                    ['Do all research papers need primary data or statistical analysis?', 'No. Many assignments are based on published scholarship, textual evidence, cases, archives, policies, or other existing materials. Data collection and statistical testing should be used only when the prompt and research design require them.'],
                    ['How are sources selected?', 'Sources are considered for relevance, authority, method, currency, corroboration, and traceability. The appropriate mix depends on the discipline and may include peer-reviewed studies as well as suitable primary or institutional sources.'],
                    ['Can you follow a specific citation style or department template?', 'Yes. Provide the required style edition, department guide, template, or sample. Citations, references, headings, tables, figures, spacing, and front matter can then be checked against those instructions.'],
                    ['Can an existing draft be revised?', 'Yes. Include the draft, rubric, instructor feedback, and the type of review you need. Substantive revision addresses the question, evidence, organization, and reasoning before sentence-level proofreading and formatting.'],
                ] as [$question, $answer])
                    <details class="group rounded-2xl border border-slate-200 bg-slate-50 open:border-blue-200 open:bg-white open:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:open:border-blue-500/30 dark:open:bg-slate-800">
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-5 px-6 py-5 text-left font-black text-slate-900 marker:content-none dark:text-white">
                            {{ $question }}
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-blue-600 transition group-open:rotate-45 dark:bg-slate-700 dark:text-blue-400" aria-hidden="true">+</span>
                        </summary>
                        <p class="px-6 pb-6 text-sm leading-7 text-slate-600 dark:text-slate-300">{{ $answer }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-indigo-700 to-slate-900 py-20 text-white sm:py-24" aria-labelledby="research-cta-heading">
        <div class="absolute -left-20 -top-20 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-16 h-80 w-80 rounded-full bg-orange-400/20 blur-3xl"></div>
        <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
            <span class="text-xs font-black uppercase tracking-[.22em] text-blue-200">Start with the brief</span>
            <h2 id="research-cta-heading" class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">Turn a complex research assignment into a clear plan</h2>
            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-blue-100">Share your question, rubric, sources, notes, data, or current draft. We will help identify the appropriate next step for the assignment.</p>
            <div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row">
                <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center justify-center rounded-2xl bg-white px-8 py-4 text-sm font-black text-blue-700 shadow-xl transition hover:-translate-y-0.5 hover:bg-blue-50">Get Research Paper Help</a>
                <a href="{{ route('services.proofreading-editing.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-white/10 px-8 py-4 text-sm font-black text-white transition hover:bg-white/15">I already have a draft</a>
            </div>
        </div>
    </section>
</div>
@endsection
