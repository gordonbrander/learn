<?php /*

This file displays the page content for the permalinked view of posts and pages. It overrides index.php.
Check out index.php for more info.

*/ ?>

<?php get_header(); // grabs header.php ?>

<div id="content">

<?php
if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="entry-content">
				<?php the_content('Continued&hellip;'); ?>
			</div>

			<p><small>
				Published on <?php the_time('F jS, Y') ?> in 
				<?php the_category(', ') ?>
				<?php the_tags('and tagged with  ', ', ', ''); ?> &bull;
				<?php edit_post_link('Edit', '', ''); ?>
			</small></p>
			
			<?php comments_template(); // grabs comments.php ?>
		</div>

<?php 
	endwhile;
endif; ?>

</div>

<?php get_sidebar(); // grabs sidebar.php ?>
<?php get_footer(); // grabs footer.php ?>