<div class="overflow-hidden rounded-[1.75rem] border border-slate-200 bg-white shadow-[0_24px_70px_-36px_rgba(15,23,42,0.38)] dark:border-slate-800 dark:bg-slate-900">
    <div class="flex flex-col gap-4 border-b border-slate-200 bg-slate-50/80 px-5 py-4 sm:flex-row sm:items-center sm:justify-between sm:px-7 dark:border-slate-800 dark:bg-slate-950/40">
        <div class="flex items-center gap-3">
            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-lg shadow-blue-600/20" aria-hidden="true">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 19V9m5 10V5m5 14v-7m5 7V3"/></svg>
            </span>
            <div>
                <p class="text-sm font-black text-slate-900 dark:text-white">Live price estimate</p>
                <p class="mt-0.5 text-xs text-slate-500 dark:text-slate-400">Updates instantly—no email or sign-up required</p>
            </div>
        </div>
        <span class="inline-flex w-fit items-center gap-2 rounded-full border border-emerald-200 bg-emerald-50 px-3 py-1.5 text-xs font-black text-emerald-700 dark:border-emerald-500/20 dark:bg-emerald-500/10 dark:text-emerald-300">
            <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5 2a1 1 0 0 0-1 1v1H3a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h1v7a1 1 0 0 0 1.447.894L10 15.618l4.553 2.276A1 1 0 0 0 16 17v-7h1a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V3a1 1 0 0 0-1-1H5Zm1 2h8v6.382l-3.553 1.776a1 1 0 0 1-.894 0L6 10.382V4Z" clip-rule="evenodd"/></svg>
            40% seasonal discount applied
        </span>
    </div>

    <div class="grid lg:grid-cols-[minmax(0,1.12fr)_minmax(320px,0.88fr)]">
        <div class="p-5 sm:p-7 lg:p-8">
            <div class="mb-7">
                <h3 class="text-xl font-black tracking-tight text-slate-950 sm:text-2xl dark:text-white">Build your estimate</h3>
                <p class="mt-1.5 text-sm leading-6 text-slate-500 dark:text-slate-400">Choose the three details that have the biggest impact on your rate.</p>
            </div>

            <div class="space-y-6">
                <div>
                    <div class="mb-2.5 flex items-end justify-between gap-4">
                        <label for="estimate-pages" class="flex items-center gap-2 text-xs font-black uppercase tracking-[0.12em] text-slate-700 dark:text-slate-300">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-blue-50 text-[10px] text-blue-700 dark:bg-blue-500/10 dark:text-blue-300">1</span>
                            Paper length
                        </label>
                    </div>

                    <div class="flex h-[52px] overflow-hidden rounded-xl border-2 border-gray-300 bg-white transition focus-within:border-blue-500 focus-within:ring-4 focus-within:ring-blue-500/10 dark:border-slate-700 dark:bg-slate-950">
                        <button type="button" wire:click="decrementPages" class="flex w-12 shrink-0 items-center justify-center border-r-2 border-gray-300 text-slate-600 transition hover:bg-slate-100 hover:text-blue-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-blue-500 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-900" aria-label="Decrease page count">
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M4 9.25a.75.75 0 0 0 0 1.5h12a.75.75 0 0 0 0-1.5H4Z"/></svg>
                        </button>
                        <input id="estimate-pages" type="number" min="1" max="100" wire:model.live.debounce.300ms="pages" class="min-w-0 flex-1 border-0 bg-transparent px-3 text-center text-sm font-semibold text-slate-900 [appearance:textfield] focus:ring-0 dark:text-white [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none" aria-describedby="estimate-pages-help">
                        <span id="estimate-pages-help" class="flex items-center text-xs font-bold text-slate-400">{{ $pages === 1 ? 'page' : 'pages' }}</span>
                        <button type="button" wire:click="incrementPages" class="ml-3 flex w-12 shrink-0 items-center justify-center border-l-2 border-gray-300 text-slate-600 transition hover:bg-slate-100 hover:text-blue-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-inset focus-visible:ring-blue-500 dark:border-slate-700 dark:text-slate-300 dark:hover:bg-slate-900" aria-label="Increase page count">
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10.75 4a.75.75 0 0 0-1.5 0v5.25H4a.75.75 0 0 0 0 1.5h5.25V16a.75.75 0 0 0 1.5 0v-5.25H16a.75.75 0 0 0 0-1.5h-5.25V4Z"/></svg>
                        </button>
                    </div>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="estimate-level" class="mb-2.5 flex items-center gap-2 text-xs font-black uppercase tracking-[0.12em] text-slate-700 dark:text-slate-300">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-violet-50 text-[10px] text-violet-700 dark:bg-violet-500/10 dark:text-violet-300">2</span>
                            Academic level
                        </label>
                        <div class="relative">
                            <select id="estimate-level" wire:model.live="academicLevel" class="h-[52px] w-full appearance-none rounded-xl border-2 border-gray-300 bg-white px-4 pr-10 text-sm font-semibold text-slate-800 transition hover:border-gray-400 focus:border-violet-500 focus:outline-none focus:ring-4 focus:ring-violet-500/10 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200 dark:hover:border-slate-600">
                                <option value="high-school">High school</option>
                                <option value="undergraduate">Undergraduate</option>
                                <option value="masters">Master's degree</option>
                                <option value="phd">PhD / Doctoral</option>
                            </select>
                            <svg class="pointer-events-none absolute right-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                        </div>
                    </div>

                    <div>
                        <label for="estimate-deadline" class="mb-2.5 flex items-center gap-2 text-xs font-black uppercase tracking-[0.12em] text-slate-700 dark:text-slate-300">
                            <span class="flex h-5 w-5 items-center justify-center rounded-full bg-amber-50 text-[10px] text-amber-700 dark:bg-amber-500/10 dark:text-amber-300">3</span>
                            Turnaround
                        </label>
                        <div class="relative">
                            <select id="estimate-deadline" wire:model.live="deadline" class="h-[52px] w-full appearance-none rounded-xl border-2 border-gray-300 bg-white px-4 pr-10 text-sm font-semibold text-slate-800 transition hover:border-gray-400 focus:border-amber-500 focus:outline-none focus:ring-4 focus:ring-amber-500/10 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200 dark:hover:border-slate-600">
                                <option value="3-hours">3 hours — urgent</option>
                                <option value="6-hours">6 hours</option>
                                <option value="12-hours">12 hours</option>
                                <option value="24-hours">24 hours</option>
                                <option value="2-days">2 days</option>
                                <option value="3-days">3 days</option>
                                <option value="5-days">5 days</option>
                                <option value="7-days">7 days — standard</option>
                                <option value="14-days">14 days — better value</option>
                                <option value="30-days">30 days — best value</option>
                            </select>
                            <svg class="pointer-events-none absolute right-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M5.22 7.22a.75.75 0 0 1 1.06 0L10 10.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 8.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/></svg>
                    </div>
                </div>
            </div>

            @php($nextTier = $this->nextVolumeTier)
            @if ($nextTier)
                <div class="mt-7 flex items-start gap-3 rounded-xl border border-blue-100 bg-blue-50/70 p-3.5 text-sm dark:border-blue-500/20 dark:bg-blue-500/10">
                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-blue-600 dark:text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10.75 2.75a.75.75 0 0 0-1.5 0v.69a6.5 6.5 0 0 0-5.81 5.81h-.69a.75.75 0 0 0 0 1.5h.69a6.5 6.5 0 0 0 5.81 5.81v.69a.75.75 0 0 0 1.5 0v-.69a6.5 6.5 0 0 0 5.81-5.81h.69a.75.75 0 0 0 0-1.5h-.69a6.5 6.5 0 0 0-5.81-5.81v-.69ZM10 5a5 5 0 1 1 0 10 5 5 0 0 1 0-10Z"/></svg>
                    <p class="leading-5 text-blue-800 dark:text-blue-200">Add <strong>{{ $nextTier['remaining'] }} more {{ $nextTier['remaining'] === 1 ? 'page' : 'pages' }}</strong> to unlock an additional {{ $nextTier['discount'] }}% volume discount.</p>
                </div>
            @endif
        </div>

        <aside class="relative flex flex-col justify-between overflow-hidden bg-slate-950 p-6 text-white sm:p-8" aria-label="Estimated price summary">
            <div class="pointer-events-none absolute -right-16 -top-16 h-48 w-48 rounded-full bg-blue-500/20 blur-3xl" aria-hidden="true"></div>
            <div class="relative">
                <div class="flex items-center justify-between gap-4">
                    <p class="text-xs font-black uppercase tracking-[0.15em] text-slate-400">Estimated total</p>
                    <span wire:loading.flex wire:target="pages,academicLevel,deadline" class="items-center gap-1.5 text-xs font-bold text-blue-300">
                        <svg class="h-3.5 w-3.5 animate-spin" viewBox="0 0 24 24" fill="none"><circle class="opacity-25" cx="12" cy="12" r="9" stroke="currentColor" stroke-width="3"/><path class="opacity-75" d="M21 12a9 9 0 0 0-9-9" stroke="currentColor" stroke-width="3" stroke-linecap="round"/></svg>
                        Updating
                    </span>
                </div>

                <div class="mt-4" aria-live="polite" aria-atomic="true">
                    <div class="flex items-end gap-3">
                        <span class="text-5xl font-black tracking-[-0.05em] sm:text-6xl" wire:loading.class="opacity-50" wire:target="pages,academicLevel,deadline">${{ number_format($this->discountedPrice, 2) }}</span>
                        <span class="mb-2 text-sm font-bold text-slate-500 line-through">${{ number_format($this->totalPrice, 2) }}</span>
                    </div>
                    <p class="mt-2 text-sm text-slate-400">That is <strong class="text-white">${{ number_format($this->pricePerPage, 2) }}</strong> per page after discounts.</p>
                </div>

                <dl class="mt-7 divide-y divide-white/10 rounded-xl border border-white/10 bg-white/[0.04] px-4">
                    <div class="flex items-center justify-between py-3 text-sm">
                        <dt class="text-slate-400">Base rate</dt>
                        <dd class="font-bold">${{ number_format($this->basePrice, 2) }} / page</dd>
                    </div>
                    <div class="flex items-center justify-between py-3 text-sm">
                        <dt class="text-slate-400">Seasonal discount</dt>
                        <dd class="font-black text-emerald-400">−{{ number_format($discount * 100) }}%</dd>
                    </div>
                    @if ($this->volumeDiscount > 0)
                        <div class="flex items-center justify-between py-3 text-sm">
                            <dt class="text-slate-400">Volume discount</dt>
                            <dd class="font-black text-emerald-400">−{{ number_format($this->volumeDiscount * 100) }}%</dd>
                        </div>
                    @endif
                    <div class="flex items-center justify-between py-3 text-sm">
                        <dt class="text-slate-400">You save today</dt>
                        <dd class="font-black text-emerald-400">${{ number_format($this->discountAmount, 2) }}</dd>
                    </div>
                </dl>
            </div>

            <div class="relative mt-7">
                <a href="{{ route('order', ['level' => $academicLevel, 'pages' => $pages, 'deadline' => $deadline]) }}" class="group flex w-full items-center justify-center rounded-xl bg-blue-600 px-5 py-3.5 text-sm font-black text-white shadow-lg shadow-black/20 transition hover:-translate-y-0.5 hover:bg-blue-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-offset-2 focus-visible:ring-offset-slate-950 active:translate-y-0">
                    Continue with this estimate
                    <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-0.5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M3.75 10a.75.75 0 0 1 .75-.75h9.19L10.22 5.78a.75.75 0 0 1 1.06-1.06l4.75 4.75a.75.75 0 0 1 0 1.06l-4.75 4.75a.75.75 0 1 1-1.06-1.06l3.47-3.47H4.5a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd"/></svg>
                </a>
                <p class="mt-3 text-center text-[11px] leading-4 text-slate-500">No payment required. Final price is confirmed after we review your brief.</p>
            </div>
        </aside>
    </div>

    <ul class="grid gap-3 border-t border-slate-200 bg-slate-50/70 px-5 py-4 text-xs font-bold text-slate-600 sm:grid-cols-3 sm:px-7 dark:border-slate-800 dark:bg-slate-950/40 dark:text-slate-400" aria-label="Order assurances">
        <li class="flex items-center gap-2"><svg class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.31a1 1 0 0 1-1.42 0l-3.75-3.78a1 1 0 0 1 1.42-1.408l3.04 3.064 6.54-6.594a1 1 0 0 1 1.414-.006Z" clip-rule="evenodd"/></svg>Free revisions included</li>
        <li class="flex items-center gap-2"><svg class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.31a1 1 0 0 1-1.42 0l-3.75-3.78a1 1 0 0 1 1.42-1.408l3.04 3.064 6.54-6.594a1 1 0 0 1 1.414-.006Z" clip-rule="evenodd"/></svg>Private and confidential</li>
        <li class="flex items-center gap-2"><svg class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M16.704 5.29a1 1 0 0 1 .006 1.414l-7.25 7.31a1 1 0 0 1-1.42 0l-3.75-3.78a1 1 0 0 1 1.42-1.408l3.04 3.064 6.54-6.594a1 1 0 0 1 1.414-.006Z" clip-rule="evenodd"/></svg>24/7 expert support</li>
    </ul>
</div>
