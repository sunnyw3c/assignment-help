# 🚀 Polymorphic File Upload - Quick Start

Super simple reusable file upload system for ANY model!

## ⚡ 3-Step Setup

### Step 1: Add to Your Model (2 lines)
```php
public function files() {
    return $this->morphMany(File::class, 'fileable');
}
```

### Step 2: Add to Your View (1 component)
```blade
<x-⚡file-upload
    model-type="App\Models\YourModel"
    storage-folder="your-folder"
/>
```

### Step 3: Save Files (in controller)
```php
foreach ($this->files as $file) {
    File::create([
        'fileable_id' => $model->id,
        'fileable_type' => get_class($model),
        'original_name' => $file->getClientOriginalName(),
        'file_path' => $file->store('folder', 'public'),
        'file_type' => $file->getMimeType(),
        'file_size' => $file->getSize(),
    ]);
}
```

## 📋 Real Examples

### Chat with Files
```php
// Model
class Chat extends Model {
    public function files() {
        return $this->morphMany(File::class, 'fileable');
    }
}
```

```blade
<!-- View -->
<x-⚡file-upload
    model-type="App\Models\Chat"
    storage-folder="chats"
    label="Attach Files"
/>
```

### Question with Files
```php
// Model
class Question extends Model {
    public function files() {
        return $this->morphMany(File::class, 'fileable');
    }
}
```

```blade
<!-- View -->
<x-⚡file-upload
    model-type="App\Models\Question"
    storage-folder="questions"
    accepted-types="pdf,jpg,png"
/>
```

### Answer with Files
```php
// Model
class Answer extends Model {
    public function files() {
        return $this->morphMany(File::class, 'fileable');
    }
}
```

```blade
<!-- View -->
<x-⚡file-upload
    model-type="App\Models\Answer"
    storage-folder="answers"
    :max-files="5"
/>
```

## 🎯 Display Files

```blade
@foreach($model->files as $file)
    <div>
        {{ $file->file_icon }}
        {{ $file->original_name }}
        {{ $file->file_size_formatted }}
        <a href="{{ $file->file_url }}" download>Download</a>
    </div>
@endforeach
```

## 🔧 Component Props

```blade
<x-⚡file-upload
    model-type="App\Models\YourModel"     {{-- Required --}}
    :model-id="$model->id ?? null"        {{-- Optional --}}
    storage-folder="folder-name"          {{-- Default: 'files' --}}
    label="Upload Files"                  {{-- Default: 'Upload Files' --}}
    :max-files="10"                       {{-- Default: 10 --}}
    :max-size="10240"                     {{-- 10MB in KB --}}
    accepted-types="pdf,doc,jpg,png"      {{-- Comma-separated --}}
/>
```

## 💡 Features

- ✅ Drag & drop
- ✅ Multiple files
- ✅ File preview
- ✅ Delete files
- ✅ Real-time validation
- ✅ Responsive design
- ✅ Works with ANY model

## 📊 Common Queries

```php
// Get all files
$model->files

// Count files
$model->files()->count()

// Get PDFs only
$model->files()->where('file_type', 'application/pdf')->get()

// Models with files
YourModel::has('files')->get()
```

---

**For complete documentation, see: POLYMORPHIC-FILE-UPLOAD-GUIDE.md**
