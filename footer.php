<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Empty
 */
?>
</div><!-- .row -->
</div><!-- .container -->
</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row">
			<div class="site-info text-center w-100">
				<a href="<?php echo esc_url(__('https://wordpress.org/', 'empty')); ?>">
					<?php /* translators: %s: CMS name, i.e. WordPress. */
					printf(esc_html__('Proudly powered by %s', 'empty'), 'WordPress'); ?>
				</a>
				<span class="sep"> | </span>
				<?php /* translators: 1: Theme name, 2: Theme author. */
				printf(
					esc_html__('Theme: %1$s by %2$s.', 'empty'),
					'empty',
					'<a href="https://github.com/j0lv3r4">Juan Olvera</a>'
				); ?>
			</div><!-- .site-info -->
		</div><!-- .row -->
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>