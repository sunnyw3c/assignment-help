<?php
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

    register_nav_menus([
        'blog_menu' => 'Blog Navigation Menu'
    ]);
}
add_action('after_setup_theme', 'ah_theme_setup');

function ah_widgets_init() {
    register_sidebar([
        'name'          => 'Blog Sidebar',
        'id'            => 'blog-sidebar',
        'before_widget' => '<div class="bg-white rounded-2xl shadow-sm p-6 mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-xl font-bold text-gray-900 mb-4">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'ah_widgets_init');
