<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 3, 5),
            'wrong sum'
        );

        $this->assertEquals(
            27,
            $this->calc->pow(3, 3),
            'wrong pow'
        );

    }

    protected function tearDown(): void
    {
    }
}
