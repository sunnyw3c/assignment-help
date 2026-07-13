@extends('layouts.app')

@section('title', 'Database Programming - Expert Help Available')
@section('description', 'Get professional help with database programming projects. Expert developers available 24/7 for SQL, NoSQL, database design, optimization, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- First Engaging Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-5xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-purple-600 dark:text-purple-400">Master Database Architecture</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            From Data Chaos to <span class="text-purple-600 dark:text-purple-400">Database Excellence</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Unlock the power of efficient data management and build scalable database systems.</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Hero Stats Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                    <span class="text-lg">&#128640;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Why Database Skills Are Critical in 2025</h3>
                                    <p class="text-sm font-semibold text-purple-600 dark:text-purple-400">The backbone of every modern application and business decision</p>
                                </div>
                            </div>

                            <div class="mb-5 grid grid-cols-2 gap-3 sm:grid-cols-4">
                                <div class="rounded-xl border-l-4 border-purple-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-purple-600 dark:text-purple-400">90%</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Companies Use Databases</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-blue-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-blue-600 dark:text-blue-400">$120K+</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Average DBA Salary</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-indigo-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-indigo-600 dark:text-indigo-400">2.5M</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Database Jobs Globally</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-emerald-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-emerald-600 dark:text-emerald-400">95%</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Web Apps Need DBs</p>
                                </div>
                            </div>

                            <p class="mb-4 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <strong class="font-semibold text-purple-600 dark:text-purple-400">Data is the new oil, and databases are the refineries.</strong>
                                Every modern application&mdash;from social media giants like Facebook and Instagram to e-commerce platforms like Amazon and Shopify&mdash;relies on robust database systems. Whether you're building a startup MVP, scaling to millions of users, or analyzing business intelligence, database expertise is non-negotiable.
                            </p>

                            <div class="rounded-xl bg-slate-900 p-5 dark:bg-slate-800">
                                <p class="mb-2 text-sm font-bold text-white">&#128161; Industry Reality:</p>
                                <p class="max-w-prose text-sm leading-relaxed text-slate-300">
                                    A poorly designed database can cripple a billion-dollar business. Amazon loses $66,240 per minute when systems go down. Twitter's fail whale was often caused by database bottlenecks. Mastering database design, optimization, and scaling isn't just about passing courses&mdash;it's about building systems that can handle real-world scale and complexity!
                                </p>
                            </div>
                        </div>

                        <!-- SQL vs NoSQL Comparison Cards -->
                        <div class="grid gap-5 md:grid-cols-2">
                            <!-- SQL Databases Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                                        <span class="text-lg">&#128024;</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">SQL Databases Power</h4>
                                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400">Structured, reliable, ACID-compliant</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border-l-4 border-blue-500 bg-slate-50 p-4 dark:bg-slate-900">
                                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            <strong class="font-semibold text-blue-600 dark:text-blue-400">SQL = Business Critical Data.</strong>
                                            PostgreSQL, MySQL, SQL Server&mdash;these relational databases power banking systems, e-commerce transactions, healthcare records, and any application where data integrity is paramount. Master SQL and unlock enterprise opportunities!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-blue-50 p-3 text-center dark:bg-blue-950/40">
                                            <p class="text-base font-bold text-blue-900 dark:text-blue-300">ACID</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Transaction Guarantees</p>
                                        </div>
                                        <div class="rounded-lg bg-blue-50 p-3 text-center dark:bg-blue-950/40">
                                            <p class="text-base font-bold text-blue-900 dark:text-blue-300">Joins</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Complex Queries</p>
                                        </div>
                                    </div>

                                    <div class="rounded-lg bg-blue-600 p-4 text-white">
                                        <p class="mb-2 text-sm font-semibold">&#127919; Popular SQL Databases:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">PostgreSQL</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">MySQL</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">SQL Server</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Oracle DB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- NoSQL Databases Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">
                                        <span class="text-lg">&#127811;</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">NoSQL Database Flexibility</h4>
                                        <p class="text-xs font-semibold text-emerald-600 dark:text-emerald-400">Scalable, fast, schema-less</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border-l-4 border-emerald-500 bg-slate-50 p-4 dark:bg-slate-900">
                                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            <strong class="font-semibold text-emerald-600 dark:text-emerald-400">NoSQL = Modern Scale.</strong>
                                            MongoDB, Redis, Cassandra&mdash;these databases power real-time apps, IoT systems, big data analytics, and applications serving millions of concurrent users. From Netflix's recommendations to Uber's real-time matching, NoSQL enables modern innovation!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-emerald-50 p-3 text-center dark:bg-emerald-950/40">
                                            <p class="text-base font-bold text-emerald-900 dark:text-emerald-300">Horizontal</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Easy Scaling</p>
                                        </div>
                                        <div class="rounded-lg bg-emerald-50 p-3 text-center dark:bg-emerald-950/40">
                                            <p class="text-base font-bold text-emerald-900 dark:text-emerald-300">Flexible</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Schema-less Design</p>
                                        </div>
                                    </div>

                                    <div class="rounded-lg bg-emerald-600 p-4 text-white">
                                        <p class="mb-2 text-sm font-semibold">&#127760; Popular NoSQL Databases:</p>
                                        <div class="flex flex-wrap gap-2">
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">MongoDB</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Redis</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">Cassandra</span>
                                            <span class="rounded-full bg-white/20 px-2.5 py-1 text-xs">DynamoDB</span>
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
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Database Technologies We Master</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Our expert database developers work with SQL, NoSQL, and modern database technologies to build efficient data solutions.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- SQL Databases -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">SQL Databases</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-blue-50 p-3 dark:bg-blue-950/40">
                                <span class="text-xl">&#128024;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">MySQL</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-blue-50 p-3 dark:bg-blue-950/40">
                                <span class="text-xl">&#128024;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">PostgreSQL</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-blue-50 p-3 dark:bg-blue-950/40">
                                <span class="text-xl">&#128311;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">SQL Server</h4>
                            </div>
                        </div>
                    </div>

                    <!-- NoSQL Databases -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">NoSQL Databases</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <span class="text-xl">&#127811;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">MongoDB</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <span class="text-xl">&#128293;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Firebase</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <span class="text-xl">&#128202;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Redis</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Databases -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Cloud Databases</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-amber-50 p-3 dark:bg-amber-950/40">
                                <span class="text-xl">&#9729;&#65039;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">AWS RDS</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-amber-50 p-3 dark:bg-amber-950/40">
                                <span class="text-xl">&#127780;&#65039;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Azure SQL</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-amber-50 p-3 dark:bg-amber-950/40">
                                <span class="text-xl">&#128309;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Google Cloud SQL</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Tools & ORMs -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Tools &amp; ORMs</h3>
                        <div class="space-y-2.5">
                            <div class="flex items-center gap-3 rounded-lg bg-purple-50 p-3 dark:bg-purple-950/40">
                                <span class="text-xl">&#128295;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Sequelize</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-purple-50 p-3 dark:bg-purple-950/40">
                                <span class="text-xl">&#128736;&#65039;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Prisma</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-purple-50 p-3 dark:bg-purple-950/40">
                                <span class="text-xl">&#9881;&#65039;</span>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">TypeORM</h4>
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
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Fair, transparent pricing based on database complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Basic Database</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600 dark:text-purple-400">From $30</div>
                        </div>
                        <ul class="mb-6 flex-grow space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Simple database design
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Basic SQL queries
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                3-24 hour delivery
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Documentation included
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
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Advanced Database</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600 dark:text-purple-400">From $75</div>
                        </div>
                        <ul class="mb-6 flex-grow space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Complex database design
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Query optimization
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                24-48 hour delivery
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Stored procedures
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Performance tuning
                            </li>
                        </ul>
                        <a href="{{ route('order') }}" class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-500">
                            Get Started
                        </a>
                    </div>

                    <div class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Enterprise Solution</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600 dark:text-purple-400">From $150</div>
                        </div>
                        <ul class="mb-6 flex-grow space-y-2 text-left text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Full database architecture
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Data migration
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                2-3 day delivery
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Replication setup
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                Backup strategies
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
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Our Database Development Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Proven methodology for delivering efficient and scalable database solutions.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">1</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Requirements Analysis</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We analyze your data requirements, relationships, and query patterns to design optimal solutions.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">2</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Database Design</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Create normalized schema, define relationships, and establish proper indexing strategies.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">3</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Implementation &amp; Testing</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Build the database, create queries, and conduct thorough performance testing.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-base font-bold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">4</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Optimization &amp; Delivery</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Optimize performance, provide documentation, and deliver your complete database solution.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Engaging Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-5xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Comprehensive Database Guide</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Complete Guide to <span class="text-indigo-600 dark:text-indigo-400">Database Systems &amp; Design</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Essential knowledge for computer science students, database administrators, and software developers.</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Main Informative Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white">
                                    <span class="text-lg">&#128218;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Understanding Database Systems</h3>
                                    <p class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">The foundation of modern data-driven applications</p>
                                </div>
                            </div>

                            <div class="max-w-prose space-y-4">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    <strong class="font-semibold text-indigo-600 dark:text-indigo-400">A database is an organized collection of structured data stored electronically in a computer system.</strong>
                                    Modern databases are managed by Database Management Systems (DBMS), which provide an interface for users and applications to interact with data. Databases can be classified into two main categories: relational (SQL) databases that store data in structured tables with predefined schemas, and non-relational (NoSQL) databases that offer flexible schemas for unstructured or semi-structured data.
                                </p>

                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    Relational databases like PostgreSQL, MySQL, and SQL Server use Structured Query Language (SQL) for data manipulation and querying. They excel at maintaining data integrity through ACID properties (Atomicity, Consistency, Isolation, Durability) and support complex relationships between data entities. NoSQL databases like MongoDB, Redis, and Cassandra offer different data models including document stores, key-value pairs, column-family stores, and graph databases, each optimized for specific use cases and scalability patterns.
                                </p>

                                <div class="rounded-xl border-l-4 border-indigo-500 bg-indigo-50 p-5 dark:bg-indigo-950/30">
                                    <h4 class="mb-3 text-base font-bold text-slate-900 dark:text-white">Why Database Knowledge Is Essential</h4>
                                    <ul class="space-y-2 text-sm text-slate-700 dark:text-slate-300">
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Universal Application Requirement:</strong> Nearly every modern application requires data persistence. From mobile apps to enterprise systems, databases are fundamental. Understanding database design, querying, and optimization is essential for any software developer.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Career Opportunities:</strong> Database skills are among the most sought-after in tech. Database administrators, data engineers, and backend developers with database expertise command salaries averaging $120,000+, reflecting the critical importance of these skills.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Performance Impact:</strong> A well-designed database can handle millions of queries per second, while a poorly designed one can bring an entire application to a halt. Understanding indexing, query optimization, and database architecture directly impacts application performance.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-0.5 font-bold text-indigo-600 dark:text-indigo-400">&bull;</span>
                                            <span><strong class="font-semibold">Data-Driven Decision Making:</strong> Businesses rely on databases to store and analyze massive amounts of data. Mastering SQL, data modeling, and analytics enables you to extract valuable insights and drive business decisions.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Database Design Principles -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                    <span class="text-lg">&#127912;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Database Design Principles and Normalization</h3>
                                    <p class="text-sm font-semibold text-purple-600 dark:text-purple-400">Creating efficient and maintainable database schemas</p>
                                </div>
                            </div>

                            <p class="mb-5 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Database normalization is the process of organizing data to minimize redundancy and dependency. This systematic approach divides larger tables into smaller, more manageable ones and defines relationships between them. Normalization follows several forms (1NF, 2NF, 3NF, BCNF) to ensure data integrity, reduce storage requirements, and improve query performance.
                            </p>

                            <div class="mb-5 grid gap-4 md:grid-cols-3">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <div class="mb-2 text-base font-bold text-indigo-600 dark:text-indigo-400">1NF &mdash; First Normal Form</div>
                                    <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">Ensures that each column contains atomic (indivisible) values and each column contains values of a single type.</p>
                                    <div class="rounded-lg bg-indigo-50 p-3 dark:bg-indigo-950/30">
                                        <p class="mb-1 text-xs font-semibold text-indigo-900 dark:text-indigo-300">Requirements:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>&bull; Eliminate repeating groups</li>
                                            <li>&bull; Create separate table for related data</li>
                                            <li>&bull; Identify each row with primary key</li>
                                            <li>&bull; Atomic column values only</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <div class="mb-2 text-base font-bold text-purple-600 dark:text-purple-400">2NF &mdash; Second Normal Form</div>
                                    <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">Meets 1NF requirements and removes partial dependencies. Every non-key attribute must depend on the entire primary key.</p>
                                    <div class="rounded-lg bg-purple-50 p-3 dark:bg-purple-950/30">
                                        <p class="mb-1 text-xs font-semibold text-purple-900 dark:text-purple-300">Requirements:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>&bull; Must be in 1NF</li>
                                            <li>&bull; Remove partial dependencies</li>
                                            <li>&bull; Non-key attributes depend on whole key</li>
                                            <li>&bull; Create separate tables for subsets</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <div class="mb-2 text-base font-bold text-rose-600 dark:text-rose-400">3NF &mdash; Third Normal Form</div>
                                    <p class="mb-3 text-xs leading-relaxed text-slate-600 dark:text-slate-400">Meets 2NF requirements and eliminates transitive dependencies. Non-key attributes cannot depend on other non-key attributes.</p>
                                    <div class="rounded-lg bg-rose-50 p-3 dark:bg-rose-950/30">
                                        <p class="mb-1 text-xs font-semibold text-rose-900 dark:text-rose-300">Requirements:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>&bull; Must be in 2NF</li>
                                            <li>&bull; Remove transitive dependencies</li>
                                            <li>&bull; Non-key attributes independent</li>
                                            <li>&bull; Highest practical normal form</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-5 dark:bg-slate-800">
                                <h4 class="mb-2 text-base font-bold text-white">Indexing and Query Optimization</h4>
                                <p class="mb-3 max-w-prose text-sm leading-relaxed text-slate-300">
                                    Database indexes are data structures that improve the speed of data retrieval operations. Like a book's index, they allow the database to find data without scanning every row. Common index types include B-tree indexes (default in most databases), hash indexes for exact matches, and full-text indexes for text search. However, indexes have trade-offs: they speed up reads but slow down writes and consume additional storage.
                                </p>
                                <p class="max-w-prose text-sm leading-relaxed text-slate-300">
                                    Query optimization involves analyzing query execution plans, choosing appropriate indexes, rewriting queries for efficiency, and understanding how the database engine processes queries. Tools like EXPLAIN in SQL help visualize query execution and identify bottlenecks.
                                </p>
                            </div>
                        </div>

                        <!-- ACID Properties and Transactions -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">
                                    <span class="text-lg">&#128274;</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">ACID Properties and Database Transactions</h3>
                                    <p class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">Ensuring data integrity and reliability</p>
                                </div>
                            </div>

                            <p class="mb-5 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                ACID is an acronym representing four key properties that guarantee database transactions are processed reliably. These properties are fundamental to relational databases and critical for applications requiring data consistency, such as financial systems, e-commerce platforms, and enterprise applications where data integrity is paramount.
                            </p>

                            <div class="mb-5 grid gap-4 md:grid-cols-2">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <h4 class="mb-2 text-base font-bold text-blue-900 dark:text-blue-300">Atomicity</h4>
                                    <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Transactions are "all-or-nothing" operations. Either all changes in a transaction are committed to the database, or none are. If any part of the transaction fails, the entire transaction is rolled back to its previous state.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="mb-1 text-xs font-semibold text-blue-900 dark:text-blue-300">Real-World Example:</p>
                                        <p class="text-xs text-slate-600 dark:text-slate-400">
                                            In a bank transfer, money must be deducted from one account AND added to another. If either operation fails, both are rolled back&mdash;you can't have money disappear or duplicate!
                                        </p>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <h4 class="mb-2 text-base font-bold text-purple-900 dark:text-purple-300">Consistency</h4>
                                    <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Transactions must take the database from one valid state to another, maintaining all defined rules, constraints, and triggers. Data integrity constraints are never violated.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="mb-1 text-xs font-semibold text-purple-900 dark:text-purple-300">Real-World Example:</p>
                                        <p class="text-xs text-slate-600 dark:text-slate-400">
                                            If a database rule states that account balances cannot be negative, the database will reject any transaction that would violate this constraint, maintaining consistency.
                                        </p>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <h4 class="mb-2 text-base font-bold text-emerald-900 dark:text-emerald-300">Isolation</h4>
                                    <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Concurrent transactions execute independently without interference. The intermediate state of a transaction is invisible to other transactions, preventing conflicts and ensuring data integrity.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="mb-1 text-xs font-semibold text-emerald-900 dark:text-emerald-300">Real-World Example:</p>
                                        <p class="text-xs text-slate-600 dark:text-slate-400">
                                            When two people try to book the last seat on a flight simultaneously, isolation ensures only one succeeds. The other sees the seat as unavailable, preventing double-booking.
                                        </p>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-900">
                                    <h4 class="mb-2 text-base font-bold text-amber-900 dark:text-amber-300">Durability</h4>
                                    <p class="mb-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                        Once a transaction is committed, it remains permanent even in the event of system failures, crashes, or power outages. Data is safely stored in non-volatile memory.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="mb-1 text-xs font-semibold text-amber-900 dark:text-amber-300">Real-World Example:</p>
                                        <p class="text-xs text-slate-600 dark:text-slate-400">
                                            After you complete an online purchase and receive confirmation, even if the server crashes immediately after, your order is permanently recorded and will be processed.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-5 dark:bg-slate-800">
                                <h4 class="mb-2 text-base font-bold text-white">CAP Theorem and Distributed Databases</h4>
                                <p class="mb-3 max-w-prose text-sm leading-relaxed text-slate-300">
                                    The CAP theorem states that distributed databases can only guarantee two of three properties: Consistency (all nodes see the same data), Availability (every request receives a response), and Partition Tolerance (system continues despite network failures). This fundamental theorem guides distributed database design decisions.
                                </p>
                                <p class="max-w-prose text-sm leading-relaxed text-slate-300">
                                    <strong class="font-semibold text-white">Need Database Help?</strong> Our database experts provide professional assistance with database design, SQL optimization, NoSQL implementation, and complex query development. Whether you're struggling with normalization, need help with stored procedures, or require expert guidance on database architecture, our experienced developers are available 24/7. Get database help from experts who understand ACID properties, indexing strategies, query optimization, and modern database technologies.
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
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Real feedback from students who got help with their database programming projects.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Excellent database design for my e-commerce project! The expert created a normalized schema with proper indexing, and the queries are lightning fast. Great documentation too!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-500 text-sm font-bold text-white">S</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Sarah M.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Database Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Amazing help with complex SQL queries! The developer optimized my slow queries and implemented proper indexes. Performance improved by 10x. Highly recommend!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-500 text-sm font-bold text-white">D</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">David K.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">CS Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Professional MongoDB implementation! The NoSQL design was perfect for my social media app. Clean data modeling and efficient aggregation queries. Excellent work!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500 text-sm font-bold text-white">L</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Lisa T.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Software Engineering Student</div>
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
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Everything you need to know about our database programming service.</p>
                </div>

                <div class="mx-auto max-w-3xl space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Which database systems do you support?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We work with all major database systems including MySQL, PostgreSQL, SQL Server, Oracle, MongoDB, Redis, Firebase, and more. We can help you choose the best database for your project requirements.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you help optimize slow database queries?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely! We specialize in query optimization, indexing strategies, execution plan analysis, and database performance tuning. We can significantly improve your database performance.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Do you provide database design and modeling?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes! We provide complete database design services including ER diagrams, schema design, normalization, relationship mapping, and data modeling following best practices.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Can you help with data migration projects?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes, we assist with data migration between different database systems, including ETL processes, data transformation, and ensuring data integrity during migration.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">What's included in the database delivery?</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">You'll receive complete database scripts, schema documentation, ER diagrams, query examples, and setup instructions. For advanced projects, we also include optimization reports and maintenance guidelines.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-slate-900 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Ready to Build Your Database?</h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm leading-relaxed text-slate-400 sm:text-base">Join hundreds of students who have successfully completed their database projects with our expert help.</p>
                <a href="{{ route('order') }}" class="mt-7 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-slate-900 shadow-sm transition-colors hover:bg-slate-100">
                    Start Your Database Project Today
                </a>
            </div>
        </section>
    </div>
@endsection
