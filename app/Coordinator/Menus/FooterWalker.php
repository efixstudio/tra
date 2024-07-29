<?php

namespace TrailRunningAcademy\Coordinator\Menus;
use Walker_Nav_Menu;
class FooterWalker extends Walker_Nav_Menu
{
    public function __construct(){

    }

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1 ); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";

    }


    public function start_el(&$output, $item, $depth = 0, $args = null, $item_id = 0)
    {

        if( 0 === $depth && in_array( 'menu-item-has-children', $item->classes, true ) ){
            $classes    = implode( ' ', $item->classes ) . ' mi-parent';
        }else{
            $classes    = implode( ' ', $item->classes );
        }

        $classes    .=  ' mil-' . $depth;

        if( $depth === 0 ){
            $output .= "<li class='c-menu'><span>" . esc_html( $item->title ) . "</span>";
        }else{
            $output     .= '<li class="' . $classes . ' ">';
            $item_link  = ( ! $item->url || $item->url == "#" ) ? 'javascript:void(0)' : $item->url;
            $output     .= '<a href="' . esc_url( $item_link ) . '">' . esc_html( $item->title ) . '</a>';
        }

    }


}