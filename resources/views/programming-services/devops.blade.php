@extends('layouts.app')

@section('title', 'DevOps Services - Expert Help Available')
@section('description',
    'Get professional DevOps help and consulting. Expert engineers available 24/7 for CI/CD,
    automation, container orchestration, cloud infrastructure, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-10 sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Transform Your DevOps Skills</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Professional DevOps Services That Actually Work
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Get expert help with your DevOps projects from experienced engineers who understand modern infrastructure, automation practices, and cutting-edge cloud technologies.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="space-y-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">Struggling with Docker containers that won't start? CI/CD pipelines that keep failing? Kubernetes deployments that make no sense?</strong> You're not alone. DevOps can feel overwhelming when you're juggling containerization, orchestration, infrastructure as code, and cloud platforms all at once. That's exactly where we come in – our expert DevOps engineers transform your frustration into functioning, production-ready infrastructure that actually works.
                        </p>

                        <p>
                            Picture this: Instead of spending sleepless nights debugging YAML files or fighting with Terraform syntax errors, you get a complete, working DevOps solution with crystal-clear documentation that explains <em>why</em> everything works the way it does. We've helped over 800 students master everything from basic Docker containerization to complex multi-cloud Kubernetes deployments. Whether you're automating deployments with Jenkins, building infrastructure with Terraform, or setting up monitoring with Prometheus and Grafana, we deliver solutions that don't just pass your assignment requirements – they teach you professional DevOps practices that companies actually use.
                        </p>

                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">Here's what makes us different:</strong> We don't hand you generic scripts copied from Stack Overflow. Every solution is custom-built for your specific project, complete with architecture diagrams, security configurations, and best practices baked in. Need a CI/CD pipeline? You'll get automated testing, security scanning, and deployment strategies. Working on Infrastructure as Code? Expect modular, reusable templates with proper state management and error handling. Deploying to AWS, Azure, or GCP? We'll optimize your costs while ensuring high availability and auto-scaling.
                        </p>

                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">The best part?</strong> Our engineers are available 24/7 because we know DevOps emergencies don't wait for business hours. Failed deployment at 2 AM? We've got you covered. Certification exam next week and confused about Kubernetes? We'll walk you through it step by step. With an average response time of just 20 minutes and a 97% success rate, we're not just here to help you complete your assignment – we're here to make you confident enough to explain every line of code, every configuration choice, and every architectural decision to your professor or interviewer.
                        </p>
                    </div>

                    <!-- Feature Highlights -->
                    <div class="grid sm:grid-cols-3 gap-5 mt-8">
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-xl dark:bg-purple-950/40 mb-3">🐳</div>
                            <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1">Containerization Masters</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Docker, Kubernetes, and container orchestration that scales</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-50 text-xl dark:bg-blue-950/40 mb-3">⚡</div>
                            <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1">CI/CD Automation</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">Automated pipelines that deploy with confidence</p>
                        </div>
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-50 text-xl dark:bg-indigo-950/40 mb-3">☁️</div>
                            <h3 class="text-base font-bold text-slate-900 dark:text-white mb-1">Cloud Infrastructure</h3>
                            <p class="text-sm text-slate-600 dark:text-slate-400">AWS, Azure, GCP - optimized for cost and performance</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">DevOps Technologies We Master</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Our expert DevOps engineers work with cutting-edge tools and platforms for containerization, orchestration, CI/CD, infrastructure automation, and cloud services.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <!-- Containerization -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Containerization</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">🐳</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Docker</h4>
                            </div>
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">☸️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Kubernetes</h4>
                            </div>
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">🎯</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Docker Compose</h4>
                            </div>
                        </div>
                    </div>

                    <!-- CI/CD Tools -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">CI/CD Tools</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">🔨</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Jenkins</h4>
                            </div>
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">🦊</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">GitLab CI</h4>
                            </div>
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">⚡</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">GitHub Actions</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure as Code -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Infrastructure as Code</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">🏗️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Terraform</h4>
                            </div>
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">🔴</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Ansible</h4>
                            </div>
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">📦</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">CloudFormation</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Platforms -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Cloud Platforms</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">☁️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">AWS</h4>
                            </div>
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">🌩️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Azure</h4>
                            </div>
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">🔵</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Google Cloud</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Our DevOps Services Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-10 sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Trusted by 800+ Students</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Why Students Choose Our DevOps Services
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Industry-leading expertise, practical solutions, and commitment to your success make us the preferred choice for DevOps assistance.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                        <div class="space-y-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">Imagine submitting a DevOps project that makes your professor say "This is production-grade work."</strong> That's what happens when you work with certified DevOps engineers who've actually built and scaled real enterprise systems. While other tutoring services give you cookie-cutter solutions, we're laser-focused on DevOps, cloud infrastructure, and automation – it's all we do, and we do it exceptionally well. Think of us as your personal DevOps mentors with battle-tested experience in Kubernetes clusters, multi-cloud architectures, and zero-downtime deployments.
                        </p>

                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">What you actually get:</strong> Not just code, but a complete DevOps solution package. Picture opening your delivery and finding beautiful architecture diagrams that visualize your entire infrastructure, Infrastructure as Code templates you can actually reuse, CI/CD pipelines with automated testing and security scanning built in, monitoring dashboards configured and ready to go, plus documentation so clear your grandmother could deploy it. Every variable is explained, every design decision is justified, and every potential issue has a troubleshooting guide. You won't just submit the project – you'll understand it deeply enough to defend it confidently.
                        </p>

                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">Speed meets quality:</strong> Here's a scenario – it's 11 PM, your Kubernetes deployment is broken, and it's due tomorrow. You message us. Within 20 minutes, an expert DevOps engineer responds. Within a few hours, you have a working solution with comprehensive testing. This isn't a fairy tale – it's our standard service. We've built our entire operation around the reality that DevOps crises happen at inconvenient times. Every solution goes through automated testing and validation before reaching you, so it works correctly the first time. And if your professor changes requirements or you need tweaks? We revise it until it's perfect.
                        </p>

                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">Security and cost optimization aren't optional extras – they're standard.</strong> Every solution we deliver includes proper secret management (no hardcoded passwords!), network security configurations, least-privilege access controls, and security scanning integration. We also optimize your cloud costs because we know student budgets matter – right-sized resources, auto-scaling that actually saves money, and spot instances where appropriate. Your solution won't just work; it'll be secure, efficient, and maintainable.
                        </p>

                        <p>
                            <strong class="font-semibold text-slate-900 dark:text-white">The real value? You actually learn this stuff.</strong> We're not in the business of just completing assignments – we're building your DevOps career foundation. Every solution comes with detailed explanations that connect the dots between theory and practice. Need a video walkthrough of your infrastructure? Just ask. Confused about why we chose that particular architecture? We'll explain it until it clicks. Our clients keep coming back not because they're dependent on us, but because they trust our teaching approach and see their own skills growing with each project. With a 97% success rate and hundreds of five-star reviews, we've proven that expert help can accelerate your learning without replacing it.
                        </p>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-5 mt-8">
                        <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="text-2xl font-bold text-emerald-600 dark:text-emerald-400 mb-1">97%</div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Success Rate</div>
                        </div>
                        <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-1">20min</div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Avg Response</div>
                        </div>
                        <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="text-2xl font-bold text-purple-600 dark:text-purple-400 mb-1">800+</div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Projects Done</div>
                        </div>
                        <div class="text-center rounded-2xl border border-slate-200 bg-white p-6 dark:border-slate-800 dark:bg-slate-900">
                            <div class="text-2xl font-bold text-amber-600 dark:text-amber-400 mb-1">24/7</div>
                            <div class="text-xs font-semibold uppercase tracking-wider text-slate-500">Available</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Transparent Pricing</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Fair, transparent pricing based on DevOps project complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Basic DevOps</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $40</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Docker containerization
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Simple CI/CD pipeline
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    6-24 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Documentation included
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border-2 border-blue-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md relative dark:bg-slate-900">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-blue-600 px-3 py-1 text-[11px] font-semibold text-white">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Advanced DevOps</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $90</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Kubernetes orchestration
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Infrastructure as Code
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Monitoring & logging setup
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Security configuration
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Enterprise Solution</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $180</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Full cloud architecture
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Multi-cloud deployment
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    2-4 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Auto-scaling & HA setup
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Disaster recovery plan
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Our DevOps Delivery Process</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Proven methodology for delivering efficient and
                        scalable DevOps solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">1</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Requirements Analysis</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">We analyze your infrastructure requirements, deployment needs, and automation goals to design optimal solutions.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">2</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Infrastructure Design</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Create architecture diagrams, define CI/CD pipelines, and establish Infrastructure as Code templates.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">3</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Implementation & Testing</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Build infrastructure, configure automation, and conduct thorough testing and validation.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">4</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Deployment & Documentation</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Deploy solutions, provide comprehensive documentation, and deliver your complete DevOps infrastructure.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">What Our Clients Say</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Real feedback from students who got help with their
                        DevOps projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Excellent Kubernetes deployment setup! The engineer created a complete CI/CD pipeline with automated testing and deployment. Everything worked perfectly on first try. Incredible documentation!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-purple-600 rounded-full flex items-center justify-center text-white text-sm font-bold">M</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Michael R.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">DevOps Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Amazing help with Terraform infrastructure! The expert set up complete AWS infrastructure with proper security groups, auto-scaling, and monitoring. Saved me days of work!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-blue-600 rounded-full flex items-center justify-center text-white text-sm font-bold">J</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Jennifer L.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Cloud Computing Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Professional Docker containerization! The solution included docker-compose, multi-stage builds, and production-ready configurations. Clean code and excellent explanations!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-emerald-600 rounded-full flex items-center justify-center text-white text-sm font-bold">A</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Alex P.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Frequently Asked Questions</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Everything you need to know about our DevOps
                        services.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Which DevOps tools and platforms do you support?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">We work with all major DevOps tools including Docker, Kubernetes, Jenkins, GitLab CI, GitHub Actions, Terraform, Ansible, AWS, Azure, Google Cloud, and more. We can help you choose the best tools for your project requirements.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Can you help build CI/CD pipelines from scratch?
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Absolutely! We specialize in designing and implementing complete CI/CD pipelines with automated testing, security scanning, and deployment automation. We ensure your pipeline follows industry best practices and is optimized for your specific needs.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Do you provide Infrastructure as Code solutions?
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Yes! We provide complete Infrastructure as Code solutions using Terraform, Ansible, CloudFormation, or other IaC tools. This includes network configuration, security groups, auto-scaling, load balancing, and monitoring setup.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Can you help with Kubernetes deployment and orchestration?
                        </h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Yes, we specialize in Kubernetes deployments, including cluster setup, pod configuration, service definitions, ingress controllers, persistent storage, and auto-scaling. We provide production-ready Kubernetes manifests with proper resource limits and health checks.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">What's included in the DevOps delivery?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">You'll receive complete infrastructure code, CI/CD pipeline configurations, deployment scripts, architecture diagrams, monitoring setup, and comprehensive documentation. For advanced projects, we also include security configurations, cost optimization strategies, and troubleshooting guides.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-14 sm:py-16 bg-slate-900 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl mb-3">Ready to Automate Your Infrastructure?</h2>
                <p class="text-sm text-slate-400 mb-6 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their DevOps projects with our expert engineering help.</p>
                <a href="{{ route('order') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                    Start Your DevOps Project Today
                </a>
            </div>
        </section>
    </div>
@endsection
