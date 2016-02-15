<?php

include_once __DIR__."/abstracts/coffeineBeverage.php";

class Coffee extends CoffeineBeverage
{
    public function brew()
    {
        echo "Dripping Coffee through filter\n";
    }

    public function addCondiments()
    {
        echo "Adding sugar and milk\n";
    }
}

