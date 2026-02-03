<?php

use Livewire\Component;
use Livewire\Attributes\Computed;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    // Form fields
    public $assignmentType = 'assignment';
    public $serviceId = '';
    public $academicLevel = 'undergraduate';
    public $subject = 'general';
    public $title = '';
    public $difficulty = 'Beginner';
    public $deadline = '7-days';
    public $pages = 1;
    public $files = [];
    public $description = '';
    public $assignmentTypeValue = '';

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

    public function updatedFiles()
    {
        // This method is called when files are uploaded
        // Add validation here if needed
        $this->validate([
            'files.*' => 'nullable|file|max:10240', // 10MB max per file
        ]);
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'assignmentType' => 'required|in:assignment,programming',
            'academicLevel' => 'required_if:assignmentType,assignment',
            'deadline' => 'required',
            'pages' => 'required|integer|min:1|max:100',
            'files.*' => 'nullable|file|max:10240', // 10MB max per file
            'description' => 'nullable|string',
        ]);

        // Create order/assignment
        $assignment = \App\Models\Assignment::create([
            'user_id' => auth()->id(),
            'service_type' => $this->assignmentType,
            'service_id' => $this->serviceId ?: null,
            'subject' => $this->subject,
            'title' => $this->title,
            'deadline' => $this->deadline,
            'pages' => $this->pages,
            'description' => $this->description,
            'academic_level' => $this->academicLevel,
            'difficulty' => $this->difficulty,
            'assignment_type' => $this->assignmentTypeValue,
            'budget' => $this->discountedPrice,
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
        $price = $this->basePrice * $this->pages * $this->urgencyMultiplier * $this->subjectMultiplier;
        return round($price, 2);
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
        <!-- Two Column Layout -->
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- LEFT COLUMN - ORDER FORM -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-600 to-indigo-600 p-6 text-white">
                        <h2 class="text-2xl font-bold">Assignment Details</h2>
                        <p class="text-purple-100 mt-2">Fill out the form below to get started</p>
                    </div>

                    <div class="p-8 space-y-8">
                        <!-- Service Type Selection -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">I need help with *</label>
                            <div class="grid md:grid-cols-2 gap-4">
                                <label class="flex items-center p-4 border-2 rounded-lg cursor-pointer transition-all"
                                       :class="$wire.assignmentType === 'programming' ? 'border-purple-500 bg-purple-50' : 'border-gray-300 hover:border-purple-300'">
                                    <input type="radio" wire:model.live="assignmentType" value="programming" class="mr-3 text-purple-500">
                                    <div>
                                        <div class="font-semibold text-gray-900">💻 Programming Assignment</div>
                                        <div class="text-sm text-gray-600">Code projects, debugging, algorithms</div>
                                    </div>
                                </label>
                                <label class="flex items-center p-4 border-2 rounded-lg cursor-pointer transition-all"
                                       :class="$wire.assignmentType === 'assignment' ? 'border-blue-500 bg-blue-50' : 'border-gray-300 hover:border-blue-300'">
                                    <input type="radio" wire:model.live="assignmentType" value="assignment" class="mr-3 text-blue-500">
                                    <div>
                                        <div class="font-semibold text-gray-900">📝 Academic Assignment</div>
                                        <div class="text-sm text-gray-600">Essays, research papers, homework</div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Assignment Service Selection -->
                        @if($assignmentType === 'assignment')
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Assignment Service *</label>
                                <select wire:model.live="serviceId" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors">
                                    <option value="">Select Service Type</option>
                                    @foreach(\App\Models\Service::active()->ordered()->get() as $service)
                                        <option value="{{ $service->id }}">{{ $service->icon }} {{ $service->name }} ({{ $service->formatted_price }})</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif

                        <!-- Academic Level & Subject -->
                        @if($assignmentType === 'assignment')
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Academic Level *</label>
                                    <select wire:model.live="academicLevel" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors">
                                        <option value="">Select Academic Level</option>
                                        <option value="high-school">🎓 High School</option>
                                        <option value="undergraduate">🎓 Undergraduate</option>
                                        <option value="masters">🎓 Master's</option>
                                        <option value="phd">🎓 PhD/Doctoral</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Subject Area *</label>
                                    <select wire:model.live="subject" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors">
                                        <option value="">Select Subject</option>
                                        <option value="general">📚 General / Essays</option>
                                        <option value="business">💼 Business / Management</option>
                                        <option value="nursing">🏥 Nursing / Healthcare</option>
                                        <option value="engineering">⚡ Engineering</option>
                                        <option value="law">⚖️ Law / Legal Studies</option>
                                        <option value="programming">💻 Computer Science</option>
                                    </select>
                                </div>
                            </div>
                        @endif

                        <!-- Programming Language & Type -->
                        @if($assignmentType === 'programming')
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Programming Language *</label>
                                    <select wire:model.live="subject" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                                        <option value="">Select Language</option>
                                        <option value="programming">🐍 Python</option>
                                        <option value="programming">☕ Java</option>
                                        <option value="programming">🟨 JavaScript</option>
                                        <option value="programming">⚡ C++</option>
                                        <option value="programming">🔷 C#</option>
                                        <option value="programming">🐘 PHP</option>
                                        <option value="programming">💎 Ruby</option>
                                        <option value="programming">🦀 Rust</option>
                                        <option value="programming">🎯 Kotlin</option>
                                        <option value="programming">🔵 Go</option>
                                        <option value="programming">📱 Swift</option>
                                        <option value="programming">🔴 R</option>
                                        <option value="programming">📊 MATLAB</option>
                                        <option value="programming">🗄️ SQL</option>
                                        <option value="general">🔧 Other</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-semibold text-gray-700 mb-3">Project Type *</label>
                                    <select wire:model.live="assignmentTypeValue" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                                        <option value="">Select Type</option>
                                        <option value="New Project">💻 New Project</option>
                                        <option value="Code Debugging">🔧 Bug Fix / Debugging</option>
                                        <option value="Code Review">📝 Code Review</option>
                                        <option value="Algorithm Help">🧮 Algorithm / Data Structure</option>
                                        <option value="Web Development">🌐 Web Development</option>
                                        <option value="Mobile App">📱 Mobile App</option>
                                        <option value="Database">🗄️ Database Design</option>
                                        <option value="API Development">🔌 API Development</option>
                                        <option value="Testing">🧪 Testing / QA</option>
                                        <option value="Other">🔧 Other</option>
                                    </select>
                                </div>
                            </div>
                        @endif

                        <!-- Title & Difficulty -->
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Project Title *</label>
                                <input type="text" wire:model="title" required placeholder="Enter project title"
                                       class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                                @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Difficulty</label>
                                <select wire:model.live="difficulty" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                                    <option value="Beginner">🟢 Beginner</option>
                                    <option value="Intermediate">🟡 Intermediate</option>
                                    <option value="Advanced">🔴 Advanced</option>
                                </select>
                            </div>
                        </div>

                        <!-- Deadline & Pages -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Deadline *</label>
                                <select wire:model.live="deadline" required class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                                    <option value="">Select Deadline</option>
                                    <option value="3-hours">3 Hours (Urgent) +150%</option>
                                    <option value="6-hours">6 Hours +100%</option>
                                    <option value="12-hours">12 Hours +80%</option>
                                    <option value="24-hours">24 Hours +50%</option>
                                    <option value="2-days">2 Days +30%</option>
                                    <option value="3-days">3 Days +20%</option>
                                    <option value="5-days">5 Days +10%</option>
                                    <option value="7-days">7 Days (Standard)</option>
                                    <option value="14-days">14 Days -10%</option>
                                    <option value="30-days">30 Days -20%</option>
                                </select>
                                @error('deadline') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-3">Number of Pages *</label>
                                <div class="flex items-center gap-4">
                                    <button type="button" wire:click="decrementPages"
                                        class="w-12 h-12 bg-white border-2 border-gray-300 hover:border-purple-500 hover:bg-purple-50 rounded-lg font-bold text-xl transition-colors">
                                        -
                                    </button>
                                    <input type="number" wire:model.live="pages" min="1" max="100" required
                                           class="flex-1 text-center border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors text-2xl font-bold">
                                    <button type="button" wire:click="incrementPages"
                                        class="w-12 h-12 bg-white border-2 border-gray-300 hover:border-purple-500 hover:bg-purple-50 rounded-lg font-bold text-xl transition-colors">
                                        +
                                    </button>
                                </div>
                                <p class="text-xs text-gray-500 mt-2">{{ $pages }} {{ $pages === 1 ? 'page' : 'pages' }} ≈ {{ number_format($pages * 275) }} words</p>
                                @error('pages') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                            </div>
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
                                @dragover.prevent="dragging = true"
                                @dragleave.prevent="dragging = false"
                                @drop.prevent="handleDrop($event)"
                                :class="dragging ? 'border-purple-500 bg-purple-50 scale-[1.02]' : 'border-gray-300'"
                                class="file-upload-area card-3d-hover gradient-follow border-2 border-dashed rounded-xl p-6 sm:p-8 text-center hover:border-purple-400 transition-all duration-400 ease-custom touch-manipulation">

                                <input
                                    type="file"
                                    wire:model="files"
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
                                <div wire:loading wire:target="files" class="mt-4">
                                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 border border-blue-200 rounded-lg animate-pulse">
                                        <svg class="animate-spin h-4 w-4 text-blue-600" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <span class="text-sm text-blue-600 font-medium">Uploading files...</span>
                                    </div>
                                </div>

                                @error('files.*')
                                    <div class="mt-4 p-3 bg-red-50 border border-red-200 rounded-lg">
                                        <span class="text-red-600 text-sm font-semibold">❌ {{ $message }}</span>
                                    </div>
                                @enderror

                                @error('files')
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

            <!-- RIGHT COLUMN - PRICE CALCULATOR -->
            <div class="lg:col-span-1">
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl shadow-xl p-6 border-2 border-blue-100 sticky top-4">
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
                            <div class="text-sm text-gray-500">${{ number_format($this->pricePerPage, 2) }} per page</div>
                        </div>

                        <!-- Price Breakdown -->
                        <div class="border-t-2 border-gray-100 pt-4 mt-4 space-y-2 text-sm">
                            <div class="flex justify-between text-gray-600">
                                <span>Base price ({{ $pages }} {{ $pages === 1 ? 'page' : 'pages' }}):</span>
                                <span class="font-semibold">${{ number_format($this->basePrice * $pages, 2) }}</span>
                            </div>
                            @if ($this->urgencyMultiplier !== 1.0)
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
                                <span>Base Discount (40% OFF):</span>
                                <span>-40%</span>
                            </div>
                            @if ($this->volumeDiscount > 0)
                                <div class="flex justify-between text-green-600 font-semibold">
                                    <span>Volume Discount ({{ $pages }}+ pages):</span>
                                    <span>-{{ number_format($this->volumeDiscount * 100, 0) }}%</span>
                                </div>
                            @endif
                            <div class="flex justify-between text-green-700 font-bold bg-green-50 -mx-2 px-2 py-1 rounded">
                                <span>Total Savings:</span>
                                <span>-${{ number_format($this->discountAmount, 2) }} ({{ number_format($this->totalDiscount * 100, 0) }}% OFF)</span>
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
