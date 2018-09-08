<?php

namespace wfm\traits;

trait tSingleton
{
    private static $instance;

    public static function getInstance(){
        if( self::$instance === null ){
            self::$instance = new self();
        }
        return self::$instance;
    }
}