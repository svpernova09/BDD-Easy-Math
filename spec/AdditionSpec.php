<?php

namespace spec;

use Addition;
use PhpSpec\ObjectBehavior;

class AdditionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Addition::class);
    }

    function it_should_add_two_numbers_and_return_sum()
    {
        $this->add(3.14, 3.14)->shouldReturn(6.28);
        $this->add(0, 0, 0)->shouldReturn(0);
        $this->add(0, 1)->shouldReturn(1);
        $this->add(0, 1)->shouldReturn(1);
        $this->add(1, 1)->shouldReturn(2);
        $this->add(1337, 1337)->shouldReturn(2674);
    }

    function it_should_take_multiple_numbers_and_return_sum()
    {
        $this->sum(3.14, 3.14)->shouldReturn(6.28);
        $this->sum(3.14, 3.14, 3.14, 42)->shouldReturn(51.42);
        $this->sum(4, 10, 10, 8, 2, 5, 3)->shouldReturn(42);
        $this->sum(0, 0, 0)->shouldReturn(0);
        $this->sum(0, 1)->shouldReturn(1);
        $this->sum(0, 1)->shouldReturn(1);
        $this->sum(1, 1)->shouldReturn(2);
        $this->sum(1337, 1337)->shouldReturn(2674);
    }
}
