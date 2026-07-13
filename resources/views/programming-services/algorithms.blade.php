@extends('layouts.app')

@section('title', 'Algorithms Programming & Assignment Help | Expert DSA Assistance')
@section('description', 'Struggling with Sorting, Graph Traversals, or Dynamic Programming? Get expert algorithms assignment help from vetted USA programmers. 100% working code, Big-O proof.')

@section('content')
    <div class="min-h-screen">
        {{-- ===================================================
             CREATIVE HERO SECTION — DO NOT MODIFY
        =================================================== --}}
        <x-creative-hero :service="$service" />

        {{-- ===================================================
             SECTION 1 – TRUST BAR / SOCIAL PROOF
             SEO: Builds E-E-A-T immediately after hero
        =================================================== --}}
        <section class="border-y border-slate-100 bg-white py-5 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-4">
                    <div class="flex items-center gap-2.5">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">4.9/5</span>
                        <span class="text-xs text-slate-500 dark:text-slate-400">from 2,800+ DSA reviews</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">35</strong> DSA Experts Online</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">12,000+ Algorithmic Tasks Solved</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Optimized Time &amp; Space Complexity</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – DSA TOPICS COVERED
             SEO: Keyword coverage for search terms
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" id="dsa-topics" aria-labelledby="dsa-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Expert DSA Scope</p>
                    <h2 id="dsa-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Complete <span class="text-blue-600 dark:text-blue-400">Algorithms Assignment Help</span> Coverage
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        From basic data structures to advanced graph analysis, NP-hard problem approximations, and dynamic programming optimization — we write clean, verified code in any language.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-600 text-white text-xl">💾</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Linear Data Structures</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-3">Implementing and optimizing linear storage blocks. We provide assistance with arrays, dynamic arrays (vectors), singly/doubly linked lists, stacks, queues, and double-ended queues (deques).</p>
                        <span class="text-xs text-purple-600 font-semibold dark:text-purple-400">Stack &middot; Queue &middot; Linked Lists &middot; Vectors</span>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white text-xl">🌿</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Trees &amp; Non-Linear Structures</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-3">Writing tree manipulation routines. Includes Binary Trees, Binary Search Trees (BST), AVL Trees, Red-Black Trees, Heaps (Max/Min), Segment Trees, and Tries for string autocomplete tasks.</p>
                        <span class="text-xs text-blue-600 font-semibold dark:text-blue-400">AVL Tree &middot; Trie &middot; Segment Tree &middot; Heaps</span>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white text-xl">🌐</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Graph Theory &amp; Traversals</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-3">Solving complex network problems. We code breadth-first search (BFS), depth-first search (DFS), Dijkstra's shortest path, Bellman-Ford, Prim's/Kruskal's MST, and Topological Sorting.</p>
                        <span class="text-xs text-indigo-600 font-semibold dark:text-indigo-400">BFS/DFS &middot; Dijkstra &middot; MST &middot; Topological Sort</span>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-600 text-white text-xl">⚡</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Dynamic Programming (DP)</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-3">Tackling optimization problems using memoization and tabulation. We solve Knapsack (0/1 and fractional), LCS (Longest Common Subsequence), Matrix Chain Multiplication, and Edit Distance.</p>
                        <span class="text-xs text-emerald-600 font-semibold dark:text-emerald-400">Memoization &middot; Tabulation &middot; LCS &middot; Knapsack</span>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-600 text-white text-xl">🔢</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Sorting &amp; Searching</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-3">Implementing custom divide-and-conquer logic. Includes Merge Sort, Quick Sort, Heap Sort, Radix Sort, Binary Search on ranges, and custom comparator sorting functions.</p>
                        <span class="text-xs text-amber-600 font-semibold dark:text-amber-400">Quick Sort &middot; Merge Sort &middot; Binary Search</span>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-600 text-white text-xl">🔑</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Greedy &amp; Backtracking</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-3">Designing search configurations. Support for Huffman Coding, Activity Selection, N-Queens problem, Sudoku solvers, maze explorations, and subset sum finding algorithms.</p>
                        <span class="text-xs text-cyan-600 font-semibold dark:text-cyan-400">N-Queens &middot; Huffman Coding &middot; Backtracking</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – WHY STUDENTS PREFER US FOR ALGORITHMS HELP
             SEO: High EEAT block
        =================================================== --}}
        <section class="bg-slate-900 py-16 sm:py-20" aria-labelledby="why-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">FAANG Level Coders</span>
                    </div>
                    <h2 id="why-heading" class="text-4xl md:text-5xl font-black text-white leading-tight">
                        Why Choose Our <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Algorithms Programming Help</span>
                    </h2>
                    <p class="mt-5 text-base text-slate-400 max-w-2xl mx-auto">
                        Writing code that compiles is easy, but writing algorithms that optimize CPU cycles and memory usage requires expert-level CS theory. Here's what makes us the best choice.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-start">
                    <div class="space-y-5 text-slate-400 text-[15px] leading-relaxed">
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                                Vetted Computer Science Masters &amp; PhDs
                            </h3>
                            <p>Every algorithm assignment on our platform is handled by a computer science specialist holding a Masters or PhD. They understand formal proofs, graph structures, complexity boundaries, and numerical analyses, delivering professional academic work.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                                Big-O Complexity Validation Included
                            </h3>
                            <p>We don't just write functional code. We analyze and optimize its execution limits. Every assignment solution includes an inline block or supplementary documentation showing the exact Time Complexity and Space Complexity calculations in Big-O notation.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                                Exhaustive Test Case Validation
                            </h3>
                            <p>To guarantee full grading points, we test code against standard boundary inputs, edge cases (empty lists, single nodes, large values), and custom test suites (JUnit, PyTest, Google Test) to ensure robust performance.</p>
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div class="p-7 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10">
                            <h3 class="text-xl font-black text-white mb-6">What We Deliver with Every Project</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">✅</div>
                                    <div><p class="text-white font-bold text-sm">Optimal Time &amp; Space Complexity</p><p class="text-xs text-slate-500 mt-0.5">Code structured to minimize memory footprint and avoid infinite loops or memory leaks</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📝</div>
                                    <div><p class="text-white font-bold text-sm">Thoroughly Commented Code</p><p class="text-xs text-slate-500 mt-0.5">Explaining recurrences, base cases, state transitions, and pointers step-by-step</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">⚡</div>
                                    <div><p class="text-white font-bold text-sm">3-Hour Urgent Options</p><p class="text-xs text-slate-500 mt-0.5">Stuck on a dynamic programming final task? We can solve it in a few hours</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔄</div>
                                    <div><p class="text-white font-bold text-sm">Free Revisions for 72 Hours</p><p class="text-xs text-slate-500 mt-0.5">If your professor requests a tweak to class signatures or structures, we adjust it for free</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔒</div>
                                    <div><p class="text-white font-bold text-sm">100% Confidential</p><p class="text-xs text-slate-500 mt-0.5">Your identity, email, university details, and code files are kept strictly private</p></div>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}" class="group relative inline-flex w-full items-center justify-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-500 transition-all duration-300 shadow-lg hover:-translate-y-0.5 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                            <span class="relative z-10">Get Algorithms Assignment Help Now</span>
                            <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – LANGUAGES WE SUPPORT FOR DSA
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" id="languages" aria-labelledby="languages-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Language Coverage</p>
                    <h2 id="languages-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        DSA Help in Any Programming Language
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Whether your course mandates pointers, templates, static typing, or object-oriented design — we code algorithms in the exact language required by your syllabus.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                    <div class="flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center dark:border-slate-800 dark:bg-slate-950">
                        <span class="text-4xl">⚙️</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">C / C++ Help</span>
                        <span class="text-xs text-slate-500 font-semibold">Pointers &middot; Vectors &middot; Memory</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center dark:border-slate-800 dark:bg-slate-950">
                        <span class="text-4xl">☕</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Java Help</span>
                        <span class="text-xs text-slate-500 font-semibold">OOP &middot; Collections &middot; Generics</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center dark:border-slate-800 dark:bg-slate-950">
                        <span class="text-4xl">🐍</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Python Help</span>
                        <span class="text-xs text-slate-500 font-semibold">Clean Scripts &middot; Lists &middot; Graphs</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center dark:border-slate-800 dark:bg-slate-950">
                        <span class="text-4xl">🟨</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">JavaScript</span>
                        <span class="text-xs text-slate-500 font-semibold">Objects &middot; Arrays &middot; ES6+</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-slate-50 p-5 text-center dark:border-slate-800 dark:bg-slate-950">
                        <span class="text-4xl">🐹</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Go / Rust</span>
                        <span class="text-xs text-slate-500 font-semibold">Channels &middot; Safe Code</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – STEPS TO GET DSA ASSISTANCE
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="steps-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-purple-600 dark:text-purple-400">Simple Ordering</p>
                    <h2 id="steps-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Get Algorithm Code in 4 Steps
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 text-base font-black text-white shadow-md">1</div>
                        <div class="mb-3 text-2xl">📋</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Upload Guidelines</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Submit your sorting, searching, or graph traversal assignment specifications alongside the required language.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 text-base font-black text-white shadow-md">2</div>
                        <div class="mb-3 text-2xl">🎯</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Get Fair Pricing</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">A vetted computer science expert analyzes your algorithm complexity requirements and provides a custom quote.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 text-base font-black text-white shadow-md">3</div>
                        <div class="mb-3 text-2xl">💻</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Coder Designs Solution</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">The developer codes the logic, optimizes Big-O space/time bottlenecks, and tests against edge inputs.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-600 text-base font-black text-white shadow-md">4</div>
                        <div class="mb-3 text-2xl">🚀</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Review &amp; Verify</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Download the working source files, verify output execution, and ask for free code tweaks if required.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 6 – RISK-FREE GUARANTEES
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="guarantee-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Guarantees</p>
                    <h2 id="guarantee-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Guaranteed Algorithmic Precision
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-900/40 dark:bg-blue-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">💡</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Plagiarism Free</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every heap, graph, or sorting implementation is coded from scratch. We do not copy code from GitHub or StackOverflow, ensuring unique source files.</p>
                    </div>
                    <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-900/40 dark:bg-emerald-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-xl text-white">⏱️</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Deadline Compliance</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Late algorithm submittals fail automatically. We deliver optimized algorithms on time, even on tight 3-hour windows.</p>
                    </div>
                    <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6 dark:border-purple-900/40 dark:bg-purple-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-xl text-white">🔄</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">72-Hour Free Revisions</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">If your professor requests adding an auxiliary helper function or modifying custom types, we adjust it for free within 72 hours.</p>
                    </div>
                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-900/40 dark:bg-amber-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-600 text-xl text-white">💰</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Money-Back Refund</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">If our code fails compilation or does not deliver the correct complexity guarantees stated in your guidelines, you are covered by our refund policy.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-slate-700 text-xl text-white">🔒</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Confidential Service</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your details are kept private under full encryption. Your university, class code, and personal files are never shared.</p>
                    </div>
                    <div class="rounded-2xl border border-cyan-200 bg-cyan-50 p-6 dark:border-cyan-900/40 dark:bg-cyan-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-600 text-xl text-white">💬</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">24/7 Expert Live Chat</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Connect with customer support or your assigned computer science specialist directly through our system to ask questions at any stage.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – STUDENT DSA REVIEWS
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="reviews-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">Student Reviews</p>
                    <h2 id="reviews-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        What Students Say About Our Algorithms Help
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">C++ Graph DFS</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"I was stuck on a topological sort problem using C++ adjacency lists. The helper structured the recursion beautifully, avoided memory leaks, and added inline comments explaining the state array. Perfect execution!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Kevin L.</p><p class="text-xs text-slate-500">UC Berkeley</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Java AVL Tree</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"AVL tree double rotations were breaking my code during balancing. The DSA coder rewrote the rotation conditions and included a complete unit test suite validating left-right and right-left cases. Incredible work."</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Maria G.</p><p class="text-xs text-slate-500">UT Austin</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Python DP</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Had a dynamic programming knapsack variant problem that needed to compile within O(N*W) time bounds. The coder used tabulation to guarantee the time complexity and added an explanation file."</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Ryan T.</p><p class="text-xs text-slate-500">Georgia Tech</p></div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 8 – IN-DEPTH SEO CONTENT BLOCK
             SEO: Long-form keyword-rich educational material
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" aria-labelledby="content-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <div class="space-y-6">
                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h2 id="content-heading" class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">🎯</span>
                                What is Algorithms Programming Help?
                            </h2>
                            <div class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <p><strong class="text-slate-900 dark:text-white font-semibold">Algorithms programming help</strong> is a specialized service that supports computer science students and software developers in designing, implementing, and optimizing algorithmic code. Unlike general coding, algorithmic assignments require proving structural properties, handling memory pointer constraints, and choosing optimal data layouts to satisfy Time and Space complexity bounds.</p>
                                <p>Whether you are implementing binary trees, balancing AVL structures, tracing Dijkstra graph nodes, or configuring knapsack memoization states — our experts write mathematically precise, clean, commented code to help you learn and achieve high grades.</p>
                                <p>We cover all major algorithmic structures: linear layouts, trees, graphs, sorting, searching, greediness, dynamic programming, backtracking, and complexity classes (P vs NP).</p>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">🏫</span>
                                Common DSA Challenges We Resolve
                            </h3>
                            <ul class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Dynamic Programming Base Cases:</strong> Struggling to formulate transitions or avoid index overflow in memoization arrays? We write clean bottom-up or top-down DP states.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Graph Pointer Manipulation:</strong> Preventing infinite traversal loops, managing adjacency list sizes, or tracking visited sets in recursion.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Recursive Base &amp; Edge Cases:</strong> Ensuring tree traversal recursion terminates correctly on null leaves or single elements without stack overflows.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">⭐</span>
                                DSA Structures We Cover
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Linked List','Stack','Queue','Deque','Min Heap','Max Heap','BST','AVL Tree','Red-Black Tree','B-Tree','Segment Tree','Fenwick Tree','Trie','Adjacency List','Adjacency Matrix','Union Find','Disjoint Set','Hash Table','Skip List','Suffix Tree'] as $struct)
                                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-bold text-slate-700 dark:bg-slate-800 dark:text-slate-300">{{ $struct }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">📊</span>
                                Our Algorithms Track Record
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-blue-600 dark:text-blue-400">12,000+</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">DSA Tasks Solved</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-emerald-600 dark:text-emerald-400">98%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Delivery</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-amber-600 dark:text-amber-400">4.9★</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Review</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-purple-600 dark:text-purple-400">100%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Working Execution</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 9 – FAQ ACCORDION
             SEO: Targets rich SERP results
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="faq-heading">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">FAQs</p>
                    <h2 id="faq-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Algorithms Programming Help FAQs
                    </h2>
                </div>

                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">What languages do you support for data structures and algorithms assignments?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Our experts support all major academic and professional languages, including C, C++, Java, Python, Go, Rust, and JavaScript/TypeScript. We write using the idiomatic style requested by your class guidelines.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you provide Big-O runtime analyses alongside the code?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Analyzing complexity is a mandatory part of DSA assignments. We include the Time Complexity (e.g. O(N log N) for sorting) and Space Complexity calculations inside the code comments or inside a separate PDF/Markdown report as required by your rubric.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can your experts handle NP-hard or approximation algorithms?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Our computer science developers have advanced degrees and can code TSP approximations, vertex cover heuristics, linear programming formulations, or complex dynamic programming optimizations that go beyond standard algorithms.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the code compile and run out of the box?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We verify every codebase using standard compilers (g++, javac, python3) and provide input files or execution commands in a README setup guide so you can run the program locally with zero issues.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">How do you prevent plagiarism on DSA assignments?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Even though classic sorting or tree structures follow standard logic, we write custom class layouts, variable naming systems, helper structures, and coding paradigms specifically tailored for your assignment instructions. All files are checked to ensure absolute academic originality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 10 – FINAL CTA
             SEO: High converting closing block
        =================================================== --}}
        <section class="relative overflow-hidden bg-slate-900 py-16 sm:py-20">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                    <span class="flex h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">DSA Specialists Online Now</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                    Ready to Get Your<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Algorithm Assignments Optimized?</span>
                </h2>

                <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                    Get clean, bug-free, and thoroughly optimized algorithm files complete with Big-O complexity documentation. Submit your details for a free quote within 5 minutes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="relative z-10 text-sm">Get Algorithms Programming Help</span>
                        <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                    <span class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.3em]">Free Quote &middot; No Obligation</span>
                </div>

                <div class="mt-12 flex flex-wrap items-center justify-center gap-x-10 gap-y-5">
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">12,000+</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">DSA Tasks Solved</p>
                    </div>
                    <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">4.9/5</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</p>
                    </div>
                    <div class="hidden h-10 w-px bg-white/10 sm:block"></div>
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">98%</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Delivery</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             FAQ & SERVICE SCHEMA MARKUP
        =================================================== --}}
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "FAQPage",
          "mainEntity": [
            {
              "@@type": "Question",
              "name": "What languages do you support for data structures and algorithms assignments?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Our experts support all major academic and professional languages, including C, C++, Java, Python, Go, Rust, and JavaScript/TypeScript. We write using the idiomatic style requested by your class guidelines."
              }
            },
            {
              "@@type": "Question",
              "name": "Do you provide Big-O runtime analyses alongside the code?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Analyzing complexity is a mandatory part of DSA assignments. We include the Time Complexity and Space Complexity calculations inside the code comments or inside a separate PDF/Markdown report as required by your rubric."
              }
            },
            {
              "@@type": "Question",
              "name": "Can your experts handle NP-hard or approximation algorithms?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Our computer science developers have advanced degrees and can code TSP approximations, vertex cover heuristics, linear programming formulations, or complex dynamic programming optimizations."
              }
            },
            {
              "@@type": "Question",
              "name": "Will the code compile and run out of the box?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We verify every codebase using standard compilers (g++, javac, python3) and provide input files or execution commands in a README setup guide so you can run the program locally with zero issues."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Service",
          "name": "Algorithms Programming Help",
          "description": "Professional data structures and algorithms assignment help and coding project assistance. Expert developers available 24/7 for Dynamic Programming, Graph Traversals, Sorting, Trees, and Complexity Analysis.",
          "provider": {
            "@@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "serviceType": "Algorithms Programming Help",
          "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "15",
            "highPrice": "500"
          },
          "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "2800",
            "bestRating": "5"
          }
        }
        </script>
    </div>
@endsection
