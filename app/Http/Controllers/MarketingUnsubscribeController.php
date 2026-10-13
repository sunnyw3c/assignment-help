<?php

namespace App\Http\Controllers;

use App\Models\MarketingUnsubscribe;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MarketingUnsubscribeController extends Controller
{
    public function show(string $token)
    {
        $email = $this->emailFromToken($token);

        return view('mail.unsubscribe', [
            'maskedEmail' => preg_replace('/(?<=.).(?=[^@]*?@)/', '•', $email),
            'alreadyUnsubscribed' => MarketingUnsubscribe::where('email', $email)->exists(),
        ]);
    }

    public function store(Request $request, string $token)
    {
        $email = $this->emailFromToken($token);

        MarketingUnsubscribe::firstOrCreate(['email' => $email]);

        if ($request->input('List-Unsubscribe') === 'One-Click'
            || $request->header('List-Unsubscribe') === 'One-Click') {
            return response()->noContent();
        }

        return view('mail.unsubscribed');
    }

    private function emailFromToken(string $token): string
    {
        try {
            $email = strtolower(Crypt::decryptString($token));
        } catch (DecryptException) {
            abort(403, 'This unsubscribe link is invalid.');
        }

        abort_unless(filter_var($email, FILTER_VALIDATE_EMAIL), 403);

        return $email;
    }
}
