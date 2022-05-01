<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    function fibonacci(int $n)
    {
        if ($n === 0) {  return 0; }
        if ($n === 1) { return 1; }

        return $this->fibonacci($n - 1) + $this->fibonacci($n - 2);
    }

    /**
     * @dataProvider getData
     */
    public function testFibonacci($expected, $case) : void
    {
        $this->assertEquals($expected, $this->fibonacci($case));
    }

    public function getData()
    {
        yield 'zero' => [0, 0];
        yield 'one' => [1, 1];
        yield 'two' => [1, 2];
        yield 'three' => [2, 3];
        yield 'four' => [3, 4];
        yield 'five' => [5, 5];
        yield 'six' => [8, 6];
        yield 'seven' => [13, 7];
    }
}
