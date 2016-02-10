<?php

include_once __DIR__.'/pizza.php';

class ClamPizza extends Pizza
{
    public function getName()
    {
        return "Clam";
    }
}
