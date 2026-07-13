@extends('layouts.app')

@section('title', 'Software Testing & QA Services - Expert Quality Assurance')
@section('description', 'Professional software testing and QA services. Expert testers available 24/7 for unit testing, integration testing, automated testing, and quality assurance.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section -->
        <x-creative-hero :service="$service" />

        <!-- Testing Types Section -->
        <section class="py-14 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Testing Services We Provide</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Comprehensive testing solutions across all major frameworks and languages.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Unit Testing -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Unit Testing</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔬</div>
                                <h4 class="text-sm font-semibold text-slate-900">Jest/Mocha</h4>
                            </div>
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">🐍</div>
                                <h4 class="text-sm font-semibold text-slate-900">Pytest/unittest</h4>
                            </div>
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">☕</div>
                                <h4 class="text-sm font-semibold text-slate-900">JUnit/TestNG</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Integration Testing -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Integration Testing</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔗</div>
                                <h4 class="text-sm font-semibold text-slate-900">API Testing</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🗄️</div>
                                <h4 class="text-sm font-semibold text-slate-900">Database Testing</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🌐</div>
                                <h4 class="text-sm font-semibold text-slate-900">Service Integration</h4>
                            </div>
                        </div>
                    </div>

                    <!-- E2E Testing -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">E2E Testing</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">🌲</div>
                                <h4 class="text-sm font-semibold text-slate-900">Cypress</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">🎭</div>
                                <h4 class="text-sm font-semibold text-slate-900">Playwright</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">🤖</div>
                                <h4 class="text-sm font-semibold text-slate-900">Selenium</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Performance & More -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Performance &amp; More</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">⚡</div>
                                <h4 class="text-sm font-semibold text-slate-900">Load Testing</h4>
                            </div>
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔒</div>
                                <h4 class="text-sm font-semibold text-slate-900">Security Testing</h4>
                            </div>
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">📊</div>
                                <h4 class="text-sm font-semibold text-slate-900">Coverage Reports</h4>
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
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Testing &amp; QA Pricing</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Fair, transparent pricing based on project complexity.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">Basic Testing</h3>
                            <div class="my-3 text-2xl font-bold text-green-600">From $20</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Unit test setup
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Basic test cases
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    2-8 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Test documentation
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center rounded-xl bg-green-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-green-700">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="relative rounded-2xl border-2 border-green-600 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-green-600 px-3 py-1 text-xs font-semibold text-white">
                            Most Popular
                        </div>
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">Complete Test Suite</h3>
                            <div class="my-3 text-2xl font-bold text-green-600">From $60</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Unit + Integration tests
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    E2E test scenarios
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    8-24 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Coverage reports
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    CI/CD integration
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center rounded-xl bg-green-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-green-700">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">Enterprise QA</h3>
                            <div class="my-3 text-2xl font-bold text-green-600">From $120</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Full test automation
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Performance testing
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Security testing
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    QA strategy consulting
                                </li>
                            </ul>
                            <a href="{{ route('order') }}"
                                class="inline-flex w-full items-center justify-center rounded-xl bg-green-600 px-4 py-2.5 text-sm font-semibold text-white transition-colors hover:bg-green-700">
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
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Our Testing Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Systematic approach to ensuring software quality.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-green-100">
                            <span class="text-base font-bold text-green-600">1</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Requirements Analysis</h3>
                        <p class="text-sm text-slate-600">We analyze your project to understand testing requirements and scope.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-green-100">
                            <span class="text-base font-bold text-green-600">2</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Test Design</h3>
                        <p class="text-sm text-slate-600">Create comprehensive test cases covering all critical functionality.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-green-100">
                            <span class="text-base font-bold text-green-600">3</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Test Implementation</h3>
                        <p class="text-sm text-slate-600">Implement automated tests using industry-standard frameworks.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-green-100">
                            <span class="text-base font-bold text-green-600">4</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Reporting &amp; Documentation</h3>
                        <p class="text-sm text-slate-600">Provide detailed reports with coverage metrics and recommendations.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-14 sm:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">What Our Clients Say</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Real feedback from students who got help with testing and QA.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"They set up comprehensive unit tests for my React app. Coverage went from 0% to 92%! The QA engineer also taught me TDD principles. Amazing service!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-bold text-white">A</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Alex K.</div>
                                <div class="text-xs text-slate-500">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Needed E2E tests with Cypress for my capstone project. They created thorough test scenarios and integrated them into CI/CD. Learned so much!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-500 text-sm font-bold text-white">S</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Sarah M.</div>
                                <div class="text-xs text-slate-500">CS Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Professional API testing with Jest and Supertest. All endpoints thoroughly tested with edge cases covered. My professor was impressed with the quality!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-500 text-sm font-bold text-white">D</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">David L.</div>
                                <div class="text-xs text-slate-500">Web Dev Bootcamp</div>
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
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Everything you need to know about our testing and QA services.</p>
                </div>

                <div class="mx-auto max-w-3xl space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">What testing frameworks do you support?</h3>
                        <p class="text-sm text-slate-600">We support all major testing frameworks including Jest, Mocha, Pytest, JUnit, Cypress, Playwright, Selenium, and more across JavaScript, Python, Java, C#, and other languages.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Can you integrate tests into my CI/CD pipeline?</h3>
                        <p class="text-sm text-slate-600">Yes! We can integrate your tests into GitHub Actions, GitLab CI, Jenkins, CircleCI, or any other CI/CD platform you're using.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Do you provide test coverage reports?</h3>
                        <p class="text-sm text-slate-600">Absolutely! We provide detailed coverage reports showing statement, branch, function, and line coverage with recommendations for improvement.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Can you help with Test-Driven Development (TDD)?</h3>
                        <p class="text-sm text-slate-600">Yes! We can implement TDD practices, writing tests before code and following the red-green-refactor cycle to ensure high-quality, testable code.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">What about performance and load testing?</h3>
                        <p class="text-sm text-slate-600">We provide performance testing using tools like JMeter, k6, and Lighthouse to ensure your application can handle expected load and performs optimally.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-14 sm:py-16 bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Ready to Test Your Code?</h2>
                <p class="mx-auto mt-2 max-w-2xl text-sm text-slate-400">Join thousands of developers who have improved their software quality with our expert testing services.</p>
                <a href="{{ route('order') }}"
                    class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-green-600 shadow-sm transition-colors hover:bg-slate-100">
                    Get Testing Help Today
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
