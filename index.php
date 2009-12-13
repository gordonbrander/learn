<?php
/*
 * index.php is the core of your WordPress theme.
 * WordPress uses index.php to display the content of the page.
 * You can add special template files that will override it, like search.php, 404.php, archive.php and more: <http://codex.wordpress.org/Template_Hierarchy#Examples>
 * index.php and style.css are the only required files for a theme. <http://codex.wordpress.org/Theme_Development#Basic_Templates>
 */
?>

<?php get_header(); ?>

<div id="content">

<?php
/*
 * This is The Loop.
 * It loops over all the posts and displays them (that's why its called the loop)
 * The way a post displays is based on the markup you put inside of the Loop. 
 * More: <http://codex.wordpress.org/The_Loop>
 */
if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

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