<?php

namespace PhpSorting;

use PhpSorting\Algorithm\SortingAlgorithm;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

use const PHP_EOL;

class SorterTest extends TestCase
{
    public function testSortOutputWithStub()
    {
        $sortingAlgorithmStub = $this->createStub(SortingAlgorithm::class);
        $stubReturnValue      = [1, 2, 3];

        $sortingAlgorithmStub->method('sort')->willReturn($stubReturnValue);

        $Sorter = new Sorter($sortingAlgorithmStub);

        $this->expectOutputString("Sorting via " . $sortingAlgorithmStub::class . PHP_EOL);

        assertEquals($stubReturnValue, $Sorter->sort([]));
    }

    public function testSortCallsSortingAlgorithmsSortMethod()
    {
        $testData = [3,2,1];

        $sortingAlgorithmMock = $this->createMock(SortingAlgorithm::class);
        $sortingAlgorithmMock->expects($this->once())->method('sort')->with($testData);

        $Sorter = new Sorter($sortingAlgorithmMock);
        $Sorter->sort($testData);
    }
}
