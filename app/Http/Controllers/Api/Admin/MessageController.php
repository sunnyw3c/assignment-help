<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $query = Message::with(['assignment', 'sender'])->latest();

        if ($request->filled('unread')) {
            $query->where('is_read', false);
        }

        return response()->json($query->paginate(30));
    }

    public function unreadCount()
    {
        return response()->json(['count' => Message::where('is_read', false)->count()]);
    }

    public function show(Assignment $assignment)
    {
        $messages = $assignment->messages()->with('sender')->oldest()->get();
        Message::where('assignment_id', $assignment->id)
               ->where('receiver_role', 'admin')
               ->update(['is_read' => true]);

        return response()->json([
            'assignment' => $assignment->load('user'),
            'messages'   => $messages,
        ]);
    }

    public function reply(Request $request, Assignment $assignment)
    {
        $request->validate(['body' => 'required|string']);

        $message = Message::create([
            'assignment_id' => $assignment->id,
            'sender_id'     => $request->user()->id,
            'receiver_role' => 'student',
            'body'          => $request->body,
            'type'          => 'text',
            'is_read'       => false,
        ]);

        return response()->json($message->load('sender'), 201);
    }
}
