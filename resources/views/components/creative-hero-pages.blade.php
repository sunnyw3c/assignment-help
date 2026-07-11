<div class="w-full min-w-0 h-[41px] border-[1.5px] border-[var(--pg-bdr)] rounded-[10px] bg-[var(--pg-bg)] px-2 flex items-center justify-between gap-2 transition-[border-color,box-shadow] duration-[180ms]">
    <div class="min-w-0 flex items-baseline gap-1.5">
        <span class="text-[9.5px] font-bold text-[var(--pg-lbl)] uppercase tracking-[0.06em] shrink-0">Pages</span>
        <span class="text-[10.5px] font-bold text-[#f16700] bg-[rgba(241,103,0,0.10)] px-1.5 py-0.5 rounded-full truncate" data-words-value>250 words</span>
    </div>
    <div class="h-8 px-1 flex items-center gap-1 rounded-[8px] border border-[var(--pg-btn-bdr)] bg-[var(--pg-btn-bg)] shrink-0">
        <button type="button" data-page-minus class="w-7 h-7 shrink-0 flex items-center justify-center rounded-[6px] text-[var(--pg-btn-clr)] text-[15px] font-bold cursor-pointer outline-none transition-all duration-150 hover:!bg-[#f16700] hover:!text-white">-</button>
        <span class="w-7 text-center text-[14px] font-extrabold text-[var(--pg-num)]" data-pages-value>1</span>
        <button type="button" data-page-plus class="w-7 h-7 shrink-0 flex items-center justify-center rounded-[6px] text-[var(--pg-btn-clr)] text-[15px] font-bold cursor-pointer outline-none transition-all duration-150 hover:!bg-[#f16700] hover:!text-white">+</button>
    </div>
</div>
