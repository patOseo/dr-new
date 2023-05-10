<?php
$rand = 'testimonials-' . uniqid();
?>

<?php if(have_rows('testimonials')): ?>
	<div class="testimonials-slider mb-0 d-flex align-items-center" id="<?= $rand; ?>">
		<?php while(have_rows('testimonials')): the_row(); ?>
			<?php 
				$rating = get_sub_field('rating');
				$testimonial = get_sub_field('testimonial');
				$name = get_sub_field('name');
			?>
			<div class="mx-3 shadowbox card single-testimonial lh-base">
				<?php if($rating != 'none'): ?>
				<div class="testimonial-rating mb-3">
					<?php for($i = 0; $i < $rating; $i++): ?>
						<i class="fa fa-star"></i>
					<?php endfor; ?>
				</div>
				<?php endif; ?>	
				<?php if($testimonial): ?><?php echo $testimonial; ?><?php endif; ?>
				<p class="testimonial-author">– <?php echo $name; ?></p>
			</div>
		<?php endwhile; ?>
	</div>

	<div class="container position-relative">
		<div class="custom-arrows text-center">
			<span class="mx-2 custom-arrow prev pe-auto"><i class="fa fa-chevron-circle-left text-primary"></i></span>
  			<span class="mx-2 custom-arrow next pe-auto"><i class="fa fa-chevron-circle-right text-primary"></i></span>
		</div>
		<div class="text-center">
			<div class="custom-dots"></div>
		</div>
	</div>

	<?php // Adds a slick slider for the testimonial slider, shows 3 testimonials at a time ?>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript">
	jQuery(function($){
		$(document).ready(function(){
			$('#<?php echo $rand; ?>').slick({
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
							centerPadding: '60px'
						}
					}
				]
			});
		});
	});
	</script>

<?php endif; ?>

