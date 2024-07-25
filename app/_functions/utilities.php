<?php

/**
 * Get general page URL set in WP Admin / Options / Page setup
 *
 * @param string $settings_name The ACF settings name
 * @param string $target_page   The page to search for in the settings (searching is done by label)
 * @return bool|string
 */
function get_general_page_url( $settings_name, $target_page ){
    $pages = get_field( $settings_name, 'options');
    $pageURL = "#";
    if( ! $pages || ! is_array( $pages ) )
        return $pageURL;

    foreach( $pages as $key => $page ){
        if( empty( $page[ 'label' ] ) )
            continue;

        if( $page[ 'label' ] === $target_page )
            return ! empty( $page['link'] ) ? $page[ 'link' ]: '#';
    }

    return $pageURL;

}


/**
 * @param $loopObject
 * @param string $order
 * @return mixed
 */
function sort_event_loop_by_event_date( $loopObject, string $order = 'DESC' ){
    $cloneLoop  = clone( $loopObject );

    $orderValues = [ 'ASC', 'DESC' ];
    if( ! in_array( $order, $orderValues ) )
        $order = "DESC";

    //Add $cloneLoop->posts object a property with the event date timestamp
    if( isset( $loopObject->posts ) && is_array( $loopObject->posts ) ){
        foreach( $loopObject->posts as $key => $postObject ){
            $date       = get_field('date', $postObject->ID);
            $strtotime  = strtotime( $date );
            $cloneLoop->posts[$key]->eventDateTimestamp = $strtotime;
        }
    }

    //Reorder based on even date
    if( $order === "DESC" ){
        usort($cloneLoop->posts, function($a, $b) {
            return $b->eventDateTimestamp <=> $a->eventDateTimestamp;
        });
    }

    if( $order === "ASC" ){
        usort($cloneLoop->posts, function($a, $b) {
            return $a->eventDateTimestamp <=> $b->eventDateTimestamp  ;
        });
    }

    return $cloneLoop;
}

/**
 * Check if a key exists in an array and if that key is also an array
 *
 * @param $array
 * @param $key
 * @return bool
 */
function array_key_is_array( $array, $key ){
    if( is_array( $array ) && array_key_exists( $key, $array ) && is_array( $array[ $key ] ) )
        return true;
    return false;
}

/**
 * @param $wp_query
 * @return string|string[]|void
 */
function custom_loop_pagination( $wp_query = false, $big = 9999999999 ){
    global $wp_rewrite;
    if( ! $wp_query )
        global $wp_query;

    $args = [
        'base'            => str_replace( $big, '%#%',  get_pagenum_link( $big , false ) ),
        'format'          => 'page/%#%',
        'total'           => $wp_query->max_num_pages,
        'current'         => max( 1, get_query_var('paged') ),
        'show_all'        => false,
        'end_size'        => 1,
        'mid_size'        => 1,
        'prev_next'       => true,
        'prev_text'       => __('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M168.49,199.51a12,12,0,0,1-17,17l-80-80a12,12,0,0,1,0-17l80-80a12,12,0,0,1,17,17L97,128Z"></path></svg>'),
        'next_text'       => __('<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z"></path></svg>'),
        'type'            => 'list',
        'add_args'        => false,
        'add_fragment'    => ''
    ];

    return paginate_links( $args );
}


function get_currency( $field ){
    $currency = 'RON';
    if( is_array( $field ) && array_key_exists( 'label', $field ) ){
        $currency = $field['label'];
    }

    return $currency;
}

/**
 * @throws Exception
 */
function calculate_age($birthDate)
{
    $date = DateTime::createFromFormat('d/m/Y', $birthDate);
    if( $date ){
        $date = $date->format('Y-m-d');
        $birthDate = new DateTime($date);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthDate);
        return $age->y;
    }

    return false;

}

/**
 * @param int $post_id
 * @param $links
 * @return array
 */
function get_posts_array_ancestors( int $post_id, $links = [] ){

    $links  = [];
    $post   = get_post( $post_id, 'OBJECT');

    if( ! $post ) return $links;

    $links = array_merge( $links, [ $post ] );

    if( $post->post_parent !== 0 ){
        $links = array_merge( $links, get_posts_array_ancestors( $post->post_parent, $links ) );
    }
    return $links;
}