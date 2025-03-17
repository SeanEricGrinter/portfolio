<?php

require_once(get_theme_file_path('includes/customizer.php'));

// Custom Editor Styles
add_theme_support('editor-styles');
add_editor_style('styles/editor/header.css');

add_action( 'wp_enqueue_scripts', 'moocopy_enqueue_styles' );

function moocopy_enqueue_styles() {
	wp_enqueue_style(
		'moocopy-style', 
		get_stylesheet_uri()
	);
}