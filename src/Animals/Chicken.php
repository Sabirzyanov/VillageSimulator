<?php

namespace Farm\Animals;

class Chicken extends Animal
{
    function __construct()
    {
        $this->PRODUCT_TYPE = "Egg";
        $this->animalID = parent::$id++;
    }

    public function CollectProducts() : int
    {
        return rand(0, 1);
    }

    public function getAnimalName() : string
    {
        return $this->Name;
    }
}