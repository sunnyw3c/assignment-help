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

        // Create order/assignment
        $assignment = \App\Models\Assignment::create([
            'user_id' => auth()->id(),
            'email' => $this->email,
            'service_type' => $this->assignmentType,
            'service_id' => $this->serviceId ?: null,
            'subject' => $this->assignmentType === 'online_class' ? $this->courseCode : $this->subject,
            'title' => $this->assignmentType === 'online_class' ? $this->onlineServiceType : $this->title,
            'deadline' => $this->deadline,
            'pages' => $this->assignmentType === 'online_class' ? $this->duration : $this->pages,
            'description' => $this->description,
            'academic_level' => $this->academicLevel,
            'difficulty' => $this->difficulty,
            'assignment_type' => $this->assignmentType === 'technical' ? $this->softwareLanguage : $this->assignmentTypeValue,
            'budget' => $this->discountedPrice,
            'specific_requirements' => json_encode([
                'reference_style' => $this->referenceStyle,
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

        session()->flash('success', 'Order submitted successfully! We will contact you shortly.');

        return redirect()->route('order.create');
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
        <div class="grid md:grid-cols-3 gap-8">
            <!-- LEFT COLUMN - ORDER FORM -->
            <div class="md:col-span-2">
                <div class="bg-white rounded-3xl shadow-2xl border border-slate-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-600 to-indigo-600 p-6 text-white">
                        <h2 class="text-2xl font-bold">Assignment Details</h2>
                        <p class="text-purple-100 mt-2">Fill out the form below to get started</p>
                    </div>

                    <div class="p-6 md:p-10 space-y-10">
                        <!-- Premium Category Switcher -->
                        <div class="relative">
                            <label class="block text-sm font-bold text-slate-700 mb-4 uppercase tracking-wider">Select Service Category</label>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                                <button type="button" wire:click="$set('assignmentType', 'writing')" 
                                    class="relative group px-6 py-4 rounded-2xl border-2 transition-all duration-300 text-left {{ $assignmentType === 'writing' ? 'border-purple-600 bg-purple-50/50 shadow-lg shadow-purple-200/50' : 'border-slate-100 hover:border-purple-200 bg-white' }}">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl {{ $assignmentType === 'writing' ? 'bg-purple-600 text-white' : 'bg-slate-100 text-slate-500 group-hover:bg-purple-100 group-hover:text-purple-600' }}">✍️</div>
                                        <div>
                                            <div class="font-bold text-sm {{ $assignmentType === 'writing' ? 'text-purple-900' : 'text-slate-600' }}">Writing</div>
                                            <div class="text-[10px] text-slate-400 font-medium">Essays, Research</div>
                                        </div>
                                    </div>
                                    @if($assignmentType === 'writing')
                                        <div class="absolute -top-2 -right-2 w-5 h-5 bg-purple-600 border-2 border-white rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                    @endif
                                </button>

                                <button type="button" wire:click="$set('assignmentType', 'technical')" 
                                    class="relative group px-6 py-4 rounded-2xl border-2 transition-all duration-300 text-left {{ $assignmentType === 'technical' ? 'border-indigo-600 bg-indigo-50/50 shadow-lg shadow-indigo-200/50' : 'border-slate-100 hover:border-indigo-200 bg-white' }}">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl {{ $assignmentType === 'technical' ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-500 group-hover:bg-indigo-100 group-hover:text-indigo-600' }}">⚙️</div>
                                        <div>
                                            <div class="font-bold text-sm {{ $assignmentType === 'technical' ? 'text-indigo-900' : 'text-slate-600' }}">Technical</div>
                                            <div class="text-[10px] text-slate-400 font-medium">Coding, Math</div>
                                        </div>
                                    </div>
                                    @if($assignmentType === 'technical')
                                        <div class="absolute -top-2 -right-2 w-5 h-5 bg-indigo-600 border-2 border-white rounded-full flex items-center justify-center">
                                            <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                    @endif
                                </button>

                                <button type="button" wire:click="$set('assignmentType', 'online_class')" 
                                    class="relative group px-6 py-4 rounded-2xl border-2 transition-all duration-300 text-left {{ $assignmentType === 'online_class' ? 'border-emerald-600 bg-emerald-50/50 shadow-lg shadow-emerald-200/50' : 'border-slate-100 hover:border-emerald-200 bg-white' }}">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl flex items-center justify-center text-xl {{ $assignmentType === 'online_class' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-500 group-hover:bg-emerald-100 group-hover:text-emerald-600' }}">🎓</div>
                                        <div>
                                            <div class="font-bold text-sm {{ $assignmentType === 'online_class' ? 'text-emerald-900' : 'text-slate-600' }}">Online Class</div>
                                            <div class="text-[10px] text-slate-400 font-medium">Portal, Exams</div>
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
                        <div class="space-y-4 pt-4 border-t border-slate-100 animate-fade-in-up">
                            <label class="block text-sm font-bold text-slate-700 uppercase tracking-wider">Contact Information</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400 group-focus-within:text-purple-600 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <input type="email" wire:model.live="email" required placeholder="Enter your email address for order updates"
                                    class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 pl-12 focus:border-purple-500 focus:bg-white focus:outline-none transition-all">
                                @error('email') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <!-- Writing Category Fields -->
                        @if($assignmentType === 'writing')
                            <div class="grid md:grid-cols-2 gap-6 animate-fade-in-up">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Subject Area *</label>
                                    <select wire:model.live="subject" class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-purple-500 focus:bg-white focus:outline-none transition-all appearance-none cursor-pointer">
                                        <option value="general">📚 General / Essays</option>
                                        <option value="law">⚖️ Law / Legal Studies</option>
                                        <option value="nursing">🏥 Nursing / Healthcare</option>
                                        <option value="business">💼 Business / Management</option>
                                        <option value="literature">📖 Literature</option>
                                        <option value="history">🏛️ History</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Academic Level *</label>
                                    <select wire:model.live="academicLevel" class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-purple-500 focus:bg-white focus:outline-none transition-all appearance-none cursor-pointer">
                                        <option value="high-school">🎓 High School</option>
                                        <option value="undergraduate">🎓 Undergraduate</option>
                                        <option value="masters">🎓 Master's</option>
                                        <option value="phd">🎓 PhD/Doctoral</option>
                                    </select>
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Reference Style *</label>
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                        @foreach(['APA 7th', 'MLA 9th', 'Harvard', 'Chicago', 'Oxford', 'Turabian', 'OSCOLA', 'Other'] as $style)
                                            <button type="button" wire:click="$set('referenceStyle', '{{ $style }}')"
                                                class="px-4 py-3 rounded-xl border-2 text-sm font-semibold transition-all {{ $referenceStyle === $style ? 'border-purple-500 bg-purple-50 text-purple-700' : 'border-slate-100 bg-slate-50 text-slate-500 hover:border-slate-200' }}">
                                                {{ $style }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        <!-- Technical Category Fields -->
                        @if($assignmentType === 'technical')
                            <div class="grid md:grid-cols-2 gap-6 animate-fade-in-up">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Technical Subject *</label>
                                    <select wire:model.live="subject" class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-indigo-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="programming">💻 Programming</option>
                                        <option value="engineering">⚡ Engineering</option>
                                        <option value="math">🧮 Mathematics / Calculus</option>
                                        <option value="statistics">📊 Statistics / Data Science</option>
                                        <option value="architecture">🏗️ Architecture / CAD</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Software / Language *</label>
                                    <input type="text" wire:model="softwareLanguage" placeholder="e.g. Python, Matlab, SPSS, AutoCad"
                                        class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-indigo-500 focus:bg-white focus:outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Difficulty Level</label>
                                    <select wire:model.live="difficulty" class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-indigo-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="Beginner">🟢 Beginner / Basic</option>
                                        <option value="Intermediate">🟡 Intermediate / Standard</option>
                                        <option value="Advanced">🔴 Advanced / Complex</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Academic Level *</label>
                                    <select wire:model.live="academicLevel" class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-indigo-500 focus:bg-white focus:outline-none transition-all appearance-none cursor-pointer">
                                        <option value="undergraduate">🎓 Undergraduate</option>
                                        <option value="masters">🎓 Master's</option>
                                        <option value="phd">🎓 PhD/Doctoral</option>
                                    </select>
                                </div>
                            </div>
                        @endif

                        <!-- Online Class Category Fields -->
                        @if($assignmentType === 'online_class')
                            <div class="grid md:grid-cols-2 gap-6 animate-fade-in-up">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Course Name / Code *</label>
                                    <input type="text" wire:model="courseCode" placeholder="e.g. CS101 - Intro to Programming"
                                        class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-emerald-500 focus:bg-white focus:outline-none transition-all">
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Service Needed *</label>
                                    <select wire:model.live="onlineServiceType" class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-emerald-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                        <option value="Full Course Help">🏢 Full Semester / Course help</option>
                                        <option value="Weekly Assignment">📅 Weekly Online Tasks</option>
                                        <option value="Live Exam">⏱️ Live Exam / Quiz Help</option>
                                        <option value="Homework Portal">📑 Online Portal Homework</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">Duration *</label>
                                    <div x-data="{ count: @entangle('duration').live }" class="flex items-center gap-3">
                                        <input type="number" x-model.number="count" min="1"
                                            class="w-24 bg-slate-50 border-2 border-slate-100 rounded-xl p-4 text-center font-bold focus:border-emerald-500 focus:bg-white focus:outline-none transition-all">
                                        <select wire:model.live="durationUnit" class="flex-1 bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-emerald-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
                                            <option value="weeks">Weeks</option>
                                            <option value="hours">Hours (for Exams)</option>
                                            <option value="sessions">Sessions</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <label class="relative flex items-center gap-3 p-4 bg-emerald-50/50 rounded-xl border-2 border-emerald-100 cursor-pointer group hover:bg-emerald-50 transition-colors">
                                        <input type="checkbox" wire:model="loginRequired" class="w-5 h-5 text-emerald-600 rounded border-slate-300 focus:ring-emerald-500">
                                        <div>
                                            <div class="text-sm font-bold text-emerald-900">Portal Credentials Needed</div>
                                            <div class="text-[10px] text-emerald-700">Encrypted & 100% Secure</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @endif

                        <!-- Title, Difficulty, Deadline, Pages -->
                        <div class="space-y-6 pt-4 border-t border-slate-100">
                            @if($assignmentType !== 'online_class')
                                <div class="grid md:grid-cols-3 gap-6">
                                    <div class="md:col-span-2">
                                        <label class="block text-sm font-bold text-slate-700 mb-2">Project / Essay Title *</label>
                                        <input type="text" wire:model="title" required placeholder="Enter the topic or title"
                                            class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-purple-500 focus:bg-white focus:outline-none transition-all">
                                        @error('title') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                                    </div>
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">Deadline *</label>
                                        <select wire:model.live="deadline" required class="w-full bg-slate-50 border-2 border-slate-100 rounded-xl p-4 focus:border-purple-500 focus:bg-white focus:outline-none transition-all cursor-pointer">
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
                                    </div>
                                </div>

                                <!-- Page Counter Section -->
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between">
                                        <label class="block text-sm font-bold text-slate-700 uppercase tracking-wider">Number of Pages *</label>
                                        <div class="flex items-center gap-2">
                                            <span class="px-3 py-1 bg-purple-100 text-purple-700 text-xs font-bold rounded-full border border-purple-200 shadow-sm animate-pulse-slow">
                                                ~{{ number_format($pages * $this->wordsPerPage) }} Words
                                            </span>
                                            <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-xs font-bold rounded-full border border-indigo-200 shadow-sm">
                                                {{ ucfirst($spacing) }} Spaced
                                            </span>
                                        </div>
                                    </div>

                                    <div class="bg-white border-2 border-slate-100 rounded-[2rem] p-8 shadow-sm hover:shadow-xl hover:border-purple-200 transition-all duration-500 group relative overflow-hidden">
                                        <!-- Animated Background Glow -->
                                        <div class="absolute -top-24 -right-24 w-48 h-48 bg-purple-100/50 rounded-full blur-3xl group-hover:bg-purple-200/50 transition-colors duration-500"></div>
                                        
                                        <div class="relative flex flex-col md:flex-row items-center justify-between gap-8">
                                            <!-- Stats Column -->
                                            <div class="flex flex-col gap-3 order-2 md:order-1 text-center md:text-left">
                                                <div class="flex items-center gap-2 justify-center md:justify-start">
                                                    <span class="w-10 h-10 rounded-xl bg-purple-600 text-white flex items-center justify-center text-xl shadow-lg shadow-purple-200">✍️</span>
                                                    <div>
                                                        <div class="text-xs font-black text-slate-400 uppercase tracking-widest">Total Volume</div>
                                                        <div class="text-xl font-black text-slate-900">~{{ number_format($pages * $this->wordsPerPage) }} <span class="text-purple-600">Words</span></div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-2 justify-center md:justify-start">
                                                    <span class="w-10 h-10 rounded-xl bg-indigo-500 text-white flex items-center justify-center text-xl shadow-lg shadow-indigo-100">📄</span>
                                                    <div>
                                                        <div class="text-xs font-black text-slate-400 uppercase tracking-widest">Spacing Type</div>
                                                        <div class="text-lg font-bold text-slate-700">{{ ucfirst($spacing) }} Spaced</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Main Interactive Counter -->
                                            <div x-data="{ 
                                                count: @entangle('pages').live,
                                                increment() { if(this.count < 100) this.count++ },
                                                decrement() { if(this.count > 1) this.count-- }
                                            }" class="flex items-center gap-6 order-1 md:order-2 bg-slate-50/80 p-4 rounded-[1.5rem] border border-slate-100 shadow-inner">
                                                <button type="button" @click="decrement()" 
                                                    class="w-16 h-16 bg-white hover:bg-red-50 text-slate-400 hover:text-red-500 rounded-2xl flex items-center justify-center transition-all shadow-sm hover:shadow-md active:scale-90 border border-slate-100">
                                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M20 12H4"></path></svg>
                                                </button>
                                                
                                                <div class="flex flex-col items-center min-w-[100px]">
                                                    <input type="number" x-model.number="count" min="1" max="100" 
                                                        class="w-full text-center text-6xl font-black text-slate-900 bg-transparent border-none focus:ring-0 p-0">
                                                    <div class="text-[10px] font-bold text-purple-600 uppercase tracking-widest">Pages</div>
                                                </div>

                                                <button type="button" @click="increment()" 
                                                    class="w-16 h-16 bg-white hover:bg-emerald-50 text-slate-400 hover:text-emerald-500 rounded-2xl flex items-center justify-center transition-all shadow-sm hover:shadow-md active:scale-90 border border-slate-100">
                                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 4v16m8-8H4"></path></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Spacing Toggle Bar -->
                                    <div class="grid grid-cols-2 gap-4">
                                        <button type="button" wire:click="$set('spacing', 'double')" 
                                            class="flex items-center justify-between p-4 rounded-2xl border-2 transition-all {{ $spacing === 'double' ? 'border-indigo-600 bg-indigo-50 shadow-md' : 'border-slate-100 bg-white hover:border-indigo-200' }}">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded-lg flex items-center justify-center {{ $spacing === 'double' ? 'bg-indigo-600 text-white' : 'bg-slate-100 text-slate-400' }}">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                                                </div>
                                                <div class="text-left">
                                                    <div class="text-xs font-bold {{ $spacing === 'double' ? 'text-indigo-900' : 'text-slate-600' }}">Double Spaced</div>
                                                    <div class="text-[10px] text-slate-400">275 Words / page</div>
                                                </div>
                                            </div>
                                            @if($spacing === 'double') <svg class="w-4 h-4 text-indigo-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> @endif
                                        </button>

                                        <button type="button" wire:click="$set('spacing', 'single')" 
                                            class="flex items-center justify-between p-4 rounded-2xl border-2 transition-all {{ $spacing === 'single' ? 'border-orange-600 bg-orange-50 shadow-md' : 'border-slate-100 bg-white hover:border-orange-200' }}">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-8 rounded-lg flex items-center justify-center {{ $spacing === 'single' ? 'bg-orange-600 text-white' : 'bg-slate-100 text-slate-400' }}">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                                                </div>
                                                <div class="text-left">
                                                    <div class="text-xs font-bold {{ $spacing === 'single' ? 'text-orange-900' : 'text-slate-600' }}">Single Spaced</div>
                                                    <div class="text-[10px] text-slate-400">550 Words / page</div>
                                                </div>
                                            </div>
                                            @if($spacing === 'single') <svg class="w-4 h-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg> @endif
                                        </button>
                                    </div>
                                    
                                    <!-- Informational Bar -->
                                    <div class="bg-indigo-50/30 rounded-2xl border border-indigo-100/50 p-4 flex items-center justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 bg-white shadow-sm rounded-xl flex items-center justify-center text-xl">📐</div>
                                            <div>
                                                <div class="text-sm font-bold text-indigo-900">Academic Standard Formatting</div>
                                                <div class="text-[10px] text-indigo-600 font-medium">Times New Roman • 12pt • 1" Margins</div>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <div class="text-xs font-bold text-indigo-900">{{ $this->wordsPerPage }} Words</div>
                                            <div class="text-[10px] text-indigo-600 font-medium">Per Page Average</div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <!-- Enhanced Multiple File Upload with Immersive Design -->
                        <div x-data="{
                            dragging: false,
                            handleDrop(e) {
                                this.dragging = false;
                                // Handle file drop
                            }
                        }">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                📎 Upload Files (Optional)
                                <span class="text-xs font-normal text-gray-500 ml-2">- Multiple files supported</span>
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
                                :class="dragging ? 'border-purple-500 bg-purple-50 scale-[1.02]' : 'border-gray-300'"
                                class="file-upload-area card-3d-hover gradient-follow border-2 border-dashed rounded-xl p-6 sm:p-8 text-center hover:border-purple-400 transition-all duration-400 ease-custom touch-manipulation">

                                <input
                                    type="file"
                                    wire:model="tempFiles"
                                    multiple
                                    class="hidden"
                                    id="files-upload"
                                    accept=".pdf,.doc,.docx,.zip,.rar,.txt,.jpg,.jpeg,.png">

                                <label for="files-upload" class="cursor-pointer block">
                                    <div class="text-4xl sm:text-5xl mb-3 sm:mb-4 animate-bounce-slow">📁</div>
                                    <div class="space-y-2">
                                        <p class="text-base sm:text-lg font-semibold text-purple-600 hover:text-purple-700 transition-colors">
                                            Click to browse or drag files here
                                        </p>
                                        <p class="text-xs sm:text-sm text-gray-500">
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
                                <div class="mt-4 space-y-2">
                                    <p class="text-sm font-semibold text-gray-700">
                                        📋 Uploaded Files ({{ count($files) }})
                                    </p>

                                    @foreach ($files as $index => $file)
                                        <div class="glass-card p-3 sm:p-4 rounded-lg flex items-center gap-3 sm:gap-4 group hover-lift animate-fade-in">
                                            <!-- File Icon -->
                                            <div class="flex-shrink-0 w-10 h-10 sm:w-12 sm:h-12 bg-gradient-to-br from-purple-500 to-blue-500 rounded-lg flex items-center justify-center text-white font-bold text-lg sm:text-xl">
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
                                                <p class="text-sm sm:text-base font-semibold text-gray-800 truncate">
                                                    {{ $file->getClientOriginalName() }}
                                                </p>
                                                <p class="text-xs sm:text-sm text-gray-500">
                                                    {{ number_format($file->getSize() / 1024, 1) }} KB
                                                </p>
                                            </div>

                                            <!-- Remove Button -->
                                            <button
                                                type="button"
                                                wire:click="removeFile({{ $index }})"
                                                class="btn-press ripple-effect flex-shrink-0 w-8 h-8 sm:w-10 sm:h-10 bg-red-50 hover:bg-red-100 text-red-600 rounded-lg transition-all duration-300 flex items-center justify-center group-hover:scale-110 touch-manipulation">
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                        <!-- Description -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Requirements</label>
                            <textarea wire:model="description" rows="6" placeholder="Describe your requirements in detail..."
                                      class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-center pt-6">
                            <button type="submit"
                                    wire:loading.attr="disabled"
                                    class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-12 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg disabled:opacity-50 disabled:cursor-not-allowed">
                                <span wire:loading.remove wire:target="submit">
                                    {{ $assignmentType === 'programming' ? '🚀 Get Programming Help' : '📝 Submit Assignment' }}
                                </span>
                                <span wire:loading wire:target="submit">
                                    Submitting...
                                </span>
                            </button>
                        </div>

                        <!-- Help Text -->
                        <div class="text-center text-gray-500 text-sm">
                            <p>Average response time: <strong class="text-purple-600">15 minutes</strong> • Available 24/7</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT COLUMN - PRICE CALCULATOR (Sidebar) -->
            <div class="md:col-span-1">
                <div class="bg-white rounded-3xl shadow-2xl border border-slate-100 p-6 md:p-8 sticky top-8">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center gap-2 bg-blue-600 text-white px-4 py-2 rounded-full mb-4">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                            </svg>
                            <span class="font-bold">Price Estimate</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Your Total Cost</h3>
                    </div>

                    <!-- Price Display -->
                    <div class="bg-white rounded-xl p-6 border-2 border-blue-200 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <span class="text-lg font-semibold text-gray-700">Estimated Total:</span>
                                <span class="ml-2 inline-flex items-center px-3 py-1 rounded-full text-sm font-bold bg-red-500 text-white">
                                    {{ number_format($this->totalDiscount * 100, 0) }}% OFF
                                </span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-lg text-gray-400 line-through">${{ number_format($this->totalPrice, 2) }}</div>
                            <div class="text-4xl font-bold text-green-600">${{ number_format($this->discountedPrice, 2) }}</div>
                            @if($assignmentType !== 'online_class')
                                <div class="text-sm text-gray-500">${{ number_format($this->pricePerPage, 2) }} per page</div>
                            @else
                                <div class="text-sm text-gray-500">${{ number_format($this->discountedPrice / $duration, 2) }} per {{ rtrim($durationUnit, 's') }}</div>
                            @endif
                        </div>

                        <!-- Price Breakdown -->
                        <div class="border-t-2 border-gray-100 pt-4 mt-4 space-y-2 text-sm">
                            <div class="flex justify-between text-gray-600">
                                @if($assignmentType === 'online_class')
                                    <span>Duration ({{ $duration }} {{ $durationUnit }}):</span>
                                    <span class="font-semibold">${{ number_format($this->basePrice * $duration, 2) }}</span>
                                @else
                                    <span>Base price ({{ $pages }} {{ $pages === 1 ? 'page' : 'pages' }}):</span>
                                    <span class="font-semibold">${{ number_format($this->basePrice * $pages, 2) }}</span>
                                @endif
                            </div>
                            @if ($assignmentType !== 'online_class' && $this->urgencyMultiplier !== 1.0)
                                <div class="flex justify-between text-gray-600">
                                    <span>Deadline adjustment:</span>
                                    <span class="font-semibold {{ $this->urgencyMultiplier > 1.0 ? 'text-orange-600' : 'text-green-600' }}">
                                        {{ $this->urgencyMultiplier > 1.0 ? '+' : '' }}{{ number_format(($this->urgencyMultiplier - 1.0) * 100, 0) }}%
                                    </span>
                                </div>
                            @endif
                            @if ($this->subjectMultiplier !== 1.0)
                                <div class="flex justify-between text-gray-600">
                                    <span>Subject complexity:</span>
                                    <span class="font-semibold text-orange-600">
                                        +{{ number_format(($this->subjectMultiplier - 1.0) * 100, 0) }}%
                                    </span>
                                </div>
                            @endif
                            <div class="flex justify-between text-green-600 font-semibold border-t border-gray-200 pt-2 mt-2">
                                <span>Flat Discount:</span>
                                <span>-40%</span>
                            </div>
                            @if ($assignmentType !== 'online_class' && $this->volumeDiscount > 0)
                                <div class="flex justify-between text-green-600 font-semibold">
                                    <span>Volume Discount ({{ $pages }}+ pages):</span>
                                    <span>-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                                </div>
                            @endif
                            <div class="flex justify-between text-green-700 font-bold bg-green-50 -mx-2 px-2 py-1 rounded">
                                <span>Total Savings:</span>
                                <span>-${{ number_format($this->discountAmount, 2) }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Features -->
                    <div class="pt-6 border-t-2 border-blue-100">
                        <div class="space-y-3 text-sm">
                            <div class="flex items-center gap-2">
                                <div class="text-blue-600 font-bold">✓</div>
                                <div class="text-gray-600">Plagiarism Free</div>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="text-blue-600 font-bold">✓</div>
                                <div class="text-gray-600">On-Time Delivery</div>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="text-blue-600 font-bold">✓</div>
                                <div class="text-gray-600">24/7 Support</div>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="text-blue-600 font-bold">✓</div>
                                <div class="text-gray-600">Free Revisions</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
