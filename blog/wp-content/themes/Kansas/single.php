<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Kansas
 * @since Kansas 1.0
 */

get_header(); ?>
<?php get_sidebar(); ?>
		<div id="primary" class="site-content grid_4">
		<?php get_template_part( 'top', '' ); ?>
			<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			

				<?php get_template_part( 'content', 'single' ); ?>

				<?php kansas_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary .site-content -->


<?php get_footer(); ?>