<?php

include_once __DIR__.'/../abstracts/pizzaStore.php';

class ChicagoStylePizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        if ($type == 'cheese') {
            return new ChicagoStyleCheesePizza();
        } elseif ($type == 'pepperoni') {
            return new ChicagoStylePepperoniPizza();
        } elseif ($type == 'clam') {
            return new ChicagoStyleClamPizza();
        }
        throw new Exception("Pizza $type not found in ".__class__);
    }
}
