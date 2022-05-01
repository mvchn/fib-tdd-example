<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    function fibonacci(int $n)
    {
        return 0;
    }

    public function testFibonacci() : void
    {
        $this->assertEquals(0, $this->fibonacci(0));
        $this->assertEquals(1, $this->fibonacci(1));
    }
}
