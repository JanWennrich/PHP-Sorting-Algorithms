<?php

namespace PhpSorting\Algorithm;

final class MergeSortTest extends AbstractSortingAlgorithmTest
{
    protected function setSortingAlgorithm(): void
    {
        $this->sortingAlgorithm = new MergeSort();
    }
}
