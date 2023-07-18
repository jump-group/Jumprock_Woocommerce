<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts()
{
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20);

function hello_elementor_child_master_enqueue_scripts()
{
	wp_enqueue_style(
		'hello-elementor-jump-style',
		get_stylesheet_directory_uri() . '/css/style.min.css',
		[
			'hello-elementor-child-style',
		],
		'1.0.0'
	);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_master_enqueue_scripts', 20);

function add_js()
{
	wp_enqueue_script('js-file', get_stylesheet_directory_uri() . '/js/main.js');
}
add_action('init', 'add_js');

add_filter( 'big_image_size_threshold', '__return_false' );

/** Add dots after excerpt in posts widget elementor */
add_filter('excerpt_more', function ($more) {
	return '...';
}, 30);