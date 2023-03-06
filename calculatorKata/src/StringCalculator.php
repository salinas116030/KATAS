<?php

namespace Deg540\StringCalculatorPHP;

class StringCalculator
{
    // TODO: String Calculator Kata
    public function add(string $chainParams): int
    {
        if (empty($chainParams)) {
            return 0;
        }
        return (int)$chainParams;
    }
}
