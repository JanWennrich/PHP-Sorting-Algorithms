<?php

namespace PhpSorting\Algorithm;

class BubbleSortTest extends AbstractSortingAlgorithmTest
{
    protected function setSortingAlgorithm(): void
    {
        $this->sortingAlgorithm = new BubbleSort();
    }
}
