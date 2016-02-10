<?php

include_once __DIR__.'/../interfaces/observer.php';

class Observer1 implements Observer
{
    public function update($a, $b, $c)
    {
        echo "Observer1 notified.\n a = {$a} , b = {$b} , c = {$c} \n";
    }
}
