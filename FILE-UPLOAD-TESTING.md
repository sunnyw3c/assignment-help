# 🧪 File Upload Testing Guide

Complete guide to test the multiple file upload feature.

## ✅ Issues Fixed

### 1. **Created Missing Directories**
```bash
✅ Created: storage/app/livewire-tmp (Livewire temp uploads)
✅ Created: storage/app/public/assignments (Final file storage)
✅ Set permissions: 775 on storage directories
```

### 2. **Added Error Handling**
```php
✅ Added updatedFiles() method for real-time validation
✅ Added better error messages in UI
✅ Added session error display
```

### 3. **Rebuilt Assets**
```bash
✅ npm run build - Successfully compiled
✅ All assets updated
```

## 🚀 How to Test

### Step 1: Start the Server
```bash
# Make sure you're in the project directory
cd /d/LOCALHOST/assignment-help-online

# Start the development server
composer dev
# OR
php artisan serve
```

### Step 2: Open Browser
```
URL: http://localhost:8000/order
```

### Step 3: Test File Upload

#### Test 1: Single File Upload
```
1. Fill in the form:
   - Assignment Type: Academic Assignment
   - Title: Test Upload
   - Deadline: 7 days
   - Pages: 1

2. Click "Click to browse or drag files here"

3. Select 1 PDF file

4. You should see:
   ✅ "Uploading files..." spinner (briefly)
   ✅ File appears in list below with:
      - File icon (📄, 📝, 📦, etc.)
      - File name
      - File size
      - Remove button (❌)

5. Submit the form

6. Check success message
```

#### Test 2: Multiple Files Upload
```
1. Fill in the form details

2. Click to browse

3. Select multiple files (Ctrl+Click or Shift+Click):
   - document.pdf
   - notes.doc
   - code.zip

4. You should see:
   ✅ All 3 files in the list
   ✅ Each with correct icon
   ✅ Each with file size
   ✅ Count shows "📋 Uploaded Files (3)"

5. Try removing middle file (click ❌)
   ✅ File should disappear
   ✅ Count updates to (2)

6. Submit form

7. Success!
```

#### Test 3: Drag & Drop
```
1. Open file explorer

2. Select files

3. Drag files over the upload area
   ✅ Border should turn purple
   ✅ Background changes to purple-50

4. Drop files
   ✅ Files appear in list
   ✅ Animations work

5. Submit form
```

## 🔍 What to Look For

### Success Indicators:
```
✅ File picker opens when clicking upload area
✅ "Uploading files..." message appears briefly
✅ Files appear in list with correct info
✅ Remove buttons work
✅ Form submits successfully
✅ Success message shows after submit
```

### Visual Feedback:
```
Upload Area:
✅ Purple border on hover
✅ Bouncing folder icon (📁)
✅ Clear instructions

File List:
✅ Glass morphism cards
✅ Colored file icons
✅ File name and size
✅ Hover effect (card lifts)
✅ Remove button on hover
```

## 🐛 Troubleshooting

### Issue 1: "No File Selected" or Nothing Happens
**Possible Causes:**
- Browser console has errors
- JavaScript not loaded

**Solutions:**
```bash
# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Rebuild assets
npm run build

# Hard refresh browser (Ctrl+Shift+R)
```

### Issue 2: Files Not Appearing in List
**Check:**
1. Open browser console (F12)
2. Look for Livewire errors
3. Check Network tab for failed requests

**Solutions:**
```bash
# Ensure Livewire is working
php artisan livewire:publish --config
php artisan livewire:publish --assets

# Restart server
php artisan serve
```

### Issue 3: Upload Spinner Shows Forever
**Possible Causes:**
- File too large (>10MB)
- Network timeout
- Server error

**Solutions:**
1. Try smaller file (<5MB)
2. Check browser console for errors
3. Check Laravel logs:
```bash
tail -f storage/logs/laravel.log
```

### Issue 4: "File Must Not Be Greater Than 10240 Kilobytes"
**This is expected** - File size limit is 10MB

**Solutions:**
1. Use smaller files
2. Or increase limit in component:
```php
'files.*' => 'nullable|file|max:20480', // 20MB
```

### Issue 5: Form Submits But No Files Saved
**Check:**
```bash
# Check database
php artisan tinker
>>> $assignment = \App\Models\Assignment::latest()->first()
>>> $assignment->files  # Should show files
>>> $assignment->files->count()  # Should be > 0
```

**If no files:**
1. Check validation passed
2. Check storage directory exists
3. Check file permissions

## 🧪 Browser Console Testing

### Open Console (F12)
```javascript
// Check if Livewire is loaded
console.log(window.Livewire);  // Should show Livewire object

// Check for errors
// Look for red errors in console
```

### Network Tab
```
1. Open Network tab (F12)
2. Upload a file
3. Look for requests to:
   - /livewire/upload-file
   - Should return 200 OK
```

## 📊 Database Testing

### After Submitting Form:
```bash
php artisan tinker

# Get latest assignment
>>> $assignment = \App\Models\Assignment::latest()->first()

# Check title
>>> $assignment->title

# Check files relationship
>>> $assignment->files

# Should show collection of AssignmentFile records like:
Illuminate\Database\Eloquent\Collection {#1234
  all: [
    App\Models\AssignmentFile {#5678
      id: 1,
      assignment_id: 10,
      original_name: "document.pdf",
      file_path: "assignments/abc123.pdf",
      file_type: "application/pdf",
      file_size: 125000,
    },
  ],
}

# Count files
>>> $assignment->files->count()  # Should be > 0

# Get first file info
>>> $file = $assignment->files->first()
>>> $file->original_name
>>> $file->file_size_formatted  # "122.07 KB"
>>> $file->file_url  # Full URL
```

### Check Files Table Directly:
```bash
php artisan tinker
>>> \App\Models\AssignmentFile::count()  # Total files
>>> \App\Models\AssignmentFile::latest()->get()  # Recent files
```

## 📁 File System Testing

### Check Files Were Stored:
```bash
# List uploaded files
ls -la storage/app/public/assignments/

# Should show files like:
# abc123def456ghi789.pdf
# xyz789mno345pqr678.doc

# Check file size
du -h storage/app/public/assignments/*
```

## 🎯 Complete Test Checklist

### Pre-Flight Checks:
- [ ] Server running (`php artisan serve`)
- [ ] Browser open to http://localhost:8000/order
- [ ] Test files ready (<10MB each)

### Upload Tests:
- [ ] Single file upload works
- [ ] Multiple files upload works
- [ ] Drag & drop works
- [ ] Remove file works
- [ ] File icons show correctly
- [ ] File sizes display correctly

### Validation Tests:
- [ ] File >10MB shows error
- [ ] Invalid file type shows error
- [ ] Empty form validation works

### Submission Tests:
- [ ] Form submits successfully
- [ ] Success message shows
- [ ] Files saved to database
- [ ] Files saved to storage
- [ ] Can retrieve files from assignment

### UI Tests:
- [ ] Upload area looks good
- [ ] File list styled correctly
- [ ] Animations work smoothly
- [ ] Mobile responsive
- [ ] Hover effects work
- [ ] Loading spinner shows

## 🔧 Quick Fixes

### If Upload Not Working:

```bash
# 1. Clear everything
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# 2. Ensure directories exist
mkdir -p storage/app/livewire-tmp
mkdir -p storage/app/public/assignments
chmod -R 775 storage/

# 3. Rebuild assets
npm run build

# 4. Restart server
# Press Ctrl+C to stop
php artisan serve

# 5. Hard refresh browser
# Press Ctrl+Shift+R
```

## 🎉 Expected Result

### When Working Correctly:

```
1. Click upload area
   ↓
2. Select files (or drag & drop)
   ↓
3. See "Uploading files..." briefly
   ↓
4. Files appear in list with:
   - Pretty icons
   - File names
   - File sizes
   - Remove buttons
   ↓
5. Submit form
   ↓
6. Success message: "Order submitted successfully!"
   ↓
7. Files saved in:
   - Database: assignment_files table
   - Storage: storage/app/public/assignments/
```

## 📝 Test Data Examples

### Good Test Files:
```
✅ document.pdf (500 KB)
✅ essay.doc (250 KB)
✅ notes.docx (1.5 MB)
✅ code.zip (3 MB)
✅ diagram.png (800 KB)
```

### Bad Test Files (Should Show Error):
```
❌ huge-file.pdf (15 MB) - Too large
❌ movie.mp4 (50 MB) - Too large + wrong type
❌ song.mp3 (5 MB) - Wrong type (not in accept list)
```

## 🚦 Status Indicators

### During Upload:
```
🔵 Uploading...  - Files being processed
🟢 Uploaded!     - Files ready to submit
🔴 Error!        - Something went wrong
```

---

**Start testing now!** 🧪

Run `php artisan serve` and visit http://localhost:8000/order
