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

            <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8" x-data="{ assignmentType: '{{ request('assignment_service') ? 'assignment' : 'programming' }}' }">
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
                    <select name="assignment_service_id" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200"
                            :required="assignmentType === 'assignment'">
                        <option value="">Select Service Type</option>
                        @php
                            $assignmentServices = \App\Models\AssignmentService::active()->ordered()->get();
                        @endphp
                        @foreach($assignmentServices as $assignService)
                            <option value="{{ $assignService->id }}" {{ request('assignment_service') == $assignService->id ? 'selected' : '' }}>
                                {{ $assignService->icon }} {{ $assignService->name }} ({{ $assignService->formatted_price }})
                            </option>
                        @endforeach
                    </select>
                    @error('assignment_service_id') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                </div>

                <!-- Academic Level (shown for assignment services) -->
                <div x-show="assignmentType === 'assignment'" x-transition>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Academic Level *</label>
                    <select name="academic_level" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors duration-200"
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
                            <select name="assignment_type" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200"
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
                            <input type="number" name="word_count" value="{{ old('word_count') }}" min="0"
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
                        <select name="difficulty" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200">
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
                        <input type="datetime-local" name="deadline" value="{{ old('deadline') }}" required
                               class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200">
                        @error('deadline') <p class="text-red-500 text-sm mt-2">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Estimated Lines of Code</label>
                        <select name="pages" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors duration-200">
                            <option value="1" {{ old('pages') == '1' ? 'selected' : '' }}>Under 50 lines</option>
                            <option value="2" {{ old('pages') == '2' ? 'selected' : '' }}>50-200 lines</option>
                            <option value="3" {{ old('pages') == '3' ? 'selected' : '' }}>200-500 lines</option>
                            <option value="5" {{ old('pages') == '5' ? 'selected' : '' }}>500-1000 lines</option>
                            <option value="10" {{ old('pages') == '10' ? 'selected' : '' }}>1000+ lines</option>
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
