<?php

namespace PhpSorting\Algorithm;

final class InsertionSortTest extends AbstractSortingAlgorithmTest
{
    protected function setSortingAlgorithm(): void
    {
        $this->sortingAlgorithm = new InsertionSort();
    }
}
