<?php

include_once __DIR__."/pizza_types/cheese.php";
include_once __DIR__."/pizza_types/pepperoni.php";
include_once __DIR__."/pizza_types/clam.php";

class SimplePizzaFactory
{
    public function createPizza($type)
    {
        $pizza = null;

        if ( $type == 'cheese') {
            $pizza = new CheesePizza();
        } elseif ( $type == 'pepperoni' ) {
            $pizza = new PepperoniPizza();
        } elseif ( $type == 'clam') {
            $pizza = new ClamPizza();
        }
        return $pizza;
    }
}
