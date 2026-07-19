@php
    $stepStyles = [
        [
            'accent' => 'bg-blue-600',
            'soft' => 'bg-blue-50 text-blue-700 ring-blue-100 dark:bg-blue-500/10 dark:text-blue-300 dark:ring-blue-500/20',
            'border' => 'hover:border-blue-200 dark:hover:border-blue-500/30',
            'dot' => 'bg-blue-500',
        ],
        [
            'accent' => 'bg-violet-600',
            'soft' => 'bg-violet-50 text-violet-700 ring-violet-100 dark:bg-violet-500/10 dark:text-violet-300 dark:ring-violet-500/20',
            'border' => 'hover:border-violet-200 dark:hover:border-violet-500/30',
            'dot' => 'bg-violet-500',
        ],
        [
            'accent' => 'bg-amber-500',
            'soft' => 'bg-amber-50 text-amber-700 ring-amber-100 dark:bg-amber-500/10 dark:text-amber-300 dark:ring-amber-500/20',
            'border' => 'hover:border-amber-200 dark:hover:border-amber-500/30',
            'dot' => 'bg-amber-500',
        ],
        [
            'accent' => 'bg-emerald-600',
            'soft' => 'bg-emerald-50 text-emerald-700 ring-emerald-100 dark:bg-emerald-500/10 dark:text-emerald-300 dark:ring-emerald-500/20',
            'border' => 'hover:border-emerald-200 dark:hover:border-emerald-500/30',
            'dot' => 'bg-emerald-500',
        ],
    ];
@endphp

<section id="process" aria-labelledby="process-heading"
    class="relative overflow-hidden bg-slate-50 py-20 sm:py-24 lg:py-28 dark:bg-slate-950">
    <div class="pointer-events-none absolute inset-0" aria-hidden="true">
        <div class="absolute left-1/2 top-0 h-80 w-[52rem] -translate-x-1/2 rounded-full bg-blue-100/70 blur-3xl dark:bg-blue-950/20"></div>
        <div class="absolute inset-0 bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:28px_28px] opacity-30 dark:opacity-[0.06]"></div>
    </div>

    <div class="section-container relative z-10">
        <div class="mx-auto max-w-3xl text-center">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-blue-200 bg-white px-3.5 py-1.5 text-xs font-black uppercase tracking-[0.18em] text-blue-700 shadow-sm dark:border-blue-500/20 dark:bg-slate-900 dark:text-blue-300">
                <span class="h-2 w-2 rounded-full bg-blue-600" aria-hidden="true"></span>
                A simple 4-step process
            </div>
            <h2 id="process-heading" class="text-3xl font-black tracking-tight text-slate-950 sm:text-4xl lg:text-5xl dark:text-white">
                From your brief to final delivery,
                <span class="text-blue-600 dark:text-blue-400">you always know what comes next.</span>
            </h2>
            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg dark:text-slate-400">
                Share your requirements, approve a clear quote, follow the progress, and review the completed work—all in one straightforward process.
            </p>

            <ul class="mt-8 flex flex-wrap justify-center gap-2.5 text-sm font-bold text-slate-700 dark:text-slate-300" aria-label="Service benefits">
                <li class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <svg class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.31a1 1 0 0 1-1.42 0l-3.75-3.78a1 1 0 0 1 1.42-1.408l3.04 3.064 6.54-6.594a1 1 0 0 1 1.414-.006Z" clip-rule="evenodd"/></svg>
                    Transparent pricing
                </li>
                <li class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <svg class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.31a1 1 0 0 1-1.42 0l-3.75-3.78a1 1 0 0 1 1.42-1.408l3.04 3.064 6.54-6.594a1 1 0 0 1 1.414-.006Z" clip-rule="evenodd"/></svg>
                    Progress updates
                </li>
                <li class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-white px-4 py-2 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <svg class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.31a1 1 0 0 1-1.42 0l-3.75-3.78a1 1 0 0 1 1.42-1.408l3.04 3.064 6.54-6.594a1 1 0 0 1 1.414-.006Z" clip-rule="evenodd"/></svg>
                    Secure and private
                </li>
            </ul>
        </div>

        <div class="relative mx-auto mt-14 max-w-7xl lg:mt-16">
            <div class="absolute left-[12.5%] right-[12.5%] top-10 hidden h-px bg-gradient-to-r from-blue-300 via-violet-300 to-emerald-300 xl:block dark:from-blue-800 dark:via-violet-800 dark:to-emerald-800" aria-hidden="true"></div>

            <ol class="grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($steps as $index => $step)
                    @php($style = $stepStyles[$index])
                    <li class="relative flex">
                        <article class="group relative flex w-full flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-[0_12px_34px_-22px_rgba(15,23,42,0.35)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_42px_-20px_rgba(15,23,42,0.28)] {{ $style['border'] }} dark:border-slate-800 dark:bg-slate-900">
                            <div class="h-1 {{ $style['accent'] }}" aria-hidden="true"></div>
                            <div class="flex h-full flex-col p-6 sm:p-7">
                                <div class="mb-6 flex items-center justify-between">
                                    <div class="relative z-10 flex h-12 w-12 items-center justify-center rounded-xl ring-1 {{ $style['soft'] }}">
                                        @switch($index)
                                            @case(0)
                                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h4m4 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M14 3v5h5"/></svg>
                                                @break
                                            @case(1)
                                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm10-3v6m3-3h-6"/></svg>
                                                @break
                                            @case(2)
                                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m8 9 3 3-3 3m5 0h3M5 4h14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/></svg>
                                                @break
                                            @default
                                                <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20 6 9 17l-5-5"/><path stroke-linecap="round" stroke-linejoin="round" d="M12 22a10 10 0 1 1 10-10"/></svg>
                                        @endswitch
                                    </div>
                                    <span class="text-xs font-black uppercase tracking-[0.16em] text-slate-400 dark:text-slate-500">Step {{ str_pad($step['step'], 2, '0', STR_PAD_LEFT) }}</span>
                                </div>

                                <h3 class="text-xl font-black leading-snug text-slate-950 dark:text-white">{{ $step['title'] }}</h3>
                                <p class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">{{ $step['description'] }}</p>

                                <div class="mt-5 flex items-center gap-2 border-t border-slate-100 pt-5 text-sm dark:border-slate-800">
                                    <svg class="h-4 w-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path stroke-linecap="round" d="M12 7v5l3 2"/></svg>
                                    <span class="text-slate-500 dark:text-slate-400">Timing:</span>
                                    <span class="font-bold text-slate-800 dark:text-slate-200">{{ $step['estimated_time'] }}</span>
                                </div>

                                <details class="group/details mt-5 border-t border-slate-100 pt-4 dark:border-slate-800">
                                    <summary class="flex cursor-pointer list-none items-center justify-between rounded-lg text-sm font-bold text-slate-700 outline-none transition hover:text-blue-600 focus-visible:ring-2 focus-visible:ring-blue-500 focus-visible:ring-offset-4 dark:text-slate-300 dark:hover:text-blue-400 dark:focus-visible:ring-offset-slate-900">
                                        What happens in this step
                                        <svg class="h-4 w-4 transition-transform duration-200 group-open/details:rotate-180" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                                    </summary>
                                    <ul class="mt-4 space-y-3">
                                        @foreach ($step['details'] as $detail)
                                            <li class="flex gap-2.5 text-sm leading-5 text-slate-600 dark:text-slate-400">
                                                <span class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full {{ $style['dot'] }}" aria-hidden="true"></span>
                                                {{ $detail }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </details>
                            </div>
                        </article>
                    </li>
                @endforeach
            </ol>
        </div>

        <div class="mx-auto mt-12 flex max-w-5xl flex-col items-center justify-between gap-6 rounded-2xl bg-slate-900 px-6 py-7 text-center shadow-xl sm:px-8 md:flex-row md:text-left dark:bg-blue-950/60 dark:ring-1 dark:ring-blue-500/20">
            <div>
                <p class="text-lg font-black text-white sm:text-xl">Ready to get your project moving?</p>
                <p class="mt-1 text-sm leading-6 text-slate-300">Submit your brief now. We typically send a clear, no-obligation quote within 15–30 minutes.</p>
            </div>
            <a href="{{ route('order') }}" class="group inline-flex shrink-0 items-center justify-center rounded-xl bg-blue-600 px-6 py-3.5 text-sm font-black text-white shadow-lg shadow-blue-950/20 transition hover:-translate-y-0.5 hover:bg-blue-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-slate-900 active:translate-y-0">
                Submit your requirements
                <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3.75 10a.75.75 0 0 1 .75-.75h9.19L10.22 5.78a.75.75 0 0 1 1.06-1.06l4.75 4.75a.75.75 0 0 1 0 1.06l-4.75 4.75a.75.75 0 1 1-1.06-1.06l3.47-3.47H4.5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
</section>
