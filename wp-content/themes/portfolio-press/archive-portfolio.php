<?php
/**
 * This is the default view for portfolio archives.
 *
 * @package Portfolio Press
 */

get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<?php if ( is_tax() || is_category() || is_tag() ) :
				if ( of_get_option( 'archive_titles', true ) ) : ?>
					<header class="archive-header">
						<h1 class="archive-title"><?php echo single_term_title( '', false ); ?></h1>
						<?php $description = term_description();
							if ( ! empty( $description ) ) {
								echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $description . '</div>' );
						} ?>
					</header>
				<?php endif;
			endif;
			?>

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'portfolio' ); ?>

				<?php endwhile; ?>

				<?php portfoliopress_paging_nav(); ?>

			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php if ( !of_get_option( 'portfolio_sidebar' ) )
        get_sidebar(); ?>
<a target="_blank" class="google" href="https://plus.google.com/108512071332553231031?rel=author"></a>
<?php get_footer(); ?>