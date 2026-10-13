<?php

it('renders experts page with server-rendered profiles, 50+ tutors, and schema microdata', function () {
    $response = $this->withoutVite()->get('/experts');

    $response->assertStatus(200);

    // 1. Verify Trust Claims
    $response->assertSee('50+');
    $response->assertSee('Expert Tutors');

    // 2. Verify Server-Side Rendered Cards exist directly in HTML without JS
    $response->assertSee('id="experts-container"', false);
    $response->assertSee('itemscope itemtype="https://schema.org/Person"', false);
    $response->assertSee('Dr. Emily Richardson');
    $response->assertSee('Prof. Michael Thompson');

    // 3. Verify Static Counter (Not 0 of 0)
    $response->assertSee('Showing <span id="showing-count"', false);
    $response->assertDontSee('Showing <span id="showing-count">0</span> of <span id="total-experts">0</span>', false);

    // 4. Verify Embedded Hydration Payload
    $response->assertSee('id="experts-data"', false);
    $response->assertSee('type="application/json"', false);

    // 5. Verify Schema.org E-E-A-T Microdata
    $response->assertSee('"@type": "ItemList"', false);
    $response->assertSee('"name": "Verified Academic Experts & Tutors"', false);
});

it('renders reviews page with server-rendered reviews, aggregate rating, and schema microdata', function () {
    $response = $this->withoutVite()->get('/reviews');

    $response->assertStatus(200);

    // 1. Verify Trust Claims and Aggregate Rating
    $response->assertSee('Student Reviews & Testimonials');
    $response->assertSee('Satisfaction Rate');
    $response->assertSee('Happy Students');
    $response->assertSee('/5');

    // 2. Verify Server-Side Rendered Review Cards exist directly in HTML without JS
    $response->assertSee('id="reviews-container"', false);
    $response->assertSee('itemscope itemtype="https://schema.org/Review"', false);

    // 3. Verify Static Counter (Not 0-0 of 0)
    $response->assertSee('id="showing-start"', false);
    $response->assertSee('id="total-reviews"', false);
    $response->assertDontSee('Showing <span id="showing-start">0</span>-<span id="showing-end">0</span> of <span id="total-reviews">0</span>', false);

    // 4. Verify Embedded Hydration Payload
    $response->assertSee('id="reviews-data"', false);

    // 5. Verify Schema.org E-E-A-T AggregateRating and Review Microdata
    $response->assertSee('"@type": "AggregateRating"', false);
    $response->assertSee('"ratingValue":', false);
});
