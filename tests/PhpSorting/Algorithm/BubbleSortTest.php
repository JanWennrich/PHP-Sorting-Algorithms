<?php

use PhpSorting\Algorithm\BubbleSort;

it('is sorting correctly', function (
    array $unsortedNumbers,
    array $sortedNumbers
) {
    expect((new BubbleSort())->sort($unsortedNumbers))
        ->toEqual($sortedNumbers);
})->with('numbersToSort');

