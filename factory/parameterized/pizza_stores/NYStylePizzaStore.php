<?php

include_once __DIR__.'/../abstracts/pizzaStore.php';
include_once __DIR__.'/../pizza_types/NYStyleCheesePizza.php';
include_once __DIR__.'/../pizza_types/ChicagoStyleCheesePizza.php';

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type == 'cheese') {
            return new NYStyleCheesePizza();
        } elseif ($type == 'pepperoni') {
            return new NYStylePepperoniPizza();
        } elseif ($type == 'clam') {
            return new NYStyleClamPizza();
        }
        throw new Exception("Pizza $type not found in ".__class__);
    }
}
