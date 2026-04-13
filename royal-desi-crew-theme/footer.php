<?php
/**
 * Footer Template
 * 
 * @package Royal_Desi_Crew
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3><?php bloginfo('name'); ?></h3>
                    <p><?php bloginfo('description'); ?></p>
                </div>
                <div class="footer-section">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('#services')); ?>">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('#gallery')); ?>">Gallery</a></li>
                        <li><a href="<?php echo esc_url(home_url('#packages')); ?>">Packages</a></li>
                        <li><a href="<?php echo esc_url(home_url('#contact')); ?>">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>Email: <a href="mailto:info@royaldesicrew.com">info@royaldesicrew.com</a></p>
                    <p>Phone: <a href="tel:+919614028424">+91 96140 28424</a></p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Robot Button -->
    <div class="whatsapp-robot">
        <button class="robot-button" onclick="window.open('https://wa.me/919614028424')">
            <i class="fab fa-whatsapp"></i>
        </button>
    </div>

    <?php wp_footer(); ?>
</body>
</html>
