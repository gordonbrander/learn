<?php
/*
 * single.php displays the content for the "single", aka "permalinked" view of posts.
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

			<p>
				<small>
					Published by
					<span class="author vcard">
						<b class="fn"><?php the_author(); ?></b>
					</span>
					on
					<abbr class="published" title="<?php the_time('Y-m-d\TH:i'); ?>">
						<?php the_time('F jS, Y') ?>
					</abbr> &bull;
					Categories: <?php the_category(', ') ?> &bull;
					<?php the_tags(' Tags: ', ', ', ' &bull; '); ?>
					<?php edit_post_link('Edit', '', ' &bull; '); ?>
					<?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?>
				</small>
			</p>
			
			<?php comments_template(); // grabs comments.php ?>
		</div>

<?php 
	endwhile;
endif; ?>

</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>