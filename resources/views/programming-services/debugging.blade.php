@extends('layouts.app')

@section('title', 'Code Review & Debugging - Expert Help Available')
@section('description', 'Get professional code review and debugging services. Expert developers available 24/7 for bug
    fixing, code optimization, and best practices.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative hero-bg py-24 overflow-hidden min-h-screen flex items-center">
            <!-- Enhanced Background Pattern -->
            <div class="absolute inset-0 opacity-5 md:opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,<svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.15\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');">
                </div>
            </div>

            <!-- Animated Background Dots -->
            <div class="absolute inset-0 pointer-events-none">
                <div
                    class="absolute top-20 left-20 w-2 h-2 bg-purple-400 rounded-full animate-ping opacity-20 md:opacity-30">
                </div>
                <div class="absolute top-40 right-32 w-3 h-3 bg-blue-400 rounded-full animate-ping opacity-25 md:opacity-40"
                    style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-16 w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping opacity-20 md:opacity-35"
                    style="animation-delay: 1s;"></div>
                <div class="absolute top-60 left-1/3 w-2.5 h-2.5 bg-green-400 rounded-full animate-ping opacity-15 md:opacity-25"
                    style="animation-delay: 1.5s;"></div>
                <div class="absolute bottom-20 right-20 w-2 h-2 bg-yellow-400 rounded-full animate-ping opacity-20 md:opacity-30"
                    style="animation-delay: 2s;"></div>
            </div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Floating Bug Fix -->
                <div
                    class="absolute top-16 left-8 bg-gradient-to-r from-gray-900 to-gray-800 text-red-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet animate-glow">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-red-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">bug.js</span>
                    </div>
                    <div class="text-gray-500">// ❌ Before (Bug)</div>
                    <div class="line-through text-red-400">if (user = admin) {</div>
                    <div class="text-gray-500">// ✅ After (Fixed)</div>
                    <div class="text-green-400">if (user === admin) {</div>
                </div>

                <!-- Floating Code Review -->
                <div
                    class="absolute top-28 right-12 bg-gradient-to-r from-gray-900 to-gray-800 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">review.js</span>
                    </div>
                    <div class="text-purple-400">// Code Review Comment:</div>
                    <div class="text-green-400">// ✓ Good: Proper error handling</div>
                    <div class="text-orange-400">// ⚠ Warning: Missing validation</div>
                    <div class="text-cyan-400">// 💡 Suggestion: Add type checking</div>
                </div>

                <!-- Floating Performance Fix -->
                <div
                    class="absolute bottom-24 left-1/4 bg-gradient-to-r from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">optimize.js</span>
                    </div>
                    <div class="text-gray-500">// Performance Optimization</div>
                    <div>const <span class="text-yellow-400">memoized</span> = useMemo(() => {</div>
                    <div class="ml-2">return expensiveCalculation(data);</div>
                    <div>}, [data]);</div>
                </div>

                <!-- Floating Error Handling -->
                <div
                    class="absolute top-72 right-8 bg-gradient-to-r from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">error.js</span>
                    </div>
                    <div><span class="text-purple-400">try</span> {</div>
                    <div class="ml-2">await fetchData();</div>
                    <div>} <span class="text-purple-400">catch</span> (error) {</div>
                    <div class="ml-2">logger.<span class="text-yellow-400">error</span>(error);</div>
                    <div>}</div>
                </div>

                <!-- Floating Refactoring -->
                <div class="absolute bottom-16 right-1/3 bg-gradient-to-r from-gray-900 to-gray-800 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">refactor.js</span>
                    </div>
                    <div class="text-gray-500">// Refactored for clarity</div>
                    <div>const <span class="text-yellow-400">isValid</span> = (data) => {</div>
                    <div class="ml-2">return data && data.length > 0;</div>
                    <div>};</div>
                </div>

                <!-- Floating Test Case -->
                <div class="absolute top-96 left-16 bg-gradient-to-r from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">test.spec.js</span>
                    </div>
                    <div><span class="text-purple-400">test</span>(<span class="text-orange-400">'should fix bug'</span>, ()
                        => {</div>
                    <div class="ml-2">expect(fixed).<span class="text-green-400">toBeTruthy</span>();</div>
                    <div>});</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            🔧 Code Review & Debugging Expert Help
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Professional<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Code
                                Review</span><br>
                            & Debugging
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert code review and debugging services. From bug fixing and performance optimization to
                            code refactoring and best practices, our experienced developers deliver high-quality solutions.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('order') }}"
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
                                <span class="font-semibold">4.8/5</span> rating
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-500 mr-1">✓</span>
                                <span>2200+ bugs fixed</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>1-12 hour delivery</span>
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
                                <div class="ml-4 text-gray-400 text-sm font-mono">fixed_code.js</div>
                            </div>

                            <!-- Code Content -->
                            <div class="font-mono text-sm space-y-1 p-6">
                                <div class="text-purple-400">// Code Review & Debugging Solution</div>
                                <div class="text-gray-500 line-through">// ❌ Before: if (x = 5)</div>
                                <div class="text-green-400">// ✅ After: if (x === 5) {</div>
                                <div class="ml-2 text-gray-300">performAction();</div>
                                <div class="text-green-400">}</div>
                                <div class="text-gray-500"></div>
                                <div class="text-purple-400">// Bug Fixed! Expert Available 4.8/5 ⭐</div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                            <div class="text-2xl">🔧</div>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-lg shadow-lg p-4 animate-pulse">
                            <div class="text-2xl">✅</div>
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
                            <span class="text-xl">🔧</span>
                            MASTER CODE QUALITY & DEBUGGING
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            From Buggy Code to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600">Production-Ready
                                Software</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Master the art of writing clean, efficient, and
                            bug-free code</p>
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
                                        <span class="text-4xl">🐛</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-gray-900 mb-2">Why Debugging Skills Matter</h3>
                                        <p class="text-purple-600 font-semibold text-lg">The difference between good and
                                            great developers</p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-4 gap-4 mb-6">
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-purple-500">
                                        <div class="text-3xl font-bold text-purple-600 mb-1">50%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Developer Time Debugging</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
                                        <div class="text-3xl font-bold text-blue-600 mb-1">$312B</div>
                                        <p class="text-gray-700 text-sm font-semibold">Annual Cost of Bad Code</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-indigo-500">
                                        <div class="text-3xl font-bold text-indigo-600 mb-1">70%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Bugs Found in Testing</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-green-500">
                                        <div class="text-3xl font-bold text-green-600 mb-1">10x</div>
                                        <p class="text-gray-700 text-sm font-semibold">Cost to Fix Later</p>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-purple-600">Every developer spends 50% of their time
                                        debugging.</span>
                                    From Facebook's 2021 global outage caused by a configuration bug to Knight Capital's
                                    $440 million
                                    loss in 45 minutes from a deployment error—bugs aren't just annoying, they're costly.
                                    The
                                    difference between junior and senior developers isn't just writing code; it's writing
                                    clean,
                                    maintainable, bug-resistant code.
                                </p>

                                <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl p-6 text-white">
                                    <p class="font-bold text-lg mb-2">💡 Industry Reality:</p>
                                    <p class="text-purple-50">
                                        A bug that costs $1 to fix during development costs $10 in testing, $100 in
                                        production, and
                                        potentially millions in lost revenue and reputation. NASA's Mars Climate Orbiter
                                        crashed due to a
                                        units conversion bug. A single semicolon caused a $80 million satellite failure.
                                        Mastering
                                        debugging, code review, and quality practices isn't optional—it's survival!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Bug Cost Escalation Visualization -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="text-center mb-8">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">💰 Bug Fix Cost Escalation</h3>
                                <p class="text-gray-600">The cost to fix a bug increases exponentially through development
                                    phases</p>
                            </div>

                            <div class="space-y-6">
                                <!-- Planning/Development Phase -->
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm font-semibold text-gray-700">Planning & Development</span>
                                        <span class="text-lg font-bold text-green-600">$100</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-8 overflow-hidden">
                                        <div class="bg-gradient-to-r from-green-400 to-green-600 h-8 rounded-full flex items-center justify-end pr-3"
                                            style="width: 10%;">
                                            <span class="text-white text-xs font-bold">1x (Baseline)</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1">Quickest and least expensive to fix</p>
                                </div>

                                <!-- Staging/Testing Phase -->
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm font-semibold text-gray-700">Staging & Testing</span>
                                        <span class="text-lg font-bold text-yellow-600">$600</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-8 overflow-hidden">
                                        <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 h-8 rounded-full flex items-center justify-end pr-3"
                                            style="width: 35%;">
                                            <span class="text-white text-xs font-bold">6x More</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1">Requires rework, re-testing, and coordination</p>
                                </div>

                                <!-- Production Phase -->
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm font-semibold text-gray-700">Production (Live Systems)</span>
                                        <span class="text-lg font-bold text-orange-600">$3,000</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-8 overflow-hidden">
                                        <div class="bg-gradient-to-r from-orange-400 to-orange-600 h-8 rounded-full flex items-center justify-end pr-3"
                                            style="width: 70%;">
                                            <span class="text-white text-xs font-bold">30x More</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1">Context switching, cascading issues, multi-team
                                        coordination</p>
                                </div>

                                <!-- Critical Production Bug -->
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <span class="text-sm font-semibold text-gray-700">Critical Production Bug</span>
                                        <span class="text-lg font-bold text-red-600">$10,000+</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-8 overflow-hidden">
                                        <div class="bg-gradient-to-r from-red-500 to-red-700 h-8 rounded-full flex items-center justify-end pr-3"
                                            style="width: 100%;">
                                            <span class="text-white text-xs font-bold">100x+ More</span>
                                        </div>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1">Emergency fixes, downtime, revenue loss,
                                        reputation damage</p>
                                </div>
                            </div>

                            <div class="mt-6 space-y-3">
                                <div
                                    class="bg-gradient-to-r from-red-50 to-orange-50 rounded-lg p-4 border-l-4 border-red-500">
                                    <p class="text-sm text-gray-700">
                                        <span class="font-bold text-red-600">Real Cost Example:</span> A bug costing $100
                                        to fix during
                                        planning could escalate to <span class="font-bold text-red-700">$10,000 in
                                            production</span>—a
                                        100x increase! This is due to context switching (developers must reorient to old
                                        code), cascading
                                        issues (bugs affecting multiple system areas), and increased coordination
                                        (late-stage fixes
                                        require multi-team collaboration).
                                    </p>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg p-4 border-l-4 border-green-500">
                                    <p class="text-sm text-gray-700">
                                        <span class="font-bold text-green-600">Prevention Strategy:</span> Early testing
                                        doesn't just save
                                        time and money—it leads to cleaner, more reliable software and happier teams. Test
                                        earlier in the
                                        development cycle, catch issues before they spread across systems, and minimize
                                        disruptions to
                                        development flow.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Developer Time Breakdown Visualization -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="text-center mb-8">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">⏰ How Developers Spend Their Time</h3>
                                <p class="text-gray-600">Average time distribution for professional software developers</p>
                            </div>

                            <div class="grid md:grid-cols-2 gap-8 items-center">
                                <!-- Visual Pie-like Bars -->
                                <div class="space-y-4">
                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <div class="flex items-center gap-2">
                                                <div
                                                    class="w-4 h-4 bg-gradient-to-r from-purple-500 to-purple-600 rounded">
                                                </div>
                                                <span class="text-sm font-semibold text-gray-700">Debugging & Bug
                                                    Fixing</span>
                                            </div>
                                            <span class="text-xl font-bold text-purple-600">50%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-6 overflow-hidden">
                                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-6 rounded-full"
                                                style="width: 50%;"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <div class="flex items-center gap-2">
                                                <div class="w-4 h-4 bg-gradient-to-r from-blue-500 to-blue-600 rounded">
                                                </div>
                                                <span class="text-sm font-semibold text-gray-700">Writing New Code</span>
                                            </div>
                                            <span class="text-xl font-bold text-blue-600">30%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-6 overflow-hidden">
                                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-6 rounded-full"
                                                style="width: 30%;"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="flex justify-between items-center mb-2">
                                            <div class="flex items-center gap-2">
                                                <div class="w-4 h-4 bg-gradient-to-r from-green-500 to-green-600 rounded">
                                                </div>
                                                <span class="text-sm font-semibold text-gray-700">Code Review &
                                                    Meetings</span>
                                            </div>
                                            <span class="text-xl font-bold text-green-600">20%</span>
                                        </div>
                                        <div class="w-full bg-gray-200 rounded-full h-6 overflow-hidden">
                                            <div class="bg-gradient-to-r from-green-500 to-green-600 h-6 rounded-full"
                                                style="width: 20%;"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Visual Representation -->
                                <div class="flex justify-center">
                                    <div class="relative w-64 h-64">
                                        <!-- Circular Progress Visualization -->
                                        <div class="absolute inset-0 rounded-full overflow-hidden"
                                            style="background: conic-gradient(from 0deg,
                                                #9333ea 0%, #9333ea 50%,
                                                #3b82f6 50%, #3b82f6 80%,
                                                #10b981 80%, #10b981 100%);">
                                        </div>
                                        <div
                                            class="absolute inset-4 bg-white rounded-full flex items-center justify-center">
                                            <div class="text-center">
                                                <div class="text-4xl font-bold text-purple-600">50%</div>
                                                <div class="text-sm text-gray-600 mt-1">Time on<br>Debugging</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="mt-6 bg-gradient-to-r from-purple-50 to-blue-50 rounded-lg p-4 border-l-4 border-purple-500">
                                <p class="text-sm text-gray-700">
                                    <span class="font-bold text-purple-600">Reality Check:</span> Studies show developers
                                    spend nearly
                                    half their time debugging. Mastering debugging techniques isn't optional—it's essential
                                    for
                                    productivity and career success!
                                </p>
                            </div>
                        </div>

                        <!-- Bug Types Distribution Visualization -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="text-center mb-8">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">🐛 Common Bug Types Distribution</h3>
                                <p class="text-gray-600">Where bugs typically occur in software development</p>
                            </div>

                            <div class="space-y-5">
                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 bg-gradient-to-r from-red-500 to-pink-600 rounded-lg flex items-center justify-center text-white">
                                                🐛
                                            </div>
                                            <span class="font-semibold text-gray-700">Logic Errors</span>
                                        </div>
                                        <span class="text-xl font-bold text-red-600">40%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-7 overflow-hidden">
                                        <div class="bg-gradient-to-r from-red-500 to-pink-600 h-7 rounded-full flex items-center px-3"
                                            style="width: 40%;">
                                            <span class="text-white text-xs font-bold">Wrong algorithm, off-by-one</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 bg-gradient-to-r from-orange-500 to-amber-600 rounded-lg flex items-center justify-center text-white">
                                                💥
                                            </div>
                                            <span class="font-semibold text-gray-700">Runtime Errors</span>
                                        </div>
                                        <span class="text-xl font-bold text-orange-600">30%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-7 overflow-hidden">
                                        <div class="bg-gradient-to-r from-orange-500 to-amber-600 h-7 rounded-full flex items-center px-3"
                                            style="width: 30%;">
                                            <span class="text-white text-xs font-bold">Null pointer, type errors</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 bg-gradient-to-r from-blue-500 to-cyan-600 rounded-lg flex items-center justify-center text-white">
                                                ⚡
                                            </div>
                                            <span class="font-semibold text-gray-700">Performance Issues</span>
                                        </div>
                                        <span class="text-xl font-bold text-blue-600">20%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-7 overflow-hidden">
                                        <div class="bg-gradient-to-r from-blue-500 to-cyan-600 h-7 rounded-full flex items-center px-3"
                                            style="width: 20%;">
                                            <span class="text-white text-xs font-bold">Memory leaks, slow queries</span>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between items-center mb-2">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center text-white">
                                                🔒
                                            </div>
                                            <span class="font-semibold text-gray-700">Security Vulnerabilities</span>
                                        </div>
                                        <span class="text-xl font-bold text-purple-600">10%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-7 overflow-hidden">
                                        <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-7 rounded-full flex items-center px-3"
                                            style="width: 10%;">
                                            <span class="text-white text-xs font-bold">SQL injection, XSS</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 grid md:grid-cols-2 gap-4">
                                <div
                                    class="bg-gradient-to-r from-red-50 to-pink-50 rounded-lg p-4 border-l-4 border-red-500">
                                    <p class="text-xs font-bold text-red-700 mb-1">Most Common:</p>
                                    <p class="text-sm text-gray-700">Logic errors are hardest to detect—code runs without
                                        crashing but
                                        produces wrong results!</p>
                                </div>
                                <div
                                    class="bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg p-4 border-l-4 border-purple-500">
                                    <p class="text-xs font-bold text-purple-700 mb-1">Most Dangerous:</p>
                                    <p class="text-sm text-gray-700">Security bugs can cost millions. The Equifax breach
                                        exposed 147M
                                        records!</p>
                                </div>
                            </div>
                        </div>

                        <!-- Bug Types Cards -->
                        <div class="grid md:grid-cols-3 gap-8">
                            <!-- Logic Errors Card -->
                            <div
                                class="bg-gradient-to-br from-red-50 via-pink-50 to-rose-50 rounded-2xl p-8 border-2 border-red-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-red-500 to-pink-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🐛</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Logic Errors</h4>
                                        <p class="text-red-600 text-sm font-semibold">The silent killers</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-red-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-red-600">Logic = Wrong Algorithm.</span> Code runs
                                            without
                                            errors but produces wrong results. Off-by-one errors, incorrect conditions,
                                            wrong
                                            formulas—these bugs slip through compilers and crash production systems
                                            silently!
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-red-600 to-pink-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🎯 Common Examples:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">= vs ==</span>
                                            <span
                                                class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Off-by-one</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Infinite
                                                loops</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Wrong
                                                condition</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Runtime Errors Card -->
                            <div
                                class="bg-gradient-to-br from-orange-50 via-amber-50 to-yellow-50 rounded-2xl p-8 border-2 border-orange-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-orange-500 to-amber-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">💥</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Runtime Errors</h4>
                                        <p class="text-orange-600 text-sm font-semibold">Crashes & exceptions</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-orange-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-orange-600">Runtime = Unexpected Failures.</span>
                                            Null pointer
                                            exceptions, type errors, memory leaks, stack overflows—these crash your
                                            application and
                                            frustrate users. Proper error handling is essential!
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-orange-600 to-amber-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🌐 Common Examples:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Null
                                                reference</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Type
                                                error</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Division by
                                                zero</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Out of
                                                bounds</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Performance Issues Card -->
                            <div
                                class="bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 rounded-2xl p-8 border-2 border-blue-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">⚡</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">Performance Issues</h4>
                                        <p class="text-blue-600 text-sm font-semibold">Speed matters</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-blue-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-blue-600">Performance = User Experience.</span>
                                            Memory leaks,
                                            N+1 queries, inefficient algorithms, unnecessary re-renders—slow code drives
                                            users away.
                                            Amazon found 100ms delay = 1% revenue loss!
                                        </p>
                                    </div>

                                    <div class="bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🚀 Common Issues:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Memory
                                                leaks</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">N+1
                                                queries</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">O(n²)
                                                loops</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Large
                                                bundles</span>
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
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Areas We Debug & Review</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert developers review and debug code across
                        all
                        major programming languages and frameworks.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Bug Fixing -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Bug Fixing</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-red-50 rounded-lg p-4 mb-2 group-hover:bg-red-100 transition-colors">
                                    <div class="text-3xl mb-2">🐛</div>
                                    <h4 class="font-semibold text-gray-900">Logic Errors</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-red-50 rounded-lg p-4 mb-2 group-hover:bg-red-100 transition-colors">
                                    <div class="text-3xl mb-2">💥</div>
                                    <h4 class="font-semibold text-gray-900">Runtime Errors</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-red-50 rounded-lg p-4 mb-2 group-hover:bg-red-100 transition-colors">
                                    <div class="text-3xl mb-2">⚠️</div>
                                    <h4 class="font-semibold text-gray-900">Syntax Issues</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Performance -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Performance</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">⚡</div>
                                    <h4 class="font-semibold text-gray-900">Speed Optimization</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">💾</div>
                                    <h4 class="font-semibold text-gray-900">Memory Leaks</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">📊</div>
                                    <h4 class="font-semibold text-gray-900">Profiling</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Code Quality -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Code Quality</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">♻️</div>
                                    <h4 class="font-semibold text-gray-900">Refactoring</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">📚</div>
                                    <h4 class="font-semibold text-gray-900">Best Practices</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">✨</div>
                                    <h4 class="font-semibold text-gray-900">Clean Code</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security & Testing -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Security & Testing</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🔒</div>
                                    <h4 class="font-semibold text-gray-900">Security Fixes</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🧪</div>
                                    <h4 class="font-semibold text-gray-900">Unit Tests</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🛡️</div>
                                    <h4 class="font-semibold text-gray-900">Code Analysis</h4>
                                </div>
                            </div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on complexity. No
                        hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Quick Bug Fix</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $15</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple bug fixing
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Error resolution
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    1-6 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Explanation included
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Code Review</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $50</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Comprehensive review
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Performance optimization
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    6-12 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Best practices applied
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Detailed feedback
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Complete Refactoring</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $100</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full code refactoring
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Architecture improvements
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    12-24 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Security audit
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Testing coverage
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Debugging Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Systematic approach to finding and fixing bugs in
                        your
                        code.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Code Analysis</h3>
                        <p class="text-gray-600">We analyze your code to understand the issue and identify root causes.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Bug Identification</h3>
                        <p class="text-gray-600">Locate the exact source of bugs using debugging tools and techniques.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Fix Implementation</h3>
                        <p class="text-gray-600">Implement fixes following best practices and clean code principles.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Testing & Verification</h3>
                        <p class="text-gray-600">Thoroughly test fixes and provide detailed explanation of changes.</p>
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
                            COMPREHENSIVE DEBUGGING GUIDE
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            Complete Guide to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">Debugging
                                & Code Quality</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Essential techniques for writing maintainable,
                            production-ready code</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Main Informative Card -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">📚</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Understanding Debugging & Code Review
                                    </h3>
                                    <p class="text-indigo-600 font-semibold text-lg">The critical skills every developer
                                        needs</p>
                                </div>
                            </div>

                            <div class="prose prose-lg max-w-none">
                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-indigo-600">Debugging is the process of identifying,
                                        analyzing, and
                                        removing errors (bugs) from computer programs.</span> Every piece of software has
                                    bugs—it's
                                    inevitable. What separates professional developers from hobbyists is their systematic
                                    approach to
                                    finding and fixing these issues efficiently. Modern debugging combines tools (debuggers,
                                    profilers,
                                    linters), techniques (rubber duck debugging, binary search), and practices (logging,
                                    monitoring,
                                    testing).
                                </p>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    Code review is a systematic examination of source code to find and fix mistakes, improve
                                    code
                                    quality, and share knowledge. Studies show code review catches 60-90% of bugs before
                                    they reach
                                    production, reduces technical debt, and improves team collaboration. Companies like
                                    Google, Microsoft,
                                    and Facebook mandate code reviews for every change. Clean code isn't a luxury—it's a
                                    necessity for
                                    maintainability, scalability, and team productivity.
                                </p>

                                <div
                                    class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 border-l-4 border-indigo-500 mb-6">
                                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Why Debugging & Code Quality Matter
                                    </h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Cost of Bugs Escalates:</strong> A bug found during coding costs
                                                $1 to fix.
                                                The same bug in production costs $100-1000. Facebook's 2021 outage (BGP
                                                configuration
                                                bug) cost $60+ million. Toyota's unintended acceleration bug cost $3 billion
                                                in recalls
                                                and lawsuits. Early detection saves money and lives!</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Professional Reputation:</strong> Developers who write clean,
                                                well-tested code earn respect and promotions. Those who constantly introduce
                                                bugs get
                                                sidelined. Your GitHub commits are your resume. Code quality directly
                                                correlates with
                                                career advancement in tech.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Team Productivity:</strong> Clean code is easy to understand,
                                                modify, and
                                                extend. Technical debt from rushed, buggy code slows teams down
                                                exponentially. A 2020
                                                study found developers spend 42% of their time dealing with bad code and
                                                technical
                                                debt—that's nearly half their productivity wasted!</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Security Implications:</strong> Many security vulnerabilities are
                                                just bugs:
                                                SQL injection, XSS, buffer overflows. The Equifax breach (affecting 147
                                                million people)
                                                was caused by an unpatched vulnerability—essentially a bug. Heartbleed, one
                                                of the worst
                                                security bugs, existed for 2 years in OpenSSL.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Debugging Techniques -->
                        <div
                            class="bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow-2xl p-8 border-2 border-indigo-100">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🔍</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Essential Debugging Techniques</h3>
                                    <p class="text-purple-600 font-semibold text-lg">Systematic approaches to finding and
                                        fixing bugs
                                    </p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Effective debugging requires a methodical approach. Random code changes ("shotgun
                                debugging") waste time
                                and often introduce new bugs. Professional developers use systematic techniques: reproduce
                                the bug
                                reliably, isolate the problem area, form hypotheses, test systematically, and verify the fix
                                doesn't
                                break anything else.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-blue-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-blue-600 mb-2">🔬 Print Debugging & Logging
                                        </div>
                                        <p class="text-gray-700 text-sm mb-3">The oldest and most universal debugging
                                            technique. Add
                                            print statements to track program flow and variable values. Simple but effective
                                            for
                                            understanding execution order and state.</p>
                                        <div class="bg-blue-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-blue-900 mb-1">Best Practices:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Use structured logging (debug, info, error)</li>
                                                <li>• Log before/after critical operations</li>
                                                <li>• Include timestamps and context</li>
                                                <li>• Remove debug prints before production</li>
                                                <li>• Use log levels appropriately</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-purple-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-purple-600 mb-2">🐞 Debugger Tools</div>
                                        <p class="text-gray-700 text-sm mb-3">Interactive debuggers let you pause
                                            execution, inspect
                                            variables, step through code, and set conditional breakpoints. Essential for
                                            complex bugs.
                                        </p>
                                        <div class="bg-purple-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-purple-900 mb-1">Key Features:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Breakpoints (line, conditional, watch)</li>
                                                <li>• Step over/into/out of functions</li>
                                                <li>• Variable inspection and modification</li>
                                                <li>• Call stack examination</li>
                                                <li>• Expression evaluation on the fly</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-green-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-green-600 mb-2">🦆 Rubber Duck Debugging</div>
                                        <p class="text-gray-700 text-sm mb-3">Explain your code line-by-line to an
                                            inanimate object
                                            (rubber duck). Forces you to slow down and often reveals the bug through
                                            verbalization.</p>
                                        <div class="bg-green-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-green-900 mb-1">Why It Works:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Forces systematic thinking</li>
                                                <li>• Slows down rushed debugging</li>
                                                <li>• Reveals faulty assumptions</li>
                                                <li>• No judgment from the duck</li>
                                                <li>• Surprisingly effective technique</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-orange-200">
                                    <div class="mb-3">
                                        <div class="text-2xl font-bold text-orange-600 mb-2">⚡ Binary Search Debugging
                                        </div>
                                        <p class="text-gray-700 text-sm mb-3">When a bug appears after many changes, use
                                            binary
                                            search: disable half the changes, test, repeat. Quickly narrows down the
                                            problematic code.
                                        </p>
                                        <div class="bg-orange-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-orange-900 mb-1">Process:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Identify working vs broken state</li>
                                                <li>• Revert half the changes</li>
                                                <li>• Test if bug persists</li>
                                                <li>• Repeat on problematic half</li>
                                                <li>• O(log n) instead of O(n) search</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Debugging Mindset: Scientific Method</h4>
                                <p class="text-indigo-100 mb-3">
                                    <strong>1. Reproduce:</strong> Make the bug happen reliably. <strong>2.
                                        Isolate:</strong> Minimize
                                    code to smallest failing example. <strong>3. Hypothesize:</strong> Form theories about
                                    the cause.
                                    <strong>4. Test:</strong> Verify hypotheses systematically. <strong>5. Fix:</strong>
                                    Implement
                                    solution. <strong>6. Verify:</strong> Ensure fix works and doesn't break anything.
                                </p>
                                <p class="text-indigo-100">
                                    Never make random changes hoping something works. Understand WHY code fails. A fix
                                    without
                                    understanding is a time bomb—the bug will return in a different form.
                                </p>
                            </div>
                        </div>

                        <!-- Code Quality & Best Practices -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">✨</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Code Quality Best Practices</h3>
                                    <p class="text-green-600 font-semibold text-lg">Writing clean, maintainable code</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Clean code is code that is easy to understand, modify, and maintain. It follows established
                                conventions,
                                is well-documented, properly tested, and free of unnecessary complexity. The principles in
                                "Clean Code"
                                by Robert Martin and "Code Complete" by Steve McConnell are industry standards for writing
                                professional
                                software.
                            </p>

                            <div class="space-y-4 mb-6">
                                <div
                                    class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border-l-4 border-blue-500">
                                    <h4 class="font-bold text-blue-900 text-lg mb-3">🎯 SOLID Principles</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        <strong>S</strong>ingle Responsibility, <strong>O</strong>pen/Closed,
                                        <strong>L</strong>iskov Substitution, <strong>I</strong>nterface Segregation,
                                        <strong>D</strong>ependency Inversion. These object-oriented design principles
                                        prevent
                                        tightly-coupled, hard-to-maintain code. Each class should do one thing well.
                                    </p>
                                    <div class="bg-white rounded-lg p-3">
                                        <p class="text-xs font-semibold text-blue-900">Impact: Modular, testable,
                                            maintainable code that
                                            scales with team size</p>
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border-l-4 border-purple-500">
                                    <h4 class="font-bold text-purple-900 text-lg mb-3">📝 DRY Principle (Don't Repeat
                                        Yourself)</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Every piece of knowledge should have a single, authoritative representation.
                                        Duplicated code
                                        means bugs must be fixed in multiple places. Extract common logic into functions,
                                        create reusable
                                        components, and use inheritance/composition appropriately.
                                    </p>
                                    <div class="bg-white rounded-lg p-3">
                                        <p class="text-xs font-semibold text-purple-900">Impact: Easier maintenance, fewer
                                            bugs,
                                            consistent behavior across codebase</p>
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border-l-4 border-green-500">
                                    <h4 class="font-bold text-green-900 text-lg mb-3">🧪 Test-Driven Development (TDD)</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Write tests before code: 1) Write failing test, 2) Write minimal code to pass, 3)
                                        Refactor. TDD
                                        ensures code is testable, catches regressions, and provides living documentation.
                                        Code with 80%+
                                        test coverage has 40% fewer bugs.
                                    </p>
                                    <div class="bg-white rounded-lg p-3">
                                        <p class="text-xs font-semibold text-green-900">Tools: Jest, Pytest, JUnit, Mocha,
                                            RSpec,
                                            Testing Library</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Code Review Checklist</h4>
                                <p class="text-green-100 mb-3">
                                    <strong>Functionality:</strong> Does it work? Edge cases handled?
                                    <strong>Readability:</strong>
                                    Clear naming? Comments where needed? <strong>Structure:</strong> DRY? SOLID? Modular?
                                    <strong>Performance:</strong> Efficient algorithms? No bottlenecks?
                                    <strong>Testing:</strong> Unit
                                    tests? Integration tests? <strong>Security:</strong> Input validation? No
                                    vulnerabilities?
                                </p>
                                <p class="text-green-100">
                                    <strong>Need Code Review Help?</strong> Our expert developers provide professional code
                                    review,
                                    bug fixing, performance optimization, and refactoring services. Whether you're dealing
                                    with logic
                                    errors, runtime exceptions, memory leaks, or just need clean code guidance, our
                                    experienced engineers
                                    are available 24/7. Get help from experts who understand debugging tools, testing
                                    strategies, and
                                    industry best practices.
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who got help with
                        debugging and code review.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Found the bug in my code within an hour! The developer not only
                            fixed
                            it but also explained why it was happening. Great learning experience!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                T</div>
                            <div>
                                <div class="font-semibold text-gray-900">Tom H.</div>
                                <div class="text-sm text-gray-500">CS Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing code review! They found several performance issues I didn't
                            notice and optimized my code. My app runs 3x faster now!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                E</div>
                            <div>
                                <div class="font-semibold text-gray-900">Emma R.</div>
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
                        <p class="text-gray-600 mb-6">"Professional refactoring service! My messy code is now clean,
                            organized, and follows best practices. Learned so much from the feedback!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                M</div>
                            <div>
                                <div class="font-semibold text-gray-900">Mike D.</div>
                                <div class="text-sm text-gray-500">Web Dev Student</div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our code review
                        and
                        debugging service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">How quickly can you fix my bug?</h3>
                        <p class="text-gray-600">Most simple bugs are fixed within 1-6 hours. Complex issues may take 6-12
                            hours. We'll provide an estimated timeline after reviewing your code.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What programming languages do you support?
                        </h3>
                        <p class="text-gray-600">We review and debug code in all major languages including JavaScript,
                            Python, Java, C++, PHP, Ruby, Go, and more. We also work with all popular frameworks.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide explanations for the fixes?
                        </h3>
                        <p class="text-gray-600">Yes! We provide detailed explanations of what was wrong, why it caused
                            issues, and how we fixed it. This helps you learn and avoid similar bugs in the future.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help improve my code quality?</h3>
                        <p class="text-gray-600">Absolutely! Our code review service includes refactoring suggestions,
                            performance optimizations, and best practice recommendations to improve your code quality.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What if the bug comes back?</h3>
                        <p class="text-gray-600">We provide a 7-day guarantee. If the same bug reappears within 7 days,
                            we'll fix it at no additional cost. We stand behind the quality of our work.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Fix Your Code?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join thousands of developers who have fixed their
                    bugs and improved their code with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Get Your Code Fixed Today
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
