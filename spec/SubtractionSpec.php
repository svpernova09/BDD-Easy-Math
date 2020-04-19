<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Subtraction;

class SubtractionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Subtraction::class);
    }

    function it_should_add_two_numbers_and_return()
    {
        $this->subtract(3.14, 6.28)->shouldReturn(-3.14);
        $this->subtract(0, 1)->shouldReturn(-1);
        $this->subtract(1, 0)->shouldReturn(1);
        $this->subtract(1, 1)->shouldReturn(0);
        $this->subtract(2674, 1337)->shouldReturn(1337);
    }

    function it_should_take_multiple_numbers_and_return_sub()
    {
        $this->sub(3.14, 6.28)->shouldReturn(-3.14);
        $this->sub(0, 1)->shouldReturn(-1);
        $this->sub(1, 0)->shouldReturn(1);
        $this->sub(1, 1)->shouldReturn(0);
        $this->sub(2674, 1337)->shouldReturn(1337);
        $this->sub(51.42, 1337, 3.14, 42)->shouldReturn(-1330.72);
        $this->sub(4, -10, 10, 8, -2, 5, 35)->shouldReturn(-42);
        $this->sub(0, 0, 0)->shouldReturn(0);
        $this->sub(1, 0)->shouldReturn(1);
        $this->sub(0, 1)->shouldReturn(-1);
        $this->sub(1, 1)->shouldReturn(0);
        $this->sub(2674, 1337)->shouldReturn(1337);
    }
}