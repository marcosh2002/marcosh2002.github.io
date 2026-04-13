<?php
/**
 * Royal Desi Crew Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function royal_desi_crew_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'royal-desi-crew'),
    ));
}
add_action('after_setup_theme', 'royal_desi_crew_setup');

/**
 * Enqueue Stylesheets and Scripts
 */
function royal_desi_crew_enqueue_scripts() {
    $theme_url = get_template_directory_uri();
    
    // Main CSS
    wp_enqueue_style('royal-desi-crew-main', $theme_url . '/assets/css/main.css', array(), '1.0.0');
    wp_enqueue_style('royal-desi-crew-gallery', $theme_url . '/assets/css/gallery.css', array(), '1.0.0');
    
    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800&family=Montserrat:wght@300;400;500;600&family=Prata&display=swap', array(), null);
    
    // Main JS
    wp_enqueue_script('royal-desi-crew-main', $theme_url . '/assets/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('royal-desi-crew-gallery', $theme_url . '/assets/js/gallery.js', array(), '1.0.0', true);
    wp_enqueue_script('royal-desi-crew-photos-loader', $theme_url . '/assets/js/photos-loader.js', array(), '1.0.0', true);
    
    // Localize script for AJAX
    wp_localize_script('royal-desi-crew-main', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'theme_url' => $theme_url,
        'site_url' => site_url(),
    ));
}
add_action('wp_enqueue_scripts', 'royal_desi_crew_enqueue_scripts');

/**
 * Register Admin AJAX for Email Sending
 */
add_action('wp_ajax_send_booking_email', 'send_booking_email');
add_action('wp_ajax_nopriv_send_booking_email', 'send_booking_email');

function send_booking_email() {
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'booking_nonce')) {
        wp_send_json_error('Security check failed');
    }
    
    // Your EmailJS configuration
    wp_send_json_success('Email will be sent via EmailJS');
}

/**
 * Custom Logo Support
 */
function royal_desi_crew_custom_logo() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $html = sprintf(
        '<a href="%1$s" class="custom-logo-link" rel="home">%2$s</a>',
        esc_url(home_url('/')),
        wp_get_attachment_image($custom_logo_id, 'full')
    );
    return $html;
}

/**
 * Remove WordPress admin bar for front-end
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Security Headers
 */
function royal_desi_crew_security_headers() {
    header('X-UA-Compatible: IE=latest');
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
}
add_action('wp_head', 'royal_desi_crew_security_headers');

/**
 * Disable WordPress REST API for security (optional)
 * Uncomment if you don't need REST API
 */
// add_filter('rest_enabled', '__return_false');
// add_filter('rest_jsonp_enabled', '__return_false');
