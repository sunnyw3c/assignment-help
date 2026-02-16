<section>
    <header class="flex items-center gap-4 mb-10">
        <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-xl">
            🔒
        </div>
        <div>
            <h2 class="text-2xl font-black text-slate-900 tracking-tight">
                {{ __('Security Update') }}
            </h2>
            <p class="text-sm font-bold text-slate-400 uppercase tracking-widest mt-1">
                {{ __('Protect your account with a strong password') }}
            </p>
        </div>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-8">
        @csrf
        @method('put')

        <div class="grid grid-cols-1 gap-8">
            <!-- Current Password -->
            <div class="max-w-md space-y-2">
                <label for="update_password_current_password" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Current Password</label>
                <input id="update_password_current_password" name="current_password" type="password" 
                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-bold focus:ring-4 focus:ring-purple-500/10 focus:border-purple-500 transition-all placeholder:text-slate-300" 
                    autocomplete="current-password" />
                @if($errors->updatePassword->get('current_password'))
                    <p class="text-xs font-bold text-rose-500 mt-2 ml-1">{{ $errors->updatePassword->get('current_password')[0] }}</p>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- New Password -->
                <div class="space-y-2">
                    <label for="update_password_password" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">New Password</label>
                    <input id="update_password_password" name="password" type="password" 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-bold focus:ring-4 focus:ring-purple-500/10 focus:border-purple-500 transition-all placeholder:text-slate-300" 
                        autocomplete="new-password" />
                    @if($errors->updatePassword->get('password'))
                        <p class="text-xs font-bold text-rose-500 mt-2 ml-1">{{ $errors->updatePassword->get('password')[0] }}</p>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="space-y-2">
                    <label for="update_password_password_confirmation" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Confirm New Password</label>
                    <input id="update_password_password_confirmation" name="password_confirmation" type="password" 
                        class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-bold focus:ring-4 focus:ring-purple-500/10 focus:border-purple-500 transition-all placeholder:text-slate-300" 
                        autocomplete="new-password" />
                    @if($errors->updatePassword->get('password_confirmation'))
                        <p class="text-xs font-bold text-rose-500 mt-2 ml-1">{{ $errors->updatePassword->get('password_confirmation')[0] }}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="flex items-center gap-6 pt-4">
            <button type="submit" class="px-10 py-4 bg-indigo-600 text-white font-black rounded-2xl hover:bg-slate-900 transition-all shadow-xl shadow-indigo-100 active:scale-95 text-xs uppercase tracking-widest">
                {{ __('Update Password') }}
            </button>

            @if (session('status') === 'password-updated')
                <div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)"
                    class="flex items-center gap-2 text-emerald-600 font-black text-[10px] uppercase tracking-widest bg-emerald-50 px-4 py-2 rounded-xl border border-emerald-100">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    {{ __('Password Secured') }}
                </div>
            @endif
        </div>
    </form>
</section>

