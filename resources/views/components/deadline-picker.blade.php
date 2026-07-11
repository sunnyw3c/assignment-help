{{--
    Shared Deadline Picker Component
    ─────────────────────────────────
    Usage (Livewire):
        <x-deadline-picker wire:model.live="deadline" :value="$deadline" />

    Usage (plain form / creative-hero):
        <x-deadline-picker name="deadline" class="your-extra-classes" />

    Props:
        name  – hidden input name (default: "deadline")
        value – initial ISO datetime string (default: null)

    The Alpine logic lives in resources/js/app.js as Alpine.data('deadlinePicker').
    CSS tokens (--dl-*, --i-*) are provided by the parent section's style block.
--}}
@props([
    'name'  => 'deadline',
    'value' => null,
])

<div x-data="deadlinePicker(@js($value))"
     class="relative w-full min-w-0"
     @click.away="open = false">

    {{-- Hidden input – synced by Alpine; also triggers Livewire wire:model if passed --}}
    <input type="hidden"
           name="{{ $name }}"
           data-deadline-input
           x-model="selected"
           {{ $attributes->whereStartsWith('wire:') }}>

    {{-- Trigger button --}}
    <button type="button"
            @click="open = !open"
            class="flex items-center justify-between w-full h-[41px] px-3 cursor-pointer select-none
                   border-[1.5px] border-[var(--dl-bdr,#e2e8f0)] rounded-[10px]
                   bg-[var(--dl-bg,#f8fafc)]
                   transition-[border-color,box-shadow] duration-[180ms]
                   hover:border-[#f16700] hover:shadow-[0_0_0_3px_rgba(241,103,0,0.10)]
                   focus:border-[#f16700] focus:shadow-[0_0_0_3px_rgba(241,103,0,0.13)] focus:outline-none">
        <span class="text-[12.5px] font-semibold text-[var(--dl-lbl,#94a3b8)]">Deadline</span>
        <span class="flex items-center justify-end gap-[5px] min-w-0 text-[12.5px] font-semibold text-[var(--i-clr,#1e293b)]">
            <span class="max-w-[170px] max-sm:max-w-[145px] text-right truncate"
                  x-text="formattedLabel">Select deadline</span>
            <svg class="flex-shrink-0 transition-transform duration-200"
                 :class="open ? 'rotate-180' : ''"
                 width="13" height="13" viewBox="0 0 20 20" fill="none">
                <path d="M5 7.5L10 12.5L15 7.5" stroke="currentColor"
                      stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>
    </button>

    {{-- Calendar dropdown --}}
    <div x-show="open"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="absolute top-[calc(100%+4px)] left-0 z-[60]
                w-[min(430px,calc(100vw-28px))]
                rounded-[14px] bg-[var(--dl-dbg,#ffffff)]
                shadow-[0_18px_48px_rgba(0,0,0,0.28)] overflow-hidden"
         style="display:none;">

        {{-- Month nav header --}}
        <div class="flex items-center justify-between px-3 py-2 border-b border-[var(--dl-dbdr,#e2e8f0)] bg-[var(--dl-bg,#f8fafc)]">
            <button type="button" @click="prevMonth()"
                    class="w-8 h-8 rounded-lg flex items-center justify-center text-[var(--dl-muted,#64748b)] hover:bg-[var(--dl-hov,#fff5ed)] hover:text-[#f16700]"
                    aria-label="Previous month">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                    <path d="M12.5 15L7.5 10L12.5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="text-[13px] font-extrabold text-[var(--i-clr,#1e293b)]" x-text="monthLabel"></div>
            <button type="button" @click="nextMonth()"
                    class="w-8 h-8 rounded-lg flex items-center justify-center text-[var(--dl-muted,#64748b)] hover:bg-[var(--dl-hov,#fff5ed)] hover:text-[#f16700]"
                    aria-label="Next month">
                <svg width="16" height="16" viewBox="0 0 20 20" fill="none">
                    <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>

        {{-- Body: calendar + time --}}
        <div class="grid" style="grid-template-columns: minmax(0,1fr) 118px;">

            {{-- Date grid --}}
            <div class="min-w-0 p-[10px_12px_12px]">
                {{-- Weekday headers --}}
                <div class="grid grid-cols-7 gap-1 mb-[6px]">
                    @foreach (['Su','Mo','Tu','We','Th','Fr','Sa'] as $day)
                        <span class="flex items-center justify-center h-[1.65rem]
                                     text-[11px] font-extrabold text-[var(--dl-muted,#64748b)] uppercase">
                            {{ $day }}
                        </span>
                        
                    @endforeach
                </div>
                {{-- Day buttons --}}
                <div class="grid grid-cols-7 gap-1">
                    <template x-for="(d, idx) in daysInMonth" :key="idx">
                        <div class="flex items-center justify-center" style="height:1.9rem;">
                            <template x-if="d === null"><span class="w-full h-full"></span></template>
                            <template x-if="d !== null">
                                <button type="button"
                                        @click="selectDate(d)"
                                        :disabled="isDateDisabled(d)"
                                        class="flex items-center justify-center w-full h-full rounded-lg
                                               text-[12px] font-bold leading-none border-0
                                               transition-[background,color] duration-150"
                                        :class="isSameDate(d)
                                            ? 'bg-[#f16700] text-white is-selected'
                                            : (isDateDisabled(d)
                                                ? 'text-[var(--dl-lbl,#94a3b8)] opacity-40 cursor-not-allowed'
                                                : 'text-[var(--dl-muted,#64748b)] hover:bg-[var(--dl-hov,#fff5ed)] hover:text-[#f16700] cursor-pointer')">
                                    <span x-text="d.getDate()"></span>
                                </button>
                            </template>
                        </div>
                    </template>
                </div>
            </div>

            {{-- Time column --}}
            <div class="border-l border-[var(--dl-dbdr,#e2e8f0)] bg-[var(--dl-dbg,#ffffff)]">
                <div class="px-2 py-2 text-center text-[12px] font-extrabold text-[var(--i-clr,#1e293b)]
                             border-b border-[var(--dl-dbdr,#e2e8f0)]">Time</div>
                <div class="grid grid-cols-1 max-h-[224px] overflow-y-auto
                             scrollbar-thin [scrollbar-color:#f16700_transparent]
                             [&::-webkit-scrollbar]:w-[7px]
                             [&::-webkit-scrollbar-thumb]:bg-[#f16700]
                             [&::-webkit-scrollbar-thumb]:rounded-full"
                     x-ref="timeScroll">
                    <template x-for="t in times" :key="t.hour + '-' + t.minute">
                        <button type="button"
                                @click="selectTime(t.hour, t.minute)"
                                :disabled="isTimeDisabled(t.hour, t.minute)"
                                class="flex items-center justify-center w-full min-h-[29px] px-[0.65rem]
                                       border-0 text-[12px] font-bold leading-none whitespace-nowrap
                                       transition-[background,color] duration-150"
                                :class="isTimeSelected(t.hour, t.minute)
                                    ? 'bg-[#f16700] text-white is-selected'
                                    : (isTimeDisabled(t.hour, t.minute)
                                        ? 'text-[var(--dl-lbl,#94a3b8)] opacity-40 cursor-not-allowed'
                                        : 'text-[var(--dl-muted,#64748b)] hover:bg-[var(--dl-hov,#fff5ed)] hover:text-[#f16700] cursor-pointer')">
                            <span x-text="t.label"></span>
                        </button>
                    </template>
                </div>
            </div>
        </div>
    </div>

    {{-- Responsive: on very small screens stack time below calendar --}}
    <style>
        @media (max-width: 420px) {
            [x-data^="deadlinePicker"] > div[x-show] {
                width: min(330px, calc(100vw - 28px));
            }
            [x-data^="deadlinePicker"] > div[x-show] .grid[style*="118px"] {
                grid-template-columns: 1fr !important;
            }
            [x-data^="deadlinePicker"] [x-ref="timeScroll"] {
                grid-template-columns: repeat(3, minmax(0,1fr));
                max-height: 84px;
            }
        }
    </style>
</div>
