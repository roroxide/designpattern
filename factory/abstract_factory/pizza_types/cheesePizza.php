<?php

include __DIR__.'/../abstracts/pizza.php';

class CheesePizza extends Pizza
{
    var $ingredientFactory;

    public function __construct($ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        echo "Preparing {$this->name}\"";
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}
