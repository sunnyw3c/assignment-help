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
        if ($request->input('source') === 'creative_hero' && ! auth()->check()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'redirect' => route('login'),
                    'message' => 'Please log in or create an account to view your order dashboard.',
                ], 401);
            }

            return redirect()->route('login');
        }

        $request->validate([
            'subject' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'pages' => 'required|integer|min:1',
            'file' => 'nullable|file|mimes:pdf,doc,docx,zip',
            'files.*' => 'nullable|file|mimes:pdf,doc,docx,zip',
            'description' => 'nullable|string',
            'budget' => 'nullable|numeric',
            'service_type' => 'nullable|string|max:255',
            'word_count' => 'nullable|integer|min:1',
            'difficulty' => 'nullable|string|max:255',
        ]);

        $orderNumber = date('ymd') . rand(1000, 9999);
        
        $assignment = Assignment::create([
            'order_number' => $orderNumber,
            'service_type' => $request->service_type,
            'subject' => $request->subject,
            'title' => $request->title,
            'deadline' => $request->deadline,
            'pages' => $request->pages,
            'word_count' => $request->word_count,
            'description' => $request->description,
            'difficulty' => $request->difficulty,
            'budget' => $request->budget,
            'user_id' => auth()->id(), // Ensure user_id is set
        ]);

        $files = [];
        if ($request->hasFile('file')) {
            $files[] = $request->file('file');
        }
        if ($request->hasFile('files')) {
            $files = array_merge($files, $request->file('files'));
        }

        foreach ($files as $file) {
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

        if ($request->expectsJson()) {
            return response()->json([
                'redirect' => auth()->check()
                    ? route('dashboard.details', $assignment->order_number)
                    : route('login'),
                'order_number' => $assignment->order_number,
            ]);
        }

        if (auth()->check()) {
            return redirect()->route('dashboard.details', $assignment->order_number)
                ->with('success', 'Assignment request submitted successfully!');
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
