<?php

namespace Farm\Services;

use Farm\Animals\Animal;
use Farm\Farm;

interface Collector
{
    public function collectProduct(Farm $farm);
}