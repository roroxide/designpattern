<?php

include_once __DIR__.'/../interfaces/flyInterface.php';

class FlyNormal implements FlyInterface
{
    function fly()
    {
        echo "fly normal\n";
    }
}
