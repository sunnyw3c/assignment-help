@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'mb-5 flex items-start gap-2.5 rounded-lg border border-emerald-500/25 bg-emerald-500/10 px-3.5 py-2.5 text-sm font-medium text-emerald-300']) }}>
        <svg class="mt-0.5 h-4 w-4 shrink-0" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </svg>
        <span>{{ $status }}</span>
    </div>
@endif
