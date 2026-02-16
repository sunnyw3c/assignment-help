<section>
    <header class="flex items-center gap-4 mb-10">
        <div class="w-12 h-12 rounded-2xl bg-indigo-50 flex items-center justify-center text-xl">
            📝
        </div>
        <div>
            <h2 class="text-2xl font-black text-slate-900 tracking-tight">
                {{ __('Profile Information') }}
            </h2>
            <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mt-1">
                {{ __("Basic identify and contact details") }}
            </p>
        </div>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-8">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Name Field -->
            <div class="space-y-2">
                <label for="name" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Full Name</label>
                <input id="name" name="name" type="text" 
                    value="{{ old('name', $user->name) }}"
                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-bold focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all placeholder:text-slate-300" 
                    required autofocus autocomplete="name" />
                @if($errors->get('name'))
                    <p class="text-xs font-bold text-rose-500 mt-2 ml-1">{{ $errors->get('name')[0] }}</p>
                @endif
            </div>

            <!-- Email Field -->
            <div class="space-y-2">
                <label for="email" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Email Address</label>
                <input id="email" name="email" type="email" 
                    value="{{ old('email', $user->email) }}"
                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-bold focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all placeholder:text-slate-300" 
                    required autocomplete="username" />
                @if($errors->get('email'))
                    <p class="text-xs font-bold text-rose-500 mt-2 ml-1">{{ $errors->get('email')[0] }}</p>
                @endif

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div class="p-4 bg-amber-50 rounded-xl border border-amber-100 mt-4">
                        <p class="text-xs font-bold text-amber-900">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification" class="ml-2 underline text-amber-600 hover:text-amber-700">
                                {{ __('Resend Link') }}
                            </button>
                        </p>
                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-black text-[10px] uppercase tracking-widest text-emerald-600">
                                {{ __('Verification link sent.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>

        <div class="flex items-center gap-6 pt-4">
            <button type="submit" class="px-10 py-4 bg-indigo-600 text-white font-black rounded-2xl hover:bg-slate-900 transition-all shadow-xl shadow-indigo-100 active:scale-95 text-xs uppercase tracking-widest">
                {{ __('Save Changes') }}
            </button>

            @if (session('status') === 'profile-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                    class="flex items-center gap-2 text-emerald-600 font-black text-[10px] uppercase tracking-widest bg-emerald-50 px-4 py-2 rounded-xl border border-emerald-100">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    {{ __('Saved Successfully') }}
                </div>
            @endif
        </div>
    </form>
</section>

