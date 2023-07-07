<?php

use PhpSorting\Sorter;

require_once 'vendor/autoload.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/config/config.php');

$container = $containerBuilder->build();

$dataset = [3, 2, 1];

$Sorter = $container->get(Sorter::class);

$sortedDataset = $Sorter->sort($dataset);

print_r($sortedDataset);
