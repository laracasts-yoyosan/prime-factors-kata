<?php

namespace spec;

use PhpSpec\ObjectBehavior;

class PrimeFactorsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('PrimeFactors');
    }

    public function it_returns_an_empty_array_for_1()
    {
        $this->generate(1)->shouldReturn([]);
    }

    public function it_generates_2_for_2()
    {
        $this->generate(2)->shouldReturn([2]);
    }

    public function it_returns_3_for_3()
    {
        $this->generate(3)->shouldReturn([3]);
    }

    public function it_returns_2_2_for_4()
    {
        $this->generate(4)->shouldReturn([2, 2]);
    }

    public function it_returns_5_for_5()
    {
        $this->generate(5)->shouldReturn([5]);
    }

    public function it_returns_2_3_for_6()
    {
        $this->generate(6)->shouldReturn([2, 3]);
    }

    public function it_returns_2_2_2_for_8()
    {
        $this->generate(8)->shouldReturn([2, 2, 2]);
    }

    public function it_returns_3_3_for_9()
    {
        $this->generate(9)->shouldReturn([3, 3]);
    }

    public function it_returns_2_2_3_for_12()
    {
        $this->generate(12)->shouldReturn([2, 2, 3]);
    }

    public function it_returns_2_5_5_for_50()
    {
        $this->generate(50)->shouldReturn([2, 5, 5]);
    }

    public function it_returns_2_2_5_5_for_100()
    {
        $this->generate(100)->shouldReturn([2, 2, 5, 5]);
    }
}
