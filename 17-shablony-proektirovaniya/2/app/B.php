<?php

namespace app;


class B
{
    private static $instance;

    public static function getInstance(){
        if( self::$instance === null ){
            self::$instance = new self();
        }
        return self::$instance;
    }


    private function __construct()
    {

    }
}