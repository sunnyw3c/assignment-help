<footer class="bg-slate-100 dark:bg-slate-950 text-slate-700 dark:text-slate-300 border-t border-slate-200 dark:border-slate-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
        <!-- Main Footer Links Wrapper -->
        <div class="flex flex-col lg:flex-row justify-between gap-12 lg:gap-8">
            <!-- Brand Column -->
            <div class="flex flex-col gap-4 max-w-sm">
                <span class="text-xl sm:text-2xl font-black bg-gradient-to-r from-violet-600 to-indigo-600 dark:from-violet-400 dark:to-indigo-400 bg-clip-text text-transparent tracking-tight">
                    AssignmentHelp<span class="text-slate-800 dark:text-white">USA</span>
                </span>
                <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed font-medium">
                    Your premier academic partner. Providing reliable, plagiarism-free assistance and expert support for high school and university students across the United States. Available 24/7.
                </p>
            </div>

            <!-- Links Sections Wrapper -->
            <div class="flex flex-col sm:flex-row gap-10 sm:gap-16">
                <!-- Column 1: Quick Links -->
                <div class="flex flex-col gap-4 min-w-[150px]">
                    <h4 class="text-sm font-bold text-slate-800 dark:text-white uppercase tracking-wider">Company</h4>
                    <div class="flex flex-col gap-2.5 text-sm font-medium">
                        <a href="{{ route('about') }}" class="hover:text-indigo-600 dark:hover:text-white transition-colors">About Us</a>
                        <a href="{{ route('how-it-works') }}" class="hover:text-indigo-600 dark:hover:text-white transition-colors">How It Works</a>
                        <a href="{{ route('experts') }}" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Our Experts</a>
                    </div>
                </div>

                <!-- Column 2: Services -->
                <div class="flex flex-col gap-4 min-w-[150px]">
                    <h4 class="text-sm font-bold text-slate-800 dark:text-white uppercase tracking-wider">Services</h4>
                    <div class="flex flex-col gap-2.5 text-sm font-medium">
                        <a href="{{ route('services.assignment.index') }}" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Assignment Help</a>
                        <a href="{{ route('services.programming.index') }}" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Programming Help</a>
                        <a href="{{ route('services.essay-writing.index') }}" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Essay Writing</a>
                        <a href="{{ route('services.thesis-dissertation.index') }}" class="hover:text-indigo-600 dark:hover:text-white transition-colors">Thesis Writing</a>
                    </div>
                </div>

                <!-- Column 3: Contact -->
                <div class="flex flex-col gap-4 max-w-xs">
                    <h4 class="text-sm font-bold text-slate-800 dark:text-white uppercase tracking-wider">Get in Touch</h4>
                    <div class="flex flex-col gap-2.5 text-sm font-medium">
                        <span class="flex items-center gap-2">
                            <span class="text-indigo-600 dark:text-indigo-400">📧</span>
                            <span class="text-slate-600 dark:text-slate-400">support@assignmenthelpusa.com</span>
                        </span>
                        <span class="flex items-center gap-2">
                            <span class="text-indigo-600 dark:text-indigo-400">📞</span>
                            <span class="text-slate-600 dark:text-slate-400">+1 (800) 555-0199</span>
                        </span>
                        <span class="text-xs text-slate-400 mt-2 font-normal">
                            USA-based customer support active 24/7. Response times under 15 minutes.
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Divider & Copyright -->
        <div class="border-t border-slate-200 dark:border-slate-900 mt-12 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs font-semibold text-slate-500 dark:text-slate-400">
            <div>
                &copy; {{ date('Y') }} AssignmentHelpUSA. All rights reserved.
            </div>
            <div class="flex gap-6">
                <a href="#" class="hover:text-slate-700 dark:hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-slate-700 dark:hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>