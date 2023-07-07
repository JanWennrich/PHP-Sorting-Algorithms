<?php

namespace PhpSorting;

use PhpSorting\Algorithm\SortingAlgorithm;

class Sorter
{
    public function __construct(private SortingAlgorithm $sortingAlgorithm)
    {
    }

    public function sort(array $dataset): array {
        echo "Sorting via " . $this->sortingAlgorithm::class . PHP_EOL;

        return $this->sortingAlgorithm->sort($dataset);
    }
}