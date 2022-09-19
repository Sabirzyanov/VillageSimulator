<?php

namespace Farm\Animals;

abstract class Animal
{
    static int $id = 1;
    protected int $animalID;

    protected string $PRODUCT_TYPE;

    public abstract function collectProducts();

    public function getID() : int
    {
        return $this->id;
    }

    public function getNameOfClass() : string
    {
        $class = static::class;
        return substr($class, strrpos($class, '\\') + 1);;
    }

    public function __toString() 
    {
        return "Animal type: {$this->getNameOfClass()} || Product type: {$this->PRODUCT_TYPE}";
    }

    public function getProductType() : string
    {
        return $this->PRODUCT_TYPE;
    }
}