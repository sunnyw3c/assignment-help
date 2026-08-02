<?php

namespace App\Http\Controllers;

class ThesisDissertationController extends Controller
{
    /**
     * Display the master's thesis support page.
     */
    public function thesis()
    {
        return view('thesis-dissertation.thesis');
    }

    /**
     * Display the doctoral dissertation support page.
     */
    public function dissertation()
    {
        return view('thesis-dissertation.dissertation');
    }
}
