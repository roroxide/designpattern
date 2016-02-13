<?php

class SingletonType
{
    public static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if ( self::$instance == null ) {
            self::$instance = new SingletonType();
        }
        return self::$instance;
    }

    public function doSomething()
    {
        echo "Do Something !!\n";
    }
}
