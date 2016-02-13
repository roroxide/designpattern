<?php

include_once __DIR__.'/../abstracts/pizzaStore.php';
include_once __DIR__.'/../pizza_types/cheesePizza.php';
include_once __DIR__.'/../pizza_types/pepperoniPizza.php';

class NYStylePizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
       $ingredients = new NYPizzaIngredientFactory();
       if ($item == 'cheese') {
           $pizza = new CheesePizza($ingredients);
           $pizza->setName("New York Style Cheese Pizza");
       } elseif ($item == 'pepperoni') {
           $pizza = new PepperoniPizza($ingredients);
           $pizza->setName("New York Style Pepperoni Pizza");
       }
       return $pizza;
    }
}
