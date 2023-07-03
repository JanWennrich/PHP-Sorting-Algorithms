<?php

namespace PhpSorting;

use PhpSorting\Algorithm\SortingAlgorithm;

class Sorter
{
    public function __construct(private SortingAlgorithm $sortingAlgorithm)
    {
    }

    public function sort(array $dataset): array {
        return $this->sortingAlgorithm->sort($dataset);
    }
}