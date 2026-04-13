<?php
/**
 * Royal Desi Crew Theme Functions - Production Ready
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme Setup
add_action('after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
});

// Fix MIME types
add_filter('mime_types', function($mimes) {
    $mimes['css'] = 'text/css';
    $mimes['js'] = 'application/javascript';
    return $mimes;
});

// Load all scripts only (CSS is loaded directly in header.php)
add_action('wp_enqueue_scripts', function() {
    $url = get_template_directory_uri();
    $ver = time();
    
    // Load all JS files in order (photos-loader first)
    wp_enqueue_script('photos-loader', $url . '/assets/js/photos-loader.js', [], $ver, true);
    wp_enqueue_script('gallery-js', $url . '/assets/js/gallery.js', ['photos-loader'], $ver, true);
    wp_enqueue_script('theme-js', $url . '/assets/js/main.js', [], $ver, true);
});

// Add proper script type attributes
add_filter('script_loader_tag', function($tag, $handle) {
    return str_replace('<script ', '<script type="application/javascript" ', $tag);
}, 10, 2);

// Remove favicon request to avoid 404
add_filter('site_icon_url', '__return_false');

// Disable admin bar
add_filter('show_admin_bar', '__return_false');

/**
 * Disable WordPress REST API for security (optional)
 * Uncomment if you don't need REST API
 */
// add_filter('rest_enabled', '__return_false');
// add_filter('rest_jsonp_enabled', '__return_false');
