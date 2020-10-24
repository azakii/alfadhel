<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
				
				<section class="no_padding content_wrap">
					<div class="container">
						<div class="row">
							<div class="comments_wrap">
								<div id="comments" class="comments_list_wrap">
										<h2 id="comments"  class="section_title comments_list_title"><?php comments_number('No Comments', '1 Comment', '% Comment' );?></h2>

									<ul class="comments_list">
										<?php wp_list_comments(); ?>
									</ul>
									<div class="comments_pagination">
									<div class="alignleft"><?php previous_comments_link() ?></div>
									<div class="alignright"><?php next_comments_link() ?></div>
									</div>
									<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments Closed</p>

	<?php endif; ?>
<?php endif; ?>
								</div>
								<div class="no_padding content_wrap">
								<div class="comments_form_wrap">
									<h2 class="section_title comments_form_title"><?php comment_form_title( 'Add Comment' ); ?></h2>
									<div class="comments_wrap">
									<?php if ('open' == $post->comment_status) : ?>

										<div id="respond" class="comment-respond">
											<h3 id="reply-title" class="comment-reply-title">
											<small>
												<a rel="nofollow" id="cancel-comment-reply-link" href="#respond"><?php cancel_comment_reply_link(); ?></a>
											</small>
											</h3>
											<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="comment-form">
											<?php if ( $user_ID ) : ?>
											<p>You Already Registed By <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">LogOut &raquo;</a></p>
											<?php else : ?>
												<p class="comments_notes">Your email address will not be published. Required fields are marked *</p>
												<div class="columns_wrap">
													<div class="comments_field comments_author column-1_2">
														<label for="author" class="required">Name</label>
														<input id="author" name="author" type="text" placeholder="Name *" value="<?php echo $comment_author; ?>" size="30" aria-required="true">
													</div>
													<div class="comments_field comments_email column-1_2">
														<label for="email" class="required">Email</label>
														<input id="email" name="email" type="text" placeholder="Email *" value="<?php echo $comment_author_email; ?>" size="30" aria-required="true">
													</div>
													<div class="comments_field comments_site column-1_1">
														<label for="url" class="optional">Website</label>
														<input id="url" name="url" type="text" placeholder="Website" value="<?php echo $comment_author_website; ?>" size="30" aria-required="true">
													</div>
												</div>
												<div class="comments_field comments_message">
													<label for="comment" class="required">Your Message</label>
													<textarea id="comment" name="comment" placeholder="Comment" aria-required="true"></textarea>
												</div>
												<p class="form-submit">
													<input name="submit" type="submit" id="send_comment" class="submit" value="Post Comment">
													<input type="hidden" name="comment_post_ID" value="553" id="comment_post_ID">
													<input type="hidden" name="comment_parent" id="comment_parent" value="0">
													<?php comment_id_fields(); ?>

												</p>
												<?php do_action('comment_form', $post->ID); ?>

											</form>
											<?php endif; // If registration required and not logged in ?>

										</div>
										<?php endif; // if you delete this the sky will fall on your head ?>

									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</section>	
				
