<?php

use PhpSorting\Algorithm\MergeSort;

it('is sorting correctly', function (
    array $unsortedNumbers,
    array $sortedNumbers
) {
    expect((new MergeSort())->sort($unsortedNumbers))
        ->toEqual($sortedNumbers);
})->with('numbersToSort');

