<?php

include_once __DIR__.'/quack_behaviors/quackNoSound.php';
include_once __DIR__.'/quack_behaviors/quackNormal.php';
include_once __DIR__.'/fly_behaviors/flyNormal.php';
include_once __DIR__.'/fly_behaviors/flyNoFly.php';
include_once __DIR__.'/fly_behaviors/flyRocket.php';

class Duck {
    var $flyBehavior;
    var $quackBehavior;

    function _construct()
    {
        $this->flyBehavior = new flyNormal();
        $this->quackBehavior = new quackNormal();
    }

    public function setFlyBehavior(FlyInterface $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackInterface $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function quack()
    {
        $this->quackBehavior->quack();
    }

    public function fly()
    {
        $this->flyBehavior->fly();
    }

    public function description()
    {
        echo "";
    }
}
