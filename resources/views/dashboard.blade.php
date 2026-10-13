@extends('layouts.app')

@section('content')

    <div class="py-12" x-data="{
        assignments: {{ Js::from($assignments) }},
        filter: 'all',
        showMessaging: false,
        activeAssignment: null,
        messages: [],
        newMessage: '',
        messageLoading: false,
        async openMessaging(assignment) {
            if (!assignment) return;
            this.activeAssignment = assignment;
            this.showMessaging = true;
            this.messages = [];
            await this.fetchMessages();
        },
        async fetchMessages() {
            if (!this.activeAssignment) return;
            this.messageLoading = true;
            try {
                const response = await fetch(`/api/assignments/${this.activeAssignment.id}/messages`);
                const data = await response.json();
                this.messages = Array.isArray(data.data) ? data.data : [];
            } catch (error) {
                console.error('Error fetching messages:', error);
                this.messages = [];
            } finally {
                this.messageLoading = false;
            }
        },
        async sendMessage() {
            if (!this.newMessage.trim() || !this.activeAssignment) return;
            try {
                const csrfToken = document.querySelector('meta[name=\'csrf-token\']')?.getAttribute('content');
                const response = await fetch(`/api/assignments/${this.activeAssignment.id}/messages`, {
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
                        const container = this.$refs.messageContainer;
                        if (container) container.scrollTop = container.scrollHeight;
                    });
                }
            } catch (error) {
                console.error('Error sending message:', error);
            }
        },
        get filteredAssignments() {
            const arr = Array.isArray(this.assignments) ? this.assignments : [];
            if (this.filter === 'all') return arr;
            const searchTerm = (this.filter || '').toLowerCase();
            return arr.filter(a => ((a.status || '')).toLowerCase() === searchTerm);
        },
        getStatusColor(status) {
            if (!status) return 'bg-slate-50 text-slate-700 border-slate-100';
            const colors = {
                'new': 'bg-amber-50 text-amber-700 border-amber-100',
                'pending': 'bg-amber-50 text-amber-700 border-amber-100',
                'in progress': 'bg-blue-50 text-blue-700 border-blue-100',
                'assigned': 'bg-indigo-50 text-indigo-700 border-indigo-100',
                'completed': 'bg-emerald-50 text-emerald-700 border-emerald-100',
                'cancelled': 'bg-red-50 text-red-700 border-red-100',
                'rework': 'bg-purple-50 text-purple-700 border-purple-100'
            };
            return colors[status.toLowerCase()] || 'bg-slate-50 text-slate-700 border-slate-100';
        }
    }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <!-- Welcome Section -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 bg-gradient-to-br from-indigo-600 to-purple-700 p-8 sm:p-10 rounded-[2.5rem] shadow-2xl shadow-indigo-200 text-white relative overflow-hidden">
                <div class="relative z-10">
                    <h1 class="text-3xl sm:text-4xl font-black mb-2 tracking-tight">Welcome back, {{ auth()->user()->name }}! 👋</h1>
                    <p class="text-indigo-100 text-lg font-medium max-w-lg">Track your assignments, upload files, and manage your academic success from one place.</p>
                </div>
                <div class="relative z-10 flex gap-4">
                    <a href="{{ route('profile.edit') }}" class="px-6 py-4 bg-white/10 backdrop-blur-md border border-white/20 text-white font-bold rounded-2xl hover:bg-white/20 transition-all active:scale-95 text-center">
                        Manage Profile
                    </a>
                    <a href="{{ route('order') }}" class="px-8 py-4 bg-white text-indigo-600 font-bold rounded-2xl hover:bg-slate-50 transition-all shadow-xl shadow-indigo-900/20 active:scale-95 text-center">
                        + New Assignment
                    </a>
                </div>
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-indigo-400/20 rounded-full blur-2xl -ml-16 -mb-16"></div>
            </div>

            <!-- Stats Ribbon -->
            @php
                $statusCounts = collect($assignments)->countBy(fn ($a) => strtolower($a['status'] ?? 'pending'));
            @endphp
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 sm:gap-6">
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-1">Total Orders</p>
                    <p class="text-3xl font-black text-slate-900">{{ count($assignments) }}</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-1">Active</p>
                    <p class="text-3xl font-black text-blue-600">{{ $statusCounts->get('in progress', 0) + $statusCounts->get('assigned', 0) }}</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-1">Pending / New</p>
                    <p class="text-3xl font-black text-amber-500">{{ $statusCounts->get('pending', 0) + $statusCounts->get('new', 0) }}</p>
                </div>
                <div class="bg-white p-6 rounded-3xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow">
                    <p class="text-xs font-black text-slate-400 uppercase tracking-widest mb-1">Completed</p>
                    <p class="text-3xl font-black text-emerald-500">{{ $statusCounts->get('completed', 0) }}</p>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden min-h-[500px]">
                <!-- Table Header/Filters -->
                <div class="p-6 sm:p-8 border-b border-slate-50 flex flex-col sm:flex-row justify-between items-center gap-6">
                    <h3 class="text-xl font-black text-slate-900 tracking-tight">Your Assignments</h3>
                    
                    <div class="flex bg-slate-100 p-1 rounded-xl overflow-x-auto max-w-full">
                        @foreach (['all', 'new', 'assigned', 'in progress', 'completed'] as $tab)
                            <button x-on:click="filter = '{{ $tab }}'"
                                :class="filter === '{{ $tab }}' ? 'bg-white text-indigo-600 shadow-sm' : 'text-slate-500 hover:text-slate-700'"
                                class="px-4 py-2 rounded-lg text-sm font-bold capitalize transition-all whitespace-nowrap">{{ $tab }}</button>
                        @endforeach
                    </div>
                </div>

                <!-- Table Container -->
                <div class="overflow-x-auto">
                    @forelse ($assignments as $assignment)
                        @if ($loop->first)
                            <div class="overflow-x-auto">
                                <table class="w-full text-left">
                                    <thead class="bg-slate-50/50">
                                        <tr>
                                            <th class="px-8 py-4 text-xs font-black text-slate-400 uppercase tracking-widest">Order Details</th>
                                            <th class="px-8 py-4 text-xs font-black text-slate-400 uppercase tracking-widest">Deadline</th>
                                            <th class="px-8 py-4 text-xs font-black text-slate-400 uppercase tracking-widest">Amount</th>
                                            <th class="px-8 py-4 text-xs font-black text-slate-400 uppercase tracking-widest">Status</th>
                                            <th class="px-8 py-4 text-xs font-black text-slate-400 uppercase tracking-widest text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-50">
                        @endif

                        @php
                            $status = $assignment['status'] ?? 'Pending';
                            $paymentStatus = $assignment['payment_status'] ?? 'unpaid';
                            $amountPaid = (float) ($assignment['amount_paid'] ?? 0);
                            $amountDue = (float) ($assignment['amount_due'] ?? 0);
                            $detailsUrl = route('dashboard.details', $assignment['order_number']);
                            $icon = match ($assignment['service_type'] ?? null) {
                                'writing' => '✍️',
                                'technical' => '⚙️',
                                default => '🎓',
                            };
                            $statusClass = [
                                'new' => 'bg-amber-50 text-amber-700 border-amber-100',
                                'pending' => 'bg-amber-50 text-amber-700 border-amber-100',
                                'in progress' => 'bg-blue-50 text-blue-700 border-blue-100',
                                'assigned' => 'bg-indigo-50 text-indigo-700 border-indigo-100',
                                'completed' => 'bg-emerald-50 text-emerald-700 border-emerald-100',
                                'cancelled' => 'bg-red-50 text-red-700 border-red-100',
                                'rework' => 'bg-purple-50 text-purple-700 border-purple-100',
                            ][strtolower($status)] ?? 'bg-slate-50 text-slate-700 border-slate-100';
                            $paymentClass = [
                                'paid' => 'bg-emerald-50 text-emerald-600 border-emerald-200',
                                'unpaid' => 'bg-rose-50 text-rose-600 border-rose-200',
                                'partial' => 'bg-sky-50 text-sky-600 border-sky-200',
                            ][strtolower($paymentStatus)] ?? 'bg-slate-50 text-slate-600 border-slate-200';
                        @endphp

                        <tr class="hover:bg-slate-50/50 transition-colors group"
                            x-show="filter === 'all' || filter === @js(strtolower($status))">
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-4">
                                    <div class="w-12 h-12 bg-indigo-50 rounded-xl flex items-center justify-center text-xl text-indigo-500 group-hover:bg-indigo-600 group-hover:text-white transition-all">
                                        <span>{{ $icon }}</span>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 mb-0.5">
                                            <a href="{{ $detailsUrl }}" class="font-bold text-slate-900 hover:text-indigo-600 transition-colors">{{ $assignment['title'] }}</a>
                                            <span class="px-2 py-0.5 bg-slate-100 text-[10px] font-black text-slate-500 rounded-md uppercase tracking-tighter">#{{ $assignment['order_number'] }}</span>
                                        </div>
                                        <p class="text-xs font-bold text-slate-400 uppercase tracking-tight">{{ $assignment['subject'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex items-center gap-2 text-slate-600">
                                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="font-medium">{{ $assignment['deadline'] }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex flex-col">
                                    <span class="text-lg font-black text-slate-900 leading-none">${{ number_format((float) ($assignment['budget'] ?? 0), 2) }}</span>
                                    <div class="flex items-center gap-1.5 mt-1">
                                        @if ($amountPaid > 0)
                                            <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 rounded">+${{ number_format($amountPaid, 2) }}</span>
                                        @endif
                                        @if ($amountDue > 0)
                                            <span class="text-[10px] font-bold text-rose-600 bg-rose-50 px-1.5 py-0.5 rounded">Due: ${{ number_format($amountDue, 2) }}</span>
                                        @endif
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-6">
                                <div class="flex flex-col gap-1.5">
                                    <span class="{{ $statusClass }} px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border inline-flex items-center">{{ $status }}</span>
                                    <span class="{{ $paymentClass }} inline-flex items-center px-3 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-widest border w-fit">{{ $paymentStatus }}</span>
                                </div>
                            </td>
                            <td class="px-8 py-6 text-right">
                                <div class="flex items-center justify-end gap-2">
                                    <button type="button" x-on:click="openMessaging(@js($assignment))" class="p-2 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition-all">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                                    </button>
                                    <a href="{{ $detailsUrl }}" class="p-2 bg-slate-900 text-white text-sm font-bold rounded-xl hover:bg-slate-800 transition-all">
                                        Manage
                                    </a>
                                </div>
                            </td>
                        </tr>

                        @if ($loop->last)
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    @empty
                        <!-- Empty State -->
                        <div class="p-20 text-center">
                            <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl opacity-50">📂</div>
                            <h4 class="text-xl font-bold text-slate-900 mb-2">No assignments found</h4>
                            <p class="text-slate-500 mb-8 max-w-xs mx-auto">Get started by placing your first assignment request with us today.</p>
                            <a href="{{ route('order') }}" class="inline-flex px-8 py-4 bg-indigo-600 text-white font-bold rounded-2xl hover:bg-indigo-700 transition-all shadow-xl shadow-indigo-100">
                                Place New Order
                            </a>
                        </div>
                    @endforelse

                    <!-- Shown when a filter hides every row -->
                    @if (count($assignments) > 0)
                        <div class="p-20 text-center" x-show="filteredAssignments.length === 0" x-cloak>
                            <div class="w-20 h-20 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl opacity-50">📂</div>
                            <h4 class="text-xl font-bold text-slate-900 mb-2">No matching assignments</h4>
                            <p class="text-slate-500 mb-8 max-w-xs mx-auto">No orders match this filter. Try selecting a different tab.</p>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Security/Profile CTA -->
            <div class="bg-slate-900 p-8 rounded-[2rem] flex flex-col md:flex-row items-center justify-between gap-6 overflow-hidden relative">
                <div class="relative z-10">
                    <h3 class="text-xl font-bold text-white mb-2">Enhance Your Security 🔐</h3>
                    <p class="text-slate-400 text-sm">Recently joined? We recommend updating your temporary password for better protection.</p>
                </div>
                <a href="{{ route('profile.edit') }}" class="relative z-10 px-8 py-4 bg-white/10 text-white font-bold rounded-xl border border-white/20 hover:bg-white/20 transition-all text-center w-full md:w-auto">
                    Change Password
                </a>
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16"></div>
            </div>

        </div>

        <!-- Messaging Slide-over -->
        <div x-show="showMessaging" 
             class="fixed inset-0 overflow-hidden z-[100]" 
             x-description="Messaging slide-over" 
             style="display: none;">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 bg-slate-900/40 backdrop-blur-sm transition-opacity" 
                     x-on:click="showMessaging = false"
                     x-show="showMessaging"
                     x-transition:enter="ease-in-out duration-500"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="ease-in-out duration-500"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"></div>

                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div class="pointer-events-auto w-screen max-w-md transform transition duration-500 ease-in-out sm:duration-700"
                         x-show="showMessaging"
                         x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                         x-transition:enter-start="translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="translate-x-full">
                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-2xl rounded-l-[2rem]">
                            <!-- Header -->
                            <div class="bg-indigo-600 px-6 py-8 sm:px-8">
                                <div class="flex items-start justify-between">
                                    <h2 class="text-xl font-black text-white leading-tight">
                                        Messaging Panel<br>
                                        <span class="text-indigo-100 text-sm font-bold opacity-80" x-text="activeAssignment ? '#' + activeAssignment.order_number : ''"></span>
                                    </h2>
                                    <button x-on:click="showMessaging = false" class="text-indigo-200 hover:text-white transition-colors">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                    </button>
                                </div>
                                <div class="mt-4">
                                    <p class="text-indigo-100 font-bold text-sm" x-text="activeAssignment ? activeAssignment.title : ''"></p>
                                </div>
                            </div>

                            <!-- Messages Area -->
                            <div class="relative flex-1 px-6 py-8 sm:px-8 flex flex-col gap-4 overflow-y-auto" x-ref="messageContainer">
                                <template x-if="messageLoading">
                                    <div class="flex flex-col gap-4">
                                        <div class="h-12 bg-slate-50 rounded-2xl animate-pulse w-3/4"></div>
                                        <div class="h-12 bg-slate-50 rounded-2xl animate-pulse w-2/3 self-end"></div>
                                        <div class="h-12 bg-slate-50 rounded-2xl animate-pulse w-1/2"></div>
                                    </div>
                                </template>

                                <template x-for="message in messages" :key="message.id">
                                    <div class="flex flex-col gap-1" :class="message.is_mine ? 'items-end' : 'items-start'">
                                        <div class="px-4 py-3 rounded-2xl text-sm"
                                             :class="message.is_mine ? 'bg-indigo-600 text-white rounded-tr-none shadow-lg shadow-indigo-100' : 'bg-slate-100 text-slate-900 rounded-tl-none'">
                                            <p x-text="message.body"></p>
                                        </div>
                                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter" x-text="message.created_at"></span>
                                    </div>
                                </template>

                                <template x-if="!messageLoading && messages.length === 0">
                                    <div class="flex flex-col items-center justify-center h-full text-center py-12">
                                        <div class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mb-4 text-2xl">💬</div>
                                        <p class="text-slate-400 font-bold">No messages yet.<br>Send your first message below!</p>
                                    </div>
                                </template>
                            </div>

                            <!-- Input Area -->
                            <div class="p-6 sm:p-8 bg-slate-50/50 border-t border-slate-100">
                                <div class="flex gap-2">
                                    <textarea x-model="newMessage" 
                                              @keydown.enter.prevent="sendMessage()"
                                              placeholder="Type your message..." 
                                              class="flex-1 bg-white border-slate-200 rounded-2xl p-4 text-sm font-medium focus:ring-4 focus:ring-indigo-500/10 focus:border-indigo-500 transition-all resize-none h-14"></textarea>
                                    <button x-on:click="sendMessage()" 
                                            class="w-14 h-14 bg-indigo-600 text-white rounded-2xl flex items-center justify-center hover:bg-slate-900 transition-all shadow-lg shadow-indigo-200 active:scale-95">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
