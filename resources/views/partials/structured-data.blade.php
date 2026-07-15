@php
    $siteUrl = rtrim(config('app.url') ?: url('/'), '/');
    $canonicalUrl = trim($__env->yieldContent('canonical', url()->current()));
    $pageUrl = $canonicalUrl !== '' ? $canonicalUrl : url()->current();
    $pageTitle = trim($__env->yieldContent('title', 'Assignment Help USA | Expert Academic Support'));
    $pageDescription = trim($__env->yieldContent('description', 'Expert academic support and assignment help available 24/7.'));
    $organizationId = $siteUrl . '#organization';
    $websiteId = $siteUrl . '#website';
    $webpageId = rtrim($pageUrl, '/') . '#webpage';

    $graph = [
        [
            '@type' => 'Organization',
            '@id' => $organizationId,
            'name' => 'Assignment Help USA',
            'url' => $siteUrl,
            'logo' => asset('images/logo.png'),
            'description' => 'Professional assignment help and academic support service for students in the United States.',
            'email' => 'support@assignmenthelpusa.com',
            'telephone' => '+1-800-555-0199',
            'areaServed' => [
                '@type' => 'Country',
                'name' => 'United States',
            ],
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'contactType' => 'customer support',
                    'email' => 'support@assignmenthelpusa.com',
                    'telephone' => '+1-800-555-0199',
                    'availableLanguage' => ['English'],
                    'areaServed' => 'US',
                ],
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $websiteId,
            'name' => 'Assignment Help USA',
            'url' => $siteUrl,
            'publisher' => [
                '@id' => $organizationId,
            ],
            'inLanguage' => 'en-US',
        ],
    ];

    $segments = collect(request()->segments())->filter()->values();
    $breadcrumbItems = [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => url('/'),
        ],
    ];

    $path = '';
    foreach ($segments as $index => $segment) {
        $path .= '/' . $segment;

        $breadcrumbItems[] = [
            '@type' => 'ListItem',
            'position' => $index + 2,
            'name' => str($segment)->replace('-', ' ')->title()->toString(),
            'item' => url($path),
        ];
    }

    if ($segments->isNotEmpty()) {
        $graph[] = [
            '@type' => 'BreadcrumbList',
            '@id' => rtrim($pageUrl, '/') . '#breadcrumb',
            'itemListElement' => $breadcrumbItems,
        ];
    }

    $webPage = [
        '@type' => 'WebPage',
        '@id' => $webpageId,
        'url' => $pageUrl,
        'name' => $pageTitle,
        'description' => $pageDescription,
        'isPartOf' => [
            '@id' => $websiteId,
        ],
        'about' => [
            '@id' => $organizationId,
        ],
        'inLanguage' => 'en-US',
    ];

    if ($segments->isNotEmpty()) {
        $webPage['breadcrumb'] = [
            '@id' => rtrim($pageUrl, '/') . '#breadcrumb',
        ];
    }

    $graph[] = $webPage;

    $structuredData = [
        '@context' => 'https://schema.org',
        '@graph' => $graph,
    ];
@endphp

<script type="application/ld+json">
{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>
