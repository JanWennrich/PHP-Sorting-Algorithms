<?php

namespace PhpSorting\Algorithm;

use function dataset;
use function expect;
use function test;

dataset('allSortingAlgorithms', [
    new BubbleSort(),
    new InsertionSort(),
    new MergeSort(),
    new QuickSort()
]);

test(
    'SortingAlgorithm is handling empty array',
    function (SortingAlgorithm $sortingAlgorithm) {
        expect($sortingAlgorithm->sort([]))
            ->toEqual([]);
    }
)->with('allSortingAlgorithms');


test(
    'SortingAlgorithm is handling only negative numbers',
    function (SortingAlgorithm $sortingAlgorithm) {
        $negativeNumbers       = [-10, -4, -2, -20, -245, -3];
        $sortedNegativeNumbers = [-245, -20, -10, -4, -3, -2];

        expect($sortingAlgorithm->sort($negativeNumbers))
            ->toEqual($sortedNegativeNumbers);
    }
)->with('allSortingAlgorithms');


test(
    'SortingAlgorithm is handling only positive numbers',
    function (SortingAlgorithm $sortingAlgorithm) {
        $positiveNumbers       = [10, 4, 2, 20, 245, 3];
        $sortedPositiveNumbers = [2, 3, 4, 10, 20, 245];

        expect($sortingAlgorithm->sort($positiveNumbers))
            ->toEqual($sortedPositiveNumbers);
    }
)->with('allSortingAlgorithms');


test(
    'SortingAlgorithm is handling positive and negative numbers',
    function (SortingAlgorithm $sortingAlgorithm) {
        $numbers       = [10, 4, 2, 20, 245, 3, -10, -4, -2, -20, -245, -3];
        $sortedNumbers = [-245, -20, -10, -4, -3, -2, 2, 3, 4, 10, 20, 245];

        expect($sortingAlgorithm->sort($numbers))
            ->toEqual($sortedNumbers);
    }
)->with('allSortingAlgorithms');


test(
    'SortingAlgorithm is handling duplicate numbers',
    function (SortingAlgorithm $sortingAlgorithm) {
        $numbers       = [10, 2, 20, 245, 3, -10, -2, -20, -245, -3, 10, 2, 20, 245, 3, -10, -2, -20, -245, -3];
        $sortedNumbers = [-245, -245, -20, -20, -10, -10, -3, -3, -2, -2, 2, 2, 3, 3, 10, 10, 20, 20, 245, 245];

        expect($sortingAlgorithm->sort($numbers))
            ->toEqual($sortedNumbers);
    }
)->with('allSortingAlgorithms');
