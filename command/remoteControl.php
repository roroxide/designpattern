<?php

include __DIR__."/commands/noCommand.php";

class RemoteControl
{
    var $onButtons;
    var $offButtons;
    var $undoCommand;

    public function __construct()
    {
        $this->onButtons = array ();
        $this->offButtons = array();

        $noCommand = new NoCommand();
        for ($i=0; $i<7; $i++) {
            $this->onButtons[$i] = $noCommand;
            $this->offButtons[$i] = $noCommand;
        }
        $this->undoCommand = $noCommand;
    }

    public function setCommand($slot, Command $onCommand, Command $offCommand)
    {
        $this->onButtons[$slot] = $onCommand;
        $this->offButtons[$slot] = $offCommand;
    }

    public function onButtonWasPushed($slot)
    {
        $this->onButtons[$slot]->execute();
        $this->undoCommand = $this->onButtons[$slot];
    }

    public function offButtonWasPushed($slot)
    {
        $this->offButtons[$slot]->execute();
        $this->undoCommand = $this->offButtons[$slot];
    }

    public function undoButtonWasPushed()
    {
        $this->undoCommand->undo();
        $this->undoCommand = new NoCommand();
    }
}

