@props([
    'modelType' => null,
    'modelId' => null,
    'maxFiles' => 10,
    'maxSize' => 10240, // 10MB in KB
    'acceptedTypes' => 'pdf,doc,docx,zip,rar,txt,jpg,jpeg,png,gif',
    'storageFolder' => 'files',
    'label' => 'Upload Files',
    'showLabel' => true,
])

<?php
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\File;

new class extends Component {
    use WithFileUploads;

    public $files = [];
    public $uploadedFiles = [];
    public $modelType;
    public $modelId;
    public $storageFolder;

    public function mount($modelType = null, $modelId = null, $storageFolder = 'files')
    {
        $this->modelType = $modelType;
        $this->modelId = $modelId;
        $this->storageFolder = $storageFolder;

        // Load existing files if model is provided
        if ($this->modelType && $this->modelId) {
            $this->loadExistingFiles();
        }
    }

    public function loadExistingFiles()
    {
        $this->uploadedFiles = File::where('fileable_type', $this->modelType)
            ->where('fileable_id', $this->modelId)
            ->latest()
            ->get()
            ->toArray();
    }

    public function updatedFiles()
    {
        $maxSize = {{ $maxSize }};
        $this->validate([
            'files.*' => "nullable|file|max:{$maxSize}",
        ]);
    }

    public function removeFile($index)
    {
        array_splice($this->files, $index, 1);
    }

    public function deleteUploadedFile($fileId)
    {
        $file = File::find($fileId);

        if ($file) {
            // Delete from storage
            if (\Storage::disk('public')->exists($file->file_path)) {
                \Storage::disk('public')->delete($file->file_path);
            }

            // Delete from database
            $file->delete();

            // Reload files
            $this->loadExistingFiles();

            session()->flash('message', 'File deleted successfully.');
        }
    }

    public function saveFiles($parentModel)
    {
        if (!$this->files) {
            return;
        }

        foreach ($this->files as $file) {
            $filePath = $file->store($this->storageFolder, 'public');

            File::create([
                'fileable_id' => $parentModel->id,
                'fileable_type' => get_class($parentModel),
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $filePath,
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ]);
        }

        // Clear temporary files
        $this->files = [];
    }

    public function getFileIcon($mimeType)
    {
        if (!$mimeType) return '📄';

        return match (true) {
            str_contains($mimeType, 'pdf') => '📄',
            str_contains($mimeType, 'word') || str_contains($mimeType, 'document') => '📝',
            str_contains($mimeType, 'sheet') || str_contains($mimeType, 'excel') => '📊',
            str_contains($mimeType, 'image') => '🖼️',
            str_contains($mimeType, 'zip') || str_contains($mimeType, 'rar') => '📦',
            default => '📄',
        };
    }
}; ?>

<div wire:ignore.self x-data="{ dragging: false }" class="w-full">
    @if($showLabel)
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ $label }}
        </label>
    @endif

    {{-- Upload Area --}}
    <div class="space-y-4">
        <label
            for="file-upload-{{ $modelType }}-{{ $modelId ?? 'new' }}"
            @dragover.prevent="dragging = true"
            @dragleave.prevent="dragging = false"
            @drop.prevent="dragging = false; $refs.fileInput.files = $event.dataTransfer.files; $refs.fileInput.dispatchEvent(new Event('change'))"
            :class="{ 'border-purple-500 bg-purple-50': dragging }"
            class="relative cursor-pointer glass-card p-6 sm:p-8 rounded-2xl border-2 border-dashed border-purple-300 hover:border-purple-500 transition-all duration-300 group"
        >
            <input
                type="file"
                wire:model="files"
                multiple
                id="file-upload-{{ $modelType }}-{{ $modelId ?? 'new' }}"
                accept=".{{ str_replace(',', ',.', $acceptedTypes) }}"
                class="hidden"
                x-ref="fileInput"
            >

            <div class="text-center">
                <div class="text-4xl mb-3 animate-bounce-slow group-hover:scale-110 transition-transform duration-300">
                    📁
                </div>
                <p class="text-base sm:text-lg font-semibold text-gray-700 mb-1">
                    Click to browse or drag files here
                </p>
                <p class="text-xs sm:text-sm text-gray-500">
                    Accepted: {{ strtoupper(str_replace(',', ', ', $acceptedTypes)) }} (Max {{ number_format($maxSize / 1024, 0) }}MB per file)
                </p>
            </div>
        </label>

        {{-- Loading State --}}
        <div wire:loading wire:target="files" class="text-center py-4">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-100 rounded-lg">
                <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-purple-600"></div>
                <span class="text-purple-700 font-medium">Uploading files...</span>
            </div>
        </div>

        {{-- Validation Errors --}}
        @error('files.*')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg">
                <p class="font-medium">{{ $message }}</p>
            </div>
        @enderror

        {{-- New Files to Upload (Temporary) --}}
        @if(count($files) > 0)
            <div class="space-y-3">
                <h3 class="text-sm font-semibold text-gray-700">
                    📋 Files to Upload ({{ count($files) }})
                </h3>

                @foreach ($files as $index => $file)
                    <div class="glass-card p-3 sm:p-4 rounded-lg flex items-center justify-between gap-3 hover:shadow-lg transition-all duration-300 card-3d-hover">
                        <div class="flex items-center gap-3 flex-1 min-w-0">
                            <span class="text-2xl flex-shrink-0">
                                @php
                                    $icon = '📄';
                                    try {
                                        $mimeType = $file->getMimeType();
                                        $icon = $this->getFileIcon($mimeType);
                                    } catch (\Exception $e) {
                                        // Keep default icon
                                    }
                                @endphp
                                {{ $icon }}
                            </span>
                            <div class="flex-1 min-w-0">
                                <p class="font-medium text-gray-800 truncate text-sm sm:text-base">
                                    {{ $file->getClientOriginalName() }}
                                </p>
                                <p class="text-xs sm:text-sm text-gray-500">
                                    {{ number_format($file->getSize() / 1024, 1) }} KB
                                </p>
                            </div>
                        </div>
                        <button
                            type="button"
                            wire:click="removeFile({{ $index }})"
                            class="flex-shrink-0 text-red-500 hover:text-red-700 hover:bg-red-100 p-2 rounded-lg transition-all duration-200 touch-manipulation"
                        >
                            <span class="text-xl">❌</span>
                        </button>
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Already Uploaded Files (Saved in Database) --}}
        @if(count($uploadedFiles) > 0)
            <div class="space-y-3 mt-6">
                <h3 class="text-sm font-semibold text-gray-700">
                    📎 Uploaded Files ({{ count($uploadedFiles) }})
                </h3>

                @foreach ($uploadedFiles as $uploadedFile)
                    <div class="glass-card p-3 sm:p-4 rounded-lg flex items-center justify-between gap-3 hover:shadow-lg transition-all duration-300 card-3d-hover">
                        <div class="flex items-center gap-3 flex-1 min-w-0">
                            <span class="text-2xl flex-shrink-0">
                                @php
                                    $icon = $this->getFileIcon($uploadedFile['file_type'] ?? null);
                                @endphp
                                {{ $icon }}
                            </span>
                            <div class="flex-1 min-w-0">
                                <p class="font-medium text-gray-800 truncate text-sm sm:text-base">
                                    {{ $uploadedFile['original_name'] }}
                                </p>
                                <p class="text-xs sm:text-sm text-gray-500">
                                    @php
                                        $size = $uploadedFile['file_size'] ?? 0;
                                        if ($size >= 1048576) {
                                            echo number_format($size / 1048576, 2) . ' MB';
                                        } elseif ($size >= 1024) {
                                            echo number_format($size / 1024, 2) . ' KB';
                                        } else {
                                            echo $size . ' bytes';
                                        }
                                    @endphp
                                </p>
                            </div>
                        </div>
                        <div class="flex gap-2 flex-shrink-0">
                            <a
                                href="{{ asset('storage/' . $uploadedFile['file_path']) }}"
                                download
                                class="text-blue-500 hover:text-blue-700 hover:bg-blue-100 p-2 rounded-lg transition-all duration-200 touch-manipulation"
                            >
                                <span class="text-xl">⬇️</span>
                            </a>
                            <button
                                type="button"
                                wire:click="deleteUploadedFile({{ $uploadedFile['id'] }})"
                                wire:confirm="Are you sure you want to delete this file?"
                                class="text-red-500 hover:text-red-700 hover:bg-red-100 p-2 rounded-lg transition-all duration-200 touch-manipulation"
                            >
                                <span class="text-xl">🗑️</span>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    {{-- Success Message --}}
    @if (session()->has('message'))
        <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg">
            {{ session('message') }}
        </div>
    @endif
</div>
