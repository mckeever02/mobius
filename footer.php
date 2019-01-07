<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penrose
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-dark py-4 text-white">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3">
				<?php
					the_custom_logo();
				?>
				</div>
				<div class="col-12 col-md-9">
					<?php 
					wp_nav_menu([
						'theme_location'  => 'menu-1',
						'container'       => 'div',
						'container_id'    => '',
						'container_class' => '',
						'menu_id'         => 'primary-menu',
						'menu_class'      => 'list list-unstyled',
						'depth'           => 2
					]);
					?>
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
