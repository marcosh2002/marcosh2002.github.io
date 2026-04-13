<?php
/**
 * Royal Desi Crew Theme Functions - Ultra Simple
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

// Load all styles and scripts
add_action('wp_enqueue_scripts', function() {
    $url = get_template_directory_uri();
    
    // Load external CSS first
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', [], '6.4.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Montserrat:wght@300;400;500;600&family=Prata&display=swap');
    
    // Load theme CSS
    wp_enqueue_style('theme-main', $url . '/assets/css/main.css', [], time());
    
    // Load all JS files
    wp_enqueue_script('theme-js', $url . '/assets/js/main.js', [], time(), true);
    wp_enqueue_script('gallery-js', $url . '/assets/js/gallery.js', [], time(), true);
    wp_enqueue_script('loader-js', $url . '/assets/js/photos-loader.js', [], time(), true);
});

// Disable admin bar
add_filter('show_admin_bar', '__return_false');
