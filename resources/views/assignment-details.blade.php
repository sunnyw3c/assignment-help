@extends('layouts.app')

@section('content')

    <div class="min-h-screen py-6 bg-slate-50 dark:bg-slate-950 text-slate-800 dark:text-slate-200 transition-colors duration-300 relative overflow-hidden" 
         x-data="{
            assignment: {{ Js::from($assignment) }},
            loading: false,
            activeTab: 'details', {{-- details, files, chat --}}
            messages: [],
            newMessage: '',
            messageLoading: false,
            apiError: null,
            fileUploading: false,
            orderNumber: '{{ $order_number }}',

            editing: false,
            saving: false,
            saveError: null,
            saveNotice: null,
            draft: {},
            priceQuote: null,
            confirmingPrice: false,

            get canEdit() {
                return !!this.assignment?.is_editable;
            },

            startEdit() {
                const req = this.parseRequirements(this.assignment.specific_requirements);
                this.draft = {
                    pages: this.assignment.pages,
                    description: this.assignment.description || '',
                    academic_level: this.assignment.academic_level || '',
                    subject: this.assignment.subject || '',
                    requirements: (req && req.type === 'json') ? { ...req.data } : {},
                };
                this.saveError = null;
                this.saveNotice = null;
                this.priceQuote = null;
                this.confirmingPrice = false;
                this.editing = true;
                this.refreshQuote();
            },

            cancelEdit() {
                this.editing = false;
                this.draft = {};
                this.saveError = null;
                this.priceQuote = null;
                this.confirmingPrice = false;
            },

            /* Live quote for the pricing fields, shown while editing. */
            async refreshQuote() {
                if (!this.editing || !this.assignment) return;
                try {
                    const csrfToken = document.querySelector('meta[name=\'csrf-token\']')?.getAttribute('content');
                    const response = await fetch(`/api/assignments/${this.assignment.id}/price-preview`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        credentials: 'same-origin',
                        body: JSON.stringify({
                            pages: this.draft.pages,
                            academic_level: this.draft.academic_level,
                            subject: this.draft.subject,
                        }),
                    });
                    if (!response.ok) return;
                    this.priceQuote = await response.json();
                } catch (error) {
                    console.error('Error previewing price:', error);
                }
            },

            async saveEdit(confirmed = false) {
                this.saving = true;
                this.saveError = null;
                try {
                    const csrfToken = document.querySelector('meta[name=\'csrf-token\']')?.getAttribute('content');
                    const response = await fetch(`/api/assignments/${this.assignment.id}`, {
                        method: 'PATCH',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        credentials: 'same-origin',
                        body: JSON.stringify({ ...this.draft, confirm_price_change: confirmed }),
                    });
                    const payload = await response.json();

                    // Price moved: show the new total and wait for confirmation.
                    if (response.status === 409 && payload.requires_confirmation) {
                        this.priceQuote = payload.price;
                        this.confirmingPrice = true;
                        return;
                    }
                    if (!response.ok) {
                        this.saveError = payload.message || 'Could not save your changes.';
                        return;
                    }
                    if (payload.data) this.assignment = payload.data;
                    this.editing = false;
                    this.confirmingPrice = false;
                    this.draft = {};
                    this.saveNotice = 'Your brief has been updated.';
                    setTimeout(() => { this.saveNotice = null; }, 4000);
                } catch (error) {
                    console.error('Error saving assignment:', error);
                    this.saveError = 'Connection error. Please try again.';
                } finally {
                    this.saving = false;
                }
            },

            async fetchAssignment() {
                try {
                    const response = await fetch(`/api/assignments?order_number=${this.orderNumber}`, {
                        headers: { 'Accept': 'application/json', 'X-Requested-With': 'XMLHttpRequest' },
                        credentials: 'same-origin',
                    });
                    if (!response.ok) throw new Error(`Request failed (${response.status})`);
                    const data = await response.json();
                    const fetched = Array.isArray(data.data) ? data.data : [];
                    if (fetched.length > 0) this.assignment = fetched[0];
                } catch (error) {
                    console.error('Error refreshing assignment details:', error);
                }
            },

            async changeTab(tab) {
                this.activeTab = tab;
                if (tab === 'chat') {
                    await this.fetchMessages();
                }
            },
            
            async fetchMessages() {
                if (!this.assignment) return;
                this.messageLoading = true;
                try {
                    const response = await fetch(`/api/assignments/${this.assignment.id}/messages`);
                    const data = await response.json();
                    this.messages = Array.isArray(data.data) ? data.data : [];
                    this.$nextTick(() => {
                        this.scrollToBottom();
                    });
                } catch (error) {
                    console.error('Error fetching messages:', error);
                    this.messages = [];
                } finally {
                    this.messageLoading = false;
                }
            },
            
            async sendMessage() {
                if (!this.newMessage.trim() || !this.assignment) return;
                try {
                    const csrfToken = document.querySelector('meta[name=\'csrf-token\']')?.getAttribute('content');
                    const response = await fetch(`/api/assignments/${this.assignment.id}/messages`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({ body: this.newMessage })
                    });
                    const data = await response.json();
                    if (data.data) {
                        this.messages.push(data.data);
                        this.newMessage = '';
                        this.$nextTick(() => {
                            this.scrollToBottom();
                        });
                    }
                } catch (error) {
                    console.error('Error sending message:', error);
                }
            },
            
            scrollToBottom() {
                const container = this.$refs.messageContainer;
                if (container) container.scrollTop = container.scrollHeight;
            },
            
            getStatusGradient(status) {
                if (!status) return 'bg-slate-500 text-white';
                const s = status.toLowerCase();
                if (s === 'completed') return 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20';
                if (s === 'in progress' || s === 'assigned') return 'bg-orange-500/10 text-[#f16700] dark:text-orange-400 border border-orange-500/20';
                if (s === 'new' || s === 'pending') return 'bg-amber-500/10 text-amber-600 dark:text-amber-400 border border-amber-500/20';
                return 'bg-slate-500/10 text-slate-600 dark:text-slate-400 border border-slate-500/20';
            },
            
            parseRequirements(req) {
                if (!req) return null;
                try {
                    if (req.trim().startsWith('{')) {
                        const parsed = JSON.parse(req);
                        return { type: 'json', data: parsed };
                    }
                } catch (e) {}
                return { type: 'text', data: req };
            },
            
            formatKey(key) {
                return key.split('_').map(word => word.charAt(0).toUpperCase() + word.slice(1)).join(' ');
            },
            
            getFileIcon(name) {
                if (!name) return '📄';
                const ext = name.split('.').pop().toLowerCase();
                if (['pdf'].includes(ext)) return '📕';
                if (['doc', 'docx'].includes(ext)) return '📘';
                if (['xls', 'xlsx'].includes(ext)) return '📗';
                if (['ppt', 'pptx'].includes(ext)) return '📙';
                if (['zip', 'rar', 'tar', 'gz'].includes(ext)) return '📦';
                if (['png', 'jpg', 'jpeg', 'gif', 'svg'].includes(ext)) return '🖼️';
                return '📄';
            },
            
            triggerUpload() {
                this.$refs.fileInput.click();
            },
            
            async uploadFiles(event) {
                const selectedFiles = event.target.files;
                if (selectedFiles.length === 0 || !this.assignment) return;

                this.fileUploading = true;
                const formData = new FormData();
                
                for (let i = 0; i < selectedFiles.length; i++) {
                    formData.append('files[]', selectedFiles[i]);
                }

                try {
                    const csrfToken = document.querySelector('meta[name=\'csrf-token\']')?.getAttribute('content');
                    const response = await fetch(`/api/assignments/${this.assignment.id}/upload-file`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json'
                        },
                        body: formData
                    });

                    const data = await response.json();
                    if (data.success) {
                        this.fetchAssignment();
                    } else {
                        alert(data.message || 'Upload failed');
                    }
                } catch (error) {
                    console.error('Error uploading files:', error);
                    alert('Connection error during upload');
                } finally {
                    this.fileUploading = false;
                    event.target.value = '';
                }
            }
            ,

            /* ---- presentation helpers (added for the redesigned view) ---- */

            get statusStep() {
                const s = (this.assignment?.status || '').toLowerCase();
                if (s === 'completed') return 3;
                if (['in progress', 'assigned'].includes(s)) return 2;
                return 1;
            },

            get progressPct() {
                return { 1: 8, 2: 55, 3: 100 }[this.statusStep];
            },

            get deadlineDate() {
                if (!this.assignment?.deadline) return null;
                const d = new Date(String(this.assignment.deadline).replace(' ', 'T'));
                return isNaN(d) ? null : d;
            },

            get daysLeft() {
                const d = this.deadlineDate;
                if (!d) return null;
                return Math.ceil((d - new Date()) / 86400000);
            },

            get dueLabel() {
                const n = this.daysLeft;
                if (n === null) return '—';
                if (n < 0) return `${Math.abs(n)}d overdue`;
                if (n === 0) return 'Due today';
                if (n === 1) return '1 day left';
                return `${n} days left`;
            },

            get dueTone() {
                const n = this.daysLeft;
                if (n === null) return 'neutral';
                if (n < 0) return 'danger';
                if (n <= 2) return 'warn';
                return 'ok';
            },

            get deadlinePretty() {
                const d = this.deadlineDate;
                if (!d) return String(this.assignment?.deadline || '—');
                return d.toLocaleDateString(undefined, { month: 'short', day: 'numeric', year: 'numeric' });
            },

            get paidPct() {
                const budget = parseFloat(this.assignment?.budget) || 0;
                if (budget <= 0) return 0;
                const paid = parseFloat(this.assignment?.amount_paid) || 0;
                return Math.max(0, Math.min(100, Math.round((paid / budget) * 100)));
            },

            money(v) {
                return '$' + (parseFloat(v) || 0).toFixed(2);
            },

            initials(name) {
                return String(name || 'Order').trim().slice(0, 2).toUpperCase();
            }
         }">

        <!-- Ambient background -->
        <div class="pointer-events-none absolute inset-x-0 top-0 h-[420px] z-0 bg-[radial-gradient(1000px_400px_at_15%_-10%,rgba(241,103,0,0.10),transparent_60%),radial-gradient(800px_360px_at_85%_-15%,rgba(99,102,241,0.10),transparent_60%)]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Breadcrumb -->
            <div class="flex items-center justify-between mb-5">
                <a href="{{ route('dashboard') }}" class="group inline-flex items-center gap-2 text-sm font-semibold text-slate-500 dark:text-slate-400 hover:text-[#f16700] transition-colors">
                    <span class="w-8 h-8 rounded-lg bg-white dark:bg-slate-900 border border-slate-200/70 dark:border-slate-800 shadow-sm flex items-center justify-center group-hover:bg-[#f16700] group-hover:text-white group-hover:border-[#f16700] transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </span>
                    Back to Dashboard
                </a>
            </div>

            <!-- Loading -->
            <template x-if="loading">
                <div class="bg-white dark:bg-slate-900 rounded-2xl p-16 text-center border border-slate-200/70 dark:border-slate-800 shadow-sm">
                    <div class="relative w-10 h-10 mx-auto mb-4">
                        <div class="absolute inset-0 border-4 border-slate-100 dark:border-slate-800 rounded-full"></div>
                        <div class="absolute inset-0 border-4 border-[#f16700] rounded-full border-t-transparent animate-spin"></div>
                    </div>
                    <h3 class="text-sm font-bold text-slate-800 dark:text-slate-200">Syncing workspace...</h3>
                </div>
            </template>

            <!-- Error -->
            <template x-if="!loading && apiError">
                <div class="bg-white dark:bg-slate-900 rounded-2xl p-12 text-center border border-slate-200/70 dark:border-slate-800 shadow-sm max-w-lg mx-auto">
                    <div class="w-12 h-12 bg-rose-500/10 text-rose-500 rounded-xl flex items-center justify-center mx-auto mb-4 text-xl">⚠️</div>
                    <h2 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-2" x-text="apiError"></h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mb-6">This order might have been moved, deleted, or does not belong to your account.</p>
                    <a href="{{ route('dashboard') }}" class="inline-flex px-5 py-2.5 bg-slate-900 rounded-lg text-white font-semibold text-sm hover:bg-[#f16700] transition-colors">Return to Dashboard</a>
                </div>
            </template>

            <template x-if="!loading && assignment">
                <div class="space-y-6">

                    <!-- ============ HERO ============ -->
                    <div class="relative overflow-hidden rounded-3xl bg-slate-900 text-white shadow-xl shadow-slate-900/10">
                        <div class="absolute inset-0 opacity-90 bg-[radial-gradient(700px_300px_at_10%_0%,rgba(241,103,0,0.35),transparent_60%),radial-gradient(600px_300px_at_90%_100%,rgba(79,70,229,0.35),transparent_60%)]"></div>
                        <div class="absolute -right-16 -top-16 w-56 h-56 rounded-full bg-white/5 blur-2xl"></div>

                        <div class="relative p-6 sm:p-8">
                            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-6">
                                <div class="min-w-0 space-y-3">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-white/10 backdrop-blur text-[11px] font-bold uppercase tracking-wider ring-1 ring-white/20">
                                            <span class="w-1.5 h-1.5 rounded-full" :class="statusStep === 3 ? 'bg-emerald-400' : (statusStep === 2 ? 'bg-amber-400 animate-pulse' : 'bg-sky-400 animate-pulse')"></span>
                                            <span x-text="assignment.status"></span>
                                        </span>
                                        <template x-if="assignment.subject">
                                            <span class="px-2.5 py-1 rounded-full bg-white/10 backdrop-blur text-[11px] font-bold uppercase tracking-wider ring-1 ring-white/15" x-text="assignment.subject"></span>
                                        </template>
                                        <template x-if="assignment.academic_level">
                                            <span class="px-2.5 py-1 rounded-full bg-white/10 backdrop-blur text-[11px] font-bold uppercase tracking-wider ring-1 ring-white/15" x-text="assignment.academic_level"></span>
                                        </template>
                                    </div>

                                    <h1 class="text-2xl sm:text-3xl font-black tracking-tight break-words" x-text="assignment.title"></h1>

                                    <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-[13px] text-slate-300">
                                        <span class="font-semibold">Order <span class="text-white" x-text="'#' + assignment.order_number"></span></span>
                                        <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                                        <span x-text="assignment.pages + (assignment.pages == 1 ? ' page' : ' pages')"></span>
                                        <template x-if="assignment.created_at">
                                            <span class="w-1 h-1 rounded-full bg-slate-600"></span>
                                        </template>
                                        <template x-if="assignment.created_at">
                                            <span x-text="'Placed ' + String(assignment.created_at).split(' ')[0]"></span>
                                        </template>
                                    </div>
                                </div>

                                <!-- Countdown + price -->
                                <div class="flex items-stretch gap-3 shrink-0">
                                    <div class="rounded-2xl bg-white/10 backdrop-blur ring-1 ring-white/15 px-4 py-3 min-w-[132px]">
                                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-300 mb-1">Deadline</p>
                                        <p class="text-lg font-black leading-none" x-text="deadlinePretty"></p>
                                        <p class="mt-1.5 inline-flex items-center gap-1 text-[11px] font-bold px-1.5 py-0.5 rounded" :class="{ 'bg-rose-500/20 text-rose-200': dueTone === 'danger', 'bg-amber-500/20 text-amber-200': dueTone === 'warn', 'bg-emerald-500/20 text-emerald-200': dueTone === 'ok', 'bg-white/10 text-slate-200': dueTone === 'neutral' }" x-text="dueLabel"></p>
                                    </div>
                                    <div class="rounded-2xl bg-white/10 backdrop-blur ring-1 ring-white/15 px-4 py-3 min-w-[120px]">
                                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-300 mb-1">Total</p>
                                        <p class="text-lg font-black leading-none" x-text="money(assignment.budget)"></p>
                                        <p class="mt-1.5 inline-flex text-[11px] font-bold px-1.5 py-0.5 rounded" :class="parseFloat(assignment.amount_due) > 0 ? 'bg-amber-500/20 text-amber-200' : 'bg-emerald-500/20 text-emerald-200'" x-text="parseFloat(assignment.amount_due) > 0 ? money(assignment.amount_due) + ' due' : 'Paid in full'"></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Progress rail -->
                            <div class="mt-7">
                                <div class="flex items-center justify-between text-[11px] font-bold uppercase tracking-wider mb-2">
                                    <span :class="statusStep >= 1 ? 'text-white' : 'text-slate-500'">Order placed</span>
                                    <span :class="statusStep >= 2 ? 'text-white' : 'text-slate-500'">Expert working</span>
                                    <span :class="statusStep >= 3 ? 'text-white' : 'text-slate-500'">Delivered</span>
                                </div>
                                <div class="h-2 rounded-full bg-white/10 overflow-hidden">
                                    <div class="h-full rounded-full bg-gradient-to-r from-[#f16700] to-amber-400 transition-all duration-700" :style="`width: ${progressPct}%`"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============ MAIN GRID ============ -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

                        <!-- LEFT: workspace -->
                        <div class="lg:col-span-2">
                            <div class="bg-white dark:bg-slate-900 rounded-2xl border border-slate-200/70 dark:border-slate-800 shadow-sm overflow-hidden">

                                <!-- Tabs -->
                                <div class="flex items-center gap-1 border-b border-slate-200/70 dark:border-slate-800 px-3 sm:px-4 bg-slate-50/60 dark:bg-slate-950/30">
                                    <button @click="changeTab('details')" class="relative py-3.5 px-3 text-sm font-bold transition-colors cursor-pointer" :class="activeTab === 'details' ? 'text-[#f16700]' : 'text-slate-500 hover:text-slate-800 dark:hover:text-slate-200'">
                                        Instructions
                                        <span class="absolute inset-x-2 -bottom-px h-0.5 rounded-full bg-[#f16700] transition-opacity" :class="activeTab === 'details' ? 'opacity-100' : 'opacity-0'"></span>
                                    </button>
                                    <button @click="changeTab('files')" class="relative py-3.5 px-3 text-sm font-bold transition-colors cursor-pointer inline-flex items-center gap-1.5" :class="activeTab === 'files' ? 'text-[#f16700]' : 'text-slate-500 hover:text-slate-800 dark:hover:text-slate-200'">
                                        Files
                                        <template x-if="assignment.files && assignment.files.length">
                                            <span class="px-1.5 py-0.5 rounded-md bg-slate-200 dark:bg-slate-800 text-[10px] font-bold text-slate-700 dark:text-slate-300" x-text="assignment.files.length"></span>
                                        </template>
                                        <span class="absolute inset-x-2 -bottom-px h-0.5 rounded-full bg-[#f16700] transition-opacity" :class="activeTab === 'files' ? 'opacity-100' : 'opacity-0'"></span>
                                    </button>
                                    <button @click="changeTab('chat')" class="relative py-3.5 px-3 text-sm font-bold transition-colors cursor-pointer inline-flex items-center gap-1.5" :class="activeTab === 'chat' ? 'text-[#f16700]' : 'text-slate-500 hover:text-slate-800 dark:hover:text-slate-200'">
                                        Messages
                                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                        <span class="absolute inset-x-2 -bottom-px h-0.5 rounded-full bg-[#f16700] transition-opacity" :class="activeTab === 'chat' ? 'opacity-100' : 'opacity-0'"></span>
                                    </button>
                                </div>

                                <div class="p-5 sm:p-7">

                                    <!-- TAB: DETAILS -->
                                    <div x-show="activeTab === 'details'" class="space-y-7">

                                        <!-- Saved confirmation -->
                                        <template x-if="saveNotice">
                                            <div class="flex items-center gap-2 rounded-xl bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/25 px-4 py-2.5">
                                                <span class="text-sm">✅</span>
                                                <p class="text-sm font-semibold text-emerald-700 dark:text-emerald-300" x-text="saveNotice"></p>
                                            </div>
                                        </template>

                                        <!-- Edit affordance / locked notice -->
                                        <div class="flex items-start justify-between gap-3">
                                            <div>
                                                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Your brief</h3>
                                                <template x-if="!canEdit">
                                                    <p class="mt-1 text-[11px] text-slate-400">Locked while your expert is working. Use Messages to request a change.</p>
                                                </template>
                                            </div>
                                            <template x-if="canEdit && !editing">
                                                <button @click="startEdit()" class="shrink-0 inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-slate-200 dark:border-slate-700 text-xs font-bold text-slate-700 dark:text-slate-200 hover:border-[#f16700] hover:text-[#f16700] transition-colors cursor-pointer">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                    Edit details
                                                </button>
                                            </template>
                                        </div>

                                        <!-- ===================== VIEW MODE ===================== -->
                                        <template x-if="!editing">
                                            <div class="space-y-7">

                                                <!-- Spec strip -->
                                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                                    <div class="rounded-xl border border-slate-200/70 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-950/30 p-3">
                                                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Pages</p>
                                                        <p class="text-base font-black text-slate-900 dark:text-slate-100" x-text="assignment.pages"></p>
                                                    </div>
                                                    <div class="rounded-xl border border-slate-200/70 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-950/30 p-3">
                                                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Level</p>
                                                        <p class="text-base font-black text-slate-900 dark:text-slate-100 capitalize truncate" x-text="assignment.academic_level || '—'"></p>
                                                    </div>
                                                    <div class="rounded-xl border border-slate-200/70 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-950/30 p-3">
                                                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Service</p>
                                                        <p class="text-base font-black text-slate-900 dark:text-slate-100 capitalize truncate" x-text="assignment.service_type || 'Custom'"></p>
                                                    </div>
                                                    <div class="rounded-xl border border-slate-200/70 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-950/30 p-3">
                                                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Subject</p>
                                                        <p class="text-base font-black text-slate-900 dark:text-slate-100 capitalize truncate" x-text="assignment.subject || '—'"></p>
                                                    </div>
                                                </div>

                                                <!-- Description -->
                                                <template x-if="assignment.description">
                                                    <div>
                                                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Brief</h3>
                                                        <div class="rounded-xl border border-slate-200/70 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-950/30 p-4 text-sm leading-relaxed text-slate-700 dark:text-slate-300" x-html="String(assignment.description).replace(/\n/g, '<br>')"></div>
                                                    </div>
                                                </template>

                                                <!-- Requirements -->
                                                <template x-if="assignment.specific_requirements">
                                                    <div>
                                                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Specifications</h3>
                                                        <template x-if="parseRequirements(assignment.specific_requirements).type === 'json'">
                                                            <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5">
                                                                <template x-for="(value, key) in parseRequirements(assignment.specific_requirements).data" :key="key">
                                                                    <div class="rounded-xl border border-slate-200/70 dark:border-slate-800 p-3">
                                                                        <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1" x-text="formatKey(key)"></p>
                                                                        <p class="text-sm font-bold text-slate-800 dark:text-slate-200 truncate" x-text="value === true ? 'Yes' : (value === false ? 'No' : (value || '—'))"></p>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </template>
                                                        <template x-if="parseRequirements(assignment.specific_requirements).type === 'text'">
                                                            <div class="rounded-xl border border-slate-200/70 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-950/30 p-4 text-sm leading-relaxed text-slate-700 dark:text-slate-300" x-html="String(assignment.specific_requirements).replace(/\n/g, '<br>')"></div>
                                                        </template>
                                                    </div>
                                                </template>
                                            </div>
                                        </template>

                                        <!-- ===================== EDIT MODE ===================== -->
                                        <template x-if="editing">
                                            <div class="space-y-6">

                                                <template x-if="saveError">
                                                    <div class="flex items-start gap-2 rounded-xl bg-rose-50 dark:bg-rose-500/10 border border-rose-200 dark:border-rose-500/25 px-4 py-2.5">
                                                        <span class="text-sm">⚠️</span>
                                                        <p class="text-sm font-semibold text-rose-700 dark:text-rose-300" x-text="saveError"></p>
                                                    </div>
                                                </template>

                                                <!-- Core fields -->
                                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                                    <div>
                                                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Pages</label>
                                                        <input type="number" min="1" max="100" x-model.number="draft.pages" @change="refreshQuote()"
                                                               class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2.5 px-3 text-sm font-semibold text-slate-900 dark:text-slate-100 focus:border-[#f16700] focus:outline-none transition-colors">
                                                    </div>
                                                    <div>
                                                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Academic level</label>
                                                        <select x-model="draft.academic_level" @change="refreshQuote()"
                                                                class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2.5 px-3 text-sm font-semibold text-slate-900 dark:text-slate-100 focus:border-[#f16700] focus:outline-none transition-colors cursor-pointer">
                                                            <option value="high-school">High School</option>
                                                            <option value="undergraduate">Undergraduate</option>
                                                            <option value="masters">Master's</option>
                                                            <option value="phd">PhD / Doctoral</option>
                                                        </select>
                                                    </div>
                                                    <div>
                                                        <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Subject</label>
                                                        <input type="text" x-model="draft.subject" @change="refreshQuote()" placeholder="e.g. General"
                                                               class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2.5 px-3 text-sm font-semibold text-slate-900 dark:text-slate-100 placeholder:text-slate-400 focus:border-[#f16700] focus:outline-none transition-colors">
                                                    </div>
                                                </div>

                                                <!-- Brief -->
                                                <div>
                                                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-1.5">Brief</label>
                                                    <textarea x-model="draft.description" rows="5" placeholder="Describe your requirements in detail..."
                                                              class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2.5 px-3 text-sm leading-relaxed text-slate-800 dark:text-slate-100 placeholder:text-slate-400 focus:border-[#f16700] focus:outline-none transition-colors"></textarea>
                                                </div>

                                                <!-- Specifications -->
                                                <div>
                                                    <label class="block text-[11px] font-bold uppercase tracking-wider text-slate-500 mb-2">Specifications</label>
                                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                                        <div>
                                                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Reference style</label>
                                                            <input type="text" x-model="draft.requirements.reference_style" placeholder="e.g. APA 7th"
                                                                   class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2 px-3 text-sm text-slate-800 dark:text-slate-100 placeholder:text-slate-400 focus:border-[#f16700] focus:outline-none transition-colors">
                                                        </div>
                                                        <div>
                                                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Software / language</label>
                                                            <input type="text" x-model="draft.requirements.software_language" placeholder="e.g. Python"
                                                                   class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2 px-3 text-sm text-slate-800 dark:text-slate-100 placeholder:text-slate-400 focus:border-[#f16700] focus:outline-none transition-colors">
                                                        </div>
                                                        <div>
                                                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Course code</label>
                                                            <input type="text" x-model="draft.requirements.course_code" placeholder="e.g. CS101"
                                                                   class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2 px-3 text-sm text-slate-800 dark:text-slate-100 placeholder:text-slate-400 focus:border-[#f16700] focus:outline-none transition-colors">
                                                        </div>
                                                        <div>
                                                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Online service type</label>
                                                            <input type="text" x-model="draft.requirements.online_service_type" placeholder="e.g. Full Course Help"
                                                                   class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2 px-3 text-sm text-slate-800 dark:text-slate-100 placeholder:text-slate-400 focus:border-[#f16700] focus:outline-none transition-colors">
                                                        </div>
                                                        <div>
                                                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Duration</label>
                                                            <div class="flex gap-2">
                                                                <input type="number" min="1" x-model.number="draft.requirements.duration"
                                                                       class="w-20 bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2 px-2 text-sm text-center text-slate-800 dark:text-slate-100 focus:border-[#f16700] focus:outline-none transition-colors">
                                                                <select x-model="draft.requirements.duration_unit"
                                                                        class="flex-1 bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2 px-3 text-sm text-slate-800 dark:text-slate-100 focus:border-[#f16700] focus:outline-none transition-colors cursor-pointer">
                                                                    <option value="weeks">Weeks</option>
                                                                    <option value="hours">Hours</option>
                                                                    <option value="sessions">Sessions</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <label class="block text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-1">Portal credentials needed</label>
                                                            <label class="flex items-center gap-2.5 bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-lg py-2 px-3 cursor-pointer">
                                                                <input type="checkbox" x-model="draft.requirements.login_required" class="w-4 h-4 rounded border-slate-300 text-[#f16700] focus:ring-[#f16700]">
                                                                <span class="text-sm text-slate-700 dark:text-slate-300" x-text="draft.requirements.login_required ? 'Yes' : 'No'"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Live quote -->
                                                <template x-if="priceQuote && !confirmingPrice">
                                                    <div class="flex items-center justify-between gap-3 rounded-xl border p-3.5"
                                                         :class="priceQuote.changed ? 'border-amber-300 bg-amber-50 dark:bg-amber-500/10 dark:border-amber-500/30' : 'border-slate-200/70 dark:border-slate-800 bg-slate-50/70 dark:bg-slate-950/30'">
                                                        <div>
                                                            <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400">New total</p>
                                                            <p class="text-lg font-black text-slate-900 dark:text-slate-100">
                                                                <span x-text="money(priceQuote.new)"></span>
                                                                <template x-if="priceQuote.changed">
                                                                    <span class="ml-1.5 text-xs font-bold text-slate-400 line-through" x-text="money(priceQuote.current)"></span>
                                                                </template>
                                                            </p>
                                                        </div>
                                                        <template x-if="priceQuote.changed">
                                                            <span class="shrink-0 px-2.5 py-1 rounded-lg text-xs font-bold"
                                                                  :class="priceQuote.difference > 0 ? 'bg-amber-500/15 text-amber-700 dark:text-amber-300' : 'bg-emerald-500/15 text-emerald-700 dark:text-emerald-300'"
                                                                  x-text="(priceQuote.difference > 0 ? '+' : '') + money(priceQuote.difference)"></span>
                                                        </template>
                                                        <template x-if="!priceQuote.changed">
                                                            <span class="shrink-0 text-xs font-bold text-slate-400">No change</span>
                                                        </template>
                                                    </div>
                                                </template>

                                                <!-- Price confirmation -->
                                                <template x-if="confirmingPrice && priceQuote">
                                                    <div class="rounded-xl border border-amber-300 dark:border-amber-500/30 bg-amber-50 dark:bg-amber-500/10 p-4">
                                                        <div class="flex items-start gap-2.5">
                                                            <span class="text-base shrink-0">⚠️</span>
                                                            <div class="min-w-0">
                                                                <p class="text-sm font-bold text-amber-900 dark:text-amber-200">These changes update your total</p>
                                                                <p class="mt-1 text-sm text-amber-800 dark:text-amber-300">
                                                                    Your total will change from
                                                                    <strong x-text="money(priceQuote.current)"></strong>
                                                                    to
                                                                    <strong x-text="money(priceQuote.new)"></strong>.
                                                                    <template x-if="priceQuote.amount_due > 0">
                                                                        <span>You will owe <strong x-text="money(priceQuote.amount_due)"></strong>.</span>
                                                                    </template>
                                                                </p>
                                                                <div class="mt-3 flex flex-wrap items-center gap-2">
                                                                    <button @click="saveEdit(true)" :disabled="saving"
                                                                            class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-[#f16700] hover:bg-[#d95d00] text-white text-sm font-bold transition-colors disabled:opacity-60 cursor-pointer">
                                                                        <template x-if="saving">
                                                                            <span class="w-3.5 h-3.5 border-2 border-white/40 border-t-white rounded-full animate-spin"></span>
                                                                        </template>
                                                                        <span x-text="saving ? 'Saving...' : 'Accept new price & save'"></span>
                                                                    </button>
                                                                    <button @click="confirmingPrice = false" :disabled="saving"
                                                                            class="px-4 py-2 rounded-lg border border-amber-300 dark:border-amber-500/40 text-sm font-bold text-amber-900 dark:text-amber-200 hover:bg-amber-100 dark:hover:bg-amber-500/15 transition-colors disabled:opacity-60 cursor-pointer">
                                                                        Keep editing
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>

                                                <!-- Actions -->
                                                <div class="flex items-center gap-2 pt-1" x-show="!confirmingPrice">
                                                    <button @click="saveEdit()" :disabled="saving"
                                                            class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-[#f16700] hover:bg-[#d95d00] text-white text-sm font-bold transition-colors disabled:opacity-60 cursor-pointer">
                                                        <template x-if="saving">
                                                            <span class="w-3.5 h-3.5 border-2 border-white/40 border-t-white rounded-full animate-spin"></span>
                                                        </template>
                                                        <span x-text="saving ? 'Saving...' : 'Save changes'"></span>
                                                    </button>
                                                    <button @click="cancelEdit()" :disabled="saving"
                                                            class="px-4 py-2.5 rounded-lg border border-slate-200 dark:border-slate-700 text-sm font-bold text-slate-600 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-800 transition-colors disabled:opacity-60 cursor-pointer">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </template>
                                    </div>

                                    <!-- TAB: FILES -->
                                    <div x-show="activeTab === 'files'" class="space-y-5">
                                        <div class="flex items-center justify-between">
                                            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400">Documents</h3>
                                            <button @click="triggerUpload()" :disabled="fileUploading" class="px-3 py-1.5 rounded-lg bg-slate-900 dark:bg-slate-800 hover:bg-[#f16700] dark:hover:bg-[#f16700] text-white text-xs font-bold transition-colors cursor-pointer disabled:opacity-50">Add files</button>
                                        </div>

                                        <template x-if="assignment.files && assignment.files.length">
                                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                                                <template x-for="file in assignment.files" :key="file.id">
                                                    <a :href="file.url" target="_blank" class="group flex items-center gap-3 p-3 rounded-xl border border-slate-200/70 dark:border-slate-800 hover:border-[#f16700] hover:shadow-sm transition-all">
                                                        <span class="w-9 h-9 shrink-0 rounded-lg bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-base" x-text="getFileIcon(file.name)"></span>
                                                        <span class="min-w-0 flex-1">
                                                            <span class="block text-sm font-bold text-slate-800 dark:text-slate-200 truncate" x-text="file.name"></span>
                                                            <span class="block text-[11px] font-semibold text-slate-400" x-text="file.size"></span>
                                                        </span>
                                                        <svg class="w-4 h-4 text-slate-300 group-hover:text-[#f16700] transition-colors shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0L8 8m4-4v12"></path></svg>
                                                    </a>
                                                </template>
                                            </div>
                                        </template>

                                        <input type="file" x-ref="fileInput" class="hidden" @change="uploadFiles($event)" multiple>
                                        <div @click="triggerUpload()" class="rounded-xl border-2 border-dashed border-slate-200 dark:border-slate-800 hover:border-[#f16700] p-7 text-center cursor-pointer bg-slate-50/50 dark:bg-slate-950/20 transition-colors">
                                            <template x-if="!fileUploading">
                                                <div>
                                                    <div class="text-2xl mb-1.5">📁</div>
                                                    <p class="text-sm font-bold text-slate-700 dark:text-slate-300">Drop files here or <span class="text-[#f16700]">browse</span></p>
                                                    <p class="text-[11px] font-semibold text-slate-400 mt-0.5">PDF, DOC, DOCX, ZIP up to 10MB</p>
                                                </div>
                                            </template>
                                            <template x-if="fileUploading">
                                                <div class="flex flex-col items-center gap-2">
                                                    <div class="w-6 h-6 border-2 border-slate-200 dark:border-slate-700 border-t-[#f16700] rounded-full animate-spin"></div>
                                                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#f16700]">Uploading...</p>
                                                </div>
                                            </template>
                                        </div>
                                    </div>

                                    <!-- TAB: CHAT -->
                                    <div x-show="activeTab === 'chat'" class="flex flex-col h-[420px] rounded-xl border border-slate-200/70 dark:border-slate-800 overflow-hidden bg-slate-50/50 dark:bg-slate-950/20">
                                        <div class="flex-1 p-4 overflow-y-auto space-y-3" x-ref="messageContainer">
                                            <template x-for="msg in messages" :key="msg.id">
                                                <div class="flex flex-col" :class="msg.sender_type === 'user' ? 'items-end' : 'items-start'">
                                                    <div class="max-w-[80%] px-3.5 py-2.5 text-sm font-medium shadow-sm" :class="msg.sender_type === 'user' ? 'bg-[#f16700] text-white rounded-2xl rounded-br-sm' : 'bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 border border-slate-200/70 dark:border-slate-800 rounded-2xl rounded-bl-sm'">
                                                        <p x-text="msg.body"></p>
                                                    </div>
                                                    <div class="flex items-center gap-1.5 mt-1 px-1">
                                                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400" x-text="msg.sender_type === 'user' ? 'You' : 'Expert'"></span>
                                                        <span class="w-1 h-1 rounded-full bg-slate-300 dark:bg-slate-700"></span>
                                                        <span class="text-[10px] font-semibold text-slate-400" x-text="msg.created_at_human"></span>
                                                    </div>
                                                </div>
                                            </template>

                                            <template x-if="messageLoading">
                                                <div class="text-center py-10">
                                                    <div class="w-6 h-6 mx-auto border-2 border-slate-200 dark:border-slate-700 border-t-[#f16700] rounded-full animate-spin"></div>
                                                </div>
                                            </template>

                                            <template x-if="!messageLoading && messages.length === 0">
                                                <div class="text-center py-14">
                                                    <div class="text-3xl mb-2">💬</div>
                                                    <p class="text-sm font-bold text-slate-500 dark:text-slate-400">No messages yet</p>
                                                    <p class="text-xs text-slate-400 mt-0.5">Send a note to your assigned expert.</p>
                                                </div>
                                            </template>
                                        </div>

                                        <div class="p-3 bg-white dark:bg-slate-900 border-t border-slate-200/70 dark:border-slate-800">
                                            <div class="relative flex items-center">
                                                <textarea rows="1" x-model="newMessage" @keydown.enter.prevent="sendMessage()" class="w-full bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl py-2.5 pl-3.5 pr-12 text-sm font-medium placeholder:text-slate-400 focus:border-[#f16700] focus:outline-none transition-colors resize-none text-slate-800 dark:text-slate-100" placeholder="Message your expert..."></textarea>
                                                <button @click="sendMessage()" class="absolute right-1.5 w-8 h-8 rounded-lg bg-slate-900 dark:bg-[#f16700] text-white hover:bg-[#f16700] transition-colors flex items-center justify-center active:scale-95 cursor-pointer">
                                                    <svg class="w-4 h-4 rotate-45 -translate-x-px -translate-y-px" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- RIGHT: sidebar -->
                        <div class="space-y-5 lg:sticky lg:top-6">

                            <!-- Payment -->
                            <div class="relative overflow-hidden rounded-2xl bg-slate-900 text-white p-6 shadow-lg shadow-slate-900/10">
                                <div class="absolute -top-12 -right-12 w-32 h-32 rounded-full bg-[#f16700]/20 blur-2xl"></div>
                                <div class="relative">
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Order total</p>
                                    <p class="mt-1 text-3xl font-black tracking-tight" x-text="money(assignment.budget)"></p>

                                    <div class="mt-4">
                                        <div class="h-1.5 rounded-full bg-white/10 overflow-hidden">
                                            <div class="h-full rounded-full bg-emerald-400 transition-all duration-700" :style="`width: ${paidPct}%`"></div>
                                        </div>
                                        <div class="mt-2 flex items-center justify-between text-[11px] font-bold">
                                            <span class="text-emerald-400" x-text="money(assignment.amount_paid) + ' paid'"></span>
                                            <span class="text-slate-400" x-text="money(assignment.amount_due) + ' due'"></span>
                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <template x-if="parseFloat(assignment.amount_due) > 0">
                                            <button class="w-full py-3 rounded-xl bg-white text-slate-900 font-bold text-sm hover:bg-[#f16700] hover:text-white transition-colors active:scale-[0.98] inline-flex items-center justify-center gap-2 cursor-pointer">
                                                Pay <span x-text="money(assignment.amount_due)"></span>
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </button>
                                        </template>
                                        <template x-if="parseFloat(assignment.amount_due) <= 0">
                                            <div class="w-full py-2.5 rounded-xl bg-emerald-500/15 ring-1 ring-emerald-500/25 text-emerald-300 text-center font-bold text-xs uppercase tracking-wider">Paid in full</div>
                                        </template>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick actions -->
                            <div class="rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/70 dark:border-slate-800 shadow-sm p-2">
                                <button @click="changeTab('chat')" class="w-full flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors text-left cursor-pointer">
                                    <span class="w-9 h-9 rounded-lg bg-[#f16700]/10 text-[#f16700] flex items-center justify-center text-base shrink-0">💬</span>
                                    <span class="min-w-0">
                                        <span class="block text-sm font-bold text-slate-800 dark:text-slate-200">Message expert</span>
                                        <span class="block text-[11px] text-slate-400">Usually replies in ~15 min</span>
                                    </span>
                                </button>
                                <button @click="changeTab('files')" class="w-full flex items-center gap-3 p-3 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors text-left cursor-pointer">
                                    <span class="w-9 h-9 rounded-lg bg-indigo-500/10 text-indigo-500 flex items-center justify-center text-base shrink-0">📎</span>
                                    <span class="min-w-0">
                                        <span class="block text-sm font-bold text-slate-800 dark:text-slate-200">Upload files</span>
                                        <span class="block text-[11px] text-slate-400">Add briefs or source material</span>
                                    </span>
                                </button>
                            </div>

                            <!-- Guarantees -->
                            <div class="rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/70 dark:border-slate-800 shadow-sm p-5">
                                <h3 class="text-[10px] font-bold uppercase tracking-wider text-slate-400 mb-3">Included</h3>
                                <ul class="space-y-3">
                                    <li class="flex items-start gap-2.5">
                                        <span class="text-base shrink-0">🛡️</span>
                                        <span>
                                            <span class="block text-[13px] font-bold text-slate-800 dark:text-slate-200 leading-tight">Payment protection</span>
                                            <span class="block text-[11px] text-slate-400">Funds release on your approval.</span>
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="text-base shrink-0">🎓</span>
                                        <span>
                                            <span class="block text-[13px] font-bold text-slate-800 dark:text-slate-200 leading-tight">Vetted experts</span>
                                            <span class="block text-[11px] text-slate-400">Every task quality reviewed.</span>
                                        </span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="text-base shrink-0">🔄</span>
                                        <span>
                                            <span class="block text-[13px] font-bold text-slate-800 dark:text-slate-200 leading-tight">Free revisions</span>
                                            <span class="block text-[11px] text-slate-400">Until it matches the brief.</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </template>

        </div>

    </div>

@endsection
