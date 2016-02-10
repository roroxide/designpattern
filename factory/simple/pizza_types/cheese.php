<?php

include __DIR__.'/pizza.php';

class CheesePizza extends Pizza
{
    public function getName()
    {
        return "Cheeze";
    }
}
