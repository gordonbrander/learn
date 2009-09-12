<hr />

<div id="sidebar">
<?php /*
	Start a dynamic sidebar.
	Anything that goes inside of this if statement is used as fallback content. The fallback content can be overridden by adding widgets to this area via the WP admin. */
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