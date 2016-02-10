<?php

include_once __DIR__.'/../interfaces/observer.php';

class Observer2 implements Observer
{
    public function update($a, $b, $c)
    {
        echo "Observer2 notified.\n a = {$a} , b = {$b} , c = {$c} \n";
    }
}
