<?php

include_once __DIR__.'/beverage.php';

class Espresso extends Beverage {
    public function __construct()
    {
        $this->description = "Espresso";
    }

    public function cost()
    {
        return 1.99;
    }
}
