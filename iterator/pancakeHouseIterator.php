<?php

include_once __DIR__."/menuIterator.php";

class PancakeHouseIterator implements menuIterator
{
    var $index;
    var $menu;

    public function __construct($pancakeHouseMenu)
    {
        $this->menu = $pancakeHouseMenu;
        $this->index = 0;
    }

    public function hasNext()
    {
        return isset($this->menu[$this->index]);
    }

    public function getNext()
    {
        $value = null;
        if ( isset($this->menu[$this->index]) ) {
            $value = $this->menu[$this->index];
            $this->index++;
        }
        return $value;
    }
}
