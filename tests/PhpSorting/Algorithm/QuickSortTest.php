<?php

use PhpSorting\Algorithm\QuickSort;

it('is sorting correctly', function (
    array $unsortedNumbers,
    array $sortedNumbers
) {
    expect((new QuickSort())->sort($unsortedNumbers))
        ->toEqual($sortedNumbers);
})->with('numbersToSort');

