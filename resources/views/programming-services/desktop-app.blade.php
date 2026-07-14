@extends('layouts.app')

@section('title', 'Desktop Application Assignment Help | Expert GUI & Native Coding Assistance')
@section('description', 'Struggling with WPF XAML bindings, Electron IPC channels, JavaFX controllers, or Tkinter threads? Get expert desktop application assignment help from vetted developers.')

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
                        <span class="text-xs text-slate-500 dark:text-slate-400">from 380+ desktop reviews</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2 w-2 animate-pulse rounded-full bg-emerald-500"></span>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300"><strong class="text-slate-900 dark:text-white">12</strong> Desktop Experts Online</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">1,500+ GUI Apps Built</span>
                    </div>
                    <div class="hidden h-5 w-px bg-slate-200 sm:block dark:bg-slate-700"></div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4" /></svg>
                        <span class="text-xs font-semibold text-slate-700 dark:text-slate-300">Executable Installers Bundled</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 2 – CORE DESKTOP FRAMEWORKS
             SEO: Keyword coverage for search terms
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" id="desktop-coverage" aria-labelledby="desktop-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Desktop Ecosystem Coverage</p>
                    <h2 id="desktop-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Get <span class="text-blue-600 dark:text-blue-400">Desktop App Assignment Help</span> in Any Tech
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Whether it is packaging cross-platform apps in Electron, designing native WPF windows in .NET, coding Python Tkinter GUIs, or structuring JavaFX controllers — we cover all frameworks.
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-cyan-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">⚡</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Electron</span>
                        <span class="text-[10px] text-slate-500">React / IPC / JS</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-blue-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🎯</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">WPF &amp; C#</span>
                        <span class="text-[10px] text-slate-500">XAML / MVVM / .NET</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-orange-500 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🖥️</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">JavaFX</span>
                        <span class="text-[10px] text-slate-500">FXML / Controller / OOP</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-green-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🐍</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Python GUI</span>
                        <span class="text-[10px] text-slate-500">Tkinter / PyQt / PySide</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-red-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">🔴</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Qt C++</span>
                        <span class="text-[10px] text-slate-500">Widgets / Signals / slots</span>
                    </div>
                    <div class="group flex flex-col items-center gap-2 rounded-2xl border border-slate-200 bg-white p-5 text-center shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-indigo-600 hover:shadow-md dark:border-slate-800 dark:bg-slate-900">
                        <span class="text-4xl group-hover:scale-110 transition-transform duration-300">📦</span>
                        <span class="text-sm font-bold text-slate-900 dark:text-white">Tauri &amp; Rust</span>
                        <span class="text-[10px] text-slate-500">HTML / Cargo / Secure</span>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 3 – WHY STUDENTS PREFER US FOR DESKTOP APP HELP
             SEO: High EEAT block
        =================================================== --}}
        <section class="bg-slate-900 py-16 sm:py-20" aria-labelledby="why-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-14">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6">
                        <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                        <span class="text-blue-400 text-[10px] font-black uppercase tracking-[0.2em]">Working Executables Included</span>
                    </div>
                    <h2 id="why-heading" class="text-4xl md:text-5xl font-black text-white leading-tight">
                        Why Choose Our <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Desktop Programming Help</span>
                    </h2>
                    <p class="mt-5 text-base text-slate-400 max-w-2xl mx-auto">
                        Desktop applications require building responsive UI threads, connecting database sync files, mapping native system calls, and bundling installer layouts. Here is why we are the preferred choice.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-start">
                    <div class="space-y-5 text-slate-400 text-[15px] leading-relaxed">
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-blue-500 rounded-full inline-block"></span>
                                Vetted Desktop Software Engineers
                            </h3>
                            <p>Every desktop project is handled by an expert developer specializing in native application architectures. They write clean, scalable MVC/MVVM logic and ensure layouts scale cleanly on high-DPI displays.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-indigo-500 rounded-full inline-block"></span>
                                Responsive Background Threading
                            </h3>
                            <p>We write thread-safe desktop code. We configure tasks asynchronously (using async/await, worker threads, or background tasks) to prevent window freezes when running queries or loading datasets.</p>
                        </div>
                        <div class="p-6 rounded-2xl bg-white/[0.03] border border-white/5">
                            <h3 class="text-lg font-bold text-white mb-3 flex items-center gap-2">
                                <span class="w-1 h-5 bg-purple-500 rounded-full inline-block"></span>
                                Packaged platform installers
                            </h3>
                            <p>We deliver fully buildable directory files. Every solution contains detailed run instructions and packaged installer files (.exe setup files, Mac dmg folders, or platform-specific builds) for easy validation.</p>
                        </div>
                    </div>

                    <div class="space-y-5">
                        <div class="p-7 rounded-[2rem] bg-gradient-to-br from-blue-600/10 to-indigo-600/5 border border-blue-500/10">
                            <h3 class="text-xl font-black text-white mb-6">What We Deliver with Every Order</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">✅</div>
                                    <div><p class="text-white font-bold text-sm">Tested Source Code Files</p><p class="text-xs text-slate-500 mt-0.5">Fully functional view templates, data models, logic files, and assets</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📦</div>
                                    <div><p class="text-white font-bold text-sm">Bundled Installers &amp; Builds</p><p class="text-xs text-slate-500 mt-0.5">Platform specific executables (Windows MSI/EXE, macOS DMG, Linux DEB)</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">📝</div>
                                    <div><p class="text-white font-bold text-sm">Step-by-Step Compile README</p><p class="text-xs text-slate-500 mt-0.5">Instructions detailing setup command sequences, compiler settings, and SDK options</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">⚡</div>
                                    <div><p class="text-white font-bold text-sm">Urgent Deadline Delivery Options</p><p class="text-xs text-slate-500 mt-0.5">Stuck on XAML bindings or Tkinter loop crashes? We resolve it fast</p></div>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-8 h-8 rounded-lg bg-emerald-500/15 flex items-center justify-center flex-shrink-0 mt-0.5 text-base">🔒</div>
                                    <div><p class="text-white font-bold text-sm">Strict Confidentiality</p><p class="text-xs text-slate-500 mt-0.5">Your email, names, class parameters, and source files are kept highly secure</p></div>
                                </li>
                            </ul>
                        </div>

                        <a href="{{ route('order') }}" class="group relative inline-flex w-full items-center justify-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-blue-500 transition-all duration-300 shadow-lg hover:-translate-y-0.5 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-700"></div>
                            <span class="relative z-10">Get Desktop Assignment Help Now</span>
                            <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 4 – TYPES OF DESKTOP ASSIGNMENTS TACKLED
        =================================================== --}}
        <section class="bg-white py-14 sm:py-16 dark:bg-slate-900" id="desktop-services" aria-labelledby="services-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-blue-600 dark:text-blue-400">Assignment Scope</p>
                    <h2 id="services-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Types of <span class="text-blue-600 dark:text-blue-400">Desktop Assignments</span> We Handle
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-slate-400">
                        Our experts possess deep knowledge of native bindings, background tasks, installer bundlers, and local files structures.
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white text-xl">🖥️</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Modern GUI Designs</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Designing custom view windows. Coding WPF XAML layouts, Electron HTML/CSS views, JavaFX layouts, and Tkinter frames matching design guidelines.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• High-DPI layout scaling</li>
                            <li>• Material Design styling</li>
                            <li>• Custom window skins</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-600 text-white text-xl">🔄</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Asynchronous Background Threading</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Preventing GUI freeze blocks. Implementing async/await methods, C# BackgroundWorkers, Java thread executors, and Python thread synchronization.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Asynchronous network calls</li>
                            <li>• Thread safe UI updates</li>
                            <li>• Progress bar loaders</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-600 text-white text-xl">💾</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Local Data Storage</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Caching application parameters offline. Integrating SQLite databases, local JSON file managers, C# Entity Framework bindings, and IndexedDB files.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Local SQLite integrations</li>
                            <li>• JSON settings persistence</li>
                            <li>• Offline database syncs</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-600 text-white text-xl">🔌</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Native OS integrations</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Interacting with native operations. Setting up Electron Inter-Process Communication (IPC), file system read/writes, system tray menus, and shortcuts.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Electron secure IPC channels</li>
                            <li>• File dialog boxes setups</li>
                            <li>• Native system tray menus</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-amber-600 text-white text-xl">📊</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">System Integrations &amp; Tools</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Connecting applications to systems. Integrating custom API fetches, processing Excel/CSV directories, and creating print preview windows.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• CSV / PDF file processing</li>
                            <li>• API endpoints integrations</li>
                            <li>• Local printer controllers</li>
                        </ul>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-950 flex flex-col">
                        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-600 text-white text-xl">📦</div>
                        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2">Package builds &amp; Installers</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4 flex-grow">Configuring project packages. Bundling Electron apps with electron-builder, generating C# MSI installers, and packaging Java modules.</p>
                        <ul class="text-xs text-slate-500 font-semibold space-y-1.5 border-t border-slate-100 pt-4 dark:border-slate-800">
                            <li>• Windows EXE/MSI generation</li>
                            <li>• macOS DMG packages setup</li>
                            <li>• Electron builder parameters</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 5 – STEPS TO GET DESKTOP ASSISTANCE
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="steps-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-purple-600 dark:text-purple-400">Streamlined Process</p>
                    <h2 id="steps-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        Get Your Desktop App Coded in 4 Steps
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-purple-600 text-base font-black text-white shadow-md">1</div>
                        <div class="mb-3 text-2xl">📋</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Upload Guidelines</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Upload your layout files, database specs, deadlines, and target OS guidelines.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-blue-600 text-base font-black text-white shadow-md">2</div>
                        <div class="mb-3 text-2xl">🎯</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Get Fair Pricing</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">A desktop software engineering specialist reviews your requirements and quotes.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-600 text-base font-black text-white shadow-md">3</div>
                        <div class="mb-3 text-2xl">💻</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Expert Codes App</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">The developer creates GUI views, maps events, styles templates, structures threads, and bundles installers.</p>
                    </div>
                    <div class="flex flex-col items-center rounded-2xl border border-slate-200 bg-white p-6 text-center shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center rounded-full bg-emerald-600 text-base font-black text-white shadow-md">4</div>
                        <div class="mb-3 text-2xl">🚀</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Download &amp; Test</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Download the directory, execute compile scripts or start installers locally, and request updates.</p>
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
                        Guaranteed Desktop App execution
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6 dark:border-blue-900/40 dark:bg-blue-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 text-xl text-white">💡</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">100% Original Code</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Every design file, controller parameter, and thread layout is written from scratch according to your specific instructions.</p>
                    </div>
                    <div class="rounded-2xl border border-emerald-200 bg-emerald-50 p-6 dark:border-emerald-900/40 dark:bg-emerald-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-600 text-xl text-white">⏱️</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Deadline Compliance</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">We monitor our software compilation pipelines continuously to ensure your script folders are delivered before the deadline.</p>
                    </div>
                    <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6 dark:border-purple-900/40 dark:bg-purple-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-600 text-xl text-white">🔄</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">72-Hour Free Revisions</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Need minor variable adjustments, updated libraries, or design alterations? We offer free revisions within 72 hours of delivery.</p>
                    </div>
                    <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 dark:border-amber-900/40 dark:bg-amber-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-600 text-xl text-white">💰</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Refund Guarantee</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">If our application code fails execution or misses critical GUI parameters explicitly detailed in your instructions, you are covered by our refund policy.</p>
                    </div>
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6 dark:border-slate-800 dark:bg-slate-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-slate-700 text-xl text-white">🔒</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">Strict Privacy</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Your details are kept strictly private. Your files and assignment solutions are never shared or published.</p>
                    </div>
                    <div class="rounded-2xl border border-cyan-200 bg-cyan-50 p-6 dark:border-cyan-900/40 dark:bg-cyan-950/20">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-600 text-xl text-white">💬</div>
                        <h3 class="mb-2 text-base font-bold text-slate-900 dark:text-white">24/7 Expert Support</h3>
                        <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Connect with customer support or message your assigned desktop specialist directly to clarify requirements or get progress updates.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- ===================================================
             SECTION 7 – STUDENT DESKTOP REVIEWS
        =================================================== --}}
        <section class="bg-slate-50 py-14 sm:py-16 dark:bg-slate-950" aria-labelledby="reviews-heading">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="mb-3 text-xs font-black uppercase tracking-widest text-amber-600 dark:text-amber-400">Student Reviews</p>
                    <h2 id="reviews-heading" class="text-3xl font-black tracking-tight text-slate-900 sm:text-4xl dark:text-white">
                        What Students Say About Our Desktop Help
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">Electron Text Editor</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"I was struggling to link the Electron main process filesystem calls with a React editor view. The expert resolved the IPC context bridge setups and bundled the DMG installer cleanly."</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Liam D.</p><p class="text-xs text-slate-500">NYU</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">WPF C# Dashboard</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"My WPF dashboard assignment required complex MVVM binding with local SQLite. The expert delivered structured models, clean XAML view layers, and async thread tasks. Incredible!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Olivia R.</p><p class="text-xs text-slate-500">USC</p></div>
                        </div>
                    </article>

                    <article class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
                        <div class="mb-3 flex items-center justify-between">
                            <div class="flex text-amber-400 text-sm">★★★★★</div>
                            <span class="rounded-full bg-blue-50 px-2.5 py-1 text-[11px] font-bold text-blue-700 dark:bg-blue-950/40 dark:text-blue-400">JavaFX Inventory UI</span>
                        </div>
                        <p class="mb-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400 italic">"Had an inventory UI due requiring FXML files and action controllers. The developer structured the controller actions cleanly and documented the project build. Super helpful!"</p>
                        <div class="border-t border-slate-100 pt-4 dark:border-slate-800 flex items-center justify-between">
                            <div><p class="text-sm font-bold text-slate-900 dark:text-white">Daniel S.</p><p class="text-xs text-slate-500">UC Irvine</p></div>
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
                                What is Desktop Application Assignment Help?
                            </h2>
                            <div class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <p><strong class="text-slate-900 dark:text-white font-semibold">Desktop application assignment help</strong> is a specialized programming service designed to support computer science students with GUI layouts, async thread processes, native system APIs, and executable configurations. Desktop software is complex because it requires managing direct hardware access, filesystem bounds, thread synchronizations, and window scaling.</p>
                                <p>Whether you are designing WPF XAML controls, setting up context bridges in Electron, coding custom layouts in JavaFX, or scripting Tkinter modules — our experts write clean code and provide setup guides to help you succeed.</p>
                                <p>We cover all major platforms: Electron, Tauri, .NET C# (WPF, WinForms), JavaFX, Swing, C++ Qt, and Python (Tkinter, PyQt).</p>
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-600 text-white">🏫</span>
                                Common Desktop Coding Challenges We Solve
                            </h3>
                            <ul class="space-y-3 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">UI Thread Freezes:</strong> Resolving application lockups by moving calculations and file parsing to background worker threads.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">Electron IPC Context Bridges:</strong> Configuring secure communications between main and renderer nodes without security overrides.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <svg class="h-4 w-4 shrink-0 mt-0.5 text-emerald-600 dark:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" /></svg>
                                    <span><strong class="text-slate-900 dark:text-white font-semibold">High-DPI Screen Scaling:</strong> Designing scalable XAML or FXML constraints that render cleanly on high-resolution displays.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-600 text-white">⭐</span>
                                GUI Technologies &amp; Tools We Cover
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach(['Electron','Tauri','WPF','WinForms','C#','JavaFX','Swing','PyQt','Tkinter','Qt C++','MSI builder','DMG bundler','SQLite','IndexedDB','MVVM pattern','XAML styling','FXML layout','Thread pools','IPC context bridge'] as $tech)
                                <span class="rounded-full bg-slate-100 px-2.5 py-1 text-[11px] font-bold text-slate-700 dark:bg-slate-800 dark:text-slate-300">{{ $tech }}</span>
                                @endforeach
                            </div>
                        </div>

                        <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm dark:border-slate-800 dark:bg-slate-950">
                            <h3 class="mb-4 flex items-center gap-3 text-xl font-black text-slate-900 dark:text-white">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-orange-600 text-white">📊</span>
                                Our Desktop App Track Record
                            </h3>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-blue-600 dark:text-blue-400">1,500+</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Apps Completed</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-emerald-600 dark:text-emerald-400">98%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">On-Time Delivery</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-amber-600 dark:text-amber-400">4.9★</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Average Rating</p>
                                </div>
                                <div class="rounded-xl border border-slate-100 bg-slate-50 p-4 text-center dark:border-slate-800 dark:bg-slate-900">
                                    <p class="text-xl font-black text-purple-600 dark:text-purple-400">100%</p>
                                    <p class="mt-1 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Build compilations</p>
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
                        Desktop Application Assignment Help FAQs
                    </h2>
                </div>

                <div class="space-y-3">
                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Can your developers bundle installers like setup.exe or .dmg?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We specialize in packaging applications. We bundle Electron apps with Electron Builder, generate WPF setup.msi installers, and compile platform specific build packages.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Do you build WPF applications using proper MVVM architecture?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Yes. We implement clean architectural designs. Our .NET developers structure models, views, and viewmodels cleanly, using custom data templates and binding controls without direct code-behind dependencies.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the application freeze when running heavy database tasks?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">No. We configure background threading (using async/await tasks, threads, or worker pools) so that heavy I/O calculations, file processing, or API calls run in the background, keeping the user interface completely responsive.</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">Will the desktop code compile out of the box?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Absolutely. Every application directory is tested locally. We verify all compiler settings, resolve dependencies, and include detailed setup README files explaining how to launch the project inside your IDE (e.g. Visual Studio, IntelliJ, VS Code).</p>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white dark:border-slate-800 dark:bg-slate-900 overflow-hidden">
                        <button onclick="this.closest('div').querySelector('.faq-body').classList.toggle('hidden');this.querySelector('.faq-chevron').classList.toggle('rotate-180')" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left">
                            <span class="text-sm font-bold text-slate-900 dark:text-white">How fast can you build my desktop application?</span>
                            <svg class="faq-chevron h-5 w-5 shrink-0 text-slate-400 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <div class="faq-body hidden px-6 pb-5">
                            <p class="text-sm leading-relaxed text-slate-600 dark:text-slate-400">Simple GUI layout configurations, threading fixes, or event controls can be solved in 6 to 12 hours. Large full-stack desktop software involving databases and installers usually takes 24 to 72 hours.</p>
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
                    <span class="text-emerald-400 text-[10px] font-black uppercase tracking-[0.2em]">Desktop specialists Online Now</span>
                </div>

                <h2 class="text-4xl sm:text-5xl font-black text-white leading-tight mb-5">
                    Ready to Get Your<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400">Desktop Application Coded?</span>
                </h2>

                <p class="text-base text-slate-400 max-w-2xl mx-auto mb-10">
                    Get clean, compilable, desktop code files complete with environment setups, dependencies, and native installers. Submit details for a free quote within 5 minutes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('order') }}" class="group relative inline-flex items-center gap-3 px-8 py-4 bg-blue-600 text-white font-black rounded-2xl hover:bg-white hover:text-blue-600 transition-all duration-500 shadow-lg hover:-translate-y-0.5 active:scale-95 overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        <span class="relative z-10 text-sm">Get Desktop Assignment Help</span>
                        <svg class="w-4 h-4 relative z-10 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7l5 5m0 0l-5 5m5-5H6" /></svg>
                    </a>
                    <span class="text-[10px] text-slate-500 font-bold uppercase tracking-[0.3em]">Free Quote &middot; No Obligation</span>
                </div>

                <div class="mt-12 flex flex-wrap items-center justify-center gap-x-10 gap-y-5">
                    <div class="text-center">
                        <p class="text-2xl font-black text-white">1,500+</p>
                        <p class="mt-0.5 text-[11px] font-semibold uppercase tracking-wider text-slate-500">Apps Completed</p>
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
          "@@type": "FAQPage",
          "mainEntity": [
            {
              "@@type": "Question",
              "name": "Can your developers bundle installers like setup.exe or .dmg?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We specialize in packaging applications. We bundle Electron apps with Electron Builder, generate WPF setup.msi installers, and compile platform specific build packages."
              }
            },
            {
              "@@type": "Question",
              "name": "Do you build WPF applications using proper MVVM architecture?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We implement clean architectural designs. Our .NET developers structure models, views, and viewmodels cleanly, using custom data templates and binding controls without direct code-behind dependencies."
              }
            },
            {
              "@@type": "Question",
              "name": "Will the application freeze when running heavy database tasks?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "No. We configure background threading (using async/await tasks, threads, or worker pools) so that heavy I/O calculations, file processing, or API calls run in the background, keeping the user interface completely responsive."
              }
            },
            {
              "@@type": "Question",
              "name": "Will the desktop code compile out of the box?",
              "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Absolutely. Every application directory is tested locally. We verify all compiler settings, resolve dependencies, and include detailed setup README files explaining how to launch the project inside your IDE."
              }
            }
          ]
        }
        </script>

        <script type="application/ld+json">
        {
          "@@context": "https://schema.org",
          "@@type": "Service",
          "name": "Desktop Application Assignment Help",
          "description": "Professional desktop application assignment help and native GUI project assistance. Expert developers available 24/7 for Electron, WPF, WinForms, JavaFX, Qt C++, and Tkinter setups.",
          "provider": {
            "@@type": "Organization",
            "name": "AssignmentHelpUSA",
            "url": "https://assignmenthelpusa.com"
          },
          "areaServed": "US",
          "serviceType": "Desktop Application Assignment Help",
          "offers": {
            "@@type": "AggregateOffer",
            "priceCurrency": "USD",
            "lowPrice": "15",
            "highPrice": "500"
          },
          "aggregateRating": {
            "@@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "380",
            "bestRating": "5"
          }
        }
        </script>
    </div>
@endsection
