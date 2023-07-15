<?php

use PhpSorting\Algorithm\InsertionSort;

it('is sorting correctly', function (
    array $unsortedNumbers,
    array $sortedNumbers
) {
    expect((new InsertionSort())->sort($unsortedNumbers))
        ->toEqual($sortedNumbers);
})->with('numbersToSort');

