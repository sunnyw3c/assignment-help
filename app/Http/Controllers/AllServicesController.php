<?php

namespace App\Http\Controllers;

use App\Models\AssignmentService;
use Illuminate\Http\Request;

class AllServicesController extends Controller
{
    /**
     * Display all services - both programming and assignment services.
     */
    public function index()
    {
        // Get programming services from ServiceController
        $serviceController = new ServiceController();
        $programmingServices = $serviceController->getServices();

        // Get assignment services from database
        $assignmentServices = AssignmentService::with('details')
            ->active()
            ->ordered()
            ->get();

        return view('services.index', compact('programmingServices', 'assignmentServices'));
    }
}
