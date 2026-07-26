@extends('layouts.app')

@section('title', 'Algorithms & DSA Help USA | Big-O & Dynamic Programming')
@section('description', 'Get expert algorithms programming help in the USA. Vetted US developers code Dynamic Programming, Graph Traversals, AVL Trees & Big-O proofs. 24/7 delivery.')

@section('content')
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950">
        {{-- ===================================================
             CREATIVE HERO SECTION
        =================================================== --}}
        <x-creative-hero 
            :service="$service" 
            title="Get Expert <span class='text-[#f16700] font-extrabold'>Algorithms Programming Help</span> in the USA"
            subtitle="Master Data Structures &amp; Algorithms, Dynamic Programming, Graph Traversals (BFS/DFS), Greedy Logic, and Big-O Complexity proofs. Get clean, compilable code delivered directly by vetted US software engineers — Plagiarism-free with 2-hour urgent delivery."
            :breadcrumbs="[
                ['label' => 'Home', 'url' => route('home')],
                ['label' => 'Programming Help', 'url' => route('services.programming.index')],
                ['label' => 'Algorithms Programming Help', 'url' => '']
            ]"
        />

        {{-- ===================================================
             SECTION 1 – TRUST BAR / EEAT SOCIAL PROOF
             SEO: Builds immediate E-E-A-T trust signals
        =================================================== --}}
        <section class="border-y border-slate-200 bg-white py-5 dark:border-slate-800 dark:bg-slate-900" aria-label="Trust signals">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-4 text-center sm:text-left">
                    <div class="flex items-center gap-2.5">
                        <div class="flex text-amber-400 text-sm">★★★★★</div>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">4.9/5 Rating</span>
                        <span class="text-xs text-slate-500 dark:text-slate-400">(2,800+ DSA reviews)</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2.5 w-2.5 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">
                            <strong class="text-slate-900 dark:text-white">35</strong> DSA Specialists Online
                        </span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Compilable Code Guarantee</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-800"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-purple-600 dark:text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5H7a2 2 00-2 2v12a2 2 002 2h10a2 2 002-2V7a2 2 00-2-2h-2M9 5a2 2 002 2h2a2 2 2 002-2M9 5a2 2 001 2-2h2a2 2 2 001 2 2" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Big-O Proof &amp; Unit Tested</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – HERO FEATURE BANNER & OVERVIEW WITH IMAGE
             SEO: Keyword inclusion & visual engagement
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 relative overflow-hidden">
            <div class="absolute top-1/2 left-0 w-72 h-72 bg-blue-500/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <div class="lg:col-span-6 space-y-7">
                        <div class="inline-flex items-center gap-2.5 px-4 py-2 rounded-full bg-gradient-to-r from-blue-500/10 via-purple-500/10 to-indigo-500/10 dark:from-blue-950/80 dark:to-purple-950/80 border border-blue-200 dark:border-blue-800/80 shadow-sm">
                            <span class="w-2.5 h-2.5 rounded-full bg-blue-600 animate-pulse"></span>
                            <span class="text-xs font-black uppercase tracking-widest text-blue-700 dark:text-blue-300">Top-Rated Algorithms Help USA</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 dark:text-white tracking-tight leading-[1.15]">
                            Master <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">Data Structures &amp; Algorithms</span> with US Engineers
                        </h2>

                        <p class="text-base sm:text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                            Whether you need help implementing Dijkstra's shortest path, optimizing 0/1 Knapsack dynamic programming tables, balancing AVL tree nodes, or proving Big-O time complexity — we provide production-grade, compilable DSA code designed for US university standards in C++, Java, and Python.
                        </p>

                        {{-- Feature Checklist --}}
                        <div class="space-y-3 pt-1">
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Custom Source Code in C++, Java, or Python (Optimized for O(N log N))</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Formal Big-O Time &amp; Space Complexity proof included</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm font-bold text-slate-800 dark:text-slate-200">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 dark:bg-emerald-950/80 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">✓</div>
                                <span>Step-by-step README.md guide &amp; boundary test case verification</span>
                            </div>
                        </div>

                        {{-- 4 Metric Cards Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            {{-- Card 1: Big-O Proof --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-blue-100 dark:border-slate-700/80 hover:border-blue-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-blue-600/10 dark:bg-blue-500/20 border border-blue-500/30 text-blue-600 dark:text-blue-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    ⚡
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Big-O Proof</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Time &amp; Space Analyzed</p>
                                </div>
                            </div>

                            {{-- Card 2: Unit Tested --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-purple-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-purple-100 dark:border-slate-700/80 hover:border-purple-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-purple-600/10 dark:bg-purple-500/20 border border-purple-500/30 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    🧪
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Boundary Tests</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Edge Cases Handled</p>
                                </div>
                            </div>

                            {{-- Card 3: Dynamic Programming --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-emerald-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-emerald-100 dark:border-slate-700/80 hover:border-emerald-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-emerald-600/10 dark:bg-emerald-500/20 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    🧠
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">Optimal DP</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Memoized &amp; Tabulated</p>
                                </div>
                            </div>

                            {{-- Card 4: Urgent Delivery --}}
                            <div class="p-5 rounded-2xl bg-gradient-to-br from-indigo-50/80 to-slate-50 dark:from-slate-800/80 dark:to-slate-900/80 border border-indigo-100 dark:border-slate-700/80 hover:border-indigo-500/60 transition-all duration-300 shadow-sm hover:shadow-md hover:-translate-y-0.5 group flex items-start gap-4">
                                <div class="w-11 h-11 rounded-xl bg-indigo-600/10 dark:bg-indigo-500/20 border border-indigo-500/30 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    ⏱️
                                </div>
                                <div>
                                    <h3 class="text-base sm:text-lg font-black text-slate-900 dark:text-white tracking-tight">2–48 Hours</h3>
                                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 mt-0.5">Urgent Delivery Option</p>
                                </div>
                            </div>
                        </div>

                        {{-- CTA Buttons --}}
                        <div class="pt-3 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                            <a href="{{ route('order') }}" class="group relative inline-flex items-center justify-center gap-2 px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-black text-sm rounded-2xl transition-all shadow-lg shadow-blue-600/25 hover:-translate-y-0.5">
                                <span>Get Algorithms Programming Help</span>
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="#algorithms-code-preview" class="inline-flex items-center justify-center gap-2 px-6 py-4 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-800 dark:text-slate-200 font-bold text-sm rounded-2xl transition-all border border-slate-200 dark:border-slate-700">
                                <span>View Code Sample</span>
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                        </div>
                    </div>

                    {{-- Image Container (Right Column) --}}
                    <div class="lg:col-span-6">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-800 bg-slate-950 p-2.5 group">
                            {{-- Top Floating Badge --}}
                            <div class="absolute top-6 left-6 z-20 px-3.5 py-1.5 rounded-full bg-slate-900/90 backdrop-blur-md border border-slate-700 text-white flex items-center gap-2 shadow-lg">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-xs font-bold">Compilable Code Guarantee</span>
                            </div>

                            <img src="{{ asset('images/algorithms_hero_banner.png') }}" 
                                 alt="Top-Rated Algorithms Programming Help USA - Data Structures, Graphs & Dynamic Programming" 
                                 class="w-full h-auto rounded-2xl object-cover transform group-hover:scale-105 transition-transform duration-700" 
                                 loading="eager" />
                                 
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-transparent to-transparent"></div>
                            
                            {{-- Bottom Floating Control Bar --}}
                            <div class="absolute bottom-5 left-5 right-5 p-4 rounded-2xl bg-slate-900/90 backdrop-blur-md border border-slate-800 text-white flex items-center justify-between shadow-xl">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-purple-600/30 border border-purple-500/50 flex items-center justify-center text-xl">🌐</div>
                                    <div>
                                        <p class="text-xs font-bold text-slate-100">Dijkstra &amp; Graph Traversals</p>
                                        <p class="text-[11px] text-slate-400">O(E log V) Time &amp; O(V) Space Proof</p>
                                    </div>
                                </div>
                                <span class="px-3 py-1 rounded-lg bg-emerald-500/20 text-emerald-400 text-[11px] font-black uppercase tracking-wider border border-emerald-500/30">Verified</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – INTERACTIVE CODE & EXECUTION PREVIEW
             SEO: High engagement & interactive proof
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-slate-900 text-white border-b border-slate-800" id="algorithms-code-preview">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-xs font-black uppercase tracking-widest text-purple-400">Interactive IDE Preview</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-white mt-2">
                        Production-Grade <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-indigo-400">Algorithm Code Quality</span>
                    </h2>
                    <p class="text-sm text-slate-400 mt-2">
                        We deliver clean, compilable, optimized algorithms code files complete with formal Big-O proofs, C++ STL / Java Collections, and unit tests.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center" x-data="{ activeTab: 'dijkstra' }">
                    {{-- IDE Window Column --}}
                    <div class="lg:col-span-7 rounded-2xl overflow-hidden border border-slate-800 bg-slate-950 shadow-2xl">
                        {{-- Editor Top Bar --}}
                        <div class="px-4 py-3 bg-slate-900 border-b border-slate-800 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                                <span class="ml-2 text-xs font-mono text-slate-400">CLion / VS Code — C++20 &middot; O(E log V)</span>
                            </div>
                            
                            {{-- Code Tabs --}}
                            <div class="flex gap-1 text-xs">
                                <button @click="activeTab = 'dijkstra'" :class="activeTab === 'dijkstra' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    Dijkstra.cpp
                                </button>
                                <button @click="activeTab = 'test'" :class="activeTab === 'test' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    test_dijkstra.cpp
                                </button>
                                <button @click="activeTab = 'proof'" :class="activeTab === 'proof' ? 'bg-blue-600 text-white font-bold' : 'bg-slate-800 text-slate-400 hover:text-white'" class="px-3 py-1 rounded-lg transition-colors">
                                    Complexity_Proof.md
                                </button>
                            </div>
                        </div>

                        {{-- Code Panels --}}
                        <div class="p-5 font-mono text-xs leading-relaxed overflow-x-auto min-h-[300px]">
                            {{-- Tab 1: Dijkstra.cpp --}}
                            <div x-show="activeTab === 'dijkstra'" class="space-y-1 text-slate-300">
                                <p><span class="text-purple-400">#include</span> <span class="text-emerald-400">&lt;vector&gt;</span></p>
                                <p><span class="text-purple-400">#include</span> <span class="text-emerald-400">&lt;queue&gt;</span></p>
                                <p><span class="text-purple-400">using namespace</span> std;</p>
                                <br>
                                <p><span class="text-purple-400">typedef</span> pair&lt;<span class="text-blue-300">int</span>, <span class="text-blue-300">int</span>&gt; pii;</p>
                                <br>
                                <p>vector&lt;<span class="text-blue-300">int</span>&gt; <span class="text-blue-300">dijkstra</span>(<span class="text-blue-300">int</span> V, vector&lt;vector&lt;pii&gt;&gt;&amp; adj, <span class="text-blue-300">int</span> src) {</p>
                                <p class="pl-4">priority_queue&lt;pii, vector&lt;pii&gt;, greater&lt;pii&gt;&gt; pq;</p>
                                <p class="pl-4">vector&lt;<span class="text-blue-300">int</span>&gt; dist(V, 1e9);</p>
                                <p class="pl-4">dist[src] = 0;</p>
                                <p class="pl-4">pq.push({0, src});</p>
                                <br>
                                <p class="pl-4"><span class="text-purple-400">while</span> (!pq.empty()) {</p>
                                <p class="pl-8"><span class="text-purple-400">auto</span> [d, u] = pq.top(); pq.pop();</p>
                                <p class="pl-8"><span class="text-purple-400">if</span> (d &gt; dist[u]) <span class="text-purple-400">continue</span>;</p>
                                <p class="pl-8"><span class="text-purple-400">for</span> (<span class="text-purple-400">auto</span>&amp; [v, weight] : adj[u]) {</p>
                                <p class="pl-12"><span class="text-purple-400">if</span> (dist[u] + weight &lt; dist[v]) {</p>
                                <p class="pl-16">dist[v] = dist[u] + weight;</p>
                                <p class="pl-16">pq.push({dist[v], v});</p>
                                <p class="pl-12">}</p>
                                <p class="pl-8">}</p>
                                <p class="pl-4">}</p>
                                <p class="pl-4"><span class="text-purple-400">return</span> dist;</p>
                                <p>}</p>
                            </div>

                            {{-- Tab 2: test_dijkstra.cpp --}}
                            <div x-show="activeTab === 'test'" class="space-y-1 text-slate-300" x-cloak>
                                <p><span class="text-purple-400">#include</span> <span class="text-emerald-400">&lt;gtest/gtest.h&gt;</span></p>
                                <p><span class="text-purple-400">#include</span> <span class="text-emerald-400">"Dijkstra.cpp"</span></p>
                                <br>
                                <p><span class="text-blue-300">TEST</span>(DijkstraTest, ShortestPathCorrectness) {</p>
                                <p class="pl-4"><span class="text-blue-300">int</span> V = 5;</p>
                                <p class="pl-4">vector&lt;vector&lt;pii&gt;&gt; adj(V);</p>
                                <p class="pl-4">adj[0].push_back({1, 4}); adj[0].push_back({2, 1});</p>
                                <p class="pl-4">adj[2].push_back({1, 2});</p>
                                <br>
                                <p class="pl-4"><span class="text-purple-400">auto</span> dist = dijkstra(V, adj, 0);</p>
                                <p class="pl-4"><span class="text-blue-300">EXPECT_EQ</span>(dist[1], 3);</p>
                                <p class="pl-4"><span class="text-blue-300">EXPECT_EQ</span>(dist[2], 1);</p>
                                <p>}</p>
                            </div>

                            {{-- Tab 3: Complexity_Proof.md --}}
                            <div x-show="activeTab === 'proof'" class="space-y-1 text-slate-300" x-cloak>
                                <p><span class="text-blue-300"># Formal Complexity Proof</span></p>
                                <br>
                                <p><span class="text-emerald-400">## Time Complexity Analysis</span></p>
                                <p>- Priority Queue inserts: O(E log V) total heap operations.</p>
                                <p>- Each vertex extracted once: O(V log V).</p>
                                <p>- Total Time: **O((V + E) log V)** = **O(E log V)** for connected graphs.</p>
                                <br>
                                <p><span class="text-emerald-400">## Space Complexity Analysis</span></p>
                                <p>- Distance array: O(V)</p>
                                <p>- Priority Queue size: O(E)</p>
                                <p>- Total Space: **O(V + E)** auxiliary memory.</p>
                            </div>
                        </div>

                        {{-- Execution Bar --}}
                        <div class="px-5 py-3 bg-slate-900 border-t border-slate-800 flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-emerald-400 font-mono font-bold">GTEST PASSED in 0.04s</span>
                            </div>
                            <span class="text-slate-400 font-mono">0 Memory Leaks &middot; Big-O Verified</span>
                        </div>
                    </div>

                    {{-- Image Column --}}
                    <div class="lg:col-span-5 space-y-6">
                        <div class="rounded-2xl overflow-hidden border border-slate-800 shadow-xl bg-slate-950 p-2">
                            <img src="{{ asset('images/algorithms_hero_banner.png') }}" 
                                 alt="CLion Data Structures and Algorithms Code Execution and GTest Passing Tests" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – ECOSYSTEM & TOPICS COVERED (MINIMAL & COMPACT)
             SEO: High-density keyword coverage for DSA subtopics
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Complete DSA Scope</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        Algorithms Programming &amp; Assignment Help Coverage
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Full-spectrum DSA support: from sorting divide-and-conquer to NP-hard approximations.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/algorithms_ecosystem_map.png') }}" 
                                 alt="Algorithms Ecosystem Architecture Map" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                        </div>
                    </div>

                    {{-- Compact Micro-Badges Grid Column --}}
                    <div class="lg:col-span-7">
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            @foreach([
                                ['Dynamic Programming', '⚡', 'Memoization & Tabulation'],
                                ['Graph Traversals', '🌐', 'BFS, DFS & Dijkstra'],
                                ['Trees & Heaps', '🌿', 'AVL, Red-Black & Tries'],
                                ['Sorting Algorithms', '🔢', 'QuickSort & MergeSort'],
                                ['Greedy Logic', '🔑', 'Huffman & Kruskal MST'],
                                ['Linear Structures', '💾', 'Stacks, Queues & Lists'],
                                ['Backtracking', '🧩', 'N-Queens & Sudoku'],
                                ['String Matching', '🔤', 'KMP & Rabin-Karp'],
                                ['Big-O Proofs', '📊', 'Time & Space Analysis']
                            ] as [$name, $icon, $desc])
                            <div class="p-3 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 flex items-center gap-3 hover:border-blue-500/50 transition-colors shadow-sm">
                                <div class="w-9 h-9 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-lg shrink-0">
                                    {{ $icon }}
                                </div>
                                <div class="min-w-0">
                                    <div class="text-xs font-bold text-slate-900 dark:text-white truncate">{{ $name }}</div>
                                    <div class="text-[10px] text-slate-500 dark:text-slate-400 truncate">{{ $desc }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Full-Width SEO Tag Cloud Card --}}
                <div class="mt-6 p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm">
                    <h3 class="mb-4 flex items-center gap-3 text-lg font-black text-slate-900 dark:text-white">
                        <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white text-base">⭐</span>
                        Algorithms Technologies &amp; Topics We Cover
                    </h3>
                    <div class="flex flex-wrap gap-2">
                        @foreach(['Data Structures','Dynamic Programming','Graph Theory','Dijkstra Algorithm','BFS / DFS','AVL Trees','Red-Black Trees','Heaps & Priority Queues','Merge Sort','Quick Sort','Binary Search','Greedy Algorithms','Kruskal & Prim MST','Backtracking','N-Queens','Knapsack 0/1','Big-O Complexity','C++ STL','Java Collections','Python Data Structures','Google Test','JUnit 5'] as $tech)
                        <span class="rounded-full bg-slate-100 dark:bg-slate-800 border border-slate-200/60 dark:border-slate-700/60 px-3.5 py-1.5 text-xs font-bold text-slate-700 dark:text-slate-300 hover:border-purple-500/50 transition-colors shadow-2xs">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – TYPES OF ALGORITHMS ASSIGNMENTS TACKLED
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-white dark:bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Tailored Solutions</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2">
                        Types of <span class="text-indigo-600 dark:text-indigo-400">Algorithms Assignment Help</span> We Provide in USA
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3">
                        Whether you are stuck on a 2-hour homework submission or a semester-long capstone algorithm optimization project, we provide targeted solutions.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-blue-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-950/60 border border-blue-200 dark:border-blue-800 flex items-center justify-center text-2xl mb-4">💾</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Linear Data Structures</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Implementing and optimizing linear storage blocks. We provide assistance with arrays, dynamic arrays (vectors), singly/doubly linked lists, stacks, queues, and double-ended queues (deques).</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Stack &amp; Queue pointers</li>
                            <li>• Doubly linked list nodes</li>
                            <li>• Circular queue buffers</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-purple-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-purple-100 dark:bg-purple-950/60 border border-purple-200 dark:border-purple-800 flex items-center justify-center text-2xl mb-4">🌿</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Trees &amp; Non-Linear Structures</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Writing tree manipulation routines. Includes Binary Trees, Binary Search Trees (BST), AVL Trees, Red-Black Trees, Heaps (Max/Min), Segment Trees, and Tries.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• AVL Tree rotations</li>
                            <li>• Red-Black rebalancing</li>
                            <li>• Trie string autocomplete</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-indigo-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-indigo-100 dark:bg-indigo-950/60 border border-indigo-200 dark:border-indigo-800 flex items-center justify-center text-2xl mb-4">🌐</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Graph Theory &amp; Traversals</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Solving complex network problems. We code breadth-first search (BFS), depth-first search (DFS), Dijkstra's shortest path, Bellman-Ford, Prim's/Kruskal's MST, and Topological Sorting.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• BFS &amp; DFS traversals</li>
                            <li>• Dijkstra shortest path</li>
                            <li>• Prim &amp; Kruskal MST</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-emerald-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/60 border border-emerald-200 dark:border-emerald-800 flex items-center justify-center text-2xl mb-4">⚡</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Dynamic Programming (DP)</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Tackling optimization problems using memoization and tabulation. We solve Knapsack (0/1 and fractional), LCS (Longest Common Subsequence), Matrix Chain Multiplication, and Edit Distance.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• Top-down memoization</li>
                            <li>• Bottom-up tabulation</li>
                            <li>• 0/1 Knapsack &amp; LCS</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-amber-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-950/60 border border-amber-200 dark:border-amber-800 flex items-center justify-center text-2xl mb-4">🔢</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Sorting &amp; Searching</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Implementing custom divide-and-conquer logic. Includes Merge Sort, Quick Sort, Heap Sort, Radix Sort, Binary Search on ranges, and custom comparator sorting functions.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• QuickSort &amp; MergeSort</li>
                            <li>• Binary search on answer space</li>
                            <li>• Custom comparator sorting</li>
                        </ul>
                    </article>

                    <article class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/80 shadow-sm flex flex-col justify-between hover:border-cyan-500/50 transition-colors">
                        <div>
                            <div class="w-12 h-12 rounded-xl bg-cyan-100 dark:bg-cyan-950/60 border border-cyan-200 dark:border-cyan-800 flex items-center justify-center text-2xl mb-4">🔑</div>
                            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Greedy &amp; Backtracking</h3>
                            <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed mb-4">Designing search configurations. Support for Huffman Coding, Activity Selection, N-Queens problem, Sudoku solvers, maze explorations, and subset sum finding algorithms.</p>
                        </div>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-200 dark:border-slate-700 pt-4">
                            <li>• N-Queens state space search</li>
                            <li>• Huffman prefix coding</li>
                            <li>• Activity selection greedy choice</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 6 – MATRIX TABLE: TIME COMPLEXITY & LANGUAGES
             SEO: High informational value
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-10">
                    <span class="text-xs font-black uppercase tracking-widest text-emerald-600 dark:text-emerald-400">Complexity Matrix</span>
                    <h2 class="text-3xl font-black text-slate-900 dark:text-white mt-2">
                        Algorithm Time &amp; Space Complexity Reference
                    </h2>
                </div>

                <div class="overflow-x-auto rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 shadow-sm">
                    <table class="w-full text-left border-collapse text-xs sm:text-sm">
                        <thead>
                            <tr class="bg-slate-100 dark:bg-slate-800/80 text-slate-900 dark:text-white border-b border-slate-200 dark:border-slate-700">
                                <th class="p-4 font-bold">Algorithm Class</th>
                                <th class="p-4 font-bold">Best Case Time</th>
                                <th class="p-4 font-bold">Average / Worst Time</th>
                                <th class="p-4 font-bold">Space Complexity</th>
                                <th class="p-4 font-bold">Supported Languages</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800 text-slate-600 dark:text-slate-300">
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">QuickSort / MergeSort</td>
                                <td class="p-4 text-emerald-600 dark:text-emerald-400 font-mono">O(N log N)</td>
                                <td class="p-4 font-mono">O(N log N)</td>
                                <td class="p-4 font-mono">O(log N) / O(N)</td>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">C++, Java, Python, C#</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">Dijkstra Shortest Path</td>
                                <td class="p-4 text-emerald-600 dark:text-emerald-400 font-mono">O(E log V)</td>
                                <td class="p-4 font-mono">O(E log V)</td>
                                <td class="p-4 font-mono">O(V + E)</td>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">C++, Java, Python</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">AVL Tree Search/Insert</td>
                                <td class="p-4 text-emerald-600 dark:text-emerald-400 font-mono">O(log N)</td>
                                <td class="p-4 font-mono">O(log N)</td>
                                <td class="p-4 font-mono">O(N)</td>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">C++, Java, Python, C</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">0/1 Knapsack (DP)</td>
                                <td class="p-4 text-emerald-600 dark:text-emerald-400 font-mono">O(N &times; W)</td>
                                <td class="p-4 font-mono">O(N &times; W)</td>
                                <td class="p-4 font-mono">O(W) optimized</td>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">C++, Java, Python, Rust</td>
                            </tr>
                            <tr>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">BFS / DFS Graph Search</td>
                                <td class="p-4 text-emerald-600 dark:text-emerald-400 font-mono">O(V + E)</td>
                                <td class="p-4 font-mono">O(V + E)</td>
                                <td class="p-4 font-mono">O(V)</td>
                                <td class="p-4 font-bold text-slate-900 dark:text-white">C++, Java, Python, Go</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – MEET OUR DSA EXPERTS (VERIFIED CREDENTIALS - MINIMAL & COMPACT)
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-8">
                    <span class="text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Verified Credentials</span>
                    <h2 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white mt-1">
                        Meet Our Vetted US Algorithm Experts
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 mt-1.5">
                        Competitive Programmers, FAANG Software Engineers, and CS PhDs averaging 10+ years of experience.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                    {{-- Image Column --}}
                    <div class="lg:col-span-5">
                        <div class="relative rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-lg bg-slate-950 p-2">
                            <img src="{{ asset('images/algorithms_expert_tutor.png') }}" 
                                 alt="Senior Algorithms Programming Expert Conducting Code Review" 
                                 class="w-full h-auto rounded-xl object-cover" 
                                 loading="lazy" />
                            <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-slate-900/90 backdrop-blur-md border border-slate-700 text-white flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                    <span class="font-bold">35 DSA Specialists Online</span>
                                </div>
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">100% US Engineers</span>
                            </div>
                        </div>
                    </div>

                    {{-- 3 Compact Expert Cards Column --}}
                    <div class="lg:col-span-7 space-y-3">
                        @foreach([
                            ['Dr. David Sterling', 'DS', 'bg-blue-600', 'PhD Computer Science &middot; Ex-Google Senior Staff', '2,100+ Projects', '4.99', ['Graph Algorithms', 'Dynamic Programming', 'C++']],
                            ['Prof. Raymond Vance', 'RV', 'bg-purple-600', 'Algorithms Professor &middot; Competitive Programmer', '1,850+ Projects', '4.98', ['Trees & Heaps', 'Big-O Proofs', 'Java']],
                            ['Elena Rostova', 'ER', 'bg-indigo-600', 'Data Structures &amp; Complexity Specialist', '1,420+ Projects', '4.97', ['Sorting & Searching', 'Greedy Logic', 'Python']]
                        ] as [$name, $initials, $bg, $title, $projects, $rating, $tags])
                        <div class="p-4 rounded-xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200/80 dark:border-slate-700/80 hover:border-blue-500/50 transition-colors shadow-sm flex items-center gap-4">
                            <div class="relative shrink-0">
                                <div class="w-11 h-11 rounded-full {{ $bg }} text-white font-bold text-sm flex items-center justify-center shadow-md">
                                    {{ $initials }}
                                </div>
                                <span class="absolute bottom-0 right-0 w-3 h-3 rounded-full bg-emerald-500 border-2 border-white dark:border-slate-800"></span>
                            </div>
                            <div class="min-w-0 flex-1">
                                <div class="flex items-center justify-between gap-2">
                                    <h3 class="text-sm font-bold text-slate-900 dark:text-white truncate">{{ $name }}</h3>
                                    <div class="flex items-center gap-1 text-xs text-amber-500 font-bold shrink-0">
                                        <span>★</span>
                                        <span>{{ $rating }}</span>
                                        <span class="text-[10px] font-normal text-slate-500">({{ $projects }})</span>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-500 dark:text-slate-400 mt-0.5 truncate">{!! $title !!}</p>
                                <div class="flex flex-wrap gap-1.5 mt-2">
                                    @foreach($tags as $tag)
                                    <span class="px-2 py-0.5 rounded bg-slate-200/70 dark:bg-slate-700/70 text-[10px] font-semibold text-slate-700 dark:text-slate-300">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 8 – HOW OUR ALGORITHMS HELP WORKS (HOMEPAGE STAGGERED MATCH)
        =================================================== --}}
        <section class="py-14 sm:py-20 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800 relative overflow-hidden">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-600 dark:text-blue-400 mb-3">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span class="text-xs font-black uppercase tracking-wider">Streamlined Process</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 dark:text-white tracking-tight">
                        How Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 dark:from-blue-400 dark:via-purple-400 dark:to-indigo-400">Algorithms Help</span> Works
                    </h2>
                    <p class="text-base text-slate-600 dark:text-slate-400 mt-3 max-w-2xl mx-auto">
                        We've streamlined algorithm programming assistance into a 4-step collaborative workflow from initial upload to compilable delivery.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    {{-- Step 1 --}}
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">01</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-blue-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">📝</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Upload Brief</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                Share your DSA assignment specifications, problem statements, target language (C++, Java, Python), and deadline.
                            </p>
                        </div>
                    </div>

                    {{-- Step 2 (Staggered Down) --}}
                    <div class="group relative lg:mt-16">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-purple-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">🎯</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Expert Match</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                We match your task with a vetted US DSA specialist (Graph Algorithms, Dynamic Programming, or Trees).
                            </p>
                        </div>
                    </div>

                    {{-- Step 3 --}}
                    <div class="group relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-blue-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">⚡</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Code &amp; Prove</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                Your developer writes optimal algorithmic code, proves Big-O complexity, and runs unit tests.
                            </p>
                        </div>
                    </div>

                    {{-- Step 4 (Staggered Down) --}}
                    <div class="group relative lg:mt-16">
                        <div class="absolute inset-0 bg-gradient-to-r from-emerald-600 to-teal-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-25 transition-opacity duration-500"></div>
                        <div class="relative h-full bg-white dark:bg-slate-900/90 backdrop-blur-xl border border-slate-200 dark:border-slate-800 rounded-3xl p-7 overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-xl">
                            <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-slate-100 dark:text-white/[0.04] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">04</div>
                            <div class="w-14 h-14 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg shadow-emerald-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <span class="text-2xl">✅</span>
                            </div>
                            <h3 class="text-xl font-black text-slate-900 dark:text-white mb-3 relative z-10">Deliver &amp; Review</h3>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-400 leading-relaxed relative z-10">
                                Download your project zip with Big-O documentation, run test drivers, and request free edits.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 9 – STUDENT REVIEWS & TESTIMONIAL CARDS
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="text-xs font-black uppercase tracking-widest text-amber-500">Student Reviews</span>
                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2">
                        What Students Say About Our <span class="text-blue-600 dark:text-blue-400">Algorithms Programming Help</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "I was completely stuck on a 0/1 Knapsack dynamic programming problem. The expert provided memoized and bottom-up tabulated C++ code with full Big-O proof documentation."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Alexander C.</span>
                            <span class="text-slate-500">CMU &middot; Dynamic Programming</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "Had a complex graph traversal assignment requiring Dijkstra's algorithm with priority queues in Java. The solution compiled flawlessly and passed all edge test cases."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Maya L.</span>
                            <span class="text-slate-500">UC Berkeley &middot; Graph Traversals</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700">
                        <div class="flex text-amber-400 text-sm mb-3">★★★★★</div>
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 italic mb-4">
                            "My assignment required implementing self-balancing AVL Tree rotations in Python. The developer wrote clean pythonic code with docstrings and passing Pytest assertions."
                        </p>
                        <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex justify-between items-center text-xs">
                            <span class="font-bold text-slate-900 dark:text-white">Jason K.</span>
                            <span class="text-slate-500">MIT &middot; AVL Trees</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 10 – IN-DEPTH EDUCATIONAL CONTENT (MINIMAL & COMPACT)
             SEO: Long-form keyword-rich educational material
        =================================================== --}}
        <section class="py-10 sm:py-12 bg-slate-50 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">
                    {{-- Left Column: Educational Intro + Compact Concepts Grid --}}
                    <div class="lg:col-span-8 space-y-4 flex flex-col justify-between">
                        <div class="p-6 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-3">
                            <span class="text-[11px] font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Academic Excellence</span>
                            <h2 class="text-xl sm:text-2xl font-black text-slate-900 dark:text-white leading-snug">
                                Why Is Algorithms Assignment Help &amp; Programming Assistance Essential for CS Students in the USA?
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                                Data Structures &amp; Algorithms (DSA) form the core curriculum of North American computer science degrees and technical hiring interviews. Whether you need expert <strong>algorithms programming help</strong> or <strong>algorithms assignment help</strong>, CS students face severe algorithmic bottlenecks with time complexity optimization, dynamic programming memoization, graph traversals, and formal Big-O proofs.
                            </p>
                        </div>

                        {{-- Compact Concepts Grid --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">⚡</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">1. Big-O Complexity Analysis</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Formal worst, average, and best-case time and auxiliary space complexity proofs.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🧠</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">2. Dynamic Programming</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Top-down memoization, 2D matrix tabulation, state transitions, and space reduction.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🌐</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">3. Graph Network Algorithms</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">BFS/DFS, Dijkstra shortest path, Kruskal MST, and topological sorting.</p>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 shadow-sm flex items-start gap-3">
                                <span class="text-lg shrink-0 mt-0.5">🧪</span>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 dark:text-white">4. Boundary Unit Testing</h3>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 leading-tight">Verifying edge cases (empty inputs, single nodes, large values) with GTest / JUnit / Pytest.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right Column: Full-Height Quality Guarantee Card --}}
                    <div class="lg:col-span-4 h-full">
                        <div class="p-6 rounded-2xl bg-slate-900 border border-slate-800 text-white shadow-lg h-full flex flex-col justify-between space-y-4">
                            <div>
                                <div class="flex items-center gap-3 mb-4">
                                    <div class="w-9 h-9 rounded-xl bg-purple-600/30 border border-purple-500/50 flex items-center justify-center text-lg shrink-0">
                                        🛡️
                                    </div>
                                    <div>
                                        <h3 class="text-base font-bold text-white">Our Algorithms Guarantee</h3>
                                        <p class="text-[10px] text-slate-400">Big-O &amp; Unit Tested</p>
                                    </div>
                                </div>

                                <ul class="space-y-2.5 text-xs text-slate-300">
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Zero Syntax or Runtime Errors</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Turnitin Plagiarism Report Included</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Detailed Setup README.md Included</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Formal Big-O Complexity Proof</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Boundary Test Suite &amp; Edge Cases</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>Free Revisions within 72 Hours</span>
                                    </li>
                                    <li class="flex items-center gap-2">
                                        <span class="text-emerald-400 font-bold">✓</span>
                                        <span>100% Confidential &amp; Secure Order</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="pt-3 space-y-3 border-t border-slate-800">
                                <div class="grid grid-cols-2 gap-2 text-center text-[11px]">
                                    <div class="p-2 rounded-lg bg-slate-800/70 border border-slate-700/50">
                                        <span class="block font-bold text-slate-200">4.2 Hours</span>
                                        <span class="text-[10px] text-slate-400">Avg Delivery</span>
                                    </div>
                                    <div class="p-2 rounded-lg bg-slate-800/70 border border-slate-700/50">
                                        <span class="block font-bold text-emerald-400">100% Pass</span>
                                        <span class="text-[10px] text-slate-400">Test Suite Pass</span>
                                    </div>
                                </div>

                                <a href="{{ route('order') }}" class="group relative inline-flex items-center justify-center gap-2 w-full py-3 bg-blue-600 hover:bg-blue-500 text-white font-bold text-xs rounded-xl transition-all shadow-md">
                                    <span>Get Algorithms Help</span>
                                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 11 – FAQ ACCORDION
             SEO: Targets rich SERP results
        =================================================== --}}
        <section class="py-14 sm:py-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800" aria-labelledby="faq-heading">
            <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">FAQs</p>
                    <h2 id="faq-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Algorithms Programming &amp; Assignment Help FAQs
                    </h2>
                </div>

                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you include Big-O time and space complexity proofs?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Every algorithm solution includes an inline code commentary or separate markdown documentation proving the worst, average, and auxiliary space complexity in formal Big-O notation.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Which programming languages do your algorithm experts support?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We write algorithms in C++, Java, Python, C#, Rust, and Go using standard libraries (C++ STL, Java Collections, Python Data Structures).</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can your developers solve complex Dynamic Programming problems?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We specialize in top-down memoization and bottom-up tabulation DP approaches for Knapsack, LCS, Matrix Chain Multiplication, and Edit Distance problems.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-950 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the code pass unit test suites and edge cases?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely. We test code against boundary inputs (empty structures, single elements, negative weights, large inputs) using Google Test, JUnit, or Pytest.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 12 – FINAL CTA BANNER & SCHEMA MARKUP
        =================================================== --}}
        <section class="relative overflow-hidden bg-slate-900 py-16 sm:py-20 text-white">
            <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 rounded-full blur-[100px] pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-600/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/20 mb-6">
                    <span class="flex h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">DSA Specialists Online Now</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                    Ready to Get Your<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-purple-400 to-indigo-400">Algorithm Coded?</span>
                </h2>

                <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                    Get clean, compilable, O(N log N) optimized algorithm files complete with Big-O proofs, boundary unit tests, and setup instructions. Submit your details for a free quote within 5 minutes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="relative z-10 text-sm">Get Algorithms Programming Help</span>
                        <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                </div>
            </div>
        </section>

        {{-- FAQ & SERVICE SCHEMA MARKUP (ESCAPED FOR BLADE COMPILER) --}}
        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "FAQPage",
          "mainEntity": [
            {
              "@@type": "Question",
              "name": "Do you include Big-O time and space complexity proofs?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. Every algorithm solution includes an inline code commentary or separate markdown documentation proving the worst, average, and auxiliary space complexity in formal Big-O notation."
              }
            },
            {
              "@@type": "Question",
              "name": "Which programming languages do your algorithm experts support?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "We write algorithms in C++, Java, Python, C#, Rust, and Go using standard libraries (C++ STL, Java Collections, Python Data Structures)."
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
          "description": "Professional algorithms programming help and assignment assistance in the USA. Expert developers available 24/7 for Dynamic Programming, Graph Traversals, AVL Trees, Big-O proofs, and C++/Java/Python setups.",
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
          }
        }
        </script>
    </div>
@endsection
