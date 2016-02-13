<?php

class RemoteControl
{
    var $onButtons;
    var $offButtons;

    public function __construct()
    {
        $this->onButtons = array ();
        $this->offButtons = array();
    }

    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onButtons[$slot] = $onCommand;
        $this->offButtons[$slot] = $offCommand;
    }

    public function onButtonWasPressed($slot)
    {
        $this->onButtons[$slot]->execute();
    }

    public function offButtonWasPressed($slot)
    {
        $this->offButtons[$slot]->execute();
    }
}

