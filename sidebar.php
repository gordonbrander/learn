<hr />

<div id="sidebar">
	<?php // Start a dynamic sidebar. Anything that goes inside is used as default content.
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
	<div class="widget">
		<?php get_search_form(); ?>
	</div>
	<div class="widget">
		<h2>Archives</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
	</div>
	<div class="widget">
		<h2>Pages</h2>
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</div>
	<?php endif; // end dynamic sidebar ?>
</div>