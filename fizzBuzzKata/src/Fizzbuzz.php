<?php

namespace Deg540\PHPTestingBoilerplate;

class Fizzbuzz
{
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