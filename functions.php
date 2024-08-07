<?php

define( 'TRA_PREFIX', 'tra_');
define( 'TRA_THEME_DIR', get_template_directory() );
define( 'TRA_THEME_URI', get_template_directory_uri() );
define( 'TRA_THEME_DIR_APP', get_template_directory() . '/app');
define( 'TRA_THEME_DIR_APP_URI', get_template_directory_uri() . '/app');
define( 'TRA_THEME_ASSETS_VERSION', '1.0.43' );

require_once( __DIR__ . "/autoload.php" );
add_action( 'after_setup_theme', [ TrailRunningAcademy\Controller::instance(), 'setup' ], 20 );

/*
function tra_modules_assets( string $module ){
    if( empty( $module ) ) return false;

    $template_directory = get_template_directory_uri();

    $style_assets = [
        'module-page-header'    => $template_directory . '/assets/scss/ui/modules/module-page-header.min.css',
        'module-listing'        => $template_directory . '/assets/scss/ui/modules/module-listing.min.css',
        'module-plans'          => $template_directory . '/assets/scss/ui/modules/module-plans.min.css',
        'module-camps'          => $template_directory . '/assets/scss/ui/modules/module-camps.min.css',
        'module-benefits'       => $template_directory . '/assets/scss/ui/modules/module-benefits.min.css',
        'module-faqs'           => $template_directory . '/assets/scss/ui/modules/module-faqs.min.css',
        'module-cta'            => $template_directory . '/assets/scss/ui/modules/module-cta.min.css',
        'module-story'          => $template_directory . '/assets/scss/ui/modules/module-story.min.css',
        'module-comunity'       => $template_directory . '/assets/scss/ui/modules/module-comunity.min.css',
        'module-trainingplan'   => $template_directory . '/assets/scss/ui/modules/module-trainingplan.min.css',
        'module-textbox'        => $template_directory . '/assets/scss/ui/modules/module-textbox.min.css',
        'module-textbtn'        => $template_directory . '/assets/scss/ui/modules/module-textbtn.min.css',
        'module-texteditor'     => $template_directory . '/assets/scss/ui/modules/module-texteditor.min.css',
        'module-ti'             => $template_directory . '/assets/scss/ui/modules/module-ti.min.css',
        'module-testimonial'    => $template_directory . '/assets/scss/ui/modules/module-testimonial.min.css',
        'module-textbanner'     => $template_directory . '/assets/scss/ui/modules/module-textbanner.min.css',
        'module-usps'           => $template_directory . '/assets/scss/ui/modules/module-usps.min.css',
        'module-countdown-timer'=> $template_directory . '/assets/scss/ui/modules/module-countdown-timer.min.css',
        'module-social-links'   => $template_directory . '/assets/scss/ui/modules/module-social-links.min.css',
        'module-coaches'        => $template_directory . '/assets/scss/ui/modules/module-coaches.min.css',
        'module-gallery'        => $template_directory . '/assets/scss/ui/modules/module-gallery.min.css',

    ];

    return array_key_exists( $module, $style_assets ) ? [ $module => $style_assets[ $module] ] : false;

}
*/

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
    'src' => 'style.min.css',
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
    'supports' => array('title', 'thumbnail'),
    'rewrite' => array('slug' => 'testimoniale', 'with_front' => false),
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
$framework->add_image_size('rectangle-medium', 550, 350); //posts
$framework->add_image_size('rectangle-small', 300, 215); //posts small
$framework->add_image_size('rectangle-portrait-medium', 650, 520); //gallery big
$framework->add_image_size('square-medium', 600, 600);
$framework->add_image_size('square-small', 250, 250);
$framework->add_image_size('square-xsmall', 80, 80);
$framework->add_image_size('original-900', 900, 0);
$framework->add_image_size('original-600', 600, 0);
$framework->add_image_size('original-300', 300, 0);

/**
 * Login Screen
 * 
 */
$framework->login_screen(array(
    'logo' => 'assets/img/logo-site.png',
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

