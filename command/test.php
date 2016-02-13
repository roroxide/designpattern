<?php

include_once __DIR__."/remoteControl.php";
include_once __DIR__."/devices/light.php";
include_once __DIR__."/commands/lightOnCommand.php";
include_once __DIR__."/commands/lightOffCommand.php";

$device = new RemoteControl();

$light = new Light("Bathroom");
$lightOnCommand = new lightOnCommand($light);
$lightOffCommand = new lightOffCommand($light);
$device->setCommand(1, $lightOnCommand, $lightOffCommand);

$light = new Light("Kitchen");
$lightOnCommand = new lightOnCommand($light);
$lightOffCommand = new lightOffCommand($light);
$device->setCommand(2, $lightOnCommand, $lightOffCommand);

$device->onButtonWasPushed(1);
$device->onButtonWasPushed(2);
$device->undoButtonWasPushed();
$device->undoButtonWasPushed();

