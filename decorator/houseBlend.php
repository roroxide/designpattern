<?php

include_once __DIR__.'/beverage.php';

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "House Blend Coffee";
    }

    public function cost()
    {
        return 0.89;
    }
}
