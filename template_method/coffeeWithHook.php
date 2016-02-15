<?php

include_once __DIR__."/abstracts/coffeineBeverageWithHook.php";

class CoffeeWithHook extends CoffeineBeverageWithHook
{
    public function brew()
    {
        echo "Dripping Coffee through filter\n";
    }

    public function addCondiments()
    {
        echo "Adding sugar and milk\n";
    }

    public function customerWantsCondiments()
    {
        return false;
    }
}

