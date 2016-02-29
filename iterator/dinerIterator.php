<?php

include_once __DIR__."/menuIterator.php";

class DinerIterator implements menuIterator
{
    var $index;
    var $menu;

    public function __construct($dinerMenu)
    {
        $this->menu = $dinerMenu;
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
