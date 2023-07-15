<?php

namespace PhpSorting;

use Mockery;
use PhpSorting\Algorithm\SortingAlgorithm;

use function expect;
use function it;

it('returns sorted dataset', function () {
    $unsortedData = [3, 2, 1];
    $sortedData   = [1, 2, 3];

    $sortingAlgorithmMock = Mockery::mock(SortingAlgorithm::class);
    $sortingAlgorithmMock->shouldReceive('sort')
        ->once()
        ->with($unsortedData)
        ->andReturn($sortedData);

    $Sorter = new Sorter($sortingAlgorithmMock);

    expect($Sorter->sort($unsortedData))->toBe($sortedData);
});
