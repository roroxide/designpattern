<?php

include_once __DIR__."/pancakeHouseIterator.php";
include_once __DIR__."/pancakeHouseMenu.php";
include_once __DIR__."/dinerIterator.php";
include_once __DIR__."/dinerMenu.php";

class Waitress
{
    var $pancakeHouseMenu;
    var $dinerMenu;

    public function __construct($pancakeHouseMenu, $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printAllMenus()
    {
        $breakfastIterator = $this->pancakeHouseMenu->createIterator();
        $lunchIterator = $this->dinerMenu->createIterator();
        echo "Menu breakfast\n--------------------\n";
        $this->printMenu($breakfastIterator);
        echo "\nMenu lunch\n--------------------\n";
        $this->printMenu($lunchIterator);
    }

    public function printMenu($iterator)
    {
        while( $iterator->hasNext() ) {
            echo $iterator->getNext()."\n";
        }
    }
}
