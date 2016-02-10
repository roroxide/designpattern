<?php

require_once __dir__.'/../interfaces/quackInterface.php';

class QuackNoSound implements QuackInterface
{
    public function quack() {
        echo "quack silent\n";
    }
}
