<?php
// Step 1: Create the block pattern content
$block_pattern_content = '
<!-- wp:paragraph {"align":"center"} -->
<p>This is a custom block pattern.</p>
<!-- /wp:paragraph -->';

// Step 2: Register the block pattern
function custom_register_block_pattern() {
	register_block_pattern(
		'custom-block-pattern', // Replace with a unique name for your pattern
		array(
			'title'       => 'Custom Block Pattern', // Replace with your pattern's title
			'description' => 'A custom block pattern example.', // Replace with a description
			'content'     => $block_pattern_content, // Content for your block pattern
			'categories'  => array('demo-patterns'), // Assign it to the custom category
		)
	);
}
add_action('init', 'custom_register_block_pattern');
