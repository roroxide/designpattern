<?php

include_once __DIR__."/coffeineBeverage.php";

class Tea extends CoffeineBeverage
{
    public function brew()
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments()
    {
        echo "Adding Lemon\n";
    }
}

