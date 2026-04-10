<?php

namespace App\Http\Controllers;

use App\Models\Service;

class LawAssignmentController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'law-assignment')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('assignment-services.law-assignment', compact('service', 'details'));
    }
}
