<?php /*

This file displays the content for the permalinked view of pages. It overrides index.php.
Check out index.php for more info.

*/ ?>

<?php get_header(); ?>

<div id="content">

<?php
if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="entry-content">
				<?php the_content('Continued&hellip;'); ?>
			</div>

		</div>

	<?php endwhile; ?>
	
<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>