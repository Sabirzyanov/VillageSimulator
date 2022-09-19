<?php

namespace Farm\Reporters;

use Farm\Farm;
use Farm\Interfaces\Logger;

class FarmReporter implements Reporter
{
    private Logger $_logger;

    function __construct(Logger $logger)
    {
        $this->_logger = $logger;
    }

    public function report(int $count, string $objectType) : string
    {
        $this->_logger->LogInfo("Total {$objectType} : {$count} count");
        return "Total {$objectType} : {$count} count";
    }

    public function displayInfoAboutFarm(Farm $farm)
    {
        $filteredList = $farm->filterBarnByCategory();

        foreach ($filteredList as $type => $count)
        {
            $this->report($count, $type);
        }
    }
    
    public function displayInfoAboutCollectedProducts($collectedProducts)
    {
        foreach ($collectedProducts as $type => $count)
        {
            $this->report($count, $type);
        }
    }
}