<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    // Form fields
    public $assignmentType = 'writing'; // writing, technical, online_class
    public $serviceId = '';
    public $academicLevel = 'undergraduate';
    public $subject = 'general';
    public $title = '';
    public $difficulty = 'Intermediate';
    public $deadline = '';
    public $pages = 1;
    public $spacing = 'double'; // double (250 words), single (500 words)
    public $files = [];
    public $tempFiles = []; // For Livewire 3 file upload handling
    public $email = '';
    public $description = '';
    
    // Writing specific
    public $referenceStyle = 'APA 7th Edition';
    public $customReferenceStyle = '';
    
    // Technical specific
    public $softwareLanguage = '';
    
    // Online Class specific
    public $courseCode = '';
    public $duration = 1; // weeks
    public $durationUnit = 'weeks'; // weeks, hours
    public $loginRequired = false;
    public $onlineServiceType = 'Full Course Help';

    public function mount()
    {
        if (auth()->check()) {
            $this->email = auth()->user()->email;
        }

        if (empty($this->deadline)) {
            $this->deadline = now()->addDays(7)->format('Y-m-d\TH:i');
        }
    }

    // Pricing constants
    public $discount = 0.40; // 40% base discount

    public $levelPrices = [
        'high-school' => 15,
        'undergraduate' => 20,
        'masters' => 30,
        'phd' => 45,
    ];

    public $urgencyMultipliers = [
        '3-hours' => 2.5,
        '6-hours' => 2.0,
        '12-hours' => 1.8,
        '24-hours' => 1.5,
        '2-days' => 1.3,
        '3-days' => 1.2,
        '5-days' => 1.1,
        '7-days' => 1.0,
        '14-days' => 0.9,
        '30-days' => 0.8,
    ];

    public $subjectMultipliers = [
        'general' => 1.0,
        'programming' => 1.3,
        'engineering' => 1.2,
        'law' => 1.2,
        'nursing' => 1.15,
        'business' => 1.1,
    ];

    public $volumeDiscounts = [
        1 => 0,
        2 => 0.05,
        3 => 0.10,
        5 => 0.15,
        8 => 0.20,
        10 => 0.25,
        15 => 0.30,
        20 => 0.35,
        30 => 0.40,
        50 => 0.45,
    ];

    public function incrementPages()
    {
        if ($this->pages < 100) {
            $this->pages++;
        }
    }

    public function decrementPages()
    {
        if ($this->pages > 1) {
            $this->pages--;
        }
    }

    public function removeFile($index)
    {
        array_splice($this->files, $index, 1);
    }

    public function updatedTempFiles()
    {
        $this->validate([
            'tempFiles.*' => 'nullable|file|max:10240', // 10MB max per file
        ]);

        foreach ($this->tempFiles as $file) {
            $this->files[] = $file;
        }

        $this->tempFiles = []; // Reset temp files for next selection
    }

    private function isDateTimeDeadline(string $deadline): bool
    {
        return preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}$/', $deadline) === 1;
    }

    private function resolveDeadlineDateTime(): \Carbon\Carbon
    {
        $deadlineValue = trim((string) $this->deadline);

        if ($this->isDateTimeDeadline($deadlineValue)) {
            return \Carbon\Carbon::parse($deadlineValue);
        }

        if (str_contains($deadlineValue, 'hours')) {
            $hours = (int) $deadlineValue;
            return now()->addHours($hours);
        }

        if (str_contains($deadlineValue, 'days')) {
            $days = (int) $deadlineValue;
            return now()->addDays($days);
        }

        return now()->addDays(7);
    }

    public function submit()
    {
        $rules = [
            'assignmentType' => 'required|in:writing,technical,online_class',
            'email' => 'required|email',
            'deadline' => 'required_unless:assignmentType,online_class',
            'description' => 'nullable|string',
            'files.*' => 'nullable|file|max:10240',
        ];

        if ($this->assignmentType === 'writing') {
            $rules = array_merge($rules, [
                'title' => 'required|string|max:255',
                'subject' => 'required',
                'academicLevel' => 'required',
                'pages' => 'required|integer|min:1|max:100',
                'referenceStyle' => 'required',
            ]);
        } elseif ($this->assignmentType === 'technical') {
            $rules = array_merge($rules, [
                'title' => 'required|string|max:255',
                'subject' => 'required',
                'softwareLanguage' => 'required',
                'difficulty' => 'required',
                'pages' => 'nullable|integer|min:1|max:100',
            ]);
        } elseif ($this->assignmentType === 'online_class') {
            $rules = array_merge($rules, [
                'courseCode' => 'required|string|max:255',
                'onlineServiceType' => 'required',
                'duration' => 'required|integer|min:1',
                'academicLevel' => 'required',
            ]);
        }

        $this->validate($rules);

        // Auto-registration / Login Logic
        $user = auth()->user();
        $isNewUser = false;

        if (!$user) {
            $user = \App\Models\User::where('email', $this->email)->first();

            if (!$user) {
                // Create random password
                $password = \Illuminate\Support\Str::random(12);
                
                $user = \App\Models\User::create([
                    'name' => explode('@', $this->email)[0], // Use part before @ as name
                    'email' => $this->email,
                    'password' => \Illuminate\Support\Facades\Hash::make($password),
                ]);

                $isNewUser = true;
                auth()->login($user);
                // In a real app, you'd send an email with the password here
                // session()->flash('temp_password', $password); 
            }
        }

        $deadlineDateTime = $this->resolveDeadlineDateTime();

        // Legacy Business Service logic
        $legacyService = new \App\Services\LegacyBusinessService();
        $orderNumber = $legacyService->generateOrderNumber($user->id);
        $originalPrice = $legacyService->calculatePrice('USD', (int) $this->pages, $deadlineDateTime->toDateTimeString());

        // Calculate word count based on legacy logic: 250 words per page (double spaced equivalent)
        $wordCount = (int) $this->pages * $this->wordsPerPage;

        // Create order/assignment
        $assignment = \App\Models\Assignment::create([
            'user_id' => $user->id,
            'order_number' => $orderNumber,
            'service_type' => $this->assignmentType,
            'service_id' => $this->serviceId ?: null,
            'subject' => $this->assignmentType === 'online_class' ? $this->courseCode : $this->subject,
            'title' => $this->assignmentType === 'online_class' ? $this->onlineServiceType : $this->title,
            'deadline' => $deadlineDateTime,
            'pages' => $this->assignmentType === 'online_class' ? $this->duration : $this->pages,
            'word_count' => $wordCount,
            'description' => $this->description,
            'academic_level' => $this->academicLevel,
            'difficulty' => $this->difficulty,
            'assignment_type' => $this->assignmentType === 'technical' ? $this->softwareLanguage : $this->assignmentType,
            'original_price' => $originalPrice,
            'budget' => $this->discountedPrice, // This is what the student agreed to pay
            'amount_due' => $this->discountedPrice, // Initially everything is due
            'payment_status' => 'unpaid',
            'status' => 'New',
            'specific_requirements' => json_encode([
                'reference_style' => $this->referenceStyle === 'Other' ? $this->customReferenceStyle : $this->referenceStyle,
                'software_language' => $this->softwareLanguage,
                'course_code' => $this->courseCode,
                'duration' => $this->duration,
                'duration_unit' => $this->durationUnit,
                'login_required' => $this->loginRequired,
                'online_service_type' => $this->onlineServiceType,
            ]),
        ]);

        // Store files using the new polymorphic system
        if ($this->files) {
            foreach ($this->files as $file) {
                $filePath = $file->store('assignments', 'public');

                \App\Models\File::create([
                    'fileable_id' => $assignment->id,
                    'fileable_type' => get_class($assignment),
                    'original_name' => $file->getClientOriginalName(),
                    'file_path' => $filePath,
                    'file_type' => $file->getMimeType(),
                    'file_size' => $file->getSize(),
                ]);
            }
        }

        session()->flash('success', 'Order submitted successfully!');
        if ($isNewUser) {
            session()->flash('info', 'An account has been created for you. You are now logged in.');
        }

        return redirect()->route('dashboard.details', ['id' => $orderNumber]);
    }

    #[Computed]
    public function basePrice()
    {
        return $this->levelPrices[$this->academicLevel] ?? 20;
    }

    #[Computed]
    public function urgencyMultiplier()
    {
        $deadlineValue = trim((string) $this->deadline);

        if ($this->isDateTimeDeadline($deadlineValue)) {
            $hoursUntilDeadline = now()->diffInHours(\Carbon\Carbon::parse($deadlineValue), false);

            if ($hoursUntilDeadline < 0) return 1.5;
            if ($hoursUntilDeadline <= 6) return 2.0;
            if ($hoursUntilDeadline <= 12) return 1.8;
            if ($hoursUntilDeadline <= 24) return 1.5;
            if ($hoursUntilDeadline <= 48) return 1.3;
            if ($hoursUntilDeadline <= 72) return 1.15;
            if ($hoursUntilDeadline <= 168) return 1.0;
            return 0.9;
        }

        return $this->urgencyMultipliers[$deadlineValue] ?? 1.0;
    }

    #[Computed]
    public function subjects()
    {
        $path = base_path('subjects.json');
        if (file_exists($path)) {
            $list = json_decode(file_get_contents($path), true);
            if (is_array($list)) {
                asort($list);
                return array_values(array_unique($list));
            }
        }
        return [];
    }

    #[Computed]
    public function subjectMultiplier()
    {
        $selected = strtolower($this->subject);
        foreach ($this->subjectMultipliers as $key => $val) {
            if (str_contains($selected, $key)) {
                return $val;
            }
        }
        return 1.0;
    }

    #[Computed]
    public function volumeDiscount()
    {
        $discount = 0;
        foreach ($this->volumeDiscounts as $minPages => $rate) {
            if ($this->pages >= $minPages) {
                $discount = $rate;
            }
        }
        return $discount;
    }

    #[Computed]
    public function totalDiscount()
    {
        return 1 - (1 - $this->discount) * (1 - $this->volumeDiscount);
    }

    #[Computed]
    public function totalPrice()
    {
        $units = ($this->assignmentType === 'online_class') ? $this->duration : $this->pages;
        $spacingMultiplier = ($this->spacing === 'single') ? 2.0 : 1.0;
        $price = $this->basePrice * $units * $this->urgencyMultiplier * $this->subjectMultiplier * $spacingMultiplier;
        return round($price, 2);
    }
    
    #[Computed]
    public function wordsPerPage()
    {
        return $this->spacing === 'single' ? 500 : 250;
    }

    #[Computed]
    public function discountedPrice()
    {
        return round($this->totalPrice * (1 - $this->totalDiscount), 2);
    }

    #[Computed]
    public function pricePerPage()
    {
        return round($this->discountedPrice / $this->pages, 2);
    }

    #[Computed]
    public function discountAmount()
    {
        return round($this->totalPrice - $this->discountedPrice, 2);
    }
};
?>

<div>
    <form wire:submit.prevent="submit">
        <!-- Main Layout Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- LEFT COLUMN - ORDER FORM -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-[20px] max-sm:rounded-2xl p-6 sm:p-8 shadow-sm transition-[background,box-shadow] duration-300">
                    <!-- Form Card Header -->
                    <div class="text-center pb-2 mb-2">
                        <h2 class="text-lg sm:text-xl font-bold text-slate-900 dark:text-slate-100 mb-1">
                            Get Expert Assignment Help | Place Your Order Now
                        </h2>
                        <div class="flex items-center justify-center flex-wrap gap-x-4 gap-y-1 text-[11px] sm:text-xs font-semibold text-slate-500 dark:text-slate-400">
                            <span class="inline-flex items-center gap-1">
                                <span class="text-emerald-500 font-extrabold">✓</span> Guaranteed Grade or Refund
                            </span>
                            <span class="inline-flex items-center gap-1">
                                <span class="text-emerald-500 font-extrabold">✓</span> No AI
                            </span>
                            <span class="inline-flex items-center gap-1">
                                <span class="text-emerald-500 font-extrabold">✓</span> 24/7 Support
                            </span>
                        </div>
                    </div>

                    <!-- Category Switcher (Tabs) -->
                    <div class="flex items-center flex-wrap gap-x-6 gap-y-3 border-t border-b border-slate-200/60 dark:border-slate-800/80 py-3 mb-5 -mx-6 px-6 sm:-mx-8 sm:px-8">
                        @foreach (['writing' => 'Writing', 'technical' => 'Technical', 'online_class' => 'Online Class'] as $type => $label)
                            <div class="flex items-center gap-1.5">
                                <button type="button" wire:click="$set('assignmentType', '{{ $type }}')"
                                    class="flex items-center gap-2 cursor-pointer text-xs sm:text-sm font-semibold select-none transition-colors duration-150 {{ $assignmentType === $type ? 'text-[#f16700]' : 'text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200' }}">
                                    <span class="w-4 h-4 rounded-full shrink-0 inline-flex items-center justify-center border-2 transition-[border-color] duration-150 {{ $assignmentType === $type ? 'border-[#f16700]' : 'border-slate-300 dark:border-slate-700' }}">
                                        @if($assignmentType === $type)
                                            <span class="w-1.5 h-1.5 rounded-full bg-[#f16700]"></span>
                                        @endif
                                    </span>
                                    {{ $label }}
                                </button>
                                
                                {{-- Info Icon with Tooltip --}}
                                <span class="inline-flex items-center cursor-help text-slate-400 dark:text-slate-500 hover:text-[#f16700] dark:hover:text-[#f16700] transition-colors" 
                                    title="{{ $type === 'writing' ? 'Essays, reports, dissertations, case studies and more.' : ($type === 'technical' ? 'Coding, data science, math, engineering and science problems.' : 'Online courses, quizzes, discussions and assignments.') }}">
                                    <svg class="w-3 h-3" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8">
                                        <circle cx="10" cy="10" r="8"/>
                                        <line x1="10" y1="14" x2="10" y2="10"/>
                                        <line x1="10" y1="7" x2="10" y2="7" stroke-linecap="round"/>
                                    </svg>
                                </span>
                            </div>
                        @endforeach
                    </div>

                    <!-- Form Field Inputs Area -->
                    <div class="space-y-5">
                        <!-- Contact Info Section -->
                        <div class="space-y-2">
                            <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Contact Information</label>
                            <div class="relative flex items-center group">
                                <div class="absolute left-3.5 text-slate-400 group-focus-within:text-[#f16700] transition-colors pointer-events-none">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <input type="email" wire:model.blur="email" required placeholder="Enter your email address"
                                    class="w-full h-[41px] pl-10 pr-3 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 placeholder:text-slate-400 dark:placeholder:text-slate-600 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                            </div>
                            @error('email') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>

                        <!-- Writing Specific Fields -->
                        @if($assignmentType === 'writing')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Subject Area *</label>
                                    <div x-data="{
                                        open: false,
                                        search: '',
                                        subjects: @js($this->subjects),
                                        selected: @entangle('subject'),
                                        activeIdx: -1,
                                        get filteredSubjects() {
                                            if (this.search === '') return this.subjects.slice(0, 15);
                                            return this.subjects.filter(s => s.toLowerCase().includes(this.search.toLowerCase())).slice(0, 15);
                                        },
                                        select(subject) {
                                            this.selected = subject;
                                            this.search = subject;
                                            this.open = false;
                                            this.activeIdx = -1;
                                        },
                                        clear() {
                                            this.selected = '';
                                            this.search = '';
                                            this.open = true;
                                            this.activeIdx = -1;
                                        },
                                        onArrowDown() {
                                            if (!this.open) {
                                                this.open = true;
                                                this.activeIdx = 0;
                                                return;
                                            }
                                            if (this.activeIdx < this.filteredSubjects.length - 1) {
                                                this.activeIdx++;
                                                this.scrollToActive();
                                            }
                                        },
                                        onArrowUp() {
                                            if (this.activeIdx > 0) {
                                                this.activeIdx--;
                                                this.scrollToActive();
                                            }
                                        },
                                        onEnter(e) {
                                            if (this.open && this.activeIdx >= 0 && this.activeIdx < this.filteredSubjects.length) {
                                                e.preventDefault();
                                                this.select(this.filteredSubjects[this.activeIdx]);
                                            }
                                        },
                                        scrollToActive() {
                                            this.$nextTick(() => {
                                                const list = this.$refs.list;
                                                const activeEl = list.children[this.activeIdx];
                                                if (activeEl) {
                                                    activeEl.scrollIntoView({ block: 'nearest' });
                                                }
                                            });
                                        },
                                        init() {
                                            this.search = this.selected || '';
                                            this.$watch('selected', value => {
                                                this.search = value || '';
                                            });
                                            this.$watch('search', value => {
                                                this.selected = value;
                                            });
                                        }
                                    }" class="relative">
                                        <div class="relative flex items-center">
                                            <input type="text" 
                                                x-model="search"
                                                @focus="open = true"
                                                @click.away="open = false"
                                                @keydown.escape="open = false"
                                                @keydown.down.prevent="onArrowDown()"
                                                @keydown.up.prevent="onArrowUp()"
                                                @keydown.enter.prevent="onEnter($event)"
                                                autocomplete="off"
                                                placeholder="Type to search subject..."
                                                class="w-full h-[41px] pl-3 pr-8 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                                            
                                            <!-- Clear Button & Chevron -->
                                            <div class="absolute right-3 flex items-center gap-1.5 text-slate-400">
                                                <button x-show="search.length > 0" @click="clear()" type="button" class="hover:text-slate-600 dark:hover:text-slate-300 focus:outline-none cursor-pointer">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </button>
                                                <div class="pointer-events-none transition-transform duration-200" :class="open ? 'rotate-180' : ''">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Suggestions Dropdown -->
                                        <div x-show="open" 
                                            x-transition:enter="transition ease-out duration-100"
                                            x-transition:enter-start="opacity-0 transform scale-95"
                                            x-transition:enter-end="opacity-100 transform scale-100"
                                            x-transition:leave="transition ease-in duration-75"
                                            x-transition:leave-start="opacity-100 transform scale-100"
                                            x-transition:leave-end="opacity-0 transform scale-95"
                                            class="absolute left-0 z-50 w-full mt-1.5 max-h-52 overflow-y-auto bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl shadow-lg scrollbar-thin scrollbar-thumb-slate-200 dark:scrollbar-thumb-slate-800"
                                            style="display: none;">
                                            <div x-ref="list">
                                                <template x-for="(sub, idx) in filteredSubjects" :key="sub">
                                                    <button type="button" 
                                                        @mousedown="select(sub)"
                                                        @mouseenter="activeIdx = idx"
                                                        class="w-full text-left px-4 py-2.5 text-[13px] transition-colors cursor-pointer font-medium"
                                                        :class="activeIdx === idx ? 'bg-slate-100 dark:bg-slate-900 text-[#f16700] dark:text-[#f16700]' : 'text-slate-700 dark:text-slate-300'">
                                                        <span x-text="sub"></span>
                                                    </button>
                                                </template>
                                                <div x-show="filteredSubjects.length === 0" class="px-4 py-3 text-[13px] text-slate-400 dark:text-slate-500 font-medium italic">
                                                    No matching subjects found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Academic Level *</label>
                                    <select wire:model.live="academicLevel" 
                                        class="w-full h-[41px] pl-3 pr-8 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all appearance-none cursor-pointer bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2210%22%20height%3D%226%22%20viewBox%3D%220%200%2010%206%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M1%201L5%205L9%201%22%20stroke%3D%22%2394a3b8%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_6px] bg-[position:right_12px_center] bg-no-repeat">
                                        <option value="high-school">High School</option>
                                        <option value="undergraduate">Undergraduate</option>
                                        <option value="masters">Master's</option>
                                        <option value="phd">PhD/Doctoral</option>
                                    </select>
                                </div>
                                <div class="col-span-full space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Reference Style *</label>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach(['APA 7th', 'MLA 9th', 'Harvard', 'Chicago', 'Oxford', 'Turabian', 'OSCOLA', 'Other'] as $style)
                                            <button type="button" wire:click="$set('referenceStyle', '{{ $style }}')"
                                                class="px-3.5 py-1.5 rounded-full border text-[11px] font-bold transition-all duration-150 {{ $referenceStyle === $style ? 'border-[#f16700] bg-[#f16700] text-white shadow-sm' : 'border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-500 dark:text-slate-400 hover:border-slate-300 dark:hover:border-slate-700' }}">
                                                {{ $style }}
                                            </button>
                                        @endforeach
                                    </div>

                                    @if($referenceStyle === 'Other')
                                        <div class="mt-2">
                                            <input type="text" wire:model="customReferenceStyle" placeholder="Specify reference style (e.g. Vancouver, IEEE...)"
                                                class="w-full h-[41px] px-3 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Technical Specific Fields -->
                        @if($assignmentType === 'technical')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Technical Subject *</label>
                                    <div x-data="{
                                        open: false,
                                        search: '',
                                        subjects: @js($this->subjects),
                                        selected: @entangle('subject'),
                                        activeIdx: -1,
                                        get filteredSubjects() {
                                            if (this.search === '') return this.subjects.slice(0, 15);
                                            return this.subjects.filter(s => s.toLowerCase().includes(this.search.toLowerCase())).slice(0, 15);
                                        },
                                        select(subject) {
                                            this.selected = subject;
                                            this.search = subject;
                                            this.open = false;
                                            this.activeIdx = -1;
                                        },
                                        clear() {
                                            this.selected = '';
                                            this.search = '';
                                            this.open = true;
                                            this.activeIdx = -1;
                                        },
                                        onArrowDown() {
                                            if (!this.open) {
                                                this.open = true;
                                                this.activeIdx = 0;
                                                return;
                                            }
                                            if (this.activeIdx < this.filteredSubjects.length - 1) {
                                                this.activeIdx++;
                                                this.scrollToActive();
                                            }
                                        },
                                        onArrowUp() {
                                            if (this.activeIdx > 0) {
                                                this.activeIdx--;
                                                this.scrollToActive();
                                            }
                                        },
                                        onEnter(e) {
                                            if (this.open && this.activeIdx >= 0 && this.activeIdx < this.filteredSubjects.length) {
                                                e.preventDefault();
                                                this.select(this.filteredSubjects[this.activeIdx]);
                                            }
                                        },
                                        scrollToActive() {
                                            this.$nextTick(() => {
                                                const list = this.$refs.list;
                                                const activeEl = list.children[this.activeIdx];
                                                if (activeEl) {
                                                    activeEl.scrollIntoView({ block: 'nearest' });
                                                }
                                            });
                                        },
                                        init() {
                                            this.search = this.selected || '';
                                            this.$watch('selected', value => {
                                                this.search = value || '';
                                            });
                                            this.$watch('search', value => {
                                                this.selected = value;
                                            });
                                        }
                                    }" class="relative">
                                        <div class="relative flex items-center">
                                            <input type="text" 
                                                x-model="search"
                                                @focus="open = true"
                                                @click.away="open = false"
                                                @keydown.escape="open = false"
                                                @keydown.down.prevent="onArrowDown()"
                                                @keydown.up.prevent="onArrowUp()"
                                                @keydown.enter.prevent="onEnter($event)"
                                                autocomplete="off"
                                                placeholder="Type to search subject..."
                                                class="w-full h-[41px] pl-3 pr-8 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                                            
                                            <!-- Clear Button & Chevron -->
                                            <div class="absolute right-3 flex items-center gap-1.5 text-slate-400">
                                                <button x-show="search.length > 0" @click="clear()" type="button" class="hover:text-slate-600 dark:hover:text-slate-300 focus:outline-none cursor-pointer">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </button>
                                                <div class="pointer-events-none transition-transform duration-200" :class="open ? 'rotate-180' : ''">
                                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Suggestions Dropdown -->
                                        <div x-show="open" 
                                            x-transition:enter="transition ease-out duration-100"
                                            x-transition:enter-start="opacity-0 transform scale-95"
                                            x-transition:enter-end="opacity-100 transform scale-100"
                                            x-transition:leave="transition ease-in duration-75"
                                            x-transition:leave-start="opacity-100 transform scale-100"
                                            x-transition:leave-end="opacity-0 transform scale-95"
                                            class="absolute left-0 z-50 w-full mt-1.5 max-h-52 overflow-y-auto bg-white dark:bg-slate-950 border border-slate-200 dark:border-slate-800 rounded-xl shadow-lg scrollbar-thin scrollbar-thumb-slate-200 dark:scrollbar-thumb-slate-800"
                                            style="display: none;">
                                            <div x-ref="list">
                                                <template x-for="(sub, idx) in filteredSubjects" :key="sub">
                                                    <button type="button" 
                                                        @mousedown="select(sub)"
                                                        @mouseenter="activeIdx = idx"
                                                        class="w-full text-left px-4 py-2.5 text-[13px] transition-colors cursor-pointer font-medium"
                                                        :class="activeIdx === idx ? 'bg-slate-100 dark:bg-slate-900 text-[#f16700] dark:text-[#f16700]' : 'text-slate-700 dark:text-slate-300'">
                                                        <span x-text="sub"></span>
                                                    </button>
                                                </template>
                                                <div x-show="filteredSubjects.length === 0" class="px-4 py-3 text-[13px] text-slate-400 dark:text-slate-500 font-medium italic">
                                                    No matching subjects found
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Software / Language *</label>
                                    <input type="text" wire:model="softwareLanguage" placeholder="e.g. Python, Matlab, AutoCad"
                                        class="w-full h-[41px] px-3 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 placeholder:text-slate-400 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Difficulty Level</label>
                                    <select wire:model.live="difficulty" 
                                        class="w-full h-[41px] pl-3 pr-8 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all appearance-none cursor-pointer bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2210%22%20height%3D%226%22%20viewBox%3D%220%200%2010%206%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M1%201L5%205L9%201%22%20stroke%3D%22%2394a3b8%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_6px] bg-[position:right_12px_center] bg-no-repeat">
                                        <option value="Beginner">Beginner / Basic</option>
                                        <option value="Intermediate">Intermediate / Standard</option>
                                        <option value="Advanced">Advanced / Complex</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Academic Level *</label>
                                    <select wire:model.live="academicLevel" 
                                        class="w-full h-[41px] pl-3 pr-8 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all appearance-none cursor-pointer bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2210%22%20height%3D%226%22%20viewBox%3D%220%200%2010%206%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M1%201L5%205L9%201%22%20stroke%3D%22%2394a3b8%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_6px] bg-[position:right_12px_center] bg-no-repeat">
                                        <option value="undergraduate">Undergraduate</option>
                                        <option value="masters">Master's</option>
                                        <option value="phd">PhD/Doctoral</option>
                                    </select>
                                </div>
                            </div>
                        @endif

                        <!-- Online Class Specific Fields -->
                        @if($assignmentType === 'online_class')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Course Name / Code *</label>
                                    <input type="text" wire:model="courseCode" placeholder="e.g. CS101 - Intro to CS"
                                        class="w-full h-[41px] px-3 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 placeholder:text-slate-400 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Service Needed *</label>
                                    <select wire:model.live="onlineServiceType" 
                                        class="w-full h-[41px] pl-3 pr-8 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all appearance-none cursor-pointer bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2210%22%20height%3D%226%22%20viewBox%3D%220%200%2010%206%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M1%201L5%205L9%201%22%20stroke%3D%22%2394a3b8%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_6px] bg-[position:right_12px_center] bg-no-repeat">
                                        <option value="Full Course Help">Full Semester Help</option>
                                        <option value="Weekly Assignment">Weekly Online Tasks</option>
                                        <option value="Live Exam">Live Exam / Quiz Help</option>
                                        <option value="Homework Portal">Online Portal Homework</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Duration *</label>
                                    <div class="flex items-center gap-2">
                                        <input type="number" wire:model.live="duration" min="1"
                                            class="w-20 h-[41px] text-center bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] font-bold text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                                        <select wire:model.live="durationUnit" 
                                            class="flex-1 h-[41px] pl-3 pr-8 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all appearance-none cursor-pointer bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2210%22%20height%3D%226%22%20viewBox%3D%220%200%2010%206%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M1%201L5%205L9%201%22%20stroke%3D%22%2394a3b8%22%20stroke-width%3D%221.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%3C%2Fsvg%3E')] bg-[length:10px_6px] bg-[position:right_12px_center] bg-no-repeat">
                                            <option value="weeks">Weeks</option>
                                            <option value="hours">Hours (for Exams)</option>
                                            <option value="sessions">Sessions</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-end">
                                    <label class="flex items-center gap-3 w-full h-[41px] px-3 bg-emerald-500/10 dark:bg-emerald-950/20 rounded-xl border border-emerald-500/20 dark:border-emerald-800/40 cursor-pointer select-none">
                                        <input type="checkbox" wire:model="loginRequired" class="w-4 h-4 text-emerald-600 rounded border-slate-300 focus:ring-emerald-500">
                                        <div class="leading-none">
                                            <span class="text-xs font-bold text-emerald-800 dark:text-emerald-400">Credentials Needed</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endif

                        <!-- General fields for all categories -->
                        <div class="space-y-4 pt-4 border-t border-slate-200/50 dark:border-slate-800/80">
                            @if($assignmentType !== 'online_class')
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                    <div class="sm:col-span-2 space-y-2">
                                        <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Project / Essay Title *</label>
                                        <input type="text" wire:model="title" required placeholder="Enter the topic or title"
                                            class="w-full h-[41px] px-3 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 placeholder:text-slate-400 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all">
                                        @error('title') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="space-y-2">
                                        <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Deadline *</label>
                                        
                                        <div x-data="{
                                            open: false,
                                            selected: @entangle('deadline'),
                                            viewDate: new Date(),
                                            times: [],
                                            get formattedLabel() {
                                                if (!this.selected) return 'Select deadline';
                                                const d = new Date(this.selected);
                                                if (isNaN(d.getTime())) return 'Select deadline';
                                                return d.toLocaleDateString([], { weekday: 'short', month: 'short', day: 'numeric' }) + ', ' + d.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' });
                                            },
                                            get daysInMonth() {
                                                const year = this.viewDate.getFullYear();
                                                const month = this.viewDate.getMonth();
                                                const firstDay = new Date(year, month, 1).getDay();
                                                const totalDays = new Date(year, month + 1, 0).getDate();
                                                
                                                const arr = [];
                                                for (let i = 0; i < firstDay; i++) {
                                                    arr.push(null);
                                                }
                                                for (let d = 1; d <= totalDays; d++) {
                                                    arr.push(new Date(year, month, d));
                                                }
                                                return arr;
                                            },
                                            get monthLabel() {
                                                return this.viewDate.toLocaleString([], { month: 'long', year: 'numeric' });
                                            },
                                            prevMonth() {
                                                this.viewDate = new Date(this.viewDate.getFullYear(), this.viewDate.getMonth() - 1, 1);
                                            },
                                            nextMonth() {
                                                this.viewDate = new Date(this.viewDate.getFullYear(), this.viewDate.getMonth() + 1, 1);
                                            },
                                            selectDate(date) {
                                                const now = new Date();
                                                const currentSel = this.selected ? new Date(this.selected) : new Date(Date.now() + 24*60*60*1000);
                                                
                                                const nextDate = new Date(date.getFullYear(), date.getMonth(), date.getDate(), currentSel.getHours(), currentSel.getMinutes());
                                                if (nextDate < now) {
                                                    nextDate.setHours(now.getHours() + 2, 0, 0, 0);
                                                }
                                                this.selected = this.toLocalISOString(nextDate);
                                            },
                                            selectTime(hour, minute) {
                                                const currentSel = this.selected ? new Date(this.selected) : new Date(Date.now() + 24*60*60*1000);
                                                const nextDate = new Date(currentSel.getFullYear(), currentSel.getMonth(), currentSel.getDate(), hour, minute);
                                                this.selected = this.toLocalISOString(nextDate);
                                                // Auto-close after time is picked
                                                this.open = false;
                                            },
                                            isSameDate(d) {
                                                if (!d || !this.selected) return false;
                                                const sel = new Date(this.selected);
                                                return d.getFullYear() === sel.getFullYear() && d.getMonth() === sel.getMonth() && d.getDate() === sel.getDate();
                                            },
                                            isTimeSelected(hour, minute) {
                                                if (!this.selected) return false;
                                                const sel = new Date(this.selected);
                                                return sel.getHours() === hour && sel.getMinutes() === minute;
                                            },
                                            isDateDisabled(d) {
                                                if (!d) return true;
                                                const today = new Date();
                                                today.setHours(0,0,0,0);
                                                return d < today;
                                            },
                                            isTimeDisabled(hour, minute) {
                                                if (!this.selected) return false;
                                                const sel = new Date(this.selected);
                                                const target = new Date(sel.getFullYear(), sel.getMonth(), sel.getDate(), hour, minute);
                                                return target < new Date();
                                            },
                                            toLocalISOString(date) {
                                                const pad = n => String(n).padStart(2, '0');
                                                return `${date.getFullYear()}-${pad(date.getMonth() + 1)}-${pad(date.getDate())}T${pad(date.getHours())}:${pad(date.getMinutes())}`;
                                            },
                                            init() {
                                                for (let h = 0; h < 24; h++) {
                                                    for (let m of [0, 30]) {
                                                        const labelDate = new Date();
                                                        labelDate.setHours(h, m, 0, 0);
                                                        this.times.push({
                                                            hour: h,
                                                            minute: m,
                                                            label: labelDate.toLocaleTimeString([], { hour: 'numeric', minute: '2-digit' })
                                                        });
                                                    }
                                                }
                                                if (this.selected) {
                                                    this.viewDate = new Date(this.selected);
                                                }
                                                this.$watch('open', value => {
                                                    if (value) {
                                                        this.$nextTick(() => {
                                                            const activeBtn = this.$refs.timeScroll?.querySelector('.is-selected');
                                                            if (activeBtn) {
                                                                activeBtn.scrollIntoView({ block: 'center' });
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        }" class="relative w-full" @click.away="open = false">
                                            
                                            <button type="button" @click="open = !open" 
                                                class="flex items-center justify-between w-full h-[41px] px-3 cursor-pointer select-none border border-slate-200/60 dark:border-slate-800/80 rounded-xl bg-slate-50 dark:bg-slate-950 focus:border-[#f16700] dark:focus:border-[#f16700] focus:outline-none transition-all">
                                                <span class="text-[12.5px] font-semibold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Deadline</span>
                                                <span class="flex items-center justify-end gap-[5px] min-w-0 text-[12.5px] font-semibold text-slate-700 dark:text-slate-300">
                                                    <span class="max-w-[170px] max-sm:max-w-[145px] text-right truncate" x-text="formattedLabel">Select deadline</span>
                                                    <svg class="flex-shrink-0 w-3 h-3 text-slate-400 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>
                                                </span>
                                            </button>
                                        
                                            <!-- Calendar Picker Container -->
                                            <div x-show="open" 
                                                x-transition:enter="transition ease-out duration-100"
                                                x-transition:enter-start="opacity-0 transform scale-95"
                                                x-transition:enter-end="opacity-100 transform scale-100"
                                                x-transition:leave="transition ease-in duration-75"
                                                x-transition:leave-start="opacity-100 transform scale-100"
                                                x-transition:leave-end="opacity-0 transform scale-95"
                                                class="absolute right-0 z-50 mt-1.5 w-[280px] sm:w-[410px] rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl overflow-hidden flex flex-col sm:flex-row"
                                                style="display: none;">
                                                
                                                <!-- Date Picker Calendar Side -->
                                                <div class="flex-1 p-3 min-w-0">
                                                    <div class="flex items-center justify-between mb-2">
                                                        <button type="button" @click="prevMonth()" class="w-8 h-8 rounded-lg flex items-center justify-center hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400">
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                                                        </button>
                                                        <div class="text-xs font-bold text-slate-700 dark:text-slate-350" x-text="monthLabel"></div>
                                                        <button type="button" @click="nextMonth()" class="w-8 h-8 rounded-lg flex items-center justify-center hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400">
                                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="grid grid-cols-7 gap-1 text-center">
                                                        @foreach (['Su','Mo','Tu','We','Th','Fr','Sa'] as $day)
                                                            <span class="text-[9px] font-extrabold uppercase text-slate-400 tracking-wider py-1">{{ $day }}</span>
                                                        @endforeach
                                                        
                                                        <template x-for="(d, idx) in daysInMonth" :key="idx">
                                                            <div class="aspect-square flex items-center justify-center">
                                                                <template x-if="d === null">
                                                                    <span class="w-full h-full"></span>
                                                                </template>
                                                                <template x-if="d !== null">
                                                                    <button type="button" 
                                                                        @click="selectDate(d)"
                                                                        :disabled="isDateDisabled(d)"
                                                                        class="w-7 h-7 rounded-lg text-xs font-semibold transition-all flex items-center justify-center cursor-pointer"
                                                                        :class="isSameDate(d) 
                                                                            ? 'bg-[#f16700] text-white font-bold is-selected' 
                                                                            : (isDateDisabled(d) 
                                                                                ? 'text-slate-300 dark:text-slate-700 cursor-not-allowed opacity-40' 
                                                                                : 'text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800')">
                                                                        <span x-text="d.getDate()"></span>
                                                                    </button>
                                                                </template>
                                                            </div>
                                                        </template>
                                                    </div>
                                                </div>
                                                
                                                <!-- Time Picker Side -->
                                                <div class="w-full sm:w-28 border-t sm:border-t-0 sm:border-l border-slate-200 dark:border-slate-800 flex flex-col">
                                                    <div class="px-2 py-2 text-center text-[9px] font-bold text-slate-400 uppercase tracking-wider border-b border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/20">Time</div>
                                                    <div class="grid grid-cols-3 sm:grid-cols-1 overflow-y-auto max-h-[84px] sm:max-h-[224px] scrollbar-thin scrollbar-thumb-slate-200 dark:scrollbar-thumb-slate-800 p-1 sm:p-0" x-ref="timeScroll">
                                                        <template x-for="t in times" :key="t.hour + '-' + t.minute">
                                                            <button type="button" 
                                                                @click="selectTime(t.hour, t.minute)"
                                                                :disabled="isTimeDisabled(t.hour, t.minute)"
                                                                class="py-2 text-center text-xs font-semibold transition-all cursor-pointer rounded-lg sm:rounded-none"
                                                                :class="isTimeSelected(t.hour, t.minute) 
                                                                    ? 'bg-[#f16700] text-white font-bold is-selected' 
                                                                    : (isTimeDisabled(t.hour, t.minute)
                                                                        ? 'text-slate-300 dark:text-slate-700 cursor-not-allowed opacity-40'
                                                                        : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800')">
                                                                <span x-text="t.label"></span>
                                                            </button>
                                                        </template>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @error('deadline') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Compact Page Counter -->
                                <div class="flex flex-col gap-3">
                                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                        <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Number of Pages *</label>
                                        <div class="flex items-center gap-2">
                                            <span class="px-2 py-0.5 bg-[#f16700]/10 text-[#f16700] text-[10px] font-bold rounded-full">
                                                ~{{ number_format($pages * $this->wordsPerPage) }} Words
                                            </span>
                                            <span class="px-2 py-0.5 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-400 text-[10px] font-bold rounded-full">
                                                {{ ucfirst($spacing) }} Spaced
                                            </span>
                                        </div>
                                    </div>
                                    
                                    <div class="flex flex-col sm:flex-row gap-4 items-stretch sm:items-center">
                                        <!-- Interactive Page Counter -->
                                        <div class="flex items-center bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl h-[41px] px-1 shrink-0 justify-between sm:justify-start">
                                            <button type="button" wire:click="decrementPages"
                                                class="w-8 h-8 rounded-md flex items-center justify-center hover:bg-slate-200 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400 transition-colors">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M20 12H4"></path></svg>
                                            </button>
                                            <input type="number" wire:model.live="pages" min="1" max="100"
                                                class="w-12 text-center text-sm font-bold text-slate-800 dark:text-slate-200 bg-transparent border-0 focus:ring-0 p-0">
                                            <button type="button" wire:click="incrementPages"
                                                class="w-8 h-8 rounded-md flex items-center justify-center hover:bg-slate-200 dark:hover:bg-slate-800 text-slate-500 dark:text-slate-400 transition-colors">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                                            </button>
                                        </div>
                                        
                                        <!-- Spacing Toggle -->
                                        <div class="flex items-center bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl p-0.5 flex-grow h-[41px]">
                                            <button type="button" wire:click="$set('spacing', 'double')"
                                                class="flex-1 h-full rounded-[6px] text-xs font-bold transition-all {{ $spacing === 'double' ? 'bg-[#f16700] text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200' }}">
                                                Double Spaced
                                            </button>
                                            <button type="button" wire:click="$set('spacing', 'single')"
                                                class="flex-1 h-full rounded-[6px] text-xs font-bold transition-all {{ $spacing === 'single' ? 'bg-[#f16700] text-white shadow-sm' : 'text-slate-500 dark:text-slate-400 hover:text-slate-700 dark:hover:text-slate-200' }}">
                                                Single Spaced
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Requirements Description -->
                        <div class="space-y-2">
                            <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Detailed Requirements</label>
                            <textarea wire:model="description" rows="4" placeholder="Describe your requirements in detail..."
                                class="w-full px-3 py-2 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl text-[13px] text-slate-800 dark:text-slate-200 placeholder:text-slate-400 focus:border-[#f16700] focus:bg-white dark:focus:bg-slate-900 focus:outline-none transition-all"></textarea>
                        </div>

                        <!-- Compact Upload Files -->
                        <div x-data="{ dragging: false }" class="space-y-2">
                            <label class="block text-[11px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">
                                Upload Files (Optional)
                                <span class="text-[10px] font-normal text-slate-400 lowercase ml-1">Multiple files supported</span>
                            </label>

                            <div
                                x-on:dragover.prevent="dragging = true"
                                x-on:dragleave.prevent="dragging = false"
                                x-on:drop.prevent="
                                    dragging = false; 
                                    const files = $event.dataTransfer.files;
                                    if (files.length > 0) {
                                        $wire.uploadMultiple('tempFiles', files, 
                                            () => { console.log('success'); },
                                            (err) => { console.error(err); }
                                        );
                                    }
                                "
                                :class="dragging ? 'border-[#f16700] bg-[#f16700]/5' : 'border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-950/20'"
                                class="border-2 border-dashed rounded-xl p-6 text-center hover:border-slate-300 dark:hover:border-slate-700 transition-colors cursor-pointer relative">

                                <input type="file" wire:model="tempFiles" multiple class="hidden" id="files-upload"
                                    accept=".pdf,.doc,.docx,.zip,.rar,.txt,.jpg,.jpeg,.png">

                                <label for="files-upload" class="cursor-pointer block">
                                    <div class="text-2xl mb-2">ðŸ“</div>
                                    <p class="text-xs font-semibold text-[#f16700]">Click to browse or drag files here</p>
                                    <p class="text-[10px] text-slate-400 mt-1">PDF, DOC, DOCX, ZIP â€¢ Max 10MB per file</p>
                                </label>

                                <div wire:loading wire:target="tempFiles" class="mt-2 text-xs text-slate-500">
                                    Uploading files...
                                </div>
                            </div>

                            @if (!empty($files))
                                <div class="mt-3 space-y-1.5">
                                    @foreach ($files as $index => $file)
                                        <div class="flex items-center justify-between p-2.5 bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl">
                                            <div class="flex items-center gap-2 min-w-0">
                                                <span class="text-base">ðŸ“„</span>
                                                <span class="text-xs text-slate-700 dark:text-slate-300 truncate font-medium">{{ $file->getClientOriginalName() }}</span>
                                            </div>
                                            <button type="button" wire:click="removeFile({{ $index }})"
                                                class="text-red-500 hover:text-red-600 p-1 text-xs font-bold font-sans">Remove</button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Academic Integrity Disclaimer -->
                <div class="p-4 bg-amber-500/5 dark:bg-amber-500/10 border border-amber-500/20 rounded-2xl flex items-start gap-3">
                    <input type="checkbox" id="terms-accept" required class="mt-0.5 accent-[#f16700] rounded focus:ring-0">
                    <label for="terms-accept" class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed select-none cursor-pointer">
                        I confirm I am 18 years of age or older. I agree to the <a href="{{ url('/terms-of-service') }}" class="text-[#f16700] hover:underline font-bold">Terms of Service</a> and understand that all deliverables are for reference and learning purposes only.
                    </label>
                </div>
            </div>

            <!-- RIGHT COLUMN - SUMMARY SIDEBAR -->
            <div class="space-y-6 lg:col-span-1">
                <!-- Sidebar Summary Card -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-[20px] shadow-sm overflow-hidden transition-[background,box-shadow] duration-300">
                    <!-- Secure Title -->
                    <div class="bg-slate-900 dark:bg-slate-950 p-6 text-white text-center relative overflow-hidden">
                        <h3 class="text-xs font-black uppercase tracking-wider">Secure Order Summary</h3>
                        <div class="flex items-center justify-center gap-1.5 text-[9px] text-emerald-400 font-bold uppercase tracking-widest mt-1">
                            <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
                            256-Bit SSL Encrypted
                        </div>
                    </div>

                    <div class="p-6 space-y-6">
                        <!-- Compact Price Indicator -->
                        <div class="bg-slate-50 dark:bg-slate-950 border border-slate-200/60 dark:border-slate-800/80 rounded-xl p-4">
                            <div class="flex justify-between items-center mb-1">
                                <span class="text-[10px] font-black text-slate-400 uppercase tracking-wider">Grand Total</span>
                                <span class="px-2 py-0.5 bg-red-500 text-white text-[9px] font-black rounded">
                                    {{ number_format($this->totalDiscount * 100, 0) }}% OFF
                                </span>
                            </div>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-slate-800 dark:text-slate-100">${{ number_format($this->discountedPrice, 2) }}</span>
                                <span class="text-xs text-slate-400 line-through font-bold">${{ number_format($this->totalPrice, 2) }}</span>
                            </div>
                            <div class="mt-2 text-[10px] font-black text-emerald-500 uppercase tracking-wider">
                                Savings: ${{ number_format($this->discountAmount, 2) }}
                            </div>
                        </div>

                        <!-- List details -->
                        <div class="space-y-2.5 text-xs border-t border-slate-200/50 dark:border-slate-800/80 pt-4">
                            <div class="flex justify-between">
                                <span class="text-slate-500">Service Category</span>
                                <span class="font-semibold text-slate-700 dark:text-slate-300 capitalize">{{ $assignmentType }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">
                                    @if($assignmentType === 'online_class')
                                        Duration
                                    @else
                                        Volume
                                    @endif
                                </span>
                                <span class="font-semibold text-slate-700 dark:text-slate-300">
                                    @if($assignmentType === 'online_class')
                                        {{ $duration }} {{ $durationUnit }}
                                    @else
                                        {{ $pages }} {{ $pages === 1 ? 'Page' : 'Pages' }}
                                    @endif
                                </span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-500">Specialty Markup</span>
                                <span class="font-semibold text-slate-700 dark:text-slate-300">+{{ number_format(($this->subjectMultiplier - 1.0) * 100, 0) }}%</span>
                            </div>
                            <div class="flex justify-between text-emerald-500 font-semibold">
                                <span>Promo Applied</span>
                                <span>-40%</span>
                            </div>
                        </div>

                        <!-- Action Submit Button -->
                        <div class="pt-2">
                            <button type="submit"
                                class="w-full bg-[#f16700] hover:bg-[#ff7a1a] text-white py-3 rounded-xl text-sm font-bold tracking-wide transition-colors shadow-sm cursor-pointer">
                                <span wire:loading.remove wire:target="submit">Submit Order</span>
                                <span wire:loading wire:target="submit">Submitting...</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Trust Badges Grid -->
                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-xl p-3 text-center shadow-sm animate-fade-in">
                        <span class="text-lg">ðŸ›¡ï¸</span>
                        <div class="text-[9px] font-black text-slate-800 dark:text-slate-200 uppercase tracking-wider mt-1">SSL Secure</div>
                        <div class="text-[8px] text-slate-400 font-semibold uppercase tracking-wider">Encrypted Connection</div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-xl p-3 text-center shadow-sm animate-fade-in">
                        <span class="text-lg">ðŸ‘©â€ðŸŽ“</span>
                        <div class="text-[9px] font-black text-slate-800 dark:text-slate-200 uppercase tracking-wider mt-1">Verified Expert</div>
                        <div class="text-[8px] text-slate-400 font-semibold uppercase tracking-wider">Top Vetted Writers</div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-xl p-3 text-center shadow-sm animate-fade-in">
                        <span class="text-lg">ðŸ’µ</span>
                        <div class="text-[9px] font-black text-slate-800 dark:text-slate-200 uppercase tracking-wider mt-1">Guaranteed</div>
                        <div class="text-[8px] text-slate-400 font-semibold uppercase tracking-wider">Grade or Refund</div>
                    </div>
                    <div class="bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/80 rounded-xl p-3 text-center shadow-sm animate-fade-in">
                        <span class="text-lg">ðŸ“¦</span>
                        <div class="text-[9px] font-black text-slate-800 dark:text-slate-200 uppercase tracking-wider mt-1">On-Time</div>
                        <div class="text-[8px] text-slate-400 font-semibold uppercase tracking-wider">Fast Turnaround</div>
                    </div>
                </div>

                <!-- Trusted Payments badge list -->
                <div class="bg-white/50 dark:bg-slate-900/40 border border-slate-200/40 dark:border-slate-800/50 rounded-2xl p-4 text-center">
                    <div class="text-[9px] font-black text-slate-400 dark:text-slate-500 uppercase tracking-widest mb-2.5">Secure Payment Options</div>
                    <div class="flex justify-center items-center gap-3.5 opacity-55 dark:opacity-40 text-[9px] font-bold text-slate-500">
                        <span>VISA</span>
                        <span>MASTERCARD</span>
                        <span>AMEX</span>
                        <span>PAYPAL</span>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
