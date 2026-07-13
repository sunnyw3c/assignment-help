<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PromotionalEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        Mail::to($request->email)->send(new PromotionalEmail($request->email));

        return response()->json(['message' => 'Email sent successfully.']);
    }
}
