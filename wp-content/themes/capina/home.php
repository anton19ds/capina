<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.sass).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package capina
 */
get_header();

?>
<?php if (have_posts()) : ?>
    <?php
    /* Start the Loop */
    while (have_posts()) : the_post() ?>
        <?php if (!has_post_thumbnail($post->ID)) : ?><?php endif; ?>
        <?php if (has_post_thumbnail($post->ID)) : ?>
            <?php $images = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "single-post-thumbnail"); ?>
        <?php endif; ?>
        <h3><?php the_title() ?></h3>
        <?php the_content(); 
        ?>
        <?php wp_kses_post(the_excerpt()) ?>
        <?php
        $date = date_create($post->post_date);
        echo date_format($date, 'M d, Y');
        ?>
    <?php endwhile; ?>

    <?php
    $pagination_args = array(
        'prev_next'   => false,
        'before_page_number' => '',
        'mid_size' => 2,
        'end_size' => 2,
    );
    the_posts_pagination($pagination_args);
    ?>
<?php else :
    
endif;
?>
<?php
get_footer();
