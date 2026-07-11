@extends('layouts.app')

@section('title', 'Machine Learning Projects - Expert Help Available')
@section('description', 'Get professional help with machine learning projects. Expert ML engineers available 24/7 for TensorFlow, PyTorch, scikit-learn, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- First Engaging Content Section -->
        <section class="py-20 bg-gradient-to-b from-white via-purple-50 to-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="text-xl">🤖</span>
                            MASTER MACHINE LEARNING & AI
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            From Code to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600">Intelligent
                                Systems</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Unlock the power of artificial intelligence and build
                            systems that learn and adapt</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Hero Stats Card -->
                        <div
                            class="bg-gradient-to-br from-white via-blue-50 to-purple-50 rounded-2xl shadow-2xl p-8 border-2 border-blue-100 relative overflow-hidden">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-purple-200 rounded-full opacity-20 -mr-16 -mt-16">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 w-40 h-40 bg-blue-200 rounded-full opacity-20 -ml-20 -mb-20">
                            </div>

                            <div class="relative z-10">
                                <div class="flex items-start gap-4 mb-6">
                                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 rounded-2xl p-4 shadow-lg">
                                        <span class="text-4xl">🚀</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-gray-900 mb-2">Why Machine Learning is the Future</h3>
                                        <p class="text-purple-600 font-semibold text-lg">The most in-demand skill driving innovation
                                            across every industry</p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-4 gap-4 mb-6">
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-purple-500">
                                        <div class="text-3xl font-bold text-purple-600 mb-1">97%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Enterprises Adopt AI</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
                                        <div class="text-3xl font-bold text-blue-600 mb-1">$160K+</div>
                                        <p class="text-gray-700 text-sm font-semibold">Avg ML Engineer Salary</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-indigo-500">
                                        <div class="text-3xl font-bold text-indigo-600 mb-1">3.5M</div>
                                        <p class="text-gray-700 text-sm font-semibold">AI/ML Jobs by 2027</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-green-500">
                                        <div class="text-3xl font-bold text-green-600 mb-1">40%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Annual Growth Rate</p>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-purple-600">Machine learning is transforming every industry on the
                                        planet.</span> From Netflix's recommendation engine serving 230+ million subscribers to
                                    Tesla's self-driving technology, from Google's search algorithms to healthcare diagnostics
                                    saving lives—ML is everywhere. Companies like OpenAI, Google DeepMind, and Meta are investing
                                    billions because AI isn't the future—it's the present.
                                </p>

                                <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl p-6 text-white">
                                    <p class="font-bold text-lg mb-2">💡 Industry Reality:</p>
                                    <p class="text-purple-50">
                                        Machine learning engineers are among the highest-paid tech professionals globally. Google
                                        pays ML engineers up to $250K+, while startups offer equity that can be worth millions.
                                        Mastering ML opens doors to roles at FAANG companies, cutting-edge AI labs, autonomous
                                        vehicle companies, and revolutionary healthcare startups. The barrier to entry isn't
                                        talent—it's knowledge!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- ML Types Comparison Cards -->
                        <div class="grid md:grid-cols-3 gap-8">
                            <!-- Supervised Learning Card -->
                            <div
                                class="bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 rounded-2xl p-8 border-2 border-blue-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">📊</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Supervised Learning</h4>
                                        <p class="text-blue-600 text-sm font-semibold">Learn from labeled data</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-blue-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-blue-600">Supervised = Guided Learning.</span> Train
                                            models on labeled data to predict outcomes. Powers spam filters, fraud detection,
                                            medical diagnosis, stock predictions, and image classification. The workhorse of
                                            modern AI applications!
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🎯 Common Algorithms:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Linear
                                                Regression</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Random Forest</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">SVM</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Neural Networks</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Unsupervised Learning Card -->
                            <div
                                class="bg-gradient-to-br from-purple-50 via-pink-50 to-red-50 rounded-2xl p-8 border-2 border-purple-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🔍</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Unsupervised Learning</h4>
                                        <p class="text-purple-600 text-sm font-semibold">Discover hidden patterns</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-purple-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-purple-600">Unsupervised = Self-Discovery.</span> Find
                                            patterns in unlabeled data without guidance. Powers customer segmentation,
                                            recommendation systems, anomaly detection, and data compression. Reveals insights
                                            humans might miss!
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🌐 Common Algorithms:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">K-Means</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">PCA</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">DBSCAN</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Autoencoders</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reinforcement Learning Card -->
                            <div
                                class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 rounded-2xl p-8 border-2 border-green-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🎮</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Reinforcement Learning</h4>
                                        <p class="text-green-600 text-sm font-semibold">Learn through trial & error</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-green-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-green-600">RL = Learning by Doing.</span> Agents learn
                                            optimal strategies through rewards and penalties. Powers game AI (AlphaGo), robotics,
                                            autonomous vehicles, and trading algorithms. The cutting edge of AI research!
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🚀 Common Algorithms:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Q-Learning</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">DQN</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">PPO</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">A3C</span>
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
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">ML Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert ML engineers work with cutting-edge
                        frameworks and tools to build intelligent solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Deep Learning Frameworks -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Deep Learning</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔥</div>
                                    <h4 class="font-semibold text-gray-900">TensorFlow</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔦</div>
                                    <h4 class="font-semibold text-gray-900">PyTorch</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">⚡</div>
                                    <h4 class="font-semibold text-gray-900">Keras</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ML Libraries -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">ML Libraries</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔬</div>
                                    <h4 class="font-semibold text-gray-900">scikit-learn</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🐼</div>
                                    <h4 class="font-semibold text-gray-900">Pandas</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔢</div>
                                    <h4 class="font-semibold text-gray-900">NumPy</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Computer Vision -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Computer Vision</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">👁️</div>
                                    <h4 class="font-semibold text-gray-900">OpenCV</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🖼️</div>
                                    <h4 class="font-semibold text-gray-900">YOLO</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">📸</div>
                                    <h4 class="font-semibold text-gray-900">PIL/Pillow</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NLP & Tools -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">NLP & Tools</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🗣️</div>
                                    <h4 class="font-semibold text-gray-900">NLTK</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🤗</div>
                                    <h4 class="font-semibold text-gray-900">Hugging Face</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">📊</div>
                                    <h4 class="font-semibold text-gray-900">Matplotlib</h4>
                                </div>
                            </div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on project
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic ML Project</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $45</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple ML models
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Data preprocessing
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    3-4 day delivery
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced ML Project</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $120</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Deep learning models
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Feature engineering
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    5-7 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Model optimization
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Visualization reports
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise AI Solution</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $250</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Custom neural networks
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Production deployment
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    7-14 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Hyperparameter tuning
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    API integration
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our ML Development Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering high-quality machine
                        learning solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Data Analysis</h3>
                        <p class="text-gray-600">We analyze your dataset, understand the problem, and define success
                            metrics.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Model Development</h3>
                        <p class="text-gray-600">Build and train ML models with proper preprocessing and feature
                            engineering.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Training & Optimization</h3>
                        <p class="text-gray-600">Train models, tune hyperparameters, and optimize for best performance.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Delivery & Deployment</h3>
                        <p class="text-gray-600">Deliver your trained model with documentation and deployment guidance.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Engaging Content Section -->
        <section class="py-20 bg-gradient-to-b from-white to-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="text-xl">📖</span>
                            COMPREHENSIVE ML GUIDE
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            Complete Guide to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">Machine
                                Learning & Deep Learning</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Essential knowledge for data scientists, ML engineers,
                            and AI enthusiasts</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Main Informative Card -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">📚</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Understanding Machine Learning</h3>
                                    <p class="text-indigo-600 font-semibold text-lg">The technology powering the AI revolution</p>
                                </div>
                            </div>

                            <div class="prose prose-lg max-w-none">
                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-indigo-600">Machine learning is a subset of artificial intelligence
                                        that enables computers to learn from data without being explicitly programmed.</span> Unlike
                                    traditional programming where developers write explicit rules, ML algorithms identify patterns
                                    in data and make decisions based on those patterns. This paradigm shift has revolutionized
                                    technology, enabling applications from voice assistants like Siri and Alexa to autonomous
                                    vehicles and medical diagnosis systems.
                                </p>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    Deep learning, a subset of machine learning, uses artificial neural networks inspired by the
                                    human brain. These networks consist of interconnected layers of neurons that process information
                                    hierarchically. Deep learning has achieved breakthroughs in computer vision (image
                                    recognition), natural language processing (ChatGPT, translation), speech recognition, and
                                    generative AI. Frameworks like TensorFlow and PyTorch make it accessible to build sophisticated
                                    neural networks.
                                </p>

                                <div
                                    class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 border-l-4 border-indigo-500 mb-6">
                                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Why Learn Machine Learning</h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Career Opportunities:</strong> ML engineers, data scientists, and AI
                                                researchers are among the highest-paid professionals in tech. Major tech companies,
                                                startups, finance, healthcare, and automotive industries are desperately seeking ML
                                                talent. Average salaries range from $120K-$250K+ depending on experience and
                                                location.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Solve Real Problems:</strong> ML enables you to build systems that
                                                detect cancer from medical images, predict market trends, prevent fraud, personalize
                                                user experiences, automate customer service, and create art. The applications are
                                                limitless and continuously expanding.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Future-Proof Skills:</strong> As AI becomes increasingly integrated into
                                                every industry, ML skills ensure career longevity. McKinsey estimates AI could add
                                                $13 trillion to the global economy by 2030. Being ML-literate is like being
                                                computer-literate in the 1990s.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Accessible Tools:</strong> Modern ML frameworks and cloud platforms have
                                                democratized AI. You don't need a PhD—with Python, scikit-learn, TensorFlow, and
                                                PyTorch, anyone can start building intelligent systems. Pre-trained models and
                                                transfer learning accelerate development.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Neural Networks Deep Dive -->
                        <div
                            class="bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow-2xl p-8 border-2 border-indigo-100">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🧠</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Neural Networks and Deep Learning</h3>
                                    <p class="text-purple-600 font-semibold text-lg">The powerhouse behind modern AI applications
                                    </p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Neural networks are the foundation of deep learning. Inspired by biological neurons, artificial
                                neural networks consist of layers of interconnected nodes (neurons) that process information. Each
                                neuron receives inputs, applies weights and activation functions, and passes outputs to the next
                                layer. Through backpropagation and gradient descent, networks learn optimal weights to minimize
                                prediction error.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-blue-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-blue-600 mb-2">🖼️ Convolutional Neural Networks (CNN)
                                        </div>
                                        <p class="text-gray-700 text-sm mb-3">Specialized for image processing and computer vision
                                            tasks. CNNs use convolutional layers to detect features like edges, textures, and
                                            patterns hierarchically.</p>
                                        <div class="bg-blue-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-blue-900 mb-1">Applications:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Image classification (ResNet, VGG)</li>
                                                <li>• Object detection (YOLO, Faster R-CNN)</li>
                                                <li>• Facial recognition systems</li>
                                                <li>• Medical image diagnosis</li>
                                                <li>• Self-driving car vision</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-purple-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-purple-600 mb-2">📝 Recurrent Neural Networks (RNN)</div>
                                        <p class="text-gray-700 text-sm mb-3">Designed for sequential data like text, time series,
                                            and audio. LSTMs and GRUs handle long-term dependencies by maintaining memory across
                                            sequences.</p>
                                        <div class="bg-purple-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-purple-900 mb-1">Applications:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Language translation</li>
                                                <li>• Speech recognition</li>
                                                <li>• Text generation (ChatGPT predecessors)</li>
                                                <li>• Stock price prediction</li>
                                                <li>• Music composition</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-green-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-green-600 mb-2">🤖 Transformers</div>
                                        <p class="text-gray-700 text-sm mb-3">State-of-the-art architecture using attention
                                            mechanisms. Powers modern NLP breakthroughs like GPT, BERT, and T5. Revolutionized
                                            natural language understanding.</p>
                                        <div class="bg-green-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-green-900 mb-1">Applications:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• ChatGPT and language models</li>
                                                <li>• Question answering systems</li>
                                                <li>• Document summarization</li>
                                                <li>• Code generation (GitHub Copilot)</li>
                                                <li>• Sentiment analysis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-orange-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-orange-600 mb-2">🎨 Generative Adversarial Networks
                                            (GAN)</div>
                                        <p class="text-gray-700 text-sm mb-3">Two networks compete: generator creates synthetic
                                            data, discriminator evaluates authenticity. Produces incredibly realistic images, videos,
                                            and audio.</p>
                                        <div class="bg-orange-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-orange-900 mb-1">Applications:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Deepfake creation</li>
                                                <li>• Image-to-image translation</li>
                                                <li>• Photo enhancement/restoration</li>
                                                <li>• Art generation (StyleGAN)</li>
                                                <li>• Synthetic data creation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Training Neural Networks: Key Concepts</h4>
                                <p class="text-indigo-100 mb-3">
                                    <strong>Loss Functions:</strong> Measure prediction error (MSE for regression, Cross-Entropy for
                                    classification). <strong>Optimizers:</strong> Adam, SGD, RMSprop adjust weights to minimize
                                    loss. <strong>Regularization:</strong> Dropout, L1/L2 prevent overfitting.
                                    <strong>Batch Normalization:</strong> Stabilizes training by normalizing layer inputs.
                                </p>
                                <p class="text-indigo-100">
                                    <strong>Hyperparameters:</strong> Learning rate, batch size, number of layers/neurons, and
                                    epochs dramatically affect performance. Tools like Grid Search, Random Search, and Bayesian
                                    Optimization help find optimal configurations.
                                </p>
                            </div>
                        </div>

                        <!-- ML Workflow and Best Practices -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">⚙️</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">ML Workflow and Best Practices</h3>
                                    <p class="text-green-600 font-semibold text-lg">Building production-ready ML systems</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                A successful ML project follows a structured workflow: problem definition, data collection,
                                exploratory data analysis, data preprocessing, feature engineering, model selection, training,
                                evaluation, hyperparameter tuning, and deployment. Each stage is critical—garbage in, garbage out
                                applies heavily to ML.
                            </p>

                            <div class="space-y-4 mb-6">
                                <div
                                    class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-bold text-blue-900 text-lg mb-3">📊 Data Preprocessing & Feature Engineering</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        80% of ML work is data preparation. Handle missing values (imputation), encode categorical
                                        variables (one-hot, label encoding), normalize/standardize numerical features (scaling),
                                        remove outliers, and engineer new features. Quality data beats fancy algorithms.
                                    </p>
                                    <div class="bg-white rounded-lg p-3">
                                        <p class="text-xs font-semibold text-blue-900">Techniques: Train-test split, cross-validation,
                                            stratified sampling, feature selection (PCA, mutual information), data augmentation</p>
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-bold text-purple-900 text-lg mb-3">🎯 Model Evaluation Metrics</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Choosing the right metric is crucial. <strong>Classification:</strong> Accuracy, Precision,
                                        Recall, F1-Score, ROC-AUC, Confusion Matrix. <strong>Regression:</strong> MAE, MSE, RMSE,
                                        R². Understanding trade-offs (precision vs recall) prevents misleading conclusions.
                                    </p>
                                    <div class="bg-white rounded-lg p-3">
                                        <p class="text-xs font-semibold text-purple-900">Pro Tip: Always use multiple metrics. High
                                            accuracy with imbalanced data can be deceptive!</p>
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border-l-4 border-green-500">
                                    <h4 class="font-bold text-green-900 text-lg mb-3">🚀 Model Deployment & MLOps</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Deployment transforms research into production. Serve models via REST APIs (Flask, FastAPI),
                                        containerize with Docker, orchestrate with Kubernetes. Monitor performance, handle model
                                        drift, implement A/B testing, and establish CI/CD pipelines.
                                    </p>
                                    <div class="bg-white rounded-lg p-3">
                                        <p class="text-xs font-semibold text-green-900">Tools: TensorFlow Serving, TorchServe, MLflow,
                                            Kubeflow, AWS SageMaker, Google Vertex AI</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Common Challenges and Solutions</h4>
                                <p class="text-green-100 mb-3">
                                    <strong>Overfitting:</strong> Model memorizes training data. Solutions: More data, regularization,
                                    dropout, early stopping, ensemble methods. <strong>Underfitting:</strong> Model too simple.
                                    Solutions: More complex architecture, better features, longer training.
                                </p>
                                <p class="text-green-100">
                                    <strong>Need ML Help?</strong> Our machine learning experts provide professional assistance with
                                    model development, neural network architecture, hyperparameter tuning, and deployment. Whether
                                    you're building CNNs for computer vision, RNNs for NLP, or implementing reinforcement learning,
                                    our experienced ML engineers are available 24/7. Get help from experts who understand TensorFlow,
                                    PyTorch, model optimization, and production ML systems.
                                </p>
                            </div>
                        </div>
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
                        machine learning projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing work on my image classification project! The CNN model
                            achieved 95% accuracy and the code was well-documented. The expert explained everything clearly.
                            Highly recommend!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                M</div>
                            <div>
                                <div class="font-semibold text-gray-900">Maria S.</div>
                                <div class="text-sm text-gray-500">AI Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Excellent NLP project! The sentiment analysis model using BERT was
                            exactly what I needed. Great feature engineering and the results exceeded my expectations!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                J</div>
                            <div>
                                <div class="font-semibold text-gray-900">James W.</div>
                                <div class="text-sm text-gray-500">Data Science Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Professional PyTorch implementation! The reinforcement learning agent
                            for my game project works perfectly. Clean code and thorough explanations. Worth every penny!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                A</div>
                            <div>
                                <div class="font-semibold text-gray-900">Alex C.</div>
                                <div class="text-sm text-gray-500">ML Engineering Student</div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our machine learning
                        service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Which ML frameworks do you work with?</h3>
                        <p class="text-gray-600">We work with all major ML frameworks including TensorFlow, PyTorch, Keras,
                            scikit-learn, and more. We can help you choose the best framework for your specific project
                            requirements.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with data preprocessing and feature
                            engineering?</h3>
                        <p class="text-gray-600">Absolutely! We provide comprehensive data preprocessing, cleaning, feature
                            engineering, and data augmentation services. Proper data preparation is crucial for model
                            success.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide model deployment assistance?</h3>
                        <p class="text-gray-600">Yes! For advanced and enterprise projects, we can help deploy your models to
                            production environments, create APIs, and set up serving infrastructure.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What types of ML problems can you solve?</h3>
                        <p class="text-gray-600">We handle all types of ML problems including classification, regression,
                            clustering, NLP, computer vision, time series, reinforcement learning, and more.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the ML project delivery?</h3>
                        <p class="text-gray-600">You'll receive complete source code, trained models, preprocessing pipelines,
                            evaluation metrics, visualization reports, and detailed documentation explaining the approach and
                            results.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your ML Model?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their machine learning projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Your ML Project Today
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
