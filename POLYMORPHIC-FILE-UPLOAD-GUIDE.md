# 📦 Polymorphic File Upload System - Complete Guide

A reusable file upload system that works with **ANY model** in your application (Assignments, Chats, Questions, Answers, Comments, etc.)

## ✅ What Was Created

### 1. **Polymorphic `files` Table**
```sql
CREATE TABLE files (
    id BIGINT PRIMARY KEY,
    fileable_id BIGINT,           -- ID of parent model (Assignment, Chat, etc.)
    fileable_type VARCHAR(255),   -- Class name of parent model
    original_name VARCHAR(255),   -- Original filename
    file_path VARCHAR(255),       -- Storage path
    file_type VARCHAR(255),       -- MIME type
    file_size BIGINT,             -- Size in bytes
    created_at TIMESTAMP,
    updated_at TIMESTAMP
);
```

### 2. **File Model** (`app/Models/File.php`)
- Polymorphic `morphTo` relationship
- Helper methods: `file_size_formatted`, `file_url`, `file_icon`, `file_extension`
- Automatic icon detection based on file type

### 3. **Reusable Livewire Component** (`⚡file-upload.blade.php`)
- Drag & drop support
- Multiple file upload
- Real-time validation
- File preview with icons
- Remove files before upload
- Delete already uploaded files
- Loading states
- Works with any model

## 🎯 How It Works

### Polymorphic Relationships Explained

```
┌─────────────┐         ┌──────────────┐
│ Assignment  │◄────┬───│    files     │
└─────────────┘     │   ├──────────────┤
                    │   │ fileable_id  │
┌─────────────┐     │   │ fileable_type│
│    Chat     │◄────┼───│ file_path    │
└─────────────┘     │   └──────────────┘
                    │
┌─────────────┐     │   ONE files table
│  Question   │◄────┤   serves ALL models!
└─────────────┘     │
                    │
┌─────────────┐     │
│   Answer    │◄────┤
└─────────────┘     │
                    │
┌─────────────┐     │
│   Comment   │◄────┘
└─────────────┘
```

### Example Data

```
files table:
┌────┬──────────────┬───────────────────────┬─────────────────┐
│ id │ fileable_id  │ fileable_type         │ original_name   │
├────┼──────────────┼───────────────────────┼─────────────────┤
│ 1  │ 10           │ App\Models\Assignment │ essay.pdf       │
│ 2  │ 10           │ App\Models\Assignment │ notes.doc       │
│ 3  │ 5            │ App\Models\Chat       │ screenshot.png  │
│ 4  │ 8            │ App\Models\Question   │ diagram.jpg     │
│ 5  │ 12           │ App\Models\Answer     │ solution.pdf    │
└────┴──────────────┴───────────────────────┴─────────────────┘
```

## 🚀 Quick Start

### Step 1: Add Relationship to Your Model

Add this to **ANY model** you want to support file uploads:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Assignment extends Model
{
    /**
     * Get all files for this assignment
     */
    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
```

**That's it!** Now this model can have files!

### Step 2: Use the Component in Your Blade View

```blade
<x-⚡file-upload
    model-type="App\Models\Assignment"
    :model-id="$assignment->id ?? null"
    storage-folder="assignments"
    label="Upload Assignment Files"
    :max-files="10"
    :max-size="10240"
    accepted-types="pdf,doc,docx,zip,rar,txt,jpg,jpeg,png"
/>
```

### Step 3: Save Files in Your Controller/Livewire Component

```php
use App\Models\File;

public function submit()
{
    // Create your model first
    $assignment = Assignment::create([
        'title' => $this->title,
        'description' => $this->description,
        // ... other fields
    ]);

    // Save files using the file upload component
    // The component automatically saves files when you call saveFiles()
    $fileUploadComponent = $this->getChildComponent('file-upload');
    $fileUploadComponent->saveFiles($assignment);

    // Or manually save files:
    if ($this->files) {
        foreach ($this->files as $file) {
            File::create([
                'fileable_id' => $assignment->id,
                'fileable_type' => Assignment::class,
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $file->store('assignments', 'public'),
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ]);
        }
    }

    return redirect()->route('assignments.show', $assignment);
}
```

## 📋 Complete Examples

### Example 1: Chat Model with File Uploads

#### 1. Add Migration (if needed)
```php
Schema::create('chats', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained();
    $table->text('message');
    $table->timestamps();
});
```

#### 2. Update Chat Model
```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['user_id', 'message'];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
```

#### 3. Create Chat Form (chat/create.blade.php)
```blade
<div>
    <h1>Send Chat Message</h1>

    <form wire:submit="submit">
        <div>
            <label>Message</label>
            <textarea wire:model="message" rows="4"></textarea>
        </div>

        {{-- Reusable File Upload Component --}}
        <x-⚡file-upload
            model-type="App\Models\Chat"
            storage-folder="chats"
            label="Attach Files"
            :max-files="5"
            accepted-types="pdf,doc,docx,jpg,jpeg,png,gif"
        />

        <button type="submit">Send Message</button>
    </form>
</div>
```

#### 4. Create Livewire Component
```php
<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use App\Models\Chat;
use App\Models\File;

new class extends Component {
    use WithFileUploads;

    public $message;
    public $files = [];

    public function submit()
    {
        $this->validate([
            'message' => 'required|string',
            'files.*' => 'nullable|file|max:10240',
        ]);

        // Create chat
        $chat = Chat::create([
            'user_id' => auth()->id(),
            'message' => $this->message,
        ]);

        // Save files
        if ($this->files) {
            foreach ($this->files as $file) {
                File::create([
                    'fileable_id' => $chat->id,
                    'fileable_type' => Chat::class,
                    'original_name' => $file->getClientOriginalName(),
                    'file_path' => $file->store('chats', 'public'),
                    'file_type' => $file->getMimeType(),
                    'file_size' => $file->getSize(),
                ]);
            }
        }

        session()->flash('message', 'Message sent!');
        return redirect()->route('chats.index');
    }
};
```

#### 5. Display Chat with Files
```blade
<div>
    <h2>{{ $chat->user->name }}</h2>
    <p>{{ $chat->message }}</p>

    {{-- Display attached files --}}
    @if($chat->files->count() > 0)
        <div class="files">
            <h3>📎 Attached Files ({{ $chat->files->count() }})</h3>

            @foreach($chat->files as $file)
                <div class="file-item">
                    <span>{{ $file->file_icon }}</span>
                    <span>{{ $file->original_name }}</span>
                    <span>{{ $file->file_size_formatted }}</span>
                    <a href="{{ $file->file_url }}" download>Download</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
```

### Example 2: Question & Answer System

#### 1. Create Models
```php
// app/Models/Question.php
class Question extends Model
{
    protected $fillable = ['user_id', 'title', 'content'];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}

// app/Models/Answer.php
class Answer extends Model
{
    protected $fillable = ['question_id', 'user_id', 'content'];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
```

#### 2. Question Form
```blade
<form wire:submit="submitQuestion">
    <input type="text" wire:model="title" placeholder="Question Title">
    <textarea wire:model="content" placeholder="Question Details"></textarea>

    {{-- Upload files with question --}}
    <x-⚡file-upload
        model-type="App\Models\Question"
        storage-folder="questions"
        label="Add Screenshots or Documents"
        accepted-types="pdf,jpg,jpeg,png,gif"
    />

    <button type="submit">Post Question</button>
</form>
```

#### 3. Answer Form
```blade
<form wire:submit="submitAnswer">
    <textarea wire:model="content" placeholder="Your Answer"></textarea>

    {{-- Upload files with answer --}}
    <x-⚡file-upload
        model-type="App\Models\Answer"
        storage-folder="answers"
        label="Attach Supporting Files"
        accepted-types="pdf,doc,docx,jpg,jpeg,png"
    />

    <button type="submit">Submit Answer</button>
</form>
```

### Example 3: Comment System with Files

```php
// app/Models/Comment.php
class Comment extends Model
{
    protected $fillable = ['post_id', 'user_id', 'content'];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
```

```blade
<form wire:submit="addComment">
    <textarea wire:model="content" placeholder="Add a comment..."></textarea>

    <x-⚡file-upload
        model-type="App\Models\Comment"
        storage-folder="comments"
        label="Attach Files (Optional)"
        :max-files="3"
        accepted-types="jpg,jpeg,png,gif,pdf"
    />

    <button type="submit">Post Comment</button>
</form>
```

## 🎨 Component Props

### All Available Props

```blade
<x-⚡file-upload
    model-type="App\Models\YourModel"  {{-- Required: Full class name --}}
    :model-id="$model->id ?? null"      {{-- Optional: ID if editing existing --}}
    storage-folder="folder-name"        {{-- Default: 'files' --}}
    label="Upload Files"                {{-- Default: 'Upload Files' --}}
    :show-label="true"                  {{-- Default: true --}}
    :max-files="10"                     {{-- Default: 10 --}}
    :max-size="10240"                   {{-- Default: 10240 (10MB in KB) --}}
    accepted-types="pdf,doc,jpg,png"    {{-- Default: 'pdf,doc,docx,zip,rar,txt,jpg,jpeg,png,gif' --}}
/>
```

### Prop Details

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `model-type` | string | `null` | Full class name (e.g., `App\Models\Assignment`) |
| `model-id` | int | `null` | Model ID for editing (shows existing files) |
| `storage-folder` | string | `'files'` | Folder in storage/app/public/ |
| `label` | string | `'Upload Files'` | Label text |
| `show-label` | bool | `true` | Show/hide label |
| `max-files` | int | `10` | Maximum number of files |
| `max-size` | int | `10240` | Max size per file in KB |
| `accepted-types` | string | (see above) | Comma-separated file extensions |

## 🔄 Working with Files

### Create Files
```php
File::create([
    'fileable_id' => $model->id,
    'fileable_type' => get_class($model),
    'original_name' => 'document.pdf',
    'file_path' => 'assignments/abc123.pdf',
    'file_type' => 'application/pdf',
    'file_size' => 125000,
]);
```

### Get Files from Model
```php
$assignment = Assignment::find(1);

// Get all files
$files = $assignment->files;

// Count files
$count = $assignment->files()->count();

// Get latest files
$latest = $assignment->files()->latest()->get();

// Get PDFs only
$pdfs = $assignment->files()
    ->where('file_type', 'application/pdf')
    ->get();
```

### Display Files
```blade
@foreach($model->files as $file)
    <div class="file">
        <span>{{ $file->file_icon }}</span>
        <span>{{ $file->original_name }}</span>
        <span>{{ $file->file_size_formatted }}</span>
        <a href="{{ $file->file_url }}" download>Download</a>
    </div>
@endforeach
```

### Delete Files
```php
// Delete single file
$file = File::find(1);
\Storage::disk('public')->delete($file->file_path);
$file->delete();

// Delete all files for a model
$assignment->files()->each(function($file) {
    \Storage::disk('public')->delete($file->file_path);
    $file->delete();
});
```

## 📊 Queries & Statistics

### Count Models with Files
```php
// Assignments with files
Assignment::has('files')->count();

// Chats with files
Chat::has('files')->count();
```

### Get Models by File Type
```php
// Assignments with PDFs
Assignment::whereHas('files', function($q) {
    $q->where('file_type', 'application/pdf');
})->get();
```

### Total Storage Used
```php
// All files
$totalBytes = File::sum('file_size');
$totalMB = $totalBytes / 1048576;

// Files for specific model type
$assignmentFiles = File::where('fileable_type', Assignment::class)
    ->sum('file_size');
```

### Average Files per Model
```php
Assignment::withCount('files')->avg('files_count');
```

### Most Common File Types
```php
File::select('file_type', DB::raw('count(*) as count'))
    ->groupBy('file_type')
    ->orderBy('count', 'desc')
    ->get();
```

## 🎯 Helper Methods

### File Model Helpers

```php
$file = File::find(1);

// Formatted file size
$file->file_size_formatted; // "125.5 KB" or "2.3 MB"

// Full URL to file
$file->file_url; // "http://domain.com/storage/assignments/abc123.pdf"

// File icon
$file->file_icon; // "📄" for PDF, "📝" for DOC, etc.

// File extension
$file->file_extension; // "pdf", "doc", etc.
```

### Available Icons

| File Type | Icon |
|-----------|------|
| PDF | 📄 |
| Word (doc, docx) | 📝 |
| Excel (xls, xlsx) | 📊 |
| PowerPoint (ppt, pptx) | 📊 |
| Images (jpg, png, gif) | 🖼️ |
| Videos (mp4, avi, mov) | 🎥 |
| Audio (mp3, wav) | 🎵 |
| Archives (zip, rar) | 📦 |
| Text (txt) | 📃 |
| Other | 📄 |

## 🔒 Security Considerations

### 1. Validate File Types
```php
$this->validate([
    'files.*' => [
        'required',
        'file',
        'max:10240',
        'mimes:pdf,doc,docx,jpg,jpeg,png',
    ],
]);
```

### 2. Check Ownership Before Download
```php
public function download(File $file)
{
    // Check if user owns the parent model
    if ($file->fileable->user_id !== auth()->id()) {
        abort(403, 'Unauthorized');
    }

    return Storage::disk('public')->download($file->file_path, $file->original_name);
}
```

### 3. Use Private Storage for Sensitive Files
```php
// Store in private storage
$file->store('assignments', 'private');

// Serve via controller with auth check
public function download(File $file)
{
    $this->authorize('view', $file->fileable);

    return Storage::disk('private')->download($file->file_path);
}
```

## 🧪 Testing

### Test File Upload
```php
public function test_user_can_upload_files_to_assignment()
{
    $assignment = Assignment::factory()->create();

    $file = UploadedFile::fake()->create('document.pdf', 500);

    File::create([
        'fileable_id' => $assignment->id,
        'fileable_type' => Assignment::class,
        'original_name' => $file->getClientOriginalName(),
        'file_path' => $file->store('assignments', 'public'),
        'file_type' => $file->getMimeType(),
        'file_size' => $file->getSize(),
    ]);

    $this->assertDatabaseHas('files', [
        'fileable_id' => $assignment->id,
        'fileable_type' => Assignment::class,
    ]);
}
```

## 📝 Migration to Polymorphic System

### If You Have Existing AssignmentFile Model

You can keep both systems or migrate:

#### Option 1: Keep Both (Recommended for now)
```php
// Assignment can use both old and new system
class Assignment extends Model
{
    // Old system (specific table)
    public function assignmentFiles()
    {
        return $this->hasMany(AssignmentFile::class);
    }

    // New system (polymorphic)
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
```

#### Option 2: Migrate Data
```php
// Migrate existing assignment_files to files table
AssignmentFile::all()->each(function($oldFile) {
    File::create([
        'fileable_id' => $oldFile->assignment_id,
        'fileable_type' => Assignment::class,
        'original_name' => $oldFile->original_name,
        'file_path' => $oldFile->file_path,
        'file_type' => $oldFile->file_type,
        'file_size' => $oldFile->file_size,
        'created_at' => $oldFile->created_at,
        'updated_at' => $oldFile->updated_at,
    ]);
});
```

## 🎉 Benefits

### ✅ Reusability
- One component works with ALL models
- No need to create separate file tables
- No duplicate code

### ✅ Flexibility
- Easy to add file uploads to new models
- Just add one relationship method
- Use the component anywhere

### ✅ Maintainability
- Update file handling in one place
- Consistent behavior across the app
- Easy to add features

### ✅ Scalability
- Unlimited models can have files
- Unlimited files per model
- Efficient database queries

## 📚 Summary

### What You Need to Do for Each New Model:

1. **Add relationship** to model:
   ```php
   public function files() {
       return $this->morphMany(File::class, 'fileable');
   }
   ```

2. **Use component** in view:
   ```blade
   <x-⚡file-upload
       model-type="App\Models\YourModel"
       storage-folder="your-folder"
   />
   ```

3. **Save files** in controller:
   ```php
   File::create([
       'fileable_id' => $model->id,
       'fileable_type' => get_class($model),
       // ... file details
   ]);
   ```

**That's it!** 🎉

---

**Now you have a universal file upload system for your entire application!** 📦✨

Use it for Assignments, Chats, Questions, Answers, Comments, or ANY future model!
