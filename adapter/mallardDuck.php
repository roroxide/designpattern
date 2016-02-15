<?php

include_once __DIR__."/abstracts/duck.php";

class MallardDuck implements Duck
{
    public function quack()
    {
        echo "Quack\n";
    }

    public function fly()
    {
        echo "I'm flying\n";
    }
}
