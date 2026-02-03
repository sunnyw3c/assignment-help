<?php
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;
use App\Models\Assignment;

new class extends Component {
    use WithFileUploads;

    public $title = '';
    public $description = '';
    public $files = [];
    public $testModelId = null;

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'nullable|file|max:10240',
        ]);
    }

    public function removeFile($index)
    {
        array_splice($this->files, $index, 1);
    }

    public function submit()
    {
        $this->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string',
            'files.*' => 'nullable|file|max:10240',
        ]);

        // Create a test assignment
        $assignment = Assignment::create([
            'user_id' => 1, // Default to 1 for testing
            'title' => $this->title,
            'description' => $this->description,
            'pages' => 1,
            'budget' => 0,
            'deadline' => now()->addDays(7),
        ]);

        // Save files using the new polymorphic system
        if (!empty($this->files)) {
            foreach ($this->files as $file) {
                File::create([
                    'fileable_id' => $assignment->id,
                    'fileable_type' => Assignment::class,
                    'original_name' => $file->getClientOriginalName(),
                    'file_path' => $file->store('test-uploads', 'public'),
                    'file_type' => $file->getMimeType(),
                    'file_size' => $file->getSize(),
                ]);
            }
        }

        $this->testModelId = $assignment->id;
        $fileCount = $assignment->files->count();

        session()->flash('success', "✅ Success! Assignment #{$assignment->id} created with {$fileCount} files using polymorphic system!");

        // Reset form
        $this->title = '';
        $this->description = '';
        $this->files = [];
    }
}; ?>

<div>
    {{-- Success Message --}}
    @if (session()->has('success'))
        <div class="mb-6 bg-green-100 border-2 border-green-400 text-green-800 px-6 py-4 rounded-2xl glass-card animate-fade-in">
            <div class="flex items-center gap-3">
                <span class="text-3xl">✅</span>
                <div>
                    <p class="font-bold text-lg">{{ session('success') }}</p>
                </div>
            </div>
        </div>
    @endif

    {{-- Test Form --}}
    <form wire:submit="submit" class="space-y-6">
        {{-- Card Container --}}
        <div class="glass-card p-6 sm:p-8 rounded-2xl card-3d-hover">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <span>🧪</span> Test Polymorphic File Upload
            </h2>

            {{-- Title --}}
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Title <span class="text-red-500">*</span>
                </label>
                <input
                    type="text"
                    wire:model="title"
                    placeholder="Enter test title..."
                    class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-200"
                >
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Description --}}
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Description <span class="text-red-500">*</span>
                </label>
                <textarea
                    wire:model="description"
                    rows="4"
                    placeholder="Enter test description..."
                    class="w-full px-4 py-3 rounded-lg border-2 border-gray-300 focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-200"
                ></textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- File Upload Section --}}
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Multiple File Upload Test
                </label>

                {{-- Upload Area --}}
                <div x-data="{ dragging: false }" class="relative">
                    <div
                        @dragover.prevent="dragging = true"
                        @dragleave.prevent="dragging = false"
                        @drop.prevent="dragging = false"
                        :class="{ 'border-purple-500 bg-purple-50': dragging }"
                        class="glass-card p-8 rounded-2xl border-2 border-dashed border-purple-300 hover:border-purple-500 transition-all duration-300 text-center"
                    >
                        <input
                            type="file"
                            wire:model="files"
                            multiple
                            id="test-file-upload"
                            accept=".pdf,.doc,.docx,.zip,.rar,.txt,.jpg,.jpeg,.png,.gif"
                            class="hidden"
                        >

                        <label for="test-file-upload" class="cursor-pointer block">
                            <div class="text-5xl mb-4 animate-bounce-slow">📁</div>
                            <p class="text-lg font-semibold text-purple-600 hover:text-purple-700 transition-colors mb-2">
                                Click to browse or drag files here
                            </p>
                            <p class="text-sm text-gray-500">
                                PDF, DOC, DOCX, ZIP, RAR, TXT, JPG, PNG, GIF (Max 10MB per file)
                            </p>
                        </label>
                    </div>

                    {{-- Loading State --}}
                    <div wire:loading wire:target="files" class="mt-4 text-center">
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-100 rounded-lg">
                            <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-purple-600"></div>
                            <span class="text-purple-700 font-medium">Uploading files...</span>
                        </div>
                    </div>

                    {{-- Validation Errors --}}
                    @error('files.*')
                        <div class="mt-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                            <p class="font-medium">❌ {{ $message }}</p>
                        </div>
                    @enderror
                </div>

                {{-- File List --}}
                @if (!empty($files))
                    <div class="mt-4 space-y-3">
                        <p class="text-sm font-semibold text-gray-700 flex items-center gap-2">
                            <span>📋</span> Files Ready to Upload ({{ count($files) }})
                        </p>

                        @foreach ($files as $index => $file)
                            <div class="glass-card p-4 rounded-lg flex items-center justify-between gap-3 hover:shadow-lg transition-all duration-300 animate-fade-in">
                                <div class="flex items-center gap-3 flex-1 min-w-0">
                                    <span class="text-3xl flex-shrink-0">
                                        @php
                                            $ext = strtolower(pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION));
                                            $icon = match($ext) {
                                                'pdf' => '📄',
                                                'doc', 'docx' => '📝',
                                                'zip', 'rar' => '📦',
                                                'jpg', 'jpeg', 'png', 'gif' => '🖼️',
                                                'txt' => '📃',
                                                default => '📎'
                                            };
                                        @endphp
                                        {{ $icon }}
                                    </span>
                                    <div class="flex-1 min-w-0">
                                        <p class="font-medium text-gray-800 truncate">
                                            {{ $file->getClientOriginalName() }}
                                        </p>
                                        <p class="text-sm text-gray-500">
                                            {{ number_format($file->getSize() / 1024, 1) }} KB
                                        </p>
                                    </div>
                                </div>
                                <button
                                    type="button"
                                    wire:click="removeFile({{ $index }})"
                                    class="flex-shrink-0 text-red-500 hover:text-red-700 hover:bg-red-100 p-2 rounded-lg transition-all duration-200"
                                >
                                    <span class="text-xl">❌</span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="mt-4 text-center py-8 text-gray-400">
                        <p class="text-lg">No files selected yet</p>
                        <p class="text-sm">Upload multiple files to test the feature</p>
                    </div>
                @endif
            </div>

            {{-- Submit Button --}}
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl"
            >
                <span class="flex items-center justify-center gap-2">
                    <span>🚀</span>
                    <span>Test Submit (Polymorphic Files)</span>
                </span>
            </button>
        </div>
    </form>

    {{-- Info Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
        <div class="glass-card p-4 rounded-xl text-center">
            <div class="text-3xl mb-2">📦</div>
            <p class="font-semibold text-gray-800">Polymorphic</p>
            <p class="text-sm text-gray-600">Works with ANY model</p>
        </div>
        <div class="glass-card p-4 rounded-xl text-center">
            <div class="text-3xl mb-2">🔄</div>
            <p class="font-semibold text-gray-800">Reusable</p>
            <p class="text-sm text-gray-600">Same system everywhere</p>
        </div>
        <div class="glass-card p-4 rounded-xl text-center">
            <div class="text-3xl mb-2">✨</div>
            <p class="font-semibold text-gray-800">Universal</p>
            <p class="text-sm text-gray-600">Chat, Q&A, Comments</p>
        </div>
    </div>

    {{-- Recent Uploads --}}
    @php
        $recentFiles = \App\Models\File::where('fileable_type', 'App\Models\Assignment')
            ->latest()
            ->take(5)
            ->get();
    @endphp

    @if($recentFiles->count() > 0)
        <div class="glass-card p-6 rounded-2xl mt-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                <span>📊</span> Recent Uploads (Polymorphic Files Table)
            </h3>

            <div class="space-y-3">
                @foreach($recentFiles as $recentFile)
                    <div class="flex items-center gap-3 p-3 bg-white/50 rounded-lg">
                        <span class="text-2xl">{{ $recentFile->file_icon }}</span>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium text-gray-800 truncate text-sm">
                                {{ $recentFile->original_name }}
                            </p>
                            <p class="text-xs text-gray-500">
                                {{ $recentFile->file_size_formatted }} • {{ $recentFile->created_at->diffForHumans() }}
                            </p>
                        </div>
                        <span class="text-xs px-2 py-1 bg-purple-100 text-purple-700 rounded">
                            Assignment ID: {{ $recentFile->fileable_id }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
