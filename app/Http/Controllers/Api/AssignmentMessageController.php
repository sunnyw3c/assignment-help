<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Message;
use App\Http\Resources\MessageResource;
use Illuminate\Http\Request;

class AssignmentMessageController extends Controller
{
    /**
     * Display a listing of the messages for a specific assignment.
     */
    public function index(Assignment $assignment)
    {
        // Ensure user belongs to this assignment
        if (auth()->id() !== $assignment->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $messages = $assignment->messages()->with('sender')->oldest()->get();

        return MessageResource::collection($messages);
    }

    /**
     * Store a newly created message.
     */
    public function store(Request $request, Assignment $assignment)
    {
        // Ensure user belongs to this assignment
        if (auth()->id() !== $assignment->user_id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $request->validate([
            'body' => 'required|string',
        ]);

        $message = $assignment->messages()->create([
            'sender_id' => auth()->id(),
            'body' => $request->body,
            'receiver_role' => 'support', // Students send to support by default
            'type' => 'text',
        ]);

        return new MessageResource($message);
    }
}
