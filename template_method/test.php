<?php

include __DIR__."/tea.php";
include __DIR__."/coffee.php";
include __DIR__."/coffeeWithHook.php";

echo "Preparing Tea ..\n";
$tea = new Tea();
$tea->prepareRecipe();
echo "\n";

echo "Preparing Coffee ..\n";
$coffee = new Coffee();
$coffee->prepareRecipe();
echo "\n";

echo "Preparing Coffee with hook ..\n";
$coffee = new CoffeeWithHook();
$coffee->prepareRecipe();
echo "\n";
