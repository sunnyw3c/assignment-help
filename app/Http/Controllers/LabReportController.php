<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LabReportController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'lab-report')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('lab-report.index', compact('service', 'details'));
    }
}
