<?php

namespace PhpSorting\Algorithm;

class QuickSort implements SortingAlgorithm
{
    public function sort(array $dataset): array
    {
        $this->quicksort($dataset, 0, count($dataset) - 1);

        return $dataset;
    }

    protected function quicksort(array &$array, $low, $high): void
    {
        if ($low >= $high || $low < 0) {
            return;
        }

        $pivotIndex = $this->partition($array, $low, $high);

        $this->quicksort($array, $low, $pivotIndex - 1);
        $this->quicksort($array, $pivotIndex + 1, $high);
    }

    protected function partition(array &$array, $low, $high): int
    {
        $pivot = $array[$high];

        $i = $low - 1;

        for ($j = $low; $j <= $high - 1; $j++) {
            if ($array[$j] <= $pivot) {
                $i = $i + 1;

                $this->swap($array, $i, $j);
            }
        }

        $i = $i + 1;

        $this->swap($array, $i, $high);

        return $i;
    }

    protected function swap(array &$array, int $indexToSwapA, int $indexToSwapB): void
    {
        $temp = $array[$indexToSwapA];

        $array[$indexToSwapA] = $array[$indexToSwapB];
        $array[$indexToSwapB] = $temp;
    }
}