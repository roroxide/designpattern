<?php

abstract class Beverage 
{
    var $description = "Unknown Beverage";

    public function getDescription()
    {
        return $this->description;
    }

    public abstract function cost();
}
