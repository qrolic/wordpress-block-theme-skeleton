<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package qrolic
 * @since 1.0.0
 */
function prefix_theme_setup() {
	// Add support for menus.
	add_theme_support( 'menus' );
	// Enable support for wide and full-aligned blocks.
	add_theme_support( 'align-wide' );
	// Enable support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
	// Enable support for custom line-height controls.
	add_theme_support( 'custom-line-height' );
	// Enable support for custom block styles.
	add_theme_support( 'wp-block-styles' );
	// Enable support for custom editor styles.
	add_theme_support( 'editor-styles' );
	// Enable support for wide images in the editor.
	add_theme_support( 'align-wide' );
	// Enable support for post-thumbnails (featured images).
	add_theme_support( 'post-thumbnails' );
	// Enable support for HTML5 features.
	add_theme_support(
		'html5',
		array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption',
		)
	);
	// Enable support for post formats (example: aside, gallery, video, audio, etc.
	add_theme_support(
		'post-formats',
		array(
			'aside',
			'gallery',
			'video',
			'audio',
		)
	);
	// Enable support for title tag (automatically generates the title tag in the document head.
	add_theme_support( 'title-tag' );
	// editor styles add.
	add_editor_style( 'editor-style.css' );
}
	add_action( 'after_setup_theme', 'prefix_theme_setup' );

/**
 * Import all custom blocks here.
 */
require_once 'inc/blocks/demo-dynamic-block/demo-dynamic-block.php';
require_once 'inc/blocks/demo-static-block/demo-static-block.php';

/**
 * This import file in enqueue file for include inside this file add enqueue function for site.
 */
require_once 'inc/enqueue.php';

/**
 * This import file in enqueue file for include inside this file add nav function for site.
 */
require_once 'inc/nav.php';

/**
 * Import all block pattern register category.
 */
require_once 'inc/patterns.php';

/**
 * Import all block pattern here.
 */
require_once 'pattern/demo-pattern.php';

/**
 * This import file in enqueue file for include inside this file add block function for site.
 */
require_once 'inc/block.php';
/**
 * This file imports all the custom post type.
 */
require_once 'inc/cpt/portfolio.php';

/**
 * Generate breadcrumbs & Generate Portfolio category list
 */
require_once 'inc/template-functions.php';
