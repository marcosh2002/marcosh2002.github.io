<?php
/**
 * Header Template
 * 
 * @package Royal_Desi_Crew
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXXXXXX"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-XXXXXXXXXX');
    </script>
    <!-- End Google Analytics -->
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Header Navigation -->
    <header class="header">
        <div class="container">
            <div class="logo-section">
                <div class="logo">
                    <?php
                    if (has_custom_logo()) {
                        echo royal_desi_crew_custom_logo();
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="Royal Desi Crew Logo" class="logo-img">';
                    }
                    ?>
                </div>
            </div>
            <nav class="nav" id="nav-menu">
                <a href="<?php echo esc_url(home_url('#services')); ?>">Services</a>
                <a href="<?php echo esc_url(home_url('#gallery')); ?>">Our Work</a>
                <a href="<?php echo esc_url(home_url('#packages')); ?>">Pricing</a>
                <a href="<?php echo esc_url(home_url('#about')); ?>">About</a>
                <a href="<?php echo esc_url(home_url('#contact')); ?>">Contact</a>
                <button class="nav-book-btn" onclick="openBookingModal()">Book Now</button>
            </nav>
            <!-- Hamburger Menu -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
