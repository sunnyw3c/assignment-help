@extends('layouts.app')

@section('title', 'Request Assignment Help')

@section('content')
<div class="container mx-auto max-w-3xl py-12 px-4">
    <h1 class="text-3xl font-bold mb-6">Request Assignment Help</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <div>
            <label class="block font-medium">Subject</label>
            <input type="text" name="subject" value="{{ old('subject') }}" required class="w-full border rounded p-2">
            @error('subject') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Assignment Title / Topic</label>
            <input type="text" name="title" value="{{ old('title') }}" required class="w-full border rounded p-2">
            @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Deadline</label>
            <input type="datetime-local" name="deadline" value="{{ old('deadline') }}" required class="w-full border rounded p-2">
            @error('deadline') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Number of Pages</label>
            <input type="number" name="pages" min="1" value="{{ old('pages') }}" required class="w-full border rounded p-2">
            @error('pages') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Upload File (optional)</label>
            <input type="file" name="file" class="w-full border rounded p-2">
            @error('file') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Description / Additional Info</label>
            <textarea name="description" rows="4" class="w-full border rounded p-2">{{ old('description') }}</textarea>
            @error('description') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Budget (Optional)</label>
            <input type="text" name="budget" value="{{ old('budget') }}" class="w-full border rounded p-2">
            @error('budget') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Submit Request
            </button>
        </div>
    </form>
</div>
@endsection
