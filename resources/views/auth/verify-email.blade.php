<x-guest-layout title="Verify email">
    <x-auth-header
        :title="__('Verify your email address')"
        :description="__('Thanks for signing up! Please click the link we just emailed you. If you did not receive it, we will gladly send another.')" />

    @if (session('status') == 'verification-link-sent')
        <x-auth-session-status :status="__('A new verification link has been sent to the email address you provided during registration.')" />
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <button type="submit" class="auth-btn">
            {{ __('Resend verification email') }}
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="mt-5 text-center">
        @csrf

        <button type="submit" class="auth-link text-sm font-semibold">
            {{ __('Log out') }}
        </button>
    </form>
</x-guest-layout>
