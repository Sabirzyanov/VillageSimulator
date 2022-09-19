<?php

namespace Farm\Animals;

class Cow extends Animal
{
    function __construct()
    {
        $this->PRODUCT_TYPE = "Milk";
        $this->animalID = parent::$id++;
    }

    public function collectProducts() : int
    {
        return rand(8, 12);
    }
}