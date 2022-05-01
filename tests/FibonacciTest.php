<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    function fibonacci(int $n)
    {
        return 0;
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
    }
}
