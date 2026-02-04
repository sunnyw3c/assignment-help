@extends('layouts.app')

@section('title', 'Assignment Help USA - Professional Assignment Help Online for USA Students')
@section('description',
    'Professional assignment help online for USA students. Expert assignment helpers provide quality
    assignment help service for college, high school & graduate students. 24/7 assignment help with 100% original work and
    money-back guarantee.')
@section('keywords',
    'assignment help, assignment help online, assignment helper, assignment help service, assignment
    help USA, online assignment help, college assignment help, homework help, essay writing help, assignment assistance USA,
    academic help USA')

@section('content')

    <section class="relative bg-white overflow-hidden pb-16 pt-20 lg:pt-32">
        <!-- Background Decor -->
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div
                class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#3b82f6] to-[#06b6d4] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]">
            </div>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <div class="mb-8 flex justify-center">
                    <div
                        class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 bg-white/50 backdrop-blur-sm">
                        <span class="font-semibold text-blue-600">New</span> Verified Experts Available <a
                            href="{{ route('services.programming.index') }}" class="font-semibold text-blue-600"><span
                                class="absolute inset-0" aria-hidden="true"></span>Read more <span
                                aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>

                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl mb-6 font-sans">
                    Academic Evaluation Help
                    <span class="text-blue-600">Made Simple</span>
                </h1>

                <p class="mt-6 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">
                    Get professional assistance with your assignments, essays, and programming projects.
                    <span class="font-semibold text-gray-900">100% Plagiarism-free</span> work delivered on time by expert
                    tutors.
                </p>

                <!-- Search Box -->
                <div class="mt-10 max-w-2xl mx-auto relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200">
                    </div>
                    <form action="{{ route('order') }}" method="GET"
                        class="relative flex items-center bg-white rounded-lg shadow-sm ring-1 ring-gray-900/5 focus-within:ring-2 focus-within:ring-blue-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4">
                            <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" name="subject" id="subject"
                            class="block w-full border-0 bg-transparent py-4 pl-11 pr-32 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                            placeholder="What subject do you need help with? e.g. 'Python', 'History'...">
                        <div class="absolute right-1.5 top-1.5 bottom-1.5">
                            <button type="submit"
                                class="h-full rounded-md bg-blue-600 px-6 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 transition-colors">
                                Get Started
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Trust Badges -->
                <div class="mt-12 flex flex-wrap justify-center gap-x-8 gap-y-4 text-sm leading-6 text-gray-600">
                    <div class="flex items-center gap-x-2">
                        <svg class="h-5 w-5 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Money-back Guarantee
                    </div>
                    <div class="flex items-center gap-x-2">
                        <svg class="h-5 w-5 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Confidential & Secure
                    </div>
                    <div class="flex items-center gap-x-2">
                        <svg class="h-5 w-5 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                clip-rule="evenodd" />
                        </svg>
                        Unlimited Revisions
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Bottom Gradient -->
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div
                class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#3b82f6] to-[#06b6d4] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]">
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-50 relative overflow-hidden" id="services">
        <div
            class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-30">
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8 relative">
            <div class="mx-auto max-w-2xl text-center mb-16">
                <span
                    class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 mb-4">Trusted
                    Academic Solutions</span>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Comprehensive Academic Help Services
                </h2>
                <p class="mt-4 text-lg leading-8 text-gray-600">We provide expert assistance across all major academic
                    disciplines. Choose the service that matches your needs.</p>
            </div>

            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                <!-- Service Card 1: Assignment Help -->
                <article
                    class="flex flex-col bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-shadow duration-300 p-8 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 rounded-full bg-blue-50 opacity-50 group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <div class="flex items-center gap-x-4 mb-6 relative">
                        <div class="h-12 w-12 flex items-center justify-center rounded-lg bg-blue-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold leading-6 text-gray-900">Assignment Help</h3>
                            <div class="mt-1 flex items-center text-xs text-green-600 font-medium">
                                <svg class="mr-1 h-3 w-3 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" />
                                </svg>
                                Verified Experts
                            </div>
                        </div>
                    </div>

                    <p class="flex-auto text-sm leading-6 text-gray-600 mb-6">
                        Get high-quality, plagiarism-free assignments tailored to your specific requirements. We cover
                        essays, research papers, case studies, and more.
                    </p>

                    <ul role="list" class="mb-8 space-y-2 text-sm text-gray-600">
                        <li class="flex gap-x-2">
                            <span class="text-blue-600 font-bold">•</span> Essays & Reports
                        </li>
                        <li class="flex gap-x-2">
                            <span class="text-blue-600 font-bold">•</span> Thesis & Dissertations
                        </li>
                        <li class="flex gap-x-2">
                            <span class="text-blue-600 font-bold">•</span> Case Studies
                        </li>
                    </ul>

                    <a href="{{ route('services.assignment.index') }}"
                        class="mt-auto block w-full rounded-md bg-white px-3 py-2 text-center text-sm font-semibold text-blue-600 shadow-sm ring-1 ring-inset ring-blue-200 hover:ring-blue-300 hover:bg-blue-50 transition-all">
                        Explore Custom Writing <span aria-hidden="true">&rarr;</span>
                    </a>
                </article>

                <!-- Service Card 2: Programming Help -->
                <article
                    class="flex flex-col bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-shadow duration-300 p-8 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 rounded-full bg-emerald-50 opacity-50 group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <div class="flex items-center gap-x-4 mb-6 relative">
                        <div class="h-12 w-12 flex items-center justify-center rounded-lg bg-emerald-600">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold leading-6 text-gray-900">Programming Help</h3>
                            <div class="mt-1 flex items-center text-xs text-green-600 font-medium">
                                <svg class="mr-1 h-3 w-3 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" />
                                </svg>
                                Code Validated
                            </div>
                        </div>
                    </div>

                    <p class="flex-auto text-sm leading-6 text-gray-600 mb-6">
                        Stuck on a coding bug or complex algorithm? Our developers provide clean, commented, and efficient
                        code solutions in any language.
                    </p>

                    <ul role="list" class="mb-8 space-y-2 text-sm text-gray-600">
                        <li class="flex gap-x-2">
                            <span class="text-emerald-600 font-bold">•</span> Python, Java, C++
                        </li>
                        <li class="flex gap-x-2">
                            <span class="text-emerald-600 font-bold">•</span> Web Development
                        </li>
                        <li class="flex gap-x-2">
                            <span class="text-emerald-600 font-bold">•</span> Data Science
                        </li>
                    </ul>

                    <a href="{{ route('services.programming.index') }}"
                        class="mt-auto block w-full rounded-md bg-white px-3 py-2 text-center text-sm font-semibold text-emerald-600 shadow-sm ring-1 ring-inset ring-emerald-200 hover:ring-emerald-300 hover:bg-emerald-50 transition-all">
                        View Coding Services <span aria-hidden="true">&rarr;</span>
                    </a>
                </article>

                <!-- Service Card 3: Homework Help -->
                <article
                    class="flex flex-col bg-white rounded-2xl shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-shadow duration-300 p-8 relative overflow-hidden group">
                    <div
                        class="absolute top-0 right-0 -mr-4 -mt-4 w-24 h-24 rounded-full bg-amber-50 opacity-50 group-hover:scale-110 transition-transform duration-500">
                    </div>

                    <div class="flex items-center gap-x-4 mb-6 relative">
                        <div class="h-12 w-12 flex items-center justify-center rounded-lg bg-amber-500">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold leading-6 text-gray-900">Homework Help</h3>
                            <div class="mt-1 flex items-center text-xs text-green-600 font-medium">
                                <svg class="mr-1 h-3 w-3 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                        clip-rule="evenodd" />
                                </svg>
                                Step-by-Step Solutions
                            </div>
                        </div>
                    </div>

                    <p class="flex-auto text-sm leading-6 text-gray-600 mb-6">
                        Complete support for your daily homework, problem sets, and textbook questions. We explain the "how"
                        and "why" behind every answer.
                    </p>

                    <ul role="list" class="mb-8 space-y-2 text-sm text-gray-600">
                        <li class="flex gap-x-2">
                            <span class="text-amber-500 font-bold">•</span> Math & Calculus
                        </li>
                        <li class="flex gap-x-2">
                            <span class="text-amber-500 font-bold">•</span> Physics & Chemistry
                        </li>
                        <li class="flex gap-x-2">
                            <span class="text-amber-500 font-bold">•</span> Statistics
                        </li>
                    </ul>

                    <a href="{{ route('order') }}"
                        class="mt-auto block w-full rounded-md bg-white px-3 py-2 text-center text-sm font-semibold text-amber-600 shadow-sm ring-1 ring-inset ring-amber-200 hover:ring-amber-300 hover:bg-amber-50 transition-all">
                        Get Homework Answers <span aria-hidden="true">&rarr;</span>
                    </a>
                </article>
            </div>

            <!-- SEO Trust Banner -->
            <div class="mt-16 rounded-2xl bg-gray-900 py-10 sm:py-16">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div
                        class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2 lg:items-center">
                        <div class="max-w-xl lg:max-w-lg">
                            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Trust Us With Your Grades
                            </h2>
                            <p class="mt-4 text-lg leading-8 text-gray-300">
                                Assignment Help USA is a legally registered academic assistance provider. We adhere to
                                strict privacy policies and academic integrity standards.
                            </p>
                            <div class="mt-8 grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div class="flex items-start gap-3">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-white">Genuine Experts</h3>
                                        <p class="mt-1 text-sm text-gray-400">Masters & PhD degree holders only.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                        <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-white">Bank-Grade Security</h3>
                                        <p class="mt-1 text-sm text-gray-400">256-bit SSL encrypted payments.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col items-start justify-end lg:order-last">
                            <div
                                class="rounded-xl bg-white/5 p-2 ring-1 ring-inset ring-white/10 lg:rounded-2xl lg:p-4 mb-4 w-full">
                                <div class="flex items-center gap-4">
                                    <div class="flex-1 bg-white/10 h-2 rounded-full overflow-hidden">
                                        <div class="bg-green-500 h-full w-[98%]"></div>
                                    </div>
                                    <span class="text-white font-bold">98% Success</span>
                                </div>
                                <p class="text-xs text-gray-400 mt-2">Based on 50,000+ completed orders</p>
                            </div>
                            <a href="{{ route('order') }}"
                                class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600 w-full text-center">Start
                                Your Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">Ready to Boost Your Grades?</h2>
            <p class="text-xl md:text-2xl text-white/90 mb-8 max-w-3xl mx-auto">
                Join 50,000+ college students across USA who trust Assignment Help USA for their academic success.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('order') }}"
                    class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-bold px-10 py-5 rounded-xl text-lg shadow-2xl hover:shadow-3xl transition-all duration-300 hover:scale-105 inline-block">
                    Get Started - Free Quote
                </a>
                <a href="{{ route('how-it-works') }}"
                    class="bg-white/20 backdrop-blur-sm hover:bg-white/30 text-white font-bold px-10 py-5 rounded-xl text-lg border-2 border-white/30 transition-all duration-300 inline-block">
                    Learn More
                </a>
            </div>
            <p class="mt-6 text-white/80">
                ✓ 24/7 Support ✓ Money-Back Guarantee ✓ 100% Confidential
            </p>
        </div>
    </section>

    <!-- Academic Levels We Cover Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-purple-50 border border-purple-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                    </svg>
                    <span class="text-purple-900 font-semibold text-sm">All Academic Levels Covered</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Expert Help at Every Academic Level</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From high school to PhD programs, we provide tailored assistance for students at every stage of their
                    academic journey
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- High School -->
                <div
                    class="group bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-blue-100 hover:border-blue-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">🎒</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">High School</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Support for grades 9-12 with homework, essays, projects, and test preparation
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Homework assistance</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Essay writing help</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Science projects</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>SAT/ACT prep</span>
                        </li>
                    </ul>
                </div>

                <!-- College/Undergraduate -->
                <div
                    class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-purple-100 hover:border-purple-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">📚</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">College</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Undergraduate support for all majors with comprehensive academic assistance
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Research papers</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Case studies</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Lab reports</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Programming projects</span>
                        </li>
                    </ul>
                </div>

                <!-- Masters/Graduate -->
                <div
                    class="group bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-emerald-100 hover:border-emerald-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">🎓</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Masters</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Advanced graduate-level support for thesis, capstone, and research projects
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Thesis writing</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Capstone projects</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Literature reviews</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Data analysis</span>
                        </li>
                    </ul>
                </div>

                <!-- PhD/Doctoral -->
                <div
                    class="group bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 hover:shadow-2xl transition-all duration-300 border-2 border-amber-100 hover:border-amber-300">
                    <div class="text-6xl mb-6 text-center group-hover:scale-110 transition-transform">👨‍🎓</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">PhD</h3>
                    <p class="text-gray-600 leading-relaxed text-center mb-4">
                        Doctoral-level expertise for dissertations and advanced research work
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Dissertation chapters</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Research proposals</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Statistical analysis</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Academic publishing</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Budget Calculator Section -->
    <section class="relative py-24 lg:py-40 bg-[#0F172A] overflow-hidden">
        <!-- Modern Abstract Background -->
        <div class="absolute inset-0">
            <!-- Dynamic Gradient Orbs -->
            <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px] animate-pulse"></div>
            <div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-indigo-600/20 rounded-full blur-[120px] animate-pulse" style="animation-delay: 2s"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-purple-600/10 rounded-full blur-[150px] animate-pulse" style="animation-delay: 4s"></div>

            <!-- Stylized Mesh Pattern -->
            <div class="absolute inset-0 opacity-[0.15] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTSAzMCAwIEwgMzAgNjAgTSAwIDMwIEwgNjAgMzAiIGZpbGw9Im5vbmUiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS1vcGFjaXR5PSIwLjUiIHN0cm9rZS13aWR0aD0iMC41Ii8+PC9zdmc+')] [mask-image:radial-gradient(ellipse_at_center,black_70%,transparent_100%)]"></div>
            
            <!-- Circuit Lines Accent -->
            <div class="absolute inset-0 opacity-20">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M 0 20 L 20 20 L 25 25 L 100 25" stroke="rgba(59, 130, 246, 0.2)" stroke-width="0.1" fill="none" />
                    <path d="M 100 80 L 80 80 L 75 75 L 0 75" stroke="rgba(139, 92, 246, 0.2)" stroke-width="0.1" fill="none" />
                </svg>
            </div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-24">
                <!-- Architectural Step Indicator -->
                <div class="flex items-center justify-center gap-4 mb-8">
                    <div class="h-px w-12 bg-gradient-to-r from-transparent to-blue-500"></div>
                    <div class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-md border border-white/10 px-6 py-2 rounded-full hover:bg-white/10 transition-colors cursor-default">
                        <span class="flex h-2 w-2 rounded-full bg-blue-500 animate-pulse"></span>
                        <span class="text-blue-200 font-bold text-xs uppercase tracking-widest">Pricing Engine v2.0</span>
                    </div>
                    <div class="h-px w-12 bg-gradient-to-l from-transparent to-blue-500"></div>
                </div>

                <!-- Main Title -->
                <h2 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tight">
                    Smart Pricing, <br class="hidden md:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Zero Surprises</span>
                </h2>

                <!-- Subtitle -->
                <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    Get a scientifically calculated quote based on academic complexity, 
                    urgency, and expert level. Transparent. Fast. Precise.
                </p>

                <!-- Vertical Flow Line -->
                <div class="mt-12 flex justify-center">
                    <div class="w-px h-16 bg-gradient-to-b from-blue-500/50 to-transparent"></div>
                </div>
            </div>

            <!-- Calculator Component with Premium Frame -->
            <div class="relative max-w-5xl mx-auto">
                <!-- Floating Decorative Accents -->
                <div class="absolute -top-12 -left-12 w-24 h-24 bg-blue-500/20 rounded-full blur-2xl animate-pulse"></div>
                <div class="absolute -bottom-12 -right-12 w-32 h-32 bg-purple-500/20 rounded-full blur-2xl animate-pulse" style="animation-delay: 1.5s"></div>

                <!-- Live Status Indicator -->
                <div class="absolute -top-6 left-1/2 -translate-x-1/2 z-20">
                    <div class="bg-slate-900 border border-white/10 rounded-full px-4 py-1 flex items-center gap-2 shadow-2xl">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                        </span>
                        <span class="text-[10px] font-bold text-white uppercase tracking-tighter">Live Pricing Engine Active</span>
                    </div>
                </div>

                <div class="relative h-full bg-slate-800/40 backdrop-blur-3xl border border-white/10 rounded-[2.5rem] p-4 md:p-8 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.5)] overflow-hidden">
                    <!-- Subtle Glass Highlight -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-white/[0.02] to-transparent pointer-events-none"></div>
                    
                    <div class="relative z-10">
                        <livewire:budget-calculator />
                    </div>
                </div>
            </div>

            <!-- Bottom Stats Section -->
            <div class="mt-16 grid grid-cols-1 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <!-- Stat 1 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">01</div>
                        
                        <div class="w-14 h-14 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">⚡</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">Instant</h3>
                        <p class="text-blue-200 text-sm">Quote Results</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">02</div>
                        
                        <div class="w-14 h-14 bg-indigo-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">💯</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">100%</h3>
                        <p class="text-indigo-200 text-sm">Price Match</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">03</div>
                        
                        <div class="w-14 h-14 bg-purple-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">🎓</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">50+</h3>
                        <p class="text-purple-200 text-sm">Expert Subjects</p>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="group relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-pink-600 to-orange-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500 group">
                        <!-- Watermark Number -->
                        <div class="absolute -right-4 -bottom-12 text-[10rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">04</div>
                        
                        <div class="w-14 h-14 bg-pink-500/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                            <span class="text-3xl">💰</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-1">20%</h3>
                        <p class="text-pink-200 text-sm">Early Bird Discount</p>
                    </div>
                </div>
            </div>

                <!-- CTA Section and Satisfaction -->
                <div class="mt-24 text-center">
                    <div class="inline-flex flex-wrap items-center justify-center gap-6 mb-12">
                        <div class="flex items-center gap-2 text-slate-400 text-sm">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span>Enterprise-grade Security</span>
                        </div>
                        <div class="flex items-center gap-2 text-slate-400 text-sm">
                            <svg class="w-5 h-5 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                            <span>100% Privacy Protected</span>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                        <a href="{{ route('order') }}"
                            class="group relative inline-flex items-center gap-3 px-10 py-5 bg-white rounded-full text-indigo-950 font-bold text-lg hover:bg-indigo-50 transition-all duration-300 hover:scale-105 active:scale-95 shadow-[0_0_50px_-10px_rgba(255,255,255,0.4)]">
                            <span class="relative z-10">Start Your Order</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform relative z-10" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-3 px-10 py-5 bg-white/5 backdrop-blur-md border border-white/10 rounded-full text-white font-bold text-lg hover:bg-white/10 transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5 text-indigo-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span>Talk to Expert</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Curve Decoration -->
            <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-50 to-transparent pointer-events-none"></div>
    </section>

    <!-- Popular Subjects Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                    </svg>
                    <span class="text-blue-900 font-semibold text-sm">50+ Subjects Available</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Most Popular Subjects</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Get expert help across a wide range of academic subjects from our qualified professionals
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 max-w-7xl mx-auto">
                <!-- Math -->
                <a href="{{ route('services.assignment.index') }}?subject=math"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-blue-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🔢</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Mathematics</h3>
                    <p class="text-sm text-gray-500">Calculus, Algebra, Statistics</p>
                </a>

                <!-- Science -->
                <a href="{{ route('services.assignment.index') }}?subject=science"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-green-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🔬</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Science</h3>
                    <p class="text-sm text-gray-500">Physics, Chemistry, Biology</p>
                </a>

                <!-- English -->
                <a href="{{ route('services.assignment.index') }}?subject=english"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-purple-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">📖</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">English</h3>
                    <p class="text-sm text-gray-500">Literature, Writing, Grammar</p>
                </a>

                <!-- Business -->
                <a href="{{ route('services.assignment.index') }}?subject=business"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-yellow-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">💼</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Business</h3>
                    <p class="text-sm text-gray-500">Management, Finance, Marketing</p>
                </a>

                <!-- Computer Science -->
                <a href="{{ route('services.programming.index') }}"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-indigo-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">💻</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Computer Science</h3>
                    <p class="text-sm text-gray-500">Programming, Algorithms</p>
                </a>

                <!-- History -->
                <a href="{{ route('services.assignment.index') }}?subject=history"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-red-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🏛️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">History</h3>
                    <p class="text-sm text-gray-500">World, American, European</p>
                </a>

                <!-- Psychology -->
                <a href="{{ route('services.assignment.index') }}?subject=psychology"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-pink-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🧠</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Psychology</h3>
                    <p class="text-sm text-gray-500">Clinical, Social, Cognitive</p>
                </a>

                <!-- Economics -->
                <a href="{{ route('services.assignment.index') }}?subject=economics"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-teal-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">📊</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Economics</h3>
                    <p class="text-sm text-gray-500">Micro, Macro, Econometrics</p>
                </a>

                <!-- Engineering -->
                <a href="{{ route('services.assignment.index') }}?subject=engineering"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-orange-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">⚙️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Engineering</h3>
                    <p class="text-sm text-gray-500">Mechanical, Civil, Electrical</p>
                </a>

                <!-- Nursing -->
                <a href="{{ route('services.assignment.index') }}?subject=nursing"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-rose-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">🏥</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Nursing</h3>
                    <p class="text-sm text-gray-500">Healthcare, Patient Care</p>
                </a>

                <!-- Law -->
                <a href="{{ route('services.assignment.index') }}?subject=law"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-gray-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">⚖️</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Law</h3>
                    <p class="text-sm text-gray-500">Legal Studies, Criminal Justice</p>
                </a>

                <!-- Sociology -->
                <a href="{{ route('services.assignment.index') }}?subject=sociology"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-violet-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">👥</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Sociology</h3>
                    <p class="text-sm text-gray-500">Social Behavior, Culture, Society</p>
                </a>

                <!-- Accounting -->
                <a href="{{ route('services.assignment.index') }}?subject=accounting"
                    class="group bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 border-2 border-transparent hover:border-amber-300 text-center">
                    <div class="text-5xl mb-4 group-hover:scale-110 transition-transform">💰</div>
                    <h3 class="font-bold text-gray-900 text-lg mb-2">Accounting</h3>
                    <p class="text-sm text-gray-500">Financial, Tax, Auditing</p>
                </a>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('services.assignment.index') }}"
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white px-8 py-4 rounded-xl font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                    View All Subjects
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Assignment Search Filter Section -->


    <!-- How It Works Section -->
    <section id="how-it-works" class="py-24 bg-[#0F172A] relative overflow-hidden">
        <!-- Modern Abstract Background -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-600/20 rounded-full blur-[100px] animate-pulse">
            </div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-600/20 rounded-full blur-[100px] animate-pulse"
                style="animation-delay: 2s"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div
                    class="inline-flex items-center gap-2 bg-white/5 backdrop-blur-md border border-white/10 px-6 py-2 rounded-full mb-6 hover:bg-white/10 transition-colors cursor-default">
                    <span class="relative flex h-2 w-2">
                        <span
                            class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                    </span>
                    <span class="text-indigo-200 font-medium text-sm tracking-wide uppercase">Simple Workflow</span>
                </div>
                <h2 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight">
                    Your Path to <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">Success</span>
                </h2>
                <p class="text-xl text-slate-400 max-w-2xl mx-auto leading-relaxed">
                    We've streamlined academic assistance into a simple, collaborative journey.
                </p>
            </div>

            <!-- Staggered Card Layout -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12 relative max-w-7xl mx-auto">

                <!-- Step 1 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            01</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-indigo-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">📝</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Submit Brief</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Fill out our smart order form. Upload requirements and set your deadline in under 2 minutes.
                        </p>
                    </div>
                </div>

                <!-- Step 2 (Staggered Down) -->
                <div class="group relative lg:mt-24">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            02</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-purple-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">🎯</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Expert Match</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Our AI matches you with a subject matter expert who specializes in your specific topic.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="group relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-pink-600 to-rose-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            03</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-pink-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">⚡</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Process</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Track progress in real-time. Chat directly with your expert and request drafts along the way.
                        </p>
                    </div>
                </div>

                <!-- Step 4 (Staggered Down) -->
                <div class="group relative lg:mt-24">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-rose-600 to-orange-600 rounded-3xl blur-xl opacity-0 group-hover:opacity-30 transition-opacity duration-500">
                    </div>
                    <div
                        class="relative h-full bg-slate-800/50 backdrop-blur-xl border border-white/10 rounded-3xl p-8 overflow-hidden hover:-translate-y-2 transition-transform duration-500">
                        <!-- Watermark Number -->
                        <div
                            class="absolute -right-6 -bottom-16 text-[12rem] font-black text-white/[0.03] leading-none select-none group-hover:scale-110 transition-transform duration-700 ease-out">
                            04</div>

                        <div
                            class="w-16 h-16 bg-gradient-to-br from-rose-500 to-orange-600 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-rose-500/20 group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                            <span class="text-3xl">✅</span>
                        </div>

                        <h3 class="text-2xl font-bold text-white mb-4 relative z-10">Quality Check</h3>
                        <p class="text-slate-400 leading-relaxed relative z-10">
                            Receive your polished work on time, complete with a plagiarism report and free revisions.
                        </p>
                    </div>
                </div>

            </div>

            <!-- CTA Button -->
            <div class="text-center mt-24">
                <a href="{{ route('order') }}"
                    class="group relative inline-flex items-center gap-3 px-10 py-5 bg-white rounded-full text-indigo-950 font-bold text-lg hover:bg-indigo-50 transition-all duration-300 hover:scale-105 active:scale-95 shadow-[0_0_40px_-10px_rgba(255,255,255,0.3)]">
                    <span class="relative z-10">Start Your Journey</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform relative z-10" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <p class="mt-6 text-slate-500 text-sm">No credit card required for quote</p>
            </div>
        </div>
    </section>

    <!-- Benefits & Guarantees Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-emerald-50 border border-emerald-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-emerald-900 font-semibold text-sm">Your Success is Guaranteed</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Quality Guarantees</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We stand behind our work with comprehensive guarantees to ensure your complete satisfaction
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Plagiarism Free -->
                <div
                    class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">100% Original Work</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Every assignment is written from scratch and checked through advanced plagiarism detection software.
                        We provide detailed reports upon request.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Custom-written content</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Turnitin reports available</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">✓</span>
                            <span>Proper citations included</span>
                        </li>
                    </ul>
                </div>

                <!-- Money Back Guarantee -->
                <div
                    class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-2xl p-8 border-2 border-emerald-100 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Money-Back Guarantee</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        If we can't meet your requirements or you're not satisfied with the quality, we offer a full refund.
                        No questions asked.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Full refund policy</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Transparent process</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-emerald-600 mr-2">✓</span>
                            <span>Customer-first approach</span>
                        </li>
                    </ul>
                </div>

                <!-- Unlimited Revisions -->
                <div
                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border-2 border-purple-100 hover:border-purple-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Unlimited Revisions</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We'll revise your assignment as many times as needed until you're completely satisfied with the
                        result.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Free revisions</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Quick turnaround</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-purple-600 mr-2">✓</span>
                            <span>Quality assurance</span>
                        </li>
                    </ul>
                </div>

                <!-- On-Time Delivery -->
                <div
                    class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-2xl p-8 border-2 border-amber-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-amber-500 to-orange-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">On-Time Delivery</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        We respect your deadlines. 98% of our assignments are delivered on time or earlier.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Deadline guarantee</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Express delivery available</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-amber-600 mr-2">✓</span>
                            <span>Early submission bonus</span>
                        </li>
                    </ul>
                </div>

                <!-- 24/7 Support -->
                <div
                    class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-8 border-2 border-cyan-100 hover:border-cyan-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">24/7 Support</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Our customer support team is available round the clock to assist you with any questions or concerns.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>Live chat support</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>Email assistance</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-cyan-600 mr-2">✓</span>
                            <span>Quick response time</span>
                        </li>
                    </ul>
                </div>

                <!-- Confidentiality -->
                <div
                    class="bg-gradient-to-br from-rose-50 to-red-50 rounded-2xl p-8 border-2 border-rose-100 hover:border-rose-300 hover:shadow-xl transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-rose-500 to-red-600 rounded-xl flex items-center justify-center mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">100% Confidential</h3>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Your privacy is our top priority. We never share your personal information or assignment details.
                    </p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-rose-600 mr-2">✓</span>
                            <span>Encrypted communications</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-rose-600 mr-2">✓</span>
                            <span>Secure payment methods</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-rose-600 mr-2">✓</span>
                            <span>Data protection compliant</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Testimonials Section -->
    <section class="py-24 bg-gray-50 relative overflow-hidden" id="testimonials">
        <div
            class="absolute inset-0 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_70%,transparent_100%)] opacity-30">
        </div>
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10 mb-4">Student
                    Success Stories</span>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">What Students Say</h2>
                <p class="mt-4 text-lg leading-8 text-gray-600">Join thousands of students who achieved better grades with
                    our help</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- Review 1 -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center gap-1 text-yellow-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <blockquote class="text-gray-700 mb-6 leading-relaxed">
                        "I was struggling with my Nursing capstone project and running out of time. The expert not only
                        delivered it on time but the quality was outstanding. I got an A! Highly recommended."
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold text-xl">
                            SM</div>
                        <div>
                            <div class="font-bold text-gray-900">Sarah M.</div>
                            <div class="text-sm text-gray-500">Nursing Student, NY</div>
                        </div>
                    </div>
                </div>

                <!-- Review 2 -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center gap-1 text-yellow-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <blockquote class="text-gray-700 mb-6 leading-relaxed">
                        "The most transparent and reliable service I've used. No hidden fees, and the writer communicated
                        with me throughout the process. The code was clean and well-commented too."
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 font-bold text-xl">
                            JL</div>
                        <div>
                            <div class="font-bold text-gray-900">James L.</div>
                            <div class="text-sm text-gray-500">CS Student, CA</div>
                        </div>
                    </div>
                </div>

                <!-- Review 3 -->
                <div
                    class="bg-white rounded-2xl p-8 shadow-sm ring-1 ring-gray-900/5 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center gap-1 text-yellow-500 mb-4">
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <blockquote class="text-gray-700 mb-6 leading-relaxed">
                        "I was skeptical at first, but they respected my confidentiality and delivered a plagiarism-free
                        business plan. It helped me secure a B+ in my module. Will definitely use again."
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 font-bold text-xl">
                            MR</div>
                        <div>
                            <div class="font-bold text-gray-900">Michael R.</div>
                            <div class="text-sm text-gray-500">Business Major, TX</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Subject Areas Detailed Grid Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-indigo-50 border border-indigo-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-indigo-900 font-semibold text-sm">Comprehensive Subject Coverage</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">All Subject Areas We Cover</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From STEM to humanities, our experts cover every major academic discipline
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
                <!-- STEM Subjects -->
                <div
                    class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">🔬</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">STEM Fields</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Mathematics & Statistics
                        </li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Physics & Chemistry</li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Biology & Life Sciences
                        </li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Environmental Science
                        </li>
                        <li class="flex items-center"><span class="text-blue-600 mr-2">•</span> Astronomy & Geology</li>
                    </ul>
                </div>

                <!-- Business & Economics -->
                <div
                    class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">💼</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Business & Economics</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Business Management
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Accounting & Finance
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Marketing & Sales
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Economics & Trade
                        </li>
                        <li class="flex items-center"><span class="text-emerald-600 mr-2">•</span> Entrepreneurship</li>
                    </ul>
                </div>

                <!-- Humanities -->
                <div
                    class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border border-purple-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Humanities</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> English & Literature
                        </li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> History & Philosophy
                        </li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> Languages &
                            Linguistics</li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> Art & Music Theory
                        </li>
                        <li class="flex items-center"><span class="text-purple-600 mr-2">•</span> Cultural Studies</li>
                    </ul>
                </div>

                <!-- Social Sciences -->
                <div
                    class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">🧠</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Social Sciences</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Psychology & Sociology
                        </li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Political Science</li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Anthropology</li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Education & Pedagogy
                        </li>
                        <li class="flex items-center"><span class="text-amber-600 mr-2">•</span> Social Work</li>
                    </ul>
                </div>

                <!-- Engineering -->
                <div
                    class="bg-gradient-to-br from-red-50 to-rose-50 rounded-xl p-6 border border-red-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">⚙️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Engineering</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Mechanical Engineering
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Civil Engineering</li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Electrical Engineering
                        </li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Chemical Engineering</li>
                        <li class="flex items-center"><span class="text-red-600 mr-2">•</span> Aerospace Engineering
                        </li>
                    </ul>
                </div>

                <!-- Computer Science & IT -->
                <div
                    class="bg-gradient-to-br from-indigo-50 to-blue-50 rounded-xl p-6 border border-indigo-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Computer Science</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Programming & Coding
                        </li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Data Science & AI</li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Web Development</li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Cybersecurity</li>
                        <li class="flex items-center"><span class="text-indigo-600 mr-2">•</span> Database Management
                        </li>
                    </ul>
                </div>

                <!-- Health Sciences -->
                <div
                    class="bg-gradient-to-br from-pink-50 to-rose-50 rounded-xl p-6 border border-pink-100 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">🏥</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Health Sciences</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Nursing & Healthcare
                        </li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Medicine & Pharmacy</li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Public Health</li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Nutrition & Dietetics
                        </li>
                        <li class="flex items-center"><span class="text-pink-600 mr-2">•</span> Physical Therapy</li>
                    </ul>
                </div>

                <!-- Law & Legal Studies -->
                <div
                    class="bg-gradient-to-br from-gray-50 to-slate-50 rounded-xl p-6 border border-gray-200 hover:shadow-lg transition-all duration-300">
                    <div class="text-4xl mb-4">⚖️</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Law & Legal Studies</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Constitutional Law</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Criminal Justice</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Business Law</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> International Law</li>
                        <li class="flex items-center"><span class="text-gray-600 mr-2">•</span> Legal Research</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Geographic Coverage - USA Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 bg-red-50 border border-red-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-red-900 font-semibold text-sm">Serving Students Across USA</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Available Nationwide in the USA</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    We proudly serve students from coast to coast with 24/7 online support regardless of your location
                </p>
            </div>

            <div class="max-w-7xl mx-auto">
                <!-- Major Cities -->
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl border border-gray-100 mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Popular Cities We Serve</h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🗽</div>
                            <div class="font-semibold text-gray-900 text-sm">New York</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌴</div>
                            <div class="font-semibold text-gray-900 text-sm">Los Angeles</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏙️</div>
                            <div class="font-semibold text-gray-900 text-sm">Chicago</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🤠</div>
                            <div class="font-semibold text-gray-900 text-sm">Houston</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🔔</div>
                            <div class="font-semibold text-gray-900 text-sm">Philadelphia</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌵</div>
                            <div class="font-semibold text-gray-900 text-sm">Phoenix</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🌁</div>
                            <div class="font-semibold text-gray-900 text-sm">San Francisco</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏖️</div>
                            <div class="font-semibold text-gray-900 text-sm">Miami</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🏛️</div>
                            <div class="font-semibold text-gray-900 text-sm">Washington DC</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🎭</div>
                            <div class="font-semibold text-gray-900 text-sm">Boston</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">☕</div>
                            <div class="font-semibold text-gray-900 text-sm">Seattle</div>
                        </div>
                        <div class="text-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                            <div class="text-2xl mb-2">🎸</div>
                            <div class="font-semibold text-gray-900 text-sm">Austin</div>
                        </div>
                    </div>
                    <p class="text-center text-gray-500 mt-6 text-sm">+ Hundreds more cities across all 50 states</p>
                </div>

                <!-- State Coverage -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border border-blue-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 East Coast</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>New York</div>
                            <div>Pennsylvania</div>
                            <div>Massachusetts</div>
                            <div>Virginia</div>
                            <div>Florida</div>
                            <div>Maryland</div>
                            <div>New Jersey</div>
                            <div>Georgia</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border border-emerald-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 Midwest</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>Illinois</div>
                            <div>Ohio</div>
                            <div>Michigan</div>
                            <div>Wisconsin</div>
                            <div>Minnesota</div>
                            <div>Missouri</div>
                            <div>Indiana</div>
                            <div>Iowa</div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border border-amber-100">
                        <h4 class="font-bold text-gray-900 mb-4 text-lg">🌟 West Coast</h4>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-600">
                            <div>California</div>
                            <div>Washington</div>
                            <div>Oregon</div>
                            <div>Arizona</div>
                            <div>Nevada</div>
                            <div>Colorado</div>
                            <div>Utah</div>
                            <div>Texas</div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl p-8 text-center text-white">
                    <h4 class="text-2xl font-bold mb-3">🇺🇸 All 50 States Covered</h4>
                    <p class="text-lg mb-4">No matter where you are in the United States, our expert help is just a click
                        away</p>
                    <div class="flex flex-wrap gap-3 justify-center text-sm">
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">Online Platform</span>
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">24/7 Available</span>
                        <span class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full">All Time Zones</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Academic Writing Types Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-yellow-50 border border-yellow-200 px-4 py-2 rounded-full mb-6">
                    <svg class="w-5 h-5 text-yellow-600" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-yellow-900 font-semibold text-sm">All Writing Types</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Types of Academic Work We Handle</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    From simple essays to complex dissertations, we cover all types of academic writing
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-7xl mx-auto">
                <!-- Essays -->
                <div
                    class="group bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border-2 border-blue-100 hover:border-blue-300 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-4xl">✍️</div>
                        <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">Popular</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Essays & Papers</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Argumentative essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Persuasive essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Descriptive essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Narrative essays</li>
                        <li class="flex items-start"><span class="text-blue-600 mr-2">•</span> Compare & contrast</li>
                    </ul>
                </div>

                <!-- Research Papers -->
                <div
                    class="group bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border-2 border-purple-100 hover:border-purple-300 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-4xl">📄</div>
                        <span
                            class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-semibold">Advanced</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Research Papers</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Literature reviews</li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Analytical papers</li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Experimental reports
                        </li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Annotated
                            bibliographies</li>
                        <li class="flex items-start"><span class="text-purple-600 mr-2">•</span> Research proposals</li>
                    </ul>
                </div>

                <!-- Thesis & Dissertation -->
                <div
                    class="group bg-gradient-to-br from-emerald-50 to-teal-50 rounded-xl p-6 border-2 border-emerald-100 hover:border-emerald-300 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-4xl">🎓</div>
                        <span
                            class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded-full text-xs font-semibold">Graduate</span>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Thesis & Dissertation</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Master's thesis</li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> PhD dissertation</li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Dissertation chapters
                        </li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Methodology design
                        </li>
                        <li class="flex items-start"><span class="text-emerald-600 mr-2">•</span> Data analysis</li>
                    </ul>
                </div>

                <!-- Case Studies -->
                <div
                    class="group bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 border-2 border-amber-100 hover:border-amber-300 hover:shadow-xl transition-all duration-300">
                    <div class="text-4xl mb-4">📊</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Case Studies</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Business case studies
                        </li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Medical case studies
                        </li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Psychology case studies
                        </li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Legal case analysis</li>
                        <li class="flex items-start"><span class="text-amber-600 mr-2">•</span> Social work cases</li>
                    </ul>
                </div>

                <!-- Lab Reports -->
                <div
                    class="group bg-gradient-to-br from-cyan-50 to-blue-50 rounded-xl p-6 border-2 border-cyan-100 hover:border-cyan-300 hover:shadow-xl transition-all duration-300">
                    <div class="text-4xl mb-4">🔬</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Lab Reports</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Chemistry labs</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Physics experiments</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Biology practicals</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Engineering labs</li>
                        <li class="flex items-start"><span class="text-cyan-600 mr-2">•</span> Scientific documentation
                        </li>
                    </ul>
                </div>

                <!-- Other Academic Work -->
                <div
                    class="group bg-gradient-to-br from-rose-50 to-red-50 rounded-xl p-6 border-2 border-rose-100 hover:border-rose-300 hover:shadow-xl transition-all duration-300">
                    <div class="text-4xl mb-4">📋</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Other Academic Work</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Book/article reviews</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Reflective writings</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Discussion posts</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Presentations/slides</li>
                        <li class="flex items-start"><span class="text-rose-600 mr-2">•</span> Admission essays</li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-600 mb-6">Can't find your assignment type? <a href="{{ route('order') }}"
                        class="text-blue-600 hover:text-blue-700 font-semibold">Contact us</a> - we handle custom requests
                    too!</p>
            </div>
        </div>
    </section>



    <!-- FAQ Section -->
    <section class="py-24 bg-gray-50 relative overflow-hidden">
        <div class="absolute inset-0 bg-white/50"></div>

        <div class="container mx-auto px-6 max-w-4xl relative z-10">
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10 mb-4">Common
                    Questions</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <p class="text-xl text-gray-600">Everything you need to know about Assignment Help USA</p>
            </div>

            <div class="grid gap-6">
                <!-- FAQ 1 -->
                <div
                    class="bg-white rounded-xl p-8 shadow-sm ring-1 ring-gray-900/5 hover:shadow-md transition-all border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Is Assignment Help USA legit and safe to use?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Yes! Assignment Help USA is a trusted platform used by over 50,000 college students across the USA.
                        We use secure payment processing, encrypted communications, and guarantee 100% confidentiality.
                    </p>
                </div>

                <!-- FAQ 2 -->
                <div
                    class="bg-white rounded-xl p-8 shadow-sm ring-1 ring-gray-900/5 hover:shadow-md transition-all border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">How much does it cost?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Prices start from $15 per page for assignment help and $25 per task for programming help. The final
                        cost depends on complexity, deadline, and length. We offer student-friendly pricing and discounts
                        for returning customers.
                    </p>
                </div>

                <!-- FAQ 3 -->
                <div
                    class="bg-white rounded-xl p-8 shadow-sm ring-1 ring-gray-900/5 hover:shadow-md transition-all border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">How fast can you complete my assignment?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We offer flexible deadlines from 24 hours to several weeks. For urgent assignments, we have express
                        delivery options available. Most assignments are completed within 3-5 days.
                    </p>
                </div>

                <!-- FAQ 4 -->
                <div
                    class="bg-white rounded-xl p-8 shadow-sm ring-1 ring-gray-900/5 hover:shadow-md transition-all border border-gray-100">
                    <h3 class="text-xl font-bold text-gray-900 mb-3">What if I'm not satisfied with the work?</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We offer unlimited free revisions until you're completely satisfied. If we can't meet your
                        requirements, we provide a full refund under our money-back guarantee policy.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
