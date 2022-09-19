<?php

namespace Farm;

use Farm\Animals\Animal;
use Farm\Animals\Fabric;
use Farm\Interfaces\Logger;
use Farm\Reporters\FarmReporter;
use Farm\Services\Collector;

class Farm
{
    private $barn = [];
    public $collectedProducts = [];

    private $_collector;
    private FarmReporter $_reporter;

    private $logger;

    public function __construct(Logger $logger, Collector $collector, FarmReporter $reporter)
    {
       $this->logger = $logger;
       $this->_reporter = $reporter;
       $this->_collector = $collector;
    }

    public function addAnimal(Animal $animal)
    {
        $this->barn[] = $animal;
        $this->logger->LogInfo("{$animal->getNameOfClass()} added on our farm.");
    }

    public function addAnimals(string $animalType, int $count)
    {
        for ($i = 0; $i < $count; $i++)
        {
            $this->addAnimal(Fabric::createAnimal($animalType, $this->logger));
        }
    }

    public function getBarn()
    {
        return $this->barn;
    }

    public function filterBarnByCategory() : array
    {
        $filteredList = [];
        foreach ($this->barn as $id => $animal)
        {
            if (!array_key_exists($animal->getNameOfClass(), $filteredList))
            {
                $filteredList[$animal->getNameOfClass()] = 0;
            }

            $filteredList[$animal->getNameOfClass()] += 1;
        }

        return $filteredList;
    }

    public function displayInfoAboutBarn()
    {
        $this->_reporter->displayInfoAboutFarm($this);
    }

    public function displayInfoAboutCollectedProducts()
    {
        $this->_reporter->displayInfoAboutCollectedProducts($this->collectedProducts);
    }

    public function collectProducts()
    {
        $this->collectedProducts = array_merge($this->collectedProducts, $this->_collector->collectProduct($this));
    }

    public function weeklyCollectProduct()
    {
        $this->collectedProducts = [];
        for ($i = 0; $i < 7; $i++)
        {
            $this->collectProducts();
        }
    }
}