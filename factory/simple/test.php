<?php

include __DIR__.'/pizzaStore.php';

$pizzaStore = new PizzaStore();
$pizzaStore->orderPizza('cheese');
$pizzaStore->orderPizza('pepperoni');
