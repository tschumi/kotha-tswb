<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'chld_thm_cfg_parent_css' ) ) :
	function chld_thm_cfg_parent_css() {
		wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap-css', 'font-awesome-css', 'slicknav-css' ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

if ( ! function_exists( 'child_theme_configurator_css' ) ) :
	function child_theme_configurator_css() {
		wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'chld_thm_cfg_parent', 'kotha-stylesheet', 'kotha-responsive' ) );
	}
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css' );

// END ENQUEUE PARENT ACTION

// Load translation files from the child theme instead of the parent theme
function my_child_theme_locale() {
	load_child_theme_textdomain( 'kotha', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_locale' );

// Disable Google API for Google Fonts and host it ourself
wp_dequeue_style( 'google-font-open-sans' );
wp_enqueue_style( 'google-font-open-sans', trailingslashit( get_stylesheet_directory_uri() ) . 'google-font-open-sans.css', array(), null );

// Special files doesn't get included automatically
require_once get_stylesheet_directory() . '/inc/template-tags.php';

// Load modified social icons widget
require_once get_stylesheet_directory() . '/inc/widgets/social-icons.php';

// Apply own customizer defaults
require_once get_stylesheet_directory() . '/functions/customizer/customizer_settings.php';
