<?php

include __DIR__."/simplePizzaFactory.php";

class PizzaStore
{
    var $factory;

    public function __construct()
    {
        $this->factory = new SimplePizzaFactory();
    }

    public function orderPizza($type)
    {
        $pizza = $this->factory->createPizza($type);
        if ($pizza == null)
            throw new Exception("Pizza $type not found");
        echo $pizza->getName()."\n";
    }
}
