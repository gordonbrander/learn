<?php
/*
This file allows you to create and run custom PHP functions you can use in your theme. It's essentially a WordPress plugin that's loaded when this theme is active. Like most theme files, it's completely optional.

Learn more: <http://codex.wordpress.org/Theme_Development#Theme_Functions_File>
*/

/*
Automatically output feed autodiscovery links in the <head> through wp_head().
*/
automatic_feed_links();

/*
Register a dynamic sidebar. This tells WordPress that you have a dynamic sidebar you want to use. We'll use this one in sidebar.php.

More here: <http://codex.wordpress.org/Function_Reference/register_sidebar>
*/
register_sidebar(array(
	'name' => 'Sidebar',
	'id' => 'sidebar-0',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
));
?>