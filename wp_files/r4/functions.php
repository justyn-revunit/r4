<?php
add_action( 'wp_enqueue_scripts', 'r4_enqueue_styles' );
function r4_enqueue_styles() {
    wp_enqueue_style( 'r4', get_template_directory_uri() . '/style.css' );

}
?>