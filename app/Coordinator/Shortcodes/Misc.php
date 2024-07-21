<?php

namespace TrailRunningAcademy\Coordinator\Shortcodes;

class Misc
{
    public function __construct(){
        add_shortcode( TRA_PREFIX . 'calendly_btn', [ $this, '_calendly_btn' ] );
    }

    public function _calendly_btn( $attributes, $content ){

        if ( ! isset( $attributes['calendly_url'] ) ){
            if (current_user_can('administrator')) {
                pr('Calendly URL not provided to shortcode.', true);
            }
            return '';
        }

        $output = '';
        $btnLabel   = ! isset( $attributes['btn_label'] ) ? 'Programeaza un video-call' : $attributes['btn_label'];
        $btnIcon    = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                            <path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path>
                        </svg>';


        $output .= "<button class='callendly-btn' 
                         onClick=\"Calendly.initPopupWidget({url: '" . $attributes['calendly_url'] . "'});return false;\">"
                     . $btnLabel . $btnIcon .
                    "</button>";


        wp_enqueue_style( 'tra-calendly', 'https://assets.calendly.com/assets/external/widget.css', '', TRA_THEME_ASSETS_VERSION, 'all' );
        wp_enqueue_style( 'tra-calendly-btn', TRA_THEME_URI . '/interface/shortcodes/calendly-btn/calendly.css', '', TRA_THEME_ASSETS_VERSION, 'all' );
        wp_enqueue_script( 'tra-calendly-js', 'https://assets.calendly.com/assets/external/widget.js', '', TRA_THEME_ASSETS_VERSION, true);


        return $output;
    }
}