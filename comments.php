<?php // Do not delete these lines 
	get_header();
		if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
			die ('Please do not load this page directly. Thanks!');
		if ( post_password_required() ) {
			echo '<p class="nocomments">This post is password protected. Enter the password to view comments.</p>';
		return;
		}

if ( have_comments() ) : ?>	



<!-- comments -->
<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>


	<ul class="commentlist">


		<?php foreach ($comments as $comment) : ?>



			<li class="<?php if (1 == $comment->user_id) $oddcomment = "authcomment"; echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">





    	<div class="commentdata">
    		<div class="gravatar">
			<?php echo get_avatar( $comment, 50 ); ?>
		</div>


    		<div class="author">
			<div class="authorname"><?php comment_author_link() ?></div>
			<div class="authordate"><a href="#comment-<?php comment_ID() ?>"><?php comment_date('F jS, Y') ?> <?php comment_time() ?></a></div>
		</div>

					<div class="clear"></div>
	</div>


    		<div class="commenttexts">
			<?php comment_text() ?>
			<?php if ($comment->comment_approved == '0') : ?>
			<em>Your comment is awaiting moderation.</em>
			<?php endif; ?>




<?php edit_comment_link('Edit Comment','',''); ?> <?php if ($comment->comment_approved == '0') : ?><em><?php _e('Your comment is awaiting moderation.'); ?></em><?php endif; ?>


		</div>




			</li>





			<?php /* Changes every other comment to a different class */
				if ('alt' == $oddcomment) $oddcomment = '';
				else $oddcomment = 'alt';
			?>
		<?php endforeach; /* end for each comment */ ?>
	</ul>


<!-- /comments -->



<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>

<?php endif; ?>






<!-- reply status -->
	<?php if ('open' == $post->comment_status) : ?>
		<div id="respond">
			<h3><?php comment_form_title(); ?></h3>
				<div id="cancel-comment-reply">
					<small><?php cancel_comment_reply_link() ?></small>
				</div>
		</div>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>
<!-- /reply status -->





<!-- comment form -->
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
		<div id="commentform">
			<?php if ( $user_ID ) : ?>
				<p class="instructions">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>
			<?php else : ?>
					<label for="author">Name<?php if ($req) echo "(required)"; ?></label> <br />
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" /> <br />
					<label for="email">Email (will not be published)<?php if ($req) echo "(required)"; ?></label> <br />
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" /> <br />
					<label for="url">Website</label> <br />
					<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" /><br />
			<?php endif; ?>
					<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>
					<label for="comment">Your comment</label><br />
					<textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea><br />
					<button name="submit" type="submit" id="submit" value="Submit Comment">Submit Comment</button>
					<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				<?php comment_id_fields(); ?>
			<?php do_action('comment_form', $post->ID); ?>
		</div>
	</form>
<!-- /comment form -->





<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>