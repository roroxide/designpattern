<?php

include_once __DIR__.'/espresso.php';
include_once __DIR__.'/houseBlend.php';
include_once __DIR__.'/mochaCondimentDecorator.php';
include_once __DIR__.'/milkCondimentDecorator.php';

class StarBuzzCoffee
{
    public static function run()
    {
        $beverage = new Espresso();
        echo $beverage->getDescription()."\n";
        echo $beverage->cost()."\n";
        echo "\n";

        $beverage2 = new Espresso();
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Mocha($beverage2);
        $beverage2 = new Milk($beverage2);
        echo $beverage2->getDescription()."\n";
        echo $beverage2->cost()."\n";
        echo "\n";
    }
}
