<?php
/**
 * This file to add pattern related functions.
 *
 * @package site name
 * @since 1.0.0
 */

/**
 * Register block pattern category for Get in Touch section.
 */
function prifix_register_block_pattern_category() {
	register_block_pattern_category(
		'demo-patterns', // Replace with your desired category slug.
		array( 'label' => 'Demo Patterns' ) // Replace with your desired category label.
	);
}
add_action( 'init', 'prifix_register_block_pattern_category' );
