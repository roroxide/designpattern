<?php

include_once __DIR__.'/../interfaces/flyInterface.php';

class FlyNoFly implements FlyInterface
{
    function fly()
    {
        echo "fly no fly\n";
    }
}
