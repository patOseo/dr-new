<?php 
$rating = get_field('rating');
$testimonial = get_field('testimonial');
$author = get_field('author');
$alignment = get_field('alignment');
?>
<div class="shadowbox card single-testimonial text-<?= $alignment; ?>">
	<?php if($rating != 'none'): ?>
	<div class="testimonial-rating">
		<?php for($i = 0; $i < $rating; $i++): ?>
			<i class="fa fa-star"></i>
		<?php endfor; ?>
	</div>
	<?php endif; ?>	
	<?php if($testimonial): ?><p class="testimonial-body"><?php echo $testimonial; ?></p><?php endif; ?>
	<p class="testimonial-author"><?php echo $author; ?></p>
</div>