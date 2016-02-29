<?php

class MenuItem
{
    var $name;
    var $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function __toString()
    {
        return $this->name.' : '.$this->price;
    }
}
