{{-- Kept for when self-serve registration is re-enabled; the routes in
     routes/auth.php are currently commented out, so this is unreachable. --}}
@php
    abort_unless(Route::has('register'), 404);
@endphp

<x-guest-layout title="Create account">
    <x-auth-header
        :title="__('Create your account')"
        :description="__('Get expert academic help in minutes.')" />

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="auth-label">{{ __('Full name') }}</label>
            <input id="name" name="name" type="text" value="{{ old('name') }}"
                   class="auth-input" placeholder="{{ __('Jane Doe') }}"
                   required autofocus autocomplete="name"
                   @error('name') aria-invalid="true" @enderror>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="auth-label">{{ __('Email address') }}</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}"
                   class="auth-input" placeholder="you@example.com"
                   required autocomplete="username"
                   @error('email') aria-invalid="true" @enderror>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div x-data="{ show: false }">
            <label for="password" class="auth-label">{{ __('Password') }}</label>

            <div class="relative">
                <input id="password" name="password"
                       x-bind:type="show ? 'text' : 'password'"
                       class="auth-input pe-10" placeholder="{{ __('At least 8 characters') }}"
                       required autocomplete="new-password"
                       @error('password') aria-invalid="true" @enderror>

                <button type="button" class="auth-reveal" x-on:click="show = !show"
                        x-bind:aria-label="show ? '{{ __('Hide password') }}' : '{{ __('Show password') }}'">
                    <svg x-show="!show" class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1 1 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178a1 1 0 010 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.964-7.178z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <svg x-show="show" x-cloak class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243" />
                    </svg>
                </button>
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="auth-label">{{ __('Confirm password') }}</label>
            <input id="password_confirmation" name="password_confirmation" type="password"
                   class="auth-input" placeholder="{{ __('Re-enter your password') }}"
                   required autocomplete="new-password"
                   @error('password_confirmation') aria-invalid="true" @enderror>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button type="submit" class="auth-btn">
            {{ __('Create account') }}
        </button>
    </form>

    <p class="auth-meta mt-5 text-center text-[11px] leading-relaxed">
        {{ __('By creating an account you agree to our') }}
        <a href="{{ route('terms-of-service') }}" class="auth-link">{{ __('Terms') }}</a>
        {{ __('and') }}
        <a href="{{ route('privacy-policy') }}" class="auth-link">{{ __('Privacy Policy') }}</a>.
    </p>

    <p class="auth-muted mt-5 text-center text-sm">
        {{ __('Already have an account?') }}
        <a href="{{ route('login') }}" class="auth-link font-semibold">{{ __('Log in') }}</a>
    </p>
</x-guest-layout>
