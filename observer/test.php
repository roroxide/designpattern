<?php

include __DIR__.'/observers/observer1.php';
include __DIR__.'/observers/observer2.php';
include __DIR__.'/observers/observer3.php';
include __DIR__.'/observant/subject.php';

$o1 = new Observer1();
$o2 = new Observer2();
$o3 = new Observer3();
$o4 = new Observer1();

$s = new Subject();

$s->addObserver($o1);
$s->addObserver($o2);
$s->refreshData(1,2,3);
$s->removeObserver($o2);
$s->addObserver($o3);
$s->addObserver($o4);
$s->refreshData(4,5,6);
