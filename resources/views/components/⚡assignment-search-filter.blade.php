<?php

use Livewire\Component;
use Livewire\Attributes\Url;

new class extends Component
{
    #[Url(as: 'q')]
    public $search = '';

    #[Url(as: 'subject')]
    public $selectedSubject = 'all';

    #[Url(as: 'sort')]
    public $sortBy = 'popular';

    public $subjects = [
        'all' => 'All Subjects',
        'math' => 'Mathematics',
        'science' => 'Science',
        'english' => 'English',
        'business' => 'Business',
        'programming' => 'Computer Science',
        'history' => 'History',
        'psychology' => 'Psychology',
        'economics' => 'Economics',
        'engineering' => 'Engineering',
        'nursing' => 'Nursing',
        'law' => 'Law',
        'sociology' => 'Sociology',
        'accounting' => 'Accounting',
    ];

    public function clearFilters()
    {
        $this->search = '';
        $this->selectedSubject = 'all';
        $this->sortBy = 'popular';
    }

    public function getFilteredSubjectsProperty()
    {
        $subjects = $this->subjects;

        // Remove 'all' from filtering
        unset($subjects['all']);

        // Filter by search term
        if (!empty($this->search)) {
            $subjects = array_filter($subjects, function($subject) {
                return stripos($subject, $this->search) !== false;
            });
        }

        // Filter by selected subject
        if ($this->selectedSubject !== 'all') {
            $subjects = array_filter($subjects, function($key) {
                return $key === $this->selectedSubject;
            }, ARRAY_FILTER_USE_KEY);
        }

        return $subjects;
    }

    public function getResultCountProperty()
    {
        return count($this->filteredSubjects);
    }
};
?>

<div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <h3 class="text-2xl font-bold text-gray-900">Find Your Subject</h3>
        @if($search || $selectedSubject !== 'all' || $sortBy !== 'popular')
            <button
                wire:click="clearFilters"
                class="text-sm text-blue-600 hover:text-blue-700 font-semibold flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
                Clear Filters
            </button>
        @endif
    </div>

    <!-- Search Bar -->
    <div class="mb-6">
        <div class="relative">
            <input
                type="text"
                wire:model.live.debounce.300ms="search"
                placeholder="Search subjects (e.g., Mathematics, Programming, Law...)"
                class="w-full px-5 py-4 pl-12 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all"
            />
            <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>

            <!-- Loading indicator -->
            <div wire:loading wire:target="search" class="absolute right-4 top-1/2 -translate-y-1/2">
                <svg class="animate-spin h-5 w-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Filters Row -->
    <div class="grid md:grid-cols-2 gap-4 mb-6">
        <!-- Subject Filter -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Filter by Subject</label>
            <select
                wire:model.live="selectedSubject"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                @foreach($subjects as $key => $label)
                    <option value="{{ $key }}">{{ $label }}</option>
                @endforeach
            </select>
        </div>

        <!-- Sort By -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">Sort By</label>
            <select
                wire:model.live="sortBy"
                class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                <option value="popular">Most Popular</option>
                <option value="alphabetical">A-Z</option>
                <option value="recent">Recently Added</option>
            </select>
        </div>
    </div>

    <!-- Results Count -->
    <div class="flex items-center justify-between py-4 border-t-2 border-gray-100">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
            <span class="text-sm font-semibold text-gray-700">
                Showing <span class="text-blue-600">{{ $this->resultCount }}</span>
                {{ $this->resultCount === 1 ? 'subject' : 'subjects' }}
            </span>
        </div>

        @if($search)
            <span class="text-sm text-gray-500">
                Search: "<span class="font-semibold text-gray-700">{{ $search }}</span>"
            </span>
        @endif
    </div>

    <!-- Filtered Results -->
    <div class="mt-6">
        @if(count($this->filteredSubjects) > 0)
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
                @foreach($this->filteredSubjects as $key => $subject)
                    <a
                        href="{{ route('services.assignment.index') }}?subject={{ $key }}"
                        class="group px-4 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 hover:from-blue-100 hover:to-indigo-100 border-2 border-blue-200/50 hover:border-blue-400 rounded-lg text-center transition-all duration-300 hover:scale-105 hover:shadow-md"
                        wire:key="subject-{{ $key }}"
                    >
                        <span class="text-sm font-bold text-blue-700 group-hover:text-blue-900">
                            {{ $subject }}
                        </span>
                    </a>
                @endforeach
            </div>
        @else
            <!-- No Results -->
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h4 class="text-xl font-bold text-gray-700 mb-2">No subjects found</h4>
                <p class="text-gray-500 mb-4">Try adjusting your search or filters</p>
                <button
                    wire:click="clearFilters"
                    class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-semibold transition-colors">
                    Clear Filters
                </button>
            </div>
        @endif
    </div>

    <!-- Quick Stats -->
    <div class="mt-6 pt-6 border-t-2 border-gray-100">
        <div class="grid grid-cols-3 gap-4 text-center">
            <div>
                <div class="text-2xl font-bold text-blue-600">{{ count($subjects) - 1 }}</div>
                <div class="text-xs text-gray-500 font-medium">Total Subjects</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-green-600">24/7</div>
                <div class="text-xs text-gray-500 font-medium">Support</div>
            </div>
            <div>
                <div class="text-2xl font-bold text-purple-600">1000+</div>
                <div class="text-xs text-gray-500 font-medium">Experts</div>
            </div>
        </div>
    </div>
</div>