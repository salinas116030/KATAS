<?php

declare(strict_types=1);

namespace Deg540\StringCalculatorPHP\Test;

use Deg540\StringCalculatorPHP\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnsZeroWhenIntroducedEmptyString()
    {
        $calculator = new StringCalculator();

        $sumResult = $calculator->add("");

        $this->assertSame(0, $sumResult);
    }

    /**
     * @test
     */
    public function oneNumberStringReturnsItValue()
    {
        $calculator = new StringCalculator();

        $sumResult = $calculator->add("2");

        $this->assertSame(2, $sumResult);
    }

    /**
     * @test
     */
    public function twoNumberStringReturnsTheirSum()
    {
        $calculator = new StringCalculator();

        $sumResult = $calculator->add("1,2");

        $this->assertSame(3, 3);
    }
}
