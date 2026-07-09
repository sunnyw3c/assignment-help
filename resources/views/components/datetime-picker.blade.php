@props([
    'name'        => 'deadline',
    'id'          => 'dtp_' . uniqid(),
    'value'       => '',
    'min'         => '',
    'required'    => false,
    'label'       => 'Deadline',
    'placeholder' => 'Select date & time',
    'class'       => '',
])

{{-- Hidden native input (submitted with the form) --}}
<input type="hidden" name="{{ $name }}" id="{{ $id }}-hidden" value="{{ $value }}" {{ $required ? 'required' : '' }}>

<div class="ahusa-dtp {{ $class }}"
     data-dtp-id="{{ $id }}"
     data-dtp-min="{{ $min ?: now()->format('Y-m-d\TH:i') }}"
     data-dtp-value="{{ $value }}">

    {{-- Trigger button --}}
    <button type="button" class="ahusa-dtp__trigger" aria-haspopup="dialog" aria-expanded="false">
        <span class="ahusa-dtp__trigger-icon">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
        </span>
        <span class="ahusa-dtp__trigger-text" data-dtp-label>{{ $placeholder }}</span>
        <span class="ahusa-dtp__trigger-badge" data-dtp-badge></span>
        <svg class="ahusa-dtp__trigger-caret" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9"/>
        </svg>
    </button>

    {{-- Dropdown panel --}}
    <div class="ahusa-dtp__panel" role="dialog" aria-label="Date and time picker" aria-hidden="true">
        <div class="ahusa-dtp__inner">

            {{-- Calendar --}}
            <div class="ahusa-dtp__calendar">
                <div class="ahusa-dtp__cal-nav">
                    <button type="button" class="ahusa-dtp__nav-btn" data-dtp-prev aria-label="Previous month">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
                    </button>
                    <span class="ahusa-dtp__cal-title" data-dtp-month-label></span>
                    <button type="button" class="ahusa-dtp__nav-btn" data-dtp-next aria-label="Next month">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"/></svg>
                    </button>
                </div>
                <div class="ahusa-dtp__cal-weekdays">
                    <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
                </div>
                <div class="ahusa-dtp__cal-days" data-dtp-days></div>
            </div>

            <div class="ahusa-dtp__divider"></div>

            {{-- Time --}}
            <div class="ahusa-dtp__time">
                <p class="ahusa-dtp__time-title">Time</p>
                <div class="ahusa-dtp__time-display">
                    <span data-dtp-hr-display>--</span>:<span data-dtp-min-display>--</span>
                    <span class="ahusa-dtp__ampm-display" data-dtp-ampm-display>AM</span>
                </div>
                <div class="ahusa-dtp__time-cols">
                    <div class="ahusa-dtp__time-col">
                        <span class="ahusa-dtp__col-label">Hour</span>
                        <div class="ahusa-dtp__scroll" data-dtp-hours></div>
                    </div>
                    <div class="ahusa-dtp__time-col">
                        <span class="ahusa-dtp__col-label">Min</span>
                        <div class="ahusa-dtp__scroll" data-dtp-minutes></div>
                    </div>
                    <div class="ahusa-dtp__time-col">
                        <span class="ahusa-dtp__col-label">Period</span>
                        <div class="ahusa-dtp__ampm" data-dtp-ampm>
                            <button type="button" data-period="AM" class="ahusa-dtp__period-btn">AM</button>
                            <button type="button" data-period="PM" class="ahusa-dtp__period-btn">PM</button>
                        </div>
                    </div>
                </div>
                <div class="ahusa-dtp__urgency" data-dtp-urgency></div>
                <div class="ahusa-dtp__actions">
                    <button type="button" class="ahusa-dtp__btn-clear" data-dtp-clear>Clear</button>
                    <button type="button" class="ahusa-dtp__btn-apply" data-dtp-apply>Apply</button>
                </div>
            </div>
        </div>
    </div>
</div>
