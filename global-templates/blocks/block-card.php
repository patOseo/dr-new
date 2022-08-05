<?php 
$htmltag = get_field('title_html_tag');
$htmltagopen = "<" . $htmltag . " class='card-title'>";
$htmltagclose = "</" . $htmltag . ">";
$icon = get_field('icon');
?>
<div class="shadowbox card <?php if(get_field('card_link')): ?>hover<?php endif; ?>">
	<?php if($icon): echo wp_get_attachment_image($icon, 'full'); endif; ?>
	<?php echo $htmltagopen; ?><?php if(get_field('card_link')): ?><a href="<?php the_field('card_link'); ?>" class="stretched-link"><?php endif; the_field('card_title'); if(get_field('card_link')): ?></a><?php endif; ?><?php echo $htmltagclose; ?>
	<p class="card-subtitle"><?php the_field('card_subtitle'); ?></p>
	<p class="card-content"><?php the_field('card_content'); ?></p>
</div>