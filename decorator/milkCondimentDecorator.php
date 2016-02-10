<?php

include_once __DIR__.'/condimentDecorator.php';

class Milk extends CondimentDecorator
{
    var $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", +Milk";
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.18;
    }
}
