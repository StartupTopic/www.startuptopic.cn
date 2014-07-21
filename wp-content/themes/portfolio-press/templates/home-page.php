<?php
/**
 * Template Name: Home Page
 * Description: Home Page fot denny Blog
 *
 * @package Portfolio Press
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--
  _   _              ___ _             ____                         ______                       
 | | | | ___ _   _  |_ _( )_ __ ___   |  _ \  ___ _ __  _ __  _   _|__  / |__   __ _ _ __   __ _ 
 | |_| |/ _ \ | | |  | ||/| '_ ` _ \  | | | |/ _ \ '_ \| '_ \| | | | / /| '_ \ / _` | '_ \ / _` |
 |  _  |  __/ |_| |  | |  | | | | | | | |_| |  __/ | | | | | | |_| |/ /_| | | | (_| | | | | (_| |
 |_| |_|\___|\__, | |___| |_| |_| |_| |____/ \___|_| |_|_| |_|\__, /____|_| |_|\__,_|_| |_|\__, |
             |___/                                            |___/                        |___/ 
-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="author" content="DennyZhang" />
<meta name="copyright" content="startuptopic.cn" />
<meta name="keywords" content="DennyZhang Freelancer Startup iOS skills Promotion Branding" />
<meta name="description" content="Hi there, this is DennyZhang's personal website. A freelancer, a indie iOS developer, a super fan of emacs, a fullstack engineer. The website is supposed to be a classroom for indie developers; a help center for freelancers" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/icon.png' ); ?>" type="image/x-icon">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link type="text/plain" rel="author" href="http://www.startuptopic.cn/humans.txt" />
<link rel="prerender"  href="/portfolio/">
<link rel="prerender"  href="/service/">
<link rel="prerender"  href="/blog/">
<link rel="prerender"  href="/contact/">
<link rel="prefrech" href="/portfolio/" >
<link rel="prefrech" href="/service/" >
<link rel="prefrech" href="/blog/" >
<link rel="prefrech" href="/contact/" >
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() . '/js/html5.js' ); ?>"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

	<header id="branding">
    	<div class="col-width">
        <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
			<hgroup id="logo">
				<<?php echo $heading_tag; ?> id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php if ( of_get_option( 'logo', false) ) { ?>
					<img src="<?php echo esc_url( of_get_option( 'logo' ) ); ?>" alt="<?php echo bloginfo( 'name' ) ?>">
				<?php } else {
					bloginfo( 'name' );
				}?>
                </a>
                </<?php echo $heading_tag; ?>>
				<?php if ( !of_get_option( 'logo', false ) ) { ?>
                	<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php } ?>
			</hgroup>

			<nav id="navigation" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'portfolio-press' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'portfolio-press' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header><!-- #branding -->

	<div id="main">
    	<div class="col-width">
	<div id="primary" class="full-width">
		<section id="top_sns" class="clearfix">
                        <h2>Pave Road From Developer To Entrepreneur</h2>
			<ul class="social">
				<li><a target="_blank" class="facebook" href="http://facebook.com/dennyzhang001">Facebook</a></li>
				<li><a target="_blank" class="twitter" href="https://twitter.com/dennyzhang001">Twitter</a></li>
				<li><a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author">Google+</a></li>
				<li><a target="_blank" class="linkedin" href="https://www.linkedin.com/profile/view?id=82039767">LinkedIn</a></li>
				<!--<li><a target="_blank" class="rss" href="./feed/">RSS</a></li>-->
			</ul>
			<form method="post" action="http://www.startuptopic.cn/" id="mc4wp-form-1" class="form mc4wp-form">
				<p>
					<label for="mc4wp_email">Email address: </label>
					<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Your email address" required="">
					<input type="submit" value="Subscribe" class="newsletter-btn">
				</p>
				<textarea name="_mc4wp_required_but_not_really" style="display: none !important;"></textarea>
				<input type="hidden" name="_mc4wp_form_submit" value="1">
				<input type="hidden" name="_mc4wp_form_instance" value="1">
				<input type="hidden" name="_mc4wp_form_nonce" value="78cf2e18e6">
			</form>
		</section>
		<section id="main_first" class="clearfix">
			<div class="img_box">
				<a href="https://itunes.apple.com/us/app/coderquiz/id853093430?mt=8">
					<img id="home-banner" src="/wp-content/themes/portfolio-press/images/banner.jpg">
				</a>
			</div>
			<aside class="main_rq">
				<h2>About this website</h2>
                                <p>Hi there, I moved from Shanghai to the United States in my late 20s, running a small mobile studio, which is devoted to making wonderful and meaningful mobile apps.</p>
				<p></p>
                <p>Here we <a href="./blog/">keep blogging</a> to share our stories and lessons learned all along our journey. And we also provide <a href="./service/">free/premium services</a> to help quick fix the tedious or tough problems that freelancers/indie developers may encounter.</p>
				<p></p>
				<p><a class="button" href="./contact/">Get in touch</a></p>
			</aside>
		</section>

		<section id="service">
			<h3>A classroom for indie developers; &nbsp; A help center for freelancers<span>Check below</span></h3>
			<ul class="service-item-box">
				<li class="service-item">
					<a href="./blog/"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/services-wheel.png' ); ?>" alt="APP DEVELOPMENT"></a>
					<h4><a href="./blog/">BLOG</a></h4>
					<p>
                As a backend engineer, what a big pain to just avoid your product looking that ugly! When releasing a product, how to draw enough attention from your target users? What are the common mistakes and useful tips when you start your business on your own adventure? </p>
                                                                       <p>&nbsp;</p>
<p>We also suffer that kind of pains deeply! Thus we track and share our thoughts and learning <a href="./blog/">in our blog</a>. </p>
					</p>
				</li>
				<li class="service-item">
					<a href="./service/"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/linux.png' ); ?>" alt="GAME DEVELOPMENT"></a>
					<h4><a href="./service/">SERVICE</a></h4>
					<p>Congratulation! After years of learning and preparing, you've finally started your own business or your own project.
To turn that to be a profitable business, you may definitely run out of time or resource, and most badly out of key experience.
</p>
<p>&nbsp;</p>
<p><a href="./service/">See what we can help you?</a> If you're good enough, we'll charge you a very very low fee, or even for free.
</p>
				</li>
				<li class="service-item">
					<a href="./portfolio/"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/services-archi1.png' ); ?>" alt="SOFTWARE ARCHITECTURE"></a>
					<h4><a href="./portfolio/">PORTFOLIO</a></h4>
					<p>
					Beside maintaining this website, most of the time, we breed or try to breed several interesting mobile apps. They should be either useful or impressive. And we're also super willing to be involved into the discussion of your potential wonderful products.
					</p>
<p>&nbsp;</p>
<p>
Products we have developed or developing are listed <a href="./portfolio/">in the Portfolio page</a>. Feel free to try and comment.
					</p>
				</li>
			</ul>
		</section>
	</div><!-- #primary -->
<a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author"></a>
<?php get_footer(); ?>