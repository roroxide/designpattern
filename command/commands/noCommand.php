<?php

include __DIR__."/../abstracts/command.php";

class NoCommand implements Command
{
    public function execute() {}
    public function undo() {}
}
