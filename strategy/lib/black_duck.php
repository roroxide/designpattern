<?php

include_once __DIR__.'/duck_type.php';

class BlackDuck extends Duck
{
    function __construct ()
    {
        $this->setFlyBehavior( new FlyNormal() );
        $this->setQuackBehavior( new QuackNormal() );
    }

    function description()
    {
        echo "Black Duck:\n";
    }
}
