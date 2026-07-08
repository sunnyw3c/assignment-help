<?php

use App\Services\LegacyBusinessService;

it('calculates price using a datetime deadline value', function () {
    $service = new LegacyBusinessService();
    $deadline = now()->addHours(12)->format('Y-m-d\TH:i');

    expect($service->calculatePrice('USD', 2, $deadline))->toBe(50.0);
});
