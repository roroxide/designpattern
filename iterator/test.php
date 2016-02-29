<?php

include __DIR__."/pancakeHouseIterator.php";
include __DIR__."/pancakeHouseMenu.php";

$pancakeHouseMenu = new PancakeHouseMenu();
$phIterator = new pancakeHouseIterator($pancakeHouseMenu);

while ( $phIterator->hasNext() ) {
    echo $phIterator->getNext()."\n";
}
