<?php

include __DIR__."/tea.php";
include __DIR__."/coffee.php";

echo "Preparing Tea ..\n";
$tea = new Tea();
$tea->prepareRecipe();
echo "\n";

echo "Preparing Coffee ..\n";
$coffee = new Coffee();
$coffee->prepareRecipe();

