<?php


// Create custom Gutenberg block category for ACF Blocks
function acf_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'acf-blocks',
				'title' => __( 'Custom Blocks', 'acf-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'acf_block_category', 1, 2);


function acf_custom_blocks() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {

		// register card block
		acf_register_block(array(
			'name'				=> 'card',
			'title'				=> __('Card'),
			'description'		=> __('A custom block for content card.'),
			'render_template'	=> 'global-templates/blocks/block-card.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'tablet',
			'keywords'			=> array( 'card', 'box' ),
		));

		// Register testimonials block
		acf_register_block(array(
			'name'				=> 'testimonials',
			'title'				=> __('Testimonials'),
			'description'		=> __('A custom block for a testimonial slider.'),
			'render_template'	=> 'global-templates/blocks/block-testimonials.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'star-filled',
			'mode'				=> 'edit',
			'keywords'			=> array( 'testimonials', 'reviews' ),
		));

		// register single testimonial block
		acf_register_block(array(
			'name'				=> 'single-testimonial',
			'title'				=> __('Single Testimonial'),
			'description'		=> __('A custom block for single testimonial.'),
			'render_template'	=> 'global-templates/blocks/block-single-testimonial.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'star-filled',
			'keywords'			=> array( 'star', 'testimonial' ),
		));

		acf_register_block(array(
			'name'				=> 'accordion',
			'title'				=> __('Accordion'),
			'description'		=> __('A custom block for an accordion.'),
			'render_template'	=> 'global-templates/blocks/block-accordion.php',
			'category'			=> 'acf-blocks',
			'icon'				=> 'list-view',
			'mode'				=> 'edit',
			'keywords'			=> array( 'faq', 'accordion' ),
		));
	}
}

add_action('acf/init', 'acf_custom_blocks');