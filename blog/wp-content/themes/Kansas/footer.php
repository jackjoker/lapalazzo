<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Kansas
 * @since Kansas 1.0
 */
?>
<div class="clear"></div>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="fcred">
			Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.<br />
		<?php fflink(); ?> | <a href="http://fabthemes.com/<?php echo wp_get_theme(); ?>/" ><?php echo wp_get_theme(); ?> Theme</a> 
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
	</div><!-- #main -->


	<div id="lowedge"></div>
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>