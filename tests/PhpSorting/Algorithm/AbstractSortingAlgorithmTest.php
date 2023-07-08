<?php

namespace PhpSorting\Algorithm;

use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;

abstract class AbstractSortingAlgorithmTest extends TestCase
{
    protected ?SortingAlgorithm $sortingAlgorithm = null;

    protected abstract function setSortingAlgorithm(): void;

    protected function setUp(): void
    {
        $this->setSortingAlgorithm();
    }

    #[DataProviderExternal(SortingAlgorithmTestDataProvider::class, 'getUniqueDataset')]
    public function testSortWithUniqueDataset($dataset, $sortedDataset): void
    {
        self::assertEquals(
            $sortedDataset,
            $this->sortingAlgorithm->sort($dataset)
        );
    }

    #[DataProviderExternal(SortingAlgorithmTestDataProvider::class, 'getDatasetContainingDuplicates')]
    public function testSortDataset($dataset, $sortedDataset): void
    {
        self::assertEquals(
            $sortedDataset,
            $this->sortingAlgorithm->sort($dataset)
        );
    }

    public function testSortWithEmptyDataset(): void
    {
        self::assertEquals(
            [],
            $this->sortingAlgorithm->sort([])
        );
    }
}
