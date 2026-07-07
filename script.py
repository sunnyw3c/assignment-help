import re

# Read navbar
with open(r"c:\xampp\htdocs\assignmenthelpusa\resources\views\partials\navbar.blade.php", "r", encoding="utf-8") as f:
    navbar = f.read()

# Replace routes
navbar = re.sub(r"\{\{\s*url\('\/'\)\s*\}\}", "/", navbar)
navbar = re.sub(r"\{\{\s*asset\('([^']+)'\)\s*\}\}", r"/\1", navbar)
navbar = re.sub(r"\{\{\s*route\('services\.programming\.show',\s*'([^']+)'\)\s*\}\}", r"/services/programming/\1", navbar)
navbar = re.sub(r"\{\{\s*route\('services\.assignment\.show',\s*'([^']+)'\)\s*\}\}", r"/services/assignment/\1", navbar)
navbar = re.sub(r"\{\{\s*route\('([^']+)'\)\s*\}\}", r"/\1", navbar)
navbar = re.sub(r"\{\{\s*url\('([^']+)'\)\s*\}\}", r"\1", navbar)

# Replace blade conditionals
navbar = re.sub(r"@guest", "<?php if (!is_user_logged_in()): ?>", navbar)
navbar = re.sub(r"@else", "<?php else: ?>", navbar)
navbar = re.sub(r"@endguest", "<?php endif; ?>", navbar)
navbar = re.sub(r"\{\{ request\(\)->.* \? '(.*?)' : '(.*?)' \}\}", r"<?php echo '\2'; ?>", navbar)
navbar = re.sub(r"@csrf", "", navbar)
navbar = re.sub(r"\{\{.*\}\}", "", navbar) # Catch any other stray braces

header_content = """<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class('bg-gray-100'); ?>>
<div class="min-h-screen flex flex-col">
""" + navbar

with open(r"c:\xampp\htdocs\assignmenthelpusa\public\blog\wp-content\themes\assignmenthelpusa\header.php", "w", encoding="utf-8") as f:
    f.write(header_content)

# Read footer
with open(r"c:\xampp\htdocs\assignmenthelpusa\resources\views\partials\footer.blade.php", "r", encoding="utf-8") as f:
    footer = f.read()

footer = re.sub(r"\{\{\s*asset\('([^']+)'\)\s*\}\}", r"/\1", footer)
footer = re.sub(r"\{\{\s*route\('([^']+)'\)\s*\}\}", r"/\1", footer)
footer = re.sub(r"\{\{\s*url\('([^']+)'\)\s*\}\}", r"\1", footer)
footer = re.sub(r"\{\{\s*date\('Y'\)\s*\}\}", "<?php echo date('Y'); ?>", footer)

footer_content = footer + """
</div>
<?php wp_footer(); ?>
</body>
</html>
"""

with open(r"c:\xampp\htdocs\assignmenthelpusa\public\blog\wp-content\themes\assignmenthelpusa\footer.php", "w", encoding="utf-8") as f:
    f.write(footer_content)

# Create index.php
index_content = """<?php get_header(); ?>
<main class="flex-grow container mx-auto px-4 py-8 max-w-4xl">
    <div class="bg-white rounded-2xl shadow-sm p-8">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="mb-12 border-b border-gray-100 pb-12 last:border-0 last:pb-0">
                    <h2 class="text-3xl font-black text-gray-900 mb-4"><a href="<?php the_permalink(); ?>" class="hover:text-purple-600 transition-colors"><?php the_title(); ?></a></h2>
                    <div class="text-sm text-gray-500 mb-6 flex items-center gap-4">
                        <span>📅 <?php echo get_the_date(); ?></span>
                        <span>✍️ <?php the_author(); ?></span>
                    </div>
                    <div class="prose prose-purple max-w-none prose-img:rounded-xl">
                        <?php the_content('Read More &rarr;'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <div class="flex justify-between mt-8">
                <?php previous_posts_link('&larr; Newer Posts'); ?>
                <?php next_posts_link('Older Posts &rarr;'); ?>
            </div>
        <?php else : ?>
            <p class="text-gray-500">No posts found.</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
"""

with open(r"c:\xampp\htdocs\assignmenthelpusa\public\blog\wp-content\themes\assignmenthelpusa\index.php", "w", encoding="utf-8") as f:
    f.write(index_content)

# Create single.php
single_content = """<?php get_header(); ?>
<main class="flex-grow container mx-auto px-4 py-8 max-w-4xl">
    <div class="bg-white rounded-2xl shadow-sm p-8">
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1 class="text-4xl font-black text-gray-900 mb-4"><?php the_title(); ?></h1>
                <div class="text-sm text-gray-500 mb-8 pb-8 border-b border-gray-100 flex items-center gap-4">
                    <span>📅 <?php echo get_the_date(); ?></span>
                    <span>✍️ <?php the_author(); ?></span>
                </div>
                <div class="prose prose-purple max-w-none prose-lg prose-img:rounded-xl">
                    <?php the_content(); ?>
                </div>
                <div class="mt-12 pt-8 border-t border-gray-100">
                    <?php comments_template(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>
"""

with open(r"c:\xampp\htdocs\assignmenthelpusa\public\blog\wp-content\themes\assignmenthelpusa\single.php", "w", encoding="utf-8") as f:
    f.write(single_content)

# Create functions.php
functions_content = """<?php
function ah_enqueue_assets() {
    $manifest_path = ABSPATH . '../build/manifest.json';
    $hot_path = ABSPATH . '../hot';

    if (file_exists($hot_path)) {
        $dev_server_url = rtrim(file_get_contents($hot_path));
        wp_enqueue_script('vite-client', $dev_server_url . '/@vite/client', [], null, true);
        wp_enqueue_style('ah-style', $dev_server_url . '/resources/css/app.css', [], null);
        wp_enqueue_script('ah-script', $dev_server_url . '/resources/js/app.js', [], null, true);
    } else if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), true);
        if (isset($manifest['resources/css/app.css']['file'])) {
            wp_enqueue_style('ah-style', '/build/' . $manifest['resources/css/app.css']['file'], [], null);
        }
        if (isset($manifest['resources/js/app.js']['file'])) {
            wp_enqueue_script('ah-script', '/build/' . $manifest['resources/js/app.js']['file'], [], null, true);
        }
    }
}
add_action('wp_enqueue_scripts', 'ah_enqueue_assets');

function ah_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'ah_theme_setup');
"""

with open(r"c:\xampp\htdocs\assignmenthelpusa\public\blog\wp-content\themes\assignmenthelpusa\functions.php", "w", encoding="utf-8") as f:
    f.write(functions_content)

print("success")
