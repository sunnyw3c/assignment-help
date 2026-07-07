<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

url()->forceRootUrl('http://assignmenthelpusa.test');

function process_blade($file_path) {
    $content = file_get_contents($file_path);

    // Strip out Blade comments
    $content = preg_replace('/\{\{\-\-.*?\-\-\}\}/s', '', $content);

    // Replace {{ route(...) }}
    $content = preg_replace_callback('/\{\{\s*route\((.*?)\)\s*\}\}/', function($matches) {
        return eval("return route(" . $matches[1] . ");");
    }, $content);

    // Replace {{ url(...) }}
    $content = preg_replace_callback('/\{\{\s*url\((.*?)\)\s*\}\}/', function($matches) {
        return eval("return url(" . $matches[1] . ");");
    }, $content);

    // Replace {{ asset(...) }}
    $content = preg_replace_callback('/\{\{\s*asset\((.*?)\)\s*\}\}/', function($matches) {
        return eval("return asset(" . $matches[1] . ");");
    }, $content);

    // WordPress Auth replacements
    $content = str_replace('@guest', '<?php if (!is_user_logged_in()): ?>', $content);
    $content = str_replace('@else', '<?php else: ?>', $content);
    $content = str_replace('@endguest', '<?php endif; ?>', $content);
    
    // Remove request()->routeIs(...) ? 'text-purple...' : 'text-gray...'
    // Hardcode the inactive state 'text-gray-700'
    $content = preg_replace('/\{\{\s*request\(\)->.*? \? \'(.*?)\' : \'(.*?)\'\s*\}\}/', '<?php echo \'\2\'; ?>', $content);

    // Remove csrf
    $content = str_replace('@csrf', '', $content);
    
    // Remove date
    $content = str_replace("{{ date('Y') }}", "<?php echo date('Y'); ?>", $content);

    return $content;
}

$navbar = process_blade(__DIR__ . '/resources/views/partials/navbar.blade.php');
$footer = process_blade(__DIR__ . '/resources/views/partials/footer.blade.php');

$header_content = "<!DOCTYPE html>\n<html <?php language_attributes(); ?>>\n<head>\n<meta charset=\"UTF-8\">\n<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n<?php wp_head(); ?>\n</head>\n<body <?php body_class('bg-gray-100'); ?>>\n<div class=\"min-h-screen flex flex-col\">\n" . $navbar;

$footer_content = $footer . "\n</div>\n<?php wp_footer(); ?>\n</body>\n</html>\n";

file_put_contents(__DIR__ . '/public/blog/wp-content/themes/assignmenthelpusa/header.php', $header_content);
file_put_contents(__DIR__ . '/public/blog/wp-content/themes/assignmenthelpusa/footer.php', $footer_content);

echo "WP Theme updated successfully.";
