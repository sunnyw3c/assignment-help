<x-guest-layout title="Forgot password">
    <x-auth-header
        :title="__('Forgot your password?')"
        :description="__('Enter your email address and we will send you a link to reset it.')" />

    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="auth-label">{{ __('Email address') }}</label>
            <input id="email" name="email" type="email" value="{{ old('email') }}"
                   class="auth-input" placeholder="you@example.com"
                   required autofocus autocomplete="username"
                   @error('email') aria-invalid="true" @enderror>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <button type="submit" class="auth-btn">
            {{ __('Email password reset link') }}
        </button>
    </form>

    <p class="auth-muted mt-6 text-center text-sm">
        {{ __('Remembered it?') }}
        <a href="{{ route('login') }}" class="auth-link font-semibold">{{ __('Back to log in') }}</a>
    </p>
</x-guest-layout>
