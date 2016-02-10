<?php

include_once __DIR__.'/../interfaces/observable.php'; 

class Subject implements Observable
{
    private $changed = false;

    public $a = '';
    public $b = '';
    public $c = '';

    public function __construct()
    {
        $this->changed = false;
    }

    public function addObserver(Observer $o)
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o)
    {
        foreach ($this->observers as $index => $ob) {
            if ($ob == $o) {
                unset($this->observers[$index]);
            }
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $ob) {
            $ob->update($this->a, $this->b, $this->c);
        }
        $this->changed =false;
    }

    public function refreshData($a, $b, $c)
    {
        $this->setA($a);
        $this->setB($b);
        $this->setC($c);
        $this->setChanged();
        $this->notifyObservers();
    }

    public function setChanged()
    {
        $this->changed = true;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function setC($c)
    {
        $this->c = $c;
    }

}
