<?php

class Light
{
    var $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function on()
    {
        echo "$this->name Light on\n";
    }

    public function off()
    {
        echo "$this->name Light off\n";
    }
}
