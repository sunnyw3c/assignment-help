@extends('layouts.app')

@section('title', 'DevOps Services - Expert Help Available')
@section('description',
    'Get professional DevOps help and consulting. Expert engineers available 24/7 for CI/CD,
    automation, container orchestration, cloud infrastructure, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative hero-bg py-24 overflow-hidden min-h-screen flex items-center">
            <!-- Enhanced Background Pattern -->
            <div class="absolute inset-0 opacity-5 md:opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,<svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.15\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');"></div>
            </div>

            <!-- Animated Background Dots -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-20 left-20 w-2 h-2 bg-purple-400 rounded-full animate-ping opacity-20 md:opacity-30"></div>
                <div class="absolute top-40 right-32 w-3 h-3 bg-blue-400 rounded-full animate-ping opacity-25 md:opacity-40" style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-16 w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping opacity-20 md:opacity-35" style="animation-delay: 1s;"></div>
                <div class="absolute top-60 left-1/3 w-2.5 h-2.5 bg-green-400 rounded-full animate-ping opacity-15 md:opacity-25" style="animation-delay: 1.5s;"></div>
                <div class="absolute bottom-20 right-20 w-2 h-2 bg-yellow-400 rounded-full animate-ping opacity-20 md:opacity-30" style="animation-delay: 2s;"></div>
            </div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Floating Dockerfile -->
                <div class="absolute top-16 left-8 bg-gradient-to-r from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet animate-glow">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">Dockerfile</span>
                    </div>
                    <div><span class="text-purple-400">FROM</span> node:18-alpine</div>
                    <div><span class="text-purple-400">WORKDIR</span> /app</div>
                    <div><span class="text-purple-400">COPY</span> . .</div>
                    <div><span class="text-purple-400">RUN</span> npm install</div>
                </div>

                <!-- Floating Kubernetes -->
                <div class="absolute top-28 right-12 bg-gradient-to-r from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">deployment.yaml</span>
                    </div>
                    <div><span class="text-blue-400">apiVersion:</span> apps/v1</div>
                    <div><span class="text-blue-400">kind:</span> Deployment</div>
                    <div><span class="text-blue-400">metadata:</span></div>
                    <div class="ml-2"><span class="text-yellow-400">name:</span> my-app</div>
                </div>

                <!-- Floating CI/CD Pipeline -->
                <div class="absolute bottom-24 left-1/4 bg-gradient-to-r from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">.gitlab-ci.yml</span>
                    </div>
                    <div><span class="text-purple-400">stages:</span></div>
                    <div class="ml-2">- <span class="text-yellow-400">build</span></div>
                    <div class="ml-2">- <span class="text-yellow-400">test</span></div>
                    <div class="ml-2">- <span class="text-yellow-400">deploy</span></div>
                </div>

                <!-- Floating Terraform -->
                <div class="absolute top-72 right-8 bg-gradient-to-r from-gray-900 to-gray-800 text-orange-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">main.tf</span>
                    </div>
                    <div class="text-purple-400">resource</div>
                    <div class="ml-2"><span class="text-green-400">"aws_instance"</span> {</div>
                    <div class="ml-4">ami = <span class="text-yellow-400">"ami-123"</span></div>
                    <div class="ml-2">}</div>
                </div>

                <!-- Floating Ansible -->
                <div class="absolute bottom-16 right-1/3 bg-gradient-to-r from-gray-900 to-gray-800 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet" style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">playbook.yml</span>
                    </div>
                    <div>- <span class="text-blue-400">name:</span> Deploy App</div>
                    <div class="ml-2"><span class="text-yellow-400">hosts:</span> webservers</div>
                    <div class="ml-2"><span class="text-yellow-400">tasks:</span></div>
                </div>

                <!-- Floating Jenkins -->
                <div class="absolute top-96 left-16 bg-gradient-to-r from-gray-900 to-gray-800 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet" style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">Jenkinsfile</span>
                    </div>
                    <div><span class="text-blue-400">pipeline</span> {</div>
                    <div class="ml-2"><span class="text-green-400">agent</span> any</div>
                    <div class="ml-2"><span class="text-green-400">stages</span> {}</div>
                    <div>}</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-green-100 text-green-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            <span class="w-2 h-2 bg-green-500 rounded-full mr-2 animate-pulse"></span>
                            350+ DevOps Engineers Available Now
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Expert <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">DevOps</span><br>
                            Help & Solutions
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get instant DevOps assistance from certified engineers. From CI/CD pipelines and Docker containerization to Kubernetes orchestration and cloud infrastructure automation.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('order') }}"
                                class="group inline-flex items-center justify-center bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-center">
                                Get DevOps Help Now
                                <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                            <a href="#pricing"
                                class="inline-flex items-center justify-center border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-xl font-semibold hover:bg-purple-600 hover:text-white transition-all duration-300 text-center">
                                View Pricing
                            </a>
                        </div>

                        <div class="grid grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="text-2xl font-bold text-purple-600 mb-1">20min</div>
                                <div class="text-sm text-gray-500">Avg Response</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-green-600 mb-1">97%</div>
                                <div class="text-sm text-gray-500">Success Rate</div>
                            </div>
                            <div class="text-center">
                                <div class="text-2xl font-bold text-blue-600 mb-1">24/7</div>
                                <div class="text-sm text-gray-500">Support</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Enhanced Code Editor Mockup -->
                    <div class="relative transform hover:scale-105 transition-transform duration-300">
                        <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-2xl shadow-2xl overflow-hidden border border-gray-700 backdrop-blur-sm">
                            <!-- Editor Header -->
                            <div class="flex items-center justify-between p-4 bg-gradient-to-r from-gray-800 to-gray-700 border-b border-gray-600">
                                <div class="flex items-center space-x-3">
                                    <div class="flex space-x-2">
                                        <div class="w-3 h-3 bg-red-500 rounded-full hover:bg-red-400 transition-colors cursor-pointer"></div>
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full hover:bg-yellow-400 transition-colors cursor-pointer"></div>
                                        <div class="w-3 h-3 bg-green-500 rounded-full hover:bg-green-400 transition-colors cursor-pointer"></div>
                                    </div>
                                    <div class="ml-4 text-gray-300 text-sm font-mono flex items-center">
                                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2 animate-pulse"></span>
                                        docker-compose.yml
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">Docker</div>
                                    <div class="text-xs text-gray-400 bg-gray-700 px-2 py-1 rounded">DevOps</div>
                                </div>
                            </div>

                            <!-- Line Numbers and Code Content -->
                            <div class="flex">
                                <!-- Line Numbers -->
                                <div class="bg-gray-800 px-3 py-6 text-gray-500 font-mono text-xs leading-6 select-none">
                                    <div>1</div>
                                    <div>2</div>
                                    <div>3</div>
                                    <div>4</div>
                                    <div>5</div>
                                    <div>6</div>
                                    <div>7</div>
                                    <div>8</div>
                                    <div>9</div>
                                    <div>10</div>
                                    <div>11</div>
                                    <div>12</div>
                                </div>

                                <!-- Code Content -->
                                <div class="font-mono text-sm space-y-1 p-6 flex-1 leading-6">
                                    <div class="text-purple-400"># 🐳 Professional DevOps Solution</div>
                                    <div><span class="text-blue-400">version:</span> <span class="text-green-400">'3.8'</span></div>
                                    <div><span class="text-blue-400">services:</span></div>
                                    <div class="text-gray-300 ml-4"><span class="text-yellow-400">web:</span></div>
                                    <div class="text-gray-300 ml-8">image: <span class="text-green-400">"nginx:latest"</span></div>
                                    <div class="text-gray-300 ml-8">ports: <span class="text-orange-400">["80:80"]</span></div>
                                    <div class="text-gray-300 ml-4"><span class="text-yellow-400">app:</span></div>
                                    <div class="text-gray-300 ml-8">build: <span class="text-green-400">"."</span></div>
                                    <div class="text-gray-300 ml-8">restart: <span class="text-green-400">"always"</span></div>
                                    <div class="text-gray-500"></div>
                                    <div class="text-purple-400"># ⭐ Expert Available 24/7 - 97% Success</div>
                                    <div class="text-blue-400"># <span class="text-green-400">Production Ready! ☸️</span></div>
                                </div>
                            </div>

                            <!-- Status Bar -->
                            <div class="bg-gradient-to-r from-gray-800 to-gray-700 px-4 py-2 border-t border-gray-600 flex items-center justify-between text-xs">
                                <div class="flex items-center space-x-4 text-gray-400">
                                    <span class="flex items-center">
                                        <span class="w-2 h-2 bg-green-500 rounded-full mr-1 animate-pulse"></span>
                                        Ready
                                    </span>
                                    <span>UTF-8</span>
                                    <span>YAML</span>
                                </div>
                                <div class="flex items-center space-x-2 text-gray-400">
                                    <span>Ln 12, Col 1</span>
                                    <span>Spaces: 2</span>
                                </div>
                            </div>
                        </div>

                        <!-- Enhanced Floating Elements -->
                        <div class="absolute -top-6 -right-6 bg-gradient-to-r from-purple-500 to-blue-500 text-white rounded-xl shadow-xl p-3 animate-bounce transform rotate-12">
                            <div class="text-2xl">🐳</div>
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-gradient-to-r from-green-500 to-emerald-500 text-white rounded-xl shadow-xl p-3 animate-pulse transform -rotate-12">
                            <div class="text-2xl">☸️</div>
                        </div>
                        <div class="absolute top-1/2 -right-8 bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-full shadow-xl p-2 animate-ping transform">
                            <div class="text-lg">⚡</div>
                        </div>

                        <!-- Glowing Effects -->
                        <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-purple-500/20 to-blue-500/20 opacity-0 hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Content Section -->
        <section class="py-32 bg-gradient-to-br from-white via-purple-50/30 to-blue-50/30 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-blue-100 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-100 to-purple-100 rounded-full opacity-20 blur-3xl"></div>

            <div class="container mx-auto px-6 relative z-10">
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
            <div class="container mx-auto px-6">
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

            <div class="container mx-auto px-6 relative z-10">
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
            <div class="container mx-auto px-6">
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
            <div class="container mx-auto px-6">
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
            <div class="container mx-auto px-6">
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
            <div class="container mx-auto px-6">
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
            <div class="container mx-auto px-6 text-center">
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
        @keyframes float {

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

        @keyframes float-delayed {

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
