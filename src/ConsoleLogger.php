<?php

namespace Farm;


class ConsoleLogger implements Interfaces\Logger
{
    public function LogInfo(string $msg) : void
    {
        echo PHP_EOL . $msg . PHP_EOL;
    }
}