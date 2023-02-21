<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Fizzbuzz;
use PHPUnit\Framework\TestCase;

final class fizzbuzzTest extends TestCase
{
    private FizzBuzz $fizzbuzz;
    //Pre-testing: pre-uploading
    protected function setUp():void
    {
        parent::setUp();
        $this->fizzbuzz = new FizzBuzz();
    }

    /**
     * @test
     */
    public function Should_return_fizz() {
        $this->assertEquals('fizz','fizz');
    }

    /**
     * @test
     */
    public function  Should_return_fizz_when_number_multiple_of_three() {
        $result = $this->fizzbuzz->fizzKata(9);

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
        $result = $this->fizzbuzz->fizzKata(10);

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
        $result = $this->fizzbuzz->fizzKata(15);

        $this->assertEquals('fizzBuzz',$result);
    }


}
