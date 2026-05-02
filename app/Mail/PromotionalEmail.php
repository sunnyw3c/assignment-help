<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class PromotionalEmail extends Mailable
{
    public function __construct(
        public string $recipientEmail
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Special Offer — Get Expert Assignment Help Today'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.promotional',
        );
    }
}
