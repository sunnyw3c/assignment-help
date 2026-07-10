@extends('layouts.app')

@section('content')

    <div class="min-h-screen py-6 bg-slate-50 dark:bg-slate-950 text-slate-800 dark:text-slate-200 transition-colors duration-300 relative overflow-hidden" 
         x-data="{
            assignment: null,
            loading: true,
            activeTab: 'details', {{-- details, files, chat --}}
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
                    } else if (this.activeTab === 'chat') {
                        // Refresh messages if chat tab is open
                        await this.fetchMessages();
                    }
                } catch (error) {
                    console.error('Error fetching assignment details:', error);
                    this.apiError = 'Connection Error';
                } finally {
                    this.loading = false;
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
         }" 
         x-init="fetchAssignment()">
        
        <!-- Abstract gradient mesh overlay for premium styling -->
        <div class="absolute top-0 left-0 right-0 h-[400px] bg-gradient-to-b from-orange-500/5 via-indigo-500/0 to-transparent dark:from-orange-500/10 dark:via-slate-950/0 pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Breadcrumb Navigation -->
            <div class="flex items-center justify-between mb-5">
                <a href="{{ route('dashboard') }}" class="group flex items-center gap-2 text-slate-500 dark:text-slate-400 hover:text-[#f16700] dark:hover:text-[#f16700] transition-colors font-bold text-xs">
                    <div class="w-8 h-8 rounded-lg bg-white dark:bg-slate-900 shadow-sm border border-slate-200/60 dark:border-slate-800/80 flex items-center justify-center group-hover:bg-[#f16700] group-hover:text-white transition-all">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    </div>
                    Back to Dashboard
                </a>
            </div>

            <!-- Loading State -->
            <template x-if="loading">
                <div class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl p-16 text-center border border-slate-200/60 dark:border-slate-800/80 shadow-sm">
                    <div class="relative w-10 h-10 mx-auto mb-4">
                        <div class="absolute inset-0 border-4 border-slate-100 dark:border-slate-800 rounded-full"></div>
                        <div class="absolute inset-0 border-4 border-[#f16700] rounded-full border-t-transparent animate-spin"></div>
                    </div>
                    <h3 class="text-sm font-bold text-slate-800 dark:text-slate-200 tracking-tight">Syncing workspace...</h3>
                </div>
            </template>

            <!-- Error State -->
            <template x-if="!loading && apiError">
                <div class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl p-12 text-center border border-slate-200/60 dark:border-slate-800/80 shadow-sm max-w-lg mx-auto">
                    <div class="w-12 h-12 bg-rose-500/10 text-rose-500 rounded-xl flex items-center justify-center mx-auto mb-4 text-xl">⚠️</div>
                    <h2 class="text-lg font-bold text-slate-900 dark:text-slate-100 mb-2" x-text="apiError"></h2>
                    <p class="text-xs text-slate-500 dark:text-slate-400 mb-6">This order might have been moved, deleted, or does not belong to your account.</p>
                    <a href="{{ route('dashboard') }}" class="inline-flex px-5 py-2 bg-slate-900 dark:bg-slate-950 border border-slate-800 rounded-lg text-white font-bold text-xs hover:bg-[#f16700] transition-colors shadow-sm uppercase tracking-wider">
                        Return to Dashboard
                    </a>
                </div>
            </template>

            <!-- Main Dashboard Panel -->
            <template x-if="!loading && assignment">
                <div class="space-y-6">
                    
                    <!-- Header Section -->
                    <div class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl border border-slate-200/60 dark:border-slate-800/80 shadow-sm p-6 sm:p-8">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                            <div class="space-y-2.5">
                                <div class="flex flex-wrap items-center gap-2 text-xs">
                                    <span :class="getStatusGradient(assignment.status)" class="px-2.5 py-0.5 rounded-md text-[10px] font-bold uppercase tracking-wider" x-text="assignment.status"></span>
                                    <span class="px-2.5 py-0.5 bg-slate-100 dark:bg-slate-800 rounded-md text-slate-600 dark:text-slate-300 font-bold uppercase tracking-wider" x-text="assignment.subject"></span>
                                    <template x-if="assignment.academic_level">
                                        <span class="px-2.5 py-0.5 bg-orange-500/10 text-[#f16700] rounded-md font-bold uppercase tracking-wider" x-text="assignment.academic_level"></span>
                                    </template>
                                    <span class="text-slate-400 dark:text-slate-500 font-bold uppercase tracking-wider">Order #<span x-text="assignment.order_number"></span></span>
                                </div>
                                <h1 class="text-xl sm:text-2xl font-bold text-slate-900 dark:text-slate-100 tracking-tight" x-text="assignment.title"></h1>
                            </div>
                            
                            <!-- Header Mini Quick Stats -->
                            <div class="flex flex-wrap gap-4 items-center">
                                <div class="text-left shrink-0">
                                    <p class="text-[9px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider leading-none mb-1">Due Date</p>
                                    <p class="text-xs sm:text-sm font-bold text-slate-900 dark:text-slate-100" x-text="assignment.deadline"></p>
                                </div>
                                <div class="w-px h-6 bg-slate-200 dark:bg-slate-800 hidden sm:block"></div>
                                <div class="text-left shrink-0">
                                    <p class="text-[9px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider leading-none mb-1">Volume</p>
                                    <p class="text-xs sm:text-sm font-bold text-slate-900 dark:text-slate-100" x-text="assignment.pages + ' Pages'"></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Columns Grid Layout -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                        
                        <!-- LEFT COL (2/3 width) - WORKSPACE CARD -->
                        <div class="lg:col-span-2 space-y-6">
                            
                            <div class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl border border-slate-200/60 dark:border-slate-800/80 shadow-sm overflow-hidden">
                                
                                <!-- Workspace Tabs Header -->
                                <div class="flex border-b border-slate-200/60 dark:border-slate-800/80 bg-slate-50/50 dark:bg-slate-950/20 px-4 sm:px-6">
                                    <button @click="changeTab('details')" 
                                            class="py-3 px-4 text-xs sm:text-sm font-bold transition-all border-b-2 outline-none cursor-pointer flex items-center gap-1.5"
                                            :class="activeTab === 'details' ? 'border-[#f16700] text-[#f16700]' : 'border-transparent text-slate-500 hover:text-slate-800 dark:hover:text-slate-200'">
                                        <span>📝</span> Instructions
                                    </button>
                                    <button @click="changeTab('files')" 
                                            class="py-3 px-4 text-xs sm:text-sm font-bold transition-all border-b-2 outline-none cursor-pointer flex items-center gap-1.5"
                                            :class="activeTab === 'files' ? 'border-[#f16700] text-[#f16700]' : 'border-transparent text-slate-500 hover:text-slate-800 dark:hover:text-slate-200'">
                                        <span>📎</span> Attachments
                                        <template x-if="assignment.files && assignment.files.length > 0">
                                            <span class="px-1.5 py-0.5 bg-slate-200 dark:bg-slate-800 text-[10px] rounded-md text-slate-700 dark:text-slate-300" x-text="assignment.files.length"></span>
                                        </template>
                                    </button>
                                    <button @click="changeTab('chat')" 
                                            class="py-3 px-4 text-xs sm:text-sm font-bold transition-all border-b-2 outline-none cursor-pointer flex items-center gap-1.5"
                                            :class="activeTab === 'chat' ? 'border-[#f16700] text-[#f16700]' : 'border-transparent text-slate-500 hover:text-slate-800 dark:hover:text-slate-200'">
                                        <span>💬</span> Chat with Expert
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
                                    </button>
                                </div>

                                <!-- Tab Contents Workspace -->
                                <div class="p-6 sm:p-8">
                                    
                                    <!-- TAB 1: DETAILS -->
                                    <div x-show="activeTab === 'details'" class="space-y-6">
                                        
                                        <!-- General Description -->
                                        <template x-if="assignment.description">
                                            <div class="space-y-2">
                                                <h3 class="text-xs font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">General Description</h3>
                                                <div class="p-4 bg-slate-50 dark:bg-slate-950/40 border border-slate-200/40 dark:border-slate-800/80 rounded-xl text-slate-700 dark:text-slate-300 font-medium text-xs leading-relaxed prose prose-sm max-w-none" x-html="assignment.description.replace(/\n/g, '<br>')"></div>
                                            </div>
                                        </template>

                                        <!-- Specific Requirements -->
                                        <template x-if="assignment.specific_requirements">
                                            <div class="space-y-2">
                                                <h3 class="text-xs font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Technical Specifications</h3>
                                                <div class="p-4 bg-slate-50/50 dark:bg-slate-950/20 rounded-xl border border-slate-200/50 dark:border-slate-800/80 shadow-inner">
                                                    <template x-if="parseRequirements(assignment.specific_requirements).type === 'json'">
                                                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
                                                            <template x-for="(value, key) in parseRequirements(assignment.specific_requirements).data" :key="key">
                                                                <div class="p-3 bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-xl">
                                                                    <p class="text-[8px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider mb-1" x-text="formatKey(key)"></p>
                                                                    <p class="text-xs font-bold text-slate-800 dark:text-slate-200" x-text="value === true ? 'Yes' : (value === false ? 'No' : (value || 'N/A'))"></p>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </template>
                                                    <template x-if="parseRequirements(assignment.specific_requirements).type === 'text'">
                                                        <div class="text-xs font-medium leading-relaxed text-slate-700 dark:text-slate-300 prose prose-slate max-w-none" x-html="assignment.specific_requirements.replace(/\n/g, '<br>')"></div>
                                                    </template>
                                                </div>
                                            </div>
                                        </template>

                                        <!-- Citation/Standards -->
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                            <div class="p-4 bg-slate-50 dark:bg-slate-950/40 border border-slate-200/50 dark:border-slate-800/80 rounded-xl">
                                                <span class="text-[9px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider block mb-1">Academic Standards</span>
                                                <span class="text-xs font-bold text-slate-800 dark:text-slate-200" x-text="assignment.citation || 'APA Citation Format'"></span>
                                            </div>
                                            <div class="p-4 bg-slate-50 dark:bg-slate-950/40 border border-slate-200/50 dark:border-slate-800/80 rounded-xl">
                                                <span class="text-[9px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider block mb-1">Service Type</span>
                                                <span class="text-xs font-bold text-slate-800 dark:text-slate-200 text-capitalize" x-text="assignment.service_type || 'Academic Custom Task'"></span>
                                            </div>
                                        </div>

                                        <!-- Success Roadmap -->
                                        <div class="space-y-4 pt-4 border-t border-slate-200/60 dark:border-slate-800/80">
                                            <h3 class="text-xs font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Success Roadmap</h3>
                                            
                                            <div class="relative py-2">
                                                <div class="absolute top-6 left-6 right-6 h-0.5 bg-slate-100 dark:bg-slate-800 rounded-full">
                                                    <div class="h-full bg-[#f16700] rounded-full transition-all duration-[1s]" 
                                                         :style="assignment.status === 'Completed' ? 'width: 100%' : (['In Progress', 'Assigned'].includes(assignment.status) ? 'width: 50%' : 'width: 10%')"></div>
                                                </div>

                                                <div class="grid grid-cols-3 relative z-10 text-center">
                                                    <div>
                                                        <div class="w-8 h-8 rounded-full bg-[#f16700] text-white flex items-center justify-center mx-auto shadow-sm text-xs font-bold">✓</div>
                                                        <p class="mt-2 text-[10px] font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider">Initialization</p>
                                                        <p class="text-[9px] text-slate-400 dark:text-slate-500">Confirmed</p>
                                                    </div>
                                                    <div>
                                                        <div class="w-8 h-8 rounded-full flex items-center justify-center mx-auto text-xs font-bold border-2 transition-colors duration-300"
                                                             :class="['In Progress', 'Completed', 'Assigned'].includes(assignment.status) ? 'bg-[#f16700] text-white border-transparent' : 'bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-800 text-slate-400'">02</div>
                                                        <p class="mt-2 text-[10px] font-bold uppercase tracking-wider" :class="['In Progress', 'Completed', 'Assigned'].includes(assignment.status) ? 'text-slate-700 dark:text-slate-300' : 'text-slate-400'">Execution</p>
                                                        <p class="text-[9px] text-slate-400" x-text="['In Progress', 'Completed', 'Assigned'].includes(assignment.status) ? 'Active' : 'Pending'"></p>
                                                    </div>
                                                    <div>
                                                        <div class="w-8 h-8 rounded-full flex items-center justify-center mx-auto text-xs font-bold border-2 transition-colors duration-300"
                                                             :class="assignment.status === 'Completed' ? 'bg-[#f16700] text-white border-transparent' : 'bg-white dark:bg-slate-900 border-slate-200 dark:border-slate-800 text-slate-400'">03</div>
                                                        <p class="mt-2 text-[10px] font-bold uppercase tracking-wider" :class="assignment.status === 'Completed' ? 'text-slate-700 dark:text-slate-300' : 'text-slate-400'">Completion</p>
                                                        <p class="text-[9px] text-slate-400" x-text="assignment.status === 'Completed' ? 'Delivered' : 'Final Step'"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- TAB 2: FILES -->
                                    <div x-show="activeTab === 'files'" class="space-y-6">
                                        
                                        <div class="flex justify-between items-center pb-2 border-b border-slate-200/60 dark:border-slate-800/80">
                                            <h3 class="text-xs font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Uploaded Documents</h3>
                                            <button @click="triggerUpload()" :disabled="fileUploading" class="px-3 py-1 bg-slate-900 dark:bg-slate-800 hover:bg-[#f16700] dark:hover:bg-[#f16700] text-white rounded-lg text-xs font-bold transition-all cursor-pointer">
                                                Add Attachments
                                            </button>
                                        </div>

                                        <!-- Files List -->
                                        <div class="space-y-3">
                                            <template x-if="assignment.files && assignment.files.length > 0">
                                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                                    <template x-for="file in assignment.files" :key="file.id">
                                                        <a :href="file.url" target="_blank" class="flex items-center justify-between p-3.5 bg-slate-50 dark:bg-slate-950/40 border border-slate-200/50 dark:border-slate-800/80 rounded-xl hover:border-[#f16700] dark:hover:border-orange-500 transition-colors group/file">
                                                            <div class="flex items-center gap-3 overflow-hidden">
                                                                <span class="text-xl shrink-0" x-text="getFileIcon(file.name)"></span>
                                                                <div class="overflow-hidden text-left">
                                                                    <p class="text-xs font-bold text-slate-850 dark:text-slate-200 truncate" x-text="file.name"></p>
                                                                    <p class="text-[9px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider" x-text="file.size"></p>
                                                                </div>
                                                            </div>
                                                            <div class="text-[#f16700] opacity-0 group-hover/file:opacity-100 transition-all shrink-0">
                                                                <svg class="w-4 h-4 font-bold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0L8 8m4-4v12"></path></svg>
                                                            </div>
                                                        </a>
                                                    </template>
                                                </div>
                                            </template>

                                            <template x-if="!assignment.files || assignment.files.length === 0">
                                                <div class="text-center py-8">
                                                    <div class="w-10 h-10 bg-slate-50 dark:bg-slate-950 rounded-xl flex items-center justify-center mx-auto shadow-inner border border-slate-200/60 dark:border-slate-800/80 mb-3 text-lg">📁</div>
                                                    <p class="text-xs font-bold text-slate-400">No attachments uploaded yet.</p>
                                                </div>
                                            </template>
                                        </div>

                                        <!-- Hidden Input and Drag/Drop Mock Area -->
                                        <input type="file" x-ref="fileInput" class="hidden" @change="uploadFiles($event)" multiple>
                                        <div @click="triggerUpload()" 
                                             class="border-2 border-dashed border-slate-200 dark:border-slate-800 hover:border-orange-400 dark:hover:border-orange-500 rounded-xl p-6 text-center cursor-pointer bg-slate-50/50 dark:bg-slate-950/20 hover:bg-slate-50 dark:hover:bg-slate-950/50 transition-all">
                                            <template x-if="!fileUploading">
                                                <div class="space-y-1.5">
                                                    <p class="text-xs font-bold text-slate-700 dark:text-slate-350">Drag and drop files here or <span class="text-[#f16700] hover:underline font-bold">browse</span></p>
                                                    <p class="text-[9px] font-bold text-slate-400 uppercase tracking-wider">PDF, DOC, DOCX, ZIP files up to 10MB</p>
                                                </div>
                                            </template>
                                            <template x-if="fileUploading">
                                                <div class="flex flex-col items-center gap-2 py-1">
                                                    <div class="w-6 h-6 border-2 border-slate-200 dark:border-slate-800 border-t-[#f16700] rounded-full animate-spin"></div>
                                                    <p class="text-[9px] font-bold text-[#f16700] uppercase tracking-wider animate-pulse">Uploading files...</p>
                                                </div>
                                            </template>
                                        </div>

                                    </div>

                                    <!-- TAB 3: CHAT -->
                                    <div x-show="activeTab === 'chat'" class="flex flex-col h-[400px] border border-slate-200/60 dark:border-slate-800/80 rounded-xl overflow-hidden bg-slate-50/50 dark:bg-slate-950/10">
                                        
                                        <!-- Messages List -->
                                        <div class="flex-1 p-4 overflow-y-auto space-y-4" x-ref="messageContainer">
                                            <template x-for="msg in messages" :key="msg.id">
                                                <div class="flex flex-col" :class="msg.sender_type === 'user' ? 'items-end' : 'items-start'">
                                                    <div class="max-w-[80%] p-3.5 text-xs sm:text-sm font-semibold shadow-sm transition-all"
                                                        :class="msg.sender_type === 'user' ? 'bg-[#f16700] text-white rounded-2xl rounded-tr-none' : 'bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 border border-slate-200/60 dark:border-slate-800/80 rounded-2xl rounded-tl-none'">
                                                        <p x-text="msg.body"></p>
                                                    </div>
                                                    <div class="flex items-center gap-1.5 mt-1 px-1">
                                                        <span class="text-[8px] text-slate-400 font-bold uppercase tracking-wider" x-text="msg.sender_type === 'user' ? 'You' : 'Expert Team'"></span>
                                                        <span class="w-1 h-1 rounded-full bg-slate-350 dark:bg-slate-700"></span>
                                                        <span class="text-[8px] text-slate-400 font-bold" x-text="msg.created_at_human"></span>
                                                    </div>
                                                </div>
                                            </template>
                                            
                                            <template x-if="!messageLoading && messages.length === 0">
                                                <div class="text-center py-16">
                                                    <div class="text-2xl mb-2">💬</div>
                                                    <p class="text-xs font-bold text-slate-400">Send a message to your assigned academic expert.</p>
                                                </div>
                                            </template>
                                        </div>

                                        <!-- Message Input Deck -->
                                        <div class="p-3 bg-white dark:bg-slate-900 border-t border-slate-200/60 dark:border-slate-800/80">
                                            <div class="relative flex items-center">
                                                <textarea 
                                                   rows="1"
                                                   x-model="newMessage" 
                                                   @keydown.enter.prevent="sendMessage()"
                                                   class="w-full bg-slate-50 dark:bg-slate-950 border-none rounded-xl py-3 pl-4 pr-12 text-xs sm:text-sm font-semibold placeholder:text-slate-400 focus:ring-1 focus:ring-[#f16700] transition-all shadow-inner resize-none overflow-hidden text-slate-800 dark:text-slate-100"
                                                   placeholder="Type your message to the expert..."></textarea>
                                                <button @click="sendMessage()" 
                                                        class="absolute right-1.5 top-1/2 -translate-y-1/2 w-8 h-8 bg-slate-900 dark:bg-[#f16700] text-white rounded-lg hover:bg-[#f16700] transition-colors flex items-center justify-center active:scale-95 cursor-pointer">
                                                    <svg class="w-4 h-4 rotate-45 -translate-x-0.5 -translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- RIGHT COL (1/3 width) - SIDEBAR BILLING & SUPPORT -->
                        <div class="space-y-6 lg:sticky lg:top-6">
                            
                            <!-- Financial Checkout Card -->
                            <div class="bg-slate-900 dark:bg-slate-900 rounded-2xl p-6 border border-slate-800 dark:border-slate-850 shadow-sm text-white space-y-6 relative overflow-hidden group">
                                <div class="relative z-10 flex flex-col items-center gap-4">
                                    <div class="w-10 h-10 rounded-xl bg-[#f16700] flex items-center justify-center text-lg font-bold shadow-lg shadow-orange-500/20">
                                        $
                                    </div>
                                    <div class="text-center">
                                        <p class="text-slate-400 text-[9px] font-bold uppercase tracking-wider mb-0.5">Order Budget</p>
                                        <h2 class="text-3xl font-black tracking-tight text-white" x-text="'$' + (parseFloat(assignment.budget) || 0).toFixed(2)"></h2>
                                    </div>
                                    
                                    <div class="w-full space-y-2.5 pt-4 border-t border-slate-800">
                                        <div class="flex justify-between items-center px-1">
                                            <span class="text-xs font-semibold text-slate-400">Paid Amount</span>
                                            <span class="text-xs font-bold text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md" x-text="'$' + (parseFloat(assignment.amount_paid) || 0).toFixed(2)"></span>
                                        </div>
                                        <div class="flex justify-between items-center px-1">
                                            <span class="text-xs font-semibold text-slate-400">Balance Remaining</span>
                                            <span class="text-xs font-bold text-rose-400 bg-rose-500/10 px-2 py-0.5 rounded-md" x-text="'$' + (parseFloat(assignment.amount_due) || 0).toFixed(2)"></span>
                                        </div>
                                    </div>
 
                                    <div class="w-full pt-2">
                                        <template x-if="parseFloat(assignment.amount_due) > 0">
                                            <button class="w-full py-3 bg-white hover:bg-slate-100 text-slate-900 rounded-xl font-bold text-xs uppercase tracking-wider transition-colors shadow-sm active:scale-95 flex items-center justify-center gap-1.5 cursor-pointer">
                                                Finalize Payment
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </button>
                                        </template>
                                        <template x-if="parseFloat(assignment.amount_due) <= 0">
                                            <div class="w-full py-2.5 bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 rounded-xl text-center font-bold text-[9px] uppercase tracking-wider">
                                                Verified & Cleared
                                            </div>
                                        </template>
                                    </div>
                                </div>
                                <div class="absolute top-0 right-0 w-24 h-24 bg-white/5 rounded-full blur-2xl -mr-12 -mt-12"></div>
                            </div>

                            <!-- Verification Guarantee Card -->
                            <div class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl border border-slate-200/60 dark:border-slate-800/80 shadow-sm p-5 space-y-4">
                                <h3 class="text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider pb-2 border-b border-slate-200/60 dark:border-slate-800/80">Support & Security</h3>
                                <div class="space-y-3">
                                    <div class="flex items-start gap-2.5">
                                        <span class="text-sm shrink-0">🛡️</span>
                                        <div class="text-left">
                                            <p class="text-[11px] font-bold text-slate-850 dark:text-slate-200 leading-tight">Secure Payment Protection</p>
                                            <p class="text-[9px] font-medium text-slate-400 dark:text-slate-500">Milestone release only upon final verification.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2.5">
                                        <span class="text-sm shrink-0">🎓</span>
                                        <div class="text-left">
                                            <p class="text-[11px] font-bold text-slate-850 dark:text-slate-200 leading-tight">USA Vetted Experts</p>
                                            <p class="text-[9px] font-medium text-slate-400 dark:text-slate-500">Every task reviewed for quality assurance.</p>
                                        </div>
                                    </div>
                                    <div class="flex items-start gap-2.5">
                                        <span class="text-sm shrink-0">💬</span>
                                        <div class="text-left">
                                            <p class="text-[11px] font-bold text-slate-850 dark:text-slate-200 leading-tight">24/7 Live Support Desk</p>
                                            <p class="text-[9px] font-medium text-slate-400 dark:text-slate-500">Chat with support agents at any time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </template>

        </div>

    </div>

@endsection

