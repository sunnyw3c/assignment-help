# 📊 Files Table Structure - Separate Database Design

Files are now stored in a **separate `assignment_files` table** with proper relationships!

## ✅ What Changed

### Before (Old Design):
```
assignments table:
├── id
├── title
├── file_path (JSON array) ❌ Not normalized
└── ...
```

### After (New Design):
```
assignments table:          assignment_files table:
├── id                      ├── id
├── title                   ├── assignment_id (FK) ✅
├── description             ├── original_name ✅
└── ...                     ├── file_path ✅
                            ├── file_type ✅
                            ├── file_size ✅
                            └── timestamps ✅
```

## 🗄️ Database Schema

### `assignment_files` Table

| Column | Type | Description |
|--------|------|-------------|
| `id` | BIGINT | Primary key |
| `assignment_id` | BIGINT | Foreign key to assignments |
| `original_name` | VARCHAR(255) | Original filename (e.g., "document.pdf") |
| `file_path` | VARCHAR(255) | Storage path (e.g., "assignments/abc123.pdf") |
| `file_type` | VARCHAR(255) | MIME type (e.g., "application/pdf") |
| `file_size` | BIGINT | File size in bytes |
| `created_at` | TIMESTAMP | Upload timestamp |
| `updated_at` | TIMESTAMP | Last updated |

### Relationships:
```sql
assignment_files.assignment_id -> assignments.id
ON DELETE CASCADE (files deleted when assignment deleted)
```

## 📝 Models Structure

### AssignmentFile Model

```php
<?php

namespace App\Models;

class AssignmentFile extends Model
{
    protected $fillable = [
        'assignment_id',
        'original_name',
        'file_path',
        'file_type',
        'file_size',
    ];

    // Relationship
    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    // Helpers
    public function getFileSizeFormattedAttribute(): string
    {
        // Returns "125.5 KB" or "2.3 MB"
    }

    public function getFileUrlAttribute(): string
    {
        // Returns full URL to file
        return asset('storage/' . $this->file_path);
    }
}
```

### Assignment Model

```php
<?php

namespace App\Models;

class Assignment extends Model
{
    // Relationship
    public function files(): HasMany
    {
        return $this->hasMany(AssignmentFile::class);
    }
}
```

## 🔄 Usage Examples

### 1. Create Assignment with Files

```php
// Create assignment
$assignment = Assignment::create([
    'title' => 'My Assignment',
    'description' => 'Assignment details',
    // ... other fields
]);

// Add files
foreach ($uploadedFiles as $file) {
    AssignmentFile::create([
        'assignment_id' => $assignment->id,
        'original_name' => $file->getClientOriginalName(),
        'file_path' => $file->store('assignments', 'public'),
        'file_type' => $file->getMimeType(),
        'file_size' => $file->getSize(),
    ]);
}
```

### 2. Get Assignment with Files

```php
// Load assignment with files
$assignment = Assignment::with('files')->find(1);

// Access files
foreach ($assignment->files as $file) {
    echo $file->original_name; // "document.pdf"
    echo $file->file_size_formatted; // "125.5 KB"
    echo $file->file_url; // Full URL to download
    echo $file->file_type; // "application/pdf"
}
```

### 3. Count Files

```php
$assignment = Assignment::find(1);

// Count files
$fileCount = $assignment->files()->count();

// Or with loaded relationship
$fileCount = $assignment->files->count();
```

### 4. Delete Assignment (Cascade Delete Files)

```php
$assignment = Assignment::find(1);
$assignment->delete();

// All associated files are automatically deleted from database
// You may want to also delete physical files
```

### 5. Get Latest Files

```php
$assignment = Assignment::find(1);

// Get files ordered by upload time
$latestFiles = $assignment->files()
    ->latest()
    ->get();
```

### 6. Filter by File Type

```php
$assignment = Assignment::find(1);

// Get only PDFs
$pdfFiles = $assignment->files()
    ->where('file_type', 'application/pdf')
    ->get();

// Get images
$images = $assignment->files()
    ->whereIn('file_type', ['image/jpeg', 'image/png'])
    ->get();
```

## 💾 Storage Structure

### File System:
```
storage/app/public/
└── assignments/
    ├── abc123def456.pdf
    ├── xyz789ghi012.doc
    └── mno345pqr678.zip
```

### Database Records:
```
assignment_files:
┌────┬───────────────┬─────────────────────────────┬───────────────────┐
│ id │ assignment_id │ original_name               │ file_path         │
├────┼───────────────┼─────────────────────────────┼───────────────────┤
│ 1  │ 10            │ my-assignment.pdf           │ assignments/abc.. │
│ 2  │ 10            │ references.doc              │ assignments/xyz.. │
│ 3  │ 10            │ code-files.zip              │ assignments/mno.. │
└────┴───────────────┴─────────────────────────────┴───────────────────┘
```

## 🎯 Benefits of Separate Table

### 1. **Better Data Normalization**
```
❌ Before: JSON array in single column
✅ After: Each file is a separate record
```

### 2. **Easy Querying**
```php
// Count assignments with files
Assignment::has('files')->count();

// Assignments with more than 3 files
Assignment::has('files', '>', 3)->get();

// Get assignments by file type
Assignment::whereHas('files', function($q) {
    $q->where('file_type', 'application/pdf');
})->get();
```

### 3. **File Metadata**
```php
// Easily track file information
- Upload timestamp
- File size
- MIME type
- Original name
```

### 4. **Scalability**
```
✅ Add unlimited files per assignment
✅ Each file independently managed
✅ Easy to add more file attributes
✅ Better performance with indexes
```

### 5. **Cascade Deletion**
```php
// Delete assignment -> Files auto-deleted
$assignment->delete();

// Or delete specific file
$file = AssignmentFile::find(1);
$file->delete();
```

## 📊 Example Queries

### Get Total Storage Used
```php
$totalSize = AssignmentFile::sum('file_size');
$totalSizeMB = $totalSize / 1048576;
echo "Total storage: {$totalSizeMB} MB";
```

### Get Files by Date Range
```php
$files = AssignmentFile::whereBetween('created_at', [
    '2024-01-01',
    '2024-12-31'
])->get();
```

### Get Largest Files
```php
$largeFiles = AssignmentFile::orderBy('file_size', 'desc')
    ->limit(10)
    ->get();
```

### Get Files for User
```php
$user = User::find(1);

$userFiles = AssignmentFile::whereHas('assignment', function($q) use ($user) {
    $q->where('user_id', $user->id);
})->get();
```

## 🔧 Livewire Implementation

### Current Implementation:
```php
public function submit()
{
    // Create assignment first
    $assignment = Assignment::create([...]);

    // Then store files in separate table
    if ($this->files) {
        foreach ($this->files as $file) {
            $filePath = $file->store('assignments', 'public');

            AssignmentFile::create([
                'assignment_id' => $assignment->id,
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $filePath,
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ]);
        }
    }
}
```

## 📱 Frontend Display

### Show Files in View:
```blade
@if($assignment->files->count() > 0)
    <div class="files-list">
        <h3>📎 Attached Files ({{ $assignment->files->count() }})</h3>

        @foreach($assignment->files as $file)
            <div class="file-item">
                <span>{{ $file->original_name }}</span>
                <span>{{ $file->file_size_formatted }}</span>
                <a href="{{ $file->file_url }}" download>Download</a>
            </div>
        @endforeach
    </div>
@endif
```

## 🗃️ Database Indexes

### Recommended Indexes:
```sql
-- Foreign key index (already created)
INDEX idx_assignment_id ON assignment_files(assignment_id)

-- File type index (for filtering)
INDEX idx_file_type ON assignment_files(file_type)

-- Created at index (for date queries)
INDEX idx_created_at ON assignment_files(created_at)
```

## 🔄 Migration Code

### Migration File:
```php
Schema::create('assignment_files', function (Blueprint $table) {
    $table->id();
    $table->foreignId('assignment_id')
        ->constrained()
        ->onDelete('cascade'); // Delete files when assignment deleted
    $table->string('original_name');
    $table->string('file_path');
    $table->string('file_type')->nullable();
    $table->unsignedBigInteger('file_size')->nullable();
    $table->timestamps();
});
```

## ✅ Validation

### Controller/Livewire:
```php
$this->validate([
    'files.*' => [
        'required',
        'file',
        'max:10240', // 10MB per file
        'mimes:pdf,doc,docx,zip,rar,txt,jpg,jpeg,png'
    ]
]);
```

## 🎯 API Endpoints (Future)

### RESTful API:
```
GET    /api/assignments/{id}/files      - List files
POST   /api/assignments/{id}/files      - Upload file
GET    /api/files/{id}                  - Get file info
DELETE /api/files/{id}                  - Delete file
GET    /api/files/{id}/download         - Download file
```

## 📊 Statistics Queries

### Useful Statistics:
```php
// Total files in system
AssignmentFile::count();

// Average files per assignment
Assignment::withCount('files')->avg('files_count');

// Most common file types
AssignmentFile::select('file_type', DB::raw('count(*) as count'))
    ->groupBy('file_type')
    ->orderBy('count', 'desc')
    ->get();
```

## 🔒 Security Considerations

### 1. **File Access Control**
```php
// Check user owns assignment before downloading
if ($assignment->user_id !== auth()->id()) {
    abort(403);
}
```

### 2. **File Validation**
```php
// Validate MIME type
$allowedTypes = ['application/pdf', 'application/msword'];
if (!in_array($file->getMimeType(), $allowedTypes)) {
    throw new ValidationException('Invalid file type');
}
```

### 3. **Storage Security**
```php
// Store files outside public folder
$file->store('assignments', 'private');

// Serve via controller with auth check
```

## 🎉 Summary

### Database Structure:
```
✅ Separate `assignment_files` table
✅ Proper foreign key relationships
✅ Cascade deletion
✅ Rich metadata (size, type, name)
✅ Timestamps for tracking
```

### Model Features:
```
✅ HasMany/BelongsTo relationships
✅ Helper methods (formatted size, URL)
✅ Easy querying
✅ Scalable design
```

### Benefits:
```
✅ Better data integrity
✅ Easy to query and filter
✅ Proper normalization
✅ Scalable for growth
✅ Supports unlimited files
```

---

**Your file storage now uses proper database design with a separate table!** 🎉📊

Each file is independently tracked with full metadata!
