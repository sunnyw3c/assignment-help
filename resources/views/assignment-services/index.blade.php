@extends('layouts.app')

@section('title', 'Academic Assignment Help | Expert Writing Services')
@section('description', 'Professional academic assignment help for USA students. Expert researchers provide quality writing services for essays, reports, and more. Success starts here!')

@section('content')
    <!-- Structured Data for Assignment Services -->
    {{-- <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "ItemList",
        "name": "Assignment Help Services We Offer",
        "description": "Professional academic assignment help services for students at all levels",
        "numberOfItems": {{ count($services) }},
        "itemListElement": [
            @foreach($services as $index => $service)
            {
                "@@type": "ListItem",
                "position": {{ $index + 1 }},
                "item": {
                    "@@type": "Service",
                    "name": "{{ $service->name }}",
                    "description": "{{ $service->short_description }}",
                    "provider": {
                        "@@type": "Organization",
                        "name": "AssignmentHelp"
                    },
                    "offers": {
                        "@@type": "Offer",
                        "priceSpecification": {
                            "@@type": "PriceSpecification",
                            "price": "{{ $service->base_price_per_page }}",
                            "priceCurrency": "USD"
                        }
                    }
                }
            }@if(!$loop->last),@endif
            @endforeach
        ]
    }
    </script> --}}

    <!-- Hero Section -->
    <x-creative-hero
        title="Expert Assignment Help for Every Subject"
        subtitle="Stuck on a deadline? Our online assignment help connects you with real academic experts who get it done right — plagiarism-free, properly cited, and delivered before you need it."
        service-type="Writing"
    />

    <!-- Budget Calculator Section -->
    <section class="bg-slate-900 py-14 sm:py-16 dark:bg-slate-950">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Calculate Your Assignment Cost</h2>
                <p class="mt-3 text-sm text-slate-400 sm:text-base">Get an instant price estimate — no signup required</p>
            </div>
            <div class="mx-auto max-w-sm">
                <livewire:budget-calculator />
            </div>
        </div>
    </section>

    <!-- Assignment Search Filter Section -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <livewire:assignment-search-filter />
        </div>
    </section>

    <!-- Assignment Services Showcase -->
    <section id="services" class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" role="main" aria-labelledby="services-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Assignment Help Services</p>
                <h2 id="services-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Professional Academic <span class="text-blue-600 dark:text-blue-400">Writing &amp; Assignment Help</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">
                    Not every assignment is the same — and neither is our assignment help service. Browse below and find the right academic assistance for your subject, your level, and your deadline.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-3">
                @foreach($services as $service)
                <article class="flex flex-col overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                    <!-- Header -->
                    <div class="bg-blue-600 p-6">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white shadow-sm">
                                    <span class="text-xl">{{ $service->icon }}</span>
                                </div>
                                <div>
                                    <h3 class="text-base font-bold leading-tight text-white">{{ $service->name }}</h3>
                                    <p class="text-xs text-blue-100">{{ $service->turnaround }}</p>
                                </div>
                            </div>
                            <div class="shrink-0 rounded-full bg-white/20 px-2.5 py-1">
                                <span class="text-xs font-semibold text-white">{{ $service->formatted_price }}</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-xs text-white/90">
                            <div class="flex items-center gap-1.5">
                                <span>⭐</span>
                                <span>{{ $service->rating }}/5 Rating</span>
                            </div>
                            <div class="text-blue-100">
                                {{ $service->orders_completed }}+ completed
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-1 flex-col p-6">
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">{{ $service->short_description }}</p>

                        @if($service->features)
                        <div class="mb-4">
                            <h4 class="mb-2 text-xs font-semibold uppercase tracking-wide text-slate-500 dark:text-slate-400">What We Offer</h4>
                            <div class="grid grid-cols-2 gap-2">
                                @foreach($service->features as $feature)
                                <div class="flex items-center gap-2 text-slate-700 dark:text-slate-300">
                                    <span class="flex h-4 w-4 shrink-0 items-center justify-center rounded-full bg-emerald-50 dark:bg-emerald-950/40">
                                        <span class="text-[10px] text-emerald-600 dark:text-emerald-400">✓</span>
                                    </span>
                                    <span class="text-xs">{{ $feature }}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if($service->academic_levels && count($service->academic_levels) > 0)
                        <div class="mb-5">
                            <h4 class="mb-2 text-xs font-semibold text-slate-500 dark:text-slate-400">Academic Levels</h4>
                            <div class="flex flex-wrap gap-1.5">
                                @foreach(array_slice($service->academic_levels, 0, 3) as $level)
                                <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-semibold text-blue-700 dark:bg-blue-950/40 dark:text-blue-300">{{ $level }}</span>
                                @endforeach
                                @if(count($service->academic_levels) > 3)
                                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-semibold text-slate-600 dark:bg-slate-800 dark:text-slate-400">+{{ count($service->academic_levels) - 3 }} more</span>
                                @endif
                            </div>
                        </div>
                        @endif

                        <div class="mt-auto flex gap-3">
                            <a href="{{ route('services.assignment.show', $service->slug) }}" class="flex flex-1 items-center justify-center gap-2 rounded-xl border border-slate-300 px-4 py-2.5 text-sm font-semibold text-slate-700 transition-colors hover:border-blue-600 hover:text-blue-600 dark:border-slate-700 dark:text-slate-300 dark:hover:border-blue-400 dark:hover:text-blue-400">
                                Learn More
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <a href="{{ route('order', ['assignment_service' => $service->id]) }}" class="flex flex-1 items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Order Now
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Our Services -->
    <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="why-choose-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">Why Choose Our Assignment Help</p>
                <h2 id="why-choose-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    What Makes Our Assignment Help <span class="text-emerald-600 dark:text-emerald-400">Worth Choosing</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-xl dark:bg-blue-950/40">🎓</div>
                    <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Expert Writers</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every writer on our team holds at least a Master's degree in their subject area. They've been through the academic grind themselves — they know what professors look for and how to deliver it.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-xl dark:bg-purple-950/40">✅</div>
                    <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Plagiarism-Free</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We start from scratch every time. Your assignment goes through plagiarism detection before it reaches you, so you're getting work that's 100% original and properly cited — no exceptions.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-50 text-xl dark:bg-emerald-950/40">⏰</div>
                    <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">On-Time Delivery</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Deadlines are non-negotiable — we get that. Our writers work to your timeline so you're never left refreshing your inbox and hoping the work shows up in time.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-50 text-xl dark:bg-amber-950/40">🔄</div>
                    <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Free Revisions</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Not quite what you had in mind? We'll fix it. Unlimited free revisions means you don't pay a cent more until the work is exactly right.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-50 text-xl dark:bg-cyan-950/40">🔒</div>
                    <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Confidential &amp; Secure</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your order details, your identity, your payment — all of it stays private. We use encrypted transactions and never share your information with anyone, period.</p>
                </div>

                <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl dark:bg-indigo-950/40">💰</div>
                    <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Affordable Pricing</h3>
                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We price for students, not corporations. Our rates are competitive, we offer flexible payment options, and we run regular discounts so quality assignment help stays actually affordable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="bg-slate-900 py-14 sm:py-16" aria-labelledby="process-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-indigo-400">How It Works</p>
                <h2 id="process-heading" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Getting Assignment Help Is <span class="text-indigo-400">Easier Than You Think</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                <div class="rounded-2xl border border-white/10 bg-slate-800/60 p-6">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-500/20 text-lg font-bold text-white">1</div>
                    <h3 class="mb-2 text-lg font-bold text-white">Submit Your Assignment</h3>
                    <p class="text-sm leading-relaxed text-slate-400">Fill out our quick order form with your subject, requirements, deadline, and any notes from your professor. It takes under five minutes.</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-slate-800/60 p-6">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-500/20 text-lg font-bold text-white">2</div>
                    <h3 class="mb-2 text-lg font-bold text-white">Expert Match</h3>
                    <p class="text-sm leading-relaxed text-slate-400">We pair you with an assignment helper who genuinely knows your subject — someone with the right academic background for your field and level, not just whoever's available.</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-slate-800/60 p-6">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-500/20 text-lg font-bold text-white">3</div>
                    <h3 class="mb-2 text-lg font-bold text-white">Writing &amp; Review</h3>
                    <p class="text-sm leading-relaxed text-slate-400">Your writer researches, writes, and cites everything correctly. Before it reaches you, it passes through our quality check and plagiarism scan — so what you get is solid.</p>
                </div>

                <div class="rounded-2xl border border-white/10 bg-slate-800/60 p-6">
                    <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-500/20 text-lg font-bold text-white">4</div>
                    <h3 class="mb-2 text-lg font-bold text-white">Delivery &amp; Support</h3>
                    <p class="text-sm leading-relaxed text-slate-400">Your finished assignment lands in your inbox before the deadline. Need adjustments? Our team is available 24/7 and unlimited free revisions are always included.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-blue-600 py-14 sm:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                    Ready to Ace Your Assignments?
                </h2>
                <p class="mt-4 text-base leading-relaxed text-blue-100 sm:text-lg">
                    Thousands of students have used our assignment help online and hit their deadlines with confidence. You're next — let's get yours sorted.
                </p>
                <a href="{{ route('order') }}"
                   class="mt-8 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-blue-600 shadow-sm transition-colors hover:bg-slate-100">
                    Order Assignment Help Now
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Comprehensive Assignment Services Information -->
    <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="comprehensive-info-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Comprehensive Academic Support</p>
                <h2 id="comprehensive-info-heading" class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                    Straight Answers About Our <span class="text-blue-600 dark:text-blue-400">Assignment Help Services</span>
                </h2>
            </div>

            <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                <!-- Left Column -->
                <div class="space-y-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-600 text-white">🎯</span>
                            Our Academic Expertise
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            As a trusted assignment help provider, we work only with real academics — most hold Master's or PhD degrees from recognized universities, with hands-on experience in research, teaching, and academic writing. They understand citation formats, academic standards, and what it actually takes to produce work that holds up.
                            Whatever your level — high school, undergrad, grad, or doctoral — and whatever your subject, we have someone who genuinely knows the field. Business, Engineering, Medicine, Law, Social Sciences, STEM: our team covers it all, and we match you based on fit, not just availability.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-emerald-600 text-white">⚡</span>
                            Quality Assurance Process
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Before anything leaves our hands, it goes through a thorough review. Writers pull from credible, peer-reviewed sources and follow your required citation format — APA, MLA, Chicago, Harvard, whatever your institution uses. No shortcuts.
                            Then our QA team checks it: grammar, structure, flow, and plagiarism detection. What you receive is properly formatted, academically sound work — not just something that looks good on the surface, but a piece that can genuinely hold up.
                        </p>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-purple-600 text-white">🚀</span>
                            Subject Coverage
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            Struggling with an English essay? Behind on a psychology research paper? Need help with a math problem set or a computer science assignment? We have subject matter experts across every major discipline — ready to take it on without you having to explain the basics.
                            Essays, research papers, term papers, dissertations, theses, case studies, lab reports, literature reviews, annotated bibliographies, presentations, homework — if your professor assigned it, we can help. We work to your format, your word count, and your rubric.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-2 flex items-center gap-3 text-base font-bold text-slate-900 dark:text-white">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-amber-500 text-white">📋</span>
                            Student Success Support
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                            We don't just hand over a finished file and disappear. Each assignment comes with references you can actually use and learn from. If anything's unclear or doesn't match what you expected, you ask — we respond.
                            Our support team is available around the clock — for updates, revision requests, or just peace of mind that your order is on track. Unlimited free revisions are always included, so we keep going until the work is exactly what you need.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Bottom Statistics Section -->
            <div class="mt-8 rounded-2xl bg-slate-900 p-8 sm:p-10 dark:border dark:border-slate-800 dark:bg-slate-950">
                <div class="mx-auto max-w-2xl text-center">
                    <h3 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Trusted by Students Worldwide</h3>
                    <p class="mt-2 text-sm text-slate-400">Real students, real deadlines, real results — the numbers speak for themselves.</p>
                </div>
                <div class="mt-7 grid grid-cols-2 gap-6 text-center md:grid-cols-4">
                    <div>
                        <div class="text-2xl font-bold text-white">{{ $services->sum('orders_completed') }}+</div>
                        <div class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Assignments Completed</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">{{ count($services) }}+</div>
                        <div class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Service Types</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">4.8★</div>
                        <div class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">24/7</div>
                        <div class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Expert Support</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
