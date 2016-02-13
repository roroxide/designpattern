<?php

include_once __DIR__.'/pizza_stores/NYStylePizzaStore.php';
include_once __DIR__.'/pizza_stores/ChicagoStylePizzaStore.php';

class PizzaTestDrive
{
    public function run()
    {
        $nyStore = new NYStylePizzaStore();
        $chicagoStore = new ChicagoStylePizzaStore();

        $pizza = $nyStore->orderPizza("cheese");
        echo "Ethan ordered a ".$pizza->getName()."\n";

        $pizza = $chicagoStore->orderPizza("cheese");
        echo "Joel ordered a ".$pizza->getName()."\n";
    }
}

$test = new PizzaTestDrive();
$test->run();
