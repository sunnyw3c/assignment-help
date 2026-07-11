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
        <section class="py-32 bg-gradient-to-br from-white via-purple-50/30 to-blue-50/30 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-blue-100 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-100 to-purple-100 rounded-full opacity-20 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                🚀 Transform Your DevOps Skills
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Professional DevOps Services<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">That Actually Work</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Get expert help with your DevOps projects from experienced engineers who understand modern infrastructure, automation practices, and cutting-edge cloud technologies.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed mb-6">
                            <strong>Struggling with Docker containers that won't start? CI/CD pipelines that keep failing? Kubernetes deployments that make no sense?</strong> You're not alone. DevOps can feel overwhelming when you're juggling containerization, orchestration, infrastructure as code, and cloud platforms all at once. That's exactly where we come in – our expert DevOps engineers transform your frustration into functioning, production-ready infrastructure that actually works.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-6">
                            Picture this: Instead of spending sleepless nights debugging YAML files or fighting with Terraform syntax errors, you get a complete, working DevOps solution with crystal-clear documentation that explains <em>why</em> everything works the way it does. We've helped over 800 students master everything from basic Docker containerization to complex multi-cloud Kubernetes deployments. Whether you're automating deployments with Jenkins, building infrastructure with Terraform, or setting up monitoring with Prometheus and Grafana, we deliver solutions that don't just pass your assignment requirements – they teach you professional DevOps practices that companies actually use.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-6">
                            <strong>Here's what makes us different:</strong> We don't hand you generic scripts copied from Stack Overflow. Every solution is custom-built for your specific project, complete with architecture diagrams, security configurations, and best practices baked in. Need a CI/CD pipeline? You'll get automated testing, security scanning, and deployment strategies. Working on Infrastructure as Code? Expect modular, reusable templates with proper state management and error handling. Deploying to AWS, Azure, or GCP? We'll optimize your costs while ensuring high availability and auto-scaling.
                        </p>

                        <p class="text-gray-700 leading-relaxed">
                            <strong>The best part?</strong> Our engineers are available 24/7 because we know DevOps emergencies don't wait for business hours. Failed deployment at 2 AM? We've got you covered. Certification exam next week and confused about Kubernetes? We'll walk you through it step by step. With an average response time of just 20 minutes and a 97% success rate, we're not just here to help you complete your assignment – we're here to make you confident enough to explain every line of code, every configuration choice, and every architectural decision to your professor or interviewer.
                        </p>
                    </div>

                    <!-- Feature Highlights -->
                    <div class="grid md:grid-cols-3 gap-6 mt-12">
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200 hover:shadow-lg transition-shadow duration-300">
                            <div class="text-3xl mb-3">🐳</div>
                            <h3 class="font-bold text-gray-900 mb-2">Containerization Masters</h3>
                            <p class="text-gray-600 text-sm">Docker, Kubernetes, and container orchestration that scales</p>
                        </div>
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200 hover:shadow-lg transition-shadow duration-300">
                            <div class="text-3xl mb-3">⚡</div>
                            <h3 class="font-bold text-gray-900 mb-2">CI/CD Automation</h3>
                            <p class="text-gray-600 text-sm">Automated pipelines that deploy with confidence</p>
                        </div>
                        <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 border border-indigo-200 hover:shadow-lg transition-shadow duration-300">
                            <div class="text-3xl mb-3">☁️</div>
                            <h3 class="font-bold text-gray-900 mb-2">Cloud Infrastructure</h3>
                            <p class="text-gray-600 text-sm">AWS, Azure, GCP - optimized for cost and performance</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">DevOps Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert DevOps engineers work with cutting-edge tools and platforms for containerization, orchestration, CI/CD, infrastructure automation, and cloud services.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Containerization -->
                    <div class="bg-white rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Containerization</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🐳</div>
                                    <h4 class="font-semibold text-gray-900">Docker</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">☸️</div>
                                    <h4 class="font-semibold text-gray-900">Kubernetes</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🎯</div>
                                    <h4 class="font-semibold text-gray-900">Docker Compose</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CI/CD Tools -->
                    <div class="bg-white rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">CI/CD Tools</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🔨</div>
                                    <h4 class="font-semibold text-gray-900">Jenkins</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🦊</div>
                                    <h4 class="font-semibold text-gray-900">GitLab CI</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">⚡</div>
                                    <h4 class="font-semibold text-gray-900">GitHub Actions</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Infrastructure as Code -->
                    <div class="bg-white rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Infrastructure as Code</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🏗️</div>
                                    <h4 class="font-semibold text-gray-900">Terraform</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🔴</div>
                                    <h4 class="font-semibold text-gray-900">Ansible</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">📦</div>
                                    <h4 class="font-semibold text-gray-900">CloudFormation</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Platforms -->
                    <div class="bg-white rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Cloud Platforms</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">☁️</div>
                                    <h4 class="font-semibold text-gray-900">AWS</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🌩️</div>
                                    <h4 class="font-semibold text-gray-900">Azure</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔵</div>
                                    <h4 class="font-semibold text-gray-900">Google Cloud</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Our DevOps Services Section -->
        <section class="py-32 bg-gradient-to-br from-gray-50 via-blue-50/20 to-purple-50/20 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-20 left-0 w-72 h-72 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute bottom-20 right-0 w-72 h-72 bg-gradient-to-tl from-purple-200 to-indigo-200 rounded-full opacity-10 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                ⭐ Trusted by 800+ Students
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Why Students Choose<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Our DevOps Services</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Industry-leading expertise, practical solutions, and commitment to your success make us the preferred choice for DevOps assistance.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                        <p class="text-gray-700 leading-relaxed mb-6">
                            <strong>Imagine submitting a DevOps project that makes your professor say "This is production-grade work."</strong> That's what happens when you work with certified DevOps engineers who've actually built and scaled real enterprise systems. While other tutoring services give you cookie-cutter solutions, we're laser-focused on DevOps, cloud infrastructure, and automation – it's all we do, and we do it exceptionally well. Think of us as your personal DevOps mentors with battle-tested experience in Kubernetes clusters, multi-cloud architectures, and zero-downtime deployments.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-6">
                            <strong>What you actually get:</strong> Not just code, but a complete DevOps solution package. Picture opening your delivery and finding beautiful architecture diagrams that visualize your entire infrastructure, Infrastructure as Code templates you can actually reuse, CI/CD pipelines with automated testing and security scanning built in, monitoring dashboards configured and ready to go, plus documentation so clear your grandmother could deploy it. Every variable is explained, every design decision is justified, and every potential issue has a troubleshooting guide. You won't just submit the project – you'll understand it deeply enough to defend it confidently.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-6">
                            <strong>Speed meets quality:</strong> Here's a scenario – it's 11 PM, your Kubernetes deployment is broken, and it's due tomorrow. You message us. Within 20 minutes, an expert DevOps engineer responds. Within a few hours, you have a working solution with comprehensive testing. This isn't a fairy tale – it's our standard service. We've built our entire operation around the reality that DevOps crises happen at inconvenient times. Every solution goes through automated testing and validation before reaching you, so it works correctly the first time. And if your professor changes requirements or you need tweaks? We revise it until it's perfect.
                        </p>

                        <p class="text-gray-700 leading-relaxed mb-6">
                            <strong>Security and cost optimization aren't optional extras – they're standard.</strong> Every solution we deliver includes proper secret management (no hardcoded passwords!), network security configurations, least-privilege access controls, and security scanning integration. We also optimize your cloud costs because we know student budgets matter – right-sized resources, auto-scaling that actually saves money, and spot instances where appropriate. Your solution won't just work; it'll be secure, efficient, and maintainable.
                        </p>

                        <p class="text-gray-700 leading-relaxed">
                            <strong>The real value? You actually learn this stuff.</strong> We're not in the business of just completing assignments – we're building your DevOps career foundation. Every solution comes with detailed explanations that connect the dots between theory and practice. Need a video walkthrough of your infrastructure? Just ask. Confused about why we chose that particular architecture? We'll explain it until it clicks. Our clients keep coming back not because they're dependent on us, but because they trust our teaching approach and see their own skills growing with each project. With a 97% success rate and hundreds of five-star reviews, we've proven that expert help can accelerate your learning without replacing it.
                        </p>
                    </div>

                    <!-- Stats Grid -->
                    <div class="grid md:grid-cols-4 gap-6 mt-12">
                        <div class="text-center bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                            <div class="text-4xl font-bold text-green-600 mb-2">97%</div>
                            <div class="text-gray-600 text-sm font-medium">Success Rate</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                            <div class="text-4xl font-bold text-blue-600 mb-2">20min</div>
                            <div class="text-gray-600 text-sm font-medium">Avg Response</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-purple-50 to-violet-50 rounded-xl p-6 border border-purple-200">
                            <div class="text-4xl font-bold text-purple-600 mb-2">800+</div>
                            <div class="text-gray-600 text-sm font-medium">Projects Done</div>
                        </div>
                        <div class="text-center bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                            <div class="text-4xl font-bold text-orange-600 mb-2">24/7</div>
                            <div class="text-gray-600 text-sm font-medium">Available</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on DevOps project complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic DevOps</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $40</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Docker containerization
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple CI/CD pipeline
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    6-24 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Documentation included
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200 border-2 border-purple-600 relative">
                        <div
                            class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-purple-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced DevOps</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $90</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Kubernetes orchestration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Infrastructure as Code
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Monitoring & logging setup
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Security configuration
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise Solution</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $180</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full cloud architecture
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Multi-cloud deployment
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    2-4 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Auto-scaling & HA setup
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Disaster recovery plan
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our DevOps Delivery Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering efficient and
                        scalable DevOps solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Requirements Analysis</h3>
                        <p class="text-gray-600">We analyze your infrastructure requirements, deployment needs, and automation goals to design optimal solutions.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Infrastructure Design</h3>
                        <p class="text-gray-600">Create architecture diagrams, define CI/CD pipelines, and establish Infrastructure as Code templates.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Implementation & Testing</h3>
                        <p class="text-gray-600">Build infrastructure, configure automation, and conduct thorough testing and validation.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Deployment & Documentation</h3>
                        <p class="text-gray-600">Deploy solutions, provide comprehensive documentation, and deliver your complete DevOps infrastructure.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who got help with their
                        DevOps projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Excellent Kubernetes deployment setup! The engineer created a complete CI/CD pipeline with automated testing and deployment. Everything worked perfectly on first try. Incredible documentation!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                M</div>
                            <div>
                                <div class="font-semibold text-gray-900">Michael R.</div>
                                <div class="text-sm text-gray-500">DevOps Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing help with Terraform infrastructure! The expert set up complete AWS infrastructure with proper security groups, auto-scaling, and monitoring. Saved me days of work!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                J</div>
                            <div>
                                <div class="font-semibold text-gray-900">Jennifer L.</div>
                                <div class="text-sm text-gray-500">Cloud Computing Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Professional Docker containerization! The solution included docker-compose, multi-stage builds, and production-ready configurations. Clean code and excellent explanations!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                A</div>
                            <div>
                                <div class="font-semibold text-gray-900">Alex P.</div>
                                <div class="text-sm text-gray-500">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our DevOps
                        services.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Which DevOps tools and platforms do you support?</h3>
                        <p class="text-gray-600">We work with all major DevOps tools including Docker, Kubernetes, Jenkins, GitLab CI, GitHub Actions, Terraform, Ansible, AWS, Azure, Google Cloud, and more. We can help you choose the best tools for your project requirements.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help build CI/CD pipelines from scratch?
                        </h3>
                        <p class="text-gray-600">Absolutely! We specialize in designing and implementing complete CI/CD pipelines with automated testing, security scanning, and deployment automation. We ensure your pipeline follows industry best practices and is optimized for your specific needs.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide Infrastructure as Code solutions?
                        </h3>
                        <p class="text-gray-600">Yes! We provide complete Infrastructure as Code solutions using Terraform, Ansible, CloudFormation, or other IaC tools. This includes network configuration, security groups, auto-scaling, load balancing, and monitoring setup.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with Kubernetes deployment and orchestration?
                        </h3>
                        <p class="text-gray-600">Yes, we specialize in Kubernetes deployments, including cluster setup, pod configuration, service definitions, ingress controllers, persistent storage, and auto-scaling. We provide production-ready Kubernetes manifests with proper resource limits and health checks.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the DevOps delivery?</h3>
                        <p class="text-gray-600">You'll receive complete infrastructure code, CI/CD pipeline configurations, deployment scripts, architecture diagrams, monitoring setup, and comprehensive documentation. For advanced projects, we also include security configurations, cost optimization strategies, and troubleshooting guides.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Automate Your Infrastructure?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their DevOps projects with our expert engineering help.</p>
                <a href="{{ route('order') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Your DevOps Project Today
                </a>
            </div>
        </section>
    </div>

    <style>
        @@keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-10px) rotate(1deg);
            }

            66% {
                transform: translateY(5px) rotate(-1deg);
            }
        }

        @@keyframes float-delayed {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(10px) rotate(-1deg);
            }

            66% {
                transform: translateY(-5px) rotate(1deg);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }
    </style>
@endsection
