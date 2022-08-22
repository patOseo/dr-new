<?php

// Remove all built-in WordPress patterns
function fire_theme_support() {
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'fire_theme_support');

// Register the Davidoff category
function davidoff_register_my_pattern_categories() {
	register_block_pattern_category(
		'davidoff',
		array( 'label' => __( 'Davidoff', 'davidoff' ) )
	);
}
 
add_action( 'init', 'davidoff_register_my_pattern_categories' );


// Register patterns
function davidoff_register_my_patterns() {
	register_block_pattern(
	    'davidoff/cta-pattern',
	    array(
	        'title'       => __( 'Call To Action', 'davidoff' ),
	        'categories'  => array('davidoff'),
	        'description' => _x( 'A Call-To-Action block.', 'Block pattern description', 'davidoff' ),
	        'content'     => "<!-- wp:button {\"backgroundColor\":\"white\",\"style\":{\"color\":{\"text\":\"#204a7a\"}}} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-white-background-color has-text-color has-background\" href=\"/book-an-estimate/\" style=\"color:#204a7a\">Book an Estimate</a></div>\n<!-- /wp:button -->",
	    )
	);
}
add_action( 'init', 'davidoff_register_my_patterns' );