<?php /*

This file is the core of your WordPress theme.

index.php and style.css are the only required files for a theme. <http://codex.wordpress.org/Theme_Development#Basic_Templates>

WordPress uses index.php to display the content of the page. You can add special template files that will override it, like search.php, 404.php, archive.php and more: <http://codex.wordpress.org/Template_Hierarchy#Examples>

*/ ?>

<?php get_header(); ?>

<div id="content">

<?php
/*
This is The Loop. It cycles through all the posts and displays them based on the markup you put inside. <http://codex.wordpress.org/The_Loop>
*/
if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

			<div class="entry-content">
				<?php the_content('Continued&hellip;'); ?>
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

	<p class="pagination"><?php posts_nav_link(); ?></p>
	
<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>