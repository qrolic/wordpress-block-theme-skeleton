<?php

/**
 * This file is display all enqueue function in site.
 *
 * @package block theme
 * @since 1.0.0
 */

/**
 * Frontend side script and style enqueue.
 */
function qrolic_frontend_theme_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/main.css', array(), 'all' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css', array(), 'all' );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), 1.1, true );
}
add_action( 'wp_enqueue_scripts', 'qrolic_frontend_theme_scripts' );

/**
 * Backend side css files
 * This function use for add site multiple backend enqueue file
 */
function prefix_editor_style_setup() {
	// Enqueue styles for the block editor
	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/assets/css/admin/admin.css', array(), '1.0' );
	// Enqueue script for the block editor
	wp_enqueue_script( 'admin-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.1', true );
}

add_action( 'enqueue_block_editor_assets', 'prefix_editor_style_setup' );

/**
 * Backend side css files
 * This function use for add site multiple backend enqueue file
 */
function prefix_backend_editor_style() {
	add_theme_support( 'editor-style' );
	add_editor_style( 'assets/css/admin/admin.css' );
	add_editor_style( 'assets/css/bootstrap-grid.min.css' );
}
add_action( 'after_setup_theme', 'prefix_backend_editor_style' );
