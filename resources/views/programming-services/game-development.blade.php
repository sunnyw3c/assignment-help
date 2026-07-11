@extends('layouts.app')

@section('title', 'Game Development - Expert Help Available')
@section('description', 'Get professional help with game development projects. Expert game developers available 24/7 for
    Unity, Unreal Engine, 2D/3D games, gameplay mechanics, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <x-creative-hero :service="$service" />

        <!-- Comprehensive Content Section 1 -->
        <section class="py-32 bg-gradient-to-br from-white via-purple-50/30 to-blue-50/30 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-purple-100 to-blue-100 rounded-full opacity-20 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-indigo-100 to-purple-100 rounded-full opacity-20 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                🎮 Level Up Your Game Dev Skills
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Professional Game Development<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">That Players Actually Love</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Get expert help creating games from experienced developers who've shipped real titles and understand what makes gameplay truly addictive.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Ever spent 12 hours trying to fix a jump mechanic that still feels terrible? Or watched your game crash every time the player collects a coin?</strong> Game development is brutal. You're not just writing code – you're creating physics systems, managing animations, designing AI behaviors, handling collision detection, and somehow making all of it feel fun and responsive. When your player controller won't move, your enemy AI runs in circles, or Unity keeps throwing null reference exceptions you can't decipher, it's easy to feel like giving up. That's exactly when you need an expert game developer who's been there, debugged that, and knows how to fix it fast.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Imagine this instead:</strong> You submit a Unity project where the character movement feels buttery smooth, the enemies actually chase the player intelligently, particles and sound effects trigger at exactly the right moments, and the scoring system works flawlessly. Every script is clean, commented, and follows Unity best practices. Your professor loads it up, plays for a minute, and you see them smile because the game is genuinely fun. That's not a fantasy – that's what happens when you work with developers who've built 600+ games and understand the difference between code that runs and gameplay that engages.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>We don't just write game scripts – we create complete gaming experiences.</strong> Need a 2D platformer in Unity? You'll get precise jump physics with coyote time and jump buffering that makes it feel professional. Building a 3D shooter? Expect smooth camera controls, realistic weapon mechanics, and enemy AI that actually takes cover and flanks. Working on mobile? We optimize for 60 FPS on older devices while keeping your game looking gorgeous. Every project includes player controllers, game managers, UI systems, audio integration, particle effects, and that polish that separates student projects from actual games.
                            </p>

                            <p class="text-gray-700 leading-relaxed">
                                <strong>Here's the reality of game dev deadlines:</strong> Your game is due in 3 days, half your scripts have errors, and the physics are completely broken. You message us. Within hours, an expert Unity or Unreal developer analyzes your project, fixes the critical bugs, implements the missing features, and delivers a playable build. We don't just make it work – we make it feel good to play. And because every solution comes with detailed code comments and explanations, you'll actually understand how raycasting works, why we used coroutines instead of Update(), and what makes good game feel different from okay game feel.
                            </p>
                        </div>

                        <!-- Feature Highlights -->
                        <div class="grid md:grid-cols-3 gap-6 mt-12">
                            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">🎯</div>
                                <h3 class="font-bold text-gray-900 mb-2">Gameplay Mechanics</h3>
                                <p class="text-gray-600 text-sm">Player controls, physics, AI, and collision that actually work</p>
                            </div>
                            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">🎨</div>
                                <h3 class="font-bold text-gray-900 mb-2">Visual Polish</h3>
                                <p class="text-gray-600 text-sm">Particles, animations, UI, and effects that look professional</p>
                            </div>
                            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 border border-indigo-200 hover:shadow-lg transition-shadow duration-300">
                                <div class="text-3xl mb-3">⚡</div>
                                <h3 class="font-bold text-gray-900 mb-2">Performance</h3>
                                <p class="text-gray-600 text-sm">60 FPS optimized code for smooth gameplay</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Comprehensive Content Section 2 -->
        <section class="py-32 bg-gradient-to-br from-gray-50 via-blue-50/20 to-purple-50/20 relative overflow-hidden">
            <!-- Background Decorative Elements -->
            <div class="absolute top-20 left-0 w-72 h-72 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-10 blur-3xl"></div>
            <div class="absolute bottom-20 right-0 w-72 h-72 bg-gradient-to-tl from-purple-200 to-indigo-200 rounded-full opacity-10 blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-16">
                        <div class="inline-block mb-4">
                            <span class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-6 py-2 rounded-full text-sm font-semibold shadow-lg">
                                ⭐ Trusted by 600+ Game Dev Students
                            </span>
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-6">
                            Why Game Developers<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">Choose Our Services</span>
                        </h2>
                        <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">Real game development expertise, production-ready code, and teaching that actually makes you a better developer.</p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border border-gray-100">
                        <div class="prose prose-lg max-w-none">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Picture your professor playing your game and being genuinely impressed.</strong> That's what happens when you work with developers who've actually shipped games, not just tutors who read Unity documentation. Our team has built everything from mobile puzzle games to 3D multiplayer shooters. We know the difference between Vector3.Lerp and Vector3.MoveTowards. We understand why you should use FixedUpdate for physics. We've debugged thousands of "why does my player fall through the floor" scenarios. This isn't theoretical knowledge – it's battle-tested expertise from years of making games that people actually play.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>What you actually receive is mind-blowing.</strong> Open your delivery and find a complete, playable Unity or Unreal project. Not just scripts – a full game with scene setup, prefabs configured, animations hooked up, audio integrated, and everything documented. Want to see exactly how the enemy AI works? We include flowcharts. Curious about the physics calculations? Detailed comments explain every formula. Need to modify the gameplay? Our code is modular and clean so you can extend it easily. Plus particle systems, screen shake, sound effects, UI menus, pause functionality, and all those little details that make games feel polished instead of like student projects.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Speed without compromising quality:</strong> It's midnight. Your 3D platformer is due tomorrow and the camera clips through walls, the double jump doesn't work, and you just realized you forgot to implement collectibles. Panic mode. You submit a request. Within 30 minutes, a game developer responds with a fix plan. Within hours, you're testing a working build where the camera smoothly follows the player, double jump feels responsive, and coins sparkle with particle effects when collected. Every build is tested multiple times – we actually play your game to make sure it's fun, not just functional. Because a game that technically works but feels terrible is still a failed project.
                            </p>

                            <p class="text-gray-700 leading-relaxed mb-6">
                                <strong>Performance and optimization aren't afterthoughts.</strong> We don't write code that makes your game run at 15 FPS. Every solution is profiler-tested and optimized. Object pooling for bullets and enemies. Efficient raycasting. Proper use of layers and tags. Optimized rendering for mobile. Your game will hit 60 FPS on target platforms because we know the tricks: static batching, occlusion culling, LOD groups, and texture atlases. When other students submit laggy, unplayable games, yours runs smoothly because we build like professional game developers, not like coders who happen to use Unity.
                            </p>

                            <p class="text-gray-700 leading-relaxed">
                                <strong>You don't just get a working game – you become a better game developer.</strong> Every script includes comments that explain not just what the code does, but why we made specific design decisions. Why did we use a state machine for the enemy AI? When should you use ScriptableObjects? What makes a jump feel responsive versus floaty? We answer these questions in our documentation. Many clients start with one project and come back for more – not because they can't code, but because they value learning from experts who explain complex game systems in ways that finally make sense. With 600+ games developed and a 4.9/5 rating, we've proven that expert help accelerates your learning journey instead of replacing it.
                            </p>
                        </div>

                        <!-- Stats Grid -->
                        <div class="grid md:grid-cols-4 gap-6 mt-12">
                            <div class="text-center bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border border-green-200">
                                <div class="text-4xl font-bold text-green-600 mb-2">4.9/5</div>
                                <div class="text-gray-600 text-sm font-medium">Player Rating</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border border-blue-200">
                                <div class="text-4xl font-bold text-blue-600 mb-2">30min</div>
                                <div class="text-gray-600 text-sm font-medium">Avg Response</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-purple-50 to-violet-50 rounded-xl p-6 border border-purple-200">
                                <div class="text-4xl font-bold text-purple-600 mb-2">600+</div>
                                <div class="text-gray-600 text-sm font-medium">Games Built</div>
                            </div>
                            <div class="text-center bg-gradient-to-br from-orange-50 to-amber-50 rounded-xl p-6 border border-orange-200">
                                <div class="text-4xl font-bold text-orange-600 mb-2">60 FPS</div>
                                <div class="text-gray-600 text-sm font-medium">Optimized</div>
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Game Development Technologies We Master
                    </h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert game developers work with Unity, Unreal
                        Engine,
                        and modern game development tools to create engaging gaming experiences.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Game Engines -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Game Engines</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🎮</div>
                                    <h4 class="font-semibold text-gray-900">Unity</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔷</div>
                                    <h4 class="font-semibold text-gray-900">Unreal Engine</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🎯</div>
                                    <h4 class="font-semibold text-gray-900">Godot</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2D Game Tools -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">2D Game Tools</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🖼️</div>
                                    <h4 class="font-semibold text-gray-900">Sprite Kit</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🎨</div>
                                    <h4 class="font-semibold text-gray-900">Cocos2d</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">📱</div>
                                    <h4 class="font-semibold text-gray-900">Phaser</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3D Graphics -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">3D Graphics</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔺</div>
                                    <h4 class="font-semibold text-gray-900">Three.js</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🎲</div>
                                    <h4 class="font-semibold text-gray-900">Blender</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🌐</div>
                                    <h4 class="font-semibold text-gray-900">WebGL</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Languages -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Languages</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">💜</div>
                                    <h4 class="font-semibold text-gray-900">C#</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🔧</div>
                                    <h4 class="font-semibold text-gray-900">C++</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">📜</div>
                                    <h4 class="font-semibold text-gray-900">GDScript</h4>
                                </div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on game
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Simple 2D Game</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $100</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic 2D game mechanics
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple gameplay loop
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    2-3 day delivery
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">3D Game Project</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $250</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    3D game mechanics
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Physics integration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    3-5 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    AI & animations
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full documentation
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Game</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $500</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complex game systems
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Multiplayer features
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    5-7 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Advanced AI & effects
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complete polish
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
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Game Development Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering engaging and
                        polished game experiences.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Game Design & Planning</h3>
                        <p class="text-gray-600">We analyze your game concept, mechanics, and technical requirements to
                            plan the development approach.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Core Mechanics</h3>
                        <p class="text-gray-600">Implement gameplay mechanics, physics systems, and player controls to
                            establish the game foundation.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Features & Polish</h3>
                        <p class="text-gray-600">Add game features, animations, visual effects, and audio to create an
                            engaging experience.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Testing & Delivery</h3>
                        <p class="text-gray-600">Thoroughly test gameplay, fix bugs, optimize performance, and deliver
                            your complete game project.</p>
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
                        game development projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing Unity 2D platformer! The developer implemented smooth player
                            controls, enemy AI, and collectibles system. The code is well-organized and easy to understand.
                            Exceeded my expectations!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                A</div>
                            <div>
                                <div class="font-semibold text-gray-900">Alex R.</div>
                                <div class="text-sm text-gray-500">Game Design Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Incredible 3D FPS project in Unreal Engine! Advanced AI behavior,
                            particle effects, and smooth physics. The developer explained everything clearly. Highly
                            professional!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                M</div>
                            <div>
                                <div class="font-semibold text-gray-900">Marcus J.</div>
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
                        <p class="text-gray-600 mb-6">"Perfect puzzle game mechanics! The developer created clean level
                            design, intuitive controls, and engaging gameplay. Documentation and assets were excellent. Will
                            use again!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                E</div>
                            <div>
                                <div class="font-semibold text-gray-900">Emma L.</div>
                                <div class="text-sm text-gray-500">Interactive Media Student</div>
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
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our game
                        development service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Which game engines do you support?</h3>
                        <p class="text-gray-600">We work with all major game engines including Unity (2D/3D), Unreal
                            Engine,
                            Godot, Phaser, Three.js, and more. We can help you choose the best engine for your game concept
                            and requirements.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with both 2D and 3D games?
                        </h3>
                        <p class="text-gray-600">Absolutely! We have expertise in both 2D game development (platformers,
                            puzzle games, side-scrollers) and 3D game development (FPS, RPG, simulation games). We handle
                            everything from simple mechanics to complex systems.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide game assets and documentation?
                        </h3>
                        <p class="text-gray-600">Yes! We provide complete project files, well-commented code, gameplay
                            documentation, setup instructions, and guidance on extending the game. Basic assets are
                            included,
                            and we can incorporate your custom assets.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you implement multiplayer features?</h3>
                        <p class="text-gray-600">Yes, we can implement multiplayer functionality including local
                            multiplayer,
                            online multiplayer, matchmaking systems, and networked gameplay using appropriate frameworks and
                            services.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What platforms can you develop for?</h3>
                        <p class="text-gray-600">We develop for multiple platforms including PC (Windows, Mac, Linux),
                            mobile
                            (iOS, Android), web browsers (WebGL), and consoles. The platform choice depends on your chosen
                            game engine and project requirements.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your Game?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their game development projects with our expert help.</p>
                <a href="{{ route('order') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
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
