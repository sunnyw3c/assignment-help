<div class="w-full min-w-0 border-[1.5px] border-[var(--desc-bdr)] rounded-[10px] bg-[var(--desc-bg)] overflow-hidden flex flex-col flex-1 min-h-[145px] transition-[border-color,box-shadow] duration-[180ms] focus-within:border-[#f16700] focus-within:shadow-[0_0_0_3px_rgba(241,103,0,0.13)]">
    <textarea placeholder="Description (Write/Attach)" data-base-description class="flex-1 resize-none px-3 py-[10px] border-0 bg-transparent text-[13px] text-[var(--desc-clr)] placeholder:text-[var(--i-ph)] leading-[1.55] min-h-[90px] outline-none shadow-none"></textarea>
    <div class="flex flex-col gap-2 px-3 py-[6px] border-t border-t-[var(--att-bdr)] bg-[var(--att-bg)]">
        <div class="flex items-center gap-2">
            <button type="button" data-attach class="flex items-center gap-[5px] bg-transparent border-0 p-0 text-[11.5px] font-bold text-[var(--att-clr)] cursor-pointer outline-none transition-colors duration-150 hover:text-[#f16700]">
                <svg class="block" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                    <path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"/>
                </svg>
                Attach file
            </button>
            <span class="hidden text-[11px] text-[#f16700] font-bold bg-[rgba(241,103,0,0.10)] px-2 py-0.5 rounded-full" data-file-count>0 file(s)</span>
        </div>
        <div class="flex flex-col gap-1" data-file-list></div>
    </div>
</div>
