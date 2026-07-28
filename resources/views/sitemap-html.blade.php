@extends('layouts.app')

@section('title', 'All Services & Site Map | AssignmentHelpUSA')
@section('description', 'Complete overview of all academic assignment help, programming languages, homework subjects, and essay writing services at AssignmentHelpUSA.')

@section('content')
<div class="min-h-screen bg-slate-50 dark:bg-slate-950 py-12 sm:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Header Section --}}
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-black uppercase tracking-widest text-indigo-600 dark:text-indigo-400">Complete Directory</span>
            <h1 class="text-3xl sm:text-4xl font-black text-slate-900 dark:text-white mt-2 tracking-tight">
                HTML Sitemap &amp; Services Directory
            </h1>
            <p class="text-base text-slate-600 dark:text-slate-400 mt-3 leading-relaxed">
                Explore our full catalog of programming services, homework help subjects, academic paper writing, and support resources.
            </p>
        </div>

        {{-- Directory Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- Column 1: Programming Services (16 Sub-pages) --}}
            <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center gap-3 mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                    <span class="text-2xl">💻</span>
                    <div>
                        <h2 class="text-lg font-bold text-slate-900 dark:text-white">
                            <a href="{{ route('services.programming.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Programming Help</a>
                        </h2>
                        <span class="text-xs text-slate-500 dark:text-slate-400">16 Specialized Sub-pages</span>
                    </div>
                </div>
                <ul class="space-y-2 text-sm font-medium">
                    <li><a href="{{ route('services.programming.show', 'python') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🐍 Python Programming Help</a></li>
                    <li><a href="{{ route('services.programming.show', 'java') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">☕ Java Programming Help</a></li>
                    <li><a href="{{ route('services.programming.show', 'php') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🐘 PHP Programming Help</a></li>
                    <li><a href="{{ route('services.programming.show', 'web-development') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🌐 Web Development Projects</a></li>
                    <li><a href="{{ route('services.programming.show', 'mobile-app') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">📱 Mobile App Development</a></li>
                    <li><a href="{{ route('services.programming.show', 'algorithms') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🔢 Algorithms &amp; Data Structures</a></li>
                    <li><a href="{{ route('services.programming.show', 'database') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🗄️ Database &amp; SQL Help</a></li>
                    <li><a href="{{ route('services.programming.show', 'machine-learning') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🤖 Machine Learning &amp; AI</a></li>
                    <li><a href="{{ route('services.programming.show', 'debugging') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🔧 Code Review &amp; Debugging</a></li>
                    <li><a href="{{ route('services.programming.show', 'api-development') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🔗 REST &amp; GraphQL API Dev</a></li>
                    <li><a href="{{ route('services.programming.show', 'devops') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">⚙️ DevOps &amp; CI/CD Deployment</a></li>
                    <li><a href="{{ route('services.programming.show', 'game-development') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🎮 Game Development Projects</a></li>
                    <li><a href="{{ route('services.programming.show', 'cybersecurity') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🛡️ Cybersecurity &amp; Encryption</a></li>
                    <li><a href="{{ route('services.programming.show', 'desktop-app') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🖥️ Desktop GUI Applications</a></li>
                    <li><a href="{{ route('services.programming.show', 'cloud-computing') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">☁️ Cloud Computing Solutions</a></li>
                    <li><a href="{{ route('services.programming.show', 'testing-qa') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🧪 Software Testing &amp; QA</a></li>
                </ul>
            </div>

            {{-- Column 2: Homework & Subject Help --}}
            <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center gap-3 mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                    <span class="text-2xl">📚</span>
                    <div>
                        <h2 class="text-lg font-bold text-slate-900 dark:text-white">
                            <a href="{{ route('services.homework-help.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Homework &amp; Subjects</a>
                        </h2>
                        <span class="text-xs text-slate-500 dark:text-slate-400">Subject-Specific Assistance</span>
                    </div>
                </div>
                <ul class="space-y-2 text-sm font-medium">
                    <li><a href="{{ route('services.homework-help.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">📖 General Homework Help</a></li>
                    <li><a href="{{ route('services.homework-help.math') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">📐 Math Homework Help (Calculus &amp; Algebra)</a></li>
                    <li><a href="{{ route('services.homework-help.nursing') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🩺 Nursing Assignment Help</a></li>
                    <li><a href="{{ route('services.homework-help.physics') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">⚡ Physics Homework Help</a></li>
                    <li><a href="{{ route('services.lab-report.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🔬 Lab Report Help</a></li>
                    <li><a href="{{ route('services.law-assignment.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">⚖️ Law Assignment Help</a></li>
                </ul>
            </div>

            {{-- Column 3: Academic Papers & Trust --}}
            <div class="bg-white dark:bg-slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm">
                <div class="flex items-center gap-3 mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                    <span class="text-2xl">✍️</span>
                    <div>
                        <h2 class="text-lg font-bold text-slate-900 dark:text-white">
                            <a href="{{ route('services.essay-writing.index') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Academic Paper Writing</a>
                        </h2>
                        <span class="text-xs text-slate-500 dark:text-slate-400">Essays, Papers &amp; Dissertations</span>
                    </div>
                </div>
                <ul class="space-y-2 text-sm font-medium mb-6">
                    <li><a href="{{ route('services.essay-writing.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">📝 Essay Writing Help</a></li>
                    <li><a href="{{ url('/essay-writing-help/argumentative') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">💡 Argumentative Essay Writing</a></li>
                    <li><a href="{{ route('services.research-paper.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">📄 Research Paper Help</a></li>
                    <li><a href="{{ route('services.case-study.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">📊 Case Study Help</a></li>
                    <li><a href="{{ route('services.literature-review.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">📚 Literature Review Help</a></li>
                    <li><a href="{{ route('services.thesis-dissertation.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🎓 Thesis &amp; Dissertation Help</a></li>
                    <li><a href="{{ route('services.presentation-design.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">🎨 Presentation Design Help</a></li>
                    <li><a href="{{ route('services.proofreading-editing.index') }}" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">✏️ Proofreading &amp; Editing Help</a></li>
                </ul>

                <div class="pt-4 border-t border-slate-100 dark:border-slate-800">
                    <h3 class="text-xs font-black uppercase tracking-wider text-slate-400 mb-2">Company &amp; Trust Pages</h3>
                    <ul class="space-y-1.5 text-xs font-medium text-slate-500 dark:text-slate-400">
                        <li><a href="{{ route('about') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">About Us</a></li>
                        <li><a href="{{ route('how-it-works') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">How It Works</a></li>
                        <li><a href="{{ route('pricing') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Pricing</a></li>
                        <li><a href="{{ route('reviews') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Student Reviews</a></li>
                        <li><a href="{{ route('experts') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Our Experts</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">FAQ</a></li>
                        <li><a href="{{ route('privacy-policy') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Privacy Policy</a></li>
                        <li><a href="{{ route('terms-of-service') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400">Terms of Service</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
