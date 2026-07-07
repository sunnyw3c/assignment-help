<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FilePondController extends Controller
{
    /**
     * Process (upload) a file — FilePond server protocol.
     * Returns a plain-text unique server ID that FilePond stores
     * and sends back on form submission.
     */
    public function process(Request $request): Response
    {
        $request->validate([
            'file' => 'required|file|max:20480', // 20 MB
        ]);

        $file   = $request->file('file');
        $tempId = Str::uuid()->toString();
        $dir    = 'filepond-tmp/' . $tempId;

        Storage::disk('local')->putFileAs(
            $dir,
            $file,
            $file->getClientOriginalName()
        );

        return response($tempId, 200)
            ->header('Content-Type', 'text/plain');
    }

    /**
     * Revert (delete) a previously uploaded temp file.
     * FilePond sends the server ID as plain-text request body.
     */
    public function revert(Request $request): Response
    {
        $tempId = $request->getContent();

        // Only allow valid UUID-shaped IDs to prevent directory traversal
        if ($tempId && preg_match('/^[0-9a-f\-]{36}$/', $tempId)) {
            Storage::disk('local')->deleteDirectory('filepond-tmp/' . $tempId);
        }

        return response('', 200);
    }
}
