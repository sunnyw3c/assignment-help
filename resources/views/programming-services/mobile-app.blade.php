@extends('layouts.app')

@section('title', 'Mobile App Development - Expert Help Available')
@section('description', 'Get professional help with mobile app development projects. Expert developers available 24/7
    for React Native, Flutter, Swift, Kotlin, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Mobile App Development Content Section -->
        <section class="bg-slate-50 py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600">Comprehensive Mobile Development Guide</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Complete Mobile App <span class="text-blue-600">Development Solutions</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">From idea to App Store launch—your complete roadmap to mobile app success</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Hero Introduction Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                    <span class="text-xl">🚀</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">Transform Your Ideas Into Reality</h3>
                                    <p class="text-sm font-semibold text-purple-600">Join 5+ billion smartphone users worldwide</p>
                                </div>
                            </div>

                            <div class="mb-5 grid gap-3 sm:grid-cols-3">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                    <div class="mb-1 text-2xl font-bold text-purple-600">5B+</div>
                                    <p class="text-xs font-semibold text-slate-700">Global Mobile Users</p>
                                </div>
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                    <div class="mb-1 text-2xl font-bold text-blue-600">90%</div>
                                    <p class="text-xs font-semibold text-slate-700">Time Spent on Mobile Apps</p>
                                </div>
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                    <div class="mb-1 text-2xl font-bold text-indigo-600">$693B</div>
                                    <p class="text-xs font-semibold text-slate-700">App Revenue (2024)</p>
                                </div>
                            </div>

                            <p class="mb-4 text-sm leading-relaxed text-slate-600">
                                <span class="font-semibold text-purple-600">Mobile apps have revolutionized how we live.</span> From ordering food and managing finances to staying connected and learning new skills, billions of people worldwide rely on mobile applications every single day. Whether you're a student tackling a mobile development assignment, an entrepreneur with the next big app idea, or a developer needing expert guidance on complex features—professional mobile app development services are your shortcut to success.
                            </p>

                            <div class="rounded-xl bg-slate-900 p-5 text-white">
                                <p class="mb-1 text-sm font-semibold">Why Mobile Matters:</p>
                                <p class="text-sm text-slate-300">
                                    Mobile isn't the future—it's the present. Apps generate more revenue than desktop, have higher engagement rates, and provide experiences that websites simply can't match. The question isn't whether to build mobile apps, but how to build them right.
                                </p>
                            </div>
                        </div>

                        <!-- Technology Deep Dive Cards -->
                        <div class="grid gap-5 sm:grid-cols-2">
                            <!-- Cross-Platform Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                                        <span class="text-xl">⚛️</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900">Cross-Platform Magic</h4>
                                        <p class="text-xs font-semibold text-purple-600">Write once, deploy everywhere</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <p class="text-sm leading-relaxed text-slate-600">
                                            <span class="font-semibold text-blue-600">React Native + Flutter = Developer Paradise.</span> Build stunning apps for iOS and Android using a single codebase. Save 50% development time while maintaining near-native performance. Facebook, Instagram, Alibaba, and Google Ads all trust cross-platform frameworks—so can you!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-blue-50 p-3 text-center">
                                            <p class="text-base font-bold text-blue-700">60%</p>
                                            <p class="text-xs text-slate-600">Cost Reduction</p>
                                        </div>
                                        <div class="rounded-lg bg-purple-50 p-3 text-center">
                                            <p class="text-base font-bold text-purple-700">2x</p>
                                            <p class="text-xs text-slate-600">Faster Launch</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">React Native</span>
                                        <span class="rounded-full bg-purple-50 px-3 py-1 text-xs font-semibold text-purple-700">Flutter</span>
                                        <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700">Hot Reload</span>
                                        <span class="rounded-full bg-pink-50 px-3 py-1 text-xs font-semibold text-pink-700">Single Codebase</span>
                                    </div>
                                </div>
                            </div>

                            <!-- iOS Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-orange-500 text-white">
                                        <span class="text-xl">🍎</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900">Native iOS Excellence</h4>
                                        <p class="text-xs font-semibold text-orange-600">Premium Apple experience</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <p class="text-sm leading-relaxed text-slate-600">
                                            <span class="font-semibold text-orange-600">Swift + SwiftUI = iOS Perfection.</span> Build lightning-fast apps that feel like they were made by Apple. Access exclusive features like ARKit, HealthKit, and seamless integration with Apple Watch, iPad, and Mac. Your users deserve the best—give it to them!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-orange-50 p-3 text-center">
                                            <p class="text-base font-bold text-orange-700">1.5B+</p>
                                            <p class="text-xs text-slate-600">Active Devices</p>
                                        </div>
                                        <div class="rounded-lg bg-pink-50 p-3 text-center">
                                            <p class="text-base font-bold text-pink-700">$1.1T</p>
                                            <p class="text-xs text-slate-600">App Store Revenue</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">Swift</span>
                                        <span class="rounded-full bg-pink-50 px-3 py-1 text-xs font-semibold text-pink-700">SwiftUI</span>
                                        <span class="rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-red-700">UIKit</span>
                                        <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Combine</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Android Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">
                                        <span class="text-xl">🤖</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900">Native Android Power</h4>
                                        <p class="text-xs font-semibold text-emerald-600">Reach the world's largest audience</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <p class="text-sm leading-relaxed text-slate-600">
                                            <span class="font-semibold text-emerald-600">Kotlin + Jetpack Compose = Modern Android.</span> Tap into 3+ billion Android devices worldwide! Modern, declarative UI, null-safe code, and seamless coroutines make Android development a joy. Google Play's massive reach means unlimited potential!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-emerald-50 p-3 text-center">
                                            <p class="text-base font-bold text-emerald-700">3B+</p>
                                            <p class="text-xs text-slate-600">Active Devices</p>
                                        </div>
                                        <div class="rounded-lg bg-teal-50 p-3 text-center">
                                            <p class="text-base font-bold text-teal-700">72%</p>
                                            <p class="text-xs text-slate-600">Market Share</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-700">Kotlin</span>
                                        <span class="rounded-full bg-teal-50 px-3 py-1 text-xs font-semibold text-teal-700">Jetpack Compose</span>
                                        <span class="rounded-full bg-cyan-50 px-3 py-1 text-xs font-semibold text-cyan-700">Material Design</span>
                                        <span class="rounded-full bg-sky-50 px-3 py-1 text-xs font-semibold text-sky-700">Coroutines</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Backend Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-500 text-white">
                                        <span class="text-xl">🔥</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900">Backend &amp; APIs</h4>
                                        <p class="text-xs font-semibold text-amber-600">Power your app with cloud magic</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <p class="text-sm leading-relaxed text-slate-600">
                                            <span class="font-semibold text-amber-600">Firebase + REST APIs = Unlimited Power.</span> Real-time databases, cloud storage, authentication, push notifications, and analytics—all in one platform. Your app becomes intelligent, connected, and scalable from day one!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div class="rounded-lg bg-amber-50 p-3 text-center">
                                            <p class="text-base font-bold text-amber-700">99.9%</p>
                                            <p class="text-xs text-slate-600">Uptime SLA</p>
                                        </div>
                                        <div class="rounded-lg bg-orange-50 p-3 text-center">
                                            <p class="text-base font-bold text-orange-700">&lt;100ms</p>
                                            <p class="text-xs text-slate-600">API Response</p>
                                        </div>
                                    </div>

                                    <div class="flex flex-wrap gap-2">
                                        <span class="rounded-full bg-amber-50 px-3 py-1 text-xs font-semibold text-amber-700">Firebase</span>
                                        <span class="rounded-full bg-orange-50 px-3 py-1 text-xs font-semibold text-orange-700">REST APIs</span>
                                        <span class="rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-red-700">GraphQL</span>
                                        <span class="rounded-full bg-pink-50 px-3 py-1 text-xs font-semibold text-pink-700">WebSocket</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Advanced Features Showcase -->
                        <div class="rounded-2xl bg-slate-900 p-6 text-white sm:p-8">
                            <div class="mb-6 text-center">
                                <h3 class="mb-2 text-2xl font-bold">Advanced Features Arsenal</h3>
                                <p class="text-sm text-slate-400">Everything you need to build world-class mobile apps</p>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-3">
                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <div class="mb-3 flex items-center gap-2">
                                        <span class="text-lg">📸</span>
                                        <h5 class="text-sm font-bold text-white">Camera &amp; Media</h5>
                                    </div>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Photo/video capture</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Image filters &amp; editing</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> QR code scanning</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Gallery integration</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Media compression</li>
                                    </ul>
                                </div>

                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <div class="mb-3 flex items-center gap-2">
                                        <span class="text-lg">📍</span>
                                        <h5 class="text-sm font-bold text-white">Location Services</h5>
                                    </div>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> GPS tracking</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Geofencing alerts</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Maps integration</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Location-based notifications</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Distance calculations</li>
                                    </ul>
                                </div>

                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <div class="mb-3 flex items-center gap-2">
                                        <span class="text-lg">💳</span>
                                        <h5 class="text-sm font-bold text-white">Payments &amp; Commerce</h5>
                                    </div>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Stripe integration</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> In-app purchases</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Payment gateways</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Subscription management</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Digital wallets</li>
                                    </ul>
                                </div>

                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <div class="mb-3 flex items-center gap-2">
                                        <span class="text-lg">🔔</span>
                                        <h5 class="text-sm font-bold text-white">Notifications</h5>
                                    </div>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Push notifications</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Local notifications</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Rich media alerts</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Notification actions</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Badge management</li>
                                    </ul>
                                </div>

                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <div class="mb-3 flex items-center gap-2">
                                        <span class="text-lg">🔐</span>
                                        <h5 class="text-sm font-bold text-white">Authentication</h5>
                                    </div>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Social login integration</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Biometric auth (Face/Touch ID)</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> JWT token management</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Multi-factor authentication</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Password recovery flows</li>
                                    </ul>
                                </div>

                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <div class="mb-3 flex items-center gap-2">
                                        <span class="text-lg">💾</span>
                                        <h5 class="text-sm font-bold text-white">Data Management</h5>
                                    </div>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> SQLite databases</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Realm integration</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Offline-first architecture</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Data synchronization</li>
                                        <li class="flex items-center gap-2"><span class="text-emerald-400">✓</span> Encrypted storage</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Why Choose Us Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-500 text-white">
                                    <span class="text-xl">🏆</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">Why We're Different</h3>
                                    <p class="text-sm font-semibold text-amber-600">Not just code—we build mobile app masterpieces</p>
                                </div>
                            </div>

                            <div class="mb-5 grid gap-4 sm:grid-cols-3">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 text-center">
                                    <div class="mx-auto mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                                        <span class="text-xl">🎯</span>
                                    </div>
                                    <h4 class="mb-2 text-sm font-bold text-slate-900">Clean Architecture</h4>
                                    <p class="text-xs text-slate-600">
                                        MVVM, Redux, BLoC—we use battle-tested patterns that make your code maintainable, testable, and scalable for years to come.
                                    </p>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 text-center">
                                    <div class="mx-auto mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-100">
                                        <span class="text-xl">⚡</span>
                                    </div>
                                    <h4 class="mb-2 text-sm font-bold text-slate-900">Performance First</h4>
                                    <p class="text-xs text-slate-600">
                                        Lazy loading, image caching, memory optimization—your app will be lightning fast on day one, not after months of debugging.
                                    </p>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5 text-center">
                                    <div class="mx-auto mb-3 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-100">
                                        <span class="text-xl">🔒</span>
                                    </div>
                                    <h4 class="mb-2 text-sm font-bold text-slate-900">Fort Knox Security</h4>
                                    <p class="text-xs text-slate-600">
                                        Keychain storage, certificate pinning, OWASP compliance—we protect your users' data like it's our own.
                                    </p>
                                </div>
                            </div>

                            <div class="mb-5 rounded-xl bg-slate-900 p-6 text-white">
                                <div class="grid grid-cols-3 gap-4 text-center">
                                    <div>
                                        <div class="text-2xl font-bold text-white">100%</div>
                                        <p class="text-xs text-slate-400">Code Coverage</p>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-white">24/7</div>
                                        <p class="text-xs text-slate-400">Expert Support</p>
                                    </div>
                                    <div>
                                        <div class="text-2xl font-bold text-white">500+</div>
                                        <p class="text-xs text-slate-400">Apps Delivered</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                                <h4 class="mb-2 flex items-center gap-2 text-sm font-bold text-slate-900">
                                    <span class="text-lg">📚</span> Complete Documentation Included
                                </h4>
                                <p class="mb-3 text-sm text-slate-600">
                                    You don't just get working code—you get the knowledge to maintain and enhance it. Every project includes:
                                </p>
                                <div class="grid gap-2 sm:grid-cols-2">
                                    <div class="flex items-center gap-2 text-xs text-slate-600">
                                        <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                        <span>Architecture decision records</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-slate-600">
                                        <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                        <span>API integration guides</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-slate-600">
                                        <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                        <span>Setup &amp; deployment instructions</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-slate-600">
                                        <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                        <span>Maintenance best practices</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="bg-white py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Mobile Technologies We Master</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Our expert mobile developers work with cutting-edge
                        technologies to build native and cross-platform mobile applications.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Cross-Platform -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Cross-Platform</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">⚛️</span>
                                <h4 class="text-sm font-semibold text-slate-900">React Native</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">🎯</span>
                                <h4 class="text-sm font-semibold text-slate-900">Flutter</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">⚡</span>
                                <h4 class="text-sm font-semibold text-slate-900">Xamarin</h4>
                            </div>
                        </div>
                    </div>

                    <!-- iOS Development -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">iOS Development</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">🍎</span>
                                <h4 class="text-sm font-semibold text-slate-900">Swift</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">📱</span>
                                <h4 class="text-sm font-semibold text-slate-900">Objective-C</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">🎨</span>
                                <h4 class="text-sm font-semibold text-slate-900">SwiftUI</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Android Development -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Android Development</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">🤖</span>
                                <h4 class="text-sm font-semibold text-slate-900">Kotlin</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">☕</span>
                                <h4 class="text-sm font-semibold text-slate-900">Java</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">🎯</span>
                                <h4 class="text-sm font-semibold text-slate-900">Jetpack Compose</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Backend & APIs -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Backend &amp; APIs</h3>
                        <div class="space-y-2">
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">🔥</span>
                                <h4 class="text-sm font-semibold text-slate-900">Firebase</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">🌐</span>
                                <h4 class="text-sm font-semibold text-slate-900">REST APIs</h4>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-slate-50 p-3">
                                <span class="text-xl">📊</span>
                                <h4 class="text-sm font-semibold text-slate-900">GraphQL</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="bg-slate-50 py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Transparent Pricing</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Fair, transparent pricing based on app complexity.
                        No hidden fees, no surprises.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="text-center">
                            <h3 class="mb-1 text-base font-bold text-slate-900">Basic Mobile App</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600">From $75</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Simple mobile app features
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Basic UI/UX design
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    3-5 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Documentation included
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-700">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="relative rounded-2xl border-2 border-purple-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-purple-600 px-3 py-1 text-[11px] font-semibold uppercase tracking-wide text-white">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="mb-1 text-base font-bold text-slate-900">Advanced Mobile App</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600">From $150</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Cross-platform development
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    API integration
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    5-7 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Testing &amp; debugging
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    App store guidelines
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-700">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="text-center">
                            <h3 class="mb-1 text-base font-bold text-slate-900">Complete Mobile Solution</h3>
                            <div class="mb-4 text-2xl font-bold text-purple-600">From $300</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-600">
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Full-featured mobile app
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Backend integration
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    7-14 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    App store deployment
                                </li>
                                <li class="flex items-center gap-2">
                                    <svg class="h-4 w-4 shrink-0 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    Post-launch support
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-purple-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-purple-700">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Process Section -->
        <section class="bg-white py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Our Mobile App Development Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Proven methodology for delivering high-quality
                        mobile applications.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">1</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Requirements Analysis</h3>
                        <p class="text-sm leading-relaxed text-slate-600">We analyze your app requirements, target platform, and user experience
                            needs.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">2</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Design &amp; Architecture</h3>
                        <p class="text-sm leading-relaxed text-slate-600">Create wireframes, UI design, and technical architecture for your mobile
                            app.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">3</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Development &amp; Testing</h3>
                        <p class="text-sm leading-relaxed text-slate-600">Build your app with clean code, implement features, and conduct thorough
                            testing.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-white">
                            <span class="text-base font-bold">4</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Delivery &amp; Support</h3>
                        <p class="text-sm leading-relaxed text-slate-600">Deliver your completed app with documentation and deployment assistance.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="bg-slate-50 py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">What Our Clients Say</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Real feedback from students who got help with their
                        mobile app development projects.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600">"Incredible work on my React Native app! The developer created a
                            beautiful, functional mobile app that works perfectly on both iOS and Android. Excellent
                            communication!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-600 text-sm font-bold text-white">
                                A</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Alex T.</div>
                                <div class="text-xs text-slate-500">Mobile Development Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600">"Amazing Flutter app development! The expert delivered a
                            cross-platform app with smooth animations and perfect performance. Highly recommend for mobile
                            projects."</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-bold text-white">
                                J</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Jessica L.</div>
                                <div class="text-xs text-slate-500">Computer Science Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex items-center gap-1 text-amber-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm leading-relaxed text-slate-600">"Professional iOS development with Swift! The app was delivered ahead
                            of schedule with clean code and excellent documentation. Great experience overall!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-600 text-sm font-bold text-white">
                                R</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Ryan M.</div>
                                <div class="text-xs text-slate-500">iOS Development Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Expert Content Section -->
        <section class="bg-white py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600">Expert Insights</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Master Mobile App Development <span class="text-blue-600">Like a Pro</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Industry-proven strategies that separate amateur apps from professional success stories</p>
                    </div>

                    <div class="space-y-5">
                        <!-- Interactive UI/UX Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">
                                    <span class="text-xl">🎨</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">Mobile UI/UX Design That Users Love</h3>
                                    <p class="text-sm font-semibold text-purple-600">The secret to 5-star app store ratings</p>
                                </div>
                            </div>

                            <div class="space-y-4">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                                    <h4 class="mb-2 flex items-center text-sm font-bold text-slate-900">
                                        <span class="mr-2 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-purple-100 text-xs text-purple-700">1</span>
                                        Platform-Native Design Language
                                    </h4>
                                    <p class="text-sm leading-relaxed text-slate-600">
                                        Creating exceptional mobile experiences isn't about copying desktop designs—it's about embracing each platform's unique personality. iOS users expect the elegance of Apple's Human Interface Guidelines: crisp typography, smooth animations, and interfaces that feel like they belong on an iPhone. Android users appreciate Material Design's bold colors, responsive surfaces, and meaningful motion that makes apps feel alive and interactive.
                                    </p>
                                    <div class="mt-3 flex flex-wrap gap-2">
                                        <span class="rounded-full bg-purple-50 px-3 py-1 text-xs font-semibold text-purple-700">iOS Guidelines</span>
                                        <span class="rounded-full bg-blue-50 px-3 py-1 text-xs font-semibold text-blue-700">Material Design</span>
                                        <span class="rounded-full bg-indigo-50 px-3 py-1 text-xs font-semibold text-indigo-700">Adaptive UI</span>
                                    </div>
                                </div>

                                <div class="grid gap-4 sm:grid-cols-2">
                                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                                        <div class="mb-2 flex items-center gap-2">
                                            <span class="text-lg">👆</span>
                                            <h5 class="text-sm font-bold text-slate-900">Touch Target Perfection</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            Mobile screens demand precision. We ensure every button, link, and interactive element meets the golden standard: <span class="font-semibold text-purple-600">44x44 points on iOS, 48x48dp on Android</span>. No more frustrated taps on tiny buttons—your users will thank you!
                                        </p>
                                    </div>

                                    <div class="rounded-xl border border-slate-200 bg-white p-5 shadow-sm">
                                        <div class="mb-2 flex items-center gap-2">
                                            <span class="text-lg">🧭</span>
                                            <h5 class="text-sm font-bold text-slate-900">Intuitive Navigation</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            Users should never feel lost in your app. Whether it's tab bars, drawer navigation, or stack-based flows, we implement navigation patterns that feel natural and familiar, reducing cognitive load and boosting user satisfaction.
                                        </p>
                                    </div>
                                </div>

                                <div class="rounded-xl bg-slate-900 p-5 text-white">
                                    <p class="mb-1 text-sm font-semibold">Pro Tip:</p>
                                    <p class="text-sm text-slate-300">
                                        The best mobile UIs are invisible—users don't think about how to use them, they just do. We achieve this through relentless focus on information hierarchy, whitespace, and platform conventions that users already understand.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Performance & Security Cards -->
                        <div class="grid gap-5 sm:grid-cols-2">
                            <!-- Performance Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-600 text-white">
                                        <span class="text-xl">⚡</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900">Lightning-Fast Performance</h4>
                                        <p class="text-xs font-semibold text-blue-600">Speed is a feature</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <div class="mb-1 flex items-center gap-2">
                                            <span class="text-base">🚀</span>
                                            <h5 class="text-sm font-bold text-slate-900">Launch Speed</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            Users abandon apps that take more than 3 seconds to load. We optimize startup time through code splitting, lazy loading, and efficient initialization sequences.
                                        </p>
                                    </div>

                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <div class="mb-1 flex items-center gap-2">
                                            <span class="text-base">🖼️</span>
                                            <h5 class="text-sm font-bold text-slate-900">Image Optimization</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            Smart image handling with WebP/HEIF formats, progressive loading, and caching strategies using SDWebImage or Glide keeps your app snappy.
                                        </p>
                                    </div>

                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <div class="mb-1 flex items-center gap-2">
                                            <span class="text-base">📡</span>
                                            <h5 class="text-sm font-bold text-slate-900">Network Efficiency</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            Request batching, intelligent caching, pagination, and debouncing ensure smooth operation even on 3G connections.
                                        </p>
                                    </div>

                                    <div class="rounded-lg bg-blue-600 p-3.5 text-white">
                                        <p class="text-xs font-semibold">Performance Impact:</p>
                                        <p class="mt-1 text-xs text-blue-50">
                                            A 1-second delay decreases user satisfaction by 16%. We ensure your app performs flawlessly across all devices!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Security Card -->
                            <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                                <div class="mb-4 flex items-center gap-3">
                                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">
                                        <span class="text-xl">🔒</span>
                                    </div>
                                    <div>
                                        <h4 class="text-base font-bold text-slate-900">Fort Knox Security</h4>
                                        <p class="text-xs font-semibold text-emerald-600">Protect your users</p>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <div class="mb-1 flex items-center gap-2">
                                            <span class="text-base">🔐</span>
                                            <h5 class="text-sm font-bold text-slate-900">Secure Data Storage</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            Keychain (iOS) and Keystore (Android) protect sensitive data. Never plain-text passwords or tokens in UserDefaults!
                                        </p>
                                    </div>

                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <div class="mb-1 flex items-center gap-2">
                                            <span class="text-base">🛡️</span>
                                            <h5 class="text-sm font-bold text-slate-900">Network Security</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            HTTPS with certificate pinning prevents man-in-the-middle attacks. All API communications are encrypted and verified.
                                        </p>
                                    </div>

                                    <div class="rounded-lg border border-slate-200 bg-slate-50 p-3.5">
                                        <div class="mb-1 flex items-center gap-2">
                                            <span class="text-base">👤</span>
                                            <h5 class="text-sm font-bold text-slate-900">Authentication Done Right</h5>
                                        </div>
                                        <p class="text-sm text-slate-600">
                                            OAuth 2.0, biometric authentication, JWT tokens, and secure session management keep accounts safe.
                                        </p>
                                    </div>

                                    <div class="rounded-lg bg-emerald-600 p-3.5 text-white">
                                        <p class="text-xs font-semibold">Security Alert:</p>
                                        <p class="mt-1 text-xs text-emerald-50">
                                            81% of mobile apps have security vulnerabilities. Don't be a statistic—we follow OWASP best practices!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Architecture Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-indigo-600 text-white">
                                    <span class="text-xl">🏗️</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">Architecture That Scales</h3>
                                    <p class="text-sm font-semibold text-indigo-600">From MVP to enterprise-grade applications</p>
                                </div>
                            </div>

                            <div class="mb-5 rounded-xl bg-slate-900 p-5 text-white">
                                <p class="mb-1 text-sm font-semibold">The Truth About Bad Architecture:</p>
                                <p class="text-sm text-slate-300">
                                    Without proper architecture, your app becomes a tangled mess of spaghetti code. Adding features takes weeks instead of days. Bugs multiply faster than you can fix them. Testing becomes impossible. We've seen it too many times—don't let it happen to you!
                                </p>
                            </div>

                            <div class="mb-5 grid gap-4 sm:grid-cols-3">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                    <div class="mb-2 flex items-center gap-2">
                                        <span class="text-lg">📐</span>
                                        <h5 class="text-sm font-bold text-slate-900">MVVM</h5>
                                    </div>
                                    <p class="mb-3 text-xs text-slate-600">
                                        Model-View-ViewModel separates UI from business logic. Your ViewModels expose reactive data streams that Views observe—making testing a breeze!
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="rounded bg-purple-100 px-2 py-1 text-xs text-purple-800">Testable</span>
                                        <span class="rounded bg-purple-100 px-2 py-1 text-xs text-purple-800">Reactive</span>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                    <div class="mb-2 flex items-center gap-2">
                                        <span class="text-lg">🎯</span>
                                        <h5 class="text-sm font-bold text-slate-900">Clean Architecture</h5>
                                    </div>
                                    <p class="mb-3 text-xs text-slate-600">
                                        Layers (Presentation, Domain, Data) with clear boundaries. Your business logic stays pure, independent, and portable.
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-800">Scalable</span>
                                        <span class="rounded bg-blue-100 px-2 py-1 text-xs text-blue-800">Maintainable</span>
                                    </div>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-4">
                                    <div class="mb-2 flex items-center gap-2">
                                        <span class="text-lg">💾</span>
                                        <h5 class="text-sm font-bold text-slate-900">Repository Pattern</h5>
                                    </div>
                                    <p class="mb-3 text-xs text-slate-600">
                                        Single source of truth for data. Seamlessly switch between cache, API, or mocks without changing business logic.
                                    </p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="rounded bg-emerald-100 px-2 py-1 text-xs text-emerald-800">Flexible</span>
                                        <span class="rounded bg-emerald-100 px-2 py-1 text-xs text-emerald-800">Clean</span>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                                <h5 class="mb-2 flex items-center gap-2 text-sm font-bold text-slate-900">
                                    <span class="text-lg">🎮</span> State Management Mastery
                                </h5>
                                <p class="mb-3 text-sm text-slate-600">
                                    State management is the beating heart of modern apps. We implement battle-tested solutions:
                                </p>
                                <div class="grid gap-3 sm:grid-cols-3">
                                    <div class="rounded-lg bg-purple-50 p-3">
                                        <p class="mb-1 text-sm font-semibold text-purple-900">React Native</p>
                                        <p class="text-xs text-slate-600">Redux, MobX, Zustand</p>
                                    </div>
                                    <div class="rounded-lg bg-blue-50 p-3">
                                        <p class="mb-1 text-sm font-semibold text-blue-900">Flutter</p>
                                        <p class="text-xs text-slate-600">BLoC, Provider, Riverpod</p>
                                    </div>
                                    <div class="rounded-lg bg-emerald-50 p-3">
                                        <p class="mb-1 text-sm font-semibold text-emerald-900">SwiftUI</p>
                                        <p class="text-xs text-slate-600">@State, @ObservedObject</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testing Card -->
                        <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-amber-500 text-white">
                                    <span class="text-xl">🧪</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900">Testing That Catches Bugs Before Users Do</h3>
                                    <p class="text-sm font-semibold text-amber-600">Quality isn't luck—it's process</p>
                                </div>
                            </div>

                            <div class="mb-5 grid gap-4 sm:grid-cols-3">
                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                                    <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-lg bg-red-100">
                                        <span class="text-lg">🎯</span>
                                    </div>
                                    <h5 class="mb-2 text-sm font-bold text-slate-900">Unit Tests</h5>
                                    <p class="text-sm text-slate-600">
                                        XCTest, JUnit, Jest—we test every function in isolation to ensure rock-solid foundations.
                                    </p>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                                    <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-lg bg-blue-100">
                                        <span class="text-lg">🔗</span>
                                    </div>
                                    <h5 class="mb-2 text-sm font-bold text-slate-900">Integration Tests</h5>
                                    <p class="text-sm text-slate-600">
                                        Verify modules work together seamlessly. No surprises when components interact!
                                    </p>
                                </div>

                                <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                                    <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-100">
                                        <span class="text-lg">📱</span>
                                    </div>
                                    <h5 class="mb-2 text-sm font-bold text-slate-900">UI Tests</h5>
                                    <p class="text-sm text-slate-600">
                                        Automated user flows catch regressions before they reach production.
                                    </p>
                                </div>
                            </div>

                            <div class="rounded-xl bg-slate-900 p-5 text-white">
                                <p class="mb-1 text-sm font-semibold">CI/CD Pipeline Magic:</p>
                                <p class="text-sm text-slate-300">
                                    GitHub Actions + Fastlane = automated builds, tests on every commit, beta distribution, and smooth App Store releases. Set it once, benefit forever!
                                </p>
                            </div>
                        </div>

                        <!-- App Store Deployment Card -->
                        <div class="rounded-2xl bg-slate-900 p-6 text-white sm:p-8">
                            <div class="mb-5 flex items-start gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-white/10">
                                    <span class="text-xl">🚀</span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-white">Launch Like a Rocket: App Store Success</h3>
                                    <p class="text-sm font-semibold text-slate-300">From submission to 5-star reviews</p>
                                </div>
                            </div>

                            <div class="mb-5 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <h5 class="mb-3 flex items-center gap-2 text-sm font-bold text-white">
                                        <span>📝</span> App Store Optimization (ASO)
                                    </h5>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li>Compelling descriptions that convert</li>
                                        <li>Screenshot designs that pop</li>
                                        <li>Preview videos that engage</li>
                                        <li>Keyword strategies that rank</li>
                                    </ul>
                                </div>

                                <div class="rounded-xl border border-white/10 bg-white/5 p-5">
                                    <h5 class="mb-3 flex items-center gap-2 text-sm font-bold text-white">
                                        <span>✅</span> Submission Mastery
                                    </h5>
                                    <ul class="space-y-1.5 text-xs text-slate-300">
                                        <li>Pass App Store Review first try</li>
                                        <li>Google Play compliance</li>
                                        <li>Privacy policies handled</li>
                                        <li>Legal compliance guaranteed</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="mb-5 rounded-xl bg-amber-500 p-5 text-slate-900">
                                <div class="flex items-start gap-3">
                                    <span class="text-2xl">📊</span>
                                    <div>
                                        <h5 class="mb-1 text-sm font-bold">Post-Launch Analytics &amp; Optimization</h5>
                                        <p class="text-sm text-slate-800">
                                            Firebase Analytics + Crashlytics + A/B Testing = data-driven decisions. We help you understand users, fix crashes instantly, and optimize for growth!
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-xl border border-white/10 bg-white/5 p-4">
                                <p class="text-center text-sm text-slate-300">
                                    <span class="font-semibold text-white">Success Rate:</span> Our apps average <span class="font-semibold text-amber-400">4.5+ stars</span> on app stores with <span class="font-semibold text-amber-400">95% first-submission approval</span> rate!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="bg-slate-50 py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Frequently Asked Questions</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Everything you need to know about our mobile app
                        development service.</p>
                </div>

                <div class="mx-auto max-w-3xl space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Which mobile platforms do you support?</h3>
                        <p class="text-sm leading-relaxed text-slate-600">We develop for both iOS and Android platforms, using native technologies
                            (Swift, Kotlin) or cross-platform frameworks (React Native, Flutter). We can help you choose the
                            best approach for your project.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">How long does mobile app development take?
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600">Development time varies by complexity. Simple apps take 3-5 days, advanced
                            apps with multiple features take 5-7 days, and complete solutions with backend integration take
                            7-14 days.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Do you help with app store submission?</h3>
                        <p class="text-sm leading-relaxed text-slate-600">Yes! For complete mobile solutions, we provide guidance on app store
                            submission requirements, help with app store optimization, and assist with the deployment
                            process for both iOS App Store and Google Play Store.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Can you integrate APIs and backend services?
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600">Absolutely! We can integrate your app with REST APIs, GraphQL, Firebase,
                            authentication services, payment gateways, and other third-party services your app requires.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">What's included in the mobile app delivery?
                        </h3>
                        <p class="text-sm leading-relaxed text-slate-600">You'll receive complete source code, project documentation, setup
                            instructions, and any necessary configuration files. For advanced projects, we also include
                            testing documentation and deployment guides.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="bg-slate-900 py-14 sm:py-16">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Ready to Build Your Mobile App?</h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm text-slate-400">Join hundreds of students who have successfully
                    launched their mobile apps with our expert development help.</p>
                <a href="{{ route('order') }}"
                    class="mt-7 inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-colors hover:bg-blue-500">
                    Start Your Mobile App Today
                </a>
            </div>
        </section>
    </div>
@endsection
