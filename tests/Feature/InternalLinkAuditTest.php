<?php

namespace Tests\Feature;

use Database\Seeders\AssignmentServicesSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InternalLinkAuditTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_do_not_link_to_broken_internal_targets(): void
    {
        $this->seed(AssignmentServicesSeeder::class);

        $queue = [
            '/',
            '/services',
            '/sitemap',
            '/sitemap.xml',
            '/order',
            '/login',
            '/register',
            '/forgot-password',
        ];
        $queued = array_fill_keys($queue, true);
        $visited = [];
        $failures = [];

        while ($queue !== []) {
            $path = array_shift($queue);

            if (isset($visited[$path])) {
                continue;
            }

            $visited[$path] = true;

            if (count($visited) > 350) {
                $this->fail('Internal-link crawl exceeded 350 unique targets; check for unbounded URL generation.');
            }

            $response = $this->withoutVite()->get($path);
            $status = $response->getStatusCode();
            view()->flushState();
            app('livewire')->flushState();

            if ($status >= 400) {
                $failures[] = sprintf('%s returned HTTP %d', $path, $status);

                continue;
            }

            if ($status >= 300) {
                $target = $this->normaliseInternalHref($response->headers->get('Location'), $path);

                if ($target !== null && ! isset($queued[$target])) {
                    $queue[] = $target;
                    $queued[$target] = true;
                }

                continue;
            }

            $contentType = (string) $response->headers->get('Content-Type');

            if (! str_contains($contentType, 'text/html')) {
                if ($path === '/sitemap.xml') {
                    preg_match_all('#<loc>([^<]+)</loc>#', $response->getContent(), $matches);

                    foreach ($matches[1] as $href) {
                        $target = $this->normaliseInternalHref(html_entity_decode($href), $path);

                        if ($target !== null && ! isset($queued[$target])) {
                            $queue[] = $target;
                            $queued[$target] = true;
                        }
                    }
                }

                continue;
            }

            $document = new \DOMDocument;
            @$document->loadHTML($response->getContent());

            foreach ($document->getElementsByTagName('a') as $anchor) {
                $href = trim($anchor->getAttribute('href'));
                $target = $this->normaliseInternalHref($href, $path);

                if ($target === null) {
                    continue;
                }

                $targetPath = parse_url($target, PHP_URL_PATH) ?: '/';

                if (str_starts_with($targetPath, '/blog')) {
                    if (! is_file(public_path('blog/index.php'))) {
                        $failures[] = sprintf('%s links to %s, but the blog front controller is missing', $path, $target);
                    }

                    continue;
                }

                $publicTarget = public_path(ltrim(rawurldecode($targetPath), '/'));

                if (pathinfo($targetPath, PATHINFO_EXTENSION) !== '' && is_file($publicTarget)) {
                    continue;
                }

                if (! isset($queued[$target])) {
                    $queue[] = $target;
                    $queued[$target] = true;
                }
            }
        }

        expect(count($visited))->toBeGreaterThanOrEqual(40)
            ->and($failures)->toBe([], "Broken internal links:\n".implode("\n", $failures));
    }

    public function test_blog_theme_does_not_hardcode_broken_site_links(): void
    {
        $this->seed(AssignmentServicesSeeder::class);

        $targets = [];

        foreach (glob(public_path('blog/wp-content/themes/assignmenthelpusa/*.php')) ?: [] as $file) {
            $content = file_get_contents($file);
            preg_match_all('#href=["\'](?:https?://assignmenthelpusa\.test)?(/[^"\']*)["\']#i', $content, $matches);

            foreach ($matches[1] as $target) {
                $targets[$target] = basename($file);
            }
        }

        $failures = [];

        foreach ($targets as $target => $source) {
            $path = parse_url($target, PHP_URL_PATH) ?: '/';

            if (str_starts_with($path, '/blog')) {
                if (! is_file(public_path('blog/index.php'))) {
                    $failures[] = sprintf('%s links to %s, but the blog front controller is missing', $source, $target);
                }

                continue;
            }

            $response = $this->withoutVite()->get($target);
            view()->flushState();
            app('livewire')->flushState();

            if ($response->getStatusCode() >= 400) {
                $failures[] = sprintf('%s links to %s, which returned HTTP %d', $source, $target, $response->getStatusCode());
            }
        }

        expect(count($targets))->toBeGreaterThanOrEqual(15)
            ->and($failures)->toBe([], "Broken blog-theme links:\n".implode("\n", $failures));
    }

    private function normaliseInternalHref(?string $href, string $sourcePath): ?string
    {
        if ($href === null) {
            return null;
        }

        $href = trim(html_entity_decode($href));

        if ($href === '' || str_starts_with($href, '#') || preg_match('#^(mailto|tel|javascript|data):#i', $href)) {
            return null;
        }

        $parts = parse_url($href);

        if ($parts === false) {
            return null;
        }

        $host = strtolower($parts['host'] ?? '');
        $internalHosts = array_filter(array_unique([
            strtolower((string) parse_url(config('app.url'), PHP_URL_HOST)),
            'localhost',
            'assignmenthelpusa.test',
            'assignmenthelpusa.com',
            'www.assignmenthelpusa.com',
        ]));

        if ($host !== '' && ! in_array($host, $internalHosts, true)) {
            return null;
        }

        $path = $parts['path'] ?? '';

        if ($path === '') {
            $path = parse_url($sourcePath, PHP_URL_PATH) ?: '/';
        } elseif (! str_starts_with($path, '/')) {
            $sourceDirectory = rtrim(str_replace('\\', '/', dirname(parse_url($sourcePath, PHP_URL_PATH) ?: '/')), '/');
            $path = ($sourceDirectory === '' ? '' : $sourceDirectory).'/'.$path;
        }

        $segments = [];

        foreach (explode('/', $path) as $segment) {
            if ($segment === '' || $segment === '.') {
                continue;
            }

            if ($segment === '..') {
                array_pop($segments);

                continue;
            }

            $segments[] = $segment;
        }

        $normalised = '/'.implode('/', $segments);

        if (isset($parts['query']) && $parts['query'] !== '') {
            $normalised .= '?'.$parts['query'];
        }

        return $normalised;
    }
}
