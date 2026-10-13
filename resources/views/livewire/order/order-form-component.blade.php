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
    public $deadline = '7-days';
    public $pages = 1;
    public $spacing = 'double'; // double (275 words), single (550 words)
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

        // Parse deadline into a proper DateTime
        $deadlineStr = $this->deadline;
        $deadlineDateTime = now();
        
        if (str_contains($deadlineStr, 'hours')) {
            $hours = (int) $deadlineStr;
            $deadlineDateTime = now()->addHours($hours);
        } elseif (str_contains($deadlineStr, 'days')) {
            $days = (int) $deadlineStr;
            $deadlineDateTime = now()->addDays($days);
        }

        // Legacy Business Service logic
        $legacyService = new \App\Services\LegacyBusinessService();
        $orderNumber = $legacyService->generateOrderNumber($user->id);
        $originalPrice = $legacyService->calculatePrice('USD', (int) $this->pages, $this->deadline);

        // Calculate word count based on legacy logic: 250 words per page
        $wordCount = (int) $this->pages * 250;

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

        // Store files in separate table
        if ($this->files) {
            foreach ($this->files as $file) {
                $filePath = $file->store('assignments', 'public');

                \App\Models\AssignmentFile::create([
                    'assignment_id' => $assignment->id,
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

        return redirect()->route('dashboard', $orderNumber);
    }

    #[Computed]
    public function basePrice()
    {
        return $this->levelPrices[$this->academicLevel] ?? 20;
    }

    #[Computed]
    public function urgencyMultiplier()
    {
        return $this->urgencyMultipliers[$this->deadline] ?? 1.0;
    }

    #[Computed]
    public function subjectMultiplier()
    {
        return $this->subjectMultipliers[$this->subject] ?? 1.0;
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
        return $this->spacing === 'single' ? 550 : 275;
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
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-6 items-start">
            
            <!-- LEFT COLUMN: ORDER SPECIFICATIONS -->
            <div class="lg:col-span-8 space-y-5">
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-xs overflow-hidden">
                    
                    {{-- Category Segmented Tab Bar --}}
                    <div class="p-4 sm:p-5 border-b border-slate-100 bg-slate-50/40">
                        <label class="block text-[11px] font-bold text-slate-500 uppercase tracking-wider mb-2.5">
                            1. Select Service Category
                        </label>
                        <div class="grid grid-cols-3 gap-2 p-1 bg-slate-100/80 rounded-xl border border-slate-200/60">
                            {{-- Writing Tab --}}
                            <button type="button" wire:click="$set('assignmentType', 'writing')"
                                class="flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg text-xs font-semibold transition-all duration-200 {{ $assignmentType === 'writing' ? 'bg-white text-indigo-700 shadow-xs border border-slate-200/70 font-bold' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
                                <span class="text-sm">✍️</span>
                                <span class="truncate">Academic Writing</span>
                            </button>

                            {{-- Technical Tab --}}
                            <button type="button" wire:click="$set('assignmentType', 'technical')"
                                class="flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg text-xs font-semibold transition-all duration-200 {{ $assignmentType === 'technical' ? 'bg-white text-indigo-700 shadow-xs border border-slate-200/70 font-bold' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
                                <span class="text-sm">⚙️</span>
                                <span class="truncate">Technical / Code</span>
                            </button>

                            {{-- Online Class Tab --}}
                            <button type="button" wire:click="$set('assignmentType', 'online_class')"
                                class="flex items-center justify-center gap-2 py-2.5 px-3 rounded-lg text-xs font-semibold transition-all duration-200 {{ $assignmentType === 'online_class' ? 'bg-white text-indigo-700 shadow-xs border border-slate-200/70 font-bold' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
                                <span class="text-sm">🎓</span>
                                <span class="truncate">Online Class / Exam</span>
                            </button>
                        </div>
                    </div>

                    <div class="p-5 sm:p-7 space-y-5">
                        
                        <!-- Contact Email Row -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                Your Email Address <span class="text-rose-500">*</span>
                                <span class="text-[11px] font-normal text-slate-400 ml-1">(for order updates & final files)</span>
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                </div>
                                <input type="email" wire:model.blur="email" placeholder="student@university.edu"
                                    class="w-full h-10 pl-10 pr-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all">
                            </div>
                            @error('email') <span class="text-rose-500 text-[11px] mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>

                        {{-- DYNAMIC CATEGORY FIELDS --}}

                        <!-- Writing Fields -->
                        @if($assignmentType === 'writing')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1 animate-fade-in">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Subject Area <span class="text-rose-500">*</span></label>
                                    <div class="relative">
                                        <select wire:model.live="subject" class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all appearance-none cursor-pointer pr-8">
                                            <option value="general">📚 General / Humanities / Essays</option>
                                            <option value="law">⚖️ Law & Legal Studies</option>
                                            <option value="nursing">🏥 Nursing & Health Sciences</option>
                                            <option value="business">💼 Business, Finance & MBA</option>
                                            <option value="literature">📖 Literature & English</option>
                                            <option value="history">🏛️ History & Social Science</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                        </div>
                                    </div>
                                    @error('subject') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Academic Level <span class="text-rose-500">*</span></label>
                                    <div class="relative">
                                        <select wire:model.live="academicLevel" class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all appearance-none cursor-pointer pr-8">
                                            <option value="high-school">High School</option>
                                            <option value="undergraduate">Undergraduate (College / Univ)</option>
                                            <option value="masters">Master's Degree</option>
                                            <option value="phd">PhD / Doctoral</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                        </div>
                                    </div>
                                    @error('academicLevel') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div class="col-span-full">
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Citation / Reference Style <span class="text-rose-500">*</span></label>
                                    <div class="flex flex-wrap gap-1.5">
                                        @foreach(['APA 7th', 'MLA 9th', 'Harvard', 'Chicago', 'Oxford', 'Turabian', 'IEEE', 'Other'] as $style)
                                            <button type="button" wire:click="$set('referenceStyle', '{{ $style }}')"
                                                class="px-3 py-1.5 rounded-lg text-xs font-medium transition-all {{ $referenceStyle === $style ? 'bg-indigo-600 text-white font-semibold shadow-xs' : 'bg-slate-100/80 text-slate-600 hover:bg-slate-200/80 hover:text-slate-900 border border-slate-200/50' }}">
                                                {{ $style }}
                                            </button>
                                        @endforeach
                                    </div>

                                    @if($referenceStyle === 'Other')
                                        <div class="mt-2.5 animate-fade-in">
                                            <input type="text" wire:model="customReferenceStyle" placeholder="Specify reference style (e.g., Vancouver, Bluebook, OSCOLA)"
                                                class="w-full h-9 px-3 text-xs bg-slate-50 border border-slate-200 rounded-lg text-slate-900 focus:bg-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500/20 focus:outline-none">
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Technical Fields -->
                        @if($assignmentType === 'technical')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1 animate-fade-in">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Technical Field <span class="text-rose-500">*</span></label>
                                    <div class="relative">
                                        <select wire:model.live="subject" class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all appearance-none cursor-pointer pr-8">
                                            <option value="programming">💻 Computer Science & Coding</option>
                                            <option value="engineering">⚡ Engineering (Civil, Mech, EE)</option>
                                            <option value="math">🧮 Mathematics & Calculus</option>
                                            <option value="statistics">📊 Statistics & Data Analytics</option>
                                            <option value="architecture">🏗️ Architecture & CAD</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                        </div>
                                    </div>
                                    @error('subject') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Language / Software <span class="text-rose-500">*</span></label>
                                    <input type="text" wire:model="softwareLanguage" placeholder="e.g., Python, Java, MATLAB, R, AutoCAD"
                                        class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all">
                                    @error('softwareLanguage') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Complexity Level</label>
                                    <div class="relative">
                                        <select wire:model.live="difficulty" class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all appearance-none cursor-pointer pr-8">
                                            <option value="Beginner">🟢 Basic / Beginner</option>
                                            <option value="Intermediate">🟡 Intermediate / Standard</option>
                                            <option value="Advanced">🔴 Advanced / Complex</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                        </div>
                                    </div>
                                    @error('difficulty') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Academic Level <span class="text-rose-500">*</span></label>
                                    <div class="relative">
                                        <select wire:model.live="academicLevel" class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all appearance-none cursor-pointer pr-8">
                                            <option value="undergraduate">Undergraduate</option>
                                            <option value="masters">Master's</option>
                                            <option value="phd">PhD / Research</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                        </div>
                                    </div>
                                    @error('academicLevel') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        @endif

                        <!-- Online Class Fields -->
                        @if($assignmentType === 'online_class')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-1 animate-fade-in">
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Course Code / Name <span class="text-rose-500">*</span></label>
                                    <input type="text" wire:model="courseCode" placeholder="e.g., PSYC 101 - General Psychology"
                                        class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all">
                                    @error('courseCode') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Service Format <span class="text-rose-500">*</span></label>
                                    <div class="relative">
                                        <select wire:model.live="onlineServiceType" class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all appearance-none cursor-pointer pr-8">
                                            <option value="Full Course Help">Full Semester / Complete Course</option>
                                            <option value="Weekly Assignment">Weekly Modules & Discussions</option>
                                            <option value="Live Exam">Proctored / Timed Quiz & Exam</option>
                                            <option value="Homework Portal">Online Portal Homework (Canvas/Blackboard)</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Duration <span class="text-rose-500">*</span></label>
                                    <div x-data="{ count: @entangle('duration').live }" class="flex items-center gap-2">
                                        <input type="number" x-model.number="count" min="1"
                                            class="w-20 h-10 text-center font-bold text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg focus:bg-white focus:border-indigo-500 focus:outline-none [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none">
                                        <select wire:model.live="durationUnit" class="flex-1 h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:outline-none cursor-pointer">
                                            <option value="weeks">Weeks</option>
                                            <option value="hours">Hours (for Exams)</option>
                                            <option value="sessions">Sessions</option>
                                        </select>
                                    </div>
                                    @error('duration') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div class="flex items-center pt-2 sm:pt-6">
                                    <label class="flex items-center gap-2.5 px-3.5 py-2 rounded-lg bg-indigo-50/50 border border-indigo-100 cursor-pointer hover:bg-indigo-50 transition-colors w-full">
                                        <input type="checkbox" wire:model="loginRequired" class="w-4 h-4 text-indigo-600 rounded border-slate-300 focus:ring-indigo-500">
                                        <span class="text-xs font-semibold text-indigo-950">Portal Login Credentials Required</span>
                                    </label>
                                </div>
                            </div>
                        @endif

                        {{-- TITLE & DEADLINE ROW --}}
                        @if($assignmentType !== 'online_class')
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-1">
                                <div class="sm:col-span-2">
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Topic / Title <span class="text-rose-500">*</span></label>
                                    <input type="text" wire:model="title" placeholder="e.g., Analysis of Global Supply Chain Bottlenecks"
                                        class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all">
                                    @error('title') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1.5">Deadline <span class="text-rose-500">*</span></label>
                                    <div class="relative">
                                        <select wire:model.live="deadline" class="w-full h-10 px-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-800 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all appearance-none cursor-pointer pr-8">
                                            <option value="3-hours">3 Hours (Urgent)</option>
                                            <option value="6-hours">6 Hours</option>
                                            <option value="12-hours">12 Hours</option>
                                            <option value="24-hours">24 Hours (1 Day)</option>
                                            <option value="2-days">2 Days</option>
                                            <option value="3-days">3 Days</option>
                                            <option value="5-days">5 Days</option>
                                            <option value="7-days">7 Days (Standard)</option>
                                            <option value="14-days">14 Days</option>
                                            <option value="30-days">30 Days</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2.5 text-slate-400">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                        </div>
                                    </div>
                                    @error('deadline') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- COMPACT PAGE STEPPER & SPACING --}}
                            <div class="p-4 bg-slate-50/70 border border-slate-200/70 rounded-xl space-y-3">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                                    <div>
                                        <span class="text-xs font-bold text-slate-800 uppercase tracking-wide">Number of Pages</span>
                                        <span class="text-[11px] text-slate-500 ml-1.5">({{ number_format($pages * $this->wordsPerPage) }} words)</span>
                                    </div>

                                    {{-- Spacing Toggle --}}
                                    <div class="flex items-center gap-1 bg-white p-0.5 rounded-lg border border-slate-200/80 shadow-2xs">
                                        <button type="button" wire:click="$set('spacing', 'double')"
                                            class="px-2.5 py-1 rounded-md text-[11px] font-semibold transition-all {{ $spacing === 'double' ? 'bg-indigo-600 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">
                                            Double Spaced (275w)
                                        </button>
                                        <button type="button" wire:click="$set('spacing', 'single')"
                                            class="px-2.5 py-1 rounded-md text-[11px] font-semibold transition-all {{ $spacing === 'single' ? 'bg-indigo-600 text-white shadow-xs' : 'text-slate-600 hover:text-slate-900' }}">
                                            Single Spaced (550w)
                                        </button>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between gap-4">
                                    {{-- Tactile Stepper --}}
                                    <div x-data="{
                                        count: @entangle('pages').live,
                                        increment() { if(this.count < 100) this.count++ },
                                        decrement() { if(this.count > 1) this.count-- }
                                    }" class="inline-flex items-center bg-white rounded-lg border border-slate-200/90 shadow-2xs">
                                        <button type="button" @click="decrement()"
                                            class="w-10 h-10 flex items-center justify-center text-slate-500 hover:text-slate-900 hover:bg-slate-50 rounded-l-lg transition-colors border-r border-slate-100" aria-label="Decrease">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"/></svg>
                                        </button>
                                        
                                        <div class="w-16 text-center">
                                            <input type="number" x-model.number="count" min="1" max="100"
                                                class="w-full text-center text-base font-bold text-slate-900 bg-transparent border-0 focus:ring-0 focus:outline-none p-0 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none">
                                        </div>

                                        <button type="button" @click="increment()"
                                            class="w-10 h-10 flex items-center justify-center text-slate-500 hover:text-slate-900 hover:bg-slate-50 rounded-r-lg transition-colors border-l border-slate-100" aria-label="Increase">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"/></svg>
                                        </button>
                                    </div>

                                    <div class="text-right">
                                        <div class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider">Estimated Length</div>
                                        <div class="text-sm font-bold text-slate-800">{{ $pages }} {{ $pages === 1 ? 'Page' : 'Pages' }} • ~{{ number_format($pages * $this->wordsPerPage) }} Words</div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Description & Instructions -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                Instructions / Specific Requirements
                                <span class="text-[11px] font-normal text-slate-400 ml-1">(rubric, formatting, preferred sources)</span>
                            </label>
                            <textarea wire:model="description" rows="4" placeholder="Paste assignment guidelines, grading rubric, required structure, key questions to answer, etc."
                                class="w-full p-3 text-xs sm:text-sm bg-slate-50/50 border border-slate-200 rounded-lg text-slate-900 placeholder:text-slate-400 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10 focus:outline-none transition-all resize-y min-h-[90px]"></textarea>
                            @error('description') <span class="text-rose-500 text-[11px] mt-1 block">{{ $message }}</span> @enderror
                        </div>

                        <!-- Compact File Dropzone -->
                        <div x-data="{ dragging: false }">
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                Attach Files / Materials <span class="text-[11px] font-normal text-slate-400">(Optional)</span>
                            </label>

                            <div
                                x-on:dragover.prevent="dragging = true"
                                x-on:dragleave.prevent="dragging = false"
                                x-on:drop.prevent="
                                    dragging = false; 
                                    const files = $event.dataTransfer.files;
                                    if (files.length > 0) {
                                        $wire.uploadMultiple('tempFiles', files);
                                    }
                                "
                                :class="dragging ? 'border-indigo-500 bg-indigo-50/50' : 'border-slate-200/90 bg-slate-50/30 hover:border-slate-300 hover:bg-slate-50/70'"
                                class="border border-dashed rounded-xl p-4 sm:p-5 text-center transition-all cursor-pointer">
                                
                                <input type="file" wire:model="tempFiles" multiple id="files-upload"
                                    accept=".pdf,.doc,.docx,.zip,.rar,.txt,.jpg,.jpeg,.png" class="hidden">

                                <label for="files-upload" class="cursor-pointer block">
                                    <div class="flex items-center justify-center gap-3">
                                        <div class="w-9 h-9 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center text-lg flex-shrink-0">
                                            📎
                                        </div>
                                        <div class="text-left">
                                            <p class="text-xs sm:text-sm font-semibold text-slate-700">
                                                Click to upload or drag & drop files
                                            </p>
                                            <p class="text-[11px] text-slate-400">PDF, DOC, DOCX, ZIP, PPT, Images (Up to 10MB each)</p>
                                        </div>
                                    </div>
                                </label>

                                <div wire:loading wire:target="tempFiles" class="mt-2.5">
                                    <span class="inline-flex items-center gap-1.5 text-xs text-indigo-600 font-medium">
                                        <svg class="animate-spin h-3.5 w-3.5" viewBox="0 0 24 24" fill="none"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                        Uploading files...
                                    </span>
                                </div>
                            </div>

                            @if (!empty($files))
                                <div class="mt-3 flex flex-wrap gap-2">
                                    @foreach ($files as $index => $file)
                                        <div class="inline-flex items-center gap-2 bg-white border border-slate-200 rounded-lg px-2.5 py-1 text-xs shadow-2xs">
                                            <span class="text-slate-400 text-xs">📄</span>
                                            <span class="font-medium text-slate-800 max-w-[160px] truncate">{{ $file->getClientOriginalName() }}</span>
                                            <span class="text-[10px] text-slate-400">({{ number_format($file->getSize() / 1024, 0) }}KB)</span>
                                            <button type="button" wire:click="removeFile({{ $index }})" class="text-slate-400 hover:text-rose-600 transition-colors ml-1 font-bold">×</button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN: MINIMALIST ORDER SUMMARY & CTA -->
            <div class="lg:col-span-4 space-y-4 lg:sticky lg:top-6">
                <div class="bg-white rounded-2xl border border-slate-200/90 shadow-xs overflow-hidden">
                    
                    {{-- Summary Header --}}
                    <div class="px-5 py-4 border-b border-slate-100 bg-slate-900 text-white flex items-center justify-between">
                        <div>
                            <h3 class="text-sm font-bold tracking-tight">Order Summary</h3>
                            <p class="text-[11px] text-slate-400">All-inclusive transparent pricing</p>
                        </div>
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md bg-emerald-500/10 border border-emerald-500/20 text-[10px] font-bold text-emerald-400 uppercase tracking-wider">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                            40% OFF
                        </span>
                    </div>

                    <div class="p-5 space-y-4">
                        
                        {{-- Price Highlight Block --}}
                        <div class="bg-slate-50/80 rounded-xl p-4 border border-slate-100 flex items-baseline justify-between">
                            <div>
                                <span class="text-[11px] font-semibold text-slate-400 uppercase tracking-wider block">Estimated Total</span>
                                <div class="flex items-baseline gap-2 mt-0.5">
                                    <span class="text-3xl font-extrabold text-slate-900 tracking-tight">${{ number_format($this->discountedPrice, 2) }}</span>
                                    <span class="text-xs text-slate-400 line-through font-semibold">${{ number_format($this->totalPrice, 2) }}</span>
                                </div>
                            </div>
                            <div class="text-right">
                                <span class="inline-block px-2 py-1 bg-emerald-50 text-emerald-700 border border-emerald-200 text-[11px] font-bold rounded-md">
                                    Save ${{ number_format($this->discountAmount, 2) }}
                                </span>
                            </div>
                        </div>

                        {{-- Line Items Breakdown --}}
                        <div class="space-y-2 text-xs divide-y divide-slate-100 pt-1">
                            <div class="flex justify-between py-1.5 text-slate-600">
                                <span>Service Type</span>
                                <span class="font-semibold text-slate-900 capitalize">{{ str_replace('_', ' ', $assignmentType) }}</span>
                            </div>
                            
                            <div class="flex justify-between py-1.5 text-slate-600">
                                <span>
                                    @if($assignmentType === 'online_class')
                                        Duration ({{ $duration }} {{ $durationUnit }})
                                    @else
                                        Quantity ({{ $pages }} {{ $pages === 1 ? 'Page' : 'Pages' }})
                                    @endif
                                </span>
                                <span class="font-semibold text-slate-900">${{ number_format($this->basePrice * ($assignmentType === 'online_class' ? $duration : $pages), 2) }}</span>
                            </div>

                            @if ($assignmentType !== 'online_class' && $this->urgencyMultiplier !== 1.0)
                                <div class="flex justify-between py-1.5 text-slate-600">
                                    <span>Deadline Priority</span>
                                    <span class="font-semibold {{ $this->urgencyMultiplier > 1.0 ? 'text-amber-600' : 'text-emerald-600' }}">
                                        {{ $this->urgencyMultiplier > 1.0 ? '+' : '' }}{{ number_format(($this->urgencyMultiplier - 1.0) * 100, 0) }}%
                                    </span>
                                </div>
                            @endif

                            <div class="flex justify-between py-1.5 text-emerald-600 font-semibold">
                                <span>Welcome Discount</span>
                                <span>-40%</span>
                            </div>

                            @if ($assignmentType !== 'online_class' && $this->volumeDiscount > 0)
                                <div class="flex justify-between py-1.5 text-emerald-600 font-semibold">
                                    <span>Volume Tier ({{ $pages }}+ pages)</span>
                                    <span>-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                                </div>
                            @endif
                        </div>

                        {{-- Main Submit Button --}}
                        <button type="submit"
                            wire:loading.attr="disabled"
                            class="w-full bg-indigo-600 hover:bg-indigo-700 active:bg-indigo-800 text-white font-bold py-3.5 px-4 rounded-xl text-sm transition-all duration-200 flex items-center justify-center gap-2 shadow-sm hover:shadow-md disabled:opacity-50 disabled:cursor-not-allowed">
                            <span wire:loading.remove wire:target="submit">
                                Continue & Submit Brief →
                            </span>
                            <span wire:loading wire:target="submit" class="flex items-center gap-2">
                                <svg class="animate-spin h-4 w-4 text-white" viewBox="0 0 24 24" fill="none"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                Processing Order...
                            </span>
                        </button>

                        <p class="text-[11px] text-center text-slate-400">
                            No upfront payment required to submit inquiry
                        </p>

                        {{-- Security Assurances --}}
                        <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[10px] text-slate-400 font-medium">
                            <span class="flex items-center gap-1">🔒 256-Bit SSL</span>
                            <span class="flex items-center gap-1">✓ Plagiarism-Free</span>
                            <span class="flex items-center gap-1">⚡ Free Revisions</span>
                        </div>
                    </div>
                </div>

                {{-- Mini Trust Strip --}}
                <div class="bg-white rounded-xl border border-slate-200/70 p-3 flex items-center justify-between gap-2 text-[11px] text-slate-500 shadow-2xs">
                    <span class="font-semibold text-slate-700">⭐ 4.9/5 Rating</span>
                    <span class="text-slate-300">•</span>
                    <span>50,000+ Completed Papers</span>
                </div>
            </div>

        </div>
    </form>
</div>
