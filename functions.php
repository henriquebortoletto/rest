<?php

function rest_disabled_scripts_header() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}

function register_menu_rest() {
	register_nav_menu( 'header_menu', __( 'Header Menu' ) );
}

add_theme_support( 'menus' );
add_action( 'init', 'rest_disabled_scripts_header' );
add_action( 'init', 'register_menu_rest' );
