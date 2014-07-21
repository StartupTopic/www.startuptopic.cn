<?php
/**
 * The template used for displaying comments
 *
 * @package Portfolio Press
 */
 ?>

	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<div class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'portfolio-press' ); ?></div>
	</div><!-- .comments -->
	<?php return;
		endif;
	?>

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3 id="comments-title">
			<?php
			    printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'portfolio-press' ),
			        number_format_i18n( get_comments_number() ), '<em>' . get_the_title() . '</em>' );
			?>
			<ul class="social">
				<li><a target="_blank" class="facebook" href="http://facebook.com/dennyzhang001">Facebook</a></li>
				<li><a target="_blank" class="twitter" href="https://twitter.com/dennyzhang001">Twitter</a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author">Google+</a></li>
				<li><a target="_blank" class="linkedin" href="https://www.linkedin.com/profile/view?id=82039767">LinkedIn</a></li>
				<!--<li><a target="_blank" class="rss" href="./feed/">RSS</a></li>-->
			</ul>
		</h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-above">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'portfolio-press' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'portfolio-press' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'portfolio-press' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<ol class="commentlist">
			<?php wp_list_comments(array('avatar_size'=>50)); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below">
			<h1 class="screen-reader-text"><?php _e( 'Comment navigation', 'portfolio-press' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'portfolio-press' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'portfolio-press' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->