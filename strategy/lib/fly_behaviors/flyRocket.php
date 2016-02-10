<?php

include_once __DIR__.'/../interfaces/flyInterface.php';

class FlyRocket implements FlyInterface
{
    function fly()
    {
        echo "fly rocket\n";
    }
}
