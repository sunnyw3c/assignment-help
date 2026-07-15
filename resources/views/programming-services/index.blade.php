@extends('layouts.app')

@section('title', 'Programming Help – Expert Coding Assignment Help USA | AssignmentHelpUSA')
@section('description', 'Get professional programming help from vetted USA coders. Python, Java, C++, JavaScript, SQL & more. 100% original code, 24/7 support, on-time delivery. Starting from $15.')

@section('content')

    {{-- CREATIVE HERO SECTION — DO NOT MODIFY --}}
    <x-creative-hero
        title="Expert Programming Help for Every Need"
        subtitle="From debugging a single function to building complete applications — get clean, commented, working code from certified USA developers. Guaranteed on-time delivery."
        service-type="Technical"
    />

    {{-- ===================================================
         SECTION 1 – TRUST BAR
    =================================================== --}}
    <section class="border-y border-slate-100 bg-white py-5 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
                <div class="flex items-center gap-2.5">
                    <div class="flex text-amber-400 text-sm">★★★★★</div>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">4.9/5</span>
                    <span class="text-xs text-slate-500 dark:text-slate-400">from 2,600+ reviews</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <span class="flex h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                    <span class="text-xs font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">47</strong> experts online now</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                    <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">10,000+ Projects Delivered</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Delivery in as fast as 1 hour</span>
                </div>
                <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                <div class="flex items-center gap-2">
                    <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" /></svg>
                    <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">100% Original Code</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 2 – LANGUAGE QUICK LINKS
         SEO: Internal linking hub for topical authority
    =================================================== --}}
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" id="languages" aria-labelledby="languages-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center">
                <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Programming Help by Language</p>
                <h2 id="languages-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Get <span class="text-blue-600 dark:text-blue-400">Programming Help</span> in Any Language
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                    Stuck on a coding assignment? Our certified experts provide programming help across 50+ languages and frameworks — from introductory CS courses to advanced software engineering projects.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">

                <a href="{{ route('services.programming.show', 'python') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-blue-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">🐍</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">Python Help</span>
                    <span class="text-[11px] font-semibold text-blue-600 dark:text-blue-400">Most Popular</span>
                </a>

                <a href="{{ route('services.programming.show', 'java') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-orange-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-orange-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">☕</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">Java Help</span>
                    <span class="text-[11px] font-semibold text-orange-600 dark:text-orange-400">Top Rated</span>
                </a>

                <a href="{{ route('services.programming.show', 'algorithms') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-indigo-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">⚙️</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">C / C++ Help</span>
                    <span class="text-[11px] font-semibold text-indigo-600 dark:text-indigo-400">High Demand</span>
                </a>

                <a href="{{ route('services.programming.show', 'web-development') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-amber-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-amber-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">🟨</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">JavaScript Help</span>
                    <span class="text-[11px] font-semibold text-amber-600 dark:text-amber-400">Full-Stack</span>
                </a>

                <a href="{{ route('services.programming.show', 'php') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-violet-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-violet-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">🐘</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">PHP Help</span>
                    <span class="text-[11px] font-semibold text-violet-600 dark:text-violet-400">Laravel/WP</span>
                </a>

                <a href="{{ route('services.programming.show', 'database') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-cyan-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">🗄️</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">SQL / Database</span>
                    <span class="text-[11px] font-semibold text-cyan-600 dark:text-cyan-400">MySQL/Postgres</span>
                </a>

                <a href="{{ route('services.programming.show', 'machine-learning') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-emerald-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">🤖</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">ML / AI Help</span>
                    <span class="text-[11px] font-semibold text-emerald-600 dark:text-emerald-400">TensorFlow/PyTorch</span>
                </a>

                <a href="{{ route('services.programming.show', 'mobile-app') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-pink-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-pink-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">📱</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">Mobile App Help</span>
                    <span class="text-[11px] font-semibold text-pink-600 dark:text-pink-400">iOS &amp; Android</span>
                </a>

                <a href="{{ route('services.programming.show', 'debugging') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-red-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-red-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">🔧</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">Debugging Help</span>
                    <span class="text-[11px] font-semibold text-red-600 dark:text-red-400">Bug Fixing</span>
                </a>

                <a href="{{ route('services.programming.show', 'algorithms') }}" class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-4 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-teal-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900 dark:hover:border-teal-400">
                    <span class="text-3xl group-hover:scale-110 transition-transform duration-300">🔢</span>
                    <span class="text-sm font-bold text-slate-900 dark:text-white">Data Structures</span>
                    <span class="text-[11px] font-semibold text-teal-600 dark:text-teal-400">Algorithms</span>
                </a>
            </div>

            <div class="mt-8 text-center">
                <a href="#all-services" class="inline-flex items-center gap-2 rounded-xl border border-slate-300 bg-white px-5 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:bg-slate-900 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400">
                    View All Programming Help Services
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 3 – WHY CHOOSE US (dark)
         SEO: E-E-A-T section; targets "programming help" intent
    =================================================== --}}
    <section class="bg-slate-900 py-16 sm:py-20" aria-labelledby="why-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-14">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6">
                    <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                    <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">Trusted by 50,000+ Students</span>
                </div>
                <h2 id="why-heading" class="text-4xl md:text-5xl font-black text-white leading-tight">
                    Why Students Get <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Programming Help from Us</span>
                </h2>
                <p class="mt-5 text-base text-slate-400 max-w-2xl mx-auto">
                    When you search for <strong class="text-white">programming help</strong> online, you need more than code — you need clean solutions, real explanations, and a team you can trust.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-10 items-start">
                {{-- Left: Content blocks --}}
                <div class="space-y-5 text-slate-400 text-[15px] leading-relaxed">
                    <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                        <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                            <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                            Vetted Coders, Not Random Freelancers
                        </h3>
                        <p>Every developer on our platform passes a rigorous vetting process — coding tests, live interviews, and credential verification. When you get <strong class="text-white font-semibold">programming help</strong> from us, your code is written by a specialist who has hands-on experience with your exact language, framework, or algorithm type. We don't use copy-paste factories — every solution is built from scratch for your specific requirements.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                        <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                            <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                            Code That Works &amp; Code You Understand
                        </h3>
                        <p>Our <strong class="text-white font-semibold">programming help</strong> goes beyond just submitting working code. Every delivery includes inline comments, a plain-English walkthrough, and a logical explanation of the approach taken. We want you to understand the solution — not just turn it in.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                        <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                            <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                            Deadlines Are Non-Negotiable
                        </h3>
                        <p>Our <strong class="text-white font-semibold">programming help</strong> service has a 98% on-time delivery rate across 10,000+ projects. We accept urgent requests — from 1 hour to multiple days — and our project managers monitor every assignment in real time.</p>
                    </div>
                </div>

                {{-- Right: Feature list + CTA --}}
                <div class="space-y-5">
                    <div class="p-7 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10">
                        <h3 class="text-xl font-black text-white mb-6">What You Get with Every Order</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">✅</div>
                                <div><p class="text-white font-bold text-sm">100% Original Code</p><p class="text-xs text-slate-500 mt-0.5">Written from scratch — never copy-pasted or recycled from other projects</p></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📝</div>
                                <div><p class="text-white font-bold text-sm">Inline Comments &amp; Docs</p><p class="text-xs text-slate-500 mt-0.5">Every file thoroughly commented so you can follow along and learn</p></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">⚡</div>
                                <div><p class="text-white font-bold text-sm">Fast, Reliable Delivery</p><p class="text-xs text-slate-500 mt-0.5">98% of orders delivered before the deadline — urgent options available</p></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔄</div>
                                <div><p class="text-white font-bold text-sm">Free Revisions (72 hrs)</p><p class="text-xs text-slate-500 mt-0.5">Request adjustments within 72 hours at no extra charge</p></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔒</div>
                                <div><p class="text-white font-bold text-sm">Complete Confidentiality</p><p class="text-xs text-slate-500 mt-0.5">Your identity and academic institution are never shared or disclosed</p></div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">💬</div>
                                <div><p class="text-white font-bold text-sm">24/7 Live Support</p><p class="text-xs text-slate-500 mt-0.5">Chat directly with your developer or our support team anytime</p></div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('order') }}" class="group relative inline-flex w-full items-center justify-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-500 transition-all duration-300 shadow-lg hover:-translate-y-0.5 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                        <span class="relative z-10">Get My Programming Help Now</span>
                        <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                    <p class="text-center text-[11px] text-slate-600 font-semibold uppercase tracking-wider">Free quote in under 5 minutes · No commitment required</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 4 – ALL SERVICES GRID
         SEO: Topical depth; internal links to sub-pages
    =================================================== --}}
    <section id="all-services" class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="services-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center">
                <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">All Services</p>
                <h2 id="services-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Complete <span class="text-blue-600 dark:text-blue-400">Programming Help</span> Services
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                    From simple homework debugging to complex enterprise software — our certified developers cover every type of programming assignment.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach($services as $service)
                <article class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex items-center gap-3">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white shadow-sm group-hover:scale-110 transition-transform duration-300">
                            <span class="text-xl">{{ $service['icon'] }}</span>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $service['name'] }}</h3>
                            <span class="text-[11px] font-semibold uppercase tracking-wide text-blue-600 dark:text-blue-400">⚡ {{ $service['turnaround'] }}</span>
                        </div>
                    </div>
                    <div class="mb-3 flex items-center justify-between text-xs font-semibold">
                        <span class="flex items-center gap-1 text-amber-600 dark:text-amber-400">★ {{ $service['rating'] }}/5 rating</span>
                        <span class="rounded-full bg-emerald-100 px-2.5 py-1 text-emerald-700 dark:bg-emerald-950/40 dark:text-emerald-400">From {{ $service['price_from'] }}</span>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $service['description'] }}</p>
                    <ul role="list" class="mb-5 grid grid-cols-2 gap-1.5 text-xs font-semibold text-slate-700 dark:text-slate-300">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-center gap-1.5">
                            <svg class="h-3.5 w-3.5 shrink-0 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" /></svg>
                            <span>{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <p class="mb-4 text-[11px] font-semibold text-slate-400 dark:text-slate-500">{{ number_format($service['orders_completed']) }}+ projects completed</p>
                    <div class="mt-auto flex gap-2">
                        <a href="{{ route('services.programming.show', $service['slug']) }}" class="flex-1 inline-flex items-center justify-center gap-1.5 rounded-xl border border-slate-300 px-3 py-2.5 text-xs font-bold text-slate-700 transition-colors hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400">View Details</a>
                        <a href="{{ route('order') }}" class="flex-1 inline-flex items-center justify-center gap-1.5 rounded-xl bg-blue-600 px-3 py-2.5 text-xs font-bold text-white shadow-sm transition-all hover:bg-blue-500">Get Help Now</a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 5 – HOW IT WORKS
         SEO: Targets "how does programming help work" intent
    =================================================== --}}
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="hiw-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-12 max-w-2xl text-center">
                <p class="mb-3 text-xs font-black uppercase tracking-widest text-purple-600 dark:text-purple-400">How It Works</p>
                <h2 id="hiw-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Get <span class="text-purple-600 dark:text-purple-400">Programming Help</span> in 4 Simple Steps
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                    Our streamlined process gets your programming assignment in the hands of an expert in minutes — not hours.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 text-base font-black text-white shadow-md">1</div>
                    <div class="mb-3 text-2xl">📋</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Submit Your Requirements</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Describe your programming problem, share files, set your deadline, and specify the language or framework.</p>
                </div>
                <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 text-base font-black text-white shadow-md">2</div>
                    <div class="mb-3 text-2xl">🎯</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Get Matched to an Expert</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We pair your task with a certified developer who specialises in your exact language and assignment type.</p>
                </div>
                <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 text-base font-black text-white shadow-md">3</div>
                    <div class="mb-3 text-2xl">💻</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Code is Built &amp; Tested</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your developer writes clean, commented code, runs it against your requirements, and performs quality checks.</p>
                </div>
                <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-600 text-base font-black text-white shadow-md">4</div>
                    <div class="mb-3 text-2xl">🚀</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Delivery &amp; Support</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Receive working code, full documentation, and a walkthrough. Free revisions within 72 hours of delivery.</p>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('order') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-purple-600 px-8 py-3.5 text-sm font-black text-white shadow-sm transition-all hover:bg-purple-500 hover:-translate-y-0.5">
                    Start My Order Now
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 6 – GUARANTEES
         SEO: Targets "safe/reliable programming help"
    =================================================== --}}
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="guarantee-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-12 max-w-2xl text-center">
                <p class="mb-3 text-xs font-black uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Our Guarantees</p>
                <h2 id="guarantee-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Risk-Free <span class="text-emerald-600 dark:text-emerald-400">Programming Help</span> You Can Count On
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">Every order is protected by our industry-leading guarantees — because your trust is the foundation of everything we do.</p>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-900/40 dark:bg-blue-950/20">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">💡</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Original Code</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every solution is written specifically for your assignment — no templates, no recycled code, no plagiarism. We guarantee uniqueness on every delivery.</p>
                </div>
                <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-900/40 dark:bg-emerald-950/20">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-xl text-white">⏱️</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">On-Time Delivery</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">98% of programming help orders are delivered on or before the deadline. We accept urgent requests with delivery in as little as 1 hour.</p>
                </div>
                <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6 dark:border-purple-900/40 dark:bg-purple-950/20">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-xl text-white">🔄</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Free Revisions</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Not 100% satisfied? We offer free, unlimited revisions within 72 hours of delivery. Your satisfaction is guaranteed — period.</p>
                </div>
                <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-900/40 dark:bg-amber-950/20">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-600 text-xl text-white">💰</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Money-Back Guarantee</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">If we fail to deliver on our promises, you are entitled to a full or partial refund. We stand behind every order we take.</p>
                </div>
                <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950/20">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-slate-700 text-xl text-white">🔒</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Complete Confidentiality</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your personal details, university, and assignment are kept strictly private. We use SSL encryption and never share your data with third parties.</p>
                </div>
                <div class="rounded-2xl border border-cyan-200 bg-cyan-50 p-6 dark:border-cyan-900/40 dark:bg-cyan-950/20">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-600 text-xl text-white">💬</div>
                    <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">24/7 Expert Support</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our support team and developer network are available around the clock. Message your expert directly or contact support anytime — day or night.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 7 – STUDENT REVIEWS
         Visible testimonials only (no self-serving review structured data)
    =================================================== --}}
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="reviews-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-12 max-w-2xl text-center">
                <p class="mb-3 text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">Student Reviews</p>
                <h2 id="reviews-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    What Students Say About Our <span class="text-amber-600 dark:text-amber-400">Programming Help</span>
                </h2>
                <div class="mt-4 flex items-center justify-center gap-3">
                    <div class="flex text-amber-400 text-lg">★★★★★</div>
                    <span class="text-2xl font-black text-slate-900 dark:text-white">4.9</span>
                    <span class="text-sm text-slate-500 dark:text-slate-400">/ 5.0 from 2,600+ verified reviews</span>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Python Programming</span>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"I was completely stuck on my Python data structures assignment with only 8 hours left. The expert had clean, commented code ready 4 hours before my deadline. Explained every function — I actually learned something."</p>
                    <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                        <div><p class="text-sm font-bold text-slate-900 dark:text-white">Alex T.</p><p class="text-xs text-slate-500">University of Texas</p></div>
                    </div>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Java OOP</span>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"My Java OOP assignment was complex — multiple inheritance, abstract classes, the works. The programmer handled it flawlessly and the code ran on first execution. Absolutely worth every penny."</p>
                    <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                        <div><p class="text-sm font-bold text-slate-900 dark:text-white">Maria S.</p><p class="text-xs text-slate-500">UCLA</p></div>
                    </div>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">SQL Database</span>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Got help with a complex SQL project including stored procedures and triggers. Delivered ahead of schedule with a detailed explanation document. My professor commented that the schema design was excellent."</p>
                    <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                        <div><p class="text-sm font-bold text-slate-900 dark:text-white">James K.</p><p class="text-xs text-slate-500">University of Michigan</p></div>
                    </div>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Machine Learning</span>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"The ML expert helped me with a neural network project in PyTorch. Not only did they build the model but explained the hyperparameters and training loop. I learned more from their explanation than 3 weeks of lectures."</p>
                    <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                        <div><p class="text-sm font-bold text-slate-900 dark:text-white">Priya R.</p><p class="text-xs text-slate-500">Georgia Tech</p></div>
                    </div>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">C++ Algorithms</span>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Needed help with graph traversal algorithms for my CS final project. The C++ code was clean, well-structured, and met all the time complexity requirements. Got an A on the project."</p>
                    <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                        <div><p class="text-sm font-bold text-slate-900 dark:text-white">Chris M.</p><p class="text-xs text-slate-500">NYU</p></div>
                    </div>
                </article>

                <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                    <div class="mb-3 flex items-center justify-between">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Web Development</span>
                    </div>
                    <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Had a React + Node.js full-stack project due in 48 hours. The developer built a complete working app with proper API routes, authentication, and responsive UI. Delivered 12 hours early with thorough documentation."</p>
                    <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                        <div><p class="text-sm font-bold text-slate-900 dark:text-white">Emily W.</p><p class="text-xs text-slate-500">Boston University</p></div>
                    </div>
                </article>
            </div>

            <div class="mt-8 text-center">
                <a href="{{ route('reviews') }}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-500 dark:text-blue-400 transition-colors">
                    Read All 2,600+ Reviews
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 8 – SEO CONTENT BLOCK
         SEO: Long-form E-E-A-T content for ranking signals
    =================================================== --}}
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="content-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h2 id="content-heading" class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">🎯</span>
                            What Is Programming Help?
                        </h2>
                        <div class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            <p><strong class="text-slate-900 dark:text-white font-semibold">Programming help</strong> refers to professional expert assistance with coding assignments, software projects, and technical coursework. Whether you are a beginner struggling with loops and conditionals, or an advanced student tackling distributed systems or machine learning pipelines — programming help bridges the gap between where you are and where your grade requires you to be.</p>
                            <p>Unlike tutoring, which walks you through theory, our <strong class="text-slate-900 dark:text-white font-semibold">programming help</strong> service delivers working, tested solutions alongside clear explanations — so you both complete the assignment and understand it.</p>
                            <p>Our experts cover <strong class="text-slate-900 dark:text-white font-semibold">programming help</strong> for: Python, Java, C, C++, C#, JavaScript, PHP, SQL, R, MATLAB, Kotlin, Swift, Go, Rust, Ruby, and 40+ more languages — plus all major frameworks, databases, and DevOps tools.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">🏫</span>
                            Who Uses Our Programming Help?
                        </h3>
                        <ul class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            <li class="flex items-start gap-3">
                                <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                <span><strong class="text-slate-900 dark:text-white font-semibold">CS Students (Undergraduate):</strong> Getting programming help for introductory and intermediate coursework in Python, Java, and data structures</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                <span><strong class="text-slate-900 dark:text-white font-semibold">Graduate Students:</strong> Advanced programming help for thesis projects, ML models, research implementations, and capstone software</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                <span><strong class="text-slate-900 dark:text-white font-semibold">Bootcamp Learners:</strong> Coding bootcamp students needing programming help to bridge gaps and meet assignment deadlines</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                <span><strong class="text-slate-900 dark:text-white font-semibold">Working Professionals:</strong> Part-time students balancing jobs who need reliable programming help to stay on top of coursework</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                <span><strong class="text-slate-900 dark:text-white font-semibold">International Students:</strong> Non-native English speakers who need programming help to meet US academic standards</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">⭐</span>
                            Technologies We Cover
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(['Python','Java','C++','C#','JavaScript','TypeScript','PHP','SQL','MySQL','PostgreSQL','MongoDB','React','Node.js','Django','Flask','Laravel','Spring Boot','Angular','Vue.js','React Native','Flutter','Swift','Kotlin','Go','Rust','Ruby on Rails','TensorFlow','PyTorch','scikit-learn','Pandas','NumPy','R','MATLAB','Scala','Hadoop','Docker','Kubernetes','AWS','Git','GraphQL'] as $tech)
                            <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-bold text-slate-700 dark:bg-slate-800 dark:text-slate-300">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">📊</span>
                            Our Track Record
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <p class="text-xl font-black text-blue-600 dark:text-blue-400">10,000+</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Projects Delivered</p>
                            </div>
                            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <p class="text-xl font-black text-emerald-600 dark:text-emerald-400">98%</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Rate</p>
                            </div>
                            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <p class="text-xl font-black text-amber-600 dark:text-amber-400">4.9★</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</p>
                            </div>
                            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <p class="text-xl font-black text-purple-600 dark:text-purple-400">50+</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Languages Covered</p>
                            </div>
                            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <p class="text-xl font-black text-cyan-600 dark:text-cyan-400">24/7</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Support Available</p>
                            </div>
                            <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                <p class="text-xl font-black text-red-600 dark:text-red-400">$0</p>
                                <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Revision Cost</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 9 – FAQ ACCORDION
         SEO: Targets People Also Ask SERP features
    =================================================== --}}
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="faq-heading">
        <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-12 max-w-2xl text-center">
                <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">FAQs</p>
                <h2 id="faq-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Frequently Asked Questions About <span class="text-blue-600 dark:text-blue-400">Programming Help</span>
                </h2>
            </div>

            <div class="space-y-3">

                <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                    <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Is getting programming help online safe and legal?</span>
                        <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="faq-body hidden px-6 pb-5">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Using a professional programming help service for academic assignments is legally permitted in most institutions — similar to using a tutor or study group. We provide model solutions and detailed explanations to support your learning. We strongly recommend reviewing your specific institutional policies before submitting any external work.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                    <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="text-sm font-bold text-slate-900 dark:text-white">How quickly can I get programming help?</span>
                        <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="faq-body hidden px-6 pb-5">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We accept urgent orders with delivery as fast as 1 hour for simple tasks such as debugging, short scripts, or single-function problems. More complex projects (full-stack apps, ML models, database systems) typically require 24 to 72 hours. Provide your deadline when ordering and we will confirm feasibility immediately.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                    <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="text-sm font-bold text-slate-900 dark:text-white">What programming languages do you cover?</span>
                        <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="faq-body hidden px-6 pb-5">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our experts cover 50+ languages including Python, Java, C, C++, C#, JavaScript, TypeScript, PHP, SQL, R, MATLAB, Ruby, Swift, Kotlin, Go, Rust, and Scala. We also cover frameworks like React, Node.js, Django, Spring Boot, Laravel, Flutter, and TensorFlow/PyTorch for ML projects.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                    <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Will the code actually run and compile?</span>
                        <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="faq-body hidden px-6 pb-5">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely. Every programming help delivery is tested before submission. We run the code against your specified requirements, confirm it compiles or executes without errors, and include test outputs where relevant. If your code does not run as expected, we will fix it at no charge under our revision guarantee.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                    <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="text-sm font-bold text-slate-900 dark:text-white">How much does programming help cost?</span>
                        <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="faq-body hidden px-6 pb-5">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Pricing depends on complexity, language, and deadline. Simple tasks (debugging, short functions) start from $15. Standard assignments range from $25 to $60. Complex projects (full-stack applications, ML pipelines, distributed systems) are quoted individually. You receive a free, no-obligation quote within minutes of submitting your requirements.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                    <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Can I communicate with my programmer directly?</span>
                        <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="faq-body hidden px-6 pb-5">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Once your order is placed and matched, you can message your assigned developer directly through our platform. You can share additional requirements, ask questions about the approach, or request progress updates at any stage.</p>
                    </div>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                    <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                        <span class="text-sm font-bold text-slate-900 dark:text-white">What if I am not satisfied with the delivered code?</span>
                        <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <div class="faq-body hidden px-6 pb-5">
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We offer free, unlimited revisions within 72 hours of delivery. If revisions do not resolve the issue, you are entitled to a refund under our money-back guarantee. Your satisfaction is our top priority and we have maintained a 98%+ satisfaction rate across 10,000+ programming help orders.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===================================================
         SECTION 10 – FINAL CTA
         SEO: Reinforces primary "programming help" keyword
    =================================================== --}}
    <section class="relative overflow-hidden bg-slate-900 py-16 sm:py-20">
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                <span class="flex h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Expert Programmers Online Now</span>
            </div>

            <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                Ready to Get<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Professional Programming Help?</span>
            </h2>

            <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                Join over 50,000 students who have trusted our <strong class="text-white">programming help</strong> service to deliver clean, commented, working code — on time, every time. Submit your requirements now and get a free quote in under 5 minutes.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                    <span class="relative z-10 text-sm">Get My Programming Help Now</span>
                    <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                </a>
                <span class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.3em]">Free Quote &middot; No Commitment</span>
            </div>

            <div class="mt-12 flex flex-wrap items-center justify-center gap-x-10 gap-y-5">
                <div class="text-center">
                    <p class="text-2xl font-black text-white">10,000+</p>
                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Projects Delivered</p>
                </div>
                <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                <div class="text-center">
                    <p class="text-2xl font-black text-white">4.9/5</p>
                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</p>
                </div>
                <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                <div class="text-center">
                    <p class="text-2xl font-black text-white">98%</p>
                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Delivery</p>
                </div>
                <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                <div class="text-center">
                    <p class="text-2xl font-black text-white">24/7</p>
                    <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Expert Support</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Schema Markup --}}
    <script type="application/ld+json">{"@@context":"https://schema.org","@@type":"FAQPage","mainEntity":[{"@@type":"Question","name":"Is getting programming help online safe and legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Using a professional programming help service for academic assignments is legally permitted in most institutions, similar to using a tutor or study group."}},{"@@type":"Question","name":"How quickly can I get programming help?","acceptedAnswer":{"@@type":"Answer","text":"We accept urgent orders with delivery as fast as 1 hour for simple tasks. More complex projects typically require 24 to 72 hours."}},{"@@type":"Question","name":"What programming languages do you cover?","acceptedAnswer":{"@@type":"Answer","text":"Our experts cover 50+ languages including Python, Java, C, C++, C#, JavaScript, TypeScript, PHP, SQL, R, MATLAB, Ruby, Swift, Kotlin, Go, and Rust."}},{"@@type":"Question","name":"How much does programming help cost?","acceptedAnswer":{"@@type":"Answer","text":"Simple tasks start from $15. Standard assignments range from $25 to $60. Complex projects are quoted individually."}},{"@@type":"Question","name":"What if I am not satisfied with the delivered code?","acceptedAnswer":{"@@type":"Answer","text":"We offer free unlimited revisions within 72 hours of delivery. If not resolved, you are entitled to a refund under our money-back guarantee."}}]}</script>

    <script type="application/ld+json">{"@@context":"https://schema.org","@@type":"Service","name":"Programming Help","description":"Professional programming help and coding assignment assistance for students. Expert coders available 24/7 for Python, Java, C++, JavaScript, SQL, and 50+ languages.","provider":{"@@type":"Organization","name":"AssignmentHelpUSA","url":"https://assignmenthelpusa.com"},"areaServed":"US","serviceType":"Programming Assignment Help","offers":{"@@type":"AggregateOffer","priceCurrency":"USD","lowPrice":"15","highPrice":"500"}}</script>

@endsection
