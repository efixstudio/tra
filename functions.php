<?php

require 'include/framework.php';
require 'include/custom-functions.php';

$framework = new \Veribo\Framework();

/**
 * Scripts
 * 
 */
$framework->enqueue_script(array(
    'handle' => 'plugins',
    'src' => 'assets/js/plugins.js',
    'dependencies' => array('jquery', 'jquery-effects-core'),
), 'php', array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'site_url' => get_bloginfo('url'),
));

$framework->enqueue_script(array(
    'handle' => 'slicks',
    'src' => 'assets/js/slicks.js',
    'dependencies' => array('jquery', 'jquery-effects-core'),
), 'php', array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'site_url' => get_bloginfo('url'),
));

$framework->enqueue_script(array(
    'handle' => 'site-script',
    'src' => 'assets/js/site.min.js',
    'dependencies' => array('jquery', 'jquery-effects-core'),
), 'php', array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'site_url' => get_bloginfo('url'),
));

/**
 * Styles
 * 
 */
$framework->enqueue_style(array(
    'handle' => 'plugins',
    'src' => 'assets/css/plugins.css',
));

 $framework->enqueue_style(array(
    'handle' => 'site-style',
    'src' => 'style.css',
));

/**
 * Post Types
 * 
 */
$framework->register_post_type(array(
    'slug' => 'antrenori',
    'name' => array(
        'singular' => 'Antrenor',
        'plural' => 'Antrenori',
    ),
    'supports' => array('title', 'thumbnail')
));

$framework->register_post_type(array(
    'slug' => 'atleti',
    'name' => array(
        'singular' => 'Atlet',
        'plural' => 'Atleti',
    ),
    'supports' => array('title', 'thumbnail')
));

$framework->register_post_type(array(
    'slug' => 'parteneri',
    'name' => array(
        'singular' => 'Partener',
        'plural' => 'Parteneri',
    ),
    'supports' => array('title', 'thumbnail')
));

$framework->register_post_type(array(
    'slug' => 'tabere',
    'name' => array(
        'singular' => 'Tabara',
        'plural' => 'Tabere',
    ),
    'supports' => array('title', 'thumbnail','comments')
));

$framework->register_post_type(array(
    'slug' => 'testimoniale',
    'name' => array(
        'singular' => 'Testimonial',
        'plural' => 'Testimoniale',
    ),
    'supports' => array('title', 'thumbnail')
));

$framework->register_post_type(array(
    'slug' => 'evenimente',
    'name' => array(
        'singular' => 'Eveniment',
        'plural' => 'Evenimente',
    ),
    'supports' => array('title', 'thumbnail')
));

// Reusable Sections

$framework->register_post_type(array(
    'slug' => 'reusable_section',
    'name' => array(
        'singular' => 'Reusable Section',
        'plural' => 'Reusable Sections',
    ),
    'supports' => array('title'),
    'publicly_queryable' => false,
    'menu_icon' => 'dashicons-align-wide',
));

/**
 * Taxonomies
 * 
 */
$framework->register_taxonomy(array(
    'slug' => 'book_category',
    'post_types' => array('book'),
    'name' => array(
        'singular' => 'Category',
        'plural' => 'Categories',
    ),
));

/**
 * Menus
 * 
 */
$framework->register_menus(array(
    'header' => 'Header Menu',
));

/**
 * Image Sizes
 * 
 */
$framework->add_image_size('square', 200, 200);

/**
 * Login Screen
 * 
 */
$framework->login_screen(array(
    'logo' => 'assets/img/logo.png',
    'logo_width' => '100px',
    'color' => '#000',
    'color_hover' => '#666',
));

add_filter( 'use_default_gallery_style', '__return_false' );

/**
 * Change comment form textarea to use placeholder
 *
 * @since  1.0.0
 * @param  array $args
 * @return array
 */
function ea_comment_textarea_placeholder( $args ) {
	$args['comment_field']        = str_replace( 'textarea', 'textarea placeholder="Mesajul tau"', $args['comment_field'] );
	return $args;
}
add_filter( 'comment_form_defaults', 'ea_comment_textarea_placeholder' );

/**
 * Comment Form Fields Placeholder
 *
 */
function be_comment_form_fields( $fields ) {
	foreach( $fields as &$field ) {
		$field = str_replace( 'id="author"', 'id="author" placeholder="Nume*"', $field );
        $field = str_replace( 'id="url"', 'id="url" placeholder="Prenume"', $field );
		$field = str_replace( 'id="email"', 'id="email" placeholder="Email*"', $field );
	}
	return $fields;
}
add_filter( 'comment_form_default_fields', 'be_comment_form_fields' );



// Let's get the party started!
$framework->go();

