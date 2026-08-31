<?php

namespace App\Http\Controllers;

use App\Http\Resources\AssignmentResource;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * List the signed-in student's assignments.
     *
     * The collection is serialised into the view so the table renders without
     * JavaScript. Alpine hydrates from it rather than fetching on load, which
     * keeps the list visible even if the asset bundle fails.
     */
    public function index(Request $request): View
    {
        $assignments = $request->user()
            ->assignments()
            ->with(['files', 'assignmentFiles'])
            ->latest()
            ->get();

        return view('dashboard', [
            'header' => 'Student Dashboard',
            'assignments' => AssignmentResource::collection($assignments)->resolve($request),
        ]);
    }

    /**
     * Show a single assignment belonging to the signed-in student.
     */
    public function show(Request $request, string $orderNumber): View
    {
        $assignment = $request->user()
            ->assignments()
            ->with(['files', 'assignmentFiles'])
            ->where('order_number', $orderNumber)
            ->firstOrFail();

        return view('assignment-details', [
            'header' => 'Assignment Details',
            'order_number' => $assignment->order_number,
            'assignment' => (new AssignmentResource($assignment))->resolve($request),
        ]);
    }
}
