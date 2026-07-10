@extends('layouts.app')

@section('title', 'Cybersecurity Projects - Expert Help Available')
@section('description', 'Get professional help with cybersecurity projects. Expert security professionals available 24/7 for security analysis, penetration testing, encryption, and secure coding.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section 1 -->
        <section class="py-32 bg-gradient-to-br from-white via-red-50/20 to-purple-50/30 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-red-100 to-purple-100 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-100 to-red-100 rounded-full opacity-20 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-red-600 to-purple-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                🛡️ Defend Your Digital Assets
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Professional Cybersecurity<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-600 to-purple-600">That Actually Protects</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Get expert help from certified security professionals who've defended real systems and understand what makes networks truly secure.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Ever stared at a SQL injection vulnerability you can't fix? Or tried to implement AES encryption only to realize you're storing the key in plain text?</strong> Cybersecurity isn't just about installing antivirus software – you're defending against SQL injections, XSS attacks, buffer overflows, broken authentication, insecure deserialization, and zero-day exploits. When your penetration testing report has 47 critical vulnerabilities, your encryption implementation keeps failing, or you can't figure out why your firewall rules aren't blocking malicious traffic, frustration turns to panic. That's when you need a certified security expert who's actually defended production systems under real attacks.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Imagine submitting a security project that makes your professor say "This is enterprise-grade security."</strong> Your web application has proper input validation, parameterized queries preventing SQL injection, secure session management with httpOnly cookies, CSRF tokens on all forms, and encrypted passwords using bcrypt with proper salting. Your network security includes properly configured firewalls with least-privilege rules, intrusion detection systems with custom signatures, and encrypted communications using TLS 1.3. Every vulnerability identified in the assessment has been patched with documented remediation steps. That's the difference between theoretical security and practical defense – and that's what you get working with professionals who've built 320+ security solutions.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>We don't just write security code – we think like attackers to build better defenses.</strong> Need a penetration testing report? You'll get comprehensive vulnerability scans with Nmap, Metasploit exploitation attempts with proof-of-concept attacks, detailed risk assessments with CVSS scores, and actionable remediation recommendations. Building secure authentication? Expect multi-factor authentication implementation, secure password storage with proper hashing algorithms, JWT tokens with refresh mechanisms, and rate limiting to prevent brute force attacks. Implementing encryption? We use industry-standard AES-256, proper key management with key derivation functions, secure random number generation, and authenticated encryption modes that prevent tampering.
                            </p>

                            <p class="text-gray-700 leading-relaxed">
                                <strong>Here's a typical security crisis:</strong> Your web application security assessment is due in 48 hours. You've identified XSS vulnerabilities but don't know how to sanitize input properly. The SQL queries are injectable. Sessions aren't secure. Passwords are stored in MD5 (yikes!). You message us. Within hours, a certified security professional analyzes your application, patches all critical vulnerabilities, implements proper input validation with whitelisting, replaces vulnerable code with secure alternatives, adds security headers, and delivers a comprehensive security report. Every fix includes explanation of the vulnerability, why it's dangerous, and how the solution prevents exploitation – because understanding security threats makes you a better developer.
                            </p>
                        </div>

                        <!-- Feature Highlights -->
                        <div class="grid md:grid-cols-3 gap-6 mt-12">
                            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 border border-red-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">🔒</div>
                                <h3 class="font-bold text-gray-900 mb-2">Vulnerability Assessment</h3>
                                <p class="text-gray-600 text-sm">Comprehensive security audits with penetration testing</p>
                            </div>
                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">🔐</div>
                                <h3 class="font-bold text-gray-900 mb-2">Encryption & Crypto</h3>
                                <p class="text-gray-600 text-sm">AES, RSA, TLS implementation with proper key management</p>
                            </div>
                            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 border border-indigo-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">🛡️</div>
                                <h3 class="font-bold text-gray-900 mb-2">Secure Coding</h3>
                                <p class="text-gray-600 text-sm">Input validation, authentication, and defense in depth</p>
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Cybersecurity Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert security professionals work with encryption,
                        penetration testing, and modern security tools to deliver comprehensive security solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Encryption & Cryptography -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Encryption</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔐</div>
                                    <h4 class="font-semibold text-gray-900">AES Encryption</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔑</div>
                                    <h4 class="font-semibold text-gray-900">RSA</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔒</div>
                                    <h4 class="font-semibold text-gray-900">SSL/TLS</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Penetration Testing -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Pen Testing</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🔍</div>
                                    <h4 class="font-semibold text-gray-900">Metasploit</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🛠️</div>
                                    <h4 class="font-semibold text-gray-900">Burp Suite</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🔬</div>
                                    <h4 class="font-semibold text-gray-900">Nmap</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Analysis -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Security Analysis</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🛡️</div>
                                    <h4 class="font-semibold text-gray-900">OWASP Tools</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔎</div>
                                    <h4 class="font-semibold text-gray-900">Wireshark</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">📊</div>
                                    <h4 class="font-semibold text-gray-900">Snort</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Frameworks & Languages -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Languages & Tools</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🐍</div>
                                    <h4 class="font-semibold text-gray-900">Python</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🐧</div>
                                    <h4 class="font-semibold text-gray-900">Kali Linux</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">⚡</div>
                                    <h4 class="font-semibold text-gray-900">Bash Scripting</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Why Choose Our Services Section -->
        <section class="py-32 bg-gradient-to-br from-gray-50 via-purple-50/20 to-red-50/20 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-20 left-0 w-72 h-72 bg-gradient-to-br from-purple-200 to-red-200 rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute bottom-20 right-0 w-72 h-72 bg-gradient-to-tl from-red-200 to-indigo-200 rounded-full opacity-10 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-purple-600 to-red-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                ⭐ Trusted by 320+ Security Students
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Why Security Professionals<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-red-600">Choose Our Services</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Real-world security expertise, defensive strategies that work, and education that builds your security mindset.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Picture submitting a security audit that identifies vulnerabilities your professor didn't even think to test for.</strong> That happens when you work with certified security professionals holding CEH, OSCP, and CISSP credentials who've actually defended enterprise networks and responded to real breaches. We're not tutorial writers reading OWASP documentation – we've performed penetration tests on banking systems, implemented zero-trust architectures for healthcare providers, and responded to ransomware incidents at 3 AM. We know that SQL injection isn't just about adding quotes to inputs, and that XSS has multiple variants requiring different defenses. This battle-tested expertise is what separates academic security from practical defense.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>What you actually receive goes far beyond code.</strong> Open your delivery to find complete security implementations with threat modeling documents showing attack surfaces and data flow diagrams, penetration testing reports with screenshots of exploitation attempts, security assessment documentation following NIST or ISO 27001 frameworks, secure code with input validation and output encoding, properly configured security tools with custom rulesets, and detailed remediation guides. Every vulnerability includes CVE references, CVSS scores, and real-world exploit scenarios. Want to understand why parameterized queries prevent SQL injection? We include diagrams showing how prepared statements work at the database level. This isn't just homework completion – it's security education that makes you dangerous (to attackers).
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Speed meets security rigor:</strong> It's 10 PM. Your security audit is due tomorrow and Burp Suite found 23 vulnerabilities you don't know how to fix. Your encryption implementation is somehow less secure than plaintext. Your firewall is blocking legitimate traffic while allowing malicious connections. Panic sets in. You reach out. Within 30 minutes, a security expert responds with a triage plan prioritizing critical vulnerabilities. Within hours, you have patched code, updated configurations, and documentation explaining each fix. We don't just patch vulnerabilities – we implement defense-in-depth strategies with multiple security layers, because single points of failure are single points of compromise.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Security isn't a checkbox – it's a mindset we help you develop.</strong> Every solution includes threat modeling showing what you're protecting against and why. We explain the CIA triad (Confidentiality, Integrity, Availability) in context of your specific application. You'll understand why we chose bcrypt over SHA-256 for passwords, why HTTPS alone doesn't prevent CSRF attacks, and why input validation should happen server-side even if you have client-side checks. This isn't security theater – it's practical defensive programming that assumes attackers are smart, motivated, and already probing your systems.
                            </p>

                            <p class="text-gray-700 leading-relaxed">
                                <strong>The real value is learning to think like both attacker and defender.</strong> Our documentation doesn't just explain what the code does – it walks through attack scenarios we're defending against. "Here's how an attacker would exploit this." "This is why that defense fails." "Here's the proper mitigation." Every security project becomes a learning experience in offensive and defensive security. Students return for more projects not because they can't secure their applications, but because they trust our expertise and appreciate learning security from professionals who've actually defended against real threats. With 320+ security projects delivered and 4.9/5 rating, we've proven that expert guidance accelerates your security journey while making the internet a slightly safer place.
                            </p>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid md:grid-cols-4 gap-6 mt-12">
                            <div class="text-center bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="text-4xl font-bold text-green-600 mb-2">4.9/5</div>
                                <div class="text-gray-600 text-sm font-medium">Security Rating</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="text-4xl font-bold text-blue-600 mb-2">30min</div>
                                <div class="text-gray-600 text-sm font-medium">Avg Response</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-purple-50 to-violet-50 rounded-xl p-6 border border-purple-200">
                                <div class="text-4xl font-bold text-purple-600 mb-2">320+</div>
                                <div class="text-gray-600 text-sm font-medium">Systems Secured</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-red-50 to-rose-50 rounded-xl p-6 border border-red-200">
                                <div class="text-4xl font-bold text-red-600 mb-2">0</div>
                                <div class="text-gray-600 text-sm font-medium">Breaches</div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on database
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic Database</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $30</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple database design
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic SQL queries
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    3-24 hour delivery
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Database</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $75</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complex database design
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Query optimization
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Stored procedures
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Performance tuning
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise Solution</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $150</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full database architecture
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Data migration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    2-3 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Replication setup
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Backup strategies
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Database Development Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering efficient and
                        scalable database solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Requirements Analysis</h3>
                        <p class="text-gray-600">We analyze your data requirements, relationships, and query patterns to
                            design optimal solutions.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Database Design</h3>
                        <p class="text-gray-600">Create normalized schema, define relationships, and establish proper
                            indexing strategies.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Implementation & Testing</h3>
                        <p class="text-gray-600">Build the database, create queries, and conduct thorough performance
                            testing.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Optimization & Delivery</h3>
                        <p class="text-gray-600">Optimize performance, provide documentation, and deliver your complete
                            database solution.</p>
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
                        database programming projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Excellent database design for my e-commerce project! The expert
                            created a normalized schema with proper indexing, and the queries are lightning fast. Great
                            documentation too!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                S</div>
                            <div>
                                <div class="font-semibold text-gray-900">Sarah M.</div>
                                <div class="text-sm text-gray-500">Database Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing help with complex SQL queries! The developer optimized my
                            slow queries and implemented proper indexes. Performance improved by 10x. Highly recommend!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                D</div>
                            <div>
                                <div class="font-semibold text-gray-900">David K.</div>
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
                        <p class="text-gray-600 mb-6">"Professional MongoDB implementation! The NoSQL design was perfect for
                            my social media app. Clean data modeling and efficient aggregation queries. Excellent work!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                L</div>
                            <div>
                                <div class="font-semibold text-gray-900">Lisa T.</div>
                                <div class="text-sm text-gray-500">Software Engineering Student</div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our database
                        programming service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Which database systems do you support?</h3>
                        <p class="text-gray-600">We work with all major database systems including MySQL, PostgreSQL, SQL
                            Server, Oracle, MongoDB, Redis, Firebase, and more. We can help you choose the best database for
                            your project requirements.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help optimize slow database queries?
                        </h3>
                        <p class="text-gray-600">Absolutely! We specialize in query optimization, indexing strategies,
                            execution plan analysis, and database performance tuning. We can significantly improve your
                            database performance.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide database design and modeling?
                        </h3>
                        <p class="text-gray-600">Yes! We provide complete database design services including ER diagrams,
                            schema design, normalization, relationship mapping, and data modeling following best practices.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with data migration projects?</h3>
                        <p class="text-gray-600">Yes, we assist with data migration between different database systems,
                            including ETL processes, data transformation, and ensuring data integrity during migration.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the database delivery?</h3>
                        <p class="text-gray-600">You'll receive complete database scripts, schema documentation, ER diagrams,
                            query examples, and setup instructions. For advanced projects, we also include optimization
                            reports and maintenance guidelines.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your Database?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their database projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Your Database Project Today
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
