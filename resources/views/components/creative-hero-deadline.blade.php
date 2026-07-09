{{--
    Native datetime-local deadline picker.
    Keeps [data-deadline-wrap], [data-deadline-input], [data-deadline-label]
    so the existing hero form JS (updateDeadlineLabels / updateSubmit) keeps working.
--}}
<div class="relative w-full min-w-0" data-deadline-wrap>

    {{-- Label row --}}
    <div class="flex items-center justify-between mb-1 px-0.5">
        <label class="text-[11.5px] font-bold text-[var(--dl-lbl)] uppercase tracking-wider flex items-center gap-1.5">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            Deadline
        </label>
        <span class="text-[11px] font-semibold text-[var(--i-clr)] truncate max-w-[160px]" data-deadline-label></span>
    </div>

    {{-- Native datetime-local input --}}
    <input
        type="datetime-local"
        name="deadline"
        data-deadline-input
        min="{{ now()->format('Y-m-d\TH:i') }}"
        class="w-full h-[41px] px-3 text-[12.5px] font-semibold
               border-[1.5px] border-[var(--dl-bdr)] rounded-[10px]
               bg-[var(--dl-bg)] text-[var(--dl-lbl)]
               transition-[border-color,box-shadow] duration-[180ms]
               hover:border-[#6366f1] focus:border-[#6366f1]
               focus:shadow-[0_0_0_3px_rgba(99,102,241,0.15)]
               focus:outline-none cursor-pointer
               dark:[color-scheme:dark]"
    >

</div>
