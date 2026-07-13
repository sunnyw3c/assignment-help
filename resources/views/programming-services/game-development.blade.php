@extends('layouts.app')

@section('title', 'Game Development - Expert Help Available')
@section('description', 'Get professional help with game development projects. Expert game developers available 24/7 for
    Unity, Unreal Engine, 2D/3D games, gameplay mechanics, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section 1 -->
        <section class="py-14 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-purple-600">🎮 Level Up Your Game Dev Skills</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Professional Game Development <span class="text-purple-600">That Players Actually Love</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Get expert help creating games from experienced developers who've shipped real titles and understand what makes gameplay truly addictive.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="max-w-prose mx-auto space-y-4 text-sm leading-relaxed text-slate-700">
                            <p>
                                <strong class="font-semibold text-slate-900">Ever spent 12 hours trying to fix a jump mechanic that still feels terrible?</strong> Game development is brutal. You're not just writing code — you're creating physics systems, managing animations, designing AI behaviors, and somehow making all of it feel fun and responsive. When your player controller won't move or Unity keeps throwing null reference exceptions you can't decipher, that's exactly when you need an expert game developer who's been there, debugged that, and knows how to fix it fast.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">Imagine this instead:</strong> You submit a Unity project where the character movement feels buttery smooth, the enemies actually chase the player intelligently, and the scoring system works flawlessly. Every script is clean, commented, and follows Unity best practices — that's what happens when you work with developers who've built 600+ games and understand the difference between code that runs and gameplay that engages.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">We don't just write game scripts — we create complete gaming experiences.</strong> Need a 2D platformer in Unity? You'll get precise jump physics with coyote time and jump buffering that makes it feel professional. Building a 3D shooter? Expect smooth camera controls, realistic weapon mechanics, and enemy AI that actually takes cover and flanks. Every project includes player controllers, game managers, UI systems, audio integration, particle effects, and the polish that separates student projects from actual games.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">The reality of game dev deadlines:</strong> Your game is due in 3 days, half your scripts have errors, and the physics are completely broken. You message us. Within hours, an expert Unity or Unreal developer fixes the critical bugs, implements the missing features, and delivers a playable build — with detailed code comments so you understand how raycasting works and why we used coroutines instead of Update().
                            </p>
                        </div>

                        <!-- Feature Highlights -->
                        <div class="grid gap-5 sm:grid-cols-3 mt-8">
                            <div class="rounded-2xl border border-purple-200 bg-purple-50 p-6">
                                <div class="mb-3 text-2xl">🎯</div>
                                <h3 class="mb-2 text-base font-bold text-slate-900">Gameplay Mechanics</h3>
                                <p class="text-sm text-slate-600">Player controls, physics, AI, and collision that actually work</p>
                            </div>
                            <div class="rounded-2xl border border-blue-200 bg-blue-50 p-6">
                                <div class="mb-3 text-2xl">🎨</div>
                                <h3 class="mb-2 text-base font-bold text-slate-900">Visual Polish</h3>
                                <p class="text-sm text-slate-600">Particles, animations, UI, and effects that look professional</p>
                            </div>
                            <div class="rounded-2xl border border-indigo-200 bg-indigo-50 p-6">
                                <div class="mb-3 text-2xl">⚡</div>
                                <h3 class="mb-2 text-base font-bold text-slate-900">Performance</h3>
                                <p class="text-sm text-slate-600">60 FPS optimized code for smooth gameplay</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Content Section 2 -->
        <section class="py-14 sm:py-16 bg-slate-50">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                        <p class="mb-3 text-xs font-semibold uppercase tracking-wider text-blue-600">⭐ Trusted by 600+ Game Dev Students</p>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
                            Why Game Developers <span class="text-blue-600">Choose Our Services</span>
                        </h2>
                        <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Real game development expertise, production-ready code, and teaching that actually makes you a better developer.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="max-w-prose mx-auto space-y-4 text-sm leading-relaxed text-slate-700">
                            <p>
                                <strong class="font-semibold text-slate-900">Picture your professor playing your game and being genuinely impressed.</strong> That's what happens when you work with developers who've actually shipped games, not just tutors who read Unity documentation. Our team has built everything from mobile puzzle games to 3D multiplayer shooters, and debugged thousands of "why does my player fall through the floor" scenarios.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">What you actually receive is mind-blowing.</strong> Open your delivery and find a complete, playable Unity or Unreal project — not just scripts, but a full game with scene setup, prefabs configured, animations hooked up, audio integrated, and everything documented. Our code is modular and clean so you can extend it easily.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">Speed without compromising quality.</strong> Your 3D platformer is due tomorrow and the camera clips through walls. You submit a request. Within 30 minutes, a game developer responds with a fix plan. Within hours, you're testing a working build. Every build is tested multiple times — we actually play your game to make sure it's fun, not just functional.
                            </p>

                            <p>
                                <strong class="font-semibold text-slate-900">Performance and optimization aren't afterthoughts.</strong> Every solution is profiler-tested and optimized: object pooling, efficient raycasting, static batching, occlusion culling, and texture atlases. Your game will hit 60 FPS on target platforms because we build like professional game developers. With 600+ games developed and a 4.9/5 rating, we've proven that expert help accelerates your learning journey instead of replacing it.
                            </p>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 mt-8">
                            <div class="rounded-xl border border-green-200 bg-green-50 p-4 text-center">
                                <div class="text-2xl font-bold text-green-600">4.9/5</div>
                                <div class="text-xs font-medium text-slate-600">Player Rating</div>
                            </div>
                            <div class="rounded-xl border border-blue-200 bg-blue-50 p-4 text-center">
                                <div class="text-2xl font-bold text-blue-600">30min</div>
                                <div class="text-xs font-medium text-slate-600">Avg Response</div>
                            </div>
                            <div class="rounded-xl border border-purple-200 bg-purple-50 p-4 text-center">
                                <div class="text-2xl font-bold text-purple-600">600+</div>
                                <div class="text-xs font-medium text-slate-600">Games Built</div>
                            </div>
                            <div class="rounded-xl border border-orange-200 bg-orange-50 p-4 text-center">
                                <div class="text-2xl font-bold text-orange-600">60 FPS</div>
                                <div class="text-xs font-medium text-slate-600">Optimized</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-14 sm:py-16 bg-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto mb-10 max-w-2xl text-center sm:mb-12">
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Game Development Technologies We Master</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Our expert game developers work with Unity, Unreal
                        Engine, and modern game development tools to create engaging gaming experiences.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- Game Engines -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Game Engines</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🎮</div>
                                <h4 class="text-sm font-semibold text-slate-900">Unity</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔷</div>
                                <h4 class="text-sm font-semibold text-slate-900">Unreal Engine</h4>
                            </div>
                            <div class="rounded-xl bg-blue-50 p-3 text-center">
                                <div class="mb-1 text-xl">🎯</div>
                                <h4 class="text-sm font-semibold text-slate-900">Godot</h4>
                            </div>
                        </div>
                    </div>

                    <!-- 2D Game Tools -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">2D Game Tools</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">🖼️</div>
                                <h4 class="text-sm font-semibold text-slate-900">Sprite Kit</h4>
                            </div>
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">🎨</div>
                                <h4 class="text-sm font-semibold text-slate-900">Cocos2d</h4>
                            </div>
                            <div class="rounded-xl bg-green-50 p-3 text-center">
                                <div class="mb-1 text-xl">📱</div>
                                <h4 class="text-sm font-semibold text-slate-900">Phaser</h4>
                            </div>
                        </div>
                    </div>

                    <!-- 3D Graphics -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">3D Graphics</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔺</div>
                                <h4 class="text-sm font-semibold text-slate-900">Three.js</h4>
                            </div>
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">🎲</div>
                                <h4 class="text-sm font-semibold text-slate-900">Blender</h4>
                            </div>
                            <div class="rounded-xl bg-orange-50 p-3 text-center">
                                <div class="mb-1 text-xl">🌐</div>
                                <h4 class="text-sm font-semibold text-slate-900">WebGL</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Languages -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <h3 class="mb-4 text-center text-base font-bold text-slate-900">Languages</h3>
                        <div class="space-y-2">
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">💜</div>
                                <h4 class="text-sm font-semibold text-slate-900">C#</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">🔧</div>
                                <h4 class="text-sm font-semibold text-slate-900">C++</h4>
                            </div>
                            <div class="rounded-xl bg-purple-50 p-3 text-center">
                                <div class="mb-1 text-xl">📜</div>
                                <h4 class="text-sm font-semibold text-slate-900">GDScript</h4>
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
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Fair, transparent pricing based on game
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="mx-auto grid max-w-5xl grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition-shadow hover:shadow-md">
                        <div class="text-center">
                            <h3 class="text-lg font-bold text-slate-900">Simple 2D Game</h3>
                            <div class="my-3 text-2xl font-bold text-purple-600">From $100</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Basic 2D game mechanics
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Simple gameplay loop
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    2-3 day delivery
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
                            <h3 class="text-lg font-bold text-slate-900">3D Game Project</h3>
                            <div class="my-3 text-2xl font-bold text-purple-600">From $250</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    3D game mechanics
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Physics integration
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    3-5 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    AI &amp; animations
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Full documentation
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
                            <h3 class="text-lg font-bold text-slate-900">Advanced Game</h3>
                            <div class="my-3 text-2xl font-bold text-purple-600">From $500</div>
                            <ul class="mb-6 space-y-2 text-left text-sm text-slate-700">
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Complex game systems
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Multiplayer features
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    5-7 day delivery
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Advanced AI &amp; effects
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="text-green-500">✓</span>
                                    Complete polish
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
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">Our Game Development Process</h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Proven methodology for delivering engaging and
                        polished game experiences.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Game Design &amp; Planning</h3>
                        <p class="text-sm text-slate-600">We analyze your game concept, mechanics, and technical requirements to
                            plan the development approach.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Core Mechanics</h3>
                        <p class="text-sm text-slate-600">Implement gameplay mechanics, physics systems, and player controls to
                            establish the game foundation.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Features &amp; Polish</h3>
                        <p class="text-sm text-slate-600">Add game features, animations, visual effects, and audio to create an
                            engaging experience.</p>
                    </div>

                    <div class="text-center">
                        <div class="mx-auto mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-purple-100">
                            <span class="text-base font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="mb-2 text-base font-bold text-slate-900">Testing &amp; Delivery</h3>
                        <p class="text-sm text-slate-600">Thoroughly test gameplay, fix bugs, optimize performance, and deliver
                            your complete game project.</p>
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
                        game development projects.</p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Amazing Unity 2D platformer! The developer implemented smooth player
                            controls, enemy AI, and collectibles system. The code is well-organized and easy to understand.
                            Exceeded my expectations!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-purple-500 text-sm font-bold text-white">A</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Alex R.</div>
                                <div class="text-xs text-slate-500">Game Design Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Incredible 3D FPS project in Unreal Engine! Advanced AI behavior,
                            particle effects, and smooth physics. The developer explained everything clearly. Highly
                            professional!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-blue-500 text-sm font-bold text-white">M</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Marcus J.</div>
                                <div class="text-xs text-slate-500">CS Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
                        <div class="mb-3 flex text-yellow-400">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>
                        <p class="mb-5 text-sm text-slate-600">"Perfect puzzle game mechanics! The developer created clean level
                            design, intuitive controls, and engaging gameplay. Documentation and assets were excellent. Will
                            use again!"</p>
                        <div class="flex items-center gap-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-bold text-white">E</div>
                            <div>
                                <div class="text-sm font-semibold text-slate-900">Emma L.</div>
                                <div class="text-xs text-slate-500">Interactive Media Student</div>
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
                    <p class="mt-4 text-base leading-relaxed text-slate-600 sm:text-lg">Everything you need to know about our game
                        development service.</p>
                </div>

                <div class="mx-auto max-w-3xl space-y-4">
                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Which game engines do you support?</h3>
                        <p class="text-sm text-slate-600">We work with all major game engines including Unity (2D/3D), Unreal
                            Engine, Godot, Phaser, Three.js, and more. We can help you choose the best engine for your game concept
                            and requirements.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Can you help with both 2D and 3D games?</h3>
                        <p class="text-sm text-slate-600">Absolutely! We have expertise in both 2D game development (platformers,
                            puzzle games, side-scrollers) and 3D game development (FPS, RPG, simulation games). We handle
                            everything from simple mechanics to complex systems.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Do you provide game assets and documentation?</h3>
                        <p class="text-sm text-slate-600">Yes! We provide complete project files, well-commented code, gameplay
                            documentation, setup instructions, and guidance on extending the game. Basic assets are
                            included, and we can incorporate your custom assets.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">Can you implement multiplayer features?</h3>
                        <p class="text-sm text-slate-600">Yes, we can implement multiplayer functionality including local
                            multiplayer, online multiplayer, matchmaking systems, and networked gameplay using appropriate frameworks and
                            services.</p>
                    </div>

                    <div class="rounded-2xl border border-slate-200 bg-slate-50 p-6">
                        <h3 class="mb-2 text-base font-bold text-slate-900">What platforms can you develop for?</h3>
                        <p class="text-sm text-slate-600">We develop for multiple platforms including PC (Windows, Mac, Linux),
                            mobile (iOS, Android), web browsers (WebGL), and consoles. The platform choice depends on your chosen
                            game engine and project requirements.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-14 sm:py-16 bg-slate-900">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Ready to Build Your Game?</h2>
                <p class="mx-auto mt-2 max-w-2xl text-sm text-slate-400">Join hundreds of students who have successfully
                    completed their game development projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="mt-6 inline-flex items-center justify-center gap-2 rounded-xl bg-white px-6 py-3 text-sm font-semibold text-purple-600 shadow-sm transition-colors hover:bg-slate-100">
                    Start Your Game Project Today
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

        @@keyframes glow {

            0%,
            100% {
                box-shadow: 0 0 5px rgba(139, 92, 246, 0.3), 0 0 10px rgba(139, 92, 246, 0.2);
            }

            50% {
                box-shadow: 0 0 20px rgba(139, 92, 246, 0.5), 0 0 30px rgba(139, 92, 246, 0.3), 0 0 40px rgba(139, 92, 246, 0.2);
            }
        }

        @@keyframes slide-down {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        @@keyframes pulse-glow {

            0%,
            100% {
                opacity: 0.6;
                transform: scale(1);
            }

            50% {
                opacity: 1;
                transform: scale(1.05);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-float-delayed {
            animation: float-delayed 8s ease-in-out infinite;
        }

        .animate-glow {
            animation: glow 3s ease-in-out infinite;
        }

        .code-snippet {
            transition: all 0.3s ease;
        }

        .code-snippet:hover {
            transform: scale(1.05) translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }

        /* Matrix rain effect */
        @@keyframes matrix-fall {
            0% {
                transform: translateY(-100%);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        .matrix-char {
            animation: matrix-fall linear infinite;
            position: absolute;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            color: rgba(139, 92, 246, 0.3);
            font-weight: bold;
        }

        /* Gradient animation for hero background */
        @@keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .hero-bg {
            background: linear-gradient(-45deg, #f9fafb, #ede9fe, #ddd6fe, #f3f4f6);
            background-size: 400% 400%;
            animation: gradient-shift 15s ease infinite;
        }

        /* Code line animations */
        @@keyframes type-line {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .typing-effect {
            overflow: hidden;
            white-space: nowrap;
            animation: type-line 2s steps(30) infinite;
        }

        /* Particle effects */
        @@keyframes particle-float {
            0% {
                transform: translate(0, 0) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translate(100px, -100vh) rotate(360deg);
                opacity: 0;
            }
        }

        .particle {
            position: absolute;
            animation: particle-float linear infinite;
        }
    </style>
@endsection
