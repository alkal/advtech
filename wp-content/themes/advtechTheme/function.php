<?php
	/* ---------------------------------------------------------------------------
	 * Child Theme URI | DO NOT CHANGE
	 * --------------------------------------------------------------------------- */
	define( 'CHILD_THEME_URI', get_stylesheet_directory_uri() );
	
	/* ---------------------------------------------------------------------------
	 * Enqueue Style
	 * --------------------------------------------------------------------------- */
	add_action( 'wp_enqueue_scripts', 'mfnch_enqueue_styles', 101 );
	function mfnch_enqueue_styles() {
		// Enqueue the parent stylesheet
		// 	wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css' );		//we don't need this if it's empty
			
		// Enqueue the child stylesheet
		wp_dequeue_style( 'style' );
		wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/style.css' );	
	}
?>