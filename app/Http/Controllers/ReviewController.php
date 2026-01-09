<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Reviews are loaded from JSON via JavaScript
        return view('reviews');
    }
}
