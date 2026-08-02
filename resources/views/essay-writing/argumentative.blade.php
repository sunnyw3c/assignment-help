@extends('layouts.app')

@section('title', 'Argumentative Essay Writing Help | Assignment Help USA')
@section('description', 'Build a focused thesis, credible evidence, and a persuasive rebuttal with expert argumentative essay writing help. Original support for every academic level.')
@section('canonical', url('/essay-writing-help/argumentative'))
@section('og_image', asset('images/essay-writing/argumentative-essay-writing-help-og.jpg'))
@section('twitter_image', asset('images/essay-writing/argumentative-essay-writing-help-og.jpg'))
@section('primary_image', asset('images/essay-writing/argumentative-essay-research.jpg'))
@section('date_modified', '2026-08-02')
@section('schema_main_entity', url('/essay-writing-help/argumentative') . '#service')

@push('structured-data')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        '@id' => url('/essay-writing-help/argumentative') . '#service',
        'name' => 'Argumentative Essay Writing Help',
        'serviceType' => 'Argumentative essay writing and editing support',
        'url' => url('/essay-writing-help/argumentative'),
        'description' => 'Academic support for argumentative essay planning, research, thesis development, counterarguments, citations, editing, and proofreading.',
        'image' => asset('images/essay-writing/argumentative-essay-research.jpg'),
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
            title="Argumentative Essay Writing Help That <span class='text-[#f16700]'>Makes a Stronger Case</span>"
            subtitle="Move from a complex prompt to a focused thesis, credible evidence, and a persuasive rebuttal. Work with an experienced academic writer who follows your rubric, citation style, and deadline."
            :breadcrumbs="[
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Essay Writing Help', 'url' => route('services.essay-writing.index')],
                ['label' => 'Argumentative Essay Help', 'url' => ''],
            ]"
        />

        {{-- Trust bar mirrors the compact proof treatment used on the homepage. --}}
        <section class="relative z-10 border-y border-slate-200/80 bg-white/95 py-5 backdrop-blur dark:border-slate-800 dark:bg-slate-900/95" aria-label="Service guarantees">
            <div class="mx-auto flex max-w-7xl flex-wrap items-center justify-center gap-x-8 gap-y-4 px-4 sm:px-6 lg:px-8">
                @foreach ([
                    ['label' => '4.9/5 student rating', 'color' => 'text-amber-500', 'icon' => 'star'],
                    ['label' => 'Original, human-written work', 'color' => 'text-emerald-500', 'icon' => 'check'],
                    ['label' => 'Free Turnitin report', 'color' => 'text-blue-500', 'icon' => 'shield'],
                    ['label' => 'Secure & confidential', 'color' => 'text-indigo-500', 'icon' => 'lock'],
                ] as $item)
                    <div class="flex items-center gap-2.5 text-sm font-bold text-slate-700 dark:text-slate-200">
                        <span class="flex h-8 w-8 items-center justify-center rounded-lg bg-slate-100 {{ $item['color'] }} dark:bg-slate-800">
                            @if ($item['icon'] === 'star')
                                <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.783.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.784-.57-.382-1.81.587-1.81h3.462a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @elseif ($item['icon'] === 'lock')
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                            @elseif ($item['icon'] === 'shield')
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                            @else
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
                            @endif
                        </span>
                        <span>{{ $item['label'] }}</span>
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
                    ['Core elements', '#core-elements'],
                    ['Thesis example', '#thesis-example'],
                    ['Essay structure', '#essay-structure'],
                    ['Topics', '#topics'],
                    ['FAQs', '#faqs'],
                ] as [$label, $anchor])
                    <a href="{{ $anchor }}" class="shrink-0 rounded-lg px-3 py-2 text-xs font-bold text-slate-600 transition hover:bg-white hover:text-blue-600 hover:shadow-sm dark:text-slate-300 dark:hover:bg-slate-800 dark:hover:text-blue-400">{{ $label }}</a>
                @endforeach
            </div>
        </nav>

        {{-- Editorial overview --}}
        <section id="overview" class="relative scroll-mt-24 overflow-hidden bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="argumentative-overview-heading">
            <div class="absolute -left-28 top-10 h-72 w-72 rounded-full bg-blue-500/5 blur-3xl"></div>
            <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/5 blur-3xl"></div>
            <div class="relative mx-auto grid max-w-7xl items-center gap-12 px-4 sm:px-6 lg:grid-cols-[1.02fr_.98fr] lg:px-8">
                <div>
                    <span class="inline-flex items-center gap-2 rounded-full border border-orange-200 bg-orange-50 px-4 py-2 text-[11px] font-black uppercase tracking-[0.18em] text-orange-700 dark:border-orange-500/20 dark:bg-orange-500/10 dark:text-orange-300">
                        <span class="h-2 w-2 rounded-full bg-[#f16700]"></span>
                        Research. Reason. Persuade.
                    </span>
                    <h2 id="argumentative-overview-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl dark:text-white">
                        More than good writing—<span class="text-blue-600 dark:text-blue-400">a defensible argument</span>
                    </h2>
                    <p class="mt-6 text-base leading-8 text-slate-600 dark:text-slate-300">
                        An effective argumentative essay does not simply state an opinion. It develops a precise claim, tests it against credible evidence, addresses the strongest opposing view, and guides the reader toward a logical conclusion.
                    </p>
                    <p class="mt-4 text-base leading-8 text-slate-600 dark:text-slate-300">
                        Our writers help you connect those moving parts while following your brief, required sources, academic level, and citation style. The result is a structured paper you can review, learn from, and use as a reference for your own academic work.
                    </p>

                    <div class="mt-8 grid gap-3 sm:grid-cols-2">
                        @foreach (['A focused, debatable thesis', 'Peer-reviewed supporting evidence', 'Fair counterargument analysis', 'APA, MLA, Chicago & Harvard'] as $point)
                            <div class="flex items-center gap-3 rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm font-bold text-slate-700 dark:border-slate-700 dark:bg-slate-800/70 dark:text-slate-200">
                                <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-white">
                                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                                </span>
                                {{ $point }}
                            </div>
                        @endforeach
                    </div>

                    <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="group mt-9 inline-flex items-center gap-3 rounded-2xl bg-blue-600 px-7 py-4 text-sm font-black text-white shadow-[0_12px_30px_-12px_rgba(37,99,235,.65)] transition hover:-translate-y-0.5 hover:bg-blue-700 hover:shadow-xl">
                        Start Your Essay
                        <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                </div>

                <figure class="group relative">
                    <div class="absolute -inset-3 rounded-[2rem] bg-gradient-to-br from-blue-600/20 via-transparent to-orange-500/20 blur-xl"></div>
                    <div class="relative overflow-hidden rounded-[2rem] border border-white/70 bg-white p-2 shadow-2xl dark:border-slate-700 dark:bg-slate-800">
                        <img src="{{ asset('images/essay-writing/argumentative-essay-research.jpg') }}"
                             alt="University student researching evidence and planning an argumentative essay in a library"
                             width="1728" height="911"
                             class="h-[360px] w-full rounded-[1.55rem] object-cover object-center transition duration-700 group-hover:scale-[1.02] sm:h-[460px]"
                             loading="lazy" decoding="async">
                    </div>
                    <figcaption class="absolute -bottom-5 left-5 right-5 flex items-center gap-3 rounded-2xl border border-slate-200/80 bg-white/95 p-4 shadow-xl backdrop-blur sm:left-8 sm:right-auto dark:border-slate-700 dark:bg-slate-900/95">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-500 text-white shadow-lg shadow-orange-500/25">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/></svg>
                        </span>
                        <span><strong class="block text-sm text-slate-900 dark:text-white">Evidence-led writing</strong><span class="text-xs text-slate-500 dark:text-slate-400">Credible sources, correctly cited</span></span>
                    </figcaption>
                </figure>
            </div>
        </section>

        {{-- Four essential elements --}}
        <section id="core-elements" class="scroll-mt-24 bg-slate-50 py-20 sm:py-24 dark:bg-slate-950" aria-labelledby="essay-elements-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <span class="text-xs font-black uppercase tracking-[0.22em] text-blue-600 dark:text-blue-400">The essentials</span>
                    <h2 id="essay-elements-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Every strong argument needs four things</h2>
                    <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">We strengthen the reasoning behind the paper—not only the sentences on the page.</p>
                </div>

                <div class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                    @foreach ([
                        ['01', 'A precise thesis', 'A focused, arguable position that gives every paragraph a clear purpose.', 'group-hover:text-blue-50', 'bg-blue-500 shadow-blue-500/20'],
                        ['02', 'Credible evidence', 'Relevant facts, scholarship, examples, and data selected for the actual claim.', 'group-hover:text-emerald-50', 'bg-emerald-500 shadow-emerald-500/20'],
                        ['03', 'Logical reasoning', 'Clear explanation of why the evidence supports the claim without hidden leaps.', 'group-hover:text-violet-50', 'bg-violet-500 shadow-violet-500/20'],
                        ['04', 'A real rebuttal', 'The strongest opposing view is treated fairly, then answered with evidence.', 'group-hover:text-orange-50', 'bg-orange-500 shadow-orange-500/20'],
                    ] as [$number, $heading, $copy, $hoverClass, $badgeClass])
                        <article class="group relative overflow-hidden rounded-3xl border border-slate-200 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-xl dark:border-slate-800 dark:bg-slate-900">
                            <span class="absolute right-5 top-3 text-6xl font-black text-slate-100 transition dark:text-slate-800 {{ $hoverClass }}">{{ $number }}</span>
                            <span class="relative flex h-12 w-12 items-center justify-center rounded-2xl text-sm font-black text-white shadow-lg {{ $badgeClass }}">{{ $number }}</span>
                            <h3 class="relative mt-6 text-xl font-black text-slate-900 dark:text-white">{{ $heading }}</h3>
                            <p class="relative mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">{{ $copy }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Practical, people-first example showing how an argument improves. --}}
        <section id="thesis-example" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="thesis-example-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl text-center">
                    <span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">Practical example</span>
                    <h2 id="thesis-example-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">What makes an argumentative thesis effective?</h2>
                    <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">A useful thesis identifies the position, narrows its scope, and previews the reasons the paper will defend.</p>
                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-[1.08fr_.92fr]">
                    <div class="rounded-[2rem] border border-slate-200 bg-slate-50 p-6 sm:p-8 dark:border-slate-700 dark:bg-slate-800/60">
                        <div class="rounded-2xl border border-rose-200 bg-rose-50 p-5 dark:border-rose-500/20 dark:bg-rose-500/10">
                            <div class="flex items-center gap-2 text-xs font-black uppercase tracking-[.16em] text-rose-700 dark:text-rose-300">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-rose-500 text-white" aria-hidden="true">&times;</span>
                                Too broad
                            </div>
                            <p class="mt-4 text-lg font-bold leading-7 text-slate-900 dark:text-white">&ldquo;Social media is bad for college students.&rdquo;</p>
                            <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">This states an opinion, but it does not define what should change or identify the reasons the essay will prove.</p>
                        </div>

                        <div class="mt-5 rounded-2xl border border-emerald-200 bg-emerald-50 p-5 dark:border-emerald-500/20 dark:bg-emerald-500/10">
                            <div class="flex items-center gap-2 text-xs font-black uppercase tracking-[.16em] text-emerald-700 dark:text-emerald-300">
                                <span class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-500 text-white" aria-hidden="true">&check;</span>
                                Focused and debatable
                            </div>
                            <p class="mt-4 text-lg font-bold leading-7 text-slate-900 dark:text-white">&ldquo;US colleges should teach digital-wellness strategies during first-year orientation because intentional social media use can improve attention, sleep, and classroom participation.&rdquo;</p>
                            <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-300">The stronger version names the audience, proposes an action, and gives three lines of reasoning that can be researched and challenged.</p>
                        </div>
                    </div>

                    <aside class="rounded-[2rem] bg-slate-900 p-6 text-white sm:p-8" aria-labelledby="thesis-checklist-heading">
                        <h3 id="thesis-checklist-heading" class="text-2xl font-black">Use this thesis checklist</h3>
                        <p class="mt-3 text-sm leading-6 text-slate-400">Before drafting the body paragraphs, make sure the central claim passes each test.</p>
                        <ol class="mt-7 space-y-4">
                            @foreach ([
                                ['Debatable', 'A reasonable reader could disagree with it.'],
                                ['Specific', 'The audience, policy, issue, or scope is clear.'],
                                ['Supportable', 'Credible sources can test the reasons behind it.'],
                                ['Proportional', 'The claim fits the required word count and deadline.'],
                                ['Consistent', 'Every body paragraph directly advances the position.'],
                            ] as $index => [$label, $copy])
                                <li class="flex gap-4">
                                    <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-blue-500/15 text-xs font-black text-blue-300">{{ $index + 1 }}</span>
                                    <span><strong class="block text-sm text-white">{{ $label }}</strong><span class="mt-1 block text-sm leading-6 text-slate-400">{{ $copy }}</span></span>
                                </li>
                            @endforeach
                        </ol>
                    </aside>
                </div>

                <div class="mt-8 rounded-2xl border border-blue-200 bg-blue-50 p-5 text-sm leading-7 text-slate-700 dark:border-blue-500/20 dark:bg-blue-500/10 dark:text-slate-300">
                    Need deeper source evaluation before forming your claim? Explore our <a href="{{ route('services.research-paper.index') }}" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 hover:text-blue-800 dark:text-blue-300 dark:hover:text-blue-200">research paper help</a>. If your argument is complete but needs a final language and citation check, see our <a href="{{ route('services.proofreading-editing.index') }}" class="font-bold text-blue-700 underline decoration-blue-300 underline-offset-4 hover:text-blue-800 dark:text-blue-300 dark:hover:text-blue-200">proofreading and editing help</a>.
                </div>
            </div>
        </section>

        {{-- Code-native visual: faster and sharper than a second decorative bitmap. --}}
        <section id="essay-structure" class="relative scroll-mt-24 overflow-hidden bg-slate-900 py-20 sm:py-24" aria-labelledby="argument-structure-heading">
            <div class="absolute inset-0 opacity-[.035] [background-image:radial-gradient(circle_at_1px_1px,#fff_1px,transparent_0)] [background-size:28px_28px]"></div>
            <div class="absolute -left-24 top-0 h-80 w-80 rounded-full bg-blue-600/20 blur-[100px]"></div>
            <div class="absolute -right-24 bottom-0 h-80 w-80 rounded-full bg-orange-500/15 blur-[100px]"></div>
            <div class="relative mx-auto grid max-w-7xl items-center gap-14 px-4 sm:px-6 lg:grid-cols-[.88fr_1.12fr] lg:px-8">
                <div>
                    <span class="inline-flex rounded-full border border-blue-400/20 bg-blue-400/10 px-4 py-2 text-[11px] font-black uppercase tracking-[.2em] text-blue-300">Argument blueprint</span>
                    <h2 id="argument-structure-heading" class="mt-6 text-3xl font-black leading-tight tracking-tight text-white sm:text-5xl">A structure readers can follow</h2>
                    <p class="mt-6 text-base leading-8 text-slate-300">Each section performs a distinct job. Together they create a persuasive line of reasoning from the opening question to the final implication.</p>
                    <div class="mt-8 rounded-2xl border border-white/10 bg-white/[.04] p-5">
                        <p class="text-sm font-bold text-white">Need a specific argument model?</p>
                        <p class="mt-2 text-sm leading-6 text-slate-400">We can work with Classical, Toulmin, Rogerian, or instructor-defined structures.</p>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute left-6 top-8 h-[calc(100%-4rem)] w-px bg-gradient-to-b from-blue-500 via-violet-500 to-orange-500 sm:left-1/2"></div>
                    <div class="space-y-5">
                        @foreach ([
                            ['Hook & thesis', 'Frame the debate and state the exact position the essay will defend.', 'hover:border-blue-400/40', 'bg-blue-500'],
                            ['Claims & evidence', 'Build one reason at a time and connect every source back to the thesis.', 'hover:border-emerald-400/40', 'bg-emerald-500'],
                            ['Counterargument', 'Present the strongest opposing case accurately instead of creating a straw man.', 'hover:border-violet-400/40', 'bg-violet-500'],
                            ['Rebuttal & conclusion', 'Answer the objection, synthesize the reasoning, and show why the issue matters.', 'hover:border-orange-400/40', 'bg-orange-500'],
                        ] as $index => [$heading, $copy, $hoverClass, $dotClass])
                            <article class="relative ml-14 rounded-2xl border border-white/10 bg-white/[.06] p-5 backdrop-blur transition hover:bg-white/[.09] sm:ml-0 sm:w-[calc(50%-1.75rem)] {{ $index % 2 ? 'sm:ml-auto' : 'sm:mr-auto' }} {{ $hoverClass }}">
                                <span class="absolute -left-[2.65rem] top-5 flex h-7 w-7 items-center justify-center rounded-full border-4 border-slate-900 text-[10px] font-black text-white {{ $dotClass }} {{ $index % 2 ? 'sm:-left-[2.65rem]' : 'sm:-right-[2.65rem] sm:left-auto' }}">{{ $index + 1 }}</span>
                                <h3 class="font-black text-white">{{ $heading }}</h3>
                                <p class="mt-2 text-sm leading-6 text-slate-400">{{ $copy }}</p>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Topics and academic levels --}}
        <section id="topics" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="topics-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col justify-between gap-6 lg:flex-row lg:items-end">
                    <div class="max-w-3xl">
                        <span class="text-xs font-black uppercase tracking-[.22em] text-[#f16700]">Broad subject coverage</span>
                        <h2 id="topics-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">From classroom debates to graduate research</h2>
                        <p class="mt-5 text-base leading-7 text-slate-600 dark:text-slate-400">Your writer adapts the depth of research, tone, and complexity to your course and grading rubric.</p>
                    </div>
                    <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center gap-2 text-sm font-black text-blue-600 hover:text-blue-700 dark:text-blue-400">Discuss your topic <span aria-hidden="true">→</span></a>
                </div>

                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        ['Politics & society', ['Public policy', 'Digital privacy', 'Social media regulation', 'Immigration reform']],
                        ['Education & technology', ['AI in education', 'College affordability', 'Online learning', 'Standardized testing']],
                        ['Health & ethics', ['Universal healthcare', 'Medical consent', 'Public health policy', 'Bioethics']],
                        ['Environment & science', ['Climate policy', 'Renewable energy', 'Animal testing', 'Space funding']],
                        ['Business & economics', ['Minimum wage', 'Corporate responsibility', 'Automation', 'Universal basic income']],
                        ['Custom course topics', ['Instructor prompts', 'Assigned readings', 'Case-based arguments', 'Original research questions']],
                    ] as [$category, $topics])
                        <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6 transition hover:border-blue-200 hover:bg-white hover:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:hover:border-blue-500/30 dark:hover:bg-slate-800">
                            <h3 class="text-lg font-black text-slate-900 dark:text-white">{{ $category }}</h3>
                            <ul class="mt-5 space-y-3">
                                @foreach ($topics as $topic)
                                    <li class="flex items-center gap-3 text-sm text-slate-600 dark:text-slate-300"><span class="h-1.5 w-1.5 rounded-full bg-[#f16700]"></span>{{ $topic }}</li>
                                @endforeach
                            </ul>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- Conversion panel --}}
        <section class="bg-slate-50 py-20 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="relative overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-blue-600 via-indigo-700 to-slate-900 px-6 py-12 shadow-2xl sm:px-12 lg:px-16 lg:py-16">
                    <div class="absolute -right-20 -top-28 h-80 w-80 rounded-full border-[55px] border-white/5"></div>
                    <div class="absolute -bottom-32 -left-20 h-80 w-80 rounded-full bg-orange-500/20 blur-3xl"></div>
                    <div class="relative grid items-center gap-10 lg:grid-cols-[1fr_auto]">
                        <div class="max-w-3xl">
                            <span class="inline-flex rounded-full border border-white/15 bg-white/10 px-4 py-2 text-[10px] font-black uppercase tracking-[.2em] text-blue-100">Your prompt. Your position. Expert support.</span>
                            <h2 class="mt-6 text-3xl font-black leading-tight text-white sm:text-5xl">Turn your argument into a paper that holds up.</h2>
                            <p class="mt-5 max-w-2xl text-base leading-7 text-blue-100">Share your prompt, rubric, sources, and deadline. We will match you with a writer who understands the subject and the logic behind persuasive academic writing.</p>
                        </div>
                        <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                            <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="inline-flex items-center justify-center gap-2 rounded-2xl bg-[#f16700] px-8 py-4 text-sm font-black text-white shadow-xl shadow-orange-950/20 transition hover:-translate-y-0.5 hover:bg-orange-500">Get Started Now <span aria-hidden="true">→</span></a>
                            <span class="text-center text-[11px] font-bold uppercase tracking-[.16em] text-blue-200">24/7 support · secure checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQs --}}
        @php
            $argumentativeFaqs = [
                ['What is the difference between an argumentative and persuasive essay?', 'An argumentative essay relies primarily on evidence, logic, and direct engagement with opposing views. Persuasive writing can use emotional appeals more freely and may not analyze counterarguments in the same depth.'],
                ['Can you work with sources my instructor assigned?', 'Yes. Upload the required readings, prompt, rubric, and any source restrictions with your order. Your writer can prioritize those materials and add outside research only when your instructions allow it.'],
                ['Which citation styles do you support?', 'Our writers work with APA, MLA, Chicago, Harvard, and other common academic styles. Include the required edition or your department guidelines so formatting can be matched accurately.'],
                ['Can you help strengthen an existing draft?', 'Yes. You can request editing and argument development for a draft, including a clearer thesis, stronger evidence-to-claim connections, improved organization, and a more effective counterargument.'],
                ['Do you handle urgent argumentative essays?', 'Urgent delivery options depend on length, complexity, and writer availability. Submit the full brief as early as possible so the team can confirm a realistic turnaround without compromising the research process.'],
            ];
        @endphp
        <section id="faqs" class="scroll-mt-24 bg-white py-20 sm:py-24 dark:bg-slate-900" aria-labelledby="argumentative-faq-heading">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <span class="text-xs font-black uppercase tracking-[.22em] text-blue-600 dark:text-blue-400">Common questions</span>
                    <h2 id="argumentative-faq-heading" class="mt-4 text-3xl font-black tracking-tight text-slate-900 sm:text-5xl dark:text-white">Argumentative essay FAQs</h2>
                </div>
                <div class="mt-12 space-y-4">
                    @foreach ($argumentativeFaqs as [$question, $answer])
                        <details class="group overflow-hidden rounded-2xl border border-slate-200 bg-slate-50 transition open:bg-white open:shadow-lg dark:border-slate-700 dark:bg-slate-800/60 dark:open:bg-slate-800" @if ($loop->first) open @endif>
                            <summary class="flex cursor-pointer list-none items-center justify-between gap-6 px-6 py-5 text-left [&::-webkit-details-marker]:hidden">
                                <span class="font-black text-slate-900 dark:text-white">{{ $question }}</span>
                                <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-white text-blue-600 shadow-sm dark:bg-slate-900 dark:text-blue-400">
                                    <svg class="h-4 w-4 transition-transform group-open:rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 6v12m6-6H6"/></svg>
                                </span>
                            </summary>
                            <div>
                                <p class="border-t border-slate-200 px-6 py-5 text-sm leading-7 text-slate-600 dark:border-slate-700 dark:text-slate-300">{{ $answer }}</p>
                            </div>
                        </details>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
@endsection
