<?php

include_once __DIR__."/waitress.php";

$menu1 = new PancakeHouseMenu();
$menu2 = new DinerMenu();

$waitress = new Waitress($menu1, $menu2);
$waitress->printAllMenus();
