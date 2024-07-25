<?php

namespace TrailRunningAcademy\Coordinator;

class Breadcrumbs
{
    /**
     * @var Breadcrumbs
     */
    protected static $_instance;

    public static function instance() {
        if( self::$_instance === null )
            self::$_instance = new self();

        return self::$_instance;
    }

    public function __construct(){
        add_filter( 'wpseo_breadcrumb_links', [ $this, 'inject_link_into_breadcrumbs' ], 2, 1 );
    }

    /**
     * Adjust Yoast to display breadcrumbs according to the parent
     * pages selected in Options panel (build with ACF)
     *
     * @param $links
     * @return mixed
     */
    public function inject_link_into_breadcrumbs( $links ){
        global $post;
        $breadcrumb                 = [];

        //For single posts
        if( is_singular() ){
            $object                     = get_queried_object();
            $acf_breadcrumbs_settings   = get_field('breadcrumbs_singular','options');

            if( isset( $acf_breadcrumbs_settings[ 'single' ] ) && is_array( $acf_breadcrumbs_settings[ 'single'] ) ){
                //Loop throud ACF Options, tab single
                foreach( $acf_breadcrumbs_settings[ 'single'] as $settings ){

                    if( $settings[ 'post_type']  !== $object->post_type )
                        continue;

                    if( isset( $settings[ 'parent_page']->ID ) ){
                        $ancestors = get_posts_array_ancestors( $settings[ 'parent_page' ]->ID );

                        foreach( $ancestors as $key => $ancestor ){
                            $breadcrumb_custom_title = get_post_meta( $ancestor->ID, '_yoast_wpseo_bctitle', true);
                            $breadcrumb[] = [
                                'url'   => get_permalink( $ancestor->ID ),
                                'text'  => $breadcrumb_custom_title ? $breadcrumb_custom_title :  $ancestor->post_title,
                                'id'    => $ancestor->ID
                            ];
                        }

                    }

                }
                $breadcrumb = array_reverse( $breadcrumb );
                array_splice( $links, 1, -2, $breadcrumb );
            }

        }
        return $links;
    }
}