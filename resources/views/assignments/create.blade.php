@extends('layouts.app')

@section('title', 'Get Academic Help - Submit Your Assignment')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 to-indigo-100 py-12">
    <div class="container mx-auto max-w-4xl px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Get Academic Help</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Submit your assignment and get expert help in minutes</p>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded mb-6">
                <div class="flex">
                    <div class="text-green-500 mr-3">✓</div>
                    <div>{{ session('success') }}</div>
                </div>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <div class="bg-gradient-to-r from-purple-600 to-indigo-600 p-6 text-white">
                <h2 class="text-2xl font-bold">Assignment Details</h2>
                <p class="text-purple-100 mt-2">Fill out the form below to get started</p>
            </div>

            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8"
                  x-data="{
                      assignmentType: '{{ request('assignment_service') ? 'assignment' : 'programming' }}',
                      serviceId: '{{ request('assignment_service') ?? '' }}',
                      academicLevel: '',
                      pages: 1,
                      wordCount: 0,
                      deadline: '',
                      difficulty: 'Beginner',
                      assignmentTypeValue: '',

                      // Service prices (base price per page)
                      servicePrices: {!! json_encode(\App\Models\Service::active()->pluck('base_price_per_page', 'id')) !!},

                      // Academic level multipliers
                      academicMultipliers: {
                          'high-school': 1.0,
                          'college': 1.2,
                          'university': 1.4,
                          'masters': 1.8,
                          'phd': 2.2
                      },

                      // Difficulty multipliers for programming
                      difficultyMultipliers: {
                          'Beginner': 1.0,
                          'Intermediate': 1.4,
                          'Advanced': 1.8
                      },

                      // Programming assignment type multipliers
                      programmingTypeMultipliers: {
                          'New Project': 1.0,
                          'Code Debugging': 0.8,
                          'Code Review': 0.7,
                          'Algorithm Help': 1.3,
                          'Tutoring': 1.1,
                          'Homework': 0.9
                      },

                      // Calculate deadline urgency multiplier
                      getUrgencyMultiplier() {
                          if (!this.deadline) return 1.0;
                          const deadlineDate = new Date(this.deadline);
                          const now = new Date();
                          const hoursUntilDeadline = (deadlineDate - now) / (1000 * 60 * 60);

                          if (hoursUntilDeadline < 0) return 1.5; // Past deadline
                          if (hoursUntilDeadline <= 6) return 2.0; // 6 hours or less
                          if (hoursUntilDeadline <= 12) return 1.8; // 12 hours or less
                          if (hoursUntilDeadline <= 24) return 1.5; // 24 hours or less
                          if (hoursUntilDeadline <= 48) return 1.3; // 48 hours or less
                          if (hoursUntilDeadline <= 72) return 1.15; // 3 days or less
                          if (hoursUntilDeadline <= 168) return 1.0; // 7 days or less
                          return 0.9; // More than 7 days
                      },

                      // Calculate total price
                      get totalPrice() {
                          let basePrice = 0;

                          if (this.assignmentType === 'assignment') {
                              // Academic assignment pricing
                              if (!this.serviceId || !this.servicePrices[this.serviceId]) return 0;

                              const pricePerPage = parseFloat(this.servicePrices[this.serviceId]);
                              const pageCount = parseInt(this.pages) || 1;
                              const academicMultiplier = this.academicMultipliers[this.academicLevel] || 1.0;

                              basePrice = pricePerPage * pageCount * academicMultiplier;
                          } else {
                              // Programming assignment pricing
                              const baseProgrammingPrice = 25; // Base price per unit
                              const pageCount = parseInt(this.pages) || 1;
                              const difficultyMultiplier = this.difficultyMultipliers[this.difficulty] || 1.0;
                              const typeMultiplier = this.programmingTypeMultipliers[this.assignmentTypeValue] || 1.0;

                              basePrice = baseProgrammingPrice * pageCount * difficultyMultiplier * typeMultiplier;
                          }

                          // Apply urgency multiplier
                          const urgencyMultiplier = this.getUrgencyMultiplier();
                          const finalPrice = basePrice * urgencyMultiplier;

                          return finalPrice;
                      },

                      // Get formatted price
                      get formattedPrice() {
                          const price = this.totalPrice;
                          if (price === 0) return '$0.00';
                          return '$' + price.toFixed(2);
                      },

                      // Get urgency label
                      get urgencyLabel() {
                          const multiplier = this.getUrgencyMultiplier();
                          if (multiplier >= 2.0) return 'Rush (6 hours)';
                          if (multiplier >= 1.8) return 'Very Urgent (12 hours)';
                          if (multiplier >= 1.5) return 'Urgent (24 hours)';
                          if (multiplier >= 1.3) return 'Short Notice (48 hours)';
                          if (multiplier >= 1.15) return 'Quick (3 days)';
                          if (multiplier >= 1.0) return 'Standard (1 week)';
                          return 'Extended (7+ days)';
                      }
                  }">
                @csrf

                <!-- Service Type Selection -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">I need help with *</label>
                    <div class="grid md:grid-cols-2 gap-4">
                        <label class="flex items-center p-4 border-2 rounded-lg cursor-pointer transition-all"
                               :class="assignmentType === 'programming' ? 'border-purple-500 bg-purple-50' : 'border-gray-300 hover:border-purple-300'">
                            <input type="radio" name="service_type" value="programming" x-model="assignmentType" class="mr-3 text-purple-500">
                            <div>
                                <div class="font-semibold text-gray-900">💻 Programming Assignment</div>
                                <div class="text-sm text-gray-600">Code projects, debugging, algorithms</div>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border-2 rounded-lg cursor-pointer transition-all"
                               :class="assignmentType === 'assignment' ? 'border-blue-500 bg-blue-50' : 'border-gray-300 hover:border-blue-300'">
                            <input type="radio" name="service_type" value="assignment" x-model="assignmentType" class="mr-3 text-blue-500">
                            <div>
                                <div class="font-semibold text-gray-900">📝 Academic Assignment</div>
                                <div class="text-sm text-gray-600">Essays, research papers, homework</div>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Assignment Service Selection (shown when assignment type is selected) -->
                <div x-show="assignmentType === 'assignment'" x-transition>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Assignment Service *</label>
                    <select name="service_id" x-model="serviceId" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200"
                            :required="assignmentType === 'assignment'">
                        <option value="">Select Service Type</option>
                        @php
                            $assignmentServices = \App\Models\Service::active()->ordered()->get();
                        @endphp
                        @foreach($assignmentServices as $assignService)
                            <option value="{{ $assignService->id }}" {{ request('assignment_service') == $assignService->id ? 'selected' : '' }}>
                                {{ $assignService->icon }} {{ $assignService->name }} ({{ $assignService->formatted_price }})
                            </option>
                        @endforeach
                    </select>
                    @error('service_id') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Academic Level (shown for assignment services) -->
                <div x-show="assignmentType === 'assignment'" x-transition>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Academic Level *</label>
                    <select name="academic_level" x-model="academicLevel" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200"
                            :required="assignmentType === 'assignment'">
                        <option value="">Select Academic Level</option>
                        <option value="high-school">🎓 High School</option>
                        <option value="college">🎓 College</option>
                        <option value="university">🎓 University</option>
                        <option value="masters">🎓 Master's</option>
                        <option value="phd">🎓 PhD</option>
                    </select>
                    @error('academic_level') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Programming Language Selection (shown when programming type is selected) -->
                <div x-show="assignmentType === 'programming'" x-transition>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Programming Language *</label>
                            <select name="subject" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200"
                                    :required="assignmentType === 'programming'">
                            <option value="">Select Programming Language</option>
                            <option value="Python" {{ old('subject') == 'Python' ? 'selected' : '' }}>🐍 Python</option>
                            <option value="Java" {{ old('subject') == 'Java' ? 'selected' : '' }}>☕ Java</option>
                            <option value="JavaScript" {{ old('subject') == 'JavaScript' ? 'selected' : '' }}>🟨 JavaScript</option>
                            <option value="C++" {{ old('subject') == 'C++' ? 'selected' : '' }}>⚡ C++</option>
                            <option value="C#" {{ old('subject') == 'C#' ? 'selected' : '' }}>🟦 C#</option>
                            <option value="PHP" {{ old('subject') == 'PHP' ? 'selected' : '' }}>🟣 PHP</option>
                            <option value="Go" {{ old('subject') == 'Go' ? 'selected' : '' }}>🐹 Go</option>
                            <option value="Rust" {{ old('subject') == 'Rust' ? 'selected' : '' }}>🦀 Rust</option>
                            <option value="Swift" {{ old('subject') == 'Swift' ? 'selected' : '' }}>🦉 Swift</option>
                            <option value="Kotlin" {{ old('subject') == 'Kotlin' ? 'selected' : '' }}>🟠 Kotlin</option>
                            <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>🔧 Other</option>
                        </select>
                        @error('subject') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Assignment Type *</label>
                            <select name="assignment_type" x-model="assignmentTypeValue" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200"
                                    :required="assignmentType === 'programming'">
                            <option value="">Select Assignment Type</option>
                            <option value="New Project" {{ old('assignment_type') == 'New Project' ? 'selected' : '' }}>💻 New Project/Program</option>
                            <option value="Code Debugging" {{ old('assignment_type') == 'Code Debugging' ? 'selected' : '' }}>🔧 Code Debugging & Fixes</option>
                            <option value="Code Review" {{ old('assignment_type') == 'Code Review' ? 'selected' : '' }}>📝 Code Review & Optimization</option>
                            <option value="Algorithm Help" {{ old('assignment_type') == 'Algorithm Help' ? 'selected' : '' }}>🧮 Algorithm & Data Structures</option>
                            <option value="Tutoring" {{ old('assignment_type') == 'Tutoring' ? 'selected' : '' }}>🎯 Programming Tutoring</option>
                            <option value="Homework" {{ old('assignment_type') == 'Homework' ? 'selected' : '' }}>📚 Homework Assignment</option>
                        </select>
                        @error('assignment_type') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>

                <!-- Citation Style (shown for assignment services) -->
                <div x-show="assignmentType === 'assignment'" x-transition>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Citation Style</label>
                            <select name="citation_style" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200">
                                <option value="">Select Citation Style (if applicable)</option>
                                <option value="APA">APA</option>
                                <option value="MLA">MLA</option>
                                <option value="Chicago">Chicago</option>
                                <option value="Harvard">Harvard</option>
                                <option value="Turabian">Turabian</option>
                                <option value="IEEE">IEEE</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('citation_style') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Word Count (Optional)</label>
                            <input type="number" name="word_count" x-model="wordCount" value="{{ old('word_count') }}" min="0"
                                   placeholder="e.g., 1500"
                                   class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200">
                            @error('word_count') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>

                <!-- Project Title and Difficulty -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Project Title / Problem Description *</label>
                        <input type="text" name="title" value="{{ old('title') }}" required
                               placeholder="e.g., Python Web Scraper, Java Login System, React Todo App"
                               class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200">
                        @error('title') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Difficulty Level</label>
                        <select name="difficulty" x-model="difficulty" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200">
                            <option value="Beginner" {{ old('difficulty') == 'Beginner' ? 'selected' : '' }}>🟢 Beginner</option>
                            <option value="Intermediate" {{ old('difficulty') == 'Intermediate' ? 'selected' : '' }}>🟡 Intermediate</option>
                            <option value="Advanced" {{ old('difficulty') == 'Advanced' ? 'selected' : '' }}>🔴 Advanced</option>
                        </select>
                        @error('difficulty') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- Deadline and Pages/Lines -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Deadline *</label>
                        <input type="datetime-local" name="deadline" x-model="deadline" value="{{ old('deadline') }}" required
                               class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200">
                        @error('deadline') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <span x-show="assignmentType === 'programming'">Estimated Lines of Code</span>
                            <span x-show="assignmentType === 'assignment'">Number of Pages</span>
                        </label>

                        <!-- Programming: Lines of Code -->
                        <select name="pages" x-model="pages" x-show="assignmentType === 'programming'"
                                class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200">
                            <option value="1">Under 50 lines</option>
                            <option value="2">50-200 lines</option>
                            <option value="3">200-500 lines</option>
                            <option value="5">500-1000 lines</option>
                            <option value="10">1000+ lines</option>
                        </select>

                        <!-- Assignment: Number of Pages -->
                        <select name="pages" x-model="pages" x-show="assignmentType === 'assignment'"
                                class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200">
                            <option value="1">1 page</option>
                            <option value="2">2 pages</option>
                            <option value="3">3 pages</option>
                            <option value="4">4 pages</option>
                            <option value="5">5 pages</option>
                            <option value="7">7 pages</option>
                            <option value="10">10 pages</option>
                            <option value="15">15 pages</option>
                            <option value="20">20+ pages</option>
                        </select>
                        @error('pages') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                    </div>
                </div>

                <!-- File Upload Section -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Upload Code Files (Optional)</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-purple-400 transition-colors duration-200">
                        <div class="text-4xl mb-4">📁</div>
                        <input type="file" name="file" accept=".py,.java,.js,.cpp,.cs,.php,.go,.rs,.swift,.kt,.zip,.rar,.txt,.md"
                               class="hidden" id="file-upload">
                        <label for="file-upload" class="cursor-pointer">
                            <span class="text-lg font-medium text-purple-600 hover:text-purple-700">Choose files to upload</span>
                            <p class="text-gray-500 mt-2">Supports: .py, .java, .js, .cpp, .cs, .php, .zip and more</p>
                        </label>
                    </div>
                    @error('file') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Detailed Requirements -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Detailed Requirements & Specifications</label>
                    <textarea name="description" rows="6"
                              x-bind:placeholder="assignmentType === 'programming' ?
                              'Describe your programming requirements in detail:\n• What should the program do?\n• Any specific functions or features needed?\n• Input/output requirements?\n• Any constraints or special requirements?\n• Technology stack preferences (frameworks, libraries)?\n• Current issues if debugging existing code?' :
                              'Describe your assignment requirements in detail:\n• Topic and main focus\n• Key points to cover\n• Research sources or materials\n• Specific requirements from your instructor\n• Any formatting preferences'"
                              class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200 text-sm">{{ old('description') }}</textarea>
                    @error('description') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Specific Requirements (for assignment services) -->
                <div x-show="assignmentType === 'assignment'" x-transition>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Additional Requirements (Optional)</label>
                    <textarea name="specific_requirements" rows="4"
                              placeholder="Any additional instructions or specific requirements from your instructor..."
                              class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200 text-sm">{{ old('specific_requirements') }}</textarea>
                    @error('specific_requirements') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Dynamic Price Display -->
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-lg border-2 border-green-300 shadow-lg" x-show="totalPrice > 0" x-transition>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Estimated Price</h3>
                            <p class="text-sm text-gray-600">
                                <span x-text="urgencyLabel"></span>
                                <span x-show="assignmentType === 'assignment' && academicLevel">
                                    • <span x-text="academicLevel.split('-').map(w => w.charAt(0).toUpperCase() + w.slice(1)).join(' ')"></span>
                                </span>
                                <span x-show="assignmentType === 'programming' && difficulty">
                                    • <span x-text="difficulty"></span> Level
                                </span>
                            </p>
                        </div>
                        <div class="text-right">
                            <div class="text-4xl font-bold text-green-600" x-text="formattedPrice"></div>
                            <p class="text-xs text-gray-500 mt-1">Final price may vary</p>
                        </div>
                    </div>

                    <!-- Price Breakdown -->
                    <div class="mt-4 pt-4 border-t border-green-200">
                        <div class="text-xs text-gray-600 space-y-1">
                            <div class="flex justify-between" x-show="assignmentType === 'assignment' && serviceId">
                                <span>Base price per page:</span>
                                <span x-text="'$' + (servicePrices[serviceId] || 0).toFixed(2)"></span>
                            </div>
                            <div class="flex justify-between" x-show="assignmentType === 'programming'">
                                <span>Base programming rate:</span>
                                <span>$25.00 per unit</span>
                            </div>
                            <div class="flex justify-between">
                                <span x-text="assignmentType === 'assignment' ? 'Pages:' : 'Complexity units:'"></span>
                                <span x-text="pages"></span>
                            </div>
                            <div class="flex justify-between" x-show="assignmentType === 'assignment' && academicLevel">
                                <span>Academic level multiplier:</span>
                                <span x-text="'×' + (academicMultipliers[academicLevel] || 1.0).toFixed(1)"></span>
                            </div>
                            <div class="flex justify-between" x-show="assignmentType === 'programming' && difficulty">
                                <span>Difficulty multiplier:</span>
                                <span x-text="'×' + (difficultyMultipliers[difficulty] || 1.0).toFixed(1)"></span>
                            </div>
                            <div class="flex justify-between" x-show="deadline">
                                <span>Urgency multiplier:</span>
                                <span x-text="'×' + getUrgencyMultiplier().toFixed(2)"></span>
                            </div>
                        </div>
                    </div>

                    <!-- Trust Badge -->
                    <div class="mt-4 flex items-center justify-center text-xs text-gray-600">
                        <svg class="w-4 h-4 text-green-600 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Price calculated based on your requirements</span>
                    </div>
                </div>

                <!-- Budget Section -->
                <div class="bg-gradient-to-r from-orange-50 to-red-50 p-6 rounded-lg border border-orange-200">
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Budget Range (Optional)</label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors duration-200">
                            <input type="radio" name="budget" value="50" class="mr-3 text-orange-500" {{ old('budget') == '50' ? 'checked' : '' }}>
                            <span class="text-sm font-medium">Under $50</span>
                        </label>
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors duration-200">
                            <input type="radio" name="budget" value="100" class="mr-3 text-orange-500" {{ old('budget') == '100' ? 'checked' : '' }}>
                            <span class="text-sm font-medium">$50 - $100</span>
                        </label>
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors duration-200">
                            <input type="radio" name="budget" value="200" class="mr-3 text-orange-500" {{ old('budget') == '200' ? 'checked' : '' }}>
                            <span class="text-sm font-medium">$100 - $200</span>
                        </label>
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors duration-200">
                            <input type="radio" name="budget" value="200+" class="mr-3 text-orange-500" {{ old('budget') == '200+' ? 'checked' : '' }}>
                            <span class="text-sm font-medium">$200+</span>
                        </label>
                    </div>
                    @error('budget') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center pt-6">
                    <button type="submit" class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-12 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span x-text="assignmentType === 'programming' ? '🚀 Get Programming Help Now' : '📝 Submit Assignment Request'"></span>
                    </button>
                </div>

                <!-- Help Text -->
                <div class="text-center text-gray-500 text-sm">
                    <p x-show="assignmentType === 'programming'">Average response time: <strong class="text-purple-600">15 minutes</strong> • Expert programmers available 24/7</p>
                    <p x-show="assignmentType === 'assignment'">Average response time: <strong class="text-blue-600">30 minutes</strong> • Expert academic writers available 24/7</p>
                </div>
            </form>
        </div>

        <!-- Trust Indicators -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-green-600">98%</div>
                <div class="text-sm text-gray-600">Success Rate</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-blue-600">24/7</div>
                <div class="text-sm text-gray-600">Support</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-purple-600">500+</div>
                <div class="text-sm text-gray-600">Experts</div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow">
                <div class="text-2xl font-bold text-orange-600">15min</div>
                <div class="text-sm text-gray-600">Avg Response</div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('file-upload').addEventListener('change', function(e) {
    const fileName = e.target.files[0]?.name;
    if (fileName) {
        const label = document.querySelector('label[for="file-upload"] span');
        label.textContent = `Selected: ${fileName}`;
        label.classList.add('text-green-600');
    }
});
</script>

@endsection
