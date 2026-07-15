@extends('layouts.app')

@section('title', 'Cybersecurity Assignment Help | Expert Cryptography & Security Programming Assistance')
@section('description', 'Struggling with cryptography algorithms, secure coding patches, or penetration testing reports? Get expert cybersecurity assignment help from certified CEH/CISSP experts.')

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
                        <span class="text-xs text-slate-500 dark:text-slate-400">from 850+ cybersecurity reviews</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">15</strong> Security Experts Online</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">2,400+ Security Audits Delivered</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Certified CEH &amp; CISSP Engineers</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – CORE SECURITY PLATFORMS & TOOLS
             SEO: Keyword coverage for search terms
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" id="security-ecosystem" aria-labelledby="sec-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Security Stack Coverage</p>
                    <h2 id="sec-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Get <span class="text-blue-600 dark:text-blue-400">Cybersecurity Assignment Help</span> in Any Area
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Whether it is writing cryptography protocols, compiling penetration testing reports, setting up secure firewall policies, or scripting secure APIs — we cover all cybersecurity topics.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-red-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🕵️</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Pen Testing</span>
                        <span class="text-[10px] text-slate-500">Metasploit / Nmap / Burp</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🔑</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Cryptography</span>
                        <span class="text-[10px] text-slate-500">AES / RSA / HMAC</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-emerald-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🛡️</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Secure Coding</span>
                        <span class="text-[10px] text-slate-500">OWASP 10 / Sanitization</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🌐</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Network Security</span>
                        <span class="text-[10px] text-slate-500">Wireshark / Snort / Firewalls</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-purple-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🐧</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Kali Linux</span>
                        <span class="text-[10px] text-slate-500">Bash / Auditing tools</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🐍</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Security Scripting</span>
                        <span class="text-[10px] text-slate-500">Python socket / Scapy</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – WHY STUDENTS PREFER US FOR SECURITY HELP
             SEO: High EEAT block
        =================================================== --}}
        <section class="bg-slate-900 py-16 sm:py-20" aria-labelledby="why-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">CEH &amp; CISSP Certified Team</span>
                    </div>
                    <h2 id="why-heading" class="text-4xl md:text-5xl font-black text-white leading-tight">
                        Why Choose Our <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Cybersecurity Project Help</span>
                    </h2>
                    <p class="mt-5 text-base text-slate-400 max-w-2xl mx-auto">
                        Information security assignments demand correct cryptographic logic, comprehensive vulnerability reports, CVE referencing, and strict firewall configurations. Here is why we are the preferred choice.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-start">
                    <div class="space-y-5 text-slate-400 text-[15px] leading-relaxed">
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                                Certified Ethical Hackers &amp; Analysts
                            </h3>
                            <p>Every security project is mapped to a specialist holding Certified Ethical Hacker (CEH), CISSP, or CompTIA Security+ credentials. They write secure, production-ready configurations conforming to NIST security standards.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                                Detailed Penetration Testing Reports
                            </h3>
                            <p>We deliver comprehensive pentesting files. Every report contains active Nmap scanning metrics, Metasploit payload logs, detailed vulnerability listings with CVSS ratings, and step-by-step remediation advice.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                                Secure Code Remediation
                            </h3>
                            <p>We fix insecure application loops. We sanitize input forms, secure SQL database queries with parameterized statements, secure cookie flags, and implement bcrypt password hashing logic.</p>
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div class="p-7 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10">
                            <h3 class="text-xl font-black text-white mb-6">What We Deliver with Every Order</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🛡️</div>
                                    <div><p class="text-white font-bold text-sm">Working Secure Code &amp; Configs</p><p class="text-xs text-slate-500 mt-0.5">Fully patched code folders, encryption scripts, and firewall configuration rules</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📊</div>
                                    <div><p class="text-white font-bold text-sm">Vulnerability &amp; Audit Reports</p><p class="text-xs text-slate-500 mt-0.5">Nmap output logs, port reviews, CVE references, and remediation recommendations</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📝</div>
                                    <div><p class="text-white font-bold text-sm">Setup &amp; Run Documentation</p><p class="text-xs text-slate-500 mt-0.5">Step-by-step guides to run security scripts inside Kali Linux or testing terminals</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">⚡</div>
                                    <div><p class="text-white font-bold text-sm">Fast 6-Hour Urgent Delivery</p><p class="text-xs text-slate-500 mt-0.5">Stuck on cryptography calculations or Wireshark traces before a deadline? We deliver fast</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔒</div>
                                    <div><p class="text-white font-bold text-sm">100% Privacy &amp; Data Security</p><p class="text-xs text-slate-500 mt-0.5">Your email, names, class parameters, and source code are kept strictly confidential</p></div>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}" class="group relative inline-flex w-full items-center justify-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-500 transition-all duration-300 shadow-lg hover:-translate-y-0.5 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                            <span class="relative z-10">Get Cybersecurity Help Now</span>
                            <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – TYPES OF CYBERSECURITY ASSIGNMENTS TACKLED
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" id="security-services" aria-labelledby="services-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Assignment Scope</p>
                    <h2 id="services-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Types of <span class="text-blue-600 dark:text-blue-400">Cybersecurity Assignments</span> We Handle
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Our experts possess deep knowledge of vulnerability patching, network tracing, cryptography, and secure scripting.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white text-xl">🛡️</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Secure Coding &amp; OWASP Top 10</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Remediating application vulnerabilities. Patches for SQL Injection, Cross-Site Scripting (XSS), CSRF token configurations, insecure deserializations, and buffer overflows.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• SQL parameterized queries</li>
                            <li>• XSS input sanitization filters</li>
                            <li>• httpOnly secure cookie setups</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white text-xl">🔑</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Cryptography &amp; Encryption</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Implementing secure encryption protocols. Coding AES-256 block encryptions, RSA asymmetric keys, digital signatures, hash algorithms, and TLS configurations.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Symmetric &amp; Asymmetric crypto</li>
                            <li>• HMAC authentication codes</li>
                            <li>• Key derivation functions (bcrypt)</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-600 text-white text-xl">🔍</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Penetration Testing &amp; Audits</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Performing system security assessments. Compiling Nmap port scans, Metasploit exploits, Burp Suite intercept logs, and vulnerability audits with CVSS ratings.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Nmap scan parameter analysis</li>
                            <li>• Vulnerability severity CVSS rating</li>
                            <li>• CVE referencing and remediation</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-600 text-white text-xl">🌐</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Network Security &amp; IDS</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Managing data flow protections. Configuring Snort IDS policies, auditing firewall rules, analyzing Wireshark packet captures, and tracing DNS/IP flags.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Wireshark packet tracer audits</li>
                            <li>• Snort rules definition syntax</li>
                            <li>• Firewall filtering configurations</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-600 text-white text-xl">🐧</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">OS Audits &amp; Bash Scripting</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Operating system configuration tasks. Scripting custom Python socket scanners, setting up Kali Linux tool audits, and writing Bash automation monitors.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Python socket programming</li>
                            <li>• Bash automated security audits</li>
                            <li>• Kali Linux tools sync setups</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-600 text-white text-xl">📄</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Policies &amp; Risk Assessments</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Writing theoretical frameworks. Detailing ISO 27001 models, NIST security standards, risk assessment indices, and information security policy essays.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• NIST CSF frameworks analysis</li>
                            <li>• ISO 27001 compliance criteria</li>
                            <li>• Risk assessment index charts</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – STEPS TO GET CYBERSECURITY ASSISTANCE
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="steps-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-purple-600 dark:text-purple-400">Streamlined Process</p>
                    <h2 id="steps-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Get Your Cybersecurity Project Completed in 4 Steps
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 text-base font-black text-white shadow-md">1</div>
                        <div class="mb-3 text-2xl">📋</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Upload Guidelines</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Submit your vulnerability assessment instructions, cryptographic specs, firewall rules, or security guidelines.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 text-base font-black text-white shadow-md">2</div>
                        <div class="mb-3 text-2xl">🎯</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Get Fair Pricing</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">A certified security engineer reviews your code or report parameters and provides a quote.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 text-base font-black text-white shadow-md">3</div>
                        <div class="mb-3 text-2xl">💻</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Builds Project</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">The developer codes the crypto, maps the pentesting scan details, patches vulnerabilities, and compiles reports.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-600 text-base font-black text-white shadow-md">4</div>
                        <div class="mb-3 text-2xl">🚀</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Download &amp; Review</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Download the working project files, run scans or execute security code locally, and request updates if needed.</p>
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
                        Guaranteed Enterprise-Grade Security
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-900/40 dark:bg-blue-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">💡</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Original Reports &amp; Code</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every vulnerability report, cryptography codebase, and config file is compiled from scratch based on your custom requirements.</p>
                    </div>
                    <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-900/40 dark:bg-emerald-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-xl text-white">⏱️</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Deadline Compliance</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We monitor our security audit timelines continuously to ensure your reports and code folders are delivered before the deadline.</p>
                    </div>
                    <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6 dark:border-purple-900/40 dark:bg-purple-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-xl text-white">🔄</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">72-Hour Free Revisions</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Need minor formatting edits, additional CVE documentation, or updated configurations? We offer free revisions within 72 hours of delivery.</p>
                    </div>
                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-900/40 dark:bg-amber-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-600 text-xl text-white">💰</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Refund Guarantee</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">If our code fails security assessments or misses core guidelines explicitly detailed in your order parameters, you are protected by our refund policy.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-slate-700 text-xl text-white">🔒</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Privacy</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your details are kept strictly private. Your files and assignment solutions are never shared or published.</p>
                    </div>
                    <div class="rounded-2xl border border-cyan-200 bg-cyan-50 p-6 dark:border-cyan-900/40 dark:bg-cyan-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-600 text-xl text-white">💬</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">24/7 Support Desk</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Connect with customer support or message your assigned security specialist directly to clarify requirements or get progress updates.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – STUDENT SECURITY REVIEWS
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="reviews-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">Student Reviews</p>
                    <h2 id="reviews-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        What Students Say About Our Cybersecurity Help
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Metasploit Audit</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"I was struggling to compile a penetration testing audit report showing active vulnerability exploitation using Metasploit. The expert provided a clean report with CVSS severity listings and remediation steps."</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Jackson W.</p><p class="text-xs text-slate-500">Georgia Tech</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">RSA Cryptography</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Had an assignment requiring building a custom RSA encryption logic in Java. The cryptographer wrote the code using proper key derivation parameters and explained the calculations in details. Excellent!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Maya S.</p><p class="text-xs text-slate-500">USC</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Snort IDS Setup</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"My network security project needed custom Snort rules to catch TCP SYN flood attacks. The expert configured the rule files, checked them on Wireshark, and sent testing logs. Lifesaver!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Daniel R.</p><p class="text-xs text-slate-500">Purdue</p></div>
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
                                What is Cybersecurity Assignment Help?
                            </h2>
                            <div class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <p><strong class="text-slate-900 dark:text-white font-semibold">Cybersecurity assignment help</strong> is a premium computer science support service that assists students and developers with cryptography design, secure coding practices, penetration audits, and network protection setups. Information security is complex because it demands understanding mathematical encryption models, threat modeling, CVE directories, and network protocols.</p>
                                <p>Whether you are implementing AES block cyphers, writing penetration testing reports, setting up Snort rule sets, or scripting secure web apps — our certified specialists write clean logic and provide testing logs to help you succeed.</p>
                                <p>We cover all major platforms: Cryptography (AES, RSA), Pen Testing (Metasploit, Nmap, Burp Suite), Network Security (Wireshark, Snort), Secure Coding (OWASP Top 10), Kali Linux, and security scripting.</p>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">🏫</span>
                                Common Security Challenges We Solve
                            </h3>
                            <ul class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Complex Cryptography Math:</strong> Struggling with RSA key derivations, modular exponents, or digital signature padding? We write correct, step-by-step algorithms.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Vulnerability Scan Explanations:</strong> Analyzing Nmap port scans or Burp Suite logs. We structure clear vulnerability reports mapping CVE codes.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Secure Coding Sanitization:</strong> Patching injection flaws, buffer overflows, or cross-origin headers to secure applications.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">⭐</span>
                                Technologies &amp; Tools We Cover
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Metasploit','Nmap','Burp Suite','Wireshark','Snort','Kali Linux','AES Encryption','RSA Cryptography','Digital Signatures','SHA-256','Bcrypt Hash','TLS/SSL','OWASP Top 10','Input Sanitization','CORS headers','Bash Scripting','Python Scapy','NIST CSF','ISO 27001','Firewall policies'] as $tech)
                                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-bold text-slate-700 dark:bg-slate-800 dark:text-slate-300">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">📊</span>
                                Our Cybersecurity Track Record
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-blue-600 dark:text-blue-400">2,400+</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Audits Completed</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-emerald-600 dark:text-emerald-400">98%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time rate</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-amber-600 dark:text-amber-400">4.9★</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Review</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-purple-600 dark:text-purple-400">100%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Audit Pass Rate</p>
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
                        Cybersecurity Assignment Help FAQs
                    </h2>
                </div>

                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you write penetration testing reports from scratch?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We compile detailed penetration reports. Our reports show port scanning metrics, security vulnerabilities details, severity rankings, CVE references, and step-by-step remediation updates.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can your developers code custom RSA or AES cryptography scripts?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Our cryptography specialists code AES block algorithms, RSA keys encryption, digital signature logic, and authentication hashes in Python, Java, C++, or JavaScript.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you help with secure coding and vulnerability patching?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We audit your code for OWASP Top 10 vulnerabilities (like SQL injection, XSS, CSRF, or broken authentication) and patch the source files cleanly with detailed remediation documentation.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the security configurations work out of the box?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. Every configuration script or code module is tested inside virtual machines (like Kali Linux) to ensure they execute correctly and pass security audits on first launch.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">How fast can you complete my cybersecurity project?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Simple cryptography coding or firewall rule setups can be completed in 6 to 12 hours. Large penetration testing audits or NIST compliance frameworks take 24 to 72 hours.</p>
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
                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Security Experts Online Now</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                    Ready to Get Your<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Cybersecurity Project Secured?</span>
                </h2>

                <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                    Get clean, verified cryptography code, penetration testing audits, Snort rules, and secure coding patches. Submit details for a free quote within 5 minutes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="relative z-10 text-sm">Get Cybersecurity Help</span>
                        <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                    <span class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.3em]">Free Quote &middot; No Obligation</span>
                </div>

                <div class="mt-12 flex flex-wrap items-center justify-center gap-x-10 gap-y-5">
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">2,400+</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Audits Completed</p>
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
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "Do you write penetration testing reports from scratch?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We compile detailed penetration reports. Our reports show port scanning metrics, security vulnerabilities details, severity rankings, CVE references, and step-by-step remediation updates."
              }
            },
            {
              "@type": "Question",
              "name": "Can your developers code custom RSA or AES cryptography scripts?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Our cryptography specialists code AES block algorithms, RSA keys encryption, digital signature logic, and authentication hashes in Python, Java, C++, or JavaScript."
              }
            },
            {
              "@type": "Question",
              "name": "Do you help with secure coding and vulnerability patching?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. We audit your code for OWASP Top 10 vulnerabilities (like SQL injection, XSS, CSRF, or broken authentication) and patch the source files cleanly with detailed remediation documentation."
              }
            },
            {
              "@type": "Question",
              "name": "Will the security configurations work out of the box?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Every configuration script or code module is tested inside virtual machines (like Kali Linux) to ensure they execute correctly and pass security audits on first launch."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@type": "Service",
          "name": "Cybersecurity Assignment Help",
          "description": "Professional cybersecurity assignment help and cryptography project assistance. Expert security engineers available 24/7 for OWASP secure coding, penetration testing audits, and Wireshark/Snort setups.",
          "provider": {
            "@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "serviceType": "Cybersecurity Assignment Help",
          "offers": {
            "@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "15",
            "highPrice": "600"
          }
        }
        </script>
    </div>
@endsection
