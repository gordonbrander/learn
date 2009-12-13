<?php
/*
 * 404.php displays the content 404 pages
 * 404 is the "missing" page that will be served to a user when the URL they go to doesn't exist.
 * It overrides index.php.
 * See index.php for more info on page templates.
 */
?>

<?php get_header(); ?>

	<div id="content">

		<h2>Page not found <small>(Error 404)</small></h2>
		
		<p>Sorry, we couldn&rsquo;t find the page you were looking for.</p>
		
		<p><a href="<?php bloginfo('url'); ?>">&larr; go back home</a></p>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>