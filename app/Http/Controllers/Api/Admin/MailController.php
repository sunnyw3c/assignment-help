<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PromotionalEmail;
use App\Models\MarketingUnsubscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
            'mail_type' => 'sometimes|in:promotional,direct',
            'campaign' => 'sometimes|array',
            'campaign.subject' => ['required_with:campaign', 'string', 'max:150', 'not_regex:/[\r\n]/'],
            'campaign.preheader' => 'nullable|string|max:180',
            'campaign.headline' => 'required_with:campaign|string|max:140',
            'campaign.message' => 'required_with:campaign|string|max:2000',
            'campaign.offer_label' => 'nullable|required_if:mail_type,promotional|string|max:60',
            'campaign.promo_code' => ['nullable', 'prohibited_if:mail_type,direct', 'string', 'max:32', 'regex:/^[A-Za-z0-9_-]+$/'],
            'campaign.cta_text' => 'required_with:campaign|string|max:60',
            'campaign.cta_url' => 'required_with:campaign|url:http,https|max:2048',
            'campaign.accent_color' => ['required_with:campaign', 'regex:/^#[0-9A-Fa-f]{6}$/'],
        ]);

        $campaign = array_merge(
            PromotionalEmail::defaults(),
            $validated['campaign'] ?? [],
        );

        $email = strtolower($validated['email']);
        $mailType = $validated['mail_type'] ?? 'promotional';

        if ($mailType === 'promotional' && MarketingUnsubscribe::where('email', $email)->exists()) {
            return response()->json([
                'message' => 'This recipient has unsubscribed from promotional email.',
            ], 422);
        }

        if (! app()->environment('testing') && ! $this->deliveryIsConfigured()) {
            return response()->json([
                'message' => 'Email delivery is not configured. Set up an authenticated domain mailer before sending.',
            ], 503);
        }

        Mail::to($email)->send(new PromotionalEmail($email, $campaign, $mailType));

        return response()->json([
            'message' => 'Email sent successfully.',
            'subject' => $campaign['subject'],
            'mail_type' => $mailType,
        ]);
    }

    private function deliveryIsConfigured(): bool
    {
        $mailer = (string) config('mail.default');
        $from = strtolower((string) config('mail.from.address'));

        return ! in_array($mailer, ['array', 'log'], true)
            && str_ends_with($from, '@assignmenthelpusa.com');
    }
}
