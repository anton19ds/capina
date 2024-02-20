<?php
/**
 * Capina
 *
 *
 * @package Capina
 * @since Capina 1.0
 */

/**
 * Register block styles.
 */

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
    wp_enqueue_style( 'vendor',  get_stylesheet_directory_uri() .'/css/vendor.css' );
	wp_enqueue_style( 'main',  get_stylesheet_directory_uri() .'/css/main.css' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );
}