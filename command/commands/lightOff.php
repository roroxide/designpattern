<?php

include_once __DIR__."/../abstracts/command.php";

class LightOff implements Command
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
}
