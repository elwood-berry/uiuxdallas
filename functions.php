<?php

/*
ENQUEUE CHILD THEME STYLE SHEET
Run the css for child theme, 'uiuxdallas', last. 
*/
add_action( 'wp_enqueue_scripts', 'enqueue_uiuxdallas_styles', 11 );

function enqueue_uiuxdallas_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri());
}