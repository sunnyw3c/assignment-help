@extends('layouts.app')

@section('title', 'Essay Writing Help for College Students | Assignment Help USA')
@section('description', 'Get essay writing help with planning, research, structure, citations, editing, and urgent deadlines. Original academic support for US college students.')
@section('canonical', url('/essay-writing-help'))
@section('og_image', asset('images/essay-writing/essay-writing-help-og.jpg'))
@section('twitter_image', asset('images/essay-writing/essay-writing-help-og.jpg'))
@section('primary_image', asset('images/essay-writing/essay-writing-help-student.jpg'))
@section('date_modified', '2026-08-02')
@section('schema_main_entity', url('/essay-writing-help') . '#service')

@push('structured-data')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => url('/essay-writing-help') . '#service',
        'name' => 'Essay Writing Help',
        'serviceType' => 'Academic essay planning, writing, editing, and citation support',
        'url' => url('/essay-writing-help'),
        'description' => 'Essay writing help for US college students, including topic analysis, research, outlining, thesis development, drafting, editing, proofreading, and citation support.',
        'image' => asset('images/essay-writing/essay-writing-help-student.jpg'),
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
        title="Essay Writing Help for <span class='text-[#f16700]'>Clearer, Stronger Academic Work</span>"
        subtitle="Get focused support with your prompt, thesis, research, structure, citations, editing, and deadline. Every project follows your course instructions and is prepared as an original learning resource."
        :breadcrumbs="[
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Essay Writing Help', 'url' => ''],
        ]"
    />

    <section class="relative z-10 border-y border-slate-200/80 bg-white/95 py-5 backdrop-blur dark:border-slate-800 dark:bg-slate-900/95" aria-label="Essay writing service features">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-8 gap-y-4 px-4 sm:px-6 lg:px-8">
            @foreach ([
                ['Original work for your brief', 'emerald'],
                ['APA, MLA, Chicago & Harvard', 'blue'],
                ['Editing and revision support', 'violet'],
                ['Secure, confidential ordering', 'orange'],
            ] as [$label, $color])
                @php
                    $iconClass = match ($color) {
                        'emerald' => 'bg-emerald-50 text-emerald-600 dark:bg-emerald-500/10 dark:text-emerald-400',
                        'blue' => 'bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400',
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
                Updated <time datetime="2026-08-02">August 2, 2026</time>
            </p>
            <a href="{{ route('about') }}" class="font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">About our academic support team <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>

    <nav class="border-b border-slate-200 bg-slate-50 dark:border-slate-800 dark:bg-slate-950" aria-label="On this page">
        <div class="mx-auto flex max-w-7xl gap-2 overflow-x-auto px-4 py-4 sm:px-6 lg:px-8">
            <span class="shrink-0 px-2 py-2 text-xs font-black uppercase tracking-[.18em] text-slate-500">On this page</span>
            @foreach ([
                ['Overview', '#overview'],
                ['What we help with', '#support'],
                ['Essay types', '#essay-types'],
                ['Writing process', '#process'],
                ['Citation styles', '#citations'],
                ['FAQs', '#faqs'],
            ] as [$label, $anchor])
                <a href="{{ $anchor }}" class="shrink-0 rounded-lg px-3 py-2 text-xs font-bold text-slate-600 transition hover:bg-white hover:text-blue-600 hover:shadow-sm dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-blue-400">{{ $label }}</a>
            @endforeach
        </div>
    </nav>

    <section id="overview" class="relative scroll-mt-24 overflow-hidden bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="essay-help-overview-heading">
        <div class="absolute -left-28 top-10 h-72 w-72 rounded-full bg-blue-500/5 blur-3xl"></div>
        <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/5 blur-3xl"></div>
        <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-[1.02fr_.98fr] lg:px-8">
            <div>
                <span class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-2 text-[11px] font-black uppercase tracking-[.18em] text-orange-700 dark:border-orange-500/20 dark:bg-orange-500/10 dark:text-orange-300">
                    <span class="h-2 w-2 rounded-full bg-[#f16700]"></span>
                    Plan. Write. Revise.
                </span>
                <h2 id="essay-help-overview-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">
                    Essay writing help built around <span class="text-blue-600 dark:text-blue-400">your assignment brief</span>
                </h2>
                <p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">
                    Essay writing becomes difficult when the prompt is broad, the research is scattered, or the deadline leaves little time to revise. Our online essay help brings those parts into one clear workflow: interpret the task, define a position, select credible evidence, organize the discussion, and polish the final draft.
                </p>
                <p class="mt-4 text-base leading-8 text-slate-600 dark:text-slate-300">
                    You can request support for a new essay or submit an existing draft for targeted feedback. Academic level, required readings, marking rubric, word count, and citation style are considered before work begins. Delivered material is intended as a model and learning resource that you should review and use according to your institution's academic-integrity rules.
                </p>

                <div class="mt-8 grid gap-3 sm:grid-cols-2">
                    @foreach (['Prompt and rubric analysis', 'Thesis and outline development', 'Evidence-led body paragraphs', 'Editing, citations, and formatting'] as $point)
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
                        Get Essay Help
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                    <a href="{{ route('how-it-works') }}" class="inline-flex items-center justify-center rounded-2xl border border-slate-300 bg-white px-7 py-4 text-sm font-black text-slate-700 transition hover:border-blue-300 hover:text-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-200">How It Works</a>
                </div>
            </div>

            <figure class="group relative">
                <div class="absolute -inset-3 rounded-[2rem] bg-gradient-to-br from-blue-600/20 via-transparent to-orange-500/20 blur-xl"></div>
                <div class="relative overflow-hidden rounded-[2rem] border border-white/70 bg-white p-2 shadow-2xl dark:border-slate-700 dark:bg-slate-800">
                    <img src="{{ asset('images/essay-writing/essay-writing-help-student.jpg') }}"
                         alt="College student revising an academic essay with research books and notes in a library"
                         width="1536" height="1024"
                         class="h-[360px] w-full rounded-[1.55rem] object-cover object-center transition duration-700 group-hover:scale-[1.02] sm:h-[470px]"
                         loading="lazy" decoding="async">
                </div>
                <figcaption class="absolute -bottom-5 left-5 right-5 flex items-center gap-3 rounded-2xl border border-slate-200/80 bg-white/95 p-4 shadow-xl backdrop-blur sm:left-8 sm:right-auto dark:border-slate-700 dark:bg-slate-900/95">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-500 text-white shadow-lg shadow-orange-500/25">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zM19.5 7.125L16.862 4.487M18 14v4.75A2.25 2.25 0 0115.75 21h-10.5A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/></svg>
                    </span>
                    <span><strong class="block text-sm text-slate-900 dark:text-white">Revision is part of the process</strong><span class="text-xs text-slate-500 dark:text-slate-400">Structure, evidence, clarity, and citations</span></span>
                </figcaption>
            </figure>
        </div>
    </section>

    <section id="support" class="scroll-mt-24 bg-slate-50 py-20 sm:py-24 dark:bg-slate-950" aria-labelledby="essay-support-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Support at every stage</span>
                <h2 id="essay-support-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">What our essay writing service can help with</h2>
                <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Choose complete assistance or focused help with the stage that is slowing you down.</p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['01', 'Understanding the prompt', 'We identify the task verb, topic boundaries, required readings, learning outcomes, and rubric priorities.', 'bg-blue-500'],
                    ['02', 'Research and source selection', 'Writers distinguish scholarly evidence from weak sources and organize material around the essay question.', 'bg-emerald-500'],
                    ['03', 'Thesis and outline', 'A focused thesis and paragraph plan give the essay a logical direction before drafting begins.', 'bg-violet-500'],
                    ['04', 'Draft development', 'Each paragraph connects a clear point with relevant evidence, analysis, and a link to the central argument.', 'bg-orange-500'],
                    ['05', 'Editing and proofreading', 'Sentence clarity, transitions, tone, grammar, consistency, and alignment with the rubric are reviewed.', 'bg-cyan-500'],
                    ['06', 'Citations and formatting', 'In-text citations, notes, references, headings, title pages, and spacing follow the requested style.', 'bg-rose-500'],
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

    <section id="essay-types" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="essay-types-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
                <div class="max-w-3xl">
                    <span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">Essay types</span>
                    <h2 id="essay-types-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">College essay help across subjects and formats</h2>
                    <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">The structure changes with the task. A literary analysis, reflective essay, and policy argument should not be written from the same template.</p>
                </div>
                <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-700 dark:text-blue-400">Discuss your essay <span aria-hidden="true">&rarr;</span></a>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['Argumentative essays', 'Develop a defensible claim, assess evidence, address counterarguments, and build a reasoned conclusion.', route('services.essay-writing.show', 'argumentative')],
                    ['Analytical essays', 'Break down a text, theory, event, dataset, or case and explain the significance of the evidence.', null],
                    ['Compare-and-contrast essays', 'Use consistent criteria to examine meaningful similarities, differences, and implications.', null],
                    ['Expository essays', 'Explain a concept or process clearly with accurate evidence and a logical progression of ideas.', null],
                    ['Reflective essays', 'Connect experience with course concepts while maintaining critical analysis and an appropriate academic voice.', null],
                    ['Literary analysis essays', 'Interpret themes, language, form, characterization, and context through close textual evidence.', null],
                ] as [$heading, $copy, $url])
                    <article class="flex flex-col rounded-3xl border border-slate-200 bg-slate-50 p-6 transition hover:border-blue-200 hover:bg-white hover:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:hover:border-blue-500/30 dark:hover:bg-slate-800">
                        <h3 class="text-lg font-black text-slate-900 dark:text-white">{{ $heading }}</h3>
                        <p class="mt-3 flex-1 text-sm leading-6 text-slate-600 dark:text-slate-300">{{ $copy }}</p>
                        @if ($url)
                            <a href="{{ $url }}" class="mt-5 text-sm font-bold text-blue-600 hover:text-blue-700 dark:text-blue-400">Explore argumentative essay help <span aria-hidden="true">&rarr;</span></a>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="process" class="relative scroll-mt-24 overflow-hidden bg-slate-900 py-20 sm:py-24" aria-labelledby="essay-process-heading">
        <div class="absolute inset-0 opacity-[.035] [background-image:radial-gradient(circle_at_1px_1px,#fff_1px,transparent_0)] [background-size:28px_28px]"></div>
        <div class="absolute -left-24 top-0 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div>
        <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/15 blur-[100px]"></div>
        <div class="absolute left-1/2 top-8 -translate-x-1/2 select-none text-[8rem] font-black tracking-tighter text-white/[.018] sm:text-[13rem]" aria-hidden="true">ESSAY</div>
        <div class="relative mx-auto grid max-w-7xl items-start gap-14 px-4 sm:px-6 lg:grid-cols-[.82fr_1.18fr] lg:px-8">
            <div class="lg:sticky lg:top-28">
                <span class="inline-flex rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-[11px] font-black uppercase tracking-[.2em] text-blue-300">Essay blueprint</span>
                <h2 id="essay-process-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-white sm:text-5xl">From assignment brief to refined essay</h2>
                <p class="mt-6 text-base leading-8 text-slate-300">Academic writing is rarely a straight line. Evidence can reshape the thesis, and revision can send a writer back to the outline. These five stages provide direction while leaving room to rethink earlier decisions.</p>
                <div class="mt-7 flex flex-wrap items-center gap-2 text-[10px] font-black uppercase tracking-[.16em] text-slate-300" aria-label="Essay development path">
                    <span class="rounded-full border border-blue-400/20 bg-blue-400/10 px-3 py-2 text-blue-200">Brief</span>
                    <span class="text-slate-600" aria-hidden="true">&rarr;</span>
                    <span class="rounded-full border border-violet-400/20 bg-violet-400/10 px-3 py-2 text-violet-200">Working draft</span>
                    <span class="text-slate-600" aria-hidden="true">&rarr;</span>
                    <span class="rounded-full border border-orange-400/20 bg-orange-400/10 px-3 py-2 text-orange-200">Final essay</span>
                </div>
                <div class="mt-6 flex gap-3 rounded-2xl border border-emerald-400/20 bg-emerald-400/[.07] p-4">
                    <span class="mt-1 flex h-7 w-7 shrink-0 items-center justify-center rounded-full bg-emerald-400/15 text-emerald-300" aria-hidden="true">&#8634;</span>
                    <div>
                        <p class="text-sm font-black text-emerald-200">Build in a revision loop</p>
                        <p class="mt-1 text-sm leading-6 text-slate-400">If new evidence changes the claim, return to the thesis and plan before polishing sentences.</p>
                    </div>
                </div>
                <div class="mt-8 rounded-2xl border border-white/10 bg-white/[.04] p-5">
                    <p class="text-sm font-bold text-white">Writing an argumentative essay?</p>
                    <p class="mt-2 text-sm leading-6 text-slate-400">See how claims, evidence, counterarguments, and rebuttals fit together in our dedicated guide.</p>
                    <a href="{{ route('services.essay-writing.show', 'argumentative') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-black text-blue-300 transition hover:text-white">
                        Explore argumentative essay help <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>

            <div class="relative rounded-[2rem] border border-white/10 bg-slate-950/45 p-4 shadow-2xl shadow-blue-950/30 backdrop-blur-sm sm:p-7">
                <div class="mb-7 flex items-center justify-between gap-4 border-b border-white/10 pb-5">
                    <div class="flex items-center gap-2" aria-hidden="true">
                        <span class="h-2.5 w-2.5 rounded-full bg-red-400/80"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-amber-400/80"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400/80"></span>
                    </div>
                    <p class="font-mono text-[10px] font-bold uppercase tracking-[.16em] text-slate-500">essay-blueprint / working plan</p>
                </div>
                <div class="absolute left-10 top-28 h-[calc(100%-13rem)] w-px bg-gradient-to-b from-blue-500 via-violet-500 to-orange-500 sm:left-1/2" aria-hidden="true"></div>
                <ol class="space-y-5">
                    @foreach ([
                        ['Orient', 'Decode the assignment', 'Identify the task verb, audience, scope, rubric priorities, required sources, and submission rules.', 'Annotated brief', 'hover:border-blue-400/40', 'bg-blue-500', 'text-blue-300', 'bg-blue-400/10'],
                        ['Investigate', 'Explore evidence and test a thesis', 'Ask an analytical question, evaluate relevant sources, and develop a focused working answer that the evidence can support.', 'Working thesis', 'hover:border-emerald-400/40', 'bg-emerald-500', 'text-emerald-300', 'bg-emerald-400/10'],
                        ['Construct', 'Organize and draft', 'Arrange the reasoning around the thesis, then build paragraphs that connect claims, evidence, analysis, and transitions.', 'Complete draft', 'hover:border-violet-400/40', 'bg-violet-500', 'text-violet-300', 'bg-violet-400/10'],
                        ['Strengthen', 'Revise the argument and structure', 'Recheck the central claim, evidence, sequence, paragraph purpose, and reader expectations; rewrite where the logic needs work.', 'Revised argument', 'hover:border-fuchsia-400/40', 'bg-fuchsia-500', 'text-fuchsia-300', 'bg-fuchsia-400/10'],
                        ['Polish', 'Edit, cite, and proofread', 'After the larger revisions are complete, refine clarity and academic tone, verify source attribution, and check the required format.', 'Submission copy', 'hover:border-orange-400/40', 'bg-orange-500', 'text-orange-300', 'bg-orange-400/10'],
                    ] as $index => [$stage, $heading, $copy, $output, $hoverClass, $dotClass, $textClass, $tintClass])
                        <li class="group relative ml-14 rounded-2xl border border-white/10 bg-white/[.055] p-5 backdrop-blur transition duration-300 hover:-translate-y-0.5 hover:bg-white/[.09] hover:shadow-xl sm:ml-0 sm:w-[calc(50%-1.75rem)] {{ $index % 2 ? 'sm:ml-auto' : 'sm:mr-auto' }} {{ $hoverClass }}">
                            <span class="absolute -left-[2.65rem] top-5 flex h-8 w-8 items-center justify-center rounded-full border-4 border-slate-950 text-[10px] font-black text-white shadow-lg {{ $dotClass }} {{ $index % 2 ? 'sm:-left-[2.75rem]' : 'sm:-right-[2.75rem] sm:left-auto' }}">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="mb-3 flex items-center justify-between gap-3">
                                <span class="text-[9px] font-black uppercase tracking-[.2em] {{ $textClass }}">{{ $stage }}</span>
                                <span class="rounded-full px-2.5 py-1 text-[9px] font-bold text-slate-300 {{ $tintClass }}">{{ $output }}</span>
                            </div>
                            <h3 class="font-black text-white">{{ $heading }}</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-400">{{ $copy }}</p>
                        </li>
                    @endforeach
                </ol>
                <div class="relative mt-7 overflow-hidden rounded-2xl border border-orange-300/20 bg-gradient-to-r from-orange-400/10 via-white/[.04] to-blue-400/10 p-5">
                    <div class="absolute -right-5 -top-8 text-7xl font-black text-white/[.035]" aria-hidden="true">✓</div>
                    <p class="text-[10px] font-black uppercase tracking-[.2em] text-orange-300">Final quality checkpoint</p>
                    <p class="mt-2 pr-8 text-sm font-bold leading-6 text-white">Does every paragraph help answer the assignment question and advance the thesis?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="strong-essay-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Useful writing framework</span>
                <h2 id="strong-essay-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">What makes a strong academic essay?</h2>
                <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Good academic writing makes the reasoning visible. Each part should help answer the same central question.</p>
            </div>

            <div class="mt-12 overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-50 shadow-sm dark:border-slate-700 dark:bg-slate-800/60">
                <div class="grid divide-y divide-slate-200 md:grid-cols-3 md:divide-x md:divide-y-0 dark:divide-slate-700">
                    <article class="p-7 sm:p-8">
                        <span class="text-xs font-black uppercase tracking-[.18em] text-blue-600 dark:text-blue-400">Introduction</span>
                        <h3 class="mt-3 text-xl font-black text-slate-900 dark:text-white">Define the question and thesis</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">Give only the context readers need, establish the scope, and state the position or controlling idea clearly.</p>
                    </article>
                    <article class="p-7 sm:p-8">
                        <span class="text-xs font-black uppercase tracking-[.18em] text-violet-600 dark:text-violet-400">Body paragraphs</span>
                        <h3 class="mt-3 text-xl font-black text-slate-900 dark:text-white">Connect points, evidence, and analysis</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">A paragraph should make one relevant point, support it, explain its significance, and connect it to the main argument.</p>
                    </article>
                    <article class="p-7 sm:p-8">
                        <span class="text-xs font-black uppercase tracking-[.18em] text-orange-600 dark:text-orange-400">Conclusion</span>
                        <h3 class="mt-3 text-xl font-black text-slate-900 dark:text-white">Synthesize rather than repeat</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">Show what the discussion establishes, why it matters, and which implication follows from the evidence.</p>
                    </article>
                </div>
            </div>

            <div class="mt-8 rounded-2xl border border-blue-200 bg-blue-50 p-5 text-sm leading-7 text-slate-700 dark:border-blue-500/20 dark:bg-blue-500/10 dark:text-slate-300">
                Working on a source-heavy project rather than a standard essay? See our <a href="{{ route('services.research-paper.index') }}" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 hover:text-blue-800 dark:text-blue-300 dark:hover:text-blue-200">research paper help</a>. If your draft is already complete, our <a href="{{ route('services.proofreading-editing.index') }}" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 hover:text-blue-800 dark:text-blue-300 dark:hover:text-blue-200">proofreading and editing help</a> may be the better fit.
            </div>
        </div>
    </section>

    <section id="citations" class="scroll-mt-24 bg-slate-50 py-20 sm:py-24 dark:bg-slate-950" aria-labelledby="citation-styles-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-3xl text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">Academic formatting</span>
                <h2 id="citation-styles-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Citation styles supported</h2>
                <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Formatting follows the edition and department guidance you provide, including custom university templates.</p>
            </div>

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['APA 7', 'Author-date citations commonly used in psychology, nursing, education, business, and social sciences.'],
                    ['MLA 9', 'Author-page citations and Works Cited formatting for literature, language, and humanities essays.'],
                    ['Chicago 17', 'Notes-bibliography or author-date systems for history, arts, and interdisciplinary research.'],
                    ['Harvard', 'Author-date referencing used across many business, science, and international university programs.'],
                    ['IEEE', 'Numbered citations for computing, engineering, and technical writing.'],
                    ['OSCOLA and legal styles', 'Footnotes, cases, legislation, and bibliographies for law assignments and legal analysis.'],
                ] as [$style, $copy])
                    <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-lg font-black text-slate-900 dark:text-white">{{ $style }}</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">{{ $copy }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-20 dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-blue-600 via-indigo-700 to-slate-900 px-6 py-12 shadow-2xl sm:px-12 lg:px-16 lg:py-16">
                <div class="absolute -right-20 -top-28 h-80 w-80 rounded-full border-[55px] border-white/5"></div>
                <div class="absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-orange-500/20 blur-3xl"></div>
                <div class="relative grid items-center gap-10 lg:grid-cols-[1fr_auto]">
                    <div class="max-w-3xl">
                        <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-[10px] font-black uppercase tracking-[.2em] text-blue-100">Your instructions guide the work</span>
                        <h2 class="mt-6 text-3xl font-black leading-tight text-white sm:text-5xl">Get help with the essay in front of you.</h2>
                        <p class="mt-5 max-w-2xl text-base leading-7 text-blue-100">Share the prompt, grading rubric, readings, deadline, and your current draft if you have one. We will help you define the appropriate scope before work begins.</p>
                    </div>
                    <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                        <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#f16700] px-8 py-4 text-sm font-black text-white shadow-xl shadow-orange-950/20 transition hover:-translate-y-0.5 hover:bg-orange-500">Start Your Order <span aria-hidden="true">&rarr;</span></a>
                        <a href="{{ route('pricing') }}" class="text-center text-xs font-bold text-blue-200 underline decoration-blue-300/40 underline-offset-4 hover:text-white">Review pricing options</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
        $faqs = [
            ['What information should I provide for essay writing help?', 'Send the complete prompt, grading rubric, academic level, word count, deadline, citation style, required readings, and any instructor feedback. If you have already started, include your outline or draft so the support can build on your work.'],
            ['Can I request help with only part of an essay?', 'Yes. You can request focused support with topic selection, a thesis, an outline, research, one difficult section, citations, editing, or proofreading instead of a complete project.'],
            ['Which essay types and subjects do you support?', 'Support is available for argumentative, analytical, expository, compare-and-contrast, reflective, literary analysis, and other academic essays across humanities, social sciences, business, healthcare, law, and many additional subjects.'],
            ['Can you follow sources assigned by my instructor?', 'Yes. Upload the required readings and explain whether outside research is permitted. The writer can prioritize assigned material and follow any restrictions in your brief.'],
            ['How should I use the completed essay material?', 'Treat delivered material as a model and learning resource. Review the reasoning, verify citations, adapt the material in your own academic voice, and follow your institution’s rules on outside assistance and attribution.'],
            ['Can you edit an essay I have already written?', 'Yes. Editing can focus on argument, organization, paragraph development, clarity, academic tone, grammar, citations, formatting, or a combination of these areas.'],
        ];
    @endphp
    <section id="faqs" class="scroll-mt-24 bg-slate-50 py-20 sm:py-24 dark:bg-slate-950" aria-labelledby="essay-faq-heading">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Common questions</span>
                <h2 id="essay-faq-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Essay writing help FAQs</h2>
            </div>
            <div class="mt-12 space-y-4">
                @foreach ($faqs as [$question, $answer])
                    <details class="group overflow-hidden rounded-2xl border border-slate-200 bg-white transition open:shadow-lg dark:border-slate-700 dark:bg-slate-900" @if ($loop->first) open @endif>
                        <summary class="flex cursor-pointer list-none items-center justify-between gap-6 px-6 py-5 text-left [&::-webkit-details-marker]:hidden">
                            <span class="font-black text-slate-900 dark:text-white">{{ $question }}</span>
                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-slate-100 text-blue-600 dark:bg-slate-800 dark:text-blue-400">
                                <svg class="h-4 w-4 transition-transform group-open:rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m6-6H6"/></svg>
                            </span>
                        </summary>
                        <p class="border-t border-slate-200 px-6 py-5 text-sm leading-7 text-slate-600 dark:border-slate-700 dark:text-slate-300">{{ $answer }}</p>
                    </details>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
