<?php

abstract class CoffeineBeverageWithHook
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ( $this->customerWantsCondiments() ) {
            $this->addCondiments();
        }
    }

    public abstract function brew();

    public abstract function addCondiments();

    public function boilWater()
    {
        echo "Boil Water\n";
    }

    public function pourInCup()
    {
        echo "Pour In Cup\n";
    }

    public function customerWantsCondiments()
    {
        return true;
    }
}

