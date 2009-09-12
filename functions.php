<?php
/*
This file allows you to create custom PHP functions you can use in your theme. It's basically a WordPress plugin that's loaded when this theme is active. Like most theme files, it's completely optional.

Learn more: <http://codex.wordpress.org/Theme_Development#Theme_Functions_File>
*/


/*

*/
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
?>