<?php

namespace PhpSorting\Algorithm;

use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

use function var_dump;


final class InsertionSortTest extends TestCase
{
    private ?InsertionSort $insertionSort = null;

    protected function setUp(): void
    {
        $this->insertionSort = new InsertionSort();
    }

    #[DataProviderExternal(SortingAlgorithmTestDataProvider::class, 'getUniqueDataset')]
    public function testSortWithUniqueDataset($dataset, $sortedDataset): void
    {
        self::assertEquals($sortedDataset, $this->insertionSort->sort($dataset));
    }

    #[DataProviderExternal(SortingAlgorithmTestDataProvider::class, 'getDatasetContainingDuplicates')]
    public function testSortDataset($dataset, $sortedDataset): void
    {
        self::assertEquals($sortedDataset, $this->insertionSort->sort($dataset));
    }

    public function testSortWithEmptyDataset(): void
    {
        self::assertEquals([], $this->insertionSort->sort([]));
    }
}
