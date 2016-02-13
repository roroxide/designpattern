<?php

include_once __DIR__."/../abstracts/command.php";

class LightOffCommand implements Command
{
    var $device;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}
