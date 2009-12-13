<?php
/*
 * This file is usually used to hold a sidebar for your theme.
 * It's pulled into other files using the get_sidebar() function.
 * Like most files in your theme, it's optional.
 * If you decide to remove it, make sure to remove get_sidebar() from all the other templates.
 */
?>

<hr />

<div id="sidebar">
	<?php
	/*
	 * Start a dynamic sidebar.
	 * Anything that goes inside of this if statement is used as fallback content.
	 * The fallback content will disappear when you add widgets to your sidebar via the WP admin.
	 * You can see where this sidebar is registered in functions.php.
	 * More: <http://codex.wordpress.org/Function_Reference/dynamic_sidebar>
	*/
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-0') ) : ?>
	<div class="widget">
		<?php get_search_form(); ?>
	</div>
	<div class="widget">
		<h2 class="widget-title">Archives</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
	<div class="widget">
		<h2 class="widget-title">Pages</h2>
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</div>
	<?php endif; // end dynamic sidebar ?>
</div>