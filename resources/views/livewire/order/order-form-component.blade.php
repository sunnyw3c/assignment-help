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
    }

    // Pricing constants. Sourced from App\Services\OrderPricingService so the
    // order form and the "edit my brief" endpoint can never quote differently.
    public $discount = \App\Services\OrderPricingService::BASE_DISCOUNT;

    public $levelPrices = \App\Services\OrderPricingService::LEVEL_PRICES;

    public $urgencyMultipliers = \App\Services\OrderPricingService::URGENCY_MULTIPLIERS;

    public $subjectMultipliers = \App\Services\OrderPricingService::SUBJECT_MULTIPLIERS;

    public $volumeDiscounts = \App\Services\OrderPricingService::VOLUME_DISCOUNTS;

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

        // Word count follows the selected spacing (250 double / 500 single)
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

        return redirect()->route('dashboard.details', $orderNumber);
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
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 sm:gap-6 md:gap-8">
            <!-- LEFT COLUMN - ORDER FORM -->
            <div class="md:col-span-2 order-1 md:order-1">
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-600 to-indigo-600 px-4 py-3.5 sm:px-5 text-white">
                        <h2 class="text-base sm:text-lg font-bold">Assignment Details</h2>
                        <p class="text-purple-100 mt-0.5 text-xs sm:text-sm">Fill out the form below to get started</p>
                    </div>

                    <div class="p-4 sm:p-5 md:p-6 space-y-5 sm:space-y-6">
                        <!-- Premium Category Switcher -->
                        <div class="relative">
                            <label class="block text-[11px] font-semibold text-slate-500 mb-2 uppercase tracking-wide">Select Service Category</label>
                            <div class="grid grid-cols-3 gap-2">
                                <button type="button" wire:click="$set('assignmentType', 'writing')"
                                    class="relative group px-2.5 py-2.5 sm:px-3 rounded-lg border transition-all text-left {{ $assignmentType === 'writing' ? 'border-purple-600 bg-purple-50' : 'border-slate-100 hover:border-purple-200 bg-white' }}">
                                    <div class="flex flex-col sm:flex-row items-center gap-1 sm:gap-2">
                                        <div class="w-7 h-7 rounded-md flex items-center justify-center text-base {{ $assignmentType === 'writing' ? 'bg-purple-600 text-white' : 'bg-slate-100 text-slate-500 group-hover:bg-purple-100 group-hover:text-purple-600' }}">✍️</div>
                                        <div class="text-center sm:text-left">
                                            <div class="font-bold text-xs sm:text-sm {{ $assignmentType === 'writing' ? 'text-purple-900' : 'text-slate-600' }}">Writing</div>
                                            <div class="text-[9px] sm:text-[10px] text-slate-400 font-medium hidden sm:block">Essays, Research</div>
                                        </div>
                                    </div>
                                    @if($assignmentType === 'writing')
                                        <div class="absolute -top-2 -right-2 w-5 h-5 bg-purple-600 border-2 border-white rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                    @endif
                                </button>

                                <button type="button" wire:click="$set('assignmentType', 'technical')"
                                    class="relative group px-2.5 py-2.5 sm:px-3 rounded-lg border transition-all text-left {{ $assignmentType === 'technical' ? 'border-indigo-600 bg-indigo-50' : 'border-slate-100 hover:border-indigo-200 bg-white' }}">
                                    <div class="flex flex-col sm:flex-row items-center gap-1 sm:gap-2">
                                        <div class="w-7 h-7 rounded-md flex items-center justify-center text-base {{ $assignmentType === 'technical' ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-500 group-hover:bg-indigo-100 group-hover:text-indigo-600' }}">⚙️</div>
                                        <div class="text-center sm:text-left">
                                            <div class="font-bold text-xs sm:text-sm {{ $assignmentType === 'technical' ? 'text-indigo-900' : 'text-slate-600' }}">Technical</div>
                                            <div class="text-[9px] sm:text-[10px] text-slate-400 font-medium hidden sm:block">Coding, Math</div>
                                        </div>
                                    </div>
                                    @if($assignmentType === 'technical')
                                        <div class="absolute -top-2 -right-2 w-5 h-5 bg-indigo-600 border-2 border-white rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                    @endif
                                </button>

                                <button type="button" wire:click="$set('assignmentType', 'online_class')"
                                    class="relative group px-2.5 py-2.5 sm:px-3 rounded-lg border transition-all text-left {{ $assignmentType === 'online_class' ? 'border-emerald-600 bg-emerald-50' : 'border-slate-100 hover:border-emerald-200 bg-white' }}">
                                    <div class="flex flex-col sm:flex-row items-center gap-1 sm:gap-2">
                                        <div class="w-7 h-7 rounded-md flex items-center justify-center text-base {{ $assignmentType === 'online_class' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-500 group-hover:bg-emerald-100 group-hover:text-emerald-600' }}">🎓</div>
                                        <div class="text-center sm:text-left">
                                            <div class="font-bold text-xs sm:text-sm {{ $assignmentType === 'online_class' ? 'text-emerald-900' : 'text-slate-600' }}">Online Class</div>
                                            <div class="text-[9px] sm:text-[10px] text-slate-400 font-medium hidden sm:block">Portal, Exams</div>
                                        </div>
                                    </div>
                                    @if($assignmentType === 'online_class')
                                        <div class="absolute -top-2 -right-2 w-5 h-5 bg-emerald-600 border-2 border-white rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                    @endif
                                </button>
                            </div>
                        </div>

                        <!-- User Contact Info -->
                        <div class="space-y-2 pt-4 border-t border-slate-100 animate-fade-in-up">
                            <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wider">Contact Information</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 group-focus-within:text-purple-600 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <input type="email" wire:model.blur="email" placeholder="Enter your email address for order updates"
                                    class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 pl-9 text-sm placeholder:text-slate-400 focus:border-purple-500 focus:bg-white focus:outline-none transition-all">
                                @error('email') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Writing Category Fields -->
                        @if($assignmentType === 'writing')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 animate-fade-in-up">
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Subject Area *</label>
                                    <select wire:model.live="subject" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-purple-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="general">📚 General / Essays</option>
                                        <option value="law">⚖️ Law / Legal Studies</option>
                                        <option value="nursing">🏥 Nursing / Healthcare</option>
                                        <option value="business">💼 Business / Management</option>
                                        <option value="literature">📖 Literature</option>
                                        <option value="history">🏛️ History</option>
                                    </select>
                                    @error('subject') <span class="text-red-500 text-[10px] mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Academic Level *</label>
                                    <select wire:model.live="academicLevel" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-purple-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="high-school">🎓 High School</option>
                                        <option value="undergraduate">🎓 Undergraduate</option>
                                        <option value="masters">🎓 Master's</option>
                                        <option value="phd">🎓 PhD/Doctoral</option>
                                    </select>
                                    @error('academicLevel') <span class="text-red-500 text-[10px] mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-span-full">
                                    <label class="block text-[11px] font-semibold text-slate-500 mb-2 uppercase tracking-wide">Reference Style *</label>
                                    <div class="flex flex-wrap gap-1.5">
                                        @foreach(['APA 7th', 'MLA 9th', 'Harvard', 'Chicago', 'Oxford', 'Turabian', 'OSCOLA', 'Other'] as $style)
                                            <button type="button" wire:click="$set('referenceStyle', '{{ $style }}')"
                                                class="px-3 py-1.5 rounded-md border text-xs font-medium transition-all {{ $referenceStyle === $style ? 'border-purple-600 bg-purple-600 text-white' : 'border-slate-200 bg-white text-slate-500 hover:border-purple-300 hover:text-purple-600' }}">
                                                {{ $style }}
                                            </button>
                                        @endforeach
                                    </div>

                                    @if($referenceStyle === 'Other')
                                        <div class="mt-2.5 animate-fade-in-up">
                                            <div class="relative group">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-purple-500">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                                </div>
                                                <input type="text" wire:model="customReferenceStyle" placeholder="Specify your reference style (e.g. Vancouver, IEEE, Bluebook...)"
                                                    class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 pl-9 placeholder:text-slate-400 focus:border-purple-500 focus:bg-white focus:outline-none transition-all text-sm">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <!-- Technical Category Fields -->
                        @if($assignmentType === 'technical')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 animate-fade-in-up">
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Technical Subject *</label>
                                    <select wire:model.live="subject" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-indigo-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="programming">💻 Programming</option>
                                        <option value="engineering">⚡ Engineering</option>
                                        <option value="math">🧮 Mathematics / Calculus</option>
                                        <option value="statistics">📊 Statistics / Data Science</option>
                                        <option value="architecture">🏗️ Architecture / CAD</option>
                                    </select>
                                    @error('subject') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Software / Language *</label>
                                    <input type="text" wire:model="softwareLanguage" placeholder="e.g. Python, Matlab, SPSS, AutoCad"
                                        class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm placeholder:text-slate-400 focus:border-indigo-500 focus:bg-white focus:outline-none transition-all">
                                    @error('softwareLanguage') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Difficulty Level</label>
                                    <select wire:model.live="difficulty" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-indigo-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="Beginner">🟢 Beginner / Basic</option>
                                        <option value="Intermediate">🟡 Intermediate / Standard</option>
                                        <option value="Advanced">🔴 Advanced / Complex</option>
                                    </select>
                                    @error('difficulty') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Academic Level *</label>
                                    <select wire:model.live="academicLevel" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-indigo-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="undergraduate">🎓 Undergraduate</option>
                                        <option value="masters">🎓 Master's</option>
                                        <option value="phd">🎓 PhD/Doctoral</option>
                                    </select>
                                    @error('academicLevel') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        @endif

                        <!-- Online Class Category Fields -->
                        @if($assignmentType === 'online_class')
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 animate-fade-in-up">
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Course Name / Code *</label>
                                    <input type="text" wire:model="courseCode" placeholder="e.g. CS101 - Intro to Programming"
                                        class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm placeholder:text-slate-400 focus:border-emerald-500 focus:bg-white focus:outline-none transition-all">
                                    @error('courseCode') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Service Needed *</label>
                                    <select wire:model.live="onlineServiceType" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-emerald-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="Full Course Help">🏢 Full Semester / Course help</option>
                                        <option value="Weekly Assignment">📅 Weekly Online Tasks</option>
                                        <option value="Live Exam">⏱️ Live Exam / Quiz Help</option>
                                        <option value="Homework Portal">📑 Online Portal Homework</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Duration *</label>
                                    <div class="flex items-center gap-2">
                                        <input type="number" wire:model.live="duration" min="1"
                                            class="w-16 bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-2 text-sm text-center font-semibold focus:border-emerald-500 focus:bg-white focus:outline-none transition-all [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none">
                                        <select wire:model.live="durationUnit" class="flex-1 bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-emerald-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                            <option value="weeks">Weeks</option>
                                            <option value="hours">Hours (for Exams)</option>
                                            <option value="sessions">Sessions</option>
                                        </select>
                                    </div>
                                    @error('duration') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                </div>
                                <div class="flex items-center">
                                    <label class="relative flex items-center gap-2.5 py-2.5 px-3 bg-emerald-50/50 rounded-lg border border-emerald-100 cursor-pointer group hover:bg-emerald-50 transition-colors w-full">
                                        <input type="checkbox" wire:model="loginRequired" class="w-4 h-4 text-emerald-600 rounded border-slate-300 focus:ring-emerald-500">
                                        <div>
                                            <div class="text-sm font-semibold text-emerald-900">Portal Credentials Needed</div>
                                            <div class="text-[10px] text-emerald-700">Encrypted & 100% Secure</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endif

                        <!-- Title, Difficulty, Deadline, Pages -->
                        <div class="space-y-6 pt-4 border-t border-slate-100">
                            @if($assignmentType !== 'online_class')
                                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4">
                                    <div class="sm:col-span-2">
                                        <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Project / Essay Title *</label>
                                        <input type="text" wire:model="title" placeholder="Enter the topic or title"
                                            class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm placeholder:text-slate-400 focus:border-purple-500 focus:bg-white focus:outline-none transition-all">
                                        @error('title') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Deadline *</label>
                                        <select wire:model.live="deadline" class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm focus:border-purple-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                            <option value="">Select Deadline</option>
                                            <option value="3-hours">3 Hours (Very Urgent)</option>
                                            <option value="6-hours">6 Hours</option>
                                            <option value="12-hours">12 Hours</option>
                                            <option value="24-hours">24 Hours</option>
                                            <option value="2-days">2 Days</option>
                                            <option value="3-days">3 Days</option>
                                            <option value="7-days">7 Days (Standard)</option>
                                            <option value="15-days">15 Days</option>
                                            <option value="30-days">1 Month</option>
                                        </select>
                                        @error('deadline') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Page Counter Section -->
                                <div class="space-y-1.5">
                                    <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide">Length &amp; Spacing *</label>

                                    <div class="flex flex-wrap items-center gap-2 rounded-lg border border-slate-200 bg-slate-50 p-1.5">
                                        {{-- Driven by wire:click: the entangle directive emits window.Livewire, which Livewire 4 does not define. --}}
                                        <div class="flex items-center rounded-md border border-slate-200 bg-white">
                                            <button type="button" wire:click="decrementPages" {{ $pages <= 1 ? 'disabled' : '' }}
                                                class="w-7 h-7 text-slate-400 hover:text-purple-600 flex items-center justify-center transition-colors disabled:opacity-40" aria-label="Decrease pages">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M20 12H4"></path></svg>
                                            </button>
                                            <input type="number" wire:model.live="pages" min="1" max="100" aria-label="Number of pages"
                                                class="w-9 text-center text-sm font-semibold text-slate-900 bg-transparent border-0 focus:ring-0 focus:outline-none p-0 [appearance:textfield] [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none">
                                            <button type="button" wire:click="incrementPages" {{ $pages >= 100 ? 'disabled' : '' }}
                                                class="w-7 h-7 text-slate-400 hover:text-purple-600 flex items-center justify-center transition-colors disabled:opacity-40" aria-label="Increase pages">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                                            </button>
                                        </div>

                                        <span class="text-xs text-slate-400">{{ $pages === 1 ? 'page' : 'pages' }}</span>

                                        <!-- Spacing segmented switch -->
                                        <div class="flex rounded-md border border-slate-200 bg-white p-0.5 ml-auto">
                                            @foreach(['double' => '250', 'single' => '500'] as $mode => $wpp)
                                                <button type="button" wire:click="$set('spacing', '{{ $mode }}')"
                                                    class="px-2.5 py-1 rounded text-[11px] font-medium transition-colors {{ $spacing === $mode ? 'bg-purple-600 text-white' : 'text-slate-500 hover:text-purple-600' }}">
                                                    {{ ucfirst($mode) }}
                                                    <span class="{{ $spacing === $mode ? 'text-purple-200' : 'text-slate-400' }}">{{ $wpp }}</span>
                                                </button>
                                            @endforeach
                                        </div>

                                        <!-- Live total -->
                                        <span class="px-2 py-1 rounded-md bg-purple-50 text-purple-700 text-[11px] font-semibold tabular-nums">
                                            ~{{ number_format($pages * $this->wordsPerPage) }} words
                                        </span>
                                    </div>

                                    <p class="text-[10px] text-slate-400 px-0.5">Times New Roman · 12pt · 1" margins</p>
                                </div>
                            @endif
                        </div>

                        <!-- Description -->
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">Requirements</label>
                            <textarea wire:model="description" rows="4" placeholder="Describe your requirements in detail..."
                                      class="w-full bg-slate-50 border border-slate-200 rounded-lg py-2.5 px-3 text-sm placeholder:text-slate-400 focus:border-purple-500 focus:bg-white focus:outline-none transition-all"></textarea>
                            @error('description') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>

                        <!-- Enhanced Multiple File Upload with Immersive Design -->
                        <div x-data="{
                            dragging: false,
                            handleDrop(e) {
                                this.dragging = false;
                                // Handle file drop
                            }
                        }">
                            <label class="block text-[11px] font-semibold text-slate-500 uppercase tracking-wide mb-1.5">
                                Upload Files (Optional)
                                <span class="normal-case font-normal text-slate-400 ml-1">— multiple supported</span>
                            </label>

                            <!-- Drag & Drop Area -->
                            <div
                                x-on:dragover.prevent="dragging = true"
                                x-on:dragleave.prevent="dragging = false"
                                x-on:drop.prevent="
                                    dragging = false; 
                                    const files = $event.dataTransfer.files;
                                    if (files.length > 0) {
                                        $wire.uploadMultiple('tempFiles', files, 
                                            (uploadedName) => { console.log('Upload success'); },
                                            (error) => { console.error('Upload error', error); },
                                            (progressEvent) => { console.log('Upload progress', progressEvent.detail.progress); }
                                        );
                                    }
                                "
                                :class="dragging ? 'border-purple-500 bg-purple-50' : 'border-slate-200'"
                                class="file-upload-area border border-dashed rounded-lg px-4 py-5 text-center hover:border-purple-400 transition-all touch-manipulation">

                                <input
                                    type="file"
                                    wire:model="tempFiles"
                                    multiple
                                    class="hidden"
                                    id="files-upload"
                                    accept=".pdf,.doc,.docx,.zip,.rar,.txt,.jpg,.jpeg,.png">

                                <label for="files-upload" class="cursor-pointer block">
                                    <div class="text-2xl mb-1.5">📁</div>
                                    <div class="space-y-0.5">
                                        <p class="text-sm font-semibold text-purple-600 hover:text-purple-700 transition-colors">
                                            Click to browse or drag files here
                                        </p>
                                        <p class="text-xs text-slate-400">
                                            PDF, DOC, DOCX, ZIP, Images • Max 10MB per file
                                        </p>
                                    </div>
                                </label>

                                <!-- Loading State -->
                                <div wire:loading wire:target="tempFiles" class="mt-4">
                                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 border border-blue-200 rounded-lg animate-pulse">
                                        <svg class="animate-spin h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <span class="text-sm text-blue-600 font-medium">Uploading files...</span>
                                    </div>
                                </div>

                                @error('tempFiles.*')
                                    <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                                        <span class="text-red-600 text-sm font-semibold">❌ {{ $message }}</span>
                                    </div>
                                @enderror

                                @error('tempFiles')
                                    <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                                        <span class="text-red-600 text-sm font-semibold">❌ {{ $message }}</span>
                                    </div>
                                @enderror

                                @if (session()->has('error'))
                                    <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                                        <span class="text-red-600 text-sm font-semibold">❌ {{ session('error') }}</span>
                                    </div>
                                @endif
                            </div>

                            <!-- Uploaded Files List with Immersive Design -->
                            @if (!empty($files))
                                <div class="mt-3 space-y-1.5">
                                    <p class="text-[11px] font-semibold text-slate-500 uppercase tracking-wide">
                                        Uploaded Files ({{ count($files) }})
                                    </p>

                                    @foreach ($files as $index => $file)
                                        <div class="border border-slate-200 bg-slate-50 px-3 py-2 rounded-lg flex items-center gap-2.5 group animate-fade-in">
                                            <!-- File Icon -->
                                            <div class="flex-shrink-0 w-8 h-8 bg-slate-200 rounded-md flex items-center justify-center text-sm">
                                                @php
                                                    $ext = strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION));
                                                    $icon = match($ext) {
                                                        'pdf' => '📄',
                                                        'doc', 'docx' => '📝',
                                                        'zip', 'rar' => '📦',
                                                        'jpg', 'jpeg', 'png' => '🖼️',
                                                        default => '📎'
                                                    };
                                                @endphp
                                                {{ $icon }}
                                            </div>

                                            <!-- File Info -->
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm font-medium text-slate-700 truncate">
                                                    {{ $file->getClientOriginalName() }}
                                                </p>
                                                <p class="text-[11px] text-slate-400">
                                                    {{ number_format($file->getSize() / 1024, 1) }} KB
                                                </p>
                                            </div>

                                            <!-- Remove Button -->
                                            <button
                                                type="button"
                                                wire:click="removeFile({{ $index }})"
                                                class="flex-shrink-0 w-7 h-7 text-slate-400 hover:bg-red-50 hover:text-red-600 rounded-md transition-colors flex items-center justify-center touch-manipulation">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-center pt-2">
                            <button type="submit"
                                    wire:loading.attr="disabled"
                                    class="w-full sm:w-auto bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-8 py-2.5 rounded-lg text-sm font-semibold transition-colors shadow-sm disabled:opacity-50 disabled:cursor-not-allowed">
                                <span wire:loading.remove wire:target="submit">
                                    {{ $assignmentType === 'programming' ? '🚀 Get Programming Help' : '📝 Submit Assignment' }}
                                </span>
                                <span wire:loading wire:target="submit">
                                    Submitting...
                                </span>
                            </button>
                        </div>

                        <!-- Help Text -->
                        <div class="text-center text-gray-500 text-xs sm:text-sm">
                            <p>Average response time: <strong class="text-purple-600">15 minutes</strong> - Available 24/7</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN - SECURE ORDER SUMMARY (Sidebar) -->
            <div class="md:col-span-1 order-2 md:order-2">
                <div class="sticky top-4 sm:top-8 space-y-6">
                    <!-- Main Summary Card -->
                    <div class="bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-100 overflow-hidden">
                        <!-- Header with Security Focus -->
                        <div class="bg-slate-900 p-8 text-white text-center relative overflow-hidden min-h-[140px] flex flex-col items-center justify-center">
                            <!-- Premium Background Image -->
                            <div class="absolute inset-0 z-0">
                                <img src="{{ asset('images/ui/premium_academic_bg.png') }}" alt="" class="w-full h-full object-cover opacity-30 mix-blend-overlay">
                                <div class="absolute inset-0 bg-gradient-to-b from-slate-900/50 to-slate-900"></div>
                            </div>
                            
                            <div class="relative z-10 flex flex-col items-center gap-3">
                                <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center backdrop-blur-md border border-white/20 shadow-xl">
                                    <svg class="w-8 h-8 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-black tracking-tight">Secure Order Summary</h3>
                                    <div class="flex items-center justify-center gap-1.5 text-[10px] text-emerald-400 font-bold uppercase tracking-widest mt-1">
                                        <span class="w-1.5 h-1.5 bg-emerald-500 rounded-full animate-pulse"></span>
                                        256-Bit SSL Encrypted
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 sm:p-8 space-y-6">
                            <!-- Premium Price Card -->
                            <div class="relative group">
                                <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-2xl blur opacity-10 group-hover:opacity-20 transition duration-500"></div>
                                <div class="relative bg-slate-50 border border-slate-100 rounded-2xl p-6">
                                    <div class="flex justify-between items-start mb-2">
                                        <span class="text-xs font-black text-slate-400 uppercase tracking-widest">Grand Total</span>
                                        <span class="px-2 py-1 bg-red-500 text-white text-[10px] font-black rounded-lg shadow-lg shadow-red-200 animate-bounce-slow">
                                            {{ number_format($this->totalDiscount * 100, 0) }}% OFF
                                        </span>
                                    </div>
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-4xl font-black text-slate-900">${{ number_format($this->discountedPrice, 2) }}</span>
                                        <span class="text-sm text-slate-400 line-through font-bold">${{ number_format($this->totalPrice, 2) }}</span>
                                    </div>
                                    <div class="mt-2 flex items-center gap-2">
                                        <div class="h-1 flex-1 bg-slate-200 rounded-full overflow-hidden">
                                            <div class="h-full bg-emerald-500 w-full"></div>
                                        </div>
                                        <span class="text-[10px] font-black text-emerald-600 uppercase tracking-tighter">Savings Applied: ${{ number_format($this->discountAmount, 2) }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Detailed Receipt -->
                            <div class="space-y-3">
                                <div class="flex justify-between text-sm">
                                    <span class="text-slate-500 flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                        @if($assignmentType === 'online_class')
                                            Duration ({{ $duration }} {{ $durationUnit }})
                                        @else
                                            Project Size ({{ $pages }} {{ $pages === 1 ? 'Page' : 'Pages' }})
                                        @endif
                                    </span>
                                    <span class="font-bold text-slate-700">${{ number_format($this->basePrice * ($assignmentType === 'online_class' ? $duration : $pages), 2) }}</span>
                                </div>

                                @if ($assignmentType !== 'online_class' && $this->urgencyMultiplier !== 1.0)
                                    <div class="flex justify-between text-sm">
                                        <span class="text-slate-500 flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            Deadline Priority Adjustment
                                        </span>
                                        <span class="font-bold {{ $this->urgencyMultiplier > 1.0 ? 'text-orange-500' : 'text-emerald-500' }}">
                                            {{ $this->urgencyMultiplier > 1.0 ? '+' : '' }}{{ number_format(($this->urgencyMultiplier - 1.0) * 100, 0) }}%
                                        </span>
                                    </div>
                                @endif

                                @if ($this->subjectMultiplier !== 1.0)
                                    <div class="flex justify-between text-sm">
                                        <span class="text-slate-500 flex items-center gap-2">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                                            Expert Specialty Loading
                                        </span>
                                        <span class="font-bold text-orange-500">+{{ number_format(($this->subjectMultiplier - 1.0) * 100, 0) }}%</span>
                                    </div>
                                @endif

                                <div class="pt-3 border-t border-slate-100 space-y-2">
                                    <div class="flex justify-between text-sm text-emerald-600 font-bold">
                                        <span>Exclusive Welcome Offer</span>
                                        <span>-40%</span>
                                    </div>
                                    @if ($assignmentType !== 'online_class' && $this->volumeDiscount > 0)
                                        <div class="flex justify-between text-sm text-emerald-600 font-bold">
                                            <span>Bulk Order Discount ({{ $pages }}+ pages)</span>
                                            <span>-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trust Seals Section -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex flex-col items-center gap-2 text-center group hover:border-blue-200 transition-colors">
                            <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 transition-colors group-hover:bg-blue-600 group-hover:text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                            <div>
                                <div class="text-[10px] font-black text-slate-900 uppercase tracking-tighter">SSL Secure</div>
                                <div class="text-[8px] text-slate-400 font-bold uppercase tracking-widest">Encrypted Checkout</div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex flex-col items-center gap-2 text-center group hover:border-emerald-200 transition-colors">
                            <div class="w-10 h-10 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 transition-colors group-hover:bg-emerald-600 group-hover:text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            </div>
                            <div>
                                <div class="text-[10px] font-black text-slate-900 uppercase tracking-tighter">Verified</div>
                                <div class="text-[8px] text-slate-400 font-bold uppercase tracking-widest">Academic Experts</div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex flex-col items-center gap-2 text-center group hover:border-orange-200 transition-colors">
                            <div class="w-10 h-10 bg-orange-50 rounded-xl flex items-center justify-center text-orange-600 transition-colors group-hover:bg-orange-600 group-hover:text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                            <div>
                                <div class="text-[10px] font-black text-slate-900 uppercase tracking-tighter">Guaranteed</div>
                                <div class="text-[8px] text-slate-400 font-bold uppercase tracking-widest">Full Money Back</div>
                            </div>
                        </div>
                        <div class="bg-white rounded-2xl p-4 border border-slate-100 shadow-sm flex flex-col items-center gap-2 text-center group hover:border-purple-200 transition-colors">
                            <div class="w-10 h-10 bg-purple-50 rounded-xl flex items-center justify-center text-purple-600 transition-colors group-hover:bg-purple-600 group-hover:text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <div>
                                <div class="text-[10px] font-black text-slate-900 uppercase tracking-tighter">Fast Delivery</div>
                                <div class="text-[8px] text-slate-400 font-bold uppercase tracking-widest">Always On Time</div>
                            </div>
                        </div>
                    </div>

                    <!-- Social Proof Card -->
                    <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-3xl p-6 text-white relative overflow-hidden group shadow-lg shadow-indigo-200">
                        <div class="absolute -right-8 -bottom-8 w-32 h-32 bg-white/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>
                        <div class="relative z-10 flex items-center gap-4">
                            <div class="flex -space-x-3">
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-200 flex items-center justify-center text-[10px] font-bold text-slate-900">JS</div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-300 flex items-center justify-center text-[10px] font-bold text-slate-900">MA</div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-slate-400 flex items-center justify-center text-[10px] font-bold text-slate-900">RK</div>
                            </div>
                            <div>
                                <div class="text-xl font-black">50,000+</div>
                                <div class="text-[10px] font-bold text-indigo-100 uppercase tracking-widest">Happy Students in USA</div>
                            </div>
                        </div>
                    </div>

                    <!-- Trusted Payment Methods -->
                    <div class="pt-4 px-2">
                        <div class="text-center text-[10px] font-black text-slate-400 uppercase tracking-[0.2em] mb-4">We Accept Secure Payments</div>
                        <div class="flex flex-wrap justify-center items-center gap-4 opacity-40 grayscale hover:opacity-100 hover:grayscale-0 transition-all duration-500">
                            <!-- Placeholder-like icons using text/svg since I don't have external assets -->
                            <div class="flex items-center gap-1 font-black text-slate-600 text-[10px]">VISA</div>
                            <div class="flex items-center gap-1 font-black text-slate-600 text-[10px]">MASTERCARD</div>
                            <div class="flex items-center gap-1 font-black text-slate-600 text-[10px]">AMEX</div>
                            <div class="flex items-center gap-1 font-black text-slate-600 text-[10px]">PAYPAL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
