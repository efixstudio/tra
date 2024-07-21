<?php

namespace TrailRunningAcademy\Coordinator;

use TrailRunningAcademy\Coordinator\Shortcodes\Misc;

class Shortcodes
{
    /**
     * @var Shortcodes
     */
    protected static $_instance;

    public static function instance()
    {
        if (self::$_instance === null)
            self::$_instance = new self();

        return self::$_instance;
    }

    /**
     * @var Misc
     */
    public $misc;

    public function __construct(){
        $this->misc = new Misc();
    }

}