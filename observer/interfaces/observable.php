<?php

interface Observable
{
    public function addObserver(Observer $o);
    public function removeObserver(Observer $o);
    public function notifyObservers();

    public function setChanged();
}
