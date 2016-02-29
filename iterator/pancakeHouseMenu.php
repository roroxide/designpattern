<?php

include_once __DIR__."/menu.php";
include_once __DIR__."/menuItem.php";
include_once __DIR__."/pancakeHouseIterator.php";

class PancakeHouseMenu implements Menu
{
    var $menuItems;

    public function __construct()
    {
        $this->menuItems = array();

        $this->addItem('k&B', 2.99);
        $this->addItem('Regular', 2.79);
        $this->addItem('Waffles', 3.59);
        $this->addItem('Blueberry', 3.49);
    }

    public function addItem($name, $price)
    {
        $this->menuItems[] = new MenuItem($name, $price);
    }

    public function createIterator()
    {
        return new PancakeHouseIterator($this->menuItems);
    }
}
