<?php

include_once __DIR__.'/condimentDecorator.php';

class Mocha extends CondimentDecorator
{
    var $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ', +Mocha';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.20;
    }
}
