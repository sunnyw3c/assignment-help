@extends('layouts.app')

@section('title', 'Algorithm & Data Structure Help - Expert Programming Assistance')
@section('description', 'Get professional help with algorithms and data structures. Expert programmers available 24/7 for sorting, searching, dynamic programming, and complex algorithmic solutions.')

@section('content')
<div class="min-h-screen">
    <!-- Hero Section with Code Background -->
    <section class="relative bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-100 py-20 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.1\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');"></div>
        </div>

        <!-- Floating Code Snippets -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <!-- Floating Binary Search -->
            <div class="absolute top-10 left-10 bg-gray-900 text-green-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-float opacity-80 max-w-xs">
                <div class="text-purple-400">// Binary Search</div>
                <div><span class="text-blue-400">def</span> binary_search(arr, target):</div>
                <div class="ml-2">left, right = 0, len(arr) - 1</div>
                <div class="ml-2"><span class="text-orange-400">while</span> left &lt;= right:</div>
                <div class="ml-4">mid = (left + right) // 2</div>
            </div>

            <!-- Floating Quick Sort -->
            <div class="absolute top-32 right-20 bg-gray-900 text-blue-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-float-delayed opacity-80 max-w-xs">
                <div class="text-purple-400">// Quick Sort</div>
                <div><span class="text-blue-400">function</span> quickSort(arr) {</div>
                <div class="ml-2"><span class="text-orange-400">if</span> (arr.length &lt;= 1) <span class="text-orange-400">return</span> arr;</div>
                <div class="ml-2"><span class="text-yellow-400">const</span> pivot = arr[0];</div>
                <div>}</div>
            </div>

            <!-- Floating Dynamic Programming -->
            <div class="absolute bottom-20 left-1/4 bg-gray-900 text-yellow-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-bounce opacity-80 max-w-xs">
                <div class="text-purple-400">// Fibonacci DP</div>
                <div><span class="text-blue-400">int</span> fib(<span class="text-blue-400">int</span> n) {</div>
                <div class="ml-2"><span class="text-blue-400">int</span> dp[n+1];</div>
                <div class="ml-2">dp[0] = 0; dp[1] = 1;</div>
                <div>}</div>
            </div>

            <!-- Floating Graph Algorithm -->
            <div class="absolute top-64 right-1/4 bg-gray-900 text-cyan-400 p-3 rounded-lg shadow-lg font-mono text-xs animate-pulse opacity-80 max-w-xs">
                <div class="text-purple-400">// DFS Traversal</div>
                <div><span class="text-blue-400">void</span> dfs(<span class="text-blue-400">int</span> node) {</div>
                <div class="ml-2">visited[node] = <span class="text-green-400">true</span>;</div>
                <div class="ml-2"><span class="text-orange-400">for</span> (<span class="text-blue-400">int</span> neighbor : adj[node])</div>
                <div>}</div>
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div>
                    <div class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        🧠 Algorithm & Data Structure Expert Help
                    </div>

                    <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Master<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Algorithms</span><br>
                        & Data Structures
                    </h1>

                    <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                        Get expert help with complex algorithms and data structures. From sorting and searching to dynamic programming and graph algorithms, our experienced programmers solve the most challenging problems.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 mb-8">
                        <a href="{{ route('assignments.create') }}" class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl text-center">
                            Get Help Now
                        </a>
                        <a href="#pricing" class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-purple-600 hover:text-white transition-all duration-200 text-center">
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
                            <div class="text-blue-400">def <span class="text-yellow-400">solve_problem</span>(data):</div>
                            <div class="text-gray-300 ml-4"># Time Complexity: O(n log n)</div>
                            <div class="text-gray-300 ml-4"># Space Complexity: O(n)</div>
                            <div class="text-gray-300 ml-4">result = optimized_algorithm(data)</div>
                            <div class="text-gray-300 ml-4">return <span class="text-green-400">result</span></div>
                            <div class="text-gray-500"></div>
                            <div class="text-purple-400"># Expert Available 4.9/5 ⭐</div>
                            <div class="text-blue-400">def <span class="text-yellow-400">test_solution</span>():</div>
                            <div class="text-gray-300 ml-4">assert solve_problem(test_data) == expected</div>
                            <div class="text-gray-300 ml-4">print(<span class="text-green-400">"All tests passed!"</span>)</div>
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

    <!-- Algorithm Categories Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Algorithm Categories We Cover</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive coverage of all major algorithm types and data structures used in computer science and competitive programming.</p>
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
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Affordable pricing for algorithm and data structure assistance based on problem complexity.</p>
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
                        <a href="{{ route('assignments.create') }}" class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                            Get Started
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200 border-2 border-purple-600 relative">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-purple-600 text-white px-4 py-1 rounded-full text-sm font-semibold">
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
                        <a href="{{ route('assignments.create') }}" class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
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
                        <a href="{{ route('assignments.create') }}" class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
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
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Systematic approach to solving algorithmic problems efficiently and accurately.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Problem Analysis</h3>
                    <p class="text-gray-600">Understand the problem requirements, constraints, and expected time/space complexity.</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Algorithm Design</h3>
                    <p class="text-gray-600">Choose the most efficient algorithm approach and design the solution strategy.</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Implementation</h3>
                    <p class="text-gray-600">Code the solution with clean, optimized code and proper error handling.</p>
                </div>

                <div class="text-center">
                    <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Testing & Analysis</h3>
                    <p class="text-gray-600">Test with various cases and provide complexity analysis with detailed explanation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Student Success Stories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who mastered algorithms with our expert help.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg p-8">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-6">"Exceptional help with dynamic programming! The expert not only solved my problem but explained the approach so clearly that I can now tackle similar problems on my own."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">D</div>
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
                    <p class="text-gray-600 mb-6">"Amazing work on graph algorithms! The solution was optimized and came with detailed complexity analysis. Perfect for my algorithms course project."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">L</div>
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
                    <p class="text-gray-600 mb-6">"Brilliant help with competitive programming problems! Fast delivery and multiple solution approaches. Really helped me improve my problem-solving skills."</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">K</div>
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
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">Common questions about our algorithm and data structure help service.</p>
            </div>

            <div class="max-w-3xl mx-auto space-y-6">
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">What programming languages do you support?</h3>
                    <p class="text-gray-600">We provide algorithm solutions in all major programming languages including Python, Java, C++, C#, JavaScript, and more. Our experts can work with your preferred language or suggest the most suitable one for your problem.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">How do you ensure optimal time complexity?</h3>
                    <p class="text-gray-600">Our experts analyze each problem to determine the most efficient approach. We provide detailed time and space complexity analysis with each solution and optimize for the best possible performance within the given constraints.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with competitive programming problems?</h3>
                    <p class="text-gray-600">Yes! We have extensive experience with competitive programming platforms like LeetCode, HackerRank, Codeforces, and others. We can help with contest problems, interview preparation, and algorithmic challenges.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide explanations with the code?</h3>
                    <p class="text-gray-600">Absolutely! Every solution comes with detailed explanations of the algorithm approach, step-by-step logic, complexity analysis, and comments in the code to help you understand the solution thoroughly.</p>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">What if I need help understanding the solution?</h3>
                    <p class="text-gray-600">We provide comprehensive documentation with each solution. If you need additional clarification, our experts are available to explain any part of the algorithm or solution approach in more detail.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Master Algorithms?</h2>
            <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join thousands of students who have improved their algorithmic thinking and problem-solving skills with our expert guidance.</p>
            <a href="{{ route('assignments.create') }}" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                Start Solving Today
            </a>
        </div>
    </section>
</div>

<style>
@keyframes float {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(-10px) rotate(1deg); }
    66% { transform: translateY(5px) rotate(-1deg); }
}

@keyframes float-delayed {
    0%, 100% { transform: translateY(0px) rotate(0deg); }
    33% { transform: translateY(10px) rotate(-1deg); }
    66% { transform: translateY(-5px) rotate(1deg); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-float-delayed {
    animation: float-delayed 8s ease-in-out infinite;
}
</style>
@endsection