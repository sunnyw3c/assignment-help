<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Email preferences</title></head>
<body style="margin:0;background:#f4f4f5;font-family:Arial,sans-serif;color:#18181b;">
<main style="max-width:480px;margin:80px auto;padding:32px;background:#fff;border-radius:16px;text-align:center;box-shadow:0 8px 30px rgba(0,0,0,.08);">
    <h1 style="font-size:24px;margin:0 0 12px;">Email preferences</h1>
    @if($alreadyUnsubscribed)
        <p style="color:#52525b;line-height:1.6;">{{ $maskedEmail }} is already unsubscribed from promotional emails.</p>
    @else
        <p style="color:#52525b;line-height:1.6;">Stop promotional emails to {{ $maskedEmail }}? Account and order emails will continue.</p>
        <form method="POST" style="margin-top:24px;">@csrf<button style="border:0;border-radius:10px;background:#d62828;color:#fff;padding:12px 20px;font-weight:700;cursor:pointer;">Unsubscribe</button></form>
    @endif
</main>
</body>
</html>
