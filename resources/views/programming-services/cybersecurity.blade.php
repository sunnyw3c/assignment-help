@extends('layouts.app')

@section('title', 'Cybersecurity Projects - Expert Help Available')
@section('description', 'Get professional help with cybersecurity projects. Expert security professionals available 24/7 for security analysis, penetration testing, encryption, and secure coding.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section 1 -->
        <section class="py-14 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-red-600">🛡️ Defend Your Digital Assets</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Professional Cybersecurity <span class="text-red-600">That Actually Protects</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Get expert help from certified security professionals who've defended real systems and understand what makes networks truly secure.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="max-w-prose mx-auto space-y-4 text-sm leading-relaxed text-slate-700">
                            <p>
                                <strong class="font-semibold text-slate-900">Ever stared at a SQL injection vulnerability you can't fix?</strong> Cybersecurity isn't just about installing antivirus software — you're defending against SQL injections, XSS attacks, buffer overflows, broken authentication, insecure deserialization, and zero-day exploits. When your penetration testing report has 47 critical vulnerabilities or you can't figure out why your firewall rules aren't blocking malicious traffic, you need a certified security expert who's actually defended production systems under real attacks.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">Imagine submitting a security project that makes your professor say "This is enterprise-grade security."</strong> Your web application has proper input validation, parameterized queries preventing SQL injection, secure session management with httpOnly cookies, CSRF tokens on all forms, and encrypted passwords using bcrypt with proper salting. Every vulnerability identified in the assessment gets patched with documented remediation steps — that's the difference between theoretical security and practical defense.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">We don't just write security code — we think like attackers to build better defenses.</strong> Need a penetration testing report? You'll get comprehensive vulnerability scans with Nmap, Metasploit exploitation attempts, detailed risk assessments with CVSS scores, and actionable remediation recommendations. Implementing encryption? We use industry-standard AES-256, proper key management with key derivation functions, and authenticated encryption modes that prevent tampering.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">A typical security crisis:</strong> Your web application security assessment is due in 48 hours. XSS vulnerabilities are unsanitized, SQL queries are injectable, sessions aren't secure, and passwords are stored in MD5. You message us. Within hours, a certified security professional patches all critical vulnerabilities, implements proper input validation, replaces vulnerable code, and delivers a comprehensive security report explaining each fix.
                            </p>
                        </div>

                        <!-- Feature Highlights -->
                        <div class="grid gap-5 sm:grid-cols-3 mt-8">
                            <div class="rounded-2xl border border-red-200 bg-red-50 p-6">
                                <div class="mb-3 text-2xl">🔒</div>
                                <h3 class="mb-2 text-base font-bold text-slate-900">Vulnerability Assessment</h3>
                                <p class="text-sm text-slate-600">Comprehensive security audits with penetration testing</p>
                            </div>
                            <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6">
                                <div class="mb-3 text-2xl">🔐</div>
                                <h3 class="mb-2 text-base font-bold text-slate-900">Encryption &amp; Crypto</h3>
                                <p class="text-sm text-slate-600">AES, RSA, TLS implementation with proper key management</p>
                            </div>
                            <div class="rounded-2xl border border-indigo-200 bg-indigo-50 p-6">
                                <div class="mb-3 text-2xl">🛡️</div>
                                <h3 class="mb-2 text-base font-bold text-slate-900">Secure Coding</h3>
                                <p class="text-sm text-slate-600">Input validation, authentication, and defense in depth</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-14 sm:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Cybersecurity Technologies We Master</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Our expert security professionals work with encryption,
                        penetration testing, and modern security tools to deliver comprehensive security solutions.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Encryption & Cryptography -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Encryption</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔐</div>
                                <h4 class="text-sm font-semibold text-slate-900">AES Encryption</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔑</div>
                                <h4 class="text-sm font-semibold text-slate-900">RSA</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔒</div>
                                <h4 class="text-sm font-semibold text-slate-900">SSL/TLS</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Penetration Testing -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Pen Testing</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔍</div>
                                <h4 class="text-sm font-semibold text-slate-900">Metasploit</h4>
                            </div>
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">🛠️</div>
                                <h4 class="text-sm font-semibold text-slate-900">Burp Suite</h4>
                            </div>
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔬</div>
                                <h4 class="text-sm font-semibold text-slate-900">Nmap</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Security Analysis -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Security Analysis</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">🛡️</div>
                                <h4 class="text-sm font-semibold text-slate-900">OWASP Tools</h4>
                            </div>
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔎</div>
                                <h4 class="text-sm font-semibold text-slate-900">Wireshark</h4>
                            </div>
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">📊</div>
                                <h4 class="text-sm font-semibold text-slate-900">Snort</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Frameworks & Languages -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Languages &amp; Tools</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">🐍</div>
                                <h4 class="text-sm font-semibold text-slate-900">Python</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">🐧</div>
                                <h4 class="text-sm font-semibold text-slate-900">Kali Linux</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">⚡</div>
                                <h4 class="text-sm font-semibold text-slate-900">Bash Scripting</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Our Services Section -->
        <section class="py-14 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-purple-600">⭐ Trusted by 320+ Security Students</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Why Security Professionals <span class="text-purple-600">Choose Our Services</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Real-world security expertise, defensive strategies that work, and education that builds your security mindset.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="max-w-prose mx-auto space-y-4 text-sm leading-relaxed text-slate-700">
                            <p>
                                <strong class="font-semibold text-slate-900">Picture submitting a security audit that identifies vulnerabilities your professor didn't even think to test for.</strong> That happens when you work with certified security professionals holding CEH, OSCP, and CISSP credentials who've actually defended enterprise networks and responded to real breaches. We've performed penetration tests on banking systems, implemented zero-trust architectures for healthcare providers, and responded to ransomware incidents at 3 AM.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">What you actually receive goes far beyond code.</strong> Open your delivery to find complete security implementations with threat modeling documents, penetration testing reports with screenshots of exploitation attempts, security assessment documentation following NIST or ISO 27001 frameworks, secure code with input validation and output encoding, and detailed remediation guides. Every vulnerability includes CVE references, CVSS scores, and real-world exploit scenarios.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">Speed meets security rigor.</strong> Your security audit is due tomorrow and Burp Suite found 23 vulnerabilities you don't know how to fix. You reach out. Within 30 minutes, a security expert responds with a triage plan prioritizing critical vulnerabilities. Within hours, you have patched code, updated configurations, and documentation explaining each fix — not just patched vulnerabilities, but defense-in-depth strategies with multiple security layers.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">The real value is learning to think like both attacker and defender.</strong> Our documentation walks through attack scenarios we're defending against, why each defense works, and the proper mitigation. With 320+ security projects delivered and a 4.9/5 rating, we've proven that expert guidance accelerates your security journey.
                            </p>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 mt-8">
                            <div class="rounded-xl border border-green-200 bg-green-50 p-4 text-center">
                                <div class="text-2xl font-bold text-green-600">4.9/5</div>
                                <div class="text-xs font-medium text-slate-600">Security Rating</div>
                            </div>
                            <div class="rounded-xl border border-blue-200 bg-blue-50 p-4 text-center">
                                <div class="text-2xl font-bold text-blue-600">30min</div>
                                <div class="text-xs font-medium text-slate-600">Avg Response</div>
                            </div>
                            <div class="rounded-xl border border-purple-200 bg-purple-50 p-4 text-center">
                                <div class="text-2xl font-bold text-purple-600">320+</div>
                                <div class="text-xs font-medium text-slate-600">Systems Secured</div>
                            </div>
                            <div class="rounded-xl border border-red-200 bg-red-50 p-4 text-center">
                                <div class="text-2xl font-bold text-red-600">0</div>
                                <div class="text-xs font-medium text-slate-600">Breaches</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-14 sm:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Transparent Pricing</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Fair, transparent pricing based on database
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">Basic Database</h3>
                            <div class="my-3 text-2xl font-bold text-purple-600">From $30</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Simple database design
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Basic SQL queries
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    3-24 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Documentation included
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-purple-700">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="relative rounded-2xl border-2 border-purple-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-purple-600 px-3 py-1 text-xs font-semibold text-white">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">Advanced Database</h3>
                            <div class="my-3 text-2xl font-bold text-purple-600">From $75</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Complex database design
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Query optimization
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Stored procedures
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Performance tuning
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-purple-700">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">Enterprise Solution</h3>
                            <div class="my-3 text-2xl font-bold text-purple-600">From $150</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Full database architecture
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Data migration
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    2-3 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Replication setup
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Backup strategies
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-purple-700">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="py-14 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Our Database Development Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Proven methodology for delivering efficient and
                        scalable database solutions.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Requirements Analysis</h3>
                        <p class="text-sm text-slate-600">We analyze your data requirements, relationships, and query patterns to
                            design optimal solutions.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Database Design</h3>
                        <p class="text-sm text-slate-600">Create normalized schema, define relationships, and establish proper
                            indexing strategies.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Implementation &amp; Testing</h3>
                        <p class="text-sm text-slate-600">Build the database, create queries, and conduct thorough performance
                            testing.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Optimization &amp; Delivery</h3>
                        <p class="text-sm text-slate-600">Optimize performance, provide documentation, and deliver your complete
                            database solution.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-14 sm:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">What Our Clients Say</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Real feedback from students who got help with their
                        database programming projects.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Excellent database design for my e-commerce project! The expert
                            created a normalized schema with proper indexing, and the queries are lightning fast. Great
                            documentation too!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-500 text-sm font-bold text-white">S</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Sarah M.</div>
                                <div class="text-xs text-slate-500">Database Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Amazing help with complex SQL queries! The developer optimized my
                            slow queries and implemented proper indexes. Performance improved by 10x. Highly recommend!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-500 text-sm font-bold text-white">D</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">David K.</div>
                                <div class="text-xs text-slate-500">CS Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Professional MongoDB implementation! The NoSQL design was perfect for
                            my social media app. Clean data modeling and efficient aggregation queries. Excellent work!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-bold text-white">L</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Lisa T.</div>
                                <div class="text-xs text-slate-500">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-14 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Frequently Asked Questions</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Everything you need to know about our database
                        programming service.</p>
                </div>

                <div class="mx-auto max-w-3xl space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Which database systems do you support?</h3>
                        <p class="text-sm text-slate-600">We work with all major database systems including MySQL, PostgreSQL, SQL
                            Server, Oracle, MongoDB, Redis, Firebase, and more. We can help you choose the best database for
                            your project requirements.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Can you help optimize slow database queries?</h3>
                        <p class="text-sm text-slate-600">Absolutely! We specialize in query optimization, indexing strategies,
                            execution plan analysis, and database performance tuning. We can significantly improve your
                            database performance.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Do you provide database design and modeling?</h3>
                        <p class="text-sm text-slate-600">Yes! We provide complete database design services including ER diagrams,
                            schema design, normalization, relationship mapping, and data modeling following best practices.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Can you help with data migration projects?</h3>
                        <p class="text-sm text-slate-600">Yes, we assist with data migration between different database systems,
                            including ETL processes, data transformation, and ensuring data integrity during migration.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">What's included in the database delivery?</h3>
                        <p class="text-sm text-slate-600">You'll receive complete database scripts, schema documentation, ER diagrams,
                            query examples, and setup instructions. For advanced projects, we also include optimization
                            reports and maintenance guidelines.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-14 sm:py-16 bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Ready to Build Your Database?</h2>
                <p class="mx-auto mt-2 max-w-2xl text-sm text-slate-400">Join hundreds of students who have successfully
                    completed their database projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-purple-600 shadow-sm transition-colors hover:bg-slate-100">
                    Start Your Database Project Today
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
