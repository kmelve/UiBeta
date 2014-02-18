<?php
/*
The comments page for joints
*/

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
  	<div class="alert help label alert">
    	<p class="nocomments"><?php _e("Dette innlegget er verna med eit passord (spanande!). Du må knaste inn dét for å få ta del i hemmelegheita.", "jointstheme"); ?></p>
  	</div>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments" class="h2"><?php comments_number(__('<span>Ingen</span> diskusjon', 'jointstheme'), __('<span>Eit</span> innlegg', 'jointstheme'), _n('<span>%</span> Response', '<span>%</span> innlegg', get_comments_number(),'jointstheme') );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

	
	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=joints_comments'); ?>
	</ol>
	
  
	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
    	<!-- If comments are open, but there are no comments. -->

	<?php else : // comments are closed ?>
	
	<!-- If comments are closed. -->
	<!--p class="nocomments"><?php _e("Me har stengt for kommentarar. Sikkert med ein god grunn.", "jointstheme"); ?></p-->

	<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="respond-form">

	<h3 id="comment-form-title" class="h2"><?php comment_form_title( __('Kva du trur?', 'jointstheme'), __('Skriv ein kommentar til %s', 'jointstheme' )); ?></h3>

	<div id="cancel-comment-reply">
		<p class="small"><?php cancel_comment_reply_link(); ?></p>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
  	<div class="alert help">
  		<p><?php printf( __('You must be %1$slogged in%2$s to post a comment.', 'jointstheme'), '<a href="<?php echo wp_login_url( get_permalink() ); ?>">', '</a>' ); ?></p>
  	</div>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<?php if ( is_user_logged_in() ) : ?>

	<p class="comments-logged-in-as"><?php _e("Pålogga som", "jointstheme"); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Logg ut av denne brukarkontoen", "jointstheme"); ?>"><?php _e("Logg ut", "jointstheme"); ?> <?php _e("&raquo;", "jointstheme"); ?></a></p>

	<?php else : ?>
	
	<ul id="comment-form-elements" class="clearfix">
		
		<li>
		  <label for="author"><?php _e("Namn", "jointstheme"); ?> <?php if ($req) _e("(required)"); ?></label>
		  <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e('Ditt namn*', 'jointstheme'); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		</li>
		
		<li>
		  <label for="email"><?php _e("Epost", "jointstheme"); ?> <?php if ($req) _e("(required)"); ?></label>
		  <input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e('Din epost*', 'jointstheme'); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		  <small><?php _e("(Slapp av, me røpar ikkje epost-adressa di. )", "jointstheme"); ?></small>
		</li>
		
		<li>
		  <label for="url"><?php _e("Nettsted", "jointstheme"); ?></label>
		  <input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e('Har du ein nettstad du vil lenka til?', 'jointstheme'); ?>" tabindex="3" />
		</li>
		
	</ul>

	<?php endif; ?>
	
	<p><textarea name="comment" id="comment" placeholder="<?php _e('Skriv kva du har på hjarte...', 'jointstheme'); ?>" tabindex="4"></textarea></p>
	
	<p>
	  <input name="submit" type="submit" id="submit" class="button" tabindex="5" value="<?php _e('Send inn', 'jointstheme'); ?>" />
	  <?php comment_id_fields(); ?>
	</p>
	
	<?php do_action('comment_form', $post->ID); ?>
	
	</form>
	
	<?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>
