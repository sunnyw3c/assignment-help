@extends('layouts.app')

@section('title', 'Machine Learning Projects - Expert Help Available')
@section('description', 'Get professional help with machine learning projects. Expert ML engineers available 24/7 for TensorFlow, PyTorch, scikit-learn, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- First Engaging Content Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-10 sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Master Machine Learning & AI</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            From Code to Intelligent Systems
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Unlock the power of artificial intelligence and build
                            systems that learn and adapt.</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Hero Stats Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="flex items-start gap-4 mb-5">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-xl">🚀</div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Why Machine Learning is the Future</h3>
                                    <p class="text-sm font-semibold text-purple-600 dark:text-purple-400">The most in-demand skill driving innovation across every industry</p>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-5">
                                <div class="rounded-xl border-l-4 border-purple-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="text-xl font-bold text-purple-600 dark:text-purple-400 mb-1">97%</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Enterprises Adopt AI</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-blue-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="text-xl font-bold text-blue-600 dark:text-blue-400 mb-1">$160K+</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Avg ML Engineer Salary</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-indigo-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="text-xl font-bold text-indigo-600 dark:text-indigo-400 mb-1">3.5M</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">AI/ML Jobs by 2027</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-emerald-500 bg-slate-50 p-4 dark:bg-slate-900">
                                    <div class="text-xl font-bold text-emerald-600 dark:text-emerald-400 mb-1">40%</div>
                                    <p class="text-xs font-semibold text-slate-700 dark:text-slate-300">Annual Growth Rate</p>
                                </div>
                            </div>

                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400 mb-4">
                                <span class="font-semibold text-purple-600 dark:text-purple-400">Machine learning is transforming every industry on the planet.</span> From Netflix's recommendation engine serving 230+ million subscribers to
                                Tesla's self-driving technology, from Google's search algorithms to healthcare diagnostics
                                saving lives — ML is everywhere. Companies like OpenAI, Google DeepMind, and Meta are investing
                                billions because AI isn't the future — it's the present.
                            </p>

                            <div class="rounded-xl bg-slate-900 p-5 text-white dark:bg-slate-800">
                                <p class="font-semibold text-sm mb-1">💡 Industry Reality</p>
                                <p class="text-sm text-slate-300">
                                    Machine learning engineers are among the highest-paid tech professionals globally. Google
                                    pays ML engineers up to $250K+, while startups offer equity that can be worth millions.
                                    Mastering ML opens doors to roles at FAANG companies, cutting-edge AI labs, autonomous
                                    vehicle companies, and revolutionary healthcare startups. The barrier to entry isn't
                                    talent — it's knowledge.
                                </p>
                            </div>
                        </div>

                        <!-- ML Types Comparison Cards -->
                        <div class="grid sm:grid-cols-3 gap-5">
                            <!-- Supervised Learning Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-lg">📊</div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Supervised Learning</h4>
                                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400">Learn from labeled data</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400 border-l-4 border-blue-500 bg-slate-50 dark:bg-slate-900 rounded-lg p-3">
                                        <span class="font-semibold text-blue-600 dark:text-blue-400">Supervised = Guided Learning.</span> Train
                                        models on labeled data to predict outcomes. Powers spam filters, fraud detection,
                                        medical diagnosis, and image classification.
                                    </p>

                                    <div class="rounded-lg bg-blue-600 p-3 text-white">
                                        <p class="text-xs font-semibold mb-2">🎯 Common Algorithms</p>
                                        <div class="flex flex-wrap gap-1.5">
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">Linear Regression</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">Random Forest</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">SVM</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">Neural Networks</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Unsupervised Learning Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-lg">🔍</div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Unsupervised Learning</h4>
                                        <p class="text-xs font-semibold text-purple-600 dark:text-purple-400">Discover hidden patterns</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400 border-l-4 border-purple-500 bg-slate-50 dark:bg-slate-900 rounded-lg p-3">
                                        <span class="font-semibold text-purple-600 dark:text-purple-400">Unsupervised = Self-Discovery.</span> Find
                                        patterns in unlabeled data without guidance. Powers customer segmentation,
                                        recommendation systems, anomaly detection, and data compression.
                                    </p>

                                    <div class="rounded-lg bg-purple-600 p-3 text-white">
                                        <p class="text-xs font-semibold mb-2">🌐 Common Algorithms</p>
                                        <div class="flex flex-wrap gap-1.5">
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">K-Means</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">PCA</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">DBSCAN</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">Autoencoders</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reinforcement Learning Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-lg">🎮</div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Reinforcement Learning</h4>
                                        <p class="text-xs font-semibold text-emerald-600 dark:text-emerald-400">Learn through trial & error</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400 border-l-4 border-emerald-500 bg-slate-50 dark:bg-slate-900 rounded-lg p-3">
                                        <span class="font-semibold text-emerald-600 dark:text-emerald-400">RL = Learning by Doing.</span> Agents learn
                                        optimal strategies through rewards and penalties. Powers game AI (AlphaGo), robotics,
                                        autonomous vehicles, and trading algorithms.
                                    </p>

                                    <div class="rounded-lg bg-emerald-600 p-3 text-white">
                                        <p class="text-xs font-semibold mb-2">🚀 Common Algorithms</p>
                                        <div class="flex flex-wrap gap-1.5">
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">Q-Learning</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">DQN</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">PPO</span>
                                            <span class="bg-white/20 px-2 py-0.5 rounded text-[11px]">A3C</span>
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
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">ML Technologies We Master</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Our expert ML engineers work with cutting-edge
                        frameworks and tools to build intelligent solutions.</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <!-- Deep Learning Frameworks -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Deep Learning</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">🔥</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">TensorFlow</h4>
                            </div>
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">🔦</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">PyTorch</h4>
                            </div>
                            <div class="text-center rounded-xl bg-amber-50 p-3 dark:bg-amber-950/40">
                                <div class="text-2xl mb-1">⚡</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Keras</h4>
                            </div>
                        </div>
                    </div>

                    <!-- ML Libraries -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">ML Libraries</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">🔬</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">scikit-learn</h4>
                            </div>
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">🐼</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Pandas</h4>
                            </div>
                            <div class="text-center rounded-xl bg-blue-50 p-3 dark:bg-blue-950/40">
                                <div class="text-2xl mb-1">🔢</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">NumPy</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Computer Vision -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">Computer Vision</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">👁️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">OpenCV</h4>
                            </div>
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">🖼️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">YOLO</h4>
                            </div>
                            <div class="text-center rounded-xl bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                <div class="text-2xl mb-1">📸</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">PIL/Pillow</h4>
                            </div>
                        </div>
                    </div>

                    <!-- NLP & Tools -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 text-center">NLP & Tools</h3>
                        <div class="space-y-2">
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">🗣️</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">NLTK</h4>
                            </div>
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">🤗</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Hugging Face</h4>
                            </div>
                            <div class="text-center rounded-xl bg-purple-50 p-3 dark:bg-purple-950/40">
                                <div class="text-2xl mb-1">📊</div>
                                <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Matplotlib</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Transparent Pricing</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Fair, transparent pricing based on project
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Basic ML Project</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $45</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Simple ML models
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Data preprocessing
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    3-4 day delivery
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

                    <div class="rounded-2xl border-2 border-blue-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md relative dark:bg-slate-950">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-blue-600 px-3 py-1 text-[11px] font-semibold text-white">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Advanced ML Project</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $120</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Deep learning models
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Feature engineering
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    5-7 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Model optimization
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Visualization reports
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Enterprise AI Solution</h3>
                            <div class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-4">From $250</div>
                            <ul class="text-left space-y-2 mb-6 text-sm text-slate-600 dark:text-slate-400">
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Custom neural networks
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Production deployment
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    7-14 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    Hyperparameter tuning
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-emerald-600 dark:text-emerald-400">✓</span>
                                    API integration
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
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10 sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white mb-4">Our ML Development Process</h2>
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Proven methodology for delivering high-quality machine
                        learning solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">1</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Data Analysis</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">We analyze your dataset, understand the problem, and define success
                            metrics.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">2</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Model Development</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Build and train ML models with proper preprocessing and feature
                            engineering.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">3</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Training & Optimization</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Train models, tune hyperparameters, and optimize for best performance.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-blue-50 dark:bg-blue-950/40 rounded-xl w-11 h-11 flex items-center justify-center mx-auto mb-3">
                            <span class="text-base font-bold text-blue-600 dark:text-blue-400">4</span>
                        </div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Delivery & Deployment</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Deliver your trained model with documentation and deployment guidance.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Engaging Content Section -->
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto">
                    <div class="text-center mb-10 sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">Comprehensive ML Guide</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Complete Guide to Machine Learning & Deep Learning
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Essential knowledge for data scientists, ML engineers,
                            and AI enthusiasts.</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Main Informative Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="flex items-start gap-4 mb-5">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-lg">📚</div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Understanding Machine Learning</h3>
                                    <p class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">The technology powering the AI revolution</p>
                                </div>
                            </div>

                            <div class="space-y-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <p>
                                    <span class="font-semibold text-indigo-600 dark:text-indigo-400">Machine learning is a subset of artificial intelligence
                                        that enables computers to learn from data without being explicitly programmed.</span> Unlike
                                    traditional programming where developers write explicit rules, ML algorithms identify patterns
                                    in data and make decisions based on those patterns. This has enabled applications from voice
                                    assistants like Siri and Alexa to autonomous vehicles and medical diagnosis systems.
                                </p>

                                <p>
                                    Deep learning, a subset of machine learning, uses artificial neural networks inspired by the
                                    human brain — interconnected layers of neurons that process information hierarchically. It has
                                    driven breakthroughs in computer vision, natural language processing (ChatGPT, translation),
                                    speech recognition, and generative AI. Frameworks like TensorFlow and PyTorch make it
                                    accessible to build sophisticated neural networks.
                                </p>

                                <div class="rounded-xl border-l-4 border-indigo-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <h4 class="font-bold text-base text-slate-900 dark:text-white mb-3">Why Learn Machine Learning</h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 dark:text-indigo-400 font-bold mt-0.5">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Career Opportunities:</strong> ML engineers, data scientists, and AI
                                                researchers are among the highest-paid professionals in tech, with average salaries
                                                ranging from $120K–$250K+ depending on experience and location.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 dark:text-indigo-400 font-bold mt-0.5">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Solve Real Problems:</strong> ML enables you to build systems that
                                                detect cancer from medical images, predict market trends, prevent fraud, personalize
                                                user experiences, and automate customer service.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 dark:text-indigo-400 font-bold mt-0.5">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Future-Proof Skills:</strong> As AI becomes increasingly integrated into
                                                every industry, ML skills ensure career longevity. McKinsey estimates AI could add
                                                $13 trillion to the global economy by 2030.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 dark:text-indigo-400 font-bold mt-0.5">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Accessible Tools:</strong> Modern ML frameworks and cloud platforms have
                                                democratized AI. With Python, scikit-learn, TensorFlow, and PyTorch, anyone can start
                                                building intelligent systems using pre-trained models and transfer learning.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Neural Networks Deep Dive -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="flex items-start gap-4 mb-5">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-lg">🧠</div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Neural Networks and Deep Learning</h3>
                                    <p class="text-sm font-semibold text-purple-600 dark:text-purple-400">The powerhouse behind modern AI applications</p>
                                </div>
                            </div>

                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400 mb-5">
                                Neural networks are the foundation of deep learning. Inspired by biological neurons, artificial
                                neural networks consist of layers of interconnected nodes that process information. Each
                                neuron receives inputs, applies weights and activation functions, and passes outputs to the next
                                layer. Through backpropagation and gradient descent, networks learn optimal weights to minimize
                                prediction error.
                            </p>

                            <div class="grid sm:grid-cols-2 gap-5 mb-5">
                                <div class="rounded-xl border border-blue-200 bg-slate-50 p-5 dark:border-blue-900 dark:bg-slate-900">
                                    <div class="text-base font-bold text-blue-600 dark:text-blue-400 mb-2">🖼️ Convolutional Neural Networks (CNN)</div>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">Specialized for image processing and computer vision
                                        tasks. CNNs use convolutional layers to detect features like edges, textures, and
                                        patterns hierarchically.</p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-blue-900 dark:text-blue-300 mb-1">Applications</p>
                                        <ul class="text-xs text-slate-600 dark:text-slate-400 space-y-1">
                                            <li>Image classification (ResNet, VGG)</li>
                                            <li>Object detection (YOLO, Faster R-CNN)</li>
                                            <li>Facial recognition systems</li>
                                            <li>Medical image diagnosis</li>
                                            <li>Self-driving car vision</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-purple-200 bg-slate-50 p-5 dark:border-purple-900 dark:bg-slate-900">
                                    <div class="text-base font-bold text-purple-600 dark:text-purple-400 mb-2">📝 Recurrent Neural Networks (RNN)</div>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">Designed for sequential data like text, time series,
                                        and audio. LSTMs and GRUs handle long-term dependencies by maintaining memory across
                                        sequences.</p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-purple-900 dark:text-purple-300 mb-1">Applications</p>
                                        <ul class="text-xs text-slate-600 dark:text-slate-400 space-y-1">
                                            <li>Language translation</li>
                                            <li>Speech recognition</li>
                                            <li>Text generation</li>
                                            <li>Stock price prediction</li>
                                            <li>Music composition</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-emerald-200 bg-slate-50 p-5 dark:border-emerald-900 dark:bg-slate-900">
                                    <div class="text-base font-bold text-emerald-600 dark:text-emerald-400 mb-2">🤖 Transformers</div>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">State-of-the-art architecture using attention
                                        mechanisms. Powers modern NLP breakthroughs like GPT, BERT, and T5. Revolutionized
                                        natural language understanding.</p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-emerald-900 dark:text-emerald-300 mb-1">Applications</p>
                                        <ul class="text-xs text-slate-600 dark:text-slate-400 space-y-1">
                                            <li>ChatGPT and language models</li>
                                            <li>Question answering systems</li>
                                            <li>Document summarization</li>
                                            <li>Code generation (GitHub Copilot)</li>
                                            <li>Sentiment analysis</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-amber-200 bg-slate-50 p-5 dark:border-amber-900 dark:bg-slate-900">
                                    <div class="text-base font-bold text-amber-600 dark:text-amber-400 mb-2">🎨 Generative Adversarial Networks (GAN)</div>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">Two networks compete: generator creates synthetic
                                        data, discriminator evaluates authenticity. Produces incredibly realistic images, videos,
                                        and audio.</p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-amber-900 dark:text-amber-300 mb-1">Applications</p>
                                        <ul class="text-xs text-slate-600 dark:text-slate-400 space-y-1">
                                            <li>Deepfake creation</li>
                                            <li>Image-to-image translation</li>
                                            <li>Photo enhancement/restoration</li>
                                            <li>Art generation (StyleGAN)</li>
                                            <li>Synthetic data creation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-5 text-white dark:bg-slate-800">
                                <h4 class="font-bold text-base mb-2">Training Neural Networks: Key Concepts</h4>
                                <p class="text-sm text-slate-300 mb-2">
                                    <strong class="text-white">Loss Functions:</strong> Measure prediction error (MSE for regression, Cross-Entropy for
                                    classification). <strong class="text-white">Optimizers:</strong> Adam, SGD, RMSprop adjust weights to minimize
                                    loss. <strong class="text-white">Regularization:</strong> Dropout, L1/L2 prevent overfitting.
                                </p>
                                <p class="text-sm text-slate-300">
                                    <strong class="text-white">Hyperparameters:</strong> Learning rate, batch size, number of layers/neurons, and
                                    epochs dramatically affect performance. Tools like Grid Search and Bayesian Optimization
                                    help find optimal configurations.
                                </p>
                            </div>
                        </div>

                        <!-- ML Workflow and Best Practices -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="flex items-start gap-4 mb-5">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-lg">⚙️</div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">ML Workflow and Best Practices</h3>
                                    <p class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">Building production-ready ML systems</p>
                                </div>
                            </div>

                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400 mb-5">
                                A successful ML project follows a structured workflow: problem definition, data collection,
                                exploratory data analysis, preprocessing, feature engineering, model selection, training,
                                evaluation, hyperparameter tuning, and deployment. Each stage is critical — garbage in, garbage
                                out applies heavily to ML.
                            </p>

                            <div class="space-y-4 mb-5">
                                <div class="rounded-xl border-l-4 border-blue-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <h4 class="font-bold text-base text-slate-900 dark:text-white mb-2">📊 Data Preprocessing & Feature Engineering</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">
                                        80% of ML work is data preparation. Handle missing values (imputation), encode categorical
                                        variables (one-hot, label encoding), normalize/standardize numerical features, remove
                                        outliers, and engineer new features. Quality data beats fancy algorithms.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-blue-900 dark:text-blue-300">Techniques: Train-test split, cross-validation,
                                            stratified sampling, feature selection (PCA, mutual information), data augmentation</p>
                                    </div>
                                </div>

                                <div class="rounded-xl border-l-4 border-purple-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <h4 class="font-bold text-base text-slate-900 dark:text-white mb-2">🎯 Model Evaluation Metrics</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">
                                        Choosing the right metric is crucial. <strong class="font-semibold text-slate-900 dark:text-white">Classification:</strong> Accuracy, Precision,
                                        Recall, F1-Score, ROC-AUC, Confusion Matrix. <strong class="font-semibold text-slate-900 dark:text-white">Regression:</strong> MAE, MSE, RMSE,
                                        R². Understanding trade-offs prevents misleading conclusions.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-purple-900 dark:text-purple-300">Pro Tip: Always use multiple metrics. High
                                            accuracy with imbalanced data can be deceptive.</p>
                                    </div>
                                </div>

                                <div class="rounded-xl border-l-4 border-emerald-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <h4 class="font-bold text-base text-slate-900 dark:text-white mb-2">🚀 Model Deployment & MLOps</h4>
                                    <p class="text-sm text-slate-600 dark:text-slate-400 mb-3">
                                        Deployment transforms research into production. Serve models via REST APIs (Flask, FastAPI),
                                        containerize with Docker, orchestrate with Kubernetes. Monitor performance, handle model
                                        drift, implement A/B testing, and establish CI/CD pipelines.
                                    </p>
                                    <div class="rounded-lg bg-white p-3 dark:bg-slate-950">
                                        <p class="text-xs font-semibold text-emerald-900 dark:text-emerald-300">Tools: TensorFlow Serving, TorchServe, MLflow,
                                            Kubeflow, AWS SageMaker, Google Vertex AI</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-5 text-white dark:bg-slate-800">
                                <h4 class="font-bold text-base mb-2">Common Challenges and Solutions</h4>
                                <p class="text-sm text-slate-300 mb-2">
                                    <strong class="text-white">Overfitting:</strong> Model memorizes training data. Solutions: More data, regularization,
                                    dropout, early stopping, ensemble methods. <strong class="text-white">Underfitting:</strong> Model too simple.
                                    Solutions: more complex architecture, better features, longer training.
                                </p>
                                <p class="text-sm text-slate-300">
                                    <strong class="text-white">Need ML Help?</strong> Our machine learning experts provide professional assistance with
                                    model development, neural network architecture, hyperparameter tuning, and deployment. Whether
                                    you're building CNNs for computer vision, RNNs for NLP, or implementing reinforcement learning,
                                    our experienced ML engineers are available 24/7.
                                </p>
                            </div>
                        </div>
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
                        machine learning projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Amazing work on my image classification project! The CNN model
                            achieved 95% accuracy and the code was well-documented. The expert explained everything clearly.
                            Highly recommend!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-purple-600 rounded-full flex items-center justify-center text-white text-sm font-bold">M</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Maria S.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">AI Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Excellent NLP project! The sentiment analysis model using BERT was
                            exactly what I needed. Great feature engineering and the results exceeded my expectations!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-blue-600 rounded-full flex items-center justify-center text-white text-sm font-bold">J</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">James W.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Data Science Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="flex items-center mb-3 text-amber-400 text-sm">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4">"Professional PyTorch implementation! The reinforcement learning agent
                            for my game project works perfectly. Clean code and thorough explanations. Worth every penny!"</p>
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 bg-emerald-600 rounded-full flex items-center justify-center text-white text-sm font-bold">A</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Alex C.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">ML Engineering Student</div>
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
                    <p class="text-base sm:text-lg text-slate-600 dark:text-slate-400 max-w-2xl mx-auto">Everything you need to know about our machine learning
                        service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Which ML frameworks do you work with?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">We work with all major ML frameworks including TensorFlow, PyTorch, Keras,
                            scikit-learn, and more. We can help you choose the best framework for your specific project
                            requirements.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Can you help with data preprocessing and feature
                            engineering?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Absolutely! We provide comprehensive data preprocessing, cleaning, feature
                            engineering, and data augmentation services. Proper data preparation is crucial for model
                            success.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Do you provide model deployment assistance?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Yes! For advanced and enterprise projects, we can help deploy your models to
                            production environments, create APIs, and set up serving infrastructure.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">What types of ML problems can you solve?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">We handle all types of ML problems including classification, regression,
                            clustering, NLP, computer vision, time series, reinforcement learning, and more.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950">
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">What's included in the ML project delivery?</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">You'll receive complete source code, trained models, preprocessing pipelines,
                            evaluation metrics, visualization reports, and detailed documentation explaining the approach and
                            results.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-14 sm:py-16 bg-slate-900 dark:bg-slate-950">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl mb-3">Ready to Build Your ML Model?</h2>
                <p class="text-sm text-slate-400 mb-6 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their machine learning projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                    Start Your ML Project Today
                </a>
            </div>
        </section>
    </div>
@endsection
