<?php

include_once __DIR__."/turkeyAdapter.php";
include_once __DIR__."/mallardDuck.php";
include_once __DIR__."/wildTurkey.php";

$duck = new MallardDuck();
$turkey = new wildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "The Turkey says ...\n";
echo $turkey->gobble();
echo $turkey->fly();

echo "The Dock says ...\n";
echo $duck->quack();
echo $duck->fly();

echo "The Adapter Turkey says ...\n";
echo $turkeyAdapter->quack();
echo $turkeyAdapter->fly();

