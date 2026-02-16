@extends('layouts.app')

@section('content')

    <div class="min-h-screen py-12 bg-[#F8FAFC]" x-data="{
        assignment: null,
        loading: true,
        showMessaging: false,
        activeAssignment: null,
        messages: [],
        newMessage: '',
        messageLoading: false,
        apiError: null,
        fileUploading: false,
        orderNumber: '{{ $order_number }}',
        async fetchAssignment() {
            this.loading = true;
            this.apiError = null;
            try {
                const response = await window.axios.get(`/api/assignments?order_number=${this.orderNumber}`);
                const data = response.data;
                const fetchedAssignments = Array.isArray(data.data) ? data.data : [];
                this.assignment = fetchedAssignments.length > 0 ? fetchedAssignments[0] : null;
                
                if (!this.assignment) {
                    this.apiError = 'Assignment Not Found';
                }
            } catch (error) {
                console.error('Error fetching assignment details:', error);
                this.apiError = 'Connection Error';
            } finally {
                this.loading = false;
            }
        },
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
        getStatusGradient(status) {
            if (!status) return 'from-slate-400 to-slate-500';
            const s = status.toLowerCase();
            if (s === 'completed') return 'from-emerald-500 to-teal-600 shadow-emerald-100';
            if (s === 'in progress' || s === 'assigned') return 'from-indigo-500 to-purple-600 shadow-indigo-100';
            if (s === 'new' || s === 'pending') return 'from-amber-400 to-orange-500 shadow-amber-100';
            return 'from-slate-500 to-slate-600 shadow-slate-100';
        },
        parseRequirements(req) {
            if (!req) return null;
            try {
                // If it looks like JSON, try parsing it
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
                    this.fetchAssignment(); // Refresh to show all new files
                } else {
                    alert(data.message || 'Upload failed');
                }
            } catch (error) {
                console.error('Error uploading files:', error);
                alert('Connection error during upload');
            } finally {
                this.fileUploading = false;
                event.target.value = ''; // Reset input
            }
        }
    }" x-init="fetchAssignment()">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Breadcrumb & Back -->
            <div class="flex items-center gap-4 mb-8">
                <a href="{{ route('dashboard') }}" class="group flex items-center gap-2 text-slate-500 hover:text-indigo-600 transition-all font-bold text-sm">
                    <div class="w-10 h-10 rounded-xl bg-white shadow-sm border border-slate-100 flex items-center justify-center group-hover:bg-indigo-600 group-hover:text-white transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </div>
                    Back to Dashboard
                </a>
            </div>

            <template x-if="loading">
                <div class="bg-white rounded-[3rem] p-24 text-center border border-slate-100 shadow-xl shadow-slate-200/50">
                    <div class="relative w-20 h-20 mx-auto mb-8">
                        <div class="absolute inset-0 border-4 border-indigo-100 rounded-full"></div>
                        <div class="absolute inset-0 border-4 border-indigo-600 rounded-full border-t-transparent animate-spin"></div>
                    </div>
                    <h3 class="text-xl font-black text-slate-900 tracking-tight">Syncing Assignment Data...</h3>
                    <p class="text-slate-400 font-medium mt-2">Connecting to secure expert portal</p>
                </div>
            </template>

            <template x-if="!loading && assignment">
                <div class="space-y-10">
                    <!-- Premium Header Section -->
                    <div class="relative overflow-hidden bg-white rounded-[3.5rem] border border-slate-100 shadow-2xl shadow-slate-200/60 p-10 lg:p-14">
                        <div class="relative z-10 flex flex-col lg:flex-row justify-between gap-12 text-left">
                            <div class="flex-1 space-y-6">
                                <div class="flex flex-wrap items-center gap-4">
                                    <div :class="getStatusGradient(assignment.status)" class="bg-gradient-to-r px-6 py-2 rounded-2xl text-white text-[10px] font-black uppercase tracking-[0.2em] shadow-lg" x-text="assignment.status"></div>
                                    <div class="px-5 py-2 bg-slate-50 border border-slate-100 rounded-2xl text-slate-500 text-[10px] font-black uppercase tracking-widest" x-text="assignment.subject"></div>
                                    <template x-if="assignment.academic_level">
                                        <div class="px-5 py-2 bg-indigo-50 border border-indigo-100 rounded-2xl text-indigo-600 text-[10px] font-black uppercase tracking-widest" x-text="assignment.academic_level"></div>
                                    </template>
                                    <div class="text-indigo-600 font-black text-[10px] uppercase tracking-widest flex items-center gap-2">
                                        <span class="w-1.5 h-1.5 rounded-full bg-indigo-600"></span>
                                        Order #<span x-text="assignment.order_number"></span>
                                    </div>
                                </div>
                                <h1 class="text-2xl sm:text-4xl font-black text-slate-900 tracking-tight leading-tight" x-text="assignment.title"></h1>
                                
                                <div class="flex flex-wrap items-center gap-8 pt-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Due Date</p>
                                            <p class="text-lg font-black text-slate-900" x-text="assignment.deadline"></p>
                                        </div>
                                    </div>
                                    <div class="w-px h-10 bg-slate-100 hidden sm:block"></div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center text-purple-600">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none mb-1">Volume</p>
                                            <p class="text-lg font-black text-slate-900" x-text="assignment.pages + ' Pages'"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:w-80 flex flex-col gap-4">
                                <button @click="openMessaging(assignment)" class="group w-full p-6 bg-slate-900 rounded-[2rem] text-white hover:bg-indigo-600 transition-all duration-500 shadow-xl shadow-slate-200 active:scale-95 text-left relative overflow-hidden">
                                    <div class="relative z-10 flex flex-col gap-4">
                                        <div class="w-12 h-12 rounded-2xl bg-white/10 flex items-center justify-center group-hover:bg-white group-hover:text-indigo-600 transition-all">
                                            <svg class="w-6 h-6 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="text-xl font-black tracking-tight">Chat with Expert</p>
                                            <p class="text-slate-400 group-hover:text-indigo-100 text-xs font-bold transition-colors">Direct communication channel</p>
                                        </div>
                                    </div>
                                    <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-white/5 rounded-full group-hover:scale-150 transition-transform duration-700"></div>
                                </button>
                                
                                <div class="p-6 bg-slate-50 border border-slate-100 rounded-[2rem] flex items-center gap-4">
                                    <div class="flex -space-x-3">
                                        <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-200 overflow-hidden shadow-sm">
                                            <img src="https://ui-avatars.com/api/?name=Expert+Writer&background=6366f1&color=fff" alt="Expert">
                                        </div>
                                        <div class="w-10 h-10 rounded-full border-2 border-white bg-indigo-600 flex items-center justify-center text-white text-[10px] font-black shadow-sm">
                                            AI
                                        </div>
                                    </div>
                                    <div class="text-left">
                                        <p class="text-xs font-black text-slate-900 leading-none">Verified Expert Team</p>
                                        <p class="text-[10px] font-bold text-slate-400 mt-1 uppercase tracking-widest">Active assigned</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Header Background Accent -->
                        <div class="absolute top-0 right-0 w-[50%] h-full bg-indigo-50/30 -skew-x-12 translate-x-32 pointer-events-none"></div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                        <!-- LEFT GRID: Content Areas -->
                        <div class="lg:col-span-2 space-y-10">
                            
                            <!-- Master Progress Card -->
                            <div class="bg-white rounded-[3rem] border border-slate-100 shadow-xl shadow-slate-200/40 p-10 space-y-12">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-2xl font-black text-slate-900 tracking-tight">Success Roadmap</h3>
                                    <div class="flex items-center gap-2 px-4 py-2 bg-indigo-50 rounded-xl text-indigo-600 font-black text-[10px] uppercase tracking-widest">
                                        <span class="w-2 h-2 rounded-full bg-indigo-600 animate-pulse"></span>
                                        Live Status: <span x-text="assignment.status"></span>
                                    </div>
                                </div>

                                <div class="relative">
                                    <!-- Progress Line -->
                                    <div class="absolute top-5 left-8 right-8 h-1 bg-slate-100 rounded-full">
                                        <div class="h-full bg-indigo-600 rounded-full transition-all duration-[2s] ease-out shadow-[0_0_15px_rgba(99,102,241,0.4)]" 
                                             :style="assignment.status === 'Completed' ? 'width: 100%' : (['In Progress', 'Assigned'].includes(assignment.status) ? 'width: 50%' : 'width: 10%')"></div>
                                    </div>

                                    <div class="grid grid-cols-3 relative z-10">
                                        <div class="text-center group">
                                            <div class="w-10 h-10 rounded-2xl bg-indigo-600 text-white flex items-center justify-center mx-auto shadow-lg shadow-indigo-100 group-hover:scale-110 transition-transform">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                            </div>
                                            <p class="mt-4 text-xs font-black text-indigo-900 uppercase tracking-widest">Initialization</p>
                                            <p class="text-[10px] font-bold text-slate-400 mt-1">Confirmed</p>
                                        </div>
                                        <div class="text-center group">
                                            <div class="w-10 h-10 rounded-2xl flex items-center justify-center mx-auto transition-all duration-500 group-hover:scale-110" 
                                                 :class="['In Progress', 'Completed', 'Assigned'].includes(assignment.status) ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-100' : 'bg-white border-2 border-slate-100 text-slate-300'">
                                                <span class="text-sm font-black">02</span>
                                            </div>
                                            <p class="mt-4 text-xs font-black uppercase tracking-widest" :class="['In Progress', 'Completed', 'Assigned'].includes(assignment.status) ? 'text-indigo-900' : 'text-slate-400'">Execution</p>
                                            <p class="text-[10px] font-bold text-slate-400 mt-1" x-text="['In Progress', 'Completed', 'Assigned'].includes(assignment.status) ? 'Running Now' : 'Pending'"></p>
                                        </div>
                                        <div class="text-center group">
                                            <div class="w-10 h-10 rounded-2xl flex items-center justify-center mx-auto transition-all duration-500 group-hover:scale-110" 
                                                 :class="assignment.status === 'Completed' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-100' : 'bg-white border-2 border-slate-100 text-slate-300'">
                                                <span class="text-sm font-black">03</span>
                                            </div>
                                            <p class="mt-4 text-xs font-black uppercase tracking-widest" :class="assignment.status === 'Completed' ? 'text-indigo-900' : 'text-slate-400'">Completion</p>
                                            <p class="text-[10px] font-bold text-slate-400 mt-1" x-text="assignment.status === 'Completed' ? 'Finalized' : 'Final Step'"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Specification Tiles -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                                <div class="bg-indigo-600 rounded-[2.5rem] p-10 text-white relative overflow-hidden group">
                                    <div class="relative z-10 space-y-6">
                                        <div class="w-14 h-14 rounded-2xl bg-white/10 flex items-center justify-center">
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.168.477-4.5 1.253"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="text-indigo-100/60 text-[10px] font-black uppercase tracking-widest mb-1">Academic Standards</h4>
                                            <p class="text-2xl font-black" x-text="assignment.citation || 'APA Framework'"></p>
                                            <p class="text-indigo-200/60 text-xs font-bold mt-2 leading-relaxed">Referencing and citation strictly followed as per requirements.</p>
                                        </div>
                                    </div>
                                    <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-white/5 rounded-full group-hover:scale-125 transition-all duration-700"></div>
                                </div>

                                <div class="bg-white rounded-[2.5rem] p-10 border border-slate-100 shadow-xl shadow-slate-200/30 text-left group overflow-hidden relative">
                                    <div class="relative z-10 space-y-6">
                                        <div class="w-14 h-14 rounded-2xl bg-indigo-50 text-indigo-600 flex items-center justify-center">
                                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        </div>
                                        <div>
                                            <h4 class="text-slate-400 text-[10px] font-black uppercase tracking-widest mb-1">Service Classification</h4>
                                            <p class="text-2xl font-black text-slate-900" x-text="assignment.service_type || 'Custom Service'"></p>
                                            <p class="text-slate-400 text-xs font-bold mt-2 leading-relaxed" x-text="assignment.subject"></p>
                                        </div>
                                    </div>
                                    <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-indigo-50 rounded-full pointer-events-none"></div>
                                </div>
                            </div>

                            <!-- Detailed Assignment Brief -->
                            <div class="bg-white rounded-[3rem] border border-slate-100 shadow-xl shadow-slate-200/40 p-10 space-y-8" x-show="assignment.description || assignment.specific_requirements">
                                <h3 class="text-2xl font-black text-slate-900 tracking-tight flex items-center gap-4">
                                    <span class="w-10 h-10 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-lg">📝</span>
                                    Project Requirements
                                </h3>
                                
                                <div class="space-y-6">
                                    <template x-if="assignment.description">
                                        <div class="space-y-3">
                                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-widest">General Description</h4>
                                            <div class="p-6 bg-slate-50 rounded-2xl text-slate-600 font-medium leading-relaxed prose prose-sm max-w-none" x-html="assignment.description.replace(/\n/g, '<br>')"></div>
                                        </div>
                                    </template>

                                    <template x-if="assignment.specific_requirements">
                                        <div class="space-y-4">
                                            <h4 class="text-[10px] font-black text-slate-400 uppercase tracking-widest flex items-center gap-2">
                                                <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                                                Specific Instructions
                                            </h4>
                                            <div class="p-8 bg-slate-50/50 rounded-[2.5rem] border border-slate-100 shadow-sm">
                                                <template x-if="parseRequirements(assignment.specific_requirements).type === 'json'">
                                                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                                                        <template x-for="(value, key) in parseRequirements(assignment.specific_requirements).data" :key="key">
                                                            <div class="p-5 bg-white rounded-2xl border border-slate-100 shadow-sm transition-all hover:border-indigo-200 group/stat">
                                                                <p class="text-[9px] font-black text-slate-400 group-hover:text-indigo-500 uppercase tracking-widest mb-2 transition-colors" x-text="formatKey(key)"></p>
                                                                <p class="text-sm font-black text-slate-900" x-text="value === true ? 'Yes' : (value === false ? 'No' : (value || 'N/A'))"></p>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </template>
                                                <template x-if="parseRequirements(assignment.specific_requirements).type === 'text'">
                                                    <div class="text-sm font-medium leading-relaxed text-slate-600 prose prose-slate max-w-none" x-html="assignment.specific_requirements.replace(/\n/g, '<br>')"></div>
                                                </template>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- RIGHT GRID: Action & Finance -->
                        <div class="space-y-10">
                            
                            <!-- Premium Financial Card -->
                            <div class="bg-[#0F172A] rounded-[3rem] p-10 text-white shadow-2xl shadow-indigo-900/10 space-y-10 relative overflow-hidden group">
                                <div class="relative z-10 flex flex-col items-center gap-6">
                                    <div class="w-20 h-20 rounded-[2rem] bg-indigo-600 flex items-center justify-center text-3xl font-black shadow-2xl shadow-indigo-600/40">
                                        $
                                    </div>
                                    <div class="text-center">
                                        <p class="text-slate-500 text-[10px] font-black uppercase tracking-[0.3em] mb-2">Investment Summary</p>
                                        <h2 class="text-5xl font-black tracking-tight" x-text="'$' + (parseFloat(assignment.budget) || 0).toFixed(2)"></h2>
                                    </div>
                                    
                                    <div class="w-full space-y-4 pt-8 border-t border-white/5">
                                        <div class="flex justify-between items-center px-2">
                                            <span class="text-xs font-bold text-slate-400">Paid Amount</span>
                                            <span class="text-sm font-black text-emerald-400 bg-emerald-400/10 px-3 py-1 rounded-lg" x-text="'$' + (parseFloat(assignment.amount_paid) || 0).toFixed(2)"></span>
                                        </div>
                                        <div class="flex justify-between items-center px-2">
                                            <span class="text-xs font-bold text-slate-400">Balance Remaining</span>
                                            <span class="text-sm font-black text-rose-400 bg-rose-400/10 px-3 py-1 rounded-lg" x-text="'$' + (parseFloat(assignment.amount_due) || 0).toFixed(2)"></span>
                                        </div>
                                    </div>

                                    <div class="w-full pt-4">
                                        <template x-if="parseFloat(assignment.amount_due) > 0">
                                            <button class="w-full py-5 bg-white text-slate-900 rounded-2xl font-black text-xs hover:bg-slate-50 transition-all uppercase tracking-widest shadow-xl active:scale-95 flex items-center justify-center gap-2">
                                                Finalize Payment
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </button>
                                        </template>
                                        <template x-if="parseFloat(assignment.amount_due) <= 0">
                                            <div class="w-full py-5 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-2xl text-center font-black text-[10px] uppercase tracking-widest">
                                                Verified & Cleared
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-500/10 rounded-full blur-3xl -mr-16 -mt-16"></div>
                            </div>

                            <!-- Digital Assets Card -->
                            <div class="bg-white rounded-[3rem] border border-slate-100 shadow-xl shadow-slate-200/40 p-10 text-center space-y-8">
                                <h3 class="text-xs font-black text-slate-400 uppercase tracking-widest">Workspace Assets</h3>
                                
                                    <div class="space-y-4">
                                        <template x-if="assignment.files && assignment.files.length > 0">
                                            <div class="space-y-3">
                                                <template x-for="file in assignment.files" :key="file.id">
                                                    <a :href="file.url" target="_blank" class="flex items-center justify-between p-4 bg-white border border-slate-100 rounded-2xl hover:border-indigo-600 transition-all group/file">
                                                        <div class="flex items-center gap-3 overflow-hidden">
                                                            <div class="w-10 h-10 rounded-xl bg-slate-50 flex items-center justify-center text-xl group-hover/file:bg-indigo-600 group-hover/file:text-white transition-all" x-text="file.icon"></div>
                                                            <div class="overflow-hidden">
                                                                <p class="text-xs font-black text-slate-900 truncate" x-text="file.name"></p>
                                                                <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest mt-1" x-text="file.size"></p>
                                                            </div>
                                                        </div>
                                                        <div class="text-indigo-600 opacity-0 group-hover/file:opacity-100 transition-all">
                                                            <svg class="w-5 h-5 font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0L8 8m4-4v12"></path></svg>
                                                        </div>
                                                    </a>
                                                </template>
                                            </div>
                                        </template>

                                        <template x-if="!assignment.files || assignment.files.length === 0">
                                            <div class="space-y-5">
                                                <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mx-auto shadow-sm border border-slate-100">
                                                    <svg class="w-8 h-8 text-slate-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                                </div>
                                                <p class="text-xs font-bold text-slate-400 leading-relaxed">No files uploaded yet.</p>
                                            </div>
                                        </template>

                                        <!-- Hidden Multi-File Input -->
                                        <input type="file" x-ref="fileInput" class="hidden" @change="uploadFiles($event)" multiple>
                                        
                                        <button @click="triggerUpload()" 
                                                :disabled="fileUploading"
                                                class="w-full group/up p-8 bg-slate-50 border-2 border-dashed border-slate-200 rounded-[2.5rem] hover:border-indigo-400 hover:bg-indigo-50/30 transition-all duration-500 disabled:opacity-50">
                                            <template x-if="!fileUploading">
                                                <div class="flex flex-col items-center gap-3">
                                                    <div class="w-14 h-14 rounded-2xl bg-white shadow-sm border border-slate-100 flex items-center justify-center text-2xl group-hover/up:scale-110 group-hover/up:bg-indigo-600 group-hover/up:text-white transition-all duration-500">
                                                        📎
                                                    </div>
                                                    <div class="text-center">
                                                        <p class="text-xs font-black text-slate-900 uppercase tracking-widest">Add Attachments</p>
                                                        <p class="text-[9px] font-bold text-slate-400 uppercase tracking-[0.2em] mt-1">Multi-file support active</p>
                                                    </div>
                                                </div>
                                            </template>
                                            <template x-if="fileUploading">
                                                <div class="flex flex-col items-center gap-4">
                                                    <div class="relative w-12 h-12">
                                                        <div class="absolute inset-0 border-4 border-indigo-100 rounded-full"></div>
                                                        <div class="absolute inset-0 border-4 border-indigo-600 rounded-full border-t-transparent animate-spin"></div>
                                                    </div>
                                                    <p class="text-[10px] font-black text-indigo-600 uppercase tracking-[0.2em] animate-pulse">Syncing Files...</p>
                                                </div>
                                            </template>
                                        </button>
                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </template>

            <!-- Error State -->
            <template x-if="!loading && apiError">
                <div class="bg-white rounded-[3.5rem] p-24 text-center border border-slate-100 shadow-2xl shadow-slate-200/40">
                    <div class="w-24 h-24 bg-rose-50 text-rose-500 rounded-[2.5rem] flex items-center justify-center mx-auto mb-8 text-4xl">⚠️</div>
                    <h2 class="text-4xl font-black text-slate-900 tracking-tight mb-4" x-text="apiError"></h2>
                    <p class="text-slate-500 text-lg font-medium mb-10 max-w-md mx-auto">This order might have been moved or does not exist. Please check your dashboard for active assignments.</p>
                    <a href="{{ route('dashboard') }}" class="inline-flex px-12 py-5 bg-slate-900 text-white font-black rounded-3xl hover:bg-indigo-600 transition-all shadow-xl active:scale-95">
                        Return to Dashboard
                    </a>
                </div>
            </template>

        </div>

        <!-- Messaging Slide-over (Enhanced Visuals) -->
        <div x-show="showMessaging" 
             class="fixed inset-0 overflow-hidden z-[101]" 
             style="display: none;">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 bg-slate-900/60 backdrop-blur-md transition-opacity" 
                     @click="showMessaging = false"
                     x-show="showMessaging"
                     x-transition:enter="ease-out duration-500"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="ease-in duration-500"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"></div>

                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <div class="pointer-events-auto w-screen max-w-lg transform transition duration-500 ease-in-out"
                         x-show="showMessaging"
                         x-transition:enter="transform transition ease-in-out duration-500"
                         x-transition:enter-start="translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transform transition ease-in-out duration-500"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="translate-x-full">
                        <div class="flex h-full flex-col bg-white shadow-2xl rounded-l-[3.5rem] border-l border-slate-100">
                            <!-- Premium Chat Header -->
                            <div class="bg-slate-900 p-8 sm:p-10 relative overflow-hidden flex flex-col gap-6">
                                <div class="relative z-10 flex items-start justify-between">
                                    <div class="flex items-center gap-5">
                                        <div class="w-16 h-16 rounded-[1.5rem] bg-indigo-600 flex items-center justify-center text-2xl shadow-xl shadow-indigo-600/30">💬</div>
                                        <div class="text-left">
                                            <h2 class="text-2xl font-black text-white tracking-tight leading-none" x-text="'Chat: #' + activeAssignment?.order_number"></h2>
                                            <p class="text-slate-400 text-xs font-bold mt-2 flex items-center gap-2 uppercase tracking-widest">
                                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                                Expert Support Active
                                            </p>
                                        </div>
                                    </div>
                                    <button @click="showMessaging = false" class="w-10 h-10 flex items-center justify-center rounded-xl bg-white/10 text-white hover:bg-white/20 transition-all active:scale-90">
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                    </button>
                                </div>
                                <div class="relative z-10 bg-white/5 border border-white/5 p-4 rounded-2xl flex items-center justify-between">
                                    <p class="text-xs font-bold text-slate-300 overflow-hidden text-ellipsis whitespace-nowrap px-2" x-text="activeAssignment?.title"></p>
                                    <span class="px-3 py-1 bg-white/10 rounded-lg text-white font-black text-[8px] uppercase tracking-widest whitespace-nowrap" x-text="activeAssignment?.status"></span>
                                </div>
                                <div class="absolute -right-16 -top-16 w-48 h-48 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
                            </div>

                            <!-- Optimized Messages Flow -->
                            <div class="relative flex-1 p-8 sm:p-10 flex flex-col gap-6 overflow-y-auto bg-slate-50/50" x-ref="messageContainer">
                                <template x-for="msg in messages" :key="msg.id">
                                    <div class="flex flex-col" :class="msg.sender_type === 'user' ? 'items-end' : 'items-start'">
                                        <div class="max-w-[85%] p-5 text-sm font-medium leading-relaxed shadow-sm transition-all"
                                            :class="msg.sender_type === 'user' ? 'bg-indigo-600 text-white rounded-[1.5rem] rounded-tr-none' : 'bg-white text-slate-800 border border-slate-100 rounded-[1.5rem] rounded-tl-none'">
                                            <p x-text="msg.body"></p>
                                        </div>
                                        <div class="flex items-center gap-2 mt-2 px-2">
                                            <span class="text-[9px] text-slate-400 font-bold uppercase tracking-widest" x-text="msg.sender_type === 'user' ? 'You' : 'Expert Team'"></span>
                                            <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                            <span class="text-[9px] text-slate-400 font-bold" x-text="msg.created_at_human"></span>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            <!-- Modern Input Deck -->
                            <div class="p-8 sm:p-10 bg-white border-t border-slate-100">
                                <div class="relative group">
                                    <textarea 
                                       rows="1"
                                       x-model="newMessage" 
                                       @keydown.enter.prevent="sendMessage()"
                                       class="w-full bg-slate-50 border-none rounded-3xl py-5 pl-8 pr-20 text-sm font-bold placeholder:text-slate-400 focus:ring-2 focus:ring-indigo-500 transition-all shadow-inner min-h-[60px] max-h-32"
                                       placeholder="Share your details..."></textarea>
                                    <button @click="sendMessage()" 
                                            class="absolute right-3 top-2 w-12 h-12 bg-indigo-600 text-white rounded-2xl hover:bg-slate-900 transition-all shadow-xl shadow-indigo-200 flex items-center justify-center active:scale-90 group-hover:scale-105">
                                        <svg class="w-6 h-6 rotate-45 -translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                    </button>
                                </div>
                                <p class="text-[9px] text-center text-slate-400 font-bold mt-4 uppercase tracking-[0.2em]">Encrypted and Secure Session</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
