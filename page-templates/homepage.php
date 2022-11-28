<?php
/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<header class="home-header">
	<div class="home-callout">
		<div class="home-heading"><?php the_field('top_heading'); ?></div>
		<div class="home-ctas row">
			<div class="col-md-6"><a href="tel:<?php the_field('phone_number', 'option'); ?>" class="btn btn-lg btn-white"><?php the_field('phone_number', 'option'); ?></a></div>
			<div class="col-md-6"><a href="/book-an-estimate/" class="btn btn-lg btn-white">Book an Estimate</a></div>
		</div>
	</div>
	<div class="video-button" id="watchVideo">
		<img src="/wp-content/themes/davidoff/images/youtube.png" width="94" height="66" alt="Davidoff Roofing on YouTube">
		<p>Watch Video</p>
	</div>
</header>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="container-fluid px-md-0" id="content" tabindex="-1">

		<div class="content-area" id="primary">

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );
				}
				?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div>

	<div class="testimonials-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-quote-left"></i>
					<p><i>An absolutely outstanding company, staff and roofing crew! Brent made the quote process very easy to understand and our quote was quite comprehensive. The office staff was extremely helpful. The crew was very polite, exceedingly accommodating and they went above and beyond the contract we signed! The cost was very reasonable given the scope of the job. Our family highly recommends that anyone considering a roof replacement be sure to give priority consideration to Davidoff Roofing! </i></p>
					<p>– Chris Quinn</p>
				</div>
				<div class="col-md-4">
					<i class="fa fa-quote-left"></i>
					<p><i>The employees of Davidoff Roofing were awesome in installing a new roof at our home. This was under some trying times with daily temps at times in the late 30’s. They kept us informed of their progress and what was to be accomplished daily. Very happy with the finished look of the roof and the clean up each day. They are extremely professional from the estimate to the installation. Thank you guys!!!</i></p>
					<p>– Thomas Norris</p>
				</div>
				<div class="col-md-4">
					<i class="fa fa-quote-left"></i>
					<p><i>Full marks to Davidoff Roofing. The whole process from initial phone call to estimate to replacing our roof and installing a downspout went smoothly. Their knowledge and experience was a great benefit because our roof wasn't a simple tear off and replace. Modifications were required to correct some imperfections in the roof. We would highly recommend Davidoff Roofing.</i></p>
					<p>– Glen Winegarden</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="news-updates">
			<h2>News & Updates</h2>
			<?php get_template_part('loop-templates/loop', 'news'); ?>
		</div>
	</div>

	<div class="container">
		<div class="home-logos">
			<img src="/wp-content/themes/davidoff/images/cca-logos.jpg" alt="Consumer Choice Awards">
		</div>
	</div>

</div><!-- #page-wrapper -->

<div class="bg-primary">
	<div class="container py-5">
		<div class="row text-center text-light">
			<div class="col-12">
			<h2 class="text-light d-block mb-3">Book Your Free Estimate Today and Get Your Project Started</h2>
			<div class="d-block"><a href="/book-an-estimate/" class="btn btn-light btn-lg text-primary">Book an Estimate</a></div>
			</div>
		</div>
	</div>
</div>

<?php if(get_field('json_schema')) { 
	echo get_field('json_schema'); 
} ?>

<div class="video-container">
	<div class="video-close"><i class="fa fa-times"></i></div>
	<div class="video-box">
		<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/KfU2A_kWtgA' frameborder='0' allowfullscreen></iframe></div>
	</div>
</div>
<script>
jQuery(function($){
	$("#watchVideo").click(function(){
		$(".video-container").fadeIn();
	});
	$(".video-close").click(function(){
		$(".video-container").fadeOut();
	});
});
</script>

<?php
get_footer();
