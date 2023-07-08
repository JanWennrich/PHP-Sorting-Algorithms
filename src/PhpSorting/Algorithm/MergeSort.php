<?php

namespace PhpSorting\Algorithm;

use function array_chunk;
use function array_merge;
use function array_shift;
use function count;

class MergeSort implements SortingAlgorithm
{
    public function sort(array $dataset): array
    {
        $datasetLength = count($dataset);

        if ($datasetLength <= 1) {
            return $dataset;
        }

        $splitDataset = array_chunk($dataset, ceil($datasetLength / 2));

        $leftDataset  = static::sort($splitDataset[0]);
        $rightDataset = static::sort($splitDataset[1]);

        return static::mergeDatasets($leftDataset, $rightDataset);
    }

    protected function mergeDatasets(array $leftDataset, array $rightDataset): array
    {
        $result = [];

        while (!empty($leftDataset) && !empty($rightDataset)) {
            if ($leftDataset[0] <= $rightDataset[0]) {
                $result[] = array_shift($leftDataset);
            } else {
                $result[] = array_shift($rightDataset);
            }
        }

        return array_merge($result, $leftDataset, $rightDataset);
    }
}