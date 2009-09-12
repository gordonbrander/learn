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
Register a dynamic sidebar. This tells WordPress that you have a dynamic sidebar you want to use. We'll use this one in sidebar.php. More here: <http://codex.wordpress.org/Function_Reference/register_sidebar>
*/
register_sidebar(
	array(
		'name' => 'Sidebar',
		'id' => 'sidebar-0',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	)
);

/*
Say hello to a WordPress hook. These guys are a really important part of WordPress, because they allow you to add things to the theme without changing the actual theme code.

We're going to add a pingback discovery link for pingback servers.

First, we create a function:
*/
function gbl_render_pingback_link() {
	echo '<link rel="pingback" href="' . get_bloginfo('pingback_url') . '" />';
}
/*
Here's where the magic happens. add_action is a WordPress function that lets you "hook" into different named areas. We'll hook into wp_head, which means this function will get run where the wp_head() tag is (in the <head> tag in header.php).

Learn more:
<http://codex.wordpress.org/Plugin_API/Action_Reference/wp_head>
<http://codex.wordpress.org/Plugin_API>
*/
add_action('wp_head','gbl_render_pingback_link');

?>