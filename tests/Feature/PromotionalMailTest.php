<?php

namespace Tests\Feature;

use App\Mail\PromotionalEmail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PromotionalMailTest extends TestCase
{
    use RefreshDatabase;

    public function test_promotional_mail_has_deliverability_headers_and_visible_unsubscribe_link(): void
    {
        $mail = new PromotionalEmail(
            'student@example.com',
            PromotionalEmail::defaults(),
        );

        $headers = $mail->headers()->text;

        $this->assertSame('List-Unsubscribe=One-Click', $headers['List-Unsubscribe-Post']);
        $this->assertStringContainsString('/mail/unsubscribe/', $headers['List-Unsubscribe']);
        $this->assertStringContainsString('Unsubscribe from promotional emails', $mail->render());
    }

    public function test_one_click_unsubscribe_is_saved_and_idempotent(): void
    {
        $mail = new PromotionalEmail(
            'student@example.com',
            PromotionalEmail::defaults(),
        );
        $url = trim($mail->headers()->text['List-Unsubscribe'], '<>');

        $this->post($url, ['List-Unsubscribe' => 'One-Click'])->assertNoContent();
        $this->post($url, ['List-Unsubscribe' => 'One-Click'])->assertNoContent();

        $this->assertDatabaseCount('marketing_unsubscribes', 1);
        $this->assertDatabaseHas('marketing_unsubscribes', [
            'email' => 'student@example.com',
        ]);
    }

    public function test_direct_service_mail_has_no_promotional_headers_or_content(): void
    {
        $campaign = PromotionalEmail::defaults();
        $campaign['offer_label'] = '';
        $campaign['promo_code'] = '';

        $mail = new PromotionalEmail('student@example.com', $campaign, 'direct');

        $this->assertSame([], $mail->headers()->text);
        $this->assertStringNotContainsString('Unsubscribe from promotional emails', $mail->render());
        $this->assertStringNotContainsString('Special offer', $mail->render());
    }
}
