@extends('layouts.app')

@section('title', 'Algorithm & Data Structure Help - Expert Programming Assistance')
@section('description',
    'Get professional help with algorithms and data structures. Expert programmers available 24/7
    for sorting, searching, dynamic programming, and complex algorithmic solutions.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100 py-20 overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-5">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.1\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');">
                </div>
            </div>

            <!-- Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Floating Binary Search -->
                <div
                    class="absolute top-10 left-10 bg-gray-900 text-green-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-float opacity-80 max-w-xs">
                    <div class="text-purple-400">// Binary Search</div>
                    <div><span class="text-blue-400">def</span> binary_search(arr, target):</div>
                    <div class="ml-2">left, right = 0, len(arr) - 1</div>
                    <div class="ml-2"><span class="text-orange-400">while</span> left &lt;= right:</div>
                    <div class="ml-4">mid = (left + right) // 2</div>
                </div>

                <!-- Floating Quick Sort -->
                <div
                    class="absolute top-32 right-20 bg-gray-900 text-blue-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-float-delayed opacity-80 max-w-xs">
                    <div class="text-purple-400">// Quick Sort</div>
                    <div><span class="text-blue-400">function</span> quickSort(arr) {</div>
                    <div class="ml-2"><span class="text-orange-400">if</span> (arr.length &lt;= 1) <span
                            class="text-orange-400">return</span> arr;</div>
                    <div class="ml-2"><span class="text-yellow-400">const</span> pivot = arr[0];</div>
                    <div>}</div>
                </div>

                <!-- Floating Dynamic Programming -->
                <div
                    class="absolute bottom-20 left-1/4 bg-gray-900 text-yellow-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-bounce opacity-80 max-w-xs">
                    <div class="text-purple-400">// Fibonacci DP</div>
                    <div><span class="text-blue-400">int</span> fib(<span class="text-blue-400">int</span> n) {</div>
                    <div class="ml-2"><span class="text-blue-400">int</span> dp[n+1];</div>
                    <div class="ml-2">dp[0] = 0; dp[1] = 1;</div>
                    <div>}</div>
                </div>

                <!-- Floating Graph Algorithm -->
                <div
                    class="absolute top-64 right-1/4 bg-gray-900 text-cyan-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-pulse opacity-80 max-w-xs">
                    <div class="text-purple-400">// DFS Traversal</div>
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
                            class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            🧠 Algorithm & Data Structure Expert Help
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Master<br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Algorithms</span><br>
                            & Data Structures
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert help with complex algorithms and data structures. From sorting and searching to
                            dynamic programming and graph algorithms, our experienced programmers solve the most challenging
                            problems.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('assignments.create') }}"
                                class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl text-center">
                                Get Help Now
                            </a>
                            <a href="#pricing"
                                class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-purple-600 hover:text-white transition-all duration-200 text-center">
                                View Pricing
                            </a>
                        </div>

                        <div class="flex items-center space-x-6 text-sm text-gray-600">
                            <div class="flex items-center">
                                <span class="text-yellow-400 mr-1">⭐</span>
                                <span class="font-semibold">4.9/5</span> rating
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-500 mr-1">✓</span>
                                <span>800+ problems solved</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>1-24 hour delivery</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Code Editor Mockup -->
                    <div class="relative">
                        <div class="bg-gray-900 rounded-lg shadow-2xl overflow-hidden">
                            <!-- Editor Header -->
                            <div class="flex items-center mb-4">
                                <div class="flex space-x-2">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="ml-4 text-gray-400 text-sm font-mono">algorithm_solution.py</div>
                            </div>

                            <!-- Code Content -->
                            <div class="font-mono text-sm space-y-1 p-6">
                                <div class="text-purple-400"># Efficient Algorithm Solution</div>
                                <div class="text-blue-400">def <span class="text-yellow-400">solve_problem</span>(data):
                                </div>
                                <div class="text-gray-300 ml-4"># Time Complexity: O(n log n)</div>
                                <div class="text-gray-300 ml-4"># Space Complexity: O(n)</div>
                                <div class="text-gray-300 ml-4">result = optimized_algorithm(data)</div>
                                <div class="text-gray-300 ml-4">return <span class="text-green-400">result</span></div>
                                <div class="text-gray-500"></div>
                                <div class="text-purple-400"># Expert Available 4.9/5 ⭐</div>
                                <div class="text-blue-400">def <span class="text-yellow-400">test_solution</span>():</div>
                                <div class="text-gray-300 ml-4">assert solve_problem(test_data) == expected</div>
                                <div class="text-gray-300 ml-4">print(<span class="text-green-400">"All tests
                                        passed!"</span>)</div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                            <div class="text-2xl">🧠</div>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-lg shadow-lg p-4 animate-pulse">
                            <div class="text-2xl">⚡</div>
                        </div>
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
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Algorithm Categories We Cover</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive coverage of all major algorithm types
                        and data structures used in computer science and competitive programming.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Sorting & Searching -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <div class="text-4xl mb-4 text-center">🔍</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Sorting & Searching</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Quick Sort, Merge Sort, Heap Sort</li>
                            <li>• Binary Search & Variants</li>
                            <li>• Linear & Interpolation Search</li>
                            <li>• Sorting Algorithm Analysis</li>
                        </ul>
                    </div>

                    <!-- Dynamic Programming -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <div class="text-4xl mb-4 text-center">🔄</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Dynamic Programming</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Fibonacci & Optimization Problems</li>
                            <li>• Knapsack & Subset Problems</li>
                            <li>• Longest Common Subsequence</li>
                            <li>• Matrix Chain Multiplication</li>
                        </ul>
                    </div>

                    <!-- Graph Algorithms -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <div class="text-4xl mb-4 text-center">🕸️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Graph Algorithms</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• DFS, BFS, & Graph Traversal</li>
                            <li>• Dijkstra's & Shortest Path</li>
                            <li>• Minimum Spanning Trees</li>
                            <li>• Topological Sorting</li>
                        </ul>
                    </div>

                    <!-- Data Structures -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <div class="text-4xl mb-4 text-center">🏗️</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Data Structures</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Arrays, Linked Lists, Stacks</li>
                            <li>• Trees, BST, Balanced Trees</li>
                            <li>• Hash Tables & Hash Maps</li>
                            <li>• Heaps & Priority Queues</li>
                        </ul>
                    </div>

                    <!-- String Algorithms -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <div class="text-4xl mb-4 text-center">📝</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">String Algorithms</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Pattern Matching Algorithms</li>
                            <li>• KMP & Rabin-Karp</li>
                            <li>• Suffix Arrays & Trees</li>
                            <li>• Edit Distance & LCS</li>
                        </ul>
                    </div>

                    <!-- Advanced Topics -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <div class="text-4xl mb-4 text-center">🚀</div>
                        <h3 class="text-xl font-bold text-gray-900 mb-4 text-center">Advanced Topics</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>• Greedy Algorithms</li>
                            <li>• Backtracking & Recursion</li>
                            <li>• Divide & Conquer</li>
                            <li>• Complexity Analysis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Algorithm Help Pricing</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Affordable pricing for algorithm and data structure
                        assistance based on problem complexity.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic Problems</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $15</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple sorting algorithms
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic data structures
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    1-6 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Code explanation
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Intermediate Problems</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $35</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Dynamic programming
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Graph algorithms
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    6-24 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complexity analysis
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Test cases included
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Problems</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $65</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complex algorithm design
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Optimization problems
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    1-3 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Multiple approaches
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Performance optimization
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
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
                                        <div class="text-3xl font-bold text-yellow-600 mb-2">O(n log n) - Linearithmic
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
                                    <p class="text-green-600 font-semibold text-lg">Master these patterns to solve
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
                                                <span class="font-semibold text-yellow-600">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Extract min/max:</span>
                                                <span class="font-semibold text-yellow-600">O(log n)</span>
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
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Master Algorithms?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join thousands of students who have improved
                    their algorithmic thinking and problem-solving skills with our expert guidance.</p>
                <a href="{{ route('assignments.create') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Solving Today
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
