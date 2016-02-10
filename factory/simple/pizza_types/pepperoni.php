<?php

include_once __DIR__.'/pizza.php';

class PepperoniPizza extends Pizza
{
    public function getName()
    {
        return "Pepperoni";
    }
}
