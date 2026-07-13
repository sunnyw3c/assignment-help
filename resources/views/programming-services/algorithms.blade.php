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

    
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- First Engaging Content Section -->
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-5xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Master Algorithmic Thinking</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            From Code Novice to <span class="text-blue-600 dark:text-blue-400">Algorithm Expert</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Unlock the secrets of efficient problem-solving
                            and ace your technical interviews</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Hero Stats Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <div class="mb-6 flex items-start gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                                    <span class="text-xl">⚡</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Why Algorithms Matter More Than Ever</h3>
                                    <p class="text-sm font-semibold text-blue-600 dark:text-blue-400">Your gateway to top tech companies
                                        and high-paying careers</p>
                                </div>
                            </div>

                            <div class="mb-6 grid gap-4 md:grid-cols-4">
                                <div class="rounded-xl border-l-4 border-purple-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-purple-600 dark:text-purple-400">85%</div>
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">FAANG Interview Focus</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-blue-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-blue-600 dark:text-blue-400">$150K+</div>
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Average Starting Salary</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-indigo-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-indigo-600 dark:text-indigo-400">800+</div>
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Problems Solved</p>
                                </div>
                                <div class="rounded-xl border-l-4 border-emerald-500 bg-slate-50 p-5 dark:bg-slate-900">
                                    <div class="mb-1 text-2xl font-bold text-emerald-600 dark:text-emerald-400">98%</div>
                                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300">Success Rate</p>
                                </div>
                            </div>

                            <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <span class="font-semibold text-slate-900 dark:text-white">Algorithms are the language of
                                    innovation.</span> Whether you're preparing for technical interviews at Google,
                                Facebook, Amazon, or building the next breakthrough application, mastering algorithms
                                and data structures is non-negotiable. Every second counts when you're solving LeetCode
                                mediums in 45 minutes or optimizing a production system serving millions of users.
                            </p>

                            <div class="rounded-xl bg-slate-900 p-6 text-white dark:bg-slate-950">
                                <p class="mb-2 text-base font-semibold">Industry Secret:</p>
                                <p class="text-sm text-slate-300">
                                    Top tech companies don't just hire coders—they hire problem solvers who can think
                                    algorithmically. The difference between O(n²) and O(n log n) can mean the difference
                                    between a system that crashes under load and one that scales to millions of users.
                                    That's why FAANG interviews are 85% algorithms and data structures!
                                </p>
                            </div>
                        </div>

                        <!-- Algorithm Mastery Cards -->
                        <div class="grid gap-5 md:grid-cols-2">
                            <!-- Dynamic Programming Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                        <span class="text-lg">🔄</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Dynamic Programming Mastery</h4>
                                        <p class="text-xs font-semibold text-purple-600 dark:text-purple-400">The interview killer topic</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="rounded-lg border-l-4 border-purple-500 bg-slate-50 p-4 dark:bg-slate-900">
                                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            <span class="font-semibold text-slate-900 dark:text-white">DP = Interview Success.</span>
                                            Fibonacci, Knapsack, LCS—these aren't just textbook problems. They're the
                                            foundation of recommendation systems, DNA sequencing, resource allocation, and
                                            countless real-world applications. Master DP and watch interview offers roll in!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-purple-50 p-3 text-center dark:bg-purple-950/40">
                                            <p class="text-lg font-bold text-purple-900 dark:text-purple-300">60%</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Interview Questions</p>
                                        </div>
                                        <div class="rounded-lg bg-pink-50 p-3 text-center dark:bg-pink-950/40">
                                            <p class="text-lg font-bold text-pink-900 dark:text-pink-300">10x</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Speed Improvement</p>
                                        </div>
                                    </div>

                                    <div class="rounded-lg bg-slate-900 p-4 text-white dark:bg-slate-950">
                                        <p class="mb-1 text-sm font-semibold">Classic DP Problems:</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">0/1 Knapsack</span>
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">LCS/LIS</span>
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">Matrix Chain</span>
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">Edit Distance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Graph Algorithms Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                                        <span class="text-lg">🕸️</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900 dark:text-white">Graph Algorithms Power</h4>
                                        <p class="text-xs font-semibold text-blue-600 dark:text-blue-400">Connect everything, solve anything</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="rounded-lg border-l-4 border-blue-500 bg-slate-50 p-4 dark:bg-slate-900">
                                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                            <span class="font-semibold text-slate-900 dark:text-white">Graphs run the world.</span> Social
                                            networks, GPS navigation, network routing, recommendation engines—they're all
                                            graphs! DFS, BFS, Dijkstra, and MST aren't just algorithms; they're the tools
                                            that power Google Maps, Facebook friends, and internet routing.
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-blue-50 p-3 text-center dark:bg-blue-950/40">
                                            <p class="text-lg font-bold text-blue-900 dark:text-blue-300">45%</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Tech Interviews</p>
                                        </div>
                                        <div class="rounded-lg bg-cyan-50 p-3 text-center dark:bg-cyan-950/40">
                                            <p class="text-lg font-bold text-cyan-900 dark:text-cyan-300">∞</p>
                                            <p class="text-xs text-slate-600 dark:text-slate-400">Real Applications</p>
                                        </div>
                                    </div>

                                    <div class="rounded-lg bg-slate-900 p-4 text-white dark:bg-slate-950">
                                        <p class="mb-1 text-sm font-semibold">Essential Graph Algorithms:</p>
                                        <div class="mt-2 flex flex-wrap gap-2">
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">DFS/BFS</span>
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">Dijkstra</span>
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">Kruskal/Prim</span>
                                            <span class="rounded bg-white/10 px-2 py-1 text-xs">Topological Sort</span>
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
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Comprehensive Coverage</p>
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Algorithm Categories <span class="text-blue-600 dark:text-blue-400">We Cover</span>
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Comprehensive coverage of all major algorithm types
                        and data structures used in computer science and competitive programming.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Sorting & Searching -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 text-center text-2xl">🔍</div>
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Sorting & Searching</h3>
                        <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-purple-600 dark:text-purple-400">→</span>
                                Quick Sort, Merge Sort, Heap Sort
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-purple-600 dark:text-purple-400">→</span>
                                Binary Search & Variants
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-purple-600 dark:text-purple-400">→</span>
                                Linear & Interpolation Search
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-purple-600 dark:text-purple-400">→</span>
                                Sorting Algorithm Analysis
                            </li>
                        </ul>
                    </div>

                    <!-- Dynamic Programming -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 text-center text-2xl">🔄</div>
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Dynamic Programming</h3>
                        <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-blue-600 dark:text-blue-400">→</span>
                                Fibonacci & Optimization Problems
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-blue-600 dark:text-blue-400">→</span>
                                Knapsack & Subset Problems
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-blue-600 dark:text-blue-400">→</span>
                                Longest Common Subsequence
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-blue-600 dark:text-blue-400">→</span>
                                Matrix Chain Multiplication
                            </li>
                        </ul>
                    </div>

                    <!-- Graph Algorithms -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 text-center text-2xl">🕸️</div>
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Graph Algorithms</h3>
                        <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-cyan-600 dark:text-cyan-400">→</span>
                                DFS, BFS, & Graph Traversal
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-cyan-600 dark:text-cyan-400">→</span>
                                Dijkstra's & Shortest Path
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-cyan-600 dark:text-cyan-400">→</span>
                                Minimum Spanning Trees
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-cyan-600 dark:text-cyan-400">→</span>
                                Topological Sorting
                            </li>
                        </ul>
                    </div>

                    <!-- Data Structures -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 text-center text-2xl">🏗️</div>
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Data Structures</h3>
                        <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">→</span>
                                Arrays, Linked Lists, Stacks
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">→</span>
                                Trees, BST, Balanced Trees
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">→</span>
                                Hash Tables & Hash Maps
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-emerald-600 dark:text-emerald-400">→</span>
                                Heaps & Priority Queues
                            </li>
                        </ul>
                    </div>

                    <!-- String Algorithms -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 text-center text-2xl">📝</div>
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">String Algorithms</h3>
                        <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-pink-600 dark:text-pink-400">→</span>
                                Pattern Matching Algorithms
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-pink-600 dark:text-pink-400">→</span>
                                KMP & Rabin-Karp
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-pink-600 dark:text-pink-400">→</span>
                                Suffix Arrays & Trees
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-pink-600 dark:text-pink-400">→</span>
                                Edit Distance & LCS
                            </li>
                        </ul>
                    </div>

                    <!-- Advanced Topics -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 text-center text-2xl">🚀</div>
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900 dark:text-white">Advanced Topics</h3>
                        <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-indigo-600 dark:text-indigo-400">→</span>
                                Greedy Algorithms
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-indigo-600 dark:text-indigo-400">→</span>
                                Backtracking & Recursion
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-indigo-600 dark:text-indigo-400">→</span>
                                Divide & Conquer
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="font-bold text-indigo-600 dark:text-indigo-400">→</span>
                                Complexity Analysis
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Transparent Pricing</p>
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Algorithm Help <span class="text-blue-600 dark:text-blue-400">Pricing</span>
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Affordable pricing for algorithm and data structure
                        assistance based on problem complexity.</p>
                </div>

                <div class="mx-auto grid max-w-6xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <div class="mb-4 inline-block rounded-full bg-purple-50 px-4 py-1.5 text-sm font-semibold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">🌱 Starter</div>
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Basic Problems</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-slate-900 dark:text-white">$15</span>
                                <span class="text-base text-slate-500 dark:text-slate-400">+</span>
                            </div>
                            <ul class="mb-8 space-y-3 text-left">
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Simple sorting algorithms</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Basic data structures</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">1-6 hour delivery</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Code explanation</span>
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="relative rounded-2xl border-2 border-blue-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:bg-slate-950">
                        <div class="absolute -top-3.5 left-1/2 inline-flex -translate-x-1/2 items-center gap-1.5 rounded-full bg-blue-600 px-4 py-1 text-xs font-semibold text-white shadow-sm">
                            <span>⭐</span>
                            Most Popular
                        </div>
                        <div class="mt-2 text-center">
                            <div class="mb-4 inline-block rounded-full bg-purple-50 px-4 py-1.5 text-sm font-semibold text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">🚀 Pro</div>
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Intermediate Problems</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-slate-900 dark:text-white">$35</span>
                                <span class="text-base text-slate-500 dark:text-slate-400">+</span>
                            </div>
                            <ul class="mb-8 space-y-3 text-left">
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Dynamic programming</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Graph algorithms</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">6-24 hour delivery</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Complexity analysis</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Test cases included</span>
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                                Get Started
                                <svg class="h-4 w-4 transition-transform group-hover/btn:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md dark:border-slate-800 dark:bg-slate-950">
                        <div class="text-center">
                            <div class="mb-4 inline-block rounded-full bg-indigo-50 px-4 py-1.5 text-sm font-semibold text-indigo-600 dark:bg-indigo-950/40 dark:text-indigo-400">💎 Expert</div>
                            <h3 class="mb-2 text-lg font-bold text-slate-900 dark:text-white">Advanced Problems</h3>
                            <div class="mb-6">
                                <span class="text-4xl font-bold text-slate-900 dark:text-white">$65</span>
                                <span class="text-base text-slate-500 dark:text-slate-400">+</span>
                            </div>
                            <ul class="mb-8 space-y-3 text-left">
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Complex algorithm design</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Optimization problems</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">1-3 day delivery</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Multiple approaches</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="mt-0.5 h-4 w-4 shrink-0 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                                    <span class="text-sm text-slate-600 dark:text-slate-400">Performance optimization</span>
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
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Our Problem-Solving Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Systematic approach to solving algorithmic problems
                        efficiently and accurately.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-4">
                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">
                            <span class="text-lg font-bold">1</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Problem Analysis</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Understand the problem requirements, constraints, and expected time/space
                            complexity.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">
                            <span class="text-lg font-bold">2</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Algorithm Design</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Choose the most efficient algorithm approach and design the solution
                            strategy.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">
                            <span class="text-lg font-bold">3</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Implementation</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Code the solution with clean, optimized code and proper error handling.
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-50 text-purple-600 dark:bg-purple-950/40 dark:text-purple-400">
                            <span class="text-lg font-bold">4</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Testing & Analysis</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Test with various cases and provide complexity analysis with detailed
                            explanation.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Engaging Content Section -->
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-5xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600 dark:text-blue-400">Comprehensive Algorithm Guide</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                            Complete Guide to <span class="text-blue-600 dark:text-blue-400">Data Structures & Algorithms</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Essential knowledge for computer science
                            students, software engineers, and technical interview preparation</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Main Informative Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-6 flex items-start gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white">
                                    <span class="text-xl">📚</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Understanding Data Structures and Algorithms</h3>
                                    <p class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">The foundation of computer science and
                                        software engineering</p>
                                </div>
                            </div>

                            <div class="max-w-prose space-y-4">
                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    <span class="font-semibold text-slate-900 dark:text-white">Data structures and algorithms form the
                                        backbone of efficient software development.</span> A data structure is a specialized
                                    format for organizing, processing, retrieving, and storing data. Common data structures
                                    include arrays, linked lists, stacks, queues, trees, graphs, and hash tables. Each
                                    structure offers specific advantages for different use cases, making it crucial to
                                    understand when and how to apply them effectively.
                                </p>

                                <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                    An algorithm is a step-by-step procedure or formula for solving a problem. Algorithms
                                    operate on data structures to perform tasks such as searching, sorting, inserting,
                                    updating, and deleting data. The efficiency of an algorithm is measured using Big O
                                    notation, which describes how the algorithm's time or space requirements grow relative
                                    to the input size. Understanding algorithmic complexity is essential for writing
                                    performant code that scales with increasing data volumes.
                                </p>

                                <div class="rounded-xl border-l-4 border-indigo-500 bg-slate-50 p-6 dark:bg-slate-950">
                                    <h4 class="mb-3 text-base font-bold text-slate-900 dark:text-white">Why Learning Algorithms and Data
                                        Structures Matters</h4>
                                    <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-400">
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1 font-bold text-indigo-600 dark:text-indigo-400">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Technical Interview Success:</strong> Over 85% of software
                                                engineering interviews at top tech companies like Google, Amazon, Facebook,
                                                Microsoft, and Apple focus heavily on algorithm and data structure
                                                questions. Mastering these concepts is essential for landing high-paying
                                                software engineering positions.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1 font-bold text-indigo-600 dark:text-indigo-400">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Problem-Solving Skills:</strong> Learning algorithms teaches you
                                                how to break down complex problems into manageable steps, think
                                                systematically, and develop efficient solutions—skills that are valuable in
                                                any programming context.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1 font-bold text-indigo-600 dark:text-indigo-400">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Code Optimization:</strong> Understanding data structures and
                                                algorithms enables you to write more efficient code, reducing execution time
                                                and memory usage. This is critical for building scalable applications that
                                                can handle millions of users.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1 font-bold text-indigo-600 dark:text-indigo-400">•</span>
                                            <span><strong class="font-semibold text-slate-900 dark:text-white">Career Advancement:</strong> Software engineers with strong
                                                algorithmic skills typically earn higher salaries, with average starting
                                                salaries for algorithm-proficient developers exceeding $150,000 at major
                                                tech companies.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Time Complexity Deep Dive -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-6 flex items-start gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                    <span class="text-xl">⏱️</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Time Complexity Analysis with Big O Notation</h3>
                                    <p class="text-sm font-semibold text-purple-600 dark:text-purple-400">Essential for algorithm performance evaluation</p>
                                </div>
                            </div>

                            <p class="mb-6 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Big O notation is a mathematical notation used to describe the limiting behavior of an
                                algorithm when the input size approaches infinity. It provides an upper bound on the growth
                                rate of an algorithm's time or space requirements, allowing developers to compare algorithm
                                efficiency objectively. Understanding Big O notation is fundamental to algorithm analysis
                                and optimization.
                            </p>

                            <div class="mb-6 grid gap-4 md:grid-cols-3">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                                    <div class="mb-2 text-lg font-bold text-emerald-600 dark:text-emerald-400">O(1) - Constant Time</div>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">The algorithm's performance remains constant
                                        regardless of input size. This is the most efficient time complexity.</p>
                                    <div class="rounded-lg bg-emerald-50 p-3 dark:bg-emerald-950/40">
                                        <p class="mb-1 text-xs font-semibold text-emerald-900 dark:text-emerald-300">Examples:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Array element access by index</li>
                                            <li>• Hash table lookup/insertion</li>
                                            <li>• Stack push/pop operations</li>
                                            <li>• Queue enqueue/dequeue</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                                    <div class="mb-2 text-lg font-bold text-blue-600 dark:text-blue-400">O(log n) - Logarithmic</div>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">Performance grows logarithmically with input
                                        size. Very efficient for large datasets as it eliminates half the remaining
                                        elements each step.</p>
                                    <div class="rounded-lg bg-blue-50 p-3 dark:bg-blue-950/40">
                                        <p class="mb-1 text-xs font-semibold text-blue-900 dark:text-blue-300">Examples:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Binary search algorithms</li>
                                            <li>• Balanced binary tree operations</li>
                                            <li>• Divide and conquer algorithms</li>
                                            <li>• Finding elements in sorted arrays</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                                    <div class="mb-2 text-lg font-bold text-purple-600 dark:text-purple-400">O(n) - Linear Time</div>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">Performance grows linearly with input size.
                                        The algorithm must examine each element once.</p>
                                    <div class="rounded-lg bg-purple-50 p-3 dark:bg-purple-950/40">
                                        <p class="mb-1 text-xs font-semibold text-purple-900 dark:text-purple-300">Examples:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Linear search algorithms</li>
                                            <li>• Array/list traversal</li>
                                            <li>• Finding min/max in unsorted array</li>
                                            <li>• Counting algorithm occurrences</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                                    <div class="mb-2 text-lg font-bold text-amber-600 dark:text-amber-400">O(n log n) - Linearithmic</div>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">Common in efficient sorting algorithms.
                                        Optimal for comparison-based sorting with proven lower bound.</p>
                                    <div class="rounded-lg bg-amber-50 p-3 dark:bg-amber-950/40">
                                        <p class="mb-1 text-xs font-semibold text-amber-900 dark:text-amber-300">Examples:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Merge sort algorithm</li>
                                            <li>• Quick sort (average case)</li>
                                            <li>• Heap sort algorithm</li>
                                            <li>• Efficient sorting operations</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                                    <div class="mb-2 text-lg font-bold text-orange-600 dark:text-orange-400">O(n²) - Quadratic</div>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">Performance grows quadratically. Often
                                        involves nested loops. Should be optimized for large datasets.</p>
                                    <div class="rounded-lg bg-orange-50 p-3 dark:bg-orange-950/40">
                                        <p class="mb-1 text-xs font-semibold text-orange-900 dark:text-orange-300">Examples:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Bubble sort algorithm</li>
                                            <li>• Insertion sort algorithm</li>
                                            <li>• Selection sort algorithm</li>
                                            <li>• Nested loop iterations</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4 dark:border-slate-800 dark:bg-slate-950">
                                    <div class="mb-2 text-lg font-bold text-red-600 dark:text-red-400">O(2ⁿ) - Exponential</div>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">Performance doubles with each additional
                                        input. Often requires optimization techniques like memoization.</p>
                                    <div class="rounded-lg bg-red-50 p-3 dark:bg-red-950/40">
                                        <p class="mb-1 text-xs font-semibold text-red-900 dark:text-red-300">Examples:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Recursive Fibonacci (naive)</li>
                                            <li>• Power set generation</li>
                                            <li>• Backtracking algorithms</li>
                                            <li>• Brute force solutions</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-6 text-white dark:bg-slate-950">
                                <h4 class="mb-2 text-base font-semibold">Space Complexity Considerations</h4>
                                <p class="mb-3 text-sm text-slate-300">
                                    Beyond time complexity, space complexity measures the amount of memory an algorithm uses
                                    relative to input size. Trade-offs between time and space complexity are common—for
                                    example, dynamic programming uses additional memory (space) to achieve better time
                                    performance by storing previously computed results.
                                </p>
                                <p class="text-sm text-slate-300">
                                    Modern algorithm design often involves balancing these trade-offs based on specific
                                    constraints such as available memory, processing power, and performance requirements.
                                </p>
                            </div>
                        </div>

                        <!-- Common Algorithm Patterns -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-6 flex items-start gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">
                                    <span class="text-xl">🎯</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Common Algorithm Patterns and
                                        Problem-Solving Techniques</h3>
                                    <p class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">Master these patterns to solve
                                        thousands of algorithmic problems</p>
                                </div>
                            </div>

                            <p class="mb-6 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Algorithmic problem-solving often involves recognizing patterns and applying proven
                                techniques. Understanding these common patterns dramatically improves your ability to
                                approach new problems efficiently. Below are the most important algorithm patterns used in
                                technical interviews and competitive programming.
                            </p>

                            <div class="mb-6 grid gap-5 md:grid-cols-2">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h4 class="mb-3 text-base font-bold text-blue-900 dark:text-blue-300">Two Pointers Technique</h4>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        The two pointers technique uses two different positions in an array or sequence to
                                        solve problems efficiently. This pattern is particularly useful for problems
                                        involving sorted arrays, palindromes, or finding pairs with specific properties.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-sm font-semibold text-blue-900 dark:text-blue-300">Common Applications:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Finding pairs that sum to a target value</li>
                                            <li>• Removing duplicates from sorted arrays</li>
                                            <li>• Palindrome verification</li>
                                            <li>• Container with most water problems</li>
                                            <li>• Merge sorted arrays or linked lists</li>
                                        </ul>
                                    </div>
                                    <div class="rounded-lg bg-blue-600 p-3 text-xs text-white">
                                        <strong>Time Complexity:</strong> Typically O(n) instead of O(n²) with nested loops
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h4 class="mb-3 text-base font-bold text-purple-900 dark:text-purple-300">Sliding Window Pattern</h4>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        The sliding window technique maintains a subset of elements (window) that slides
                                        through the array. This pattern is ideal for problems involving contiguous subarrays
                                        or substrings with specific properties.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-sm font-semibold text-purple-900 dark:text-purple-300">Common Applications:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Maximum sum subarray of size K</li>
                                            <li>• Longest substring without repeating characters</li>
                                            <li>• Minimum window substring</li>
                                            <li>• Finding anagrams in strings</li>
                                            <li>• Longest substring with K distinct characters</li>
                                        </ul>
                                    </div>
                                    <div class="rounded-lg bg-purple-600 p-3 text-xs text-white">
                                        <strong>Time Complexity:</strong> O(n) by avoiding redundant computations
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h4 class="mb-3 text-base font-bold text-emerald-900 dark:text-emerald-300">Dynamic Programming (DP)</h4>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
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

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h4 class="mb-3 text-base font-bold text-orange-900 dark:text-orange-300">Backtracking</h4>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Backtracking explores all possible solutions by building candidates incrementally
                                        and abandoning candidates that fail to satisfy constraints. It's a refined brute
                                        force approach.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-sm font-semibold text-orange-900 dark:text-orange-300">Common Applications:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• N-Queens problem</li>
                                            <li>• Sudoku solver</li>
                                            <li>• Generating permutations and combinations</li>
                                            <li>• Subset sum problem</li>
                                            <li>• Word search in grids</li>
                                        </ul>
                                    </div>
                                    <div class="rounded-lg bg-orange-600 p-3 text-xs text-white">
                                        <strong>Time Complexity:</strong> O(2ⁿ) or O(n!) depending on problem
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h4 class="mb-3 text-base font-bold text-red-900 dark:text-red-300">Divide and Conquer</h4>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        This pattern divides a problem into smaller subproblems, solves them independently,
                                        and combines results. It's the foundation of many efficient algorithms.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-sm font-semibold text-red-900 dark:text-red-300">Common Applications:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Merge sort and quick sort</li>
                                            <li>• Binary search variations</li>
                                            <li>• Closest pair of points</li>
                                            <li>• Strassen's matrix multiplication</li>
                                            <li>• Maximum subarray problem (Kadane's)</li>
                                        </ul>
                                    </div>
                                    <div class="rounded-lg bg-red-600 p-3 text-xs text-white">
                                        <strong>Time Complexity:</strong> Often O(n log n) for sorting algorithms
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h4 class="mb-3 text-base font-bold text-indigo-900 dark:text-indigo-300">Greedy Algorithms</h4>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Greedy algorithms make locally optimal choices at each step with the hope of finding
                                        a global optimum. They work well for certain optimization problems.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-sm font-semibold text-indigo-900 dark:text-indigo-300">Common Applications:</p>
                                        <ul class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <li>• Activity selection problem</li>
                                            <li>• Huffman coding</li>
                                            <li>• Fractional knapsack</li>
                                            <li>• Minimum spanning tree (Kruskal, Prim)</li>
                                            <li>• Dijkstra's shortest path algorithm</li>
                                        </ul>
                                    </div>
                                    <div class="rounded-lg bg-indigo-600 p-3 text-xs text-white">
                                        <strong>Time Complexity:</strong> Often O(n log n) due to sorting step
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-6 text-white dark:bg-slate-950">
                                <h4 class="mb-3 text-base font-bold">Mastering Algorithm Patterns: A Structured Approach</h4>
                                <p class="mb-3 text-sm text-slate-300">
                                    To effectively learn algorithms, start with fundamental data structures (arrays, linked
                                    lists, stacks, queues, hash tables, trees). Then progressively tackle these patterns,
                                    starting with two pointers and sliding window, moving to recursion and backtracking, and
                                    finally mastering dynamic programming and graph algorithms.
                                </p>
                                <p class="text-sm text-slate-300">
                                    Practice is essential—aim to solve problems across different difficulty levels (easy,
                                    medium, hard) for each pattern. Platforms like LeetCode, HackerRank, and Codeforces
                                    provide curated problem sets organized by pattern, making systematic learning more
                                    efficient.
                                </p>
                            </div>
                        </div>

                        <!-- Data Structures Comprehensive Guide -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                            <div class="mb-6 flex items-start gap-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                                    <span class="text-xl">📚</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 dark:text-white">Essential Data Structures: Complete Reference Guide</h3>
                                    <p class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Understanding the building blocks of efficient algorithms</p>
                                </div>
                            </div>

                            <p class="mb-6 max-w-prose text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                Data structures are specialized formats for organizing and storing data in computer memory.
                                Choosing the right data structure is crucial for algorithm efficiency. Below is a
                                comprehensive overview of fundamental data structures, their time complexities, and optimal
                                use cases.
                            </p>

                            <div class="mb-6 grid gap-4 md:grid-cols-2">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-purple-900 dark:text-purple-300">
                                        <span>🔗</span> Arrays and Dynamic Arrays
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Arrays store elements in contiguous memory locations, providing constant-time access
                                        by index. Dynamic arrays (like ArrayList in Java or vector in C++) automatically
                                        resize when capacity is exceeded.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-purple-900 dark:text-purple-300">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <div class="flex justify-between">
                                                <span>Access by index:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search (unsorted):</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at end:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1) amortized</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at position:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Delete:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rounded-lg bg-purple-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Random access, iteration, when size is known,
                                        implementing other data structures
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-blue-900 dark:text-blue-300">
                                        <span>🗺️</span> Hash Tables (Hash Maps)
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Hash tables use a hash function to map keys to array indices, providing extremely
                                        fast lookups, insertions, and deletions. They handle collisions through chaining or
                                        open addressing.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-blue-900 dark:text-blue-300">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
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
                                    <div class="rounded-lg bg-blue-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Fast lookups, caching, counting frequencies, detecting
                                        duplicates, implementing sets
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-emerald-900 dark:text-emerald-300">
                                        <span>📚</span> Stacks and Queues
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        <strong class="font-semibold text-slate-900 dark:text-white">Stack (LIFO):</strong> Last-In-First-Out structure supporting push and pop.
                                        <strong class="font-semibold text-slate-900 dark:text-white">Queue (FIFO):</strong> First-In-First-Out structure supporting enqueue and
                                        dequeue operations.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-emerald-900 dark:text-emerald-300">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <div class="flex justify-between">
                                                <span>Push/Enqueue:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Pop/Dequeue:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Peek/Front:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rounded-lg bg-emerald-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Function call stack, undo operations (Stack); BFS, task
                                        scheduling (Queue)
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-amber-900 dark:text-amber-300">
                                        <span>🔗</span> Linked Lists
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Linked lists consist of nodes where each node contains data and a pointer to the
                                        next node. Singly linked lists point forward only; doubly linked lists have pointers
                                        in both directions.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-amber-900 dark:text-amber-300">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <div class="flex justify-between">
                                                <span>Access:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at head:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert at position:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Delete:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rounded-lg bg-amber-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Dynamic size, frequent insertions/deletions, implementing
                                        stacks/queues
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-indigo-900 dark:text-indigo-300">
                                        <span>🌳</span> Binary Search Trees (BST)
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Binary search trees maintain sorted order where left children are smaller and right
                                        children are larger than parent. Balanced BSTs (AVL, Red-Black) guarantee O(log n)
                                        operations.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-indigo-900 dark:text-indigo-300">Time Complexities (Balanced):
                                        </p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <div class="flex justify-between">
                                                <span>Search:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Delete:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Worst case (unbalanced):</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rounded-lg bg-indigo-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Sorted data, range queries, maintaining order, database
                                        indexing
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-red-900 dark:text-red-300">
                                        <span>📊</span> Heaps (Priority Queues)
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Heaps are complete binary trees satisfying the heap property: max-heap (parent ≥
                                        children) or min-heap (parent ≤ children). Implemented using arrays for efficient
                                        storage.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-red-900 dark:text-red-300">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <div class="flex justify-between">
                                                <span>Find min/max:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Insert:</span>
                                                <span class="font-semibold text-amber-600 dark:text-amber-400">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Extract min/max:</span>
                                                <span class="font-semibold text-amber-600 dark:text-amber-400">O(log n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Build heap:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rounded-lg bg-red-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Priority queues, heap sort, finding k largest/smallest
                                        elements
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-teal-900 dark:text-teal-300">
                                        <span>🕸️</span> Graphs
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Graphs represent relationships between objects using vertices (nodes) and edges
                                        (connections). Can be directed/undirected, weighted/unweighted. Represented as
                                        adjacency matrix or adjacency list.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-teal-900 dark:text-teal-300">Time Complexities (Adjacency
                                            List):</p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <div class="flex justify-between">
                                                <span>Add vertex:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Add edge:</span>
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-400">O(1)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Remove vertex:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(V + E)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Remove edge:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(E)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(V + E)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rounded-lg bg-teal-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Social networks, maps, dependency resolution, routing
                                        algorithms
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 dark:border-slate-800 dark:bg-slate-950">
                                    <h5 class="mb-2 flex items-center gap-2 text-base font-bold text-pink-900 dark:text-pink-300">
                                        <span>🌲</span> Tries (Prefix Trees)
                                    </h5>
                                    <p class="mb-3 text-sm text-slate-600 dark:text-slate-400">
                                        Tries store strings character by character in a tree structure, sharing common
                                        prefixes. Each path from root to leaf represents a word. Extremely efficient for
                                        string operations.
                                    </p>
                                    <div class="mb-3 rounded-lg bg-white p-3 dark:bg-slate-900">
                                        <p class="mb-2 text-xs font-semibold text-pink-900 dark:text-pink-300">Time Complexities:</p>
                                        <div class="space-y-1 text-xs text-slate-600 dark:text-slate-400">
                                            <div class="flex justify-between">
                                                <span>Insert word:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(m)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Search word:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(m)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Prefix search:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(m)</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>m = word length</span>
                                                <span class="font-semibold text-slate-500">-</span>
                                            </div>
                                            <div class="flex justify-between">
                                                <span>Space complexity:</span>
                                                <span class="font-semibold text-orange-600 dark:text-orange-400">O(n × m)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rounded-lg bg-pink-600 p-3 text-xs text-white">
                                        <strong>Best for:</strong> Autocomplete, spell checkers, IP routing, dictionary
                                        implementation
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-6 text-white dark:bg-slate-950">
                                <h4 class="mb-2 text-base font-semibold">Choosing the Right Data Structure</h4>
                                <p class="mb-3 text-sm text-slate-300">
                                    Selecting the appropriate data structure is fundamental to writing efficient algorithms.
                                    Consider these factors: required operations (insert, delete, search), frequency of
                                    operations, memory constraints, and whether data needs to maintain order. Hash tables
                                    excel at fast lookups but don't maintain order. Trees provide sorted access but with
                                    logarithmic complexity. Arrays offer constant-time access but expensive insertions.
                                </p>
                                <p class="text-sm text-slate-300">
                                    <strong>Need Data Structure Help?</strong> Our data structure experts provide professional assistance with choosing and implementing the right data structures for your projects. Whether you're struggling with complex data structure assignments, need help optimizing algorithm performance, or require expert guidance on data structure implementation, our experienced programmers are available 24/7. Get data structure help from experts who understand the nuances of arrays, linked lists, trees, graphs, hash tables, and advanced data structures. We provide detailed explanations, optimized code, and comprehensive analysis to help you master data structures and algorithms.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-slate-50 py-14 dark:bg-slate-950 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl dark:text-white">Student Success Stories</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg dark:text-slate-400">Real feedback from students who mastered algorithms with our expert help.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex items-center">
                            <div class="flex text-amber-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="mb-6 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Exceptional help with dynamic programming! The expert not only
                            solved my problem but explained the approach so clearly that I can now tackle similar problems
                            on my own."</p>
                        <div class="flex items-center">
                            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-purple-500 font-bold text-white">D</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">David L.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Computer Science Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex items-center">
                            <div class="flex text-amber-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="mb-6 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Amazing work on graph algorithms! The solution was optimized and
                            came with detailed complexity analysis. Perfect for my algorithms course project."</p>
                        <div class="flex items-center">
                            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-blue-500 font-bold text-white">L</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Lisa K.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex items-center">
                            <div class="flex text-amber-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="mb-6 text-sm leading-relaxed text-slate-600 dark:text-slate-400">"Brilliant help with competitive programming problems! Fast delivery
                            and multiple solution approaches. Really helped me improve my problem-solving skills."</p>
                        <div class="flex items-center">
                            <div class="mr-3 flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500 font-bold text-white">K</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900 dark:text-white">Kevin R.</div>
                                <div class="text-xs text-slate-500 dark:text-slate-400">Competitive Programming Enthusiast</div>
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

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center gap-2 bg-white px-6 py-2 rounded-full text-sm font-bold mb-6 shadow-lg border-2 border-purple-200">
                        <span class="text-2xl">🛡️</span>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">YOUR SUCCESS IS GUARANTEED</span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4">
                        Why <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">5,000+ Students</span> Trust Us
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
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
                <div class="max-w-4xl mx-auto">
                    <!-- Badge -->
                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white px-6 py-2 rounded-full text-sm font-bold mb-6 border border-white/30 animate-pulse-glow">
                        <span class="text-2xl">🎯</span>
                        JOIN 5,000+ SUCCESSFUL STUDENTS
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
                        <a href="{{ route('order') }}"
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
        @@keyframes float {
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

        @@keyframes float-delayed {
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

        @@keyframes bounce-slow {
            0%, 100% {
                transform: translateY(-5%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }
            50% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }

        @@keyframes pulse-slow {
            0%, 100% {
                opacity: 0.9;
            }
            50% {
                opacity: 0.7;
            }
        }

        @@keyframes pulse-glow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.5);
            }
            50% {
                box-shadow: 0 0 30px rgba(255, 255, 255, 0.8);
            }
        }

        @@keyframes gradient {
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

        @@keyframes blob {
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
