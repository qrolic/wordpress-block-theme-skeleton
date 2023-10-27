<?php
/**
 * Sample Custom post type registration.
 */
function prefix_portfolio_custom_post_type() {
    $labels = array(
        'name'              => __( 'Portfolio Categories' ),
        'singular_name'     => __( 'Portfolio Category' ),
        'search_items'      => __( 'Search Portfolio Categories' ),
        'all_items'         => __( 'All Portfolio Categories' ),
        'parent_item'       => __( 'Parent Portfolio Category' ),
        'parent_item_colon' => __( 'Parent Portfolio Category:' ),
        'edit_item'         => __( 'Edit Portfolio Category' ),
        'update_item'       => __( 'Update Portfolio Category' ),
        'add_new_item'      => __( 'Add New Portfolio Category' ),
        'new_item_name'     => __( 'New Portfolio Category Name' ),
        'menu_name'         => __( 'Portfolio Categories' ),
    );

    // Register the Portfolio Category taxonomy
    register_taxonomy(
        'portfolio_category',
        array( 'portfolio' ),
        array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => true,
            'show_in_rest'      => true
        )
    );

    // Labels for the Portfolio custom post type
    $post_type_labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name' ),
        'singular_name'         => _x( 'Portfolio', 'Post Type Singular Name' ),
        'menu_name'             => __( 'Portfolio' ),
        'name_admin_bar'        => __( 'Portfolio' ),
        'archives'              => __( 'Portfolio Archives' ),
        // Add other labels as needed
    );

    // Arguments for registering the Portfolio custom post type
    $post_type_args = array(
        'label'               => __( 'Portfolio' ),
        'description'         => __( 'Portfolio and Reviews' ),
        'labels'              => $post_type_labels,
        'supports'            => array( 'title', 'editor', 'thumbnail' ),
        'public'              => true,
        'has_archive'         => 'portfolio',
        'show_in_rest'        => true,
        // Add other arguments as needed
    );

    // Register the Portfolio custom post type
    register_post_type( 'portfolio', $post_type_args );

    // Enable featured images (thumbnails) for the Portfolio post type
    add_theme_support( 'post-thumbnails' );
}

// Hook the function into the 'init' action
add_action( 'init', 'prefix_portfolio_custom_post_type' );
