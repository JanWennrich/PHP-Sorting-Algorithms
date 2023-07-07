<?php

use PhpSorting\Algorithm\InsertionSort;
use PhpSorting\Algorithm\SortingAlgorithm;

use function DI\create;

return [
    SortingAlgorithm::class => create(InsertionSort::class)
];
