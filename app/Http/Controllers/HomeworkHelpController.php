<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeworkHelpController extends Controller
{
    public function index()
    {
        $service = Service::with('details')
            ->where('slug', 'homework-help')
            ->where('is_active', true)
            ->firstOrFail();

        $details = $service->details;

        return view('homework-help.index', compact('service', 'details'));
    }

    public function math()
    {
        $service = Service::with('details')
            ->where('slug', 'homework-help')
            ->where('is_active', true)
            ->firstOrFail();

        return view('homework-help.math', compact('service'));
    }

    public function nursing()
    {
        $service = Service::with('details')
            ->where('slug', 'homework-help')
            ->where('is_active', true)
            ->firstOrFail();

        return view('homework-help.nursing', compact('service'));
    }

    public function physics()
    {
        $service = Service::with('details')
            ->where('slug', 'homework-help')
            ->where('is_active', true)
            ->firstOrFail();

        return view('homework-help.physics', compact('service'));
    }
}
