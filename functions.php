<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package My_Custom_Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'MY_CUSTOM_THEME', 'my_custom_theme' );
define( 'THEME_VERSION', '1.0.0' );
define( 'THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Add custom scripts
 */
function my_custom_theme_scripts() {
    wp_enqueue_script('my-custom-theme-script', THEME_URI . 'js/theme-script.js', array(), null, true);
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_scripts' );

/**
 * Add custom style to admin side
 */
function my_custom_admin_styles() {
    wp_enqueue_style('my-admin-style', THEME_URI . '/admin/admin-style.css');
}
add_action('admin_enqueue_scripts', 'my_custom_admin_styles');