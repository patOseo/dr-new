<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div id="wrapper-footer">

	<footer class="site-footer" id="colophon">

		<div class="footer-social py-5 text-light text-center text-md-start">
			<div class="container py-3">
				<div class="row">
					<div class="col-md-3 my-4 my-md-0">
						<img class="mb-3" src="/wp-content/themes/davidoff/images/davidoff-white.png" alt="Davidoff Roofing">
						<p class="text-center h6">London, ON roofing contractors you can trust.</p>
					</div>
					<div class="col-md-3 my-4 my-md-0">
						<p class="h5">Contact Us</p>
						<hr class="divider blue my-3">
						<p><?php the_field('address', 'option'); ?></p>
						<p class="mb-0">Phone: <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
						<p>Email: <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></p>
						<a href="<?php the_field('facebook', 'option'); ?>" target="_blank" rel="noopener,noreferrer">
							<span class="fa-stack fa-2x text-center">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack"></i>
							</span>
						</a>
						<a href="<?php the_field('twitter', 'option'); ?>" target="_blank" rel="noopener,noreferrer">
							<span class="fa-stack fa-2x text-center">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack"></i>
							</span>
						</a>
						<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" rel="noopener,noreferrer">
							<span class="fa-stack fa-2x text-center">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-instagram fa-stack"></i>
							</span>
						</a>
					</div>
					<div class="col-md-3 my-4 my-md-0">
						<p class="h5"><a href="/roofing-services/">Roofing Services</a></p>
						<hr class="divider blue my-3">
						<?php 
						wp_nav_menu(array('theme_location' => 'footer-menu-1'));
						?>
					</div>
					<div class="col-md-3 my-4 my-md-0">
						<p class="h5"><a href="/home-exterior-services/">Home Exterior Services</a></p>
						<hr class="divider blue my-3">
						<?php 
						wp_nav_menu(array('theme_location' => 'footer-menu-2'));
						?>
					</div>
				</div>
			</div>
		</div>

		<div class="site-info">

			<div class="<?php echo esc_attr( $container ); ?>">
		
				<div class="row">
		
					<div class="col-md-12">

								© <?php echo date("Y"); ?> Davidoff Roofing | All Rights Reserved
		
					</div><!--col end -->
		
				</div><!-- row end -->
		
			</div><!-- container end -->

		</div><!-- .site-info -->

	</footer><!-- #colophon -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

