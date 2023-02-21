<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Fizzbuzz;
use PHPUnit\Framework\TestCase;

final class fizzbuzzTest extends TestCase
{
    /**
     * @test
     */
    public function Should_return_three_when_sum_is_one_plus_two()
    {
        $calculator = new Fizzbuzz();

        $result = $calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }

    /**
     * @test
     */
    public function Should_return_two_when_multiplication_is_one_multiplied_by_two()
    {
        $calculator = new Fizzbuzz();

        $result = $calculator->multiply(1, 2);

        $this->assertEquals(2, $result);
    }

    /**
     * @test
     */
    public function Should_return_papaya() {
        $this->assertEquals('papaya','papaya');
        //comentario
    }

    /**
     * @test
     */
    public function Should_return_fizz() {
        $this->assertEquals('fizz','fizz');
        //comentario  en tu corazon

    }

    /**
     * @test
     */
    public function  Should_return_fizz_when_number_multiple_of_three() {
        $calculator = new Fizzbuzz();
        $result = $calculator->fizzKata(9);
        $this->assertEquals('fizz',$result);
    }

    /**
     * @test
     */
    public function Should_return_buzz() {
        $this->assertEquals('buzz','buzz');
    }

    /**
     * @test
     */
    public function Should_return_buzz_when_number_multiple_of_five() {
        $calculator = new Fizzbuzz();
        $result = $calculator->fizzKata(10);
        $this->assertEquals('buzz',$result);
    }

    /**
     * @test
     */
    public function Should_return_fizzBuzz(){
        $this->assertEquals('fizzBuzz','fizzBuzz');
    }

    /**
     * @test
     */
    public function Should_return_fizzBuzz_when_number_multiple_of_three_and_five(){
        $calculator = new Fizzbuzz();
        $result = $calculator->fizzKata(15);
        $this->assertEquals('fizzBuzz',$result);
    }


}
