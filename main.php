<?php

use Farm\ConsoleLogger;
use Farm\Farm;
use Farm\Reporters\FarmReporter;
use Farm\Services\ProductCollector;

require 'vendor/autoload.php';

$consoleLogger = new ConsoleLogger();
$reporter = new FarmReporter($consoleLogger);
$collector = new ProductCollector($consoleLogger);
$farm = new Farm($consoleLogger, $collector, $reporter);

$farm->addAnimals("Cow", 10);
$farm->addAnimals("Chicken", 20);

$farm->displayInfoAboutBarn();

$farm->weeklyCollectProduct();

$farm->displayInfoAboutCollectedProducts();

echo PHP_EOL . "Go to market and buy some animals" . PHP_EOL;

$farm->addAnimals("Cow", 1);
$farm->addAnimals("Chicken", 5);

$farm->displayInfoAboutBarn();

$farm->weeklyCollectProduct();

$farm->displayInfoAboutCollectedProducts();
