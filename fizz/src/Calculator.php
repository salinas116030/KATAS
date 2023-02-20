<?php

namespace Deg540\PHPTestingBoilerplate;

class Calculator
{
    function add(int $number1, int $number2): int
    {
        return $number1+$number2;
    }

    function multiply(int $number1, int $number2): int
    {
        return $number1*$number2;
    }

    function fizzKata($number): string
    {
        if($number%3==0 && $number%5==0) {
            return 'fizzBuzz';
        } else if($number%5==0) {
            return 'buzz';
        }
        return 'fizz';
    }
}