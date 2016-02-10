<?php

require_once __DIR__.'/../interfaces/quackInterface.php';

class QuackNormal implements QuackInterface
{
    public function quack() {
        echo "quack normal\n";
    }
}
