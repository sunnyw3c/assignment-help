<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $query = Assignment::with(['user', 'service'])
            ->latest();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('order_number', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%")
                  ->orWhereHas('user', fn($u) => $u->where('name', 'like', "%{$search}%"));
            });
        }

        $orders = $query->paginate(20);

        return response()->json($orders);
    }

    public function show(Assignment $assignment)
    {
        $assignment->load(['user', 'service', 'files', 'messages.sender']);
        return response()->json($assignment);
    }

    public function updateStatus(Request $request, Assignment $assignment)
    {
        $request->validate(['status' => 'required|string']);
        $assignment->update(['status' => $request->status]);
        return response()->json($assignment->fresh());
    }

    public function assignWriter(Request $request, Assignment $assignment)
    {
        $request->validate(['tutor_id' => 'required|integer']);
        $assignment->update([
            'tutor_id'       => $request->tutor_id,
            'tutor_deadline' => $request->tutor_deadline,
        ]);
        return response()->json($assignment->fresh());
    }

    public function updatePayment(Request $request, Assignment $assignment)
    {
        $request->validate(['payment_status' => 'required|string']);
        $assignment->update([
            'payment_status' => $request->payment_status,
            'amount_paid'    => $request->amount_paid ?? $assignment->amount_paid,
        ]);
        return response()->json($assignment->fresh());
    }
}
