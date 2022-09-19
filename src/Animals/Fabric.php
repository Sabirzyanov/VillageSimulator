<?php 

namespace Farm\Animals;

use Farm\Interfaces\Logger;
use FFI\Exception;

class Fabric
{
    static function createAnimal(string $animalType, Logger $logger)
    {
        $animal = null;

        switch ($animalType)
        {
            case "Cow":
                $animal = new Cow();
                break;
            case "Chicken":
                $animal = new Chicken();
                break;
            default:
                $logger->LogInfo("Incorrect animal type.");
                break;
        }

        return $animal !== null ? $animal : throw new Exception("Incorrect arguments");
    } 
}