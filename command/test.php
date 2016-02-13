<?php

include_once __DIR__."/remoteControl.php";
include_once __DIR__."/devices/light.php";
include_once __DIR__."/commands/lightOn.php";
include_once __DIR__."/commands/lightOff.php";

$device = new RemoteControl();

$light = new Light("Bathroom");
$lightOnCommand = new lightOn($light);
$lightOffCommand = new lightOff($light);
$device->setCommand(1, $lightOnCommand, $lightOffCommand);

$light = new Light("Kitchen");
$lightOnCommand = new lightOn($light);
$lightOffCommand = new lightOff($light);
$device->setCommand(2, $lightOnCommand, $lightOffCommand);

$device->onButtonWasPressed(1);
$device->onButtonWasPressed(2);
$device->offButtonWasPressed(1);
$device->offButtonWasPressed(2);

