<?php

namespace Farm\Reporters;

interface Reporter
{
    public function report(int $count, string $objectType) : string;
}