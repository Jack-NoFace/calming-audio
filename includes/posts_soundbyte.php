<?php
// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_soundbyte()
{
    register_taxonomy_for_object_type('category', 'Soundbyte'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'Soundbyte');
    register_post_type('Soundbyte', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Soundbyte', 'Soundbyte'), // Rename these to suit
            'singular_name' => __('Soundbyte', 'Soundbyte'),
            'add_new' => __('Add New', 'Soundbyte'),
            'add_new_item' => __('Add New Soundbyte', 'Soundbyte'),
            'edit' => __('Edit', 'Soundbyte'),
            'edit_item' => __('Edit Soundbyte', 'Soundbyte'),
            'new_item' => __('New Soundbyte', 'Soundbyte'),
            'view' => __('View Soundbyte', 'Soundbyte'),
            'view_item' => __('View Soundbyte', 'Soundbyte'),
            'search_items' => __('Search Soundbyte', 'Soundbyte'),
            'not_found' => __('No Soundbytes found', 'Soundbyte'),
            'not_found_in_trash' => __('No Soundbytes found in Trash', 'Soundbyte')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
?>
