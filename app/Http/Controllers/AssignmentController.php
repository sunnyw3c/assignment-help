<?php

namespace App\Http\Controllers;
use App\Models\Assignment;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    public function create()
    {
        return view('assignments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'pages' => 'required|integer|min:1',
            'file' => 'nullable|file|mimes:pdf,doc,docx,zip',
            'description' => 'nullable|string',
            'budget' => 'nullable|numeric',
        ]);
        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('assignments', 'public');
        }

        Assignment::create([
            'subject' => $request->subject,
            'title' => $request->title,
            'deadline' => $request->deadline,
            'pages' => $request->pages,
            'file_path' => $filePath,
            'description' => $request->description,
            'budget' => $request->budget,
        ]);
         return redirect()->route('assignments.create')->with('success', 'Assignment request submitted successfully!');
        // For now, just return back with a success message
        return back()->with('success', 'Assignment request submitted!');
    }
}
