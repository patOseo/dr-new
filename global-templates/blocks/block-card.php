<?php 
$htmltag = get_field('title_html_tag');
$htmltagopen = "<" . $htmltag . " class='card-title h-auto'>";
$htmltagclose = "</" . $htmltag . ">";
$icon = get_field('icon');
$no_min = get_field('no_min_height');
?>
<div class="shadowbox card <?php if($no_min == 1) { echo 'no-min-height'; } else { echo 'h-100'; } ?> <?php if(get_field('card_link')) { echo 'hover'; } ?>">
	<?php if($icon): echo wp_get_attachment_image($icon, 'full'); endif; ?>
	<?php echo $htmltagopen; ?><?php if(get_field('card_link')): ?><a href="<?php echo get_field('card_link'); ?>" class="stretched-link"><?php endif; echo get_field('card_title'); if(get_field('card_link')): ?></a><?php endif; ?><?php echo $htmltagclose; ?>
	<?php if(get_field('card_subtitle')): ?><p class="card-subtitle h-auto"><?php echo get_field('card_subtitle'); ?></p><?php endif; ?>
	<?php if(get_field('card_content')): ?><p class="card-content mt-auto"><?php echo get_field('card_content'); ?></p><?php endif; ?>
</div>