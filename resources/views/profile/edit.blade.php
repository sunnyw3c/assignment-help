@extends('layouts.app')

@section('content')
<div class="min-h-screen py-12 bg-[#F8FAFC]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <!-- Premium Header Area -->
        <div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 to-purple-700 p-10 sm:p-14 rounded-[3.5rem] shadow-2xl shadow-indigo-200 text-white">
            <div class="relative z-10">
                <div class="flex items-center gap-6 mb-6">
                    <div class="w-24 h-24 rounded-3xl bg-white/20 backdrop-blur-md flex items-center justify-center text-4xl shadow-xl">
                        👤
                    </div>
                    <div>
                        <h1 class="text-3xl sm:text-5xl font-black tracking-tight mb-2">Account Settings</h1>
                        <p class="text-indigo-100 text-lg font-medium opacity-90">Manage your profile information, password, and security preferences.</p>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full blur-2xl -ml-16 -mb-16"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Left Column: Navigation/Summary -->
            <div class="space-y-6">
                <div class="bg-white p-8 rounded-[2.5rem] border border-slate-100 shadow-xl shadow-slate-200/50">
                    <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest mb-6">Quick Jump</h3>
                    <nav class="space-y-2">
                        <a href="#profile-info" class="flex items-center gap-3 p-4 rounded-2xl bg-indigo-50 text-indigo-600 font-bold transition-all">
                            <span class="text-lg">📝</span> Profile Details
                        </a>
                        <a href="#password-update" class="flex items-center gap-3 p-4 rounded-2xl text-slate-500 hover:bg-slate-50 font-bold transition-all group">
                            <span class="text-lg group-hover:scale-110 transition-transform">🔒</span> Update Password
                        </a>
                        <a href="#delete-account" class="flex items-center gap-3 p-4 rounded-2xl text-rose-500 hover:bg-rose-50 font-bold transition-all group">
                            <span class="text-lg group-hover:scale-110 transition-transform">⚠️</span> Danger Zone
                        </a>
                    </nav>
                </div>

                <!-- User identity Card -->
                <div class="bg-slate-900 p-8 rounded-[2.5rem] text-white relative overflow-hidden group">
                    <div class="relative z-10 flex flex-col items-center text-center space-y-4">
                        <div class="w-20 h-20 rounded-full border-4 border-white/10 bg-indigo-600 flex items-center justify-center text-2xl font-black shadow-2xl">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <div>
                            <p class="text-xl font-black">{{ Auth::user()->name }}</p>
                            <p class="text-slate-400 text-xs font-bold uppercase tracking-widest mt-1">{{ Auth::user()->email }}</p>
                        </div>
                        <div class="pt-4 w-full">
                            <div class="px-4 py-2 bg-white/5 rounded-xl border border-white/10 text-[10px] font-black uppercase tracking-widest">
                                Member Since: {{ Auth::user()->created_at->format('M Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Forms -->
            <div class="lg:col-span-2 space-y-10">
                
                <!-- Profile Information Card -->
                <div id="profile-info" class="bg-white rounded-[3rem] border border-slate-100 shadow-xl shadow-slate-200/40 p-10 space-y-8">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <!-- Update Password Card -->
                <div id="password-update" class="bg-white rounded-[3rem] border border-slate-100 shadow-xl shadow-slate-200/40 p-10 space-y-8">
                    @include('profile.partials.update-password-form')
                </div>

                <!-- Danger Zone Card -->
                <div id="delete-account" class="bg-rose-50 rounded-[3rem] border border-rose-100 shadow-xl shadow-rose-200/20 p-10 space-y-8">
                    @include('profile.partials.delete-user-form')
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

