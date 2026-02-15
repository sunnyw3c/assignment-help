<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('order.create');
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

        $orderNumber = date('ymd') . rand(1000, 9999);
        
        $assignment = Assignment::create([
            'order_number' => $orderNumber,
            'subject' => $request->subject,
            'title' => $request->title,
            'deadline' => $request->deadline,
            'pages' => $request->pages,
            'description' => $request->description,
            'budget' => $request->budget,
            'user_id' => auth()->id(), // Ensure user_id is set
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('assignments', 'public');
            
            \App\Models\File::create([
                'fileable_id' => $assignment->id,
                'fileable_type' => get_class($assignment),
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $filePath,
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ]);
        }

        return redirect()->route('order')->with('success', 'Assignment request submitted successfully!');
    }
    public function success(Assignment $assignment)
    {
        // Ensure user can only see their own success page
        if ($assignment->user_id !== auth()->id()) {
            abort(403);
        }

        return view('order-success', compact('assignment'));
    }
}
