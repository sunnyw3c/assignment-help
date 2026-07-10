<div class="relative w-full min-w-0" data-deadline-wrap>
    <input type="hidden" name="deadline" data-deadline-input>

    <button type="button" data-deadline-toggle class="flex items-center justify-between w-full h-[41px] px-3 cursor-pointer select-none border-[1.5px] border-[var(--dl-bdr)] rounded-[10px] bg-[var(--dl-bg)] transition-[border-color,box-shadow] duration-[180ms] hover:border-[#f16700] hover:shadow-[0_0_0_3px_rgba(241,103,0,0.10)]">
        <span class="text-[12.5px] font-semibold text-[var(--dl-lbl)]">Deadline</span>
        <span class="flex items-center justify-end gap-[5px] min-w-0 text-[12.5px] font-semibold text-[var(--i-clr)]">
            <span class="max-w-[170px] max-sm:max-w-[145px] text-right truncate" data-deadline-label>Select deadline</span>
            <svg class="flex-shrink-0" width="13" height="13" viewBox="0 0 20 20" fill="none">
                <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
    </button>

    <div class="hidden mt-1 w-full rounded-[14px] bg-[var(--dl-dbg)] shadow-[0_18px_48px_rgba(0,0,0,0.28)] overflow-hidden ahusa-deadline-calendar" data-deadline-picker>
        <div class="flex items-center justify-between px-3 py-2 border-b border-[var(--dl-dbdr)] bg-[var(--dl-bg)]">
            <button type="button" data-deadline-prev class="w-8 h-8 rounded-lg flex items-center justify-center text-[var(--dl-muted)] hover:bg-[var(--dl-hov)] hover:text-[#f16700]" aria-label="Previous month">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M12.5 15L7.5 10L12.5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
            <div class="text-[13px] font-extrabold text-[var(--i-clr)]" data-deadline-month></div>
            <button type="button" data-deadline-next class="w-8 h-8 rounded-lg flex items-center justify-center text-[var(--dl-muted)] hover:bg-[var(--dl-hov)] hover:text-[#f16700]" aria-label="Next month">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none"><path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </button>
        </div>
        <div class="ahusa-deadline-calendar__body">
            <div class="ahusa-deadline-calendar__date">
                <div class="ahusa-deadline-calendar__weekdays">
                    @foreach (['Su','Mo','Tu','We','Th','Fr','Sa'] as $day)
                        <span>{{ $day }}</span>
                    @endforeach
                </div>
                <div data-deadline-days></div>
            </div>
            <div class="ahusa-deadline-calendar__time">
                <div class="px-2 py-2 text-center text-[12px] font-extrabold text-[var(--i-clr)] border-b border-[var(--dl-dbdr)]">Time</div>
                <div data-deadline-times></div>
            </div>
        </div>
    </div>
</div>
