<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Headers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\URL;

class PromotionalEmail extends Mailable
{
    public function __construct(
        public string $recipientEmail,
        public array $campaign = [],
        public string $mailType = 'promotional',
    ) {}

    public static function defaults(): array
    {
        return [
            'subject' => 'Special Offer — Get 20% Off Assignment Help',
            'preheader' => 'Expert academic support is now 20% more affordable.',
            'headline' => 'Save 20% on your next order',
            'message' => 'Get expert help with assignments, essays, research papers, and more — delivered on time, every time.',
            'offer_label' => '20% OFF',
            'promo_code' => 'WELCOME20',
            'cta_text' => 'Claim your discount',
            'cta_url' => rtrim((string) config('app.url'), '/') . '/order',
            'accent_color' => '#e63946',
        ];
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address', 'emma@assignmenthelpusa.com'), config('mail.from.name', 'Emma')),
            subject: $this->campaign['subject'],
            replyTo: [new Address('support@assignmenthelpusa.com', 'Assignment Help USA Support')],
        );
    }

    public function headers(): Headers
    {
        if ($this->mailType !== 'promotional') {
            return new Headers();
        }

        $unsubscribeUrl = URL::temporarySignedRoute(
            'mail.unsubscribe',
            now()->addYears(5),
            ['token' => Crypt::encryptString(strtolower($this->recipientEmail))],
        );

        return new Headers(text: [
            'List-ID' => 'Assignment Help USA Promotions <promotions.assignmenthelpusa.com>',
            'List-Unsubscribe' => '<'.$unsubscribeUrl.'>',
            'List-Unsubscribe-Post' => 'List-Unsubscribe=One-Click',
        ]);
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.promotional',
            text: 'mail.promotional-text',
            with: [
                'campaign' => $this->campaign,
                'mailType' => $this->mailType,
                'unsubscribeUrl' => URL::temporarySignedRoute(
                    'mail.unsubscribe',
                    now()->addYears(5),
                    ['token' => Crypt::encryptString(strtolower($this->recipientEmail))],
                ),
            ],
        );
    }
}
