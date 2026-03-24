<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $role = $user->getRoleNames()->first();

        $data = match ($role) {
            'admin'     => $this->adminStats(),
            'manager'   => $this->managerStats(),
            'writer'    => $this->writerStats($user),
            'executive' => $this->executiveStats(),
            'support'   => $this->supportStats(),
            default     => [],
        };

        return view("admin.dashboard.{$role}", array_merge(['role' => $role], $data));
    }

    private function adminStats(): array
    {
        return [
            'total_orders'   => Assignment::count(),
            'total_revenue'  => Assignment::sum('budget'),
            'total_writers'  => User::role('writer')->count(),
            'open_tickets'   => \App\Models\Message::whereNull('read_at')->count(),
        ];
    }

    private function managerStats(): array
    {
        return [
            'pending_orders'    => Assignment::where('status', 'pending')->count(),
            'unassigned_orders' => Assignment::whereNull('tutor_id')->count(),
            'active_writers'    => User::role('writer')->count(),
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
            'total_revenue'    => Assignment::sum('budget'),
            'total_orders'     => $total,
            'completion_rate'  => $total > 0 ? round(($completed / $total) * 100) : 0,
        ];
    }

    private function supportStats(): array
    {
        return [
            'open_messages'  => \App\Models\Message::whereNull('read_at')->count(),
            'total_messages' => \App\Models\Message::count(),
        ];
    }
}
