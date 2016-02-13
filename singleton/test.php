<?php

include __DIR__."/singleton.php";

$o = SingletonType::getInstance();
$o->doSomething();
