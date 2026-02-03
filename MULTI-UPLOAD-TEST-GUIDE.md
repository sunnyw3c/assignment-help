# 🧪 Multi-Upload Feature Testing Guide

Test the polymorphic multi-file upload system!

## 🚀 Quick Test Steps

### 1. Server is Already Running
```
✅ Server: http://127.0.0.1:8000
✅ Status: Running
```

### 2. Visit Test Page
```
URL: http://127.0.0.1:8000/test-file-upload
```

### 3. Test Features

#### ✅ Single File Upload
1. Click the upload area
2. Select 1 file
3. See file preview with icon
4. File size displayed
5. Submit form

#### ✅ Multiple Files Upload
1. Click the upload area
2. Select multiple files (Ctrl+Click or Shift+Click)
3. All files appear in the list
4. Each has correct icon
5. Each shows file size
6. Submit form

#### ✅ Drag & Drop
1. Drag files from your file explorer
2. Drop on upload area
3. Border turns purple on hover
4. Files appear in list
5. Submit form

#### ✅ Remove Files
1. Upload multiple files
2. Click ❌ button on any file
3. File disappears from list
4. Counter updates

## 📊 What Gets Tested

### Polymorphic System
- Files stored in `files` table (not `assignment_files`)
- Uses `fileable_id` and `fileable_type` columns
- Works with Assignment model via polymorphic relationship

### Features Tested
- ✅ Multiple file selection
- ✅ Drag and drop
- ✅ File preview
- ✅ File icons (📄 📝 📊 🖼️ 📦)
- ✅ File size formatting
- ✅ Remove files before upload
- ✅ Real-time validation
- ✅ Loading spinner
- ✅ Success message
- ✅ Recent uploads display

## 🎯 Expected Behavior

### Upload Area
```
1. Click → File picker opens
2. Select files → Preview appears
3. Drag files → Border turns purple
4. Drop files → Files added to list
```

### File List
```
1. Shows file icon based on type
2. Displays original filename
3. Shows file size in KB/MB
4. Remove button (❌) on each file
5. Counter: "Files Ready to Upload (X)"
```

### After Submit
```
1. Success message appears
2. Shows assignment ID
3. Shows file count
4. Form resets
5. Files saved in database
6. Recent uploads section updates
```

## 🔍 Verify Database

### Check Files Table
```bash
php artisan tinker

# Get latest assignment
>>> $assignment = \App\Models\Assignment::latest()->first();

# Check polymorphic files (NEW SYSTEM)
>>> $assignment->files;  // Should show File models

# Count files
>>> $assignment->files->count();

# Get file details
>>> $file = $assignment->files->first();
>>> $file->original_name;
>>> $file->file_size_formatted;
>>> $file->file_icon;
>>> $file->fileable_type;  // Should be "App\Models\Assignment"

# Query all files
>>> \App\Models\File::count();
>>> \App\Models\File::latest()->get();
```

## 📋 Test Checklist

### Pre-Test
- [x] Server running
- [x] Test page created
- [x] Routes configured
- [x] Cache cleared

### Upload Tests
- [ ] Single file upload works
- [ ] Multiple files upload works
- [ ] Drag & drop works
- [ ] File icons show correctly
- [ ] File sizes display correctly
- [ ] Remove file before upload works

### Validation Tests
- [ ] File >10MB shows error
- [ ] Empty title shows error
- [ ] Empty description shows error

### Submission Tests
- [ ] Form submits successfully
- [ ] Success message shows
- [ ] Assignment created
- [ ] Files saved in `files` table (polymorphic)
- [ ] Recent uploads section updates

### Database Tests
- [ ] Files in `files` table
- [ ] `fileable_type` = "App\Models\Assignment"
- [ ] `fileable_id` matches assignment ID
- [ ] File metadata saved correctly

## 🎨 UI Features to Notice

### Design
- Glass morphism cards
- 3D hover effects
- Animated icons
- Gradient backgrounds
- Smooth transitions
- Loading spinner
- Responsive layout

### Icons by File Type
- 📄 PDF files
- 📝 Word documents
- 📊 Excel/PowerPoint
- 🖼️ Images (JPG, PNG)
- 📦 Archives (ZIP, RAR)
- 📃 Text files

## 🔧 Troubleshooting

### If Upload Not Working:

1. **Check Console (F12)**
   - Look for JavaScript errors
   - Check Network tab for failed requests

2. **Check Permissions**
   ```bash
   # Ensure storage is writable
   chmod -R 775 storage/
   ```

3. **Check Directories**
   ```bash
   # Ensure directories exist
   ls -la storage/app/public/
   ls -la storage/app/livewire-tmp/
   ```

4. **Clear Cache Again**
   ```bash
   php artisan config:clear
   php artisan view:clear
   php artisan route:clear
   ```

5. **Restart Server**
   ```bash
   # Stop server (Ctrl+C)
   php artisan serve
   ```

## 🎉 Success Indicators

When working correctly, you should see:

```
1. ✅ File picker opens
2. ✅ Files appear with icons
3. ✅ File sizes show correctly
4. ✅ Loading spinner appears briefly
5. ✅ Success message after submit
6. ✅ Assignment ID displayed
7. ✅ File count shown
8. ✅ Recent uploads section updates
9. ✅ Database has files
10. ✅ Polymorphic relationship works
```

## 📱 Test on Different Devices

### Desktop
- Chrome
- Firefox
- Edge
- Safari

### Mobile
- iPhone (Safari)
- Android (Chrome)
- Tablet

### Features to Test
- Touch interactions
- Drag & drop (desktop only)
- Responsive layout
- File picker on mobile

## 🎯 Key Differences from Old System

### Old System (assignment_files)
```sql
assignment_files table:
- assignment_id (specific FK)
- Only works with assignments
```

### New System (files - Polymorphic)
```sql
files table:
- fileable_id (generic ID)
- fileable_type (model class name)
- Works with ANY model
```

## 📊 Test Results Template

```
Test Date: _____________
Browser: _____________
Device: _____________

Upload Tests:
[ ] Single file: _______
[ ] Multiple files: _______
[ ] Drag & drop: _______
[ ] File icons: _______
[ ] File sizes: _______
[ ] Remove files: _______

Validation:
[ ] File size limit: _______
[ ] Required fields: _______

Submission:
[ ] Form submit: _______
[ ] Success message: _______
[ ] Database save: _______
[ ] Polymorphic: _______

UI/UX:
[ ] Responsive: _______
[ ] Animations: _______
[ ] Loading states: _______

Notes:
_________________________
_________________________
```

---

## 🚀 Ready to Test!

**Visit:** http://127.0.0.1:8000/test-file-upload

**Test the universal file upload system now!** 🧪✨
