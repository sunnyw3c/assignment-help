/**
 * AHUSA DateTime Picker — datetime-picker.js
 * Vanilla JS, zero dependencies. MUI-inspired UX.
 * Auto-initialises all [data-dtp-id] elements on DOMContentLoaded.
 */

class AhusaDtp {
    constructor(root) {
        this.root     = root;
        this.id       = root.dataset.dtpId;
        this.minStr   = root.dataset.dtpMin || '';
        this.minDate  = this.minStr ? new Date(this.minStr) : null;

        // State
        this.viewYear  = 0;
        this.viewMonth = 0;
        this.selYear   = null;
        this.selMonth  = null;
        this.selDay    = null;
        this.selHour   = null;   // 0–23
        this.selMinute = null;
        this.ampm      = 'AM';

        // Elements
        this.trigger    = root.querySelector('.ahusa-dtp__trigger');
        this.panel      = root.querySelector('.ahusa-dtp__panel');
        this.label      = root.querySelector('[data-dtp-label]');
        this.badge      = root.querySelector('[data-dtp-badge]');
        this.hiddenInput= document.getElementById(`${this.id}-hidden`);
        this.monthLabel = root.querySelector('[data-dtp-month-label]');
        this.daysGrid   = root.querySelector('[data-dtp-days]');
        this.hoursEl    = root.querySelector('[data-dtp-hours]');
        this.minsEl     = root.querySelector('[data-dtp-minutes]');
        this.ampmEl     = root.querySelector('[data-dtp-ampm]');
        this.hrDisplay  = root.querySelector('[data-dtp-hr-display]');
        this.minDisplay = root.querySelector('[data-dtp-min-display]');
        this.ampmDisplay= root.querySelector('[data-dtp-ampm-display]');
        this.urgency    = root.querySelector('[data-dtp-urgency]');

        this._init();
    }

    _init() {
        const now = new Date();
        this.viewYear  = now.getFullYear();
        this.viewMonth = now.getMonth();

        // Restore persisted value
        const saved = this.hiddenInput?.value;
        if (saved) this._parseAndApply(saved);

        this._buildHours();
        this._buildMinutes();
        this._renderCalendar();

        // Events
        this.trigger.addEventListener('click', (e) => { e.stopPropagation(); this._toggle(); });
        this.root.querySelector('[data-dtp-prev]').addEventListener('click', () => this._shiftMonth(-1));
        this.root.querySelector('[data-dtp-next]').addEventListener('click', () => this._shiftMonth(1));
        this.root.querySelector('[data-dtp-apply]').addEventListener('click', () => this._apply());
        this.root.querySelector('[data-dtp-clear]').addEventListener('click', () => this._clear());

        this.hoursEl.addEventListener('click', (e) => {
            const btn = e.target.closest('.ahusa-dtp__time-item');
            if (!btn) return;
            this.selHour = parseInt(btn.dataset.val, 10);
            this.ampm = this.selHour < 12 ? 'AM' : 'PM';
            this._refreshTimeUI();
            // Auto-close once date + time are both chosen
            if (this.selYear !== null && this.selMinute !== null) {
                this._apply();
            }
        });
        this.minsEl.addEventListener('click', (e) => {
            const btn = e.target.closest('.ahusa-dtp__time-item');
            if (!btn) return;
            this.selMinute = parseInt(btn.dataset.val, 10);
            this._refreshTimeUI();
            // Auto-close once date + time are both chosen
            if (this.selYear !== null && this.selHour !== null) {
                this._apply();
            }
        });
        this.ampmEl.addEventListener('click', (e) => {
            const btn = e.target.closest('[data-period]');
            if (!btn) return;
            const newAmpm = btn.dataset.period;
            if (newAmpm !== this.ampm) {
                this.ampm = newAmpm;
                if (this.selHour !== null) {
                    if (this.ampm === 'PM' && this.selHour < 12) this.selHour += 12;
                    else if (this.ampm === 'AM' && this.selHour >= 12) this.selHour -= 12;
                }
                this._refreshTimeUI();
            }
        });

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!this.root.contains(e.target)) this._close();
        });
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') this._close();
        });
    }

    // ── Parsing ──────────────────────────────────────────────────
    _parseAndApply(str) {
        // Expects "YYYY-MM-DDTHH:mm"
        const d = new Date(str);
        if (isNaN(d.getTime())) return;
        this.selYear   = d.getFullYear();
        this.selMonth  = d.getMonth();
        this.selDay    = d.getDate();
        this.selHour   = d.getHours();
        this.selMinute = d.getMinutes();
        this.ampm      = this.selHour < 12 ? 'AM' : 'PM';
        this.viewYear  = this.selYear;
        this.viewMonth = this.selMonth;
    }

    // ── Calendar ─────────────────────────────────────────────────
    _renderCalendar() {
        const MONTHS = ['January','February','March','April','May','June',
                        'July','August','September','October','November','December'];
        this.monthLabel.textContent = `${MONTHS[this.viewMonth]} ${this.viewYear}`;

        const firstDay  = new Date(this.viewYear, this.viewMonth, 1).getDay();
        const daysInMo  = new Date(this.viewYear, this.viewMonth + 1, 0).getDate();
        const daysInPrev= new Date(this.viewYear, this.viewMonth, 0).getDate();
        const today     = new Date();
        const todayStr  = `${today.getFullYear()}-${today.getMonth()}-${today.getDate()}`;

        let html = '';
        // Prev month fill
        for (let i = firstDay - 1; i >= 0; i--) {
            const d = daysInPrev - i;
            html += `<button type="button" class="ahusa-dtp__day is-other-month is-disabled" tabindex="-1">${d}</button>`;
        }
        // Current month
        for (let d = 1; d <= daysInMo; d++) {
            const cellDate  = new Date(this.viewYear, this.viewMonth, d);
            const cellStr   = `${this.viewYear}-${this.viewMonth}-${d}`;
            const isToday   = cellStr === todayStr;
            const isPast    = this.minDate && cellDate < new Date(this.minDate.getFullYear(), this.minDate.getMonth(), this.minDate.getDate());
            const isSel     = this.selYear === this.viewYear && this.selMonth === this.viewMonth && this.selDay === d;
            let cls = 'ahusa-dtp__day';
            if (isToday)  cls += ' is-today';
            if (isPast)   cls += ' is-disabled';
            if (isSel)    cls += ' is-selected';
            html += `<button type="button" class="${cls}" data-y="${this.viewYear}" data-m="${this.viewMonth}" data-d="${d}" ${isPast ? 'disabled' : ''}>${d}</button>`;
        }
        // Next month fill
        const remaining = 42 - (firstDay + daysInMo);
        for (let d = 1; d <= remaining; d++) {
            html += `<button type="button" class="ahusa-dtp__day is-other-month is-disabled" tabindex="-1">${d}</button>`;
        }

        this.daysGrid.innerHTML = html;
        this.daysGrid.querySelectorAll('.ahusa-dtp__day:not(.is-disabled)').forEach(btn => {
            btn.addEventListener('click', () => {
                this.selYear  = parseInt(btn.dataset.y, 10);
                this.selMonth = parseInt(btn.dataset.m, 10);
                this.selDay   = parseInt(btn.dataset.d, 10);
                this._renderCalendar();
                // Default time to now if unset
                if (this.selHour === null) {
                    const n = new Date();
                    this.selHour   = n.getHours();
                    this.selMinute = n.getMinutes();
                    this.ampm      = this.selHour < 12 ? 'AM' : 'PM';
                    this._refreshTimeUI();
                }
                // Auto-close once date + time are both chosen
                if (this.selHour !== null && this.selMinute !== null) {
                    this._apply();
                }
            });
        });
    }

    _shiftMonth(delta) {
        this.viewMonth += delta;
        if (this.viewMonth > 11) { this.viewMonth = 0; this.viewYear++; }
        if (this.viewMonth < 0)  { this.viewMonth = 11; this.viewYear--; }
        this._renderCalendar();
    }

    // ── Time lists ───────────────────────────────────────────────
    _buildHours() {
        let html = '';
        for (let h = 0; h < 24; h++) {
            const display = h === 0 ? '12' : h <= 12 ? String(h) : String(h - 12);
            const period  = h < 12 ? 'AM' : 'PM';
            html += `<button type="button" class="ahusa-dtp__time-item" data-val="${h}">${display.padStart(2,'0')} <small style="opacity:.5;font-size:.6em">${period}</small></button>`;
        }
        this.hoursEl.innerHTML = html;
    }

    _buildMinutes() {
        let html = '';
        for (let m = 0; m < 60; m += 5) {
            html += `<button type="button" class="ahusa-dtp__time-item" data-val="${m}">${String(m).padStart(2,'0')}</button>`;
        }
        this.minsEl.innerHTML = html;
    }

    _refreshTimeUI() {
        // Hour display
        if (this.selHour !== null) {
            const h12 = this.selHour === 0 ? 12 : this.selHour > 12 ? this.selHour - 12 : this.selHour;
            this.hrDisplay.textContent  = String(h12).padStart(2, '0');
            this.ampmDisplay.textContent= this.ampm;
        }
        if (this.selMinute !== null) {
            this.minDisplay.textContent = String(this.selMinute).padStart(2, '0');
        }

        // Highlight hour
        this.hoursEl.querySelectorAll('.ahusa-dtp__time-item').forEach(btn => {
            btn.classList.toggle('is-selected', parseInt(btn.dataset.val, 10) === this.selHour);
        });
        // Highlight minute
        this.minsEl.querySelectorAll('.ahusa-dtp__time-item').forEach(btn => {
            btn.classList.toggle('is-selected', parseInt(btn.dataset.val, 10) === this.selMinute);
        });
        // Highlight AM/PM
        this.ampmEl.querySelectorAll('[data-period]').forEach(btn => {
            btn.classList.toggle('is-active', btn.dataset.period === this.ampm);
        });

        // Scroll selected into view
        const activeHr  = this.hoursEl.querySelector('.is-selected');
        const activeMn  = this.minsEl.querySelector('.is-selected');
        if (activeHr) activeHr.scrollIntoView({ block: 'nearest', behavior: 'smooth' });
        if (activeMn) activeMn.scrollIntoView({ block: 'nearest', behavior: 'smooth' });

        this._updateUrgency();
    }

    // ── Urgency ──────────────────────────────────────────────────
    _updateUrgency() {
        if (!this.selYear || this.selHour === null || this.selMinute === null) {
            this.urgency.textContent = '';
            this.urgency.className   = 'ahusa-dtp__urgency';
            this.badge.textContent   = '';
            this.badge.className     = 'ahusa-dtp__trigger-badge';
            return;
        }
        const sel   = new Date(this.selYear, this.selMonth, this.selDay, this.selHour, this.selMinute);
        const diff  = sel - Date.now();
        const hrs   = diff / 36e5;

        let level, msg, badge;
        if (diff < 0)    { level='danger'; msg='⚠ Deadline has passed'; badge='Past'; }
        else if (hrs<=6) { level='danger'; msg=`🔥 Only ${Math.ceil(hrs*60)} min left`; badge='URGENT'; }
        else if (hrs<=24){ level='warn';   msg=`⏱ ${Math.round(hrs)}h remaining`; badge=`${Math.round(hrs)}h`; }
        else if (hrs<=72){ level='warn';   msg=`📅 ${Math.ceil(hrs/24)} days remaining`; badge=`${Math.ceil(hrs/24)}d`; }
        else             { level='ok';     msg=`✓ ${Math.ceil(hrs/24)} days until deadline`; badge=`${Math.ceil(hrs/24)}d`; }

        this.urgency.textContent = msg;
        this.urgency.className   = `ahusa-dtp__urgency urgency--${level}`;
        this.badge.textContent   = badge;
        this.badge.className     = `ahusa-dtp__trigger-badge badge--${level}`;
    }

    // ── Open / Close ─────────────────────────────────────────────
    _toggle() { this.root.classList.contains('ahusa-dtp--open') ? this._close() : this._open(); }

    _open() {
        this.root.classList.add('ahusa-dtp--open');
        this.trigger.setAttribute('aria-expanded', 'true');
        this.panel.setAttribute('aria-hidden', 'false');
        this._renderCalendar();
        this._refreshTimeUI();
    }

    _close() {
        this.root.classList.remove('ahusa-dtp--open');
        this.trigger.setAttribute('aria-expanded', 'false');
        this.panel.setAttribute('aria-hidden', 'true');
    }

    // ── Apply / Clear ────────────────────────────────────────────
    _apply() {
        if (!this.selYear || this.selHour === null || this.selMinute === null) return;
        const d = new Date(this.selYear, this.selMonth, this.selDay, this.selHour, this.selMinute);
        // Format as "YYYY-MM-DDTHH:mm"
        const pad = n => String(n).padStart(2,'0');
        const val = `${d.getFullYear()}-${pad(d.getMonth()+1)}-${pad(d.getDate())}T${pad(d.getHours())}:${pad(d.getMinutes())}`;
        if (this.hiddenInput) this.hiddenInput.value = val;

        // Friendly label on trigger
        const opts = { weekday:'short', month:'short', day:'numeric', hour:'numeric', minute:'2-digit', hour12:true };
        this.label.textContent = d.toLocaleString('en-US', opts);

        // Dispatch change event so Alpine / other listeners pick it up
        this.hiddenInput?.dispatchEvent(new Event('input', { bubbles: true }));
        this.hiddenInput?.dispatchEvent(new Event('change', { bubbles: true }));

        this._updateUrgency();
        this._close();
    }

    _clear() {
        this.selYear = this.selMonth = this.selDay = this.selHour = this.selMinute = null;
        this.ampm = 'AM';
        if (this.hiddenInput) this.hiddenInput.value = '';
        this.label.textContent = this.root.closest('[data-dtp-id]')?.dataset.dtpPlaceholder || 'Select date & time';
        this.hrDisplay.textContent  = '--';
        this.minDisplay.textContent = '--';
        this._renderCalendar();
        this._refreshTimeUI();
        this.hiddenInput?.dispatchEvent(new Event('change', { bubbles: true }));
    }
}

// Auto-init
function initAhusaDtp() {
    document.querySelectorAll('.ahusa-dtp[data-dtp-id]').forEach(el => {
        if (!el._dtpInstance) {
            el._dtpInstance = new AhusaDtp(el);
        }
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAhusaDtp);
} else {
    initAhusaDtp();
}

// Re-init after Livewire navigations
document.addEventListener('livewire:navigated', initAhusaDtp);
document.addEventListener('livewire:load', initAhusaDtp);

export { AhusaDtp, initAhusaDtp };
