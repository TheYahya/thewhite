<?php
// Check if post is private 
if ( post_password_required() ) {
	return;
}
?>
	<div id="comments" class="comments-area">

		<?php if ( have_comments() ) : ?>
			<h2 class="comments-title">
				<?=__('Comments');?>
			</h2>

			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      	=> 'ol',
						'per_page'	 	=> 999999, // TODO: should be a better solution
						'avatar_size' 	=> '32',
						'reply_text'	=>  '<span>' . __('Reply') . '</span>',
					) );
				?>
			</ol><!-- .comment-list -->
		<?php endif; // Check for have_comments(). ?>
		
		
			<?php

				$fields =  array(
					'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . $comment_author . '" ' . ' placeholder="' . __( 'Name (Required)' ) . '"/></p>',
					'email'  => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . $comment_author_email . '" ' . ' placeholder="' . __( 'Email (Required)' ) . '"/></p>',
					'url'    => '<p class="comment-form-url"><input id="url" name="url" type="text" value="' . $comment_author_url . '" placeholder="' . __( 'Website' ) . '"/></p>',
				);
				?>
				<?php comment_form( array(
					'fields'			=> apply_filters( 'comment_form_default_fields', $fields ), 
					'logged_in_as' 		=> '<p class="logged-in-as">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
					'title_reply' 		=> __( 'Leave a Reply' ),
					'title_reply_to' 	=> __( 'Leave a Reply to %s'),
					'cancel_reply_link'	=> __( 'Cancel reply'),
					'label_submit' 		=> __( 'Post Comment' ),
					'comment_field' 	=> '<p class="comment-form-comment"><label for="comment"><span class="screen-reader-text"></span></label><textarea id="comment" name="comment" rows="4" aria-required="true" placeholder="' . __( 'Comment (Required)' ) . '"></textarea></p>',
				));
			?>
	</div><!-- #comments -->