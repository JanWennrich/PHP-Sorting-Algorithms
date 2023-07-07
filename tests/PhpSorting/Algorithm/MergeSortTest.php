<?php

namespace PhpSorting\Algorithm;

use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

use function var_dump;


final class MergeSortTest extends TestCase
{
    private ?MergeSort $mergeSort = null;

    protected function setUp(): void
    {
        $this->mergeSort = new MergeSort();
    }

    #[DataProviderExternal(SortingAlgorithmTestDataProvider::class, 'getUniqueDataset')]
    public function testSortWithUniqueDataset($dataset, $sortedDataset): void
    {
        self::assertEquals($sortedDataset, $this->mergeSort->sort($dataset));
    }

    #[DataProviderExternal(SortingAlgorithmTestDataProvider::class, 'getDatasetContainingDuplicates')]
    public function testSortDataset($dataset, $sortedDataset): void
    {
        self::assertEquals($sortedDataset, $this->mergeSort->sort($dataset));
    }

    public function testSortWithEmptyDataset(): void
    {
        self::assertEquals([], $this->mergeSort->sort([]));
    }
}
