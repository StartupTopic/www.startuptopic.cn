<?php
/**
 * Template Name: Full-width-service Page
 * Description: A full-width template with no sidebar
 *
 * @package Portfolio Press
 */

get_header(); ?>

	<div id="primary" class="full-width service-page">
		<div id="content" role="main">

			<?php the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title">Let's make up your weakness:
						<ul class="social">
							<li><a target="_blank" class="facebook" href="http://facebook.com/dennyzhang001">Facebook</a></li>
							<li><a target="_blank" class="twitter" href="https://twitter.com/dennyzhang001">Twitter</a></li>
                                                        <li><a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author">Google+</a></li>
							<li><a target="_blank" class="linkedin" href="https://www.linkedin.com/profile/view?id=82039767">LinkedIn</a></li>
							<!--<li><a target="_blank" class="rss" href="./feed/">RSS</a></li>-->
						</ul>

  </h1>
				</header><!-- .entry-header -->
<p style="padding-top: 60px;">Our hourly rate varies around 70$/hr. Get a quote now, and ease your technical headache Today!
				<div class="entry-content">
  <!-- <?php the_content(); ?> -->
<div class="service-wrap">

<h2><span>① </span>DevOps Consultanting</h2>

<p>
Service configuration and tunning: Nginx, Apache, Mysql, Zabbix, etc.<br/>
Configuration management: Puppet, Chef, Rpmbuild, etc.<br/>
CI/CD: Integrate Jenkins and auto test to your working process.
</p>
<p class="get"><a class="button" href="./contact/">Get a Quote</a></p>

<h2><span>② </span>iOS App Total Solution</h2>

<p>
High Quality: We have not only developer resource, but also UI/UX resource.<br/>
Operate: Monitor metrics of users' behavior.<br/>
Promote: Expose your product in our channels(website, newsletter, sns), if suitable.
<br/><br/>
Testimony: <a href="http://www.startuptopic.cn/portfolio">Our portfolio of iOS App</a>
</p>
<p class="get"><a class="button" href="./contact/">Get a Quote</a></p>


<h2><span>③ </span>WordPress Improvement</h2>
<p>
Make your website of wordpress better suite your requirement.<br/>
Performance: speed up the loading of landing page;<br/>
Social: make your website more social to attract more users involvement; <br/>
Mobile: adaptive to mobile users;<br/>
SEO: improvement for search engine optimization.
<br/><br/>
Testimony: <a href="http://www.startuptopic.cn">Our website startuptopic.cn</a>.
<p class="get"><a class="button" href="./contact/">Get a Quote</a></p>

<h2><span>④ </span>UI Consultanting </h2>
<p>
Give you a list of practical suggestions, based on your product's UI and UE.
Lots of stuff my effect your product's user experience, say fonts, color, icon, layout, etc.
</p>
<p class="get"><a class="button" href="./contact/">Get a Quote</a></p>

<h2><span>⑤ </span>Private Cloud by OpenStack</h2>
<p>
Replace Vmware or EC2: Setup OpenStack RDO in your lab environment to reduce your cost;<br/>
Scale: Utilize your local cluster, and auto scale;<br/>
Operate: Try my best to solve openstack problems ahead.
<br/>For issue really too complicated for me, I will refer you to the best resource I know.
</p>
<p class="get"><a class="button" href="./contact/">Get a Quote</a></p>

</div>
  <!-- end content -->
					<?php wp_link_pages( 'before=<div class="page-link">' . __( 'Pages:', 'portfolio-press' ) . '&after=</div>' ); ?>
					<?php edit_post_link( __( 'Edit', 'portfolio-press' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->

			<?php comments_template( '', true ); ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author"></a>
<?php get_footer(); ?>