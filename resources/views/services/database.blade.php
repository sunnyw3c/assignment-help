@extends('layouts.app')

@section('title', 'Database Programming - Expert Help Available')
@section('description', 'Get professional help with database programming projects. Expert developers available 24/7 for SQL, NoSQL, database design, optimization, and more.')

@section('content')
    <div class="min-h-screen">
        <!-- Hero Section with Code Background -->
        <section class="relative hero-bg py-24 overflow-hidden min-h-screen flex items-center">
            <!-- Enhanced Background Pattern -->
            <div class="absolute inset-0 opacity-5 md:opacity-10">
                <div class="absolute inset-0"
                    style="background-image: url('data:image/svg+xml,<svg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" xmlns=\"http://www.w3.org/2000/svg\"><g fill=\"none\" fill-rule=\"evenodd\"><g fill=\"%23000000\" fill-opacity=\"0.15\"><path d=\"M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\"/></g></g></svg>');">
                </div>
            </div>

            <!-- Animated Background Dots -->
            <div class="absolute inset-0 pointer-events-none">
                <div
                    class="absolute top-20 left-20 w-2 h-2 bg-purple-400 rounded-full animate-ping opacity-20 md:opacity-30">
                </div>
                <div class="absolute top-40 right-32 w-3 h-3 bg-blue-400 rounded-full animate-ping opacity-25 md:opacity-40"
                    style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-32 left-16 w-1.5 h-1.5 bg-indigo-400 rounded-full animate-ping opacity-20 md:opacity-35"
                    style="animation-delay: 1s;"></div>
                <div class="absolute top-60 left-1/3 w-2.5 h-2.5 bg-green-400 rounded-full animate-ping opacity-15 md:opacity-25"
                    style="animation-delay: 1.5s;"></div>
                <div class="absolute bottom-20 right-20 w-2 h-2 bg-yellow-400 rounded-full animate-ping opacity-20 md:opacity-30"
                    style="animation-delay: 2s;"></div>
            </div>

            <!-- Enhanced Floating Code Snippets -->
            <div class="absolute inset-0 pointer-events-none overflow-hidden">
                <!-- Floating SQL Query -->
                <div
                    class="absolute top-16 left-8 bg-gradient-to-r from-gray-900 to-gray-800 text-cyan-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet animate-glow">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-cyan-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">query.sql</span>
                    </div>
                    <div class="text-purple-400">SELECT</div>
                    <div class="ml-2">u.name, COUNT(o.id) <span class="text-blue-400">AS</span> orders</div>
                    <div class="text-purple-400">FROM</div>
                    <div class="ml-2">users u <span class="text-blue-400">JOIN</span> orders o</div>
                    <div class="text-purple-400">GROUP BY</div>
                    <div class="ml-2">u.id</div>
                </div>

                <!-- Floating MongoDB Query -->
                <div
                    class="absolute top-28 right-12 bg-gradient-to-r from-gray-900 to-gray-800 text-green-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-green-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">mongo.js</span>
                    </div>
                    <div>db.users.<span class="text-yellow-400">aggregate</span>([</div>
                    <div class="ml-2">{ <span class="text-orange-400">$match</span>: { active: <span class="text-blue-400">true</span> } },</div>
                    <div class="ml-2">{ <span class="text-orange-400">$group</span>: { _id: "$category" } }</div>
                    <div>])</div>
                </div>

                <!-- Floating Database Schema -->
                <div
                    class="absolute bottom-24 left-1/4 bg-gradient-to-r from-gray-900 to-gray-800 text-blue-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-bounce opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">schema.sql</span>
                    </div>
                    <div class="text-purple-400">CREATE TABLE</div>
                    <div class="ml-2">products (</div>
                    <div class="ml-4">id <span class="text-yellow-400">INT PRIMARY KEY</span>,</div>
                    <div class="ml-4">name <span class="text-yellow-400">VARCHAR(255)</span></div>
                    <div class="ml-2">);</div>
                </div>

                <!-- Floating Index Creation -->
                <div
                    class="absolute top-72 right-8 bg-gradient-to-r from-gray-900 to-gray-800 text-orange-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-pulse opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-orange-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">optimize.sql</span>
                    </div>
                    <div class="text-purple-400">CREATE INDEX</div>
                    <div class="ml-2">idx_user_email</div>
                    <div class="text-purple-400">ON</div>
                    <div class="ml-2">users(email);</div>
                </div>

                <!-- Floating PostgreSQL -->
                <div class="absolute bottom-16 right-1/3 bg-gradient-to-r from-gray-900 to-gray-800 text-purple-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 1s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-purple-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">postgres.sql</span>
                    </div>
                    <div class="text-blue-400">WITH</div>
                    <div class="ml-2">stats <span class="text-blue-400">AS</span> (</div>
                    <div class="ml-4">SELECT AVG(price) FROM products</div>
                    <div class="ml-2">)</div>
                    <div>SELECT * FROM stats;</div>
                </div>

                <!-- Floating Transaction -->
                <div class="absolute top-96 left-16 bg-gradient-to-r from-gray-900 to-gray-800 text-yellow-400 p-4 rounded-xl shadow-2xl font-mono text-xs animate-float-delayed opacity-60 md:opacity-90 max-w-xs border border-gray-700 backdrop-blur-sm code-snippet"
                    style="animation-delay: 2s;">
                    <div class="flex items-center mb-2">
                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-2"></div>
                        <span class="text-gray-400 text-xs">transaction.sql</span>
                    </div>
                    <div class="text-purple-400">BEGIN TRANSACTION;</div>
                    <div class="ml-2">UPDATE accounts SET balance -= 100;</div>
                    <div class="text-purple-400">COMMIT;</div>
                </div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Content -->
                    <div>
                        <div
                            class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-semibold mb-6">
                            🗄️ Database Programming Expert Help
                        </div>

                        <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                            Professional<br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-blue-600">Database
                                Programming</span><br>
                            Solutions
                        </h1>

                        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                            Get expert help with database programming projects. From SQL optimization and database design to
                            NoSQL solutions and data modeling, our experienced developers deliver high-quality database
                            solutions.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ route('assignments.create') }}"
                                class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-lg font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl text-center">
                                Get Help Now
                            </a>
                            <a href="#pricing"
                                class="border-2 border-purple-600 text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-purple-600 hover:text-white transition-all duration-200 text-center">
                                View Pricing
                            </a>
                        </div>

                        <div class="flex items-center space-x-6 text-sm text-gray-600">
                            <div class="flex items-center">
                                <span class="text-yellow-400 mr-1">⭐</span>
                                <span class="font-semibold">4.7/5</span> rating
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-500 mr-1">✓</span>
                                <span>800+ databases designed</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-500 mr-1">⚡</span>
                                <span>3-48 hour delivery</span>
                            </div>
                        </div>
                    </div>

                    <!-- Right Content - Code Editor Mockup -->
                    <div class="relative">
                        <div class="bg-gray-900 rounded-lg shadow-2xl overflow-hidden">
                            <!-- Editor Header -->
                            <div class="flex items-center mb-4">
                                <div class="flex space-x-2">
                                    <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                </div>
                                <div class="ml-4 text-gray-400 text-sm font-mono">database.sql</div>
                            </div>

                            <!-- Code Content -->
                            <div class="font-mono text-sm space-y-1 p-6">
                                <div class="text-purple-400">-- Database Programming Solution</div>
                                <div class="text-blue-400">SELECT <span class="text-cyan-400">*</span> FROM users</div>
                                <div class="text-blue-400">WHERE <span class="text-yellow-400">status</span> = <span
                                        class="text-green-400">'active'</span></div>
                                <div class="text-blue-400">ORDER BY <span class="text-yellow-400">created_at</span> DESC;
                                </div>
                                <div class="text-gray-500"></div>
                                <div class="text-purple-400">-- Optimized & Expert Available 4.7/5 ⭐</div>
                            </div>
                        </div>

                        <!-- Floating Elements -->
                        <div class="absolute -top-4 -right-4 bg-white rounded-lg shadow-lg p-4 animate-bounce">
                            <div class="text-2xl">🗄️</div>
                        </div>
                        <div class="absolute -bottom-4 -left-4 bg-white rounded-lg shadow-lg p-4 animate-pulse">
                            <div class="text-2xl">⚡</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- First Engaging Content Section -->
        <section class="py-20 bg-gradient-to-b from-white via-purple-50 to-gray-50">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="text-xl">🗄️</span>
                            MASTER DATABASE ARCHITECTURE
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            From Data Chaos to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-blue-600 to-indigo-600">Database
                                Excellence</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Unlock the power of efficient data management and
                            build scalable database systems</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Hero Stats Card -->
                        <div
                            class="bg-gradient-to-br from-white via-blue-50 to-purple-50 rounded-2xl shadow-2xl p-8 border-2 border-blue-100 relative overflow-hidden">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-purple-200 rounded-full opacity-20 -mr-16 -mt-16">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 w-40 h-40 bg-blue-200 rounded-full opacity-20 -ml-20 -mb-20">
                            </div>

                            <div class="relative z-10">
                                <div class="flex items-start gap-4 mb-6">
                                    <div class="bg-gradient-to-br from-purple-600 to-blue-600 rounded-2xl p-4 shadow-lg">
                                        <span class="text-4xl">🚀</span>
                                    </div>
                                    <div>
                                        <h3 class="text-3xl font-bold text-gray-900 mb-2">Why Database Skills Are Critical in
                                            2025</h3>
                                        <p class="text-purple-600 font-semibold text-lg">The backbone of every modern
                                            application and business decision</p>
                                    </div>
                                </div>

                                <div class="grid md:grid-cols-4 gap-4 mb-6">
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-purple-500">
                                        <div class="text-3xl font-bold text-purple-600 mb-1">90%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Companies Use Databases</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-blue-500">
                                        <div class="text-3xl font-bold text-blue-600 mb-1">$120K+</div>
                                        <p class="text-gray-700 text-sm font-semibold">Average DBA Salary</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-indigo-500">
                                        <div class="text-3xl font-bold text-indigo-600 mb-1">2.5M</div>
                                        <p class="text-gray-700 text-sm font-semibold">Database Jobs Globally</p>
                                    </div>
                                    <div class="bg-white rounded-xl p-5 shadow-md border-l-4 border-green-500">
                                        <div class="text-3xl font-bold text-green-600 mb-1">95%</div>
                                        <p class="text-gray-700 text-sm font-semibold">Web Apps Need DBs</p>
                                    </div>
                                </div>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-purple-600">Data is the new oil, and databases are the
                                        refineries.</span> Every modern application—from social media giants like Facebook and
                                    Instagram to e-commerce platforms like Amazon and Shopify—relies on robust database
                                    systems. Whether you're building a startup MVP, scaling to millions of users, or analyzing
                                    business intelligence, database expertise is non-negotiable.
                                </p>

                                <div class="bg-gradient-to-r from-purple-600 to-blue-600 rounded-xl p-6 text-white">
                                    <p class="font-bold text-lg mb-2">💡 Industry Reality:</p>
                                    <p class="text-purple-50">
                                        A poorly designed database can cripple a billion-dollar business. Amazon loses $66,240
                                        per minute when systems go down. Twitter's fail whale was often caused by database
                                        bottlenecks. Mastering database design, optimization, and scaling isn't just about
                                        passing courses—it's about building systems that can handle real-world scale and
                                        complexity!
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- SQL vs NoSQL Comparison Cards -->
                        <div class="grid md:grid-cols-2 gap-8">
                            <!-- SQL Databases Card -->
                            <div
                                class="bg-gradient-to-br from-blue-50 via-cyan-50 to-teal-50 rounded-2xl p-8 border-2 border-blue-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-blue-500 to-cyan-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🐘</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">SQL Databases Power</h4>
                                        <p class="text-blue-600 text-sm font-semibold">Structured, reliable, ACID-compliant
                                        </p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-blue-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-blue-600">SQL = Business Critical Data.</span>
                                            PostgreSQL, MySQL, SQL Server—these relational databases power banking systems,
                                            e-commerce transactions, healthcare records, and any application where data
                                            integrity is paramount. Master SQL and unlock enterprise opportunities!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div
                                            class="bg-gradient-to-br from-blue-100 to-blue-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-blue-900 text-lg">ACID</p>
                                            <p class="text-xs text-gray-700">Transaction Guarantees</p>
                                        </div>
                                        <div class="bg-gradient-to-br from-cyan-100 to-cyan-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-cyan-900 text-lg">Joins</p>
                                            <p class="text-xs text-gray-700">Complex Queries</p>
                                        </div>
                                    </div>

                                    <div class="bg-gradient-to-r from-blue-600 to-cyan-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🎯 Popular SQL Databases:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">PostgreSQL</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">MySQL</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">SQL Server</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Oracle DB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- NoSQL Databases Card -->
                            <div
                                class="bg-gradient-to-br from-green-50 via-emerald-50 to-lime-50 rounded-2xl p-8 border-2 border-green-200 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                                <div class="flex items-center gap-3 mb-6">
                                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl p-3 shadow-lg">
                                        <span class="text-3xl">🍃</span>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">NoSQL Database Flexibility</h4>
                                        <p class="text-green-600 text-sm font-semibold">Scalable, fast, schema-less</p>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="bg-white rounded-lg p-4 shadow border-l-4 border-green-500">
                                        <p class="text-gray-700 text-sm leading-relaxed">
                                            <span class="font-bold text-green-600">NoSQL = Modern Scale.</span> MongoDB,
                                            Redis, Cassandra—these databases power real-time apps, IoT systems, big data
                                            analytics, and applications serving millions of concurrent users. From Netflix's
                                            recommendations to Uber's real-time matching, NoSQL enables modern innovation!
                                        </p>
                                    </div>

                                    <div class="grid grid-cols-2 gap-3">
                                        <div
                                            class="bg-gradient-to-br from-green-100 to-green-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-green-900 text-lg">Horizontal</p>
                                            <p class="text-xs text-gray-700">Easy Scaling</p>
                                        </div>
                                        <div
                                            class="bg-gradient-to-br from-emerald-100 to-emerald-50 rounded-lg p-3 text-center">
                                            <p class="font-bold text-emerald-900 text-lg">Flexible</p>
                                            <p class="text-xs text-gray-700">Schema-less Design</p>
                                        </div>
                                    </div>

                                    <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-lg p-4 text-white">
                                        <p class="text-sm font-semibold mb-1">🌐 Popular NoSQL Databases:</p>
                                        <div class="flex flex-wrap gap-2 mt-2">
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">MongoDB</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Redis</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">Cassandra</span>
                                            <span class="bg-white bg-opacity-20 px-2 py-1 rounded text-xs">DynamoDB</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Database Technologies We Master</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Our expert database developers work with SQL, NoSQL,
                        and modern database technologies to build efficient data solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- SQL Databases -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">SQL Databases</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🐬</div>
                                    <h4 class="font-semibold text-gray-900">MySQL</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🐘</div>
                                    <h4 class="font-semibold text-gray-900">PostgreSQL</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-blue-50 rounded-lg p-4 mb-2 group-hover:bg-blue-100 transition-colors">
                                    <div class="text-3xl mb-2">🔷</div>
                                    <h4 class="font-semibold text-gray-900">SQL Server</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- NoSQL Databases -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">NoSQL Databases</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🍃</div>
                                    <h4 class="font-semibold text-gray-900">MongoDB</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">🔥</div>
                                    <h4 class="font-semibold text-gray-900">Firebase</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-green-50 rounded-lg p-4 mb-2 group-hover:bg-green-100 transition-colors">
                                    <div class="text-3xl mb-2">📊</div>
                                    <h4 class="font-semibold text-gray-900">Redis</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Databases -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Cloud Databases</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">☁️</div>
                                    <h4 class="font-semibold text-gray-900">AWS RDS</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🌩️</div>
                                    <h4 class="font-semibold text-gray-900">Azure SQL</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-orange-50 rounded-lg p-4 mb-2 group-hover:bg-orange-100 transition-colors">
                                    <div class="text-3xl mb-2">🔵</div>
                                    <h4 class="font-semibold text-gray-900">Google Cloud SQL</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tools & ORMs -->
                    <div class="bg-gray-50 rounded-lg p-6 hover:shadow-lg transition-shadow duration-200">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 text-center">Tools & ORMs</h3>
                        <div class="space-y-3">
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🔧</div>
                                    <h4 class="font-semibold text-gray-900">Sequelize</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">🛠️</div>
                                    <h4 class="font-semibold text-gray-900">Prisma</h4>
                                </div>
                            </div>
                            <div class="text-center group hover:scale-105 transition-transform duration-200">
                                <div class="bg-purple-50 rounded-lg p-4 mb-2 group-hover:bg-purple-100 transition-colors">
                                    <div class="text-3xl mb-2">⚙️</div>
                                    <h4 class="font-semibold text-gray-900">TypeORM</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing Section -->
        <section id="pricing" class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Fair, transparent pricing based on database
                        complexity. No hidden fees, no surprises.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Basic Database</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $30</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Simple database design
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Basic SQL queries
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    3-24 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Documentation included
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
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
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Advanced Database</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $75</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Complex database design
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Query optimization
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    24-48 hour delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Stored procedures
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Performance tuning
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
                                class="block w-full bg-purple-600 text-white py-3 rounded-lg font-semibold hover:bg-purple-700 transition-colors duration-200 text-center">
                                Get Started
                            </a>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8 hover:shadow-xl transition-shadow duration-200">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Enterprise Solution</h3>
                            <div class="text-3xl font-bold text-purple-600 mb-4">From $150</div>
                            <ul class="text-left space-y-3 mb-8">
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Full database architecture
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Data migration
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    2-3 day delivery
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Replication setup
                                </li>
                                <li class="flex items-center">
                                    <span class="text-green-500 mr-2">✓</span>
                                    Backup strategies
                                </li>
                            </ul>
                            <a href="{{ route('assignments.create') }}"
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
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Database Development Process</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methodology for delivering efficient and
                        scalable database solutions.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">1</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Requirements Analysis</h3>
                        <p class="text-gray-600">We analyze your data requirements, relationships, and query patterns to
                            design optimal solutions.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">2</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Database Design</h3>
                        <p class="text-gray-600">Create normalized schema, define relationships, and establish proper
                            indexing strategies.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Implementation & Testing</h3>
                        <p class="text-gray-600">Build the database, create queries, and conduct thorough performance
                            testing.</p>
                    </div>

                    <div class="text-center">
                        <div class="bg-purple-100 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold text-purple-600">4</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Optimization & Delivery</h3>
                        <p class="text-gray-600">Optimize performance, provide documentation, and deliver your complete
                            database solution.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Second Engaging Content Section -->
        <section class="py-20 bg-gradient-to-b from-white to-gray-50">
            <div class="container mx-auto px-6">
                <div class="max-w-5xl mx-auto">
                    <div class="text-center mb-12">
                        <div
                            class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-3 rounded-full text-sm font-bold mb-6 shadow-lg">
                            <span class="text-xl">📖</span>
                            COMPREHENSIVE DATABASE GUIDE
                        </div>
                        <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-4">
                            Complete Guide to <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600">Database
                                Systems & Design</span>
                        </h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Essential knowledge for computer science students,
                            database administrators, and software developers</p>
                    </div>

                    <div class="space-y-8">
                        <!-- Main Informative Card -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">📚</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Understanding Database Systems</h3>
                                    <p class="text-indigo-600 font-semibold text-lg">The foundation of modern data-driven
                                        applications</p>
                                </div>
                            </div>

                            <div class="prose prose-lg max-w-none">
                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    <span class="font-bold text-indigo-600">A database is an organized collection of structured
                                        data stored electronically in a computer system.</span> Modern databases are managed by
                                    Database Management Systems (DBMS), which provide an interface for users and applications to
                                    interact with data. Databases can be classified into two main categories: relational (SQL)
                                    databases that store data in structured tables with predefined schemas, and non-relational
                                    (NoSQL) databases that offer flexible schemas for unstructured or semi-structured data.
                                </p>

                                <p class="text-gray-700 mb-4 leading-relaxed">
                                    Relational databases like PostgreSQL, MySQL, and SQL Server use Structured Query Language
                                    (SQL) for data manipulation and querying. They excel at maintaining data integrity through
                                    ACID properties (Atomicity, Consistency, Isolation, Durability) and support complex
                                    relationships between data entities. NoSQL databases like MongoDB, Redis, and Cassandra offer
                                    different data models including document stores, key-value pairs, column-family stores, and
                                    graph databases, each optimized for specific use cases and scalability patterns.
                                </p>

                                <div
                                    class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6 border-l-4 border-indigo-500 mb-6">
                                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Why Database Knowledge Is Essential</h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Universal Application Requirement:</strong> Nearly every modern
                                                application requires data persistence. From mobile apps to enterprise systems,
                                                databases are fundamental. Understanding database design, querying, and
                                                optimization is essential for any software developer.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Career Opportunities:</strong> Database skills are among the most
                                                sought-after in tech. Database administrators, data engineers, and backend
                                                developers with database expertise command salaries averaging $120,000+,
                                                reflecting the critical importance of these skills.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Performance Impact:</strong> A well-designed database can handle
                                                millions of queries per second, while a poorly designed one can bring an entire
                                                application to a halt. Understanding indexing, query optimization, and database
                                                architecture directly impacts application performance.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="text-indigo-600 font-bold mt-1">•</span>
                                            <span><strong>Data-Driven Decision Making:</strong> Businesses rely on databases to
                                                store and analyze massive amounts of data. Mastering SQL, data modeling, and
                                                analytics enables you to extract valuable insights and drive business
                                                decisions.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Database Design Principles -->
                        <div
                            class="bg-gradient-to-br from-white to-indigo-50 rounded-2xl shadow-2xl p-8 border-2 border-indigo-100">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-purple-600 to-pink-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🎨</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">Database Design Principles and
                                        Normalization</h3>
                                    <p class="text-purple-600 font-semibold text-lg">Creating efficient and maintainable database
                                        schemas</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                Database normalization is the process of organizing data to minimize redundancy and dependency.
                                This systematic approach divides larger tables into smaller, more manageable ones and defines
                                relationships between them. Normalization follows several forms (1NF, 2NF, 3NF, BCNF) to ensure
                                data integrity, reduce storage requirements, and improve query performance.
                            </p>

                            <div class="grid md:grid-cols-3 gap-6 mb-6">
                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-indigo-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-indigo-600 mb-2">1NF - First Normal Form</div>
                                        <p class="text-gray-700 text-sm mb-3">Ensures that each column contains atomic
                                            (indivisible) values and each column contains values of a single type.</p>
                                        <div class="bg-indigo-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-indigo-900 mb-1">Requirements:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Eliminate repeating groups</li>
                                                <li>• Create separate table for related data</li>
                                                <li>• Identify each row with primary key</li>
                                                <li>• Atomic column values only</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-purple-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-purple-600 mb-2">2NF - Second Normal Form</div>
                                        <p class="text-gray-700 text-sm mb-3">Meets 1NF requirements and removes partial
                                            dependencies. Every non-key attribute must depend on the entire primary key.</p>
                                        <div class="bg-purple-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-purple-900 mb-1">Requirements:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Must be in 1NF</li>
                                                <li>• Remove partial dependencies</li>
                                                <li>• Non-key attributes depend on whole key</li>
                                                <li>• Create separate tables for subsets</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-xl p-5 shadow-md border-2 border-pink-200">
                                    <div class="mb-3">
                                        <div class="text-3xl font-bold text-pink-600 mb-2">3NF - Third Normal Form</div>
                                        <p class="text-gray-700 text-sm mb-3">Meets 2NF requirements and eliminates transitive
                                            dependencies. Non-key attributes cannot depend on other non-key attributes.</p>
                                        <div class="bg-pink-50 rounded-lg p-3">
                                            <p class="text-xs font-semibold text-pink-900 mb-1">Requirements:</p>
                                            <ul class="text-xs text-gray-700 space-y-1">
                                                <li>• Must be in 2NF</li>
                                                <li>• Remove transitive dependencies</li>
                                                <li>• Non-key attributes independent</li>
                                                <li>• Highest practical normal form</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">Indexing and Query Optimization</h4>
                                <p class="text-indigo-100 mb-3">
                                    Database indexes are data structures that improve the speed of data retrieval operations. Like
                                    a book's index, they allow the database to find data without scanning every row. Common index
                                    types include B-tree indexes (default in most databases), hash indexes for exact matches, and
                                    full-text indexes for text search. However, indexes have trade-offs: they speed up reads but
                                    slow down writes and consume additional storage.
                                </p>
                                <p class="text-indigo-100">
                                    Query optimization involves analyzing query execution plans, choosing appropriate indexes,
                                    rewriting queries for efficiency, and understanding how the database engine processes queries.
                                    Tools like EXPLAIN in SQL help visualize query execution and identify bottlenecks.
                                </p>
                            </div>
                        </div>

                        <!-- ACID Properties and Transactions -->
                        <div class="bg-white rounded-2xl shadow-2xl p-8 border-2 border-gray-200">
                            <div class="flex items-start gap-4 mb-6">
                                <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-4 shadow-lg">
                                    <span class="text-4xl">🔒</span>
                                </div>
                                <div>
                                    <h3 class="text-3xl font-bold text-gray-900 mb-2">ACID Properties and Database Transactions
                                    </h3>
                                    <p class="text-green-600 font-semibold text-lg">Ensuring data integrity and reliability</p>
                                </div>
                            </div>

                            <p class="text-gray-700 mb-6 leading-relaxed">
                                ACID is an acronym representing four key properties that guarantee database transactions are
                                processed reliably. These properties are fundamental to relational databases and critical for
                                applications requiring data consistency, such as financial systems, e-commerce platforms, and
                                enterprise applications where data integrity is paramount.
                            </p>

                            <div class="grid md:grid-cols-2 gap-6 mb-6">
                                <div
                                    class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border-2 border-blue-200">
                                    <h4 class="font-bold text-blue-900 text-xl mb-3">Atomicity</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Transactions are "all-or-nothing" operations. Either all changes in a transaction are
                                        committed to the database, or none are. If any part of the transaction fails, the entire
                                        transaction is rolled back to its previous state.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-blue-900 text-sm mb-2">Real-World Example:</p>
                                        <p class="text-xs text-gray-700">
                                            In a bank transfer, money must be deducted from one account AND added to another. If
                                            either operation fails, both are rolled back—you can't have money disappear or
                                            duplicate!
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border-2 border-purple-200">
                                    <h4 class="font-bold text-purple-900 text-xl mb-3">Consistency</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Transactions must take the database from one valid state to another, maintaining all
                                        defined rules, constraints, and triggers. Data integrity constraints are never violated.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-purple-900 text-sm mb-2">Real-World Example:</p>
                                        <p class="text-xs text-gray-700">
                                            If a database rule states that account balances cannot be negative, the database will
                                            reject any transaction that would violate this constraint, maintaining consistency.
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border-2 border-green-200">
                                    <h4 class="font-bold text-green-900 text-xl mb-3">Isolation</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Concurrent transactions execute independently without interference. The intermediate state
                                        of a transaction is invisible to other transactions, preventing conflicts and ensuring
                                        data integrity.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-green-900 text-sm mb-2">Real-World Example:</p>
                                        <p class="text-xs text-gray-700">
                                            When two people try to book the last seat on a flight simultaneously, isolation
                                            ensures only one succeeds. The other sees the seat as unavailable, preventing
                                            double-booking.
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6 border-2 border-orange-200">
                                    <h4 class="font-bold text-orange-900 text-xl mb-3">Durability</h4>
                                    <p class="text-gray-700 text-sm mb-3">
                                        Once a transaction is committed, it remains permanent even in the event of system
                                        failures, crashes, or power outages. Data is safely stored in non-volatile memory.
                                    </p>
                                    <div class="bg-white rounded-lg p-3 mb-3">
                                        <p class="font-semibold text-orange-900 text-sm mb-2">Real-World Example:</p>
                                        <p class="text-xs text-gray-700">
                                            After you complete an online purchase and receive confirmation, even if the server
                                            crashes immediately after, your order is permanently recorded and will be processed.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="bg-gradient-to-r from-green-600 via-emerald-600 to-teal-600 rounded-xl p-6 text-white">
                                <h4 class="font-bold text-xl mb-3">CAP Theorem and Distributed Databases</h4>
                                <p class="text-green-100 mb-3">
                                    The CAP theorem states that distributed databases can only guarantee two of three properties:
                                    Consistency (all nodes see the same data), Availability (every request receives a response),
                                    and Partition Tolerance (system continues despite network failures). This fundamental theorem
                                    guides distributed database design decisions.
                                </p>
                                <p class="text-green-100">
                                    <strong>Need Database Help?</strong> Our database experts provide professional assistance
                                    with database design, SQL optimization, NoSQL implementation, and complex query development.
                                    Whether you're struggling with normalization, need help with stored procedures, or require
                                    expert guidance on database architecture, our experienced developers are available 24/7. Get
                                    database help from experts who understand ACID properties, indexing strategies, query
                                    optimization, and modern database technologies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Clients Say</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Real feedback from students who got help with their
                        database programming projects.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Excellent database design for my e-commerce project! The expert
                            created a normalized schema with proper indexing, and the queries are lightning fast. Great
                            documentation too!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                S</div>
                            <div>
                                <div class="font-semibold text-gray-900">Sarah M.</div>
                                <div class="text-sm text-gray-500">Database Student</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-lg p-8">
                        <div class="flex items-center mb-4">
                            <div class="flex text-yellow-400">
                                <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-6">"Amazing help with complex SQL queries! The developer optimized my
                            slow queries and implemented proper indexes. Performance improved by 10x. Highly recommend!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                D</div>
                            <div>
                                <div class="font-semibold text-gray-900">David K.</div>
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
                        <p class="text-gray-600 mb-6">"Professional MongoDB implementation! The NoSQL design was perfect for
                            my social media app. Clean data modeling and efficient aggregation queries. Excellent work!"</p>
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold mr-3">
                                L</div>
                            <div>
                                <div class="font-semibold text-gray-900">Lisa T.</div>
                                <div class="text-sm text-gray-500">Software Engineering Student</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about our database
                        programming service.</p>
                </div>

                <div class="max-w-3xl mx-auto space-y-6">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Which database systems do you support?</h3>
                        <p class="text-gray-600">We work with all major database systems including MySQL, PostgreSQL, SQL
                            Server, Oracle, MongoDB, Redis, Firebase, and more. We can help you choose the best database for
                            your project requirements.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help optimize slow database queries?
                        </h3>
                        <p class="text-gray-600">Absolutely! We specialize in query optimization, indexing strategies,
                            execution plan analysis, and database performance tuning. We can significantly improve your
                            database performance.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Do you provide database design and modeling?
                        </h3>
                        <p class="text-gray-600">Yes! We provide complete database design services including ER diagrams,
                            schema design, normalization, relationship mapping, and data modeling following best practices.
                        </p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Can you help with data migration projects?</h3>
                        <p class="text-gray-600">Yes, we assist with data migration between different database systems,
                            including ETL processes, data transformation, and ensuring data integrity during migration.</p>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">What's included in the database delivery?</h3>
                        <p class="text-gray-600">You'll receive complete database scripts, schema documentation, ER diagrams,
                            query examples, and setup instructions. For advanced projects, we also include optimization
                            reports and maintenance guidelines.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Build Your Database?</h2>
                <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">Join hundreds of students who have successfully
                    completed their database projects with our expert help.</p>
                <a href="{{ route('assignments.create') }}"
                    class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200 shadow-lg">
                    Start Your Database Project Today
                </a>
            </div>
        </section>
    </div>

    <style>
        @keyframes float {

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

        @keyframes float-delayed {

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
