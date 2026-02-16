<section>
    <header class="flex items-center gap-4 mb-10">
        <div class="w-12 h-12 rounded-2xl bg-rose-100 flex items-center justify-center text-xl">
            ⚠️
        </div>
        <div>
            <h2 class="text-2xl font-black text-rose-900 tracking-tight">
                {{ __('Danger Zone') }}
            </h2>
            <p class="text-sm font-bold text-rose-400 uppercase tracking-widest mt-1">
                {{ __('Irreversible account actions') }}
            </p>
        </div>
    </header>

    <div class="p-8 bg-white/50 rounded-2xl border border-rose-100">
        <p class="text-sm font-bold text-rose-900 leading-relaxed mb-8">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <button 
            x-data=""
            @click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="px-8 py-4 bg-rose-500 text-white font-black rounded-2xl hover:bg-rose-600 transition-all shadow-xl shadow-rose-100 active:scale-95 text-xs uppercase tracking-widest">
            {{ __('Delete My Account') }}
        </button>
    </div>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-10 space-y-8 bg-white rounded-[2.5rem]">
            @csrf
            @method('delete')

            <div class="text-center space-y-4">
                <div class="w-20 h-20 bg-rose-50 rounded-full flex items-center justify-center mx-auto text-3xl">🚫</div>
                <h2 class="text-3xl font-black text-slate-900 tracking-tight">
                    {{ __('Are you absolutely sure?') }}
                </h2>
                <p class="text-slate-500 font-medium max-w-sm mx-auto">
                    {{ __('Once your account is deleted, all data will be permanently cleared. Please enter your password to confirm.') }}
                </p>
            </div>

            <div class="space-y-2">
                <label for="password" class="text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] ml-1">Confirm Identity with Password</label>
                <input id="password" name="password" type="password" 
                    class="w-full px-6 py-4 bg-slate-50 border border-slate-100 rounded-2xl text-slate-900 font-bold focus:ring-4 focus:ring-rose-500/10 focus:border-rose-500 transition-all placeholder:text-slate-300" 
                    placeholder="Enter password to confirm..." />
                @if($errors->userDeletion->get('password'))
                    <p class="text-xs font-bold text-rose-500 mt-2 ml-1">{{ $errors->userDeletion->get('password')[0] }}</p>
                @endif
            </div>

            <div class="flex flex-col sm:flex-row items-center gap-4 pt-4">
                <button type="button" @click="$dispatch('close')" class="w-full sm:flex-1 py-4 bg-slate-100 text-slate-600 font-black rounded-2xl hover:bg-slate-200 transition-all text-xs uppercase tracking-widest">
                    {{ __('Cancel') }}
                </button>

                <button type="submit" class="w-full sm:flex-1 py-4 bg-rose-600 text-white font-black rounded-2xl hover:bg-rose-700 transition-all shadow-xl shadow-rose-100 text-xs uppercase tracking-widest">
                    {{ __('Permanently Delete') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>

