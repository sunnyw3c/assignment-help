<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Offer — Assignment Help Online</title>
</head>
<body style="margin:0;padding:0;background-color:#f4f4f7;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f7;padding:40px 0;">
    <tr>
        <td align="center">
            <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;">

                {{-- Header --}}
                <tr>
                    <td style="background:linear-gradient(135deg,#4f46e5,#7c3aed);border-radius:12px 12px 0 0;padding:32px 40px;text-align:center;">
                        <h1 style="margin:0;color:#ffffff;font-size:22px;font-weight:700;letter-spacing:-0.3px;">
                            Assignment Help Online
                        </h1>
                        <p style="margin:6px 0 0;color:rgba(255,255,255,0.75);font-size:13px;">
                            Expert Academic Assistance
                        </p>
                    </td>
                </tr>

                {{-- Body --}}
                <tr>
                    <td style="background:#ffffff;padding:36px 40px;">

                        <p style="margin:0 0 16px;font-size:16px;color:#374151;line-height:1.6;">
                            Hi there,
                        </p>

                        <p style="margin:0 0 16px;font-size:15px;color:#4b5563;line-height:1.7;">
                            We have a <strong style="color:#4f46e5;">special offer</strong> just for you! Get expert help with your assignments, essays, research papers, and more — delivered on time, every time.
                        </p>

                        <p style="margin:0 0 24px;font-size:15px;color:#4b5563;line-height:1.7;">
                            Our team of qualified writers is ready to tackle any subject — from programming and mathematics to law and literature. Quality work, guaranteed.
                        </p>

                        {{-- Offer box --}}
                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                            <tr>
                                <td style="background:#f5f3ff;border:1px solid #e0d9ff;border-radius:10px;padding:20px 24px;text-align:center;">
                                    <p style="margin:0 0 4px;font-size:13px;color:#7c3aed;font-weight:600;text-transform:uppercase;letter-spacing:0.5px;">
                                        Limited Time Offer
                                    </p>
                                    <p style="margin:0 0 4px;font-size:28px;font-weight:700;color:#4f46e5;">
                                        20% OFF
                                    </p>
                                    <p style="margin:0;font-size:13px;color:#6b7280;">
                                        on your first order. Use code <strong style="color:#4f46e5;">WELCOME20</strong>
                                    </p>
                                </td>
                            </tr>
                        </table>

                        {{-- What we offer --}}
                        <p style="margin:0 0 12px;font-size:14px;font-weight:600;color:#111827;">What we offer:</p>
                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                            @foreach(['Essay & Research Paper Writing', 'Programming & Coding Assignments', 'Mathematics & Science Problems', 'Law & Case Study Assignments', 'Proofreading & Editing', '24/7 Support & On-Time Delivery'] as $item)
                            <tr>
                                <td style="padding:5px 0;font-size:14px;color:#4b5563;">
                                    <span style="color:#4f46e5;font-weight:700;margin-right:8px;">✓</span> {{ $item }}
                                </td>
                            </tr>
                            @endforeach
                        </table>

                        {{-- CTA Button --}}
                        <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
                            <tr>
                                <td align="center">
                                    <a href="{{ config('app.url') }}/order"
                                       style="display:inline-block;background:linear-gradient(135deg,#4f46e5,#7c3aed);color:#ffffff;font-size:15px;font-weight:600;text-decoration:none;padding:14px 36px;border-radius:8px;">
                                        Place Your Order Now →
                                    </a>
                                </td>
                            </tr>
                        </table>

                        <p style="margin:0;font-size:13px;color:#9ca3af;line-height:1.6;">
                            Have questions? Reply to this email or visit
                            <a href="{{ config('app.url') }}" style="color:#4f46e5;text-decoration:none;">{{ config('app.url') }}</a>
                        </p>

                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td style="background:#f9fafb;border-top:1px solid #e5e7eb;border-radius:0 0 12px 12px;padding:20px 40px;text-align:center;">
                        <p style="margin:0;font-size:12px;color:#9ca3af;line-height:1.6;">
                            © {{ date('Y') }} Assignment Help Online. All rights reserved.<br>
                            You are receiving this email because you signed up at our platform.
                        </p>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

</body>
</html>
