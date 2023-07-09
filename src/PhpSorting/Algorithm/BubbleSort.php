<?php

namespace PhpSorting\Algorithm;

class BubbleSort implements SortingAlgorithm
{
    public function sort(array $dataset): array
    {
        $datasetSize = count($dataset);

        for ($i = 0; $i < $datasetSize - 1; $i++) {
            for ($j = 0; $j < $datasetSize - $i - 1; $j++) {
                if ($dataset[$j] > $dataset[$j + 1]) {
                    $temp            = $dataset[$j];
                    $dataset[$j]     = $dataset[$j + 1];
                    $dataset[$j + 1] = $temp;
                }
            }
        }

        return $dataset;
    }
}
