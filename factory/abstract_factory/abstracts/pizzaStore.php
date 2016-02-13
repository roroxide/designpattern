<?php

abstract class PizzaStore
{
    var $factory;

    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract public function createPizza($type);
}
