<?php
// Enqueue styles
function bookstore_theme_enqueue_styles() {
    wp_enqueue_style( 'bookstore-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'bookstore_theme_enqueue_styles' );

// Theme setup
function bookstore_theme_setup() {
    // Added support for WooCommerce
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'bookstore_theme_setup' );
