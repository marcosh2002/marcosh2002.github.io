<?php
/**
 * Index Template - Main theme template file
 * 
 * @package Royal_Desi_Crew
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="container">
    <div class="main-content">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                    </header>
                    
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('No content found.', 'royal-desi-crew'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
