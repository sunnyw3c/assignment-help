<?php

namespace App\Http\Controllers;

use App\Models\Service;

class MathematicsAssignmentController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'math-problem-solving')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('assignment-services.math-problem-solving', compact('service', 'details'));
    }
}
