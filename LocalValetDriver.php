<?php

use Valet\Drivers\BasicValetDriver;

class LocalValetDriver extends BasicValetDriver
{
    /**
     * Determine if the driver serves the request.
     */
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return file_exists($sitePath . '/public/index.php');
    }

    /**
     * Determine if the incoming request is for a static file.
     */
    public function isStaticFile(string $sitePath, string $siteName, string $uri)/*: string|false*/
    {
        // Handle WordPress static files
        if (str_starts_with($uri, '/blog/')) {
            $staticFilePath = $sitePath . '/public' . $uri;
            if ($this->isActualFile($staticFilePath)) {
                return $staticFilePath;
            }
        }

        // Handle Laravel static files
        $staticFilePath = $sitePath . '/public' . $uri;
        if ($this->isActualFile($staticFilePath)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Get the fully resolved path to the application's front controller.
     */
    public function frontControllerPath(string $sitePath, string $siteName, string $uri): string
    {
        // WordPress requests
        if (str_starts_with($uri, '/blog')) {

            // Set WordPress environment variables
            $_SERVER['SCRIPT_NAME'] = '/blog/index.php';
            $_SERVER['PHP_SELF'] = $uri;

            // Handle /blog or /blog/ - WordPress home
            if ($uri === '/blog' || $uri === '/blog/') {
                return $sitePath . '/public/blog/index.php';
            }

            // Remove /blog prefix
            $wpUri = substr($uri, 5); // Remove '/blog'

            // Check for direct PHP files (wp-login.php, wp-admin, etc.)
            $filePath = $sitePath . '/public/blog' . $wpUri;
            if (is_file($filePath) && pathinfo($filePath, PATHINFO_EXTENSION) === 'php') {
                return $filePath;
            }

            // Everything else goes to WordPress index.php (for permalinks)
            return $sitePath . '/public/blog/index.php';
        }

        // Laravel requests - use parent behavior
        $_SERVER['PHP_SELF'] = $uri;
        return $sitePath . '/public/index.php';
    }
}
