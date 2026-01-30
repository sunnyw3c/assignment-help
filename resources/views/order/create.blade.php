@extends('layouts.app')

@section('title', 'Place Order - Get Academic Help')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-purple-50 to-indigo-100 py-12" x-data="orderFormData()">
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

            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data" class="p-8 space-y-8">
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

                <!-- Assignment Service Selection -->
                <div x-show="assignmentType === 'assignment'" x-transition>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Assignment Service *</label>
                    <select name="service_id" x-model="serviceId" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors">
                        <option value="">Select Service Type</option>
                        @foreach(\App\Models\Service::active()->ordered()->get() as $service)
                            <option value="{{ $service->id }}">{{ $service->icon }} {{ $service->name }} ({{ $service->formatted_price }})</option>
                        @endforeach
                    </select>
                </div>

                <!-- Academic Level -->
                <div x-show="assignmentType === 'assignment'" x-transition>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Academic Level *</label>
                    <select name="academic_level" x-model="academicLevel" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-blue-500 focus:outline-none transition-colors">
                        <option value="">Select Academic Level</option>
                        <option value="high-school">🎓 High School</option>
                        <option value="college">🎓 College</option>
                        <option value="university">🎓 University</option>
                        <option value="masters">🎓 Master's</option>
                        <option value="phd">🎓 PhD</option>
                    </select>
                </div>

                <!-- Programming Language & Type -->
                <div x-show="assignmentType === 'programming'" x-transition>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Programming Language *</label>
                            <select name="subject" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                                <option value="">Select Language</option>
                                <option value="Python">🐍 Python</option>
                                <option value="Java">☕ Java</option>
                                <option value="JavaScript">🟨 JavaScript</option>
                                <option value="C++">⚡ C++</option>
                                <option value="Other">🔧 Other</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Assignment Type *</label>
                            <select name="assignment_type" x-model="assignmentTypeValue" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                                <option value="">Select Type</option>
                                <option value="New Project">💻 New Project</option>
                                <option value="Code Debugging">🔧 Debugging</option>
                                <option value="Code Review">📝 Code Review</option>
                                <option value="Algorithm Help">🧮 Algorithm Help</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Title & Difficulty -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="md:col-span-2">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Project Title *</label>
                        <input type="text" name="title" required placeholder="Enter project title"
                               class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Difficulty</label>
                        <select name="difficulty" x-model="difficulty" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
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
                        <input type="datetime-local" name="deadline" x-model="deadline" required
                               class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3" x-text="assignmentType === 'programming' ? 'Lines of Code' : 'Number of Pages'"></label>
                        <select name="pages" x-model.number="pages" class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors">
                            <template x-if="assignmentType === 'programming'">
                                <optgroup label="Lines">
                                    <option value="1">Under 50 lines</option>
                                    <option value="2">50-200 lines</option>
                                    <option value="3">200-500 lines</option>
                                    <option value="5">500-1000 lines</option>
                                    <option value="10">1000+ lines</option>
                                </optgroup>
                            </template>
                            <template x-if="assignmentType === 'assignment'">
                                <optgroup label="Pages">
                                    <option value="1">1 page</option>
                                    <option value="2">2 pages</option>
                                    <option value="3">3 pages</option>
                                    <option value="5">5 pages</option>
                                    <option value="10">10 pages</option>
                                    <option value="15">15+ pages</option>
                                </optgroup>
                            </template>
                        </select>
                    </div>
                </div>

                <!-- File Upload -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Upload Files (Optional)</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-purple-400 transition-colors">
                        <input type="file" name="file" class="hidden" id="file-upload">
                        <label for="file-upload" class="cursor-pointer">
                            <div class="text-4xl mb-4">📁</div>
                            <span class="text-lg font-medium text-purple-600 hover:text-purple-700">Choose files</span>
                            <p class="text-gray-500 mt-2">PDF, DOC, ZIP, etc.</p>
                        </label>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Requirements</label>
                    <textarea name="description" rows="6" placeholder="Describe your requirements in detail..."
                              class="w-full border-2 border-gray-300 rounded-lg p-4 focus:border-purple-500 focus:outline-none transition-colors"></textarea>
                </div>

                <!-- Dynamic Price Display -->
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-lg border-2 border-green-300 shadow-lg" x-show="totalPrice > 0" x-transition>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-1">Estimated Price</h3>
                            <p class="text-sm text-gray-600" x-text="urgencyLabel"></p>
                        </div>
                        <div class="text-right">
                            <div class="text-4xl font-bold text-green-600" x-text="'$' + totalPrice.toFixed(2)"></div>
                            <p class="text-xs text-gray-500 mt-1">Final price may vary</p>
                        </div>
                    </div>
                </div>

                <!-- Budget -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-3">Budget Range (Optional)</label>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors">
                            <input type="radio" name="budget" value="50" class="mr-3 text-orange-500">
                            <span class="text-sm font-medium">Under $50</span>
                        </label>
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors">
                            <input type="radio" name="budget" value="100" class="mr-3 text-orange-500">
                            <span class="text-sm font-medium">$50 - $100</span>
                        </label>
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors">
                            <input type="radio" name="budget" value="200" class="mr-3 text-orange-500">
                            <span class="text-sm font-medium">$100 - $200</span>
                        </label>
                        <label class="flex items-center p-3 border-2 border-gray-200 rounded-lg cursor-pointer hover:border-orange-400 transition-colors">
                            <input type="radio" name="budget" value="200+" class="mr-3 text-orange-500">
                            <span class="text-sm font-medium">$200+</span>
                        </label>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-center pt-6">
                    <button type="submit" class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-12 py-4 rounded-lg text-lg font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <span x-text="assignmentType === 'programming' ? '🚀 Get Programming Help' : '📝 Submit Assignment'"></span>
                    </button>
                </div>

                <!-- Help Text -->
                <div class="text-center text-gray-500 text-sm">
                    <p>Average response time: <strong class="text-purple-600">15 minutes</strong> • Available 24/7</p>
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
function orderFormData() {
    return {
        assignmentType: 'programming',
        serviceId: '',
        academicLevel: '',
        pages: 1,
        deadline: '',
        difficulty: 'Beginner',
        assignmentTypeValue: '',

        servicePrices: @json(\App\Models\Service::active()->pluck('base_price_per_page', 'id')),

        get totalPrice() {
            let basePrice = 0;

            if (this.assignmentType === 'assignment') {
                if (!this.serviceId || !this.servicePrices[this.serviceId]) return 0;
                const pricePerPage = parseFloat(this.servicePrices[this.serviceId]);
                const academicMultiplier = {'high-school': 1.0, 'college': 1.2, 'university': 1.4, 'masters': 1.8, 'phd': 2.2}[this.academicLevel] || 1.0;
                basePrice = pricePerPage * this.pages * academicMultiplier;
            } else {
                const difficultyMultiplier = {'Beginner': 1.0, 'Intermediate': 1.4, 'Advanced': 1.8}[this.difficulty] || 1.0;
                const typeMultiplier = {'New Project': 1.0, 'Code Debugging': 0.8, 'Code Review': 0.7, 'Algorithm Help': 1.3}[this.assignmentTypeValue] || 1.0;
                basePrice = 25 * this.pages * difficultyMultiplier * typeMultiplier;
            }

            const urgencyMultiplier = this.getUrgencyMultiplier();
            return basePrice * urgencyMultiplier;
        },

        getUrgencyMultiplier() {
            if (!this.deadline) return 1.0;
            const hours = (new Date(this.deadline) - new Date()) / (1000 * 60 * 60);
            if (hours <= 6) return 2.0;
            if (hours <= 12) return 1.8;
            if (hours <= 24) return 1.5;
            if (hours <= 48) return 1.3;
            if (hours <= 72) return 1.15;
            if (hours <= 168) return 1.0;
            return 0.9;
        },

        get urgencyLabel() {
            const m = this.getUrgencyMultiplier();
            if (m >= 2.0) return 'Rush (6 hours)';
            if (m >= 1.8) return 'Very Urgent (12 hours)';
            if (m >= 1.5) return 'Urgent (24 hours)';
            if (m >= 1.3) return 'Short Notice (48 hours)';
            if (m >= 1.15) return 'Quick (3 days)';
            if (m >= 1.0) return 'Standard (1 week)';
            return 'Extended (7+ days)';
        }
    };
}
</script>
@endsection
