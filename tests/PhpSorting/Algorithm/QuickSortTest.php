<?php

namespace PhpSorting\Algorithm;

class QuickSortTest extends AbstractSortingAlgorithmTest
{
    protected function setSortingAlgorithm(): void
    {
        $this->sortingAlgorithm = new QuickSort();
    }
}
