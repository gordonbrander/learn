<?php get_header(); ?>

<div id="content">
	
	<h2>Search Results</h2>
	
	<?php get_search_form(); ?>
	
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div>

				<p><small>
					Published on <?php the_time('F jS, Y') ?> in 
					<?php the_category(', ') ?>
					<?php the_tags('and tagged with  ', ', ', ''); ?> &bull;
					<?php edit_post_link('Edit', '', ' &bull; '); ?>
					<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
				</small></p>
				
			</div>

		<?php endwhile; ?>
	<?php else : ?>

		<p>No posts found. Try a different search?</p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>