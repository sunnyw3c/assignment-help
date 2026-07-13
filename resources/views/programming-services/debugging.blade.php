@extends('layouts.app')

@section('title', 'Code Review & Debugging - Expert Help Available')
@section('description', 'Get professional code review and debugging services. Expert developers available 24/7 for bug
    fixing, code optimization, and best practices.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- First Engaging Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-5xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-purple-600 dark:text-purple-400">Master Code Quality &amp; Debugging</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            From Buggy Code to <span class="text-purple-600 dark:text-purple-400">Production-Ready Software</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Master the art of writing clean, efficient, and bug-free code.</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Hero Stats Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                    <span class="text-lg">&#128027;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Why Debugging Skills Matter</h3>
                                    <p class="text-sm font-semibold text-purple-600 dark:text-purple-400">The difference between good and great developers</p>
                                </div>
                            </div>

                            <div class="mb-5 grid grid-cols-2 gap-3 sm:grid-cols-4">
                                <div class="rounded-xl border-l-4 border-purple-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-purple-600 dark:text-purple-400">50%</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Developer Time Debugging</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-blue-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-blue-600 dark:text-blue-400">$312B</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Annual Cost of Bad Code</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-indigo-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-indigo-600 dark:text-indigo-400">70%</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Bugs Found in Testing</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-emerald-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-emerald-600 dark:text-emerald-400">10x</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Cost to Fix Later</p>
                                </div>
                            </div>

                            <p class="mb-4 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-purple-600 dark:text-purple-400">Every developer spends 50% of their time debugging.</strong>
                                From Facebook's 2021 global outage caused by a configuration bug to Knight Capital's $440 million loss in 45 minutes from a deployment error&mdash;bugs aren't just annoying, they're costly. The difference between junior and senior developers isn't just writing code; it's writing clean, maintainable, bug-resistant code.
                            </p>

                            <div class="rounded-xl bg-slate-900 p-5 dark:bg-slate-800">
                                <p class="mb-2 text-sm font-bold text-white">&#128161; Industry Reality:</p>
                                <p class="max-w-prose text-sm leading-relaxed text-slate-300">
                                    A bug that costs $1 to fix during development costs $10 in testing, $100 in production, and potentially millions in lost revenue and reputation. NASA's Mars Climate Orbiter crashed due to a units conversion bug. A single semicolon caused an $80 million satellite failure. Mastering debugging, code review, and quality practices isn't optional&mdash;it's survival!
                                </p>
                            </div>
                        </div>

                        <!-- Bug Cost Escalation Visualization -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-6 text-center">
                                <h3 class="mb-1 text-lg font-bold text-slate-900 dark:text-white">&#128176; Bug Fix Cost Escalation</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">The cost to fix a bug increases exponentially through development phases.</p>
                            </div>

                            <div class="space-y-5">
                                <!-- Planning/Development Phase -->
                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Planning &amp; Development</span>
                                        <span class="text-base font-bold text-emerald-600 dark:text-emerald-400">$100</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center justify-end rounded-full bg-emerald-500 pr-3" style="width: 10%;">
                                            <span class="text-xs font-bold text-white">1x</span>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Quickest and least expensive to fix</p>
                                </div>

                                <!-- Staging/Testing Phase -->
                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Staging &amp; Testing</span>
                                        <span class="text-base font-bold text-amber-600 dark:text-amber-400">$600</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center justify-end rounded-full bg-amber-500 pr-3" style="width: 35%;">
                                            <span class="text-xs font-bold text-white">6x</span>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Requires rework, re-testing, and coordination</p>
                                </div>

                                <!-- Production Phase -->
                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Production (Live Systems)</span>
                                        <span class="text-base font-bold text-orange-600 dark:text-orange-400">$3,000</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center justify-end rounded-full bg-orange-500 pr-3" style="width: 70%;">
                                            <span class="text-xs font-bold text-white">30x</span>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Context switching, cascading issues, multi-team coordination</p>
                                </div>

                                <!-- Critical Production Bug -->
                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Critical Production Bug</span>
                                        <span class="text-base font-bold text-red-600 dark:text-red-400">$10,000+</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center justify-end rounded-full bg-red-600 pr-3" style="width: 100%;">
                                            <span class="text-xs font-bold text-white">100x+</span>
                                        </div>
                                    </div>
                                    <p class="mt-1 text-xs text-slate-500 dark:text-slate-400">Emergency fixes, downtime, revenue loss, reputation damage</p>
                                </div>
                            </div>

                            <div class="mt-5 space-y-3">
                                <div class="rounded-lg border-l-4 border-red-500 bg-red-50 p-4 dark:bg-red-950/30">
                                    <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                                        <strong class="font-semibold text-red-600 dark:text-red-400">Real Cost Example:</strong> A bug costing $100 to fix during planning could escalate to <strong class="font-semibold text-red-700 dark:text-red-400">$10,000 in production</strong> &mdash; a 100x increase, due to context switching, cascading issues, and multi-team coordination.
                                    </p>
                                </div>
                                <div class="rounded-lg border-l-4 border-emerald-500 bg-emerald-50 p-4 dark:bg-emerald-950/30">
                                    <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                                        <strong class="font-semibold text-emerald-600 dark:text-emerald-400">Prevention Strategy:</strong> Early testing saves time and money, and leads to cleaner, more reliable software and happier teams.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Developer Time Breakdown Visualization -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-6 text-center">
                                <h3 class="mb-1 text-lg font-bold text-slate-900 dark:text-white">&#9200; How Developers Spend Their Time</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">Average time distribution for professional software developers.</p>
                            </div>

                            <div class="grid items-center gap-6 md:grid-cols-2">
                                <!-- Visual Bars -->
                                <div class="space-y-3">
                                    <div>
                                        <div class="mb-1.5 flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="h-3 w-3 rounded bg-purple-500"></div>
                                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Debugging &amp; Bug Fixing</span>
                                            </div>
                                            <span class="text-base font-bold text-purple-600 dark:text-purple-400">50%</span>
                                        </div>
                                        <div class="h-4 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                            <div class="h-4 rounded-full bg-purple-500" style="width: 50%;"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mb-1.5 flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="h-3 w-3 rounded bg-blue-500"></div>
                                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Writing New Code</span>
                                            </div>
                                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">30%</span>
                                        </div>
                                        <div class="h-4 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                            <div class="h-4 rounded-full bg-blue-500" style="width: 30%;"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="mb-1.5 flex items-center justify-between">
                                            <div class="flex items-center gap-2">
                                                <div class="h-3 w-3 rounded bg-emerald-500"></div>
                                                <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Code Review &amp; Meetings</span>
                                            </div>
                                            <span class="text-base font-bold text-emerald-600 dark:text-emerald-400">20%</span>
                                        </div>
                                        <div class="h-4 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                            <div class="h-4 rounded-full bg-emerald-500" style="width: 20%;"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Visual Representation -->
                                <div class="flex justify-center">
                                    <div class="relative h-44 w-44">
                                        <div class="absolute inset-0 rounded-full"
                                            style="background: conic-gradient(from 0deg, #9333ea 0%, #9333ea 50%, #3b82f6 50%, #3b82f6 80%, #10b981 80%, #10b981 100%);">
                                        </div>
                                        <div class="absolute inset-3 flex items-center justify-center rounded-full bg-white dark:bg-slate-950">
                                            <div class="text-center">
                                                <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">50%</div>
                                                <div class="mt-1 text-xs text-slate-500 dark:text-slate-400">Time on<br>Debugging</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 rounded-lg border-l-4 border-purple-500 bg-purple-50 p-4 dark:bg-purple-950/30">
                                <p class="text-sm leading-relaxed text-slate-700 dark:text-slate-300">
                                    <strong class="font-semibold text-purple-600 dark:text-purple-400">Reality Check:</strong> Studies show developers spend nearly half their time debugging &mdash; mastering debugging techniques is essential for productivity and career success.
                                </p>
                            </div>
                        </div>

                        <!-- Bug Types Distribution Visualization -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-6 text-center">
                                <h3 class="mb-1 text-lg font-bold text-slate-900 dark:text-white">&#128027; Common Bug Types Distribution</h3>
                                <p class="text-sm text-slate-600 dark:text-slate-400">Where bugs typically occur in software development.</p>
                            </div>

                            <div class="space-y-4">
                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <div class="flex items-center gap-2.5">
                                            <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-red-500 text-white">&#128027;</div>
                                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Logic Errors</span>
                                        </div>
                                        <span class="text-base font-bold text-red-600 dark:text-red-400">40%</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center rounded-full bg-red-500 px-3" style="width: 40%;">
                                            <span class="text-xs font-bold text-white">Wrong algorithm, off-by-one</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <div class="flex items-center gap-2.5">
                                            <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-orange-500 text-white">&#128165;</div>
                                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Runtime Errors</span>
                                        </div>
                                        <span class="text-base font-bold text-orange-600 dark:text-orange-400">30%</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center rounded-full bg-orange-500 px-3" style="width: 30%;">
                                            <span class="text-xs font-bold text-white">Null pointer, type errors</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <div class="flex items-center gap-2.5">
                                            <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-blue-500 text-white">&#9889;</div>
                                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Performance Issues</span>
                                        </div>
                                        <span class="text-base font-bold text-blue-600 dark:text-blue-400">20%</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center rounded-full bg-blue-500 px-3" style="width: 20%;">
                                            <span class="text-xs font-bold text-white">Memory leaks, slow queries</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-1.5 flex items-center justify-between">
                                        <div class="flex items-center gap-2.5">
                                            <div class="flex h-7 w-7 items-center justify-center rounded-lg bg-purple-500 text-white">&#128274;</div>
                                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">Security Vulnerabilities</span>
                                        </div>
                                        <span class="text-base font-bold text-purple-600 dark:text-purple-400">10%</span>
                                    </div>
                                    <div class="h-6 w-full overflow-hidden rounded-full bg-slate-100 dark:bg-slate-800">
                                        <div class="flex h-6 items-center rounded-full bg-purple-500 px-3" style="width: 10%;">
                                            <span class="text-xs font-bold text-white">SQL injection, XSS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 grid gap-4 md:grid-cols-2">
                                <div class="rounded-lg border-l-4 border-red-500 bg-red-50 p-4 dark:bg-red-950/30">
                                    <p class="mb-1 text-xs font-bold text-red-700 dark:text-red-400">Most Common:</p>
                                    <p class="text-sm text-slate-700 dark:text-slate-300">Logic errors are hardest to detect &mdash; code runs without crashing but produces wrong results.</p>
                                </div>
                                <div class="rounded-lg border-l-4 border-purple-500 bg-purple-50 p-4 dark:bg-purple-950/30">
                                    <p class="mb-1 text-xs font-bold text-purple-700 dark:text-purple-400">Most Dangerous:</p>
                                    <p class="text-sm text-slate-700 dark:text-slate-300">Security bugs can cost millions. The Equifax breach exposed 147M records.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bug Types Cards -->
                        <div class="grid gap-5 md:grid-cols-3">
                            <!-- Logic Errors Card -->
                            <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-red-600 text-white">
                                        <span class="text-lg">&#128027;</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Logic Errors</h4>
                                        <p class="text-xs font-semibold text-red-600 dark:text-red-400">The silent killers</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border-l-4 border-red-500 bg-slate-50 p-4 dark:bg-slate-900">
                                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            <strong class="font-semibold text-red-600 dark:text-red-400">Logic = Wrong Algorithm.</strong>
                                            Code runs without errors but produces wrong results. Off-by-one errors, incorrect conditions, wrong formulas &mdash; these bugs slip through compilers and crash production silently.
                                        </p>
                                    </div>

                                    <div class="rounded-lg bg-red-600 p-4 text-white">
                                        <p class="mb-2 text-sm font-semibold">&#127919; Common Examples:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">= vs ==</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Off-by-one</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Infinite loops</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Wrong condition</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Runtime Errors Card -->
                            <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">
                                        <span class="text-lg">&#128165;</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Runtime Errors</h4>
                                        <p class="text-xs font-semibold text-orange-600 dark:text-orange-400">Crashes &amp; exceptions</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border-l-4 border-orange-500 bg-slate-50 p-4 dark:bg-slate-900">
                                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            <strong class="font-semibold text-orange-600 dark:text-orange-400">Runtime = Unexpected Failures.</strong>
                                            Null pointer exceptions, type errors, memory leaks, stack overflows &mdash; these crash your application and frustrate users. Proper error handling is essential.
                                        </p>
                                    </div>

                                    <div class="rounded-lg bg-orange-600 p-4 text-white">
                                        <p class="mb-2 text-sm font-semibold">&#127760; Common Examples:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Null reference</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Type error</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Division by zero</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Out of bounds</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Performance Issues Card -->
                            <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                                        <span class="text-lg">&#9889;</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Performance Issues</h4>
                                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400">Speed matters</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border-l-4 border-blue-500 bg-slate-50 p-4 dark:bg-slate-900">
                                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            <strong class="font-semibold text-blue-600 dark:text-blue-400">Performance = User Experience.</strong>
                                            Memory leaks, N+1 queries, inefficient algorithms, unnecessary re-renders &mdash; slow code drives users away. Amazon found a 100ms delay costs 1% of revenue.
                                        </p>
                                    </div>

                                    <div class="rounded-lg bg-blue-600 p-4 text-white">
                                        <p class="mb-2 text-sm font-semibold">&#128640; Common Issues:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Memory leaks</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">N+1 queries</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">O(n&sup2;) loops</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Large bundles</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Areas We Debug &amp; Review</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Our expert developers review and debug code across all major programming languages and frameworks.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Bug Fixing -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Bug Fixing</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-red-50 p-3 dark:bg-red-950/40">
                                <span class="text-xl">&#128027;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Logic Errors</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-red-50 p-3 dark:bg-red-950/40">
                                <span class="text-xl">&#128165;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Runtime Errors</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-red-50 p-3 dark:bg-red-950/40">
                                <span class="text-xl">&#9888;&#65039;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Syntax Issues</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Performance -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Performance</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-blue-50 p-3 dark:bg-blue-950/40">
                                <span class="text-xl">&#9889;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Speed Optimization</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-blue-50 p-3 dark:bg-blue-950/40">
                                <span class="text-xl">&#128190;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Memory Leaks</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-blue-50 p-3 dark:bg-blue-950/40">
                                <span class="text-xl">&#128202;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Profiling</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Code Quality -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Code Quality</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <span class="text-xl">&#9851;&#65039;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Refactoring</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <span class="text-xl">&#128218;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Best Practices</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <span class="text-xl">&#10024;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Clean Code</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Security & Testing -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Security &amp; Testing</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-purple-50 p-3 dark:bg-purple-950/40">
                                <span class="text-xl">&#128274;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Security Fixes</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-purple-50 p-3 dark:bg-purple-950/40">
                                <span class="text-xl">&#129514;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Unit Tests</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-purple-50 p-3 dark:bg-purple-950/40">
                                <span class="text-xl">&#128737;&#65039;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Code Analysis</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Transparent Pricing</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Fair, transparent pricing based on complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Quick Bug Fix</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600 dark:text-purple-400">From $15</div>
                        </div>
                        <ul class="mb-6 flex-grow space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Simple bug fixing
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Error resolution
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                1-6 hour delivery
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Explanation included
                            </li>
                        </ul>
                        <a href="{{ route('order') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-500">
                            Get Started
                        </a>
                    </div>

                    <div class="relative flex flex-col rounded-2xl border-2 border-purple-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:bg-slate-950">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-purple-600 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Code Review</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600 dark:text-purple-400">From $50</div>
                        </div>
                        <ul class="mb-6 flex-grow space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Comprehensive review
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Performance optimization
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                6-12 hour delivery
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Best practices applied
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Detailed feedback
                            </li>
                        </ul>
                        <a href="{{ route('order') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-500">
                            Get Started
                        </a>
                    </div>

                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Complete Refactoring</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600 dark:text-purple-400">From $100</div>
                        </div>
                        <ul class="mb-6 flex-grow space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Full code refactoring
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Architecture improvements
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                12-24 hour delivery
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Security audit
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Testing coverage
                            </li>
                        </ul>
                        <a href="{{ route('order') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-500">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Our Debugging Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Systematic approach to finding and fixing bugs in your code.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">1</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Code Analysis</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We analyze your code to understand the issue and identify root causes.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">2</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Bug Identification</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Locate the exact source of bugs using debugging tools and techniques.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">3</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Fix Implementation</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Implement fixes following best practices and clean code principles.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">4</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Testing &amp; Verification</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Thoroughly test fixes and provide detailed explanation of changes.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Engaging Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-5xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Comprehensive Debugging Guide</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Complete Guide to <span class="text-indigo-600 dark:text-indigo-400">Debugging &amp; Code Quality</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Essential techniques for writing maintainable, production-ready code.</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Main Informative Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white">
                                    <span class="text-lg">&#128218;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Understanding Debugging &amp; Code Review</h3>
                                    <p class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">The critical skills every developer needs</p>
                                </div>
                            </div>

                            <div class="max-w-prose space-y-4">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    <strong class="font-semibold text-indigo-600 dark:text-indigo-400">Debugging is the process of identifying, analyzing, and removing errors (bugs) from computer programs.</strong>
                                    Every piece of software has bugs &mdash; it's inevitable. What separates professional developers from hobbyists is a systematic approach to finding and fixing these issues efficiently, combining tools (debuggers, profilers, linters), techniques (rubber duck debugging, binary search), and practices (logging, monitoring, testing).
                                </p>

                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Code review is a systematic examination of source code to find and fix mistakes, improve code quality, and share knowledge. Studies show code review catches 60-90% of bugs before they reach production, reduces technical debt, and improves team collaboration. Companies like Google, Microsoft, and Facebook mandate code reviews for every change &mdash; clean code is a necessity for maintainability, scalability, and team productivity.
                                </p>

                                <div class="rounded-xl border-l-4 border-indigo-500 bg-indigo-50 p-5 dark:bg-indigo-950/30">
                                    <h4 class="mb-3 text-base font-bold text-slate-900 dark:text-white">Why Debugging &amp; Code Quality Matter</h4>
                                    <ul class="space-y-2 text-sm text-slate-700 dark:text-slate-300">
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Cost of Bugs Escalates:</strong> A bug found during coding costs $1 to fix. The same bug in production costs $100-1000. Facebook's 2021 outage (a BGP configuration bug) cost over $60 million. Early detection saves money and reputations.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Professional Reputation:</strong> Developers who write clean, well-tested code earn respect and promotions. Your GitHub commits are your resume &mdash; code quality directly correlates with career advancement in tech.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Team Productivity:</strong> Clean code is easy to understand, modify, and extend. Technical debt from rushed, buggy code slows teams down exponentially &mdash; a 2020 study found developers spend 42% of their time dealing with bad code and technical debt.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Security Implications:</strong> Many security vulnerabilities are just bugs: SQL injection, XSS, buffer overflows. The Equifax breach (147 million people affected) was caused by an unpatched vulnerability. Heartbleed existed for 2 years in OpenSSL.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Debugging Techniques -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                    <span class="text-lg">&#128269;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Essential Debugging Techniques</h3>
                                    <p class="text-sm font-semibold text-purple-600 dark:text-purple-400">Systematic approaches to finding and fixing bugs</p>
                                </div>
                            </div>

                            <p class="mb-5 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Effective debugging requires a methodical approach. Random code changes ("shotgun debugging") waste time and often introduce new bugs. Professional developers reproduce the bug reliably, isolate the problem area, form hypotheses, test systematically, and verify the fix doesn't break anything else.
                            </p>

                            <div class="mb-5 grid gap-4 md:grid-cols-2">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <div class="mb-2 text-base font-bold text-blue-600 dark:text-blue-400">&#128300; Print Debugging &amp; Logging</div>
                                    <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">The oldest and most universal debugging technique &mdash; add print statements to track program flow and variable values.</p>
                                    <div class="rounded-lg bg-blue-50 p-3 dark:bg-blue-950/30">
                                        <p class="mb-1 text-xs font-semibold text-blue-900 dark:text-blue-300">Best Practices:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>&bull; Use structured logging (debug, info, error)</li>
                                            <li>&bull; Log before/after critical operations</li>
                                            <li>&bull; Include timestamps and context</li>
                                            <li>&bull; Remove debug prints before production</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <div class="mb-2 text-base font-bold text-purple-600 dark:text-purple-400">&#128028; Debugger Tools</div>
                                    <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">Interactive debuggers let you pause execution, inspect variables, step through code, and set conditional breakpoints.</p>
                                    <div class="rounded-lg bg-purple-50 p-3 dark:bg-purple-950/30">
                                        <p class="mb-1 text-xs font-semibold text-purple-900 dark:text-purple-300">Key Features:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>&bull; Breakpoints (line, conditional, watch)</li>
                                            <li>&bull; Step over/into/out of functions</li>
                                            <li>&bull; Variable inspection and modification</li>
                                            <li>&bull; Call stack examination</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <div class="mb-2 text-base font-bold text-emerald-600 dark:text-emerald-400">&#129414; Rubber Duck Debugging</div>
                                    <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">Explain your code line-by-line to an inanimate object. Forces you to slow down and often reveals the bug through verbalization.</p>
                                    <div class="rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/30">
                                        <p class="mb-1 text-xs font-semibold text-emerald-900 dark:text-emerald-300">Why It Works:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>&bull; Forces systematic thinking</li>
                                            <li>&bull; Slows down rushed debugging</li>
                                            <li>&bull; Reveals faulty assumptions</li>
                                            <li>&bull; Surprisingly effective</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <div class="mb-2 text-base font-bold text-amber-600 dark:text-amber-400">&#9889; Binary Search Debugging</div>
                                    <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">When a bug appears after many changes, disable half the changes, test, repeat. Quickly narrows down the problematic code.</p>
                                    <div class="rounded-lg bg-amber-50 p-3 dark:bg-amber-950/30">
                                        <p class="mb-1 text-xs font-semibold text-amber-900 dark:text-amber-300">Process:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>&bull; Identify working vs broken state</li>
                                            <li>&bull; Revert half the changes</li>
                                            <li>&bull; Test if bug persists</li>
                                            <li>&bull; O(log n) instead of O(n) search</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-5 dark:bg-slate-800">
                                <h4 class="mb-2 text-base font-bold text-white">Debugging Mindset: Scientific Method</h4>
                                <p class="mb-3 max-w-prose text-sm leading-relaxed text-slate-300">
                                    <strong class="text-white">1. Reproduce:</strong> Make the bug happen reliably.
                                    <strong class="text-white">2. Isolate:</strong> Minimize code to the smallest failing example.
                                    <strong class="text-white">3. Hypothesize:</strong> Form theories about the cause.
                                    <strong class="text-white">4. Test:</strong> Verify hypotheses systematically.
                                    <strong class="text-white">5. Fix:</strong> Implement the solution.
                                    <strong class="text-white">6. Verify:</strong> Ensure the fix works and doesn't break anything.
                                </p>
                                <p class="max-w-prose text-sm leading-relaxed text-slate-300">
                                    Never make random changes hoping something works. Understand WHY code fails &mdash; a fix without understanding is a time bomb that will return in a different form.
                                </p>
                            </div>
                        </div>

                        <!-- Code Quality & Best Practices -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">
                                    <span class="text-lg">&#10024;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Code Quality Best Practices</h3>
                                    <p class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">Writing clean, maintainable code</p>
                                </div>
                            </div>

                            <p class="mb-5 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Clean code is easy to understand, modify, and maintain. It follows established conventions, is well-documented, properly tested, and free of unnecessary complexity. The principles in "Clean Code" by Robert Martin and "Code Complete" by Steve McConnell remain industry standards for writing professional software.
                            </p>

                            <div class="mb-5 space-y-4">
                                <div class="rounded-xl border-l-4 border-blue-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <h4 class="mb-2 text-base font-bold text-blue-900 dark:text-blue-300">&#127919; SOLID Principles</h4>
                                    <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        <strong>S</strong>ingle Responsibility, <strong>O</strong>pen/Closed, <strong>L</strong>iskov Substitution, <strong>I</strong>nterface Segregation, <strong>D</strong>ependency Inversion. These object-oriented design principles prevent tightly-coupled, hard-to-maintain code.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-blue-900 dark:text-blue-300">Impact: Modular, testable, maintainable code that scales with team size</p>
                                    </div>
                                </div>

                                <div class="rounded-xl border-l-4 border-purple-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <h4 class="mb-2 text-base font-bold text-purple-900 dark:text-purple-300">&#128221; DRY Principle (Don't Repeat Yourself)</h4>
                                    <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Every piece of knowledge should have a single, authoritative representation. Duplicated code means bugs must be fixed in multiple places &mdash; extract common logic into reusable functions and components.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-purple-900 dark:text-purple-300">Impact: Easier maintenance, fewer bugs, consistent behavior across the codebase</p>
                                    </div>
                                </div>

                                <div class="rounded-xl border-l-4 border-emerald-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <h4 class="mb-2 text-base font-bold text-emerald-900 dark:text-emerald-300">&#129514; Test-Driven Development (TDD)</h4>
                                    <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Write tests before code: write a failing test, write minimal code to pass, then refactor. TDD ensures code is testable, catches regressions, and provides living documentation. Code with 80%+ test coverage has 40% fewer bugs.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-emerald-900 dark:text-emerald-300">Tools: Jest, Pytest, JUnit, Mocha, RSpec, Testing Library</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-5 dark:bg-slate-800">
                                <h4 class="mb-2 text-base font-bold text-white">Code Review Checklist</h4>
                                <p class="mb-3 max-w-prose text-sm leading-relaxed text-slate-300">
                                    <strong class="text-white">Functionality:</strong> Does it work? Edge cases handled?
                                    <strong class="text-white">Readability:</strong> Clear naming, comments where needed?
                                    <strong class="text-white">Structure:</strong> DRY? SOLID? Modular?
                                    <strong class="text-white">Performance:</strong> Efficient, no bottlenecks?
                                    <strong class="text-white">Testing:</strong> Unit and integration tests?
                                    <strong class="text-white">Security:</strong> Input validation, no vulnerabilities?
                                </p>
                                <p class="max-w-prose text-sm leading-relaxed text-slate-300">
                                    <strong class="text-white">Need Code Review Help?</strong> Our expert developers provide professional code review, bug fixing, performance optimization, and refactoring services &mdash; available 24/7 for logic errors, runtime exceptions, memory leaks, or clean code guidance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">What Our Clients Say</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Real feedback from students who got help with debugging and code review.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Found the bug in my code within an hour! The developer not only fixed it but also explained why it was happening. Great learning experience!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-500 text-sm font-bold text-white">T</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Tom H.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">CS Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Amazing code review! They found several performance issues I didn't notice and optimized my code. My app runs 3x faster now!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-500 text-sm font-bold text-white">E</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Emma R.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Professional refactoring service! My messy code is now clean, organized, and follows best practices. Learned so much from the feedback!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">M</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Mike D.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Web Dev Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Frequently Asked Questions</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Everything you need to know about our code review and debugging service.</p>
                </div>

                <div class="mx-auto max-w-3xl space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">How quickly can you fix my bug?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Most simple bugs are fixed within 1-6 hours. Complex issues may take 6-12 hours. We'll provide an estimated timeline after reviewing your code.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What programming languages do you support?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We review and debug code in all major languages including JavaScript, Python, Java, C++, PHP, Ruby, Go, and more. We also work with all popular frameworks.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Do you provide explanations for the fixes?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes! We provide detailed explanations of what was wrong, why it caused issues, and how we fixed it. This helps you learn and avoid similar bugs in the future.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you help improve my code quality?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely! Our code review service includes refactoring suggestions, performance optimizations, and best practice recommendations to improve your code quality.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What if the bug comes back?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We provide a 7-day guarantee. If the same bug reappears within 7 days, we'll fix it at no additional cost. We stand behind the quality of our work.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-slate-900 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Ready to Fix Your Code?</h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-slate-400 sm:text-base">Join thousands of developers who have fixed their bugs and improved their code with our expert help.</p>
                <a href="{{ route('order') }}" class="mt-7 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-slate-900 shadow-sm transition-colors hover:bg-slate-100">
                    Get Your Code Fixed Today
                </a>
            </div>
        </section>
    </div>
@endsection
