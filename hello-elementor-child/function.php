<?php
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles' );

function hello_elementor_child_enqueue_styles() {
    // Parent theme ki CSS load karna
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}