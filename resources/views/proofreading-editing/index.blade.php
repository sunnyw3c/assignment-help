@extends('layouts.app')

@section('title', 'Proofreading and Editing Help for Students | Assignment Help USA')
@section('description', 'Get academic proofreading and editing help with structure, clarity, grammar, citations, formatting, tracked revisions, and college submission requirements.')
@section('canonical', url('/proofreading-editing-help'))
@section('og_image', asset('images/proofreading-editing/proofreading-editing-help-og.jpg'))
@section('twitter_image', asset('images/proofreading-editing/proofreading-editing-help-og.jpg'))
@section('primary_image', asset('images/proofreading-editing/proofreading-editing-help-manuscript.jpg'))
@section('date_modified', '2026-08-03')
@section('schema_main_entity', url('/proofreading-editing-help') . '#service')

@push('structured-data')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => url('/proofreading-editing-help') . '#service',
        'name' => 'Proofreading and Editing Help',
        'serviceType' => 'Academic proofreading, substantive editing, copyediting, citation, and formatting support',
        'url' => url('/proofreading-editing-help'),
        'description' => 'Proofreading and editing help for US college students, including document-level revision, paragraph organization, sentence clarity, grammar, punctuation, citations, references, and formatting.',
        'image' => asset('images/proofreading-editing/proofreading-editing-help-manuscript.jpg'),
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
        title="Proofreading and Editing Help for <span class='text-[#f16700]'>Clear, Submission-Ready Writing</span>"
        subtitle="Get focused feedback on structure, reasoning, paragraph flow, sentence clarity, grammar, citations, and formatting. Choose the depth of review that fits your draft and assignment requirements."
        :stats="[
            ['Big picture', 'Structural review'],
            ['Sentence level', 'Clarity and style'],
            ['Final pass', 'Proofreading'],
        ]"
        :features="[
            'Editing scope matched to your draft',
            'Meaning and academic voice preserved',
            'Citation and formatting review available',
            'Secure and confidential ordering',
        ]"
        :breadcrumbs="[
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Proofreading and Editing Help', 'url' => ''],
        ]"
    />

    <section class="relative z-10 border-y border-slate-200/80 bg-white/95 py-5 backdrop-blur dark:border-slate-800 dark:bg-slate-900/95" aria-label="Proofreading and editing service features">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-8 gap-y-4 px-4 sm:px-6 lg:px-8">
            @foreach ([
                ['Structure and coherence', 'blue'],
                ['Clarity and academic tone', 'emerald'],
                ['Grammar and punctuation', 'violet'],
                ['Citations and formatting', 'orange'],
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
                ['Editing levels', '#editing-levels'],
                ['Example', '#example'],
                ['Editing process', '#process'],
                ['Document types', '#documents'],
                ['Final checklist', '#checklist'],
                ['FAQs', '#faqs'],
            ] as [$label, $anchor])
                <a href="{{ $anchor }}" class="shrink-0 rounded-lg px-3 py-2 text-xs font-bold text-slate-600 transition hover:bg-white hover:text-blue-600 hover:shadow-sm dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-blue-400">{{ $label }}</a>
            @endforeach
        </div>
    </nav>

    <section id="overview" class="relative scroll-mt-24 overflow-hidden bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="editing-overview-heading">
        <div class="absolute -left-28 top-10 h-72 w-72 rounded-full bg-blue-500/5 blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/5 blur-3xl"></div>
        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-[1.02fr_.98fr] lg:px-8">
            <div>
                <span class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-2 text-[11px] font-black uppercase tracking-[.18em] text-orange-700 dark:border-orange-500/20 dark:bg-orange-500/10 dark:text-orange-300">
                    <span class="h-2 w-2 rounded-full bg-[#f16700]"></span>
                    Review. Refine. Verify.
                </span>
                <h2 id="editing-overview-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">
                    Academic editing that starts at <span class="text-blue-600 dark:text-blue-400">the right level</span>
                </h2>
                <p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">Proofreading is the final check for surface errors. Editing can go further by addressing organization, paragraph purpose, sentence clarity, tone, consistency, and source documentation. Treating those services as identical can waste time: correcting commas will not repair a missing argument, and restructuring a paper during the final proof can introduce new errors.</p>
                <p class="mt-4 text-base leading-8 text-slate-600 dark:text-slate-300">Send the assignment brief, rubric, citation requirements, instructor feedback, and editable draft when available. The requested scope should be agreed before work begins, especially when you want suggestions rather than direct rewriting or need your wording and disciplinary terminology preserved.</p>

                <div class="mt-8 grid gap-3 sm:grid-cols-2">
                    @foreach (['Argument and organization review', 'Paragraph and transition review', 'Sentence-level clarity and consistency', 'Grammar, citations, and final formatting'] as $point)
                        <div class="flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-bold text-slate-700 dark:border-slate-700 dark:bg-slate-800/70 dark:text-slate-200">
                            <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-white"><svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span>
                            {{ $point }}
                        </div>
                    @endforeach
                </div>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="group inline-flex items-center justify-center gap-3 rounded-2xl bg-blue-600 px-7 py-4 text-sm font-black text-white shadow-[0_12px_30px_-12px_rgba(37,99,235,.65)] transition hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl">Get Editing Help <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg></a>
                    <a href="{{ route('how-it-works') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-7 py-4 text-sm font-black text-slate-700 transition hover:border-blue-300 hover:text-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">How It Works</a>
                </div>
            </div>

            <figure class="group relative">
                <div class="absolute -inset-3 rounded-[2rem] bg-gradient-to-br from-blue-600/20 via-transparent to-orange-500/20 blur-xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-white/70 bg-white p-2 shadow-2xl dark:border-slate-700 dark:bg-slate-800">
                    <img src="{{ asset('images/proofreading-editing/proofreading-editing-help-manuscript.jpg') }}"
                         srcset="{{ asset('images/proofreading-editing/proofreading-editing-help-manuscript-768.jpg') }} 768w, {{ asset('images/proofreading-editing/proofreading-editing-help-manuscript-1200.jpg') }} 1200w, {{ asset('images/proofreading-editing/proofreading-editing-help-manuscript.jpg') }} 1536w"
                         sizes="(max-width: 1023px) calc(100vw - 2rem), 48vw"
                         alt="Close-up of an academic manuscript being proofread with precise margin notes and revision marks"
                         width="1536" height="1024"
                         class="h-[360px] w-full rounded-[1.55rem] object-cover object-center transition duration-700 group-hover:scale-[1.02] sm:h-[470px]"
                         loading="lazy" decoding="async">
                </div>
                <figcaption class="absolute -bottom-5 left-5 right-5 flex items-center gap-3 rounded-2xl border border-slate-200/80 bg-white/95 p-4 shadow-xl backdrop-blur sm:left-8 sm:right-auto dark:border-slate-700 dark:bg-slate-900/95">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-500 text-white shadow-lg shadow-orange-500/25"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg></span>
                    <span><strong class="block text-sm text-slate-900 dark:text-white">Edit from large to small</strong><span class="text-xs text-slate-500 dark:text-slate-400">Structure before sentences; sentences before typos</span></span>
                </figcaption>
            </figure>
        </div>
    </section>

    <section id="editing-levels" class="scroll-mt-24 bg-slate-50 py-20 sm:py-24 dark:bg-slate-950" aria-labelledby="editing-levels-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Choose the right review</span>
                <h2 id="editing-levels-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Four levels of academic editing</h2>
                <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">A draft may need one level or a combined review. The closer the deadline, the more important it is to define the scope clearly.</p>
            </div>
            <div class="mt-12 grid gap-5 lg:grid-cols-4">
                @foreach ([
                    ['01', 'Substantive editing', 'Whole document', 'Reviews purpose, central claim, evidence, organization, section balance, omissions, and reader expectations.', 'border-blue-200 bg-blue-50 dark:border-blue-500/20 dark:bg-blue-500/10', 'text-blue-700 dark:text-blue-300'],
                    ['02', 'Line editing', 'Paragraph and sentence', 'Improves flow, emphasis, transitions, tone, precision, concision, and readability while protecting the intended meaning.', 'border-emerald-200 bg-emerald-50 dark:border-emerald-500/20 dark:bg-emerald-500/10', 'text-emerald-700 dark:text-emerald-300'],
                    ['03', 'Copyediting', 'Consistency and correctness', 'Checks grammar, usage, punctuation, terminology, capitalization, numbers, abbreviations, and style consistency.', 'border-violet-200 bg-violet-50 dark:border-violet-500/20 dark:bg-violet-500/10', 'text-violet-700 dark:text-violet-300'],
                    ['04', 'Proofreading', 'Final formatted copy', 'Finds remaining typographical, spacing, punctuation, cross-reference, page-layout, and formatting errors before submission.', 'border-orange-200 bg-orange-50 dark:border-orange-500/20 dark:bg-orange-500/10', 'text-orange-700 dark:text-orange-300'],
                ] as [$number, $heading, $scope, $copy, $cardClass, $textClass])
                    <article class="rounded-3xl border p-6 transition duration-300 hover:-translate-y-1 hover:shadow-xl {{ $cardClass }}">
                        <div class="flex items-center justify-between gap-3"><span class="text-3xl font-black {{ $textClass }}">{{ $number }}</span><span class="rounded-full bg-white/70 px-3 py-1 text-[10px] font-black uppercase tracking-[.14em] text-slate-600 dark:bg-slate-900/40 dark:text-slate-300">{{ $scope }}</span></div>
                        <h3 class="mt-6 text-xl font-black text-slate-900 dark:text-white">{{ $heading }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
            <div class="mx-auto mt-8 max-w-4xl rounded-2xl border border-slate-200 bg-white p-5 text-sm leading-7 text-slate-600 shadow-sm dark:border-slate-800 dark:bg-slate-900 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">Important:</strong> Proofreading should not be presented as structural revision. If your thesis, evidence, or organization still needs work, choose a broader editing review before the final proof.</div>
        </div>
    </section>

    <section id="example" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="editing-example-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid gap-12 lg:grid-cols-[.8fr_1.2fr] lg:items-center">
                <div>
                    <span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">A transparent edit</span>
                    <h2 id="editing-example-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Changes should have a reason</h2>
                    <p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">Strong academic editing does not replace every sentence with the editor's preferred voice. It identifies the problem, makes a proportionate change, and flags factual or interpretive decisions that belong to the author.</p>
                    <p class="mt-4 text-sm leading-7 text-slate-600 dark:text-slate-300">When an editable Word document is supplied, you can request visible changes and comments. Confirm the desired deliverables when ordering, particularly if you need a marked version, a clean version, or an editorial summary.</p>
                </div>
                <div class="overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-50 shadow-xl dark:border-slate-700 dark:bg-slate-950">
                    <div class="flex items-center justify-between border-b border-slate-200 bg-white px-5 py-4 dark:border-slate-700 dark:bg-slate-900"><div class="flex gap-2" aria-hidden="true"><span class="h-2.5 w-2.5 rounded-full bg-red-400"></span><span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span><span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span></div><span class="font-mono text-[10px] font-bold uppercase tracking-[.16em] text-slate-400">editor-note / clarity</span></div>
                    <div class="grid divide-y divide-slate-200 md:grid-cols-2 md:divide-x md:divide-y-0 dark:divide-slate-700">
                        <div class="p-6 sm:p-8"><span class="text-[10px] font-black uppercase tracking-[.18em] text-rose-600 dark:text-rose-400">Before</span><p class="mt-4 text-lg leading-8 text-slate-700 dark:text-slate-200">“The results are very important and show that the program was good for students in many ways.”</p><div class="mt-5 flex flex-wrap gap-2">@foreach (['Vague', 'Wordy', 'Unsupported emphasis'] as $issue)<span class="rounded-full bg-rose-100 px-3 py-1 text-[10px] font-bold text-rose-700 dark:bg-rose-500/10 dark:text-rose-300">{{ $issue }}</span>@endforeach</div></div>
                        <div class="p-6 sm:p-8"><span class="text-[10px] font-black uppercase tracking-[.18em] text-emerald-600 dark:text-emerald-400">After</span><p class="mt-4 text-lg leading-8 text-slate-900 dark:text-white">“The results indicate that the program improved student participation and assignment completion.”</p><div class="mt-5 rounded-xl border border-blue-200 bg-blue-50 p-3 text-xs leading-5 text-blue-800 dark:border-blue-500/20 dark:bg-blue-500/10 dark:text-blue-200"><strong>Editor query:</strong> Confirm that both outcomes are reported in the evidence.</div></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="relative scroll-mt-24 overflow-hidden bg-slate-900 py-20 sm:py-24" aria-labelledby="editing-process-heading">
        <div class="absolute inset-0 opacity-[.035] [background-image:radial-gradient(circle_at_1px_1px,#fff_1px,transparent_0)] [background-size:28px_28px]"></div>
        <div class="absolute -left-24 top-0 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div><div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/15 blur-[100px]"></div>
        <div class="absolute left-1/2 top-8 -translate-x-1/2 select-none text-[7rem] font-black tracking-tighter text-white/[.018] sm:text-[11rem]" aria-hidden="true">EDIT</div>
        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center"><span class="inline-flex rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-[11px] font-black uppercase tracking-[.2em] text-blue-300">Editing workflow</span><h2 id="editing-process-heading" class="mt-6 text-3xl font-black tracking-tight text-white sm:text-5xl">A review sequence that avoids polishing text you may later cut</h2><p class="mt-5 text-base leading-8 text-slate-300">The workflow moves from assignment requirements and document-level concerns toward sentences, citations, and the final proof.</p></div>
            <ol class="relative mx-auto mt-14 grid max-w-6xl gap-5 md:grid-cols-5">
                <div class="absolute left-[10%] right-[10%] top-7 hidden h-px bg-gradient-to-r from-blue-500 via-violet-500 to-orange-500 md:block" aria-hidden="true"></div>
                @foreach ([
                    ['01', 'Scope', 'Confirm the brief, rubric, audience, style guide, deadline, and depth of review.', 'bg-blue-500'],
                    ['02', 'Structure', 'Review the central purpose, evidence, sequence, section balance, and paragraph roles.', 'bg-emerald-500'],
                    ['03', 'Language', 'Improve clarity, flow, tone, precision, concision, terminology, and consistency.', 'bg-violet-500'],
                    ['04', 'Details', 'Check grammar, punctuation, spelling, citations, references, tables, and formatting.', 'bg-fuchsia-500'],
                    ['05', 'Proof', 'Read the final formatted version for remaining errors and unintended changes.', 'bg-orange-500'],
                ] as [$number, $heading, $copy, $badgeClass])
                    <li class="relative rounded-2xl border border-white/10 bg-white/[.06] p-5 text-center backdrop-blur transition hover:-translate-y-1 hover:bg-white/[.09]"><span class="relative mx-auto flex h-14 w-14 items-center justify-center rounded-2xl border-4 border-slate-900 text-xs font-black text-white shadow-xl {{ $badgeClass }}">{{ $number }}</span><h3 class="mt-5 font-black text-white">{{ $heading }}</h3><p class="mt-2 text-xs leading-5 text-slate-400">{{ $copy }}</p></li>
                @endforeach
            </ol>
        </div>
    </section>

    <section id="documents" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="document-types-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end"><div class="max-w-3xl"><span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Document types</span><h2 id="document-types-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Editing support across academic formats</h2><p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Each format has different reader expectations, structural conventions, evidence requirements, and citation details.</p></div><a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-700 dark:text-blue-400">Discuss your draft <span aria-hidden="true">&rarr;</span></a></div>
            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Essays and assignments', 'Thesis alignment, paragraph sequence, evidence integration, transitions, tone, and final proofreading.', route('services.essay-writing.index')],
                    ['Research papers', 'Research-question alignment, literature synthesis, methods language, claims, limitations, and references.', route('services.research-paper.index')],
                    ['Theses and dissertations', 'Long-document consistency, chapter connections, terminology, cross-references, tables, and front matter.', route('services.dissertation.index')],
                    ['Literature reviews', 'Thematic organization, critical comparison, synthesis language, source attribution, and gap statements.', route('services.literature-review.index')],
                    ['Case studies and reports', 'Problem definition, evidence, analysis, recommendations, headings, figures, and professional readability.', route('services.case-study.index')],
                    ['Applications and presentations', 'Audience, concise wording, narrative flow, slide consistency, captions, and visible text accuracy.', route('services.presentation-design.index')],
                ] as [$heading, $copy, $url])
                    <article class="flex flex-col rounded-3xl border border-slate-200 bg-slate-50 p-6 transition hover:border-blue-200 hover:bg-white hover:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:hover:border-blue-500/30 dark:hover:bg-slate-800"><h3 class="text-lg font-black text-slate-900 dark:text-white">{{ $heading }}</h3><p class="mt-3 flex-1 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p><a href="{{ $url }}" class="mt-5 text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Explore related support <span aria-hidden="true">&rarr;</span></a></article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="checklist" class="scroll-mt-24 border-y border-slate-200 bg-slate-50 py-20 sm:py-24 dark:border-slate-800 dark:bg-slate-950" aria-labelledby="final-checklist-heading">
        <div class="mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-[.85fr_1.15fr] lg:items-center lg:px-8">
            <div><span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">Before submission</span><h2 id="final-checklist-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">A final review should check more than spelling</h2><p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">Automated spelling and grammar tools can support a review, but they do not reliably judge whether a sentence matches the evidence, a paragraph advances the argument, or a citation represents the source accurately.</p></div>
            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ([
                    ['Purpose', 'Does the document answer the assignment and maintain a clear central purpose?'],
                    ['Evidence', 'Are claims supported, qualified appropriately, and attributed to the correct sources?'],
                    ['Organization', 'Does each section and paragraph perform a necessary, clearly connected role?'],
                    ['Language', 'Are sentences clear, concise, consistent, and appropriate for the audience and discipline?'],
                    ['Citations', 'Do in-text citations or notes match complete reference entries in the required style?'],
                    ['Presentation', 'Are headings, tables, figures, numbering, spacing, and file requirements consistent?'],
                ] as [$heading, $copy])
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm dark:border-slate-800 dark:bg-slate-900"><div class="flex items-center gap-3"><span class="flex h-8 w-8 items-center justify-center rounded-full bg-emerald-500 text-white"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg></span><h3 class="font-black text-slate-900 dark:text-white">{{ $heading }}</h3></div><p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p></article>
                @endforeach
            </div>
            <aside class="lg:col-span-2 rounded-2xl border border-blue-200 bg-blue-50 p-5 text-sm leading-7 text-slate-700 dark:border-blue-500/20 dark:bg-blue-500/10 dark:text-slate-300" aria-label="Editorial guidance sources">
                <strong class="text-slate-900 dark:text-white">Editorial basis:</strong>
                This guide distinguishes document-level revision from sentence editing and final proofreading using guidance from the
                <a href="https://owl.purdue.edu/owl/graduate_writing/introduction_to_writing/documents/revising-and-editing/quick-tips-for-revising-and-editing.pdf" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 hover:text-blue-800 dark:text-blue-300 dark:hover:text-blue-200">Purdue Online Writing Lab</a>
                and the
                <a href="https://advice.writing.utoronto.ca/revising/revising-and-editing/" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 hover:text-blue-800 dark:text-blue-300 dark:hover:text-blue-200">University of Toronto Writing Advice</a>.
                Your assignment instructions and department style guide still take priority.
            </aside>
        </div>
    </section>

    <section id="faqs" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="editing-faq-heading">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center"><span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Questions before review</span><h2 id="editing-faq-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Proofreading and editing help FAQs</h2></div>
            <div class="mt-12 space-y-4">
                @foreach ([
                    ['What is the difference between proofreading and editing?', 'Proofreading is the final surface-level check after the content and layout are stable. Editing may address larger issues such as structure, paragraph flow, sentence clarity, tone, consistency, and source documentation.'],
                    ['What should I send with my draft?', 'Provide the editable document, complete prompt, rubric, academic level, deadline, citation style or department guide, instructor feedback, and any specific concerns or sections that should not be changed.'],
                    ['Can I request tracked changes and editor comments?', 'You can request visible changes and comments when supplying an editable Word document. Confirm whether you need a marked file, clean file, comment summary, or another deliverable when placing the order.'],
                    ['Will editing change my academic voice?', 'The review should preserve your meaning, appropriate disciplinary terminology, and authorial voice. Tell us if you prefer light intervention, suggestions only, or permission for more substantial restructuring.'],
                    ['Can citations and references be checked?', 'Yes, when you provide the required style edition or department guide. The review can compare in-text citations or notes with the reference list and check consistency, formatting, locators, links, and available identifiers. Source accuracy still depends on access to the cited material.'],
                    ['Can you edit only one chapter or section?', 'Yes. Identify the target section and whether surrounding material should be read for context. For long documents, also provide the relevant outline, terminology preferences, and style requirements.'],
                ] as [$question, $answer])
                    <details class="group rounded-2xl border border-slate-200 bg-slate-50 open:border-blue-200 open:bg-white open:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:open:border-blue-500/30 dark:open:bg-slate-800"><summary class="flex cursor-pointer list-none items-center justify-between gap-5 px-6 py-5 text-left font-black text-slate-900 marker:content-none dark:text-white">{{ $question }}<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-blue-600 transition group-open:rotate-45 dark:bg-slate-700 dark:text-blue-400" aria-hidden="true">+</span></summary><p class="px-6 pb-6 text-sm leading-7 text-slate-600 dark:text-slate-300">{{ $answer }}</p></details>
                @endforeach
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-indigo-700 to-slate-900 py-20 text-white sm:py-24" aria-labelledby="editing-cta-heading">
        <div class="absolute -left-20 -top-20 h-72 w-72 rounded-full bg-cyan-400/20 blur-3xl"></div><div class="absolute -bottom-24 -right-16 h-80 w-80 rounded-full bg-orange-400/20 blur-3xl"></div>
        <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8"><span class="text-xs font-black uppercase tracking-[.22em] text-blue-200">Start with your draft</span><h2 id="editing-cta-heading" class="mt-4 text-3xl font-black tracking-tight sm:text-5xl">Choose the editing depth your document actually needs</h2><p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-blue-100">Share the draft, brief, rubric, style guide, feedback, and deadline. We will help identify whether the priority is structure, language, consistency, or a final proof.</p><div class="mt-9 flex flex-col justify-center gap-3 sm:flex-row"><a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center justify-center rounded-2xl bg-white px-8 py-4 text-sm font-black text-blue-700 shadow-xl transition hover:-translate-y-0.5 hover:bg-blue-50">Get Proofreading and Editing Help</a><a href="{{ route('services.essay-writing.index') }}" class="inline-flex items-center justify-center rounded-2xl border border-white/20 bg-white/10 px-8 py-4 text-sm font-black text-white transition hover:bg-white/15">I need help developing the draft</a></div></div>
    </section>
</div>
@endsection
