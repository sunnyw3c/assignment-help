<div class="relative w-full min-w-0" data-deadline-wrap>
    <button type="button" data-deadline-toggle class="flex items-center justify-between w-full h-[41px] px-3 cursor-pointer select-none border-[1.5px] border-[var(--dl-bdr)] rounded-[10px] bg-[var(--dl-bg)] transition-[border-color,box-shadow] duration-[180ms] hover:border-[#f16700] hover:shadow-[0_0_0_3px_rgba(241,103,0,0.10)]">
        <span class="text-[12.5px] font-semibold text-[var(--dl-lbl)]">Deadline</span>
        <span class="flex items-center justify-end gap-[5px] min-w-0 text-[12.5px] font-semibold text-[var(--i-clr)]">
            <span class="max-w-[170px] max-sm:max-w-[145px] text-right truncate" data-deadline-label>Select deadline</span>
            <svg class="flex-shrink-0" width="13" height="13" viewBox="0 0 20 20" fill="none">
                <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
    </button>
    <div class="hidden mt-1 w-full rounded-[14px] bg-[var(--dl-dbg)] shadow-[0_18px_48px_rgba(0,0,0,0.24)] p-3" data-deadline-picker>
        <input type="datetime-local" data-deadline-input class="ahusa-input w-full" min="{{ now()->format('Y-m-d\TH:i') }}">
    </div>
</div>
