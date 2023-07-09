<?php

namespace PhpSorting\Algorithm;

use PHPUnit\Framework\TestCase;

class BubbleSortTest extends AbstractSortingAlgorithmTest
{
    protected function setSortingAlgorithm(): void
    {
        $this->sortingAlgorithm = new BubbleSort();
    }

}
