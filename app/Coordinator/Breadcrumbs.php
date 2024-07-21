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
}