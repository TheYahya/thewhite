<?php if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!'); ?>
<div id="comments"> 
<h3><?=__('Comments');?></h3>  
<?php  
	$comments = get_comments(array(
		'post_id'=>get_the_ID(), 
		'order'=>'ASC',
	));  
?> 


<?php foreach($comments as $comment){?>  
	<?php 
		if(!$comment->comment_approved && $_SERVER['HTTP_USER_AGENT'] != $comment->comment_agent){
			continue;
		} 
	?>
	<div class="comment" id="comment-<?php echo $comment->comment_ID ?>">
		<div class="head">
		<?php echo get_avatar( $comment, 32 ); ?>
		<?php if($comment->comment_author_url != null){?>
			<span class="comment-author"><a target="blank" href="<?php echo $comment->comment_author_url ?>"><?php echo($comment->comment_author);?></a></span>
		<?php } else {?>
			<span class="comment-author"><?php echo($comment->comment_author);?></span>
		<?php } ?>
		<?php $commentedUserInfo = get_user_by('id', $comment->user_id); ?>
        <?php if ($commentedUserInfo && $commentedUserInfo->caps['administrator']) {
            // if user exists and it's admin, add author label
            echo '<span class="admin-label">' . __('Author') . '</span>';
		} ?>
        <?php if(!$comment->comment_approved && $_SERVER['HTTP_USER_AGENT'] == $comment->comment_agent){?>
			<span class="not-approved-lebel"><?=__("You're comment not approved yet!")?></span>
		<?}?>
		</div>
		<div class="content">
				<?php echo wpautop($comment->comment_content); ?>
		</div>
	</div>   
<?}?>  


<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ($user_ID){ ?>
		<p>نام کاربری شما: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout">خروج »</a></p>
	<?php }else{ ?> 
		<input type="text" name="author" value="<?php echo $comment_author; ?>" placeholder="نام (لازم)"> 
		<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" placeholder="ایمیل (لازم)"> 
		<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" placeholder="آدرس اینترنتی">
	<?php } ?>

	<textarea name="comment" id="comment"   rows="4" tabindex="4" placeholder="<?=__('Comment...')?>"></textarea>
	<div id="send-button-wrapper">
		<input name="submit" type="submit" id="submit" tabindex="5" value="<?=__('Submit comment')?>" />
	</div>
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p> 
</form> 
</div><!--/#comments-->

