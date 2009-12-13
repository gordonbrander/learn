<?php
/*
 * page.php displays the content for the "single", aka permalinked view of pages.
 * It overrides index.php.
 * See index.php for more info on page templates.
 */
?>

<?php get_header(); ?>

<div id="content">

<?php
if (have_posts()) : 
	while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<h2 class="entry-title"><?php the_title(); ?></h2>

			<div class="entry-content">
				<?php
				the_content('Continued&hellip;');
				wp_link_pages();
				?>
			</div>

		</div>

	<?php endwhile; ?>
	
<?php endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>