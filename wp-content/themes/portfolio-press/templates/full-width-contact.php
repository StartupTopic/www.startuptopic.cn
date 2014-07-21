<?php
/**
 * Template Name: Full-width-contact Page
 * Description: A full-width template with no sidebar
 *
 * @package Portfolio Press
 */

get_header(); ?>

	<div id="primary" class="full-width contact-page">
		<div id="content" role="main">

			<?php the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title">
						<?php the_title(); ?>
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
<h3>About Us</h3>

<ul class="team-group clearfix">
	<li class="clearfix">
		<a href="http://weibo.com/dennyzhang001" target="_blank">
		<img class="team-img" src="<?php echo esc_url( home_url() . '/wp-content/themes/portfolio-press/images/denny_2014-0301.png' ); ?>" alt="denny icon"/>
		</a>
		<p><a href="http://weibo.com/dennyzhang001" target="_blank">DennyZhang</a></p>
  <p>Hi I'm <a href="http://weibo.com/dennyzhang001" target="_blank">Denny</a>. <a href="https://github.com/DennyZhang/Denny-s-emacs-configuration">a super fan of emacs</a>, a fullstack engineer.<br/>And I'm also a husband, and a coming father.<br/>Check more about me: <a href="http://docs.google.com/viewer?url=http%3A%2F%2Fwww.dennyzhang.com%2Fwp-content%2Fuploads%2Fdenny%2Fdennyzhang_com.pdf">in my CV</a></p>
		<p>1800 El Paseo Street, Houston TX, 77054<br/>Email: denny.zhang001[at]gmail.com</p>
	</li>
	<li class="clearfix">
		<a href="http://weibo.com/tengfeijs" target="_blank">
			<img class="team-img" src="<?php echo esc_url( home_url() . '/wp-content/themes/portfolio-press/images/tengfei.jpg'); ?>" alt="Tengfei icon"/>
		</a>
		<p><a href="http://weibo.com/tengfeijs" target="_blank">Tengfei Qi</a></p>
		<p>Hi I'm <a href="http://weibo.com/tengfeijs" target="_blank">Tengfei</a>. A front-end engineer in Beijing.<br/>As a co-founder, I'm specialized in UI/UX and SEO.</p>
  <p>Xibeiwang Street, Haidian District, Beijing China, 100094<br/>Email: QitengfeiLove[at]gmail.com</p>
	</li>

<li>
  <div class="map">
<iframe style="float: left; margin-top: 20px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3466.0645935129382!2d-95.3951694!3d29.688906900000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640bff84293451d%3A0x92c683095fcddd19!2sEl+Paseo+St!5e0!3m2!1sen!2sus!4v1399916197247" width="100%" height="450" frameborder="0" style="border:0"></iframe>
  </div>
</li>
</ul>

<p>Contact for a quote or free suggestions. </p>
<?php the_content(); ?>
						                <!-- end content -->
					<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'portfolio-press' ) . '&after=</div>' ); ?>
					<?php edit_post_link( __( 'Edit', 'portfolio-press' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div><!-- #content -->
	</div><!-- #primary -->
<a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author"></a>
<?php get_footer(); ?>