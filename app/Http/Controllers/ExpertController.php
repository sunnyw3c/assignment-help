<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        // Experts are loaded from JSON via JavaScript
        return view('experts');
    }
}
