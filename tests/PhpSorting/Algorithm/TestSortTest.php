<?php

namespace PhpSorting\Algorithm;

use Mockery;
use PHPUnit\Framework\Attributes\PreserveGlobalState;
use PHPUnit\Framework\Attributes\RunTestsInSeparateProcesses;
use PHPUnit\Framework\TestCase;

#[RunTestsInSeparateProcesses]
#[PreserveGlobalState(false)]
class TestSortTest extends TestCase
{
    use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    public function testSomething()
    {
        $expectedResult = [1, 1, 1];

        $mock = Mockery::mock('overload:' . InsertionSort::class);
        $mock->shouldReceive('sort')
            ->once()
            ->andReturn($expectedResult);

        $testSort = new TestSort();
        $result   = $testSort->sort([]);

        $this->assertEquals($expectedResult, $result);
    }
}
