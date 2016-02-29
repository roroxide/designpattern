<?php

include_once __DIR__."/menu.php";
include_once __DIR__."/menuItem.php";
include_once __DIR__."/dinerIterator.php";

class DinerMenu implements Menu
{
    var $menuItems;
    var $maxItems = 5;

    public function __construct()
    {
        $this->menuItems = array();

        $this->addItem('dinner1', 2.99);
        $this->addItem('dinner2', 2.79);
        $this->addItem('dinner3', 3.59);
        $this->addItem('dinner4', 3.49);
    }

    public function addItem($name, $price)
    {
        if ( count($this->menuItems) < $this->maxItems ) {
            $this->menuItems[] = new MenuItem($name, $price);
        }
    }

    public function createIterator()
    {
        return new DinerIterator($this->menuItems);
    }
}
