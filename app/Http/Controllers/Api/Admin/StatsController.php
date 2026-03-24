<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $role = $user->getRoleNames()->first();

        $stats = match ($role) {
            'admin'     => $this->adminStats(),
            'manager'   => $this->managerStats(),
            'writer'    => $this->writerStats($user),
            'executive' => $this->executiveStats(),
            'support'   => $this->supportStats(),
            default     => [],
        };

        return response()->json($stats);
    }

    private function adminStats(): array
    {
        return [
            'total_orders'   => Assignment::count(),
            'total_revenue'  => Assignment::sum('budget'),
            'total_writers'  => User::role('writer')->count(),
            'open_tickets'   => Message::where('is_read', false)->count(),
            'pending_orders' => Assignment::where('status', 'pending')->count(),
            'total_students' => User::role('student')->count(),
        ];
    }

    private function managerStats(): array
    {
        return [
            'pending_orders'    => Assignment::where('status', 'pending')->count(),
            'unassigned_orders' => Assignment::whereNull('tutor_id')->count(),
            'active_writers'    => User::role('writer')->count(),
            'total_orders'      => Assignment::count(),
        ];
    }

    private function writerStats(User $user): array
    {
        return [
            'assigned'  => Assignment::where('tutor_id', $user->id)->count(),
            'submitted' => Assignment::where('tutor_id', $user->id)->where('status', 'completed')->count(),
            'due_soon'  => Assignment::where('tutor_id', $user->id)
                ->whereNotIn('status', ['completed'])
                ->where('deadline', '<=', now()->addDays(2))
                ->count(),
        ];
    }

    private function executiveStats(): array
    {
        $total     = Assignment::count();
        $completed = Assignment::where('status', 'completed')->count();
        return [
            'total_revenue'   => Assignment::sum('budget'),
            'total_orders'    => $total,
            'completion_rate' => $total > 0 ? round(($completed / $total) * 100) : 0,
        ];
    }

    private function supportStats(): array
    {
        return [
            'open_messages'  => Message::where('is_read', false)->count(),
            'total_messages' => Message::count(),
        ];
    }
}
