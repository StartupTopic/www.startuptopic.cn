<?php
/**
 * Template Name: Full-width-portfolio-denny Page
 * Description: A full-width template with no sidebar
 *
 * @package Portfolio Press
 */

get_header(); ?>

	<div id="primary" class="full-width">
		<div id="content" role="main">

			<?php the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?>
						<ul class="social">
							<li><a target="_blank" class="facebook" href="http://facebook.com/dennyzhang001">Facebook</a></li>
							<li><a target="_blank" class="twitter" href="https://twitter.com/dennyzhang001">Twitter</a></li>
                                                        <li><a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author">Google+</a></li>
							<li><a target="_blank" class="linkedin" href="https://www.linkedin.com/profile/view?id=82039767">LinkedIn</a></li>
							<!--<li><a target="_blank" class="rss" href="./feed/">RSS</a></li>-->
						</ul>
  </h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
  <!-- <?php the_content(); ?> -->
                    
<a href="https://itunes.apple.com/us/app/coderquiz/id853093430?mt=8" target="_blank"><img class="alignnone coderquiz-icon size-full wp-image-607" alt="icon" src="<?php echo esc_url( home_url() . '/wp-content/uploads/2014/04/icon1.png');?>" width="300" height="300" /></a>
<p>
<b><span style="text-decoration: underline;">CoderQuiz</span></b> targets to sharp coders' skills by questions and quiz.
</p>

<p>It collects technical puzzles by all means, rate and classify them, then deliver by mobile.</p>
<p>
<a href="https://itunes.apple.com/us/app/coderquiz/id853093430?mt=8">
    <img alt="coderquiz in appstore" src="<?php echo esc_url( home_url() . '/wp-content/themes/portfolio-press/images/appstorebadge.png');?>"/>
</a>
</p>

<img class="content-img alignnone size-medium wp-image-651" alt="960_guide3@2x" src="<?php echo esc_url( home_url() . '/wp-content/uploads/2014/04/1136_guide3@2x.png');?>" width="216" height="300" />
<img class="content-img alignnone size-medium wp-image-651" alt="3.png" src="<?php echo esc_url( home_url() . '/wp-content/uploads/2014/04/3.png');?>" width="216" height="300" />
<img class="content-img alignnone size-medium wp-image-651" alt="5.png" src="<?php echo esc_url( home_url() . '/wp-content/uploads/2014/04/5-198x300.png');?>" width="216" height="300" />

</p>

					<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'portfolio-press' ) . '&after=</div>' ); ?>
					<?php edit_post_link( __( 'Edit', 'portfolio-press' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php comments_template( '', true ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author"></a>
<?php get_footer(); ?>