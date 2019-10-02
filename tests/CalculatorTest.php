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

        $this->assertEquals(
            0,
            $this->calc->minus(3, 3),
            'wrong minus'
        );

       $this->assertIsFloat(
            $this->calc->minus(3, 3),
            'wrong minus'
       );



        $this->assertEquals(
            1,
            $this->calc->divide(3, 3),
            'wrong divide'
        );

        $this->assertEquals(
            9,
            $this->calc->multiply(3, 3),
            'wrong multiply'
        );

        $this->assertEquals(
            1,
            $this->calc->per(10, 3),
            'wrong per'
        );

        $this->assertTrue(
            $this->calc->equality(3, 3),
            'wrong equality'
        );

        $this->assertTrue(
            $this->calc->more(5, 3),
            'wrong more'
        );

        $this->assertTrue(
            $this->calc->smaller(1, 3),
            'wrong smaller'
        );

        $this->assertEquals(
            [1, 2, 3, 4],
            $this->calc->sortArray([4, 3, 2, 1]),
            'wrong sortArray'
        );

        $this->assertEquals(
            [1, 2, 3, 4],
            $this->calc->arrayReverse([4, 3, 2, 1]),
            'wrong arrayReverse'
        );




    }

    protected function tearDown(): void
    {
    }
}
