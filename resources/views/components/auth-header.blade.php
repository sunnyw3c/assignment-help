@props(['title', 'description' => null])

<div class="mb-6">
    <h1 class="auth-heading text-xl font-bold tracking-tight">{{ $title }}</h1>

    @if ($description)
        <p class="auth-muted mt-1.5 text-sm leading-relaxed">{{ $description }}</p>
    @endif
</div>
