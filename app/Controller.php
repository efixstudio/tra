<?php

namespace TrailRunningAcademy;

use TrailRunningAcademy\Coordinator\Assets;
use TrailRunningAcademy\Coordinator\Breadcrumbs;
use TrailRunningAcademy\Coordinator\Menus;
use TrailRunningAcademy\Coordinator\Misc;
use TrailRunningAcademy\Coordinator\Shortcodes;
use TrailRunningAcademy\Coordinator\Taxonomy;

class Controller
{
    /**
     * @var Controller
     */
    protected static $_instance;

    public static function instance()
    {
        if (self::$_instance === null)
            self::$_instance = new self();

        return self::$_instance;
    }

    public function __construct(){
        require_once( TRA_THEME_DIR_APP . "/_functions/utilities.php");
    }

    /**
     * @var Assets
     */
    public $assets;

    /**
     * @var Breadcrumbs
     */
    public $breadcrumbs;

    /**
     * @var Menus
     */
    public $menus;

    /**
     * @var Misc
     */
    public $misc;

    /**
     * @var Shortcodes
     */
    public $shortcodes;

    /**
     * @var Taxonomy
     */
    public $taxonomy;

    public function setup(){
        $this->assets       = new Assets();
        $this->breadcrumbs  = new Breadcrumbs();
        $this->menus        = new Menus();
        $this->misc         = new Misc();
        $this->shortcodes   = new Shortcodes();
        $this->taxonomy     = new Taxonomy();
    }
}