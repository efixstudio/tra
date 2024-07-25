<?php

namespace TrailRunningAcademy\Coordinator;

class Taxonomy
{
    public function __construct() {
        add_action( 'init', [ $this, '_create_taxonomy' ] );
    }

    public function _create_taxonomy(){
        $labels = [
            'name'              => _x('Categories', 'Categories', 'trailrunningacademy'),
            'singular_name'     => _x('Category', 'taxonomy singular name', 'trailrunningacademy'),
            'search_items'      => __('Search Category', 'trailrunningacademy'),
            'all_items'         => __('All Categories', 'trailrunningacademy'),
            'parent_item'       => __('Parent Category', 'trailrunningacademy'),
            'parent_item_colon' => __('Parent Category:', 'trailrunningacademy'),
            'edit_item'         => __('Edit Category', 'trailrunningacademy'),
            'update_item'       => __('Update Category', 'trailrunningacademy'),
            'add_new_item'      => __('Add New Category', 'trailrunningacademy'),
            'new_item_name'     => __('New Category Name', 'trailrunningacademy'),
            'menu_name'         => __('Categories', 'trailrunningacademy'),
        ];

        register_taxonomy('testimoniale_cat', [ 'testimoniale' ], [
            'hierarchical'      => true,
            'public'            => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => [ 'slug' => 'autor-testimonial', 'with_front' => true, 'hierarchical' => true],
        ]);
    }
}