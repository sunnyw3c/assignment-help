@extends('layouts.app')

@section('title', 'Algorithm & Data Structure Help - Expert Programming Assistance')
@section('description',
    'Get professional help with algorithms and data structures. Expert programmers available 24/7
    for sorting, searching, dynamic programming, and complex algorithmic solutions.')
@section('keywords', 'algorithm help, data structures, dynamic programming, graph algorithms, sorting algorithms, binary search, algorithm tutoring, coding help, programming assignment help')

@section('content')
    <!-- Critical Above-the-Fold CSS for Algorithms Page -->
    <style>
        /* Critical CSS for immediate hero section rendering */
        .hero-gradient {
            background: linear-gradient(135deg, #9333ea 0%, #3b82f6 50%, #4f46e5 100%);
            min-height: 100vh;
        }
        /* Prevent layout shift */
        .hero-content-height {
            min-height: 600px;
        }
        /* Optimize animation performance with GPU acceleration */
        .gpu-accelerated {
            transform: translateZ(0);
            backface-visibility: hidden;
            perspective: 1000px;
        }
        /* Use CSS containment to reduce layout calculations */
        .contain-layout {
            contain: layout style paint;
        }
        /* Reduce paint complexity */
        .reduce-paint {
            content-visibility: auto;
        }
    </style>

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Algorithm & Data Structure Help",
        "description": "Professional algorithm and data structure tutoring and programming assistance available 24/7 for students and developers.",
        "provider": {
            "@type": "Organization",
            "name": "{{ config('app.name') }}",
            "url": "{{ url('/') }}"
        },
        "serviceType": "Programming Education and Tutoring",
        "areaServed": "Worldwide",
        "availableChannel": {
            "@type": "ServiceChannel",
            "serviceUrl": "{{ url()->current() }}",
            "availableLanguage": "English"
        },
        "offers": [
            {
                "@type": "Offer",
                "name": "Basic Algorithm Problems",
                "price": "15.00",
                "priceCurrency": "USD",
                "description": "Simple sorting algorithms, basic data structures, 1-6 hour delivery, code explanation"
            },
            {
                "@type": "Offer",
                "name": "Intermediate Algorithm Problems",
                "price": "35.00",
                "priceCurrency": "USD",
                "description": "Dynamic programming, graph algorithms, 6-24 hour delivery, complexity analysis, test cases"
            },
            {
                "@type": "Offer",
                "name": "Advanced Algorithm Problems",
                "price": "65.00",
                "priceCurrency": "USD",
                "description": "Complex algorithm design, optimization problems, 1-3 day delivery, multiple approaches, performance optimization"
            }
        ],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "ratingCount": "800",
            "bestRating": "5",
            "worstRating": "1"
        }
    }
    </script>

    <!-- FAQ Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What programming languages do you support?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide algorithm solutions in all major programming languages including Python, Java, C++, C#, JavaScript, and more. Our experts can work with your preferred language or suggest the most suitable one for your problem."
                }
            },
            {
                "@type": "Question",
                "name": "How do you ensure optimal time complexity?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our experts analyze each problem to determine the most efficient approach. We provide detailed time and space complexity analysis with each solution and optimize for the best possible performance within the given constraints."
                }
            },
            {
                "@type": "Question",
                "name": "Can you help with competitive programming problems?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes! We have extensive experience with competitive programming platforms like LeetCode, HackerRank, Codeforces, and others. We can help with contest problems, interview preparation, and algorithmic challenges."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide explanations with the code?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely! Every solution comes with detailed explanations of the algorithm approach, step-by-step logic, complexity analysis, and comments in the code to help you understand the solution thoroughly."
                }
            }
        ]
    }
    </script>

    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative bg-gradient-to-br from-purple-600 via-blue-700 to-indigo-800 py-24 overflow-hidden">
            <!-- Animated Background Pattern - Optimized for Performance -->
            <div class="absolute inset-0 opacity-10" style="pointer-events: none;">
                <div class="absolute inset-0 bg-gradient-to-br from-transparent via-white to-transparent animate-pulse"></div>
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=%2760%27 height=%2760%27 viewBox=%270 0 60 60%27 xmlns=%27http://www.w3.org/2000/svg%27%3E%3Cg fill=%27none%27 fill-rule=%27evenodd%27%3E%3Cg fill=%27%23ffffff%27 fill-opacity=%270.3%27%3E%3Cpath d=%27M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z%27/%3E%3C/g%3E%3C/g%3E%3C/svg%3E'); background-size: 60px 60px;"></div>
            </div>

            <!-- Animated Grid Lines - Simplified for Performance -->
            <div class="absolute inset-0 opacity-20" style="pointer-events: none;">
                <div class="h-full w-full" style="background-image: linear-gradient(white 1px, transparent 1px), linear-gradient(90deg, white 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>

            <!-- Floating Code Snippets - Lazy Load Below Fold -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden" loading="lazy">
                <!-- Floating Binary Search -->
                <div
                    class="absolute top-10 left-10 bg-gradient-to-br from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-90 max-w-xs border border-green-500/30 backdrop-blur-sm">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 bg-green-400 rounded-full animate-ping"></span>
                        <div class="text-purple-400 font-bold">// Binary Search O(log n)</div>
                    </div>
                    <div><span class="text-blue-400">def</span> binary_search(arr, target):</div>
                    <div class="ml-2">left, right = 0, len(arr) - 1</div>
                    <div class="ml-2"><span class="text-orange-400">while</span> left &lt;= right:</div>
                    <div class="ml-4">mid = (left + right) // 2</div>
                </div>

                <!-- Floating Quick Sort -->
                <div
                    class="absolute top-32 right-20 bg-gradient-to-br from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-90 max-w-xs border border-blue-500/30 backdrop-blur-sm">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 bg-blue-400 rounded-full animate-pulse"></span>
                        <div class="text-purple-400 font-bold">// Quick Sort O(n log n)</div>
                    </div>
                    <div><span class="text-blue-400">function</span> quickSort(arr) {</div>
                    <div class="ml-2"><span class="text-orange-400">if</span> (arr.length &lt;= 1) <span
                            class="text-orange-400">return</span> arr;</div>
                    <div class="ml-2"><span class="text-yellow-400">const</span> pivot = arr[0];</div>
                    <div>}</div>
                </div>

                <!-- Floating Dynamic Programming -->
                <div
                    class="absolute bottom-20 left-1/4 bg-gradient-to-br from-gray-900 to-gray-800 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce-slow opacity-90 max-w-xs border border-yellow-500/30 backdrop-blur-sm">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full animate-pulse"></span>
                        <div class="text-purple-400 font-bold">// Fibonacci DP</div>
                    </div>
                    <div><span class="text-blue-400">int</span> fib(<span class="text-blue-400">int</span> n) {</div>
                    <div class="ml-2"><span class="text-blue-400">int</span> dp[n+1];</div>
                    <div class="ml-2">dp[0] = 0; dp[1] = 1;</div>
                    <div>}</div>
                </div>

                <!-- Floating Graph Algorithm -->
                <div
                    class="absolute top-64 right-1/4 bg-gradient-to-br from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse-slow opacity-90 max-w-xs border border-cyan-500/30 backdrop-blur-sm">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-2 h-2 bg-cyan-400 rounded-full animate-ping"></span>
                        <div class="text-purple-400 font-bold">// DFS Traversal O(V+E)</div>
                    </div>
                    <div><span class="text-blue-400">void</span> dfs(<span class="text-blue-400">int</span> node) {</div>
                    <div class="ml-2">visited[node] = <span class="text-green-400">true</span>;</div>
                    <div class="ml-2"><span class="text-orange-400">for</span> (<span class="text-blue-400">int</span>
                        neighbor : adj[node])</div>
                    <div>}</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-white/20 backdrop-blur-sm text-white px-5 py-2 rounded-full text-sm font-bold mb-6 border border-white/30 shadow-lg animate-pulse-glow">
                            <span class="text-2xl mr-2">🧠</span>
                            Algorithm & Data Structure Expert Help
                        </div>

                        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight drop-shadow-2xl">
                            Master<br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-pink-300 to-cyan-300 animate-gradient">Algorithms</span><br>
                            <span class="text-white">& Data Structures</span>
                        </h1>

                        <p class="text-xl text-white/90 mb-8 leading-relaxed drop-shadow-lg">
                            Get expert help with complex algorithms and data structures. From sorting and searching to
                            dynamic programming and graph algorithms, our experienced programmers solve the most challenging
                            problems.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('assignments.create') }}"
                                class="group relative bg-white text-purple-700 px-10 py-5 rounded-xl font-bold hover:scale-105 transition-all duration-300 shadow-2xl hover:shadow-white/50 text-center overflow-hidden">
                                <span class="relative z-10 flex items-center justify-center gap-2">
                                    Get Help Now
                                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                                <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-pink-300 opacity-0 group-hover:opacity-20 transition-opacity"></div>
                            </a>
                            <a href="#pricing"
                                class="border-2 border-white/60 backdrop-blur-sm text-white px-10 py-5 rounded-xl font-bold hover:bg-white/20 hover:border-white transition-all duration-300 shadow-lg text-center hover:scale-105">
                                View Pricing
                            </a>
                        </div>

                        <div class="flex flex-wrap items-center gap-6 text-sm">
                            <div class="flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/20">
                                <span class="text-yellow-300 text-xl mr-2">⭐</span>
                                <span class="font-bold text-white">4.9/5</span>
                                <span class="text-white/70 ml-1">rating</span>
                            </div>
                            <div class="flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/20">
                                <span class="text-green-300 text-xl mr-2">✓</span>
                                <span class="text-white">800+ problems solved</span>
                            </div>
                            <div class="flex items-center bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/20">
                                <span class="text-cyan-300 text-xl mr-2">⚡</span>
                                <span class="text-white">1-24 hour delivery</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Code Editor Mockup -->
                    <div class="relative group">
                        <div class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 rounded-2xl shadow-2xl overflow-hidden border border-gray-700/50 backdrop-blur-sm transform hover:scale-105 transition-all duration-500">
                            <!-- Editor Header -->
                            <div class="flex items-center justify-between px-4 py-3 bg-gray-800/80 border-b border-gray-700/50">
                                <div class="flex items-center gap-4">
                                    <div class="flex space-x-2">
                                        <div class="w-3 h-3 bg-red-500 rounded-full hover:bg-red-400 transition-colors cursor-pointer"></div>
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full hover:bg-yellow-400 transition-colors cursor-pointer"></div>
                                        <div class="w-3 h-3 bg-green-500 rounded-full hover:bg-green-400 transition-colors cursor-pointer"></div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="text-blue-400">📄</span>
                                        <span class="text-gray-400 text-sm font-mono">algorithm_solution.py</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="px-2 py-1 bg-green-500/20 text-green-400 text-xs rounded border border-green-500/30">✓ Optimized</span>
                                </div>
                            </div>

                            <!-- Code Content -->
                            <div class="font-mono text-sm space-y-1 p-6 bg-gradient-to-br from-gray-900/50 to-gray-800/50">
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">1</span>
                                    <div class="text-purple-400"># Efficient Algorithm Solution</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">2</span>
                                    <div class="text-blue-400">def <span class="text-yellow-400">solve_problem</span><span class="text-gray-500">(</span>data<span class="text-gray-500">)</span>:</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">3</span>
                                    <div class="text-gray-500 ml-4"># Time Complexity: <span class="text-green-400">O(n log n)</span></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">4</span>
                                    <div class="text-gray-500 ml-4"># Space Complexity: <span class="text-cyan-400">O(n)</span></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">5</span>
                                    <div class="text-gray-300 ml-4">result = <span class="text-purple-400">optimized_algorithm</span>(data)</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">6</span>
                                    <div class="text-gray-300 ml-4"><span class="text-pink-400">return</span> <span class="text-green-400">result</span></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">7</span>
                                    <div class="text-gray-700"></div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">8</span>
                                    <div class="text-purple-400"># Expert Available 4.9/5 ⭐</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">9</span>
                                    <div class="text-blue-400">def <span class="text-yellow-400">test_solution</span><span class="text-gray-500">()</span>:</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">10</span>
                                    <div class="text-gray-300 ml-4"><span class="text-orange-400">assert</span> solve_problem(test_data) == expected</div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="text-gray-600">11</span>
                                    <div class="text-gray-300 ml-4"><span class="text-purple-400">print</span>(<span class="text-green-400">"All tests passed!"</span>)</div>
                                </div>
                            </div>
                        </div>

                        <!-- Floating Elements with Enhanced Animations -->
                        <div class="absolute -top-6 -right-6 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl shadow-2xl p-5 animate-bounce-slow border-4 border-white/30">
                            <div class="text-3xl">🧠</div>
                        </div>
                        <div class="absolute -bottom-6 -left-6 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-2xl shadow-2xl p-5 animate-pulse-slow border-4 border-white/30">
                            <div class="text-3xl">⚡</div>
                        </div>

                        <!-- Glow Effect -->
                        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-purple-600 to-cyan-600 rounded-2xl blur-xl opacity-50 group-hover:opacity-75 transition-opacity duration-500"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- First Engaging Content Section -->
        <section class="py-20 bg-gradient-to-b from-white via-purple-50 to-gray-50">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="text-xl">🧠</span>
                            MASTER ALGORITHMIC THINKING
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            From Code Novice to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600">Algorithm
                                Expert</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Unlock the secrets of efficient problem-solving
                            and ace your technical interviews</p>
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
                                        <span class="text-4xl">⚡</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-gray-900 mb-2">Why Algorithms Matter More Than
                                            Ever</h3>
                                        <p class="text-purple-600 font-semibold text-lg">Your gateway to top tech companies
                                            and high-paying careers</p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-4 gap-4 mb-6">
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-purple-500">
                                        <div class="text-3xl font-bold text-purple-600 mb-1">85%</div>
                                        <p class="text-gray-700 text-sm font-semibold">FAANG Interview Focus</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
                                        <div class="text-3xl font-bold text-blue-600 mb-1">$150K+</div>
                                        <p class="text-gray-700 text-sm font-semibold">Average Starting Salary</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-indigo-500">
                                        <div class="text-3xl font-bold text-indigo-600 mb-1">800+</div>
                                        <p class="text-gray-700 text-sm font-semibold">Problems Solved</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-green-500">
                                        <div class="text-3xl font-bold text-green-600 mb-1">98%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Success Rate</p>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-purple-600">Algorithms are the language of
                                        innovation.</span> Whether you're preparing for technical interviews at Google,
                                    Facebook, Amazon, or building the next breakthrough application, mastering algorithms
                                    and data structures is non-negotiable. Every second counts when you're solving LeetCode
                                    mediums in 45 minutes or optimizing a production system serving millions of users.
                                </p>

                                <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl p-6 text-white">
                                    <p class="font-bold text-lg mb-2">💡 Industry Secret:</p>
                                    <p class="text-purple-50">
                                        Top tech companies don't just hire coders—they hire problem solvers who can think
                                        algorithmically. The difference between O(n²) and O(n log n) can mean the difference
                                        between a system that crashes under load and one that scales to millions of users.
                                        That's why FAANG interviews are 85% algorithms and data structures!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Algorithm Mastery Cards -->
                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- Dynamic Programming Card -->
                            <div
                                class="bg-gradient-to-br from-purple-50 via-pink-50 to-red-50 rounded-2xl p-8 border-2 border-purple-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🔄</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Dynamic Programming Mastery</h4>
                                        <p class="text-purple-600 text-sm font-semibold">The interview killer topic</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-purple-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-purple-600">DP = Interview Success.</span>
                                            Fibonacci, Knapsack, LCS—these aren't just textbook problems. They're the
                                            foundation of recommendation systems, DNA sequencing, resource allocation, and
                                            countless real-world applications. Master DP and watch interview offers roll in!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div
                                            class="bg-gradient-to-br from-purple-100 to-purple-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-purple-900 text-lg">60%</p>
                                            <p class="text-xs text-gray-700">Interview Questions</p>
                                        </div>
                                        <div class="bg-gradient-to-br from-pink-100 to-pink-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-pink-900 text-lg">10x</p>
                                            <p class="text-xs text-gray-700">Speed Improvement</p>
                                        </div>
                                    </div>

                                    <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🎯 Classic DP Problems:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">0/1
                                                Knapsack</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">LCS/LIS</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Matrix
                                                Chain</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Edit
                                                Distance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Graph Algorithms Card -->
                            <div
                                class="bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 rounded-2xl p-8 border-2 border-blue-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🕸️</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Graph Algorithms Power</h4>
                                        <p class="text-blue-600 text-sm font-semibold">Connect everything, solve anything
                                        </p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-blue-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-blue-600">Graphs run the world.</span> Social
                                            networks, GPS navigation, network routing, recommendation engines—they're all
                                            graphs! DFS, BFS, Dijkstra, and MST aren't just algorithms; they're the tools
                                            that power Google Maps, Facebook friends, and internet routing.
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-blue-900 text-lg">45%</p>
                                            <p class="text-xs text-gray-700">Tech Interviews</p>
                                        </div>
                                        <div class="bg-gradient-to-br from-cyan-100 to-cyan-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-cyan-900 text-lg">∞</p>
                                            <p class="text-xs text-gray-700">Real Applications</p>
                                        </div>
                                    </div>

                                    <div class="bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🌐 Essential Graph Algorithms:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">DFS/BFS</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Dijkstra</span>
                                            <span
                                                class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Kruskal/Prim</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Topological
                                                Sort</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Algorithm Categories Section -->
        <section class="py-20 bg-gradient-to-b from-white to-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-100 to-blue-100 text-purple-700 px-6 py-2 rounded-full text-sm font-bold mb-6">
                        <span class="text-xl">📚</span>
                        COMPREHENSIVE COVERAGE
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                        Algorithm Categories <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">We Cover</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive coverage of all major algorithm types
                        and data structures used in computer science and competitive programming.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Sorting & Searching -->
                    <div class="group bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-purple-300 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4 text-center transform group-hover:scale-110 transition-transform duration-300">🔍</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-purple-600 transition-colors">Sorting & Searching</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-purple-500 font-bold">→</span>
                                Quick Sort, Merge Sort, Heap Sort
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-purple-500 font-bold">→</span>
                                Binary Search & Variants
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-purple-500 font-bold">→</span>
                                Linear & Interpolation Search
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-purple-500 font-bold">→</span>
                                Sorting Algorithm Analysis
                            </li>
                        </ul>
                    </div>

                    <!-- Dynamic Programming -->
                    <div class="group bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-blue-300 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4 text-center transform group-hover:scale-110 transition-transform duration-300">🔄</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-blue-600 transition-colors">Dynamic Programming</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-blue-500 font-bold">→</span>
                                Fibonacci & Optimization Problems
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-blue-500 font-bold">→</span>
                                Knapsack & Subset Problems
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-blue-500 font-bold">→</span>
                                Longest Common Subsequence
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-blue-500 font-bold">→</span>
                                Matrix Chain Multiplication
                            </li>
                        </ul>
                    </div>

                    <!-- Graph Algorithms -->
                    <div class="group bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-cyan-300 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4 text-center transform group-hover:scale-110 transition-transform duration-300">🕸️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-cyan-600 transition-colors">Graph Algorithms</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-cyan-500 font-bold">→</span>
                                DFS, BFS, & Graph Traversal
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-cyan-500 font-bold">→</span>
                                Dijkstra's & Shortest Path
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-cyan-500 font-bold">→</span>
                                Minimum Spanning Trees
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-cyan-500 font-bold">→</span>
                                Topological Sorting
                            </li>
                        </ul>
                    </div>

                    <!-- Data Structures -->
                    <div class="group bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-green-300 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4 text-center transform group-hover:scale-110 transition-transform duration-300">🏗️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-green-600 transition-colors">Data Structures</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-green-500 font-bold">→</span>
                                Arrays, Linked Lists, Stacks
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-green-500 font-bold">→</span>
                                Trees, BST, Balanced Trees
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-green-500 font-bold">→</span>
                                Hash Tables & Hash Maps
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-green-500 font-bold">→</span>
                                Heaps & Priority Queues
                            </li>
                        </ul>
                    </div>

                    <!-- String Algorithms -->
                    <div class="group bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-pink-300 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4 text-center transform group-hover:scale-110 transition-transform duration-300">📝</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-pink-600 transition-colors">String Algorithms</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-pink-500 font-bold">→</span>
                                Pattern Matching Algorithms
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-pink-500 font-bold">→</span>
                                KMP & Rabin-Karp
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-pink-500 font-bold">→</span>
                                Suffix Arrays & Trees
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-pink-500 font-bold">→</span>
                                Edit Distance & LCS
                            </li>
                        </ul>
                    </div>

                    <!-- Advanced Topics -->
                    <div class="group bg-white rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-indigo-300 transform hover:-translate-y-2">
                        <div class="text-5xl mb-4 text-center transform group-hover:scale-110 transition-transform duration-300">🚀</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-indigo-600 transition-colors">Advanced Topics</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <span class="text-indigo-500 font-bold">→</span>
                                Greedy Algorithms
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-indigo-500 font-bold">→</span>
                                Backtracking & Recursion
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-indigo-500 font-bold">→</span>
                                Divide & Conquer
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="text-indigo-500 font-bold">→</span>
                                Complexity Analysis
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gradient-to-b from-gray-50 to-white relative overflow-hidden">
            <!-- Decorative Background Elements -->
            <div class="absolute top-0 left-0 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
            <div class="absolute top-0 right-0 w-72 h-72 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
            <div class="absolute bottom-0 left-1/2 w-72 h-72 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-100 to-blue-100 text-purple-700 px-6 py-2 rounded-full text-sm font-bold mb-6">
                        <span class="text-xl">💰</span>
                        TRANSPARENT PRICING
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                        Algorithm Help <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Pricing</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Affordable pricing for algorithm and data structure
                        assistance based on problem complexity.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-purple-200 transform hover:-translate-y-2">
                        <div class="text-center">
                            <div class="inline-block bg-purple-100 text-purple-600 px-4 py-2 rounded-full text-sm font-bold mb-4">🌱 Starter</div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Basic Problems</h3>
                            <div class="mb-6">
                                <span class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">$15</span>
                                <span class="text-gray-500 text-lg">+</span>
                            </div>
                            <ul class="text-left space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Simple sorting algorithms</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Basic data structures</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">1-6 hour delivery</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Code explanation</span>
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="group/btn relative block w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white py-4 rounded-xl font-bold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 text-center overflow-hidden">
                                <span class="relative z-10">Get Started</span>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover/btn:opacity-20 transition-opacity"></div>
                            </a>
                        </div>
                    </div>

                    <div class="group bg-gradient-to-br from-purple-50 to-blue-50 rounded-2xl shadow-2xl p-8 hover:shadow-3xl transition-all duration-300 border-4 border-purple-400 relative transform hover:-translate-y-3 scale-105">
                        <div class="absolute -top-5 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full text-sm font-bold shadow-lg flex items-center gap-2">
                            <span class="text-lg">⭐</span>
                            Most Popular
                        </div>
                        <div class="text-center mt-2">
                            <div class="inline-block bg-purple-200 text-purple-700 px-4 py-2 rounded-full text-sm font-bold mb-4">🚀 Pro</div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Intermediate Problems</h3>
                            <div class="mb-6">
                                <span class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">$35</span>
                                <span class="text-gray-500 text-lg">+</span>
                            </div>
                            <ul class="text-left space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Dynamic programming</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Graph algorithms</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">6-24 hour delivery</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Complexity analysis</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Test cases included</span>
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="group/btn relative block w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white py-4 rounded-xl font-bold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 text-center overflow-hidden shadow-lg">
                                <span class="relative z-10 flex items-center justify-center gap-2">
                                    Get Started
                                    <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                    </svg>
                                </span>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover/btn:opacity-20 transition-opacity"></div>
                            </a>
                        </div>
                    </div>

                    <div class="group bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-gray-100 hover:border-indigo-200 transform hover:-translate-y-2">
                        <div class="text-center">
                            <div class="inline-block bg-indigo-100 text-indigo-600 px-4 py-2 rounded-full text-sm font-bold mb-4">💎 Expert</div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Advanced Problems</h3>
                            <div class="mb-6">
                                <span class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-indigo-600">$65</span>
                                <span class="text-gray-500 text-lg">+</span>
                            </div>
                            <ul class="text-left space-y-4 mb-8">
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Complex algorithm design</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Optimization problems</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">1-3 day delivery</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Multiple approaches</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-green-500 text-xl mt-0.5">✓</span>
                                    <span class="text-gray-700">Performance optimization</span>
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="group/btn relative block w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white py-4 rounded-xl font-bold hover:from-purple-700 hover:to-indigo-700 transition-all duration-200 text-center overflow-hidden">
                                <span class="relative z-10">Get Started</span>
                                <div class="absolute inset-0 bg-white opacity-0 group-hover/btn:opacity-20 transition-opacity"></div>
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Problem-Solving Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Systematic approach to solving algorithmic problems
                        efficiently and accurately.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Problem Analysis</h3>
                        <p class="text-gray-600">Understand the problem requirements, constraints, and expected time/space
                            complexity.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Algorithm Design</h3>
                        <p class="text-gray-600">Choose the most efficient algorithm approach and design the solution
                            strategy.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Implementation</h3>
                        <p class="text-gray-600">Code the solution with clean, optimized code and proper error handling.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Testing & Analysis</h3>
                        <p class="text-gray-600">Test with various cases and provide complexity analysis with detailed
                            explanation.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Engaging Content Section -->
        <section class="py-20 bg-gradient-to-b from-white to-gray-50">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="text-xl">📖</span>
                            COMPREHENSIVE ALGORITHM GUIDE
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            Complete Guide to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">Data
                                Structures & Algorithms</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Essential knowledge for computer science
                            students, software engineers, and technical interview preparation</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Main Informative Card -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">📚</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Understanding Data Structures and
                                        Algorithms</h3>
                                    <p class="text-indigo-600 font-semibold text-lg">The foundation of computer science and
                                        software engineering</p>
                                </div>
                            </div>

                            <div class="prose prose-lg max-w-none">
                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-indigo-600">Data structures and algorithms form the
                                        backbone of efficient software development.</span> A data structure is a specialized
                                    format for organizing, processing, retrieving, and storing data. Common data structures
                                    include arrays, linked lists, stacks, queues, trees, graphs, and hash tables. Each
                                    structure offers specific advantages for different use cases, making it crucial to
                                    understand when and how to apply them effectively.
                                </p>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    An algorithm is a step-by-step procedure or formula for solving a problem. Algorithms
                                    operate on data structures to perform tasks such as searching, sorting, inserting,
                                    updating, and deleting data. The efficiency of an algorithm is measured using Big O
                                    notation, which describes how the algorithm's time or space requirements grow relative
                                    to the input size. Understanding algorithmic complexity is essential for writing
                                    performant code that scales with increasing data volumes.
                                </p>

                                <div
                                    class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 border-l-4 border-indigo-500 mb-6">
                                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Why Learning Algorithms and Data
                                        Structures Matters</h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Technical Interview Success:</strong> Over 85% of software
                                                engineering interviews at top tech companies like Google, Amazon, Facebook,
                                                Microsoft, and Apple focus heavily on algorithm and data structure
                                                questions. Mastering these concepts is essential for landing high-paying
                                                software engineering positions.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Problem-Solving Skills:</strong> Learning algorithms teaches you
                                                how to break down complex problems into manageable steps, think
                                                systematically, and develop efficient solutions—skills that are valuable in
                                                any programming context.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Code Optimization:</strong> Understanding data structures and
                                                algorithms enables you to write more efficient code, reducing execution time
                                                and memory usage. This is critical for building scalable applications that
                                                can handle millions of users.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Career Advancement:</strong> Software engineers with strong
                                                algorithmic skills typically earn higher salaries, with average starting
                                                salaries for algorithm-proficient developers exceeding $150,000 at major
                                                tech companies.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Time Complexity Deep Dive -->
                        <div
                            class="bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow-2xl p-8 border-2 border-indigo-100">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">⏱️</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Time Complexity Analysis with Big O
                                        Notation</h3>
                                    <p class="text-purple-600 font-semibold text-lg">Essential for algorithm performance
                                        evaluation</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Big O notation is a mathematical notation used to describe the limiting behavior of an
                                algorithm when the input size approaches infinity. It provides an upper bound on the growth
                                rate of an algorithm's time or space requirements, allowing developers to compare algorithm
                                efficiency objectively. Understanding Big O notation is fundamental to algorithm analysis
                                and optimization.
                            </p>

                            <div class="grid md:grid-cols-3 gap-6 mb-6">
                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-green-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-green-600 mb-2">O(1) - Constant Time</div>
                                        <p class="text-gray-700 text-sm mb-3">The algorithm's performance remains constant
                                            regardless of input size. This is the most efficient time complexity.</p>
                                        <div class="bg-green-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-green-900 mb-1">Examples:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Array element access by index</li>
                                                <li>• Hash table lookup/insertion</li>
                                                <li>• Stack push/pop operations</li>
                                                <li>• Queue enqueue/dequeue</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-blue-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-blue-600 mb-2">O(log n) - Logarithmic</div>
                                        <p class="text-gray-700 text-sm mb-3">Performance grows logarithmically with input
                                            size. Very efficient for large datasets as it eliminates half the remaining
                                            elements each step.</p>
                                        <div class="bg-blue-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-blue-900 mb-1">Examples:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Binary search algorithms</li>
                                                <li>• Balanced binary tree operations</li>
                                                <li>• Divide and conquer algorithms</li>
                                                <li>• Finding elements in sorted arrays</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-purple-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-purple-600 mb-2">O(n) - Linear Time</div>
                                        <p class="text-gray-700 text-sm mb-3">Performance grows linearly with input size.
                                            The algorithm must examine each element once.</p>
                                        <div class="bg-purple-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-purple-900 mb-1">Examples:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Linear search algorithms</li>
                                                <li>• Array/list traversal</li>
                                                <li>• Finding min/max in unsorted array</li>
                                                <li>• Counting algorithm occurrences</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-yellow-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-yellow-700 mb-2">O(n log n) - Linearithmic
                                        </div>
                                        <p class="text-gray-700 text-sm mb-3">Common in efficient sorting algorithms.
                                            Optimal for comparison-based sorting with proven lower bound.</p>
                                        <div class="bg-yellow-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-yellow-900 mb-1">Examples:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Merge sort algorithm</li>
                                                <li>• Quick sort (average case)</li>
                                                <li>• Heap sort algorithm</li>
                                                <li>• Efficient sorting operations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-orange-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-orange-600 mb-2">O(n²) - Quadratic</div>
                                        <p class="text-gray-700 text-sm mb-3">Performance grows quadratically. Often
                                            involves nested loops. Should be optimized for large datasets.</p>
                                        <div class="bg-orange-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-orange-900 mb-1">Examples:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Bubble sort algorithm</li>
                                                <li>• Insertion sort algorithm</li>
                                                <li>• Selection sort algorithm</li>
                                                <li>• Nested loop iterations</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-red-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-red-600 mb-2">O(2ⁿ) - Exponential</div>
                                        <p class="text-gray-700 text-sm mb-3">Performance doubles with each additional
                                            input. Often requires optimization techniques like memoization.</p>
                                        <div class="bg-red-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-red-900 mb-1">Examples:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Recursive Fibonacci (naive)</li>
                                                <li>• Power set generation</li>
                                                <li>• Backtracking algorithms</li>
                                                <li>• Brute force solutions</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Space Complexity Considerations</h4>
                                <p class="text-indigo-100 mb-3">
                                    Beyond time complexity, space complexity measures the amount of memory an algorithm uses
                                    relative to input size. Trade-offs between time and space complexity are common—for
                                    example, dynamic programming uses additional memory (space) to achieve better time
                                    performance by storing previously computed results.
                                </p>
                                <p class="text-indigo-100">
                                    Modern algorithm design often involves balancing these trade-offs based on specific
                                    constraints such as available memory, processing power, and performance requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Common Algorithm Patterns -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🎯</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Common Algorithm Patterns and
                                        Problem-Solving Techniques</h3>
                                    <p class="text-green-700 font-semibold text-lg">Master these patterns to solve
                                        thousands of algorithmic problems</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Algorithmic problem-solving often involves recognizing patterns and applying proven
                                techniques. Understanding these common patterns dramatically improves your ability to
                                approach new problems efficiently. Below are the most important algorithm patterns used in
                                technical interviews and competitive programming.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div
                                    class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border-2 border-blue-200">
                                    <h4 class="font-bold text-blue-900 text-xl mb-3">Two Pointers Technique</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        The two pointers technique uses two different positions in an array or sequence to
                                        solve problems efficiently. This pattern is particularly useful for problems
                                        involving sorted arrays, palindromes, or finding pairs with specific properties.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-blue-900 text-sm mb-2">Common Applications:</p>
                                        <ul class="text-xs text-gray-700 space-y-1">
                                            <li>• Finding pairs that sum to a target value</li>
                                            <li>• Removing duplicates from sorted arrays</li>
                                            <li>• Palindrome verification</li>
                                            <li>• Container with most water problems</li>
                                            <li>• Merge sorted arrays or linked lists</li>
                                        </ul>
                                    </div>
                                    <div class="bg-blue-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Time Complexity:</strong> Typically O(n) instead of O(n²) with nested loops
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border-2 border-purple-200">
                                    <h4 class="font-bold text-purple-900 text-xl mb-3">Sliding Window Pattern</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        The sliding window technique maintains a subset of elements (window) that slides
                                        through the array. This pattern is ideal for problems involving contiguous subarrays
                                        or substrings with specific properties.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-purple-900 text-sm mb-2">Common Applications:</p>
                                        <ul class="text-xs text-gray-700 space-y-1">
                                            <li>• Maximum sum subarray of size K</li>
                                            <li>• Longest substring without repeating characters</li>
                                            <li>• Minimum window substring</li>
                                            <li>• Finding anagrams in strings</li>
                                            <li>• Longest substring with K distinct characters</li>
                                        </ul>
                                    </div>
                                    <div class="bg-purple-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Time Complexity:</strong> O(n) by avoiding redundant computations
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border-2 border-green-200">
                                    <h4 class="font-bold text-green-900 text-xl mb-3">Dynamic Programming (DP)</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Dynamic programming solves complex problems by breaking them into simpler
                                        subproblems and storing results to avoid redundant calculations. DP is essential for
                                        optimization problems and counting problems.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-green-900 text-sm mb-2">Common Applications:</p>
                                        <ul class="text-xs text-gray-700 space-y-1">
                                            <li>• Fibonacci sequence optimization</li>
                                            <li>• 0/1 Knapsack problem</li>
                                            <li>• Longest Common Subsequence (LCS)</li>
                                            <li>• Edit distance (Levenshtein distance)</li>
                                            <li>• Matrix chain multiplication</li>
                                        </ul>
                                    </div>
                                    <div class="bg-green-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Time Complexity:</strong> Often reduces exponential to polynomial time
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6 border-2 border-orange-200">
                                    <h4 class="font-bold text-orange-900 text-xl mb-3">Backtracking</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Backtracking explores all possible solutions by building candidates incrementally
                                        and abandoning candidates that fail to satisfy constraints. It's a refined brute
                                        force approach.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-orange-900 text-sm mb-2">Common Applications:</p>
                                        <ul class="text-xs text-gray-700 space-y-1">
                                            <li>• N-Queens problem</li>
                                            <li>• Sudoku solver</li>
                                            <li>• Generating permutations and combinations</li>
                                            <li>• Subset sum problem</li>
                                            <li>• Word search in grids</li>
                                        </ul>
                                    </div>
                                    <div class="bg-orange-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Time Complexity:</strong> O(2ⁿ) or O(n!) depending on problem
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 border-2 border-red-200">
                                    <h4 class="font-bold text-red-900 text-xl mb-3">Divide and Conquer</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        This pattern divides a problem into smaller subproblems, solves them independently,
                                        and combines results. It's the foundation of many efficient algorithms.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-red-900 text-sm mb-2">Common Applications:</p>
                                        <ul class="text-xs text-gray-700 space-y-1">
                                            <li>• Merge sort and quick sort</li>
                                            <li>• Binary search variations</li>
                                            <li>• Closest pair of points</li>
                                            <li>• Strassen's matrix multiplication</li>
                                            <li>• Maximum subarray problem (Kadane's)</li>
                                        </ul>
                                    </div>
                                    <div class="bg-red-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Time Complexity:</strong> Often O(n log n) for sorting algorithms
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 border-2 border-indigo-200">
                                    <h4 class="font-bold text-indigo-900 text-xl mb-3">Greedy Algorithms</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Greedy algorithms make locally optimal choices at each step with the hope of finding
                                        a global optimum. They work well for certain optimization problems.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-indigo-900 text-sm mb-2">Common Applications:</p>
                                        <ul class="text-xs text-gray-700 space-y-1">
                                            <li>• Activity selection problem</li>
                                            <li>• Huffman coding</li>
                                            <li>• Fractional knapsack</li>
                                            <li>• Minimum spanning tree (Kruskal, Prim)</li>
                                            <li>• Dijkstra's shortest path algorithm</li>
                                        </ul>
                                    </div>
                                    <div class="bg-indigo-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Time Complexity:</strong> Often O(n log n) due to sorting step
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Mastering Algorithm Patterns: A Structured Approach</h4>
                                <p class="text-green-100 mb-3">
                                    To effectively learn algorithms, start with fundamental data structures (arrays, linked
                                    lists, stacks, queues, hash tables, trees). Then progressively tackle these patterns,
                                    starting with two pointers and sliding window, moving to recursion and backtracking, and
                                    finally mastering dynamic programming and graph algorithms.
                                </p>
                                <p class="text-green-100">
                                    Practice is essential—aim to solve problems across different difficulty levels (easy,
                                    medium, hard) for each pattern. Platforms like LeetCode, HackerRank, and Codeforces
                                    provide curated problem sets organized by pattern, making systematic learning more
                                    efficient.
                                </p>
                            </div>
                        </div>

                        <!-- Data Structures Comprehensive Guide -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">📚</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Essential Data Structures: Complete
                                        Reference Guide</h3>
                                    <p class="text-indigo-600 font-semibold text-lg">Understanding the building blocks of
                                        efficient algorithms</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Data structures are specialized formats for organizing and storing data in computer memory.
                                Choosing the right data structure is crucial for algorithm efficiency. Below is a
                                comprehensive overview of fundamental data structures, their time complexities, and optimal
                                use cases.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div
                                    class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border-2 border-purple-200">
                                    <h5 class="font-bold text-purple-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>🔗</span> Arrays and Dynamic Arrays
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Arrays store elements in contiguous memory locations, providing constant-time access
                                        by index. Dynamic arrays (like ArrayList in Java or vector in C++) automatically
                                        resize when capacity is exceeded.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-purple-900 text-sm mb-2">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Access by index:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search (unsorted):</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at end:</span>
                                                <span class="font-semibold text-green-600">O(1) amortized</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at position:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Delete:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-purple-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Random access, iteration, when size is known,
                                        implementing other data structures
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border-2 border-blue-200">
                                    <h5 class="font-bold text-blue-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>🗺️</span> Hash Tables (Hash Maps)
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Hash tables use a hash function to map keys to array indices, providing extremely
                                        fast lookups, insertions, and deletions. They handle collisions through chaining or
                                        open addressing.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-blue-900 text-sm mb-2">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Search:</span>
                                                <span class="font-semibold text-green-600">O(1) average</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert:</span>
                                                <span class="font-semibold text-green-600">O(1) average</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Delete:</span>
                                                <span class="font-semibold text-green-600">O(1) average</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Worst case (collisions):</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-blue-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Fast lookups, caching, counting frequencies, detecting
                                        duplicates, implementing sets
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border-2 border-green-200">
                                    <h5 class="font-bold text-green-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>📚</span> Stacks and Queues
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        <strong>Stack (LIFO):</strong> Last-In-First-Out structure supporting push and pop.
                                        <strong>Queue (FIFO):</strong> First-In-First-Out structure supporting enqueue and
                                        dequeue operations.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-green-900 text-sm mb-2">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Push/Enqueue:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Pop/Dequeue:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Peek/Front:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-green-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Function call stack, undo operations (Stack); BFS, task
                                        scheduling (Queue)
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-xl p-6 border-2 border-yellow-200">
                                    <h5 class="font-bold text-yellow-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>🔗</span> Linked Lists
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Linked lists consist of nodes where each node contains data and a pointer to the
                                        next node. Singly linked lists point forward only; doubly linked lists have pointers
                                        in both directions.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-yellow-900 text-sm mb-2">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Access:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at head:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at position:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Delete:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-yellow-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Dynamic size, frequent insertions/deletions, implementing
                                        stacks/queues
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 border-2 border-indigo-200">
                                    <h5 class="font-bold text-indigo-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>🌳</span> Binary Search Trees (BST)
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Binary search trees maintain sorted order where left children are smaller and right
                                        children are larger than parent. Balanced BSTs (AVL, Red-Black) guarantee O(log n)
                                        operations.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-indigo-900 text-sm mb-2">Time Complexities (Balanced):
                                        </p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Search:</span>
                                                <span class="font-semibold text-green-600">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert:</span>
                                                <span class="font-semibold text-green-600">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Delete:</span>
                                                <span class="font-semibold text-green-600">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Worst case (unbalanced):</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-indigo-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Sorted data, range queries, maintaining order, database
                                        indexing
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 border-2 border-red-200">
                                    <h5 class="font-bold text-red-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>📊</span> Heaps (Priority Queues)
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Heaps are complete binary trees satisfying the heap property: max-heap (parent ≥
                                        children) or min-heap (parent ≤ children). Implemented using arrays for efficient
                                        storage.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-red-900 text-sm mb-2">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Find min/max:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert:</span>
                                                <span class="font-semibold text-yellow-700">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Extract min/max:</span>
                                                <span class="font-semibold text-yellow-700">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Build heap:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-red-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Priority queues, heap sort, finding k largest/smallest
                                        elements
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-teal-50 to-teal-100 rounded-xl p-6 border-2 border-teal-200">
                                    <h5 class="font-bold text-teal-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>🕸️</span> Graphs
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Graphs represent relationships between objects using vertices (nodes) and edges
                                        (connections). Can be directed/undirected, weighted/unweighted. Represented as
                                        adjacency matrix or adjacency list.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-teal-900 text-sm mb-2">Time Complexities (Adjacency
                                            List):</p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Add vertex:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Add edge:</span>
                                                <span class="font-semibold text-green-600">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Remove vertex:</span>
                                                <span class="font-semibold text-orange-600">O(V + E)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Remove edge:</span>
                                                <span class="font-semibold text-orange-600">O(E)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600">O(V + E)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-teal-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Social networks, maps, dependency resolution, routing
                                        algorithms
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-pink-50 to-pink-100 rounded-xl p-6 border-2 border-pink-200">
                                    <h5 class="font-bold text-pink-900 mb-3 flex items-center gap-2 text-lg">
                                        <span>🌲</span> Tries (Prefix Trees)
                                    </h5>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Tries store strings character by character in a tree structure, sharing common
                                        prefixes. Each path from root to leaf represents a word. Extremely efficient for
                                        string operations.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-pink-900 text-sm mb-2">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-gray-700">
                                            <div class="flex justify-between">
                                                <span>Insert word:</span>
                                                <span class="font-semibold text-orange-600">O(m)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search word:</span>
                                                <span class="font-semibold text-orange-600">O(m)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Prefix search:</span>
                                                <span class="font-semibold text-orange-600">O(m)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>m = word length</span>
                                                <span class="font-semibold text-gray-500">-</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600">O(n × m)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-pink-600 text-white rounded-lg p-3 text-xs">
                                        <strong>Best for:</strong> Autocomplete, spell checkers, IP routing, dictionary
                                        implementation
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Choosing the Right Data Structure</h4>
                                <p class="text-blue-100 mb-3">
                                    Selecting the appropriate data structure is fundamental to writing efficient algorithms.
                                    Consider these factors: required operations (insert, delete, search), frequency of
                                    operations, memory constraints, and whether data needs to maintain order. Hash tables
                                    excel at fast lookups but don't maintain order. Trees provide sorted access but with
                                    logarithmic complexity. Arrays offer constant-time access but expensive insertions.
                                </p>
                                <p class="text-blue-100">
                                    <strong>Need Data Structure Help?</strong> Our data structure experts provide professional assistance with choosing and implementing the right data structures for your projects. Whether you're struggling with complex data structure assignments, need help optimizing algorithm performance, or require expert guidance on data structure implementation, our experienced programmers are available 24/7. Get data structure help from experts who understand the nuances of arrays, linked lists, trees, graphs, hash tables, and advanced data structures. We provide detailed explanations, optimized code, and comprehensive analysis to help you master data structures and algorithms.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Student Success Stories</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who mastered algorithms
                        with our expert help.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Exceptional help with dynamic programming! The expert not only
                            solved my problem but explained the approach so clearly that I can now tackle similar problems
                            on my own."</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                D</div>
                            <div>
                                <div class="font-semibold text-gray-900">David L.</div>
                                <div class="text-sm text-gray-500">Computer Science Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing work on graph algorithms! The solution was optimized and
                            came with detailed complexity analysis. Perfect for my algorithms course project."</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                L</div>
                            <div>
                                <div class="font-semibold text-gray-900">Lisa K.</div>
                                <div class="text-sm text-gray-500">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Brilliant help with competitive programming problems! Fast delivery
                            and multiple solution approaches. Really helped me improve my problem-solving skills."</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                K</div>
                            <div>
                                <div class="font-semibold text-gray-900">Kevin R.</div>
                                <div class="text-sm text-gray-500">Competitive Programming Enthusiast</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trust & Guarantees Section -->
        <section class="py-20 bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50 relative overflow-hidden">
            <!-- Background decoration -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-purple-200 rounded-full opacity-20 -mr-32 -mt-32 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-blue-200 rounded-full opacity-20 -ml-32 -mb-32 blur-3xl"></div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 bg-white px-6 py-2 rounded-full text-sm font-bold mb-6 shadow-lg border-2 border-purple-200">
                        <span class="text-2xl">🛡️</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">YOUR SUCCESS IS GUARANTEED</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                        Why <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">10,000+ Students</span> Trust Us
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">We're committed to your academic success with industry-leading guarantees</p>
                </div>

                <!-- Trust Badges Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <!-- Money-Back Guarantee -->
                    <div class="bg-white rounded-2xl p-6 shadow-xl border-2 border-green-200 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">💰</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Money-Back Guarantee</h3>
                        <p class="text-gray-600 text-center text-sm">100% refund if you're not satisfied with the solution quality</p>
                    </div>

                    <!-- Plagiarism Free -->
                    <div class="bg-white rounded-2xl p-6 shadow-xl border-2 border-blue-200 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">✅</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">100% Original Code</h3>
                        <p class="text-gray-600 text-center text-sm">Every solution is written from scratch, never copied or reused</p>
                    </div>

                    <!-- On-Time Delivery -->
                    <div class="bg-white rounded-2xl p-6 shadow-xl border-2 border-purple-200 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">⏰</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">On-Time Promise</h3>
                        <p class="text-gray-600 text-center text-sm">Never miss a deadline - we deliver on time, every time, guaranteed</p>
                    </div>

                    <!-- Privacy Protected -->
                    <div class="bg-white rounded-2xl p-6 shadow-xl border-2 border-indigo-200 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <span class="text-3xl">🔒</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2 text-center">Privacy Protected</h3>
                        <p class="text-gray-600 text-center text-sm">Your information is encrypted and never shared with third parties</p>
                    </div>
                </div>

                <!-- University Students Trust Us - Enhanced -->
                <div class="bg-gradient-to-br from-white via-purple-50 to-blue-50 rounded-3xl p-10 shadow-2xl border-2 border-purple-200 mb-12 relative overflow-hidden">
                    <!-- Decorative elements -->
                    <div class="absolute top-0 right-0 w-40 h-40 bg-purple-300 rounded-full opacity-10 -mr-20 -mt-20 blur-2xl"></div>
                    <div class="absolute bottom-0 left-0 w-40 h-40 bg-blue-300 rounded-full opacity-10 -ml-20 -mb-20 blur-2xl"></div>

                    <div class="relative z-10">
                        <div class="text-center mb-8">
                            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-100 to-blue-100 px-5 py-2 rounded-full text-sm font-bold mb-4 border-2 border-purple-200">
                                <span class="text-xl">🎓</span>
                                <span class="text-purple-700">ELITE UNIVERSITIES</span>
                            </div>
                            <h3 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-3">
                                Trusted by Students at
                                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Top Universities</span>
                            </h3>
                            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                                Join thousands of successful students from the world's most prestigious institutions who chose us for their algorithm assignments
                            </p>
                        </div>

                        <!-- University Badges -->
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-4 mb-8">
                            <!-- MIT -->
                            <div class="group bg-white rounded-xl p-5 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-gray-100 hover:border-purple-300">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900 mb-2">MIT</div>
                                    <div class="text-xs text-purple-600 font-bold">850+ Students</div>
                                </div>
                            </div>

                            <!-- Stanford -->
                            <div class="group bg-white rounded-xl p-5 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-gray-100 hover:border-purple-300">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900 mb-2">Stanford</div>
                                    <div class="text-xs text-purple-600 font-bold">720+ Students</div>
                                </div>
                            </div>

                            <!-- Berkeley -->
                            <div class="group bg-white rounded-xl p-5 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-gray-100 hover:border-purple-300">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900 mb-2">UC Berkeley</div>
                                    <div class="text-xs text-purple-600 font-bold">680+ Students</div>
                                </div>
                            </div>

                            <!-- CMU -->
                            <div class="group bg-white rounded-xl p-5 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-gray-100 hover:border-purple-300">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900 mb-2">CMU</div>
                                    <div class="text-xs text-purple-600 font-bold">590+ Students</div>
                                </div>
                            </div>

                            <!-- More Universities -->
                            <div class="group bg-gradient-to-br from-purple-100 to-blue-100 rounded-xl p-5 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border-2 border-purple-300 col-span-2 md:col-span-1">
                                <div class="text-center">
                                    <div class="text-lg font-bold text-gray-900 mb-2">500+ More</div>
                                    <div class="text-xs text-purple-700 font-bold">Universities Worldwide</div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Universities Marquee -->
                        <div class="bg-white/60 backdrop-blur-sm rounded-xl p-4 border border-purple-200">
                            <div class="flex flex-wrap justify-center gap-3 text-sm font-semibold text-gray-600">
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Harvard</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Princeton</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Yale</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Cornell</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Columbia</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">UPenn</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Georgia Tech</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">UIUC</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">UT Austin</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">UMich</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Waterloo</span>
                                <span class="bg-white px-3 py-1 rounded-lg shadow-sm">Toronto</span>
                            </div>
                        </div>

                        <!-- Trust Statement -->
                        <div class="mt-6 text-center">
                            <p class="text-gray-700 font-semibold">
                                🌍 Helping students across <span class="text-purple-600 font-bold">65+ countries</span>
                                achieve academic excellence since 2018
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Student Success Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 rounded-2xl p-8 text-white text-center shadow-xl transform hover:scale-105 transition-all duration-300">
                        <div class="text-5xl font-extrabold mb-2">98%</div>
                        <p class="text-xl font-semibold mb-1">Student Success Rate</p>
                        <p class="text-purple-100 text-sm">Students achieve A or B grades</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-600 to-emerald-600 rounded-2xl p-8 text-white text-center shadow-xl transform hover:scale-105 transition-all duration-300">
                        <div class="text-5xl font-extrabold mb-2">4.9/5</div>
                        <p class="text-xl font-semibold mb-1">Average Rating</p>
                        <p class="text-green-100 text-sm">Based on 2,500+ reviews</p>
                    </div>
                    <div class="bg-gradient-to-br from-orange-600 to-red-600 rounded-2xl p-8 text-white text-center shadow-xl transform hover:scale-105 transition-all duration-300">
                        <div class="text-5xl font-extrabold mb-2">24/7</div>
                        <p class="text-xl font-semibold mb-1">Expert Support</p>
                        <p class="text-orange-100 text-sm">Always here when you need us</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Common questions about our algorithm and data
                        structure help service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What programming languages do you support?
                        </h3>
                        <p class="text-gray-600">We provide algorithm solutions in all major programming languages
                            including Python, Java, C++, C#, JavaScript, and more. Our experts can work with your preferred
                            language or suggest the most suitable one for your problem.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">How do you ensure optimal time complexity?
                        </h3>
                        <p class="text-gray-600">Our experts analyze each problem to determine the most efficient approach.
                            We provide detailed time and space complexity analysis with each solution and optimize for the
                            best possible performance within the given constraints.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with competitive programming
                            problems?</h3>
                        <p class="text-gray-600">Yes! We have extensive experience with competitive programming platforms
                            like LeetCode, HackerRank, Codeforces, and others. We can help with contest problems, interview
                            preparation, and algorithmic challenges.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide explanations with the code?
                        </h3>
                        <p class="text-gray-600">Absolutely! Every solution comes with detailed explanations of the
                            algorithm approach, step-by-step logic, complexity analysis, and comments in the code to help
                            you understand the solution thoroughly.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What if I need help understanding the
                            solution?</h3>
                        <p class="text-gray-600">We provide comprehensive documentation with each solution. If you need
                            additional clarification, our experts are available to explain any part of the algorithm or
                            solution approach in more detail.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="relative py-24 bg-gradient-to-br from-purple-700 via-blue-700 to-indigo-800 overflow-hidden">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0">
                <div class="absolute top-0 left-0 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
                <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
                <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>
            </div>

            <!-- Grid Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="h-full w-full" style="background-image: linear-gradient(white 1px, transparent 1px), linear-gradient(90deg, white 1px, transparent 1px); background-size: 50px 50px;"></div>
            </div>

            <div class="container mx-auto px-6 text-center relative z-10">
                <div class="max-w-4xl mx-auto">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded-full text-sm font-bold mb-6 border border-white/30 animate-pulse-glow">
                        <span class="text-2xl">🎯</span>
                        JOIN 10,000+ SUCCESSFUL STUDENTS
                    </div>

                    <!-- Heading -->
                    <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight drop-shadow-2xl">
                        Ready to Master <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-pink-300 to-cyan-300 animate-gradient">
                            Algorithms?
                        </span>
                    </h2>

                    <!-- Description -->
                    <p class="text-xl md:text-2xl text-white/90 mb-10 max-w-3xl mx-auto leading-relaxed drop-shadow-lg">
                        Join thousands of students who have improved their algorithmic thinking and problem-solving skills with our expert guidance.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
                        <a href="{{ route('assignments.create') }}"
                            class="group relative bg-white text-purple-700 px-10 py-5 rounded-xl font-bold hover:scale-105 transition-all duration-300 shadow-2xl hover:shadow-white/50 overflow-hidden">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                Start Solving Today
                                <svg class="w-6 h-6 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-300 to-pink-300 opacity-0 group-hover:opacity-20 transition-opacity"></div>
                        </a>
                        <a href="#pricing"
                            class="group border-2 border-white/60 backdrop-blur-sm text-white px-10 py-5 rounded-xl font-bold hover:bg-white/20 hover:border-white transition-all duration-300 shadow-lg hover:scale-105">
                            View Pricing
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="flex flex-wrap justify-center gap-8 text-white/90">
                        <div class="flex items-center gap-2">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <span class="text-2xl">⭐</span>
                            </div>
                            <div class="text-left">
                                <div class="text-2xl font-bold">4.9/5</div>
                                <div class="text-sm opacity-80">Rating</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <span class="text-2xl">✓</span>
                            </div>
                            <div class="text-left">
                                <div class="text-2xl font-bold">800+</div>
                                <div class="text-sm opacity-80">Problems Solved</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                                <span class="text-2xl">⚡</span>
                            </div>
                            <div class="text-left">
                                <div class="text-2xl font-bold">24/7</div>
                                <div class="text-sm opacity-80">Support</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(-15px) rotate(1deg);
            }
            66% {
                transform: translateY(8px) rotate(-1deg);
            }
        }

        @keyframes float-delayed {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
            }
            33% {
                transform: translateY(12px) rotate(-1deg);
            }
            66% {
                transform: translateY(-8px) rotate(1deg);
            }
        }

        @keyframes bounce-slow {
            0%, 100% {
                transform: translateY(-5%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }
            50% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }

        @keyframes pulse-slow {
            0%, 100% {
                opacity: 0.9;
            }
            50% {
                opacity: 0.7;
            }
        }

        @keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            }
            50% {
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.8);
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Optimize animations for reduced main thread blocking */
        .animate-float {
            animation: float 6s ease-in-out infinite;
            /* GPU acceleration for smooth performance */
            transform: translateZ(0);
            will-change: transform;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
            transform: translateZ(0);
            will-change: transform;
        }

        .animate-bounce-slow {
            animation: bounce-slow 3s infinite;
            transform: translateZ(0);
        }

        .animate-pulse-slow {
            animation: pulse-slow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            /* Use opacity for better performance than other properties */
        }

        .animate-pulse-glow {
            animation: pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            /* Box-shadow is expensive, but contained to small elements */
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 3s ease infinite;
            /* GPU accelerate background animations */
            transform: translateZ(0);
        }

        @keyframes blob {
            0%, 100% {
                transform: translate3d(0, 0, 0) scale(1);
            }
            33% {
                transform: translate3d(30px, -50px, 0) scale(1.1);
            }
            66% {
                transform: translate3d(-20px, 20px, 0) scale(0.9);
            }
        }

        .animate-blob {
            animation: blob 7s infinite;
            /* Force GPU acceleration with translate3d */
            transform: translateZ(0);
            will-change: transform;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
@endsection
