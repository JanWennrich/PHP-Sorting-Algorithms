<?php

namespace PhpSorting\Algorithm;

class TestSort implements SortingAlgorithm
{
    public function sort(array $dataset): array
    {
        $InsertionSort = new InsertionSort();

        echo "Executing " . $InsertionSort::class;

        return $InsertionSort->sort($dataset);
    }
}