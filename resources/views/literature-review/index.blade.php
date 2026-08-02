@extends('layouts.app')

@section('title', 'Literature Review Help for College Students | Assignment Help USA')
@section('description', 'Get literature review help with research questions, source searches, synthesis matrices, thematic organization, critical analysis, gaps, and citations.')
@section('canonical', url('/literature-review-help'))
@section('og_image', asset('images/literature-review/literature-review-help-og.jpg'))
@section('twitter_image', asset('images/literature-review/literature-review-help-og.jpg'))
@section('primary_image', asset('images/literature-review/literature-review-synthesis-board.jpg'))
@section('date_modified', '2026-08-03')
@section('schema_main_entity', url('/literature-review-help') . '#service')

@push('structured-data')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => url('/literature-review-help') . '#service',
        'name' => 'Literature Review Help',
        'serviceType' => 'Academic literature search, synthesis, organization, citation, and editing support',
        'url' => url('/literature-review-help'),
        'description' => 'Literature review help for US college students, including question development, search planning, source evaluation, synthesis matrices, thematic organization, critical comparison, research gaps, citations, and revision.',
        'image' => asset('images/literature-review/literature-review-synthesis-board.jpg'),
        'provider' => [
            '@type' => 'Organization',
            '@id' => rtrim(config('app.url') ?: url('/'), '/') . '#organization',
            'name' => 'Assignment Help USA',
        ],
        'areaServed' => ['@type' => 'Country', 'name' => 'United States'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endpush

@section('content')
<div class="min-h-screen bg-slate-50 text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">
    <x-creative-hero
        :service="$service"
        title="Literature Review Help for <span class='text-[#f16700]'>Critical Source Synthesis</span>"
        subtitle="Build a literature review around a focused question, transparent search plan, relevant scholarship, meaningful themes, critical comparison, and accurate citations. Support is matched to your discipline, review type, and assignment requirements."
        :stats="[
            ['Question-led', 'Review scope'],
            ['Source-aware', 'Critical reading'],
            ['Theme-driven', 'Synthesis'],
        ]"
        :features="[
            'Review type matched to the assignment',
            'Source-search and selection guidance',
            'Thematic synthesis instead of summary lists',
            'Citation, revision, and formatting support',
        ]"
        :breadcrumbs="[
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Literature Review Help', 'url' => ''],
        ]"
    />

    <section class="relative z-10 border-y border-slate-200/80 bg-white/95 py-5 backdrop-blur dark:border-slate-800 dark:bg-slate-900/95" aria-label="Literature review service features">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-8 gap-y-4 px-4 sm:px-6 lg:px-8">
            @foreach ([
                ['Focused scope and question', 'blue'],
                ['Search and source strategy', 'emerald'],
                ['Synthesis matrix and themes', 'violet'],
                ['Critical analysis and citations', 'orange'],
            ] as [$label, $color])
                @php
                    $iconClass = match ($color) {
                        'blue' => 'bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400',
                        'emerald' => 'bg-emerald-50 text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400',
                        'violet' => 'bg-violet-50 text-violet-600 dark:bg-violet-500/10 dark:text-violet-400',
                        default => 'bg-orange-50 text-orange-600 dark:bg-orange-500/10 dark:text-orange-400',
                    };
                @endphp
                <div class="flex items-center gap-2.5 text-sm font-bold text-slate-700 dark:text-slate-200"><span class="flex h-8 w-8 items-center justify-center rounded-lg {{ $iconClass }}"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg></span>{{ $label }}</div>
            @endforeach
        </div>
    </section>

    <div class="border-b border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900">
        <div class="mx-auto flex max-w-7xl flex-col gap-4 px-4 py-5 text-sm sm:px-6 md:flex-row md:items-center md:justify-between lg:px-8">
            <p class="text-slate-600 dark:text-slate-400"><span class="font-bold text-slate-900 dark:text-white">Prepared by the Assignment Help USA Editorial Team</span><span class="mx-2 text-slate-300 dark:text-slate-700" aria-hidden="true">|</span>Updated <time datetime="2026-08-03">August 3, 2026</time></p>
            <a href="{{ route('about') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">About our academic support team <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>

    <nav class="border-b border-slate-200 bg-slate-50 dark:border-slate-800 dark:bg-slate-950" aria-label="On this page">
        <div class="mx-auto flex max-w-7xl gap-2 overflow-x-auto px-4 py-4 sm:px-6 lg:px-8">
            <span class="shrink-0 px-2 py-2 text-xs font-black uppercase tracking-[.18em] text-slate-500">On this page</span>
            @foreach ([['Overview', '#overview'], ['Support', '#support'], ['Review types', '#review-types'], ['Synthesis process', '#process'], ['Summary vs synthesis', '#synthesis'], ['Organization', '#organization'], ['PRISMA', '#systematic'], ['FAQs', '#faqs']] as [$label, $anchor])
                <a href="{{ $anchor }}" class="shrink-0 rounded-lg px-3 py-2 text-xs font-bold text-slate-600 transition hover:bg-white hover:text-blue-600 hover:shadow-sm dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-blue-400">{{ $label }}</a>
            @endforeach
        </div>
    </nav>

    <section id="overview" class="relative scroll-mt-24 overflow-hidden bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="review-overview-heading">
        <div class="absolute -left-28 top-10 h-72 w-72 rounded-full bg-blue-500/5 blur-3xl"></div><div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/5 blur-3xl"></div>
        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-[1.02fr_.98fr] lg:px-8">
            <div>
                <span class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-2 text-[11px] font-black uppercase tracking-[.18em] text-orange-700 dark:border-orange-500/20 dark:bg-orange-500/10 dark:text-orange-300"><span class="h-2 w-2 rounded-full bg-[#f16700]"></span>Search. Compare. Synthesize.</span>
                <h2 id="review-overview-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">Literature review help that maps <span class="text-blue-600 dark:text-blue-400">the scholarly conversation</span></h2>
                <p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">A literature review explains how relevant scholarship relates to a focused topic, problem, or question. It compares findings, concepts, methods, and interpretations; evaluates strengths and limitations; and shows what is established, contested, developing, or still uncertain.</p>
                <p class="mt-4 text-base leading-8 text-slate-600 dark:text-slate-300">It is not a sequence of article summaries. Sources should interact within an organizing idea such as a theme, debate, method, theory, or historical development. The appropriate search depth and reporting method depend on whether the assignment calls for a course review, dissertation chapter, scoping review, systematic review, or another form of evidence synthesis.</p>
                <div class="mt-8 grid gap-3 sm:grid-cols-2">
                    @foreach (['A question that defines the scope', 'Transparent inclusion decisions', 'Source-to-source comparison', 'A gap supported by the reviewed evidence'] as $point)
                        <div class="flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-bold text-slate-700 dark:border-slate-700 dark:bg-slate-800/70 dark:text-slate-200"><span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-white"><svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>{{ $point }}</div>
                    @endforeach
                </div>
                <div class="mt-9 flex flex-col gap-3 sm:flex-row"><a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-blue-600 px-7 py-4 text-sm font-black text-white shadow-[0_12px_30px_-12px_rgba(37,99,235,.65)] transition hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl">Get Literature Review Help <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg></a><a href="{{ route('how-it-works') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-7 py-4 text-sm font-black text-slate-700 transition hover:border-blue-300 hover:text-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">How It Works</a></div>
            </div>

            <figure class="group relative">
                <div class="absolute -inset-3 rounded-[2rem] bg-gradient-to-br from-blue-600/20 via-transparent to-orange-500/20 blur-xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-white/70 bg-white p-2 shadow-2xl dark:border-slate-700 dark:bg-slate-800">
                    <img src="{{ asset('images/literature-review/literature-review-synthesis-board.jpg') }}" srcset="{{ asset('images/literature-review/literature-review-synthesis-board-768.jpg') }} 768w, {{ asset('images/literature-review/literature-review-synthesis-board-1200.jpg') }} 1200w, {{ asset('images/literature-review/literature-review-synthesis-board.jpg') }} 1536w" sizes="(max-width: 1023px) calc(100vw - 2rem), 48vw" alt="Evidence synthesis board connecting academic studies across themes, debates, methods, and research gaps" width="1536" height="1024" class="h-[360px] w-full rounded-[1.55rem] object-cover object-center transition duration-700 group-hover:scale-[1.02] sm:h-[470px]" loading="lazy" decoding="async">
                </div>
                <figcaption class="absolute -bottom-5 left-5 right-5 flex items-center gap-3 rounded-2xl border border-slate-200/80 bg-white/95 p-4 shadow-xl backdrop-blur sm:left-8 sm:right-auto dark:border-slate-700 dark:bg-slate-900/95"><span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-500 text-white shadow-lg shadow-orange-500/25"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"/></svg></span><span><strong class="block text-sm text-slate-900 dark:text-white">Sources become a pattern</strong><span class="text-xs text-slate-500 dark:text-slate-400">Themes, debates, methods, limitations, gaps</span></span></figcaption>
            </figure>
        </div>
    </section>

    <section id="support" class="scroll-mt-24 bg-slate-50 py-20 sm:py-24 dark:bg-slate-950" aria-labelledby="review-support-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center"><span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Focused academic support</span><h2 id="review-support-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">What our literature review service can help with</h2><p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Start with a broad topic, a research question, a source folder, a synthesis matrix, or an existing draft.</p></div>
            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['01', 'Scope and review question', 'Define the topic boundaries, purpose, audience, timeframe, concepts, populations, contexts, and appropriate review type.', 'bg-blue-500'],
                    ['02', 'Search strategy', 'Develop concepts, synonyms, subject terms, Boolean combinations, discovery routes, date limits, and source-selection criteria.', 'bg-emerald-500'],
                    ['03', 'Critical source reading', 'Record each source’s question, theory, method, sample or evidence, findings, limitations, relevance, and citation details.', 'bg-violet-500'],
                    ['04', 'Synthesis matrix', 'Compare sources across shared dimensions so agreements, contradictions, methods, trends, and missing evidence become visible.', 'bg-orange-500'],
                    ['05', 'Organization and drafting', 'Build sections around ideas and relationships, using multiple sources within paragraphs rather than one source at a time.', 'bg-cyan-500'],
                    ['06', 'Revision and citations', 'Review balance, claim strength, transitions, gap logic, source attribution, references, and alignment with the assignment.', 'bg-rose-500'],
                ] as [$number, $heading, $copy, $badgeClass])
                    <article class="rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900"><span class="flex h-12 w-12 items-center justify-center rounded-2xl text-sm font-black text-white shadow-lg {{ $badgeClass }}">{{ $number }}</span><h3 class="mt-6 text-xl font-black text-slate-900 dark:text-white">{{ $heading }}</h3><p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">{{ $copy }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="review-types" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="review-types-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end"><div class="max-w-3xl"><span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">Choose by purpose</span><h2 id="review-types-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Common literature review types are not interchangeable</h2><p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Use the terminology in your assignment or discipline. If the review type is not specified, clarify the expected purpose and method before searching.</p></div><a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-700 dark:text-blue-400">Discuss your review <span aria-hidden="true">&rarr;</span></a></div>
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Narrative or traditional review', 'Provides a critical overview of a topic or debate using a reasoned, discipline-appropriate selection and synthesis of scholarship.'],
                    ['Dissertation or thesis chapter', 'Situates a research project, establishes conceptual and methodological context, and shows how the study relates to prior work.'],
                    ['Scoping review', 'Maps the extent, characteristics, concepts, or gaps in a broad body of evidence using a transparent review method.'],
                    ['Systematic review', 'Uses a pre-specified question, eligibility criteria, reproducible search, screening, appraisal, extraction, and synthesis process.'],
                    ['Theoretical or conceptual review', 'Compares theories, models, definitions, or conceptual relationships and develops a framework for understanding the topic.'],
                    ['Integrative review', 'Combines and critically examines diverse forms of research to generate a broader understanding or new conceptual perspective.'],
                ] as [$heading, $copy])
                    <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6 transition hover:border-blue-200 hover:bg-white hover:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:hover:border-blue-500/30 dark:hover:bg-slate-800"><h3 class="text-lg font-black text-slate-900 dark:text-white">{{ $heading }}</h3><p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="process" class="relative scroll-mt-24 overflow-hidden bg-slate-900 py-20 sm:py-24" aria-labelledby="synthesis-process-heading">
        <div class="absolute inset-0 opacity-[.035] [background-image:radial-gradient(circle_at_1px_1px,#fff_1px,transparent_0)] [background-size:28px_28px]"></div><div class="absolute -left-24 top-0 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div><div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/15 blur-[100px]"></div><div class="absolute left-1/2 top-8 -translate-x-1/2 select-none text-[6rem] font-black tracking-tighter text-white/[.018] sm:text-[10rem]" aria-hidden="true">SYNTHESIS</div>
        <div class="relative mx-auto grid max-w-7xl items-start gap-14 px-4 sm:px-6 lg:grid-cols-[.82fr_1.18fr] lg:px-8">
            <div class="lg:sticky lg:top-28"><span class="inline-flex rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-[11px] font-black uppercase tracking-[.2em] text-blue-300">Synthesis blueprint</span><h2 id="synthesis-process-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-white sm:text-5xl">From scattered articles to a structured account of the field</h2><p class="mt-6 text-base leading-8 text-slate-300">The process is iterative. Reading can reshape the question, comparison can expose missing search terms, and drafting can reveal that a claimed gap is not yet supported.</p><div class="mt-6 flex gap-3 rounded-2xl border border-emerald-400/20 bg-emerald-400/[.07] p-4"><span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-emerald-400/15 text-emerald-300" aria-hidden="true">&#8634;</span><div><p class="text-sm font-black text-emerald-200">A gap is a conclusion, not a starting slogan</p><p class="mt-1 text-sm leading-6 text-slate-400">It should follow from the scope, search, comparison, and limitations of the reviewed evidence.</p></div></div><div class="mt-8 rounded-2xl border border-white/10 bg-white/[.04] p-5"><p class="text-sm font-bold text-white">Need a complete study rather than a review of studies?</p><p class="mt-2 text-sm leading-6 text-slate-400">Research papers may include original analysis, methods, results, and discussion beyond the literature review.</p><a href="{{ route('services.research-paper.index') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-black text-blue-300 transition hover:text-white">Explore research paper help <span aria-hidden="true">&rarr;</span></a></div></div>
            <div class="relative rounded-[2rem] border border-white/10 bg-slate-950/45 p-4 shadow-2xl shadow-blue-950/30 backdrop-blur-sm sm:p-7">
                <div class="mb-7 flex items-center justify-between gap-4 border-b border-white/10 pb-5"><div class="flex items-center gap-2" aria-hidden="true"><span class="h-2.5 w-2.5 rounded-full bg-red-400/80"></span><span class="h-2.5 w-2.5 rounded-full bg-amber-400/80"></span><span class="h-2.5 w-2.5 rounded-full bg-emerald-400/80"></span></div><p class="font-mono text-[10px] font-bold uppercase tracking-[.16em] text-slate-500">synthesis-matrix / working file</p></div>
                <div class="absolute left-10 top-28 h-[calc(100%-13rem)] w-px bg-gradient-to-b from-blue-500 via-violet-500 to-orange-500 sm:left-1/2" aria-hidden="true"></div>
                <ol class="space-y-5">
                    @foreach ([
                        ['Frame', 'Define the review purpose', 'Translate the assignment into a focused question, boundaries, and review type.', 'Scope statement', 'hover:border-blue-400/40', 'bg-blue-500', 'text-blue-300', 'bg-blue-400/10'],
                        ['Find', 'Search and document', 'Combine concepts and synonyms, record search decisions, and follow relevant citation trails.', 'Search record', 'hover:border-emerald-400/40', 'bg-emerald-500', 'text-emerald-300', 'bg-emerald-400/10'],
                        ['Extract', 'Build the evidence matrix', 'Capture comparable details about questions, theories, methods, findings, limits, and relevance.', 'Source matrix', 'hover:border-violet-400/40', 'bg-violet-500', 'text-violet-300', 'bg-violet-400/10'],
                        ['Connect', 'Identify relationships', 'Group agreements, tensions, patterns, changes, methodological differences, and unresolved issues.', 'Synthesis map', 'hover:border-fuchsia-400/40', 'bg-fuchsia-500', 'text-fuchsia-300', 'bg-fuchsia-400/10'],
                        ['Explain', 'Draft and verify the review', 'Build idea-led sections, qualify claims, test the gap, cite accurately, and revise for balance.', 'Critical review', 'hover:border-orange-400/40', 'bg-orange-500', 'text-orange-300', 'bg-orange-400/10'],
                    ] as $index => [$stage, $heading, $copy, $output, $hoverClass, $dotClass, $textClass, $tintClass])
                        <li class="group relative ml-14 rounded-2xl border border-white/10 bg-white/[.055] p-5 backdrop-blur transition duration-300 hover:-translate-y-0.5 hover:bg-white/[.09] hover:shadow-xl sm:ml-0 sm:w-[calc(50%-1.75rem)] {{ $index % 2 ? 'sm:ml-auto' : 'sm:mr-auto' }} {{ $hoverClass }}"><span class="absolute -left-[2.65rem] top-5 flex h-8 w-8 items-center justify-center rounded-full border-4 border-slate-950 text-[10px] font-black text-white shadow-lg {{ $dotClass }} {{ $index % 2 ? 'sm:-left-[2.75rem]' : 'sm:-right-[2.75rem] sm:left-auto' }}">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span><div class="mb-3 flex items-center justify-between gap-3"><span class="text-[9px] font-black uppercase tracking-[.2em] {{ $textClass }}">{{ $stage }}</span><span class="rounded-full px-2.5 py-1 text-[9px] font-bold text-slate-300 {{ $tintClass }}">{{ $output }}</span></div><h3 class="font-black text-white">{{ $heading }}</h3><p class="mt-2 text-sm leading-6 text-slate-400">{{ $copy }}</p></li>
                    @endforeach
                </ol>
                <div class="relative mt-7 overflow-hidden rounded-2xl border border-orange-300/20 bg-gradient-to-r from-orange-400/10 via-white/[.04] to-blue-400/10 p-5"><div class="absolute -right-5 -top-8 text-7xl font-black text-white/[.035]" aria-hidden="true">≠</div><p class="text-[10px] font-black uppercase tracking-[.2em] text-orange-300">Final synthesis checkpoint</p><p class="mt-2 pr-8 text-sm font-bold leading-6 text-white">Does each section compare multiple sources around an idea instead of moving through the bibliography one author at a time?</p></div>
            </div>
        </div>
    </section>

    <section id="synthesis" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="summary-synthesis-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center"><span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">The central writing skill</span><h2 id="summary-synthesis-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Summary reports sources; synthesis explains relationships</h2></div>
            <div class="mt-12 grid overflow-hidden rounded-[2rem] border border-slate-200 shadow-xl lg:grid-cols-2 dark:border-slate-700">
                <div class="bg-rose-50 p-7 sm:p-9 dark:bg-rose-500/10"><span class="text-[10px] font-black uppercase tracking-[.2em] text-rose-700 dark:text-rose-300">Source-by-source summary</span><h3 class="mt-4 text-xl font-black text-slate-900 dark:text-white">One article, then the next</h3><div class="mt-6 space-y-3">@foreach (['Author A found…', 'Author B argued…', 'Author C examined…'] as $line)<p class="rounded-xl border border-rose-200 bg-white/80 px-4 py-3 text-sm text-slate-600 dark:border-rose-500/20 dark:bg-slate-900/50 dark:text-slate-300">{{ $line }}</p>@endforeach</div><p class="mt-5 text-sm leading-6 text-rose-800 dark:text-rose-200">The reader receives information but must discover the pattern alone.</p></div>
                <div class="bg-emerald-50 p-7 sm:p-9 dark:bg-emerald-500/10"><span class="text-[10px] font-black uppercase tracking-[.2em] text-emerald-700 dark:text-emerald-300">Source synthesis</span><h3 class="mt-4 text-xl font-black text-slate-900 dark:text-white">One idea, several sources in relation</h3><div class="mt-6 rounded-2xl border border-emerald-200 bg-white/85 p-5 text-sm leading-7 text-slate-700 dark:border-emerald-500/20 dark:bg-slate-900/50 dark:text-slate-200">Across the studies, participation improved when support was sustained, although the reported effect varied with program length, measurement method, and participant context.</div><div class="mt-4 flex flex-wrap gap-2">@foreach (['Agreement', 'Difference', 'Method', 'Context', 'Limitation'] as $tag)<span class="rounded-full bg-emerald-100 px-3 py-1 text-[10px] font-bold text-emerald-700 dark:bg-emerald-500/15 dark:text-emerald-300">{{ $tag }}</span>@endforeach</div></div>
            </div>
        </div>
    </section>

    <section id="organization" class="scroll-mt-24 border-y border-slate-200 bg-slate-50 py-20 sm:py-24 dark:border-slate-800 dark:bg-slate-950" aria-labelledby="review-organization-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center"><span class="text-xs font-black uppercase tracking-[.22em] text-violet-600 dark:text-violet-400">Structure follows purpose</span><h2 id="review-organization-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Five useful ways to organize a literature review</h2><p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Long reviews often combine patterns. Use headings that communicate the logic of the review rather than generic labels such as “Source One.”</p></div>
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ([['Thematic', 'Group evidence around recurring topics, factors, outcomes, or problems.'], ['Debate', 'Organize competing positions, explanations, interpretations, or schools of thought.'], ['Methodological', 'Compare research designs, measures, samples, analytical methods, or evidence types.'], ['Chronological', 'Trace how concepts, findings, or approaches developed—without merely listing dates.'], ['Theoretical', 'Compare frameworks, definitions, assumptions, applications, and explanatory limits.']] as $index => [$heading, $copy])
                    <article class="relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900"><span class="absolute right-4 top-2 text-5xl font-black text-slate-100 dark:text-slate-800" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span><h3 class="relative text-lg font-black text-slate-900 dark:text-white">{{ $heading }}</h3><p class="relative mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">{{ $copy }}</p></article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="systematic" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="systematic-heading">
        <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-[.82fr_1.18fr] lg:items-center lg:px-8">
            <div><span class="text-xs font-black uppercase tracking-[.22em] text-emerald-600 dark:text-emerald-400">Systematic-review reality check</span><h2 id="systematic-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">PRISMA improves reporting; it does not replace the review method</h2><p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">PRISMA 2020 helps authors report why a systematic review was conducted, which methods were used, and what was found. A credible systematic review still needs an appropriate protocol, pre-specified eligibility criteria, a reproducible search, transparent screening, suitable appraisal, structured extraction, and a justified synthesis method.</p><p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">Do not add a PRISMA flow diagram to a traditional course literature review simply to make it look systematic. Follow the review type, disciplinary method, and instructor requirements.</p></div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([['Protocol first', 'Plan the question, eligibility criteria, search, screening, extraction, appraisal, and synthesis before results influence decisions.'], ['Reproducible search', 'Record databases or sources, dates, search strings, limits, deduplication, and supplementary search methods.'], ['Transparent selection', 'Document how records were screened, why studies were excluded, and how disagreements or duplicates were handled.'], ['Appropriate synthesis', 'Choose narrative, thematic, quantitative, qualitative, or other methods that fit the question and included evidence.']] as [$heading, $copy])
                    <article class="rounded-2xl border border-emerald-200 bg-emerald-50 p-5 dark:border-emerald-500/20 dark:bg-emerald-500/10"><div class="flex items-center gap-3"><span class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500 text-white"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span><h3 class="font-black text-slate-900 dark:text-white">{{ $heading }}</h3></div><p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p></article>
                @endforeach
            </div>
            <aside class="lg:col-span-2 rounded-2xl border border-blue-200 bg-blue-50 p-5 text-sm leading-7 text-slate-700 dark:border-blue-500/20 dark:bg-blue-500/10 dark:text-slate-300" aria-label="Literature review guidance sources"><strong class="text-slate-900 dark:text-white">Research basis:</strong> This guide draws on literature-review guidance from the <a href="https://writingcenter.gmu.edu/writing-resources/research-based-writing/writing-a-literature-review" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 dark:text-blue-300">George Mason University Writing Center</a>, systematic-review guidance from the <a href="https://www.prisma-statement.org/" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 dark:text-blue-300">PRISMA Statement</a>, and search and selection guidance from the <a href="https://training.cochrane.org/handbook/current/chapter-04" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 dark:text-blue-300">Cochrane Handbook</a>. Your assignment and disciplinary guidance take priority.</aside>
        </div>
    </section>

    <section class="border-y border-slate-200 bg-slate-50 py-16 dark:border-slate-800 dark:bg-slate-950" aria-labelledby="related-support-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"><h2 id="related-support-heading" class="text-center text-2xl font-black text-slate-900 dark:text-white">Choose the service that matches your current stage</h2><div class="mt-8 grid gap-4 md:grid-cols-4">@foreach ([[route('services.research-paper.index'), 'Research paper help', 'For a source-led paper that may also include methods, analysis, findings, and discussion.'], [route('services.thesis.index'), 'Thesis help', 'For a master’s or honors research project with a defined scope and program-specific requirements.'], [route('services.dissertation.index'), 'Dissertation help', 'For a doctoral project managed across proposal, research, committee review, and defense milestones.'], [route('services.proofreading-editing.index'), 'Proofreading and editing help', 'For an existing review that needs structural revision, clarity, citations, or a final proof.']] as [$url, $heading, $copy])<a href="{{ $url }}" class="group rounded-2xl border border-slate-200 bg-white p-5 transition hover:-translate-y-0.5 hover:border-blue-200 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900 dark:hover:border-blue-500/30"><strong class="text-blue-600 group-hover:text-blue-700 dark:text-blue-400">{{ $heading }} <span aria-hidden="true">&rarr;</span></strong><span class="mt-2 block text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</span></a>@endforeach</div></div>
    </section>

    <section id="faqs" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="review-faq-heading">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center"><span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Questions before you begin</span><h2 id="review-faq-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Literature review help FAQs</h2></div>
            <div class="mt-12 space-y-4">
                @foreach ([
                    ['What is the difference between a literature review and an annotated bibliography?', 'An annotated bibliography normally presents sources as separate entries with a citation and note. A literature review organizes multiple sources in relation to a question and synthesizes their themes, debates, methods, findings, and limitations.'],
                    ['How many sources should a literature review include?', 'There is no universal number. The appropriate source set depends on the question, review type, field, academic level, timeframe, word count, and assignment requirements. Relevance and adequate coverage matter more than reaching an arbitrary count.'],
                    ['Does every literature review need recent peer-reviewed journal articles?', 'No. Recent peer-reviewed studies may be important, but seminal works, books, primary materials, policy documents, technical reports, or other evidence may also be necessary. Source choices should fit the field and review question.'],
                    ['Can you help with a systematic or scoping review?', 'Support can address question framing, protocol planning, search documentation, eligibility criteria, screening records, extraction tables, synthesis organization, reporting, and editing. The exact method and reporting guideline must match the review type and discipline.'],
                    ['How is a research gap identified?', 'A defensible gap emerges from comparing the reviewed evidence. It may involve an unresolved question, conflicting findings, an underexamined context or population, a methodological limitation, a conceptual problem, or evidence that has not kept pace with change.'],
                    ['Can an existing literature review be revised?', 'Yes. Provide the review, assignment, rubric, source list or library, supervisor feedback, required style, and the areas causing concern. Review can focus on scope, synthesis, organization, critical analysis, gap logic, citations, or proofreading.'],
                ] as [$question, $answer])
                    <details class="group rounded-2xl border border-slate-200 bg-slate-50 open:border-blue-200 open:bg-white open:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:open:border-blue-500/30 dark:open:bg-slate-800"><summary class="flex cursor-pointer list-none items-center justify-between gap-5 px-6 py-5 text-left font-black text-slate-900 marker:content-none dark:text-white">{{ $question }}<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-blue-600 transition group-open:rotate-45 dark:bg-slate-700 dark:text-blue-400" aria-hidden="true">+</span></summary><p class="px-6 pb-6 text-sm leading-7 text-slate-600 dark:text-slate-300">{{ $answer }}</p></details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-indigo-700 to-slate-900 py-20 text-white sm:py-24" aria-labelledby="review-cta-heading">
        <div class="absolute -left-20 -top-20 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div><div class="absolute -bottom-24 -right-16 h-80 w-80 rounded-full bg-orange-400/20 blur-3xl"></div>
        <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8"><span class="text-xs font-black uppercase tracking-[.22em] text-blue-200">Start with the review question</span><h2 id="review-cta-heading" class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">Turn a source collection into a critical synthesis</h2><p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-blue-100">Share the assignment, question, review type, rubric, search notes, source library, matrix, feedback, or current draft. We will help identify the appropriate next step.</p><div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row"><a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center justify-center rounded-2xl bg-white px-8 py-4 text-sm font-black text-blue-700 shadow-xl transition hover:-translate-y-0.5 hover:bg-blue-50">Get Literature Review Help</a><a href="{{ route('services.proofreading-editing.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-white/10 px-8 py-4 text-sm font-black text-white transition hover:bg-white/15">I already have a draft</a></div></div>
    </section>
</div>
@endsection
