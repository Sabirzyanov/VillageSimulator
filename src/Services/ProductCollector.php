<?php

namespace Farm\Services;

use Farm\Animals\Animal;
use Farm\Farm;
use Farm\Interfaces\Logger;

class ProductCollector implements Collector
{
    private Logger $_logger;


    public function __construct(Logger $logger)
    {
        $this->_logger = $logger;
    }

    public function collectProduct(Farm $farm)
    {
        $barn = $farm->getBarn();
        $collectedProducts = [];
        foreach ($barn as $id => $animal)
        {
            if (!array_key_exists($animal->getProductType(), $collectedProducts))
            {
                $collectedProducts[$animal->getProductType()] = null; 
            }
            $collectedProducts[$animal->getProductType()] += $animal->collectProducts();
        }

        return $collectedProducts;
    }
}