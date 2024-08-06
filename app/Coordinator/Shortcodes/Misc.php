<?php

namespace TrailRunningAcademy\Coordinator\Shortcodes;

class Misc
{
    public function __construct(){
        add_shortcode( TRA_PREFIX . 'calendly_btn', [ $this, '_calendly_btn' ] );
        add_shortcode( TRA_PREFIX . 'modal', [ $this, '_modal' ] );
    }

    public function _calendly_btn( $attributes, $content ){

        if ( ! isset( $attributes['calendly_url'] ) ){
            if (current_user_can('administrator')) {
                pr('Calendly URL not provided to shortcode.', true);
            }
            return '';
        }

        $tag = isset( $attributes['tag'] ) && $attributes['tag'] === "a" ? "a" : 'button';
        $classes = isset( $attributes['classes'] ) ? esc_attr( $attributes['classes'] ) : '';

        $output = '';
        $btnLabel   = ! isset( $attributes['btn_label'] ) ? 'Programeaza un video-call' : $attributes['btn_label'];
        $btnIcon    = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path>
                        </svg>';


        $output .= "<" . $tag . " id='calendly-btn' class='calendly-btn " . $classes . "' 
                         onClick=\"Calendly.initPopupWidget({url: '" . $attributes['calendly_url'] . "?hide_gdpr_banner=1'});return false;\">"
                     . ( $tag === "a" ? "<span>" : '' ) .$btnLabel . $btnIcon . ( $tag === "a" ? "</span>" : '' ) .
                    "</" . $tag . ">";


        wp_enqueue_style( 'tra-calendly', 'https://assets.calendly.com/assets/external/widget.css', '', TRA_THEME_ASSETS_VERSION, 'all' );
        wp_enqueue_style( 'tra-calendly-btn', TRA_THEME_URI . '/interface/shortcodes/calendly-btn/calendly.css', '', TRA_THEME_ASSETS_VERSION, 'all' );
        wp_enqueue_script( 'tra-calendly-js', 'https://assets.calendly.com/assets/external/widget.js', '', TRA_THEME_ASSETS_VERSION, true);


        return $output;
    }


    public function _modal( $attributes, $content ){

        if( !isset( $attributes[ 'btn_label' ] ) )
            return '';
        $id = uniqid();

        $btnIcon    = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path>
                        </svg>';

        $output = '<button type="button" aria-label="Open modal" class="trigger-modal ' . ( isset($attributes['btn_classes'] ) ? esc_attr( $attributes['btn_classes'] ) : '' ) . '" data-target="modal-' . $id . '">
        ' . $attributes[ 'btn_label' ] . $btnIcon . '
      </button> <div id="modal-' . $id . '" class="modal-element fade" data-modal="modal-' . $id . '">
            <div id="content-modal-shortcode" class="modal-content-wrapper">
                <span class="close-button trigger-modal" data-target="modal-' . $id . '">
                    <span>INCHIDE</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#000000" viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
                </span>
                <div class="modal-body">
                    ' . ( isset( $attributes['title'] ) ? '<h2>' . $attributes['title'] . '</h2>' : '' ) . '
                    ' . ( isset( $attributes['description'] ) ? '<p>' . $attributes['description'] . '</p>' : '' ) . '
                    <div class="modal-content">'
                        . do_shortcode( $content ) .
                    '</div>
                </div>
            </div>
        </div>';

        wp_enqueue_style( 'tra-modal', TRA_THEME_URI . '/interface/shortcodes/modal/modal.min.css', '', TRA_THEME_ASSETS_VERSION, 'all' );
        wp_enqueue_script( 'tra-modal-js', TRA_THEME_URI . '/interface/shortcodes/modal/modal.min.js', '', TRA_THEME_ASSETS_VERSION, true);

        return $output;

    }
}