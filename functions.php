<?php

/*
ENQUEUE CHILD THEME STYLE SHEET
'uiuxdallas'
*/
add_action( 'wp_enqueue_scripts', 'enqueue_uiuxdallas_styles' );

function enqueue_uiuxdallas_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri());
}