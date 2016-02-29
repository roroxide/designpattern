<?php

include_once __DIR__."/menuIterator.php";

class PancakeHouseIterator implements menuIterator
{
    var $index;
    var $myArray;

    public function __construct($myArray)
    {
        $this->myArray = $myArray->getMenuItems();
        $this->index = 0;
    }

    public function hasNext()
    {
        return isset($this->myArray[$this->index]);
    }

    public function getNext()
    {
        $value = null;
        if ( isset($this->myArray[$this->index]) ) {
            $value = $this->myArray[$this->index];
            $this->index++;
        }
        return $value;
    }
}
