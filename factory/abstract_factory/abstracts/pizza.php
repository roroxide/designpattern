<?php

abstract class Pizza
{
    var $name;
    var $dough;
    var $sauce;
    var $toppings = [];

    public function prepare()
    {
        echo "Preparing {$this->name}\n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings:";
        for ($i=0; $i<count($this->toppings); $i++) {
            echo " {$this->toppings[$i]}";
        }
    }

    public function bake()
    {
        echo "Bake for 25 minutes at 350\n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function getName()
    {
        return $this->name;
    }
}
