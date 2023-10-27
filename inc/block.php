<?php
// Add a custom block category.
add_filter(
    'block_categories_all',
    function( $categories ) {
        // Adding a new category.
        $categories[] = array(
            'slug'  => 'custom-category', // Change 'custom-category' to your desired category slug.
            'title' => 'Custom Category', // Change 'Custom Category' to your desired category name.
        );
        return $categories;
    }
);
