<x-app-layout>
    <div class="min-h-screen bg-slate-50 py-12 px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
        <!-- Success Animation/Icon -->
        <div class="mb-8 animate-bounce-slow">
            <div class="w-24 h-24 bg-emerald-500 rounded-full flex items-center justify-center shadow-2xl shadow-emerald-200 border-4 border-white">
                <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
        </div>

        <!-- Success Message -->
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 tracking-tight">
                Order Received! 🚀
            </h1>
            <p class="text-lg text-slate-600 font-medium">
                Thank you for choosing Assignment Help USA. Your order has been successfully placed and is now being reviewed by our experts.
            </p>
        </div>

        <!-- Order Summary Card (Glassmorphic) -->
        <div class="w-full max-w-xl bg-white/70 backdrop-blur-xl rounded-[2.5rem] border border-white/20 shadow-[0_32px_64px_-16px_rgba(0,0,0,0.1)] p-8 md:p-12 mb-12 relative overflow-hidden group">
            <!-- Background Glow -->
            <div class="absolute -top-24 -right-24 w-64 h-64 bg-purple-100/40 rounded-full blur-3xl transition-transform duration-700 group-hover:scale-125"></div>
            
            <div class="relative space-y-8">
                <div class="flex items-center justify-between border-b border-slate-100 pb-6">
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-1">Order Identifier</p>
                        <h3 class="text-2xl font-bold text-slate-900">#{{ str_pad($assignment->id, 5, '0', STR_PAD_LEFT) }}</h3>
                    </div>
                    <div class="px-4 py-2 bg-emerald-50 text-emerald-700 rounded-full text-sm font-bold border border-emerald-100">
                        Pending Review
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Service Type</p>
                        <p class="font-bold text-slate-800">{{ ucfirst($assignment->service_type) }}</p>
                    </div>
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Deadline</p>
                        <p class="font-bold text-slate-800">{{ $assignment->deadline }}</p>
                    </div>
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Pages/Units</p>
                        <p class="font-bold text-slate-800">{{ $assignment->pages }}</p>
                    </div>
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-2">Budget</p>
                        <p class="text-2xl font-black text-purple-600">${{ number_format($assignment->budget, 2) }}</p>
                    </div>
                </div>

                @if(session('info'))
                    <div class="bg-indigo-50 border border-indigo-100 rounded-2xl p-4 flex gap-3 items-start animate-fade-in">
                        <span class="text-xl">✨</span>
                        <div>
                            <p class="text-sm font-bold text-indigo-900">Account Created!</p>
                            <p class="text-xs text-indigo-700 font-medium leading-relaxed">We've automatically created an account for you. You're logged in and can track your order in the dashboard.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center gap-4">
            <a href="{{ route('dashboard') }}" class="w-full sm:w-auto px-10 py-4 bg-slate-900 text-white font-bold rounded-2xl hover:bg-slate-800 transform hover:-translate-y-1 transition-all shadow-xl shadow-slate-200 text-center">
                View My Dashboard
            </a>
            <a href="{{ route('order') }}" class="w-full sm:w-auto px-10 py-4 bg-white text-slate-600 font-bold rounded-2xl border-2 border-slate-100 hover:border-slate-200 transform hover:-translate-y-1 transition-all text-center">
                Place Another Order
            </a>
        </div>
    </div>
</x-app-layout>
