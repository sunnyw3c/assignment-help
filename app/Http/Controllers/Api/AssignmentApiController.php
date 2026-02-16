<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Assignment;
use App\Http\Resources\AssignmentResource;

class AssignmentApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Assignment::where('user_id', $request->user()->id);

        if ($request->has('order_number')) {
            $query->where('order_number', $request->order_number);
        }

        $assignments = $query->latest()->get();

        return AssignmentResource::collection($assignments);
    }

    public function show(Request $request, Assignment $assignment)
    {
        if ($assignment->user_id !== $request->user()->id) {
            abort(404);
        }

        return new AssignmentResource($assignment);
    }

    public function uploadFile(Request $request, Assignment $assignment)
    {
        if ($assignment->user_id !== $request->user()->id) {
            abort(403);
        }

        $request->validate([
            'files' => 'required|array',
            'files.*' => 'file|max:20480', // 20MB max per file
        ]);

        $uploadedFiles = [];

        foreach ($request->file('files') as $file) {
            $filePath = $file->store('assignments', 'public');
            
            $newFile = \App\Models\File::create([
                'fileable_id' => $assignment->id,
                'fileable_type' => get_class($assignment),
                'original_name' => $file->getClientOriginalName(),
                'file_path' => $filePath,
                'file_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
            ]);

            $uploadedFiles[] = [
                'id' => 'new_' . $newFile->id,
                'name' => $newFile->original_name,
                'url' => asset('storage/' . $newFile->file_path),
                'size' => $newFile->file_size_formatted,
                'type' => $newFile->file_type,
                'icon' => $newFile->file_icon,
            ];
        }

        return response()->json([
            'success' => true,
            'message' => count($uploadedFiles) . ' file(s) uploaded successfully',
            'files' => $uploadedFiles
        ]);
    }
}
