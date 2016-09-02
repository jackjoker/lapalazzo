<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Kansas
 * @since Kansas 1.0
 */

get_header(); ?>

<?php get_sidebar(); ?>
		<div id="primary" class="site-content grid_4">
		<?php get_template_part( 'top', '' ); ?>
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'kansas' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<img src="<?php echo get_template_directory_uri(); ?>/images/404.gif">
				
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kansas' ); ?></p>

				
				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->

		</div><!-- #content -->
	</div><!-- #primary .site-content -->

<?php get_footer(); ?>