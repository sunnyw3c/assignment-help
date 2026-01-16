@extends('layouts.app')

@section('title', 'About Us - Expert Assignment Help & Tutoring Service | Trending Tutor')
@section('description',
    'Learn about Trending Tutor - Your trusted partner for assignment help and academic tutoring. We connect students with expert tutors who provide personalized assistance across various subjects.')
@section('keywords',
    'about us, assignment help, tutoring service, expert tutors, academic assistance, student support, educational services')

@section('content')
    <!-- Structured Data for Organization -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Trending Tutor",
        "description": "Professional assignment help and tutoring service connecting students with expert tutors",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "foundingDate": "2020",
        "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "areaServed": "Worldwide",
            "availableLanguage": ["English"]
        },
        "sameAs": []
    }
    </script>

    <!-- Hero Section -->
    <header class="relative overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 text-white">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Floating Icons -->
            <div class="absolute top-20 left-10 opacity-20 animate-float-slow">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    📚
                </div>
            </div>
            <div class="absolute top-40 right-20 opacity-20 animate-float-delayed">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    🎓
                </div>
            </div>
            <div class="absolute bottom-40 left-1/4 opacity-20 animate-float">
                <div class="bg-white/10 backdrop-blur-sm rounded-lg p-3 text-4xl">
                    💡
                </div>
            </div>

            <!-- Geometric Shapes -->
            <div class="absolute top-1/4 right-1/4 w-32 h-32 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-full animate-pulse-slow"></div>
            <div class="absolute bottom-1/3 left-1/3 w-20 h-20 bg-gradient-to-br from-pink-500/20 to-red-500/20 rounded-full animate-bounce-slow"></div>
            <div class="absolute top-1/2 left-1/6 w-16 h-16 bg-gradient-to-br from-green-500/20 to-teal-500/20 transform rotate-45 animate-spin-slow"></div>
        </div>

        <div class="relative z-10 container mx-auto px-4 py-24 lg:py-32">
            <div class="text-center max-w-4xl mx-auto">
                <!-- Badge -->
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm text-white px-6 py-3 rounded-full text-sm font-bold mb-8 animate-fade-in-up">
                    <span class="mr-3 text-xl animate-bounce">👋</span>
                    WELCOME TO CODEHELP
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight animate-fade-in-up animation-delay-200">
                    Your Trusted Partner for <br>
                    <span class="bg-gradient-to-r from-cyan-400 via-blue-400 to-purple-400 bg-clip-text text-transparent">
                        Academic Success
                    </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-gray-200 mb-12 leading-relaxed animate-fade-in-up animation-delay-400">
                    Connecting students with expert tutors for personalized assignment help and academic support.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-6 justify-center animate-fade-in-up animation-delay-600">
                    <a href="{{ route('assignments.create') }}"
                        class="group inline-flex items-center justify-center bg-gradient-to-r from-cyan-500 to-blue-500 hover:from-cyan-600 hover:to-blue-600 text-white px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-cyan-500/25">
                        <span class="mr-3 text-2xl">🚀</span>
                        Get Started Today
                        <svg class="ml-3 w-6 h-6 group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="#our-story"
                        class="inline-flex items-center justify-center border-2 border-white/30 text-white hover:bg-white hover:text-gray-900 px-10 py-5 rounded-2xl font-bold text-lg transition-all duration-300 backdrop-blur-sm">
                        <span class="mr-3 text-2xl">📖</span>
                        Learn Our Story
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-8 h-12 border-2 border-white/30 rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </header>

    <!-- Our Story Section -->
    <section id="our-story" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50/50 to-purple-50/50"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <div class="inline-flex items-center bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                        <span class="mr-3 text-xl">📖</span>
                        OUR STORY
                    </div>
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                        Empowering Students Since
                        <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">2020</span>
                    </h2>
                </div>

                <!-- Story Content -->
                <div class="prose prose-lg max-w-none">
                    <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border border-gray-100 mb-8">
                        <p class="text-xl text-gray-700 leading-relaxed mb-6">
                            Trending Tutor was founded with a simple yet powerful mission: to make quality academic assistance accessible to every student, regardless of their location or background.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            We recognized that students often face challenges with complex assignments, tight deadlines, and limited access to personalized support. Our platform bridges this gap by connecting students with experienced tutors who understand their unique needs.
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            What started as a small tutoring service has grown into a comprehensive academic support platform serving thousands of students worldwide. Our success is built on trust, quality, and a genuine commitment to student success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Mission & Vision Section -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-blue-50 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Mission -->
                <div class="group relative">
                    <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 p-10 border border-gray-100 h-full">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-500/0 to-blue-600/0 group-hover:from-blue-500/5 group-hover:to-blue-600/5 rounded-3xl transition-all duration-500"></div>

                        <div class="relative">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <span class="text-4xl">🎯</span>
                            </div>
                            <h3 class="text-3xl font-black text-gray-900 mb-4">Our Mission</h3>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                To empower students worldwide by providing accessible, high-quality academic assistance that helps them achieve their educational goals and build confidence in their abilities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="group relative">
                    <div class="bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 p-10 border border-gray-100 h-full">
                        <div class="absolute inset-0 bg-gradient-to-br from-purple-500/0 to-purple-600/0 group-hover:from-purple-500/5 group-hover:to-purple-600/5 rounded-3xl transition-all duration-500"></div>

                        <div class="relative">
                            <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                                <span class="text-4xl">🔭</span>
                            </div>
                            <h3 class="text-3xl font-black text-gray-900 mb-4">Our Vision</h3>
                            <p class="text-lg text-gray-600 leading-relaxed">
                                To become the world's most trusted academic support platform, where every student has access to expert guidance and personalized learning experiences that transform their academic journey.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-green-500 to-blue-500 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">💎</span>
                    OUR CORE VALUES
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    What We
                    <span class="bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">Stand For</span>
                </h2>
            </div>

            <!-- Values Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
                <!-- Quality Excellence -->
                <div class="group relative" x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false">
                    <div class="bg-gradient-to-br from-blue-50 to-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-blue-100 h-full">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 shadow-lg">
                            <span class="text-3xl">⭐</span>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Quality Excellence</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We maintain the highest standards in every assignment, ensuring accuracy, thoroughness, and academic integrity.
                        </p>
                    </div>
                </div>

                <!-- Student-Centric -->
                <div class="group relative" x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false">
                    <div class="bg-gradient-to-br from-green-50 to-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-green-100 h-full">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 shadow-lg">
                            <span class="text-3xl">🎓</span>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Student-Centric</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Your success is our priority. We tailor our approach to meet your unique learning needs and academic goals.
                        </p>
                    </div>
                </div>

                <!-- Integrity & Trust -->
                <div class="group relative" x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false">
                    <div class="bg-gradient-to-br from-purple-50 to-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-purple-100 h-full">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 shadow-lg">
                            <span class="text-3xl">🔒</span>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Integrity & Trust</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We uphold ethical practices, maintain confidentiality, and build lasting relationships based on trust.
                        </p>
                    </div>
                </div>

                <!-- Innovation -->
                <div class="group relative" x-data="{ hovered: false }" @mouseenter="hovered = true" @mouseleave="hovered = false">
                    <div class="bg-gradient-to-br from-orange-50 to-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-4 border border-orange-100 h-full">
                        <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-12 transition-all duration-300 shadow-lg">
                            <span class="text-3xl">💡</span>
                        </div>
                        <h3 class="text-2xl font-black text-gray-900 mb-4">Innovation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We continuously improve our platform and methods to provide you with the best learning experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-gradient-to-br from-slate-50 via-blue-50 to-purple-50 relative overflow-hidden">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-full text-sm font-bold mb-8 shadow-lg">
                    <span class="mr-3 text-xl">🌟</span>
                    WHY CHOOSE US
                </div>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-6">
                    What Makes Us
                    <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Different</span>
                </h2>
            </div>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Expert Tutors -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="text-6xl mb-6 text-center">👨‍🏫</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">Expert Tutors</h3>
                    <p class="text-gray-600 leading-relaxed text-center">
                        Our team consists of qualified professionals with advanced degrees and extensive teaching experience across various subjects.
                    </p>
                </div>

                <!-- 24/7 Support -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="text-6xl mb-6 text-center">⏰</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">24/7 Availability</h3>
                    <p class="text-gray-600 leading-relaxed text-center">
                        Get help whenever you need it. Our support team and tutors are available round the clock to assist you.
                    </p>
                </div>

                <!-- Affordable Pricing -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="text-6xl mb-6 text-center">💰</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">Fair Pricing</h3>
                    <p class="text-gray-600 leading-relaxed text-center">
                        Quality assistance at student-friendly prices. We believe academic help should be accessible to everyone.
                    </p>
                </div>

                <!-- Timely Delivery -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="text-6xl mb-6 text-center">🚀</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">On-Time Delivery</h3>
                    <p class="text-gray-600 leading-relaxed text-center">
                        We respect your deadlines. Our tutors ensure timely completion without compromising on quality.
                    </p>
                </div>

                <!-- Plagiarism-Free -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="text-6xl mb-6 text-center">✅</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">Original Work</h3>
                    <p class="text-gray-600 leading-relaxed text-center">
                        Every assignment is crafted from scratch, ensuring 100% original and plagiarism-free content.
                    </p>
                </div>

                <!-- Confidential -->
                <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="text-6xl mb-6 text-center">🔐</div>
                    <h3 class="text-2xl font-black text-gray-900 mb-4 text-center">100% Confidential</h3>
                    <p class="text-gray-600 leading-relaxed text-center">
                        Your privacy matters. We maintain strict confidentiality and never share your information.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-br from-gray-900 via-slate-900 to-gray-800 text-white relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-20 w-40 h-40 bg-gradient-to-br from-blue-500/15 to-cyan-500/15 rounded-full blur-3xl animate-pulse-slow"></div>
            <div class="absolute bottom-20 right-20 w-60 h-60 bg-gradient-to-br from-purple-500/15 to-pink-500/15 rounded-full blur-3xl animate-pulse-slow"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-black mb-4">Our Impact in Numbers</h3>
                <p class="text-xl text-gray-300">Trusted by students worldwide</p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <div class="text-center group">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl">📚</span>
                    </div>
                    <div class="text-5xl font-black mb-2">5000+</div>
                    <div class="text-gray-300 font-medium">Assignments Completed</div>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl">🎓</span>
                    </div>
                    <div class="text-5xl font-black mb-2">2500+</div>
                    <div class="text-gray-300 font-medium">Happy Students</div>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl">⭐</span>
                    </div>
                    <div class="text-5xl font-black mb-2">98.5%</div>
                    <div class="text-gray-300 font-medium">Satisfaction Rate</div>
                </div>

                <div class="text-center group">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-500 to-red-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                        <span class="text-3xl">👨‍🏫</span>
                    </div>
                    <div class="text-5xl font-black mb-2">150+</div>
                    <div class="text-gray-300 font-medium">Expert Tutors</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <!-- Background Animation -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/20 via-purple-500/20 to-pink-500/20 animate-gradient-shift"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-4xl md:text-5xl font-black text-white mb-8 leading-tight">
                    Ready to Experience the <br>
                    Trending Tutor Difference?
                </h2>
                <p class="text-xl text-white/90 mb-12 leading-relaxed">
                    Join thousands of students who have achieved academic success with our expert guidance.
                    Let us help you reach your educational goals.
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="{{ route('assignments.create') }}"
                        class="group inline-flex items-center justify-center bg-white text-blue-600 hover:bg-gray-50 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300 transform hover:scale-105 shadow-2xl">
                        <span class="mr-4 text-3xl">🚀</span>
                        Get Help Now
                        <svg class="ml-4 w-8 h-8 group-hover:translate-x-2 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                    <a href="{{ route('how-it-works') }}"
                        class="inline-flex items-center justify-center border-2 border-white text-white hover:bg-white hover:text-blue-600 px-12 py-6 rounded-2xl font-black text-xl transition-all duration-300">
                        <span class="mr-4 text-3xl">❓</span>
                        How It Works
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom Animations -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes float-slow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        @keyframes pulse-slow {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 0.8; }
        }

        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-float-slow { animation: float-slow 4s ease-in-out infinite; }
        .animate-float-delayed { animation: float 3s ease-in-out infinite 1s; }
        .animate-pulse-slow { animation: pulse-slow 3s ease-in-out infinite; }
        .animate-bounce-slow { animation: bounce-slow 2s ease-in-out infinite; }
        .animate-spin-slow { animation: spin-slow 8s linear infinite; }
        .animate-gradient-shift { animation: gradient-shift 3s ease-in-out infinite; }
        .animate-fade-in-up { animation: fade-in-up 0.8s ease-out forwards; }

        .animation-delay-200 { animation-delay: 0.2s; }
        .animation-delay-400 { animation-delay: 0.4s; }
        .animation-delay-600 { animation-delay: 0.6s; }
        .animation-delay-800 { animation-delay: 0.8s; }
        .animation-delay-1000 { animation-delay: 1s; }
    </style>
@endsection
