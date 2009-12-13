<?php
/*
 * search.php displays the content for the search results view.
 * It overrides index.php.
 * See index.php for more info on page templates.
 */
?>

<?php get_header(); ?>

<div id="content">
	
	<h2>Search Results</h2>
	
	<?php get_search_form(); ?>
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<h3 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>

				<p><small>
					Published on <?php the_time('F jS, Y') ?> in 
					<?php the_category(', ') ?>
					<?php the_tags('and tagged ', ', ', ''); ?> &bull;
					<?php edit_post_link('Edit', '', ' &bull; '); ?>
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</small></p>
				
			</div>

		<?php endwhile; ?>
		
		<p class="pagination"><?php posts_nav_link(); ?></p>
		
	<?php else : ?>

		<p>No posts found. Try a different search?</p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>