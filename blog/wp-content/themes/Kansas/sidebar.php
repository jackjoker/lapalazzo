<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Kansas
 * @since Kansas 1.0
 */
?>
		<div id="secondary" class="widget-area grid_2 alpha" role="complementary">
	

			
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			
				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Archives', 'kansas' ); ?></h1>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h1 class="widget-title"><?php _e( 'Meta', 'kansas' ); ?></h1>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
			<?php include (TEMPLATEPATH . '/sponsors.php'); ?>
		</div><!-- #secondary .widget-area -->
