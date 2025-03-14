<?php

require_once(get_theme_file_path('includes/customizer.php'));
add_action( 'wp_enqueue_scripts', 'moocopy_enqueue_styles' );

function moocopy_enqueue_styles() {
	wp_enqueue_style( 
		'moocopy-style', 
		get_stylesheet_uri()
	);
}