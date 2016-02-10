<?php

include 'lib/black_duck.php';
$duck = new BlackDuck();
$duck->description();
$duck->fly();
$duck->quack();

include 'lib/rubber_duck.php';
$duck = new RubberDuck();
$duck->description();
$duck->fly();
$duck->quack();
