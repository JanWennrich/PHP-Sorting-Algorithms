<?php

namespace PhpSorting\Algorithm;

use Generator;

use function array_merge;
use function array_unique;
use function iterator_to_array;
use function rand;
use function sort;

final class SortingAlgorithmTestDataProvider
{
    public static function getUniqueDataset(): Generator
    {
        for ($i = 0; $i < 10; $i++) {
            $array = array_unique(self::getRandomArray());

            $sortedArray = $array;
            sort($sortedArray);

            yield [$array, $sortedArray];
            return;
        }
    }

    public static function getDatasetContainingDuplicates(): Generator
    {
        for ($i = 0; $i < 10; $i++) {
            $array = self::getRandomArray();

            $arrayWithDuplicates = array_merge($array, $array);

            $sortedArrayWithDuplicates = $arrayWithDuplicates;
            sort($sortedArrayWithDuplicates);

            yield [$arrayWithDuplicates, $sortedArrayWithDuplicates];
        }
    }

    protected static function getRandomArray(): array
    {
        $arraySize = rand(10, 100);

        $array = [];

        for ($i = 0; $i < $arraySize; $i++) {
            $array[] = rand(1, 1000);
        }

        return $array;
    }
}