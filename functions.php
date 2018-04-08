<?php
/*
	
Functions.php

Add features to your theme:
https://codex.wordpress.org/Theme_Development

Add functions and WordPress hooks and filters:
https://codex.wordpress.org/Plugin_API/#Hooks:_Actions_and_Filters


	
 */

function dev_theme_enqueue_scripts() {
  wp_enqueue_style('dev-theme-stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'dev_theme_enqueue_scripts');

?>
