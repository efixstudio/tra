<?php

namespace TrailRunningAcademy\Coordinator;

use TrailRunningAcademy\Coordinator\Menus\FooterExtraWalker;
use TrailRunningAcademy\Coordinator\Menus\FooterWalker;

class Menus
{
    /**
     * @var Menus
     */
    protected static $_instance;

    public static function instance() {
        if( self::$_instance === null )
            self::$_instance = new self();

        return self::$_instance;
    }

    /**
     * @var FooterWalker
     */
    public $footerMenu;

    /**
     * @var FooterExtraWalker
     */
    public $footerExtraMenu;

    public function __construct(){
        $this->footerMenu       = new FooterWalker();
        $this->footerExtraMenu  = new FooterExtraWalker();
        $this->register_nav_menu();
    }


    /**
     * @return void
     */
    public function register_nav_menu(){
        register_nav_menus( [
            'footer_menu'           => __( 'Footer Menu'),
            'footer_extra_links'    => __( 'Footer Extra Links' ),
        ] );
    }
}