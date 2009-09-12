<?php
/*
This file contains the logic and markup for the comments and comment form. It's kind of a big hairy mess, but don't be scared off: you can do it!
*/

// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

/* 
Check if the post is password-protected. If it is, show a prompt instead of the comments
*/
if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view comments.</p>
<?php
	return; // return = stop here, don't display the rest of this file.
endif;

/*
If there are any comments, display them along with a header and pagination
*/
if ( have_comments() ) : ?>

	<h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="pagination">
		<?php previous_comments_link() ?>
		<?php next_comments_link() ?>
	</div>

<?php endif; // end if have_comments

/*
Is commenting open? If it is, show the comment form.
*/
if ( comments_open() ) : ?>

	<div id="respond">

		<h4><?php comment_form_title( 'Leave a Reply', 'Leave a Reply to %s' ); ?></h4>
		<small><?php cancel_comment_reply_link(); ?></small>

	<?php // Is the user required to log in to post? If so, show a prompt.
	if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
	<?php // ...otherwise, show the comment form.
	else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

		<?php // Are they logged in?
		if ( is_user_logged_in() ) : ?>

			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

		<?php // ...no? then let's show a simple identity form
		else : ?>

			<p>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label>
			</p>

			<p>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label>
			</p>

			<p>
				<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
				<label for="url"><small>Website</small></label>
			</p>

		<?php endif; ?>

			<p>
				<textarea name="comment" id="comment" cols="82" rows="10" tabindex="4"></textarea>
			</p>

			<p>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Post Comment" />
			</p>
<?php 
			// These two functions do some hidden-field voodoo so WordPress understands where the comment came from, where it's going, etc. Don't take them out!
			comment_id_fields();
			do_action('comment_form', $post->ID);
?>
		</form>
	<?php endif; // end if registration required and not logged in ?>
	
	</div>

<?php // If comments aren't open, show a message instead of the comment form
else: ?>
	
	<p>Comments are closed.</p>
	
<?php endif; // end if commenting is open ?>