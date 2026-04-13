<?php
/**
 * Royal Desi Crew Theme Functions - Simplified
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme Setup
function royal_desi_crew_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'royal_desi_crew_setup');

// Enqueue Styles and Scripts
function royal_desi_crew_enqueue_assets() {
    $theme_url = get_template_directory_uri();
    
    // CSS Files
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Montserrat:wght@300;400;500;600&family=Prata&display=swap');
    wp_enqueue_style('main-css', $theme_url . '/assets/css/main.css', array(), '1.0.0');
    
    // JavaScript Files
    wp_enqueue_script('main-js', $theme_url . '/assets/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('gallery-js', $theme_url . '/assets/js/gallery.js', array(), '1.0.0', true);
    wp_enqueue_script('photos-loader-js', $theme_url . '/assets/js/photos-loader.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'royal_desi_crew_enqueue_assets');

// Remove WordPress admin bar
add_filter('show_admin_bar', '__return_false');
