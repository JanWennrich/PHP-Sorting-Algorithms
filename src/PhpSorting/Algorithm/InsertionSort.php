<?php

namespace PhpSorting\Algorithm;

use function array_shift;

class InsertionSort implements SortingAlgorithm
{
    public function sort(array $dataset): array
    {
        $result = [];

        while ($datasetValue = array_shift($dataset)) {
            $insertPosition = 0;

            foreach ($result as $position => $resultValue) {
                if ($resultValue < $datasetValue) {
                    $insertPosition++;
                    continue;
                }

                break;
            }

            array_splice(
                $result,
                $insertPosition,
                0,
                [$datasetValue]
            );
        }

        return $result;
    }
}