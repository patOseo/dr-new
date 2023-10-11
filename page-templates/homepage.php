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

			<main class="site-main mb-0" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );
				}
				?>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div>

	<div class="testimonials-section mt-0">
		<div class="container">


<?php
$testimonials = array(
	array(
		'name' => 'Karolina V.',
		'body' => 'Dealing with Davidoff roofing from initial inquiry through the decision process, and the installation process was an absolute pleasure. They are professional, customer centered, and highly quality oriented. Davidoff roofing surpassed our expectations for this project. We highly recommend this company. We look forward to working with them on other projects.',
	),
	array(
		'name' => 'Emily M.',
		'body' => 'We are thrilled with our new roof and the excellent service that we received from the Davidoff team. The crews were professional, friendly, had a fine attention to detail and were always willing to answer any questions that we had. We learned a lot about roofing and our home throughout the process. Our neighbours were also extremely impressed by the cleanliness of the work site  and the extra effort that went into safe work practices.',
	),
	array(
		'name' => 'Brent',
		'body' => 'From the initial contact to final completion, the staff at Davidoff were very friendly and professional.  The job site was left clean at the end of each day. Davidoff did what they said they would do, using the quality materials they said they would use, and charged what they said they would charge.  We were very happy with a job well done.',
	)

);
?>

<div class="testimonials-block">
	<p class="h2 text-center w-100 text-light mb-5">What Our Customers Have to Say</p>
	<div class="testimonials-slider mb-0 d-flex align-items-center" id="homeTestimonials">
		<?php foreach($testimonials as $testimonial): ?>
			<div class="mx-3 shadowbox card single-testimonial lh-base">
				<div class="testimonial-rating mb-3">
					<?php for($i = 0; $i <= 5; $i++): ?>
						<i class="fa fa-star"></i>
					<?php endfor; ?>
				</div>
				<p class="testimonial-body text-dark"><?php echo $testimonial['body']; ?></p>
				<p class="testimonial-author"><?php echo $testimonial['name']; ?></p>
			</div>
		<?php endforeach; ?>
	</div>

	<div class="container position-relative">
		<div class="custom-arrows text-center">
			<span class="mx-2 custom-arrow prev pe-auto"><i class="fa fa-chevron-circle-left text-light"></i></span>
  			<span class="mx-2 custom-arrow next pe-auto"><i class="fa fa-chevron-circle-right text-light"></i></span>
		</div>
		<div class="text-center">
			<div class="custom-dots"></div>
		</div>
	</div>
</div>

	<?php // Adds a slick slider for the testimonial slider, shows 3 testimonials at a time ?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript">
	jQuery(function($){
		$(document).ready(function(){
			$('#homeTestimonials').slick({
				centerMode: true,
  				centerPadding: '120px',
  				dots: true,
  				appendArrows: $('.custom-arrows'),
  				prevArrow: $('.custom-arrow.prev'),
  				nextArrow: $('.custom-arrow.next'),
  				appendDots: $('.custom-dots'),
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 5000,
				responsive: [
					{
						breakpoint: 1170,
						settings: {
							slidesToShow: 1,
							centerMode: true,
							centerPadding: '20px'
						}
					}
				]
			});
		});
	});
	</script>


		</div>
	</div>

	<div class="container">
		<div class="news-updates">
			<h2>News & Updates</h2>
			<?php get_template_part('loop-templates/loop', 'news'); ?>
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
