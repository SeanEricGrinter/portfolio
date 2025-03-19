<?php

require_once(get_theme_file_path('includes/customizer.php'));

// Custom Editor Styles
add_theme_support('editor-styles');
add_editor_style('styles/editor/base.css');
add_editor_style('styles/editor/header.css');
add_editor_style('styles/editor/banner.css');
add_editor_style('styles/editor/welcome.css');

function moocopy_enqueue_styles() {
	// Some base styles for the theme that aren't handled by theme.json
	wp_enqueue_style(
		'moocopy-style', 
		get_stylesheet_uri()
	);

	// Styles for individual pages
}

function moocopy_enqueue_scripts() {
	// JS for the header template
	wp_enqueue_script(
		'moocopy-script-header', 
		get_theme_file_uri() . 'scripts/header.js',
		array('jquery')
	);
}

add_action( 'wp_enqueue_scripts', 'moocopy_enqueue_styles', 'moocopy_enqueue_scripts');