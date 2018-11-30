<?php
/**
 * Blogito functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package blogito child
 */

add_action( 'wp_enqueue_scripts', 'blogito_child_enqueue_styles' );

function blogito_child_enqueue_styles() {
    wp_enqueue_style( 'blogito-parent-style', get_template_directory_uri() . '/style.css' );
}
