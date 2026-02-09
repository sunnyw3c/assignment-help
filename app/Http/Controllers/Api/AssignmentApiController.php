<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Assignment;
use App\Http\Resources\AssignmentResource;

class AssignmentApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Assignment::where('user_id', $request->user()->id);

        if ($request->has('order_number')) {
            $query->where('order_number', $request->order_number);
        }

        $assignments = $query->latest()->get();

        return AssignmentResource::collection($assignments);
    }
}
