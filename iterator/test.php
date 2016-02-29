<?php

include __DIR__."/pancakeHouseIterator.php";
include __DIR__."/pancakeHouseMenu.php";

$menu = new PancakeHouseMenu;
$iterator = $menu->createIterator();

while ( $iterator->hasNext() ) {
    echo $iterator->getNext()."\n";
}
