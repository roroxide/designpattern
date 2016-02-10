<?php

include_once __DIR__.'/duck_type.php';

class RubberDuck extends Duck
{
    function __construct()
    {
        $this->setFlyBehavior( new FlyNoFly() );
        $this->setQuackBehavior( new QuackNormal() );
    }

    function description()
    {
        echo "Rubber Duck:\n";
    }
}
